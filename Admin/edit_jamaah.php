<?php
require_once "../config/koneksi.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php?page=jamaah");
    exit;
}

// ambil data jamaah
$q = mysqli_query($conn, "SELECT * FROM jamaah WHERE kodeJamaah='$id'");
$row = mysqli_fetch_assoc($q);

if (!$row) {
    header("Location: dashboard.php?page=jamaah");
    exit;
}

// proses update
if (isset($_POST['update'])) {

    mysqli_query($conn, "UPDATE jamaah SET
        nama            = '$_POST[nama]',
        noKtp           = '$_POST[noKtp]',
        noPass          = '$_POST[noPass]',
        tempatLahir     = '$_POST[tempatLahir]',
        tglLahir        = '$_POST[tglLahir]',
        usia            = '$_POST[usia]',
        namaAyah        = '$_POST[namaAyah]',
        jk              = '$_POST[jk]',
        alamat          = '$_POST[alamat]',
        paketUmroh      = '$_POST[paketUmroh]',
        hargaPaket      = '$_POST[hargaPaket]',
        jenisJamaah     = '$_POST[jenisJamaah]',
        tglKeberangkatan= '$_POST[tglKeberangkatan]',
        perlengkapan    = '$_POST[perlengkapan]',
        vaksin          = '$_POST[vaksin]',
        hargaSetor      = '$_POST[hargaSetor]',
        tlp             = '$_POST[tlp]'
        WHERE kodeJamaah='$id'
    ");

    header("Location: dashboard.php?page=jamaah");
    exit;
}
?>

<div class="max-w-5xl bg-white p-8 rounded-2xl shadow border">

    <!-- HEADER -->
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-slate-800">Edit Data Jamaah</h2>
        <p class="text-sm text-slate-500">Perbarui informasi jamaah umroh</p>
    </div>

    <!-- FORM -->
    <form method="post" class="grid grid-cols-1 md:grid-cols-2 gap-5 text-sm">

        <div>
            <label>Nama Lengkap</label>
            <input name="nama" value="<?= htmlspecialchars($row['nama']); ?>" required
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>NIK</label>
            <input name="noKtp" value="<?= $row['noKtp']; ?>" required class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>No Paspor</label>
            <input name="noPass" value="<?= $row['noPass']; ?>" class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Tempat Lahir</label>
            <input name="tempatLahir" value="<?= htmlspecialchars($row['tempatLahir']); ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Tanggal Lahir</label>
            <input type="date" name="tglLahir" value="<?= $row['tglLahir']; ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Usia</label>
            <input type="number" name="usia" value="<?= $row['usia']; ?>" class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Nama Ayah</label>
            <input name="namaAyah" value="<?= htmlspecialchars($row['namaAyah']); ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Jenis Kelamin</label>
            <select name="jk" class="w-full rounded-xl border px-4 py-2">
                <option value="Laki-laki" <?= $row['jk'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?= $row['jk'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
            </select>
        </div>

        <div>
            <label>Alamat</label>
            <input name="alamat" value="<?= htmlspecialchars($row['alamat']); ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Paket Umroh</label>
            <input name="paketUmroh" value="<?= htmlspecialchars($row['paketUmroh']); ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Harga Paket</label>
            <input type="number" name="hargaPaket" value="<?= $row['hargaPaket']; ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Jenis Jamaah</label>
            <select name="jenisJamaah" class="w-full rounded-xl border px-4 py-2">
                <option value="Reguler" <?= $row['jenisJamaah'] == 'Reguler' ? 'selected' : ''; ?>>Reguler</option>
                <option value="VIP" <?= $row['jenisJamaah'] == 'VIP' ? 'selected' : ''; ?>>VIP</option>
            </select>
        </div>

        <div>
            <label>Tanggal Keberangkatan</label>
            <input type="date" name="tglKeberangkatan" value="<?= $row['tglKeberangkatan']; ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Perlengkapan</label>
            <input name="perlengkapan" value="<?= htmlspecialchars($row['perlengkapan']); ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Vaksin</label>
            <input name="vaksin" value="<?= htmlspecialchars($row['vaksin']); ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Total Setoran</label>
            <input type="number" name="hargaSetor" value="<?= $row['hargaSetor']; ?>"
                class="w-full rounded-xl border px-4 py-2">
        </div>

        <div>
            <label>Telepon</label>
            <input name="tlp" value="<?= $row['tlp']; ?>" class="w-full rounded-xl border px-4 py-2">
        </div>

        <!-- BUTTON -->
        <div class="md:col-span-2 flex gap-3 pt-4">
            <button name="update" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-medium">
                💾 Update Jamaah
            </button>

            <a href="dashboard.php?page=jamaah" class="px-6 py-2 bg-slate-200 hover:bg-slate-300 rounded-xl">
                Batal
            </a>
        </div>

    </form>

</div>