<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_discount extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "product_discount";
    protected $fillable = [
        'type_id',
        'product_dtl_id',
        'rate',
        'over_the_amount',
        'price',
        'start_date',
        'finish_date',
    ];

}
