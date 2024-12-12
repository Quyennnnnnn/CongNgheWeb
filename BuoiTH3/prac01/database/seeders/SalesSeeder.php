<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Tạo 100 bản ghi cho bảng sales
        for ($i = 0; $i < 100; $i++) {
            Sale::create([
                'medicine_id' => $faker->numberBetween(1, 100), // Khóa ngoại tham chiếu medicine_id
                'quantity' => $faker->numberBetween(1, 50), // Số lượng bán
                'sale_date' => $faker->dateTimeThisYear(), // Ngày giờ bán hàng
                'customer_phone' => $faker->optional()->phoneNumber, // Số điện thoại khách hàng (tùy chọn)
            ]);
        }
    }
}
