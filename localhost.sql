-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2014 at 10:42 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kiguma`
--
CREATE DATABASE `kiguma` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `kiguma`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'News and Events', '2014-05-01 13:03:36', '2014-05-01 13:03:36'),
(3, 'Afya', '2014-05-01 13:10:27', '2014-05-01 13:10:27'),
(4, 'Jamii', '2014-05-01 13:10:37', '2014-05-01 13:10:37'),
(5, 'Environment', '2014-05-01 13:10:50', '2014-05-01 13:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `postid`, `name`, `created_at`, `updated_at`) VALUES
(8, 22, 'b4.jpg', '2014-01-23 02:20:04', '2014-01-23 02:20:04'),
(9, 22, 'Screenshot from 2014-01-19 17:49:30.png', '2014-01-23 02:20:04', '2014-01-23 02:20:04'),
(10, 23, 'Screenshot from 2014-01-24 12:59:00.png', '2014-01-24 13:09:08', '2014-01-24 13:09:08'),
(11, 24, 'class.png', '2014-01-27 05:39:14', '2014-01-27 05:39:14'),
(12, 24, 'rect2987.png', '2014-01-27 05:39:16', '2014-01-27 05:39:16');

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
('2014_01_21_084737_create_users_table', 1),
('2014_01_21_084810_create_posts_table', 1),
('2014_01_21_084853_create_category_table', 1),
('2014_01_22_061841_create_subcategory_table', 1),
('2014_01_22_220915_create_image_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `portifolio`
--

CREATE TABLE IF NOT EXISTS `portifolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discr` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `portifolio`
--

INSERT INTO `portifolio` (`id`, `name`, `discr`, `image`, `created_at`, `updated_at`) VALUES
(1, 'dasfd dassdfdsaf', 'fdsafsfd fdsgfsdgfdsg', '_2883551325.png', '2014-05-01 17:49:22', '2014-05-01 14:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subcategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discr` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `subcategory`, `name`, `discr`, `price`, `img1`, `img2`, `img3`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '2', '', 'Duis sed odio sit amet nibh vulputate cursus', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', '', '_8031380125.png', '', '', 1, '2014-05-01 13:04:26', '2014-05-01 13:04:26'),
(3, '3', '', 'hjdf sjdfgklsd fsjgfsd gmfsdgkfdsngsd ksndfgsdjk nsghf', 'jsdafg sddndgfjsd vfsdjvfsdbvjfds vfsdvsdfbvjfds vm dfsvdfsbvjf sudfhisns sijfgis ri  trwrjwi irejgi dfsg fsd gfs gifjsdg sfgjrig fnsitrj tre tr eijtrg mrfdgite  gitrjgije rti t ritrj treit  jtr jhtrehi tehti  trhg trjnghitrgjnfkd gp''drj0te', '', '_7162450323.png', '', '', 1, '2014-05-01 13:17:56', '2014-05-01 13:17:56'),
(4, '5', '', 'jhfg dfsgv dsgkjskgvkfx vfdsvfdsv sdfgfsd', 'fksgjdfs fksdjg fdsgjfds fdsgjdfvdfsjgrf fdsgjfds fsgj fsfsjg fsgkfsd kfsgk fjds dfs gdfks gksdf gksdfgj ksdf gkdfkgd fb fik bdkdf bfdbdfkb dfkbg fdfg kdfbnkdfnkl', '', '_9588167313.png', '', '', 1, '2014-05-01 13:37:07', '2014-05-01 13:37:07'),
(5, '4', '', 'asdfsdgfd fdsgfda fds fdsvfv d', 'fdrsbv dfsbgvfd fsfdbv sfdg', '', '_2982936375.png', '', '', 1, '2014-05-01 13:38:45', '2014-05-01 13:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `picture`, `created_at`, `updated_at`) VALUES
(23, '_1238435823.png', '2014-05-01 15:06:46', '2014-05-01 15:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kelvinmbwilo@gmail.com', 'kelvinh', 'mbwiloh', 'kevdom', '', '2014-01-22 07:56:15', '2014-01-22 09:32:37'),
(2, 'y@h.com', 'd', 'd', 'f', '', '2014-01-22 11:22:49', '2014-01-22 11:22:49'),
(3, 'admin', 'admin', 'admin', 'admin', '', '2014-05-01 15:27:15', '2014-05-01 15:27:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
