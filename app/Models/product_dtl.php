<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_dtl extends Model
{
    use HasFactory;

    protected $table = "product_dtl";
    protected $guarded  = ["id"];

    public function setProductsDetail($request,$id){

        $model = new product_dtl();
        $model->product_id = $id;
        $model->type_id = "1";
        $model->kdv = $request->post("kdv");
        $model->shipping_day = $request->post("shipping_day");
        $model->price = $request->post("price");
        $model->stock = $request->post("stock");
        $model->shipping_price = $request->post("shipping_price");
        $model->product_code = $request->post("product_code");
        $model->save();

        $noti = array(
            'message' => "İşlem Başarıyla Gerçekleştirildi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }
}
