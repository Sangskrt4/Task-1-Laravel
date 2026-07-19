<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::get('/', function () {
    return response()->json(['message' => 'API Laravel siap!']);
});

// ==================== TASK 9: API CRUD PRODUK ====================
Route::apiResource('products', ProductController::class);