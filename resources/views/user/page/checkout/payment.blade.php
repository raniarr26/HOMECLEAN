@extends('user.layout.index')

@section('content')
<div class="container mt-5">
    <h2>Proses Pembayaran</h2>

    <button id="pay-button" class="btn btn-success">Bayar Sekarang</button>
</div>
@endsection

@section('scripts')
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    document.getElementById('pay-button').onclick = function(event){
        event.preventDefault();
        this.disabled = true;
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
                console.log(result);
                window.location.href = '/checkout/finish';
            },
            onPending: function(result){
                console.log(result);
            },
            onError: function(result){
                console.log(result);
                window.location.href = '/checkout/error';
            },
            onClose: function(){
                console.log('Pelanggan menutup popup tanpa menyelesaikan pembayaran');
                this.disabled = false;
            }
        });
    };
</script>
@endsection
