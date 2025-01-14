<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalalProductController;

Route::get('/', [HalalProductController::class, 'index'])->name('home');
Route::get('/products', [HalalProductController::class, 'products'])->name('products');
Route::get('/products/{category}', [HalalProductController::class, 'category'])->name('products.category');
