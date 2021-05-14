<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\{brands,
    categories,
    currency,
    discount_types,
    img,
    product_dtl,
    product_units,
    product_variant_group,
    product_variants,
    products,
    variants};
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::whereNotIn('status_id' , ['2'])->get();
        return view('back.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = new categories();
        $categories = $categories->where('status_id' , '!=' , '2')->get();
        $brands = new brands();
        $brands = $brands->where('status_id' , '!=' , '2')->get();
        $product_units = new product_units();
        $product_units = $product_units->where('status_id' , '!=' , '2')->get();
        $currency = new currency();
        $currency = $currency->where('status_id' , '!=' , '2')->get();
        $discount_typesModel = new discount_types();
        $discounts = $discount_typesModel->where('status_id' , '!=' , '2')->get();
        return view('back.product.create',compact('categories','brands','product_units','currency','discounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'category_id' => 'bail|required|numeric',
            'brand_id' => 'bail|required|numeric',
            'product_unit_id' => 'bail|required|numeric',
            'currency_id' => 'bail|required|numeric',
            'title' => 'required',
            'price' => [
                'bail',
                'required',
                'max:18',
                function($attribute, $value, $fail){
                    if(!priceFormat($value)){
                        $fail('The '.$attribute.' is invalid.');
                    }
                }
            ],
            'stock' => 'bail|required|numeric',
            'product_code' => 'bail|required|unique:product_dtl',
            'shipping_day' => 'bail|required|numeric',
        ];

        // kargo fiyatı boş değilse validate'e sokuyor
        if(isset($request->shipping_price)){
            $rules += [
                'shipping_price' => [
                    'bail',
                    'required',
                    'max:18',
                    function($attribute, $value, $fail){
                        if(!priceFormat($value)){
                            $fail('The '.$attribute.' is invalid.');
                        }
                    }
                ]];
        }
        $validator = Validator::make(
            $request->all(),
            $rules,
        );

        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        //dd($request);

        $model = new products();
        $product = $model->setProducts($request);
        if ($product)
            return view('back.product.upload',compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = categories::where('status_id' , '!=' , '2')->get();
        $brands = brands::where('status_id' , '!=' , '2')->get();
        $product_units = product_units::where('status_id' , '!=' , '2')->get();
        $currency = currency::where('status_id' , '!=' , '2')->get();
        $discounts = discount_types::select('discount_types.id','discount_types.title','product_discount.rate')
            ->leftJoin('product_discount', function($join) use ($id) {
                $join->on('discount_types.id', '=', 'product_discount.type_id')
                    ->where('product_discount.product_id' , '=' , $id);
            })
            ->where('discount_types.status_id' , '!=' , '2')
            ->get();
        $product = products::find($id);
        $pictures = $product->getProductDetail->image;
        return view('back.product.edit',compact('categories','brands','product_units','currency','discounts','product','pictures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'category_id' => 'bail|required|numeric',
            'brand_id' => 'bail|required|numeric',
            'product_unit_id' => 'bail|required|numeric',
            'currency_id' => 'bail|required|numeric',
            'title' => 'required',
            'price' => [
                'bail',
                'required',
                'max:18',
                function($attribute, $value, $fail){
                    if(!priceFormat($value)){
                        $fail('The '.$attribute.' is invalid.');
                    }
                }
            ],
            'stock' => 'bail|required|numeric',
            'product_code' => 'bail|required',
            'shipping_day' => 'bail|required|numeric',
        ];

        // güncellenen ürün haricinde bu ürün koduna ait başka ürün var mı diye Kontrol ediyor
        $productCodeUniqueControl = product_dtl::where('product_code' ,'=',$request->product_code)->whereNotIn('id',[$id])->count();

        if($productCodeUniqueControl > 0)
            $rules['product_code'] .= '|unique:product_dtl';


        // kargo fiyatı boş değilse validate'e sokuyor
        if(isset($request->shipping_price)){
            $rules += [
                'shipping_price' => [
                    'bail',
                    'required',
                    'max:18',
                    function($attribute, $value, $fail){
                        if(!priceFormat($value)){
                            $fail('The '.$attribute.' is invalid.');
                        }
                    }
                ]];
        }
        $validator = Validator::make(
            $request->all(),
            $rules,
        );

        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        $model = new products();
        $product = $model->updateProducts($request,$id);
        if ($product)
            return redirect()->route('admin.product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadPictures(Request $request)
    {
        $detail = new product_dtl();
        $detail->setProductImg($request);
    }

    public function addVariant($product_id)
    {
        $variants = product_variants::where('parent_id','0')->where('status_id' , '!=' , '2')->get();
        $product = products::findorfail($product_id);
        $product_variants = $product->getProductVariantDetail()->get();
        $avaibleVariants = $product->getProductVariantDetail('1');
        return view('back.product.variants.index',compact('product','variants','product_variants','avaibleVariants'));
    }

    public function setProductVariant(Request $request)
    {
        if($request->ajax()){

            $product_id = $request->product_id;
            $product = products::findorfail($request->product_id);
            $product_dtl = $product->getProductDetail;
            $data = $request->except('product_id','_token');

            DB::table('product_variant_group')->where([
                'product_id' => $product_id,
            ])
            ->update([
                'status_id' => '2'
            ]);
            // varyantları kartezyen çarpım'a soktuk
            $result = [];
            foreach ($data as $key => $values) {
                // If a sub-array is empty, it doesn't affect the cartesian product
                if (empty($values)) {
                    continue;
                }

                // Seeding the product array with the values from the first sub-array
                if (empty($result)) {
                    foreach ($values as $value) {
                        $result[] = [$key => $value];
                    }
                } else {
                    // Second and subsequent input sub-arrays work like this:
                    //   1. In each existing array inside $product, add an item with
                    //      key == $key and value == first item in input sub-array
                    //   2. Then, for each remaining item in current input sub-array,
                    //      add a copy of each existing array inside $product with
                    //      key == $key and value == first item of input sub-array

                    // Store all items to be added to $product here; adding them
                    // inside the foreach will result in an infinite loop
                    $append = [];

                    foreach ($result as &$product) {
                        // Do step 1 above. array_shift is not the most efficient, but
                        // it allows us to iterate over the rest of the items with a
                        // simple foreach, making the code short and easy to read.
                        $product[$key] = array_shift($values);

                        // $product is by reference (that's why the key we added above
                        // will appear in the end result), so make a copy of it here
                        $copy = $product;

                        // Do step 2 above.
                        foreach ($values as $item) {
                            $copy[$key] = $item;
                            $append[] = $copy;
                        }

                        // Undo the side effecst of array_shift
                        array_unshift($values, $product[$key]);
                    }

                    // Out of the foreach, we can add to $results now
                    $result = array_merge($result, $append);
                }
            }

            foreach ($result as $k => $r) {
                $id = product_variant_group::create([
                    'name' => '',
                    'product_id' => $product_id,
                    'status_id' => '1'
                ]);

                product_dtl::create([
                    'product_id' => $product_id,
                    'type_id' => '2',
                    'kdv' => '0',
                    'shipping_day' => '0',
                    'price' => '0',
                    'stock' => '0',
                    'shipping_price' => '0',
                    'product_code' => $product_dtl->product_code,
                    'variant_code' => 'VR_' . uniqid(),
                    'currency_id' => $product_dtl->currency_id,
                    'variant_id' => $id->id,
                ]);


                foreach ($r as $r2) {
                    DB::table('product_variant_group_option')->insert([
                        'variant_group_id' => $id->id,
                        'variant_id' => $r2,
                    ]);
                }

            }

            return $result;
        }
    }

    public function editProductVariant(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            $insertData = $value;
            $product = product_dtl::findorfail($key);
            $product->variant_code = $insertData['variant_code'];
            $product->price = priceFormat($insertData['price'],'2');
            $product->stock = $insertData['stock'];
            $product->save();

            DB::table('product_variant_group')->where('id',$insertData['variant_id'])
                ->update([
                    'status_id' => $insertData['status_id']
                ]);
        }

        toastr()->success('Başarıyla Düzenlendi','İşlem Başarılı');
        return redirect()->back();
    }
}
