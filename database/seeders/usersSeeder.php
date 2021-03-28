<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
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
                "name" => "super",
                "surname" => "Admin",
                "type_id" => "1",
                "password" => Hash::make("demo"),
                "email" => "demo@demo.com",
            ],
        ];

        foreach($data as $d){
            users::create($d);
        }
    }
}
