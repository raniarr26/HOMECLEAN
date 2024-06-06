<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi; 
use App\Models\Cart;
class transaksiController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data transaksi
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'total' => 'required|numeric',
        ]);

        // Simpan data transaksi ke database
        $transaksi = Transaksi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'total' => $request->total,
            // Tambahkan field lain sesuai kebutuhan
        ]);

        // Simpan data produk yang dibeli ke tabel transaksi_details
        foreach ($request->cart_items as $item) {
            $transaksi->details()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Hapus item keranjang belanja setelah transaksi berhasil
        Cart::whereIn('id', array_column($request->cart_items, 'id'))->delete();

        return response()->json(['message' => 'Transaksi berhasil'], 200);
    }
}