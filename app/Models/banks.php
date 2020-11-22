<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banks extends Model
{
    use HasFactory;

    /*

    #bank_name          => bu kısım bankanın ismi için gerekli
    #account_number     => banka hesabı numarası için gerekli
    #account_holder     => banka hesabı sahibinin ismi için gerekli
    #iban_number        => iban numarası için gerekli

    */


    protected $table = "banks";
    protected $guarded  = ["id"];
}
