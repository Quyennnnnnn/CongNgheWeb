<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route; 
Route::get('/', [HomeController::class, 'index']); // Route cho trang chủ
Route::get('posts', [PostController::class, 'index']); // Route cho trang danh sách bài viết
