<?php
include "config/koneksi.php";
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

<!-- ================= NAVBAR ================= -->
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

<!-- ================= HERO SLIDER ================= -->
<section class="relative h-[420px] md:h-[480px] overflow-hidden flex items-center justify-center">

  <!-- Slides -->
  <div class="absolute inset-0">
    <img src="assets/img/bg_galeri.jpg"
         class="hero-slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000">
    <img src="assets/img/LT_contak.jpg"
         class="hero-slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
  </div>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/40"></div>

  <!-- Content -->
  <div class="relative z-10 text-center text-white px-6">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">
      Semua Paket Umroh & Haji
    </h1>
    <p class="max-w-2xl mx-auto text-gray-100 text-lg">
      Pilihan paket terbaik bersama
      <span class="font-semibold text-white">Sakha Diamond</span>
    </p>
  </div>

</section>

<!-- ================= LIST PAKET ================= -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <?php while ($p = mysqli_fetch_assoc($data)) { ?>
      <div class="bg-white rounded-2xl border shadow-sm hover:shadow-xl transition overflow-hidden">

        <div class="h-56 overflow-hidden">
          <img src="assets/img/<?= $p['gambar']; ?>"
               class="w-full h-full object-cover hover:scale-110 transition duration-500">
        </div>

        <div class="p-6 space-y-3">
          <h3 class="text-lg font-semibold text-slate-800">
            <?= htmlspecialchars($p['judul']); ?>
          </h3>

          <div class="text-sm text-slate-600 space-y-1">
            <p><i class="fas fa-clock text-green-600 mr-2"></i><?= $p['durasi']; ?></p>
            <p><i class="fas fa-hotel text-green-600 mr-2"></i><?= $p['hotel_makkah']; ?></p>
            <p><i class="fas fa-hotel text-green-600 mr-2"></i><?= $p['hotel_madinah']; ?></p>
            <p><i class="fas fa-plane text-green-600 mr-2"></i><?= $p['maskapai']; ?></p>
            <p><i class="fas fa-users text-green-600 mr-2"></i>Sisa Seat: <?= $p['sisa_seat']; ?></p>
          </div>

          <div class="pt-4 flex items-center justify-between">
            <span class="text-xl font-bold text-green-700">
              Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
            </span>

            <a href="detail_semua_paket.php?id=<?= $p['id']; ?>"
               class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-xl text-sm font-medium">
              Detail
            </a>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-4 gap-8">

        <div class="col-span-2">
          <div class="flex items-center gap-3 mb-4">
            <img src="./public/logo/logo2.png" alt="Sakha Diamond Logo" class="h-15 w-12" />
            <div>
              <h3 class="font-bold text-xl text-green-400">Sakha Diamond</h3>
              <p class="text-sm text-gray-400">Travel Haji & Umroh Terpercaya</p>
            </div>
          </div>

          <p class="text-gray-300 mb-4 leading-relaxed">
            Melayani perjalanan ibadah Haji & Umroh dengan kenyamanan dan keikhlasan sejak 2023.
          </p>

          <div class="flex gap-3">
            <a href="" target="_blank"
              class="w-10 h-10 bg-black hover:bg-gray-800 rounded-lg flex items-center justify-center transition hover:scale-110">
              <i class="fab fa-tiktok text-white"></i>
            </a>
            <a href="" target="_blank"
              class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-lg flex items-center justify-center transition hover:scale-110">
              <i class="fab fa-instagram text-white"></i>
            </a>
            <a href="https://wa.me/6282130938060" target="_blank"
              class="w-10 h-10 bg-green-600 hover:bg-green-700 rounded-lg flex items-center justify-center transition hover:scale-110">
              <i class="fab fa-whatsapp text-white"></i>
            </a>
          </div>
        </div>

        <div>
          <h4 class="font-semibold text-lg mb-4 text-green-400">Paket Populer</h4>
          <ul class="space-y-2 text-gray-300">
            <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                  class="fas fa-mosque text-xs"></i> Umrah Reguler</a></li>
            <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                  class="fas fa-globe-europe text-xs"></i> Umrah Plus Turki</a></li>
            <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                  class="fas fa-city text-xs"></i> Umrah Private</a></li>
            <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                  class="fas fa-kaaba text-xs"></i> Haji Khusus</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold text-lg mb-4 text-green-400">Kontak</h4>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-center gap-2"><i class="fas fa-phone text-green-400"></i><span>+62 821
                1908 1443</span></li>
            <li class="flex items-center gap-2"><i class="fab fa-whatsapp text-green-400"></i><span>+62
                817
                7926 2637</span></li>
            <li class="flex items-center gap-2"><i
                class="fas fa-envelope text-green-400"></i><span>sakhadiamond.com</span></li>
            <li class="flex items-center gap-2">
              <i class="fas fa-map-marker-alt text-green-400"></i>
              <span>Cipasung</span>
            </li>
          </ul>
        </div>

      </div>

      <div class="border-t border-gray-700 mt-8 pt-8 text-center">
        <p class="text-gray-400">
          &copy; 2025 Sakha Diamond. All rights reserved.
        </p>
        <p class="text-sm text-gray-500 mt-2">
          <i class="fas fa-certificate text-green-400 mr-1"></i>
          Terdaftar resmi dan berizin lengkap
        </p>
      </div>
    </div>
  </footer>

<!-- ================= HERO SLIDER SCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".hero-slide");
  let current = 0;

  setInterval(() => {
    slides[current].classList.replace("opacity-100", "opacity-0");
    current = (current + 1) % slides.length;
    slides[current].classList.replace("opacity-0", "opacity-100");
  }, 3000);
});
</script>

</body>
</html>
