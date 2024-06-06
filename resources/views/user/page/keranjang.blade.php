@extends('user.layout.index')

@section('content')
<div class="content mt-5">
    <h2>Keranjang Belanja</h2>
    @if(isset($cart) && $cart->items->count() > 0)
        <ul class="list-group">
            @foreach($cart->items as $item)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div>
                            <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->nama_product }}" style="width: 50px;">
                            <span>{{ $item->product->nama_product }}</span>
                        </div>
                        <div>
                            <span>Rp {{ number_format($item->product->harga, 2, ',', '.') }}</span>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>Keranjang belanja Anda kosong.</p>
    @endif
</div>
@endsection
