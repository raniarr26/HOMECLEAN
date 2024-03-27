<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Clean</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Styling for navbar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .active {
            background-color: #666;
        }

        /* Styling for slideshow */
        .slideshow-container {
            max-width: 1000px;
            margin: 50px auto; /* Menambahkan margin atas dan bawah */
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Styling for images */
        .mySlides img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a class="active" href="#">Home</a>
        <a href="#">Our Services</a>
        <a href="#">Our Team</a>
        <a href="#">Gallery</a>
        <a href="#">Contact Us</a>
        <a href="#">Pricing</a>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../public/src/dahsboard/g1.jpg" alt="ini gambar">
        </div>

        <div class="mySlides fade">
            <img src="../public/src/dahsboard/g2.jpg" alt="ini gambar 2">
        </div>

        <div class="mySlides fade">
            <img src=".../public/src/dahsboard/g3.jpg" alt="ini gamabar 3">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Content sections can be placed here -->

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
    
</body>
</html>
