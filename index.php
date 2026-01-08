<?php
include "config/koneksi.php";

/* PAKET UMROH */
$paket = mysqli_query($conn, "SELECT * FROM paket WHERE status='aktif'");
if (!$paket) {
  die("Query paket error: " . mysqli_error($conn));
}

/* PROGRAM HAJI */
$program_haji = mysqli_query($conn, "SELECT * FROM program_haji WHERE status='aktif'");
if (!$program_haji) {
  die("Query haji error: " . mysqli_error($conn));
}
?>



<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Primary Meta Tags -->
  <title>
    Sakha Diamond | Travel Haji & Umroh | PT. Berkah Mekah Madinah
  </title>
  <meta name="title" content="Sakha Diamond | Travel Haji & Umroh | PT. Berkah Mekah Madinah" />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./public/logo/logo2.png" />
  <link />
  <!-- Critical CSS Inline -->
  <style>
    /* Critical CSS for above-the-fold content */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: system-ui, -apple-system, sans-serif;
      line-height: 1.6;
    }

    .bg-gray-50 {
      background-color: #f9fafb;
    }

    .text-gray-700 {
      color: #374151;
    }

    .bg-white {
      background-color: white;
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1),
        0 1px 2px -1px rgb(0 0 0 / 0.1);
    }

    .sticky {
      position: sticky;
    }

    .top-0 {
      top: 0;
    }

    .z-50 {
      z-index: 50;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto;
    }

    .flex {
      display: flex;
    }

    .items-center {
      align-items: center;
    }

    .justify-between {
      justify-content: space-between;
    }

    .gap-3 {
      gap: 0.75rem;
    }

    .py-3 {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .h-12 {
      height: 3rem;
    }

    .w-auto {
      width: auto;
    }

    .hidden {
      display: none;
    }

    .font-medium {
      font-weight: 500;
    }

    .hover\:text-green-700:hover {
      color: #15803d;
    }

    .transition {
      transition-property: color, background-color, border-color,
        text-decoration-color, fill, stroke, opacity, box-shadow, transform,
        filter, backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms;
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem;
    }

    .h-8 {
      height: 2rem;
    }

    .w-8 {
      width: 2rem;
    }

    .bg-black {
      background-color: black;
    }

    .text-white {
      color: white;
    }

    .rounded-lg {
      border-radius: 0.5rem;
    }

    .justify-center {
      justify-content: center;
    }

    .hover\:scale-110:hover {
      transform: scale(1.1);
    }

    @media (min-width: 768px) {
      .md\:flex {
        display: flex;
      }
    }
  </style>

  <!-- Non-Critical CSS - Deferred -->
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
  </noscript>

  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  </noscript>

  <!-- JavaScript - Optimized Loading -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50 text-gray-700">

  <!-- Navbar -->
  <nav class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-3 px-6">

      <!-- Logo -->
      <a href="index.php" class="flex items-center gap-3">
        <img src="./public/logo/logo2.png" alt="Sakha Diamond" width="48" height="48" class="h-12 w-auto" />
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

  </nav>
  <!-- Main Content -->
  <main>
    <!-- Section Hero -->
    <section id="home"
      class="relative bg-gradient-to-br via-green-900 to-green-700 text-white min-h-screen overflow-hidden"
      style="background-color: #103f28" ;>
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-40 right-32 transform -rotate-12">
          <i class="fas fa-kaaba text-6xl text-green-300"></i>
        </div>
        <div class="absolute bottom-32 left-40 transform rotate-45">
          <i class="fas fa-crescent-moon text-5xl text-green-300"></i>
        </div>
      </div>

      <!-- Geometric Shapes -->
      <div
        class="absolute top-0 right-0 w-9 h-96 bg-green-600 rounded-full opacity-20 transform translate-x-48 -translate-y-48">
      </div>
      <div
        class="absolute bottom-0 left-0 w-54 h-64 bg-green-400 rounded-full opacity-15 transform -translate-x-32 translate-y-32">
      </div>

      <div class="container mx-auto px-4 relative z-10 min-h-screen flex items-center pt-20 pb-16">
        <div class="grid lg:grid-cols-2 gap-12 items-center w-full">
          <!-- Content Left Side -->
          <div class="space-y-6 lg:space-y-8">
            <!-- Badge -->
            <div
              class="inline-flex items-center gap-2 bg-green-600 bg-opacity-30 backdrop-blur-sm px-4 py-2 rounded-full border border-green-400 border-opacity-30 mt-4">
              <i class="fas fa-certificate text-green-300"></i>
              <span class="text-sm font-medium text-green-100">Terpercaya sejak 2023</span>
            </div>

            <!-- Main Title -->
            <div>
              <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 lg:mb-6">
                <span class="block text-white">Perjalanan Ibadah</span>
                <span class="block" style="color: #1ba551">dengan Kenyamanan</span>
                <span class="block text-white">dan Keikhlasan</span>
              </h1>
              <p class="text-lg sm:text-xl lg:text-2xl text-green-100 leading-relaxed mb-6 lg:mb-8">
                Bersama
                <span class="font-semibold" style="color: #1ba551">Sakha Diamond</span>, wujudkan Haji &
                Umroh impian Anda dengan pelayanan terbaik
                dan pengalaman yang tak terlupakan.
              </p>
            </div>

            <!-- Features -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 lg:gap-4 my-6 lg:my-8">
              <div class="flex items-center gap-3 bg-white bg-opacity-10 backdrop-blur-sm p-3 rounded-lg">
                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                  <i class="fas fa-users text-white"></i>
                </div>
                <div>
                  <div class="font-semibold text-white">500+</div>
                  <div class="text-sm text-green-200">Jamaah Terlayani</div>
                </div>
              </div>
              <div class="flex items-center gap-3 bg-white bg-opacity-10 backdrop-blur-sm p-3 rounded-lg">
                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                  <i class="fas fa-award text-white"></i>
                </div>
                <div>
                  <div class="font-semibold text-white">3+</div>
                  <div class="text-sm text-green-200">Tahun Pengalaman</div>
                </div>
              </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
              <a href="semua paket.php"
                class="group bg-green-600 hover:bg-green-700 text-white font-bold py-3 lg:py-4 px-6 lg:px-8 rounded-full shadow-xl hover:shadow-2xl transition-all transform hover:scale-105 flex items-center justify-center gap-3">
                <i class="fas fa-search group-hover:rotate-12 transition-transform"></i>
                <span class="text-sm lg:text-base">Lihat Paket Umrah & Haji</span>
              </a>
              <a href="kontak.php"
                class="group bg-transparent border-2 border-green-300 hover:bg-green-700 hover:text-green-900 text-green-300 font-bold py-3 lg:py-4 px-6 lg:px-8 rounded-full transition-all flex items-center justify-center gap-3 ">
                <i class="fab fa-whatsapp group-hover:scale-110 transition-transform"></i>
                <span class="text-sm lg:text-base">Konsultasi Gratis</span>
              </a>
            </div>

            <!-- Trust Indicators -->
            <div class="flex flex-wrap items-center gap-4 lg:gap-6 pt-6 border-t border-green-600 border-opacity-30">
              <div class="flex items-center gap-2">
                <i class="fas fa-shield-check text-green-400"></i>
                <span class="text-xs lg:text-sm text-green-200">Terdaftar Resmi</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-handshake text-green-400"></i>
                <span class="text-xs lg:text-sm text-green-200">Terpercaya</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-headset text-green-400"></i>
                <span class="text-xs lg:text-sm text-green-200">24/17 Support</span>
              </div>
            </div>
          </div>

          <!-- Visual Content Right Side -->
          <div class="relative flex items-center justify-center mt-8 lg:mt-0">
            <!-- Main Image Container -->
            <div class="relative">
              <!-- Background Circle -->
              <div>
                <img src="./public/logo/logo2.png"
                  alt="Sakha Diamond - Perjalanan Ibadah Haji dan Umroh yang Aman dan Nyaman" width="384" height="384"
                  class="w-72 h-72 sm:w-80 sm:h-80 lg:w-96 lg:h-96 object-cover shadow-lg" />
              </div>
            </div>
          </div>
          <div
            class="w-64 h-64 sm:w-80 sm:h-80 lg:w-96 lg:h-96 bg-gradient-to-br from-green-400 to-green-600 rounded-full opacity-20 absolute -inset-4">
          </div>
        </div>
      </div>
    </section>
    <!-- Statistics -->
    <div class="grid grid-cols-2 gap-4 mt-8 w-full">
      <div class="text-center p-4 bg-white rounded-lg shadow">
        <div class="text-2xl font-bold text-green-600">500+</div>
        <div class="text-sm text-gray-600">Jamaah Terlayani</div>
      </div>
      <div class="text-center p-4 bg-white rounded-lg shadow">
        <div class="text-2xl font-bold text-green-600">3+</div>
        <div class="text-sm text-gray-600">Tahun Pengalaman</div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <!--sambutan-->
    <section class="bg-green-700 text-white text-center py-14 px-6 mt-8">
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-wide">
        AHLAN WA SAHLAN
      </h2>

      <div class="w-20 h-1 bg-white mx-auto my-4 rounded-full"></div>

      <p class="max-w-3xl mx-auto text-base sm:text-lg leading-relaxed space-y-4">
        <span class="block font-semibold text-lg">
          Selamat Datang di Website Resmi Sakha Diamond
        </span>

        <span class="block">
          Kami dengan hangat menyambut Bapak/Ibu calon jamaah di Sakha Diamond.
          Melalui website ini, kami berharap dapat menjadi sarana informasi yang
          jelas, aman, dan terpercaya dalam menemani langkah Anda menuju perjalanan
          ibadah yang nyaman, tenang, dan penuh keberkahan.
        </span>

        <span class="block">
          Semoga Sakha Diamond dapat menjadi mitra terbaik dalam mewujudkan niat suci
          Anda.
          <br />
          Terima kasih atas kepercayaan yang telah diberikan.
        </span>
      </p>
    </section>


    <!-- paket umroh terbaik -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
      <div class="container mx-auto px-4">

        <!-- HEADER -->
        <div class="text-center mb-12">
          <h2 class="text-4xl font-extrabold text-green-700">
            Paket Umroh Terbaik
          </h2>
          <p class="max-w-2xl mx-auto mt-4 text-gray-600">
            Pilihan paket umroh terbaik untuk para tamu Allah dengan pelayanan aman, nyaman, dan terpercaya
          </p>
        </div>

        <!-- CARD WRAPPER -->
        <div class="flex flex-wrap justify-center gap-8">

          <?php if (mysqli_num_rows($paket) > 0) { ?>
            <?php while ($p = mysqli_fetch_assoc($paket)) { ?>

              <div
                class="w-80 bg-white rounded-3xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden group">

                <!-- IMAGE -->
                <div class="relative">
                  <img src="assets/img/<?= htmlspecialchars($p['gambar']); ?>"
                    class="w-full h-52 object-cover group-hover:scale-105 transition duration-300">

                  <!-- BADGE SEAT -->
                  <span class="absolute top-4 right-4 bg-green-600 text-white text-xs px-3 py-1 rounded-full shadow">
                    Sisa <?= htmlspecialchars($p['sisa_seat']); ?> Seat
                  </span>
                </div>

                <!-- CONTENT -->
                <div class="p-6">
                  <h3 class="text-lg font-bold text-gray-800 mb-3">
                    <?= htmlspecialchars($p['judul']); ?>
                  </h3>

                  <!-- INFO -->
                  <ul class="space-y-3 text-sm text-gray-700">

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-clock text-green-600"></i>
                      <span>Durasi: <?= htmlspecialchars($p['durasi']); ?></span>
                    </li>

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-hotel text-green-600"></i>
                      <span>Makkah: <?= htmlspecialchars($p['hotel_makkah']); ?></span>
                    </li>

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-hotel text-green-600"></i>
                      <span>Madinah: <?= htmlspecialchars($p['hotel_madinah']); ?></span>
                    </li>

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-plane text-green-600"></i>
                      <span><?= htmlspecialchars($p['maskapai']); ?></span>
                    </li>

                  </ul>

                  <!-- FOOTER -->
                  <div class="mt-6 flex items-center justify-between">
                    <div>
                      <p class="text-xs text-gray-500">Mulai dari</p>
                      <p class="text-xl font-extrabold text-green-600">
                        Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                      </p>
                    </div>

                    <a href="detail_umroh.php?id=<?= $p['id']; ?>"
                      class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-full text-sm font-semibold flex items-center gap-2 transition">
                      Detail
                      <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                  </div>

                </div>
              </div>

            <?php } ?>
          <?php } else { ?>
            <p class="text-center text-gray-500">
              Belum ada paket umroh tersedia
            </p>
          <?php } ?>

        </div>
      </div>
    </section>


    <!-- paket haji terbaik -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
      <div class="container mx-auto px-4">

        <!-- HEADER -->
        <div class="text-center mb-12">
          <h2 class="text-4xl font-extrabold text-green-700">
            Program Haji Terbaik
          </h2>
          <p class="max-w-2xl mx-auto mt-4 text-gray-600">
            Pilihan program haji terbaik untuk para tamu Allah dengan pelayanan aman, nyaman, dan terpercaya
          </p>
        </div>

        <!-- CARD WRAPPER -->
        <div class="flex flex-wrap justify-center gap-8">

          <?php if (mysqli_num_rows($program_haji) > 0) { ?>
            <?php while ($h = mysqli_fetch_assoc($program_haji)) { ?>

              <div
                class="w-80 bg-white rounded-3xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden group">

                <!-- IMAGE -->
                <div class="relative">
                  <img src="assets/img/<?= htmlspecialchars($h['gambar']); ?>"
                    class="w-full h-52 object-cover group-hover:scale-105 transition duration-300">

                  <!-- BADGE SEAT -->
                  <span class="absolute top-4 right-4 bg-green-600 text-white text-xs px-3 py-1 rounded-full shadow">
                    Sisa
                    <?= htmlspecialchars($h['sisa_seat']); ?> Seat
                  </span>
                </div>

                <!-- CONTENT -->
                <div class="p-6">
                  <h3 class="text-lg font-bold text-gray-800 mb-3">
                    <?= htmlspecialchars($h['judul']); ?>
                  </h3>

                  <!-- INFO -->
                  <ul class="space-y-3 text-sm text-gray-700">

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-clock text-green-600"></i>
                      <span>Durasi:
                        <?= htmlspecialchars($h['durasi']); ?>
                      </span>
                    </li>

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-hotel text-green-600"></i>
                      <span>Makkah:
                        <?= htmlspecialchars($h['hotel_makkah']); ?>
                      </span>
                    </li>

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-hotel text-green-600"></i>
                      <span>Madinah:
                        <?= htmlspecialchars($h['hotel_madinah']); ?>
                      </span>
                    </li>

                    <li class="flex items-center gap-3">
                      <i class="fa-solid fa-plane text-green-600"></i>
                      <span>
                        <?= htmlspecialchars($h['maskapai']); ?>
                      </span>
                    </li>

                  </ul>

                  <!-- FOOTER -->
                  <div class="mt-6 flex items-center justify-between">
                    <div>
                      <p class="text-xs text-gray-500">Mulai dari</p>
                      <p class="text-xl font-extrabold text-green-600">
                        Rp
                        <?= number_format($h['harga'], 0, ',', '.'); ?>
                      </p>
                    </div>

                    <a href="detail_haji.php?id=<?= $h['id']; ?>"
                      class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-full text-sm font-semibold flex items-center gap-2 transition">
                      Detail
                      <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                  </div>

                </div>
              </div>

            <?php } ?>
          <?php } else { ?>
            <p class="text-center text-gray-500">
              Belum ada program haji tersedia
            </p>
          <?php } ?>

        </div>
      </div>
    </section>



    <!-- Section Tentang Kami -->
    <section id="about" class="bg-gradient-to-br from-gray-50 to-white py-16 px-4">
      <div class="container mx-auto">

        <div class="text-center mb-12">
          <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
            <i class="fas fa-users text-2xl text-green-600"></i>
          </div>
          <h2 class="text-3xl font-bold text-green-700 mb-4">Tentang sakhadiamond</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Dipercaya ribuan jamaah sejak 2023</p>
        </div>

        <!-- Grid 2 Kolom -->
        <div class="grid md:grid-cols-2 gap-12 items-center">

          <!-- Kolom Kiri -->
          <div>
            <div class="mb-6">
              <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                <i class="fas fa-history text-green-600"></i> Sejarah Kami
              </h3>

              <p class="text-gray-600 leading-relaxed text-justify">
                sakhadiamond berdiri sejak 2023, berkomitmen menghadirkan perjalanan ibadah
                <span class="font-bold">Haji & Umroh</span> yang nyaman, aman, dan penuh keikhlasan.
                Kami hadir untuk
                mengubah pandangan masyarakat bahwa ibadah Umrah adalah hal yang rumit dan penuh
                kekhawatiran.
                Filosofi pelayanan kami:
                <span class="italic font-medium text-green-700">"Umrah mudah, penuh berkah"</span>.
              </p>
            </div>

            <!-- Keunggulan -->
            <div class="space-y-4">
              <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <i class="fas fa-check-circle text-green-600"></i> Keunggulan Kami
              </h3>

              <div class="grid gap-3">
                <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                  <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-user-tie text-white"></i>
                  </div>
                  <span class="text-gray-700">Tim berpengalaman & profesional</span>
                </div>

                <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                  <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-hands-helping text-white"></i>
                  </div>
                  <span class="text-gray-700">Pendampingan ibadah dari awal hingga akhir</span>
                </div>

                <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                  <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-network-wired text-white"></i>
                  </div>
                  <span class="text-gray-700">Jaringan hotel & maskapai terbaik</span>
                </div>

                <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                  <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-shield-alt text-white"></i>
                  </div>
                  <span class="text-gray-700">Terdaftar resmi & berizin lengkap</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Kolom Kanan -->
          <div class="flex flex-col items-center">
            <div class="relative">
              <div
                class="h-60 w-60 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                <img src="./public/images/foto1.jpeg" alt="Owner Sakha diamond"
                  class="h-60 w-60 object-cover rounded-2xl hover:scale-105 transition-transform duration-300 shadow-md" />
              </div>

              <div
                class="absolute -top-4 -right-4 w-16 h-16 bg-green-600 rounded-full flex items-center justify-center">
                <i class="fas fa-certificate text-white text-xl"></i>
              </div>
            </div>

            <div class="text-center">
              <h5>Algipari, Lc.</h5>
              <h4 class="font-bold text-lg text-gray-800 mb-2">Owner PT. Sakha Diamond</h4>
              <p class="text-gray-600">Berpengalaman 3+ tahun</p>
            </div>
          </div>
    </section>


    <!-- testimoni -->
    <section id="testimoni" class="bg-gray-50 py-16 px-4" x-data="{ open:false, video:'' }">
      <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="text-center mb-12">
          <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
            <i class="fas fa-comments text-2xl text-green-600"></i>
          </div>
          <h2 class="text-3xl font-bold text-green-700 mb-3">
            Testimoni Jamaah
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Pengalaman nyata jamaah yang telah menunaikan ibadah Umroh bersama kami
          </p>
        </div>

        <!-- Testimoni Cards -->
        <div class="grid md:grid-cols-3 gap-6 mb-14">

          <!-- Card -->
          <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
            <div class="flex items-center gap-4 mb-4">
              <img src="public/images/jamaah1.jpg" class="w-14 h-14 rounded-full object-cover">
              <div>
                <h4 class="font-semibold text-gray-800">Hj. Siti Aisyah</h4>
                <p class="text-sm text-gray-500">Umroh Reguler</p>
              </div>
            </div>
            <div class="flex text-yellow-400 mb-3">
              ★★★★★
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              Alhamdulillah pelayanan sangat memuaskan, pembimbing ramah dan hotel dekat
              Masjid.
            </p>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
            <div class="flex items-center gap-4 mb-4">
              <img src="public/images/jamaah2.jpg" class="w-14 h-14 rounded-full object-cover">
              <div>
                <h4 class="font-semibold text-gray-800">Bpk. Ahmad Fauzi</h4>
                <p class="text-sm text-gray-500">Umroh Plus Turki</p>
              </div>
            </div>
            <div class="flex text-yellow-400 mb-3">
              ★★★★★
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              Perjalanan nyaman, jadwal tertata rapi, sangat direkomendasikan.
            </p>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
            <div class="flex items-center gap-4 mb-4">
              <img src="public/images/jamaah2.jpg" class="w-14 h-14 rounded-full object-cover">
              <div>
                <h4 class="font-semibold text-gray-800">Ibu Nurhayati</h4>
                <p class="text-sm text-gray-500">Umroh Private</p>
              </div>
            </div>
            <div class="flex text-yellow-400 mb-3">
              ★★★★★
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              Sangat membantu jamaah lansia, pelayanan penuh kesabaran.
            </p>
          </div>

        </div>

        <!-- Video Dokumentasi -->
        <div class="bg-white rounded-3xl shadow-lg p-8">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center">
              <i class="fas fa-video text-white text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800">
              Dokumentasi Video Jamaah
            </h3>
          </div>

          <div class="grid sm:grid-cols-3 gap-4">
            <div @click="open=true; video='https://www.youtube.com/embed/VswFo7bSpZ8'"
              class="relative cursor-pointer group overflow-hidden rounded-xl">
              <img src="assets/img/video1.jpg" class="w-full h-40 object-cover group-hover:scale-110 transition">
              <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-3xl opacity-0 group-hover:opacity-100 transition">
                ▶
              </div>
            </div>

            <div @click="open=true; video='https://www.youtube.com/embed/VIDEO_ID'"
              class="relative cursor-pointer group overflow-hidden rounded-xl">
              <img src="assets/img/video2.jpg" class="w-full h-40 object-cover group-hover:scale-110 transition">
              <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-3xl opacity-0 group-hover:opacity-100 transition">
                ▶
              </div>
            </div>

            <div @click="open=true; video='https://www.youtube.com/embed/VIDEO_ID'"
              class="relative cursor-pointer group overflow-hidden rounded-xl">
              <img src="assets/img/video3.jpg" class="w-full h-40 object-cover group-hover:scale-110 transition">
              <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-3xl opacity-0 group-hover:opacity-100 transition">
                ▶
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Modal Video -->
      <div x-show="open" x-transition @click.self="open=false"
        class="fixed inset-0 bg-black/80 flex items-center justify-center z-50">
        <div class="bg-black rounded-xl overflow-hidden w-full max-w-xl">
          <iframe :src="video" class="w-full aspect-video" frameborder="0" allowfullscreen></iframe>
        </div>
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

</body>

</html>