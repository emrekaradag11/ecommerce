<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_discount extends Model
{
    use HasFactory;

    protected $table = "product_discount";
    protected $guarded  = ["id"];

    public function setProductsDiscounts($discounts, $product_id){
        foreach ($discounts as $k => $d) {
            $model = new product_discount();
            $model->type_id = discount_types::where("id","=",$k)->first()->id;
            $model->product_id = $product_id;
            $model->rate = $d;
            $model->save();
        }
    }

    public function updateProductsDiscounts($discounts, $product_id){
        foreach ($discounts as $k => $d) {
            $model = new product_discount();
            $model->
            updateOrCreate(
                [
                    'type_id' => discount_types::where("id","=",$k)->first()->id,
                ], [

                "type_id" => discount_types::where("id","=",$k)->first()->id,
                "product_id" => $product_id,
                "rate" => $d,
            ]);
        }
    }

}
