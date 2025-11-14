<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// Controller riorganizzato come visto a lezione

class ProductController extends Controller{    
    public function store(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        
        $product = new Product();
        
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        
        $product->save();
        
        return redirect(route('home'));
    }    
    
    public function Index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }
}
