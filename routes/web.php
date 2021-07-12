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

Route::middleware("auth")->group(function(){
    Route::post("products/reorder", [App\Http\Controllers\ProductController::class, 'reorder'])->name("products.reorder");
    Route::get("products", [App\Http\Controllers\ProductController::class, 'index'])->name("products.index");
    Route::get("products/edit/{product}", [App\Http\Controllers\ProductController::class, 'edit'])->name("products.edit");
    Route::get("products/create", [App\Http\Controllers\ProductController::class, 'create'])->name("products.create");
    Route::delete("products/{product}", [App\Http\Controllers\ProductController::class, 'destroy'])->name("products.delete");
    Route::match(["post", "put"], "products", [App\Http\Controllers\ProductController::class, 'store'])->name("products.store");

    Route::get("categories", [App\Http\Controllers\CategoryController::class, 'index'])->name("categories.index");
    Route::get("categories/edit/{category}", [App\Http\Controllers\CategoryController::class, 'edit'])->name("categories.edit");
    Route::get("categories/create", [App\Http\Controllers\CategoryController::class, 'create'])->name("categories.create");
    Route::delete("categories/{category}", [App\Http\Controllers\CategoryController::class, 'destroy'])->name("categories.delete");
    Route::match(["post", "put"], "categories", [App\Http\Controllers\CategoryController::class, 'store'])->name("categories.store");

    Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');

});
Route::get("categories/categories", [App\Http\Controllers\CategoryController::class, 'categories']);
Route::get("products/priceBoard", [App\Http\Controllers\ProductController::class, 'priceBoard']);

Auth::routes(["register"=>false]);

