-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2023 pada 03.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carwash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `kd_mobil` int(20) NOT NULL,
  `merk_mobil` varchar(20) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `kirim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`kd_mobil`, `merk_mobil`, `nopol`, `kirim`) VALUES
(9812, 'Toyotata', 'B 41 K', ''),
(88765, 'Hundudu', 'D 5667 YAU', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `Id_admin` int(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `No_Hp` int(15) DEFAULT NULL,
  `Id_User` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`Id_admin`, `name`, `pass`, `No_Hp`, `Id_User`) VALUES
(1, 'dinda', '4321', 8983647, 0),
(2, 'selina', '1234', 89746334, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(15) NOT NULL,
  `Id_User` int(30) NOT NULL,
  `No_antrian` int(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Transaksi` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `Id_User`, `No_antrian`, `Tanggal`, `Transaksi`) VALUES
(2, 0, 0, '2023-11-01', 70000),
(1, 0, 0, '2023-11-01', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi_antrian`
--

CREATE TABLE `tb_transaksi_antrian` (
  `No_antrian` int(15) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jenis_jasa` varchar(15) NOT NULL,
  `Harga` int(30) NOT NULL,
  `Pembayaran` int(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_transaksi_antrian`
--

INSERT INTO `tb_transaksi_antrian` (`No_antrian`, `Tanggal`, `Jenis_jasa`, `Harga`, `Pembayaran`, `Status`) VALUES
(1, '2023-11-01', 'premium', 100, 100, 'sedang dicuci'),
(2, '2023-11-01', 'spesial', 70, 70, 'setelah antrian beri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `Id_User` int(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `No_Hp` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`Id_User`, `Name`, `Password`, `No_Hp`) VALUES
(1, 'bunga', '12345678', 89765467),
(2, 'xelyn', '09876543', 886734211);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`kd_mobil`),
  ADD UNIQUE KEY `nopol` (`nopol`),
  ADD UNIQUE KEY `merk_mobil` (`merk_mobil`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`Id_admin`),
  ADD UNIQUE KEY `name` (`name`,`pass`,`No_Hp`,`Id_User`);

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD UNIQUE KEY `Id_User` (`Id_User`,`No_antrian`,`Tanggal`,`Transaksi`);

--
-- Indeks untuk tabel `tb_transaksi_antrian`
--
ALTER TABLE `tb_transaksi_antrian`
  ADD PRIMARY KEY (`No_antrian`),
  ADD UNIQUE KEY `Tanggal` (`Tanggal`,`Jenis_jasa`,`Harga`,`Pembayaran`,`Status`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`Id_User`),
  ADD UNIQUE KEY `Name` (`Name`,`Password`,`No_Hp`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`Id_admin`) REFERENCES `tb_admin` (`Id_admin`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `tb_user` (`Id_User`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
