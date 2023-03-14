-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 11:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tlpn` varchar(13) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `RT` char(5) NOT NULL,
  `RW` char(5) NOT NULL,
  `domisili` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `tlpn`, `Email`, `RT`, `RW`, `domisili`) VALUES
('3213220101010003', 'Ambaro', 'ambaro', 'e4e791328893532c1df1d061e94f46af', '088888888888', '', '', '', ''),
('3213240009090002', 'Aminudin', 'aminudin', 'a5e2c477deef9c3cb8b78c5f33229a09', '089888888888', '', '', '', ''),
('32322124', '', 'tefar', '$2y$10$Uwr1a8VP/stOLMDPCLc/g.ymn', '12313', 'suiii@gmail.com', '', '', ''),
('3232212411', '', 'tfs', '$2y$10$glodTx4.XRYSwvrlcnBaZO73J', '1241141', 'suiii@gmail.com', '', '', ''),
('3232212411123', '', 'tfs', '$2y$10$oRiez09apHJ2nAs2F0iPCu79D', '1241141', 'suiii@gmail.com', '', '', ''),
('32322124111232', 'tegar firman', 'tfs', '$2y$10$cQ4PE6UWNzjXdFELhpSmneXsH', '1241141', 'suiii@gmail.com', '', '', ''),
('3232212411123211', 'tegar', 'tfsid', '$2y$10$JxOWE84jWkMkkm6a6EMqDe3/r', '1241141', 'aijkhngoiaheniu@gmail.com', '10', '05', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`, `subject`) VALUES
(2, '2023-01-24', '3213220101010003', 'Jalan Lintas Kota mengalami Kerusakan', 'foto1.jpg', 'selesai', ''),
(5, '2023-01-25', '3213240009090002', 'ruas jalan', '818500910_1740a66d75c848b38c85ade20a2505e2.jpg', 'proses', ''),
(7, '0000-00-00', '3232212411123211', 'wawawawawwaw', '', '0', ''),
(8, '0000-00-00', '3232212411123211', 'erroororororro', '', '0', ''),
(19, '0000-00-00', '3232212411123211', 'Perbaikan fitur edit di grocery', '', 'selesai', 'fixing bug'),
(20, '2023-03-12', '3232212411123211', 'ada udang dibalik batu', '', 'proses', 'cmiiw'),
(21, '2023-03-13', '3232212411123211', 'fawfw', '', 'proses', 'utiet');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
(2, 'Petugas', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', '', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(3, 1, '2023-01-24', 'Baik Akan kami proses', 1),
(4, 1, '2023-01-24', 'Selesai Kami Proses', 1),
(5, 2, '2023-01-24', 'tunggu kak', 1),
(6, 2, '2023-01-25', 'Selesai kami perbaiki', 2),
(7, 5, '2023-01-25', 'sedang di proses', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `petugas` (`id_petugas`),
  ADD KEY `id_pengaduan` (`id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `nik` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
