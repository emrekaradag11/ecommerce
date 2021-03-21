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


    public function set_users($request)
    {

        $users = new users();
        $users->password = Hash::make($request->password);
        $users->name = $request->name;
        $users->surname = $request->surname;
        $users->email = $request->email;
        $users->type = $request->type;
        $response = $users->save();

        if($response){
            $noti = array(
                'message' => "Başarıyla Eklendi",
                'head'=>'İşlem Başarılı',
                'type' => 'success',
                'status' => '200'
            );
        }else{
            $noti = array(
                'message' => "Bir Sorun Oluştu",
                'head'=>'İşlem Başarısız',
                'type' => 'error',
                'status' => '404'
            );
        }

        return $noti;
    }

    public function getUserTypeName()
    {
        return $this->hasOne('App\Models\user_types','id','type_id');
    }
}
