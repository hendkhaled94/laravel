-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2018 at 10:30 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.29-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public/images/default.jpg',
  `job` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('Active',' Not Active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `lname`, `image`, `job`, `user_id`, `status`, `location`) VALUES
(1, 'hend', 'samir', 'public/images/gyaqEg7rOTgxAPXvng1l7Y8zxxBIOaEqFPfV0Ifg.jpeg', 'piaaaanno', 4, ' Not Active', '31.042536484645066,31.383837368488344'),
(2, 'hend', 'samir', 'public/images/kUYgTmTfAZ3DuaV6NHnl7BvuOyjwaezxQaWqjBbe.jpeg', 'mmmpiaaaanno', 8, ' Not Active', '31.042536484645066,31.383837368488344'),
(3, 'hend', 'samir', 'public/images/0g3usgSAql8XSV0uAFzCRX8YLUcLAlO4FQW49BSH.jpeg', 'mmmmpiaaaanno', 9, ' Not Active', '31.042536484645066,31.383837368488344'),
(4, 'hend', 'samir', 'public/images/WHGo8jlRO3FVTLs7z6fWwRe6wiNVbFPg91I9mhCM.jpeg', 'piaaaanno', 10, ' Not Active', '31.042536484645066,31.383837368488344'),
(5, 'hend', 'samir', 'public/images/gLpl9jUod3ZlV29wstESKtBlmujlSd11lB1Hcdio.jpeg', 'piaaaanno', 11, ' Not Active', '31.042536484645066,31.383837368488344'),
(6, 'hend', 'samir', 'public/images/uWmCyRDoZgPss10p01SwcvkpbAx4l26CzUI3NeCb.jpeg', 'piaaaanno', 12, ' Not Active', '31.042536484645066,31.383837368488344'),
(7, 'hend', 'samir', 'public/images/f2mcsaweTt8thbJgjlDIFrnVzMXAlYMEsu8apN4c.jpeg', 'piaaaanno', 13, ' Not Active', '31.042536484645066,31.383837368488344'),
(9, 'hend', 'samir', 'public/images/0ByO8hvdl3P2QMsTvqgMS7awvaWrHmXd4JMbABiA.jpeg', 'piaaaanno', 17, ' Not Active', '31.042536484645066,31.383837368488344');

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
(3, '2018_04_16_081932_create_employees_table', 2),
(4, '2018_04_16_091828_add_role_id_to_users_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hend', 'hendaaa@gmail.com', 1, '$2y$10$sT2/X1yzN/XQOoULlqB7n.dj3Quw.9Lu2H7U.KIRMSCfYTZ3fucR.', 'xI2NYid9scq0NLD7wRgN3BNumvd1u7bHC1laSxMw5kkpw0PiGph87Po6AkV2', '2018-04-16 06:12:22', '2018-04-16 06:12:22'),
(4, 'hh', 'mm@m.com', 1, '$2y$10$/MI8P3JKesIrd4Gf9/Qlm.BojZbKxOPjoxNg1hq.YYTIKhWUu5QdW', 'y6tQYNM3WCQp0D1qceIlNMgO6xmPEQefTSWGPcJJxqzANPxr08GTYJyo6AGp', '2018-04-16 17:46:06', '2018-04-16 17:46:06'),
(8, 'mm', 'ss@m.commm', 0, '$2y$10$EZyUWW2oB8brqewKJVdTdOJXSW3IByD4dw.6.zaVlX6gVQjZWMDM6', 'bWTbKLbwxPR0slJaaEz2UXLzKEskWSxFPr1p6HnGkG4mSOIHt7lBj7IxBNI4', '2018-04-16 18:36:38', '2018-04-16 18:36:38'),
(9, 'sss', 'mm@m.commm', 0, '$2y$10$uRtHA.qwaKD2mthyxNZ6gOX40m5UACZVVMNZdhTXtsKATYMHyITkG', '5x4WXrPOGXLaT7E8KhleRQdFU3v9veAbityktbufk6M8Il1bDMRvnyKDv0w8', '2018-04-16 18:46:08', '2018-04-16 18:46:08'),
(10, 'aa', 'test@tes.com', 0, '$2y$10$SfDmmPmT8esTUeoovfFOduiHjU7bWYGrWfuxcIXclKZM6WsjUzj1m', NULL, '2018-04-16 18:48:01', '2018-04-16 18:48:01'),
(11, 'hendsamir', 'mam@m.com', 0, '$2y$10$mJSuWokVycfv60foeFvegesRb0I62TG8Q2LaCKDXYk6y9icrkrBcS', NULL, '2018-04-17 06:42:27', '2018-04-17 06:42:27'),
(12, 'hend', 'abda@m.com', 0, '$2y$10$tUVKKEVlMAveV35G0tmoN.a1z4ogfVGTwmvYx793h67RfDbG3gZ6m', NULL, '2018-04-17 06:45:24', '2018-04-17 06:45:24'),
(13, 'amsdn', 'eme5@yahoo.com', 0, '$2y$10$QdrHgvYSiBZ78PMUUgbLLeFjBGBMA/6Rm3SdVV.sO1yznUxn1Z/K6', NULL, '2018-04-17 07:01:19', '2018-04-17 07:01:19'),
(15, 'asaasnasdnas', 'aaa@aa.com', 0, '$2y$10$4mxzZvTQOL4yJl0xIE28WeZ3l2KpGammXdrSEzcQCuX2gxDVd1QN6', NULL, '2018-04-17 17:04:41', '2018-04-17 17:04:41'),
(17, 'weasnjdnasd', 'sa@yahoo.com', 0, '$2y$10$BS.I/DUVyNK6.VK1e1NPE.rNiHROM672ZQap7sH4m/jf3qevzkwmW', NULL, '2018-04-17 19:00:20', '2018-04-17 19:00:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
