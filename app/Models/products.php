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
        $model->title = $request->post("title");
        $model->text = $request->post("text");
        $model->description = $request->post("description");
        $model->keywords = $request->post("keywords");
        $model->tags = $request->post("tags");
        $model->brand_id = $request->post("brand_id");
        $model->category_id = $request->post("category_id");
        $model->product_unit_id = $request->post("product_unit_id");
        $model->status_id = "1";
        $model->barcode = $request->post("barcode");
        $model->save();

        $detail = new product_dtl();
        $detail->setProductsDetail($request,$model->id);

        $discounts = new product_discount();
        $discounts->setProductsDiscounts($request->product_discount,$model->id);

        $noti = array(
            'message' => "İşlem Başarıyla Gerçekleştirildi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }

    public function getProductCategory(){
        return $this->hasOne("App\Models\categories","id","category_id");
    }

    public function getProductBrand(){
        return $this->hasOne("App\Models\brands","id","brand_id");
    }

    public function getProductDetail(){
        return $this->hasOne("App\Models\product_dtl","product_id","id")->where("type_id","=","1");
    }


}
