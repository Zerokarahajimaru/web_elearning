<!DOCTYPE html>
<html>
<head>
    <title>Course Mahasiswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <p class="h5 mb-4 text-center">Salam dari course mahasiswa</p>

    <table class="table table-striped table-hover shadow-sm bg-white rounded">
        <thead class="table-primary">
            <tr>
                <th>Nama Course</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($course_mahasiswa as $row): ?>
            <tr>
                <td><?= esc($row['course_name']) ?></td>
                <td>
                    <a href="<?= base_url('dashboard_mahasiswa/course/' . $row['course_name']) ?>" class="btn btn-sm btn-success">
                        Enroll Course
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
