<?php

use Illuminate\Support\Facades\Route;

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

Route::get("products/priceBoard", [App\Http\Controllers\ProductController::class, 'priceBoard']);
Route::get("products", [App\Http\Controllers\ProductController::class, 'index'])->name("products.index");
Route::get("products/edit/{product}", [App\Http\Controllers\ProductController::class, 'edit'])->name("products.edit");
Route::get("products/create", [App\Http\Controllers\ProductController::class, 'create'])->name("products.create");
Route::delete("products/{product}", [App\Http\Controllers\ProductController::class, 'destroy'])->name("products.delete");
Route::match(["post", "put"], "products", [App\Http\Controllers\ProductController::class, 'store'])->name("products.store");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
