<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('list_product', ['data' => $products]); // Mengirim data produk ke view dengan variabel $data
    }
}
