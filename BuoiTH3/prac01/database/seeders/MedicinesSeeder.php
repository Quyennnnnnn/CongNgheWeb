<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicine;
use Faker\Factory as Faker;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Tạo 100 bản ghi cho bảng medicines
        for ($i = 0; $i < 100; $i++) {
            Medicine::create([
                'name' => $faker->word, // Tên thuốc
                'brand' => $faker->word, // Thương hiệu
                'dosage' => $faker->randomElement(['10mg tablets', '500mg capsules', '5ml syrup']), // Liều lượng
                'form' => $faker->randomElement(['tablets', 'capsules', 'syrup']), // Dạng thuốc
                'price' => $faker->randomFloat(2, 10, 500), // Giá
                'stock' => $faker->numberBetween(10, 200), // Số lượng trong kho
            ]);
        }
    }
}
