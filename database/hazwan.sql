-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hazwan
CREATE DATABASE IF NOT EXISTS `hazwan` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `hazwan`;

-- Dumping structure for table hazwan.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table hazwan.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table hazwan.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table hazwan.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matric_no` varchar(50) DEFAULT NULL,
  `stud_name` varchar(50) DEFAULT NULL,
  `scsp1513` int(5) DEFAULT '0',
  `seci1013` int(5) DEFAULT '0',
  `scsj1013` int(5) DEFAULT '0',
  `scsr1013` int(5) DEFAULT '0',
  `scsi1113` int(5) DEFAULT '0',
  `scsj1023` int(5) DEFAULT '0',
  `scsr1213` int(5) DEFAULT '0',
  `scsv1223` int(5) DEFAULT '0',
  `scsd2523` int(5) DEFAULT '0',
  `scsj2013` int(5) DEFAULT '0',
  `scsp2613` int(5) DEFAULT '0',
  `scsr2033` int(5) DEFAULT '0',
  `scsv2113` int(5) DEFAULT '0',
  `scsi2143` int(5) DEFAULT '0',
  `scsj2154` int(5) DEFAULT '0',
  `scsj2203` int(5) DEFAULT '0',
  `scsr2043` int(5) DEFAULT '0',
  `scsj3203` int(5) DEFAULT '0',
  `ucsd2762` int(5) DEFAULT '0',
  `scsr3032` int(5) DEFAULT '0',
  `scsr4134` int(5) DEFAULT '0',
  `scsr2242` int(5) DEFAULT '0',
  `scsr2941` int(5) DEFAULT '0',
  `scsj3553` int(5) DEFAULT '0',
  `scsj3104` int(5) DEFAULT '0',
  `scsr3242` int(5) DEFAULT '0',
  `scsr3413` int(5) DEFAULT '0',
  `scsr3443` int(5) DEFAULT '0',
  `scsr3253` int(5) DEFAULT '0',
  `scsr3323` int(5) DEFAULT '0',
  `scsr4283` int(5) DEFAULT '0',
  `scsr4453` int(5) DEFAULT '0',
  `scsr4473` int(5) DEFAULT '0',
  `scsr4973` int(5) DEFAULT '0',
  `scsr4493` int(5) DEFAULT '0',
  `sub_left` int(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table hazwan.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(50) DEFAULT '0',
  `sub_code` varchar(10) DEFAULT '0',
  `sub_group` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table hazwan.sumvalues
CREATE TABLE IF NOT EXISTS `sumvalues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_sum_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_sum_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_sum_value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table hazwan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table hazwan.values
CREATE TABLE IF NOT EXISTS `values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_value` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
