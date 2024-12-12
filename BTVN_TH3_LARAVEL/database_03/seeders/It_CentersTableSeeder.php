<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class It_CentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {   
            DB::table("it_centers")->insert([

                "name"=> $faker->text(200),
                "location"=> $faker->text(200),
                "contact_email"=> $faker->email(),
                'created_at' => now(), // Thời gian hiện tại
                'updated_at' => now(), 
            ]);
        }
        //
    }
}
