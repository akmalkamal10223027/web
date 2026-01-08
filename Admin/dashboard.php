<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

<div class="flex min-h-screen">

    <aside class="w-64 bg-white border-r">
        <div class="p-6 border-b">
            <h1 class="text-xl font-bold text-blue-600">SAKHA DIAMOND</h1>
            <p class="text-sm text-slate-500">Admin Panel</p>
        </div>

        <nav class="p-4 space-y-2">
            <a href="dashboard.php?page=home" class="block px-4 py-2 rounded hover:bg-slate-100">Halaman Utama</a>
            <a href="dashboard.php?page=tentang" class="block px-4 py-2 rounded hover:bg-slate-100">Tentang Kami</a>
            <a href="dashboard.php?page=paket" class="block px-4 py-2 rounded hover:bg-slate-100">Paket</a>
            <a href="dashboard.php?page=program_haji" class="block px-4 py-2 rounded hover:bg-slate-100">Paket Haji</a>
            <a href="dashboard.php?page=semua_paket" class="block px-4 py-2 rounded hover:bg-slate-100">Semua Paket</a>
            <a href="dashboard.php?page=galeri" class="block px-4 py-2 rounded hover:bg-slate-100">Galeri</a>
            <a href="dashboard.php?page=jamaah" class="block px-4 py-2 rounded hover:bg-slate-100">Data Jamaah</a>
            <a href="dashboard.php?page=pembayaran" class="block px-4 py-2 rounded hover:bg-slate-100">Data Pembayaran</a>
            <a href="dashboard.php?page=pesan" class="block px-4 py-2 rounded hover:bg-slate-100">Pesan Masuk</a>
        </nav>
    </aside>

    <!-- MAIN -->
    <div class="flex-1">

        <!-- TOPBAR -->
        <?php require_once __DIR__ . "/topbar.php"; ?>

        <!-- CONTENT -->
        <main class="p-8">
            <?php
            switch ($page) {

                case 'paket':
                    require_once __DIR__ . "/paket.php";
                    break;

                case 'tambah_paket':
                    require_once __DIR__ . "/tambah_paket.php";
                    break;

                case 'edit_paket':
                    require_once __DIR__ . "/edit_paket.php";
                    break;

                case 'program_haji':
                    require_once __DIR__ . "/program_haji.php";
                    break;

                case 'tambah_program_haji':
                    require_once __DIR__ . "/tambah_program_haji.php";
                    break;

                case 'edit_program_haji':
                    require_once __DIR__ . "/edit_program_haji.php";
                    break;

                case 'semua_paket':
                    require_once __DIR__ . "/semua_paket.php";
                    break;

                case 'tambah_semua_paket':
                    require_once __DIR__ . "/tambah_semua_paket.php";
                    break;

                case 'edit_semua_paket':
                    require_once __DIR__ . "/edit_semua_paket.php";
                    break;

                case 'galeri':
                    require_once __DIR__ . "/galeri.php";
                    break;

                case 'tambah_galeri':
                    require_once __DIR__ . "/tambah_galeri.php";
                    break;

                case 'edit_galeri':
                    require_once __DIR__ . "/edit_galeri.php";
                    break;

                case 'jamaah':
                    require_once __DIR__ . "/jamaah.php";
                    break;

                case 'tambah_jamaah':
                    require_once __DIR__ . "/tambah_jamaah.php";
                    break;

                case 'edit_jamaah':
                    require_once __DIR__ . "/edit_jamaah.php";
                    break;

                case 'detail_jamaah':
                    require_once __DIR__ . "/detail_jamaah.php";
                    break;

                case 'pembayaran':
                    require_once __DIR__ . "/pembayaran.php";
                    break;

                case 'tambah_pembayaran':
                    require_once __DIR__ . "/tambah_pembayaran.php";
                    break;

                case 'edit_pembayaran':
                    require_once __DIR__ . "/edit_pembayaran.php";
                    break;

                case 'detail_pembayaran':
                    require_once __DIR__ . "/detail_pembayaran.php";
                    break;

                case 'pdfpembayaran':
                    require_once __DIR__ . "/pdfpembayaran.php";
                    break;

                case 'tentang':
                    require_once __DIR__ . "/tentang.php";
                    break;

                case 'pesan':
                    require_once __DIR__ . "/pesan.php";
                    break;

                default:
                    require_once __DIR__ . "/home.php";
            }
            ?>
        </main>

    </div>
</div>

</body>
</html>
