<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/list', [UserController::class, 'index']) -> middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy']) -> middleware('auth');
Route::get('/products', [ProductController::class, 'index']) -> name('products.index') -> middleware('auth');
Route::get('/products/create', [ProductController::class, 'create']) -> name('products.create') -> middleware('auth');
Route::post('addproduct', [App\Http\Controllers\SaveProductController::class, 'save']) -> middleware('auth');
Route::view('/products/index','/products/index');
