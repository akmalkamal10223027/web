<?php
include "config/koneksi.php";

// ambil id dari URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: semua_paket.php");
    exit;
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

// ambil data paket
$query = mysqli_query($conn, "SELECT * FROM semua_paket WHERE id='$id'");
$p = mysqli_fetch_assoc($query);

// jika data tidak ditemukan
if (!$p) {
    header("Location: semua_paket.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($p['judul']); ?> - Sakha Diamond</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-50">

    <!-- HEADER -->
    <section class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <a href="semua paket.php" class="text-green-600 hover:underline text-sm flex items-center gap-2 mb-4">
                <i class="fas fa-arrow-left"></i> Kembali ke Semua Paket
            </a>

            <h1 class="text-3xl font-bold text-green-700">
                <?= htmlspecialchars($p['judul']); ?>
            </h1>
            <p class="text-gray-600 mt-2">
                Paket Umroh & Haji terbaik bersama Sakha Diamond
            </p>
        </div>
    </section>

    <!-- DETAIL -->
    <section class="max-w-7xl mx-auto px-6 py-14 grid lg:grid-cols-2 gap-12">

        <!-- GAMBAR -->
        <div class="rounded-2xl overflow-hidden shadow bg-white">
            <img src="assets/img/<?= $p['gambar']; ?>"
                class="w-full h-[420px] object-cover hover:scale-105 transition duration-500">
        </div>

        <!-- INFORMASI -->
        <div class="bg-white rounded-2xl shadow border p-8 space-y-5">

            <div class="flex items-center justify-between border-b pb-4">
                <h2 class="text-2xl font-semibold text-slate-800">
                    Detail Paket
                </h2>
                <span class="text-2xl font-bold text-green-700">
                    Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                </span>
            </div>

            <ul class="space-y-3 text-slate-700 text-sm">
                <li class="flex items-center gap-3">
                    <i class="fas fa-clock text-green-600 w-5"></i>
                    <span><strong>Durasi:</strong> <?= htmlspecialchars($p['durasi']); ?></span>
                </li>

                <li class="flex items-center gap-3">
                    <i class="fas fa-hotel text-green-600 w-5"></i>
                    <span><strong>Hotel Makkah:</strong> <?= htmlspecialchars($p['hotel_makkah']); ?></span>
                </li>

                <li class="flex items-center gap-3">
                    <i class="fas fa-hotel text-green-600 w-5"></i>
                    <span><strong>Hotel Madinah:</strong> <?= htmlspecialchars($p['hotel_madinah']); ?></span>
                </li>

                <li class="flex items-center gap-3">
                    <i class="fas fa-plane text-green-600 w-5"></i>
                    <span><strong>Maskapai:</strong> <?= htmlspecialchars($p['maskapai']); ?></span>
                </li>

                <li class="flex items-center gap-3">
                    <i class="fas fa-users text-green-600 w-5"></i>
                    <span><strong>Sisa Seat:</strong> <?= $p['sisa_seat']; ?> jamaah</span>
                </li>
            </ul>

            <!-- CTA -->
            <div class="pt-6 flex flex-wrap gap-4">
                <a href="https://wa.me/6282130938060?text=Saya%20ingin%20daftar%20<?= urlencode($p['judul']); ?>"
                    target="_blank"
                    class="flex-1 bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold text-center transition">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Daftar via WhatsApp
                </a>

                <a href="semua paket.php"
                    class="flex-1 border border-green-600 text-green-700 py-3 rounded-xl font-semibold text-center hover:bg-green-50 transition">
                    Lihat Paket Lainnya
                </a>
            </div>

        </div>

    </section>

</body>

</html>