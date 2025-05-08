<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


 Route::get('/products', [ProductsController::class, 'products']);
 Route::post('/products', [ProductsController::class, 'products']);
 
 Route::get('/products/register', [ProductsController::class, 'register']);
 Route::post('/products/register', [ProductsController::class, 'register']);

 Route::get('/register2', [ProductsController::class, 'register2']);
 
 Route::get('/products/{productsId}', [ProductsController::class, 'productsId']);
 Route::post('/products/{productsId}', [ProductsController::class, 'productsId']);
 
 Route::get('/find', [ProductsController::class, 'find']);
 Route::post('/find', [ProductsController::class, 'search']);

Route::get('/', [App\Http\Controllers\ProductsController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('create');
Route::get('/', [ProductsController::class, 'index']);
Route::post('/image_upload', [App\Http\Controllers\ProductsController::class, 'store'])->name('image_upload');

Route::get('/register2', [ProductsController::class, 'register2']);
Route::post('/register2', [ProductsController::class, 'create']);
Route::get('/', [ProductsController::class, 'index']);