<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('issues')->insert([
            [
                'computer_id' => 1, // Tham chiếu đến máy tính Lab1-PC01
                'reported_by' => 'John Doe',
                'reported_date' => now(),
                'description' => 'Screen flickers intermittently.',
                'urgency' => 'Medium',
                'status' => 'Open',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'computer_id' => 2, // Tham chiếu đến máy tính Lab2-PC02
                'reported_by' => 'Jane Smith',
                'reported_date' => now(),
                'description' => 'Computer fails to boot.',
                'urgency' => 'High',
                'status' => 'In Progress',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

