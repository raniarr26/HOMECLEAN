@extends('user.layout.index')

@section('content')
<div class="container mt-5">
    <h2>Keranjang Belanja</h2>
    @if($cart && $cart->items->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart->items as $item)
                    <tr>
                        <td>{{ $item->product->nama_product }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rp {{ number_format($item->product->harga, 2, ',', '.') }}</td>
                        <td>Rp {{ number_format($item->product->harga * $item->quantity, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Keranjang Anda kosong.</p>
    @endif
</div>
@endsection
