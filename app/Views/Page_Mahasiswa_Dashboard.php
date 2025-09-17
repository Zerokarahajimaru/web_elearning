<!DOCTYPE html>
<html>
<head>
    <title>Website SMA XYZ</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Container utama -->
<div class="container my-5" style="max-width: 900px;">

    <!-- Header -->
    <header class="text-center mb-4">
        <h1 class="display-5 fw-bold text-primary">WEBSITE SMA XYZ</h1>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-semibold" href="<?= base_url('dashboard_mahasiswa') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-semibold" href="<?= base_url('mahasiswa') ?>">List Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-semibold" href="<?= base_url('dashboard_mahasiswa/course') ?>">Course 👿👿🦑</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Selamat datang!</h5>
                <p class="card-text">Ini adalah halaman utama website SMA XYZ. Gunakan menu di atas untuk navigasi.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 mt-4 bg-primary text-white rounded">
        <b>Bandung - Jawa Barat</b>
    </footer>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
