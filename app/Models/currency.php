<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class currency extends Model
{
    use HasFactory;

    protected $table = "currency";
    protected $fillable = [
        'title',
        'short_code',
        'rate',
        'status_id',
    ];

}
