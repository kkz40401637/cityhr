-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2021 at 08:49 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CityHr`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint UNSIGNED NOT NULL,
  `RegId` int DEFAULT NULL,
  `UpdId` int DEFAULT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` text COLLATE utf8mb4_unicode_ci,
  `FaxNumber` text COLLATE utf8mb4_unicode_ci,
  `Website` text COLLATE utf8mb4_unicode_ci,
  `TradingName` text COLLATE utf8mb4_unicode_ci,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `RegNo` text COLLATE utf8mb4_unicode_ci,
  `City` text COLLATE utf8mb4_unicode_ci,
  `State` text COLLATE utf8mb4_unicode_ci,
  `Postal` text COLLATE utf8mb4_unicode_ci,
  `CompanyAddress` text COLLATE utf8mb4_unicode_ci,
  `PersonName` text COLLATE utf8mb4_unicode_ci,
  `Position` text COLLATE utf8mb4_unicode_ci,
  `PersonAddress` text COLLATE utf8mb4_unicode_ci,
  `Vision` text COLLATE utf8mb4_unicode_ci,
  `Mission` text COLLATE utf8mb4_unicode_ci,
  `Note` text COLLATE utf8mb4_unicode_ci,
  `Profile` text COLLATE utf8mb4_unicode_ci,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int NOT NULL,
  `Status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `RegId`, `UpdId`, `Name`, `Phone`, `FaxNumber`, `Website`, `TradingName`, `Email`, `RegNo`, `City`, `State`, `Postal`, `CompanyAddress`, `PersonName`, `Position`, `PersonAddress`, `Vision`, `Mission`, `Note`, `Profile`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 'IT Company', '48 61 668 27 49', '456', 'http://www.itcompany.pl/', 'IT COMPANY', 'itcompany@gmail.com', '111', 'Yangon', 'shwegontine', '95', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', 'IT COMPANY SERVICES', '44', 'ul. Krzemowa 1 60-002 Złotniki, Poland', 'Vision To be growth In ( IT Field In Myanmar )', 'Mission To be growth In ( IT Field In Myanmar )', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.\r\n                                        Though not required by the syntax of any language,', '83f79395c895b9979f3e4b4a6f259e34.jpg', '43afeb9b9339c295f7899483fe559467', 1, 1, '2021-03-04 23:53:17', '2021-03-04 23:53:17'),
(2, 4, NULL, 'Grace Myanmar IT-Solution Co.Ltd', '959755515510', '77', 'https://gracemyanmar.com.mm/', 'IT-Solution Co.Ltd', 'info@gracemyanmar.com.mm', '777', 'Yangon', 'Mayangon', '95', 'U Yay Khe’ St Yangon, Myanmar, 1181 Myanmar,Yangon', 'KKZ', '45', 'YanGon Myanmar', 'Web Design Web Development', 'Mobile Development CCTV Installation', 'Gracemyanmar is a cloud hosting provider as well as a professional Web Design Company in Myanmar. GM is founded by a team of highly experienced infrastructure engineers, software architects, developers, designers and digital marketing experts who are working in Singapore and Myanmar. We have experienced in thousands of Web Hosting Data Center especially in open source(Linux) environment with various kind of innovation technology with customized solutions. We are expert in design and custom software development in enterprise solutions, web and mobile applications as well as cloud hosting solutions. Each of our application/web design solution is the combination of most modern technologies with domain expertise. Every client we work with becomes a part of the team. Together we face the challenges and celebrate the victorie', NULL, 'bf13f4c0056ad578f1ca4a585f502912', 1, 1, '2021-03-04 23:57:30', '2021-03-04 23:57:30'),
(3, 6, NULL, 'Pico Innovation', '95 9 799 996463', '676', 'http://www.picoinnovation.com/', 'Computer company', 'contact@ezpwe.com', '666', 'Mandalay', 'Myanmar', '95', '71*72 || Daliyar Road*Zalatwa Rd Mandalay, Myanmar', 'PicoInno', '55', '71*72 || Daliyar Road*Zalatwa Rd Mandalay, Myanmar', 'Vision To be growth In ( IT Field In Myanmar )', 'Mission To be growth In ( IT Field In Myanmar )', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.\r\n                                        Though not required by the syntax of any language,', '3bc33a513c1aef28fb46f9e34a8f6c57.jpg', '2e3fa4311f65eb5fa8f36c4a89c33bc7', 1, 1, '2021-03-05 00:01:43', '2021-03-05 00:01:43'),
(4, 6, NULL, 'Bago Gun Trading Co Ltd', '09420827457', '098743538', 'http://www.picoinnovation.com/', 'Gun Trading', 'gun4@gmail.com', 'Gun Trading Co Ltd', '2344', 'Bago', '2852', 'U Yae Khae Str 343 Mayangone Bago,Myanmar', 'Nyi Gu', 'Ganstar', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', 'Vision To be growth In ( IT Field In Myanmar )', 'Mission To be growth In ( IT Field In Myanmar )', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.\r\n                                        Though not required by the syntax of any language,', NULL, '520406f088b4d25495ced01570ba0c7f', 1, 1, '2021-03-05 11:28:44', '2021-03-05 11:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `RegId` int DEFAULT NULL,
  `UpdId` int DEFAULT NULL,
  `CompanyID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `StationID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` text COLLATE utf8mb4_unicode_ci,
  `Email` text COLLATE utf8mb4_unicode_ci,
  `Note` text COLLATE utf8mb4_unicode_ci,
  `Initial` text COLLATE utf8mb4_unicode_ci,
  `Profile` text COLLATE utf8mb4_unicode_ci,
  `Status` int NOT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `RegId`, `UpdId`, `CompanyID`, `StationID`, `Name`, `Phone`, `Email`, `Note`, `Initial`, `Profile`, `Status`, `Token`, `HideShow`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, '2', '1', 'MMIT ( Department Grace Co Ltd )', NULL, NULL, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.\r\n                                        Though not required by the syntax of any language,', NULL, NULL, 1, '7a422cb7830f7cc397754aca65f37ba3', 1, '2021-03-06 02:12:40', '2021-03-06 02:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_03_04_121618_create_companies_table', 2),
