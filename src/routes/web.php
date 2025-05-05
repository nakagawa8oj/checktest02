<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


 Route::get('/', [ProductsController::class, 'products']);
 Route::post('/products/{productsId}', [ProductsController::class, 'productsId']);