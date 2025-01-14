<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HalalProductController;



Route::get('/', function () {
    return view('mainpage');
});

Route::get('/mainpage1', [MainPageController::class, 'index'])->name('mainpage1');

Route::get('/mainpage', [ProfileController::class, 'edit'])->name('mainpage');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/signup', [RegistrationController::class, 'create'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'store'])->name('signup.store');

Route::get('/halal-restaurants', [RestaurantController::class, 'showRestaurants'])->name('halalrestaurants');
Route::get('/restaurants', [RestaurantController::class, 'showRestaurants'])->name('restaurants.index');

Route::get('/', [HalalProductController::class, 'index'])->name('home');
Route::get('/products', [HalalProductController::class, 'products'])->name('products');
Route::get('/products/{category}', [HalalProductController::class, 'category'])->name('products.category');
