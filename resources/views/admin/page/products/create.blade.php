@extends('layouts.admin')

@section('title', 'Tambah Product')

@section('content')
<div class="container">
    <h1 class="m-0">Tambah Product</h1>
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Product</label>
            <input type="text" class="form-control" name="nama_product" placeholder="Nama Product" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Harga" required>
        </div>
        <div class="form-group">
            <label>Size</label>
            <input type="text" class="form-control" name="size" placeholder="Size" required>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" name="type" placeholder="Type" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
