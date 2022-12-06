-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_inkayat
DROP DATABASE IF EXISTS `db_inkayat`;
CREATE DATABASE IF NOT EXISTS `db_inkayat` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_inkayat`;

-- Dumping structure for table db_inkayat.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_inkayat.kamars
DROP TABLE IF EXISTS `kamars`;
CREATE TABLE IF NOT EXISTS `kamars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penghuni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_penghuni` bigint NOT NULL,
  `telepon_penghuni` bigint NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_kamar` int NOT NULL,
  `deskripsi_kamar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kamars_id_unique` (`id`),
  UNIQUE KEY `kamars_nik_penghuni_unique` (`nik_penghuni`),
  UNIQUE KEY `kamars_telepon_penghuni_unique` (`telepon_penghuni`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.kamars: ~2 rows (approximately)
INSERT INTO `kamars` (`id`, `nama_kamar`, `gambar_kamar`, `nama_penghuni`, `nik_penghuni`, `telepon_penghuni`, `tanggal_masuk`, `status_kamar`, `harga_kamar`, `deskripsi_kamar`, `created_at`, `updated_at`) VALUES
	(1, 'Kamar 1', 'kamar-1.jpeg', 'Mawar', 1234567890123456, 897651526378, '2022-11-01', 'Tersedia', 400, 'kamar yang sangat nyaman', '2022-11-29 07:09:14', '2022-11-29 07:09:14'),
	(2, 'Kamar 2', 'kamar-2.jpeg', 'Bunga', 1234567890123455, 897651526379, '2022-11-01', 'Tersedia', 410, 'kamar yang sangat nyaman', '2022-11-29 07:09:14', '2022-11-29 07:09:14'),
	(3, 'Kamar 3', 'kamar-3.jpeg', 'Indah', 1234567890123454, 897651526370, '2022-11-02', 'Terisi', 430, 'kamar yang sangat nyaman', '2022-11-29 07:09:14', '2022-11-29 07:09:14');

-- Dumping structure for table db_inkayat.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_11_06_035940_create_kamars_table', 1),
	(6, '2022_11_15_024626_pembayarans', 1),
	(7, '2022_11_15_053608_tahuns', 1);

-- Dumping structure for table db_inkayat.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.password_resets: ~0 rows (approximately)

-- Dumping structure for table db_inkayat.pembayarans
DROP TABLE IF EXISTS `pembayarans`;
CREATE TABLE IF NOT EXISTS `pembayarans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tahun` int NOT NULL,
  `id_kamar` bigint unsigned NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pembayarans_tahun_id_kamar_unique` (`tahun`,`id_kamar`),
  UNIQUE KEY `pembayarans_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.pembayarans: ~0 rows (approximately)
INSERT INTO `pembayarans` (`id`, `tahun`, `id_kamar`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `ags`, `sep`, `okt`, `nov`, `des`, `created_at`, `updated_at`) VALUES
	(1, 2022, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-29 07:13:02', '2022-11-29 07:13:02');

-- Dumping structure for table db_inkayat.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_inkayat.tahuns
DROP TABLE IF EXISTS `tahuns`;
CREATE TABLE IF NOT EXISTS `tahuns` (
  `tahun` year NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `tahuns_tahun_unique` (`tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.tahuns: ~2 rows (approximately)
INSERT INTO `tahuns` (`tahun`, `created_at`, `updated_at`) VALUES
	('2021', '2022-11-29 07:09:14', '2022-11-29 07:09:14'),
	('2022', '2022-11-29 07:09:14', '2022-11-29 07:09:14');

-- Dumping structure for table db_inkayat.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Rohmat', 'kelompok@gmail.com', '2022-11-29 07:09:14', '$2y$10$0v0y0jnxVwS3MGwyFEGpDu7RBDYh8pjzEatvZJMvxJiPcGkvT.BFy', 'lSOAJfSqp8', '2022-11-29 07:09:14', '2022-11-29 07:09:14');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
