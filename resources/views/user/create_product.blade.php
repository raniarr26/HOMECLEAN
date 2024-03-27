<form action="{{ route('user.products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk">
    </div>
    <!-- tambahkan input untuk memungkinkan pengguna mengunggah gambar -->
    <div>
        <label for="gambar_produk">Gambar Produk:</label>
        <input type="file" id="gambar_produk" name="gambar_produk">
    </div>
    <!-- tambahkan tag img untuk menampilkan gambar yang diunggah -->
    <div>
        <label for="preview">Preview Gambar:</label><br>
        <img id="preview" src="public/src/p10.png" alt="Preview Gambar" style="max-width: 200px; max-height: 200px;">
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
    <button type="submit">Tambah</button>
</form>
