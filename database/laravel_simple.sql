-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 07:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$g.Pbhk9f7vzM5NqvhADuo.vIXHM7/qVpyn9tneGeKG3LlrCBuD2dS', 1, NULL, '2024-01-16 06:37:05', '2024-01-16 06:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `description` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Google Pixel 2 XL', 'https://dummyimage.com/200x300/000/fff&text=Google', 'Google Pixel Brand', '2024-01-26 22:56:08', '2024-01-26 22:56:08'),
(5, 'Samsung Galaxy', 'https://dummyimage.com/200x300/000/fff&text=Samsung', 'Samsung Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27'),
(6, 'Apple iPhone 12', 'https://dummyimage.com/200x300/000/fff&text=Iphone', 'Apple Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27'),
(7, 'Google Pixel 2 XL', 'https://dummyimage.com/200x300/000/fff&text=Google', 'Google Pixel Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27'),
(8, 'LG V10 H800', 'https://dummyimage.com/200x300/000/fff&text=LG', 'LG Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27'),
(9, 'Samsung Galaxy', 'https://dummyimage.com/200x300/000/fff&text=Samsung', 'Samsung Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27'),
(10, 'Apple iPhone 12', 'https://dummyimage.com/200x300/000/fff&text=Iphone', 'Apple Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27'),
(11, 'Google Pixel 2 XL', 'https://dummyimage.com/200x300/000/fff&text=Google', 'Google Pixel Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27'),
(12, 'LG V10 H800', 'https://dummyimage.com/200x300/000/fff&text=LG', 'LG Brand', '2024-01-27 00:55:27', '2024-01-27 00:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', '2024-01-16 06:37:05', '2024-01-16 06:37:05'),
(2, 'Pant', '2024-01-16 06:37:05', '2024-01-16 06:37:05'),
(3, 'Shoe', '2024-01-16 06:37:05', '2024-01-16 06:37:05'),
(4, 'Belt', '2024-01-16 06:37:05', '2024-01-16 06:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(70, '2014_10_12_000000_create_users_table', 1),
(71, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(72, '2019_08_19_000000_create_failed_jobs_table', 1),
(73, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(74, '2024_01_03_063027_create_categories_table', 1),
(75, '2024_01_03_063242_create_products_table', 1),
(76, '2024_01_09_033626_create_admins_table', 1),
(77, '2024_01_09_063445_create_editors_table', 1),
(78, '2024_01_27_042454_create_brands_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `shipping_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon` double(8,2) DEFAULT NULL,
  `total_amount` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_method` enum('cod','paypal') NOT NULL DEFAULT 'cod',
  `payment_status` enum('paid','unpaid') NOT NULL DEFAULT 'unpaid',
  `status` enum('new','process','delivered','cancel') NOT NULL DEFAULT 'new',
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL,
  `post_code` varchar(191) DEFAULT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `sub_total`, `shipping_id`, `coupon`, `total_amount`, `quantity`, `payment_method`, `payment_status`, `status`, `name`, `email`, `phone`, `country`, `post_code`, `address`, `created_at`, `updated_at`) VALUES
(9, 'ORD189', NULL, 1100.00, NULL, NULL, 1100.00, 1, 'cod', 'unpaid', 'new', 'ALAUDDIN', 'abc@gmail.com', '0155555', 'bd', NULL, 'jugatola', '2024-02-02 23:54:05', '2024-02-02 23:54:05'),
(10, 'ORD183', NULL, 650.00, NULL, NULL, 650.00, 1, 'cod', 'unpaid', 'new', 'ALAUDDINss', 'helo@gelo.com', '1500000', 'bd', NULL, 'asdasd', '2024-02-02 23:56:36', '2024-02-02 23:56:36'),
(11, 'ORD88', NULL, 650.00, NULL, NULL, 650.00, 1, 'cod', 'unpaid', 'new', 'ALAUDDINss', 'helo@gelo.com', '1500000', 'bd', NULL, 'asdasd', '2024-02-02 23:57:42', '2024-02-02 23:57:42'),
(12, 'ORD331', NULL, 600.00, NULL, NULL, 600.00, 1, 'cod', 'unpaid', 'new', 'rojoni', 'helo@gelo.com', '1500000', 'bd', NULL, 'jugatola', '2024-02-02 23:58:32', '2024-02-02 23:58:32'),
(13, 'ORD176', NULL, 750.00, NULL, NULL, 750.00, 1, 'cod', 'unpaid', 'new', 'rojoni', 'asdasd@sasd.com', '0158080', 'bd', NULL, 'jugatola', '2024-02-03 00:00:34', '2024-02-03 00:00:34'),
(14, 'ORD362', NULL, 600.00, NULL, NULL, 500.00, 1, 'cod', 'unpaid', 'new', 'ALAUDDIN', 'helo@gelo.com', '0155555', 'bd', NULL, 'jugatola', '2024-02-03 00:04:59', '2024-02-03 00:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(100) NOT NULL,
  `description` varchar(512) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `availibility` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `tags`, `price`, `category_id`, `availibility`, `created_at`, `updated_at`) VALUES
(12, 'ALAUDDIN quasemi', 'asdasdasdsad', '1705733251.jpg', '[\"easy\",\"richman\",\"odc\"]', 450.00, 2, 1, '2024-01-20 00:47:31', '2024-01-20 00:47:31'),
(17, 'ALAUDDINss', 'this is updated description', '1705822063.jpg', '[\"easy\",\"odc\"]', 500.00, 1, 1, '2024-01-20 22:28:54', '2024-01-21 01:27:43'),
(18, 'ALAUDDIN quasemiasdsa', 'asdasdasdasd', '1705811814.jpg', '[\"colors\",\"richman\"]', 150.00, 1, 1, '2024-01-20 22:36:54', '2024-01-20 22:36:54'),
(19, 'Skmei Watch', 'asdasdasd', '1706078998.jpg', '[\"colors\",\"richman\"]', 600.00, 4, 1, '2024-01-24 00:49:58', '2024-01-24 00:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mr user', 'abc@gmail.com', NULL, '$2y$12$gfEomFiiYOdw9FD6von4hO1JYPSw5KoKZmybHxGaFRkzWEUYXoPKi', NULL, '2024-01-16 06:37:05', '2024-01-16 06:37:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `editors_email_unique` (`email`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
