<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class users extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $guarded  = ["id"];

    public function getUserTypeName()
    {
        return $this->hasOne('App\Models\user_types','id','type_id');
    }

    public function image()
    {
        return $this->morphOne(img::class, 'imageable');
    }

}
