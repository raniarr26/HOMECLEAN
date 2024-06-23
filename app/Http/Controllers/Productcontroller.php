<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $products = Product::all();
        return view('admin.page.products.index', compact('products'))->with('title', 'Products index');
    }

    // Metode lain...

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page.products.show', compact('product'))->with('title', 'Products show');
    }

    public function create()
    {
        return view('admin.page.products.create')->with('title', 'Products Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_product' => 'required|string',
            'harga' => 'required|numeric',
            'size' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'nama_product' => $request->input('nama_product'),
            'harga' => $request->input('harga'),
            'size' => $request->input('size'),
            'image' => $imageName,
            'type' => $request->input('type'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.page.products.edit', compact('product'))->with('title', 'Products edit');
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

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
