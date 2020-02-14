-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.26-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table pm.assigned_objectives
CREATE TABLE IF NOT EXISTS `assigned_objectives` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `objective_id` int(11) NOT NULL,
  `colleague_number` int(11) NOT NULL COMMENT 'Employee ID',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_score` double(8,2) DEFAULT NULL,
  `achived_score` double(8,2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 - Pending, 1 - Approved, 2 - Declined, 3 -Submitted',
  `evidence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Uploaded file path',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pm.assigned_objectives: ~0 rows (approximately)
/*!40000 ALTER TABLE `assigned_objectives` DISABLE KEYS */;
INSERT INTO `assigned_objectives` (`id`, `objective_id`, `colleague_number`, `name`, `role`, `division`, `expected_score`, `achived_score`, `status`, `evidence`, `created_at`, `updated_at`) VALUES
  (9, 5, 3, 'Employee', 'Product Manager', 'Marketing', 4.00, NULL, 3, 'files/te45u1pqvf9bR60kM5eU9PFnfLazCi0d7IiodEzr.jpeg', '2020-02-12 02:53:51', '2020-02-14 06:50:42'),
  (10, 7, 3, 'Employee', 'Software Engineer', 'Tech', 4.00, NULL, 3, 'files/c2zYfnPAmxkDFWqMjl9zxBgLYADvPKpL0ylEkDT2.jpeg', '2020-02-14 05:32:20', '2020-02-14 07:04:05'),
  (11, 6, 3, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2020-02-14 06:43:19', '2020-02-14 06:43:19');
/*!40000 ALTER TABLE `assigned_objectives` ENABLE KEYS */;

-- Dumping structure for table pm.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pm.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table pm.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pm.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
  (1, '2014_10_12_000000_create_users_table', 1),
  (2, '2014_10_12_100000_create_password_resets_table', 1),
  (3, '2019_08_19_000000_create_failed_jobs_table', 1),
  (4, '2020_01_26_194226_create_objectives_table', 1),
  (5, '2020_01_26_194203_create_objective_categories_table', 1),
  (7, '2020_02_09_080028_create_assigned_objectives_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table pm.objectives
CREATE TABLE IF NOT EXISTS `objectives` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` int(10) unsigned NOT NULL,
  `category_id` int(10) NOT NULL,
  `colleague_number` int(10) unsigned DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_score` double(8,2) DEFAULT NULL,
  `target_score` double(8,2) NOT NULL,
  `date_to_be_achived` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_results` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Should be json array',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pm.objectives: ~3 rows (approximately)
/*!40000 ALTER TABLE `objectives` DISABLE KEYS */;
INSERT INTO `objectives` (`id`, `created_by`, `category_id`, `colleague_number`, `type`, `name`, `role`, `division`, `title`, `personal_objective`, `current_score`, `target_score`, `date_to_be_achived`, `key_results`, `created_at`, `updated_at`) VALUES
  (5, 1, 3, NULL, 0, NULL, NULL, NULL, 'New objective u', 'objective details  u', NULL, 4.00, '2020-02-14', '["res1 u","res1 u","res1 u"]', '2020-02-11 20:52:16', '2020-02-12 02:39:43'),
  (6, 1, 4, NULL, 1, NULL, NULL, NULL, 'New objective', 'New objective', NULL, 5.00, '2020-02-19', '["res1","res1","res1"]', '2020-02-12 02:42:14', '2020-02-12 02:42:14'),
  (7, 1, 5, NULL, 0, NULL, NULL, NULL, 'Who Can Diagnose for Dyslexia?', 'Who Can Diagnose for Dyslexia?', NULL, 4.00, '2020-02-13', '["res1","res1","res1"]', '2020-02-14 05:13:47', '2020-02-14 05:13:47'),
  (8, 3, 1, NULL, 0, NULL, NULL, NULL, 'TheSaaS has just started!', 'TheSaaS has just started!', NULL, 4.00, '2020-02-15', '["res1","res1","res1"]', '2020-02-14 06:44:12', '2020-02-14 06:44:12');
/*!40000 ALTER TABLE `objectives` ENABLE KEYS */;

-- Dumping structure for table pm.objective_categories
CREATE TABLE IF NOT EXISTS `objective_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pm.objective_categories: ~7 rows (approximately)
/*!40000 ALTER TABLE `objective_categories` DISABLE KEYS */;
INSERT INTO `objective_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
  (1, 'Business & Customer Knowledge', NULL, NULL),
  (2, 'Communication', NULL, NULL),
  (3, 'Innovation', NULL, NULL),
  (4, 'Leadership', NULL, NULL),
  (5, 'Making Decisions', NULL, NULL),
  (6, 'Planning And Prioritisation', NULL, NULL),
  (7, 'Working Together', NULL, NULL);
/*!40000 ALTER TABLE `objective_categories` ENABLE KEYS */;

-- Dumping structure for table pm.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pm.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table pm.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '3' COMMENT '1 - Admin, 2 - Managers, 3 - Employees',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pm.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
  (1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$XhB2Bi/elm533KswSa4Lj.HNrwBkOLyny0kgjClVQbBXar2061R5a', 1, 'qg17KiyYwWqBV1XNauEn6FutY8v1QKd4YxrDEpo9QnVgs24YZy8ffIaSLXoV', '2020-02-01 09:27:27', '2020-02-01 09:27:27'),
  (2, 'Manager', 'manager@gmail.com', NULL, '$2y$10$mwXtRq/ZRsR5DsdO2d8P/Of6odByzxL0/8H3IKunwNbrv9stDDGz.', 2, NULL, '2020-02-01 09:27:27', '2020-02-01 09:27:27'),
  (3, 'Employee', 'employee@gmail.com', NULL, '$2y$10$FQsFUD9227lm/Kmn/1vSKuURirkBs7p38mDCF7iVnQgtCQd3BKb..', 3, '1gv7WHC7LYleRADPB4ZjZoiikgFFfzCUE3mTi8dpbz54JkUQlVa1p8uxXgF3', '2020-02-01 09:27:27', '2020-02-01 09:27:27'),
  (4, 'John Hex', 'john@gmail.com', NULL, '$2y$10$na0SGsawwUKhVvLcqob1ru6BWgzOdlnQ4ca9S7WtDPiDDAowpSrhm', 2, NULL, '2020-02-02 21:09:54', '2020-02-02 21:09:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
