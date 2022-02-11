-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 11, 2022 at 03:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meows`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_category`, `created_at`, `updated_at`) VALUES
(1, 'Kesehatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `text`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'tes123', 1, 1, '2022-01-24 19:22:10', '2022-01-24 19:22:10'),
(4, 'tes123123123', 1, 1, '2022-01-24 19:41:21', '2022-01-24 19:41:21'),
(5, 'tes1234', 1, 1, '2022-02-09 03:48:01', '2022-02-09 03:48:01'),
(6, 'error ini mah', 1, 1, '2022-02-09 04:02:34', '2022-02-09 04:02:34'),
(7, 'qweasdzxc', 1, 1, '2022-02-09 04:06:19', '2022-02-09 04:06:19'),
(8, 'tes1234123', 1, 1, '2022-02-09 04:08:14', '2022-02-09 04:08:14'),
(9, 'qweasdzxcvfesxfgewd', 1, 1, '2022-02-09 04:10:40', '2022-02-09 04:10:40'),
(10, 'qweasdzxcvfesxfgewd', 1, 1, '2022-02-09 04:11:54', '2022-02-09 04:11:54'),
(11, 'tes1234123', 1, 1, '2022-02-09 04:17:34', '2022-02-09 04:17:34'),
(12, 'gasskeun', 1, 1, '2022-02-09 04:18:24', '2022-02-09 04:18:24'),
(13, 'tes1234123', 1, 1, '2022-02-09 04:20:40', '2022-02-09 04:20:40'),
(14, 'tes1234123', 1, 1, '2022-02-09 04:20:51', '2022-02-09 04:20:51'),
(15, 'qweqeewrwszvgvchhf', 1, 1, '2022-02-09 04:24:14', '2022-02-09 04:24:14');

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
-- Table structure for table `img_post`
--

CREATE TABLE `img_post` (
  `id_img` int(11) NOT NULL,
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, '2022_01_14_030601_create_categories_table', 1),
(6, '2022_01_14_030602_create_post_table', 1),
(7, '2022_01_14_030620_create_comment_table', 1),
(8, '2022_01_18_022753_create_likes_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(12, 'App\\Models\\User', 2, 'API Token', '0c3c37f7c7cb604aca352744fcec92323a83693374eaa593529eb96e597cf293', '[\"*\"]', NULL, '2022-02-06 23:39:58', '2022-02-06 23:39:58'),
(24, 'App\\Models\\User', 7, 'API Token', '8ff5282a6e465936cbe89ad44cbff7881dd48a26dec8c322fc062ea1c82c2f57', '[\"*\"]', NULL, '2022-02-09 18:15:58', '2022-02-09 18:15:58'),
(25, 'App\\Models\\User', 8, 'API Token', '42a2935dc6a1672d4e0b948f201c6c926309e60899393898f189ed35037d5bdc', '[\"*\"]', NULL, '2022-02-09 18:17:10', '2022-02-09 18:17:10'),
(26, 'App\\Models\\User', 12, 'API Token', '477eb7e065f5feea8371bb9e7f3bee75633e2679b2854194ee28963329287ad9', '[\"*\"]', NULL, '2022-02-09 18:27:06', '2022-02-09 18:27:06'),
(33, 'App\\Models\\User', 13, 'API Token', '5a21cba5fac56664f49ef7affa33efbf59eda6b5318618040221a56ce5c242dd', '[\"*\"]', '2022-02-10 01:54:24', '2022-02-10 01:54:21', '2022-02-10 01:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_comments` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `thumbnail`, `total_comments`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'qweasdqwe', '<p>asdasdasdasdasdasd</p>\r\n\r\n<p><img alt=\"\" src=\"http://192.168.43.136:8000/storage/photos/1/FB_IMG_1610624324930.jpg\" style=\"height:450px; width:720px\" />asdasdasdasdasdasdasdzczxczxc</p>', 'http://192.168.43.136:8000/storage/photos/1/FB_IMG_1610624324930.jpg', 13, 1, 1, '2022-02-07 19:54:06', '2022-02-09 04:24:14'),
(2, 'qwe123qwe', '<p><img alt=\"\" src=\"http://192.168.43.136:8000/storage/photos/1/FB_IMG_1610624324930.jpg\" style=\"height:250px; width:520px\" />qweasdzxcasdqweasdasdzxczxc</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>qweasdasdasd</p>', NULL, 0, 2, 1, '2022-01-19 21:39:32', '2022-01-19 21:39:32'),
(3, 'Mengapa kucing saya meninggal?', '<p> Kucing saya bla bla bla </p> <h3> yahuuuuu </h3> <ol> <li>asd</li> </ol>', NULL, 0, 2, 1, '2022-01-24 02:06:19', '2022-01-24 02:06:19'),
(4, 'asd', 'qwe', NULL, 0, 2, 1, '2022-01-24 02:06:45', '2022-01-24 02:06:45'),
(5, 'asdfsdfsd', 'xjvcgcgcgcyvhvhv\nhcgchvhbjbkbkb\nvjvjvjvjbjbjb', NULL, 0, 2, 1, '2022-01-24 22:53:54', '2022-01-24 22:53:54'),
(6, 'Mengapa kucing saya meninggal?', '<p> Kucing saya bla bla bla </p> <h3> yahuuuuu </h3> <ol> <li>asd</li> </ol>', NULL, 0, 2, 1, '2022-01-25 00:52:25', '2022-01-25 00:52:25'),
(7, 'yeeeaaaahhhh', 'qweqwgkxhxlxhxlhxlhxkhz', NULL, 0, 1, 1, '2022-02-09 07:54:50', '2022-02-09 07:54:50');

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
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'tes123123', 'everydream4@gmail.com', '2022-01-17 19:39:46', '$2y$10$UCDFGymEryD1d7jMdLidzewsgnHKXsUDov4VhDJAcoy/sD.e2q38u', NULL, 'admin', '2022-01-17 19:38:14', '2022-01-17 19:39:46'),
(2, 'qweasdzxc', 'everydream1234@gmail.com', NULL, '$2y$10$KTY7rw4ROBb0gSCeqkJ.B.2e4p/feDMlJmg/0GXV.zhhLcweeUVse', NULL, 'user', '2022-02-06 23:39:33', '2022-02-06 23:39:33'),
(3, 'tes123123', 'tes@qwe.com', NULL, '$2y$10$ihUCt5sz2Oyz5d/a62nyH.Wcd8xeAt1A2XLIKaZczBzmgRp4ncxlK', NULL, 'user', '2022-02-06 23:51:15', '2022-02-06 23:51:15'),
(13, 'enrayhhh', 'enryu233@gmail.com', '2022-02-09 18:33:00', '$2y$10$NLz/2SCg4OL90xj5DyCIcu.pnvZ9s/H2AMjQqezrkEkJ6BZgRYPti', NULL, 'user', '2022-02-09 18:31:14', '2022-02-09 18:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_post_id_foreign` (`post_id`),
  ADD KEY `comment_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `img_post`
--
ALTER TABLE `img_post`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `img_post_ibfk_1` (`id_post`);

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
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_id_foreign` (`user_id`),
  ADD KEY `post_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_post`
--
ALTER TABLE `img_post`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `img_post`
--
ALTER TABLE `img_post`
  ADD CONSTRAINT `img_post_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
