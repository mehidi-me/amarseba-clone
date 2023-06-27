-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 11:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amarseba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `mobile`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '01740125203', 'admin@gmail.com', '$2y$10$D6470r7BywjVPNODiU/U5u2irD8jF0PlBVEFMF.uO.XQ.oECWvXPG', '273.jpg', 1, '2023-06-16 14:29:03', '2023-06-16 08:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `category_style`, `created_at`, `updated_at`, `desc`) VALUES
(11, 'নমুনা ইলাস্ট্রেটর ফাইল', '941.png', '1', '2023-06-17 11:33:55', '2023-06-22 01:17:38', 'এই সেবার মাধ্যমে কোন ঝামেলা ছাড়া গ্রামীণফোন, রবি, এয়ারটেল, বাংলালিংক ও টেলিটকে রিচার্জ করুণ।'),
(12, 'প্রয়োজনীয় ফন্ট ডাউনলোড', '753.png', '4', '2023-06-17 11:34:37', '2023-06-22 01:16:59', 'এই সেবার মাধ্যমে কোন ঝামেলা ছাড়া গ্রামীণফোন, রবি, এয়ারটেল, বাংলালিংক ও টেলিটকে রিচার্জ করুণ।'),
(13, 'নমুনা ওয়ার্ড ফাইল', '530.png', '2', '2023-06-22 01:16:24', '2023-06-22 01:16:24', 'এই সেবার মাধ্যমে আপনি বিভিন্ন ধরণের MS Word ফাইলের নমুনা ক্রয় করতে পারবেন।'),
(14, 'সাপ্তাহিক চাকরির খবর', '630.png', '3', '2023-06-22 01:25:07', '2023-06-22 01:27:12', 'এই সেবার মাধ্যমে আপনি বিভিন্ন ধরণের MS Word ফাইলের নমুনা ক্রয় করতে পারবেন।');

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
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sheba_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sheba_price` decimal(10,0) DEFAULT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_10_151003_create_results_table', 1),
(6, '2023_06_16_140803_create_admins_table', 1),
(7, '2023_06_16_180613_create_categories_table', 2),
(8, '2023_06_16_190556_create_shebas_table', 3),
(9, '2023_06_18_200156_create_recharges_table', 4),
(10, '2023_06_20_123740_create_histories_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recharges`
--

CREATE TABLE `recharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_bonus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trnsaction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recharges`
--

