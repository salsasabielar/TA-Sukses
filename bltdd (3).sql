-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 06:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bltdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_survey`
--

CREATE TABLE `jawaban_survey` (
  `id_jawaban` int(11) NOT NULL,
  `id_survey` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nik` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban_survey`
--

INSERT INTO `jawaban_survey` (`id_jawaban`, `id_survey`, `id_kriteria`, `nik`) VALUES
(164, 30, 17, '12232245'),
(165, 31, 16, '12232245'),
(166, 31, 9, '12232245'),
(167, 31, 7, '12232245'),
(168, 31, 4, '12232245'),
(169, 31, 3, '12232245'),
(170, 31, 1, '12232245'),
(172, 32, 17, '12232245'),
(173, 32, 14, '12232245'),
(174, 32, 11, '12232245'),
(175, 32, 10, '12232245'),
(176, 32, 4, '12232245'),
(177, 32, 3, '12232245'),
(178, 32, 2, '12232245'),
(180, 33, 17, '12232245'),
(181, 33, 16, '12232245'),
(182, 33, 14, '12232245'),
(183, 33, 13, '12232245'),
(184, 33, 12, '12232245'),
(185, 33, 9, '12232245'),
(186, 33, 6, '12232245'),
(187, 33, 4, '12232245'),
(188, 33, 2, '12232245'),
(189, 34, 17, '8754343'),
(190, 34, 16, '8754343'),
(191, 34, 15, '8754343'),
(192, 34, 14, '8754343'),
(193, 34, 13, '8754343'),
(194, 34, 12, '8754343'),
(195, 34, 11, '8754343'),
(196, 35, 17, '8754343'),
(197, 36, 1, '12232245'),
(198, 36, 2, '12232245'),
(199, 36, 3, '12232245'),
(200, 36, 4, '12232245'),
(201, 36, 5, '12232245'),
(202, 36, 6, '12232245'),
(203, 36, 7, '12232245'),
(204, 36, 8, '12232245'),
(205, 37, 1, '8754343'),
(206, 37, 2, '8754343'),
(207, 37, 3, '8754343'),
(208, 38, 1, '8754343'),
(209, 38, 2, '8754343'),
(210, 39, 1, '8754343'),
(211, 40, 1, '8754343'),
(212, 41, 1, '8754343'),
(213, 42, 1, '12232245'),
(217, 46, 1, '8754343'),
(218, 47, 1, '8754343'),
(219, 48, 1, '8754343'),
(221, 50, 1, '12232245'),
(222, 51, 1, '12232245'),
(223, 51, 2, '12232245'),
(224, 51, 3, '12232245'),
(225, 51, 4, '12232245'),
(226, 51, 5, '12232245'),
(227, 51, 6, '12232245'),
(228, 51, 7, '12232245'),
(229, 51, 8, '12232245'),
(230, 51, 9, '12232245'),
(231, 52, 1, '2454147'),
(232, 53, 1, '2454147'),
(233, 54, 1, '8754343'),
(234, 54, 2, '8754343'),
(235, 54, 3, '8754343'),
(236, 54, 13, '8754343'),
(237, 54, 14, '8754343'),
(238, 54, 15, '8754343'),
(239, 54, 16, '8754343'),
(240, 54, 17, '8754343');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`) VALUES
(1, 'Bukan Penerima PKH/BPNT/Pra Kerja/Calon penerima BST Kemensos'),
(2, 'Kehilangan mata pencaharian'),
(3, 'Belum Terdata DTKS (exclusion error)'),
(4, 'Mempunyai anggota keluarga yang rentan sakit menahun atau kronis, termasuk yang positif terkena COVID-19 dan harus melakukan isolasi diri'),
(5, 'Memiliki sumber penghasilan kurang dari RP.750.000,-/bulan'),
(6, 'Tutup usaha'),
(7, 'Pendapatan atau omset berkurang drastis akibat pandemi COVID-19'),
(8, 'Tidak mampu berobat ke pelayanan kesehatan dikarenakan tidak mempunyai uang dan jaminan kesehatan'),
(9, 'Tidak memiliki tabungan/barang yang mudah dijual/digadaikan dengan nilai gadai minimal Rp.1.000.000,-'),
(10, 'Dalam satu rumah dihuni lebih dari satu kepala keluarga'),
(11, 'Keluarga cerai (ibu-ibu kepala keluarga) yang tidak memiliki harta gono gini (harta warisan)'),
(12, 'Tidak mempunyai keluarga lain yang dapat membantu'),
(13, 'Mempunyai anggota keluarga disabilitas'),
(14, 'Rumah dengan dinding bambu/kayu murah/tembok tanpa plester'),
(15, 'Makan 1-2 kali/hari'),
(16, 'Konsumsi daging/susu/ayam hanya 1 kali/minggu'),
(17, 'Lansia (di atas 60 tahun) terlantar');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`, `jumlah`) VALUES
(1, 'Min', 6),
(2, 'Max', 10);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id_survey` int(11) NOT NULL,
  `nik` int(50) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `tglSurvey` date NOT NULL,
  `status` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_survey`, `nik`, `id_user`, `id_status`, `tglSurvey`, `status`) VALUES
(30, 12232245, NULL, NULL, '2022-06-07', 'Tidak Layak'),
(31, 12232245, NULL, NULL, '1986-06-19', 'Layak'),
(32, 12232245, NULL, NULL, '2015-10-17', 'Layak'),
(33, 12232245, NULL, NULL, '1975-04-28', 'Sangat Layak'),
(34, 8754343, NULL, NULL, '2022-06-10', 'Layak'),
(35, 8754343, NULL, NULL, '2022-06-06', 'Tidak Layak'),
(36, 12232245, NULL, NULL, '2022-06-03', 'Layak'),
(37, 8754343, NULL, NULL, '2022-06-09', 'Tidak Layak'),
(38, 8754343, NULL, NULL, '2022-06-02', 'Tidak Layak'),
(39, 8754343, NULL, NULL, '2022-06-01', 'Tidak Layak'),
(40, 8754343, NULL, NULL, '2022-06-23', 'Tidak Layak'),
(41, 8754343, NULL, NULL, '2021-03-12', 'Tidak Layak'),
(42, 12232245, NULL, NULL, '2022-06-15', 'Tidak Memenuhi'),
(46, 8754343, NULL, NULL, '2022-02-13', 'Tidak Memenuhi'),
(47, 8754343, NULL, NULL, '2021-03-11', 'Tidak Memenuhi'),
(48, 8754343, NULL, NULL, '2020-04-23', 'Tidak Memenuhi'),
(50, 12232245, NULL, NULL, '2022-06-15', 'Tidak Memenuhi'),
(51, 12232245, NULL, NULL, '2022-06-15', 'Layak'),
(52, 2454147, NULL, NULL, '2022-06-16', 'Tidak Memenuhi'),
(53, 2454147, NULL, NULL, '2022-06-06', 'Tidak Memenuhi'),
(54, 8754343, NULL, NULL, '2022-05-30', 'Layak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` enum('admin','surveyor','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '1234', 'admin'),
(3, 'surveyor', '1234', 'surveyor');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `nik` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `ket` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `nama`, `alamat`, `tempat`, `tgl_lahir`, `pekerjaan`, `jenisKelamin`, `ket`) VALUES
(2454147, 'dika', 'banu rt12 rw 02', 'malang', '1987-03-12', 'Buruh Harian Lepas', 'Laki-Laki', ''),
(8754343, 'irma', 'banu rt12 rw 02', 'malang', '2022-05-30', 'Buruh Harian Lepas', 'Perempuan', 'Sudah di survey'),
(12232245, 'salsa', 'sromo rt 1', 'malang', '2020-08-11', 'Petani', 'Perempuan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban_survey`
--
ALTER TABLE `jawaban_survey`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_survey` (`id_survey`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id_survey`),
  ADD KEY `nik` (`nik`,`id_user`,`id_status`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_survey`
--
ALTER TABLE `jawaban_survey`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_survey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban_survey`
--
ALTER TABLE `jawaban_survey`
  ADD CONSTRAINT `jawaban_survey_ibfk_1` FOREIGN KEY (`id_survey`) REFERENCES `survey` (`id_survey`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_survey_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `warga` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `survey_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
