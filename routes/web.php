<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
Route::get('/login', [AuthController::class, 'getLogin']);

Route::get("/products", [ProductController::class, 'index'])->name('products.index');
Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');

Route::post("/products", [ProductController::class, 'save'])->name('products.save');
Route::get("/products/{id}", [ProductController::class, 'details'])->name('products.detail');

Route::put("/products/{id}", [ProductController::class, 'update'])->name('products.update');
Route::get("/products/{id}/edit", [ProductController::class, 'edit'])->name('products.edit');

Route::delete("/products/{id}", [ProductController::class, 'destroy'])->name('products.destroy');
