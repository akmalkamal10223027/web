<?php
require_once "../config/koneksi.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php?page=pembayaran");
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: dashboard.php?page=pembayaran");
    exit;
}
?>

<div class="max-w-6xl bg-white rounded-3xl shadow-lg border border-slate-200 p-10">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-10">
        <div>
            <h2 class="text-3xl font-bold text-slate-800">Detail Pembayaran Jamaah</h2>
            <p class="text-sm text-slate-500 mt-1">
                Informasi lengkap transaksi pembayaran
            </p>
        </div>

        <span class="px-5 py-2 rounded-full text-sm font-semibold
            <?= $data['status'] == 'Tervalidasi'
                ? 'bg-emerald-100 text-emerald-700'
                : 'bg-yellow-100 text-yellow-700'; ?>">
            <?= $data['status']; ?>
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

        row("Nama Jamaah", htmlspecialchars($data['nama']));
        row("NIK", $data['noKtp']);
        row("Alamat", htmlspecialchars($data['alamat']));
        row("Paket Umroh", htmlspecialchars($data['paketUmroh']));
        row("Harga Paket", "Rp " . number_format($data['hargaPaket'], 0, ',', '.'));
        row("Jumlah Setor", "Rp " . number_format($data['hargaSetor'], 0, ',', '.'));
        row("Tanggal Bayar", date('d/m/Y', strtotime($data['tglBayar'])));
        row("ID Transaksi", "#" . $data['id']);
        ?>

    </div>

    <!-- FOOTER -->
    <div class="mt-10 flex justify-between items-center">

        <a href="dashboard.php?page=pembayaran" class="px-6 py-3 bg-slate-200 hover:bg-slate-300 text-slate-700
                   rounded-xl text-sm font-medium transition">
            ← Kembali
        </a>

        <p class="text-xs text-slate-400">
            Data bersifat read-only
        </p>
    </div>

</div>