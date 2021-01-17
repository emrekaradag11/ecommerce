<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\status_list;
use App\Models\status_list_types;
use Illuminate\Http\Request;

class statusController extends Controller
{
    public function index(){
        $status_list_types = status_list_types::all();
        $status_list = status_list::all();
        return view('back.status.index' , compact("status_list_types","status_list"));
    }

    public function addStatusListType(Request $request){

        $model = new status_list_types();
        $response = $model->set_status_list_types($request);
        return redirect()->back()->with($response);

    }

    public function addStatusList(Request $request){

        $model = new status_list();
        $response = $model->set_status_list($request);
        return redirect()->back()->with($response);

    }
}
