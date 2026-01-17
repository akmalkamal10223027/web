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


/**Testimony */
$data = mysqli_query(
  $conn,
  "SELECT * FROM testimoni_sosmed
   WHERE status='aktif'
   ORDER BY created_at DESC"
);
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
      class="relative bg-gradient-to-br via-green-900 to-green-700 text-white min-h-screen overflow-hidden px-24"
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
              <h1 class="text-2xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 lg:mb-6">
                <span class="block text-white">Perjalanan Ibadah</span>
                <span class="block" style="color: #1ba551">dengan Kenyamanan</span>
                <span class="block text-white">dan Keikhlasan</span>
              </h1>
              <p class="text-sm lg:text-md text-green-100 leading-relaxed mb-6 lg:mb-8">
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
                class="group bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-xl hover:shadow-2xl transition-all transform hover:scale-105 flex items-center justify-center gap-3">
                <i class="fas fa-search group-hover:rotate-12 transition-transform"></i>
                <span class="text-sm">Lihat Paket Umrah & Haji</span>
              </a>
              <a href="kontak.php"
                class="group bg-transparent border-2 border-green-300 hover:bg-green-700 hover:text-green-900 text-green-300 font-bold py-2 px-4 rounded-full transition-all flex items-center justify-center gap-3 ">
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
<!-- Section Tentang Kami -->
<section id="about" class="bg-gradient-to-br from-gray-50 to-white py-20 px-6">
  <div class="max-w-6xl mx-auto">

    <!-- Header -->
    <div class="text-center mb-14">
      <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4 mx-auto">
        <i class="fas fa-users text-2xl text-green-600"></i>
      </div>
      <h2 class="text-3xl font-bold text-green-700 mb-3">
        Tentang sakhadiamond
      </h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Dipercaya ribuan jamaah sejak 2023
      </p>
    </div>

    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-14 items-center">

      <!-- Kolom Kiri -->
      <div class="space-y-8">

        <div>
          <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
            <i class="fas fa-history text-green-600"></i> Sejarah Kami
          </h3>

          <p class="text-gray-600 leading-relaxed text-justify">
            sakhadiamond berdiri sejak 2023, berkomitmen menghadirkan perjalanan ibadah
            <span class="font-semibold">Haji & Umroh</span> yang nyaman, aman, dan penuh keikhlasan.
            Filosofi pelayanan kami:
            <span class="italic font-medium text-green-700">
              "Umrah mudah, penuh berkah"
            </span>.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
            <i class="fas fa-check-circle text-green-600"></i> Keunggulan Kami
          </h3>

          <div class="grid gap-4">
            <div class="flex items-center gap-4 p-4 bg-green-50 rounded-xl">
              <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                <i class="fas fa-user-tie text-white"></i>
              </div>
              <span class="text-gray-700">Tim berpengalaman & profesional</span>
            </div>

            <div class="flex items-center gap-4 p-4 bg-green-50 rounded-xl">
              <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                <i class="fas fa-hands-helping text-white"></i>
              </div>
              <span class="text-gray-700">Pendampingan ibadah dari awal hingga akhir</span>
            </div>

            <div class="flex items-center gap-4 p-4 bg-green-50 rounded-xl">
              <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                <i class="fas fa-network-wired text-white"></i>
              </div>
              <span class="text-gray-700">Jaringan hotel & maskapai terbaik</span>
            </div>

            <div class="flex items-center gap-4 p-4 bg-green-50 rounded-xl">
              <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                <i class="fas fa-shield-alt text-white"></i>
              </div>
              <span class="text-gray-700">Terdaftar resmi & berizin lengkap</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Kolom Kanan -->
      <div class="flex flex-col items-center text-center">
        <div class="relative mb-6">
          <img
            src="./public/images/foto1.jpeg"
            alt="Owner Sakha Diamond"
            class="h-64 w-64 object-cover rounded-2xl shadow-lg hover:scale-105 transition"
          />

          <div class="absolute -top-4 -right-4 w-14 h-14 bg-green-600 rounded-full flex items-center justify-center shadow-md">
            <i class="fas fa-certificate text-white text-lg"></i>
          </div>
        </div>

        <h5 class="text-sm text-gray-500">Algipari, Lc.</h5>
        <h4 class="font-bold text-lg text-gray-800">
          Owner PT. Sakha Diamond
        </h4>
        <p class="text-gray-600 text-sm">Berpengalaman 3+ tahun</p>
      </div>

    </div>
  </div>
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



    

    <!-- Testimoni -->
    <section id="testimoni" class="bg-gray-50 py-16 px-4">
      <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-green-700">
            Testimoni Jamaah
          </h2>
          <p class="text-gray-600">
            Testimoni asli dari Instagram & TikTok
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

          <?php while ($t = mysqli_fetch_assoc($data)) { ?>
            <div class="bg-white p-4 rounded-2xl shadow relative group overflow-hidden">

              <!-- EMBED -->
              <?php if ($t['platform'] === 'instagram') { ?>
                <blockquote class="instagram-media" data-instgrm-permalink="<?= $t['embed_url']; ?>"
                  data-instgrm-version="14">
                </blockquote>

              <?php } elseif ($t['platform'] === 'tiktok') {

                preg_match('/video\/([0-9]+)/', $t['embed_url'], $vid);
                $video_id = $vid[1] ?? '';
                ?>
                <iframe src="https://www.tiktok.com/embed/v2/<?= $video_id; ?>" class="w-full h-[520px] rounded-xl"
                  loading="lazy">
                </iframe>
              <?php } ?>

              <!-- OVERLAY / PENGHALANG -->
              <a href="<?= $t['embed_url']; ?>" target="_blank" class="absolute inset-0 bg-black/30 flex items-center justify-center
            opacity-0 group-hover:opacity-100 transition">

                <div class="bg-white text-gray-800 px-5 py-3 rounded-full shadow-lg
                flex items-center gap-2 font-semibold text-sm">
                  ▶ Lihat di <?= ucfirst($t['platform']); ?>
                </div>
              </a>
            </div>
          <?php } ?>
        </div>
    </section>

    <!-- SCRIPT WAJIB -->
    <script async src="https://www.instagram.com/embed.js"></script>
    <script async src="https://www.tiktok.com/embed.js"></script>
   

    <div class="max-w-4xl mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold mb-4 text-green-900">Pertanyaan Umum (FAQ)</h1>
            <p class="text-gray-500 max-w-2xl mx-auto">
                Temukan jawaban dari pertanyaan umum seputar layanan umroh, haji, dan jelajah dunia kami. 
                Jika Anda masih memiliki pertanyaan, tim kami siap membantu!
            </p>
        </div>
        <div class="space-y-4">
            
            <div class="border-b border-gray-200">
             <button class="w-full py-6 flex justify-between items-center text-left hover:text-green-600 transition-colors group focus:outline-none" onclick="toggleFaq(1)">
                    <span class="text-lg font-medium">Apa perbedaan antara umroh plus dan lainnya?</span>
                    <span id="icon-1" class="text-green-500 text-2xl border border-green-500 rounded-full w-8 h-8 flex items-center justify-center group-hover:bg-greeen-50 transition-all">+</span>
                </button>
                <div id="content-1" class="hidden pb-6 text-gray-600 leading-relaxed">
                    Umroh plus biasanya mencakup kunjungan tambahan ke negara lain seperti Turki, Mesir, atau Dubai setelah atau sebelum melaksanakan ibadah Umroh di Tanah Suci.
                </div>
            </div>

            <div class="border-b border-gray-200">
                <button class="w-full py-6 flex justify-between items-center text-left hover:text-green-600 transition-colors group focus:outline-none" onclick="toggleFaq(2)">
                    <span class="text-lg font-medium">Apakah rute penerbangannya transit atau langsung (Direct)?</span>
                    <span id="icon-2" class="text-green-500 text-2xl border border-green-500 rounded-full w-8 h-8 flex items-center justify-center group-hover:bg-green-50 transition-all">+</span>
                </button>
                <div id="content-2" class="hidden pb-6 text-gray-600">
                    Kami menyediakan kedua opsi tersebut tergantung paket yang Anda pilih. Paket Reguler biasanya menggunakan penerbangan langsung (Direct) ke Jeddah atau Madinah.
                </div>
            </div>

            <div class="border-b border-gray-200">
                <button class="w-full py-6 flex justify-between items-center text-left hover:text-green-600 transition-colors group focus:outline-none" onclick="toggleFaq(3)">
                    <span class="text-lg font-medium">Siapa saja yang akan membimbing ibadah umroh?</span>
                    <span id="icon-3" class="text-green-500 text-2xl border border-green-500 rounded-full w-8 h-8 flex items-center justify-center group-hover:bg-green-50 transition-all">+</span>
                </button>
                <div id="content-3" class="hidden pb-6 text-gray-600">
                    Ibadah akan dibimbing oleh Mutawwif berpengalaman dan Ustadz pembimbing yang berkompeten sesuai Sunnah.
                </div>
            </div>

            <div class="border-b border-gray-200">
                <button class="w-full py-6 flex justify-between items-center text-left hover:text-green-600 transition-colors group focus:outline-none" onclick="toggleFaq(4)">
                    <span class="text-lg font-medium">Apakah vaksin covid & meningitis masih berlaku untuk syarat umroh?</span>
                    <span id="icon-4" class="text-green-500 text-2xl border border-green-500 rounded-full w-8 h-8 flex items-center justify-center group-hover:bg-green-50 transition-all">+</span>
                </button>
                <div id="content-4" class="hidden pb-6 text-gray-600">
                    Sesuai regulasi terbaru, vaksin Meningitis sangat dianjurkan (dan wajib untuk visa tertentu), sementara syarat vaksin Covid-19 mengikuti aturan terbaru dari pemerintah Arab Saudi.
                </div>
            </div>

        </div>
    </div>

    <script>
        function toggleFaq(id) {
            const content = document.getElementById(`content-${id}`);
            const icon = document.getElementById(`icon-${id}`);
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.textContent = '-';
                icon.classList.add('bg-green-500', 'text-white');
            } else {
                content.classList.add('hidden');
                icon.textContent = '+';
                icon.classList.remove('bg-green-500', 'text-white');
            }
        }
    </script>

  <section class="w-full py-20 flex justify-center">
    <div class="text-center max-w-xl">

      <!-- Avatar group -->
      <div class="flex justify-center mb-6">
        <div class="flex -space-x-3">
          <img
            src="https://i.pravatar.cc/80?img=1"
            class="w-12 h-12 rounded-full border-2 border-white"
            alt="avatar 1"
          />
          <img
            src="https://i.pravatar.cc/80?img=2"
            class="w-12 h-12 rounded-full border-2 border-white"
            alt="avatar 2"
          />
          <img
            src="https://i.pravatar.cc/80?img=3"
            class="w-12 h-12 rounded-full border-2 border-white"
            alt="avatar 3"
          />
        </div>
      </div>

      <!-- Heading -->
      <h2 class="text-xl font-semibold text-gray-900 mb-2">
        Masih ada pertanyaan?
      </h2>

      <!-- Description -->
      <p class="text-gray-500 mb-8">
        Tidak menemukan jawaban yang di cari? Silakan hubungi tim kami.
      </p>

      <!-- Button -->
      <a href="kontak.php"
                class="group bg-transparent border-2 border-green-300 hover:bg-green-700 hover:text-green-900 text-green-300 font-bold py-3 lg:py-4 px-6 lg:px-8 rounded-full transition-all flex items-center justify-center gap-3 ">
                <i class="fab fa-whatsapp group-hover:scale-110 transition-transform"></i>
                <span class="text-sm lg:text-base">Konsultasi Gratis</span>
              </a>

    </div>
  </section>

  <!-- Panduan -->
  <section class="bg-green-50 py-20 px-6">
  <div class="max-w-6xl mx-auto">

    <div class="text-center mb-14">
      <h2 class="text-3xl font-bold text-green-700 mb-3">
        Panduan Haji & Umroh
      </h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Panduan ibadah lengkap untuk membantu jamaah menjalankan ibadah
        sesuai tuntunan dan penuh kekhusyukan.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">

      <!-- Umroh -->
      <a href="/web/panduan_umroh.php"
         class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition block">
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 bg-green-600 rounded-lg flex items-center justify-center">
            <i class="fas fa-kaaba text-white text-2xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">
              Panduan Umroh
            </h3>
            <p class="text-gray-600 text-sm">
              Tata cara, doa, dan tips umroh sesuai Sunnah Nabi ﷺ.
            </p>
          </div>
        </div>
      </a>

      <!-- Haji -->
      <a href="/web/panduan-haji.php"
         class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition block">
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 bg-green-600 rounded-lg flex items-center justify-center">
            <i class="fas fa-mosque text-white text-2xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">
              Panduan Haji
            </h3>
            <p class="text-gray-600 text-sm">
              Rukun, wajib, dan sunnah haji lengkap & mudah dipahami.
            </p>
          </div>
        </div>
      </a>

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