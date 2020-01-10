-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 01:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qadashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `body`, `question_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '<p>The first three</p>', 1, 3, '2020-01-10 11:00:21', '2020-01-10 11:00:21'),
(2, '<p>I think it&#39;s&nbsp;high volt probe</p>', 6, 3, '2020-01-10 11:01:01', '2020-01-10 11:01:01'),
(3, '<p>The interface cannot be instantiated.<br />\r\nAn interface doesn&rsquo;t have any constructors.<br />\r\nInterface only have abstract methods.<br />\r\nA class implements an interface and extends a class.<br />\r\nAn interface can extend multiple interfaces.</p>', 2, 3, '2020-01-10 11:01:35', '2020-01-10 11:01:35'),
(4, '<p>steady long beeps</p>', 5, 3, '2020-01-10 11:02:21', '2020-01-10 11:02:21'),
(5, '<p>one long continuous beep tone</p>', 5, 1, '2020-01-10 11:02:57', '2020-01-10 11:02:57'),
(6, '<p>steady short beep</p>', 5, 1, '2020-01-10 11:03:04', '2020-01-10 11:03:04'),
(7, '<p>no beep</p>', 5, 1, '2020-01-10 11:03:14', '2020-01-10 11:03:14'),
(8, '<p>128.10.2.30</p>', 7, 1, '2020-01-10 11:03:46', '2020-01-10 11:03:46'),
(9, '<p>Overloading is when two or more methods in the same class have the same method name but different parameters(i.e different method signatures).</p>', 3, 1, '2020-01-10 11:04:14', '2020-01-10 11:04:14'),
(10, '<p>Overriding is when two methods having the same method name and parameters (i.e., method signature) but one of the methods is in the parent class and the other is in the child class.</p>', 3, 1, '2020-01-10 11:04:19', '2020-01-10 11:04:19'),
(11, '<p>A stream can be defined as the sequence of data. There is two type of streams.</p>', 9, 1, '2020-01-10 11:04:48', '2020-01-10 11:04:48'),
(12, '<p>InputStream: Used to read data from a source.<br />\r\nOutPut Stream: Used to write data into a destination.</p>', 9, 1, '2020-01-10 11:04:54', '2020-01-10 11:04:54'),
(13, '<p>No it&#39;s&nbsp;loop backs (wrap plugs)</p>', 6, 1, '2020-01-10 11:05:25', '2020-01-10 11:05:25'),
(14, '<p>the first two</p>', 1, 2, '2020-01-10 11:06:18', '2020-01-10 11:06:18'),
(15, '<p>Thanks Joe</p>', 3, 2, '2020-01-10 11:06:52', '2020-01-10 11:06:52'),
(16, '<p>Thank you Joe</p>', 9, 2, '2020-01-10 11:07:17', '2020-01-10 11:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hardware', '2020-01-09 23:00:00', '2020-01-09 23:00:00'),
(2, 'Programming', '2020-01-09 23:00:00', '2020-01-09 23:00:00'),
(3, 'Linux', '2020-01-09 23:00:00', '2020-01-09 23:00:00'),
(4, 'Networking', '2020-01-09 23:00:00', '2020-01-09 23:00:00');

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
(4, '2020_01_09_101200_create_categories_table', 1),
(5, '2020_01_09_110119_create_questions_table', 1),
(6, '2020_01_09_111339_create_answers_table', 1);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject`, `body`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Data Network Identification Code', '<p>How many digits of the DNIC (Data Network Identification Code) identify the country?</p>', 4, 1, '2020-01-10 10:46:32', '2020-01-10 10:46:32'),
(2, 'Class vs Interface?', '<p>Could you explain to me the difference between class and interface?</p>', 2, 1, '2020-01-10 10:48:53', '2020-01-10 10:49:12'),
(3, 'Overloading vs overriding?', '<h3>What is the difference between overloading and overriding?</h3>', 2, 1, '2020-01-10 10:50:46', '2020-01-10 10:50:46'),
(4, 'What is GNU?', '<p>What does GNU stand for?</p>', 3, 2, '2020-01-10 10:52:28', '2020-01-10 10:52:36'),
(5, 'Beep codes', '<p>What beep codes could indicate a system board or power supply failure?</p>', 1, 2, '2020-01-10 10:53:40', '2020-01-10 10:53:40'),
(6, 'Port testing', '<p>What tool is used to test serial and parallel ports?</p>', 1, 2, '2020-01-10 10:54:28', '2020-01-10 10:54:28'),
(7, 'Binary to decimal', '<p>The 32-bit internet address 10000000 00001010 00000010 00011110 how can be written in dotted decimal notation?</p>', 4, 3, '2020-01-10 10:56:37', '2020-01-10 10:56:37'),
(8, 'What does NIS stands for?', '<p>What does&nbsp;NIS stands for?</p>', 3, 3, '2020-01-10 10:57:44', '2020-01-10 10:57:44'),
(9, 'What is a stream?', '<p>Could someone explain what is a stream to me?</p>', 2, 3, '2020-01-10 10:59:35', '2020-01-10 10:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', NULL, '$2y$10$pY4S.l7aHieIXJMo8r7LgOgc48llGm7WALWeCGkUSKGOrOEFTRsk6', NULL, '2020-01-10 10:20:26', '2020-01-10 10:20:26'),
(2, 'Jane Doe', 'janedoe@outlook.com', NULL, '$2y$10$2z2MEDjn9UO2gFdkCEqpHOruWxLobwWDn/getY.bMUhLLrQG9xt/y', NULL, '2020-01-10 10:51:31', '2020-01-10 10:51:31'),
(3, 'Peter Griffin', 'petergriffin@yahoo.com', NULL, '$2y$10$Lr2FwqK6bvlHqXQ71XPFmOZ4TM8WIPfpYKDzO8ze2VhFLwIFOWv8.', NULL, '2020-01-10 10:55:06', '2020-01-10 10:55:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_category_id_foreign` (`category_id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
