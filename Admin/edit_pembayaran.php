<?php
require_once "../config/koneksi.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php?page=pembayaran");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if (!$row) {
    header("Location: dashboard.php?page=pembayaran");
    exit;
}

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $noKtp = $_POST['noKtp'];
    $alamat = $_POST['alamat'];
    $paketUmroh = $_POST['paketUmroh'];
    $hargaPaket = $_POST['hargaPaket'];
    $hargaSetor = $_POST['hargaSetor'];
    $tglBayar = $_POST['tglBayar'];
    $status = $_POST['status'];

    mysqli_query($conn, "UPDATE transaksi SET
        nama='$nama',
        noKtp='$noKtp',
        alamat='$alamat',
        paketUmroh='$paketUmroh',
        hargaPaket='$hargaPaket',
        hargaSetor='$hargaSetor',
        tglBayar='$tglBayar',
        status='$status'
        WHERE id='$id'
    ");

    header("Location: dashboard.php?page=pembayaran");
    exit;
}
?>

<div class="max-w-4xl bg-white p-8 rounded-2xl shadow border">

    <!-- HEADER -->
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-slate-800">Edit Pembayaran</h2>
        <p class="text-sm text-slate-500">Perbarui data transaksi jamaah</p>
    </div>

    <!-- FORM -->
    <form method="post" class="grid grid-cols-1 md:grid-cols-2 gap-5 text-sm">

        <div>
            <label class="block mb-1">Nama Jamaah</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($row['nama']); ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label class="block mb-1">NIK</label>
            <input type="number" name="noKtp" value="<?= $row['noKtp']; ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label class="block mb-1">Alamat</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($row['alamat']); ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label class="block mb-1">Paket Umroh</label>
            <input type="text" name="paketUmroh" value="<?= htmlspecialchars($row['paketUmroh']); ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label class="block mb-1">Harga Paket</label>
            <input type="number" name="hargaPaket" value="<?= $row['hargaPaket']; ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label class="block mb-1">Jumlah Setor</label>
            <input type="number" name="hargaSetor" value="<?= $row['hargaSetor']; ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label class="block mb-1">Tanggal Bayar</label>
            <input type="date" name="tglBayar" value="<?= $row['tglBayar']; ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label class="block mb-1">Status</label>
            <select name="status" class="w-full rounded-xl border px-4 py-2">
                <option value="Pending" <?= $row['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                <option value="Tervalidasi" <?= $row['status'] == 'Tervalidasi' ? 'selected' : ''; ?>>Tervalidasi</option>
            </select>
        </div>

        <!-- BUTTON -->
        <div class="md:col-span-2 flex gap-3 pt-4">
            <button name="update" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-medium">
                💾 Update Data
            </button>

            <a href="dashboard.php?page=pembayaran" class="px-6 py-2 bg-slate-200 hover:bg-slate-300 rounded-xl">
                Batal
            </a>
        </div>

    </form>

</div>