<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index', 'form');
    }
    
    // lista dei products
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    
    public function form()
    {
        return view('product.form');
    }
    
    
    
    // salvataggio nuovo prodotto
    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price'=> $request->price,
            'img'=> $request->file('img')->store('img', 'public')
        ]);        
        
        
        
        return redirect()->route('home');
    }
}
