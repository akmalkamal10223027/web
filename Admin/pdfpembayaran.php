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

/* ================================
   PENGATURAN KONTEN RESMI
================================ */
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetMargins(20, 20, 20);

/* --- KOP SURAT --- */
// Jika ada logo, gunakan: $pdf->Image('logo.png', 20, 15, 25);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 7, 'SAKHA DIAMOND', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(0, 5, 'Alamat: Jl. Cilampunghilir Rt.012/Rw.122 Kec. Singaparna', 0, 1, 'C');
$pdf->Cell(0, 5, 'Telp: (021) 123456 | Email: info@travelumroh.com', 0, 1, 'C');

/* --- GARIS DOUBLE --- */
$pdf->SetLineWidth(1);
$pdf->Line(20, 38, 190, 38);
$pdf->SetLineWidth(0.2);
$pdf->Line(20, 39, 190, 39);
$pdf->Ln(15);

/* --- JUDUL DOKUMEN --- */
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'BUKTI PEMBAYARAN RESMI', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 5, 'Nomor: INV/' . date('Ymd') . '/' . $data['id'], 0, 1, 'C');
$pdf->Ln(10);

/* --- INFORMASI JAMAAH (TABEL) --- */
$pdf->SetFillColor(240, 240, 240); // Warna background abu muda
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 8, ' DETAIL TRANSAKSI', 1, 1, 'L', true);
$pdf->SetFont('Arial', '', 10);

function create_row($pdf, $label, $value) {
    $pdf->Cell(45, 8, ' ' . $label, 1, 0, 'L');
    $pdf->Cell(0, 8, ' ' . $value, 1, 1, 'L');
}

create_row($pdf, "ID Transaksi", $data['id']);
create_row($pdf, "Nama Jamaah", strtoupper($data['nama']));
create_row($pdf, "Nomor NIK", $data['noKtp']);
create_row($pdf, "Alamat", $data['alamat']);
create_row($pdf, "Paket Umroh", $data['paketUmroh']);
create_row($pdf, "Tanggal Bayar", date('d F Y', strtotime($data['tglBayar'])));

/* --- RINCIAN BIAYA --- */
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(125, 10, 'Deskripsi Pembayaran', 1, 0, 'C', true);
$pdf->Cell(45, 10, 'Jumlah (IDR)', 1, 1, 'C', true);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(125, 12, ' Pembayaran Paket Umroh: ' . $data['paketUmroh'], 1, 0, 'L');
$pdf->Cell(45, 12, ' Rp ' . number_format($data['hargaSetor'], 0, ',', '.'), 1, 1, 'R');

/* --- TOTAL & STATUS --- */
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(125, 10, ' TOTAL DIBAYARKAN', 1, 0, 'R');
$pdf->SetFillColor(255, 255, 150); // Highlight warna kuning untuk total
$pdf->Cell(45, 10, ' Rp ' . number_format($data['hargaSetor'], 0, ',', '.'), 1, 1, 'R', true);

$pdf->Ln(5);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(0, 5, 'Status Pembayaran: ' . strtoupper($data['status']), 0, 1, 'L');

/* --- TANDA TANGAN --- */
$pdf->Ln(15);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(120); // Spasi ke kanan
$pdf->Cell(0, 5, 'Dicetak pada: ' . date('d/m/Y H:i'), 0, 1, 'C');
$pdf->Ln(5);
$pdf->Cell(120);
$pdf->Cell(0, 5, 'Petugas Administrasi,', 0, 1, 'C');
$pdf->Ln(20);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(120);
$pdf->Cell(0, 5, '( Admin Umroh )', 0, 1, 'C');

/* --- FOOTER OTOMATIS --- */
$pdf->SetY(-30);
$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(150, 150, 150);
$pdf->Cell(0, 5, 'Dokumen ini sah dan dihasilkan secara otomatis oleh sistem.', 0, 1, 'C');

/* OUTPUT */
$pdf->Output("I", "Kuitansi_Umroh_" . $data['nama'] . ".pdf");