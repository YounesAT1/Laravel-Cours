<?php

namespace App\Http\Controllers\CRUD\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CRUD\ProduitsAndCategories\Category;

class CategorieController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function create() {
        return view('categories.create');
    }

    public function store (Request $request) {
        $validatedData = $request -> validate([
            'name' => 'required',
        ]);

        Category::create($validatedData);

        return redirect() -> route('categories.index');
    }
}
