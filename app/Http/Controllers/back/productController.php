<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\{brands,
    categories,
    currency,
    discount_types,
    product_dtl,
    product_units,
    product_variant_group,
    product_variants,
    products,
    product_discount
};
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
        $products = products::all();
        return view('back.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories::all();
        $brands = brands::all();
        $product_units = product_units::all();
        $currency = currency::all();
        $discounts = discount_types::all();
        return view('back.product.create',compact('categories','brands','product_units','currency','discounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
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

        $product = products::create($request->all());

        $request['product_id'] = $product->id;
        $request['price'] = priceFormat($request->post('price'),'2');
        $request['shipping_price'] = priceFormat($request->post('shipping_price'),'2');

        $product_dtl = product_dtl::create($request->all());

        foreach ($request->product_discount as $k => $d) {

            product_discount::create([
                'type_id' => discount_types::where('id','=',$k)->first()->id,
                'product_dtl_id' => $product_dtl->id,
                'rate' => $d,
            ]);

        }

        toastr()->success('Başarıyla Eklendi','İşlem Başarılı');

        return view('back.product.upload',compact('product'));

/*
        $model = new products();
        $product = $model->setProducts($request);
        if ($product)
            return view('back.product.upload',compact('product'));*/
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
        $categories = categories::all();
        $brands = brands::all();
        $product_units = product_units::all();
        $currency = currency::all();
        $discounts = discount_types::select('discount_types.id','discount_types.title','product_discount.rate')
            ->leftJoin('product_discount', function($join) use ($id) {
                $join->on('discount_types.id', '=', 'product_discount.type_id')
                    ->where('product_discount.product_dtl_id' , '=' , $id);
            })
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
     * @return \Illuminate\Http\RedirectResponse
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
        $productCodeUniqueControl = product_dtl::where([
                ['product_code' ,'=',$request->product_code],
                ['type_id' ,'=','1'],
                ['variant_group_id' ,'=','NULL'],
            ])->whereNotIn('id',[$id])->count();

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


        products::where('id','=',$id)
        ->update([
            'title' => $request->post('title'),
            'text' => $request->post('text'),
            'description' => $request->post('description'),
            'keywords' => $request->post('keywords'),
            'tags' => $request->post('tags'),
            'brand_id' => $request->post('brand_id'),
            'category_id' => $request->post('category_id'),
            'product_unit_id' => $request->post('product_unit_id'),
            'status_id' => $request->post('status_id'),
        ]);


        $product_dtl = product_dtl::where([
            ['product_id','=',$id],
            ['type_id','=','1'],
        ]);

        $product_dtl->update([
            'kdv' => $request->post('kdv'),
            'shipping_day' => $request->post('shipping_day'),
            'price' => priceFormat($request->post('price'),'2'),
            'stock' => $request->post('stock'),
            'shipping_price' => priceFormat($request->post('shipping_price'),'2'),
            'product_code' => $request->post('product_code'),
            'currency_id' => $request->post('currency_id'),
            'barcode' => $request->post('barcode'),
        ]);

        $product_dtl_id = $product_dtl->first()->id;

        foreach ($request->product_discount as $k => $d) {
            $model = new product_discount();
            $model->
            updateOrCreate(
                [
                    'type_id' => discount_types::where('id','=',$k)->first()->id,
                    'product_dtl_id' => $product_dtl_id,
                ], [

                'type_id' => discount_types::where('id','=',$k)->first()->id,
                'product_dtl_id' => $product_dtl_id,
                'rate' => $d,
            ]);
        }

        toastr()->success('Başarıyla Düzenlendi','İşlem Başarılı');

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
        $variants = product_variants::where('parent_id','0')->get();
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
            ])->delete();
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
                    'kdv' => $product_dtl->kdv,
                    'shipping_day' => $product_dtl->shipping_day,
                    'price' => $product_dtl->price,
                    'stock' => $product_dtl->stock,
                    'shipping_price' => $product_dtl->shipping_price,
                    'product_code' => $product_dtl->product_code,
                    'variant_code' => 'VR_' . uniqid(),
                    'currency_id' => $product_dtl->currency_id,
                    'variant_group_id' => $id->id,
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
            $product->update([
                'variant_code' => $insertData['variant_code'],
                'price' => priceFormat($insertData['price'],'2'),
                'stock' => $insertData['stock'],
            ]);

            DB::table('product_variant_group')->where('id',$insertData['variant_group_id'])
                ->update([
                    'status_id' => $insertData['status_id']
                ]);
        }

        toastr()->success('Başarıyla Düzenlendi','İşlem Başarılı');
        return redirect()->back();
    }

    public function editProductVariantDetail(Request $request)
    {
        $id = $request->get('id');
        $variant_dtl = product_dtl::find($id);
        $discounts = discount_types::select('discount_types.id','discount_types.title','product_discount.rate')
            ->leftJoin('product_discount', function($join) use ($id) {
                $join->on('discount_types.id', '=', 'product_discount.type_id')
                    ->where('product_discount.product_dtl_id' , '=' , $id);
            })
            ->get();
        $currency = currency::all();
        $pictures = $variant_dtl->image;
        return view('back.product.variants.editDetail',compact('variant_dtl','discounts','currency','pictures'))->render();

    }

    public function editProductVariantDetailPost(Request $request)
    {
        $variant = product_dtl::findorfail($request->id);
        $rules = [
            'currency_id' => 'bail|required|numeric',
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
            'variant_code' => 'bail|required',
            'shipping_day' => 'bail|required|numeric',
        ];

        // güncellenen varyant haricinde bu varyant koduna ait başka varyant var mı diye Kontrol ediyor
        $productCodeUniqueControl = product_dtl::where('variant_code' ,'=',$request->variant_code)
            ->whereNotIn('id',[$variant->id])
            ->count();

        if($productCodeUniqueControl > 0)
            $rules['variant_code'] .= '|unique:variant_code';

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

        product_dtl::where('id','=',$variant->id)
            ->update([
                'kdv' => $request->post('kdv'),
                'shipping_day' => $request->post('shipping_day'),
                'price' => priceFormat($request->post('price'),'2'),
                'stock' => $request->post('stock'),
                'shipping_price' => priceFormat($request->post('shipping_price'),'2'),
                'variant_code' => $request->post('variant_code'),
                'currency_id' => $request->post('currency_id'),
                'barcode' => $request->post('barcode'),
            ]);

        foreach ($request->product_discount as $k => $d) {
            product_discount::updateOrCreate(
                [
                    'type_id' => discount_types::where('id','=',$k)->first()->id,
                    'product_dtl_id' => $variant->id,
                ], [
                'type_id' => discount_types::where('id','=',$k)->first()->id,
                'rate' => $d,
                'product_dtl_id' => $variant->id,
                ]
            );
        }

        toastr()->success('Başarıyla Düzenlendi','İşlem Başarılı');
    }

}
