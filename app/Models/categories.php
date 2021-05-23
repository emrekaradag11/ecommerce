<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = [
        'title',
        'parent_id',
        'type_id',
        'status_id',
        'ord',
    ];

    //alt kategorileri getirmek için kullanılır
    public function getSubCategories()
    {
        return $this->hasMany('App\Models\categories','parent_id','id')->orderby('ord');
    }

    public function image()
    {
        return $this->morphOne(img::class, 'imageable');
    }

}
