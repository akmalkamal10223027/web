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
                <img src="./public/images/logo2.png" alt="Logo Sakhadiamond" width="48" height="48"
                    class="h-12 w-auto" />
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
                <a href="https://www.instagram.com/halobarudakgroup01/" target="_blank"
                    class="h-8 w-8 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.tiktok.com/@halobarudakgroup01" target="_blank"
                    class="h-8 w-8 bg-black text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>

        </div>
    </nav>

    <!-- judul -->
    <section class="bg-gradient-to-r from-green-600 to-green-500 text-white py-14">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-3">Hubungi Kami</h1>
            <p class="max-w-2xl mx-auto text-green-100">
                Kami siap membantu perjalanan ibadah Umroh & Haji Anda
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
                        <a href="https://wa.me/6282119081443" target="_blank"
                            class="text-green-600 font-medium hover:underline">
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

</body>

</html>