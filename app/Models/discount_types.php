<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount_types extends Model
{
    use HasFactory;

    protected $table = "discount_types";
    protected $guarded  = ["id"];


    public function setDiscountTypes($request)
    {

        discount_types::create($request->except(["_token","_method"]));

        $noti = array(
            'message' => "Başarıyla Eklendi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }


}
