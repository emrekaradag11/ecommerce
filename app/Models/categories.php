<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $guarded  = ["id"];

    public function set_categories($request)
    {

        categories::create($request->except(["_token","_method"]));

        $noti = array(
            'message' => "Başarıyla Eklendi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }

    public function updateCategories($request,$id)
    {

        categories::find($id)->update($request->except(["_token","_method"]));

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
        categories::find($id)->update(["status_id" => "2"]);

        $noti = array(
            'message' => "Başarıyla Silindi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }


    //alt kategorileri getirmek için kullanılır
    public function getSubCategories()
    {
        return $this->hasMany('App\Models\categories','parent_id','id')->where("status_id" , "!=" , "2");
    }

    //sıralama işlemleri için
    public function changeOrder($request){

        foreach ($request as $key => $value)
        {
            $this->where('id',$value)->update(["ord" => $key]);
        }

        $noti = array(
            'message' => "Sıralama Başarılı",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }
}
