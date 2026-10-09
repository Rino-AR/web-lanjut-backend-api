<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\RequestLogger;

use App\Http\Controllers\AuthController;

// Public Endpoint (Tidak butuh token)
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);

// Protected Endpoint (Membutuhkan JWT)[cite: 1]
Route::middleware('auth:api')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
/*Route::get('/products', function () {
    return response()->json([
        'message' => 'Daftar produk'
    ]);
});

Route::get('/products', [ProductController::class, 'index'])
    ->middleware(RequestLogger::class);

Route::post('/products', [ProductController::class, 'store'])
    ->middleware(RequestLogger::class);

Route::get('/products', function () {
    return response()->json([
        'data' => [
            [
                'id' => 1,
                'name' => 'Laptiop',
                'price' => 5000000
            ],
            [
                'id' => 2,
                'name' => 'Keyboard',
                'price' => 300000
            ],
            [
                'id' => 3,
                'name' => 'Mouse',
                'price' => 150000
            ]
        ]
    ]);
});    
*/