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
        $model->type_id = $request->post("type_id"); // ürün ise tipi 1, varyant ise 2
        $model->kdv = $request->post("kdv");
        $model->shipping_day = $request->post("shipping_day");
        $model->price = priceFormat($request->post("price"),'2');
        $model->stock = $request->post("stock");
        $model->shipping_price = priceFormat($request->post("shipping_price"),'2');
        $model->product_code = $request->post("product_code");
        $model->currency_id = $request->post("currency_id");
        $model->save();

        $noti = array(
            'message' => "İşlem Başarıyla Gerçekleştirildi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }
    public function updateProductsDetail($request,$id){

        $model = product_dtl::where("product_id","=",$id)
            ->update([
                "type_id" => $request->post("type_id"),
                "kdv" => $request->post("kdv"),
                "shipping_day" => $request->post("shipping_day"),
                "price" => priceFormat($request->post("price"),'2'),
                "stock" => $request->post("stock"),
                "shipping_price" => priceFormat($request->post("shipping_price"),'2'),
                "product_code" => $request->post("product_code"),
                "currency_id" => $request->post("currency_id"),
            ]);


        $noti = array(
            'message' => "İşlem Başarıyla Gerçekleştirildi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }

    public function getProductCurrency(){
        return $this->hasOne("App\Models\currency","id","currency_id");
    }

    public function image()
    {
        return $this->morphMany(img::class, 'imageable')->orderBy("ord");
    }

    public function setProductImg($request)
    {
        $product = product_dtl::find($request->product_id);
        if($request->file("file")){
            $uploadImg = fileUpload($request->file("file"),"uploads",$product->getProduct->title,"");
            $product->image()->create(
                ['img' => $uploadImg,],
            );
        }
    }

    public function getProduct(){
        return $this->hasOne("App\Models\products","id","product_id");
    }

    public function getDiscounts(){
        return $this->hasMany("App\Models\product_discount","product_id","id");
    }

    public function getVariantNames(){
        return $this->hasone("App\Models\product_variant_group","id","variant_id");
    }
}
