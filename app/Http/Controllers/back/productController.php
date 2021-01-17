<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\{brands, categories, product_units};
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = new categories();
        $categories = $categories->where("status_id" , "!=" , "2")->get();
        $brands = new brands();
        $brands = $brands->where("status_id" , "!=" , "2")->get();
        return view('back.product.index',compact('categories','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = new categories();
        $categories = $categories->where("status_id" , "!=" , "2")->get();
        $brands = new brands();
        $brands = $brands->where("status_id" , "!=" , "2")->get();
        $product_units = new product_units();
        $product_units = $product_units->where("status_id" , "!=" , "2")->get();
        return view('back.product.create',compact('categories','brands','product_units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
