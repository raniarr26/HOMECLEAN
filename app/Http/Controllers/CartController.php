<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        $cartItem = $cart->items()->where('product_id', $productId)->first();
        if ($cartItem) {
            // Jika item sudah ada di keranjang, Anda bisa menambah jumlah atau melakukan tindakan lain
        } else {
            $cart->items()->create([
                'product_id' => $productId,
                'quantity' => 1, // Atur jumlah item sesuai kebutuhan Anda
            ]);
        }

        return redirect()->route('cart.show')->with('success', 'Product added to cart.');
    }

    public function showCart()
    {
        $cart = Cart::where('user_id', Auth::id())->with('items.product')->first();
        return view('user.page.keranjang', compact('cart'));
    }
}
