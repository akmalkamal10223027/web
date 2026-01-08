<?php
include "config/koneksi.php";

// validasi id
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

// QUERY UMROH
$query = mysqli_query($conn, "SELECT * FROM paket WHERE id='$id'");
$p = mysqli_fetch_assoc($query);

// jika data tidak ditemukan
if (!$p) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($p['judul']); ?> - Sakha Diamond</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- HEADER -->
    <section class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <a href="index.php" class="text-green-600 hover:underline flex items-center gap-2 mb-4">
                <i class="fas fa-arrow-left"></i> Kembali ke Paket Umroh
            </a>

            <h1 class="text-3xl font-bold text-green-700">
                <?= htmlspecialchars($p['judul']); ?>
            </h1>
            <p class="text-gray-600 mt-2">
                Paket Umroh terbaik bersama Sakha Diamond
            </p>
        </div>
    </section>

    <!-- DETAIL -->
    <section class="max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-2 gap-14 items-start">

        <!-- GAMBAR -->
        <div class="bg-white rounded-3xl shadow-lg p-6 flex items-center justify-center">
            <div class="w-full h-[420px] bg-gray-100 rounded-2xl flex items-center justify-center overflow-hidden">
                <img src="assets/img/<?= htmlspecialchars($p['gambar']); ?>" alt="<?= htmlspecialchars($p['judul']); ?>"
                    class="max-w-full max-h-full object-contain">
            </div>
        </div>

        <!-- INFO -->
        <div class="bg-white rounded-3xl shadow-lg p-8 space-y-6">

            <div class="flex items-center justify-between border-b pb-4">
                <h2 class="text-2xl font-bold text-gray-800">Detail Paket Umroh</h2>
                <span class="text-2xl font-extrabold text-green-700">
                    Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                </span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700">

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-clock text-green-600"></i>
                    <span><b>Durasi:</b> <?= $p['durasi']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-plane text-green-600"></i>
                    <span><b>Maskapai:</b> <?= $p['maskapai']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-hotel text-green-600"></i>
                    <span><b>Hotel Makkah:</b> <?= $p['hotel_makkah']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-hotel text-green-600"></i>
                    <span><b>Hotel Madinah:</b> <?= $p['hotel_madinah']; ?></span>
                </div>

                <div class="flex gap-3 items-center">
                    <i class="fa-solid fa-user-group text-green-600"></i>
                    <span><b>Sisa Seat:</b> <?= $p['sisa_seat']; ?> jamaah</span>
                </div>

            </div>

            <!-- CTA -->
            <a href="https://wa.me/6282130938060?text=Saya%20ingin%20daftar%20<?= urlencode($p['judul']); ?>"
                target="_blank"
                class="mt-6 flex items-center justify-center gap-3 bg-green-600 hover:bg-green-700 text-white py-4 rounded-2xl text-lg font-semibold transition shadow-lg hover:shadow-xl">
                <i class="fab fa-whatsapp text-xl"></i>
                Daftar via WhatsApp
            </a>

        </div>
    </section>

</body>

</html>