<?php
include "../config/koneksi.php";

/**
 * Fungsi hitung total data
 */
function total($conn, $table)
{
    $query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM $table");
    if (!$query) {
        return 0;
    }
    $data = mysqli_fetch_assoc($query);
    return $data['total'];
}

// Total data
$totalPaket = total($conn, 'paket');
$totalSemuaPaket = total($conn, 'semua_paket');
$totalprogramhaji = total($conn, 'program_haji');
$totalJamaah = total($conn, 'jamaah');
$totalGaleri = total($conn, 'galeri');
$totalPembayaran = total($conn, 'transaksi');
$totalPesan = total($conn, 'Pesan');
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- PAGE TITLE -->
<div class="mb-10">
    <h1 class="text-3xl font-semibold text-slate-800">Dashboard</h1>
    <p class="text-sm text-slate-500 mt-1">
        Ringkasan data sistem <span class="font-medium">SAKHA DIAMOND</span>
    </p>
</div>

<!-- STAT CARDS -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mb-12">

    <!-- TOTAL PAKET -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Total Paket</p>
        <h2 class="text-3xl font-bold text-blue-600 mt-2">
            <?= $totalPaket ?>
        </h2>
    </div>

    <!-- TOTAL SEMUA PAKET -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Semua Paket</p>
        <h2 class="text-3xl font-bold text-indigo-600 mt-2">
            <?= $totalSemuaPaket ?>
        </h2>
    </div>

    <!-- TOTAL PROGRAM HAJI -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Program haji</p>
        <h2 class="text-3xl font-bold text-indigo-600 mt-2">
            <?= $totalprogramhaji ?>
        </h2>
    </div>

    <!-- TOTAL JAMAAH -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Total Jamaah</p>
        <h2 class="text-3xl font-bold text-emerald-600 mt-2">
            <?= $totalJamaah ?>
        </h2>
    </div>

    <!-- GALERI -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Galeri</p>
        <h2 class="text-3xl font-bold text-purple-600 mt-2">
            <?= $totalGaleri ?>
        </h2>
    </div>

    <!-- PEMBAYARAN -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Pembayaran</p>
        <h2 class="text-3xl font-bold text-orange-600 mt-2">
            <?= $totalPembayaran ?>
        </h2>
    </div>

    <!-- Pesan -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Pesan</p>
        <h2 class="text-3xl font-bold text-orange-600 mt-2">
            <?= $totalPesan ?>
        </h2>
    </div>


</div>
<!-- GRAFIK STATISTIK -->
<div class="bg-white rounded-2xl p-6 shadow-sm border mt-6">
    <h3 class="text-lg font-semibold text-slate-800 mb-4">
        Statistik Data Sistem
    </h3>

    <canvas id="dashboardChart" height="120"></canvas>
</div>

<script>
    const ctx = document.getElementById('dashboardChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                'Paket',
                'Semua Paket',
                'Jamaah',
                'Galeri',
                'Pembayaran',
                'Pesan'
            ],
            datasets: [{
                label: 'Jumlah Data',
                data: [
                    <?= $totalPaket ?>,
                    <?= $totalSemuaPaket ?>,
                    <?= $totalJamaah ?>,
                    <?= $totalGaleri ?>,
                    <?= $totalPembayaran ?>,
                    <?= $totalPesan ?>
                ],
                backgroundColor: [
                    '#3b82f6',
                    '#6366f1',
                    '#10b981',
                    '#a855f7',
                    '#f97316',
                    '#ef4444'
                ],
                borderRadius: 10
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });
</script>