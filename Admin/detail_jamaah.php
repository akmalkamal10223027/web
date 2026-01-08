<?php
require_once "../config/koneksi.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php?page=jamaah");
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM jamaah WHERE kodeJamaah='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: dashboard.php?page=jamaah");
    exit;
}
?>

<div class="max-w-6xl bg-white rounded-3xl shadow-lg border border-slate-200 p-10">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-10">
        <div>
            <h2 class="text-3xl font-bold text-slate-800">Detail Data Jamaah</h2>
            <p class="text-sm text-slate-500 mt-1">
                Informasi lengkap jamaah umroh
            </p>
        </div>

        <span class="px-5 py-2 rounded-full text-sm font-semibold bg-blue-100 text-blue-700">
            <?= htmlspecialchars($data['jenisJamaah']); ?>
        </span>
    </div>

    <!-- CONTENT -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

        <?php
        function row($label, $value)
        {
            echo "
            <div class='border-b pb-4'>
                <p class='text-xs uppercase tracking-wide text-slate-400 mb-1'>$label</p>
                <p class='text-base font-semibold text-slate-800'>$value</p>
            </div>
            ";
        }

        row("Kode Jamaah", htmlspecialchars($data['kodeJamaah']));
        row("Nama Lengkap", htmlspecialchars($data['nama']));
        row("Jenis Kelamin", htmlspecialchars($data['jk']));
        row("Tempat Lahir", htmlspecialchars($data['tempatLahir']));
        row("Tanggal Lahir", date('d M Y', strtotime($data['tglLahir'])));
        row("Usia", $data['usia'] . " Tahun");
        row("Nama Ayah", htmlspecialchars($data['namaAyah']));
        row("Alamat", htmlspecialchars($data['alamat']));
        row("Nomor Telepon", htmlspecialchars($data['tlp']));
        row("No KTP", htmlspecialchars($data['noKtp']));
        row("No Paspor", htmlspecialchars($data['noPass']));
        row("Paket Umroh", htmlspecialchars($data['paketUmroh']));
        row("Harga Paket", "Rp " . number_format($data['hargaPaket'], 0, ',', '.'));
        row("Tanggal Keberangkatan", date('d M Y', strtotime($data['tglKeberangkatan'])));
        row("Perlengkapan", htmlspecialchars($data['perlengkapan']));
        row("Vaksin", htmlspecialchars($data['vaksin']));
        row("Total Setoran", "Rp " . number_format($data['hargaSetor'], 0, ',', '.'));
        ?>

    </div>

    <!-- FOOTER -->
    <div class="mt-10 flex justify-between items-center">

        <a href="dashboard.php?page=jamaah" class="px-6 py-3 bg-slate-200 hover:bg-slate-300 text-slate-700
                   rounded-xl text-sm font-medium transition">
            ← Kembali
        </a>

        <p class="text-xs text-slate-400">
            Data jamaah tersimpan di sistem
        </p>
    </div>

</div>