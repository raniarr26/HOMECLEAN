<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Home Clean | {{$title}}</title>
</head>
<style>
    /* style.css */

/* Aturan untuk ikon navigasi */
.icon-nav {
    position: relative;
    color: #FFFFFF8C;
}

.icon-nav:hover {
    color: white;
}

/* Aturan untuk lingkaran merah */
.circle {
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: red;
    color: white;
    text-align: center;
    font-size: 12px;
    top: 10px;
    right: 130px;
}

/* Aturan untuk footer */
/* style.css */

/* Aturan untuk footer */
section{
    min-height: 80vh;
}
footer {
    position: static; /* Ubah menjadi relative jika ingin footer tetap di bawah */
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: black;
    color: white;
    padding: 20px; /* Sesuaikan dengan kebutuhan Anda */
}

/* Aturan untuk container di footer */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

/* Aturan untuk bagian title-left dan title-middle di footer */
.title-left, .title-middle {
    flex: 1;
}

/* Aturan untuk judul header di footer */
.header-title {
    font-size: 18px; /* Sesuaikan dengan kebutuhan Anda */
    font-weight: bold;
    margin-bottom: 10px; /* Sesuaikan dengan kebutuhan Anda */
}

/* Aturan untuk konten di footer */
footer p {
    margin-bottom: 10px; /* Sesuaikan dengan kebutuhan Anda */
}


/* Aturan untuk konten di footer */
footer p {
    margin-bottom: 10px; /* Sesuaikan dengan kebutuhan Anda */
}

</style>
<body>
    
    <main>
        <header>
        @include('user.componen.navbar')
        </header>
        <section>
            @yield('content')
        </section>
        <footer >
            <div class="container">
            <div class="d-flex">
                <div class="title-left">
                    <div class="header-title">
                        Home Clean
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum facere repellendus, magnam maiores porro ut sed eligendi esse architecto debitis quaerat velit incidunt similique, molestiae a cupiditate quia excepturi corrupti!</p>
                </div>
                <div class="title-middle">
                    <div class="header-title">
                        Tentang Kami
                    </div>
                    <ul>
                        <li>
                            <address>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, cum? Libero, aperiam.
                            </address>
                        </li>
                        <li>
                            <p>08123142412</p>
                        </li>
                        <li>
                            <p>123124124324</p>
                        </li>
                    </ul>
                </div>
                
            </div>
            </div>
        </footer>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>