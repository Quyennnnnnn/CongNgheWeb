<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class Hardware_devicesTableSeeder extends Seeder
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
            DB::table('hardware_devices')->insert([
                'device_name' => $faker->words(2, true), // Tạo tên thiết bị (2 từ)
                'type' => $faker->randomElement(['Mouse', 'Keyboard', 'Headset']), // Loại thiết bị
                'status' => $faker->boolean(), // Trạng thái: true/false
                'center_id' => rand(1, 5), // ID trung tâm IT ngẫu nhiên từ 1 đến 5
                'created_at' => now(), // Thời gian hiện tại
                'updated_at' => now(), // Thời gian hiện tại
            ]);
        }

        //
    }
}
