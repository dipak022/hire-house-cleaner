-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 09:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homesolve`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assign_tec_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technician_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `assign_tec_id`, `assign_user_id`, `technician_category`, `assign_status`, `created_at`, `updated_at`) VALUES
(6, 'dipak', 'sattay debnath', 'Plumbing & Sanitary Services one', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoty_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoty_name`, `logo`, `created_at`, `updated_at`) VALUES
(13, 'Plumbing & Sanitary Services one', 'media/category/171221_09_33_30.png', NULL, NULL),
(14, 'Painting Services', 'media/category/141221_07_47_35.png', NULL, NULL),
(15, 'Home Cleaning', 'media/category/141221_07_36_35.png', NULL, NULL),
(16, 'Pest Control Service', 'media/category/141221_07_27_35.png', NULL, NULL),
(18, 'AC Servicing', 'media/category/141221_06_02_37.png', NULL, NULL),
(19, 'Services', 'media/category/141221_07_03_20.png', NULL, NULL),
(20, 'Services', 'media/category/141221_07_49_20.png', NULL, NULL),
(21, 'Services', 'media/category/141221_07_23_21.png', NULL, NULL),
(22, 'Services', 'media/category/141221_07_59_21.png', NULL, NULL),
(23, 'Services', 'media/category/141221_07_09_22.png', NULL, NULL),
(24, 'Services', 'media/category/141221_07_19_22.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(11, 'se001', 20, '2021-12-19 17:54:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_17_083807_create_rolls_table', 1),
(5, '2021_03_30_191937_create_category_table', 2),
(6, '2021_03_30_192009_create_subcategory_table', 2),
(7, '2021_03_30_192034_create_brand_table', 2),
(9, '2021_04_01_184751_create_coupon_table', 3),
(10, '2021_04_01_192453_create_newslater_table', 4),
(13, '2021_04_02_095921_create_products_table', 5),
(14, '2018_12_23_120000_create_shoppingcart_table', 6),
(15, '2021_04_04_224306_create_wishlist_table', 6),
(16, '2021_04_05_185828_create_settings_table', 7),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 8),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 8),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 8),
(20, '2016_06_01_000004_create_oauth_clients_table', 8),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 8),
(22, '2021_04_07_210504_create_orders_table', 9),
(23, '2021_04_07_210556_create_order_details_table', 9),
(24, '2021_04_07_210640_create_shipping_table', 9),
(25, '2021_04_08_114509_create_subscribers_table', 10),
(26, '2021_04_08_115850_create_seo_table', 11),
(27, '2021_04_09_114405_create_slider_table', 11),
(28, '2021_08_15_040714_create_trainer_table', 12),
(29, '2021_08_15_044645_create_trainers_table', 13),
(30, '2021_12_17_083950_create_assign_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'YMjBsMmGamV4h0CuX1BlSsKQ0a31eWurCyOitvvn', NULL, 'http://localhost', 1, 0, 0, '2021-04-05 15:38:39', '2021-04-05 15:38:39'),
(2, NULL, 'Laravel Password Grant Client', 'pVtcgNxmEeYEE2ADOhZVVIgB9zjjnoo6uTEGAaHc', 'users', 'http://localhost', 0, 1, 0, '2021-04-05 15:38:39', '2021-04-05 15:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-05 15:38:39', '2021-04-05 15:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blnc_transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status_code` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `names` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `paying_amount`, `blnc_transection`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `payment_type`, `total`, `status`, `status_code`, `return_order`, `month`, `date`, `year`, `created_at`, `updated_at`, `names`, `email`, `phone`, `amount`, `address`, `transaction_id`, `currency`) VALUES
(32, '2', 'card_1K7QvIA4qXiRDztJYC8aOuUr', '10000', 'txn_3K7QvKA4qXiRDztJ0XTgEgnn', '61bba6d53ec4d', '38,000.00', '7', '3', 'stripe', '38,000.00', '4', '206253', '0', 'December', '16-12-21', '2021', NULL, NULL, 'abc', NULL, NULL, NULL, NULL, NULL, NULL),
(33, '2', 'card_1K7QyfA4qXiRDztJZkooIBIj', '10000', 'txn_3K7QyhA4qXiRDztJ0Xm4mQWQ', '61bba7a6db7c3', '38,000.00', '7', '3', 'stripe', '38,000.00', '1', '410691', '0', 'December', '16-12-21', '2021', NULL, NULL, 'a', NULL, NULL, NULL, NULL, NULL, NULL),
(34, '2', 'card_1K7R3tA4qXiRDztJ1DjqINiB', '10000', 'txn_3K7R3vA4qXiRDztJ057ZldUm', '61bba8eab0e7a', '18,100.00', '7', '3', 'stripe', '18,100.00', '1', '307243', '0', 'December', '16-12-21', '2021', NULL, NULL, 'b', NULL, NULL, NULL, NULL, NULL, NULL),
(35, '1', 'card_1K7RVtA4qXiRDztJ2VvjzZLi', '10000', 'txn_3K7RVvA4qXiRDztJ0vbvPWZ8', '61bbafb2a1441', '1,800.00', '7', '3', 'stripe', '1,800.00', '0', '472072', '0', 'December', '16-12-21', '2021', NULL, NULL, 'c', NULL, NULL, NULL, NULL, NULL, NULL),
(36, '2', 'card_1K7bhVA4qXiRDztJ8Hn8wCT4', '10000', 'txn_3K7bhXA4qXiRDztJ1cLrdhmw', '61bc48aa23469', '2,000.00', '7', '3', 'stripe', '2,000.00', '0', '464129', '2', 'December', '17-12-21', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '38', 'card_1K7bqAA4qXiRDztJd8igwnQo', '10000', 'txn_3K7bqBA4qXiRDztJ0d4fRxOq', '61bc4ac297339', '2,000.00', '7', '3', 'stripe', '2,000.00', '3', '691167', '0', 'December', '17-12-21', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '1', 'card_1K7dA0A4qXiRDztJRRRiUk6t', '10000', 'txn_3K7dA2A4qXiRDztJ18kga2rR', '61bc5e9524914', '23,500.00', '7', '3', 'stripe', '23,500.00', '0', '881637', '0', 'December', '17-12-21', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '2', 'card_1K8ipQA4qXiRDztJ2EGpxhA1', '10000', 'txn_3K8ipSA4qXiRDztJ1eZyGjpV', '61c056aaedade', '124,200.00', '7', '3', 'stripe', '124,200.00', '0', '398061', '0', 'December', '20-12-21', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oder_id` int(50) NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approximate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singleprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `oder_id`, `product_id`, `product_name`, `approximate`, `quantity`, `singleprice`, `totalprice`, `created_at`, `updated_at`) VALUES
(17, 33, '9', 'Service Including Material 1', 'sd', '2', '18100', '36200', NULL, NULL),
(18, 33, '8', 'Service Including Material', 'Up to 500 SFT ,Up to 600 SFT', '1', '1800', '1800', NULL, NULL),
(19, 34, '9', 'Service Including Material 1', 'sd', '1', '18100', '18100', NULL, NULL),
(20, 35, '8', 'Service Including Material', 'Up to 500 SFT ,Up to 600 SFT', '1', '1800', '1800', NULL, NULL),
(21, 36, '10', 'ac', '100 ft', '1', '2000', '2000', NULL, NULL),
(22, 37, '10', 'ac', '100 ft', '1', '2000', '2000', NULL, NULL),
(23, 38, '9', 'Service Including Material 1', 'sd', '1', '18100', '18100', NULL, NULL),
(24, 38, '8', 'Service Including Material', 'Up to 500 SFT ,Up to 600 SFT', '3', '1800', '5400', NULL, NULL),
(25, 39, '8', 'Service Including Material', NULL, '8', '1700', '13600', NULL, NULL),
(26, 39, '9', 'Service Including Material 1', 'sd', '3', '18100', '54300', NULL, NULL),
(27, 39, '10', 'ac', '100 ft', '1', '2000', '2000', NULL, NULL),
(28, 39, '9', 'Service Including Material 1', NULL, '3', '18100', '54300', NULL, NULL),
(29, 40, '8', 'Service Including Material', NULL, '1', '1000', '1000', NULL, NULL),
(30, 41, '8', 'Service Including Material', NULL, '1', '800', '800', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approximate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` int(191) NOT NULL,
  `discount_price` int(191) DEFAULT NULL,
  `ex_tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_product` int(11) DEFAULT NULL,
  `new_product` int(11) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_details`, `approximate`, `others`, `selling_price`, `discount_price`, `ex_tax`, `featured_product`, `new_product`, `image_one`, `image_two`, `image_three`, `image_four`, `status`, `created_at`, `updated_at`) VALUES
(8, 13, 14, NULL, 'Service Including Material', 'se2011', '<ul data-v-35a92229=\"\" class=\"ul--general\" style=\"font-family: Poppins, sans-serif; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; scroll-behavior: smooth; padding-left: 18px; color: rgb(33, 37, 41); font-size: 16px; letter-spacing: normal; word-spacing: 1px;\"><li data-v-35a92229=\"\" style=\"margin: 0px; scroll-behavior: smooth; font-size: 12px; color: rgba(0, 0, 0, 0.8) !important;\">All material will be provided by the company (Paint, Putty, masking Tape, Brush and Other Tool)</li><li data-v-35a92229=\"\" style=\"margin: 0px; scroll-behavior: smooth; font-size: 12px; color: rgba(0, 0, 0, 0.8) !important;\">Pricing may change if work scope changes and For Damp Area Pricing will be actual</li></ul>', 'Up to 500 SFT ,Up to 600 SFT', '0', 1800, 800, '50', 1, 1, 'media/product/1719109461644430.jpg', 'media/product/1719109461685962.jpg', 'media/product/1719109461722220.jpg', 'media/product/1719109461758218.jpg', 1, NULL, NULL),
(9, 13, 14, NULL, 'Service Including Material 1', 'se20111', '<p>dssf</p>', NULL, 'dsf fsdf sfddf dsfd csaf sdfdf', 18100, 1500, '4', NULL, 1, 'media/product/1719154655780436.jpg', 'media/product/1719154656255219.jpg', 'media/product/1719154656291595.jpg', 'media/product/1719154656344873.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

CREATE TABLE `rolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rolls`
--

INSERT INTO `rolls` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL),
(3, 'Saller', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_optional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtoube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `vat`, `shipping_charge`, `shopname`, `email`, `phone`, `phone_optional`, `address`, `logo`, `company_name`, `facebook`, `twitter`, `youtoube`, `created_at`, `updated_at`) VALUES
(1, '3', '7', 'abc', 'abc@gnail.com', '0169542544', '01222222224', 'abc', 'media/category/171221_09_40_51.png', NULL, 'facebook.com', 'facebook.com', 'facebook.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `order_id`, `firstname`, `lastname`, `email`, `telephone`, `fax`, `company`, `address_1`, `address_2`, `city`, `postcode`, `country_id`, `zone_id`, `payment`, `comments`, `created_at`, `updated_at`) VALUES
(15, '32', 'xxx', 'xxx', 'xx@gmail.com', 'xx', NULL, NULL, 'Gohat', 'dsd', 'dddd', '3632', 'Sutrapur', NULL, 'stripe', 'xx', NULL, NULL),
(16, '33', 'xxx', 'xxx', 'xx@gmail.com', 'xx', NULL, NULL, 'Gohat', 'dsd', 'dddd', '3632', 'Sutrapur', NULL, 'stripe', 'xx', NULL, NULL),
(17, '34', 'xxx', 'xxx', 'dipakdebnath4022@gmail.com', NULL, NULL, NULL, 'Gohat', NULL, 'Rahimanagar', '3632', 'Sutrapur', NULL, 'stripe', 'fd', NULL, NULL),
(18, '35', 'xxx', 'xxx', 'xx@gmail.com', 'xx', NULL, NULL, 'Gohat', NULL, 'Rahimanagar', '3632', 'Sutrapur', NULL, 'stripe', 'xx', NULL, NULL),
(19, '36', 'dipak s s  s', 'debnath sss', 'ssssss@gmail.com', '01632054022', NULL, NULL, 'Gohat', 'Dhaka', 'Rahimanagar', '3632', 'Sutrapur', NULL, 'stripe', 'jani nah kichu', NULL, NULL),
(20, '37', 'sattay', 'Debnath', 'sattaydeb@gmail.com', '01632054022', NULL, NULL, 'dhaka', 'dhaka', 'dhaka', '1007', 'Sutrapur', NULL, 'stripe', 'sattay', NULL, NULL),
(21, '38', 'xxx', 'xxx', 'asdas', 'sdasd', NULL, NULL, NULL, NULL, NULL, NULL, 'Sutrapur', NULL, 'stripe', 'sffgds', NULL, NULL),
(22, '39', 'dfsdf', 'sdfsdf', 'sdfdsf@gmail.com', 'xx', NULL, NULL, 'Gohat', 'dsf', 'Rahimanagar', '3632', 'Sutrapur', NULL, 'stripe', 'df', NULL, NULL),
(23, '40', 'xxx', 'xxx', 'xxx@gmail.com', 'xx', NULL, NULL, 'Gohat', NULL, 'Rahimanagar', '3632', 'Sutrapur', NULL, 'stripe', 'xxxx', NULL, NULL),
(24, '41', 'zz', 'zz', 'zz@gmail.com', NULL, NULL, NULL, 'zz', 'zz', 'zz', 'zz', 'Sutrapur', NULL, 'stripe', 'zz', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_slider_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_slider_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_slider_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_slider_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `main_slider_1`, `main_slider_2`, `main_slider_3`, `sub_slider_1`, `sub_slider_2`, `sub_slider_3`, `created_at`, `updated_at`) VALUES
(1, 'media/product/1719106317547717.png', 'media/product/1719106318220984.png', 'media/product/1719106318285916.png', 'media/product/1719106318399687.png', 'media/product/1719106318474338.png', 'media/product/1719106318551804.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(9, 18, 'AC Basic Service', NULL, NULL),
(10, 18, 'AC Master Service', NULL, NULL),
(11, 18, 'AC Water Drop Solution', NULL, NULL),
(12, 18, 'Hanging Charge - হ্যাঙ্গিং চার্জ', NULL, NULL),
(13, 18, 'AC Jet Wash', NULL, NULL),
(14, 13, 'Water Meter Servicing', NULL, NULL),
(15, 13, 'Water Tap Servicing', NULL, NULL),
(16, 14, 'Interior Paint', NULL, NULL),
(17, 14, 'Exterior Paint', NULL, NULL),
(18, 15, 'Common Space Cleaning', NULL, NULL),
(19, 15, 'Home Deep Clean', NULL, NULL),
(20, 16, 'Home Pest Control one', NULL, NULL),
(21, 16, 'Home Pest Control two', NULL, NULL),
(22, 13, 'xxxx', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_id` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `user_status` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `te_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tra` varchar(110) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `roll_id`, `user_status`, `email`, `phone`, `te_category`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tra`) VALUES
(1, 'admin', '1', NULL, 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$O1SYDFT/aP.8K8TCS4UQpORazuWKdVTsCa9qfSjDI41g3e8aUwiza', 'GkVxefnE3xmpOp8GAFRWwSUeGt6k2XsVhb5TjuJfK8SaPlX6VuvQ3pg2ECHh', '2021-03-17 02:55:34', '2021-03-17 02:55:34', '1'),
(2, 'user', '2', NULL, 'user@gmail.com', NULL, NULL, NULL, '$2y$10$8y5SAvZ8avpRdJOLskPw6.7wKcdU.9TvjNdvh8dgZu.MKRoHeUJ8.', NULL, '2021-03-17 02:56:01', '2021-03-17 02:56:01', NULL),
(36, 'abc', '2', NULL, 'dipakdebnath@gmail.com', '01785449161', NULL, NULL, '$2y$10$EgGwFoGfVoN42PqSXUZWuexBjB6wRyb44s1limzeT8AWxVSFvTRNu', NULL, NULL, NULL, NULL),
(38, 'sattay debnath', '2', NULL, 'sattay@gmail.com', NULL, NULL, NULL, '$2y$10$SRomCTvtwR5Tg1I8qgkn6e3dEiq9nqDl9OnNxU2sZ8rZZ5zPjHH5O', NULL, '2021-12-17 02:29:25', '2021-12-17 02:29:25', NULL),
(39, 'debnath', '3', NULL, 'debnath@gmail.com', NULL, NULL, NULL, '$2y$10$gAD6WH00mhyUJC7FxydVN.pvxyKgqAcvhi9LS7f6xyPbe.aB86VW2', NULL, '2021-12-17 03:26:04', '2021-12-17 03:26:04', NULL),
(40, 'as', '3', 1, 'as@gmail.com', '01785449161', 'Painting Services', NULL, '$2y$10$/KGPfMiOsUeantaHd9KQaeublB0iwqS3kg9whw4nXbK2INpmEn2wi', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(12, 2, 8, NULL, NULL),
(13, 2, 9, NULL, NULL),
(14, 1, 8, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rolls`
--
ALTER TABLE `rolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rolls`
--
ALTER TABLE `rolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
