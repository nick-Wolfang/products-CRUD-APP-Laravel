<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
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
})->name('home');
Route::get('/login', [AuthController::class, 'getLogin']);



Route::get("/search/{name}", [ProductController::class, 'search'])->name('products.search');

//Auth Routes
Route::get("/auth/login", [AuthController::class, 'getLogin'])->name('auth.getLogin');
Route::post("/auth/login", [AuthController::class, 'postLogin'])->name('auth.postLogin');
Route::get("/auth/register", [AuthController::class, 'getRegister'])->name('auth.getRegister');
Route::post("/auth/register", [AuthController::class, 'postRegister'])->name('auth.postRegister');
Route::get("/dashboard", [DashbordController::class, 'index'])->name('dashbord.index');

Route::get("/products", [ProductController::class, 'index'])->name('products.index');



Route::middleware('auth')->group(
    function() {
    Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');
    
    Route::post("/products", [ProductController::class, 'save'])->name('products.save');
    Route::get("/products/{id}", [ProductController::class, 'details'])->name('products.detail');
    
    Route::put("/products/{id}", [ProductController::class, 'update'])->name('products.update');
    Route::get("/products/{id}/edit", [ProductController::class, 'edit'])->name('products.edit');
    
    Route::delete("/products/{id}", [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get("/auth/logout", [AuthController::class, 'logout'])->name('auth.logout');

    Route::get("/products/buy/{id}", [ProductController::class, 'buy'])->name('products.buy');


});