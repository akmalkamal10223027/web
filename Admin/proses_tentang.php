<?php
include "../config/koneksi.php";

$profil = $_POST['profil'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];

if ($_FILES['gambar']['name']) {
    $nama = time() . $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/$nama");

    mysqli_query($conn, "UPDATE tentang_kami 
        SET profil='$profil', visi='$visi', misi='$misi', gambar='$nama'");
} else {
    mysqli_query($conn, "UPDATE tentang_kami 
        SET profil='$profil', visi='$visi', misi='$misi'");
}

header("Location: dashboard.php?page=tentang");
