<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Posts')->insert([
            ['title' => 'First Post', 'content' => 'Content for the first post.'],
            ['title' => 'Second Post', 'content' => 'Content for the second post.'],
        ]);
    }
}
