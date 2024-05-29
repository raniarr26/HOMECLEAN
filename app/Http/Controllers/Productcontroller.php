<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // Index method to list all products
    public function index()
    {
        $products = Product::all();
        return view('admin.page.products.index', compact('products'));
    }

    // Show method to display a single product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page.products.show', compact('product'));
    }

    // Create method to show the form for creating a new product
    public function create()
    {
        return view('admin.page.products.create');
    }

    // Store method to save the new product to the database
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

        return redirect()->route('products.index')->with('success','Product created successfully.');
    }

    // Edit method to show the form for editing an existing product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page.products.edit', compact('product'));
    }

    // Update method to save the updated product to the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|numeric',
            'size' => 'required',
            'type' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $data = [
            'nama_product' => $request->nama_product,
            'harga' => $request->harga,
            'size' => $request->size,
            'type' => $request->type,
        ];

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success','Product updated successfully.');
    }

    // Destroy method to delete a product from the database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success','Product deleted successfully.');
    }
}
