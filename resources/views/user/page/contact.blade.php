@extends('user.layout.index')

@section('title', $title)

@section('content')
<div class="content mt-5">
    <h2>Checkout</h2>
    @if(isset($cart) && $cart->items->count() > 0)
        <h3>Order Summary</h3>
        <ul class="list-group">
            @foreach($cart->items as $item)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->nama_product }}" style="width: 50px;">
                            <span>{{ $item->product->nama_product }}</span>
                        </div>
                        <div>
                            <span>Quantity: {{ $item->quantity }}</span>
                            <span>Rp {{ number_format($item->product->harga * $item->quantity, 2, ',', '.') }}</span>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="mt-3">
            <form action="{{ route('cart.processCheckout') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap Anda" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP Anda" required>
                </div>
                <button type="submit" class="btn btn-primary">Process Checkout</button>
            </form>
        </div>
    @else
        <p>Keranjang belanja Anda kosong.</p>
    @endif
</div>
@endsection
