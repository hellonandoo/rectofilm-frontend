<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectofilm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar-custom {
            background-color: #333;
            color: white;
        }
        .footer-custom {
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .navbar-brand img {
            height: 40px;
        }
        .navbar-custom .form-inline {
            flex-grow: 1;
            max-width: 500px;
        }
        .navbar-custom .form-inline input {
            width: 100%;
        }
        .navbar-custom .nav-item a {
            color: white;
        }
        .navbar-custom .nav-item a:hover {
            color: #ffd700; /* Custom color on hover */
        }
        .profile {
            display: flex;
            align-items: center;
        }
        .profile .fa-user-circle {
            font-size: 30px;
            margin-right: 10px;
        }
        .content {
            flex: 1;
            margin-top: 20px;
        }
        #map {
            width: 100%;
            height: 400px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="RectoFilm Logo">
            </a>
            <form class="form-inline my-2 my-lg-0 mx-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari film yang kamu inginkan" aria-label="Search">
            </form>
        </div>
        <div class="container mt-2">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Now Playing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Theaters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Up Coming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Playing in JAKARTA</a>
                </li>
            </ul>
            <div class="profile">
                <i class="fas fa-user-circle"></i>
                <a href="#" class="btn btn-outline-light">ANISA</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container content">
        <h4 class="mb-3">Kota saat ini - <span id="current-city">JAKARTA</span></h4>
        <div class="dropdown mb-4">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pilih Kota
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <span class="dropdown-item-text" data-lat="-3.654703" data-lng="128.190346">AMBON</span>
                <span class="dropdown-item-text" data-lat="-1.269160" data-lng="116.825165">BALIKPAPAN</span>
                <span class="dropdown-item-text" data-lat="-6.917464" data-lng="107.619123">BANDUNG</span>
                <span class="dropdown-item-text" data-lat="-3.319437" data-lng="114.590755">BANJARMASIN</span>
                <span class="dropdown-item-text" data-lat="1.142500" data-lng="104.031680">BATAM</span>
                <span class="dropdown-item-text" data-lat="-6.241586" data-lng="106.992416">BEKASI</span>
                <span class="dropdown-item-text" data-lat="-3.800444" data-lng="102.265541">BENGKULU</span>
                <span class="dropdown-item-text" data-lat="-6.596700" data-lng="106.797230">BOGOR</span>
                <span class="dropdown-item-text" data-lat="-7.884791" data-lng="113.820795">BONDOWOSO</span>
                <span class="dropdown-item-text" data-lat="0.132178" data-lng="117.498194">BONTANG</span>
                <span class="dropdown-item-text" data-lat="-6.815740" data-lng="107.142487">CIANJUR</span>
                <span class="dropdown-item-text" data-lat="-6.341677" data-lng="107.062866">CIKARANG</span>
                <span class="dropdown-item-text" data-lat="-8.670458" data-lng="115.212629">DENPASAR</span>
                <span class="dropdown-item-text" data-lat="-6.402484" data-lng="106.794243">DEPOK</span>
                <span class="dropdown-item-text" data-lat="-7.202370" data-lng="107.899494">GARUT</span>
                <span class="dropdown-item-text" data-lat="0.543993" data-lng="123.059995">GORONTALO</span>
                <span class="dropdown-item-text" data-lat="-6.208763" data-lng="106.845599">JAKARTA</span>
                <span class="dropdown-item-text" data-lat="-2.533710" data-lng="140.718132">JAYAPURA</span>
            </div>
        </div>
        <div id="map"></div>
    </div>

    <!-- Footer -->
    <footer class="footer-custom py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>Address:</strong>
                        PT Recto Nusaflm
                        Jl. Dr. Ir. H. Soekarno No.682, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>Phone:</strong>
                        085-3453-34343
                    </p>
                    <p>
                        <strong>Email:</strong>
                        help@recto.id
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>Follow Us:</strong>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Rectofilm. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([-6.2088, 106.8456], 13); // Jakarta coordinates

        // Add a tile layer to the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Function to add marker
        function addMarker(lat, lng, city) {
            L.marker([lat, lng]).addTo(map)
                .bindPopup(city)
                .openPopup();
        }

        // Add event listeners to dropdown items
        document.querySelectorAll('.dropdown-item-text').forEach(function(item) {
            item.addEventListener('click', function() {
                var lat = this.getAttribute('data-lat');
                var lng = this.getAttribute('data-lng');
                var city = this.textContent;
                map.setView([lat, lng], 13);
                addMarker(lat, lng, city);
                document.getElementById('current-city').textContent = city; // Update city name
            });
        });
    </script>
</body>
</html>
