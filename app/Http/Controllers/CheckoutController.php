<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::getContent();
        return view('user.page.checkout.index', compact('cartItems'));
    }

    public function process(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        $cartItems = Cart::getContent();
        $total = Cart::getTotal();

        $transaction = new Transaction();
        $transaction->nama = $request->nama;
        $transaction->alamat = $request->alamat;
        $transaction->no_hp = $request->no_hp;
        $transaction->total = $total;
        $transaction->save();

        // Clear cart after transaction is saved
        Cart::clear();

        return redirect()->route('checkout.index')->with('success', 'Checkout completed successfully.');
    }
}
