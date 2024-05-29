<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('user.page.Home',[
            'title'  => 'home',
        ]);
    }

    public function jasa()
    {
        return view('user.page.jasa',[
            'title'  => 'Jasa',
        ]);
    }

    public function transaksi()
    {
        return view('user.page.transaksi',[
            'title'  => 'Transaksi',
        ]);
    }

    public function contact()
    {
        return view('user.page.contact',[
            'title'  => 'contact',
        ]);
    }

    public function checkout()
    {
        return view('user.page.checkout',[
            'title'  => 'checkout',
        ]);
    }

    public function admin()
    {
        return view('admin.layout.index', [
            'title'  => 'admin dashboard',
        ]);
    }

    public function product()
    {
        // Mengambil data produk dari database
        $products = Product::all();
        return view('admin.page.products.index', compact('products'),['title' =>  'admin products',]);
    }

    public function report()
    {
        return view('admin.page.report', [
            'title'  => 'admin report',
        ]);
    }

    public function user()
    {
        // Mengambil data user dari database
        $users = User::all();
        return view('admin.page.user', compact('users'));
    }

    // Metode CRUD untuk entitas Product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page.products.show', compact('product'));
    }

    public function create()
    {
        return view('admin.page.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|numeric',
            'size' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'nama_product' => $request->nama_product,
            'harga' => $request->harga,
            'size' => $request->size,
            'image' => $imageName,
            'type' => $request->type,
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|numeric',
            'size' => 'required',
            'type' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'nama_product' => $request->nama_product,
            'harga' => $request->harga,
            'size' => $request->size,
            'type' => $request->type,
        ]);

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
