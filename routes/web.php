<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('products', App\Http\Controllers\ProductsController::class);

Route::resource('services', App\Http\Controllers\ServicesController::class);

Route::resource('pricings', App\Http\Controllers\PricingController::class);

Route::resource('sales', App\Http\Controllers\SalesController::class);