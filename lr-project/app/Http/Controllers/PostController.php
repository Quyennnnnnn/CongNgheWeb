<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    // Hiển thị danh sách bài viết
    public function index()
    {
        // Lấy tất cả bài viết
        $posts = Posts::all();

        // Trả về view 'home' và truyền dữ liệu $posts vào view
        return view('home', compact('posts'));
    }

    // Hiển thị form để tạo bài viết mới
    public function create()
    {
        return view('posts.create');
    }

    // Lưu bài viết mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Posts::create($validated);
        return redirect()->route('posts.index');
    }

    // Hiển thị bài viết theo ID
    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }

    // Hiển thị form chỉnh sửa bài viết
    public function edit(Posts $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Cập nhật bài viết trong cơ sở dữ liệu
    public function update(Request $request, Posts $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($validated);
        return redirect()->route('posts.index');
    }

    // Xóa bài viết
    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
    
}
