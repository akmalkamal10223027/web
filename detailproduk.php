<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="icon" type="image/x-icon" href="./public/logo/logo2.png" />
  <link />
  <title>detailProduk - Sakha Diamond</title>

<body>
  <!-- Navbar -->
  <nav class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-3 px-6">

      <!-- Logo -->
      <a href="index.php" class="flex items-center gap-3">
        <img src="./public/logo/logo2.png" alt="Logo Barudak Group" width="48" height="48" class="h-12 w-auto" />
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
          <a href="paket.php" class="hover:text-green-700 transition flex items-center gap-1">
            <i class="fas fa-box text-sm"></i> Paket
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
        <a href="" target="_blank"
          class="h-8 w-8 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
          <i class="fab fa-instagram"></i>
        </a>

        <a href="" target="_blank"
          class="h-8 w-8 bg-black text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
          <i class="fab fa-tiktok"></i>
        </a>
      </div>
    </div>
  </nav>

  <!-- detail paket -->

  <section class="max-w-5xl mx-auto px-4 py-16 text-center">
    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <img src="./public/logo/logo2.png" alt="Logo" class="w-24">
    </div>

    <h2 class="text-lg font-semibold text-green-700 mb-1">
      PROGRAM KHUSUS UMROH
    </h2>
    <p class="text-xs text-gray-500 mb-10">
      PROGRAM KHUSUS UMROH
    </p>

    <!-- Konten Utama -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

      <!-- Poster -->
      <div class="flex justify-center">
        <img src="./public/images/poster2.jpg" class="w-64 rounded-lg shadow-lg">
      </div>

      <!-- Deskripsi -->
      <div class="border rounded-lg p-6 text-left text-sm text-gray-700 leading-relaxed">
        <div class="grid grid-cols-2 gap-6">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
            Sed nisi. Nulla quis sem at nibh elementum imperdiet.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
            Sed nisi. Nulla quis sem at nibh elementum imperdiet.
          </p>
        </div>
      </div>

    </div>

    <!-- Harga -->
    <p class="text-green-700 font-bold mt-10">
      HARGA : RP. 25.99--090
    </p>

    <!-- Tombol -->
    <div class="flex justify-center gap-4 mt-4">
      <a href="#" class="bg-green-700 text-white px-6 py-2 rounded-full text-sm hover:bg-green-800">
        Daftar Sekarang
      </a>

      <a href="https://wa.me/628130938060"
        class="bg-green-600 text-white px-6 py-2 rounded-full text-sm hover:bg-green-700">
        CP : 082130938060
      </a>
    </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-4 gap-8">
        <div class="col-span-2">
          <div class="flex items-center gap-3 mb-4">
            <div>
              <img src="./public/logo/logo2.png" alt="Sakha Diamond Logo" class="h-15 w-12" />
            </div>
            <div>
              <h3 class="font-bold text-xl text-green-400">
                Sakha Diamond
              </h3>
              <p class="text-sm text-gray-400">
                Travel Haji & Umroh Terpercaya
              </p>
            </div>
          </div>
          <p class="text-gray-300 mb-4 leading-relaxed">
            Melayani perjalanan ibadah Haji & Umroh dengan kenyamanan dan
            keikhlasan sejak 2023. Dipercaya ribuan jamaah untuk mewujudkan
            impian ibadah yang berkesan.
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
          <h4 class="font-semibold text-lg mb-4 text-green-400">
            Paket Populer
          </h4>
          <ul class="space-y-2 text-gray-300">
            <li>
              <a href="#paket" class="hover:text-green-400 transition flex items-center gap-2">
                <i class="fas fa-mosque text-xs"></i> Umrah Reguler
              </a>
            </li>
            <li>
              <a href="#paket" class="hover:text-green-400 transition flex items-center gap-2">
                <i class="fas fa-globe-europe text-xs"></i> Umrah Plus Turki
              </a>
            </li>
            <li>
              <a href="#paket" class="hover:text-green-400 transition flex items-center gap-2">
                <i class="fas fa-city text-xs"></i> Umrah Private
              </a>
            </li>
            <li>
              <a href="#paket" class="hover:text-green-400 transition flex items-center gap-2">
                <i class="fas fa-kaaba text-xs"></i> Haji Khusus
              </a>
            </li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold text-lg mb-4 text-green-400">Kontak</h4>
          <ul class="space-y-3 text-gray-300">
            <li class="flex items-center gap-2">
              <i class="fas fa-phone text-green-400"></i>
              <span>+62 821 1908 1443</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fab fa-whatsapp text-green-400"></i>
              <span>+62 82130938060</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-envelope text-green-400"></i>
              <span>sakhadiamond@gmail.com</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-map-marker-alt text-green-400"></i>
              <span>Cipasung</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="border-t border-gray-700 mt-8 pt-8 text-center">
        <p class="text-gray-400">
          &copy; 2025 Sakha Diamond. All rights reserved. |
          <a href="#" class="text-green-400 hover:underline">Privacy Policy</a>
          |
          <a href="#" class="text-green-400 hover:underline">Terms of Service</a>
        </p>
        <p class="text-sm text-gray-500 mt-2">
          <i class="fas fa-certificate text-green-400 mr-1"></i>
          Terdaftar resmi dan berizin lengkap
        </p>
      </div>
    </div>
  </footer>
</body>