<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount_types extends Model
{
    use HasFactory;

    protected $table = "discount_types";
    protected $fillable = [
        'title',
        'status_id',
    ];

}
