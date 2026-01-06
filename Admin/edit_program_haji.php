<?php
include "../config/koneksi.php";

/* ======================
   VALIDASI ID
====================== */
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: dashboard.php?page=program_haji");
    exit;
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

/* ======================
   AMBIL DATA LAMA
====================== */
$query = mysqli_query($conn, "SELECT * FROM program_haji WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: dashboard.php?page=program_haji");
    exit;
}

/* ======================
   PROSES UPDATE
====================== */
if (isset($_POST['update'])) {

    $judul = $_POST['judul'];
    $durasi = $_POST['durasi'];
    $harga = $_POST['harga'];
    $hotel_makkah = $_POST['hotel_makkah'];
    $hotel_madinah = $_POST['hotel_madinah'];
    $maskapai = $_POST['maskapai'];
    $sisa_seat = $_POST['sisa_seat'];
    $status = $_POST['status'];

    // upload gambar jika diganti
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = time() . "_" . $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/" . $gambar);
    } else {
        $gambar = $data['gambar'];
    }

    mysqli_query($conn, "UPDATE program_haji SET
        judul='$judul',
        durasi='$durasi',
        harga='$harga',
        hotel_makkah='$hotel_makkah',
        hotel_madinah='$hotel_madinah',
        maskapai='$maskapai',
        sisa_seat='$sisa_seat',
        gambar='$gambar',
        status='$status'
        WHERE id='$id'
    ");

    header("Location: dashboard.php?page=program_haji");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Program Haji</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen p-6">

    <!-- HEADER -->
    <div class="max-w-5xl mx-auto mb-6">
        <h2 class="text-3xl font-bold text-slate-800">Edit Program Haji</h2>
        <p class="text-slate-500">Perbarui data program haji</p>
    </div>

    <!-- FORM CARD -->
    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow border p-8">

        <form method="post" enctype="multipart/form-data" class="space-y-6">

            <div class="grid md:grid-cols-2 gap-6">

                <div>
                    <label class="label">Judul Program</label>
                    <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']); ?>" class="input"
                        required>
                </div>

                <div>
                    <label class="label">Durasi</label>
                    <input type="text" name="durasi" value="<?= htmlspecialchars($data['durasi']); ?>" class="input">
                </div>

                <div>
                    <label class="label">Harga</label>
                    <input type="number" name="harga" value="<?= htmlspecialchars($data['harga']); ?>" class="input">
                </div>

                <div>
                    <label class="label">Maskapai</label>
                    <input type="text" name="maskapai" value="<?= htmlspecialchars($data['maskapai']); ?>"
                        class="input">
                </div>

                <div>
                    <label class="label">Hotel Makkah</label>
                    <input type="text" name="hotel_makkah" value="<?= htmlspecialchars($data['hotel_makkah']); ?>"
                        class="input">
                </div>

                <div>
                    <label class="label">Hotel Madinah</label>
                    <input type="text" name="hotel_madinah" value="<?= htmlspecialchars($data['hotel_madinah']); ?>"
                        class="input">
                </div>

                <div>
                    <label class="label">Sisa Seat</label>
                    <input type="number" name="sisa_seat" value="<?= htmlspecialchars($data['sisa_seat']); ?>"
                        class="input">
                </div>

                <div>
                    <label class="label">Status</label>
                    <select name="status" class="input">
                        <option value="aktif" <?= $data['status'] == 'aktif' ? 'selected' : ''; ?>>Aktif</option>
                        <option value="nonaktif" <?= $data['status'] == 'nonaktif' ? 'selected' : ''; ?>>Nonaktif</option>
                    </select>
                </div>

            </div>

            <!-- GAMBAR -->
            <div>
                <label class="label">Gambar Saat Ini</label>
                <?php if ($data['gambar']) { ?>
                    <img src="../assets/img/<?= $data['gambar']; ?>" class="w-48 rounded-xl shadow mb-3">
                <?php } ?>
                <input type="file" name="gambar" class="input">
            </div>

            <!-- ACTION -->
            <div class="flex justify-end gap-3 pt-4">
                <a href="dashboard.php?page=program_haji"
                    class="px-6 py-2 rounded-xl border text-slate-700 hover:bg-slate-100">
                    Batal
                </a>

                <button name="update"
                    class="px-6 py-2 rounded-xl bg-green-600 hover:bg-green-700 text-white font-medium shadow">
                    Update Program
                </button>
            </div>

        </form>
    </div>

</body>

</html>

<style>
    .label {
        @apply block text-sm font-medium text-slate-700 mb-1;
    }

    .input {
        @apply w-full rounded-xl border px-4 py-2 text-sm focus:ring-2 focus:ring-green-600 focus:outline-none;
    }
</style>