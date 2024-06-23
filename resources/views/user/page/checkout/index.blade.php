@extends('user.layout.index')

@section('content')
<div class="container mt-5">
    <h2>Checkout</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="no_hp" class="col-sm-2 col-form-label">Nomor Hp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone Anda" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-print"></i> Bayar        
        </button>
    </form>
</div>
@endsection
