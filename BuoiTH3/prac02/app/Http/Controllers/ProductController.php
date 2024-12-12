<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Hiển thị danh sách sản phẩm với phân trang
    public function index()
    {
        $products =Student::paginate(10); // Phân trang 10 sản phẩm trên mỗi trang
        return view('products.index', compact('products'));
    }

    // Hiển thị form thêm sản phẩm
    public function create()
    {
        return view('products.create');
    }

    // Lưu sản phẩm mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Student::create($request->all());
        return redirect()->route('products.index');
    }

    // Hiển thị form chỉnh sửa sản phẩm
    public function edit(Student $product)
    {
        return view('products.edit', compact('product'));
    }

    // Cập nhật thông tin sản phẩm
    public function update(Request $request, Student $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index');
    }
}

