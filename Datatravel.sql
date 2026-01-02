-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2026 pada 16.46
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE IF NOT EXISTS `jamaah` (
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
  `passport` varchar(100) NOT NULL,
  PRIMARY KEY (`kodeJamaah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `hotel_makkah` varchar(150) NOT NULL,
  `hotel_madinah` varchar(150) NOT NULL,
  `maskapai` varchar(100) NOT NULL,
  `sisa_seat` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('baru','dibaca') DEFAULT 'baru',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`, `created_at`, `status`) VALUES
(1, 'akmal', 'kamal@gmail.com', 'travell bagus', '2026-01-01 09:27:58', 'baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semua_paket`
--

CREATE TABLE IF NOT EXISTS `semua_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `hotel_makkah` varchar(150) NOT NULL,
  `hotel_madinah` varchar(150) NOT NULL,
  `maskapai` varchar(100) NOT NULL,
  `sisa_seat` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kami`
--

CREATE TABLE IF NOT EXISTS `tentang_kami` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profil` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `profil`, `visi`, `misi`, `gambar`, `updated_at`) VALUES
(1, 'visi', 'visi', 'visi', '1767259471adidas.jpg', '2026-01-01 09:24:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `noKtp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `paketUmroh` varchar(100) NOT NULL,
  `hargaPaket` int(11) NOT NULL,
  `hargaSetor` int(11) NOT NULL,
  `tglBayar` date NOT NULL,
  `status` enum('Pending','Tervalidasi') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
