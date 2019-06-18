# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.3.9-MariaDB)
# Database: media
# Generation Time: 2019-06-18 23:05:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table angka
# ------------------------------------------------------------

DROP TABLE IF EXISTS `angka`;

CREATE TABLE `angka` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_angka` varchar(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `diskripsi` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `angka` WRITE;
/*!40000 ALTER TABLE `angka` DISABLE KEYS */;

INSERT INTO `angka` (`id`, `nama_angka`, `link`, `diskripsi`)
VALUES
	(1,'1','www.youtube.com/embed/glkQwKA5_PU','1 , satu tambah satu sama dengan berapa');

/*!40000 ALTER TABLE `angka` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table huruf
# ------------------------------------------------------------

DROP TABLE IF EXISTS `huruf`;

CREATE TABLE `huruf` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_huruf` varchar(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `diskripsi` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `huruf` WRITE;
/*!40000 ALTER TABLE `huruf` DISABLE KEYS */;

INSERT INTO `huruf` (`id`, `nama_huruf`, `link`, `diskripsi`)
VALUES
	(2,'b','www.youtube.com/embed/gKcHLQkf_O4?rel=0','b, contohnya : Beruang, Burung, Buah'),
	(3,'a','www.youtube.com/embed/PrS2QisJnG8?rel=0','A contohnya Apel');

/*!40000 ALTER TABLE `huruf` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `password`)
VALUES
	(1,'admin','admin');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
