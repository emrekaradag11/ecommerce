<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\brands;
use App\Models\product_variant_group_option;
use App\Models\products;
use http\Env\Response;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){

        /*$products = new products();
        $products = $products->limit(5000)->get();
        //return $products;
        //cache()->put('products',$products);
        //return "1";
        //cookie("products",$products,5000000);
        return cache()->remember('products',now()->addDay(),function () use ($products) {
            return $products->limit(25000)->get()->toJson();
        });
        return cookie('products');*/
        $products = new products();
        $topProducts = $products->limit(4)->get();
        $bestSellers = $products->limit(10)->get();
        $flashSale = $products->limit(10)->get();
        $newArrivals = $products->limit(10)->get();
        $topBrands = brands::all();
        return view("front/index",compact('topProducts','bestSellers','flashSale','newArrivals','topBrands'));
    }
}
