<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    // Hiển thị danh sách thuốc (phân trang 10 thuốc mỗi trang)
    public function index()
    {
        // Lấy tất cả các thuốc (hoặc với phân trang nếu có)
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));
    }

    // Hiển thị form tạo mới thuốc
    public function create()
    {
        return view('medicines.create');
    }

    // Lưu thuốc vào cơ sở dữ liệu
    public function store(Request $request)
    {
        // Xác thực đầu vào của người dùng
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:100',
            'dosage' => 'required|string|max:50',
            'form' => 'required|string|max:50',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Lưu thông tin thuốc vào cơ sở dữ liệu
        Medicine::create($validated);

        // Chuyển hướng về trang danh sách thuốc
        return redirect()->route('medicines.index');
    }

    // Hiển thị form chỉnh sửa thuốc
    public function edit($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.edit', compact('medicine'));
    }

    // Cập nhật thông tin thuốc
    public function update(Request $request, $id)
    {
        // Xác thực đầu vào của người dùng
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:100',
            'dosage' => 'required|string|max:50',
            'form' => 'required|string|max:50',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Cập nhật thông tin thuốc
        $medicine = Medicine::findOrFail($id);
        $medicine->update($validated);

        // Chuyển hướng về trang danh sách thuốc
        return redirect()->route('medicines.index');
    }
}
