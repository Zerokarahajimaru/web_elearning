
<?php

if (count($nim) ) {
    echo "<h3>Detail Mahasiswa</h3>";
    echo "<p><b>NIM:</b> " . htmlspecialchars($nim['id_mhs']) . "</p>";
    echo "<p><b>Nama:</b> " . htmlspecialchars($nim['name']) . "</p>";
} else {
    echo "<p>Data tidak ditemukan.</p>";
}


?>
<br>
<a href="<?=base_url("mahasiswa") ?>">Kembali</a>
