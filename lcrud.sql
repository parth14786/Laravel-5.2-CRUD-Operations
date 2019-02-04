-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 07:51 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lcrud`
--

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
('2016_04_21_114643_buat_table_teman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `temans`
--

CREATE TABLE IF NOT EXISTS `temans` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `temans`
--

INSERT INTO `temans` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'swasono', 'pagelaran', '2016-04-21 06:22:05', '2016-04-21 06:35:13'),
(8, 'tegar', 'coba', '2016-04-21 17:59:22', '2016-04-21 17:59:22'),
(9, 'fairus', 'lamongan', '2016-04-21 17:59:48', '2016-04-21 17:59:48'),
(10, 'dani', 'kediri', '2016-04-21 17:59:56', '2016-04-21 17:59:56'),
(11, 'ayom', 'sidoarjo', '2016-04-21 18:02:11', '2016-04-21 18:02:11'),
(12, 'tatak', 'pasuruan', '2016-04-21 22:46:38', '2016-04-21 22:46:38'),
(13, 'arif', 'pasuruan', '2016-04-21 22:46:49', '2016-04-21 22:46:49'),
(14, 'ari', 'blitar', '2016-04-21 22:47:00', '2016-04-21 22:47:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temans`
--
ALTER TABLE `temans`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temans`
--
ALTER TABLE `temans`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
