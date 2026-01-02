<?php
include "../config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM paket");
?>

<div class="p-2">

    <!-- PAGE HEADER -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-semibold text-slate-800 tracking-tight">
                Paket Umroh
            </h2>
            <p class="text-sm text-slate-500 mt-1">
                Kelola seluruh paket umroh yang tersedia
            </p>
        </div>

        <!-- lewat dashboard -->
        <a href="dashboard.php?page=tambah_paket"
            class="inline-flex items-center gap-2 bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 rounded-xl text-sm font-medium shadow">
            + Tambah Paket
        </a>
    </div>

    <!-- TABLE -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">

        <table class="w-full text-sm text-slate-700">
            <thead class="border-b border-slate-100 bg-slate-50">
                <tr>
                    <th class="px-8 py-4 font-medium text-left">Judul Paket</th>
                    <th class="px-8 py-4 font-medium text-left">Harga</th>
                    <th class="px-8 py-4 font-medium text-right">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($p = mysqli_fetch_assoc($data)) { ?>
                    <tr class="border-b last:border-0 hover:bg-slate-50 transition">

                        <td class="px-8 py-5 font-medium text-slate-800">
                            <?= htmlspecialchars($p['judul']); ?>
                        </td>

                        <td class="px-8 py-5">
                            Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                        </td>

                        <td class="px-8 py-5 text-right flex justify-end gap-2">

                            <!-- EDIT -->
                            <a href="dashboard.php?page=edit_paket&id=<?= $p['id']; ?>"
                                class="inline-flex items-center rounded-lg border border-slate-200 px-4 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-100 transition">
                                Edit
                            </a>

                            <!-- HAPUS -->
                            <a href="hapus_paket.php?id=<?= $p['id']; ?>"
                                onclick="return confirm('Yakin ingin menghapus paket ini?')"
                                class="inline-flex items-center rounded-lg bg-red-600 px-4 py-1.5 text-xs font-medium text-white hover:bg-red-700 transition">
                                Hapus
                            </a>

                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</div>