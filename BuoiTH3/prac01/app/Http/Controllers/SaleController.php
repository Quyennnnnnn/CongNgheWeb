<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Medicine;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('medicine')->get(); // Lấy danh sách giao dịch
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $medicines = Medicine::all(); // Lấy danh sách thuốc để chọn
        return view('sales.create', compact('medicines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'medicine_id' => 'required|exists:medicines,medicine_id',
            'quantity' => 'required|integer|min:1',
            'sale_date' => 'required|date',
            'customer_phone' => 'nullable|max:10',
        ]);

        Sale::create($request->all()); // Lưu giao dịch
        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }

    public function edit(Sale $sale)
    {
        $medicines = Medicine::all();
        return view('sales.edit', compact('sale', 'medicines'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'medicine_id' => 'required|exists:medicines,medicine_id',
            'quantity' => 'required|integer|min:1',
            'sale_date' => 'required|date',
            'customer_phone' => 'nullable|max:10',
        ]);

        $sale->update($request->all());
        return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully.');
    }
}

