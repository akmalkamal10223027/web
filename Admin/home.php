<?php
include "../config/koneksi.php";

function total($conn, $table)
{
    $q = mysqli_query($conn, "SELECT COUNT(*) as total FROM $table");
    if (!$q) {
        return 0;
    }
    $d = mysqli_fetch_assoc($q);
    return $d['total'];
}

$totalPaket = total($conn, 'paket');
$totalJamaah = total($conn, 'jamaah');
$totalGaleri = total($conn, 'galeri');
$totalPembayaran = total($conn, 'pembayaran');
?>


<!-- PAGE TITLE -->
<div class="mb-8">
    <h1 class="text-3xl font-semibold text-slate-800">Dashboard</h1>
    <p class="text-sm text-slate-500 mt-1">
        Ringkasan data sistem COBA TRAVEL
    </p>
</div>

<!-- STAT CARDS -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Total Paket</p>
        <h2 class="text-3xl font-bold text-blue-600 mt-2">
            <?= $totalPaket ?>
        </h2>
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Total Jamaah</p>
        <h2 class="text-3xl font-bold text-emerald-600 mt-2">
            <?= $totalJamaah ?>
        </h2>
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Galeri</p>
        <h2 class="text-3xl font-bold text-purple-600 mt-2">
            <?= $totalGaleri ?>
        </h2>
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Pembayaran</p>
        <h2 class="text-3xl font-bold text-orange-600 mt-2">
            <?= $totalPembayaran ?>
        </h2>
    </div>

</div>

<!-- INFO BOX -->
<div class="bg-white rounded-2xl p-6 shadow-sm border">
    <h3 class="text-lg font-semibold text-slate-800 mb-2">
        Informasi
    </h3>
    <p class="text-sm text-slate-600 leading-relaxed">
        Selamat datang di dashboard admin Sakha Diamond. Gunakan menu di samping
        untuk mengelola halaman utama, tentang kami, paket, galeri,
        data jamaah, dan pembayaran.
    </p>
</div>