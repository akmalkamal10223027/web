<?php
include "config/koneksi.php";
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tentang_kami LIMIT 1"));
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="icon" type="image/x-icon" href="./public/logo/logo2.png" />
  <link />
  <title>Tentang Kami - sakhadiamond</title>
</head>

<body class="bg-white">

  <!-- Navbar -->
  <nav class="bg-white shadow sticky top-0 z-50 px-24">
    <div class="container mx-auto flex items-center justify-between py-3 px-6">

      <!-- Logo -->
      <a href="index.php" class="flex items-center gap-3">
        <img src="./public/logo/logo2.png" alt="Sakha Diamond" width="48" height="48" class="h-12 w-auto" />
      </a>

      <!-- Menu -->
      <ul class="hidden md:flex gap-6 font-medium">
        <li><a href="index.php" class="hover:text-green-700 transition flex items-center gap-1"><i
              class="fas fa-home text-sm"></i> Home</a></li>
        <li><a href="Tentangkami.php" class="hover:text-green-700 transition flex items-center gap-1"><i
              class="fas fa-users text-sm"></i> Tentang Kami</a></li>
        <li><a href="semua paket.php" class="hover:text-green-700 transition flex items-center gap-1"><i
              class="fas fa-box text-sm"></i> semua paket</a></li>
        <li><a href="galeri.php" class="hover:text-green-700 transition flex items-center gap-1"><i
              class="fas fa-images text-sm"></i> Galeri</a></li>
        <li><a href="kontak.php" class="hover:text-green-700 transition flex items-center gap-1"><i
              class="fas fa-phone text-sm"></i> Kontak</a></li>
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
  <span
        class="inline-block mb-5 px-6 py-2 rounded-full bg-green-600/90 text-sm font-semibold tracking-wide shadow-lg">
        ✨ Layanan Resmi Umroh & Haji
      </span>
      <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight drop-shadow-lg">
        Hubungi Kami
      </h1>
      <p class="max-w-2xl mx-auto text-gray-100 text-lg leading-relaxed drop-shadow">
        Kami siap membantu perjalanan ibadah Umroh & Haji Anda dengan pelayanan
        <span class="font-semibold text-white">aman, nyaman, dan terpercaya</span>
      </p>
  </div>

