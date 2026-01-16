<?php
include "config/koneksi.php";

// ambil semua paket
$data = mysqli_query($conn, "SELECT * FROM semua_paket ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Semua Paket - Sakha Diamond</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-50">

    <!-- navbar -->
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between py-3 px-6">

            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-3">
                <img src="./public/logo/logo2.png" alt="Logo Sakhadiamond" width="48" height="48" class="h-12 w-auto" />
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

    <!-- Judul-->
    <section class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-12 text-center">
            <h1 class="text-3xl font-bold text-green-700 mb-3">
                Semua Paket Umroh & Haji
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Pilih paket terbaik sesuai kebutuhan ibadah Anda bersama kami
            </p>
        </div>
    </section>

    <!-- LIST PAKET -->
    <section class="max-w-7xl mx-auto px-6 py-14">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php while ($p = mysqli_fetch_assoc($data)) { ?>
                <div class="bg-white rounded-2xl shadow-sm border hover:shadow-lg transition overflow-hidden">

                    <!-- GAMBAR -->
                    <div class="h-56 overflow-hidden">
                        <img src="assets/img/<?= $p['gambar']; ?>"
                            class="w-full h-full object-cover hover:scale-110 transition duration-500">
                    </div>

                    <!-- KONTEN -->
                    <div class="p-6 space-y-3">

                        <h3 class="text-lg font-semibold text-slate-800">
                            <?= htmlspecialchars($p['judul']); ?>
                        </h3>

                        <div class="text-sm text-slate-600 space-y-1">
                            <p><i class="fas fa-clock text-green-600 mr-2"></i>
                                Durasi: <?= htmlspecialchars($p['durasi']); ?></p>

                            <p><i class="fas fa-hotel text-green-600 mr-2"></i>
                                Hotel Makkah: <?= htmlspecialchars($p['hotel_makkah']); ?></p>

                            <p><i class="fas fa-hotel text-green-600 mr-2"></i>
                                Hotel Madinah: <?= htmlspecialchars($p['hotel_madinah']); ?></p>

                            <p><i class="fas fa-plane text-green-600 mr-2"></i>
                                Maskapai: <?= htmlspecialchars($p['maskapai']); ?></p>

                            <p><i class="fas fa-users text-green-600 mr-2"></i>
                                Sisa Seat: <?= $p['sisa_seat']; ?></p>
                        </div>

                        <!-- HARGA -->
                        <div class="pt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-green-700">
                                Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                            </span>

                            <a href="detail_paket.php?id=<?= $p['id']; ?>"
                                class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-xl text-sm font-medium transition">
                                Detail
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-14 mt-20">
        <div class="container mx-auto max-w-7xl px-4">

            <div class="grid md:grid-cols-4 gap-10">

                <!-- BRAND -->
                <div class="md:col-span-2">
                    <div class="flex items-center gap-4 mb-5">
                        <img src="./public/logo/logo2.png" alt="Sakha Diamond Logo"
                            class="h-14 w-auto rounded-lg bg-white p-1">
                        <div>
                            <h3 class="font-bold text-2xl text-green-400">
                                Sakha Diamond
                            </h3>
                            <p class="text-sm text-gray-400">
                                Travel Haji & Umroh Terpercaya
                            </p>
                        </div>
                    </div>

                    <p class="text-gray-300 leading-relaxed mb-6 max-w-md">
                        Melayani perjalanan ibadah Haji & Umroh dengan kenyamanan dan
                        keikhlasan sejak 2023.
                    </p>

                    <div class="flex gap-4">
                        <a href="#" class="social-btn bg-black">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#" class="social-btn bg-gradient-to-r from-purple-500 to-pink-500">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/6282130938060" class="social-btn bg-green-600">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- PAKET -->
                <div>
                    <h4 class="footer-title">Paket Populer</h4>
                    <ul class="footer-list">
                        <li><a href="#">Umrah Reguler</a></li>
                        <li><a href="#">Umrah Plus Turki</a></li>
                        <li><a href="#">Umrah Private</a></li>
                        <li><a href="#">Haji Khusus</a></li>
                    </ul>
                </div>

                <!-- KONTAK -->
                <div>
                    <h4 class="footer-title">Kontak</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><i class="fas fa-phone text-green-400 mr-2"></i> +62 821 1908 1443</li>
                        <li><i class="fab fa-whatsapp text-green-400 mr-2"></i> +62 82130938060</li>
                        <li><i class="fas fa-envelope text-green-400 mr-2"></i> sakhadiamond@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt text-green-400 mr-2"></i> Cipasung</li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-gray-700 mt-10 pt-6 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; 2025 Sakha Diamond. All rights reserved.
                </p>
            </div>

        </div>
    </footer>

</body>

</html>