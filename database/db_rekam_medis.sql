-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 02:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `dokter_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(500) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`dokter_id`, `name`, `spesialis`, `alamat`, `no_telp`, `image`, `created`, `updated`) VALUES
(1, 'DR.DEA EBI ALISSA. SP .MM SG KPR.sh', 'penyakit dalam', 'jalan pramuka no 56 bandar lampung', '+6213456789', 'dokter-200930-e3c5cba33f.jpeg', '2020-09-19 00:40:50', '2020-09-30 10:42:10'),
(11, 'DR .APREGI PRATA YUDA.skep .ners.komp', 'dokter umum', 'jalan pramuka no 17 bandar lalmpung', '+65987654312', 'dokter-200926-ce258cd8ad.jpg', '2020-09-26 12:44:28', '2020-09-27 16:56:41'),
(12, 'supono.sked mm', 'penyakit gigi', 'jakarta selatan', '+54987654312', NULL, '2020-09-26 12:47:54', '2020-10-02 06:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `obat_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`obat_id`, `name`, `keterangan`, `created`, `updated`) VALUES
(4, 'Ranitidine', '-Tukak lambung dan usus 12 jari.\r\n \r\n-Hipersekresi patologik sehubungan dengan sindrom zollinger', '2020-09-21 13:40:10', '2020-10-02 06:51:57'),
(5, 'Vitamin B12', 'Untuk pengobatan kekurangan vitamin B1, Vitamin B6, dan Vitamin B12 seperti pada polineuritis.\r\nAnem', '2020-09-22 09:57:00', '2020-10-02 06:57:17'),
(6, 'imbost force', 'immune vitamin ', '2020-09-22 10:29:22', '2020-10-02 06:56:20'),
(8, 'Kalnex', 'Fibrosis dan epistaksis lokal, prostatektomi, kolonisasi servik, adema angioneurotik, pendarahan abn', '2020-10-02 11:53:34', NULL),
(9, 'Ketorolac  ', '\r\nNyeri : nyeri akut, penanganan nyeri setelah oprasi.\r\n \r\nIndikasi untuk sediaan mata : Inflamasi k', '2020-10-02 11:54:25', NULL),
(10, 'Seftriakson', 'Pengobatan infeksi saluran nafas bagian bawah.\r\nOtitis media bakteri akut.\r\nInfeksi kulit dan strukt', '2020-10-02 11:55:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `pasien_id` int(11) NOT NULL,
  `no_identitas` varchar(300) NOT NULL,
  `name` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `address` varchar(500) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`pasien_id`, `no_identitas`, `name`, `jenis_kelamin`, `address`, `no_telp`, `image`, `created`, `updated`) VALUES
(1, '1234567', 'sopo dan jarwo', 'L', 'jln pramuka no 32 bandar lampung', '9876543217782', NULL, '2020-09-20 16:51:27', '2020-10-02 07:01:40'),
(2, '12345678', 'upin dan ipin', 'L', 'jakarta', '23456789', NULL, '2020-09-20 16:51:27', '2020-10-02 07:01:54'),
(9, '12345678334', 'adit', 'P', 'jakarta barat', '09876533332', NULL, '2020-09-20 16:51:27', '2020-10-02 07:02:05'),
(12, '12345678334', 'ehsan', 'L', 'malaysia', '4444444444444', 'pasien-200925-247ddae98e.jpg', '2020-09-24 19:07:26', '2020-10-02 07:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `poli_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gedung` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`poli_id`, `name`, `gedung`, `created`, `updated`) VALUES
(1, 'POLI KEBIDANAN 3', 'gedung  B , Lt 21', '2020-09-20 16:51:47', '2020-10-09 09:52:25'),
(2, 'POLI ANAK/PEDIATRIK', 'gedung A , Lt 4', '2020-09-20 16:51:47', '2020-10-02 06:58:30'),
(8, 'POLI JANTUNG/ CARDIOLOGIST', 'gedung 4 no 5', '2020-09-22 10:26:31', '2020-10-02 06:59:10'),
(9, 'POLI BEDAH UMUM', 'gedung A , Lt 5', '2020-09-22 10:26:54', '2020-10-02 06:59:35'),
(10, 'POLI BEDAH DIGESTIF/PENCERNAAN', 'gedung 23 no 5', '2020-09-22 10:27:10', '2020-10-02 06:59:55'),
(11, 'POLI BEDAH PLASTIK', 'gedung b no 45', '2020-09-22 10:27:28', '2020-10-02 07:00:12'),
(12, 'POLI BEDAH ORTHOPEDI', 'gedung 4 no 5', '2020-10-02 12:00:34', NULL),
(13, 'POLI UROLOGI', 'gedung 4 no 5', '2020-10-02 12:01:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis`
--

CREATE TABLE `tb_rekam_medis` (
  `rm_id` int(11) NOT NULL,
  `kode_rekam` char(100) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `diagnosa` text NOT NULL,
  `poli_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `tanggal_periksa` date DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`rm_id`, `kode_rekam`, `pasien_id`, `keluhan`, `dokter_id`, `diagnosa`, `poli_id`, `obat_id`, `tanggal_periksa`, `created`) VALUES
(18, '456789', 9, 'sakit kepala', 1, 'migrain', 12, 8, '2020-10-16', '2020-10-02 12:04:09'),
(19, '16666', 2, 'sakit perut', 11, 'maagg', 13, 9, '2020-10-22', '2020-10-02 13:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'bob marley', 'jakarta', 1),
(16, 'userss', '5b7dcd14a4faa2cdd54cf6eb8d4bc35da31914a1', 'jessika ', 'jakarta', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`dokter_id`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`obat_id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`poli_id`);

--
-- Indexes for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD PRIMARY KEY (`rm_id`),
  ADD UNIQUE KEY `kode_rekam` (`kode_rekam`),
  ADD KEY `dokter_id` (`dokter_id`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `poli_id` (`poli_id`),
  ADD KEY `obat_id` (`obat_id`);

--
-- Indexes for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obat_id` (`obat_id`),
  ADD KEY `rm_id` (`rm_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `dokter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `obat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `pasien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  MODIFY `poli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  MODIFY `rm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD CONSTRAINT `tb_rekam_medis_ibfk_1` FOREIGN KEY (`dokter_id`) REFERENCES `tb_dokter` (`dokter_id`),
  ADD CONSTRAINT `tb_rekam_medis_ibfk_2` FOREIGN KEY (`pasien_id`) REFERENCES `tb_pasien` (`pasien_id`),
  ADD CONSTRAINT `tb_rekam_medis_ibfk_3` FOREIGN KEY (`poli_id`) REFERENCES `tb_poliklinik` (`poli_id`),
  ADD CONSTRAINT `tb_rekam_medis_ibfk_4` FOREIGN KEY (`obat_id`) REFERENCES `tb_obat` (`obat_id`);

--
-- Constraints for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`obat_id`) REFERENCES `tb_obat` (`obat_id`),
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`rm_id`) REFERENCES `tb_rekam_medis` (`rm_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
