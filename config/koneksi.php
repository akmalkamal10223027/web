<?php
$conn = mysqli_connect("localhost", "root", "", "hajidanumroh");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
