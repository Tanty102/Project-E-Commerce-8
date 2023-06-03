-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 07:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-e-commerce-8`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(22, 'Rolex', 'rolex', '2023-04-17 03:25:40', '2023-04-17 03:25:40'),
(23, 'Cartier', 'cartier', '2023-04-17 03:26:34', '2023-04-17 03:26:34'),
(24, 'Calvin Klein', 'calvin-klein', '2023-04-17 03:26:57', '2023-04-17 03:26:57'),
(25, 'Casio', 'casio', '2023-04-17 03:43:35', '2023-04-17 03:43:35'),
(26, 'Citizen', 'citizen', '2023-04-17 03:44:10', '2023-04-17 03:44:10'),
(27, 'Orient', 'orient', '2023-04-17 03:44:32', '2023-04-17 03:44:32'),
(28, 'G-SHOCK', 'g-shock', '2023-04-17 03:45:39', '2023-04-17 03:45:39'),
(29, 'HUBLOT', 'hublot', '2023-04-17 03:46:38', '2023-04-17 03:46:38'),
(30, 'DANIEL WELLINGTON', 'daniel-wellington', '2023-04-17 03:48:41', '2023-04-17 03:48:41'),
(31, 'Timex', 'timex', '2023-04-17 03:49:08', '2023-04-17 03:49:08'),
(32, 'Mido', 'mido', '2023-04-17 03:49:21', '2023-04-17 03:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Tấn Tỵ', 'admin@gmail.com', '0987654321', 'Vip pro hehe', '2023-04-27 02:51:31', '2023-04-27 02:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `created_at`, `updated_at`, `expiry_date`) VALUES
(6, 'OFF100', 'fixed', '100.00', '1000.00', '2023-04-22 01:13:22', '2023-04-22 01:13:22', '2023-04-22'),
(7, 'OOO', 'fixed', '500000.00', '100000.00', '2023-04-22 02:19:47', '2023-04-22 03:19:38', '2023-04-30'),
(8, 'AAA', 'percent', '20.00', '500000.00', '2023-04-22 02:26:20', '2023-04-22 02:26:20', '2023-04-22'),
(9, 'OFF30', 'percent', '30.00', '1300.00', '2023-04-22 03:03:05', '2023-04-22 03:11:22', '2023-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sel_categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_products` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `sel_categories`, `no_of_products`, `created_at`, `updated_at`) VALUES
(1, '1,2,3,5,8', 8, '2023-04-16 15:10:10', '2023-04-15 22:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `subtitle`, `price`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Tấn Tỵ', '192103', '120', 'http://127.0.0.1:8000/admin/slider/add', '1681609939.jpg', 1, '2023-04-15 18:52:19', '2023-04-15 18:52:19'),
(4, 'Nguyễn Tấn Tỵ', 'DH19TIN03', '4500000', 'http://127.0.0.1:8000/shop', '1681610947.png', 1, '2023-04-15 19:08:11', '2023-04-15 19:09:07');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_22_133638_create_sessions_table', 1),
(7, '2023_03_22_161618_create_categories_table', 2),
(8, '2023_03_22_161656_create_products_table', 2),
(9, '2023_04_14_030634_create_home_sliders_table', 3),
(10, '2023_04_16_035006_create_home_categories_table', 4),
(11, '2023_04_16_141558_create_sales_table', 5),
(12, '2023_04_18_153009_create_coupons_table', 6),
(13, '2023_04_22_093629_add_expiry_date_to_coupons_table', 7),
(14, '2023_04_23_080520_create_orders_table', 8),
(15, '2023_04_23_080607_create_order_items_table', 8),
(16, '2023_04_23_080635_create_shippings_table', 8),
(17, '2023_04_23_080713_create_transactions_table', 8),
(18, '2023_04_26_085558_add_delivered_canceled_date_to_orders_table', 9),
(19, '2023_04_26_140633_create_reviews_table', 10),
(20, '2023_04_26_141346_add_rstatus_to_order_items_table', 10),
(21, '2023_04_27_085719_create_contacts_table', 11),
(22, '2023_04_27_133533_create_settings_table', 12),
(23, '2023_05_29_190131_create_shoppingcart_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` decimal(15,2) DEFAULT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ordered','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `canceled_date`) VALUES
(1, 3, '50000000.00', '0.00', '0.00', '50000000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo 01', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'canceled', 0, '2023-04-23 23:31:53', '2023-04-26 02:45:22', '2023-04-26', '2023-04-26'),
(2, 3, '50000000.00', '0.00', '0.00', '50000000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo 1', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'canceled', 0, '2023-04-23 23:33:42', '2023-04-26 03:34:27', NULL, '2023-04-26'),
(3, 3, '50000000.00', '0.00', '0.00', '50000000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo 1', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-04-23 23:36:17', '2023-04-23 23:36:17', NULL, NULL),
(4, 3, '52400000.00', '0.00', '0.00', '52400000.00', 'ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo2', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'delivered', 1, '2023-04-23 23:45:41', '2023-04-26 02:42:46', '2023-04-26', NULL),
(5, 3, '1320000.00', '0.00', '0.00', '1320000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo 01', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'canceled', 0, '2023-04-24 01:57:53', '2023-04-26 03:35:04', NULL, '2023-04-26'),
(6, 3, '1320000.00', '0.00', '0.00', '1320000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo 01', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-04-24 02:06:53', '2023-04-24 02:06:53', NULL, NULL),
(7, 3, '1320000.00', '0.00', '0.00', '1320000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo1', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-04-24 02:08:22', '2023-04-24 02:08:22', NULL, NULL),
(8, 3, '1320000.00', '0.00', '0.00', '1320000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo1', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-04-24 02:08:54', '2023-04-24 02:08:54', NULL, NULL),
(9, 3, '120000.00', '0.00', '0.00', '120000.00', 'tan ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo1', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-04-24 02:10:03', '2023-04-24 02:10:03', NULL, NULL),
(10, 3, '1200000.00', '0.00', '0.00', '1200000.00', 'ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo3', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '12000', 'ordered', 0, '2023-04-24 02:16:08', '2023-04-24 02:16:08', NULL, NULL),
(11, 3, '1200000.00', '0.00', '0.00', '1200000.00', 'ty', 'nguyen', '0987654321', 'user@gmail.com', 'demo', 'demo3', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '12000', 'canceled', 0, '2023-04-24 02:16:19', '2023-04-26 03:33:57', NULL, '2023-04-26'),
(12, 1, '120000.00', '0.00', '0.00', '120000.00', 'ty', 'nguyen', '0987654321', 'admin@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-04-24 08:15:32', '2023-04-24 08:15:32', NULL, NULL),
(13, 3, '1320000.00', '0.00', '0.00', '1320000.00', 'tan ty', 'nguyen', '0987654321', 'nguyentanty102@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 11:29:23', '2023-05-29 11:29:23', NULL, NULL),
(14, 3, '1490000.00', '0.00', '0.00', '1490000.00', 'tan ty', 'nguyen', '0987654321', 'devgame102@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 11:37:00', '2023-05-29 11:37:00', NULL, NULL),
(15, 3, '410000.00', '0.00', '0.00', '410000.00', 'ty', 'nguyen', '0987654321', 'devgame102@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 11:38:15', '2023-05-29 11:38:15', NULL, NULL),
(16, 3, '120000.00', '0.00', '0.00', '120000.00', 'demo', 'tran', '0987654321', 'devgame102@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 11:41:36', '2023-05-29 11:41:36', NULL, NULL),
(17, 3, '290000.00', '0.00', '0.00', '290000.00', 'như', 'nguyễn', '0987653245', 'nguyenthiquynhnhuu102@gmail.com', 'demo', 'demo', 'Ho Chi Minh', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 11:45:35', '2023-05-29 11:45:35', NULL, NULL),
(18, 3, '120000.00', '0.00', '0.00', '120000.00', 'tan ty', 'nguyễn', '0987654321', 'nguyentanty102@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 11:47:37', '2023-05-29 11:47:37', NULL, NULL),
(19, 3, '120000.00', '0.00', '0.00', '120000.00', 'tan ty', 'nguyen', '0987654321', 'nguyentanty102@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 11:50:06', '2023-05-29 11:50:06', NULL, NULL),
(20, 3, '530000.00', '0.00', '0.00', '530000.00', 'tan ty', 'nguyễn', '0987654321', 'nguyentanty102@gmail.com', 'demo', 'demo', 'Cần Thơ', 'Cần Thơ', 'Việt Nam', '90000', 'ordered', 0, '2023-05-29 12:37:13', '2023-05-29 12:37:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`, `rstatus`) VALUES
(1, 49, 3, '50000000.00', 1, '2023-04-23 23:36:17', '2023-04-23 23:36:17', 0),
(2, 48, 4, '1200000.00', 2, '2023-04-23 23:45:41', '2023-04-26 08:39:33', 1),
(3, 49, 4, '50000000.00', 1, '2023-04-23 23:45:41', '2023-04-27 00:15:24', 1),
(4, 51, 5, '120000.00', 1, '2023-04-24 01:57:53', '2023-04-24 01:57:53', 0),
(5, 48, 5, '1200000.00', 1, '2023-04-24 01:57:53', '2023-04-24 01:57:53', 0),
(6, 51, 6, '120000.00', 1, '2023-04-24 02:06:53', '2023-04-24 02:06:53', 0),
(7, 48, 6, '1200000.00', 1, '2023-04-24 02:06:53', '2023-04-24 02:06:53', 0),
(8, 51, 7, '120000.00', 1, '2023-04-24 02:08:22', '2023-04-24 02:08:22', 0),
(9, 48, 7, '1200000.00', 1, '2023-04-24 02:08:22', '2023-04-24 02:08:22', 0),
(10, 51, 8, '120000.00', 1, '2023-04-24 02:08:54', '2023-04-24 02:08:54', 0),
(11, 48, 8, '1200000.00', 1, '2023-04-24 02:08:54', '2023-04-24 02:08:54', 0),
(12, 51, 9, '120000.00', 1, '2023-04-24 02:10:03', '2023-04-24 02:10:03', 0),
(13, 48, 10, '1200000.00', 1, '2023-04-24 02:16:08', '2023-04-24 02:16:08', 0),
(14, 48, 11, '1200000.00', 1, '2023-04-24 02:16:19', '2023-04-24 02:16:19', 0),
(15, 51, 12, '120000.00', 1, '2023-04-24 08:15:32', '2023-04-24 08:15:32', 0),
(16, 48, 13, '1200000.00', 1, '2023-05-29 11:29:23', '2023-05-29 11:29:23', 0),
(17, 52, 13, '120000.00', 1, '2023-05-29 11:29:23', '2023-05-29 11:29:23', 0),
(18, 48, 14, '1200000.00', 1, '2023-05-29 11:37:00', '2023-05-29 11:37:00', 0),
(19, 53, 14, '290000.00', 1, '2023-05-29 11:37:00', '2023-05-29 11:37:00', 0),
(20, 52, 15, '120000.00', 1, '2023-05-29 11:38:15', '2023-05-29 11:38:15', 0),
(21, 53, 15, '290000.00', 1, '2023-05-29 11:38:15', '2023-05-29 11:38:15', 0),
(22, 52, 16, '120000.00', 1, '2023-05-29 11:41:36', '2023-05-29 11:41:36', 0),
(23, 53, 17, '290000.00', 1, '2023-05-29 11:45:35', '2023-05-29 11:45:35', 0),
(24, 52, 18, '120000.00', 1, '2023-05-29 11:47:37', '2023-05-29 11:47:37', 0),
(25, 51, 19, '120000.00', 1, '2023-05-29 11:50:06', '2023-05-29 11:50:06', 0),
(26, 52, 20, '120000.00', 1, '2023-05-29 12:37:13', '2023-05-29 12:37:13', 0),
(27, 53, 20, '290000.00', 1, '2023-05-29 12:37:13', '2023-05-29 12:37:13', 0),
(28, 51, 20, '120000.00', 1, '2023-05-29 12:37:13', '2023-05-29 12:37:13', 0);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(10,0) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(48, 'sanpam01', 'sanpam01', 'aaa', 'aaaaa', '1200000', NULL, 'ty01', 'instock', 0, 123, '1681729001.jpg', NULL, 22, '2023-04-17 03:56:41', '2023-04-17 03:56:41'),
(49, 'sanpham 02', 'sanpham-02', 'aaa', 'aaa', '50000000', NULL, 'ty02', 'instock', 0, 23, '1681729048.jpg', NULL, 23, '2023-04-17 03:57:28', '2023-04-17 03:57:28'),
(50, 'Đồng hồ Q&Q 42 mm Nam S372J205Y', 'dong-ho-qq-42-mm-nam-s372j205y1', '<h3><strong>Chất lượng v&agrave; số lượng rất tốt</strong></h3>\n<p>m&agrave;u sắc đa dạng</p>\n<p>mẫu m&atilde; ok</p>', '<h3>Mẫu&nbsp;<a title=\"Đồng hồ kim ch&iacute;nh h&atilde;ng, gi&aacute; rẻ, b&aacute;n tại Thế Giới Di Động\" href=\"https://www.thegioididong.com/dong-ho-deo-tay-kim\" target=\"_blank\" rel=\"noopener\">đồng hồ kim</a>&nbsp;n&agrave;y to&aacute;t l&ecirc;n n&eacute;t sang trọng v&agrave; tinh tế, d&agrave;nh ri&ecirc;ng cho c&aacute;c qu&yacute; &ocirc;ng thanh lịch, trẻ trung</h3>\n<p><a title=\"Đồng hồ nam Q&amp;Q S372J205Y ch&iacute;nh h&atilde;ng, gi&aacute; rẻ, b&aacute;n tại Thế Giới Di Động\" href=\"https://www.thegioididong.com/dong-ho-deo-tay/q-q-s372j205y-nam\" target=\"_blank\" rel=\"noopener\">Đồng hồ nam Q&amp;Q S372J205Y</a>&nbsp;l&agrave; chiếc&nbsp;<a title=\"Đồng hồ ch&iacute;nh h&atilde;ng, gi&aacute; rẻ, b&aacute;n tại Thế Giới Di Động\" href=\"https://www.thegioididong.com/dong-ho-deo-tay\" target=\"_blank\" rel=\"noopener\">đồng hồ</a>&nbsp;mang thương hiệu Q&amp;Q uy t&iacute;n v&agrave; chất lượng của Nhật Bản.</p>\n<h3>Lớp vỏ bền bỉ, chắc chắn</h3>\n<p>- Mặt k&iacute;nh c&oacute; độ cứng kh&aacute;, độ trong suốt cao, kh&ocirc;ng l&oacute;a mắt khi xem giờ dưới nắng.</p>\n<ul>\n<li>Khung viền chiếc <a title=\"Đồng hồ nam ch&iacute;nh h&atilde;ng, gi&aacute; rẻ, b&aacute;n tại Thế Giới Di Động\" href=\"https://www.thegioididong.com/dong-ho-deo-tay-nam\" target=\"_blank\" rel=\"noopener\">đồng hồ nam</a>&nbsp;n&agrave;y bền chắc, cứng c&aacute;p, chịu lực tốt, chịu được mọi thời tiết khắc nghiệt.</li>\n<li>\n<h3>Y&ecirc;n t&acirc;m đeo khi tắm, bơi v&igrave; mẫu&nbsp;<a title=\"Đồng hồ Q&amp;Q nam ch&iacute;nh h&atilde;ng, gi&aacute; rẻ, b&aacute;n tại Thế Giới Di Động\" href=\"https://www.thegioididong.com/dong-ho-deo-tay-qq\" target=\"_blank\" rel=\"noopener\">đồng hồ Q&amp;Q nam</a>&nbsp;n&agrave;y c&oacute; hệ số chống nước 100m, kh&ocirc;ng mang khi lặn</h3>\n<p>Lưu &yacute;: Kh&ocirc;ng vặn c&aacute;c n&uacute;m điều khiển khi bơi.&nbsp;</p>\n</li>\n<li>&nbsp;</li>\n</ul>', '577000', '499000.00', 'tyy1', 'instock', 0, 56, '1681805902.jpg', NULL, 26, '2023-04-18 00:57:01', '2023-04-18 01:18:22'),
(51, 'ok-1', 'ok-1', '<p>afgds</p>', '<p>dasdas</p>', '120000', '0.00', 'a1', 'instock', 0, 120, '1682152250.jpg', ',16853740610.jpg,16853740611.jpg,16853740612.jpg,16853740613.jpg,16853740614.jpg', 27, '2023-04-22 01:30:50', '2023-05-29 08:27:41'),
(52, '111', '111', '<p>fsaffasfas</p>', '<p>fasfsafasf</p>', '120000', '100000.00', 'ty03', 'instock', 1, 230, '1684509370.jpg', NULL, 25, '2023-05-19 08:16:10', '2023-05-19 08:16:10'),
(53, 'sanPham2', 'sanpham2', '<p>aaa</p>', '<p>bbb</p>', '290000', '250000.00', 'k1', 'instock', 1, 400, '1685285340.jpg', ',16852853400.jpg,16852853401.jpg,16852853402.jpg,16852853403.jpg,16852853404.jpg', 29, '2023-05-28 07:49:00', '2023-05-28 07:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `order_item_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'Nice Nguyen Tan Ty.', 2, '2023-04-26 08:39:33', '2023-04-26 08:39:33'),
(2, 4, 'Good!', 3, '2023-04-27 00:15:24', '2023-04-27 00:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2023-05-31 02:23:50', 1, NULL, '2023-05-19 08:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fHC7JIzn5uuWOCn9GOR9MYmvc6WJ7aPU8LVTvc1P', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXBHQVNhMnBJMFJmcEpQNTZkVHRuVmlTYkpOY3hYMVhjVUFCYnBuViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbnZpcC9jYXRlZ29yeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1685555673);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `phone2`, `address`, `map`, `twitter`, `facebook`, `pinterest`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '0987654321', '0987654322', 'Cần Thơ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.970622784362!2d105.72008426928102!3d10.008154335981626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08903d92d1d0d%3A0x2c147a40ead97caa!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBOYW0gQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1682586487222!5m2!1svi!2s', '', '#', '#', '#', '#', '2023-04-27 07:48:48', '2023-04-27 08:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 4, 'nhu', 'nguyen', '0987654323', 'user01@gmail.com', 'demo 03', 'demo 04', 'Ho Chi Minh', 'Hồ Chí Minh', 'Việt Nam', '10000', '2023-04-23 23:45:41', '2023-04-23 23:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('user@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"7710715b61033adcf17b8e412218aa1b\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"7710715b61033adcf17b8e412218aa1b\";s:2:\"id\";i:52;s:3:\"qty\";i:1;s:4:\"name\";s:3:\"111\";s:5:\"price\";d:120000;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-05-29 12:38:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 'cod', 'pending', '2023-04-23 23:36:17', '2023-04-23 23:36:17'),
(2, 3, 4, 'cod', 'pending', '2023-04-23 23:45:41', '2023-04-23 23:45:41'),
(3, 3, 9, 'card', 'approved', '2023-04-24 02:10:07', '2023-04-24 02:10:07'),
(4, 1, 12, 'cod', 'pending', '2023-04-24 08:15:32', '2023-04-24 08:15:32'),
(5, 3, 13, 'cod', 'pending', '2023-05-29 11:29:23', '2023-05-29 11:29:23'),
(6, 3, 14, 'cod', 'pending', '2023-05-29 11:37:00', '2023-05-29 11:37:00'),
(7, 3, 15, 'cod', 'pending', '2023-05-29 11:38:15', '2023-05-29 11:38:15'),
(8, 3, 16, 'cod', 'pending', '2023-05-29 11:41:36', '2023-05-29 11:41:36'),
(9, 3, 17, 'cod', 'pending', '2023-05-29 11:45:35', '2023-05-29 11:45:35'),
(10, 3, 18, 'cod', 'pending', '2023-05-29 11:47:37', '2023-05-29 11:47:37'),
(11, 3, 19, 'cod', 'pending', '2023-05-29 11:50:06', '2023-05-29 11:50:06'),
(12, 3, 20, 'cod', 'pending', '2023-05-29 12:37:13', '2023-05-29 12:37:13');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for User or Customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'Tấn Tỵ', 'admin@gmail.com', NULL, '$2y$10$Jz5/oMcNH/2y1hBpXYMiR.38ycmsstQx1qSReMBvFAC1AFv6jOW0W', NULL, NULL, NULL, NULL, NULL, NULL, 'ADM', '2023-03-22 07:03:46', '2023-03-22 07:03:46'),
(2, 'Quỳnh Như', 'nguyenthiquynhnhu132@gmail.com', NULL, '$2y$10$bHzFPUhHQbEfFNR8fU2cNO7uRb63VWSpm1e1FhM8NPxIA0L70iWIu', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2023-03-22 07:04:47', '2023-03-22 07:04:47'),
(3, 'Demo', 'user@gmail.com', NULL, '$2y$10$3tL5AWcAkfRjH.l7R/5wR.eO/BoDNtuGiyfqb1VIjyTemk7WBB4J2', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2023-04-23 02:43:39', '2023-04-27 01:36:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_order_item_id_foreign` (`order_item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
