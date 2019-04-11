-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.16-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for homemade
CREATE DATABASE IF NOT EXISTS `homemade` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `homemade`;

-- Dumping structure for table homemade.item
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table homemade.item: ~3 rows (approximately)
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` (`id`, `title`, `details`, `image`, `phone`, `amount`) VALUES
	(1, 'Lorem Ipsum', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 'pic3.jpg', '+8801317415417', 1000),
	(2, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'pic3.png', '+8801317415417', 500),
	(3, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'pic3.jpg', '+8801317415417', 1000);
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Dumping structure for table homemade.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table homemade.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `password`) VALUES
	(1, 'saiful@admin.com', '1234');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
