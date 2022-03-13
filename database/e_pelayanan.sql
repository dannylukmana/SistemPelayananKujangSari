-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 05.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_pelayanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `hari` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` int(12) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`hari`, `nama`, `nip`, `pekerjaan`, `poli`) VALUES
('Jumat', 'bayu', 1, 'Dokter Umum', 'Umum'),
('Senin', 'bay', 11111, 'Dokter', 'Umum'),
('Senin', 'ani', 45445, 'Dokter Gigi', 'Umum'),
('Selasa', 'Drg Dinda', 123456, 'Dokter Gigi', 'Gigi'),
('Jumat', 'drg Ujang', 1223356, 'Dokter Umum', 'Umum'),
('Rabu', 'dr Mega', 1234567, 'Dokter Umum', 'Umum'),
('Senin', 'dodok', 55555555, 'Dokter Gigi', 'Umum'),
('Senin', 'dodok', 1234567890, 'Dokter', 'Umum'),
('Selasa', 'dodok', 1301174144, 'Dokter Gigi', 'Gigi'),
('Senin', 'dodok', 2147483647, 'Dokter', 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `nama` varchar(100) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`nama`, `keluhan`) VALUES
('dodok', 'mantapp brooooo'),
('jono', 'anjaayyyyy'),
('bay', 'alalalaalalal'),
('bayu', 'Puskesmas terbaik di bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_medis`
--

CREATE TABLE `rekap_medis` (
  `nama` varchar(100) NOT NULL,
  `bpjs` int(12) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap_medis`
--

INSERT INTO `rekap_medis` (`nama`, `bpjs`, `usia`, `keluhan`, `tanggal`) VALUES
('bayu', 789456, '22', 'Stroke', '1 Mei 2020'),
('dodok', 1234561, '22', 'Stroke', '1 Mei 2020'),
('Kasep', 1234578, '20 tahun', 'Batuk Pilek', '3 Mei 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `rekap_medis`
--
ALTER TABLE `rekap_medis`
  ADD PRIMARY KEY (`bpjs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `nip` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `rekap_medis`
--
ALTER TABLE `rekap_medis`
  MODIFY `bpjs` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234579;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
