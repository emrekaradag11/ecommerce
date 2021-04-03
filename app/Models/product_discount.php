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
            $type_id = discount_types::where("id","=",$k)->first()->id;
            $model->type_id = $type_id;
            $model->status_id = "1";
            $model->product_id = $product_id;
            $model->rate = $d;
            $model->save();
        }
    }

}
