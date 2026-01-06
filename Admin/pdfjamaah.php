<?php
require_once "../config/koneksi.php";
require_once "../fpdf/fpdf.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Kode Jamaah tidak ditemukan");
}

$query = mysqli_query($conn, "SELECT * FROM jamaah WHERE kodeJamaah='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data jamaah tidak ditemukan");
}

/* ======================
   BUAT PDF
====================== */
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetMargins(20, 20, 20);

/* ======================
   KOP SURAT
====================== */
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 7, 'SAKHA DIAMOND', 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 6, 'Izin Resmi Kemenag RI | Telp: 0812-xxxx-xxxx', 0, 1, 'C');
$pdf->Cell(0, 6, 'Alamat: Jl. Contoh Alamat No. 123, Indonesia', 0, 1, 'C');

$pdf->Ln(3);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(20, $pdf->GetY(), 190, $pdf->GetY());
$pdf->Ln(8);

/* ======================
   JUDUL SURAT
====================== */
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(0, 8, 'DATA JAMAAH UMROH', 0, 1, 'C');

$pdf->SetFont('Arial', '', 11);
$pdf->Cell(0, 6, 'Nomor: ' . $data['kodeJamaah'] . '/UMROH/' . date('Y'), 0, 1, 'C');

$pdf->Ln(10);

/* ======================
   ISI SURAT
====================== */
$pdf->SetFont('Arial', '', 11);
$pdf->MultiCell(
    0,
    7,
    "Dengan ini kami menerangkan bahwa jamaah berikut telah terdaftar secara resmi "
    . "sebagai peserta perjalanan ibadah umroh pada Sakha Diamond. "
    . "Adapun data jamaah adalah sebagai berikut:"
);
$pdf->Ln(5);

/* ======================
   FUNGSI BARIS DATA
====================== */
function row($pdf, $label, $value)
{
    $pdf->Cell(60, 8, $label, 0, 0);
    $pdf->Cell(5, 8, ':', 0, 0);
    $pdf->MultiCell(0, 8, $value, 0);
}

/* ======================
   DATA JAMAAH
====================== */
row($pdf, "Kode Jamaah", $data['kodeJamaah']);
row($pdf, "Nama Lengkap", $data['nama']);
row($pdf, "NIK", $data['noKtp']);
row($pdf, "No Paspor", $data['noPass']);
row(
    $pdf,
    "Tempat, Tanggal Lahir",
    $data['tempatLahir'] . ", " . date('d F Y', strtotime($data['tglLahir']))
);
row($pdf, "Usia", $data['usia'] . " Tahun");
row($pdf, "Nama Ayah", $data['namaAyah']);
row($pdf, "Jenis Kelamin", $data['jk']);
row($pdf, "Alamat", $data['alamat']);
row($pdf, "No Telepon", $data['tlp']);
row($pdf, "Jenis Jamaah", $data['jenisJamaah']);
row($pdf, "Paket Umroh", $data['paketUmroh']);
row($pdf, "Harga Paket", "Rp " . number_format($data['hargaPaket'], 0, ',', '.'));
row($pdf, "Total Setoran", "Rp " . number_format($data['hargaSetor'], 0, ',', '.'));
row($pdf, "Tanggal Keberangkatan", date('d F Y', strtotime($data['tglKeberangkatan'])));
row($pdf, "Perlengkapan", $data['perlengkapan']);
row($pdf, "Vaksin", $data['vaksin']);

$pdf->Ln(10);

/* ======================
   PENUTUP
====================== */
$pdf->MultiCell(
    0,
    7,
    "Demikian surat keterangan data jamaah ini dibuat dengan sebenarnya "
    . "untuk digunakan sebagaimana mestinya."
);

$pdf->Ln(15);

/* ======================
   TANDA TANGAN
====================== */
$pdf->Cell(0, 6, 'Salebu, ' . date('d F Y'), 0, 1, 'R');
$pdf->Ln(15);

$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(0, 6, 'Pimpinan Travel Umroh', 0, 1, 'R');

$pdf->Ln(18);
$pdf->Cell(0, 6, '( ___________________ )', 0, 1, 'R');

/* ======================
   OUTPUT
====================== */
$pdf->Output("I", "Data_Jamaah_" . $data['nama'] . ".pdf");
