<!DOCTYPE html>
<html>
<head>
    <title>Enroll Course</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5" style="max-width: 500px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title text-center text-primary mb-4">Enroll</h2>

            <p class="text-center fs-5"><?= esc($course_spesific['course_name']) ?></p>

            <form action="<?= base_url('dashboard_mahasiswa/course/'.$course_spesific['course_name']) ?>" method="post">
                <div class="mb-3">
                    <label for="enroll_code" class="form-label fw-semibold">Enroll Cuy</label>
                    <input type="text" id="enroll_code" name="enroll_code_from_mahasiswa" class="form-control" placeholder="Masukkan enroll code" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
