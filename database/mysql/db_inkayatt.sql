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

-- Dumping data for table db_inkayat.admin: ~0 rows (approximately)
INSERT INTO `admin` (`id_admin`, `nama_admin`, `pasword_admin`, `nomer_hp`) VALUES
	(000001, 'kayat', 'inkayatkost', 0004294967295);

-- Dumping data for table db_inkayat.kamars: ~3 rows (approximately)
INSERT INTO `kamars` (`id_kamar`, `nama_kamar`, `gambar_kamar`, `nama_penghuni`, `nik_penghuni`, `telepon_penghuni`, `tanggal_masuk`, `deskripsi_kamar`, `status_kamar`, `harga_kamar`) VALUES
	(000001, 'Kamar 1', 'kamar-1.jpeg', 'Siti Muskanan', 0, 0, '2022-11-01', 'Lorem ipsum dolor sit amet consectetur.', 'Tersedia', 410),
	(000002, 'Kamar 2', 'kamar-2.jpeg', 'Indah Ratna Sari', 0, 0, '2022-11-01', 'Lorem ipsum dolor sit amet consectetur.', 'Terisi', 410),
	(000003, 'Kamar 3', 'kamar-3.jpeg', 'Sri Ayu Ningtyas', 0, 0, '2022-11-02', 'Lorem ipsum dolor sit amet consectetur.', 'Tersedia', 390);

-- Dumping data for table db_inkayat.migrations: ~0 rows (approximately)

-- Dumping data for table db_inkayat.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
