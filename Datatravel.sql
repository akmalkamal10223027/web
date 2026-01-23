-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2026 pada 05.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hajidanumroh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`) VALUES
(2, 'umroh', 'umroh 2026', 'WhatsApp Image 2026-01-15 at 22.37.53.jpeg', '2026-01-15 15:39:49'),
(3, 'umrah', 'umrah 2025', 'WhatsApp Image 2026-01-15 at 22.41.54.jpeg', '2026-01-15 15:42:58'),
(4, 'umrah', 'umrah 2024', 'WhatsApp Image 2026-01-15 at 22.41.54 (1).jpeg', '2026-01-15 15:47:21'),
(5, 'umrah', 'umrah 2023', 'WhatsApp Image 2026-01-15 at 22.41.54 (2).jpeg', '2026-01-15 15:47:53'),
(11, 'haji', 'Depan Kabah', 'WhatsApp Image 2026-01-16 at 01.18.48.jpeg', '2026-01-15 18:25:12'),
(12, 'haji', 'masjidil haram 2026', 'WhatsApp Image 2026-01-16 at 01.18.48 (1).jpeg', '2026-01-15 18:25:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `kodeJamaah` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `noKtp` varchar(20) NOT NULL,
  `noPass` varchar(20) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `usia` int(10) NOT NULL,
  `namaAyah` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `paketUmroh` varchar(10) NOT NULL,
  `hargaPaket` varchar(20) NOT NULL,
  `jenisJamaah` varchar(10) NOT NULL,
  `tglKeberangkatan` date NOT NULL,
  `perlengkapan` varchar(20) NOT NULL,
  `vaksin` varchar(100) NOT NULL,
  `hargaSetor` int(50) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `passport` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`kodeJamaah`, `nama`, `noKtp`, `noPass`, `tempatLahir`, `tglLahir`, `usia`, `namaAyah`, `jk`, `alamat`, `paketUmroh`, `hargaPaket`, `jenisJamaah`, `tglKeberangkatan`, `perlengkapan`, `vaksin`, `hargaSetor`, `tlp`, `ktp`, `kk`, `passport`) VALUES
('JM-6965080e17682', 'M.zaki', '2313123', '234234', 'bandung', '2026-01-14', 12, 'Asep', 'Laki-laki', 'sdadsad', 'umroh dan ', '234121', 'Reguler', '2026-01-14', 'ada', '1', 121222222, '08767665', '1768228878_ktp_Template 1 (24).jpg', '1768228878_kk_Jurnal Guru Administrasi Sekolah Lembar Kerja  Hijau Gaya  Minimalis (1).jpg', '1768228878_passport_Jurnal Guru Administrasi Sekolah Lembar Kerja  Hijau Gaya  Minimalis (1).jpg'),
('JM20260112123314', 'jajang', '42342424324', '12123', 'Jakartaaa', '2026-01-22', 23, 'samsul', 'Laki-laki', 'kp.cicomre', 'Umroh Itik', '32000000', 'Reguler', '2026-01-12', 'Belum', 'Belum', 0, '08767665', '1768217594_ktp.jpg', '1768217594_kk.jpg', '1768217594_passport.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `hotel_makkah` varchar(150) NOT NULL,
  `hotel_madinah` varchar(150) NOT NULL,
  `maskapai` varchar(100) NOT NULL,
  `sisa_seat` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `judul`, `durasi`, `harga`, `hotel_makkah`, `hotel_madinah`, `maskapai`, `sisa_seat`, `gambar`, `status`) VALUES
(2, 'Umroh Itikaf Ramadhan', '10', 32000000, 'Pullman Zamzam', ' Nozol Royal Inn', 'Garuda Indonesia', 10, 'poster 2.jpg', 'aktif'),
(3, 'Umroh Awal Tahun', '9 hari', 30000000, 'Rimberio Hotel', 'Borcelle Hotel', 'Rimberio Airways', 15, 'poster 3.jpg', 'aktif'),
(4, 'Umroh Spesial', '10', 33000000, 'hotel Al-Hidayah Tower', 'Taiba Suites Madina', 'Garuda Indonesia', 20, 'poster 4.jpg', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('baru','dibaca') DEFAULT 'baru'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`, `created_at`, `status`) VALUES
(1, 'akmal', 'kamal@gmail.com', 'travell bagus', '2026-01-01 09:27:58', 'baru'),
(2, 'kama', 'oppdindinwahyudin@gmail.com', 'hallo', '2026-01-06 18:37:00', 'baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_haji`
--

CREATE TABLE `program_haji` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `hotel_makkah` varchar(150) NOT NULL,
  `hotel_madinah` varchar(150) NOT NULL,
  `maskapai` varchar(100) NOT NULL,
  `sisa_seat` int(11) NOT NULL,
  `harga` int(15) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `program_haji`
--

INSERT INTO `program_haji` (`id`, `judul`, `durasi`, `hotel_makkah`, `hotel_madinah`, `maskapai`, `sisa_seat`, `harga`, `gambar`, `created_at`, `status`) VALUES
(2, 'Umroh Akhir Tahun', '12', 'Al-Hidayah Tower', 'Taiba Suites Madina', 'Saudia Airlines', 10, 25000000, 'poster 1.jpg', '2026-01-07 03:14:08', 'aktif'),
(3, 'Haji Spesial', '40', 'alarabi', 'almadinahi', 'airsport', 50, 120000000, 'poster 5.jpg', '2026-01-07 05:26:45', 'aktif'),
(4, 'Haji Tahunan', '30', 'azka al-maqam', 'Taiba Suites Madina', 'Garuda Indonesia', 30, 40000000, 'poster 6.jpg', '2026-01-15 03:31:56', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semua_paket`
--

CREATE TABLE `semua_paket` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `hotel_makkah` varchar(150) NOT NULL,
  `hotel_madinah` varchar(150) NOT NULL,
  `maskapai` varchar(100) NOT NULL,
  `sisa_seat` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `semua_paket`
--

INSERT INTO `semua_paket` (`id`, `judul`, `durasi`, `harga`, `hotel_makkah`, `hotel_madinah`, `maskapai`, `sisa_seat`, `gambar`) VALUES
(2, 'Umroh dan haji Ramadhan', '40', 80000000, 'Al-Hidayah Tower', 'Taiba Suites Madina', 'arab saudi', 40, 'poster 7.jpg'),
(3, 'Umroh Terjangkau', '15', 23500000, 'Al-Hidayah Tower', 'almadinahi', 'Garuda Indonesia', 10, 'poster 8.jpg'),
(4, 'umroh Akhir tahun', '20', 3000000, 'Al-Hidayah Tower', 'Taiba Suites Madina', 'Saudia Airlines', 15, 'poster 2.jpg'),
(5, 'Haji Furoda', '20', 350000000, 'Hotel Convention', 'Artal International', 'Batik Air', 100, 'HAJI FURODA.jpg'),
(7, 'Umroh Dubay Thaif', '20', 35000000, 'azka al-maqam', 'dayar Al Eman', 'Saudia Airlines', 20, 'Key Visual Ads Banner.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `profil`, `visi`, `misi`, `gambar`, `updated_at`) VALUES
(1, 'visi\r\nSakha Diamond Travel adalah sebuah perusahaan perjalanan haji dan umrah yang berdedikasi untuk menyediakan layanan terbaik bagi jamaah yang ingin melaksanakan ibadah haji dan umrah. Dengan pengalaman dan pengetahuan yang luas, kami berkomitmen untuk memberikan pelayanan yang ramah, profesional, dan sesuai dengan kebutuhan jamaah.', 'Menjadi penyelenggara perjalanan haji dan umrah yang amanah, profesional, dan terpercaya, dengan menyediakan layanan terbaik dan fasilitas yang memuaskan, sehingga jamaah dapat melaksanakan ibadah dengan khusyuk dan nyaman.\r\n', '- Menyediakan Layanan Terbaik: Memberikan pelayanan yang ramah, profesional, dan sesuai dengan kebutuhan jamaah.\r\n- Mengutamakan Keselamatan dan Kenyamanan: Menjamin keselamatan dan kenyamanan jamaah selama perjalanan haji dan umrah.\r\n- Menyediakan Fasilitas yang Memuaskan: Menyediakan fasilitas yang memuaskan, termasuk akomodasi, transportasi, dan makanan.\r\n- Mengedukasi Jamaah: Memberikan edukasi dan bimbingan kepada jamaah tentang tata cara pelaksanaan ibadah haji dan umrah yang benar.\r\n- Membangun Hubungan yang Baik: Membangun hubungan yang baik dengan jamaah, mitra, dan masyarakat.', '1768501789download (3).jpg', '2026-01-15 18:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni_sosmed`
--

CREATE TABLE `testimoni_sosmed` (
  `id` int(11) NOT NULL,
  `platform` enum('instagram','tiktok') NOT NULL,
  `embed_url` text NOT NULL,
  `status` enum('aktif','nonaktif') DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimoni_sosmed`
--

INSERT INTO `testimoni_sosmed` (`id`, `platform`, `embed_url`, `status`, `created_at`) VALUES
(1, 'instagram', 'https://www.instagram.com/reel/DO5u3XMk6kQ/?igsh=cWVuMGh0cWZyNDlu', 'aktif', '2026-01-15 07:50:28'),
(2, 'instagram', 'https://www.instagram.com/p/DMl7HKDoDbZ/?igsh=MTNhNzNsaXJraTducQ==', 'aktif', '2026-01-15 07:54:23'),
(7, 'instagram', 'https://www.instagram.com/reel/DKjjZLdzZGG/?igsh=MW9lZmpqaDdpOWZjZw==', 'aktif', '2026-01-15 18:28:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `noKtp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `paketUmroh` varchar(100) NOT NULL,
  `hargaPaket` int(11) NOT NULL,
  `hargaSetor` int(11) NOT NULL,
  `tglBayar` date NOT NULL,
  `status` enum('Pending','Tervalidasi') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `noKtp`, `alamat`, `paketUmroh`, `hargaPaket`, `hargaSetor`, `tglBayar`, `status`, `created_at`) VALUES
(2, 'Akmal Kamaludin', '2342342343904235', 'Kp. Rontog', 'Aja', 25000000, 15000000, '2026-01-01', 'Pending', '2026-01-15 18:37:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`kodeJamaah`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_haji`
--
ALTER TABLE `program_haji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semua_paket`
--
ALTER TABLE `semua_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni_sosmed`
--
ALTER TABLE `testimoni_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `program_haji`
--
ALTER TABLE `program_haji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `semua_paket`
--
ALTER TABLE `semua_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimoni_sosmed`
--
ALTER TABLE `testimoni_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
