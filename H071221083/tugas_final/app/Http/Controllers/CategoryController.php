<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            "title" => "Categories",
            "search" => "Search by Category",
            "categories" => Category::paginate(9),
        ]);    
    }
    public function show(Category $category)
    {
        return view('products', [
            'title' => 'Category ' . $category->name,
            'search' => 'Search by Category',
            'products' => $category->products()->paginate(12)
        ]);
    }
}