</section>

  <!-- PROFIL -->
  <section class="container mx-auto px-24 py-16">
    <div class="flex items-center justify-between gap-8 bg-white rounded-3xl shadow-lg p-10">

      <!-- TEKS -->
      <div class="w-1/2 flex flex-col gap-4 justify-between">
        <span class="w-max py-2 px-4 flex items-center justify-center rounded-full bg-green-100 text-green-700 text-xs font-semibold">
          Tentang Kami
        </span>

        <h2 class="text-3xl font-bold mb-5 text-slate-800 leading-tight">
          Profil Perusahaan
        </h2>

        <p class="text-slate-600 leading-relaxed text-justify">
          <?= nl2br($data['profil']); ?>
        </p>
      </div>

      <!-- GAMBAR -->
      <div class="w-1/2 rounded-lg overflow-hidden">
        <!-- <div class="absolute -top-6 -left-6 w-24 h-24 bg-green-100 rounded-2xl -z-10"></div> -->

        <img src="assets/img/<?= $data['gambar']; ?>" class="object-cover w-full"
          alt="Tentang Kami" />
      </div>

    </div>
  </section>

  <!-- VISI & MISI -->
  <section class="max-w-7xl mx-auto px-4 py-14">
    <div class="grid md:grid-cols-2 gap-10">

      <!-- VISI -->
      <div class="bg-white rounded-3xl shadow-md p-8 hover:shadow-lg transition">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 flex items-center justify-center rounded-full bg-green-100 text-green-700 font-bold">
            V
          </div>
          <h3 class="text-xl font-semibold text-slate-800">Visi</h3>
        </div>

        <p class="text-slate-600 leading-relaxed">
          <?= nl2br($data['visi']); ?>
        </p>
      </div>

      <!-- MISI -->
      <div class="bg-white rounded-3xl shadow-md p-8 hover:shadow-lg transition">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 flex items-center justify-center rounded-full bg-green-100 text-green-700 font-bold">
            M
          </div>
          <h3 class="text-xl font-semibold text-slate-800">Misi</h3>
        </div>

        <p class="text-slate-600 leading-relaxed">
          <?= nl2br($data['misi']); ?>
        </p>
      </div>

    </div>
  </section>

  <section class="bg-white py-20 px-6">
  <div class="max-w-7xl mx-auto">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-green-700 mb-4">
        Kenapa Memilih Sakha Diamond?
      </h2>
      <p class="text-gray-600 max-w-3xl mx-auto">
        Menghadirkan pengalaman ibadah yang bermakna melalui pelayanan yang
        profesional, amanah, dan penuh kasih.
      </p>
    </div>

    <!-- Cards -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

      <!-- Card -->
      <div class="bg-white rounded-xl shadow-md p-6 flex gap-4 hover:shadow-lg transition">
        <div class="w-14 h-14 rounded-lg border-2 border-green-600 flex items-center justify-center text-green-600">
          <i class="fas fa-file-alt text-2xl"></i>
        </div>
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">LEGAL</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Memiliki izin resmi sebagai Penyelenggara Perjalanan Ibadah Umroh (PPIU)
            dari Kementerian Agama RI.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex gap-4 hover:shadow-lg transition">
        <div class="w-14 h-14 rounded-lg border-2 border-green-600 flex items-center justify-center text-green-600">
          <i class="fas fa-heart text-2xl"></i>
        </div>
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">Amanah</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Sakha Diamond telah melayani ribuan jamaah umroh & haji dengan
            kenyamanan dan kepuasan sebagai prioritas utama.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex gap-4 hover:shadow-lg transition">
        <div class="w-14 h-14 rounded-lg border-2 border-green-600 flex items-center justify-center text-green-600">
          <i class="fas fa-handshake text-2xl"></i>
        </div>
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">Komitmen</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Informasi paket transparan, sesuai deskripsi, dan tidak ada biaya
            tersembunyi.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex gap-4 hover:shadow-lg transition">
        <div class="w-14 h-14 rounded-lg border-2 border-green-600 flex items-center justify-center text-green-600">
          <i class="fas fa-users text-2xl"></i>
        </div>
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">Pembimbing</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Dibimbing oleh tim profesional sesuai Sunnah Nabi ﷺ dengan penuh
            kesabaran dan kasih sayang.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex gap-4 hover:shadow-lg transition">
        <div class="w-14 h-14 rounded-lg border-2 border-green-600 flex items-center justify-center text-green-600">
          <i class="fas fa-comments text-2xl"></i>
        </div>
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">Jaringan</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Agen resmi tersebar di berbagai kota di Indonesia serta layanan
            konsultasi online.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 flex gap-4 hover:shadow-lg transition">
        <div class="w-14 h-14 rounded-lg border-2 border-green-600 flex items-center justify-center text-green-600">
          <i class="fas fa-hotel text-2xl"></i>
        </div>
        <div>
          <h3 class="font-semibold text-lg text-gray-800 mb-1">Fasilitas</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Fasilitas terbaik sesuai paket, dengan opsi upgrade fleksibel sesuai
            kebutuhan jamaah.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- PETA -->
  <section class="bg-gray-100 py-16">
    <div class="max-w-5xl mx-auto px-4 text-center">

      <!-- Judul -->
      <h2 class="text-3xl font-bold text-green-800 mb-4">
        Lokasi Kantor Kami
      </h2>

      <!-- Deskripsi -->
      <p class="text-gray-700 leading-relaxed text-base max-w-3xl mx-auto mb-10">
        Kami dari <span class="font-semibold text-green-800">Pusat Haji & Umroh Indonesia</span> saat ini
        berkantor di
        <span class="font-medium">
          Jl. Candi Borobudur No.1 A, Pd. Benda, Kec. Pamulang, Kota Tangerang Selatan, Banten 15416
        </span>.
        <br><br>
        Alhamdulillah, dengan adanya layanan online melalui website
        <span class="font-semibold text-green-700">pusathajiumroh.id</span>,
        kami siap melayani jamaah dari seluruh wilayah Indonesia.
        <br><br>
        <span class="italic">
          In Syaa Allah dengan izin Allah, kami melayani jamaah di seluruh nusantara tercinta.
        </span>
      </p>

      <!-- MAP -->
      <div class="relative w-full h-[420px] rounded-2xl overflow-hidden shadow-xl border">

        <iframe
          src="https://www.google.com/maps?q=Jl.%20Candi%20Borobudur%20No.1%20A%20Pamulang&t=&z=15&ie=UTF8&iwloc=&output=embed"
          class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- Tombol Google Maps -->
        <a href="https://maps.app.goo.gl/dQAYdpYHuNnBJVJK9" target="_blank"
          class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg transition">
          📍 Buka di Google Maps
        </a>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12 px-24">
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
            <li class="flex items-center gap-2"><i class="fab fa-whatsapp text-green-400"></i><span>+62 817
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