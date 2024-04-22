@extends('user.layout.index')

@section('content')

<div class="row mt-5 no-gutters">
		<div class="col-2 bg-light">
			<ul class="list-group list-group-flush p-2 pt-4">
            <li class="list-group-item bg-blue-500 text-white">
                <i class="fas fa-list"></i> Kategori Jasa
            </li>
            <li class="list-group-item">
                <a href="seluruh_area_rumah.php">Seluruh Area Rumah</a>
            </li>
            <li class="list-group-item">
                <a href="ruang_tamu.php">Ruang Tamu</a>
            </li>
            <li class="list-group-item">
                <a href="ruang_keluarga.php">Ruang Keluarga</a>
            </li>
            <li class="list-group-item">
                <a href="kamar_tidur.php">Kamar Tidur</a>
            </li>
            <li class="list-group-item">
                <a href="kamar_mandi.php">Kamar Mandi</a>
            </li>
            <li class="list-group-item">
                <a href="dapur.php">Dapur</a>
            </li>
            <li class="list-group-item">
                <a href="halaman_rumah.php">Halaman Rumah</a>
            </li>
            <li class="list-group-item">
                <a href="rooftop.php">Rooftop</a>
            </li>
        </ul>
    </div>

    <div class="col-10">
	<div class="row">

					<div class="p-2 pt-4" col-6 col-md-4>
				<div class="card ml-2 mr-2" style="width: 16rem;">
					<img src="../assets/img/Area_Rumah/260-1.Tipe 21.png" class="card-img-top" alt="Gambar Produk">
					<div class="card-body bg-light">
						<h5 class="card-title">Tipe 21</h5>
						<p class="card-text">6 x 12</p>
						<p class="card-text">Rp 50.000,00</p>
						<!-- Isi lain dari kartu -->
						<div class="card-footer d-flex flex-row justify-content-between align-items-center">
                        <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp.250.000,00</p> 
                        <a href="/transaksi" class="btn btn-outline-primary" style="font-size: 24px;">
                            <i class="fas fa-cart-plus"></i> 
                        </a>
            </div>
					</div>
				</div>
			</div>

	</div>
</div>

					<div class="p-2 pt-4" col-6 col-md-4>
				<div class="card ml-2 mr-2" style="width: 16rem;">
					<img src="../assets/img/Area_Rumah/260-1.Tipe 21.png" class="card-img-top" alt="Gambar Produk">
					<div class="card-body bg-light">
						<h5 class="card-title">Tipe 21</h5>
						<p class="card-text">6 x 12</p>
						<p class="card-text">Rp 50.000,00</p>
						<!-- Isi lain dari kartu -->
						<div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp.250.000,00</p> 
                <button class="btn btn-outline-primary" style="font-size: 24px;">
                    <i class="fas fa-cart-plus"></i> 
                </button>
            </div>
					</div>
				</div>
			</div>

	</div>
</div>
@endsection
