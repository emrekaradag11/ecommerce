<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class categoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = categories::where('parent_id' , '0')->orderby('ord')->get();
        return view('back.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $category = categories::create($request->except(['_token','_method']));
        if($request->file('img')){
            $uploadImg = fileUpload($request->file('img'),'uploads',$request->title,'');
            $category->image()->updateOrCreate(
                ['img' => $uploadImg]
            );
        }
        toastr()->success('Başarıyla Eklendi','İşlem Başarılı');

        return redirect()->back();
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
     * @return void
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = categories::find($id)->update($request->except(['_token','_method']));

        if($request->file('img')){
            $uploadImg = fileUpload($request->file('img'),'uploads',$request->title,$category->image->img ?? null);
            categories::find($id)->image()->updateOrCreate(
                [],
                ['img' => $uploadImg,],
            );
        }

        toastr()->success('Başarıyla Güncellendi','İşlem Başarılı');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        categories::find($id)->delete();
        toastr()->success('Başarıyla Silindi','İşlem Başarılı');

        return redirect()->back();
    }

    public function sortable(Request $request)
    {

        if($request->ajax()){
            foreach ($request->post('data') as $key => $value)
            {
                categories::where('id',$value)->update(['ord' => $key]);
            }
            toastr()->success('Sıralama Başarılı','İşlem Başarılı');

        }

    }
}
