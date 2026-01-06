<?php
require_once __DIR__ . "/../config/koneksi.php";

/* =======================
   SIMPAN DATA
======================= */
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $noKtp = $_POST['noKtp'];
    $alamat = $_POST['alamat'];
    $paketUmroh = $_POST['paketUmroh'];
    $hargaPaket = $_POST['hargaPaket'];
    $hargaSetor = $_POST['hargaSetor'];
    $tglBayar = $_POST['tglBayar'];
    $status = $_POST['status'];

    mysqli_query($conn, "
        INSERT INTO transaksi 
        (nama, noKtp, alamat, paketUmroh, hargaPaket, hargaSetor, tglBayar, status)
        VALUES
        ('$nama','$noKtp','$alamat','$paketUmroh','$hargaPaket','$hargaSetor','$tglBayar','$status')
    ");

    header("Location: dashboard.php?page=pembayaran");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen p-8">

    <div class="max-w-4xl mx-auto space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-slate-800">Tambah Transaksi</h1>
            <p class="text-slate-500 text-sm">Input data pembayaran jamaah</p>
        </div>

        <div class="bg-white rounded-2xl shadow border p-6">
            <form method="post" class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                <input type="text" name="nama" placeholder="Nama Jamaah" required class="border rounded-lg p-2">
                <input type="number" name="noKtp" placeholder="NIK" required class="border rounded-lg p-2">
                <input type="text" name="alamat" placeholder="Alamat" required class="border rounded-lg p-2">
                <input type="text" name="paketUmroh" placeholder="Paket Umroh" required class="border rounded-lg p-2">
                <input type="number" name="hargaPaket" placeholder="Harga Paket" required class="border rounded-lg p-2">
                <input type="number" name="hargaSetor" placeholder="Jumlah Setor" required
                    class="border rounded-lg p-2">
                <input type="date" name="tglBayar" required class="border rounded-lg p-2">

                <select name="status" class="border rounded-lg p-2">
                    <option value="Pending">Pending</option>
                    <option value="Tervalidasi">Tervalidasi</option>
                </select>

                <div class="md:col-span-2 flex gap-3">
                    <button name="simpan" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                        Simpan
                    </button>
                    <a href="dashboard.php?page=pembayaran" class="px-6 py-2 bg-gray-300 hover:bg-gray-400 rounded-lg">
                        Kembali
                    </a>
                </div>
            </form>
        </div>

    </div>

</body>

</html>