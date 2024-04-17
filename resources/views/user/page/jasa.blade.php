@extends('user.layout.index')

@section('content')

<div class="row mt-4">
<div class="col-md-3">
    <div class="card" style=" width: 18rem;">
    <div class="card-header">
        Featured
    </div>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
    </ul>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-9 d-flex wrap">
        
        <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius: 5px;">
            <img src="{{ asset('assets/img/g1.png') }}" alt="denah 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Area Dapur</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp.250.000,00</p> 
                <button class="btn btn-outline-primary" style="font-size: 24px;">
                    <i class="fas fa-cart-plus"></i> 
                </button>
            </div>
        </div>

        <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius: 5px;">
            <img src="{{ asset('assets/img/g1.png') }}" alt="denah 1" style="width: 100%;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify">Area Dapur</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp.250.000,00</p> 
                <button class="btn btn-outline-primary" style="font-size: 24px;">
                    <i class="fas fa-cart-plus"></i> 
                </button>
            </div>
        </div>
</div>

</div>

@endsection