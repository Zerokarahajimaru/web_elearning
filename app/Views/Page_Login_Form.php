<!DOCTYPE html>
<html>
<head>
    <title>Login SMA XYZ</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container" style="max-width: 400px; margin-top: 100px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title text-center mb-4 text-primary">Login</h3>

            <form action ="<?= base_url('auth') ?>" method="post">
                <!-- Username -->
                <div class="mb-3">
                    <label for="id_mhs" class="form-label">Username</label>
                    <input type="text" name="id_mhs" id="id_mhs" class="form-control" placeholder="Masukkan username" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <!-- Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
