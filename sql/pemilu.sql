-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mei 2019 pada 22.12
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `amn`
--

CREATE TABLE IF NOT EXISTS `amn` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `amn`
--

INSERT INTO `amn` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_calon`
--

CREATE TABLE IF NOT EXISTS `data_calon` (
`no` int(10) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_calon`
--

INSERT INTO `data_calon` (`no`, `nik`, `nama`, `jenis_kelamin`, `telp`, `visi`, `misi`, `foto`) VALUES
(4, '1167050011', 'Agus', 'laki laki', '02589645732', 'HAHA HIHIHI', 'UIN', '260520192207102014-04-27 16.42.37.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_calon_rt`
--

CREATE TABLE IF NOT EXISTS `data_calon_rt` (
  `nik` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nik` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `verification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `pass`, `verification`) VALUES
('1167050011', '123456', 'biru'),
('1167050012', 'yogandiagus', 'merah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_calon`
--
ALTER TABLE `data_calon`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_calon`
--
ALTER TABLE `data_calon`
MODIFY `no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
