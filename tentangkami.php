<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />
 <link rel="icon" type="image/x-icon" href="./public/logo/logo2.png" />
    <link
    />
  <title>Tentang Kami - Barudak Group</title>
</head>

<body class="bg-white">

<!-- Navbar -->
<nav class="bg-white shadow sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-between py-3 px-6">

    <!-- Logo -->
    <a href="index.php" class="flex items-center gap-3">
      <img src="./public/logo/logo2.png" alt="Logo Barudak Group" width="48" height="48" class="h-12 w-auto" />
    </a>

    <!-- Menu -->
    <ul class="hidden md:flex gap-6 font-medium">
      <li><a href="index.php" class="hover:text-green-700 transition flex items-center gap-1"><i class="fas fa-home text-sm"></i> Home</a></li>
      <li><a href="Tentangkami.php" class="hover:text-green-700 transition flex items-center gap-1"><i class="fas fa-users text-sm"></i> Tentang Kami</a></li>
      <li><a href="paket.php" class="hover:text-green-700 transition flex items-center gap-1"><i class="fas fa-box text-sm"></i> Paket</a></li>
      <li><a href="galeri.php" class="hover:text-green-700 transition flex items-center gap-1"><i class="fas fa-images text-sm"></i> Galeri</a></li>
      <li><a href="kontak.php" class="hover:text-green-700 transition flex items-center gap-1"><i class="fas fa-phone text-sm"></i> Kontak</a></li>
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
            <span class="font-bold">Haji & Umroh</span> yang nyaman, aman, dan penuh keikhlasan. Kami hadir untuk
            mengubah pandangan masyarakat bahwa ibadah Umrah adalah hal yang rumit dan penuh kekhawatiran.
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
          <div class="h-60 w-60 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
            <img src="./public/images/IMG_5766.jpg" alt="Owner Halo Barudak Group" class="h-60 w-60 object-cover rounded-2xl hover:scale-105 transition-transform duration-300 shadow-md" />
          </div>

          <div class="absolute -top-4 -right-4 w-16 h-16 bg-green-600 rounded-full flex items-center justify-center">
            <i class="fas fa-certificate text-white text-xl"></i>
          </div>
        </div>

        <div class="text-center">
          <h5>Algipari, Lc.</h5>
          <h4 class="font-bold text-lg text-gray-800 mb-2">Owner PT. Sakha Diamond</h4>
          <p class="text-gray-600">Berpengalaman 3+ tahun</p>
        </div>
      </div>

    </div> <!-- END grid -->
  </div> <!-- END container -->
</section> <!-- END section -->

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-4 gap-8">

      <div class="col-span-2">
        <div class="flex items-center gap-3 mb-4">
          <img src="./public/logo/barudak-group.png" alt="Sakha Diamond Logo" class="h-15 w-12" />
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
          <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-mosque text-xs"></i> Umrah Reguler</a></li>
          <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-globe-europe text-xs"></i> Umrah Plus Turki</a></li>
          <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-city text-xs"></i> Umrah Private</a></li>
          <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i class="fas fa-kaaba text-xs"></i> Haji Khusus</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-semibold text-lg mb-4 text-green-400">Kontak</h4>
        <ul class="space-y-3 text-gray-300">
          <li class="flex items-center gap-2"><i class="fas fa-phone text-green-400"></i><span>+62 821 1908 1443</span></li>
          <li class="flex items-center gap-2"><i class="fab fa-whatsapp text-green-400"></i><span>+62 817 7926 2637</span></li>
          <li class="flex items-center gap-2"><i class="fas fa-envelope text-green-400"></i><span>sakhadiamond.com</span></li>
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
