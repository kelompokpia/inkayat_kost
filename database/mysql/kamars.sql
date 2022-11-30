-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 07:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inkayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamars`
--

CREATE TABLE `kamars` (
  `id_kamar` int(6) UNSIGNED ZEROFILL NOT NULL,
  `nama_kamar` varchar(255) NOT NULL,
  `gambar_kamar` varchar(255) DEFAULT NULL,
  `nama_penghuni` varchar(255) NOT NULL,
  `nik_penghuni` bigint(16) NOT NULL,
  `telepon_penghuni` bigint(13) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `deskripsi_kamar` text DEFAULT NULL,
  `status_kamar` varchar(255) DEFAULT NULL,
  `harga_kamar` int(8) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamars`
--

INSERT INTO `kamars` (`id_kamar`, `nama_kamar`, `gambar_kamar`, `nama_penghuni`, `nik_penghuni`, `telepon_penghuni`, `tanggal_masuk`, `deskripsi_kamar`, `status_kamar`, `harga_kamar`, `alamat`, `updated_at`, `created_at`) VALUES
(000008, 'bintang7', NULL, 'ilhammmudin', 878656566767, 878787397765, NULL, NULL, NULL, NULL, 'jhsckhkk', '2022-11-29 05:48:38', '2022-11-23 00:50:32'),
(000013, 'Bintang 1', NULL, 'Adinda Azzani', 3314156754321234, 81390877708, NULL, NULL, NULL, NULL, 'Ds. Jonggol', '2022-11-23 23:34:03', '2022-11-23 22:16:57'),
(000014, 'bulan', NULL, 'siska', 908765378342165, 8646567386, NULL, NULL, NULL, NULL, 'jepang', '2022-11-29 05:46:34', '2022-11-29 05:46:34'),
(000015, 'diamond', NULL, 'reftg', 1234567890987651, 89746399, NULL, NULL, NULL, NULL, 'jkjgfkeh', '2022-11-29 23:23:55', '2022-11-29 23:04:44'),
(000016, 'Bintang 5', NULL, 'Wulan', 7867547801, 8789876547656, NULL, NULL, NULL, NULL, 'Jepara', '2022-11-29 23:48:46', '2022-11-29 23:26:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id_kamar` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
