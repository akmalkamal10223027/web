<?php
require_once "../config/koneksi.php";

// validasi parameter
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: dashboard.php?page=jamaah");
    exit;
}

$kodeJamaah = mysqli_real_escape_string($conn, $_GET['id']);

// ambil data jamaah (untuk file)
$data = mysqli_query(
    $conn,
    "SELECT ktp, kk, passport FROM jamaah WHERE kodeJamaah='$kodeJamaah'"
);

if (mysqli_num_rows($data) == 0) {
    header("Location: dashboard.php?page=jamaah");
    exit;
}

$j = mysqli_fetch_assoc($data);

// path folder upload
$folder = "../uploads/jamaah/";

// hapus file jika ada
if (!empty($j['ktp']) && file_exists($folder . $j['ktp'])) {
    unlink($folder . $j['ktp']);
}

if (!empty($j['kk']) && file_exists($folder . $j['kk'])) {
    unlink($folder . $j['kk']);
}

if (!empty($j['passport']) && file_exists($folder . $j['passport'])) {
    unlink($folder . $j['passport']);
}

// hapus data jamaah
$hapus = mysqli_query(
    $conn,
    "DELETE FROM jamaah WHERE kodeJamaah='$kodeJamaah'"
);

if (!$hapus) {
    die("Gagal hapus data: " . mysqli_error($conn));
}

// kembali ke dashboard
header("Location: dashboard.php?page=jamaah");
exit;
