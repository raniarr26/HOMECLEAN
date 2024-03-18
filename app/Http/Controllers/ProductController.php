<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Tampilkan daftar produk
    }

    public function create()
    {
        // Tampilkan formulir untuk menambah produk
        return view('user.create_product');
    }

    public function store(Request $request)
    {
        // Validasi data yang diinput
        $request->validate([
            'nama_produk' => 'required',
            'nama_pelanggan' => 'required',
            'harga' => 'required|numeric',
            'rekening' => 'required',
            'file' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        // Simpan data produk yang diinput
        $file = $request->file('file')->store('files');

        Product::create([
            'nama_produk' => $request->nama_produk,
            'nama_pelanggan' => $request->nama_pelanggan,
            'harga' => $request->harga,
            'rekening' => $request->rekening,
            'file' => $file,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('user.products.index')->with('success', 'Produk berhasil ditambahkan.');
    }
}
