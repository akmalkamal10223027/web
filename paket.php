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
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
      defer
    ></script>

  <title>Kontak - Sakha Diamond</title>
</head>

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

  <!-- Section Paket Umrah & Haji -->
      <section id="paket" class="bg-gray-50 py-16 px-4">
        <div class="container mx-auto">
          <div class="text-center mb-12">
            <div
              class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4"
            >
              <i class="fas fa-suitcase text-2xl text-green-600"></i>
            </div>
            <h2 class="text-3xl font-bold text-green-700 mb-4">
              Paket Umrah & Haji Lengkap
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
              Pilih paket sesuai kebutuhan dan budget Anda
            </p>
          </div>

          <div x-data="{ filter: 'all' }">
            <div class="flex flex-wrap justify-center gap-3 mb-8">
              <button
                @click="filter = 'all'"
                :class="filter === 'all' ? 'bg-green-600 text-white shadow-lg' : 'bg-white text-green-700 hover:bg-green-50'"
                class="px-6 py-3 rounded-full font-semibold transition-all flex items-center gap-2"
              >
                <i class="fas fa-th-large"></i> Semua Paket
              </button>
              <button
                @click="filter = 'umrah'"
                :class="filter === 'umrah' ? 'bg-green-600 text-white shadow-lg' : 'bg-white text-green-700 hover:bg-green-50'"
                class="px-6 py-3 rounded-full font-semibold transition-all flex items-center gap-2"
              >
                <i class="fas fa-mosque"></i> Umrah
              </button>
              <button
                @click="filter = 'haji'"
                :class="filter === 'haji' ? 'bg-green-600 text-white shadow-lg' : 'bg-white text-green-700 hover:bg-green-50'"
                class="px-6 py-3 rounded-full font-semibold transition-all flex items-center gap-2"
              >
                <i class="fas fa-kaaba"></i> Haji
              </button>
              <button
                @click="filter = 'plus'"
                :class="filter === 'plus' ? 'bg-green-600 text-white shadow-lg' : 'bg-white text-green-700 hover:bg-green-50'"
                class="px-6 py-3 rounded-full font-semibold transition-all flex items-center gap-2"
              >
                <i class="fas fa-plus"></i> Plus Wisata
              </button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
              <template x-if="filter === 'all' || filter === 'umrah'">
                <div
                  class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all p-6 border-t-4 border-green-500"
                >
                  <div class="relative mb-4">
                    <div
                      class="h-48 w-full bg-gradient-to-br from-green-50 to-green-100 rounded-lg overflow-hidden"
                    >
                      <img
                        src="./public/gallery/IMG_2045.jpg"
                        alt="Umrah Reguler"
                        class="h-full w-full object-cover rounded-lg hover:scale-105 transition-transform duration-300"
                      />
                    </div>
                    <div
                      class="absolute top-3 right-3 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold"
                    >
                      <i class="fas fa-fire"></i> Promo
                    </div>
                  </div>
                  <h3 class="font-bold text-xl mb-3 text-gray-800">
                    Umrah Reguler
                  </h3>
                  <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-calendar text-green-500 w-4"></i>
                      <span>Jadwal: </span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-hotel text-green-500 w-4"></i>
                      <span>Hotel *3</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-plane text-green-500 w-4"></i>
                      <span>Maskapai SAUDIA</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-clock text-green-500 w-4"></i>
                      <span>9 hari</span>
                    </div>
                  </div>
                  <div class="border-t pt-4 mb-4">
                    <span class="text-3xl font-bold text-green-700"
                      >Rp 25.900.000</span
                    >
                    <span class="text-gray-500 text-sm">/orang</span>
                  </div>
                  <button
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition-colors flex items-center justify-center gap-2"
                  >
                    <a
                      href=""
                    >
                      <i class="fas fa-external-link-alt"></i> Daftar Sekarang
                    </a>
                  </button>
                </div>
              </template>

              <template x-if="filter === 'all' || filter === 'plus'">
                <div
                  class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all p-6 border-t-4 border-blue-500"
                >
                  <div class="relative mb-4">
                    <div
                      class="h-48 w-full bg-gradient-to-br from-green-50 to-green-100 rounded-lg overflow-hidden"
                    >
                      <img
                        src="./public/gallery/IMG_2241.jpg"
                        alt="Umrah Reguler"
                        class="h-full w-full object-cover rounded-lg hover:scale-105 transition-transform duration-300"
                      />
                    </div>
                    <div
                      class="absolute top-3 right-3 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold"
                    >
                      <i class="fas fa-plus"></i> Plus
                    </div>
                  </div>
                  <h3 class="font-bold text-xl mb-3 text-gray-800">
                    Umrah Plus Turki
                  </h3>
                  <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-calendar text-blue-500 w-4"></i>
                      <span>Jadwal: Musim liburan</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-hotel text-blue-500 w-4"></i>
                      <span>Hotel *4</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-plane text-blue-500 w-4"></i>
                      <span
                        >Maskapai: SAUDIA, Qatar Airways, Garuda Indonesia</span
                      >
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-clock text-blue-500 w-4"></i>
                      <span>12 hari</span>
                    </div>
                  </div>
                  <div class="border-t pt-4 mb-4">
                    <span class="text-3xl font-bold text-blue-700"
                      >Rp 31.900.000</span
                    >
                    <span class="text-gray-500 text-sm">/orang</span>
                  </div>
                  <button
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition-colors flex items-center justify-center gap-2"
                  >
                    <a
                      href=""
                    >
                      <i class="fas fa-external-link-alt"></i> Daftar Sekarang
                    </a>
                  </button>
                </div>
              </template>

              <template x-if="filter === 'all' || filter === 'plus'">
                <div
                  class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all p-6 border-t-4 border-purple-500"
                >
                  <div class="relative mb-4">
                    <div
                      class="h-48 w-full bg-gradient-to-br from-green-50 to-green-100 rounded-lg overflow-hidden"
                    >
                      <img
                        src="./public/gallery/"
                        alt="Umrah Reguler"
                        class="h-full w-full object-cover rounded-lg hover:scale-105 transition-transform duration-300"
                      />
                    </div>
                    <div
                      class="absolute top-3 right-3 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold"
                    >
                      <i class="fas fa-crown"></i> Premium
                    </div>
                  </div>
                  <h3 class="font-bold text-xl mb-3 text-gray-800">
                    Umrah Privat Semaumu
                  </h3>
                  <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-calendar text-purple-500 w-4"></i>
                      <span>Jadwal: Musim liburan premium</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-hotel text-purple-500 w-4"></i>
                      <span>Hotel :</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-plane text-purple-500 w-4"></i>
                      <span>Maskapai :</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-clock text-purple-500 w-4"></i>
                      <span>. hari</span>
                    </div>
                  </div>
                  <div class="border-t pt-4 mb-4">
                    <span class="text-3xl font-bold text-purple-700">Rp .</span>
                    <span class="text-gray-500 text-sm">/orang</span>
                  </div>
                  <button
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition-colors flex items-center justify-center gap-2"
                  >
                    <a
                      href=""
                    >
                      <i class="fas fa-external-link-alt"></i> Daftar Sekarang
                    </a>
                  </button>
                </div>
              </template>

              <template x-if="filter === 'all' || filter === 'haji'">
                <div
                  class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all p-6 border-t-4 border-yellow-500"
                >
                  <div class="relative mb-4">
                    <div
                      class="h-48 w-full bg-gradient-to-br from-green-50 to-green-100 rounded-lg overflow-hidden"
                    >
                      <img
                        src="./public/paket/"
                        alt="Umrah Reguler"
                        class="h-full w-full object-cover rounded-lg hover:scale-105 transition-transform duration-300"
                      />
                    </div>
                    <div
                      class="absolute top-3 right-3 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold"
                    >
                      <i class="fas fa-star"></i> VIP
                    </div>
                  </div>
                  <h3 class="font-bold text-xl mb-3 text-gray-800">
                    Haji Khusus
                  </h3>
                  <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-calendar text-yellow-500 w-4"></i>
                      <span>Jadwal: Musim Haji</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-hotel text-yellow-500 w-4"></i>
                      <span>Hotel: </span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-plane text-yellow-500 w-4"></i>
                      <span>Maskapai: </span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                      <i class="fas fa-clock text-yellow-500 w-4"></i>
                      <span>40 hari</span>
                    </div>
                  </div>
                  <div class="border-t pt-4 mb-4">
                    <span class="text-3xl font-bold text-yellow-700"
                      >Rp 140.000.000</span
                    >
                    <span class="text-gray-500 text-sm">/orang</span>
                  </div>
                  <button
                    class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-3 rounded-lg transition-colors flex items-center justify-center gap-2"
                  >
                    <a
                      href="
                    >
                      <i class="fas fa-external-link-alt"></i> Daftar Sekarang
                    </a>
                  </button>
                </div>
              </template>
            </div>
          </div>
        </div>
      </section> 
         <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
      <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
          <div class="col-span-2">
            <div class="flex items-center gap-3 mb-4">
              <div>
                <img
                  src="./public/logo/logo2.png"
                  alt="Sakha Diamond Logo"
                  class="h-15 w-12"
                />
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
              <a
                href=""
                target="_blank"
                class="w-10 h-10 bg-black hover:bg-gray-800 rounded-lg flex items-center justify-center transition hover:scale-110"
              >
                <i class="fab fa-tiktok text-white"></i>
              </a>
              <a
                href=""
                target="_blank"
                class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-lg flex items-center justify-center transition hover:scale-110"
              >
                <i class="fab fa-instagram text-white"></i>
              </a>
              <a
                href="https://wa.me/621130938060"
                target="_blank"
                class="w-10 h-10 bg-green-600 hover:bg-green-700 rounded-lg flex items-center justify-center transition hover:scale-110"
              >
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
                <a
                  href="#paket"
                  class="hover:text-green-400 transition flex items-center gap-2"
                >
                  <i class="fas fa-mosque text-xs"></i> Umrah Reguler
                </a>
              </li>
              <li>
                <a
                  href="#paket"
                  class="hover:text-green-400 transition flex items-center gap-2"
                >
                  <i class="fas fa-globe-europe text-xs"></i> Umrah Plus Turki
                </a>
              </li>
              <li>
                <a
                  href="#paket"
                  class="hover:text-green-400 transition flex items-center gap-2"
                >
                  <i class="fas fa-city text-xs"></i> Umrah Private
                </a>
              </li>
              <li>
                <a
                  href="#paket"
                  class="hover:text-green-400 transition flex items-center gap-2"
                >
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
                <span>sakhadiamond</span>
              </li>
              <li class="flex items-center gap-2">
                <i class="fas fa-map-marker-alt text-green-400"></i>
                <span
                  >Cipasung</span
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
          <p class="text-gray-400">
            &copy; 2025 Sakha Diamond. All rights reserved. |
            <a href="#" class="text-green-400 hover:underline"
              >Privacy Policy</a
            >
            |
            <a href="#" class="text-green-400 hover:underline"
              >Terms of Service</a
            >
          </p>
          <p class="text-sm text-gray-500 mt-2">
            <i class="fas fa-certificate text-green-400 mr-1"></i>
            Terdaftar resmi dan berizin lengkap
          </p>
        </div>
      </div>
    </footer>
  </body>