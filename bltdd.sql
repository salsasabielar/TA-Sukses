-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 04:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `tglSurvey` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'irma', '1234', 'surveyor'),
(3, 'salsaaa', '12345', 'admin');

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
  `jenisKelamin` enum('Laki-Laki','Perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `nama`, `alamat`, `tempat`, `tgl_lahir`, `pekerjaan`, `jenisKelamin`) VALUES
(3267688, 'irma', 'banu rt12 rw 02', 'malang', '2022-05-19', 'Wiraswasta', 'Perempuan'),
(12232245, 'salsa', 'sromo rt 1', 'malang', '2020-08-11', 'Petani', 'Perempuan');

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
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_survey` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
