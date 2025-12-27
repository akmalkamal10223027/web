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
                <h1 class="text-xl font-bold text-blue-600">sakha diamond</h1>
                <p class="text-sm text-slate-500">Admin Panel</p>
            </div>

            <nav class="p-4 space-y-2">
                <a href="dashboard.php?page=home" class="block px-4 py-2 rounded hover:bg-slate-100">Halaman Utama</a>
                <a href="dashboard.php?page=tentang" class="block px-4 py-2 rounded hover:bg-slate-100">Tentang Kami</a>
                <a href="dashboard.php?page=paket" class="block px-4 py-2 rounded hover:bg-slate-100">Paket</a>
                <a href="dashboard.php?page=galeri" class="block px-4 py-2 rounded hover:bg-slate-100">Galeri</a>
                <a href="dashboard.php?page=jamaah" class="block px-4 py-2 rounded hover:bg-slate-100">Data Jamaah</a>
                <a href="dashboard.php?page=pembayaran" class="block px-4 py-2 rounded hover:bg-slate-100">Data
                    Pembayaran</a>
            </nav>
        </aside>

        <!-- MAIN -->
        <div class="flex-1">

            <!-- TOPBAR -->
            <?php include "topbar.php"; ?>

            <!-- CONTENT -->
            <main class="p-8">
                <?php
                switch ($page) {

                    case 'paket':
                        include "paket.php";
                        break;

                    case 'tambah_paket':
                        include "tambah_paket.php";
                        break;

                    case 'edit_paket':
                        include "edit_paket.php";
                        break;

                    case 'galeri':
                        include "galeri.php";
                        break;

                    case 'tambah_galeri':
                        include "tambah_galeri.php";
                        break;

                    case 'edit_galeri':
                        include "edit_galeri.php";
                        break;

                    case 'jamaah':
                        include "jamaah.php";
                        break;

                    case 'pembayaran':
                        include "pembayaran.php";
                        break;

                    case 'tambah_pembayaran':
                        include "tambah_pembayaran.php";
                        break;

                    case 'edit_pembayaran':
                        include "edit_pembayaran.php";
                        break;

                    case 'detail_pembayaran':
                        include "detail_pembayaran.php";
                        break;

                    case 'tentang':
                        include "tentang.php";
                        break;

                    default:
                        include "home.php";
                }

                ?>
            </main>

        </div>
    </div>

</body>

</html>