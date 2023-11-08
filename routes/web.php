<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/products", [GuestController::class, "products"]);

Auth::routes();

Route::resource('parts', App\Http\Controllers\PartController::class);
Route::resource('customers', App\Http\Controllers\CustomerController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);