<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\{user_types,users};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new users();
        $data = $users->where("status_id" , "!=" , "2")->get();
        $user_types = new user_types();
        $user_types_data = $user_types->where("status_id" , "!=" , "2")->get();
        return view('back.users.index',compact("data","user_types_data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_types = new user_types();
        $user_types = $user_types->where("status_id" , "!=" , "2")->get();
        return view('back.users.create',compact("user_types"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255',
                'surname' => 'required|max:255',
                'email' => 'required|email',
            ]/*,[
                'name.required' => __("validation.required" , ["attribute" => __("variable.adi")]),
                'last-name.required' => __("validation.required" , ["attribute" => __("variable.soyadi")]),
                'email.required' => __("validation.required" , ["attribute" => __("variable.email")]),
            ]*/,
        );

        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        if($request->post("password") != $request->post("repeat-password")){

            $noti = array(
                'message' => "Parolalar Eşleşmiyor",
                'head'=>'İşlem Başarısız',
                'type' => 'error',
                'status' => '404'
            );
            return redirect()->back()->with($noti);
        }

        $users = new users();
        $response = $users->set_users($request);
        return redirect()->route("admin.users.index")->with($response);
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
