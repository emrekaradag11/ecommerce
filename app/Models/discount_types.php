<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class discount_types extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "discount_types";
    protected $fillable = [
        'title',
        'status_id',
    ];

}
