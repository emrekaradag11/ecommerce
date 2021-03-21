<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            userTypeTableSeeder::class,
            discountTypesTableSeeder::class,
            currencySeeder::class,
            productUnitsSeeder::class,
            statusListSeeder::class,
            statusListTypesSeeder::class,
        ]);
    }
}
