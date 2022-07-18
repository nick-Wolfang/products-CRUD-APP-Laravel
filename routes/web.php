<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Route;

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
Route::get("/contact", [HomeController::class, 'contact']);
Route::get("/about", [HomeController::class, 'about']);
Route::get("/cv", [HomeController::class, 'myResume']);

Route::get("/", [HomeController::class, 'home']);
Route::get("/login", [AuthController::class, 'getLogin']);
Route::get("/products", [ProductController::class, 'index']);
Route::get("/products/create", [ProductController::class, 'create'])->name('create');
Route::post("/products", [ProductController::class, 'save'])->name('save');
Route::get("/products/{id}", [ProductController::class, 'details'])->name('details');
Route::put("/products/{id}", [ProductController::class, 'update'])->name('update');
Route::get("/products/{id}/edit", [ProductController::class, 'edit'])->name('edit');
Route::delete("/products/{id}", [ProductController::class, 'destroy'])->name('delete');
Route::get("/product", [ProductController::class, 'removedElementPage'])->name('removedElement');





