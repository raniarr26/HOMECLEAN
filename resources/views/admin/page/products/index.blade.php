@extends('admin.layout.index')

@section('title', 'Tambah Product')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Product</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Produk</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Ukuran</th>
                                <th>Tipe</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->nama_product }}</td>
                                <td>{{ $product->harga }}</td>
                                <td>{{ $product->size }}</td>
                                <td>{{ $product->type }}</td>
                                <td><img src="{{ asset('images/' . $product->image) }}" width="50" alt="image"></td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
