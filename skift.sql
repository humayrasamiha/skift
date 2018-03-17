-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 04:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skift`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(10, 'mmm', 'yyyy', '2016-12-10 09:13:29', '2016-12-10 09:13:29'),
(12, 'mmm', 'hkkkk', '2016-12-10 09:16:23', '2016-12-10 09:28:42');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_news`
--

CREATE TABLE IF NOT EXISTS `hotel_news` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'm@gmail.com', '1234', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_12_09_042604_create_logins_table', 1),
('2016_12_09_053345_create_hotel_news_table', 2),
('2016_12_09_054240_create_hotels_table', 3),
('2016_12_13_143154_create_skift_news_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skift_news`
--

CREATE TABLE IF NOT EXISTS `skift_news` (
`id` int(10) unsigned NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skift_news`
--

INSERT INTO `skift_news` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'img4.jpg', 'Amid Global Tension, Luxury Hotel Brands Emphasize Human Connection', 'In a world that seems in constant flux, luxury travelers are pivoting a bit. They''re prioritizing a stronger connection among themselves and with the people they meet, which hotels are attempting to facilitate with travel experiences designed around engag', '2016-12-13 08:50:31', '2016-12-14 02:54:15'),
(3, 'Be.jpg', 'Airbus Wants Airlines to Radically Rethink the Passenger Experience', 'The basic aircraft cabin has not changed in decades. Airbus wants to give airlines flexibility to innovate, and that’s impressive. But let’s be honest. It is unlikely carriers will ever adopt Airbus’ new platform. And if they do, it’s even less likely the', '2016-12-13 08:51:12', '2016-12-13 08:51:12'),
(4, 'img3.jpg', 'Expedia and Priceline Can Expect Tougher Negotiations With Marriott the Next Time They Meet', 'Sometimes, being bigger really can be better. Or at least that''s what Marriott is telling itself.', '2016-12-13 08:51:58', '2016-12-13 08:58:57'),
(6, 'img_5.jpg', 'A Tiny Town in Myanmar Capitalizes on George Orwell Tourism\r\nAung Naing Soe and Joe Freeman, Associated Press - Dec 12, 2016 5:00 pm\r\n\r\n', 'As Myanmar becomes an increasingly more popular destination for international travelers, it’s no wonder why the town of Katha would want to popularize and market its ties to the author of such famous books as 1984 and Animal Farm.', '2016-12-13 08:53:40', '2016-12-13 08:53:40'),
(7, 'img6.jpg', 'Save 20% on Skift Research Reports and Online Courses This Holiday', 'Want to become an expert in your industry in the new year? Now’s your chance with exclusive discounts on our Skift Research Reports and our SkiftEDU online learning course.', '2016-12-13 09:12:32', '2016-12-13 09:12:32'),
(8, 'news7.jpg', 'TripAdvisor Leads $5.2 Million Traxo Funding in Business Travel Push', 'As TripAdvisor evolves into more of a booking site than it is today, it makes total sense over the long term for it to get increasingly interested in corporate travel. Business travelers yearn for that elusive perfect trip, too.', '2016-12-14 02:36:47', '2016-12-14 02:44:13'),
(9, 'img10.png', 'Amid Global Tension, Luxury Hotel Brands Emphasize Human Connection', 'In a world that seems in constant flux, luxury travelers are pivoting a bit. They’re prioritizing a stronger connection among themselves and with the people they meet, which hotels are attempting to facilitate with travel experiences designed around engag', '2016-12-14 02:37:55', '2016-12-14 02:37:55'),
(10, 'news10.jpeg', 'New Skift Research: Decoding the Lucrative U.S. Family Traveler Segment', 'In a good year, American families spend as much as $150 billion on travel, according to our most recent market sizing estimates. It’s a huge yet often misunderstood opportunity. Knowing what makes families tick, i.e. their motivations and obstacles to tra', '2016-12-14 02:41:12', '2016-12-14 02:41:12'),
(11, 'img9.jpg', 'Expedia and Priceline Can Expect Tougher Negotiations With Marriott the Next Time They Meet', 'Sometimes, being bigger really can be better. Or at least that’s what Marriott is telling itself.', '2016-12-14 02:42:41', '2016-12-14 02:42:41'),
(12, 'news8.png', 'AccorHotels Expands Luxury Footprint With Stake In Banyan Tree', 'It’s been a very busy year for AccorHotels with deals made across a number of seemingly disparate segments. The price paid is relatively low and depending on how successfully Banyan Tree expands, could prove a shrewd move.', '2016-12-14 02:45:18', '2016-12-14 02:45:18'),
(14, 'thumbnail-73164c889fb8cd04fb4775051d540b91-400x267.jpeg', 'U.S. Government Says Trump Must Divest Hotel in Washington, D.C.', 'Despite very clear language in the lease and the obvious conflict of interest, we’d be surprised if our new president-elect didn’t cause a fuss here, wasting everyone’s time and taxpayer dollars. If you’re a Trump, that’s what you do.', '2016-12-14 19:45:56', '2016-12-14 19:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhon', 'muhon@gmail.com', '$2y$10$rFOdTols32OYsOMJHnk.E.ujD2SC4G4/Frj6WMPq.MijE.2/c.nna', 'ucDzJUFChHR9wwsgyFy0f4Yb9dS4XpKeZAPbguy6cOqdpj1knacdBRLEcpbV', '2016-12-14 20:42:18', '2016-12-14 21:56:09'),
(2, 'jui', 'jui@gmail.com', '$2y$10$M5e/Nlgp8W5s2jxOqDj0/ekLLxgxN3UrMtEp0Pn8wI9DSWIkAQ8Me', 'nabuEIAz7sZgDhp63WWLX9CM98jvruV7tTu6wRG1wZ2ir0C0rseKslcFcZ7y', '2016-12-14 21:52:51', '2016-12-14 21:53:22'),
(3, 'Humayra Samiha', 'samiha@gmail.com', '$2y$10$vFDxSwOjjyPGxrxHCKx3s.q0LMXq7DfarHd0bxTKUVCW0cx//sNwG', 'ezl4sEcfeUXEMSyWjR3VJcnJ6netaEiSHkqoB4y74mZcHkhpiSkwMJ2sPLB7', '2017-08-24 22:19:17', '2017-08-24 22:21:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_news`
--
ALTER TABLE `hotel_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `skift_news`
--
ALTER TABLE `skift_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hotel_news`
--
ALTER TABLE `hotel_news`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skift_news`
--
ALTER TABLE `skift_news`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
