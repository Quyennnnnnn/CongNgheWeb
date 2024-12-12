<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class booksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) { 
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'author' => $faker->name, 
                'publication_year' => $faker->year,
                'genre' => $faker->randomElement(['Programming', 'Science', 'Fiction', 'Biography', 'History']), 
                'library_id' => $faker->numberBetween(1, 10), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}