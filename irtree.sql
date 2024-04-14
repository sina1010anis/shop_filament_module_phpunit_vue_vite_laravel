-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2024 at 06:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irtree`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` int NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `src`, `mode`, `link`, `created_at`, `updated_at`) VALUES
(1, 'test', '/storage/index/b1.jpg', 0, 'test', '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(2, 'test', '/storage/index/b2.jpg', 1, '/test', '2024-04-01 06:19:17', '2024-04-01 06:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('dc6c46441ec4d3cc504e750c289416a6', 'i:2;', 1712499240),
('dc6c46441ec4d3cc504e750c289416a6:timer', 'i:1712499240;', 1712499240);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint UNSIGNED NOT NULL,
  `total_number` int NOT NULL,
  `total_price` bigint NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `total_number`, `total_price`, `user_id`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(7, -2, 0, 22, 1, 1, '2024-04-05 05:16:01', '2024-04-10 11:24:50'),
(11, -2, 0, 22, 1, 1, '2024-04-05 05:16:01', '2024-04-10 11:24:50'),
(15, 1, 75000, 21, 1, 1, '2024-04-10 11:23:50', '2024-04-10 11:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `body`, `user_id`, `status`, `created_at`, `updated_at`, `product_id`) VALUES
(4, 'test_3', 'test_3', 21, 0, '2024-04-08 02:56:58', '2024-04-08 02:56:58', 2),
(5, 'test_3', 'test_3', 21, 0, '2024-04-08 02:57:29', '2024-04-08 02:57:29', 2),
(11, 'testtest', 'testtest', 21, 1, '2024-04-08 13:08:29', '2024-04-08 13:08:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE `factors` (
  `id` bigint UNSIGNED NOT NULL,
  `status` int NOT NULL,
  `price` bigint NOT NULL,
  `number` int NOT NULL,
  `code_pay` bigint NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_sliders`
--

CREATE TABLE `image_sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` int NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_sliders`
--

INSERT INTO `image_sliders` (`id`, `name`, `src`, `mode`, `link`, `created_at`, `updated_at`) VALUES
(1, 'test', '/storage/slider/1.jpg', 0, 'tets', '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(2, 'test', '/storage/slider/2.jpg', 1, '/test', '2024-04-01 06:19:17', '2024-04-01 06:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `index_images`
--

CREATE TABLE `index_images` (
  `id` bigint UNSIGNED NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` int NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `mode`, `link`, `src`, `created_at`, `updated_at`) VALUES
(1, 'صفحه اصلی', 'صفحه-اصلی', 1, '/', 'test', '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(3, 'محصولات', 'محصولات', 0, '/', 'test', '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(4, 'درباره ما', 'درباره-ما', 1, '/about', 'test', '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(5, 'گیاه طبیعی', 'گیاه-طبیعی', 2, '/storage/image_menu/11.jpg', '/storage/image_menu/11.jpg', '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(6, 'لوازم مورد نیاز', 'لوازم-مورد-نیاز', 2, '/storage/image_menu/2.jpg', '/storage/image_menu/2.jpg', '2024-04-01 06:19:17', '2024-04-01 06:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_17_062806_create_products_table', 1),
(5, '2024_03_17_062846_create_cards_table', 1),
(6, '2024_03_17_062907_create_product_prices_table', 1),
(7, '2024_03_17_062918_create_product_images_table', 1),
(8, '2024_03_17_062933_create_index_images_table', 1),
(9, '2024_03_17_062956_create_titel_footers_table', 1),
(10, '2024_03_17_063003_create_sub_footers_table', 1),
(11, '2024_03_17_063011_create_menus_table', 1),
(12, '2024_03_17_063018_create_sub_menus_table', 1),
(13, '2024_03_17_063030_create_comments_table', 1),
(14, '2024_03_17_063042_create_factors_table', 1),
(15, '2024_03_17_063058_create_order_products_table', 1),
(16, '2024_03_17_063108_create_save_products_table', 1),
(17, '2024_03_26_052209_add_menu_id_to_products', 1),
(18, '2024_03_26_055035_create_image_sliders_table', 1),
(19, '2024_03_26_055108_create_banners_table', 1),
(20, '2024_03_31_072325_add_desc_to_products', 1),
(21, '2024_03_31_075005_add_desc_to_products', 1),
(22, '2024_04_08_053438_add_product_id_to_comments', 2),
(23, '2024_04_10_062713_add status to comments', 3),
(24, '2024_04_10_063939_add_status_to_cards', 4),
(25, '2024_04_13_150834_add_view_to_products', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint UNSIGNED NOT NULL,
  `number` int NOT NULL,
  `price` bigint NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `factor_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularity` int NOT NULL,
  `light` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keeping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smal_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `big_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rev` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `index_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NOT NULL,
  `sub_menu_id` bigint UNSIGNED DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `buy`, `view`, `slug`, `popularity`, `light`, `location`, `keeping`, `smal_body`, `big_body`, `rev`, `index_image`, `price`, `sub_menu_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'گیاه زامفولیا', '5', '145', 'گیاه-زامفولیا', 38, 'کم', 'امریکا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/1.jpg', 45000, 3, 5, '2024-04-01 06:14:21', '2024-04-10 10:09:23'),
(2, 'گیاه سانسوریا ساده', '20', '150', 'گیاه-سانسوریا-ساده', 5, 'متوسط', 'ایتاریا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/2.jpg', 55000, 3, 5, '2024-04-01 06:14:21', '2024-04-13 11:27:14'),
(3, 'گیاه سانسوریا ابلغ پر', '11', '550', 'گیاه-سانسوریا-ابلغ-پر', 38, 'کم', 'امریکا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/9.jpg', 75000, 3, 5, '2024-04-01 06:14:21', '2024-04-10 10:09:23'),
(4, 'گیاه سانسنوریا ساده بلند', '5', '200', 'گیاه-سانسنوریا-ساده-بلند', 5, 'متوسط', 'ایتاریا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/10.jpg', 80000, 3, 5, '2024-04-01 06:14:21', '2024-04-13 11:27:14'),
(5, 'گیاه سانسوریا ساده کوچک', '8', '100', 'گیاه-سانسوریا-ساده-کوچک', 38, 'کم', 'امریکا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/11.jpg', 25000, 3, 5, '2024-04-01 06:14:21', '2024-04-10 10:09:23'),
(6, 'گیاه سانسوریا ساده کوچک پر', '9', '310', 'گیاه-سانسوریا-ساده-کوچک-پر', 5, 'متوسط', 'ایتاریا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/12.jpg', 35000, 3, 5, '2024-04-01 06:14:21', '2024-04-13 11:27:14'),
(7, 'گیاه سانسوریا ابلغ بلتد', '21', '440', 'گیاه-سانسوریا-ابلغ-بلند', 38, 'کم', 'امریکا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/13.jpg', 95000, 3, 5, '2024-04-01 06:14:21', '2024-04-10 10:09:23'),
(8, 'گیاه سانسنوریا ابلغ کوچک', '11', '230', 'گیاه-سانسنوریا-ابلغ-کوچک', 5, 'متوسط', 'ایتاریا', 'اسان', 'smal_body', 'big_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_bodybig_body', 'rev', '/storage/products/14.jpg', 40000, 3, 5, '2024-04-01 06:14:21', '2024-04-14 03:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `src`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '/storage/products/3.jpg', 'test', 1, '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(2, '/storage/products/4.jpg', 'test', 1, '2024-04-01 06:19:17', '2024-04-01 06:19:17'),
(3, '/storage/products/5.jpg', 'test', 1, '2024-04-01 06:24:36', '2024-04-01 06:24:36'),
(4, '/storage/products/6.jpg', 'test', 2, '2024-04-01 06:24:36', '2024-04-01 06:24:36'),
(5, '/storage/products/7.jpg', 'test', 2, '2024-04-01 06:44:02', '2024-04-01 06:44:02'),
(6, '/storage/products/8.jpg', 'test', 2, '2024-04-01 06:44:02', '2024-04-01 06:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_prices`
--

CREATE TABLE `product_prices` (
  `id` bigint UNSIGNED NOT NULL,
  `price` bigint NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_prices`
--

INSERT INTO `product_prices` (`id`, `price`, `model`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 75000, 'ML (Size)', 1, '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(2, 45000, 'SL (Size)', 1, '2024-04-01 06:19:17', '2024-04-01 06:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `save_products`
--

CREATE TABLE `save_products` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BBYK2ENKZmhPkusC6814BQ6LDPrpL0IKRetiCIDM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakgwWGZFT0tvbzVqcURuMjE0QWNhZ1c5dVBiQUdUTGhzQ1pUQTVXYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTU5OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcHJvZHVjdC8lREElQUYlREIlOEMlRDglQTclRDklODctJUQ4JUIzJUQ4JUE3JUQ5JTg2JUQ4JUIzJUQ5JTg2JUQ5JTg4JUQ4JUIxJURCJThDJUQ4JUE3LSVEOCVBNyVEOCVBOCVEOSU4NCVEOCVCQS0lREElQTklRDklODglREElODYlREElQTkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1713077190),
('PEBwURXy7O32seEbph32VTvWNTYLhZOjbJpOw6KV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFRmV2tDY3VnNFhQWFR3QWFYc3B3VWJXWkh1OHVrdFZvaUhZTlNBRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jYXRlZ29yeS9tZW51LyVEOCVCMyVEOCVBNyVEOCVCMyVEOSU4OCVEOCVCMSVEQiU4QyVEOCVBNyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1712986007),
('wk1pVMdPEe0lBA5pkcDWN7pdYIZTmn3sL2eVLaz4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1R0WXBkNUwwMW5tdkhpSlRMUHZjQkhBZk1WUnA4bG14MWFFcjlGUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1713021099);

-- --------------------------------------------------------

--
-- Table structure for table `sub_footers`
--

CREATE TABLE `sub_footers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_footer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `name`, `slug`, `src`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'گلدان', 'گلدان', '/storage/image_menu/2.jpg', 5, '2024-04-01 06:14:21', '2024-04-01 06:14:21'),
(2, 'شنکش', 'شنکش', '/storage/image_menu/10.jpg', 5, '2024-04-01 06:19:17', '2024-04-01 06:19:17'),
(3, 'ساسوریا', 'ساسوریا', '/storage/image_menu/6.jpg', 6, '2024-04-01 06:24:36', '2024-04-01 06:24:36'),
(4, 'کاکتوس', 'کاکتوس', '/storage/image_menu/12.jpg', 6, '2024-04-01 06:24:36', '2024-04-01 06:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `titel_footers`
--

CREATE TABLE `titel_footers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(21, 'sina', 'sina1010anis@gmail.com', NULL, '$2y$12$gWGWXKztKXcNuOYSpQT8AeneXhtBYqBAW2yOEKvX7c6gq3O1xJrgK', NULL, '2024-04-05 03:55:41', '2024-04-05 03:55:41'),
(22, '1010', 'sina101@gmail.com', NULL, '$2y$12$gWGWXKzyuKXcNuOYSpQT8AeneXhtBYqBAW2yOEKvX7c6gq3O1xJrgK', NULL, '2024-04-05 03:55:41', '2024-04-05 03:55:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_user_id_foreign` (`user_id`),
  ADD KEY `cards_product_id_foreign` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `factors`
--
ALTER TABLE `factors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factors_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_sliders`
--
ALTER TABLE `image_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_images`
--
ALTER TABLE `index_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`),
  ADD KEY `order_products_factor_id_foreign` (`factor_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_menu_id_foreign` (`menu_id`),
  ADD KEY `products_sub_menu_id_foreign` (`sub_menu_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `save_products`
--
ALTER TABLE `save_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `save_products_user_id_foreign` (`user_id`),
  ADD KEY `save_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_footers`
--
ALTER TABLE `sub_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titel_footers`
--
ALTER TABLE `titel_footers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `factors`
--
ALTER TABLE `factors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_sliders`
--
ALTER TABLE `image_sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `index_images`
--
ALTER TABLE `index_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `save_products`
--
ALTER TABLE `save_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_footers`
--
ALTER TABLE `sub_footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `titel_footers`
--
ALTER TABLE `titel_footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `factors`
--
ALTER TABLE `factors`
  ADD CONSTRAINT `factors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_factor_id_foreign` FOREIGN KEY (`factor_id`) REFERENCES `factors` (`id`),
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `products_sub_menu_id_foreign` FOREIGN KEY (`sub_menu_id`) REFERENCES `sub_menus` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD CONSTRAINT `product_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `save_products`
--
ALTER TABLE `save_products`
  ADD CONSTRAINT `save_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `save_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
