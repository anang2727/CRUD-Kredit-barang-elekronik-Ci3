-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 08:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_elektronik`
--

CREATE TABLE `tb_elektronik` (
  `KE` int(4) NOT NULL,
  `KL` int(2) NOT NULL,
  `KA` int(2) NOT NULL,
  `KUA` int(2) NOT NULL,
  `NE` varchar(18) NOT NULL,
  `MEREK` varchar(18) NOT NULL,
  `SATUAN` varchar(12) NOT NULL,
  `JENIS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_elektronik`
--

INSERT INTO `tb_elektronik` (`KE`, `KL`, `KA`, `KUA`, `NE`, `MEREK`, `SATUAN`, `JENIS`) VALUES
(1, 1, 1, 13, 'Kulkas', '', '', ''),
(3, 1, 1, 13, '3', '3', '3', '3'),
(1111, 1, 1, 12, 'Kulkas', 'Panasonic', '1', 'Elektronik'),
(1113, 1, 1, 12, 'Kulkas', 'Panasonic', '1', 'Elektronik'),
(1123, 1, 1, 12, 'Kulkas', 'Panasonic', '1', 'Elektronik'),
(1299, 10, 1, 13, 'TV', 'Panasonic', '3', 'Elektronik'),
(143314, 1, 1, 13, '', '', '', ''),
(143316, 13, 1, 15, 'Televisi', 'GLG', '3', 'Elektronik'),
(143322, 10, 1, 15, 'Kulkas', 'Panasonic', '1          ', 'Elektronik'),
(143323, 34, 1, 16, 'Kulkas', 'Panasonic', '1', 'Elektronik'),
(143324, 37, 6, 17, 'Televisi', 'Toshiba', '1', 'Elektronik'),
(143325, 30, 5, 17, 'Ac', 'Panasonic', '2', 'Elektronik'),
(143326, 28, 5, 16, 'Blemder', 'ACC', '3', 'Elektrik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kreditur`
--

