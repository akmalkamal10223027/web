<?php
require_once __DIR__ . "/../config/koneksi.php";

/* =======================
   PROSES SIMPAN DATA
======================= */
if (isset($_POST['simpan'])) {

  $judul = $_POST['judul'];
  $durasi = $_POST['durasi'];
  $harga = $_POST['harga'];
  $hotel_makkah = $_POST['hotel_makkah'];
  $hotel_madinah = $_POST['hotel_madinah'];
  $maskapai = $_POST['maskapai'];
  $sisa_seat = $_POST['sisa_seat'];

  // Upload gambar
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];

  if ($gambar != "") {
    move_uploaded_file($tmp, "../assets/img/" . $gambar);
  }

  mysqli_query($conn, "INSERT INTO paket (
        judul,
        durasi,
        harga,
        hotel_makkah,
        hotel_madinah,
        maskapai,
        sisa_seat,
        gambar,
        status
    ) VALUES (
        '$judul',
        '$durasi',
        '$harga',
        '$hotel_makkah',
        '$hotel_madinah',
        '$maskapai',
        '$sisa_seat',
        '$gambar',
        'aktif'
    )");

  header("Location: dashboard.php?page=paket");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tambah Paket Umroh</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

  <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow border">

    <!-- HEADER -->
    <div class="px-8 py-6 border-b">
      <h2 class="text-2xl font-semibold text-slate-800">
        Tambah Paket Umroh
      </h2>
      <p class="text-sm text-slate-500 mt-1">
        Lengkapi data paket umroh yang akan ditampilkan ke user
      </p>
    </div>

    <!-- FORM -->
    <form method="post" enctype="multipart/form-data" class="px-8 py-6 space-y-5">

      <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">
          Judul Paket
        </label>
        <input name="judul" required class="w-full rounded-xl border px-4 py-2 focus:ring-2 focus:ring-slate-800">
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="text-sm font-medium">Durasi</label>
          <input name="durasi" placeholder="12 Hari" class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
          <label class="text-sm font-medium">Harga</label>
          <input name="harga" placeholder="25000000" class="w-full rounded-xl border px-4 py-2">
        </div>
      </div>

      <div>
        <label class="text-sm font-medium">Hotel Makkah</label>
        <input name="hotel_makkah" class="w-full rounded-xl border px-4 py-2">
      </div>

      <div>
        <label class="text-sm font-medium">Hotel Madinah</label>
        <input name="hotel_madinah" class="w-full rounded-xl border px-4 py-2">
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="text-sm font-medium">Maskapai</label>
          <input name="maskapai" class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
          <label class="text-sm font-medium">Sisa Seat</label>
          <input type="number" name="sisa_seat" class="w-full rounded-xl border px-4 py-2">
        </div>
      </div>

      <div>
        <label class="text-sm font-medium">Gambar Paket</label>
        <input type="file" name="gambar" class="w-full rounded-xl border px-4 py-2 bg-white">
      </div>

      <!-- ACTION -->
      <div class="flex justify-end gap-3 pt-4">
        <a href="dashboard.php?page=paket" class="px-5 py-2 rounded-xl border text-slate-700 hover:bg-slate-100">
          Batal
        </a>

        <button name="simpan" class="px-6 py-2 rounded-xl bg-slate-900 text-white hover:bg-slate-800 shadow">
          Simpan Paket
        </button>
      </div>

    </form>

  </div>

</body>

</html>