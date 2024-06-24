<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function process(Request $request)
    {
        Log::info('Proses checkout dimulai');

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        Log::info('Validasi berhasil');

        $cartItems = Cart::getContent();
        $total = Cart::getTotal();

        Log::info('Item keranjang dan total diambil', ['cartItems' => $cartItems, 'total' => $total]);

        $transaction = Transaction::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'total' => $total,
            'status' => 'pending',
        ]);

        Log::info('Transaksi dibuat', ['transaction' => $transaction]);

        foreach ($cartItems as $item) {
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }

        Log::info('Detail transaksi disimpan');

        $payload = [
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => $request->nama,
                'email' => auth()->user()->email,
                'phone' => $request->no_hp,
                'shipping_address' => $request->alamat,
            ],
            'item_details' => $cartItems->map(function($item) {
                return [
                    'id' => $item->id,
                    'price' => $item->price,
                    'quantity' => $item->quantity,
                    'name' => $item->name,
                ];
            })->toArray(),
        ];

        Log::info('Payload dibuat', ['payload' => $payload]);

        $snapToken = Snap::getSnapToken($payload);

        Log::info('Snap token dibuat', ['snapToken' => $snapToken]);

        return view('user.page.checkout.payment', compact('snapToken', 'transaction'))->with('title', 'Halaman Pembayaran');
    }

    public function callback(Request $request)
    {
        $serverKey = config('services.midtrans.serverKey');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            $transaction = Transaction::find($request->order_id);

            if ($transaction) {
                $transaction->update(['status' => $request->transaction_status]);

                if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                    Cart::clear();
                    return redirect()->route('home')->with('success', 'Pembayaran berhasil.');
                }
            }
        }

        return redirect()->route('home')->with('error', 'Pembayaran gagal.');
    }
}
