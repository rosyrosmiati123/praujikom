-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2025 pada 02.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_task`
--

CREATE TABLE `tb_task` (
  `id` int(11) NOT NULL,
  `task` varchar(50) NOT NULL,
  `deadline` datetime NOT NULL,
  `status` enum('selesai','belum selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_task`
--

INSERT INTO `tb_task` (`id`, `task`, `deadline`, `status`) VALUES
(80, 'makan', '2025-03-11 09:16:00', 'selesai'),
(81, 'sekolah', '2025-03-11 09:21:00', 'selesai'),
(83, 'lebaran', '2025-03-31 12:00:00', 'belum selesai'),
(85, 'main game', '2025-04-01 14:39:00', 'belum selesai'),
(86, 'makan malam', '2025-04-09 20:13:00', 'belum selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `alamat_user` varchar(150) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempatlahir_user` varchar(150) NOT NULL,
  `tanggallahir_user` date NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `nama_user`, `alamat_user`, `jenis_kelamin`, `tempatlahir_user`, `tanggallahir_user`, `role`) VALUES
(28, 'admin', 'admin@gmail.com', '$2y$10$zcv/SbDifDJIeTdezrjjt.DVLRw3vyhUBIvtyxf8ovOHnoKGDmAY2', 'admin', 'kp.ciburial', 'perempuan', 'bandung', '2006-07-27', 'admin'),
(29, 'rizki', 'rizki@gmail.com', '$2y$10$ed6gyvKYECh1qv/fiOCdG.CWKhTQ.ewqtNrjVUuy1/lCyKcL9Tw2m', 'iki', 'pasirlamggu', 'laki-laki', 'bandung', '2025-02-21', 'user'),
(30, 'admin1', 'admin1@gmail.com', '$2y$10$mkC3gr9hE0UeAK9CkuPW9.7MGkQEDmx1.4x6pGX9klOtOOVo3lM26', 'admin', 'kp.ciburial', 'laki-laki', 'b jv', '2025-02-20', 'user'),
(31, 'admin1', 'admin1@gmail.com', '$2y$10$.5atQpsGnWzZ933hnUJdpeEYWcFmMMuV75Fm9VaNq37oOteuTlwDS', 'admin', 'kp.ciburial', 'laki-laki', 'b jv', '2025-02-20', 'user'),
(32, 'valentino', 'valen@gmail.com', '$2y$10$kt1qnrffsRamzZZ40e81ROj/gV9jo/fiiXzwg0o7Erg8FoUzS736i', 'valen', 'ciapalah', 'laki-laki', 'los', '2011-11-11', 'user'),
(33, 'ikii', 'iki@gmail.com', '$2y$10$EJeHzD8XXsecXZz0sd0n8uPr.rZeEGAP/4w9loYxj8z6dUehuxGXm', 'ikii', 'cisarua', 'laki-laki', 'padang', '2006-08-27', 'user'),
(34, 'admin3', 'admin3@gmail.com', '$2y$10$3CTkMJb18esxFTIXB9CjsO1H5e2r13OjuNxEwcmsIPCkY768VUT1i', 'admin3', 'bandung', 'laki-laki', 'padang', '2025-02-21', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_task`
--
ALTER TABLE `tb_task`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_task`
--
ALTER TABLE `tb_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
