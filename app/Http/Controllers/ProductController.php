<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index', 'create');
    }
    
    // lista dei products
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    
    public function create()
    {
        return view('product.create');
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
        
        
        
        return redirect()->route('product.index')->with('alert', 'Inserimento effettuato correttamente!');;
    }
}
