<?php
require_once __DIR__ . "/../config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT gambar FROM galeri WHERE id='$id'"));

if ($data) {
    unlink("../public/images/" . $data['gambar']);
    mysqli_query($conn, "DELETE FROM galeri WHERE id='$id'");
}

header("Location: dashboard.php?page=galeri");
