<?php
require_once __DIR__ . "/../config/koneksi.php";

if (isset($_POST['simpan'])) {

    $kodeJamaah = uniqid("JM-");
    $nama = $_POST['nama'];
    $noKtp = $_POST['noKtp'];
    $noPass = $_POST['noPass'];
    $tempatLahir = $_POST['tempatLahir'];
    $tglLahir = $_POST['tglLahir'];
    $usia = $_POST['usia'];
    $namaAyah = $_POST['namaAyah'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $paketUmroh = $_POST['paketUmroh'];
    $hargaPaket = $_POST['hargaPaket'];
    $jenisJamaah = $_POST['jenisJamaah'];
    $tglKeberangkatan = $_POST['tglKeberangkatan'];
    $perlengkapan = $_POST['perlengkapan'];
    $vaksin = $_POST['vaksin'];
    $hargaSetor = $_POST['hargaSetor'];
    $tlp = $_POST['tlp'];

    // ===== UPLOAD FILE =====   
    $folder = "../uploads/jamaah/";

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $ktp = time() . "_ktp_" . $_FILES['ktp']['name'];
    $kk = time() . "_kk_" . $_FILES['kk']['name'];
    $passport = time() . "_passport_" . $_FILES['passport']['name'];

    move_uploaded_file($_FILES['ktp']['tmp_name'], $folder . $ktp);
    move_uploaded_file($_FILES['kk']['tmp_name'], $folder . $kk);
    move_uploaded_file($_FILES['passport']['tmp_name'], $folder . $passport);

    // ===== SIMPAN DATABASE =====
    $sql = "INSERT INTO jamaah VALUES (
        '$kodeJamaah','$nama','$noKtp','$noPass','$tempatLahir','$tglLahir','$usia',
        '$namaAyah','$jk','$alamat','$paketUmroh','$hargaPaket','$jenisJamaah',
        '$tglKeberangkatan','$perlengkapan','$vaksin','$hargaSetor','$tlp',
        '$ktp','$kk','$passport'
    )";

    mysqli_query($conn, $sql);

    echo "<script>
        alert('Data jamaah berhasil ditambahkan');
        window.location='dashboard.php?page=jamaah';
    </script>";
}
?>

<div class="max-w-5xl mx-auto space-y-6">

    <div>
        <h1 class="text-3xl font-bold text-slate-800">Tambah Jamaah</h1>
        <p class="text-slate-500 text-sm">Input data jamaah umroh</p>
    </div>

    <form method="POST" enctype="multipart/form-data"
        class="bg-white rounded-2xl shadow border p-8 grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- NAMA -->
        <div>
            <label class="text-sm font-medium">Nama Lengkap</label>
            <input type="text" name="nama" required class="input">
        </div>

        <div>
            <label class="text-sm font-medium">No KTP</label>
            <input type="text" name="noKtp" required class="input">
        </div>

        <div>
            <label class="text-sm font-medium">No Passport</label>
            <input type="text" name="noPass" required class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Tempat Lahir</label>
            <input type="text" name="tempatLahir" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Tanggal Lahir</label>
            <input type="date" name="tglLahir" required class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Usia</label>
            <input type="number" name="usia" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Nama Ayah</label>
            <input type="text" name="namaAyah" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Jenis Kelamin</label>
            <select name="jk" class="input">
                <option value="">- Pilih -</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
        </div>

        <div class="md:col-span-2">
            <label class="text-sm font-medium">Alamat</label>
            <textarea name="alamat" class="input"></textarea>
        </div>

        <div>
            <label class="text-sm font-medium">Paket Umroh</label>
            <input type="text" name="paketUmroh" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Harga Paket</label>
            <input type="number" name="hargaPaket" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Jenis Jamaah</label>
            <select name="jenisJamaah" class="input">
                <option>Reguler</option>
                <option>VIP</option>
            </select>
        </div>

        <div>
            <label class="text-sm font-medium">Tanggal Keberangkatan</label>
            <input type="date" name="tglKeberangkatan" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Perlengkapan</label>
            <input type="text" name="perlengkapan" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Vaksin</label>
            <input type="text" name="vaksin" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Harga Setor</label>
            <input type="number" name="hargaSetor" class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Telepon</label>
            <input type="text" name="tlp" class="input">
        </div>

        <!-- UPLOAD -->
        <div>
            <label class="text-sm font-medium">Upload KTP</label>
            <input type="file" name="ktp" required class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Upload KK</label>
            <input type="file" name="kk" required class="input">
        </div>

        <div>
            <label class="text-sm font-medium">Upload Passport</label>
            <input type="file" name="passport" required class="input">
        </div>

        <div class="md:col-span-2 flex justify-end gap-3">
            <a href="dashboard.php?page=jamaah" class="px-6 py-2 bg-gray-200 rounded-lg">
                Batal
            </a>
            <button type="submit" name="simpan" class="px-6 py-2 bg-blue-600 text-white rounded-lg">
                Simpan Data
            </button>
        </div>

    </form>
</div>

<style>
    .input {
        width: 100%;
        padding: 10px;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        margin-top: 4px;
    }
</style>