<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    use HasFactory;

    protected $table = "brands";
    protected $guarded  = ["id"];

    public function set_brands($request)
    {

        brands::create($request->except(["_token","_method"]));

        $noti = array(
            'message' => "Başarıyla Eklendi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }


    public function updateBrands($request,$id)
    {

        brands::find($id)->update($request->except(["_token","_method"]));

        $noti = array(
            'message' => "Başarıyla Güncellendi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }


    public function softDelete($id)
    {
        brands::find($id)->update(["status_id" => "2"]);

        $noti = array(
            'message' => "Başarıyla Silindi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }



}
