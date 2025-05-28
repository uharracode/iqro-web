-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2025 at 03:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iqro`
--

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
-- Table structure for table `home_settings`
--

CREATE TABLE `home_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_click` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image',
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'slider',
  `created_by` int UNSIGNED NOT NULL,
  `updated_by` int UNSIGNED NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_settings`
--

INSERT INTO `home_settings` (`id`, `title`, `path_image`, `path_video`, `url_click`, `type`, `posisi`, `created_by`, `updated_by`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 'Banner 01', 'https://iqro.or.id/wp-content/uploads/2022/11/TKIT-t-600x270.jpg', NULL, NULL, 'image', 'slider', 0, 0, NULL, NULL, NULL),
(2, 'Banner 02', 'https://iqro.or.id/wp-content/uploads/2022/11/SD-tulis-1-600x270.jpg', NULL, NULL, 'image', 'slider', 0, 0, NULL, NULL, NULL),
(3, 'Banner 03', 'https://iqro.or.id/wp-content/uploads/2022/11/SMPI-600x284.jpg', NULL, NULL, 'image', 'slider', 0, 0, NULL, NULL, NULL),
(4, 'Banner 04', 'https://iqro.or.id/wp-content/uploads/2022/11/LTQ.jpeg', NULL, NULL, 'image', 'slider', 0, 0, NULL, NULL, NULL),
(5, 'Banner 05', 'https://iqro.or.id/wp-content/uploads/2022/11/PTQ-600x338.jpeg', NULL, NULL, 'image', 'slider', 0, 0, NULL, NULL, NULL),
(6, 'Banner 06', 'https://iqro.or.id/wp-content/uploads/2022/11/SD-Ac-600x338.jpg', NULL, NULL, 'image', 'slider', 0, 0, NULL, NULL, NULL),
(7, 'Banner 07', 'https://iqro.or.id/wp-content/uploads/2022/11/Cab-Ace-600x338.jpg', NULL, NULL, 'image', 'slider', 0, 0, NULL, NULL, NULL),
(24, 'poster 01', 'https://iqro.or.id/wp-content/uploads/2025/05/hari-nasional-1-600x750.jpg', NULL, NULL, 'image', 'beranda', 0, 0, NULL, NULL, NULL),
(25, 'poster 02', 'https://iqro.or.id/wp-content/uploads/2025/05/hari-nasional-2-600x900.jpg', NULL, NULL, 'image', 'beranda', 0, 0, NULL, NULL, NULL),
(26, 'poster 03', 'https://iqro.or.id/wp-content/uploads/2025/05/hari-nasional-600x600.jpg', NULL, NULL, 'image', 'beranda', 0, 0, NULL, NULL, NULL),
(27, 'HALAL BIHALAL', 'https://iqro.or.id/wp-content/uploads/2025/04/DSC04414-600x400.jpg', NULL, 'https://iqro.or.id/2025/04/28/halal-bihalal-keluarga-yayasan-iqro-bekasi/', 'article', 'beranda', 0, 0, NULL, NULL, NULL),
(28, 'Terimakasih', 'https://iqro.or.id/wp-content/uploads/2025/04/ChatGPT-Image-Apr-28-2025-10_07_36-AM-600x600.png', NULL, 'https://iqro.or.id/2025/04/25/terimakasih/', 'article', 'beranda', 0, 0, NULL, NULL, NULL),
(29, 'Tolong', 'https://iqro.or.id/wp-content/uploads/2025/04/ChatGPT-Image-Apr-23-2025-02_27_45-PM-600x400.png', NULL, 'https://iqro.or.id/2025/04/23/tolong/', 'article', 'beranda', 0, 0, NULL, NULL, NULL),
(30, 'Maaf', 'https://iqro.or.id/wp-content/uploads/2025/04/ChatGPT-Image-Apr-22-2025-12_02_42-PM-600x400.png', NULL, 'https://iqro.or.id/2025/04/22/maaf/', 'article', 'beranda', 0, 0, NULL, NULL, NULL),
(31, 'Permisi', 'https://iqro.or.id/wp-content/uploads/2025/04/ChatGPT-Image-Apr-21-2025-02_16_37-PM-600x400.png', NULL, 'https://iqro.or.id/2025/04/21/permisi/', 'article', 'beranda', 0, 0, NULL, NULL, NULL),
(32, 'HTQ', NULL, NULL, NULL, 'article', 'highlight', 0, 0, NULL, NULL, NULL),
(33, 'Poster-Quotes 01', 'https://iqro.or.id/wp-content/uploads/2025/03/6-scaled.jpg', NULL, NULL, 'image', 'quote', 0, 0, NULL, NULL, NULL),
(34, 'Poster-Quotes 02', 'https://iqro.or.id/wp-content/uploads/2025/03/3-scaled.jpg', NULL, NULL, 'image', 'quote', 0, 0, NULL, NULL, NULL),
(35, 'Poster-Quotes 03', 'https://iqro.or.id/wp-content/uploads/2025/03/5-scaled.jpg', NULL, NULL, 'image', 'quote', 0, 0, NULL, NULL, NULL),
(36, 'Video-Quotes 01', NULL, 'https://iqro.or.id/wp-content/uploads/2025/03/Tidak-pernah-ada-seseorang-yang-tujuan-hidupnya-kesenangan-dunia-kecuali-hatinya-pasti-merasakan-4-hal.mp4', NULL, 'video', 'quote', 0, 0, NULL, NULL, NULL),
(37, 'Video-Quotes 02', '', 'https://iqro.or.id/wp-content/uploads/2025/03/2-1.mp4', NULL, 'video', 'quote', 0, 0, NULL, NULL, NULL),
(38, 'Video-Quotes 03', NULL, 'https://iqro.or.id/wp-content/uploads/2025/03/1-1.mp4', NULL, 'video', 'quote', 0, 0, NULL, NULL, NULL),
(39, 'Poster-Quotes 04', 'https://iqro.or.id/wp-content/uploads/2025/03/4-scaled.jpg', NULL, NULL, 'image', 'quote', 0, 0, NULL, NULL, NULL),
(40, 'Profil Yayasan', NULL, 'https://youtu.be/81iUUYxQjz0', 'https://youtu.be/81iUUYxQjz0', 'video', 'vide-utama', 0, 0, NULL, NULL, NULL),
(41, 'Profil Yayasan', 'https://iqro.or.id/wp-content/uploads/2025/02/profil-final-1024x724.jpg', NULL, 'https://iqro.or.id/profile-yayasan/', 'article', 'profile', 0, 0, NULL, NULL, NULL),
(42, 'Sejarah Yayasan', 'https://iqro.or.id/wp-content/uploads/2025/02/sy-1-3-1536x1086.jpg', NULL, 'https://iqro.or.id/sejarah-yayasan-2/', 'article', 'profile', 0, 0, NULL, NULL, NULL),
(43, 'Visi', 'https://iqro.or.id/wp-content/uploads/2025/02/cvm-iqro_01-1536x1086.jpg', NULL, 'https://iqro.or.id/visi-dan-misi/', 'image', 'visi-misi', 0, 0, NULL, NULL, NULL),
(44, 'Misi', 'https://iqro.or.id/wp-content/uploads/2025/02/cvm-iqro_02-1536x1086.jpg', NULL, 'https://iqro.or.id/visi-dan-misi/', 'image', 'visi-misi', 0, 0, NULL, NULL, NULL),
(45, 'LP', 'https://iqro.or.id/wp-content/uploads/2025/02/Untitled-1-02-1530x1536.png', NULL, 'https://iqro.or.id/lembaga-pendidikan/', 'image', 'logo', 0, 0, NULL, NULL, NULL),
(46, 'LDK', 'https://iqro.or.id/wp-content/uploads/2025/02/Untitled-1-01-1020x1024.png', NULL, 'https://iqro.or.id/elementor-page-4469/', 'image', 'logo', 0, 0, NULL, NULL, NULL),
(47, 'LE', 'https://iqro.or.id/wp-content/uploads/2025/02/le-rbg-600x600.png', NULL, NULL, 'image', 'logo', 0, 0, NULL, NULL, NULL),
(48, 'LTQ', 'https://iqro.or.id/wp-content/uploads/2025/02/ltq-1.png', NULL, 'https://iqro.or.id/ltq/', 'image', 'logo', 0, 0, NULL, NULL, NULL),
(49, 'PTQ', 'https://iqro.or.id/wp-content/uploads/2025/02/ptq-300x300.jpg', NULL, 'https://ptqiqro.com/', 'image', 'logo', 0, 0, NULL, NULL, NULL);

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2025_05_05_041900_create_home_settings_table', 1);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
(1, 'AhmadAdmin', 'a@gmail.com', NULL, '$2y$12$YLi/85q5MPW.8KfcgVy/qOSdeoiD2m2fOpLGftinfpjJCSlAp07xq', '7AhnFlN89ZJJEmmqz2c2AUFZuxeuYZLhtNGHYlGF5A76EWwlZeXQLf0nvVbH', '2025-05-14 19:01:06', '2025-05-14 19:01:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_settings`
--
ALTER TABLE `home_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
