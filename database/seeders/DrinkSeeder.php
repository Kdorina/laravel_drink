<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("drinks")->insert([
            "drink"=>"Fanta",
            "type"=>"Szénsavas üditő",
            "price"=>987,
        ]);
    }
}
