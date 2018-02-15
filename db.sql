-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.18 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for tugas
CREATE DATABASE IF NOT EXISTS `tugas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tugas`;

-- Dumping structure for table tugas.page
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT '0',
  `view` varchar(225) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table tugas.page: ~2 rows (approximately)
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT IGNORE INTO `page` (`id`, `title`, `view`) VALUES
	(5, 'Userdata Not Implement', 'Userdata tidak bisa di pakai'),
	(6, 'Web apaan ini', 'webnya jelek banget dan kurang responsif, loading nya lama'),
	(7, 'Test', '123');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;

-- Dumping structure for table tugas.user_login
CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tugas.user_login: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT IGNORE INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`) VALUES
	(1, 'ani', 'an@gmai.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(2, 'febri', 'gmail@febri.com', '90a432f2523399d816d0488941911d00ec8d524b'),
	(3, 'user', 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
