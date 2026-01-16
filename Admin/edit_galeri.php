<?php
require_once __DIR__ . "/../config/koneksi.php";

/* ================= AMBIL ID ================= */
$id = $_GET['id'] ?? $_POST['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php?page=galeri");
    exit;
}

/* ================= PROSES UPDATE ================= */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $judul      = htmlspecialchars($_POST['judul']);
    $deskripsi  = htmlspecialchars($_POST['deskripsi']);
    $gambarLama = $_POST['gambar_lama'];
    $gambar     = $gambarLama;

    // Jika upload gambar baru
    if (!empty($_FILES['gambar']['name'])) {
        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $namaBaru = uniqid() . '.' . $ext;

        move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/" . $namaBaru);

        if ($gambarLama && file_exists("../assets/img/" . $gambarLama)) {
            unlink("../assets/img/" . $gambarLama);
        }

        $gambar = $namaBaru;
    }

    mysqli_query($conn, "
        UPDATE galeri SET
        judul='$judul',
        deskripsi='$deskripsi',
        gambar='$gambar'
        WHERE id='$id'
    ");

    header("Location: dashboard.php?page=galeri");
    exit;
}

/* ================= AMBIL DATA ================= */
$data = mysqli_query($conn, "SELECT * FROM galeri WHERE id='$id'");
$galeri = mysqli_fetch_assoc($data);

if (!$galeri) {
    header("Location: dashboard.php?page=galeri");
    exit;
}
?>

<!-- ================= FORM EDIT ================= -->
<div class="max-w-xl bg-white rounded-2xl shadow border p-6">

    <h2 class="text-2xl font-semibold mb-6">Edit Galeri</h2>

    <form method="POST" enctype="multipart/form-data" class="space-y-5">

        <input type="hidden" name="id" value="<?= $galeri['id']; ?>">
        <input type="hidden" name="gambar_lama" value="<?= $galeri['gambar']; ?>">

        <div>
            <label class="block text-sm mb-1">Judul</label>
            <input type="text" name="judul" required
                   value="<?= htmlspecialchars($galeri['judul']); ?>"
                   class="w-full border rounded-xl px-4 py-2 focus:ring focus:ring-slate-200">
        </div>

        <div>
            <label class="block text-sm mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" required
                      class="w-full border rounded-xl px-4 py-2 focus:ring focus:ring-slate-200"><?= htmlspecialchars($galeri['deskripsi']); ?></textarea>
        </div>

        <div>
            <label class="block text-sm mb-2">Gambar Saat Ini</label>
            <img src="../assets/img/<?= $galeri['gambar']; ?>" class="h-32 rounded-xl mb-3">
            <input type="file" name="gambar" class="text-sm">
            <p class="text-xs text-slate-500 mt-1">
                Kosongkan jika tidak ingin mengganti gambar
            </p>
        </div>

        <div class="flex justify-end gap-3">
            <a href="dashboard.php?page=galeri"
               class="px-4 py-2 border rounded-xl text-sm">
                Batal
            </a>

            <button type="submit"
                    class="bg-slate-900 text-white px-5 py-2 rounded-xl text-sm">
                Simpan Perubahan
            </button>
        </div>

    </form>

</div>
