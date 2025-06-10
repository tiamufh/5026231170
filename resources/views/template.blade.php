<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tahiyyah Mufhimah : 5026231170</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <style>

        :root {
    --primary-color: #ef909d;
    --secondary-color: #f6c8c4;
    --background-gradient-start: #FEF9F9;
    --background-gradient-end: #FCEBEB;
    --card-background: rgba(255, 255, 255, 0.9);
    --text-color: #333;
    --header-text-color: #fff;
    --font-main: 'Poppins', sans-serif;
}

        body {
            font-family: var(--font-main);
            background: linear-gradient(135deg, var(--background-gradient-start), var(--background-gradient-end));
            background-attachment: fixed;
            color: var(--text-color);
        }

        .jumbotron {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: var(--header-text-color);
            padding: 4rem 2rem;
            border-radius: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        .jumbotron h1 {
            font-weight: 700;
        }

        /* 4. Makeover Navbar */
        .navbar {
            background-color: var(--card-background) !important;
            backdrop-filter: blur(10px); /* Efek blur untuk background transparan */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .navbar .nav-link {
            color: var(--primary-color) !important;
            font-weight: 500;
            transition: all 0.2s;
        }
        .navbar .nav-link:hover {
            color: var(--secondary-color) !important;
            transform: translateY(-2px); /* Efek sedikit terangkat saat hover */
        }

        /* 5. Percantik Card & Tabel (Konten Utama) */
        .card {
            background-color: var(--card-background);
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        .card-header {
            background-color: transparent;
            border-bottom: 1px solid #eee;
        }

        .table thead {
            background-color: var(--primary-color);
            color: var(--header-text-color);
        }

        /* 6. Finishing Touches untuk Tombol */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: scale(1.05); /* Efek membesar saat hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-info { /* Tombol CARI */
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

         /* 7. Style Paginator Kustom */
         .pagination .page-item .page-link {
            color: var(--primary-color);
            background-color: #fff;
            border: 1px solid #dee2e6;
            transition: all 0.3s;
        }

        .pagination .page-item .page-link:hover {
            color: #fff;
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .pagination .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            box-shadow: 0 4px 15px -5px var(--primary-color);
        }

        .pagination .page-item.disabled .page-link {
            color: #868e96;
            pointer-events: none;
            background-color: #fff;
            border-color: #dee2e6;
        }

        /* 8. Efek Hover pada Baris Tabel */
        .table-hover tbody tr:hover {
            background-color: var(--background-gradient-end); /* Warna background saat hover */
            cursor: pointer; /* Mengubah cursor menjadi tangan */
            transform: scale(1.01); /* Sedikit membesar */
            box-shadow: 0 8px 30px -10px rgba(0,0,0,0.2);
            transition: all 0.2s ease-in-out;
        }




    </style>

</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231170 : Tahiyyah Mufhimah</h1>
    </div>

    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav w-100 justify-content-around">
            <li class="nav-item">
                <a class="nav-link" href="/frontend">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cat">Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 3</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
