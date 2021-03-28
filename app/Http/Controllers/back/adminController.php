<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function get_index(){
        return view("back.index");
    }

    public function login(){
        return view("back.login");
    }

    public function logout(){
        if (session()->has('adminUser')) {
            session()->pull('adminUser');
            return redirect()->route("admin.login");
        }
    }

    public function postLogin(Request $request){
        $user = users::where(['email' => $request->post("email")])->first();
        if($user && Hash::check($request->post("password"),$user->password)){
            $request->session()->put('adminUser', $user);
            return redirect()->route("admin.index");
        }else{

            $noti = array(
                'message' => "E-Posta veya Şifre Hatalı",
                'head'=>'Hata',
                'type' => 'error',
                'status' => '404'
            );

            return redirect()->route("admin.login")->with($noti);

        }
    }
}
