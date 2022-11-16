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

-- Dumping structure for table db_inkayat.pembayarans
DROP TABLE IF EXISTS `pembayarans`;
CREATE TABLE IF NOT EXISTS `pembayarans` (
  `id` int(6) unsigned zerofill NOT NULL DEFAULT '000000',
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_inkayat.pembayarans: ~4 rows (approximately)
INSERT INTO `pembayarans` (`id`, `id_kamar`, `tahun`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `ags`, `sep`, `okt`, `nov`, `des`) VALUES
	(000001, 1, 2021, 'Lunas', 'Lunas', 'belum', 'belum', 'belum', 'belum', 'belum', 'belum', 'Lunas', 'belum', 'belum', 'belum'),
	(000002, 3, 2021, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas'),
	(000003, 2, 2021, 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'Lunas', 'belum'),
	(000004, 1, 2022, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum', NULL, 'Lunas', NULL);

-- Dumping structure for table db_inkayat.tahuns
DROP TABLE IF EXISTS `tahuns`;
CREATE TABLE IF NOT EXISTS `tahuns` (
  `tahun` year NOT NULL,
  `slug` int DEFAULT NULL,
  PRIMARY KEY (`tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table db_inkayat.tahuns: ~2 rows (approximately)
INSERT INTO `tahuns` (`tahun`, `slug`) VALUES
	('2021', 2021),
	('2022', 2022);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
