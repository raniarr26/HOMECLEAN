@extends('user.layout.index')

@section('content')
<div class="row">
    <div class="col-sm-10">
        <div class="card">
            <div class="card-body">
            <h3>Masukan Data anda</h3>        
                <div class="row">
                <label for="nama" class="col-form-label col-sm-3">Nama</label>
                <input type="text" class="form-control col-sm-9" id="" name="nama" placeholder="Masukan Nama Anda">
            </div>
        <div class="row">
            <label for="alamat" class="col-form-label col-sm-3">Alamat</label>
            <input type="text" class="form-control col-sm-9" id="alamat" name="Masukan Alamat Anda">
        </div>
        <div class="row">
            <label for="Nohp" class="col-form-label col-sm-3">Nomor Hp</label>
            <input type="text" class="form-control col-sm-9" placeholder="Masukan Nomor Handphone Anda">
        </div>
</div>
    <button class="btn btn-success" >
            <i class="fas fa-print"></i>
    print        
        </button>
</div>
</div>
</div>
@endsection