-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 06:10 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";db_inkayatt

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
  `gambar_kamar` varchar(255) NOT NULL,
  `nama_penghuni` varchar(255) NOT NULL,
  `nik_penghuni` int(16) NOT NULL,
  `telepon_penghuni` int(13) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi_kamar` text NOT NULL,
  `status_kamar` varchar(255) NOT NULL,
  `harga_kamar` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamars`
--

INSERT INTO `kamars` (`id_kamar`, `nama_kamar`, `gambar_kamar`, `nama_penghuni`, `nik_penghuni`, `telepon_penghuni`, `tanggal_masuk`, `deskripsi_kamar`, `status_kamar`, `harga_kamar`) VALUES
(000001, 'Kamar 1', 'kamar-1.jpg', 'Siti Muskanan', 0, 0, '2022-11-01', 'Lorem ipsum dolor sit amet consectetur.', 'Tersedia', 410),
(000002, 'Kamar 2', 'kamar-2.jpg', 'Indah Ratna Sari', 0, 0, '2022-11-01', 'Lorem ipsum dolor sit amet consectetur.', 'Terisi', 410),
(000003, 'Kamar 3', 'kamar-3.webp', 'Sri Ayu Ningtyas', 0, 0, '2022-11-02', 'Lorem ipsum dolor sit amet consectetur.', 'Tersedia', 390);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id_kamar` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
db_inkayat