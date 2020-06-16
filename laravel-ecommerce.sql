-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 07:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'dimaathathsarani97@gmail.com', 'dimaa@97', '2020-05-21 10:30:56', NULL),
(2, 'mmprjayaweera@gmail.com', 'pooh@96', '2020-05-21 10:30:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'John', 'john@gmail.com', 'Useful Site', '2020-05-28 10:13:18', '2020-05-28 10:13:18'),
(2, 'abc', 'abc@gmail.com', 'Interesting', '2020-05-28 10:14:46', '2020-05-28 10:14:46'),
(3, 'abc', 'abc@gmail.com', 'fidgefu', '2020-06-02 13:24:49', '2020-06-02 13:24:49'),
(4, 'Anu', 'anu@gmail.com', 'It\'s greate plessure that if I can but more items at lower price', '2020-06-15 03:28:39', '2020-06-15 03:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `LastName`, `PhoneNumber`, `Address`, `NIC`, `email`, `password`, `confirm_pwd`, `agreement`, `created_at`, `updated_at`) VALUES
(1, 'Dinuri Mindula', 'Pathirathne', 777609723, 'Balangoda', '977440696V', 'dinuripathirathne97@gmail.com', '1234', '1234', 'on', '2020-05-19 11:46:15', '2020-05-19 11:46:15'),
(2, 'Dimalsha', 'weihena', 768804059, 'Government Hospital, Thittapajjala, Werellagama', '975094006V', 'dimaathathsarani97@gmail.com', 'dima@97', 'dima@97', 'on', '2020-05-20 09:00:56', '2020-05-20 09:00:56'),
(3, 'fahs', 'csghi', 768804059, 'Government Hospital, Thittapajjala, Werellagama', '971234567V', 'dimaathathsarani97@gmail.com', '123456', '123456', 'on', '2020-05-24 01:34:27', '2020-05-24 01:34:27'),
(4, 'anu', 'Kumara', 771111110, 'Malabe', '937543210V', 'anu93@gmail.com', 'anu1234', 'anu1234', 'on', '2020-06-14 02:31:43', '2020-06-14 02:31:43'),
(5, 'dsgu', 'vsb', 123456789, 'xcvm', '234567889V', 'sdfg@yahoo.com', '12345', '12345', 'on', '2020-06-15 03:25:54', '2020-06-15 03:25:54');

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
(1, '2020_05_10_104529_create_logins_table', 1),
(2, '2020_05_12_190042_create_customers_table', 1),
(3, '2020_05_14_132759_create_shopkeeper_requests_table', 1),
(4, '2020_05_16_170948_create_users_table', 2),
(5, '2020_05_19_165957_create_customers_table', 3),
(6, '2020_05_19_171950_create_shopkeeperrequests_table', 4),
(7, '2020_05_21_102732_create_admins_table', 5),
(8, '2020_05_28_143808_create_contacts_table', 6);

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
-- Table structure for table `shopkeeperrequests`
--

CREATE TABLE `shopkeeperrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NameOftheBusinessOrganization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MainSellingItem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Organizationemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopkeeperrequests`
--

INSERT INTO `shopkeeperrequests` (`id`, `firstname`, `lastname`, `PhoneNumber`, `Address`, `NIC`, `NameOftheBusinessOrganization`, `businessType`, `merchant`, `MainSellingItem`, `Organizationemail`, `file`, `email`, `agreement`, `created_at`, `updated_at`) VALUES
(1, 'Dinuri', 'Pathirathne', '0777609723', 'Balangoda', '977440696V', 'KMJ Saree', '6', 'majestic', 'Saree', 'KMJ@gmail.com', 'C:\\xampp\\tmp\\phpACA7.tmp', 'dinuripathirathne97@gmail.com', 'on', '2020-05-19 12:17:07', '2020-05-19 12:17:07'),
(2, 'Dimalsha', 'Weihena', '0768804059', 'Government Hospital, Thittapajjala, Werellagama', '975094006V', 'ABC pvt ltd', '5', 'kandy', 'Garden items', 'dimaathathsarani97@gmail.com', 'C:\\xampp\\tmp\\php778A.tmp', 'dimaathathsarani97@gmail.com', 'on', '2020-05-20 09:03:49', '2020-05-20 09:03:49'),
(3, 'Dimaa', 'Weihena', '0768804059', 'Government Hospital, Thittapajjala, Werellagama', '971234567V', 'XYZ pvt ltd', '11', 'liberty', 'Pets', 'dimaathathsarani97@gmail.com', 'C:\\xampp\\tmp\\php13DA.tmp', 'dimaathathsarani97@gmail.com', 'on', '2020-05-24 01:38:23', '2020-05-24 01:38:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopkeeperrequests`
--
ALTER TABLE `shopkeeperrequests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shopkeeperrequests`
--
ALTER TABLE `shopkeeperrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
