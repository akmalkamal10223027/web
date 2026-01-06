<?php
require_once "../config/koneksi.php";
require_once "../fpdf/fpdf.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID tidak ditemukan");
}

$query = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}

/* ======================
   BUAT PDF
====================== */
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

/* JUDUL */
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'BUKTI PEMBAYARAN UMROH', 0, 1, 'C');
$pdf->Ln(5);

/* GARIS */
$pdf->SetDrawColor(200, 200, 200);
$pdf->Line(10, 30, 200, 30);
$pdf->Ln(10);

/* ISI */
$pdf->SetFont('Arial', '', 11);

function row($pdf, $label, $value)
{
    $pdf->Cell(50, 8, $label, 0, 0);
    $pdf->Cell(5, 8, ':', 0, 0);
    $pdf->MultiCell(0, 8, $value, 0);
}

row($pdf, "ID Transaksi", $data['id']);
row($pdf, "Nama Jamaah", $data['nama']);
row($pdf, "NIK", $data['noKtp']);
row($pdf, "Alamat", $data['alamat']);
row($pdf, "Paket Umroh", $data['paketUmroh']);
row($pdf, "Harga Paket", "Rp " . number_format($data['hargaPaket'], 0, ',', '.'));
row($pdf, "Jumlah Setor", "Rp " . number_format($data['hargaSetor'], 0, ',', '.'));
row($pdf, "Tanggal Bayar", date('d/m/Y', strtotime($data['tglBayar'])));
row($pdf, "Status", $data['status']);

$pdf->Ln(10);

/* TANDA TANGAN */
$pdf->Cell(0, 8, 'Mengetahui,', 0, 1, 'R');
$pdf->Ln(15);
$pdf->Cell(0, 8, 'Admin Umroh', 0, 1, 'R');

/* OUTPUT */
$pdf->Output("I", "Pembayaran_" . $data['nama'] . ".pdf");
