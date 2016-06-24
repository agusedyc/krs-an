-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24 Jun 2016 pada 20.17
-- Versi Server: 10.0.23-MariaDB-0+deb8u1
-- PHP Version: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sia_krs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
`id_dosen` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `kode_dosen` varchar(10) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `fk_user`, `kode_dosen`, `nama_dosen`, `created_at`, `updated_at`) VALUES
(1, 3, 'G038', 'B.VERY CHRISTIOKO,S.KOM, M.KOM', '2016-06-19 05:55:32', '2016-06-19 06:27:42'),
(2, 10, 'G079', 'ASTRID NOVITA PUTRI, M. KOM.', '2016-06-22 04:37:09', '2016-06-22 04:37:09'),
(3, 11, 'G071', 'Aria Hendrawan, ST, M.Kom', '2016-06-22 04:37:55', '2016-06-22 04:37:55'),
(4, 12, 'Z335', 'Agus Edy Laksono, S.S., M.Hum.', '2016-06-22 04:38:53', '2016-06-22 04:38:53'),
(5, 13, 'G044', 'Mohammad Sani Suprayogi, S.Kom, M.Cs', '2016-06-22 04:39:49', '2016-06-22 04:39:49'),
(6, 14, 'G005', 'Susanto, S.Kom, M.Kom', '2016-06-22 04:40:08', '2016-06-22 04:40:08'),
(7, 15, 'G008', 'Nur Wakhidah, S.Kom, M.Cs', '2016-06-22 04:40:44', '2016-06-22 04:40:44'),
(8, 16, 'G067', 'Febrian Wahyu Christanto, S.Kom., M.Cs.', '2016-06-22 04:41:31', '2016-06-22 04:41:31'),
(9, 17, 'G075', 'Siti Asmiatun, S.Kom, M.Kom', '2016-06-22 04:42:09', '2016-06-22 04:42:09'),
(10, 18, 'G004', 'Titis Handayani, S.Kom, M.Cs', '2016-06-22 04:42:58', '2016-06-22 04:42:58'),
(11, 19, 'G078', 'Dewi Nurdiyah, M.Kom', '2016-06-22 04:43:55', '2016-06-22 04:43:55'),
(12, 20, 'E009', 'Iswoyo, S.Pt, MP', '2016-06-22 04:44:36', '2016-06-22 04:44:36'),
(13, 21, 'G059', 'Whisnumurti Adhiwibowo, ST, M.Kom', '2016-06-22 04:45:16', '2016-06-22 04:45:16'),
(14, 22, 'G069', 'Rastri Prathivi, M.Kom', '2016-06-22 04:45:51', '2016-06-22 04:45:51'),
(15, 23, 'G040', 'Nurtriana Hidayati, S.Kom, M.Kom', '2016-06-22 04:46:40', '2016-06-22 04:46:40'),
(16, 24, 'C058', 'Drs.Ahmad Muhaimin, M.Pd', '2016-06-22 04:48:17', '2016-06-22 04:48:17'),
(17, 25, 'G001', 'Titin Winarti, S.Kom, MM', '2016-06-22 04:49:04', '2016-06-22 04:49:04'),
(18, 26, 'G041', 'APRIL FIRMAN DARU,S.Kom, M.Kom', '2016-06-22 04:49:44', '2016-06-22 04:49:44'),
(19, 27, 'G060', 'Basworo Ardi Pramono, ST, MT.', '2016-06-22 04:50:28', '2016-06-22 04:50:28'),
(20, 28, 'G081', 'Agusta Praba Ristadi Pinem, S.Kom., M.Kom.', '2016-06-22 04:51:38', '2016-06-22 04:51:38'),
(21, 29, 'Z126', 'Yulinda Kusumaningrum, S.Pd, M.Pd', '2016-06-22 04:52:26', '2016-06-22 04:52:26'),
(22, 30, 'G074', 'Fahrul Pradana, S.Kom, M.Kom', '2016-06-22 04:53:00', '2016-06-22 04:53:00'),
(23, 31, 'Z172', 'Saifur Rohman Cholil, M.Kom', '2016-06-22 04:53:51', '2016-06-22 04:53:51'),
(24, 32, 'Z354', 'Nadia Annisa Maori, M.Kom.', '2016-06-22 04:54:25', '2016-06-22 04:54:25'),
(25, 33, 'G039', 'HENNY INDRIYAWATI, S.KOM, M.KOM', '2016-06-22 04:55:07', '2016-06-22 04:55:07'),
(26, 34, 'G073', 'Soiful Hadi, S.T, M.Kom', '2016-06-22 04:55:41', '2016-06-22 04:55:41'),
(27, 35, 'G058', 'Tirta J Kumkamdhani S.Kom, MM', '2016-06-22 04:56:34', '2016-06-22 04:56:34'),
(28, 36, 'G020', 'Sri Handayani,ST,MT', '2016-06-22 04:57:15', '2016-06-22 04:57:15'),
(29, 37, 'G057', 'HETTY CATUR ELLYAWATI, S.S, M.HUM', '2016-06-22 04:57:54', '2016-06-22 04:57:54'),
(30, 38, 'G083', 'Khoirudin, S.Kom, M.Eng', '2016-06-22 04:59:28', '2016-06-22 04:59:28'),
(31, 39, 'G021', 'Atmoko Nugroho,ST,M.Eng', '2016-06-22 05:00:06', '2016-06-22 05:00:06'),
(32, 40, 'Z332', 'Bagus Satrio Waluyo, M.Cs', '2016-06-22 05:00:44', '2016-06-22 05:00:44'),
(33, 41, 'G047', 'Errika Dwi Setya Watie, S.Sos, M.I.Kom', '2016-06-22 05:01:25', '2016-06-22 05:01:25'),
(34, 42, 'Z085', 'Charis Maulana, M.Pd', '2016-06-22 05:02:57', '2016-06-22 05:02:57'),
(35, 43, 'Z349', 'Stefani Dewi .R M.Hum', '2016-06-22 05:04:50', '2016-06-22 05:04:50'),
(36, 44, 'Z101', 'Drs. Sujita, MM', '2016-06-22 05:05:30', '2016-06-22 05:05:30'),
(37, 45, 'G070', 'M. Zakki Abdillah, M.Kom', '2016-06-22 05:06:55', '2016-06-22 05:06:55'),
(38, 46, 'G003', 'Vensy Vydia, S.Kom, M.Kom', '2016-06-22 05:07:40', '2016-06-22 05:07:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mk`
--

CREATE TABLE IF NOT EXISTS `jadwal_mk` (
`id_jadwal` int(11) NOT NULL,
  `fk_dosen` int(11) NOT NULL DEFAULT '0',
  `fk_makul` int(11) NOT NULL DEFAULT '0',
  `kelas` varchar(5) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `kuota` int(2) NOT NULL,
  `peserta` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_mk`
--

INSERT INTO `jadwal_mk` (`id_jadwal`, `fk_dosen`, `fk_makul`, `kelas`, `ruangan`, `hari`, `waktu`, `ket`, `kuota`, `peserta`, `created_at`, `updated_at`) VALUES
(3, 1, 14, 'A-1', 'Q.3.2', 'Kamis', '09.00', 'Praktek Klp-1: Kamis/11.00/Lab.Q.2.3', 27, 1, '2016-06-21 15:39:53', '2016-06-21 15:51:20'),
(4, 1, 14, 'A-2', 'Q.3.2', 'Kamis', '09.00', 'Praktek Klp-2: Kamis/12.30/Lab.Q.2.3', 27, 0, '2016-06-21 15:41:17', '2016-06-21 15:41:17'),
(5, 2, 3, 'C-1', 'Q.3.2', 'Senin', '08.00', 'Praktek Klp-1: Jumat/14.30/Lab.M.2.3', 27, 2, '2016-06-22 05:13:12', '2016-06-23 01:33:31'),
(6, 2, 3, 'C-2', 'Q.3.2', 'Senin', '08.00', 'Praktek Klp-2: Selasa/08.00/Lab.M.2.1', 27, 0, '2016-06-22 05:15:11', '2016-06-22 05:15:11'),
(7, 2, 9, 'B-1', 'E.2.3', 'Senin', '11.00', 'Praktek Klp-1: Selasa/08.00/Lab.E.2.2', 29, 0, '2016-06-22 05:25:00', '2016-06-22 05:25:00'),
(8, 2, 9, 'B-2', 'E.2.3', 'Senin', '11.00', 'Praktek Klp-2: Senin/09.30/Lab.E.2.2', 29, 0, '2016-06-22 05:26:49', '2016-06-22 05:26:49'),
(9, 2, 1, 'C-1', 'E.2.3', 'Jumat', '09.00', 'Praktek Klp-1: Rabu/11.00/Lab.M.2.2', 27, 1, '2016-06-22 05:28:31', '2016-06-22 05:31:42'),
(10, 2, 1, 'C-2', 'E.2.3', 'Jumat', '09.00', 'Praktek Klp-2: Rabu/11.00/Lab.M.2.3', 27, 0, '2016-06-22 05:29:13', '2016-06-22 05:29:13'),
(11, 1, 1, 'A-1', 'Q3.2', 'Kamis', '09.00', 'Praktek  klp-1 :Senin/08.00/M.2.2', 27, 0, '2016-06-23 01:31:46', '2016-06-23 01:31:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
`id_krs` int(11) NOT NULL,
  `fk_jadwal` int(11) NOT NULL DEFAULT '0',
  `fk_mhs` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `fk_jadwal`, `fk_mhs`, `created_at`, `updated_at`) VALUES
(5, 3, 1, '2016-06-21 15:51:20', '2016-06-21 15:51:20'),
(6, 9, 1, '2016-06-22 05:31:42', '2016-06-22 05:31:42'),
(7, 5, 1, '2016-06-23 01:33:31', '2016-06-23 01:33:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`id_mhs` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `fk_user`, `nim`, `nama_mhs`, `created_at`, `updated_at`) VALUES
(1, 4, 'G.211.13.0047', 'Agus Edy Cahyono', '2016-06-19 09:37:13', '2016-06-19 15:16:44'),
(2, 6, 'G.211.13.0048', 'Ahmad Syukur', '2016-06-22 02:18:54', '2016-06-22 02:18:54'),
(3, 7, 'G.211.13.0043', 'Angga Herry Nur Firmansyah', '2016-06-22 02:19:48', '2016-06-22 02:19:48'),
(4, 8, 'G.211.13.0089', 'Agung Prabowo', '2016-06-22 02:22:42', '2016-06-22 02:22:42'),
(5, 9, 'G.211.13.0028', 'Ema Ayu Rini', '2016-06-22 04:10:22', '2016-06-22 04:10:22'),
(6, 47, 'G.211.13.0088', 'Fajar Buwana Eka Paksi', '2016-06-23 01:27:00', '2016-06-23 01:27:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makul`
--

CREATE TABLE IF NOT EXISTS `makul` (
`id_makul` int(11) NOT NULL,
  `kode_mk` varchar(50) NOT NULL DEFAULT '0',
  `nama_mk` varchar(100) NOT NULL DEFAULT '0',
  `semester` int(1) NOT NULL DEFAULT '0',
  `sks` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makul`
--

INSERT INTO `makul` (`id_makul`, `kode_mk`, `nama_mk`, `semester`, `sks`, `created_at`, `updated_at`) VALUES
(1, 'TIS13428P', 'FUZZY LOGIC', 4, 3, '2016-06-17 15:53:31', '2016-06-19 02:10:40'),
(2, 'TIS13426P', 'KECERDASAN BUATAN', 4, 4, '2016-06-17 15:54:55', '2016-06-17 15:54:55'),
(3, 'TIS13645P', 'PEMROGRAMAN FRAMEWORK JAVA', 6, 3, '2016-06-17 15:55:43', '2016-06-17 15:55:43'),
(4, 'TIS13424P', 'OPEN SOURCE SYSTEMS', 4, 3, '2016-06-18 15:39:48', '2016-06-18 15:39:48'),
(5, 'USM13406', 'BAHASA INDONESIA', 4, 2, '2016-06-18 15:41:47', '2016-06-18 15:41:47'),
(6, 'TIS13422P', 'PEMROGRAMAN WEB', 4, 3, '2016-06-18 15:42:38', '2016-06-18 15:42:38'),
(7, 'TIS13208P', 'DESAIN GRAFIS', 2, 2, '2016-06-18 15:43:15', '2016-06-18 15:43:15'),
(8, 'TIS13642P', 'PENGOLAHAN CITRA', 6, 3, '2016-06-18 15:43:51', '2016-06-18 15:43:51'),
(9, 'TIS13640P', 'SIMULASI DAN GAME', 6, 3, '2016-06-18 15:44:28', '2016-06-18 15:44:28'),
(10, 'TIS13423P', 'ANIMASI KOMPUTER', 4, 2, '2016-06-18 15:45:01', '2016-06-18 15:45:01'),
(11, 'TIS13211P', 'PENGANTAR WEB', 2, 3, '2016-06-18 15:45:29', '2016-06-18 15:45:29'),
(12, 'TIS13425', 'PENGUJIAN SISTEM', 4, 2, '2016-06-18 16:06:56', '2016-06-18 16:06:56'),
(14, 'TIS13639P', 'REKAYASA WEB', 6, 3, '2016-06-21 15:34:45', '2016-06-21 15:34:45'),
(15, 'TIS13641P', 'MANAJEMEN PROYEK PERANGKAT LUNAK', 6, 4, '2016-06-22 04:16:01', '2016-06-22 04:16:01'),
(16, 'TIS13421P', 'MANAJEMEN JARINGAN', 4, 2, '2016-06-22 04:17:13', '2016-06-22 04:17:13'),
(17, 'TIS13209P', 'ANALISIS DAN PERANCANGAN BERORIENTASI OBJEK', 2, 2, '2016-06-22 04:17:48', '2016-06-22 04:17:48'),
(18, 'USM13102', 'STATISTIKA', 1, 2, '2016-06-22 04:18:08', '2016-06-22 04:18:08'),
(19, 'TIS13210P', 'ALGORITMA DAN STRUKTUR DATA', 2, 4, '2016-06-22 04:19:01', '2016-06-22 04:19:01'),
(20, 'USM13204P', 'OLAH RAGA', 2, 1, '2016-06-22 04:19:29', '2016-06-22 04:19:29'),
(23, 'TIS13207P', 'ORGANISASI KOMPUTER', 2, 3, '2016-06-22 04:22:47', '2016-06-22 04:22:47'),
(24, 'TIS13212P', 'MULTIMEDIA', 2, 3, '2016-06-22 04:23:26', '2016-06-22 04:23:26'),
(25, 'TIS13420P', 'INTERAKSI MANUSIA DAN KOMPUTER', 4, 2, '2016-06-22 04:24:01', '2016-06-22 04:24:01'),
(26, 'TIS13315', 'SISTEM PENDUKUNG KEPUTUSAN', 3, 3, '2016-06-22 04:24:39', '2016-06-22 04:24:39'),
(27, 'TIS13531', 'METODOLOGI PENELITIAN', 5, 3, '2016-06-22 04:25:17', '2016-06-22 04:25:17'),
(28, 'TIS13316P', 'PEMROGRAMAN BASIS DATA', 3, 3, '2016-06-22 04:25:53', '2016-06-22 04:25:53'),
(29, 'TIS13206', 'METODE NUMERIK', 2, 2, '2016-06-22 04:26:36', '2016-06-22 04:26:36'),
(30, 'TIS13644P', 'ORACLE WDP **)', 6, 3, '2016-06-22 04:27:12', '2016-06-22 04:27:12'),
(31, 'TIS13105P', 'BASIS DATA', 1, 3, '2016-06-22 04:27:51', '2016-06-22 04:27:51'),
(32, 'TIS13532P', 'DATA MINING', 5, 2, '2016-06-22 04:28:16', '2016-06-22 04:28:16'),
(33, 'TIS13530', 'BAHASA INGGRIS ILMIAH', 5, 2, '2016-06-22 04:29:09', '2016-06-22 04:29:09'),
(34, 'USM13305', 'PENDIDIKAN KEWARGANEGARAAN', 3, 2, '2016-06-22 04:29:39', '2016-06-22 04:29:39'),
(35, 'TIS13638P', 'KERJA PRAKTEK', 6, 2, '2016-06-22 04:30:10', '2016-06-22 04:30:10'),
(36, 'TIS13643P', 'KULIAH KERJA NYATA **)', 6, 3, '2016-06-22 04:30:55', '2016-06-22 04:30:55'),
(37, 'TIS13851P', 'TUGAS AKHIR', 8, 6, '2016-06-22 04:31:50', '2016-06-22 04:31:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id_pegawai` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `fk_user`, `nama_pegawai`, `created_at`, `updated_at`) VALUES
(1, 5, 'Adrian Putra', '2016-06-19 15:09:24', '2016-06-19 15:09:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id_role` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id_role`, `slug`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '2016-06-19 01:45:56', '2016-06-19 01:45:56'),
(2, 'dosen', 'Dosen', '2016-06-19 01:46:12', '2016-06-19 01:46:12'),
(3, 'mhs', 'Mahasiswa', '2016-06-19 01:46:25', '2016-06-19 01:46:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
`id_role_user` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL DEFAULT '0',
  `fk_role` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id_role_user`, `fk_user`, `fk_role`, `created_at`, `updated_at`) VALUES
(2, 3, 2, '2016-06-19 05:55:32', '2016-06-19 05:55:32'),
(3, 4, 3, '2016-06-19 09:37:13', '2016-06-19 09:37:13'),
(4, 5, 1, '2016-06-19 14:55:18', '2016-06-19 15:09:32'),
(5, 6, 3, '2016-06-22 02:18:54', '2016-06-22 02:18:54'),
(6, 7, 3, '2016-06-22 02:19:48', '2016-06-22 02:19:48'),
(7, 8, 3, '2016-06-22 02:22:42', '2016-06-22 02:22:42'),
(8, 9, 3, '2016-06-22 04:10:22', '2016-06-22 04:10:22'),
(9, 10, 2, '2016-06-22 04:37:09', '2016-06-22 04:37:09'),
(10, 11, 2, '2016-06-22 04:37:55', '2016-06-22 04:37:55'),
(11, 12, 2, '2016-06-22 04:38:53', '2016-06-22 04:38:53'),
(12, 13, 2, '2016-06-22 04:39:49', '2016-06-22 04:39:49'),
(13, 14, 2, '2016-06-22 04:40:08', '2016-06-22 04:40:08'),
(14, 15, 2, '2016-06-22 04:40:44', '2016-06-22 04:40:44'),
(15, 16, 2, '2016-06-22 04:41:31', '2016-06-22 04:41:31'),
(16, 17, 2, '2016-06-22 04:42:09', '2016-06-22 04:42:09'),
(17, 18, 2, '2016-06-22 04:42:58', '2016-06-22 04:42:58'),
(18, 19, 2, '2016-06-22 04:43:55', '2016-06-22 04:43:55'),
(19, 20, 2, '2016-06-22 04:44:36', '2016-06-22 04:44:36'),
(20, 21, 2, '2016-06-22 04:45:16', '2016-06-22 04:45:16'),
(21, 22, 2, '2016-06-22 04:45:51', '2016-06-22 04:45:51'),
(22, 23, 2, '2016-06-22 04:46:40', '2016-06-22 04:46:40'),
(23, 24, 2, '2016-06-22 04:48:17', '2016-06-22 04:48:17'),
(24, 25, 2, '2016-06-22 04:49:04', '2016-06-22 04:49:04'),
(25, 26, 2, '2016-06-22 04:49:44', '2016-06-22 04:49:44'),
(26, 27, 2, '2016-06-22 04:50:28', '2016-06-22 04:50:28'),
(27, 28, 2, '2016-06-22 04:51:38', '2016-06-22 04:51:38'),
(28, 29, 2, '2016-06-22 04:52:26', '2016-06-22 04:52:26'),
(29, 30, 2, '2016-06-22 04:53:00', '2016-06-22 04:53:00'),
(30, 31, 2, '2016-06-22 04:53:51', '2016-06-22 04:53:51'),
(31, 32, 2, '2016-06-22 04:54:25', '2016-06-22 04:54:25'),
(32, 33, 2, '2016-06-22 04:55:07', '2016-06-22 04:55:07'),
(33, 34, 2, '2016-06-22 04:55:41', '2016-06-22 04:55:41'),
(34, 35, 2, '2016-06-22 04:56:34', '2016-06-22 04:56:34'),
(35, 36, 2, '2016-06-22 04:57:15', '2016-06-22 04:57:15'),
(36, 37, 2, '2016-06-22 04:57:54', '2016-06-22 04:57:54'),
(37, 38, 2, '2016-06-22 04:59:28', '2016-06-22 04:59:28'),
(38, 39, 2, '2016-06-22 05:00:06', '2016-06-22 05:00:06'),
(39, 40, 2, '2016-06-22 05:00:44', '2016-06-22 05:00:44'),
(40, 41, 2, '2016-06-22 05:01:25', '2016-06-22 05:01:25'),
(41, 42, 2, '2016-06-22 05:02:57', '2016-06-22 05:02:57'),
(42, 43, 2, '2016-06-22 05:04:50', '2016-06-22 05:04:50'),
(43, 44, 2, '2016-06-22 05:05:30', '2016-06-22 05:05:30'),
(44, 45, 2, '2016-06-22 05:06:55', '2016-06-22 05:06:55'),
(45, 46, 2, '2016-06-22 05:07:40', '2016-06-22 05:07:40'),
(46, 47, 3, '2016-06-23 01:27:00', '2016-06-23 01:27:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `created_at`, `updated_at`) VALUES
(3, 'bveryc', '$2y$10$.0Uuszj5SLVuwg9abw5UI.EWZcvth2kYMFOrV/CiqWw.R3aAaEqYy', '2016-06-19 05:55:32', '2016-06-19 06:29:03'),
(4, 'agusedyc', '$2y$10$yWW8VoR7dNcGc5SF7atkTOpZjeDg0Wt5OgypiD2qJSG8fdpk0/27K', '2016-06-19 09:37:13', '2016-06-19 09:37:13'),
(5, 'admin', '$2y$10$yWW8VoR7dNcGc5SF7atkTOpZjeDg0Wt5OgypiD2qJSG8fdpk0/27K', '2016-06-19 15:08:51', '2016-06-19 15:08:57'),
(6, 'syukur', '$2y$10$Pi4zzOqeGbglq/NeGML2feUhHk4PO3XAD697fr0.0uOhI3bmR9zRq', '2016-06-22 02:18:54', '2016-06-22 02:18:54'),
(7, 'angga', '$2y$10$IZXPcUjkil4dwjcntwu6muhnNIkttWx0iHIePLlx56YKVpjNqNe5e', '2016-06-22 02:19:48', '2016-06-22 02:19:48'),
(8, 'agung', '$2y$10$KJBBnC8AWVIMjB9tmcSkFu6MrsRtE2h0delwfOQMgFCTDry/2J3..', '2016-06-22 02:22:42', '2016-06-22 02:22:42'),
(9, 'ema', '$2y$10$g3EIamxnbvmmEGSKb.HZ1e1X8JPtcubRFGWTN/9vbzJUZOM57NlGK', '2016-06-22 04:10:22', '2016-06-22 04:10:22'),
(10, 'astrid', '$2y$10$JEE3D3vsZzXBv3OMkQ/P7.lfwUPuDD4ftfAN/Yopxen5NLDVa3oqK', '2016-06-22 04:37:09', '2016-06-22 04:37:09'),
(11, 'aria', '$2y$10$PmlNuBgZlfgSmodIivcKhuge13fixD7f6wvcCccOO.vda9BuE4xSq', '2016-06-22 04:37:55', '2016-06-22 04:37:55'),
(12, 'agus', '$2y$10$3jIsTA1JbeWLyzLAR2TYJuUEqU7ND7Q90pvQcPXgZ3rwaDqJACMcK', '2016-06-22 04:38:53', '2016-06-22 04:38:53'),
(13, 'yogi', '$2y$10$R384Pd6wyjElfheVIeCNROu1nk78XcNasqZiRl3snFmWv7KzaxTCS', '2016-06-22 04:39:49', '2016-06-22 04:39:49'),
(14, 'susanto', '$2y$10$82zDl/tBnmcc6KxIW1a5beepD0lVzQOauHt.OpLZQN7RfSeGR2kQO', '2016-06-22 04:40:08', '2016-06-22 04:40:08'),
(15, 'ida', '$2y$10$JxeBzvHmZE3myKLcs6KVzOC5q51UdVE5w1JqrnpDUUym7nmdLKMCy', '2016-06-22 04:40:44', '2016-06-22 04:40:44'),
(16, 'febrian', '$2y$10$4K438zQ6bY4mk2gSkpLOO.csE24BzbuIQZW67IB6aDIe.DEQAtdQm', '2016-06-22 04:41:31', '2016-06-22 04:41:31'),
(17, 'siti', '$2y$10$kVlK2PbKR85YTekbvrUa0.BR1Z7Dc3NoexL2dUEKzeWqLAHjDLU0e', '2016-06-22 04:42:09', '2016-06-22 04:42:09'),
(18, 'titis', '$2y$10$crru9ES6.SS7Lql/YjSwKOoS6N/.lDru7ZjpTm2WmxT84f/.0F5T.', '2016-06-22 04:42:58', '2016-06-22 04:42:58'),
(19, 'diah', '$2y$10$Q6uZQXqb9eqBh.a5CSNiVOHKbtMtbxpf9uVAH5aZ6hcG9YzRvsWNq', '2016-06-22 04:43:55', '2016-06-22 04:43:55'),
(20, 'iswoyo', '$2y$10$q2tI8.JqRs7kQGvuiWy2Q.5BG26qegxG1YP1Ds7utRIAvntMEW1Zu', '2016-06-22 04:44:36', '2016-06-22 04:44:36'),
(21, 'whisnu', '$2y$10$SluyKJ.f5OziWRgXZEvF/uN1uWwFFsJbSX7l7tz5OwcFPl5JpgEiq', '2016-06-22 04:45:16', '2016-06-22 04:45:16'),
(22, 'rastri', '$2y$10$WLVuGSF.DSTgxLUVAOEUROQoFC9kickvzj/GguawA8mrzAFyzMFdK', '2016-06-22 04:45:51', '2016-06-22 04:45:51'),
(23, 'ana', '$2y$10$x8YMuKp5JKX3KZUD0c3Xx.mNzrJKvjK7icWQPcIb8//qWhDuyw6Sq', '2016-06-22 04:46:40', '2016-06-22 04:46:40'),
(24, 'ahmad', '$2y$10$3ZkDpHopGAEohbLtDT.VkOfPzX.4/dBtW/GUt9GJPZDI8N41EiyG.', '2016-06-22 04:48:17', '2016-06-22 04:48:17'),
(25, 'titin', '$2y$10$Z.uM/Z0SyAZi2.6zdXy1E.nqG24dL4WBZIB16VEEiDLtPMLFJYT6q', '2016-06-22 04:49:04', '2016-06-22 04:49:04'),
(26, 'firman', '$2y$10$AYrQX1PBGCpe/.FusqmwyeHvJFIG8YT7.P.S2J/wgmN.OA4HoGOea', '2016-06-22 04:49:44', '2016-06-22 04:49:44'),
(27, 'basworo', '$2y$10$PUgE/0QD7aVsKpZbpR/h9.c28Cs1gixEYPDr20RWTmt2kCp7ABwvu', '2016-06-22 04:50:27', '2016-06-22 04:50:27'),
(28, 'agusta', '$2y$10$Cxnv0yv0jWlOe677Dedgjega8IeJt5GBX6vVKHLgUFvgfjMNIGaOm', '2016-06-22 04:51:38', '2016-06-22 04:51:38'),
(29, 'yulinda', '$2y$10$kEb/a56gJELONDvLJmUqru6iGoU4oUa4BphTV0S8KqYzAyw4mxojG', '2016-06-22 04:52:26', '2016-06-22 04:52:26'),
(30, 'fahrul', '$2y$10$4.wwDt6Enr3e8ru3i4DfdOZ92kDo9TCEf1CtWFRuPAt7T6mz.xTKO', '2016-06-22 04:53:00', '2016-06-22 04:53:00'),
(31, 'saifur', '$2y$10$KvnpWs13w0izJiwoe9wPfu9kjzkh2cKNEJc4lp6ICcIb.jGs6JgtS', '2016-06-22 04:53:51', '2016-06-22 04:53:51'),
(32, 'nadia', '$2y$10$lWaUjPe0/YIL80ZY7lF3N.rU0QZw0Aaj0Rq9eabUZ.ZWexVwM1F7K', '2016-06-22 04:54:25', '2016-06-22 04:54:25'),
(33, 'henny', '$2y$10$gxisiE72HVxQ5I.QpF3RCOS/hJxXsHhlu3tqsaWQfj3BRFmTBxroq', '2016-06-22 04:55:07', '2016-06-22 04:55:07'),
(34, 'soiful', '$2y$10$IXB0h3OAjirX0F8owXuIE.QFZ6qucxI/fKh4ThHgR1d7gno4EtA8W', '2016-06-22 04:55:41', '2016-06-22 04:55:41'),
(35, 'tirta', '$2y$10$nHw7nV3PDVH5LaMDtyoXLutzwDM.Km5ET1jw14fsVpE1AtGP6X5Ja', '2016-06-22 04:56:34', '2016-06-22 04:56:34'),
(36, 'sri', '$2y$10$4FowwSlZ4cYN.viREBzf9e3HbgxcOGferN.csvk8ms1T9oKTvVPF.', '2016-06-22 04:57:15', '2016-06-22 04:57:15'),
(37, 'hetty', '$2y$10$5P.juCd..gzL3PtUo2arce1a9ncEEQnP9xRuC06UFG.4tjGhtgZMm', '2016-06-22 04:57:54', '2016-06-22 04:57:54'),
(38, 'khoirudin', '$2y$10$4FzE2t3goW8g35P4xhqyNubzLqsyrE.6EsHSm5nhR8ML6GYismcX.', '2016-06-22 04:59:28', '2016-06-22 04:59:28'),
(39, 'atmoko', '$2y$10$MJsKPbSqh8Zm6BcYL6qJHuHIqEm4FfFSR3jQj60wF/e23njI0s/HS', '2016-06-22 05:00:06', '2016-06-22 05:00:06'),
(40, 'bagus', '$2y$10$pxBzIaJRkkmcjKK1bcjLLO1yRBahjMDzrqz5y.Z..zUkC9w5CnyPC', '2016-06-22 05:00:44', '2016-06-22 05:00:44'),
(41, 'erika', '$2y$10$Qqt3/eUroNDcfGKwOqXOeeNrksn7cMl0dJDMVQRTI5G0LGHIXmcLK', '2016-06-22 05:01:25', '2016-06-22 05:01:25'),
(42, 'charis', '$2y$10$GUaOJHtcmdXzIDZ.FG7BU.xPr1vEi/4zBAjdMUqGwHPQ/bcVYNNKy', '2016-06-22 05:02:57', '2016-06-22 05:02:57'),
(43, 'stefani', '$2y$10$CbswD2N5wvRMZ1n2smx3RuokTXQLKrV4CQpDZQ6wlfCVS7C5s2sLy', '2016-06-22 05:04:50', '2016-06-22 05:04:50'),
(44, 'sujita', '$2y$10$wLrYXp3rG4Dnuh1lpSL.k.eyjo6osgKYHgz6eTXEmcZkEKKzXMndK', '2016-06-22 05:05:30', '2016-06-22 05:05:30'),
(45, 'zakki', '$2y$10$gpbrWwdQC2pzzNRKYZKhZuGlXJFaHA9C5D37Hl7Q/0B2LNWnf7lbq', '2016-06-22 05:06:55', '2016-06-22 05:06:55'),
(46, 'vensy', '$2y$10$V.mG3/BgCpB/lIqqoNvORukpdfWbqcB1le7aZhCrGme.4VOss8GH6', '2016-06-22 05:07:40', '2016-06-22 05:07:40'),
(47, 'fajar02', '$2y$10$drMuoy/ZPZz7PLjjKzhoR.q3eWAhGsOt8c/3/49FbAaFLlm4wrXaO', '2016-06-23 01:27:00', '2016-06-23 01:27:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`id_dosen`), ADD KEY `FK_dosen_users` (`fk_user`);

--
-- Indexes for table `jadwal_mk`
--
ALTER TABLE `jadwal_mk`
 ADD PRIMARY KEY (`id_jadwal`), ADD KEY `FK_jadwal_mk_dosen` (`fk_dosen`), ADD KEY `FK_jadwal_mk_makul` (`fk_makul`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
 ADD PRIMARY KEY (`id_krs`), ADD KEY `FK_krs_mahasiswa` (`fk_mhs`), ADD KEY `FK_krs_jadwal_mk` (`fk_jadwal`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`id_mhs`), ADD KEY `FK_mahasiswa_users` (`fk_user`);

--
-- Indexes for table `makul`
--
ALTER TABLE `makul`
 ADD PRIMARY KEY (`id_makul`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id_pegawai`), ADD KEY `FK_pegawai_users` (`fk_user`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id_role`), ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
 ADD PRIMARY KEY (`id_role_user`), ADD KEY `FK_role_user_users` (`fk_user`), ADD KEY `FK_role_user_roles` (`fk_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `jadwal_mk`
--
ALTER TABLE `jadwal_mk`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `makul`
--
ALTER TABLE `makul`
MODIFY `id_makul` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
MODIFY `id_role_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
ADD CONSTRAINT `FK_dosen_users` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_mk`
--
ALTER TABLE `jadwal_mk`
ADD CONSTRAINT `FK_jadwal_mk_dosen` FOREIGN KEY (`fk_dosen`) REFERENCES `dosen` (`id_dosen`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_jadwal_mk_makul` FOREIGN KEY (`fk_makul`) REFERENCES `makul` (`id_makul`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
ADD CONSTRAINT `FK_krs_jadwal_mk` FOREIGN KEY (`fk_jadwal`) REFERENCES `jadwal_mk` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_krs_mahasiswa` FOREIGN KEY (`fk_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `FK_mahasiswa_users` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
ADD CONSTRAINT `FK_pegawai_users` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `FK_role_user_roles` FOREIGN KEY (`fk_role`) REFERENCES `roles` (`id_role`) ON UPDATE CASCADE,
ADD CONSTRAINT `FK_role_user_users` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
