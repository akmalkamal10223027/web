<?php
include "../config/koneksi.php";

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tentang_kami LIMIT 1"));
?>

<h2 class="text-2xl font-semibold mb-6">Tentang Kami</h2>

<form action="proses_tentang.php" method="POST" enctype="multipart/form-data"
    class="bg-white p-6 rounded-xl shadow space-y-4 max-w-2xl">

    <div>
        <label class="font-medium">Profil</label>
        <textarea name="profil" rows="4" class="w-full border rounded-lg p-3"><?= $data['profil']; ?></textarea>
    </div>

    <div>
        <label class="font-medium">Visi</label>
        <textarea name="visi" rows="2" class="w-full border rounded-lg p-3"><?= $data['visi']; ?></textarea>
    </div>

    <div>
        <label class="font-medium">Misi</label>
        <textarea name="misi" rows="4" class="w-full border rounded-lg p-3"><?= $data['misi']; ?></textarea>
    </div>

    <div>
        <label class="font-medium">Gambar</label>
        <input type="file" name="gambar" class="block mt-2">
        <img src="../assets/img/<?= $data['gambar']; ?>" class="mt-3 w-40 rounded-lg">
    </div>

    <button class="bg-green-600 text-white px-6 py-2 rounded-lg">
        Simpan Perubahan
    </button>

</form>