INSERT INTO `recharges` (`id`, `user_id`, `amount_total`, `amount_bonus`, `image`, `trnsaction`, `created_at`, `updated_at`, `status`, `type`) VALUES
(8, '1', '120', '123', '333.png', '13233', '2023-06-21 12:58:43', '2023-06-21 12:58:43', '3', 'ব্যাংক এশিয়া'),
(9, '1', '120', '124', '655.png', '1233', '2023-06-22 02:44:27', '2023-06-22 02:44:27', '1', 'ব্যাংক এশিয়া'),
(10, '1', '200', '122', '140.png', '12333', '2023-06-22 02:46:04', '2023-06-22 02:46:04', '0', 'ব্যাংক এশিয়া');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shebas`
--

CREATE TABLE `shebas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sheba_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shabe_version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sheba_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sheba_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cat_name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shebas`
--

INSERT INTO `shebas` (`id`, `category_id`, `sheba_name`, `shabe_version`, `sheba_image`, `sheba_price`, `file`, `created_at`, `updated_at`, `cat_name`, `language`, `front_name`) VALUES
(5, '11', 'বিদ্যালয় লিফলেট', 'Adobe Illustrator CC', '771.png', '5', '530.pdf', '2023-06-22 01:19:29', '2023-06-22 01:23:11', NULL, NULL, NULL),
(6, '13', 'CV, 1 Page, Bangla, Low Education', 'MS Word (Any Version)', '410.png', '5', '736.pdf', '2023-06-22 01:22:58', '2023-06-22 01:22:58', NULL, NULL, NULL),
(7, '14', 'প্রথম পাতা', 'Adobe Illustrator CC', '214.jpg', '4', NULL, '2023-06-22 01:26:16', '2023-06-22 01:31:04', NULL, NULL, NULL),
(8, '11', 'ব্রহ্মপুত্র রেসি. ক. লোগো', 'Adobe Illustrator CS 11', '241.png', '5', '113.pdf', '2023-06-22 03:06:50', '2023-06-22 03:06:50', NULL, NULL, NULL),
(9, '11', 'Certificate', 'Adobe Illustrator 2019', '207.png', '5', '231.pdf', '2023-06-22 03:07:59', '2023-06-22 03:07:59', NULL, NULL, NULL),
(10, '11', 'মগ ডিজাইন', 'Adobe Illustrator CS 11', '618.png', '5', '917.pdf', '2023-06-22 03:08:54', '2023-06-22 03:08:54', NULL, NULL, NULL),
(11, '11', 'Page Border', 'Adobe Illustrator CS 11', '388.png', '5', '462.pdf', '2023-06-22 03:09:45', '2023-06-22 03:09:45', NULL, NULL, NULL),
(12, '11', '১৬ ডিসেম্বর, বিনম্র শ্রদ্ধা', 'Adobe Illustrator 2019', '899.png', '5', '660.pdf', '2023-06-22 03:10:49', '2023-06-22 03:10:49', NULL, NULL, NULL),
(13, '11', 'ইসলামী ব্যাংক লোগো', 'Adobe Illustrator CS 11', '126.png', '5', '173.pdf', '2023-06-22 03:11:45', '2023-06-22 03:11:45', NULL, NULL, NULL),
(14, '11', 'ধানের শিষ লোগো', 'Adobe Illustrator CS 11', '657.png', '5', '851.pdf', '2023-06-22 03:12:39', '2023-06-22 03:12:39', NULL, NULL, NULL),
(15, '11', 'বাংলাদেশ কারিগরি শিক্ষা বোর্ড লোগো', 'Adobe Illustrator 2019', '722.png', '5', '589.pdf', '2023-06-22 03:13:37', '2023-06-22 03:13:37', NULL, NULL, NULL),
(16, '11', 'বাংলাদেশ পল্লী উন্নয়ন বোর্ড লোগো', 'Adobe Illustrator 2019', '856.png', '5', '181.pdf', '2023-06-22 03:14:25', '2023-06-22 03:14:25', NULL, NULL, NULL),
(17, '11', 'বাংলাদেশ সরকার লোগো', 'Adobe Illustrator 2019', '399.png', '5', '240.pdf', '2023-06-22 03:15:38', '2023-06-22 03:15:38', NULL, NULL, NULL),
(18, '11', 'আপনার শিশুকে টিকা দিন লোগো', 'Adobe Illustrator 2019', '938.png', '5', '841.pdf', '2023-06-22 03:16:30', '2023-06-22 03:16:30', NULL, NULL, NULL),
(19, '11', 'আয়োডিন যুক্ত লবন খান লোগো', 'Adobe Illustrator 2019', '385.png', '5', '887.pdf', '2023-06-22 03:17:34', '2023-06-22 03:17:34', NULL, NULL, NULL),
(20, '11', 'বাংলাদেশ ছাত্রলীগ লোগো', 'Adobe Illustrator 2019', '302.png', '5', '800.pdf', '2023-06-22 03:18:29', '2023-06-22 03:18:29', NULL, NULL, NULL),
(21, '11', 'বাংলাদেশ জাতীয়তাবাদী ছাত্রদল লোগো', 'Adobe Illustrator 2019', '966.png', '5', '267.pdf', '2023-06-22 03:19:21', '2023-06-22 03:19:21', NULL, NULL, NULL),
(22, '13', 'CV, 1 Page, Bangla, Medium Education', 'MS Word (Any Version)', '553.png', '5', '698.pdf', '2023-06-22 03:34:42', '2023-06-22 03:34:42', NULL, NULL, NULL),
(23, '13', 'CV, 1 Page, English, Low Education', 'MS Word (Any Version)', '581.png', '5', '872.pdf', '2023-06-22 03:35:19', '2023-06-22 03:35:19', NULL, NULL, NULL),
(24, '13', 'CV, 1 Page, English-1', 'MS Word (Any Version)', '284.png', '5', '270.pdf', '2023-06-22 03:35:47', '2023-06-22 03:35:47', NULL, NULL, NULL),
(25, '13', 'ক্যাশ মেমো, ফটোকপির দোকান', 'MS Word (Any Version)', '701.png', '5', '525.pdf', '2023-06-22 03:36:12', '2023-06-22 03:36:12', NULL, NULL, NULL),
(26, '13', 'ক্যাশ মেমো, স্যানিটারী', 'MS Word (Any Version)', '873.png', '5', '535.pdf', '2023-06-22 03:36:34', '2023-06-22 03:36:34', NULL, NULL, NULL),
(27, '13', 'ক্যাশ মেমো A4 Size', 'MS Word (Any Version)', '847.png', '5', '944.pdf', '2023-06-22 03:36:59', '2023-06-22 03:36:59', NULL, NULL, NULL),
(28, '13', 'ক্যাশ মেমো, মোটর পার্টস', 'MS Word (Any Version)', '256.png', '5', '339.pdf', '2023-06-22 03:37:22', '2023-06-22 03:37:22', NULL, NULL, NULL),
(29, '13', 'ক্যাশ মেমো, Rent-A Car', 'MS Word (Any Version)', '899.png', '5', '606.pdf', '2023-06-22 03:37:48', '2023-06-22 03:37:48', NULL, NULL, NULL),
(30, '13', 'Certificate Translation, English', 'MS Word (Any Version)', '894.png', '5', '221.pdf', '2023-06-22 03:38:12', '2023-06-22 03:38:12', NULL, NULL, NULL),
(31, '13', 'চালান, বাংলা', 'MS Word (Any Version)', '264.png', '5', '148.pdf', '2023-06-22 03:38:36', '2023-06-22 03:38:36', NULL, NULL, NULL),
(32, '13', 'Cover Page, University Assignment', 'MS Word (Any Version)', '611.png', '5', '436.pdf', '2023-06-22 03:39:00', '2023-06-22 03:39:00', NULL, NULL, NULL),
(33, '13', 'কভার পেইজ, উম্মুক্ত বিশ্ববিদ্যালয়', 'MS Word (Any Version)', '268.png', '5', '403.pdf', '2023-06-22 03:39:25', '2023-06-22 03:39:25', NULL, NULL, NULL),
(34, '13', 'জন্ম স্মরনিকা', 'MS Word (Any Version)', '678.png', '5', '452.pdf', '2023-06-22 03:39:47', '2023-06-22 03:39:47', NULL, NULL, NULL),
(35, '13', 'জন্ম স্মরনিকা ২', 'MS Word (Any Version)', '438.png', '5', '448.pdf', '2023-06-22 03:40:13', '2023-06-22 03:40:13', NULL, NULL, NULL),
(36, '14', 'দ্বিতীয় পাতা', 'MS Word (Any Version)', '827.jpg', '5', NULL, '2023-06-22 03:42:37', '2023-06-22 03:42:37', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `centername` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whasapp` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(60,0) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `number`, `image`, `remember_token`, `created_at`, `updated_at`, `username`, `dob`, `address`, `nid`, `centername`, `facebook`, `twitter`, `whasapp`, `balance`) VALUES
(1, 'shahinahmed', 'shakir@gmail.com', NULL, '$2y$10$D6470r7BywjVPNODiU/U5u2irD8jF0PlBVEFMF.uO.XQ.oECWvXPG', '01740125203', '660.jpg', NULL, '2023-06-16 09:08:23', '2023-06-22 02:46:04', 'shahinahmed', '2023-06-17', 'Dhaka Mirpur 1', '454343', 'New Dukan', 'https://www.facebook.com/', 'https://www.facebook.com/sktitfirm/', '01740125203', '305'),
(2, 'shakir khan', NULL, NULL, '$2y$10$nAz8ttIXE0UimEGApPW7D.Qi3adkHL1BmCnMEyr7RtqYKii6Hz0X2', '01740125204', '190.jpg', NULL, '2023-06-16 11:51:55', '2023-06-17 11:11:53', 'mehedi', '2023-06-17', 'Dhaka Mirpur 2', '454343ww', 'New Dukan', 'https://www.facebook.com/sktitfirm/', 'https://www.facebook.com/sktitfirm/', '01740125203', '0');

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
-- Indexes for table `histories`
--
ALTER TABLE `histories`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recharges`
--
ALTER TABLE `recharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `results_email_unique` (`email`);

--
-- Indexes for table `shebas`
--
ALTER TABLE `shebas`
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
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recharges`
--
ALTER TABLE `recharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shebas`
--
ALTER TABLE `shebas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
