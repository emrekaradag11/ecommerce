<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_units extends Model
{
    use HasFactory;

    protected $table = "product_units";
    protected $fillable = [
        'title',
        'status_id',
    ];

}
