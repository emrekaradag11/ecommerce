<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\{user_types,users};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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
                'password' => 'confirmed',
                'name' => 'required|max:255',
                'surname' => 'required|max:255',
                'email' => 'required|string|email|max:255|unique:users',
            ]/*,[
                'name.required' => __("validation.required" , ["attribute" => __("variable.adi")]),
                'last-name.required' => __("validation.required" , ["attribute" => __("variable.soyadi")]),
                'email.required' => __("validation.required" , ["attribute" => __("variable.email")]),
            ]*/,
        );

        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

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
        $user = users::find($id);
        $user_types = new user_types();
        $user_types = $user_types->where("status_id" , "!=" , "2")->get();
        return view('back.users.update',compact("user_types","user"));
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
            'password' => 'bail|confirmed',
            'name' => 'bail|required|string|max:255',
            'surname' => 'bail|required|string|max:255',
            'type_id' => 'bail|required',
        ];


        $validator = Validator::make(
            $request->all(),
            $rules,
        );

        if($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();


        if(!Hash::check($request->default_password,users::find($id)->password)) {
            $noti = array(
                'message' => "Mevcut Şifre Hatalı",
                'head'=>'Hata',
                'type' => 'error',
                'status' => '200'
            );
            return redirect()->back()->with($noti);
        }

        $users = new users();
        $response = $users->edit_users($request,$id);

        return redirect()->route("admin.users.index")->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = new users();
        $response = $users->softDelete($id);
        return redirect()->back()->with($response);
    }
}
