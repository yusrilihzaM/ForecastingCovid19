-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 06:01 PM
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
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_covid`
--

CREATE TABLE `data_covid` (
  `id_data_covid` int(11) NOT NULL,
  `tanggal_covid` date DEFAULT NULL,
  `data_covid` int(11) DEFAULT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `jenis_data` enum('Meninggal','Sembuh','Perawatan','Positif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_covid`
--

INSERT INTO `data_covid` (`id_data_covid`, `tanggal_covid`, `data_covid`, `id_kecamatan`, `jenis_data`) VALUES
(1, '2021-01-01', 571, 1, 'Positif'),
(2, '2021-01-02', 571, 1, 'Positif'),
(3, '2021-01-03', 571, 1, 'Positif'),
(4, '2021-01-04', 576, 1, 'Positif'),
(5, '2021-01-05', 576, 1, 'Positif'),
(6, '2021-01-06', 577, 1, 'Positif'),
(7, '2021-01-07', 580, 1, 'Positif'),
(8, '2021-01-08', 580, 1, 'Positif'),
(9, '2021-01-09', 584, 1, 'Positif'),
(10, '2021-01-10', 585, 1, 'Positif'),
(11, '2021-01-11', 587, 1, 'Positif'),
(12, '2021-01-12', 588, 1, 'Positif'),
(13, '2021-01-13', 589, 1, 'Positif'),
(14, '2021-01-14', 589, 1, 'Positif'),
(15, '2021-01-15', 589, 1, 'Positif'),
(16, '2021-01-16', 592, 1, 'Positif'),
(17, '2021-01-17', 592, 1, 'Positif'),
(18, '2021-01-18', 593, 1, 'Positif'),
(19, '2021-01-19', 594, 1, 'Positif'),
(20, '2021-01-20', 600, 1, 'Positif'),
(21, '2021-01-21', 600, 1, 'Positif'),
(22, '2021-01-22', 602, 1, 'Positif'),
(23, '2021-01-23', 604, 1, 'Positif'),
(24, '2021-01-24', 607, 1, 'Positif'),
(25, '2021-01-25', 607, 1, 'Positif'),
(26, '2021-01-26', 612, 1, 'Positif'),
(27, '2021-01-27', 620, 1, 'Positif'),
(28, '2021-01-28', 620, 1, 'Positif'),
(29, '2021-01-29', 625, 1, 'Positif'),
(30, '2021-01-30', 629, 1, 'Positif'),
(31, '2021-01-31', 629, 1, 'Positif'),
(32, '2021-02-01', 631, 1, 'Positif'),
(33, '2021-02-02', 632, 1, 'Positif'),
(34, '2021-02-03', 638, 1, 'Positif'),
(35, '2021-02-04', 640, 1, 'Positif'),
(36, '2021-02-05', 643, 1, 'Positif'),
(37, '2021-02-06', 643, 1, 'Positif'),
(38, '2021-02-07', 645, 1, 'Positif'),
(39, '2021-02-08', 647, 1, 'Positif'),
(40, '2021-02-09', 650, 1, 'Positif'),
(41, '2021-02-10', 660, 1, 'Positif'),
(42, '2021-02-11', 662, 1, 'Positif'),
(43, '2021-02-12', 666, 1, 'Positif'),
(44, '2021-02-13', 667, 1, 'Positif'),
(45, '2021-02-14', 672, 1, 'Positif'),
(46, '2021-02-15', 672, 1, 'Positif'),
(47, '2021-02-16', 673, 1, 'Positif'),
(48, '2021-02-17', 673, 1, 'Positif'),
(49, '2021-02-18', 673, 1, 'Positif'),
(50, '2021-02-19', 682, 1, 'Positif'),
(51, '2021-02-20', 686, 1, 'Positif'),
(52, '2021-02-21', 688, 1, 'Positif'),
(53, '2021-02-22', 689, 1, 'Positif'),
(54, '2021-02-23', 692, 1, 'Positif'),
(55, '2021-02-24', 694, 1, 'Positif'),
(56, '2021-02-25', 696, 1, 'Positif'),
(57, '2021-02-26', 696, 1, 'Positif'),
(58, '2021-02-27', 696, 1, 'Positif'),
(59, '2021-02-28', 696, 1, 'Positif'),
(60, '2021-03-01', 697, 1, 'Positif');

--
-- Triggers `data_covid`
--
DELIMITER $$
CREATE TRIGGER `bi_data_covid` BEFORE INSERT ON `data_covid` FOR EACH ROW BEGIN
DECLARE id_sebelumnya int(10);
DECLARE COUNT_id int(10);

