-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 08:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haqeeqi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `short_name`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Games', 'games', '1573668130controller-2923485_960_720.png', '2019-11-12 12:28:33', '2019-11-13 13:02:10'),
(7, 'Fashion', 'fashion', '1573667701fashion-1213161_960_720.png', '2019-11-12 12:32:03', '2019-11-13 12:55:01'),
(8, 'Real Estate', 'real estate', '1573667462building-hd-png-city-png-clipart-1600.png', '2019-11-12 12:32:58', '2019-11-13 12:51:02'),
(9, 'House', 'house', '1573667231house_PNG52.webp', '2019-11-12 12:33:25', '2019-11-13 12:47:11'),
(10, 'Mobiles', 'mobiles', '1573667160IPhone-X-Download-PNG-Image.png', '2019-11-12 12:37:29', '2019-11-13 12:46:00'),
(13, 'Vehicles', 'vehicles', '1573667519motorcycle_PNG5344.webp', '2019-11-12 12:39:17', '2019-11-13 12:51:59'),
(14, 'Furniture', 'furniture', '1573652796Furniture-Download-PNG.png', '2019-11-13 08:45:26', '2019-11-13 08:46:36');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2019_11_11_133552_create_categories_table', 1),
(5, '2019_11_11_134300_create_subcategories_table', 1),
(6, '2019_11_25_084108_create_social_facebook_accounts_table', 2);

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
-- Table structure for table `social_facebook_accounts`
--

CREATE TABLE `social_facebook_accounts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_name`, `short_name`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Racing Cars', 'racing cars', 5, '1573649930adl.jpg', '2019-11-13 05:06:53', '2019-11-13 07:59:07'),
(5, 'Mobiles', 'mobiles', 3, '1573639628iPhone-11-iPhone-XI.jpg', '2019-11-13 05:07:08', '2019-11-13 05:07:08'),
(6, 'LED', 'led', 3, '1573639644high-definition-led-tv-500x500.jpg', '2019-11-13 05:07:24', '2019-11-13 07:57:22'),
(8, 'Wrestling', 'wrestling', 4, '1573639797bray-wyatt.png', '2019-11-13 05:09:57', '2019-11-13 05:09:57'),
(11, 'Cricket', 'cricket', 4, '1573640118India-s-captain-Virat-Kohli-reacts-_16bdcd6dc45_large.jpg', '2019-11-13 05:15:18', '2019-11-13 05:15:18'),
(12, 'Basketball', 'basketball', 4, '1573640240BA3EElitePlus.jpg', '2019-11-13 05:17:20', '2019-11-13 05:17:20'),
(13, 'Sofa', 'sofa', 14, '1573654550kisspng-oil-painting-canvas-print-art-furniture-5a6c2911f23830.8414876515170378419921.jpg', '2019-11-13 09:15:51', '2019-11-13 09:15:51'),
(14, 'Cars', 'cars', 13, '1573654581574377fe5aece2df37e2aaa962184882-700.jpg', '2019-11-13 09:16:21', '2019-11-13 09:16:21'),
(15, 'Apple', 'apple', 10, '1573654601iPhone-11-PRODUCT-RED-600x400.jpg', '2019-11-13 09:16:41', '2019-11-13 09:16:41'),
(16, 'Bike Race', 'bike race', 6, '1573654635harley-davidson-1628420-unsplash.jpg', '2019-11-13 09:17:15', '2019-11-13 09:17:15'),
(17, 'Mansion', 'mansion', 9, '1573654662Amazing-House-in-Amazing-Place-HD-Wallpaper.jpg', '2019-11-13 09:17:42', '2019-11-13 09:17:42'),
(18, 'Residential', 'residential', 8, '1573654766luxury-houses-with-yellow-light-in-modern-villa-at-night-04-HD-picture.jpg', '2019-11-13 09:19:26', '2019-11-13 09:19:26'),
(19, 'Clothes', 'clothes', 7, '157365487271-ZjtOGH9L._UX679_.jpg', '2019-11-13 09:21:12', '2019-11-13 09:21:12'),
(20, 'Shoes', 'shoes', 7, '1573654930Masorini-Mesh-Men-Shoes-Casual-Breathable-Men-Sneakers-Mens-Fashion-Shoe-For-Male-Footwear-Spring-Autumn.jpg', '2019-11-13 09:22:10', '2019-11-13 09:22:10'),
(21, 'Laptop', 'laptop', 3, '1573668345HP-Laptop-PNG-Image-Background.png', '2019-11-13 13:05:45', '2019-11-13 13:05:45'),
(22, 'MotorBikes', 'motorbikes', 13, '1573668431motorcycle_PNG5344.webp', '2019-11-13 13:07:12', '2019-11-13 13:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `provider` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifyToken` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `userimage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT '0',
  `phone_verified` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `provider`, `provider_id`, `password`, `verifyToken`, `phone`, `about`, `userimage`, `type`, `is_verified`, `phone_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@haqeeqi.com', NULL, '', '', '$2y$10$6aiDplM882vRAGiznmLecOKXeaiyb79B0Di1QrxG6V/zvoSTz6iOe', '', '', '', '', 'admin', 0, 0, NULL, NULL, NULL),
(54, 'usmananwar008', 'usmananwar008@outlook.com', NULL, '', '', '$2y$10$QkjudpFwBYmuA0eHu.kdG.yS5JM.2brh4kWbSZA2lPIuZom.NnJG.', '$2y$10$FtM9ExMuzLibVeUT2ry9rO2C50.lGRpKzoukumHfhkIDRi2WjbMTO', NULL, NULL, NULL, 'user', 1, 0, NULL, '2019-11-21 09:27:14', '2019-11-21 09:27:51'),
(55, 'Usman Anwar', 'usmananwar007@outlook.com', NULL, 'linkedin', 'cNpu2Di3nT', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, '2019-11-26 02:28:01', '2019-11-26 02:28:01');

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `social_facebook_accounts`
--
ALTER TABLE `social_facebook_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_facebook_accounts`
--
ALTER TABLE `social_facebook_accounts`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
