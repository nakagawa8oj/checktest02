<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

 public function products(){
        return view('products');
    }

 public function productsId(Request $request){
        $products = $request->only(['name', 'price', 'image', 'season', 'content']);
        return view('{productsId}', ['products' => $products]);
    }

 public function register(Request $request){
        $products = $request->only(['name', 'price', 'image', 'season', 'content']);
        return view('register', ['products' => $products]);
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
}
