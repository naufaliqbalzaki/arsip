-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2024 pada 10.21
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
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'DPM-PTSP SURABAYA', 'admin', '0192023a7bbd73250516f069df18b500', '248573916_DPMBG.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `arsip_id` int(11) NOT NULL,
  `arsip_waktu_upload` datetime NOT NULL,
  `arsip_petugas` int(11) NOT NULL,
  `arsip_izin` varchar(255) NOT NULL,
  `arsip_alamat` varchar(255) NOT NULL,
  `arsip_pengusaha` varchar(255) NOT NULL,
  `arsip_sk` varchar(255) NOT NULL,
  `arsip_lemari` varchar(255) NOT NULL,
  `arsip_box` varchar(255) NOT NULL,
  `arsip_jenis` varchar(255) NOT NULL,
  `arsip_kategori` int(11) NOT NULL,
  `arsip_keterangan` text NOT NULL,
  `arsip_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `histori_id` int(11) NOT NULL,
  `histori_waktu` datetime NOT NULL,
  `histori_petugas` int(11) NOT NULL,
  `histori_timur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_keterangan`) VALUES
(3, 'DINAS KEBUDAYAAN DAN PARIWISATA', 'ARSIP DINAS KEBUDAYAAN DAN PARIWISATA'),
(4, 'DINAS KETAHANAN PANGAN DAN PERTANIAN', 'ARSIP DINAS KETAHANAN PANGAN DAN PERTANIAN'),
(5, 'DINAS LINGKUNGAN HIDUP', 'ARSIP DINAS LINGKUNGAN HIDUP'),
(6, 'DINAS PEMADAM KEBAKARAN', 'ARSIP DINAS PEMADAM KEBAKARAN'),
(7, 'DINAS PERDAGANGAN DAN PERINDUSTRIAN', 'ARSIP DINAS PERDAGANGAN DAN PERINDUSTRIAN'),
(8, 'DINAS KESEHATAN', 'ARSIP DINAS KESEHATAN'),
(10, 'DINAS PENDIDIKAN', 'ARSIP DINAS PENDIDIKAN'),
(11, 'DINAS PERHUBUNGAN', 'ARSIP DINAS PERHUBUNGAN'),
(12, 'IZIN PEMAKAIAN RUSUN', 'ARSIP IZIN PEMAKAIAN RUSUN'),
(13, 'IZIN PEMAKAIAN TANAH', 'ARSIP IZIN PEMAKAIAN TANAH'),
(14, 'SIP DOKTER', 'ARSIP SIP DOKTER'),
(15, 'STR DOKTER & APOTEKER', 'ARSIP STR DOKTER & APOTEKER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int(11) NOT NULL,
  `petugas_nama` varchar(255) NOT NULL,
  `petugas_username` varchar(255) NOT NULL,
  `petugas_password` varchar(255) NOT NULL,
  `petugas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `petugas_username`, `petugas_password`, `petugas_foto`) VALUES
(6, 'PTSP PUSAT', 'pusat', '171b6f42d88d1131b4344c5e9b61bbfd', '341199760_DPMBG.png'),
(7, 'PTSP TIMUR', 'timur', '57996860cd15e65b2017c30e6661f5dc', '312855460_logo_dpm-removebg-preview.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int(11) NOT NULL,
  `riwayat_waktu` datetime NOT NULL,
  `riwayat_petugas` int(11) NOT NULL,
  `riwayat_arsip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `timur`
--

CREATE TABLE `timur` (
  `timur_id` int(11) NOT NULL,
  `timur_waktu_upload` datetime NOT NULL,
  `timur_petugas` int(11) NOT NULL,
  `timur_izin` varchar(255) NOT NULL,
  `timur_alamat` varchar(255) NOT NULL,
  `timur_pengusaha` varchar(255) NOT NULL,
  `timur_sk` varchar(255) NOT NULL,
  `timur_lemari` varchar(255) NOT NULL,
  `timur_box` varchar(255) NOT NULL,
  `timur_jenis` varchar(255) NOT NULL,
  `timur_kategori` int(11) NOT NULL,
  `timur_keterangan` text NOT NULL,
  `timur_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`histori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`);

--
-- Indeks untuk tabel `timur`
--
ALTER TABLE `timur`
  ADD PRIMARY KEY (`timur_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `histori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `timur`
--
ALTER TABLE `timur`
  MODIFY `timur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
