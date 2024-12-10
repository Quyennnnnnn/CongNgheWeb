<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        // Lấy tất cả bài viết
        $posts = Posts::all();

        // Trả về view 'home' và truyền dữ liệu $posts vào view
        return view('home', compact('posts'));
    }
}
