-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2019 pada 03.56
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `fakultas` varchar(225) NOT NULL,
  `prodi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_lengkap`, `jenkel`, `alamat`, `fakultas`, `prodi`) VALUES
('171402030', 'a', 'L', 'a', 'a', 'a'),
('171402031', 'Taufiq Rorkyendo', 'L', 'a', 'a', 'a'),
('171402033', 'Taufiq Rorkyendo', 'L', 'a', 'a', 'a'),
('171402039', 'Taufiq Rorkyendo', 'L', 'a', 'a', 'a'),
('1714023090', 'a', 'L', 'a', 'a', 'a'),
('1827387123', 'a', 'L', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `nim` varchar(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`nim`, `username`, `password`) VALUES
('171402030', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
('171402031', 'aa', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
('171402033', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
('171402039', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
('1714023090', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
('1827387123', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `relasi_pengguna` FOREIGN KEY (`nim`) REFERENCES `pengguna` (`nim`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
