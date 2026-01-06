<?php
include "../config/koneksi.php";

if (!isset($_GET['id'])) {
    header("Location: pesan.php");
    exit;
}

$id = intval($_GET['id']);

// Hapus data
mysqli_query($conn, "DELETE FROM pesan WHERE id = $id");

// Kembali ke halaman pesan
header("Location: pesan.php");
exit;
