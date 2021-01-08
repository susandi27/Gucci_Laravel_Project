-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 04:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gucci_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'BAGS', '/storage/categoryimg/1609409891_bg5.jpg', '2020-12-30 21:18:12', '2020-12-30 21:18:12'),
(6, 'Wallets', '/storage/categoryimg/1609410291_wallet.jpg', '2020-12-30 21:24:51', '2020-12-30 21:24:51'),
(7, 'minibags', '/storage/categoryimg/1609410312_minibag.jpg', '2020-12-30 21:25:12', '2020-12-30 21:25:12'),
(8, 'backpacks', '/storage/categoryimg/1609410329_backpack1.jpg', '2020-12-30 21:25:29', '2020-12-30 21:25:29'),
(9, 'travel bags', '/storage/categoryimg/1609410351_travelbag.jpg', '2020-12-30 21:25:51', '2020-12-30 21:25:51'),
(10, 'glasses', '/storage/categoryimg/1609410389_mglasses.jpg', '2020-12-30 21:26:29', '2020-12-30 21:26:29'),
(11, 'jewellery', '/storage/categoryimg/1609410449_jewellery.jpg', '2020-12-30 21:27:29', '2020-12-30 21:27:29'),
(12, 'tshirt', '/storage/categoryimg/1609410481_tshirt.jpg', '2020-12-30 21:28:01', '2020-12-30 21:28:01'),
(13, 'shirt', '/storage/categoryimg/1609410500_shirt4.jpg', '2020-12-30 21:28:20', '2020-12-30 21:28:20'),
(14, 'sweater', '/storage/categoryimg/1609410548_sweater1.jpg', '2020-12-30 21:29:08', '2020-12-30 21:29:08'),
(15, 'active wear', '/storage/categoryimg/1609410687_orangejacket.jpg', '2020-12-30 21:31:27', '2020-12-30 21:31:27'),
(16, 'pants&shorts', '/storage/categoryimg/1609410716_pnat.jpg', '2020-12-30 21:31:56', '2020-12-30 21:31:56'),
(17, 'socks', '/storage/categoryimg/1609410895_socks.jpg', '2020-12-30 21:34:55', '2020-12-30 21:34:55'),
(18, 'sneaker', '/storage/categoryimg/1609410920_sneaker1.jpg', '2020-12-30 21:35:20', '2020-12-30 21:35:20'),
(19, 'boots', '/storage/categoryimg/1609410936_boot.jpg', '2020-12-30 21:35:36', '2020-12-30 21:35:36'),
(20, 'slippers', '/storage/categoryimg/1609410976_slipper.jpg', '2020-12-30 21:36:16', '2020-12-30 21:36:16'),
(21, 'shoes', '/storage/categoryimg/1609411084_leather lace up.jpg', '2020-12-30 21:38:04', '2020-12-30 21:38:04'),
(22, 'pumps', '/storage/categoryimg/1609411140_leatherpump.jpg', '2020-12-30 21:39:00', '2020-12-30 21:39:00'),
(23, 'hats', '/storage/categoryimg/1609411179_hat7.jpg', '2020-12-30 21:39:39', '2020-12-30 21:39:39'),
(24, 'latest arrivals', '/storage/categoryimg/1609411260_latestproduct.jpg', '2020-12-30 21:41:00', '2020-12-30 21:41:00'),
(25, 'Mid Heel', '/storage/categoryimg/1609417437_midheel1.jpg', '2020-12-30 23:23:57', '2020-12-30 23:23:57'),
(26, 'platform', '/storage/categoryimg/1609417562_sandal.jpg', '2020-12-30 23:26:02', '2020-12-30 23:26:02'),
(27, 'Sandal', '/storage/categoryimg/1609417900_sandal3.jpg', '2020-12-30 23:31:40', '2020-12-30 23:31:40'),
(28, 'Ready To Wear', '/storage/categoryimg/1609739052_readytowear2.jpg', '2021-01-03 23:14:13', '2021-01-03 23:14:13'),
(29, 'Suit', '/storage/categoryimg/1609745784_suit.jpg', '2021-01-04 01:06:24', '2021-01-04 01:06:24'),
(30, 'Jacket', '/storage/categoryimg/1609745807_jacket1.jpg', '2021-01-04 01:06:47', '2021-01-04 01:06:47'),
(31, 'Hoodie', '/storage/categoryimg/1609746120_blackhoodiejpg.jpg', '2021-01-04 01:12:00', '2021-01-04 01:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deliver_date` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `deliver_date`, `name`, `address`, `phone`, `status`, `order_id`, `created_at`, `updated_at`) VALUES
(1, '2021-01-06', 'customer1', 'Yangon', 123456789, 1, 8, '2021-01-06 13:50:44', '2021-01-06 09:01:57'),
(2, '2021-01-08', 'customer2', 'Mandalay', 123456789, 1, 4, '2021-01-06 15:13:36', '2021-01-06 21:11:13'),
(3, '2021-01-07', 'customer10', 'Naypyitaw', 123456789, 1, 7, '2021-01-06 15:14:33', '2021-01-06 22:20:13'),
(4, '2021-01-07', 'customer11', 'Yangon', 123456789, 0, 16, '2021-01-06 21:34:13', '2021-01-06 21:34:13'),
(5, '2021-01-06', 'customer7', 'Yangon', 123456789, 0, 14, '2021-01-06 21:35:42', '2021-01-06 21:35:42'),
(6, '2021-01-06', 'customer7', 'Yangon', 123456789, 0, 10, '2021-01-06 21:35:56', '2021-01-06 21:35:56'),
(7, '2021-01-05', 'customer1', 'Yangon', 123456789, 1, 4, '2021-01-06 21:36:17', '2021-01-06 21:37:33'),
(8, '2021-01-07', 'customer1', 'Yangon', 123456789, 0, 18, '2021-01-06 22:16:54', '2021-01-06 22:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `address`, `phone`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'Yangon', 123456789, 8, '2021-01-05 23:53:52', '2021-01-05 23:53:52'),
(2, 'customer', 'Yangon', 123456789, 8, '2021-01-05 23:55:25', '2021-01-05 23:55:25'),
(3, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:08:17', '2021-01-06 00:08:17'),
(4, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:09:11', '2021-01-06 00:09:11'),
(5, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:10:20', '2021-01-06 00:10:20'),
(6, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:10:38', '2021-01-06 00:10:38'),
(7, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:12:31', '2021-01-06 00:12:31'),
(8, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:12:52', '2021-01-06 00:12:52'),
(9, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:13:40', '2021-01-06 00:13:40'),
(10, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:14:10', '2021-01-06 00:14:10'),
(11, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:15:43', '2021-01-06 00:15:43'),
(12, 'customer7', 'Yangon', 123456789, 6, '2021-01-06 00:19:18', '2021-01-06 00:19:18'),
(13, 'customer11', 'MandaLay', 123456789, 8, '2021-01-06 19:26:17', '2021-01-06 19:26:17'),
(14, 'customer1', 'Yangon', 123456789, 2, '2021-01-06 21:08:42', '2021-01-06 21:08:42'),
(15, 'customer1', 'Yangon', 123456789, 2, '2021-01-06 22:14:48', '2021-01-06 22:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_27_040313_create_categories_table', 1),
(5, '2020_12_27_045300_create_products_table', 1),
(6, '2020_12_27_050158_create_orders_table', 1),
(7, '2020_12_27_052142_create_orderdetails_table', 1),
(8, '2021_01_02_150841_create_permission_tables', 1),
(9, '2021_01_05_164242_create_deliveries_table', 1),
(10, '2021_01_06_061406_create_information_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(2, 'App\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `product_id`, `order_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 51, 4, 2, '2021-01-04 19:56:02', '2021-01-04 19:56:02'),
(2, 8, 5, 1, '2021-01-04 23:45:57', '2021-01-04 23:45:57'),
(3, 49, 5, 1, '2021-01-04 23:45:57', '2021-01-04 23:45:57'),
(4, 48, 5, 1, '2021-01-04 23:45:57', '2021-01-04 23:45:57'),
(5, 48, 6, 1, '2021-01-04 23:49:37', '2021-01-04 23:49:37'),
(6, 63, 6, 1, '2021-01-04 23:49:37', '2021-01-04 23:49:37'),
(7, 9, 6, 1, '2021-01-04 23:49:37', '2021-01-04 23:49:37'),
(8, 8, 6, 1, '2021-01-04 23:49:37', '2021-01-04 23:49:37'),
(9, 51, 7, 1, '2021-01-04 23:51:14', '2021-01-04 23:51:14'),
(10, 65, 7, 1, '2021-01-04 23:51:15', '2021-01-04 23:51:15'),
(11, 32, 8, 1, '2021-01-05 04:28:03', '2021-01-05 04:28:03'),
(12, 64, 8, 1, '2021-01-05 04:28:03', '2021-01-05 04:28:03'),
(13, 32, 9, 1, '2021-01-05 04:33:25', '2021-01-05 04:33:25'),
(14, 64, 9, 1, '2021-01-05 04:33:25', '2021-01-05 04:33:25'),
(15, 36, 10, 1, '2021-01-05 21:08:48', '2021-01-05 21:08:48'),
(16, 51, 11, 1, '2021-01-05 22:40:59', '2021-01-05 22:40:59'),
(17, 62, 12, 1, '2021-01-06 00:02:35', '2021-01-06 00:02:35'),
(18, 51, 12, 1, '2021-01-06 00:02:35', '2021-01-06 00:02:35'),
(19, 69, 12, 1, '2021-01-06 00:02:35', '2021-01-06 00:02:35'),
(20, 61, 13, 1, '2021-01-06 00:04:51', '2021-01-06 00:04:51'),
(21, 62, 13, 1, '2021-01-06 00:04:51', '2021-01-06 00:04:51'),
(22, 3, 14, 1, '2021-01-06 00:07:58', '2021-01-06 00:07:58'),
(23, 22, 14, 1, '2021-01-06 00:07:58', '2021-01-06 00:07:58'),
(24, 23, 15, 1, '2021-01-06 17:13:44', '2021-01-06 17:13:44'),
(25, 54, 16, 1, '2021-01-06 19:25:50', '2021-01-06 19:25:50'),
(26, 56, 16, 1, '2021-01-06 19:25:50', '2021-01-06 19:25:50'),
(27, 34, 17, 1, '2021-01-06 21:08:26', '2021-01-06 21:08:26'),
(28, 51, 18, 2, '2021-01-06 22:13:53', '2021-01-06 22:13:53'),
(29, 4, 18, 1, '2021-01-06 22:13:53', '2021-01-06 22:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderdate` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `orderno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `user_id`, `total`, `status`, `orderno`, `created_at`, `updated_at`) VALUES
(4, '2021-01-05', 2, 11330000, 1, '5ff429a2dd84c', '2021-01-04 19:56:02', '2021-01-04 23:42:34'),
(5, '2021-01-05', 3, 3500000, 1, '5ff45f8511ecc', '2021-01-04 23:45:57', '2021-01-05 01:12:49'),
(6, '2021-01-05', 5, 6223000, 1, '5ff460610eb47', '2021-01-04 23:49:37', '2021-01-04 23:55:13'),
(7, '2021-01-05', 4, 10915000, 1, '5ff460c2d2545', '2021-01-04 23:51:14', '2021-01-04 23:53:04'),
(8, '2021-01-05', 6, 6700000, 0, '5ff4a1a385f0b', '2021-01-05 04:28:03', '2021-01-05 04:28:03'),
(9, '2021-01-05', 6, 6700000, 0, '5ff4a2e50d296', '2021-01-05 04:33:25', '2021-01-05 04:33:25'),
(10, '2021-01-06', 6, 2245000, 1, '5ff530c850d1e', '2021-01-05 21:08:48', '2021-01-06 21:35:56'),
(11, '2021-01-06', 8, 5665000, 0, '5ff54663cc0cd', '2021-01-05 22:40:59', '2021-01-05 22:40:59'),
(12, '2021-01-06', 2, 11865000, 0, '5ff5598330712', '2021-01-06 00:02:35', '2021-01-06 00:02:35'),
(13, '2021-01-06', 3, 4050000, 0, '5ff55a0be8ee4', '2021-01-06 00:04:51', '2021-01-06 00:04:51'),
(14, '2021-01-06', 6, 2300000, 1, '5ff55ac6cacdf', '2021-01-06 00:07:58', '2021-01-06 21:35:42'),
(15, '2021-01-06', 8, 1470000, 0, '5ff64b308d43e', '2021-01-06 17:13:44', '2021-01-06 17:13:44'),
(16, '2021-01-07', 8, 3461000, 1, '5ff66a26856e9', '2021-01-06 19:25:50', '2021-01-06 21:30:58'),
(17, '2021-01-07', 2, 1200000, 1, '5ff6823241aef', '2021-01-06 21:08:26', '2021-01-06 21:23:55'),
(18, '2021-01-07', 2, 12430000, 1, '5ff691892e84f', '2021-01-06 22:13:53', '2021-01-06 22:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `codeno`, `name`, `photo`, `price`, `discount`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(3, '407293DKG001000', 'Leather Shoe', '/storage/productimg/1609414784_leather lace up.jpg', 1200000, 0, 'Black leather/ Made in Italy', 21, '2020-12-30 22:39:44', '2020-12-30 22:39:44'),
(4, '624663 CDZ00 2248', 'Leather Shoe', '/storage/productimg/1609415086_leather lace up1.jpg', 1100000, 0, 'Made in Italy', 21, '2020-12-30 22:44:46', '2020-12-30 22:44:46'),
(5, '625281 DS800 1000', 'Leather Shoe', '/storage/productimg/1609415202_leather lace up2.jpg', 950000, 0, 'Made in Italy', 21, '2020-12-30 22:46:42', '2020-12-30 22:46:42'),
(6, '643721 DTN90 1060', 'Leather Shoe', '/storage/productimg/1609415361_leather lace up3.jpg', 1090000, 0, 'Made in Italy', 21, '2020-12-30 22:49:21', '2020-12-30 22:49:21'),
(7, '625281 DS800 2000', 'Leather Shoe', '/storage/productimg/1609415752_leather lace up4.jpg', 1050000, 0, 'Made in Italy', 21, '2020-12-30 22:55:52', '2020-12-30 22:55:52'),
(8, '‎619891 99WG0 6060', 'sneaker', '/storage/productimg/1609415910_sneaker2.jpg', 1050000, 0, 'Made in Italy', 18, '2020-12-30 22:58:30', '2020-12-30 22:58:30'),
(9, '‎619891 99WG0 6061', 'sneaker', '/storage/productimg/1609415949_sneaker1.jpg', 1050000, 0, 'Made in Italy', 18, '2020-12-30 22:59:09', '2020-12-30 22:59:09'),
(10, '‎619891 99WG0 6062', 'sneaker', '/storage/productimg/1609416177_sneaker5.jpg', 1270000, 0, 'Made in Italy', 18, '2020-12-30 23:02:58', '2020-12-30 23:02:58'),
(11, '‎619891 99SG0 6069', 'Tennis Sneaker', '/storage/productimg/1609416612_tennisneaker2.jpg', 859000, 0, 'Made in Italy', 18, '2020-12-30 23:10:12', '2020-12-30 23:10:12'),
(12, '‎619891 99SG0 6088', 'Tennis Sneaker', '/storage/productimg/1609416671_tennissneaker.jpg', 859000, 0, 'Made in Italy', 18, '2020-12-30 23:11:11', '2020-12-30 23:11:11'),
(13, '‎619891 99TG0 6060', 'High Top Sneaker', '/storage/productimg/1609416754_hightopsneaker.jpg', 1200000, 0, 'Made in Italy', 18, '2020-12-30 23:12:34', '2020-12-30 23:12:34'),
(14, '‎619891 99TG0 6060', 'High Top Sneaker', '/storage/productimg/1609416799_hightopsneaker2.jpg', 1270000, 0, 'Made in Italy', 18, '2020-12-30 23:13:19', '2020-12-30 23:13:19'),
(15, '‎619891 99BG0 6060', 'Boot', '/storage/productimg/1609416947_boot.jpg', 1600000, 1500000, 'Made in Italy', 19, '2020-12-30 23:15:47', '2020-12-30 23:15:47'),
(16, '‎619891 99WG0 6069', 'Boot', '/storage/productimg/1609417038_boot2.jpg', 1300000, 0, 'Made in Italy', 19, '2020-12-30 23:17:18', '2020-12-30 23:17:18'),
(17, '‎619891 99WG0 6067', 'Boot', '/storage/productimg/1609417184_boot4.jpg', 2000000, 1950000, 'Made in Italy', 19, '2020-12-30 23:19:44', '2020-12-30 23:19:44'),
(18, '‎619891 99WG0 6063', 'Sandal', '/storage/productimg/1609417412_sandal.jpg', 1100000, 1000000, 'Made in Italy', 24, '2020-12-30 23:23:32', '2020-12-30 23:23:32'),
(19, '‎619891 99WG0 6064', 'Sandal', '/storage/productimg/1609417973_sandal5.jpg', 1181000, 1100000, 'Made in Italy', 27, '2020-12-30 23:32:53', '2020-12-30 23:32:53'),
(20, '‎619891 99WG0 6060', 'Sandal', '/storage/productimg/1609418036_sandal7.jpg', 1181000, 1100000, 'Made in Italy', 27, '2020-12-30 23:33:56', '2020-12-30 23:33:56'),
(21, '‎619891 99WG0 6062', 'Sandal', '/storage/productimg/1609418073_sandal3.jpg', 1181000, 0, 'Made in Italy', 27, '2020-12-30 23:34:33', '2020-12-30 23:34:33'),
(22, '‎619891 99WG0 6065', 'Leather Pump', '/storage/productimg/1609418239_leatherpump.jpg', 1100000, 1000000, 'Made in Italy', 22, '2020-12-30 23:37:19', '2020-12-30 23:37:19'),
(23, '‎619891 99WG0 6069', 'Platform', '/storage/productimg/1609418440_platform.jpg', 1470000, 0, 'Made in Italy', 26, '2020-12-30 23:40:40', '2020-12-30 23:40:40'),
(24, '‎619891 99WG0 6097', 'Platform', '/storage/productimg/1609418492_platformpump2.jpg', 1470000, 0, 'Made in Italy', 26, '2020-12-30 23:41:32', '2020-12-30 23:41:32'),
(25, '‎619891 99WG0 6070', 'Star Backpack', '/storage/productimg/1609418719_backpack.jpg', 1526000, 1520000, 'Made in Italy', 8, '2020-12-30 23:45:19', '2020-12-30 23:45:19'),
(26, '‎619891 99WG0 6071', 'Backpack', '/storage/productimg/1609418773_backpack.jpg', 1526000, 0, 'Made in Italy', 8, '2020-12-30 23:46:13', '2020-12-30 23:46:13'),
(27, '‎619891 99WG0 6071', 'mini round bag', '/storage/productimg/1609418894_minibag.jpg', 1854000, 1800000, 'Made in Italy', 7, '2020-12-30 23:48:14', '2020-12-30 23:48:14'),
(28, '625281 DS800 1300', 'mini bag', '/storage/productimg/1609419127_minibag1.jpg', 1394000, 0, 'Made in Italy', 7, '2020-12-30 23:52:07', '2020-12-30 23:52:07'),
(29, '625281 DS800 1100', 'mini top handle bag', '/storage/productimg/1609419200_bg5.jpg', 2700000, 0, 'Made in Italy', 7, '2020-12-30 23:53:20', '2020-12-30 23:53:20'),
(30, '625281 DS800 1004', 'mini bag', '/storage/productimg/1609419349_minibag2.jpg', 2700000, 2600000, 'Made in Italy', 7, '2020-12-30 23:55:49', '2020-12-30 23:55:49'),
(31, '625281 DS800 1004', 'Travel bag', '/storage/productimg/1609419581_travelbag.jpg', 2620000, 0, 'Made in Italy', 9, '2020-12-30 23:59:41', '2020-12-30 23:59:41'),
(32, '625281 DS800 1034', 'Grid Backpack', '/storage/productimg/1609419750_travelbag1.jpg', 2700000, 2600000, 'Made in Italy', 9, '2020-12-31 00:02:30', '2020-12-31 00:02:30'),
(33, '625281 DS800 1008', 'leather bag', '/storage/productimg/1609419847_travelbag2.jpg', 3303000, 0, 'Made in Italy', 9, '2020-12-31 00:04:07', '2020-12-31 00:04:07'),
(34, '625281 DS800 1045', 'grid mini bag', '/storage/productimg/1609419940_travelbag3.jpg', 1200000, 0, 'Made in Italy', 9, '2020-12-31 00:05:40', '2020-12-31 00:05:40'),
(35, '625281 DS800 1005', 'Medium tote bag', '/storage/productimg/1609421557_tote1.jpg', 2340000, 0, 'Made in Italy', 5, '2020-12-31 00:32:38', '2020-12-31 00:32:38'),
(36, '625281 DS800 1095', 'Medium tote bag', '/storage/productimg/1609421617_tote2.jpg', 2245000, 0, 'Made in Italy', 5, '2020-12-31 00:33:37', '2020-12-31 00:33:37'),
(37, '457095 X5L89 1948', 'T-Shirt', '/storage/productimg/1609513603_blackshirt.jpg', 789000, 780000, 'Made in Italy', 12, '2021-01-01 02:06:45', '2021-01-01 02:06:45'),
(38, '457095 X5L89 1945', 't-shirt', '/storage/productimg/1609513659_whiteshirt.jpg', 789000, 0, 'Made in Italy', 12, '2021-01-01 02:07:40', '2021-01-01 02:07:40'),
(39, '628412 XKBH9 2184', 'Ready To Wear', '/storage/productimg/1609739108_sweater.jpg', 2634000, 0, 'Made in Italy', 28, '2021-01-03 23:15:08', '2021-01-03 23:15:08'),
(40, '‎625351 XJCN3 4645', 'Ready To Wear', '/storage/productimg/1609742805_readytowear.jpg', 1500000, 0, 'Made in Italy', 28, '2021-01-04 00:16:45', '2021-01-04 00:16:45'),
(41, '625351 XJCN3 4643', 'Ready To Wear', '/storage/productimg/1609742858_readytowear3.jpg', 1460000, 0, 'Made in Italy', 28, '2021-01-04 00:17:38', '2021-01-04 00:17:38'),
(42, '200035 KQWBG 9791', 'Baseball hat', '/storage/productimg/1609743176_hat5.jpg', 512000, 0, 'Made in Italy', 23, '2021-01-04 00:22:56', '2021-01-04 00:22:56'),
(43, '200035 KQWBG 9792', 'Baseball hat', '/storage/productimg/1609743353_hat8.jpg', 512000, 0, 'Made in Italy', 23, '2021-01-04 00:25:53', '2021-01-04 00:25:53'),
(44, '200035 KQWBG 9795', 'hat', '/storage/productimg/1609743460_hat9.jpg', 819000, 0, 'Made in Italy', 23, '2021-01-04 00:27:40', '2021-01-04 00:27:40'),
(45, '200035 KQSBG 9793', 'sun glasses', '/storage/productimg/1609743573_mglasses.jpg', 659000, 0, 'Made in Italy', 10, '2021-01-04 00:29:33', '2021-01-04 00:29:33'),
(46, '200035 KQSBG 9791', 'sun glasses', '/storage/productimg/1609743679_mglasses2.jpg', 761000, 0, 'Made in Italy', 10, '2021-01-04 00:31:19', '2021-01-04 00:31:19'),
(47, '200035 KQSBG 9799', 'sun glasses', '/storage/productimg/1609743726_mglasses1.jpg', 654000, 0, 'Made in Italy', 10, '2021-01-04 00:32:06', '2021-01-04 00:32:06'),
(48, '200035 KQMBG 9794', 'Mid Heel', '/storage/productimg/1609743869_midheel.jpg', 1200000, 0, 'Made in Italy', 25, '2021-01-04 00:34:29', '2021-01-04 00:34:29'),
(49, '200035 KQMBG 9795', 'Mid Heel', '/storage/productimg/1609743941_midheel1.jpg', 1250000, 0, 'Made in Italy', 25, '2021-01-04 00:35:42', '2021-01-04 00:35:42'),
(50, '200035 KQMBG 9794', 'Double Flower', '/storage/productimg/1609744109_DoubleGFlowerRing.jpg', 2564000, 0, 'Made in Italy', 11, '2021-01-04 00:38:29', '2021-01-04 00:38:29'),
(51, '200035 KQMBG 9796', 'Flora Diamond', '/storage/productimg/1609744221_floradiamond.jpg', 5665000, 0, 'Made in Italy', 11, '2021-01-04 00:40:21', '2021-01-04 00:40:21'),
(52, 'v200035 KQMBG 9794', 'Necklace', '/storage/productimg/1609744297_necklace.jpg', 9800000, 0, 'Made in Italy', 11, '2021-01-04 00:41:37', '2021-01-04 00:41:37'),
(53, '200035 KQMBG 9797', 'duck sock', '/storage/productimg/1609744437_sock.jpg', 560000, 0, 'Made in Italy', 17, '2021-01-04 00:43:57', '2021-01-04 00:43:57'),
(54, '200035 KQMBG 9798', 'Pant', '/storage/productimg/1609744722_pnat.jpg', 1861000, 0, 'Made in Italy', 16, '2021-01-04 00:48:42', '2021-01-04 00:48:42'),
(55, '200035 KQMBG 9795', 'Pant', '/storage/productimg/1609744883_pant1.jpg', 1460000, 0, 'Made in Italy', 16, '2021-01-04 00:51:23', '2021-01-04 00:51:23'),
(56, '200035 KQMBG 9792', 'short pant', '/storage/productimg/1609744934_pant.jpg', 1600000, 0, 'Made in Italy', 16, '2021-01-04 00:52:14', '2021-01-04 00:52:14'),
(57, '200035 KQMBG 9792', 'Wallet', '/storage/productimg/1609745117_wallet.jpg', 623000, 0, 'Made in Italy', 6, '2021-01-04 00:55:17', '2021-01-04 00:55:17'),
(58, '200035 KQMBG 9794', 'Wallet', '/storage/productimg/1609745244_wallet1.jpg', 750000, 0, 'Made in Italy', 6, '2021-01-04 00:57:24', '2021-01-04 00:57:24'),
(59, '200035 KQMBG 9794', 'Wallet', '/storage/productimg/1609745315_wallet2.jpg', 740000, 0, 'Made in Italy', 6, '2021-01-04 00:58:35', '2021-01-04 00:58:35'),
(60, '200035 KQMBG 9794', 'sweater', '/storage/productimg/1609745488_sweater1.jpg', 2600000, 0, 'Made in Italy', 14, '2021-01-04 01:01:28', '2021-01-04 01:01:28'),
(61, '200035 KQMBG 9790', 'sock', '/storage/productimg/1609745537_socks.jpg', 600000, 0, 'Made in Italy', 17, '2021-01-04 01:02:17', '2021-01-04 01:02:17'),
(62, '200035 KQMBG 9791', 'sweater', '/storage/productimg/1609745651_sweater2.jpg', 3450000, 0, 'Made in Italy', 14, '2021-01-04 01:04:11', '2021-01-04 01:04:11'),
(63, '200035 KQMBG 9794', 'sweater', '/storage/productimg/1609745751_sweater3.jpg', 2923000, 0, 'Made in Italy', 14, '2021-01-04 01:05:51', '2021-01-04 01:05:51'),
(64, '200035 KQMBG 9794', 'Suit', '/storage/productimg/1609745926_suit.jpg', 4000000, 0, 'Made in Italy', 29, '2021-01-04 01:08:46', '2021-01-04 01:08:46'),
(65, '200035 KQMBG 9794', 'GG jacket', '/storage/productimg/1609746015_jacket1.jpg', 5250000, 0, 'Made in Italy', 30, '2021-01-04 01:10:15', '2021-01-04 01:10:15'),
(66, '200035 KQMBG 9794', 'Jacket', '/storage/productimg/1609746073_jacket.jpg', 4360000, 0, 'Made in Italy', 30, '2021-01-04 01:11:13', '2021-01-04 01:11:13'),
(67, '200035 KQMBG 9794', 'Hoodie', '/storage/productimg/1609746224_blackhoodiejpg.jpg', 1701500, 0, 'Made in Italy', 31, '2021-01-04 01:13:44', '2021-01-04 01:13:44'),
(68, '200035 KQMBG 9794', 'Hoodie', '/storage/productimg/1609746255_blackoversizesweatshirt.jpg', 1800000, 0, 'Made in Italy', 31, '2021-01-04 01:14:15', '2021-01-04 01:14:15'),
(69, '200035 KQMBG 9794', 'mini bag', '/storage/productimg/1609747111_bg1.jpg', 2750000, 0, 'Made in Italy', 7, '2021-01-04 01:28:31', '2021-01-04 01:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-01-02 08:53:30', '2021-01-02 08:53:30'),
(2, 'customer', 'web', '2021-01-02 08:53:30', '2021-01-02 08:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2021-01-01 12:27:36', '$2y$10$HJfc1K5znXawKjufv86HsuYIQqkTtN3XVRxYcfr3IceARuOLjxOrW', NULL, '2021-01-02 08:36:18', '2021-01-02 08:36:18'),
(2, 'customer1', 'customer1@gmail.com', '2021-01-01 12:27:41', '$2y$10$Yny12FOaO/cte3AmNlTqKebEXSPJVaX0r4czRfU2Wd1XFz8iHskC6', NULL, '2021-01-02 08:58:03', '2021-01-02 08:58:03'),
(3, 'customer2', 'customer2@gmail.com', '2021-01-01 12:27:47', '$2y$10$0ute2rHCNm.qYW2p1maJreR2Gu4EDHOxxs/yIhnhoMAWCAZksKit.', NULL, '2021-01-02 09:00:47', '2021-01-02 09:00:47'),
(4, 'customer10', 'customer10@gmail.com', NULL, '$2y$10$i0jXMWWtJSJN8o8SxYaLTeUrIsirvi54VZg2kBsOq7oGegqOCvbzu', NULL, '2021-01-05 02:30:03', '2021-01-05 02:30:03'),
(5, 'customer9', 'customer9@gmail.com', NULL, '$2y$10$2Wzz/lZPGWJgFvJo4Ntcs.fbJpkDD8B6db1Rix/sL8rFBMsYiKGsy', NULL, '2021-01-05 02:31:06', '2021-01-05 02:31:06'),
(6, 'customer7', 'customer7@gmail.com', NULL, '$2y$10$2Ke8mX1thF2kiB29rkAUROPEYc26UpDl.AXls19DAXF24BrstfPlG', NULL, '2021-01-05 10:56:54', '2021-01-05 10:56:54'),
(7, 'customer5', 'customer5@gmail.com', NULL, '$2y$10$Vq/MKQyiB7abPdytHQkqRe0RI7hcqfJIVDw5L42kSfk5GlpXAwQq.', NULL, '2021-01-05 16:45:34', '2021-01-05 16:45:34'),
(8, 'customer11', 'customer11@gmail.com', NULL, '$2y$10$iT.Ha.molWjXqK3hqITVP.kCeHBdIUbKCnBx7oRd10gZyh2mj4MvW', NULL, '2021-01-05 21:47:40', '2021-01-05 21:47:40'),
(9, 'customer12', 'customer12@gmail.com', NULL, '$2y$10$llXPqsROMdi3gHKE60FT9uRdTbw1XwTCIVqOVmOc7mOZgqj78FEJe', NULL, '2021-01-05 21:50:46', '2021-01-05 21:50:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveries_order_id_foreign` (`order_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `information_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetails_product_id_foreign` (`product_id`),
  ADD KEY `orderdetails_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderdetails_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
