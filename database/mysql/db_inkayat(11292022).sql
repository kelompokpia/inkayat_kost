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
  `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_kamar` varchar(255) NOT NULL,
  `gambar_kamar` varchar(255) NOT NULL,
  `nama_penghuni` varchar(255) NOT NULL,
  `nik_penghuni` int NOT NULL,
  `telepon_penghuni` bigint NOT NULL DEFAULT '0',
  `tanggal_masuk` date NOT NULL,
  `deskripsi_kamar` text NOT NULL,
  `status_kamar` varchar(255) NOT NULL,
  `harga_kamar` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_inkayat.kamars: ~3 rows (approximately)
INSERT INTO `kamars` (`id`, `nama_kamar`, `gambar_kamar`, `nama_penghuni`, `nik_penghuni`, `telepon_penghuni`, `tanggal_masuk`, `deskripsi_kamar`, `status_kamar`, `harga_kamar`) VALUES
	(000001, 'Kamar 1', 'kamar-1.jpeg', 'Siti Muskanan', 0, 89657232951, '2022-11-01', 'Lorem ipsum dolor sit amet consectetur.', 'Tersedia', 410),
	(000002, 'Kamar 2', 'kamar-2.jpeg', 'Indah Ratna Sari', 0, 0, '2022-11-01', 'Lorem ipsum dolor sit amet consectetur.', 'Terisi', 410),
	(000003, 'Kamar 3', 'kamar-3.jpeg', 'Sri Ayu Ningtyas', 0, 0, '2022-11-15', 'Lorem ipsum dolor sit amet consectetur.', 'Tersedia', 390);

-- Dumping structure for table db_inkayat.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.migrations: ~5 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_11_06_035940_create_kamars_table', 1),
	(6, '2022_11_15_024626_payments', 2);

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
  `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_kamar` int NOT NULL,
  `tahun` int NOT NULL,
  `jan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mei` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sep` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `okt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nov` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.pembayarans: ~4 rows (approximately)
INSERT INTO `pembayarans` (`id`, `id_kamar`, `tahun`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `ags`, `sep`, `okt`, `nov`, `des`, `updated_at`, `created_at`) VALUES
	(000009, 1, 2021, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', '2022-11-28 22:07:08', '2022-11-28 22:07:08'),
	(000010, 2, 2021, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', '2022-11-28 22:07:45', '2022-11-28 22:07:45'),
	(000011, 1, 2022, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', NULL, '2022-11-28 22:08:33', '2022-11-28 22:08:33'),
	(000012, 2, 2022, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Belum bayar', NULL, '2022-11-28 22:09:12', '2022-11-28 22:09:12'),
	(000013, 3, 2022, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lunas', 'Lunas', 'Lunas', NULL, '2022-11-28 22:09:51', '2022-11-28 22:09:51'),
	(000014, 1, 2021, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-29 06:15:50', '2022-11-29 06:15:50');

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
  PRIMARY KEY (`tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_inkayat.tahuns: ~2 rows (approximately)
INSERT INTO `tahuns` (`tahun`, `created_at`, `updated_at`) VALUES
	('2021', NULL, NULL),
	('2022', NULL, NULL);

-- Dumping structure for table db_inkayat.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(00000000000000000001, 'dana', '202151099@std.umk.ac.id', NULL, '$2y$10$Wpci4x3X8lcJs81dwSg94.g4AWf4mnrdOxipiP3TsKyL8mP.8rwjS', NULL, '2022-11-13 20:05:50', '2022-11-13 20:05:50'),
	(00000000000000000002, 'Yog', 'yogauchiha28@gmail.com', NULL, '$2y$10$1Er0OCvkht7QFfRmRJ.lc.w6uGrCkkyoq5KaMXjw1h/CyZVxNWtcu', NULL, '2022-11-14 01:09:08', '2022-11-14 01:09:08'),
	(00000000000000000003, 'Yog', 'yogadwi@gmail.com', NULL, '$2y$10$dqFyofCmQ2SIDDZJpNCBXu5tdzU8s2ra7aihW7ockmIvabE4DhI82', 'cvelo1SRe2B8TyDLQnz1ZyCXYLfcK12dCUwmR3MzRGJAYPNKM4aQSwmIzfZO', '2022-11-14 19:30:00', '2022-11-14 19:30:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
