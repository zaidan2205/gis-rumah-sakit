-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-rumkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rumkit`
--

CREATE TABLE `tbl_rumkit` (
  `id_rumkit` int(11) NOT NULL,
  `nama_rumkit` varchar(50) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rumkit`
--

INSERT INTO `tbl_rumkit` (`id_rumkit`, `nama_rumkit`, `no_telpon`, `alamat`, `latitude`, `longitude`, `deskripsi`) VALUES
(10, 'Rumah Sakit Umum Daerah Prof. Dr. Margono Soekarjo', '(0281) 632708', 'Jl. Dr. Gumbreg No.1 Kebontebu, Berkoh Purwokerto Selatan Banyumas Regency, Central Java 53146, Indonesia', '-7.437370345730127', '109.26751998025485', 'Rumah Sakit Umum'),
(11, 'RSU Siaga Medika Banyumas', '(0281) 796645', 'Jl. Pramuka No.55 Mruyung, Sudagaran Kec. Banyumas Kabupaten Banyumas, Jawa Tengah 53192, Indonesia', '-7.525706451584537', '109.29345700876465', 'Rumah Sakit Umum'),
(12, 'RSUD Banyumas', '0281796182', 'Jl. Rumah Sakit No.1 Karangpucung, Kejawar Banyumas Banyumas Regency, Central Java 53192, Indonesia', '-7.529790817630776', '109.29238412515869', 'Rumah Sakit Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_rumkit`
--
ALTER TABLE `tbl_rumkit`
  ADD PRIMARY KEY (`id_rumkit`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_rumkit`
--
ALTER TABLE `tbl_rumkit`
  MODIFY `id_rumkit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
