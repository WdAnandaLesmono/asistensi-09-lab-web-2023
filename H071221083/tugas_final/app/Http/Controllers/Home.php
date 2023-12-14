<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;


class Home extends Controller
{
    public function show_home() {
        return view('index', [
            "title" => "NabStore",
            "search" => "Search on NabStore",
            "categories" => Category::orderBy('id', 'desc')->take(6)->get(),
            "products" => Products::inRandomOrder()->take(12)->get()
        ]);
    }
}