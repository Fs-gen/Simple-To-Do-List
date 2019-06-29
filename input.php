<?php
include "koneksi.php";
$kegiatan = mysqli_real_escape_string($conn, $_POST['kegiatan']);

$query = "INSERT INTO list VALUES ('','$kegiatan',NOW())";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Gagal Upload List";
} else {
    echo "berhasil Upload";
    echo "<a href='index.php'>kembali</a>";
}


?>