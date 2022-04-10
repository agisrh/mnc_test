-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for mnc_test
CREATE DATABASE IF NOT EXISTS `mnc_test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mnc_test`;

-- Dumping structure for table mnc_test.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `content` text,
  `publish_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table mnc_test.article: ~0 rows (approximately)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `title`, `description`, `content`, `publish_date`) VALUES
	(1, 'Belajar pemrogramman dengan PHP', 'Pemrogramman dengan PHP berbasis OOP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu facilisis dui. Cras purus augue, convallis sed facilisis a, porta ut arcu. Morbi tristique quis nisl et mollis. Sed tellus nulla, feugiat ac tempus at, maximus id nunc. Nullam a erat sit amet orci laoreet pellentesque. Pellentesque vitae euismod neque. Vestibulum mauris metus, finibus ac dictum vitae, ultricies quis massa. Curabitur consectetur tortor eu sollicitudin porttitor. In sed viverra odio. Vivamus tempus mauris id lorem convallis pellentesque. Pellentesque pellentesque accumsan nisl a maximus. Aenean pulvinar felis nec lobortis tempus. Aenean auctor varius nunc vel finibus.', '2022-04-10'),
	(2, 'Cara membuat website dengan wordpress', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu facilisis dui. Cras purus augue, convallis sed facilisis a, porta ut arcu. Morbi tristique quis nisl et mollis. Sed tellus nulla, feugiat ac tempus at, maximus id nunc. Nullam a erat sit amet orci laoreet pellentesque. Pellentesque vitae euismod neque. Vestibulum mauris metus, finibus ac dictum vitae, ultricies quis massa. Curabitur consectetur tortor eu sollicitudin porttitor. In sed viverra odio. Vivamus tempus mauris id lorem convallis pellentesque. Pellentesque pellentesque accumsan nisl a maximus. Aenean pulvinar felis nec lobortis tempus. Aenean auctor varius nunc vel finibus.', '2022-04-09'),
	(4, '5 Bahasa pemrogramman paling populer 2022', 'Kenali bahasa pemrogramman yang hits', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu facilisis dui. Cras purus augue, convallis sed facilisis a, porta ut arcu. Morbi tristique quis nisl et mollis. Sed tellus nulla, feugiat ac tempus at, maximus id nunc. Nullam a erat sit amet orci laoreet pellentesque. Pellentesque vitae euismod neque. Vestibulum mauris metus, finibus ac dictum vitae, ultricies quis massa. Curabitur consectetur tortor eu sollicitudin porttitor. In sed viverra odio. Vivamus tempus mauris id lorem convallis pellentesque. Pellentesque pellentesque accumsan nisl a maximus. Aenean pulvinar felis nec lobortis tempus. Aenean auctor varius nunc vel finibus.', '2022-04-08');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
