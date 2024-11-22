/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP DATABASE IF EXISTS `db_bng`;
CREATE DATABASE IF NOT EXISTS `db_bng` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_bng`;

DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varbinary(200) DEFAULT NULL,
  `passwrd` varchar(200) DEFAULT NULL,
  `profile` varchar(20) DEFAULT NULL,
  `purl` varchar(20) DEFAULT NULL,
  `code` varchar(6) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varbinary(200) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varbinary(200) DEFAULT NULL,
  `phone` varbinary(100) DEFAULT NULL,
  `interests` varchar(1000) DEFAULT NULL,
  `id_agent` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

SELECT COUNT(*) as total FROM agents;		

INSERT INTO `agents` (`id`, `name`, `passwrd`, `profile`, `purl`, `code`, `last_login`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, _binary 0xa1aa1cec8e28ce52716a58fa8ad44f65, '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'admin', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL),
	(2, _binary 0xe720e3e06cf8b1f18595f465b4912334, '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'agent', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL),
	(3, _binary 0x27f1c82272d5349f57f76e83b6e13023, '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'agent', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL);

select * from agents;
truncate agents;
select * from persons;


DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `interests` varchar(1000) DEFAULT NULL,
  `id_agent` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `passwrd` varchar(200) DEFAULT NULL,
  `profile` varchar(20) DEFAULT NULL,
  `purl` varchar(20) DEFAULT NULL,
  `code` varchar(6) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `agents` (`id`, `name`, `passwrd`, `profile`, `purl`, `code`, `last_login`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'admin@bng.com', 'Aa123456', 'admin', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL),
	(2, 'agent1@bng.com', 'Aa123456', 'agent', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL),
	(3, 'agent1@bng.com', 'Aa123456', 'agent', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL);
    
    INSERT INTO `agents` (`id`, `name`, `passwrd`, `profile`, `purl`, `code`, `last_login`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'admin@bng.com', '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'admin', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL),
	(2, 'agent1@bng.com', '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'agent', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL),
	(3, 'agent2@bng.com', '$2y$10$3g5mYc9.8Fz8/z7x8TCJp.w.KL.X0ujyzxzaJWyoOgHaZ2nTupPA6', 'agent', NULL, NULL, NULL, '2022-11-11 00:11:30', NULL, NULL);

