-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 08:03 AM
-- Server version: 11.6.2-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grcl2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `murid` varchar(2) NOT NULL,
  `guru` varchar(2) NOT NULL,
  `hadir` varchar(1) NOT NULL COMMENT 'y dan t'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(150) NOT NULL,
  `notelp` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `role` varchar(1) NOT NULL COMMENT '1 for admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama_guru`, `notelp`, `alamat`, `role`) VALUES
(1, 'Graciela Shiomi', '082154646', 'Ki Hajar', '1'),
(2, 'Mary Graciela', '08456456', 'Jl', '1'),
(3, 'Ferdinand', '082194789333', 'Jl. Petobo', '0'),
(5, 'jetro', '092121', 'btn petobo', '2'),
(6, 'deon', '00112233', 'BTN Permai', '1'),
(7, 'jose', '0909', 'Nomaden', '2');

-- --------------------------------------------------------

--
-- Table structure for table `data_murid`
--

CREATE TABLE `data_murid` (
  `id` int(11) NOT NULL,
  `nama_murid` varchar(150) NOT NULL,
  `wali` varchar(150) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `data_murid`
--

INSERT INTO `data_murid` (`id`, `nama_murid`, `wali`, `notelp`) VALUES
(1, 'Arthur', 'Mama arthur', '082121'),
(2, 'Joycelyn', 'Mama joc', '021212121'),
(3, 'Altair', 'Ortu altair', '01212121');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `namamurid` varchar(150) NOT NULL,
  `namaguru` int(150) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(8) NOT NULL COMMENT 'format hh:mm',
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `namamurid`, `namaguru`, `hari`, `jam`, `keterangan`) VALUES
(1, '1', 1, '4', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nama_hari`
--

CREATE TABLE `nama_hari` (
  `id` int(11) NOT NULL,
  `nama_hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `nama_hari`
--

INSERT INTO `nama_hari` (`id`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_murid`
--
ALTER TABLE `data_murid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_hari`
--
ALTER TABLE `nama_hari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_murid`
--
ALTER TABLE `data_murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nama_hari`
--
ALTER TABLE `nama_hari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
