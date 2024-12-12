<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Lấy danh sách id của renters
        $renterIds = DB::table('renters')->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            DB::table('laptops')->insert([
                'brand' => $faker->randomElement(['Dell', 'HP', 'Apple', 'Lenovo', 'Asus']),
                'model' => $faker->word(),
                'specifications' => $faker->randomElement([
                    'i5, 8GB RAM, 256GB SSD',
                    'i7, 16GB RAM, 512GB SSD',
                    'Ryzen 5, 8GB RAM, 512GB SSD',
                    'M1, 8GB RAM, 256GB SSD',
                    'i3, 4GB RAM, 128GB SSD',
                ]),
                'rental_status' => $faker->randomElement(['Available', 'Rented']),
                'renter_id' => $faker->randomElement($renterIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
