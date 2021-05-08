<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

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
        return $this->hasMany('App\Models\categories','parent_id','id')->where('status_id' , '!=' , '2');
    }

}
