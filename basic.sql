-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2024 at 06:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'I have transform your ideas into remarkable digital products', '20+ Years Experience In this game, Means Product Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', '<p class=\"desc\" style=\"margin-bottom: 32px; font-size: 16px; line-height: 1.75; color: #68666c; padding-right: 45px; font-family: Roboto, sans-serif;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n<ul class=\"about__exp__list\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: #68666c; font-family: Roboto, sans-serif; font-size: 16px;\">\r\n<li style=\"list-style: none; width: 748.188px; margin-bottom: 35px;\">\r\n<h5 class=\"title\" style=\"margin-bottom: 15px; font-size: 20px; font-family: Roboto, sans-serif; color: #191b1e; text-transform: unset;\">User experience design - (Product Design)</h5>\r\n<p style=\"margin-bottom: 0px; line-height: 1.75;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.</p>\r\n</li>\r\n<li style=\"list-style: none; width: 748.188px; margin-bottom: 35px;\">\r\n<h5 class=\"title\" style=\"margin-bottom: 15px; font-size: 20px; font-family: Roboto, sans-serif; color: #191b1e; text-transform: unset;\">Web and user interface design - Development</h5>\r\n<p style=\"margin-bottom: 0px; line-height: 1.75;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.</p>\r\n</li>\r\n<li style=\"list-style: none; width: 748.188px; margin-bottom: 0px;\">\r\n<h5 class=\"title\" style=\"margin-bottom: 15px; font-size: 20px; font-family: Roboto, sans-serif; color: #191b1e; text-transform: unset;\">Interaction design - Animation</h5>\r\n<p style=\"margin-bottom: 0px; line-height: 1.75;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>\r\n</li>\r\n</ul>', 'upload/home_about/1797911214605491.png', '2024-05-02 02:06:07', '2024-05-01 21:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', '2024-05-03 11:37:39', NULL),
(2, 'Travel', '2024-05-03 11:44:35', NULL),
(3, 'Vlog', '2024-05-03 11:44:39', '2024-05-03 10:18:42'),
(4, 'Tech', '2024-05-03 11:44:42', NULL),
(5, 'Wordpress', '2024-05-03 16:37:48', '2024-05-03 10:14:49'),
(6, 'Graphics Design', '2024-05-03 16:37:53', '2024-05-03 10:14:43'),
(7, 'Development', '2024-05-03 09:38:03', '2024-05-03 10:14:33'),
(10, 'Reviews', '2024-05-04 04:59:06', '2024-05-04 09:54:09'),
(11, 'Vogue', '2024-05-04 09:50:54', '2024-05-04 09:53:50'),
(12, 'Gadgets', '2024-05-04 09:51:05', '2024-05-04 09:53:44'),
(13, 'Fashion', '2024-05-04 09:51:16', '2024-05-04 09:53:24'),
(17, 'Architecture', '2024-05-04 21:28:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Nurul Arifin', 'nurularifin@gmail.com', 'Websitenya jelek kali kok', NULL, 'Hi geng, salam kenal ya!', '2024-05-05 07:05:20', NULL),
(5, 'Nur lijah sari', 'nurlijahsari@gmail.com', NULL, NULL, 'I like the owner of this site. Can I get his number please', '2024-05-05 07:10:03', NULL),
(6, 'Nilawati', 'nilawati@gmail.com', 'Ingin order baju 100 pc', '089832789010', 'I wanna order cloth for 100 peace. Do the product ready to sent?', '2024-05-05 07:11:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `number`, `short_description`, `address`, `email`, `facebook`, `twitter`, `linkedin`, `instagram`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '082767891040', 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.', 'Level 13, 2 Elizabeth Steereyt set Melbourne, Victoria 3000', 'info@aridropship.com', 'https://id-id.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', 'Copyright @ Aridropship 2024 All right Reserved', '2024-05-05 11:41:44', '2024-05-05 05:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `home_slide` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'upload/home_slide/1797876603084774.png', 'https://www.youtube.com/watch?v=sRuFTVQagIY', '2024-05-01 15:32:10', '2024-05-01 11:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_01_151751_create_home_slides_table', 2),
(6, '2024_05_02_020059_create_abouts_table', 3),
(7, '2024_05_02_051311_create_multi_images_table', 4),
(8, '2024_05_02_165003_create_portfolios_table', 5),
(9, '2024_05_03_113442_create_blog_categories_table', 6),
(10, '2024_05_03_173357_create_posts_table', 7),
(11, '2024_05_05_100208_create_footers_table', 8),
(12, '2024_05_05_101225_create_footers_table', 9),
(13, '2024_05_05_130532_create_contacts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE IF NOT EXISTS `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `multi_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `multi_image`, `created_at`, `updated_at`) VALUES
(11, 'upload/multi/1797954189754418.png', '2024-05-02 08:12:12', NULL),
(12, 'upload/multi/1797954189780447.png', '2024-05-02 08:12:12', NULL),
(13, 'upload/multi/1797954189797134.png', '2024-05-02 08:12:12', NULL),
(14, 'upload/multi/1797954189818808.png', '2024-05-02 08:12:12', NULL),
(15, 'upload/multi/1797954189848237.png', '2024-05-02 08:12:12', NULL),
(16, 'upload/multi/1797954189919638.png', '2024-05-02 08:12:13', NULL),
(17, 'upload/multi/1797954189944802.png', '2024-05-02 08:12:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(255) DEFAULT NULL,
  `portfolio_title` varchar(255) DEFAULT NULL,
  `portfolio_image` varchar(255) DEFAULT NULL,
  `portfolio_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_image`, `portfolio_description`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce Product Apps', 'Rixelda - 24 hours Control room landing page', 'upload/portfolio/1798001268952244.webp', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', '2024-05-03 16:55:11', '2024-05-02 20:40:31'),
(2, 'Cryptocurrency web Application Application', 'Rixelda - 24 hours Control room landing page landing page', 'upload/portfolio/1727569035537605.png', 'Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.\r\n\r\nIt is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.\r\n\r\nIn business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of', '2024-05-03 16:55:11', NULL),
(3, 'Making 3d Illustration', 'Rixelda - 24 hours Control room landing page', 'upload/portfolio/1727567809531230.png', '<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives. It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business. In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>', '2024-05-02 17:30:08', '2024-05-03 01:57:18'),
(4, 'Hilon - Personal Portfolio', 'Rixelda - 24 hours Control room landing page', 'upload/portfolio/1727567758643597.png', '<div class=\"elementor-element elementor-element-0b69848 elementor-widget elementor-widget-heading\" data-id=\"0b69848\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">BaseCreate is pleased to announce that it has been commissioned by Leighton Asia reposition its brand. We will help Leighton Asia evolve its brand strategy, and will be responsible updating Leighton Asia&rsquo;s brand identity, website, and other collaterals.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-12c9a1e elementor-widget elementor-widget-heading\" data-id=\"12c9a1e\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-4970a2a elementor-widget elementor-widget-heading\" data-id=\"4970a2a\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Challenge &amp; Solution</h2>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-2ef9ace elementor-widget elementor-widget-heading\" data-id=\"2ef9ace\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">Future, as it seeks to lead the industry in technological innovation and sustainable building practices to deliver long-lasting value for its clients.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-52d0206 elementor-widget elementor-widget-heading\" data-id=\"52d0206\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Final Result</h2>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-f279091 elementor-widget elementor-widget-heading\" data-id=\"f279091\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n</div>', '2024-05-02 17:30:08', '2024-05-02 20:37:16'),
(5, 'Ecommerce Product Apps', 'Rixelda - 24 hours Control room landing page', 'upload/portfolio/1727567704776550.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.\r\n\r\nIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text', '2024-05-03 16:55:11', NULL),
(9, 'Marketing', 'Decentralized Lending Platform for Students', 'upload/portfolio/1797997548781107.webp', '<div class=\"elementor-element elementor-element-0b69848 elementor-widget elementor-widget-heading\" data-id=\"0b69848\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">BaseCreate is pleased to announce that it has been commissioned by Leighton Asia reposition its brand. We will help Leighton Asia evolve its brand strategy, and will be responsible updating Leighton Asia&rsquo;s brand identity, website, and other collaterals.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-12c9a1e elementor-widget elementor-widget-heading\" data-id=\"12c9a1e\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-4970a2a elementor-widget elementor-widget-heading\" data-id=\"4970a2a\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Challenge &amp; Solution</h2>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-2ef9ace elementor-widget elementor-widget-heading\" data-id=\"2ef9ace\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">Future, as it seeks to lead the industry in technological innovation and sustainable building practices to deliver long-lasting value for its clients.</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-52d0206 elementor-widget elementor-widget-heading\" data-id=\"52d0206\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Final Result</h2>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-f279091 elementor-widget elementor-widget-heading\" data-id=\"f279091\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n</div>', '2024-05-02 19:41:23', '2024-05-02 21:42:36'),
(10, 'Branding', 'Money Laundering Compliance Scanner', 'upload/portfolio/1797998943785124.webp', '<div class=\"elementor-element elementor-element-8488929 elementor-widget elementor-widget-heading\" data-id=\"8488929\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">BaseCreate is pleased to announce that it has been commissioned by Leighton Asia reposition its brand. We will help Leighton Asia evolve its brand strategy, and will be responsible updating Leighton Asia&rsquo;s brand identity, website, and other collaterals.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-a375ae0 elementor-widget elementor-widget-heading\" data-id=\"a375ae0\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-b73dc56 elementor-widget elementor-widget-heading\" data-id=\"b73dc56\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Challenge &amp; Solution</h2>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-9979f48 elementor-widget elementor-widget-heading\" data-id=\"9979f48\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">Future, as it seeks to lead the industry in technological innovation and sustainable building practices to deliver long-lasting value for its clients.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-86175b3 elementor-widget elementor-widget-heading\" data-id=\"86175b3\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Final Result</h2>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-ae103f7 elementor-widget elementor-widget-heading\" data-id=\"ae103f7\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n</div>', '2024-05-02 20:03:33', NULL),
(11, 'Development', 'Anti Money Laundering Compliance Scanner', 'upload/portfolio/1797999018069451.webp', '<div class=\"elementor-element elementor-element-6d9d20e elementor-widget elementor-widget-heading\" data-id=\"6d9d20e\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">BaseCreate is pleased to announce that it has been commissioned by Leighton Asia reposition its brand. We will help Leighton Asia evolve its brand strategy, and will be responsible updating Leighton Asia&rsquo;s brand identity, website, and other collaterals.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-5331d7e elementor-widget elementor-widget-heading\" data-id=\"5331d7e\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-cfffa7e elementor-widget elementor-widget-heading\" data-id=\"cfffa7e\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Challenge &amp; Solution</h2>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-1303f91 elementor-widget elementor-widget-heading\" data-id=\"1303f91\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">Future, as it seeks to lead the industry in technological innovation and sustainable building practices to deliver long-lasting value for its clients.</p>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-821266b elementor-widget elementor-widget-heading\" data-id=\"821266b\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h2 class=\"elementor-heading-title elementor-size-default\">Final Result</h2>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-831e482 elementor-widget elementor-widget-heading\" data-id=\"831e482\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p class=\"elementor-heading-title elementor-size-default\">For almost 50 years Leighton Asia, one of the region&rsquo;s largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia&rsquo;s prestigious buildings and transformational infrastructure projects.</p>\r\n</div>\r\n</div>', '2024-05-02 20:04:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) NOT NULL,
  `blog_category_id` bigint(20) NOT NULL,
  `post_image` text DEFAULT NULL,
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `post_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `post_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_author`, `blog_category_id`, `post_image`, `post_content`, `post_title`, `post_status`, `created_at`, `updated_at`) VALUES
(14, 1, 13, 'upload/post/1798185141103392.jpg', '<p>Find people with high expectations and a low tolerance for excuses. They&rsquo;ll have higher expectations for you than you have for yourself. Don&rsquo;t flatter yourself that this has much to do with you &ndash; this is just who they are. Don&rsquo;t look for &ldquo;nice&rdquo; in these relationships. Look for trust.</p>\r\n<blockquote>\r\n<p>Be fearless in front of them with your ideas as many times as they&rsquo;ll let you</p>\r\n</blockquote>\r\n<p>Beauty Dust is very pretty to look at and it tastes like nothing, which is great. Here is what it&rsquo;s supposed to do: This ancient empiric formula expands beauty through alchemizing elements legendary for their youth preserving, fortifying and tonifying qualities. Glowing supple skin, lustrous shiny hair and twinkling bright eyes are holistically bestowed from the inside out.</p>\r\n<p>I actually first read this as alkalizing meaning effecting pH level, and I was like, OK I guess I understand how that could positively effect your body, but alchemizing means turning elements to gold basically through magic. That lead me to research each ingredient because I know alchemy is not actually happening in my body when I eat this, since alchemy is not real.</p>\r\n<p>In addition to loving beauty and taking care of myself, I also love opening people minds to other paths of self-care, and good marketing and I can honestly say that I use and personally love this product but I&rsquo;m not sure for which reason.</p>\r\n<blockquote>\r\n<p>I think it made me think about it more and really consider why I was choosing to add this to my routine</p>\r\n</blockquote>\r\n<p>It poses an interesting question for me on the wellness category &ndash; will people be willing to buy in, or does eating something change your &ldquo;sniff&rdquo; test on the believe-ability of the claims?</p>\r\n<p>The color is very long lasting and they have an interesting texture that&rsquo;s like a powder and a cream but neither really. They&rsquo;re made with pure pigments and oils and will never melt with the warmth of your skin because they don&rsquo;t contain any waxes. You can literally use them for anything &ndash; obviously as eye shadow and liner, but the light shade is a great highlighter, and the red can be used for lip or blush with a little balm.</p>', 'Social Media Marketing for Franchises is Meant for Women', 'draft', '2024-05-03 21:23:05', NULL),
(15, 2, 13, 'upload/post/1798185313010930.webp', '<p>We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family&rsquo;s small dining room for breakfast.</p>\r\n<p><strong>Refreshingly, what was expected of her was the same thing that was expected of Lara Stone: to take a beautiful picture.</strong></p>\r\n<p>We were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs, toast, mekitsi, local jam and peppermint tea.</p>\r\n<p>We wandered the site with busloads of other tourists, yet strangely the place did not seem crowded. I&rsquo;m not sure if it was the sheer size of the place, or whether the masses congregated in one area and didn&rsquo;t venture far from the main church, but I didn&rsquo;t feel overwhelmed by tourists in the monastery.</p>', 'WordPress News Magazine Charts the Most Chic and Fashionable Women of New York City', 'published', '2024-05-04 21:25:49', '2024-05-05 01:02:30'),
(16, 1, 12, NULL, '<p>We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family&rsquo;s small dining room for breakfast.</p>\r\n<p><strong>Refreshingly, what was expected of her was the same thing that was expected of Lara Stone: to take a beautiful picture.</strong></p>\r\n<p>We were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs, toast, mekitsi, local jam and peppermint tea.</p>\r\n<p>We wandered the site with busloads of other tourists, yet strangely the place did not seem crowded. I&rsquo;m not sure if it was the sheer size of the place, or whether the masses congregated in one area and didn&rsquo;t venture far from the main church, but I didn&rsquo;t feel overwhelmed by tourists in the monastery.</p>', 'Game Changing Virtual Reality Console Hits the Market', 'published', '2024-05-02 21:27:20', '2024-05-05 01:02:16'),
(17, 2, 17, NULL, '<p>We woke reasonably late following the feast and free flowing wine the night before. After gathering ourselves and our packs, we headed down to our homestay family&rsquo;s small dining room for breakfast.</p>\r\n<p><span id=\"more-244\"></span></p>\r\n<p><strong>Refreshingly, what was expected of her was the same thing that was expected of Lara Stone: to take a beautiful picture.</strong></p>\r\n<p>We were making our way to the Rila Mountains, where we were visiting the Rila Monastery where we enjoyed scrambled eggs, toast, mekitsi, local jam and peppermint tea.</p>\r\n<p>We wandered the site with busloads of other tourists, yet strangely the place did not seem crowded. I&rsquo;m not sure if it was the sheer size of the place, or whether the masses congregated in one area and didn&rsquo;t venture far from the main church, but I didn&rsquo;t feel overwhelmed by tourists in the monastery.</p>', 'MODERN MONOCHROME HOME WITH CALM AND COSY TERRACE AND STEPS', 'draft', '2024-05-01 21:28:29', '2024-05-04 21:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `profile_image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nurul Arifin', 'nurularifin837@gmail.com', '2024-04-30 05:15:23', 'nurularifin', '202405011840pngwing.com.png', '$2y$12$2aziCmt8V3FcmyNoZf7iV.heS19Ak8UlpJWeP3A.qYKCUSt1jNCX.', 'CDvRWORfZKfiFWK9DHik0G2LuCRo29aKe2CB4xdJHS7blvCLEiGweGKoZdpl', '2024-04-30 05:04:50', '2024-05-01 11:40:27'),
(2, 'Nur lijah sari', 'bgipin93@gmail.com', '2024-04-30 06:15:23', 'nurlijahsari', NULL, '$2y$12$sQQwvZo3pkqEhNKc5IvmounEwG2DoTZJjavudGwV0r9cWWThic2BC', NULL, '2024-04-30 06:14:34', '2024-04-30 06:15:23'),
(4, 'Juwaini', 'juwaini@gmail.com', '2024-04-30 07:07:53', 'juwaini', NULL, '$2y$12$b5zhNo3PcGxPHMZRF/mITetvTScVV7tmcDfS.aImN9eUhorPnCPeq', 'xXBwaHOty3vu2LrfG4uOgJxO9hN55i0hfEEc3LWxrbcqAW2wr4CHSuKkdqAi', '2024-04-30 07:07:09', '2024-04-30 07:07:53'),
(5, 'Nilawati', 'nilawati@gmail.com', '2024-04-30 19:51:54', 'nilawati', NULL, '$2y$12$r7.qmviWge9OL1GuEX9OYeoq6ggszAmiXP8psTDHjEwHksSuzDGhu', 'YEIpAajkUZQLnqUpLzIJs40xgQlGNRiaoEo5K9CF0tPVAcdd6vyFi8lN2J2R', '2024-04-30 18:39:27', '2024-04-30 20:57:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
