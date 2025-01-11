<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my stuff management</title>
    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Menambahkan Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Menambahkan Custom CSS untuk Font dan Background -->
    <style>
        /* Styling untuk body */
        body {
            font-family: 'Lora', serif; /* Menggunakan Lora untuk seluruh halaman */
            background: #D7C8A4; /* Background warna coklat muda untuk kesan lembut */
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Styling untuk navbar */
        .navbar {
            background-color: #D7C8A4; /* Warna coklat tua yang elegan */
        }

        .navbar-brand, .nav-link {
            font-family: 'Lora', serif; /* Menggunakan Lora untuk navbar untuk kesan elegan */
            font-weight: 800;
            color: white !important;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #F9C74F !important; /* Warna kuning cerah saat hover untuk kontras */
        }

        /* Styling untuk container */
        .container {
            background-color: #4F3C3C; /* Warna coklat gelap dengan transparansi */
            padding: 20px;
            border-radius: 30px;
            margin-top: 30px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container h1, .container h2 {
            font-family: 'Lora', serif; /* Judul menggunakan font Lora untuk tampilan elegan */
            color: #F9C74F; /* Warna kuning cerah untuk judul */
        }

        /* Styling untuk footer */
        footer {
            background-color: #5A4B4D; /* Footer dengan warna coklat tua yang konsisten */
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
            border-top: 2px solid #F9C74F; /* Garis pembatas kuning untuk footer */
        }

        footer a {
            color: #F9C74F;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Styling tambahan untuk tombol dan link */
        .btn-primary {
            background-color: #F9C74F;
            border: none;
        }

        .btn-primary:hover {
            background-color: #F8B400;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('barangs.index') }}">SIMBAR</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barangs.index') }}">DAFTAR BARANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barangs.create') }}">INPUT BARANG</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 SIMBAR. All Rights Reserved. <a href="#">Privacy Policy</a></p>
    </footer>

    <!-- Menambahkan Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
