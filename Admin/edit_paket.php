<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$paket = mysqli_query($conn, "SELECT * FROM paket WHERE id='$id'");
$data = mysqli_fetch_assoc($paket);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Paket Umroh</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <!-- HEADER -->
    <div class="max-w-4xl mx-auto mb-6">
        <h2 class="text-3xl font-bold text-gray-800">Edit Paket Umroh</h2>
        <p class="text-gray-500">Perbarui data paket umroh</p>
    </div>

    <!-- CARD FORM -->
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8">

        <form method="post" enctype="multipart/form-data" class="space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="label">Judul Paket</label>
                    <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']); ?>" class="input">
                </div>

                <div>
                    <label class="label">Durasi</label>
                    <input type="text" name="durasi" value="<?= htmlspecialchars($data['durasi']); ?>" class="input">
                </div>

                <div>
                    <label class="label">Harga</label>
                    <input type="text" name="harga" value="<?= htmlspecialchars($data['harga']); ?>" class="input">
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
                <img src="../assets/img/<?= $data['gambar']; ?>" class="w-40 h-auto rounded-xl shadow mb-3">
                <input type="file" name="gambar" class="input">
            </div>

            <!-- ACTION -->
            <div class="flex gap-4 pt-4">
                <button name="update"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-xl font-medium shadow">
                    Update Paket
                </button>

                <a href="paket.php" class="px-6 py-2 rounded-xl border border-gray-300 text-gray-600 hover:bg-gray-100">
                    Kembali
                </a>
            </div>

        </form>
    </div>

</body>

</html>

<style>
    .label {
        @apply block text-sm font-semibold text-gray-600 mb-1;
    }

    .input {
        @apply w-full rounded-xl border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-600;
    }
</style>

<?php
if (isset($_POST['update'])) {

    // jika ganti gambar
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/" . $gambar);
    } else {
        $gambar = $data['gambar'];
    }

    mysqli_query($conn, "UPDATE paket SET
        judul='$_POST[judul]',
        durasi='$_POST[durasi]',
        harga='$_POST[harga]',
        hotel_makkah='$_POST[hotel_makkah]',
        hotel_madinah='$_POST[hotel_madinah]',
        maskapai='$_POST[maskapai]',
        sisa_seat='$_POST[sisa_seat]',
        gambar='$gambar',
        status='$_POST[status]'
        WHERE id='$id'
    ");

    header("Location: dashboard.php?page=paket");
}
?>