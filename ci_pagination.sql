-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2018 at 11:08 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_mahasiswa_kelas`
--

CREATE TABLE `detail_mahasiswa_kelas` (
  `id_kelas` int(11) DEFAULT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_mahasiswa_kelas`
--

INSERT INTO `detail_mahasiswa_kelas` (`id_kelas`, `id_mahasiswa`) VALUES
(1, 1),
(1, 7),
(5, 5),
(5, 2),
(9, 3),
(9, 4),
(10, 6),
(10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `tingkat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `tingkat`) VALUES
(1, 'TI - 1A', 1),
(2, 'TI - 1B', 1),
(3, 'TI - 1C', 1),
(4, 'TI - 2A', 2),
(5, 'TI - 2B', 2),
(6, 'TI - 2C', 2),
(7, 'TI - 3A', 3),
(8, 'TI - 3B', 3),
(9, 'TI - 3C', 3),
(10, 'TI - 4A', 4),
(11, 'TI - 4B', 4),
(12, 'TI - 4C', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nim` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `alamat`) VALUES
(1, 1641720032, 'Budi', 'jl galunggung 2'),
(2, 1641720003, 'siti', 'jl mergosono'),
(3, 1641720039, 'sulistyo', 'jl mojokerto'),
(4, 1641720004, 'suriah isa', 'jl gadang'),
(5, 164202156, 'satya', 'jl galunggung 299'),
(6, 1441180121, 'Raka Admiral A.', 'Bekasi'),
(7, 1641720038, 'Fajar Lukman', 'Malang'),
(8, 1441180013, 'Zanuar Hanif Rachmat Adi', 'Magetan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_mahasiswa_kelas`
--
ALTER TABLE `detail_mahasiswa_kelas`
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_mahasiswa_kelas`
--
ALTER TABLE `detail_mahasiswa_kelas`
  ADD CONSTRAINT `detail_mahasiswa_kelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `detail_mahasiswa_kelas_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
