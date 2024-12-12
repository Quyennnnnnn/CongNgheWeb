<?php

namespace Database\Seeders;

// database/seeders/StudentsTableSeeder.php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date,
                'parent_phone' => $faker->phoneNumber,
                'class_id' => $faker->numberBetween(1, 2), // Giả sử có 2 lớp
            ]);
        }
    }
}
