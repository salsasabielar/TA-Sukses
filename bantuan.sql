-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 06:56 AM
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
-- Database: `bantuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `nama`) VALUES
(1, 'bltdd');

-- --------------------------------------------------------

--
-- Table structure for table `bantuan_warga`
--

CREATE TABLE `bantuan_warga` (
  `id_bantuanWarga` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `datapenerima`
--

CREATE TABLE `datapenerima` (
  `id_penerima` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `jenisKelamin` varchar(225) NOT NULL,
  `k1` tinyint(1) NOT NULL,
  `k2` tinyint(1) NOT NULL,
  `k3` tinyint(1) NOT NULL,
  `k4` tinyint(1) NOT NULL,
  `k5` tinyint(1) NOT NULL,
  `k6` tinyint(1) NOT NULL,
  `k7` tinyint(1) NOT NULL,
  `k8` tinyint(1) NOT NULL,
  `k9` tinyint(1) NOT NULL,
  `k10` tinyint(1) NOT NULL,
  `k11` tinyint(1) NOT NULL,
  `k12` tinyint(1) NOT NULL,
  `k13` tinyint(1) NOT NULL,
  `k14` tinyint(1) NOT NULL,
  `k15` tinyint(1) NOT NULL,
  `k16` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapenerima`
--

INSERT INTO `datapenerima` (`id_penerima`, `nik`, `nama`, `ttl`, `pekerjaan`, `jenisKelamin`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`, `k11`, `k12`, `k13`, `k14`, `k15`, `k16`) VALUES
(4, 5789976, 'Rosya', 'Malang, 12-02-2000', 'Pedagang', 'perempuan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 32476898, 'Ristanti', 'Malang, 16-08-2000', 'Petani', 'perempuan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_terhapus`
--

CREATE TABLE `data_terhapus` (
  `id_terhapus` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alasan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_terhapus`
--

INSERT INTO `data_terhapus` (`id_terhapus`, `nik`, `nama`, `alamat`, `ttl`, `pekerjaan`, `jenisKelamin`, `status`, `alasan`) VALUES
(43, '3267688', 'irma', 'ngantang', '', '', '', 'Tidak Layak', 'KPM Tidak Ditemukan'),
(44, '13256576', 'salsa', 'banu rt12 rw 02', 'Malang, 12-02-2000', 'Petani', 'perempuan', 'Layak', 'Tidak Layak'),
(48, '878766', 'mikha', 'sromo rt 1 rw 01', '1989-11-08', 'buruh lepas harian', 'perempuan', 'Layak', 'Pindah Domisili'),
(49, '4354786', 'coba', 'Sromo Rt.003 Rw.001 ', '2020-07-13', 'Petani', 'Laki-Laki', 'Tidak Layak', 'Pindah Domisili');

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
(3, 'Bukan Penerima PKH/BPNT/Pra Kerja/Calon penerima BST Kemensos'),
(9, 'Kehilangan mata pencaharian'),
(10, 'Belum Terdata DTKS (exclusion error)'),
(11, 'Mempunyai anggota keluarga yang rentan sakit menahun atau kronis, termasuk yang positif terkena COVID-19 dan harus melakukan isolasi diri'),
(12, 'Memiliki sumber penghasilan kurang dari RP.750.000,-/bulan'),
(13, 'Tutup usaha'),
(14, 'Pendapatan atau omset berkurang drastis akibat pandemi COVID-19'),
(15, 'Tidak mampu berobat ke pelayanan kesehatan dikarenakan tidak mempunyai uang dan jaminan kesehatan'),
(16, 'Tidak memiliki tabungan/barang yang mudah dijual/digadaikan dengan nilai gadai minimal Rp.1.000.000,-'),
(17, 'Dalam satu rumah dihuni lebih dari satu kepala keluarga'),
(18, 'Keluarga cerai (ibu-ibu kepala keluarga) yang tidak memiliki harta gono gini (harta warisan)'),
(19, 'Tidak mempunyai keluarga lain yang dapat membantu'),
(20, 'Mempunyai anggota keluarga disabilitas'),
(21, 'Rumah dengan dinding bambu/kayu murah/tembok tanpa plester'),
(22, 'Makan 1-2 kali/hari'),
(23, 'Konsumsi daging/susu/ayam hanya 1 kali/minggu'),
(24, 'Lansia (di atas 60 tahun) terlantar');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_warga`
--

CREATE TABLE `kriteria_warga` (
  `id_kriteriaWarga` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_warga`
--

INSERT INTO `kriteria_warga` (`id_kriteriaWarga`, `id_kriteria`, `id_warga`) VALUES
(1, 3, 20),
(2, 9, 20),
(3, 10, 20),
(4, 11, 20),
(5, 12, 20),
(6, 13, 20),
(7, 14, 20),
(8, 9, 21),
(9, 10, 21),
(10, 11, 21),
(11, 12, 21),
(12, 13, 21),
(13, 14, 21),
(14, 15, 21),
(15, 3, 22),
(16, 9, 22),
(17, 10, 22),
(18, 11, 22),
(19, 12, 22),
(20, 13, 22),
(21, 14, 22),
(22, 3, 23),
(23, 9, 23),
(24, 10, 23),
(25, 11, 23),
(26, 12, 23),
(27, 13, 23),
(28, 14, 23),
(29, 15, 23),
(30, 3, 24),
(31, 9, 24),
(32, 10, 24),
(33, 11, 24),
(34, 12, 24),
(35, 13, 24),
(36, 14, 24),
(37, 15, 24),
(38, 9, 25),
(39, 10, 25),
(40, 11, 25),
(41, 12, 25),
(42, 13, 25),
(43, 14, 25),
(44, 15, 25),
(45, 19, 25),
(46, 20, 25),
(47, 3, 26),
(48, 9, 26),
(49, 10, 26),
(50, 11, 26),
(51, 9, 27),
(52, 10, 27),
(53, 11, 27),
(54, 3, 28),
(55, 9, 28),
(56, 10, 28),
(57, 11, 28),
(58, 3, 29),
(59, 9, 29),
(60, 10, 29),
(61, 11, 29),
(62, 12, 29),
(63, 13, 29),
(64, 14, 29),
(65, 15, 29),
(66, 3, 30),
(67, 9, 30),
(68, 10, 30),
(69, 11, 30),
(70, 12, 30),
(71, 3, 31),
(72, 9, 31),
(73, 10, 31),
(74, 11, 31),
(75, 12, 31),
(76, 13, 31),
(77, 14, 31),
(78, 3, 32),
(79, 9, 32),
(80, 10, 32),
(81, 11, 32),
(82, 12, 32),
(83, 13, 32),
(84, 14, 32),
(101, 9, 34),
(102, 10, 34),
(103, 11, 34),
(104, 12, 34),
(105, 13, 34),
(106, 14, 34),
(107, 15, 34),
(108, 16, 34),
(109, 17, 34),
(110, 18, 34),
(111, 9, 35),
(112, 11, 35),
(113, 13, 35),
(114, 3, 37),
(115, 9, 37),
(116, 9, 39),
(117, 10, 39),
(118, 11, 39),
(119, 12, 39),
(120, 13, 39),
(121, 14, 39),
(122, 15, 39),
(123, 16, 39),
(124, 17, 39),
(165, 9, 33),
(166, 10, 33),
(167, 11, 33),
(168, 12, 33),
(169, 13, 33),
(170, 14, 33),
(171, 15, 33),
(172, 16, 33),
(173, 3, 40),
(174, 9, 40),
(175, 10, 40),
(176, 11, 40),
(177, 12, 40),
(178, 13, 40),
(179, 14, 40),
(180, 15, 40),
(181, 16, 40),
(182, 9, 42),
(183, 10, 42),
(184, 11, 42),
(185, 12, 42),
(186, 13, 42),
(187, 14, 42),
(188, 15, 42),
(189, 16, 42),
(190, 17, 42),
(191, 18, 42),
(192, 3, 43),
(193, 10, 43),
(194, 12, 43),
(195, 14, 43),
(196, 15, 43),
(197, 16, 43),
(198, 18, 43),
(199, 19, 43),
(200, 22, 43),
(201, 23, 43),
(202, 3, 44),
(203, 10, 44),
(204, 12, 44),
(205, 13, 44),
(206, 14, 44),
(207, 16, 44),
(208, 17, 44),
(209, 19, 44),
(210, 22, 44),
(211, 23, 44),
(212, 3, 45),
(213, 10, 45),
(214, 12, 45),
(215, 14, 45),
(216, 15, 45),
(217, 16, 45),
(218, 17, 45),
(219, 18, 45),
(220, 19, 45),
(221, 22, 45),
(222, 23, 45),
(223, 3, 46),
(224, 10, 46),
(225, 12, 46),
(226, 14, 46),
(227, 15, 46),
(228, 16, 46),
(229, 18, 46),
(230, 19, 46),
(231, 22, 46),
(232, 23, 46),
(233, 3, 47),
(234, 10, 47),
(235, 12, 47),
(236, 13, 47),
(237, 14, 47),
(238, 15, 47),
(239, 17, 47),
(240, 19, 47),
(241, 22, 47),
(242, 3, 48),
(243, 10, 48),
(244, 12, 48),
(245, 13, 48),
(246, 14, 48),
(247, 15, 48),
(248, 16, 48),
(249, 18, 48),
(250, 19, 48),
(251, 22, 48),
(252, 23, 48),
(253, 3, 49),
(254, 11, 49),
(255, 12, 49),
(256, 14, 49),
(257, 16, 49),
(258, 17, 49),
(259, 19, 49),
(260, 22, 49),
(261, 23, 49),
(262, 3, 50),
(263, 10, 50),
(264, 11, 50),
(265, 12, 50),
(266, 13, 50),
(267, 14, 50),
(268, 15, 50),
(269, 16, 50),
(270, 18, 50),
(271, 19, 50),
(272, 22, 50),
(273, 23, 50),
(274, 3, 51),
(275, 10, 51),
(276, 12, 51),
(277, 14, 51),
(278, 15, 51),
(279, 16, 51),
(280, 19, 51),
(281, 22, 51),
(282, 23, 51),
(283, 3, 52),
(284, 10, 52),
(285, 12, 52),
(286, 14, 52),
(287, 16, 52),
(288, 18, 52),
(289, 19, 52),
(290, 22, 52),
(291, 3, 53),
(292, 10, 53),
(293, 12, 53),
(294, 14, 53),
(295, 15, 53),
(296, 16, 53),
(297, 17, 53),
(298, 18, 53),
(299, 19, 53),
(300, 22, 53),
(301, 23, 53),
(302, 3, 54),
(303, 10, 54),
(304, 12, 54),
(305, 13, 54),
(306, 14, 54),
(307, 16, 54),
(308, 17, 54),
(309, 18, 54),
(310, 19, 54),
(311, 22, 54),
(312, 3, 55),
(313, 10, 55),
(314, 12, 55),
(315, 13, 55),
(316, 14, 55),
(317, 16, 55),
(318, 19, 55),
(319, 22, 55),
(320, 3, 56),
(321, 10, 56),
(322, 12, 56),
(323, 14, 56),
(324, 16, 56),
(325, 18, 56),
(326, 19, 56),
(327, 22, 56),
(328, 3, 57),
(329, 9, 57),
(330, 12, 57),
(331, 13, 57),
(332, 14, 57),
(333, 15, 57),
(334, 16, 57),
(335, 19, 57),
(336, 22, 57),
(337, 23, 57),
(338, 3, 58),
(339, 10, 58),
(340, 12, 58),
(341, 14, 58),
(342, 15, 58),
(343, 16, 58),
(344, 18, 58),
(345, 19, 58),
(346, 22, 58),
(347, 23, 58),
(348, 3, 59),
(349, 10, 59),
(350, 12, 59),
(351, 14, 59),
(352, 15, 59),
(353, 16, 59),
(354, 18, 59),
(355, 19, 59),
(356, 22, 59),
(357, 23, 59),
(358, 3, 60),
(359, 10, 60),
(360, 12, 60),
(361, 13, 60),
(362, 14, 60),
(363, 16, 60),
(364, 18, 60),
(365, 21, 60),
(366, 22, 60),
(367, 23, 60),
(368, 24, 60),
(369, 3, 61),
(370, 10, 61),
(371, 12, 61),
(372, 13, 61),
(373, 14, 61),
(374, 15, 61),
(375, 16, 61),
(376, 18, 61),
(377, 19, 61),
(378, 21, 61),
(379, 22, 61),
(380, 23, 61),
(381, 3, 62),
(382, 11, 62),
(383, 12, 62),
(384, 14, 62),
(385, 15, 62),
(386, 16, 62),
(387, 18, 62),
(388, 19, 62),
(389, 22, 62),
(390, 24, 62),
(391, 3, 63),
(392, 10, 63),
(393, 12, 63),
(394, 13, 63),
(395, 14, 63),
(396, 16, 63),
(397, 18, 63),
(398, 19, 63),
(399, 22, 63),
(400, 23, 63),
(401, 24, 63),
(402, 3, 64),
(403, 10, 64),
(404, 12, 64),
(405, 14, 64),
(406, 16, 64),
(407, 18, 64),
(408, 21, 64),
(409, 22, 64),
(410, 23, 64),
(411, 3, 65),
(412, 10, 65),
(413, 12, 65),
(414, 14, 65),
(415, 16, 65),
(416, 18, 65),
(417, 19, 65),
(418, 21, 65),
(419, 22, 65),
(420, 23, 65),
(421, 24, 65),
(422, 3, 66),
(423, 10, 66),
(424, 12, 66),
(425, 13, 66),
(426, 14, 66),
(427, 16, 66),
(428, 18, 66),
(429, 19, 66),
(430, 21, 66),
(431, 22, 66),
(432, 23, 66),
(433, 3, 67),
(434, 10, 67),
(435, 12, 67),
(436, 13, 67),
(437, 14, 67),
(438, 15, 67),
(439, 16, 67),
(440, 19, 67),
(441, 20, 67),
(442, 21, 67),
(443, 22, 67),
(444, 23, 67),
(445, 24, 67),
(446, 3, 68),
(447, 10, 68),
(448, 12, 68),
(449, 14, 68),
(450, 16, 68),
(451, 19, 68),
(452, 21, 68),
(453, 22, 68),
(454, 23, 68),
(455, 3, 69),
(456, 10, 69),
(457, 12, 69),
(458, 14, 69),
(459, 16, 69),
(460, 18, 69),
(461, 19, 69),
(462, 21, 69),
(463, 22, 69),
(464, 23, 69),
(465, 24, 69),
(466, 3, 70),
(467, 10, 70),
(468, 12, 70),
(469, 13, 70),
(470, 14, 70),
(471, 16, 70),
(472, 18, 70),
(473, 19, 70),
(474, 21, 70),
(475, 22, 70),
(476, 23, 70),
(477, 3, 71),
(478, 10, 71),
(479, 12, 71),
(480, 14, 71),
(481, 16, 71),
(482, 17, 71),
(483, 18, 71),
(484, 19, 71),
(485, 21, 71),
(486, 22, 71),
(487, 23, 71),
(488, 3, 72),
(489, 10, 72),
(490, 12, 72),
(491, 14, 72),
(492, 16, 72),
(493, 19, 72),
(494, 21, 72),
(495, 22, 72),
(496, 23, 72),
(497, 3, 73),
(498, 10, 73),
(499, 12, 73),
(500, 13, 73),
(501, 16, 73),
(502, 18, 73),
(503, 21, 73),
(504, 22, 73),
(505, 23, 73),
(506, 3, 74),
(507, 10, 74),
(508, 12, 74),
(509, 14, 74),
(510, 16, 74),
(511, 19, 74),
(512, 20, 74),
(513, 21, 74),
(514, 22, 74),
(515, 23, 74),
(516, 3, 75),
(517, 10, 75),
(518, 12, 75),
(519, 14, 75),
(520, 16, 75),
(521, 17, 75),
(522, 18, 75),
(523, 19, 75),
(524, 21, 75),
(525, 22, 75),
(526, 23, 75),
(527, 3, 76),
(528, 11, 76),
(529, 12, 76),
(530, 14, 76),
(531, 16, 76),
(532, 18, 76),
(533, 19, 76),
(534, 22, 76),
(535, 23, 76),
(536, 3, 77),
(537, 10, 77),
(538, 12, 77),
(539, 14, 77),
(540, 16, 77),
(541, 19, 77),
(542, 21, 77),
(543, 22, 77),
(544, 23, 77),
(554, 3, 79),
(555, 10, 79),
(556, 12, 79),
(557, 14, 79),
(558, 16, 79),
(559, 17, 79),
(560, 21, 79),
(561, 22, 79),
(562, 23, 79),
(563, 3, 78),
(564, 10, 78),
(565, 12, 78),
(566, 14, 78),
(567, 16, 78),
(568, 19, 78),
(569, 21, 78),
(570, 22, 78),
(571, 23, 78),
(572, 3, 80),
(573, 10, 80),
(574, 12, 80),
(575, 14, 80),
(576, 16, 80),
(577, 19, 80),
(578, 21, 80),
(579, 22, 80),
(580, 23, 80),
(581, 3, 81),
(582, 10, 81),
(583, 12, 81),
(584, 14, 81),
(585, 15, 81),
(586, 16, 81),
(587, 20, 81),
(588, 21, 81),
(589, 22, 81),
(590, 23, 81),
(591, 3, 82),
(592, 10, 82),
(593, 12, 82),
(594, 14, 82),
(595, 15, 82),
(596, 21, 82),
(597, 22, 82),
(598, 23, 82),
(599, 3, 83),
(600, 10, 83),
(601, 12, 83),
(602, 15, 83),
(603, 16, 83),
(604, 18, 83),
(605, 19, 83),
(606, 21, 83),
(607, 22, 83),
(608, 23, 83),
(609, 24, 83),
(610, 3, 84),
(611, 10, 84),
(612, 12, 84),
(613, 14, 84),
(614, 16, 84),
(615, 17, 84),
(616, 21, 84),
(617, 22, 84),
(618, 23, 84),
(619, 3, 85),
(620, 10, 85),
(621, 12, 85),
(622, 15, 85),
(623, 16, 85),
(624, 18, 85),
(625, 19, 85),
(626, 21, 85),
(627, 22, 85),
(628, 23, 85),
(629, 24, 85),
(630, 3, 86),
(631, 10, 86),
(632, 12, 86),
(633, 14, 86),
(634, 16, 86),
(635, 17, 86),
(636, 19, 86),
(637, 21, 86),
(638, 22, 86),
(639, 23, 86),
(640, 3, 87),
(641, 10, 87),
(642, 12, 87),
(643, 15, 87),
(644, 16, 87),
(645, 18, 87),
(646, 19, 87),
(647, 20, 87),
(648, 21, 87),
(649, 22, 87),
(650, 23, 87),
(651, 3, 88),
(652, 11, 88),
(653, 12, 88),
(654, 16, 88),
(655, 18, 88),
(656, 21, 88),
(657, 22, 88),
(658, 23, 88),
(659, 24, 88),
(660, 3, 89),
(661, 10, 89),
(662, 12, 89),
(663, 15, 89),
(664, 16, 89),
(665, 18, 89),
(666, 19, 89),
(667, 20, 89),
(668, 21, 89),
(669, 22, 89),
(670, 23, 89),
(671, 24, 89),
(672, 3, 90),
(673, 9, 90);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id_penerimaan` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `tanggalpenerimaan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id_penerimaan`, `id_warga`, `tanggalpenerimaan`) VALUES
(6, 43, '0000-00-00'),
(7, 44, '0000-00-00'),
(8, 45, '0000-00-00'),
(9, 46, '0000-00-00'),
(10, 47, '0000-00-00'),
(11, 48, '0000-00-00'),
(12, 49, '0000-00-00'),
(13, 50, '0000-00-00'),
(14, 51, '0000-00-00'),
(15, 52, '0000-00-00'),
(16, 53, '0000-00-00'),
(17, 54, '0000-00-00'),
(18, 55, '0000-00-00'),
(19, 56, '0000-00-00'),
(20, 57, '0000-00-00'),
(21, 58, '0000-00-00'),
(22, 59, '0000-00-00'),
(23, 60, '0000-00-00'),
(24, 61, '0000-00-00'),
(25, 62, '0000-00-00'),
(26, 63, '0000-00-00'),
(27, 64, '0000-00-00'),
(28, 65, '0000-00-00'),
(29, 66, '0000-00-00'),
(30, 67, '0000-00-00'),
(31, 68, '0000-00-00'),
(32, 69, '0000-00-00'),
(33, 70, '0000-00-00'),
(34, 71, '0000-00-00'),
(35, 72, '0000-00-00'),
(36, 73, '0000-00-00'),
(37, 74, '0000-00-00'),
(38, 75, '0000-00-00'),
(39, 76, '0000-00-00'),
(40, 77, '0000-00-00'),
(41, 78, '0000-00-00'),
(42, 79, '0000-00-00'),
(43, 80, '0000-00-00'),
(44, 81, '0000-00-00'),
(45, 82, '0000-00-00'),
(46, 83, '0000-00-00'),
(47, 84, '0000-00-00'),
(48, 85, '0000-00-00'),
(49, 86, '0000-00-00'),
(50, 87, '0000-00-00'),
(51, 88, '0000-00-00'),
(52, 89, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `penerimabltdd`
--

CREATE TABLE `penerimabltdd` (
  `id_penerimabltdd` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `k1` tinyint(1) NOT NULL,
  `k2` tinyint(1) NOT NULL,
  `k3` tinyint(1) NOT NULL,
  `k4` tinyint(1) NOT NULL,
  `k5` tinyint(1) NOT NULL,
  `k6` tinyint(1) NOT NULL,
  `k7` tinyint(1) NOT NULL,
  `k8` tinyint(1) NOT NULL,
  `k9` tinyint(1) NOT NULL,
  `k10` tinyint(1) NOT NULL,
  `k11` tinyint(1) NOT NULL,
  `k12` tinyint(1) NOT NULL,
  `k13` tinyint(1) NOT NULL,
  `k14` tinyint(1) NOT NULL,
  `k15` tinyint(1) NOT NULL,
  `k16` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penerimakemensos`
--

CREATE TABLE `penerimakemensos` (
  `id_penerimakemensos` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `jenisBantuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'irma', '1234', 'admin'),
(2, 'salsa', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `tanggalsurvey` date DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik`, `nama`, `alamat`, `ttl`, `pekerjaan`, `jenisKelamin`, `tanggalsurvey`, `status`) VALUES
(43, '3507275507400004', 'Jainah', 'Sromo Rt.001 Rw.001 ', '1940-07-15', 'Pedagang', 'Perempuan', '2021-12-11', 'Layak'),
(44, '350727005590001', 'Djaki', 'Sromo Rt.001 Rw.001 ', '1959-05-20', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Layak'),
(45, '350727010723001', 'Podo', 'Sromo Rt.001 Rw.001 ', '1923-07-01', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(46, '3507275507380005', 'Patimah', 'Sromo Rt.002 Rw.001 ', '1938-07-15', 'Karyawan Swasta', 'Perempuan', '2021-12-11', 'Layak'),
(47, '3507271610920002', 'Agung Dwi Prasetyo', 'Sromo Rt.002 Rw.001 ', '1992-10-16', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Layak'),
(48, '3507274108590005', 'Samiati', 'Sromo Rt.002 Rw.001 ', '1959-08-01', 'Buruh Tani/Perkebunan', 'Perempuan', '2021-12-11', 'Sangat Layak'),
(49, '3507270110500006', 'Lamidi', 'Sromo Rt.002 Rw.001 ', '1950-10-01', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Layak'),
(50, '3507276606660002', 'Suparti', 'Sromo Rt.003 Rw.001 ', '1966-06-26', 'Karyawati Swasta', 'Perempuan', '2021-12-11', 'Sangat Layak'),
(51, '3507271702570004', 'Suparman', 'Sromo Rt.003 Rw.001 ', '1957-02-17', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Layak'),
(52, '3507270511770008', 'Sugianto', 'Sromo Rt.003 Rw.001 ', '1977-11-05', 'Buruh Harian Lepas', 'Laki-Laki', '2021-12-11', 'Layak'),
(53, '3507271009450002', 'Atip', 'Sromo Rt.003 Rw.001 ', '1945-09-10', 'Belum/Tidak Bekerja', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(54, '3507274203610002', 'Hartiaji', 'Sromo Rt.003 Rw.001 ', '1961-03-02', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(55, '3507270203480015', 'Abdul Kamid', 'Sromo Rt.003 Rw.001 ', '1948-03-02', 'Pedagang', 'Laki-Laki', '2021-12-11', 'Layak'),
(56, '3507274506660001', 'Purami', 'Sromo Rt.003 Rw.001 ', '1966-06-05', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(57, '3507274909730001', 'Tutik Eliana', 'Sromo Rt.003 Rw.001 ', '1973-09-09', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(58, '3507274204570002', 'Supinah', 'Sromo Rt.003 Rw.001 ', '1957-04-02', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(59, '3507232912690002', 'Deddy Hari Rahardja', 'Banu Rt.005 Rw.002', '1969-12-29', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Layak'),
(60, '3507271507400004', 'Samsi', 'Banu Rt.005 Rw.002', '1940-07-15', 'Pensiunan', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(61, '3507276702680001', 'Ambar Wati', 'Banu Rt.006 Rw.002', '1968-02-27', 'Karyawan Swasta', 'Perempuan', '2021-12-11', 'Sangat Layak'),
(62, '3504030210700003', 'Tukimin', 'Banu Rt.005 Rw.002', '1970-10-02', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Layak'),
(63, '3507275507550008', 'Mistiyah', 'Banu Rt.005 Rw.002', '1956-07-15', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Sangat Layak'),
(64, '3507275507700004', 'Susmiati', 'Banu Rt.007 Rw.002', '1970-07-15', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(65, '3507271202570003', 'Paidi', 'Banu Rt.008 Rw.002', '1957-02-12', 'Buruh Harian Lepas', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(66, '3507270101400001', 'Rokim', 'Banu Rt.006 Rw.002', '1940-01-01', 'Buruh Harian Lepas', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(67, '3507271507520017', 'Kaselan', 'Banu Rt.007 Rw.002', '1952-07-15', 'Belum/Tidak Bekerja', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(68, '3507272508970001', 'Ikhsan Arga Prasetyo', 'Banu Rt.008 Rw.002', '1995-08-25', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Layak'),
(69, '3507274508560003', 'Napiah', 'Banu Rt.008 Rw.002', '1956-08-05', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Sangat Layak'),
(70, '3507270209660001', 'Gimun', 'Banu Rt.010 Rw.002', '1966-09-02', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(71, '3507271205610001', 'Samiran', 'Banu Rt.010 Rw.002', '1961-05-15', 'Buruh Harian Lepas', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(72, '3507270203580031', 'Kasmuji', 'Banu Rt.012 Rw.002', '1958-03-02', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Layak'),
(73, '3507275403580001', 'Sumartiyatun', 'Banu Rt.012 Rw.002', '1958-03-14', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(74, '3507276812700004', 'Suhartini', 'Banu Rt.012 Rw.002', '1970-12-28', 'Buruh Tani/Perkebunan', 'Perempuan', '2021-12-11', 'Layak'),
(75, '3507270101650018', 'Suardi', 'Banu Rt.013 Rw.002', '1965-01-01', 'Buruh Harian Lepas', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(76, '3507275705580001', 'Intan Rustika Wijaya', 'Banu Rt.013 Rw.002', '1958-05-17', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(77, '3507271507610004', 'Sai', 'Banu Rt.013 Rw.002', '1961-07-15', 'Buruh Harian Lepas', 'Laki-Laki', '2021-12-11', 'Layak'),
(78, '35072743003570001', 'Remu', 'Banu Rt.014 Rw.003', '1957-03-03', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Layak'),
(79, '3507270612860001', 'Agung Wayu Cahyono', 'Ngramban Rt.014 Rw.003', '1986-11-05', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Layak'),
(80, '3507271911810004', 'Sumiran', 'Ngramban Rt.014 Rw.003', '1981-11-19', 'Buruh Tani/Perkebunan', 'Laki-Laki', '2021-12-11', 'Layak'),
(81, '3507271811680001', 'Riyadi', 'Ngramban Rt.015 Rw.003', '1968-11-18', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Layak'),
(82, '3507271507850004', 'Sukriantoro', 'Ngramban Rt.015 Rw.003', '1983-05-07', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Layak'),
(83, '3507275507530006', 'Sumayah', 'Ngramban Rt.015 Rw.003', '1953-07-15', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Sangat Layak'),
(84, '3507274205600002', 'Ginik', 'Ngramban Rt.016 Rw.003', '1960-05-02', 'Mengurus Rumah Tangga', 'Perempuan', '2021-12-11', 'Layak'),
(85, '3507275507530007', 'Paini', 'Ngramban Rt.016 Rw.003', '1953-07-15', 'Karyawan Swasta', 'Perempuan', '2021-12-11', 'Sangat Layak'),
(86, '3507270203630009', 'Senen', 'Ngramban Rt.016 Rw.003', '1963-03-02', 'Petani/Perkebun', 'Laki-Laki', '2021-12-11', 'Layak'),
(87, '3507271802810001', 'Widodo Saputro', 'Ngramban Rt.017 Rw.003', '1981-02-18', 'Wiraswasta', 'Laki-Laki', '2021-12-11', 'Sangat Layak'),
(88, '3507275507400018', 'Sayem', 'Ngramban Rt.017 Rw.003', '1940-07-15', 'Petani/Perkebun', 'Perempuan', '2021-12-11', 'Layak'),
(89, '3507275507430009', 'Paini', 'Ngramban Rt.017 Rw.003', '1943-07-15', 'Petani/Perkebun', 'Perempuan', '2021-12-11', 'Sangat Layak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `bantuan_warga`
--
ALTER TABLE `bantuan_warga`
  ADD PRIMARY KEY (`id_bantuanWarga`);

--
-- Indexes for table `datapenerima`
--
ALTER TABLE `datapenerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `data_terhapus`
--
ALTER TABLE `data_terhapus`
  ADD PRIMARY KEY (`id_terhapus`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_warga`
--
ALTER TABLE `kriteria_warga`
  ADD PRIMARY KEY (`id_kriteriaWarga`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`),
  ADD KEY `FK_penerimaan` (`id_warga`);

--
-- Indexes for table `penerimabltdd`
--
ALTER TABLE `penerimabltdd`
  ADD PRIMARY KEY (`id_penerimabltdd`);

--
-- Indexes for table `penerimakemensos`
--
ALTER TABLE `penerimakemensos`
  ADD PRIMARY KEY (`id_penerimakemensos`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bantuan_warga`
--
ALTER TABLE `bantuan_warga`
  MODIFY `id_bantuanWarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datapenerima`
--
ALTER TABLE `datapenerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_terhapus`
--
ALTER TABLE `data_terhapus`
  MODIFY `id_terhapus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kriteria_warga`
--
ALTER TABLE `kriteria_warga`
  MODIFY `id_kriteriaWarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=674;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id_penerimaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `penerimabltdd`
--
ALTER TABLE `penerimabltdd`
  MODIFY `id_penerimabltdd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penerimakemensos`
--
ALTER TABLE `penerimakemensos`
  MODIFY `id_penerimakemensos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD CONSTRAINT `FK_penerimaan` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
