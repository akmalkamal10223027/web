<?php
include "../config/koneksi.php";

$id = $_GET['id'];

// Ambil gambar 
$q = mysqli_query($conn, "SELECT gambar FROM paket WHERE id='$id'");
$data = mysqli_fetch_assoc($q);

if ($data && $data['gambar'] != '') {
    $path = "../assets/img/" . $data['gambar'];
    if (file_exists($path)) {
        unlink($path);
    }
}

// Hapus data
mysqli_query($conn, "DELETE FROM paket WHERE id='$id'");

// Kembali ke dashboard paket
header("Location: dashboard.php?page=paket");
exit;
