<?php
include "../config/koneksi.php";

$id = $_GET['id'];

// Ambil gambar dulu (opsional, biar file ikut terhapus)
$q = mysqli_query($conn, "SELECT gambar FROM program_haji WHERE id='$id'");
$data = mysqli_fetch_assoc($q);

if ($data && $data['gambar'] != '') {
    $path = "../assets/img/" . $data['gambar'];
    if (file_exists($path)) {
        unlink($path);
    }
}

// Hapus data
mysqli_query($conn, "DELETE FROM program_haji WHERE id='$id'");

// Kembali ke dashboard paket
header("Location: dashboard.php?page=program_haji");
exit;
