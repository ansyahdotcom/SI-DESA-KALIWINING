-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 05:09 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaliwining`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `NO` int(3) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`NO`, `USERNAME`, `PASSWORD`) VALUES
(1, 'didin', '80f0ca7f9c9bf51dea99162632e351aa'),
(2, 'ainun', 'ainun');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `NO` int(4) NOT NULL,
  `KK` varchar(30) NOT NULL,
  `RT` varchar(3) NOT NULL,
  `RW` varchar(3) NOT NULL,
  `KEPALA` varchar(30) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`NO`, `KK`, `RT`, `RW`, `KEPALA`, `ALAMAT`) VALUES
(1, '3509191701110061', '002', '006', 'MOHAMMAD AINUN A', 'JL DHARMAWANGSA');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NO` int(5) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `KK` varchar(30) NOT NULL,
  `JK` varchar(20) NOT NULL,
  `TPT_LHR` varchar(30) NOT NULL,
  `TGL_LHR` varchar(20) NOT NULL,
  `AGAMA` varchar(10) NOT NULL,
  `PENDIDIKAN` varchar(30) NOT NULL,
  `PEKERJAAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NO`, `NAMA`, `NIK`, `KK`, `JK`, `TPT_LHR`, `TGL_LHR`, `AGAMA`, `PENDIDIKAN`, `PEKERJAAN`) VALUES
(1, 'MOHAMMAD AINUN ARDIANSYAH', '35009192305120009', '3509191706820069', 'Laki-laki', 'Jember', '17-04-1999', 'Islam', 'S2', 'Dosen'),
(2, 'SITI SHOFA ASSYIFA\'UL QULBI BARID', '35009192305120010', '3509191706820069', 'Perempuan', 'Jember', '22-04-1999', 'Islam', 'S2', 'Dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`KK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
