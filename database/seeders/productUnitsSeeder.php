<?php

namespace Database\Seeders;

use App\Models\product_units;
use Illuminate\Database\Seeder;

class productUnitsSeeder extends Seeder
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
                "title"=>"Adet"
            ],[
                "title"=>"Paket"
            ],[
                "title"=>"Kutu"
            ],[
                "title"=>"Kilogram"
            ],
        ];

        foreach($data as $d){
            product_units::create($d);
        }
    }
}
