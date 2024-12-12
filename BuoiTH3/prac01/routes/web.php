<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\MedicineController;
use app\Http\Controllers\SaleController;

// Route để hiển thị danh sách thuốc
Route::get('/medicines', [MedicineController::class, 'index'])->name('medicines.index');


