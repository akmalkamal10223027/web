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
$totalTestimoni = total($conn, 'testimoni_sosmed');
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

    <!-- Testimoni -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">testimoni</p>
        <h2 class="text-3xl font-bold text-purple-600 mt-2">
            <?= $totalTestimoni ?>
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

    <!-- WRAPPER -->
    <div class="relative h-64">
        <canvas id="dashboardChart"></canvas>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {

    const ctx = document.getElementById('dashboardChart');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                'Paket',
                'Semua Paket',
                'Jamaah',
                'Galeri',
                'Pembayaran',
                'Pesan',
                'Testimoni'
            ],
            datasets: [{
                data: [
                    <?= $totalPaket ?>,
                    <?= $totalSemuaPaket ?>,
                    <?= $totalJamaah ?>,
                    <?= $totalGaleri ?>,
                    <?= $totalPembayaran ?>,
                    <?= $totalPesan ?>,
                    <?= $totalTestimoni ?>
                ],
                backgroundColor: '#22c55e',
                borderRadius: 10,
                barThickness: 36
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // 🔥 PENTING
            plugins: {
                legend: { display: false }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: {
                        color: '#475569',
                        font: { size: 12 }
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#f1f5f9'
                    },
                    ticks: {
                        stepSize: 1,
                        color: '#64748b'
                    }
                }
            }
        }
    });

});
</script>
