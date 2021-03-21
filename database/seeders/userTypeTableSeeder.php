<?php

namespace Database\Seeders;

use App\Models\user_types;
use Illuminate\Database\Seeder;

class userTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name"=>"Süper Admin"
            ],[
                "name"=>"Admin"
            ],[
                "name"=>"Alt Kullanıcı"
            ]
        ];

        foreach($data as $d){
            user_types::create($d);
        }
    }
}
