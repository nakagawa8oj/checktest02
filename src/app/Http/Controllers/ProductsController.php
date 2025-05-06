<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

 public function products(){
        return view('products');
    }

 public function productsId(Request $request){
        $products = $request->only(['name', 'email', 'tel', 'content']);
        return view('{productsId}', ['products' => $products]);
    }

 public function register(Request $request){
        $products = $request->only(['name', 'email', 'tel', 'content']);
        return view('register', ['products' => $products]);
    }

}
