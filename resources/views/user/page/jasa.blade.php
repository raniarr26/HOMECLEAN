@extends('user.layout.index')

@section('content')

<div class="content mt-5 d-flex flex-wrap gap-4">
    @foreach($products as $product)
        <div class="card">
            <div class="card-header">
                <div class="col-10">
                    <div class="p-2 pt-4" col-6 col-md-4>
                        <div class="card ml-2 mr-2" style="width: 16rem;">
                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="Gambar Produk">
                            <div class="card-body bg-light">
                                <h5 class="card-title">{{ $product->nama_product }}</h5>
                                <p class="card-text">{{ $product->size }}</p>
                                <p class="card-text">Rp {{ number_format($product->harga, 2, ',', '.') }}</p>
                                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                                    <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp {{ number_format($product->harga, 2, ',', '.') }}</p>
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary" style="font-size: 24px;">
                                            <i class="fas fa-cart-plus"></i> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
