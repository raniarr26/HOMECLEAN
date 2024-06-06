<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Home Clean | {{$title}}</title>
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh; 
            width: 250px;
            background-color: black; 
            padding: 20px; 
            z-index: 1000;
        }

        .sidebar h5 {
            color: white;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            display: block;
        }

        .sidebar ul li a:hover {
            background-color: #f1f1f1;
        }

        main {
            margin-left: 250px;
            padding: 20px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: black;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <h5>Home Clean</h5>
        <hr class="bg-white">
        <ul>
            <li>
                <a href="#" class="nav-link">
                    <div class="d-flex gap-3">
                        <span class="material-icons">dashboard</span>
                        <p class="m-0 p-0">Dashboard</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('products.index') }}" class="nav-link">
                    <div class="d-flex gap-3">
                        <span class="material-icons">inventory</span>
                        <p class="m-0 p-0">Product</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('page.users.index') }}" class="nav-link">
                    <div class="d-flex gap-3">
                        <span class="material-icons">people_alt</span>
                        <p class="m-0 p-0">User Management</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="/report" class="nav-link">
                    <div class="d-flex gap-3">
                        <span class="material-icons">analytics</span>
                        <p class="m-0 p-0">Report</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <div class="d-flex gap-3">
                        <span class="material-icons">logout</span>
                        <p class="m-0 p-0">Logout</p>
                    </div>
                </a>
            </li>
        </ul>
    </aside>

    <main>
        @yield('content')
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
