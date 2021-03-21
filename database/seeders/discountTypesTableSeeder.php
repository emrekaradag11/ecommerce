<?php

namespace Database\Seeders;

use App\Models\discount_types;
use Illuminate\Database\Seeder;

class discountTypesTableSeeder extends Seeder
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
                "title"=>"Ürün İndirimi"
            ],[
                "title"=>"Havale İndirimi"
            ],[
                "title"=>"Sepet İndirimi"
            ]
        ];

        foreach($data as $d){
            discount_types::create($d);
        }
    }
}
