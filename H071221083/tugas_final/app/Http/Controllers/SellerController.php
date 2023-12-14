<?php

namespace App\Http\Controllers;

use App\Models\Seller;

class SellerController extends Controller
{
    /**
     * Display a listing of sellers.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            "title" => "Store",
            "search" => "Search by Seller",
            "sellers" => Seller::paginate(9),
        ];

        return view('sellers', $data);
    }

    /**
     * Display the specified seller and their products.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\View\View
     */
    public function show(Seller $seller)
    {
        $data = [
            'title' => 'Category ' . $seller->name,
            'search' => 'Search by Category',
            'seller' => $seller,
            'products' => $seller->product()->paginate(12),
        ];

        return view('seller', $data);
    }
}
