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
    product_variants,
    products,
    variants};
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
        $product = products::find($product_id);
        return view('back.product.variants.add',compact('product','variants'));
    }

    public function setProductVariant(Request $request)
    {
        if($request->ajax()){

            $product_id = $request->product_id;
            $data = $request->except('product_id','_token');
            $variants = [];

            $i = 0;
            foreach ($data as $k => $v) {
                foreach ($v as $k2 => $v2) {
                    $i++;
                    $variants[$i][] = $v2;
                    $variants[$i][] = $v;
                }
            }

            return dd($variants);
        }
    }
}
