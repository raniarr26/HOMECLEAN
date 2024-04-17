@extends('user.layout.index')

@section('content')

<div class="content mt-5 d-flex flex-lg-wrap gap-4 justify-content-center"> <!-- Tambahkan class justify-content-center di sini -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <img src="{{ asset('assets/img/g1.png') }}" alt="jasa 1" style="width: 30px; height: 50px; margin-top: 10px;" class="mt-3">
            </div>
            <div class="card-body text-center">
                Konten card 1
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Rp.350.000,00</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header ">
                <img src="{{ asset('assets/img/g1.png') }}" alt="jasa 1" style="width: 30px; height: 50px; margin-top: 10px;" class="mt-3">
            </div>
            <div class="card-body text-center">
                Konten card 2
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary"><p>Rp.340.000,00</p></button>
            </div>
        </div>
    </div>
</div>
@endsection
