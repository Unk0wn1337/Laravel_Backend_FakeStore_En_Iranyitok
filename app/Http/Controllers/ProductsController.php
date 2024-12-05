<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all()->map(function ($product) {
            $product->photo_url = asset('storage/' . $product->photo);
            return $product;
        });

        return response()->json($products);
    }
}
