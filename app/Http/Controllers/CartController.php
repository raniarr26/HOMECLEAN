<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

        $cartItem = $cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
        } else {
            $cartItem = new CartItem([
                'product_id' => $productId,
                'quantity' => 1,
            ]);
            $cart->items()->save($cartItem);
        }

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function showCart()
    {
        $cart = Cart::where('user_id', auth()->id())->with('items.product')->first();
        return view('user.page.keranjang', compact('cart'));
    }
}
