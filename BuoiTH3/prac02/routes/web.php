<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\ProductController;

Route::resource('students', ProductController::class);