CREATE TABLE `tb_kreditur` (
  `NK` int(6) NOT NULL,
  `NMK` varchar(25) NOT NULL,
  `AK` varchar(25) NOT NULL,
  `PEKER` varchar(15) NOT NULL,
  `NO_HP` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kreditur`
--

INSERT INTO `tb_kreditur` (`NK`, `NMK`, `AK`, `PEKER`, `NO_HP`) VALUES
(13, 'Anang', 'Ulee Jalan', 'Mahasiwa', '82370646625'),
(14, 'Rizki Kusiara', 'Takengon', 'Siswa', '8278388389'),
(15, 'Randa ', 'Matang', 'PELAJAR', '82370646625');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lama_angsuran`
--

CREATE TABLE `tb_lama_angsuran` (
  `KL` int(2) NOT NULL,
  `LAMA` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_lama_angsuran`
--

INSERT INTO `tb_lama_angsuran` (`KL`, `LAMA`) VALUES
(25, '1 Bulan'),
(26, '2 Bulan'),
(27, '3 Bulan'),
(28, '4 Bulan'),
(29, '5 Bulan'),
(30, '6 Bulan'),
(31, '7 Bulan'),
(32, '8 Bulan'),
(33, '10 Bulan'),
(34, '11 Bulan'),
(35, '1 Tahun'),
(36, '1.5 Tahun'),
(37, '2 Tahun'),
(38, '3 Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `KDP` int(5) NOT NULL,
  `NP` varchar(25) NOT NULL,
  `AP` varchar(15) NOT NULL,
  `NO_HP` int(12) NOT NULL,
  `JK` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`KDP`, `NP`, `AP`, `NO_HP`, `JK`) VALUES
(7, 'Saki', 'Peusangan', 0, 'wanita'),
(11, 'ww', 'ww', 0, 'pria'),
(12, 'rwt', 'jha', 0, 'pria'),
(13, 'dddd', 'ddd', 0, 'pria');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `NB` int(8) NOT NULL,
  `TBTP` date NOT NULL,
  `JMA` int(9) NOT NULL,
  `AA` int(2) NOT NULL,
  `NAM` int(4) NOT NULL,
  `KDP` int(5) NOT NULL,
  `NK` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`NB`, `TBTP`, `JMA`, `AA`, `NAM`, `KDP`, `NK`) VALUES
(226, '0000-00-00', 22222, 2, 8777333, 7, 13),
(227, '0000-00-00', 6565355, 5, 8777333, 12, 14),
(228, '2023-06-11', 0, 3, 8777333, 12, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengambilan`
--

CREATE TABLE `tb_pengambilan` (
  `NAM` int(4) NOT NULL,
  `TBTP` date NOT NULL,
  `JML` int(2) NOT NULL,
  `KET` varchar(10) NOT NULL,
  `NK` int(6) NOT NULL,
  `KE` int(4) NOT NULL,
  `KA` int(2) NOT NULL,
  `KUA` int(2) NOT NULL,
  `KL` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pengambilan`
--

INSERT INTO `tb_pengambilan` (`NAM`, `TBTP`, `JML`, `KET`, `NK`, `KE`, `KA`, `KUA`, `KL`) VALUES
(1, '0000-00-00', 0, '', 0, 1111, 1, 12, 0),
(2, '0000-00-00', 0, '', 0, 1111, 1, 12, 0),
(222, '0000-00-00', 0, '', 1, 1111, 1, 12, 0),
(2223, '0000-00-00', 0, '', 1, 1111, 1, 12, 0),
(3324, '0000-00-00', 12000, 'Elektronik', 1, 143315, 1, 15, 10),
(33311, '2023-05-02', 32, '1323', 1, 1111, 1, 12, 0),
(33312, '0000-00-00', 0, '', 6, 1111, 1, 12, 0),
(33323, '2023-06-14', 12000, 'Elektronik', 1, 3, 1, 13, 1),
(33324, '2023-07-06', 32, '22222SDASD', 1, 3, 1, 14, 2),
(33325, '0000-00-00', 0, '', 1, 3, 1, 14, 1),
(33326, '0000-00-00', 0, '', 1, 3, 1, 13, 1),
(33327, '0000-00-00', 0, '', 1, 3, 1, 13, 1),
(33328, '0000-00-00', 230000, 'Bukan Elek', 1, 3, 1, 13, 1),
(33329, '0000-00-00', 0, '', 1, 0, 1, 13, 1),
(33332, '0000-00-00', 0, '', 1, 143322, 5, 15, 14),
(33333, '0000-00-00', 12000, '1323', 1, 143322, 1, 15, 10),
(33334, '0000-00-00', 0, '', 1, 143322, 1, 15, 10),
(33335, '0000-00-00', 0, '', 1, 143322, 1, 18, 10),
(33336, '0000-00-00', 0, '', 1, 143322, 1, 15, 16),
(8777333, '2023-06-26', 12000, 'Elektronik', 13, 143323, 6, 15, 37),
(333313333, '0000-00-00', 0, '', 6, 143315, 1, 15, 14),
(333313334, '0000-00-00', 0, 'Elektronik', 14, 143323, 1, 15, 35),
(333313336, '2023-06-11', 4, 'Elektronik', 14, 143326, 1, 15, 25);

-- --------------------------------------------------------

--
-- Table structure for table `tb_uang_angsuran`
--

CREATE TABLE `tb_uang_angsuran` (
  `KA` int(2) NOT NULL,
  `UA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_uang_angsuran`
--

INSERT INTO `tb_uang_angsuran` (`KA`, `UA`) VALUES
(1, 'Rp.1000.000'),
(4, 'Rp.150.000'),
(5, 'Rp.2000.000'),
(6, 'Rp.800.000'),
(7, 'Rp.500.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_uang_muka`
--

CREATE TABLE `tb_uang_muka` (
  `KUA` int(2) NOT NULL,
  `UM` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_uang_muka`
--

INSERT INTO `tb_uang_muka` (`KUA`, `UM`) VALUES
(15, 'Rp.1000.000'),
(16, 'Rp.280.000'),
(17, 'Rp.500.000'),
(18, 'Rp.250.000'),
(19, 'Rp.350.000'),
(20, 'Rp.1.500.000'),
(22, 'Rp. 2.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_elektronik`
--
ALTER TABLE `tb_elektronik`
  ADD PRIMARY KEY (`KE`);

--
-- Indexes for table `tb_kreditur`
--
ALTER TABLE `tb_kreditur`
  ADD PRIMARY KEY (`NK`);

--
-- Indexes for table `tb_lama_angsuran`
--
ALTER TABLE `tb_lama_angsuran`
  ADD PRIMARY KEY (`KL`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`KDP`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`NB`);

--
-- Indexes for table `tb_pengambilan`
--
ALTER TABLE `tb_pengambilan`
  ADD PRIMARY KEY (`NAM`);

--
-- Indexes for table `tb_uang_angsuran`
--
ALTER TABLE `tb_uang_angsuran`
  ADD PRIMARY KEY (`KA`);

--
-- Indexes for table `tb_uang_muka`
--
ALTER TABLE `tb_uang_muka`
  ADD PRIMARY KEY (`KUA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_elektronik`
--
ALTER TABLE `tb_elektronik`
  MODIFY `KE` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143327;

--
-- AUTO_INCREMENT for table `tb_kreditur`
--
ALTER TABLE `tb_kreditur`
  MODIFY `NK` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_lama_angsuran`
--
ALTER TABLE `tb_lama_angsuran`
  MODIFY `KL` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `KDP` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `NB` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `tb_pengambilan`
--
ALTER TABLE `tb_pengambilan`
  MODIFY `NAM` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333313337;

--
-- AUTO_INCREMENT for table `tb_uang_angsuran`
--
ALTER TABLE `tb_uang_angsuran`
  MODIFY `KA` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_uang_muka`
--
ALTER TABLE `tb_uang_muka`
  MODIFY `KUA` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
