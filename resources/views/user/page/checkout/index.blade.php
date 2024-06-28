@extends('user.layout.index')

@section('content')
<div class="container mt-5">
    <h2>Checkout</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form id="checkout-form" action="{{ route('checkout.process') }}" method="POST">
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
        <button type="button" id="pay-button" class="btn btn-success">Bayar Sekarang</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    document.getElementById('pay-button').onclick = function(event){
        event.preventDefault();
        this.disabled = true;
        const form = document.getElementById('checkout-form');
        const formData = new FormData(form);
        
        const url = "{{ route('checkout.process') }}"; // Simpan URL di variabel
        const csrfToken = '{{ csrf_token() }}'; // Simpan CSRF token di variabel

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            snap.pay(data.snapToken, {
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
                    document.getElementById('pay-button').disabled = false;
                }
            });
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('pay-button').disabled = false;
        });
    };
</script>
@endsection
