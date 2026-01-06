<?php
require_once "../config/koneksi.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM jamaah WHERE id='$id'");

header("Location: dashboard.php?page=jamaah");
exit;
