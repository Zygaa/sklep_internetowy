<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;

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


Route::get('/', [WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/list', [UserController::class, 'index']) -> middleware('can:isAdmin');
Route::delete('/users/{id}', [UserController::class, 'destroy']) -> middleware('auth');
Route::get('/products', [ProductController::class, 'index']) -> name('products.index') -> middleware('can:isAdmin');
Route::get('/products/create', [ProductController::class, 'create']) -> name('products.create') -> middleware('auth');
Route::post('/products/addproduct', [ProductController::class, 'store']) -> middleware('auth');
Route::get('/products/edit/{product}', [ProductController::class, 'edit']) -> name('products.edit') -> middleware('auth');
Route::post('/products/{product}', [ProductController::class, 'update']) -> name('products.update') -> middleware('auth');
Route::delete('/products/{product}', [ProductController::class, 'destroy']) -> name('products.destroy') ->middleware('can:isAdmin');
Route::get('/products/{product}', [ProductController::class, 'show']) -> name('products.show') -> middleware('auth');
Route::get('/cart/list', [App\Http\Controllers\CartController::class, 'index'])->middleware('auth')->name('cart.index');
Route::post('/cart/{product}', [App\Http\Controllers\CartController::class, 'store'])->middleware('auth')->name('cart.store');
