<?php
$conn = mysqli_connect("localhost", "root", "", "datatravel");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
