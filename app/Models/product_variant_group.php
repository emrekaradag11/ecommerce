<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_variant_group extends Model
{
    use HasFactory;
    use SoftDeletes;

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
