<?php
include "../config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM pesan ORDER BY id DESC");
?>

<h1 class="text-2xl font-semibold mb-6">Pesan Masuk</h1>

<div class="bg-white rounded-xl shadow border overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-4 text-left">Nama</th>
                <th class="px-6 py-4 text-left">Email</th>
                <th class="px-6 py-4 text-left">Pesan</th>
                <th class="px-6 py-4 text-left">Tanggal</th>
                <th class="px-6 py-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($p = mysqli_fetch_assoc($data)) { ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4"><?= htmlspecialchars($p['nama']) ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($p['email']) ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($p['pesan']) ?></td>
                    <td class="px-6 py-4 text-gray-500">
                        <?= date('d M Y H:i', strtotime($p['created_at'])) ?>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="hapus_pesan.php?id=<?= $p['id'] ?>"
                            onclick="return confirm('Yakin ingin menghapus pesan ini?')"
                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php } ?>

            <?php if (mysqli_num_rows($data) == 0) { ?>
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-500">
                        Tidak ada pesan masuk
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>