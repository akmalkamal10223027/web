<?php
require_once __DIR__ . "/../config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM jamaah ORDER BY kodeJamaah DESC");
?>

<div class="space-y-6">

    <!-- JUDUL + TOMBOL TAMBAH -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Data Jamaah</h1>
            <p class="text-slate-500 text-sm">Daftar jamaah umroh</p>
        </div>

        <a href="dashboard.php?page=tambah_jamaah"
            class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            + Tambah Jamaah
        </a>
    </div>

    <!-- TABEL DATA -->
    <div class="bg-white rounded-2xl shadow border overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-slate-50">
                <tr>
                    <th class="p-3 text-left">Kode</th>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-center">JK</th>
                    <th class="p-3 text-center">Paket</th>
                    <th class="p-3 text-center">Keberangkatan</th>
                    <th class="p-3 text-center">Telepon</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php if (mysqli_num_rows($data)) { ?>
                    <?php while ($j = mysqli_fetch_assoc($data)) { ?>
                        <tr class="border-t hover:bg-slate-50">

                            <td class="p-3"><?= htmlspecialchars($j['kodeJamaah']); ?></td>
                            <td class="p-3"><?= htmlspecialchars($j['nama']); ?></td>
                            <td class="p-3 text-center"><?= $j['jk']; ?></td>
                            <td class="p-3 text-center"><?= $j['paketUmroh']; ?></td>
                            <td class="p-3 text-center">
                                <?= date('d M Y', strtotime($j['tglKeberangkatan'])); ?>
                            </td>
                            <td class="p-3 text-center"><?= $j['tlp']; ?></td>

                            <td class="p-3 text-center space-x-2">

                                <a href="dashboard.php?page=detail_jamaah&id=<?= $j['kodeJamaah']; ?>"
                                    class="px-3 py-1 text-xs rounded-lg bg-slate-200 hover:bg-slate-300">
                                    Detail
                                </a>

                                <a href="pdfjamaah.php?id=<?= $j['kodeJamaah']; ?>" target="_blank"
                                    class="px-3 py-1 text-xs rounded-lg bg-red-600 text-white">
                                    PDF
                                </a>

                                <a href="dashboard.php?page=edit_jamaah&id=<?= $j['kodeJamaah']; ?>"
                                    class="px-3 py-1 text-xs rounded-lg bg-yellow-500 text-white">
                                    Edit
                                </a>

                                <a href="hapus_jamaah.php?id=<?= $j['kodeJamaah']; ?>"
                                    onclick="return confirm('Yakin ingin menghapus data jamaah ini?')"
                                    class="px-3 py-1 text-xs rounded-lg bg-red-600 text-white">
                                    Hapus
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="7" class="p-4 text-center text-slate-500">
                            Data jamaah belum tersedia
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>