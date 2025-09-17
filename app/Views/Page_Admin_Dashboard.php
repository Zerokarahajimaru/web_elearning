<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin - Delete/Insert</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <!-- Content -->
    <main class="card shadow p-4 mb-4">
        <h1 class="text-center text-primary mb-4">Sikabbu Yatt</h1>

        <form action="<?= base_url('dashboard_admin/delete') ?>" method="post">
            <?php $i = 0; ?>

            <?php foreach ($course as $row1): ?>
                <div class="card mb-3 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <?= esc($row1['course_name']) ?>
                    </div>
                    <div class="card-body">
                        <?php $hasUser = false; ?>
                        <?php foreach ($takes as $row2): ?>
                            <?php if ($row2['course_id_fk'] == $row1['course_id']): ?>
                                <?php $hasUser = true; ?>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="input_value[<?= $i ?>]" value="<?= esc($row2['user_id']); ?>" id="user<?= $i ?>">
                                    <label class="form-check-label" for="user<?= $i ?>">
                                        <?= esc($row2['nama']) ?>
                                    </label>
                                </div>
                                <?php $i++; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php if (!$hasUser): ?>
                            <p class="text-muted">Tidak ada mahasiswa yang mengambil course ini.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-danger">Delete Selected</button>
                <!-- Nanti bisa tambah button untuk insert -->
                <button type="button" class="btn btn-success">Insert New</button>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-secondary text-white text-center py-3 rounded-bottom shadow">
        <b>Bandung - Jawa Barat</b>
    </footer>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
