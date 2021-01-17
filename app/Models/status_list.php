<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_list extends Model
{
    use HasFactory;
    protected $table = "status_list";
    protected $guarded  = ["id"];

    public function set_status_list($request)
    {

        status_list::create($request->except(["_token","_method"]));

        $noti = array(
            'message' => "Başarıyla Eklendi",
            'head'=>'İşlem Başarılı',
            'type' => 'success',
            'status' => '200'
        );

        return $noti;
    }
}
