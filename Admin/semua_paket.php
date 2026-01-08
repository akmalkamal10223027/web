<?php
include "../config/koneksi.php";

/* GANTI DI SINI */
$data = mysqli_query($conn, "SELECT * FROM semua_paket");
?>

<div class="p-2">

    <!-- PAGE HEADER -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-semibold text-slate-800 tracking-tight">
                Semua Paket
            </h2>
            <p class="text-sm text-slate-500 mt-1">
                Kelola seluruh paket yang tersedia (Umroh, Haji, dan lainnya)
            </p>
        </div>

        <!-- TAMBAH PAKET -->
        <a href="dashboard.php?page=tambah_semua_paket"
            class="inline-flex items-center gap-2 bg-slate-900 hover:bg-slate-800 text-white px-5 py-2.5 rounded-xl text-sm font-medium shadow transition">
            <i class="fas fa-plus"></i>
            Tambah Paket
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

                        <!-- JUDUL -->
                        <td class="px-8 py-5 font-medium text-slate-800">
                            <?= htmlspecialchars($p['judul']); ?>
                        </td>

                        <!-- HARGA -->
                        <td class="px-8 py-5">
                            Rp <?= number_format($p['harga'], 0, ',', '.'); ?>
                        </td>

                        <!-- AKSI -->
                        <td class="px-8 py-5 text-right">
                            <div class="flex justify-end gap-2">

                                <!-- EDIT -->
                                <a href="dashboard.php?page=edit_semua_paket&id=<?= $p['id']; ?>"
                                    class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-4 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-100 transition">
                                    <i class="fas fa-pen"></i>
                                    Edit
                                </a>

                                <!-- HAPUS -->
                                <a href="hapus_semua_paket.php?id=<?= $p['id']; ?>"
                                    onclick="return confirm('Yakin ingin menghapus paket ini?')"
                                    class="inline-flex items-center gap-1 rounded-lg bg-red-600 px-4 py-1.5 text-xs font-medium text-white hover:bg-red-700 transition">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>


                            </div>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</div>