SELECT id_data_covid INTO id_sebelumnya
FROM data_covid GROUP by id_data_covid DESC LIMIT 1;

SELECT COUNT(id_data_covid) INTO COUNT_id from data_covid;

if COUNT_id=0 THEN
	set new.id_data_covid=1;
ELSE 
	set new.id_data_covid=id_sebelumnya+1;
END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Sukomanunggal'),
(2, 'Pabean Cantikan');

-- --------------------------------------------------------

--
-- Table structure for table `parameter_beta`
--

CREATE TABLE `parameter_beta` (
  `id_beta` int(11) NOT NULL,
  `beta` double(5,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter_beta`
--

INSERT INTO `parameter_beta` (`id_beta`, `beta`) VALUES
(1, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id_perhitungan` int(11) NOT NULL,
  `id_data_covid` int(11) DEFAULT NULL,
  `ft` double(20,6) DEFAULT NULL,
  `error` double(20,6) DEFAULT NULL,
  `Et` double(20,6) DEFAULT NULL,
  `AEt` double(20,6) DEFAULT NULL,
  `alpha` double(20,6) DEFAULT NULL,
  `mape` double(20,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perhitungan`
--

INSERT INTO `perhitungan` (`id_perhitungan`, `id_data_covid`, `ft`, `error`, `Et`, `AEt`, `alpha`, `mape`) VALUES
(1, 1, 0.000000, NULL, 0.000000, 0.000000, 0.000000, NULL),
(2, 2, 571.000000, 0.000000, 0.000000, 0.000000, 0.200000, 0.000000),
(3, 3, 571.000000, 0.000000, 0.000000, 0.000000, 0.200000, 0.000000),
(4, 4, 571.000000, 5.000000, 1.000000, 1.000000, 0.200000, 0.868056),
(5, 5, 572.000000, 4.000000, 1.600000, 1.600000, 1.000000, 0.694444),
(6, 6, 576.000000, 1.000000, 1.480000, 1.480000, 1.000000, 0.173310),
(7, 7, 577.000000, 3.000000, 1.784000, 1.784000, 1.000000, 0.517241),
(8, 8, 580.000000, 0.000000, 1.427200, 1.427200, 1.000000, 0.000000),
(9, 9, 580.000000, 4.000000, 1.941760, 1.941760, 1.000000, 0.684932),
(10, 10, 584.000000, 1.000000, 1.753408, 1.753408, 1.000000, 0.170940),
(11, 11, 585.000000, 2.000000, 1.802726, 1.802726, 1.000000, 0.340716),
(12, 12, 587.000000, 1.000000, 1.642181, 1.642181, 1.000000, 0.170068),
(13, 13, 588.000000, 1.000000, 1.513745, 1.513745, 1.000000, 0.169779),
(14, 14, 589.000000, 0.000000, 1.210996, 1.210996, 1.000000, 0.000000),
(15, 15, 589.000000, 0.000000, 0.968797, 0.968797, 1.000000, 0.000000),
(16, 16, 589.000000, 3.000000, 1.375038, 1.375038, 1.000000, 0.506757),
(17, 17, 592.000000, 0.000000, 1.100030, 1.100030, 1.000000, 0.000000),
(18, 18, 592.000000, 1.000000, 1.080024, 1.080024, 1.000000, 0.168634),
(19, 19, 593.000000, 1.000000, 1.064019, 1.064019, 1.000000, 0.168350),
(20, 20, 594.000000, 6.000000, 2.051215, 2.051215, 1.000000, 1.000000),
(21, 21, 600.000000, 0.000000, 1.640972, 1.640972, 1.000000, 0.000000),
(22, 22, 600.000000, 2.000000, 1.712778, 1.712778, 1.000000, 0.332226),
(23, 23, 602.000000, 2.000000, 1.770222, 1.770222, 1.000000, 0.331126),
(24, 24, 604.000000, 3.000000, 2.016178, 2.016178, 1.000000, 0.494234),
(25, 25, 607.000000, 0.000000, 1.612942, 1.612942, 1.000000, 0.000000),
(26, 26, 607.000000, 5.000000, 2.290354, 2.290354, 1.000000, 0.816993),
(27, 27, 612.000000, 8.000000, 3.432283, 3.432283, 1.000000, 1.290323),
(28, 28, 620.000000, 0.000000, 2.745826, 2.745826, 1.000000, 0.000000),
(29, 29, 620.000000, 5.000000, 3.196661, 3.196661, 1.000000, 0.800000),
(30, 30, 625.000000, 4.000000, 3.357329, 3.357329, 1.000000, 0.635930),
(31, 31, 629.000000, 0.000000, 2.685863, 2.685863, 1.000000, 0.000000),
(32, 32, 629.000000, 2.000000, 2.548690, 2.548690, 1.000000, 0.316957),
(33, 33, 631.000000, 1.000000, 2.238952, 2.238952, 1.000000, 0.158228),
(34, 34, 632.000000, 6.000000, 2.991162, 2.991162, 1.000000, 0.940439),
(35, 35, 638.000000, 2.000000, 2.792930, 2.792930, 1.000000, 0.312500),
(36, 36, 640.000000, 3.000000, 2.834344, 2.834344, 1.000000, 0.466563),
(37, 37, 643.000000, 0.000000, 2.267475, 2.267475, 1.000000, 0.000000),
(38, 38, 643.000000, 2.000000, 2.213980, 2.213980, 1.000000, 0.310078),
(39, 39, 645.000000, 2.000000, 2.171184, 2.171184, 1.000000, 0.309119),
(40, 40, 647.000000, 3.000000, 2.336947, 2.336947, 1.000000, 0.461538),
(41, 41, 650.000000, 10.000000, 3.869558, 3.869558, 1.000000, 1.515152),
(42, 42, 660.000000, 2.000000, 3.495646, 3.495646, 1.000000, 0.302115),
(43, 43, 662.000000, 4.000000, 3.596517, 3.596517, 1.000000, 0.600601),
(44, 44, 666.000000, 1.000000, 3.077214, 3.077214, 1.000000, 0.149925),
(45, 45, 667.000000, 5.000000, 3.461771, 3.461771, 1.000000, 0.744048),
(46, 46, 672.000000, 0.000000, 2.769417, 2.769417, 1.000000, 0.000000),
(47, 47, 672.000000, 1.000000, 2.415534, 2.415534, 1.000000, 0.148588),
(48, 48, 673.000000, 0.000000, 1.932427, 1.932427, 1.000000, 0.000000),
(49, 49, 673.000000, 0.000000, 1.545942, 1.545942, 1.000000, 0.000000),
(50, 50, 673.000000, 9.000000, 3.036754, 3.036754, 1.000000, 1.319648),
(51, 51, 682.000000, 4.000000, 3.229403, 3.229403, 1.000000, 0.583090),
(52, 52, 686.000000, 2.000000, 2.983522, 2.983522, 1.000000, 0.290698),
(53, 53, 688.000000, 1.000000, 2.586818, 2.586818, 1.000000, 0.145138),
(54, 54, 689.000000, 3.000000, 2.669454, 2.669454, 1.000000, 0.433526),
(55, 55, 692.000000, 2.000000, 2.535563, 2.535563, 1.000000, 0.288184),
(56, 56, 694.000000, 2.000000, 2.428450, 2.428450, 1.000000, 0.287356),
(57, 57, 696.000000, 0.000000, 1.942760, 1.942760, 1.000000, 0.000000),
(58, 58, 696.000000, 0.000000, 1.554208, 1.554208, 1.000000, 0.000000),
(59, 59, 696.000000, 0.000000, 1.243366, 1.243366, 1.000000, 0.000000),
(60, 60, 696.000000, 1.000000, 1.194693, 1.194693, 1.000000, 0.143472);

--
-- Triggers `perhitungan`
--
DELIMITER $$
CREATE TRIGGER `bi_perhitungan` BEFORE INSERT ON `perhitungan` FOR EACH ROW BEGIN
DECLARE id_sebelumnya int(10);
DECLARE COUNT_id int(10);

SELECT id_perhitungan INTO id_sebelumnya
FROM perhitungan GROUP by id_perhitungan DESC LIMIT 1;

SELECT COUNT(id_perhitungan) INTO COUNT_id from perhitungan;

if COUNT_id=0 THEN
	set new.id_perhitungan=1;
	
ELSE 
	set new.id_perhitungan=id_sebelumnya+1;
	
END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$xyJzbC4Q8FMkI/8ivcCD0er5SBKlua3wU5qHaBkC.A55dj7qdbkYe', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_covid`
--
ALTER TABLE `data_covid`
  ADD PRIMARY KEY (`id_data_covid`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `parameter_beta`
--
ALTER TABLE `parameter_beta`
  ADD PRIMARY KEY (`id_beta`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`),
  ADD KEY `id_data_covid` (`id_data_covid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_covid`
--
ALTER TABLE `data_covid`
  ADD CONSTRAINT `data_covid_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD CONSTRAINT `perhitungan_ibfk_1` FOREIGN KEY (`id_data_covid`) REFERENCES `data_covid` (`id_data_covid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
