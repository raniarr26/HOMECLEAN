@extends('user.layout.index')

@section('content')

<div class="content mt-5 d-flex flex-wrap gap-4">
    @foreach($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="Gambar Produk">
            <div class="card-body bg-light">
                <h5 class="card-title">{{ $product->nama_product }}</h5>
                <p class="card-text">{{ $product->size }}</p>
                <p class="card-text">Rp {{ number_format($product->harga, 2, ',', '.') }}</p>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp {{ number_format($product->harga, 2, ',', '.') }}</p>
                    <form action="{{ route('cart.add', ['id' => $product->product_id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary" style="font-size: 24px;">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
