<?php
require_once "../config/koneksi.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM transaksi WHERE id='$id'");

header("Location: dashboard.php?page=pembayaran");
exit;
