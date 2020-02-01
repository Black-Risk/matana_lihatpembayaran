-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 08:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `databayar`
--

CREATE TABLE `databayar` (
  `no` int(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `periode1` varchar(20) NOT NULL,
  `status1` varchar(20) NOT NULL,
  `periode2` varchar(20) NOT NULL,
  `status2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `databayar`
--

INSERT INTO `databayar` (`no`, `nim`, `nama`, `password`, `prodi`, `periode1`, `status1`, `periode2`, `status2`) VALUES
(2, '20175520001', 'Kelvin Chandra', 'Redalert09', 'Teknik Informatika', '1.000.000', 'Lunas', '0', 'Lunas'),
(14, 'test', 'Test User Only', 'test', 'Fisika Medis & Instrumentasi', '13.000.000', 'Lunas', '7.750.000', 'Belum Lunas'),
(15, 'test1', 'Test User only', 'test1', 'Sistem Komputer', '9.000.000', 'Belum Lunas', '1.000.000', 'Belum Lunas'),
(16, 'test2', 'Test User Only', 'test2', 'Sistem Informasi', '7.750.000', 'Lunas', '0', 'Lunas'),
(17, 'test3', 'Test User Only', 'test3', 'Akuntansi', '10.000.000', 'Belum Lunas', '10.000.000', 'Belum Lunas'),
(18, 'test4', 'Test User Only', 'test4', 'Manajemen', '2.500.000', 'Lunas', '1.000.000', 'Belum Lunas'),
(19, 'test5', 'Test User Only', 'test5', 'Desain Komunikasi Visual', '6.750.000', 'Belum Lunas', '0', 'Lunas'),
(20, 'test6', 'Test User Only', 'test6', 'Hospitality & Pariwisata', '1.000.000', 'Lunas', '2.500.000', 'Belum Lunas'),
(21, 'test7', 'Test User Only', 'test7', 'Arsitektur', '3.100.000', 'Lunas', '250.000', 'Belum Lunas'),
(22, 'test8', 'Test User Only', 'test8', 'Statistika Bisnis', '4.000.000', 'Lunas', '2.340.000', 'Belum Lunas'),
(23, 'test9', 'Test User Only', 'test9', 'Statistika Bisnis', '0', 'Lunas', '0', 'Lunas'),
(24, 'test10', 'Test User Only', 'test10', 'Arsitektur', '900.000', 'Belum Lunas', '100.000', 'Belum Lunas'),
(25, 'test11', 'Test User Only', 'test11', 'Arsitektur', '325.500', 'Belum Lunas', '750.000', 'Belum Lunas'),
(26, 'test12', 'Test User Only', 'test12', 'Akuntansi', '50.000', 'Belum Lunas', '0', 'Lunas'),
(27, 'test13', 'Test User Only', 'test13', 'Desain Komunikasi Visual', '100.000', 'Lunas', '300.000', 'Belum Lunas'),
(28, 'test14', 'Test User Only', 'test14', 'Manajemen', '1.000.000', 'Belum Lunas', '0', 'Lunas'),
(29, '20175520007', 'Vincent Julindra Jacob', 'matana123', 'Teknik Informatika', '0', 'Lunas', '130.000', 'Lunas'),
(30, '20175520002', 'Heven', 'matana123', 'Teknik Informatika', '850.000', 'Lunas', '0', 'Lunas'),
(31, '20175520003', 'Prasna Lukito', 'matana123', 'Teknik Informatika', '7.750.000', 'Lunas', '1.000.000', 'Belum Lunas'),
(32, '20175520008', 'Nadya Marbel', 'matana123', 'Teknik Informatika', '0', 'Lunas', '0', 'Lunas'),
(33, '20175520009', 'Jeremy Carlo', 'matana123', 'Teknik Informatika', '100.000', 'Lunas', '100.000', 'Belum Lunas'),
(34, '20175520005', 'Anton Kurniawan', 'matana123', 'Teknik Informatika', '0', 'Lunas', '0', 'Lunas'),
(35, '20175520012', 'Thomas Susilo', 'matana123', 'Teknik Informatika', '5.250.000', 'Belum Lunas', '2.500.000', 'Belum Lunas'),
(37, '20175520013', 'Yeni Kurniawati', 'matana123', 'Teknik Informatika', '0', 'Lunas', '0', 'Lunas'),
(38, '20175520006', 'Vikrie Alfiansyah', 'matana123', 'Teknik Informatika', '900.000', 'Belum Lunas', '500.000', 'Belum Lunas'),
(39, '20175520010', 'Leo Bimo Aryaputranto', 'matana123', 'Teknik Informatika', '965.000', 'Belum Lunas', '800.000', 'Belum Lunas'),
(40, '20165520001', 'Jevon Adriel', 'matana123', 'Teknik Informatika', '10.000.000', 'Belum Lunas', '5.000.000', 'Belum Lunas'),
(41, '20175520014', 'Agung Aris Kuncoro', 'matana123', 'Teknik Informatika', '0', 'Lunas', '0', 'Lunas'),
(42, '20175520004', 'Josselyn Filipus Nathalie', 'matana123', 'Teknik Informatika', '0', 'Lunas', '0', 'Lunas'),
(43, 'test15', 'Test User Only', 'test15', 'Desain Komunikasi Visual', '180.000.000', 'Belum Lunas', '200.000.000', 'Belum Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databayar`
--
ALTER TABLE `databayar`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databayar`
--
ALTER TABLE `databayar`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
