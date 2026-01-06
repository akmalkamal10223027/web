<?php
require_once __DIR__ . "/../config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM galeri ORDER BY created_at DESC");
?>

<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-semibold text-slate-800">Galeri</h1>
        <p class="text-sm text-slate-500">Kelola galeri yang tampil di website</p>
    </div>

    <a href="dashboard.php?page=tambah_galeri" class="bg-slate-900 text-white px-5 py-2.5 rounded-xl text-sm shadow">
        + Tambah Galeri
    </a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

    <?php while ($g = mysqli_fetch_assoc($data)) { ?>
        <div class="bg-white rounded-2xl shadow border overflow-hidden group">

            <div class="h-48 overflow-hidden">
                <img src="../assets/img/<?= $g['gambar']; ?>"
                    class="w-full h-full object-cover group-hover:scale-110 transition">
            </div>

            <div class="p-4 space-y-2">
                <h3 class="font-medium text-slate-800 truncate">
                    <?= htmlspecialchars($g['judul']); ?>
                </h3>

                <p class="text-xs text-slate-500 line-clamp-2">
                    <?= htmlspecialchars($g['deskripsi']); ?>
                </p>

                <a href="hapus_galeri.php?id=<?= $g['id']; ?>" onclick="return confirm('Yakin hapus galeri ini?')"
                    class="inline-block text-xs text-rose-600 border border-rose-200 px-3 py-1 rounded-lg hover:bg-rose-600 hover:text-white transition">
                    Hapus
                </a>
            </div>
        </div>
    <?php } ?>

</div>