<?php

namespace Database\Seeders;

use App\Models\currency;
use Illuminate\Database\Seeder;

class currencySeeder extends Seeder
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
                "title"=>"Dolar",
                "short_code"=>"USD",
                "rate"=>"7.20",
            ],
            [
                "title"=>"Türk Lirası",
                "short_code"=>"TRY",
                "rate"=>"1.00",
            ],
            [
                "title"=>"Euro",
                "short_code"=>"EUR",
                "rate"=>"9.90",
            ],
            [
                "title"=>"Pound",
                "short_code"=>"GBP",
                "rate"=>"11.90",
            ],
        ];

        foreach($data as $d){
            currency::create($d);
        }
    }
}
