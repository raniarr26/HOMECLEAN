@extends('user.layout.index')

@section('content')
<div class="container mt-5">
@php
    use Darryldecode\Cart\Facades\CartFacade as Cart;
@endphp
    <<div class="container mt-5">
    <h2>Checkout</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form id="payment-form" action="{{ route('checkout.process') }}" method="POST">
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
        <button id="pay-button" class="btn btn-success">
            Bayar
        </button>
    </form>
</div>

<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    document.getElementById('pay-button').onclick = function(event){
        event.preventDefault();
        this.disabled = true;
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                // handle success
                console.log(result);
            },
            onPending: function(result){
                // handle pending
                console.log(result);
            },
            onError: function(result){
                // handle error
                console.log(result);
            },
            onClose: function(){
                // handle close
                console.log('customer closed the popup without finishing the payment');
            }
        });
    };
</script>
@endsection
