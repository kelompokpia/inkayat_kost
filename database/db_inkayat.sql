-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 03:05 PM
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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamars`
--

CREATE TABLE `kamars` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_kamar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penghuni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_penghuni` bigint(20) NOT NULL,
  `telepon_penghuni` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `status_kamar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_kamar` int(11) NOT NULL,
  `deskripsi_kamar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamars`
--

INSERT INTO `kamars` (`id`, `nama_kamar`, `gambar_kamar`, `nama_penghuni`, `alamat`, `nik_penghuni`, `telepon_penghuni`, `tanggal_masuk`, `status_kamar`, `harga_kamar`, `deskripsi_kamar`, `created_at`, `updated_at`) VALUES
(1, 'A1', 'kamar-1.jpeg', 'Farida', 'Bekasi', 3340008766555432, '085860811332', '2022-03-09', 'Tersedia', 410, 'kamar yang sangat nyaman', '2022-11-30 00:17:21', '2022-12-12 23:41:17'),
(2, 'A2', 'kamar-2.jpeg', 'Erna Indraswari', 'Batang', 3320001212202256, '085866785019', '2022-02-08', 'Tersedia', 410, 'kamar yang sangat nyaman', '2022-11-30 00:17:21', '2022-12-12 23:42:34'),
(3, 'A3', 'kamar-3.jpeg', 'Hana', 'Tangerang', 3320045707030024, '08888992500', '2021-06-23', 'Terisi', 410, 'kamar yang sangat nyaman', '2022-11-30 00:17:21', '2022-12-12 23:43:59'),
(31, 'A4', NULL, 'Alfi', 'Pati', 3320056739202960, '082241168851', '2021-06-23', NULL, 410, NULL, '2022-12-12 23:28:22', '2022-12-12 23:45:48'),
(32, 'A5', NULL, 'Amelia Diyah Ramadani', 'Kudus', 3349271901881756, '0896476899010', '2021-01-07', 'Tersedia', 410, NULL, '2022-12-12 23:32:33', '2022-12-13 23:53:15'),
(33, 'A6', NULL, 'Devi', 'Demak', 3320040876435557, '081575701404', '2022-02-09', NULL, 410, NULL, '2022-12-12 23:33:56', '2022-12-12 23:45:21'),
(34, 'A7', NULL, 'Dian Nur Elisa', 'Semarang', 3320006542198734, '085730516531', '2020-12-16', NULL, 410, NULL, '2022-12-12 23:35:42', '2022-12-12 23:45:06'),
(35, 'A8', NULL, 'Lin Intan Fatika', 'Depok', 3240072720200458, '083111098073', '2022-05-16', NULL, 410, NULL, '2022-12-12 23:47:10', '2022-12-12 23:47:10'),
(36, 'A9', NULL, 'Indah', 'Cikarang Selatan', 3320056767900789, '085867916965', '2021-08-16', 'Tersedia', 410, NULL, '2022-12-12 23:48:13', '2022-12-30 02:44:49'),
(38, 'A10', NULL, 'Istianah', 'Jepara', 3345678900021, '08886605369', '2020-10-26', NULL, 410, NULL, '2022-12-12 23:50:23', '2022-12-12 23:50:23'),
(39, 'A11', NULL, 'Kartika Permata Sari', 'Demak', 3567008080888, '085702121224', '2022-05-16', NULL, 410, NULL, '2022-12-12 23:51:24', '2022-12-12 23:51:24'),
(40, 'A12', '', 'Lestari', 'Demak', 3690909070034, '083146603355', '2021-11-09', NULL, 410, NULL, '2022-12-12 23:53:16', '2022-12-12 23:53:16'),
(51, 'A13', NULL, 'Nunung', 'Jetak, Pati', 1762615261727, '089765132415', '2022-12-01', 'Terisi', 410, NULL, '2022-12-13 23:26:07', '2022-12-13 23:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_06_035940_create_kamars_table', 1),
(6, '2022_11_15_024626_pembayarans', 1),
(7, '2022_11_15_053608_tahuns', 1),
(8, '2022_12_06_041352_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_kamar` bigint(20) UNSIGNED NOT NULL,
  `jan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mei` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `okt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nov` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `tahun`, `id_kamar`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `ags`, `sep`, `okt`, `nov`, `des`, `created_at`, `updated_at`) VALUES
(10, 2022, 1, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Belum bayar', '2022-12-12 23:04:24', '2022-12-14 00:23:36'),
(11, 2021, 2, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', '2022-12-13 05:56:37', '2022-12-13 05:56:37'),
(13, 2022, 3, 'Lunas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-14 00:24:42', '2022-12-14 00:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahuns`
--

CREATE TABLE `tahuns` (
  `tahun` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahuns`
--

INSERT INTO `tahuns` (`tahun`, `created_at`, `updated_at`) VALUES
(2020, '2022-12-13 23:57:17', '2022-12-13 23:57:17'),
(2021, '2022-11-30 00:17:21', '2022-11-30 00:17:21'),
(2022, '2022-11-30 00:17:21', '2022-11-30 00:17:21'),
(2023, '2022-12-12 01:46:27', '2022-12-12 01:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rohmat', 'kelompok@gmail.com', '2022-12-30 09:08:24', '$2y$10$zzz0ArlYvS9DIrnW6vW5YedsYdeX8xsqJ4e18cLxvgWAEg9qVq99K', 'wdQipcvKqqEPkJ6rIAD2BATbLanzCpc7wOk7M5gaIRHKYtwtqzDvAVSH3VUx', '2022-11-30 00:17:21', '2022-11-30 00:17:21'),
(2, 'Fron', 'kelompok3@gmail.com', '2022-12-13 06:03:37', '$2y$10$G0bCAVevf1owy3Od26Uj3OkeJh/4oPTjqFYNjNLeDPD3dRNWoRP/S', NULL, NULL, '2022-12-12 23:03:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kamars_id_unique` (`id`),
  ADD UNIQUE KEY `kamars_nik_penghuni_unique` (`nik_penghuni`),
  ADD UNIQUE KEY `kamars_telepon_penghuni_unique` (`telepon_penghuni`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pembayarans_tahun_id_kamar_unique` (`tahun`,`id_kamar`),
  ADD UNIQUE KEY `pembayarans_id_unique` (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tahuns`
--
ALTER TABLE `tahuns`
  ADD UNIQUE KEY `tahuns_tahun_unique` (`tahun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
