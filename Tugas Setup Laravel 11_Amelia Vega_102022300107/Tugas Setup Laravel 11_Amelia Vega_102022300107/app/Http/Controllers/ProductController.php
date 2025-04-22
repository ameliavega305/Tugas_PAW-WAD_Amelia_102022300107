<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  // Jangan lupa mengimpor model Product

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();  // Mengambil semua data produk
        return view('products.index', compact('products'));
    }
}
