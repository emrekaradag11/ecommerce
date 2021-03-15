<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $guarded  = ["id"];

    public function setProducts($request){
        $model = new products();
        $model->brand_id = $request->post("brand_id");
        $model->category_id = $request->post("category_id");
        $model->product_unit_id = $request->post("product_unit_id");
        $model->status_id = "1";
        $model->currency_id = $request->post("currency_id");
        $model->barcode = $request->post("barcode");
        $model->product_code = $request->post("product_code");
        $model->stock = $request->post("stock");
        $model->save();
        dd($request);
        $noti = array(
            'message' => "İşlem Başarıyla Gerçekleştirildi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }

}
