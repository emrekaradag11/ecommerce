<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class users extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "users";
    protected $fillable = [
        'name',
        'surname',
        'password',
        'email',
        'type_id',
        'status_id',
        'email_verified_at',
        'remember_token',
    ];

    public function getUserTypeName()
    {
        return $this->hasOne('App\Models\user_types','id','type_id');
    }

    public function image()
    {
        return $this->morphOne(img::class, 'imageable');
    }

}
