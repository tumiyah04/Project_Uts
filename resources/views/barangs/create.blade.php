<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my stuff management</title>
    <!-- Menambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Menambahkan Google Fonts (Lora) -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&display=swap" rel="stylesheet">

    <!-- Menambahkan Custom CSS untuk Font dan Background -->
    <style>
        /* Styling untuk body menggunakan font Lora dan Flexbox untuk tengah */
        body {
            font-family: 'Lora', serif;
            display: flex;
            justify-content: center;  /* Menjaga container berada di tengah horizontal */
            align-items: center;  /* Menjaga container berada di tengah vertikal */
            height: 100vh;  /* Membuat tinggi body penuh sehingga flex dapat bekerja dengan baik */
            margin: 0;  /* Menghilangkan margin default pada body */
            background-color: #f9f9f9;
        }

        /* Styling untuk container */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;  /* Membatasi lebar agar tampak lebih rapi */
        }

        /* Styling untuk judul */
        h2 {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Styling untuk label input */
        .form-label {
            font-weight: bold;
            color: #333;
        }

        /* Styling untuk tombol */
        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        .form-control {
            border: 1px solid #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Barang</h2>
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Menambahkan Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
