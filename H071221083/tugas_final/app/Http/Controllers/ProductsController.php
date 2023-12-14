<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            "title" => "Search for Store",
            "search" => "Search for Product",
            "products" => Products::inRandomOrder()->paginate(12),
        ];

        return view('products', $data);
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\View\View
     */
    public function show(Products $products)
    {
        $data = [
            "title" => $products->productName,
            "search" => "Search another Product",
            "products" => $products,
            "other" => Products::where('category_id', $products->category_id)
                ->orWhere('seller_id', $products->seller_id)
                ->where('id', '!=', $products->id)
                ->inRandomOrder()
                ->limit(3)
                ->get(),
        ];

        return view('product', $data);
    }
}
