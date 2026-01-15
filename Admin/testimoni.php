<?php
require_once "../config/koneksi.php";
$data = mysqli_query($conn, "
  SELECT * FROM testimoni_sosmed
  ORDER BY created_at DESC
");
?>

<div class="max-w-6xl mx-auto">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-slate-800">
            Testimoni Media Sosial
        </h1>

        <a href="dashboard.php?page=testimoni_tambah"
            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
            + Tambah Testimoni
        </a>
    </div>

    <!-- TABLE -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-slate-100 text-slate-700">
                <tr>
                    <th class="p-3 text-left">No</th>
                    <th class="p-3">Platform</th>
                    <th class="p-3">Preview</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                while ($t = mysqli_fetch_assoc($data)) { ?>
                    <tr class="border-b">
                        <td class="p-3"><?= $no++; ?></td>

                        <td class="p-3 capitalize text-center">
                            <?= $t['platform']; ?>
                        </td>

                        <!-- PREVIEW -->
                        <td class="p-3 text-center">
                            <?php if ($t['platform'] === 'instagram') { ?>
                                <span class="px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-xs">
                                    Instagram Post
                                </span>
                            <?php } else { ?>
                                <span class="px-3 py-1 bg-slate-900 text-white rounded-full text-xs">
                                    TikTok Video
                                </span>
                            <?php } ?>
                        </td>

                        <!-- STATUS -->
                        <td class="p-3 text-center">
                            <?php if ($t['status'] === 'aktif') { ?>
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">
                                    Aktif
                                </span>
                            <?php } else { ?>
                                <span class="px-3 py-1 bg-gray-200 text-gray-600 rounded-full text-xs">
                                    Nonaktif
                                </span>
                            <?php } ?>
                        </td>

                        <!-- AKSI -->
                        <td class="p-3 text-center space-x-2">
                            <a href="testimoni_status.php?id=<?= $t['id']; ?>"
                                class="text-blue-600 hover:underline text-sm">
                                Toggle
                            </a>

                            <a href="testimoni_hapus.php?id=<?= $t['id']; ?>"
                                onclick="return confirm('Hapus testimoni ini?')"
                                class="text-red-600 hover:underline text-sm">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>

                <?php if (mysqli_num_rows($data) == 0) { ?>
                    <tr>
                        <td colspan="5" class="p-6 text-center text-gray-500">
                            Belum ada testimoni
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>