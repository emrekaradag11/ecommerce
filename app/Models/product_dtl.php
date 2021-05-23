<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_dtl extends Model
{
    use HasFactory;

    protected $table = "product_dtl";
    protected $fillable = [
        'product_id',
        'product_code',
        'variant_code',
        'variant_group_id',
        'kdv',
        'shipping_day',
        'type_id',
        'price',
        'stock',
        'shipping_price',
        'old_prices',
        'currency_id',
        'barcode',
    ];

    public function getProductCurrency(){
        return $this->hasOne("App\Models\currency","id","currency_id");
    }

    public function image()
    {
        return $this->morphMany(img::class, 'imageable')->orderBy("ord");
    }

    public function firstImage()
    {
        $img = $this->morphMany(img::class, 'imageable')->orderBy("ord");

        if(count($img->get()))
            $img = asset("uploads/" . $img->first()->img);
        else
            $img = asset("images/no_img.jpg");

        return $img;
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
        return $this->hasMany("App\Models\product_discount","product_dtl_id","id");
    }

    public function getVariantNames(){
        return $this->hasone("App\Models\product_variant_group","id","variant_group_id");
    }
}
