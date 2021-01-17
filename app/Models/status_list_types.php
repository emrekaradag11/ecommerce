<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_list_types extends Model
{
    use HasFactory;
    protected $table = "status_list_types";
    protected $guarded  = ["id"];

    public function set_status_list_types($request)
    {

        status_list_types::create($request->except(["_token","_method"]));

        $noti = array(
            'message' => "Başarıyla Eklendi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }

}
