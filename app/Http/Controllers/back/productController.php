<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\{brands, categories, currency, discount_types, product_units, products};
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
        $products = products::where('status_id' , '=' , '1')->get();
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
        $response = $model->setProducts($request);
        return redirect()->back()->with($response);
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
        //
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
        //
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
}
