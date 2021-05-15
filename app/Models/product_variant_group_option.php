<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_variant_group_option extends Model
{
    use HasFactory;
    protected $table = "product_variant_group_option";
    protected $fillable = [
        'variant_group_id',
        'variant_id',
    ];


    public function getName(){
        return $this->hasOne("App\Models\product_variants","id","variant_id");
    }
}