(6, '2021_03_02_170015_create_stations_table', 3),
(9, '2021_03_05_110349_create_departments_table', 4);

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
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` bigint UNSIGNED NOT NULL,
  `CompanyID` int DEFAULT NULL,
  `StationType` int DEFAULT NULL,
  `StationName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParentStation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CurrencyUse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CurrencySymbol` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `PhoneNumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FaxNumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `WebSite` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdditionalNote` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `RegId` int DEFAULT NULL,
  `UpdId` int DEFAULT NULL,
  `hide_show` int NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `CompanyID`, `StationType`, `StationName`, `ParentStation`, `CurrencyUse`, `CurrencySymbol`, `Address`, `PhoneNumber`, `FaxNumber`, `EmailAddress`, `WebSite`, `AdditionalNote`, `images`, `status`, `RegId`, `UpdId`, `hide_show`, `token`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Mayangone', 'fskdj', 'fsd', 'mm', 'Fredericksburg Turnpike', '094501554', '908908', 'kaungkhant4@gmail.com', 'https://channelmyanmar', 'fdsfsdfsdfds', '9a12417dfcbd05f5a0af310a77684606.jpg', 1, 4, NULL, 1, '9a12417dfcbd05f5a0af310a77684606', '2021-03-04 10:58:02', '2021-03-04 10:58:02'),
(2, 3, 2, 'Hlaing', 'dffs', 'fsd', 'mm', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', '09450264956', '155454', 'minkhant5@gmail.com', 'https://google.com', 'fsdfsd', '356cc1856f49ef95f30fc36ff8f1419b.jpg', 1, 4, NULL, 1, '356cc1856f49ef95f30fc36ff8f1419b', '2021-03-04 11:01:23', '2021-03-04 11:01:23'),
(3, 4, NULL, 'Bago', NULL, 'Dollar', '$', NULL, '0945045734', '908908', 'gun@gmail.com', 'https://channelmyanmar', 'Gun Trading', 'ca7cec319c73f6a5805837110e77c741.jpg', 1, 6, NULL, 1, 'ca7cec319c73f6a5805837110e77c741', '2021-03-05 11:26:49', '2021-03-05 11:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int DEFAULT NULL,
  `reg_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upd_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_id`, `name`, `phone`, `email`, `password`, `parent_id`, `reg_id`, `upd_id`, `profile`, `role`, `status`, `token`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1CKDFHR9FT', 'City HR Admin', '09950845893', 'minthein.hstengineering@gmail.com', '$2y$10$p62BeFvhpwfUprrkzmzoBOajgfPkZZD55dh9hkQFJGja7fhRIosFu', NULL, NULL, NULL, NULL, 1, 1, '6947fcdf1b360771efcabb4e4e99988a', NULL, NULL, '2021-03-01 10:39:03', '2021-03-01 10:39:03'),
(4, '4L3DI', 'Kaung ', '094201515', 'kaung4@gmail.com', '$2y$10$NIElsdIOTNfcIo7d2slh0.TxNAum5s2ELq5g2MM9yracjeLcBr/Li', NULL, '1', NULL, NULL, 2, 1, 'c9e4b9e4d33c6a5b911f45ad4614f5c5', NULL, NULL, '2021-03-05 10:08:09', '2021-03-05 10:08:09'),
(5, '5U3DC', 'Nyi Lin Aung', '0997345345', 'nyilin4@gmail.com', '$2y$10$NyN9HW9lD8KvXHstV1AZnejswLd5IxViiS4z0X.d/k0WTpF0Et4zu', 4, '4', NULL, NULL, 3, 1, '8d7c5ae4155e11af69ff36487e115664', NULL, NULL, '2021-03-05 10:53:43', '2021-03-05 10:53:43'),
(6, '6S3DQ', 'Soe Min', '0997453943', 'soe4@gmail.com', '$2y$10$kb1iUBhpNymMfVpUELUtXumjHeVo8TPAxujFy6peBUZpc85zG5G2.', 1, '1', NULL, NULL, 2, 1, 'df20cc8ff6c5cec32492bc01fd66ab1d', NULL, NULL, '2021-03-05 11:17:06', '2021-03-05 11:17:06'),
(7, '7U3DJ', 'Min Thu', '0996458783', 'minthu4@gmail.com', '$2y$10$W5Ho.bn846YxfFSLZ0yzzujYC9wECXZ3GzvKwAnHT1A.9fKK6ZUrC', 6, '6', NULL, NULL, 3, 1, '936b88db413342d41f525a23650ccb57', NULL, NULL, '2021-03-05 11:38:44', '2021-03-05 11:38:44'),
(8, '8Y3DW', 'Kaung Khant Zin', '0942085949', 'kaungkhant4@gmail.com', '$2y$10$mbUAJTrUBqFZRTjNW01szuZIgJexFD8ECgz.dHT6lDnEgao9Mh1Mu', 1, '1', NULL, NULL, 2, 1, 'f7de62f11d5af39ae7171d2262d43962', NULL, NULL, '2021-03-06 00:43:08', '2021-03-06 00:43:08'),
(9, '9X3DX', 'Mg Leader ( KKZ )', '0943874883', 'leads4@gmail.com', '$2y$10$AVXzTIiIXe9RGAYHB06LI.cbw.1pCGsPZsWJ2GWjdkaYkKQPuM8Ju', 8, '8', NULL, NULL, 3, 1, '5fb82483885b68ab8cc3d0f91de5fb2b', NULL, NULL, '2021-03-06 00:50:16', '2021-03-06 00:50:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
-- Indexes for table `stations`
--
ALTER TABLE `stations`
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
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
