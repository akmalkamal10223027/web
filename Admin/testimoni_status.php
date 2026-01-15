<?php
require_once "../config/koneksi.php";

$id = (int) $_GET['id'];

$q = mysqli_query($conn, "SELECT status FROM testimoni_sosmed WHERE id=$id");
$d = mysqli_fetch_assoc($q);

$status = ($d['status'] === 'aktif') ? 'nonaktif' : 'aktif';

mysqli_query($conn, "
  UPDATE testimoni_sosmed
  SET status='$status'
  WHERE id=$id
");

header("Location: dashboard.php?page=testimoni");
