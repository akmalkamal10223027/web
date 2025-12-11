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

  <title>Galeri - Sakha Diamond</title>
</head>

<!-- Navbar -->
<nav class="bg-white shadow sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-between py-3 px-6">
    
    <!-- Logo -->
    <a href="index.php" class="flex items-center gap-3">
      <img
        src="./public/logo/logo2.png"
        alt="logo2"
        width="48"
        height="48"
        class="h-12 w-auto"
      />
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
      <a
        href="/"
        target="_blank"
        class="h-8 w-8 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg flex items-center justify-center hover:scale-110 transition"
      >
        <i class="fab fa-instagram"></i>
      </a>

      <a
        href=""
        target="_blank"
        class="h-8 w-8 bg-black text-white rounded-lg flex items-center justify-center hover:scale-110 transition"
      >
        <i class="fab fa-tiktok"></i>
      </a>
    </div>

  </div>
</nav>
 <!-- Section Galeri -->
      <section id="galeri" class="bg-gray-50 py-12 sm:py-16 px-4">
        <div class="container mx-auto">
          <div class="text-center mb-8 sm:mb-12">
            <div
              class="inline-flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 bg-green-100 rounded-full mb-4"
            >
              <i class="fas fa-images text-lg sm:text-2xl text-green-600"></i>
            </div>
            <h2
              class="text-2xl sm:text-3xl font-bold text-green-700 mb-3 sm:mb-4"
            >
              Galeri Perjalanan
            </h2>
            <p class="text-sm sm:text-base text-gray-600 max-w-2xl mx-auto">
              Dokumentasi momen berharga perjalanan ibadah bersama sakhadiamond
            </p>
          </div>

          <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6"
          >
            <!-- Masjidil Haram -->
            <div
              class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1"
            >
              <div class="h-48 sm:h-56 lg:h-48 relative overflow-hidden">
                <img
                  src="./public/gallery/"
                  alt="Masjidil Haram"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"
              >
                <div class="absolute bottom-4 left-4 right-4 text-white">
                  <h3 class="font-bold text-sm sm:text-base mb-1">
                    Masjidil Haram
                  </h3>
                  <p class="text-xs sm:text-sm opacity-90">
                    Suasana ibadah di tanah suci
                  </p>
                </div>
              </div>
              <div
                class="absolute top-3 right-3 bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold opacity-0 group-hover:opacity-100 transition-all"
              >
                <i class="fas fa-eye mr-1"></i>Lihat
              </div>
            </div>

            <!-- Keberangkatan Jamaah -->
            <div
              class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1"
            >
              <div class="h-48 sm:h-56 lg:h-48 relative overflow-hidden">
                <img
                  src="./public/gallery/.jpg"
                  alt="Keberangkatan Jamaah"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"
              >
                <div class="absolute bottom-4 left-4 right-4 text-white">
                  <h3 class="font-bold text-sm sm:text-base mb-1">
                    Keberangkatan Jamaah
                  </h3>
                  <p class="text-xs sm:text-sm opacity-90">
                    Momen keberangkatan penuh berkah
                  </p>
                </div>
              </div>
              <div
                class="absolute top-3 right-3 bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-semibold opacity-0 group-hover:opacity-100 transition-all"
              >
                <i class="fas fa-eye mr-1"></i>Lihat
              </div>
            </div>

            <!-- Hotel Makkah -->
            <div
              class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1"
            >
              <div class="h-48 sm:h-56 lg:h-48 relative overflow-hidden">
                <img
                  src="./public/gallery/.jpg"
                  alt="Hotel Makkah"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"
              >
                <div class="absolute bottom-4 left-4 right-4 text-white">
                  <h3 class="font-bold text-sm sm:text-base mb-1">
                    Hotel Makkah
                  </h3>
                  <p class="text-xs sm:text-sm opacity-90">
                    Akomodasi nyaman dekat Masjidil Haram
                  </p>
                </div>
              </div>
              <div
                class="absolute top-3 right-3 bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-semibold opacity-0 group-hover:opacity-100 transition-all"
              >
                <i class="fas fa-eye mr-1"></i>Lihat
              </div>
            </div>

            <!-- Kegiatan Ibadah -->
            <div
              class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1"
            >
              <div class="h-48 sm:h-56 lg:h-48 relative overflow-hidden">
                <img
                  src="./public/gallery/kegiatan-ibadah.jpg"
                  alt="Kegiatan Ibadah"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"
              >
                <div class="absolute bottom-4 left-4 right-4 text-white">
                  <h3 class="font-bold text-sm sm:text-base mb-1">
                    Kegiatan Ibadah
                  </h3>
                  <p class="text-xs sm:text-sm opacity-90">
                    Tawaf dan sai bersama jamaah
                  </p>
                </div>
              </div>
              <div
                class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-semibold opacity-0 group-hover:opacity-100 transition-all"
              >
                <i class="fas fa-eye mr-1"></i>Lihat
              </div>
            </div>
 <!-- Jabal Rahmah -->
            <div
              class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1"
            >
              <div class="h-48 sm:h-56 lg:h-48 relative overflow-hidden">
                <img
                  src="./public/gallery/jabalrohmah.jpg"
                  alt="Jabal Rahmah"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"
              >
                <div class="absolute bottom-4 left-4 right-4 text-white">
                  <h3 class="font-bold text-sm sm:text-base mb-1">
                    Jabal Rahmah
                  </h3>
                  <p class="text-xs sm:text-sm opacity-90">
                    Wukuf di Arafah yang penuh khidmat
                  </p>
                </div>
              </div>
              <div
                class="absolute top-3 right-3 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold opacity-0 group-hover:opacity-100 transition-all"
              >
                <i class="fas fa-eye mr-1"></i>Lihat
              </div>
            </div>

            <!-- Kuliner Khas -->
            <div
              class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1"
            >
              <div class="h-48 sm:h-56 lg:h-48 relative overflow-hidden">
                <img
                  src="./public/paket/romansiah.jpg"
                  alt="Kuliner Khas"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"
              >
                <div class="absolute bottom-4 left-4 right-4 text-white">
                  <h3 class="font-bold text-sm sm:text-base mb-1">
                    Kuliner Khas
                  </h3>
                  <p class="text-xs sm:text-sm opacity-90">
                    Makanan halal dan bergizi
                  </p>
                </div>
              </div>
              <div
                class="absolute top-3 right-3 bg-indigo-500 text-white px-2 py-1 rounded-full text-xs font-semibold opacity-0 group-hover:opacity-100 transition-all"
              >
                <i class="fas fa-eye mr-1"></i>Lihat
              </div>
            </div>

            <!-- Wisata Plus -->
            <div
              class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1"
            >
              <div class="h-48 sm:h-56 lg:h-48 relative overflow-hidden">
                <img
                  src="./public/gallery/IMG_2007.jpg"
                  alt="Wisata Plus"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
              </div>
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"
              >
                <div class="absolute bottom-4 left-4 right-4 text-white">
                  <h3 class="font-bold text-sm sm:text-base mb-1">
                    Wisata Plus
                  </h3>
                  <p class="text-xs sm:text-sm opacity-90">
                    Explore tempat bersejarah Islam
                  </p>
                </div>
              </div>
              <div
                class="absolute top-3 right-3 bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold opacity-0 group-hover:opacity-100 transition-all"
              >
                <i class="fas fa-eye mr-1"></i>Lihat
              </div>
            </div>