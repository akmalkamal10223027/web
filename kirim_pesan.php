<?php
include "config/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

    mysqli_query($conn, "INSERT INTO pesan (nama, email, pesan)
        VALUES ('$nama', '$email', '$pesan')");

    header("Location: kontak.php?status=terkirim");
    exit;
}
