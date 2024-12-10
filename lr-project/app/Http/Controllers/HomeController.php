<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class HomeController extends Controller
{
    public function index()
    {
        // Trả về view trang chủ (home.blade.php)
        $posts = Posts::all();

        // Trả về view và truyền biến $posts vào view
        return view('home', compact('posts'));
    }
}
