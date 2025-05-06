<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


 Route::get('/products', [ProductsController::class, 'products']);
 Route::post('/products', [ProductsController::class, 'products']);
 
 Route::get('/products/register', [ProductsController::class, 'register']);
 Route::post('/products/register', [ProductsController::class, 'register']);
 
 Route::get('/products/{productsId}', [ProductsController::class, 'productsId']);
 Route::post('/products/{productsId}', [ProductsController::class, 'productsId']);
 
 Route::get('/find', [ProductsController::class, 'find']);
 Route::post('/find', [ProductsController::class, 'search']);
