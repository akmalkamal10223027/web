<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Kontak Kami - Sakha Diamond</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-50 text-gray-800">

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

  <!-- HERO KONTAK DENGAN BACKGROUND FOTO -->
  <section class="relative h-[420px] md:h-[480px] flex items-center justify-center">

    <!-- BACKGROUND IMAGE -->
    <img src="assets/img/LT_contak.jpg" alt="Latar Umroh dan Haji" class="absolute inset-0 w-full h-full object-cover">

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/40"></div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 text-center text-white">

      <!-- BADGE -->
      <span
        class="inline-block mb-5 px-6 py-2 rounded-full bg-green-600/90 text-sm font-semibold tracking-wide shadow-lg">
        ✨ Layanan Resmi Umroh & Haji
      </span>

      <!-- TITLE -->
      <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight drop-shadow-lg">
        Hubungi Kami
      </h1>

      <!-- SUBTITLE -->
      <p class="max-w-2xl mx-auto text-gray-100 text-lg leading-relaxed drop-shadow">
        Kami siap membantu perjalanan ibadah Umroh & Haji Anda dengan pelayanan
        <span class="font-semibold text-white">aman, nyaman, dan terpercaya</span>
      </p>

    </div>
  </section>

  <!-- KONTEN -->
  <section class="max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-2 gap-12">

    <!-- INFO KONTAK -->
    <div class="space-y-6">

      <h2 class="text-2xl font-bold text-green-700">
        Informasi Kontak
      </h2>

      <div class="bg-white rounded-2xl shadow border p-6 space-y-5">

        <div class="flex items-start gap-4">
          <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">
            <i class="fas fa-map-marker-alt text-xl"></i>
          </div>
          <div>
            <h4 class="font-semibold">Alamat Kantor</h4>
            <p class="text-gray-600">
              Cipasung, Indonesia
            </p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">
            <i class="fas fa-phone"></i>
          </div>
          <div>
            <h4 class="font-semibold">Telepon</h4>
            <p class="text-gray-600">+62 821 1908 1443</p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">
            <i class="fab fa-whatsapp"></i>
          </div>
          <div>
            <h4 class="font-semibold">WhatsApp</h4>
            <a href="https://wa.me/6282119081443" target="_blank" class="text-green-600 font-medium hover:underline">
              Chat via WhatsApp
            </a>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">
            <i class="fas fa-envelope"></i>
          </div>
          <div>
            <h4 class="font-semibold">Email</h4>
            <p class="text-gray-600">sakhadiamond@gmail.com</p>
          </div>
        </div>

      </div>
    </div>

    <!-- FORM KONTAK -->
    <form method="POST" action="kirim_pesan.php" class="space-y-5">

      <div>
        <label class="text-sm font-medium">Nama Lengkap</label>
        <input type="text" name="nama" required placeholder="Nama Anda"
          class="w-full mt-1 rounded-xl border px-4 py-2 focus:ring-2 focus:ring-green-600 outline-none">
      </div>

      <div>
        <label class="text-sm font-medium">Email</label>
        <input type="email" name="email" required placeholder="email@gmail.com"
          class="w-full mt-1 rounded-xl border px-4 py-2 focus:ring-2 focus:ring-green-600 outline-none">
      </div>

      <div>
        <label class="text-sm font-medium">Pesan</label>
        <textarea name="pesan" rows="5" required placeholder="Tulis pesan Anda..."
          class="w-full mt-1 rounded-xl border px-4 py-2 focus:ring-2 focus:ring-green-600 outline-none"></textarea>
      </div>

      <button type="submit"
        class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold transition">
        <i class="fas fa-paper-plane mr-2"></i>
        Kirim Pesan
      </button>
    </form>
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