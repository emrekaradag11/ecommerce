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

        $uploadImg = fileUpload($request->file("img"),"uploads",$request->name,"");

        $users = new users();
        $users->password = Hash::make($request->password);
        $users->name = $request->name;
        $users->surname = $request->surname;
        $users->email = $request->email;
        $users->type_id = $request->type_id;
        $response = $users->save();
        $users->image()->updateOrCreate(
            ['img' => $uploadImg]
        );

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

    public function edit_users($request,$id)
    {
        $users = users::find($id);
        $users->password = isset($request->password) ? Hash::make($request->password) : $users->password;
        $users->name = $request->name;
        $users->surname = $request->surname;
        $users->email = $request->email;
        $users->type_id = $request->type_id;
        $response = $users->save();
        if($request->file("img")){
            $uploadImg = fileUpload($request->file("img"),"uploads",$request->name,$users->image->img ?? null);
            $users->image()->updateOrCreate(
                [],
                ['img' => $uploadImg,],
            );
        }

        if($response){
            $noti = array(
                'message' => "Başarıyla Güncellendi",
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

    public function image()
    {
        return $this->morphOne(img::class, 'imageable');
    }

    public function softDelete($id)
    {
        $users = users::find($id);
        if($users->type_id == "1")
            $noti = array(
                'message' => "Süper Admin Silinemez",
                'head'=>'İşlem Başarısız',
                'type' => 'error',
                'status' => '404'
            );
        else{
            users::find($id)->update(["status_id" => "2"]);
            $noti = array(
                'message' => "Başarıyla Silindi",
                'head'=>'İşlem Başarılı',
                'type' => 'success',
                'status' => '200'
            );
        }

        return $noti;
    }
}
