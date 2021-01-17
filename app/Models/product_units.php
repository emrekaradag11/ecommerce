<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_units extends Model
{
    use HasFactory;

    protected $table = "product_units";
    protected $guarded  = ["id"];

    public function setProductUnit($request)
    {

        product_units::create($request->except(["_token","_method"]));

        $noti = array(
            'message' => "Başarıyla Eklendi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }

}
