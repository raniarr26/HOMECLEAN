@extends('user.layout.index')

@section('content')
<div class="row mt-5 no-gutters justify-content-center">
    <div class="col-10">
        <!-- Carousel Section -->
        <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('assets/img/dahsboard/g1.jpg') }}" alt="First slide" height="450">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/img/dahsboard/g2.jpg') }}" alt="Second slide" height="450">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/img/dahsboard/g3.jpg') }}" alt="Third slide" height="450">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End of Carousel Section -->

        <!-- Daftar produk atau konten lainnya -->
        <div class="row">
            <div class="col-md-3">
                <div class="p-2 pt-4">
                    <div class="card ml-2 mr-2" style="width: 16rem;">
                        <img src="{{ asset('assets/img/Area_Rumah/260-1.Tipe 21.png') }}" class="card-img-top" alt="Gambar Produk">
                        <div class="card-body bg-light">
                            <h5 class="card-title">Tipe 21</h5>
                            <p class="card-text">6 x 12</p>
                            <p class="card-text">Rp 50.000,00</p>
                            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                                <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp.250.000,00</p>
                                <a href="{{ route('transaksi') }}" class="btn btn-outline-primary" style="font-size: 24px;">
                                    <i class="fas fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan produk lainnya di sini -->
        </div>
    </div>
</div>
@endsection
