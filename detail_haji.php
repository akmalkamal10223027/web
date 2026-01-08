<?php
include "config/koneksi.php";

// ambil id dari URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: semua_paket.php");
    exit;
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

// ambil data paket
$query = mysqli_query($conn, "SELECT * FROM program_haji WHERE id='$id'");
$p = mysqli_fetch_assoc($query);

// jika data tidak ditemukan
if (!$p) {
    header("Location: index.php");
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

<body class="bg-gray-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between py-3 px-6">

            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-3">
                <img src="./public/images/logo2.png" alt="Logo Sakhadiamond" width="48" height="48"
                    class="h-12 w-auto" />
            </a>

            <!-- Menu -->
            <ul class="hidden md:flex gap-6 font-medium">

                <li>
                    <a href="index.php" class="hover:text-green-700 transition flex items-center gap-1">
                        <i class="fas fa-home text-sm"></i> Home
                    </a>
                </li>

                <li>
                    <a href="Tentangkami.php" class="hover:text-green-700 transition flex items-center gap-1">
                        <i class="fas fa-users text-sm"></i> Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="semua paket.php" class="hover:text-green-700 transition flex items-center gap-1">
                        <i class="fas fa-box text-sm"></i> semua paket
                    </a>
                </li>

                <li>
                    <a href="galeri.php" class="hover:text-green-700 transition flex items-center gap-1">
                        <i class="fas fa-images text-sm"></i> Galeri
                    </a>
                </li>

                <li>
                    <a href="kontak.php" class="hover:text-green-700 transition flex items-center gap-1">
                        <i class="fas fa-phone text-sm"></i> Kontak
                    </a>
                </li>
            </ul>

            <!-- Icons -->
            <div class="flex gap-3">
                <a href="https://www.instagram.com/alghifariii._29?igsh=b2pmamtteXRmYnE4/" target="_blank"
                    class="h-8 w-8 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.tiktok.com/@cuawww34?_r=1&_t=ZS-92tbaxJFXa1" target="_blank"
                    class="h-8 w-8 bg-black text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>

        </div>
    </nav>

    <!-- HEADER -->
    <section class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <a href="index.php" class="text-green-600 hover:underline flex items-center gap-2 mb-4">
                <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
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
    <section class="max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-2 gap-14 items-start">

        <!-- GAMBAR -->
        <div class="bg-white rounded-3xl shadow-lg p-6 flex items-center justify-center">
            <div class="w-full h-[420px] bg-gray-100 rounded-2xl flex items-center justify-center overflow-hidden">
                <img src="assets/img/<?= htmlspecialchars($p['gambar']); ?>" alt="<?= htmlspecialchars($p['judul']); ?>"
                    class="max-w-full max-h-full object-contain">
            </div>
        </div>

        <!-- INFO -->
        <div class="bg-white rounded-3xl shadow-lg p-8 space-y-6">

            <!-- HEADER -->
            <div class="flex items-center justify-between border-b pb-4">
                <h2 class="text-2xl font-bold text-gray-800">Detail Paket</h2>
                <span class="text-2xl font-extrabold text-green-700">
                    Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                </span>
            </div>

            <!-- INFO GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700">

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-clock text-green-600"></i>
                    <span><b>Durasi:</b> <?= $p['durasi']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-plane text-green-600"></i>
                    <span><b>Maskapai:</b> <?= $p['maskapai']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-hotel text-green-600"></i>
                    <span><b>Hotel Makkah:</b> <?= $p['hotel_makkah']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-hotel text-green-600"></i>
                    <span><b>Hotel Madinah:</b> <?= $p['hotel_madinah']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-user-group text-green-600"></i>
                    <span><b>Sisa Seat:</b> <?= $p['sisa_seat']; ?> jamaah</span>
                </div>

            </div>

            <!-- CTA -->
            <a href="https://wa.me/6282130938060?text=Saya%20ingin%20daftar%20<?= urlencode($p['judul']); ?>"
                target="_blank"
                class="mt-6 flex items-center justify-center gap-3 bg-green-600 hover:bg-green-700 text-white py-4 rounded-2xl text-lg font-semibold transition shadow-lg hover:shadow-xl">
                <i class="fab fa-whatsapp text-xl"></i>
                Daftar via WhatsApp
            </a>

        </div>
    </section>