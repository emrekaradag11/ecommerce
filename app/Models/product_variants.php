<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_variants extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "product_variants";
    protected $fillable = [
        'title',
        'parent_id',
        'status_id',
    ];


    //alt kategorileri getirmek için kullanılır
    public function getSubVariants()
    {
        return $this->hasMany('App\Models\product_variants','parent_id','id');
    }
}
























