<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FruitImage;

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

 public function register2(){
       return view('register2');
    }

    public function create(Request $request){
        $form = $request->all();
        Product::create($form);
        return redirect('/products');
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

 
 public function index()
    {
        $products = Produsts::all();
        return view('index', ['products' => $products]);
    }
 public function store(Request $request)
{
    $image = $request->file('image');
    $path = $image->store('public/storage');
 
    $model = new FruitImage;
    $model->path = $path;
    $model->save();
 
    return redirect()->route('index');
}
}
