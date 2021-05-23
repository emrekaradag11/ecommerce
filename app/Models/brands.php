<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class brands extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'brands';
    protected $fillable = [
        'title',
        'status_id',
    ];

    public function totalProduct()
    {
        return $this->hasMany('App\Models\products','brand_id','id')->count();
    }

    public function image()
    {
        return $this->morphOne(img::class, 'imageable');
    }

}
