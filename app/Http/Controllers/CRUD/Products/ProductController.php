<?php

namespace App\Http\Controllers\CRUD\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CRUD\ProduitsAndCategories\Product;
use App\Models\CRUD\ProduitsAndCategories\Category;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->get();
        $totalPrice = $products->sum('price');
        return view('products.index', ['products' => $products, 'totalPrice' => $totalPrice]);
    }    

    public function create() {
        $categories = Category::all(); 
        return view('products.create', ['categories' => $categories]);
    }

    public function store(Request $request) {
        $validatedData = $request -> validate([
            'name' => 'required|min:0',
            'description' => 'required|min:0',
            'price' => 'required|min:0',
            'category_id' => 'required',
        ]);

        Product::create($validatedData);

        return redirect() -> route('products.index');
    }

    public function edit (Product $product) {
        $categories = Category::all(); 
        return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Product $product, Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|min:0',
            'description' => 'required|min:0',
            'price' => 'required|min:0',
            'category_id' => 'required',
        ]);
    
        $product->update($validatedData);
    
        return redirect()->route('products.index');
    }
     

    public function destroy(Product $product) {
        $product -> delete();
        return redirect()->route('products.index');
    }
    
}
