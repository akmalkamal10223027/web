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

  <title>paket - Sakha Diamond</title>
</head>

<!-- Navbar -->
<nav class="bg-white shadow sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-between py-3 px-6">
    
    <!-- Logo -->
    <a href="index.php" class="flex items-center gap-3">
      <img
        src="./public/logo/logo2.png"
        alt="Logo Barudak Group"
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
        href="https://www.instagram.com/halobarudakgroup01/"
        target="_blank"
        class="h-8 w-8 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg flex items-center justify-center hover:scale-110 transition"
      >
        <i class="fab fa-instagram"></i>
      </a>

      <a
        href="https://www.tiktok.com/@halobarudakgroup01"
        target="_blank"
        class="h-8 w-8 bg-black text-white rounded-lg flex items-center justify-center hover:scale-110 transition"
      >
        <i class="fab fa-tiktok"></i>
      </a>
    </div>

  </div>
</nav><section id="paket" class="bg-gray-50 py-16 px-4">
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