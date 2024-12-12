<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class LibrariesTableSeeder extends Seeder
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
            DB::table('libraries')->insert([
                'name' => $faker->company . ' Library', 
                'address' => $faker->address, 
                'contact_number' => $faker->phoneNumber, 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}