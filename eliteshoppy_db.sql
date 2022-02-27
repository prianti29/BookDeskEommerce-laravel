-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2022 at 09:37 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eliteshoppy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `main_category_id`, `name`, `created_at`, `updated_at`) VALUES
(10, 0, 'wallet', '2022-02-21 23:49:47', '2022-02-22 02:43:04'),
(13, 1, 'Shirt', '2022-02-23 00:48:01', '2022-02-27 08:40:37'),
(16, 1, 'shoe', '2022-02-23 08:50:59', '2022-02-23 08:50:59'),
(18, 0, 'shirt', '2022-02-23 08:51:17', '2022-02-23 08:51:17'),
(21, 0, 'glasses', '2022-02-24 06:39:58', '2022-02-27 08:40:29'),
(23, 0, 'shirt', '2022-02-27 08:40:46', '2022-02-27 08:40:46'),
(24, 1, 'shoe', '2022-02-27 08:40:54', '2022-02-27 08:40:54');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'product_images/Wx2bo4GDOkcHCztfo8s6WBSl9T39oyDhzuXb86Ca.png', 7, '2022-02-23 04:27:17', '2022-02-23 04:27:17'),
(2, 'product_images/qhu5v6RRH6DGRWQLLum16qdcV03jj6R2UeATQhja.png', 7, '2022-02-23 04:27:17', '2022-02-23 04:27:17'),
(3, 'product_images/b417W19l4bNJ1SR7BW0itabNamdQMzT4NAFn8eE1.jpg', 8, '2022-02-24 02:57:34', '2022-02-24 02:57:34'),
(4, 'product_images/crQA56UZ7BayurJInD1N1SfqoKjYZtGbXNF4TPXa.jpg', 8, '2022-02-24 02:57:34', '2022-02-24 02:57:34'),
(5, 'product_images/myenEz5YRLZ24Qqf19oGMn1HsAS5R0BGRwTpC2r4.jpg', 8, '2022-02-24 02:57:34', '2022-02-24 02:57:34'),
(6, 'product_images/LAvYxn16rV2hKU0TYWmv2X00FrBrGr105pWlRPOO.jpg', 8, '2022-02-24 02:57:34', '2022-02-24 02:57:34'),
(7, 'product_images/C7mzWsO12Jy8xu4QywdSxcj8qUchgWOANt0YUoHz.jpg', 9, '2022-02-24 06:42:38', '2022-02-24 06:42:38'),
(8, 'product_images/FZugExTZnYM0KrBg1fmxHskDHA1MwXaVkEfgic61.jpg', 10, '2022-02-24 06:43:11', '2022-02-24 06:43:11'),
(9, 'product_images/m378m3JP1hZMpPy32DEAwxqalCrKAw5XrYhnik6e.jpg', 10, '2022-02-24 06:43:11', '2022-02-24 06:43:11'),
(10, 'product_images/qLk2OOv1kjgk27DQliDuoRYEdEDy3FpCbOMT37JV.jpg', 11, '2022-02-24 06:44:06', '2022-02-24 06:44:06'),
(11, 'product_images/1abjjhlrBKLCBCfWI9d0vFFEDSmOlE1MuoUqaoQi.jpg', 12, '2022-02-27 08:48:37', '2022-02-27 08:48:37'),
(12, 'product_images/Fey99N99DLCr4dj1kO0NjFNTUj36txuXcian1CYd.jpg', 12, '2022-02-27 08:48:37', '2022-02-27 08:48:37');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_19_171956_create_categories_table', 2),
(6, '2022_02_19_172116_create_products_table', 2),
(7, '2022_02_23_092842_drop_images_from_products', 3),
(8, '2022_02_23_093926_create__images_table', 4),
(9, '2022_02_23_094455_create__images_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
  `price` double NOT NULL,
  `discount_amount` double NOT NULL DEFAULT '0',
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` double NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discount_amount`, `featured_image`, `stock`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'test', 600, 0, 'product_images/bSgObgpSKRVOxHuGvcaqB0d0FW4FjjJYHqkwbQlt.png', 25, 'test dscription', 10, '2022-02-23 04:14:35', '2022-02-23 04:14:35'),
(4, 'test 2', 1234, 0, 'product_images/nUBirfluyiokW9g2C0TpyAbClhm9Js51yT68V6r0.png', 12, 'test 2 des', 10, '2022-02-23 04:18:16', '2022-02-23 04:18:16'),
(5, 'test 2', 234, 0, 'product_images/xHwSbmDOIjlSNjGiUhfDQjspBTZXGIDYtiZpCTnp.png', 25, 'test 2', 10, '2022-02-23 04:20:52', '2022-02-23 04:20:52'),
(6, 'shirt', 600, 0, 'product_images/I3u6vHg9dXnIiam9jLJ5uC5NDUaHfcqLL0eDlzdH.png', 25, 'test', 13, '2022-02-23 04:23:00', '2022-02-23 04:23:00'),
(7, 'test', 600, 0, 'product_images/FLLyAt501TNE7CNLohwd1swO459Dm1BykYHsbP4Y.png', 25, 'test', 10, '2022-02-23 04:27:17', '2022-02-23 04:27:17'),
(8, 'bunny', 600, 25, 'product_images/s7TCWLTJ9az8rwjLDAXgmp8ueYk82ZBpziJHzBkp.jpg', 12, '15', 16, '2022-02-24 02:57:34', '2022-02-24 02:57:34'),
(9, 'raybond', 900, 65, 'product_images/tPGJginFgS6XXUSyiiCoF0CbNSVkhH0SoTKcuxk0.jpg', 31, 'beautiful', 21, '2022-02-24 06:42:38', '2022-02-24 06:42:38'),
(11, 'shirt', 100, 0, 'product_images/RlpBJ3jPv4qfEITQczlkI4aBQ6TDNX69JoiSkiCC.jpg', 12, 'test', 18, '2022-02-24 06:44:06', '2022-02-24 06:44:06'),
(12, 'shoe', 1560, 25, 'product_images/Eh5xBxaMbpOQx7mmjix6LOhosWMBPYPjg30RW42X.jpg', 31, 'shoe', 24, '2022-02-27 08:48:37', '2022-02-27 08:48:37');

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
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '2022-02-21 01:04:35', '$2y$10$zlrHWWmug9iUvDwNYIyzju0FesTpF5b19ZBCpGpBo8JwmHK1/Fz16', NULL, 1, NULL, '2022-02-17 23:28:59', '2022-02-21 01:04:35'),
(2, 'p1', 'e1@gmail.com', NULL, '$2y$10$wE3DEC88EDFMkHGMlwCKTeeTwecjdgQgEppFT9qb6R6MLElni9deO', NULL, 0, NULL, '2022-02-17 23:54:31', '2022-02-17 23:54:31'),
(3, 'Prianti Banik', 'priantibanik29@gmail.com', NULL, '$2y$10$PEep.S2uyP3w9y742ELNU.83nUUP8MRb4kjfsQMIYQWvn3RvAeC/m', NULL, 0, NULL, '2022-02-22 10:53:36', '2022-02-22 10:53:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD KEY `products_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
