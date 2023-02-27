-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 08.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE `lapangan` (
  `kd_lapangan` int(2) NOT NULL,
  `nama_lapangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`kd_lapangan`, `nama_lapangan`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(7, 'A4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `kd_sewa` int(2) NOT NULL,
  `tgl_sewa` datetime NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `total_biaya` int(6) NOT NULL,
  `kd_user` int(3) NOT NULL,
  `kd_lapangan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`kd_sewa`, `tgl_sewa`, `jam_mulai`, `jam_selesai`, `total_biaya`, `kd_user`, `kd_lapangan`) VALUES
(30, '2022-07-07 19:12:59', '19:12:00', '21:12:00', 50000, 14, 1),
(32, '2022-07-07 21:21:07', '21:20:00', '23:20:00', 50000, 14, 1),
(33, '2022-07-07 21:21:15', '21:20:00', '23:20:00', 50000, 14, 1),
(34, '2022-07-07 21:21:18', '21:20:00', '23:20:00', 50000, 14, 1),
(35, '2022-07-07 21:21:18', '21:20:00', '23:20:00', 50000, 14, 1),
(36, '2022-07-07 21:21:19', '21:20:00', '23:20:00', 50000, 14, 1),
(37, '2022-07-07 21:21:20', '21:20:00', '23:20:00', 50000, 14, 1),
(38, '2022-07-07 21:21:20', '21:20:00', '23:20:00', 50000, 14, 1),
(39, '2022-07-07 21:21:20', '21:20:00', '23:20:00', 50000, 14, 1),
(40, '2022-07-07 21:21:21', '21:20:00', '23:20:00', 50000, 14, 1),
(41, '2022-07-07 21:21:23', '21:20:00', '23:20:00', 50000, 14, 1),
(42, '2022-07-07 21:21:24', '21:20:00', '23:20:00', 50000, 14, 1),
(43, '2022-07-07 21:21:26', '21:20:00', '23:20:00', 50000, 14, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kd_user` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kd_user`, `email`, `username`, `password`, `nama_lengkap`, `nohp`, `alamat`, `level`, `token`) VALUES
(9, 'admin@gm.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '089', 'sukatani', 1, 'f47a5bf907'),
(14, 'hidayatnurwahid969@gmail.com', 'HND16', '827ccb0eea8a706c4c34a16891f84e7b', 'Hidayat Nurwahid', '0895331783428', 'JL. Kp Tipar', 2, '6bbd7ed578');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`kd_lapangan`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`kd_sewa`),
  ADD KEY `kd_user` (`kd_user`,`kd_lapangan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `kd_lapangan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `kd_sewa` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `kd_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
