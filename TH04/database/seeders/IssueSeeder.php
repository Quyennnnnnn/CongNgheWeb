<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Computers;
use App\Models\Issues;
class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Issues::create([
                'computer_id' => Computers::inRandomOrder()->first()->id, // Liên kết với bảng computers
                'reported_by' => $f->name(), // Người báo cáo
                'reported_date' => $f->dateTimeBetween('-1 month', 'now'), // Thời gian báo cáo
                'description' => $f->sentence(10), // Mô tả chi tiết
                'urgency' => $f->randomElement(['Low', 'Medium', 'High']), // Mức độ sự cố
                'status' => $f->randomElement(['Open', 'In Progress', 'Resolved']), // Trạng thái
            ]);
        }
    }
}
