<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


 Route::get('/products', [ProductsController::class, 'products']);
 Route::post('/products/register', [ProductsController::class, 'register']);
 Route::post('/products/{productsId}', [ProductsController::class, 'productsId']);
