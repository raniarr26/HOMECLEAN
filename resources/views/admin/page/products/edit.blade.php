@extends('admin.layout.index')

@section('title', 'Edit Product')

@section('content')
<div class="container">
    <h1 class="m-0">Edit Product</h1>
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Product</label>
            <input type="text" class="form-control" name="nama_product" value="{{ $product->nama_product }}" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga" value="{{ $product->harga }}" required>
        </div>
            <div class="form-group">
            <label>Size</label>
            <input type="text" class="form-control" name="size" value="{{ $product->size }}" required>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
            <img src="{{ asset('storage/' . $product->image) }}" width="200" class="mt-2">
        </div>
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" name="type" value="{{ $product->type }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
