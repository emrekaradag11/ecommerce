<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_variant_group extends Model
{
    use HasFactory;
    protected $table = "product_variant_group";
    protected $fillable = [
        'name',
        'product_id',
        'status_id',
    ];

    public function getOptions(){
        return $this->hasMany("App\Models\product_variant_group_option","variant_group_id","id");
    }
}
