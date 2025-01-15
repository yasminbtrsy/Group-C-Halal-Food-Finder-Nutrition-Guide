<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainpage');
});

// Meal routes
Route::resource('meals', MealController::class);

Route::get('/add-meal', function () {
    return view('add-meal');
});

Route::get('meal', [MealController::class, 'index']);
Route::resource('addmeal', MealController::class);
