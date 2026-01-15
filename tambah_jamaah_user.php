<?php
require_once __DIR__ . "/config/koneksi.php";

if (isset($_POST['simpan'])) {

    // KODE JAMAAH
    $kodeJamaah = "JM" . date("YmdHis");

    // DATA
    $nama = $_POST['nama'];
    $noKtp = $_POST['noKtp'];
    $noPass = $_POST['noPass'];
    $tempatLahir = $_POST['tempatLahir'];
    $tglLahir = $_POST['tglLahir'];
    $usia = $_POST['usia'];
    $namaAyah = $_POST['namaAyah'] ?? '-';
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];

    list($paketUmroh, $hargaPaket) = explode('|', $_POST['paketUmroh']);
    $tglKeberangkatan = $_POST['tglKeberangkatan'];

    $jenisJamaah = "Reguler";
    $perlengkapan = "Belum";
    $vaksin = "Belum";
    $hargaSetor = 0;

    // UPLOAD
    $folder = __DIR__ . "/uploads/jamaah/";
    if (!is_dir($folder))
        mkdir($folder, 0777, true);

    function upload($name, $folder)
    {
        $ext = pathinfo($_FILES[$name]['name'], PATHINFO_EXTENSION);
        $file = time() . "_" . $name . "." . $ext;
        move_uploaded_file($_FILES[$name]['tmp_name'], $folder . $file);
        return $file;
    }

    $ktp = upload('ktp', $folder);
    $kk = upload('kk', $folder);
    $passport = upload('passport', $folder);

    // SIMPAN KE DATABASE (SUDAH SESUAI STRUKTUR)
    $sql = "INSERT INTO jamaah (
            kodeJamaah, nama, noKtp, noPass, tempatlahir, tgllahir, usia, namaAyah, jk, alamat,
            paketUmroh, hargaPaket, jenisJamaah, tglKeberangkatan,
            perlengkapan, vaksin, hargaSetor, tlp,
            ktp, kk, passport
        ) VALUES (
            '$kodeJamaah', '$nama', '$noKtp', '$noPass', '$tempatLahir', '$tglLahir', '$usia', '$namaAyah', '$jk', '$alamat',
            '$paketUmroh', '$hargaPaket', '$jenisJamaah', '$tglKeberangkatan',
            '$perlengkapan', '$vaksin', '$hargaSetor', '$tlp',
            '$ktp', '$kk', '$passport'
        )";

    if (!mysqli_query($conn, $sql)) {
        die("Gagal simpan: " . mysqli_error($conn));
    }

    header("Location: terimakasih.php?kode=$kodeJamaah");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="./public/logo/logo2.png" />
    <link />
    <title>Tentang Kami - sakhadiamond</title>
</head>

<!-- Navbar -->
<nav class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-3 px-6">

        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-3">
            <img src="./public/logo/logo2.png" alt="Sakha Diamond" width="48" height="48" class="h-12 w-auto" />
        </a>

        <!-- Menu -->
        <ul class="hidden md:flex gap-6 font-medium">
            <li><a href="index.php" class="hover:text-green-700 transition flex items-center gap-1"><i
                        class="fas fa-home text-sm"></i> Home</a></li>
            <li><a href="Tentangkami.php" class="hover:text-green-700 transition flex items-center gap-1"><i
                        class="fas fa-users text-sm"></i> Tentang Kami</a></li>
            <li><a href="semua paket.php" class="hover:text-green-700 transition flex items-center gap-1"><i
                        class="fas fa-box text-sm"></i> semua paket</a></li>
            <li><a href="galeri.php" class="hover:text-green-700 transition flex items-center gap-1"><i
                        class="fas fa-images text-sm"></i> Galeri</a></li>
            <li><a href="kontak.php" class="hover:text-green-700 transition flex items-center gap-1"><i
                        class="fas fa-phone text-sm"></i> Kontak</a></li>
        </ul>

        <!-- Icons -->
        <div class="flex gap-3">
            <a href="https://www.instagram.com/alghifariii._29?igsh=b2pmamtteXRmYnE4/" target="_blank"
                class="h-8 w-8 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="https://www.tiktok.com/@cuawww34?_r=1&_t=ZS-92tbaxJFXa1" target="_blank"
                class="h-8 w-8 bg-black text-white rounded-lg flex items-center justify-center hover:scale-110 transition">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>

    </div>
</nav>

