-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 02:19 AM
-- Server version: 5.6.17
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `sections` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `editor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `summary`, `publish_date`, `sections`, `image`, `image_address`, `editor`, `created_at`, `updated_at`) VALUES
(30, 'Title: olivet news 9', 'Body: this is the body of9article', 'summary: this is the body of9article', '2016-12-08', 'ocb', '', 'http://www.olivetuniversity.edu/images_articles/files/jcm/b111.jpg', 'administer', '2016-12-13 14:06:28', '2016-12-14 02:50:41'),
(31, 'Title: olivet news 10', 'Body: this is the body of10article', 'summary: this is the body of10article', '0000-00-00', 'otcs|jcm|oacd', '107078.jpeg', 'http://www.olivetuniversity.edu/images_articles/files/jcm/b111.jpg', 'administer', '2016-12-13 14:06:28', '2016-12-14 03:07:04'),
(41, 'title 20', 'adfasdfsadf', 'asdfasdfasdf', '2016-12-06', 'jcm|oacd', '106591.jpeg', 'www.google.com', 'Sophia', '2016-12-13 18:41:52', '2016-12-14 02:21:35'),
(42, 'awetewqrtwqe', 'rqwerqwerqwer', 'wqerwqerweqrwe', '0000-00-00', 'jcm|oacd', '109055.jpeg', 'asdfasdf', 'administer', '2016-12-14 03:22:07', '2016-12-14 17:30:53'),
(43, 'asdfasd', 'sdafasdf', 'sdfasdf', '0000-00-00', 'otcs|jcm|oacd|ocj|ocit|lan|ocb|gen', '108130.jpeg', 'asdfasdf', 'Allen', '2016-12-14 03:28:16', '2016-12-17 04:12:31'),
(44, 'asdfasdf', 'asdfasdfasd', 'asdfasdfasdf', '0000-00-00', 'otcs|jcm|oacd|ocj|ocit|lan|ocb', '109058.jpeg', 'asdfasdf', 'administer', '2016-12-14 03:31:44', '2016-12-14 17:31:21'),
(46, 'asdfasdf', 'asdfasdf', 'asdfasdf', '0000-00-00', 'otcs|jcm|oacd|ocj|ocit|lan|ocb|gen', '109054.jpeg', 'asdfasdf', 'Sophia', '2016-12-14 03:35:55', '2016-12-17 04:10:32'),
(47, 'Allen', 'Allen', 'asdfasdf', '2016-12-07', 'otcs|oacd', '108246.jpeg', 'asdfasdfasf', 'allen', '2016-12-14 04:16:22', '2016-12-14 04:16:22'),
(48, 'asdfas', 'asdf', 'asdfasd', '0000-00-00', 'otcs|jcm|oacd|ocj|ocit|lan|ocb|gen', '108244.jpeg', 'adfasdf', 'Allen', '2016-12-14 04:21:42', '2016-12-17 04:09:56'),
(49, 'sdfas', 'asdfasdfas', 'asdfasdf', '2016-12-13', 'otcs|jcm|oacd|ocj|ocit|lan|ocb|gen', '109058.jpeg', 'asdfasdf', 'huchao', '2016-12-14 04:22:14', '2016-12-17 04:09:20'),
(50, 'asdfasd', 'asdfas', 'asdfasdf', '0000-00-00', 'otcs|jcm', '106593.jpeg', 'asdfas', 'allen', '2016-12-14 04:24:19', '2016-12-15 03:12:45'),
(51, 'sdfgsdfgsdfg', 'sdfgsdfgsdfg', 'sdfgsdfgdsfgdsfg', '2016-12-06', 'otcs|jcm|oacd|ocj|ocit|lan|ocb|gen', '108246.jpeg', 'www.baidu.com', 'Allen', '2016-12-17 04:13:13', '2016-12-17 04:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'otcs', 'Section Theology', '2016-12-17 03:31:46', '2016-12-17 03:31:46'),
(2, 'jcm', 'Section Music', '2016-12-17 03:36:08', '2016-12-17 03:36:08'),
(3, 'ocj', 'Section Journalism', '2016-12-17 03:36:39', '2016-12-17 03:36:39'),
(4, 'ocad', 'Section Arts & Design', '2016-12-17 03:37:12', '2016-12-17 03:37:12'),
(5, 'ocit', 'Section Engineering / IT', '2016-12-17 03:37:44', '2016-12-17 03:37:44'),
(6, 'lan', 'Language Education', '2016-12-17 03:38:09', '2016-12-17 03:38:09'),
(7, 'ocb', 'Section Business', '2016-12-17 03:38:34', '2016-12-17 03:38:34'),
(8, 'gen', 'Section University', '2016-12-17 03:39:19', '2016-12-17 03:39:19');

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
('2016_12_12_012341_create_article_table', 1),
('2016_12_13_005122_entrust_setup_tables', 2),
('2016_12_13_093440_create_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2016-12-13 03:57:49', '2016-12-13 03:57:49'),
(2, 'role-create', 'Create Role', 'Create New Role', '2016-12-13 03:57:50', '2016-12-13 03:57:50'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2016-12-13 03:57:50', '2016-12-13 03:57:50'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2016-12-13 03:57:50', '2016-12-13 03:57:50'),
(5, 'item-list', 'Display Item Listing', 'See only Listing Of Item', '2016-12-13 03:57:50', '2016-12-13 03:57:50'),
(6, 'item-create', 'Create Item', 'Create New Item', '2016-12-13 03:57:50', '2016-12-13 03:57:50'),
(7, 'item-edit', 'Edit Item', 'Edit Item', '2016-12-13 03:57:50', '2016-12-13 03:57:50'),
(8, 'item-delete', 'Delete Item', 'Delete Item', '2016-12-13 03:57:50', '2016-12-13 03:57:50'),
(12, 'article-list', 'Display Article Listing', 'See only Listing Of Article', '2016-12-13 13:19:10', '2016-12-13 13:19:10'),
(13, 'article-create', 'Create Article', 'Create New Article', '2016-12-13 13:19:11', '2016-12-13 13:19:11'),
(14, 'article-edit', 'Edit Article', 'Edit Article', '2016-12-13 13:19:11', '2016-12-13 13:19:11'),
(15, 'article-delete', 'Delete Article', 'Delete Article', '2016-12-13 13:19:11', '2016-12-13 13:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Editor', 'Editor Role', '2016-12-13 03:01:30', '2016-12-17 03:24:23'),
(2, 'tester', 'Tester', 'Tester Role', '2016-12-13 03:01:30', '2016-12-13 03:01:30'),
(3, 'super_admin', 'Administor', 'Administor Role', '2016-12-13 03:01:30', '2016-12-17 03:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 1),
(3, 1),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administer', 'hclovejesus@gmail.com', '$2y$10$1fg6VuE3fULtFOJ9ndBzUekxunuPCNfHJSHviOQuWFFl5RY4xyhfS', 'oW95U17NRf9FMx9o8LV2cf1lDSD3cw2Ftbesl7C23V3uUp7jsXIw8H7MRXVU', '2016-12-13 04:14:50', '2016-12-17 03:51:14'),
(2, 'allen', 'heiswith@gmail.com', '$2y$10$6Mr4BHhXtHhKC3lhnmqvAedmA9A2ZqB3af/W5iVOChJTcZhf2sbaG', 'IYBOadGP1Qc65fOHRZoOcB0coItAKqiXs5QtsEceAlVsQLrN58e73lto4pQB', '2016-12-14 03:50:46', '2016-12-14 03:51:36'),
(3, 'huchao', 'editor@gmail.com', '$2y$10$.RErqzxfX2XoeQUm.v.7/eIs/fnHCOPCTftC86iQQCTt.p6xEWSHW', 'dGwGsldGq4cyGUGmshI2g8Q1rI4pwYD5fdtvEpGk8x4mbZoljUlJiqIz8bq1', '2016-12-17 03:50:14', '2016-12-17 03:56:41');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
