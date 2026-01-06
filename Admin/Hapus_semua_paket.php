<?php
include "../config/koneksi.php";

// validasi id
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: dashboard.php?page=semua_paket");
    exit;
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

// ambil data gambar dari tabel semua_paket
$query = mysqli_query($conn, "SELECT gambar FROM semua_paket WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

// hapus file gambar jika ada
if ($data && !empty($data['gambar'])) {
    $path = "../assets/img/" . $data['gambar'];
    if (file_exists($path)) {
        unlink($path);
    }
}

// hapus data dari database
mysqli_query($conn, "DELETE FROM semua_paket WHERE id='$id'");

// kembali ke halaman semua paket
header("Location: dashboard.php?page=semua_paket");
exit;
