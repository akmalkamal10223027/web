<?php
require_once __DIR__ . "/../config/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $platform = mysqli_real_escape_string($conn, $_POST['platform']);
    $url = mysqli_real_escape_string($conn, $_POST['embed_url']);

    mysqli_query($conn, "
      INSERT INTO testimoni_sosmed (platform, embed_url)
      VALUES ('$platform','$url')
    ");

    header("Location: dashboard.php?page=testimoni");
}
?>
<form method="POST" class="space-y-4 max-w-xl bg-white p-6 rounded-xl shadow">

    <h2 class="text-xl font-bold text-slate-800">Tambah Testimoni Sosial Media</h2>

    <div>
        <label class="block text-sm font-medium mb-1">Platform</label>
        <select name="platform" required class="w-full border rounded-lg p-2">
            <option value="">-- Pilih Platform --</option>
            <option value="instagram">Instagram</option>
            <option value="tiktok">TikTok</option>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Link Post / Video</label>
        <textarea name="embed_url" required class="w-full border rounded-lg p-2"
            placeholder="https://www.instagram.com/p/xxxx atau https://www.tiktok.com/@user/video/xxxx"></textarea>
    </div>

    <button type="submit" class="px-5 py-2 bg-green-600 text-white rounded-lg">
        Simpan
    </button>
</form>