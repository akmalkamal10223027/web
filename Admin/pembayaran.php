<?php
require_once __DIR__ . "/../config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY id DESC");
?>

<div class="space-y-6">

    <!-- JUDUL + TOMBOL TAMBAH -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Data Pembayaran Jamaah</h1>
            <p class="text-slate-500 text-sm">Daftar transaksi pembayaran</p>
        </div>

        <a href="dashboard.php?page=tambah_pembayaran"
            class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            + Tambah Transaksi
        </a>
    </div>

    <!-- TABEL DATA -->
    <div class="bg-white rounded-2xl shadow border overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50">
                <tr>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-center">Tanggal Bayar</th>
                    <th class="p-3 text-center">Setoran</th>
                    <th class="p-3 text-center">Status</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($data)) { ?>
                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                        <tr class="border-t hover:bg-slate-50">
                            <td class="p-3"><?= htmlspecialchars($row['nama']); ?></td>
                            <td class="p-3 text-center"><?= $row['tglBayar']; ?></td>
                            <td class="p-3 text-center">
                                Rp <?= number_format($row['hargaSetor'], 0, ',', '.'); ?>
                            </td>
                            <td class="p-3 text-center">
                                <span class="px-3 py-1 rounded-full text-xs
                                <?= $row['status'] == 'Tervalidasi'
                                    ? 'bg-emerald-100 text-emerald-700'
                                    : 'bg-yellow-100 text-yellow-700'; ?>">
                                    <?= $row['status']; ?>
                                </span>
                            </td>
                            <td class="p-3 text-center space-x-2">

                                <a href="dashboard.php?page=detail_pembayaran&id=<?= $row['id']; ?>"
                                    class="px-3 py-1 text-xs rounded-lg bg-slate-200 hover:bg-slate-300">
                                    Detail
                                </a>

                                <a href="pdfPembayaran.php?id=<?= $row['id']; ?>"
                                    class="px-3 py-1 text-xs rounded-lg bg-red-500 text-white">
                                    PDF
                                </a>

                                <a href="dashboard.php?page=edit_pembayaran&id=<?= $row['id']; ?>"
                                    class="px-3 py-1 text-xs rounded-lg bg-yellow-500 text-white">
                                    Edit
                                </a>

                                <a href="hapus_pembayaran.php?id=<?= $row['id']; ?>"
                                    onclick="return confirm('Yakin ingin menghapus transaksi ini?')"
                                    class="px-3 py-1 text-xs rounded-lg bg-red-700 text-white">
                                    Hapus
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="5" class="p-4 text-center text-slate-500">
                            Belum ada transaksi
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>