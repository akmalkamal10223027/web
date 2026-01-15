<?php
require_once "../config/koneksi.php";

$id = (int) $_GET['id'];

mysqli_query($conn, "
  DELETE FROM testimoni_sosmed WHERE id=$id
");

header("Location: dashboard.php?page=testimoni");