<body class="bg-gradient-to-br from-green-50 to-white">

    <div class="max-w-5xl mx-auto py-12 px-4">


        <!-- HEADER -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-green-700 mb-2">
                Pendaftaran Jamaah Umroh
            </h1>
            <p class="text-slate-600">
                Silakan isi data dengan benar sesuai dokumen resmi
            </p>
        </div>

        <!-- FORM -->
        <form method="POST" enctype="multipart/form-data"
            class="bg-white rounded-3xl shadow-xl p-8 grid md:grid-cols-2 gap-6">

            <!-- DATA PRIBADI -->
            <div>
                <label class="label">Nama Lengkap</label>
                <input type="text" name="nama" required class="input">
            </div>

            <div>
                <label class="label">No Telepon / WhatsApp</label>
                <input type="text" name="tlp" required class="input">
            </div>

            <div>
                <label class="label">No KTP</label>
                <input type="text" name="noKtp" required class="input">
            </div>

            <div>
                <label class="label">No Passport</label>
                <input type="text" name="noPass" required class="input">
            </div>

            <div>
                <label class="label">Tempat Lahir</label>
                <input type="text" name="tempatLahir" class="input">
            </div>

            <div>
                <label class="label">Tanggal Lahir</label>
                <input type="date" name="tglLahir" required class="input">
            </div>

            <div>
                <label class="label">Usia</label>
                <input type="number" name="usia" class="input">
            </div>

            <div>
                <label class="label">Jenis Kelamin</label>
                <select name="jk" class="input">
                    <option value="">- Pilih -</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label class="label">Alamat Lengkap</label>
                <textarea name="alamat" rows="3" class="input"></textarea>
            </div>
            <div>
                <label class="label">Nama Ayah</label>
                <input type="text" name="namaAyah" class="input">
            </div>
            <!-- PAKET -->
            <div>
                <label class="label">Pilih Paket Umroh</label>
                <select name="paketUmroh" required class="input">
                    <option value="">- Pilih Paket -</option>
                    <?php
                    $paket = mysqli_query($conn, "SELECT * FROM paket WHERE status='aktif'");
                    while ($p = mysqli_fetch_assoc($paket)) {
                        echo "<option value='{$p['judul']}|{$p['harga']}'>
                            {$p['judul']} - Rp " . number_format($p['harga']) . "
                        </option>";
                    }
                    ?>
                </select>
            </div>

            <div>
                <label class="label">Tanggal Keberangkatan</label>
                <input type="date" name="tglKeberangkatan" class="input">
            </div>

            <!-- UPLOAD -->
            <div>
                <label class="label">Upload KTP</label>
                <input type="file" name="ktp" required class="file">
            </div>

            <div>
                <label class="label">Upload KK</label>
                <input type="file" name="kk" required class="file">
            </div>

            <div>
                <label class="label">Upload Passport</label>
                <input type="file" name="passport" required class="file">
            </div>

            <!-- SUBMIT -->
            <div class="md:col-span-2 flex justify-center mt-6">
                <button type="submit" name="simpan"
                    class="px-10 py-3 bg-green-600 hover:bg-green-700 text-white rounded-full font-semibold shadow-lg transition">
                    Daftar Sekarang
                </button>
            </div>

        </form>

    </div>

    <style>
        .label {
            font-size: 0.875rem;
            font-weight: 500;
            color: #334155;
        }

        .input {
            width: 100%;
            margin-top: 4px;
            padding: 10px 14px;
            border-radius: 14px;
            border: 1px solid #e5e7eb;
            outline: none;
        }

        .input:focus {
            border-color: #16a34a;
        }

        .file {
            width: 100%;
            padding: 10px;
            border-radius: 14px;
            border: 1px dashed #cbd5e1;
        }
    </style>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">

                <div class="col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="./public/logo/logo2.png" alt="Sakha Diamond Logo" class="h-15 w-12" />
                        <div>
                            <h3 class="font-bold text-xl text-green-400">Sakha Diamond</h3>
                            <p class="text-sm text-gray-400">Travel Haji & Umroh Terpercaya</p>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-4 leading-relaxed">
                        Melayani perjalanan ibadah Haji & Umroh dengan kenyamanan dan keikhlasan sejak 2023.
                    </p>

                    <div class="flex gap-3">
                        <a href="" target="_blank"
                            class="w-10 h-10 bg-black hover:bg-gray-800 rounded-lg flex items-center justify-center transition hover:scale-110">
                            <i class="fab fa-tiktok text-white"></i>
                        </a>
                        <a href="" target="_blank"
                            class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-lg flex items-center justify-center transition hover:scale-110">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="https://wa.me/6282130938060" target="_blank"
                            class="w-10 h-10 bg-green-600 hover:bg-green-700 rounded-lg flex items-center justify-center transition hover:scale-110">
                            <i class="fab fa-whatsapp text-white"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-4 text-green-400">Paket Populer</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                                    class="fas fa-mosque text-xs"></i> Umrah Reguler</a></li>
                        <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                                    class="fas fa-globe-europe text-xs"></i> Umrah Plus Turki</a></li>
                        <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                                    class="fas fa-city text-xs"></i> Umrah Private</a></li>
                        <li><a href="#paket" class="hover:text-green-400 transition flex items-center gap-2"><i
                                    class="fas fa-kaaba text-xs"></i> Haji Khusus</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-4 text-green-400">Kontak</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center gap-2"><i class="fas fa-phone text-green-400"></i><span>+62 821
                                1908 1443</span></li>
                        <li class="flex items-center gap-2"><i class="fab fa-whatsapp text-green-400"></i><span>+62 817
                                7926 2637</span></li>
                        <li class="flex items-center gap-2"><i
                                class="fas fa-envelope text-green-400"></i><span>sakhadiamond.com</span></li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-green-400"></i>
                            <span>Cipasung</span>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2025 Sakha Diamond. All rights reserved.
                </p>
                <p class="text-sm text-gray-500 mt-2">
                    <i class="fas fa-certificate text-green-400 mr-1"></i>
                    Terdaftar resmi dan berizin lengkap
                </p>
            </div>
        </div>
    </footer>

</body>

</html>