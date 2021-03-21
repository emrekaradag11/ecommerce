<?php

namespace Database\Seeders;

use App\Models\status_list;
use Illuminate\Database\Seeder;

class statusListSeeder extends Seeder
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
                "title"=>"Aktif"
            ],[
                "title"=>"Silindi"
            ],[
                "title"=>"Pasif"
            ],
        ];

        foreach($data as $d){
            status_list::create($d);
        }
    }
}
