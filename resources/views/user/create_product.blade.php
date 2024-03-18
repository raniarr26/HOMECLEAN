<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" id="nama_produk" name="nama_produk">
        </div>
        <div>
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" id="nama_pelanggan" name="nama_pelanggan">
        </div>
        <div>
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga">
        </div>
        <div>
            <label for="rekening">Rekening:</label>
            <input type="text" id="rekening" name="rekening">
        </div>
        <div>
            <label for="file">Upload File:</label>
            <input type="file" id="file" name="file">
        </div>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
