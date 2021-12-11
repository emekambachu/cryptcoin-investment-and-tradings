-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2021 at 08:55 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto_growth_labs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@email.com', 'admin', 'super-admin', NULL, '$2y$10$S8hZJtoese8GqnpYC9eDW.0rwYePezyCQ6i8pJJQxsR.bhIIccuSC', NULL, NULL, '2020-12-23 11:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `admin_wallet_addresses`
--

DROP TABLE IF EXISTS `admin_wallet_addresses`;
CREATE TABLE IF NOT EXISTS `admin_wallet_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` bigint(50) NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_wallet_addresses`
--

INSERT INTO `admin_wallet_addresses` (`id`, `admin_id`, `name`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'BTC', '3MNVPUwfph2NaRViKGfv1Q7rBjaQ3zvaQY', '1625249010validation.png', NULL, '2021-07-02 17:03:30'),
(2, 1, 'ETH', '1BfSBpGosSzV3ytHXK1xHH14RWyGBfVrMu', NULL, NULL, '2020-12-23 11:27:48'),
(3, 1, 'LTC', 'LdcriFxmxit6hzj9JNbZZBacC1L4vV8Qx1', NULL, NULL, '2020-12-23 11:27:48'),
(4, 1, 'XRP', '864212964', NULL, NULL, '2020-12-23 11:27:48'),
(5, 1, 'TRON', 'TDkKDLFmARzBrSpUt6Nxn6T3bBxfYJHFo9', NULL, NULL, '2020-12-23 11:27:48'),
(6, 1, 'USDT', '0xd413365D3AA6ac0f5984323d26fdfD85dE6CF487', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

DROP TABLE IF EXISTS `investments`;
CREATE TABLE IF NOT EXISTS `investments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invest_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment_package_id` int(10) UNSIGNED DEFAULT NULL,
  `cryptocurrency` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `investments_investment_package_id_index` (`investment_package_id`),
  KEY `investments_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investment_packages`
--

DROP TABLE IF EXISTS `investment_packages`;
CREATE TABLE IF NOT EXISTS `investment_packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `referral_bonus` int(11) DEFAULT NULL,
  `monthly_profit` int(11) DEFAULT NULL,
  `days_turnover` int(11) DEFAULT NULL,
  `expert_advice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_bonus` int(11) DEFAULT NULL,
  `option1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compound_roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_packages`
--

INSERT INTO `investment_packages` (`id`, `name`, `min`, `max`, `referral_bonus`, `monthly_profit`, `days_turnover`, `expert_advice`, `deposit_bonus`, `option1`, `option2`, `option3`, `description`, `roi`, `compound_roi`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 50, 499, NULL, NULL, 24, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Build an emergency fund so you can weather any storm. We recommend this for every client, because life happens.', '10% after 24 hours', NULL, 1, NULL, NULL),
(2, 'Silver', 500, 4999, NULL, NULL, 48, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Helps investors lower risk; whether you’re saving for a purchase, short-term goal or a payment plan. This plan will help you achieve it Faster', '20% after 48 hours ', NULL, 1, NULL, NULL),
(3, 'Gold', 2000, NULL, NULL, NULL, 72, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Start on the path of financial freedom. It may seem far away, but starting sooner makes it easier to get the retirement lifestyle you want.\r\n            (You can make daily/weekly/Monthly deposits till you get to the minimum investment)\r\n            ', '50% after 72 hours', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_05_30_200519_create_wallets_table', 5),
(5, '2020_05_30_200548_create_admins_table', 1),
(6, '2020_05_30_200614_create_investments_table', 1),
(7, '2020_06_03_082900_create_investment_packages_table', 1),
(9, '2020_10_16_004759_create_transactions_table', 2),
(10, '2020_12_22_061339_create_admin_wallet_addresses_table', 3),
(11, '2021_11_19_175446_create_user_wallet_addresses_table', 4),
(12, '2021_11_19_175805_create_user_referrals_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_backup` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `valid_id` text COLLATE utf8mb4_unicode_ci,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `referral_number`, `email_verified_at`, `password`, `password_backup`, `image`, `valid_id`, `mobile`, `country`, `state`, `address`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(24, 'Dexter Dexter', 'neutrondeveloper@gmail.com', 'CGL57838426', NULL, '$2y$10$b0w.CRWmHtL4fFPk2iZ6oOrc1uIjBDLtXpUMSPn/6rwexHz/f60fS', '11111111', '1637506211tierra-mallorca-NpTbVOkkom8-unsplash.jpg', '1637506211tierra-mallorca-NpTbVOkkom8-unsplash.jpg', NULL, 'Algeria', 'Ain Temouchent', NULL, 1, NULL, '2021-11-21 13:50:11', '2021-11-21 13:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_referrals`
--

DROP TABLE IF EXISTS `user_referrals`;
CREATE TABLE IF NOT EXISTS `user_referrals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `referee_id` bigint(20) NOT NULL,
  `referee_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wallet_addresses`
--

DROP TABLE IF EXISTS `user_wallet_addresses`;
CREATE TABLE IF NOT EXISTS `user_wallet_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_wallet_addresses`
--

INSERT INTO `user_wallet_addresses` (`id`, `user_id`, `name`, `address`, `barcode`, `created_at`, `updated_at`) VALUES
(12, NULL, 'Bitcoin', '1GE29MxR6gVUAJ5u167wWtryQMcJebLNo1', 0x31363337363037313534494d475f353130352e68656966, '2021-11-22 17:52:34', '2021-11-22 17:52:34'),
(13, NULL, 'Bitcoin 2', '1GE29MxR6gVUAJ5u167wWtryQMcJebLNo1', 0x313633373630373438366c6f676f322e706e67, '2021-11-22 17:58:06', '2021-11-22 17:58:06'),
(14, NULL, 'Bitcoin 2', '13rWB8DnHgoPQJ8r79gnMaDkFDG9FSNVVd', 0x313633373630373836397469657272612d6d616c6c6f7263612d4e705462564f6b6b6f6d382d756e73706c6173682e6a7067, '2021-11-22 18:04:30', '2021-11-22 18:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
CREATE TABLE IF NOT EXISTS `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `profit` int(11) NOT NULL DEFAULT '0',
  `commission` int(11) NOT NULL DEFAULT '0',
  `bonus` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `amount`, `profit`, `commission`, `bonus`, `created_at`, `updated_at`) VALUES
(13, 24, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

DROP TABLE IF EXISTS `withdrawals`;
CREATE TABLE IF NOT EXISTS `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cryptocurrency` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cryptocurrency_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `withdrawals_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
