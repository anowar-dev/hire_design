-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2023 at 12:58 AM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sultanbr_innovativeskills`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_fasts`
--

CREATE TABLE `about_fasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `dis` varchar(5000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_fasts`
--

INSERT INTO `about_fasts` (`id`, `title`, `dis`, `created_at`, `updated_at`) VALUES
(1, '100% of people learning for professional development report career benefits like getting a promotion, starting a new career', 'Each era defines by its people who use the right tools with excellent skills. Innovative Skills promise to build a platform for delivering people with remarkable skills and efficient products so that you can excel in defining the era of 4th industrial revolution and beyond.', '2023-06-19 05:05:45', '2023-07-15 13:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `about_seconds`
--

CREATE TABLE `about_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_seconds`
--

INSERT INTO `about_seconds` (`id`, `name`, `position`, `dis`, `image`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(3, 'Salman MD Sultan', 'Founder & CEO, Innovative Skills', 'Salman Md Sultan has more than 5 years of Experiences in IT industry. He worked various International Companies like Robi Axiata Limited, WMCS (South Korea) etc. as a S/W Developer and Team Leader. He has also experience in IT Training since 2016.', '1689454043.WhatsApp Image 2023-07-15 at 2.19.30 AM.jpeg', 'https://www.facebook.com/salmanmd.sultan.1', 'https://www.facebook.com/salmanmd.sultan.1', '2023-07-15 13:09:48', '2023-07-15 14:47:23'),
(4, 'Md Masud Islam Fahim', 'Computer Vision and Deep Learning Researcher, University of Vaasa, Finland', 'Masud Islam Fahim,  a Deep Learning Researcher at University of Vaasa, Finland. At Innovative Skills, He takes Machine and Deep Learning with Computer Vision Course, where he provides all the trending aspects of CV', '1689454088.WhatsApp Image 2023-07-15 at 2.00.28 AM.jpeg', 'https://web.facebook.com/21mostofa', 'https://web.facebook.com/21mostofa', '2023-07-15 13:36:06', '2023-07-15 14:48:08'),
(5, 'Shihab Al Mamun', 'Assistant Manager, Digital Marketing Department, Purple Care Limited', 'Shihab Al Mamun, currently working as a Assistant Manager at Purple Care Limited. At Innovative Skills, He takes Strategical Social Media Marketing Course where he teaches the trending topic in this area.', '1689454127.WhatsApp Image 2023-07-15 at 2.00.28 AM (1).jpeg', 'https://web.facebook.com/shihab.dipu', 'https://web.facebook.com/shihab.dipu', '2023-07-15 13:39:50', '2023-07-15 14:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `admission_acceptance_lists`
--

CREATE TABLE `admission_acceptance_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_enroll_course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission_pending_lists`
--

CREATE TABLE `admission_pending_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `course_title_id` bigint(20) UNSIGNED NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_payment_status` varchar(255) DEFAULT NULL,
  `student_due_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_batches`
--

CREATE TABLE `assign_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accepted_student_id` bigint(20) UNSIGNED NOT NULL,
  `course_batch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `dis` mediumtext NOT NULL,
  `blog_cat_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `dis`, `blog_cat_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'fast post', 'no discribtion hear', 2, '1687120276.img1-r.jpg', '2023-06-18 11:52:28', '2023-06-18 14:31:16'),
(3, 'second blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, '1687120294.img2.20a28e7f.jpg', '2023-06-18 12:20:05', '2023-06-18 14:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cats`
--

CREATE TABLE `blog_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_cats`
--

INSERT INTO `blog_cats` (`id`, `catagory`, `created_at`, `updated_at`) VALUES
(2, 'Fun', '2023-06-18 10:02:57', '2023-06-18 10:02:57'),
(3, 'Programming', '2023-06-18 10:03:06', '2023-06-18 10:03:06'),
(5, 'test', '2023-06-18 14:03:07', '2023-06-18 14:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `contactforms`
--

CREATE TABLE `contactforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `massage` varchar(5000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactforms`
--

INSERT INTO `contactforms` (`id`, `name`, `email`, `number`, `massage`, `created_at`, `updated_at`) VALUES
(2, 'mahibullah Siddique', 'seyam@gmail.com', '0173232907*', 'this is just a test massage', '2023-07-08 04:08:38', '2023-07-08 04:08:38'),
(3, 'test', 'test@gmail.com', '12345678910', 'test', '2023-07-08 09:25:39', '2023-07-08 09:25:39'),
(4, 'Md. Anower Hossan', 'anowerhossan1988@gmail.com', '01990000922', 'Text for testing purpose.', '2023-07-08 11:59:48', '2023-07-08 11:59:48'),
(5, 'Md. Anower Hossan', 'anowerhossan1988@gmail.com', '01990000922', 'test', '2023-07-08 12:05:28', '2023-07-08 12:05:28'),
(6, 'Anower', 'anowerhos988@gmail.com', '01990000922', 'test', '2023-07-08 12:06:56', '2023-07-08 12:06:56'),
(7, 'Anower', 'anowerhos988@gmail.com', '01990000922', 'test', '2023-07-08 12:14:11', '2023-07-08 12:14:11'),
(8, 'Md. Anower Hossan', 'anowerhossan1988@gmail.com', '01990000922', 'test', '2023-07-08 12:21:07', '2023-07-08 12:21:07'),
(9, 'Anower', 'anowerhos988@gmail.com', '01990000922', 'test', '2023-07-08 12:22:03', '2023-07-08 12:22:03'),
(10, 'Anower', 'anowerhos988@gmail.com', '01990000922', 'trst', '2023-07-08 12:25:36', '2023-07-08 12:25:36'),
(11, 'Anower', 'anowerhos988@gmail.com', '01990000922', 'test', '2023-07-08 12:36:50', '2023-07-08 12:36:50'),
(12, 'Anower', 'anowerhos988@gmail.com', '01990000922', 'text', '2023-07-08 12:44:14', '2023-07-08 12:44:14'),
(13, 'Anower', 'anowerhos988@gmail.com', '01990000922', 'test', '2023-07-08 12:46:09', '2023-07-08 12:46:09'),
(14, 'Nishant Sharma', 'nishant.developer22@gmail.com', '1201201200', 'Hi innovativeskillsbd.com,\r\n\r\nI was just browsing your website and I came up with a great plan to re-develop your website using the latest technology to generate additional revenue and beat your opponents.\r\n\r\nI\'m an excellent web developer capable of almost anything you can come up with, and my costs are affordable for nearly everyone.\r\n\r\nPlease provide me with your email, and contact number to know more about your requirements.\r\n\r\nYours Sincerely\r\nNishant', '2023-08-01 03:15:08', '2023-08-01 03:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_name` varchar(255) NOT NULL,
  `content_url` text NOT NULL,
  `content_duration` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursecontents`
--

CREATE TABLE `coursecontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_content_title` varchar(255) NOT NULL,
  `course_title_id` bigint(20) UNSIGNED NOT NULL,
  `course_content_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecontents`
--

INSERT INTO `coursecontents` (`id`, `course_content_title`, `course_title_id`, `course_content_link`, `created_at`, `updated_at`) VALUES
(4, 'Topic - 1', 5, 'Python Fundamentals', '2023-07-10 00:45:14', '2023-07-13 08:58:50'),
(5, 'Topic - 2', 5, 'Introduction', '2023-07-10 03:52:42', '2023-07-13 08:44:11'),
(6, 'Topic - 3', 5, 'Theory: Data, Label, Model', '2023-07-10 04:16:08', '2023-07-13 08:44:34'),
(7, 'Topic - 4', 5, 'Theory: Model Tuning, Model Regularization', '2023-07-13 08:55:12', '2023-07-13 08:55:12'),
(8, 'Topic - 5', 5, 'Theory: Elementary Statistics', '2023-07-13 08:59:35', '2023-07-13 08:59:35'),
(9, 'Topic - 6', 5, 'Theory: Elementary Probability', '2023-07-13 09:01:13', '2023-07-13 09:01:13'),
(10, 'Topic - 7', 5, 'Implementation: Data Setup and Loader', '2023-07-13 09:01:58', '2023-07-13 09:01:58'),
(11, 'Topic - 8', 5, 'Implementation: Label Setup with Insights Elements', '2023-07-13 09:02:34', '2023-07-13 09:02:34'),
(12, 'Topic - 9', 5, 'Implementation: Model Design', '2023-07-13 09:03:23', '2023-07-13 09:03:23'),
(13, 'Topic - 10', 5, 'Implementation: LoM Function', '2023-07-13 09:04:12', '2023-07-13 09:04:12'),
(14, 'Topic - 11', 5, 'Task 1: Let\'s Build a Image Classifier', '2023-07-13 09:05:05', '2023-07-13 09:05:05'),
(15, 'Topic - 12', 5, 'Task 2: Let\'s Build a Image Segmentation Process', '2023-07-13 09:05:47', '2023-07-13 09:05:47'),
(16, 'Topic - 13', 5, 'Task 3: Let\'s Build a Semantic Segmentation', '2023-07-13 09:06:13', '2023-07-13 09:06:13'),
(17, 'Topic - 14', 5, 'Task 4: Let\'s Build a Object Detection', '2023-07-13 09:06:40', '2023-07-13 09:06:40'),
(18, 'Topic - 15', 5, 'Task 5: Let\'s Build a Action Recognition System', '2023-07-13 09:07:09', '2023-07-13 09:07:09'),
(19, 'Topic - 16', 5, 'Task 6: Let\'s Build a Image Denoising', '2023-07-13 09:07:34', '2023-07-13 09:07:34'),
(20, 'Topic - 17', 5, 'Task 7: Let\'s Build a super resolution', '2023-07-13 09:08:02', '2023-07-13 09:08:02'),
(21, 'Topic - 18', 5, 'Task 8: Let\'s Build GAN', '2023-07-13 09:08:27', '2023-07-13 09:08:27'),
(22, 'Topic - 19', 5, 'Task 9: Let\'s Build Diffusion Model', '2023-07-13 09:09:13', '2023-07-13 09:09:13'),
(23, 'Topic - 20', 5, 'Task 10: Let\'s Learn Self Supervised Part 1', '2023-07-13 09:09:55', '2023-07-13 09:09:55'),
(24, 'Topic - 21', 5, 'Task  11: Let\'s Learn Self Supervised Part 2', '2023-07-13 09:10:29', '2023-07-13 09:10:29'),
(25, 'Topic - 22', 5, 'Task 12: Let\'s Learn Contrastive Learning', '2023-07-13 09:11:11', '2023-07-13 09:11:11'),
(26, 'Topic - 23', 5, 'Task 13: Let\'s Code an Image Net Model', '2023-07-13 09:11:54', '2023-07-13 09:11:54'),
(27, 'Topic - 24', 5, 'Self Project Phase', '2023-07-13 09:12:29', '2023-07-13 09:12:29'),
(28, 'Topic - 1', 4, 'Career Scopes of Python', '2023-07-13 09:58:46', '2023-07-13 09:58:46'),
(29, 'Topic - 2', 4, 'Python Download and Instllation', '2023-07-13 09:59:35', '2023-07-13 09:59:35'),
(30, 'Topic - 3', 4, 'Lets Know about Editor and IDE', '2023-07-13 10:00:02', '2023-07-13 10:00:02'),
(31, 'Topic -4', 4, 'Variable with output function', '2023-07-13 10:00:40', '2023-07-13 10:00:40'),
(32, 'Topic - 5', 4, 'Variable with output function', '2023-07-13 10:01:13', '2023-07-13 10:01:13'),
(33, 'Topic - 6', 4, 'Data Types Part-1', '2023-07-13 10:01:45', '2023-07-13 10:01:45'),
(34, 'Topic - 7', 4, 'Classification of Operator', '2023-07-13 10:02:33', '2023-07-13 10:02:33'),
(35, 'Topic - 8', 4, 'Lets Play with Arithmetic Operator by solving a profit-loss problem', '2023-07-13 10:03:10', '2023-07-13 10:03:10'),
(36, 'Topic - 9', 4, 'comment', '2023-07-13 10:03:55', '2023-07-13 10:03:55'),
(37, 'Topic - 10', 4, 'String', '2023-07-13 10:04:20', '2023-07-13 10:04:20'),
(38, 'Topic - 11', 4, 'String Methods', '2023-07-13 10:04:47', '2023-07-13 10:04:47'),
(39, 'Topic - 12', 4, 'Conditional Statements', '2023-07-13 10:05:15', '2023-07-13 10:05:15'),
(40, 'Topic - 13', 4, 'Conditional and Logical Operator', '2023-07-13 10:05:40', '2023-07-13 10:07:46'),
(41, 'Topic - 14', 4, 'Lets build a form validation logic using Conditional Statements', '2023-07-13 10:07:26', '2023-07-13 10:07:26'),
(42, 'Topic - 15', 4, 'Loop & Nested Loop', '2023-07-13 10:08:22', '2023-07-13 10:08:22'),
(43, 'Topic - 16', 4, 'List (1D, 2D)', '2023-07-13 10:08:47', '2023-07-13 10:08:47'),
(44, 'Topic - 17', 4, 'List Access', '2023-07-13 10:09:13', '2023-07-13 10:09:13'),
(45, 'Topic - 18', 4, 'List Iteration', '2023-07-13 10:09:38', '2023-07-13 10:09:38'),
(46, 'Topic - 19', 4, 'List Methods', '2023-07-13 10:09:58', '2023-07-13 10:09:58'),
(47, 'Topic - 20', 4, 'Dictionary & Tuple', '2023-07-13 10:10:39', '2023-07-13 10:10:39'),
(48, 'Topic - 21', 4, 'User Defined Function', '2023-07-13 10:11:07', '2023-07-13 10:11:07'),
(49, 'Topic - 22', 4, 'Lets Solve a RLP problem using loop, list and function', '2023-07-13 10:11:36', '2023-07-13 10:11:36'),
(50, 'Topic - 23', 4, 'Create a GitHub Account', '2023-07-13 10:12:13', '2023-07-13 10:12:13'),
(51, 'Topic - 24', 4, 'Essential Git Commands', '2023-07-13 10:12:34', '2023-07-13 10:12:34'),
(52, 'Topic - 25', 4, 'Lets work as a collaborator', '2023-07-13 10:12:57', '2023-07-13 10:12:57'),
(53, 'Topic - 26', 4, 'Introduction to Web Scraping', '2023-07-13 10:13:27', '2023-07-13 10:13:27'),
(54, 'Topic - 27', 4, 'Selenium', '2023-07-13 10:13:50', '2023-07-13 10:13:50'),
(55, 'Topic - 28', 4, 'Webdrive API Integration', '2023-07-13 10:14:20', '2023-07-13 10:14:20'),
(56, 'Topic - 29', 4, 'Google Review Scraping', '2023-07-13 10:14:50', '2023-07-13 10:14:50'),
(57, 'Topic - 30', 4, 'LinkedIn Profile Scraping', '2023-07-13 10:15:34', '2023-07-13 10:15:34'),
(58, 'Topic - 31', 4, 'E-commerce Web Scraping', '2023-07-13 10:16:07', '2023-07-13 10:16:07'),
(59, 'Topic - 32', 4, 'Multiple URL Collection', '2023-07-13 10:16:31', '2023-07-13 10:16:31'),
(60, 'Topic - 33', 4, 'Multiple Page Scraping', '2023-07-13 10:16:53', '2023-07-13 10:16:53'),
(61, 'Topic - 34', 4, 'Automatic Data Filled to a form', '2023-07-13 10:17:40', '2023-07-13 10:17:40'),
(62, 'Topic - 35', 4, 'Automatic Registration and Login System', '2023-07-13 10:18:39', '2023-07-13 10:18:39'),
(63, 'Topic - 36', 4, 'Numpy', '2023-07-13 10:19:09', '2023-07-13 10:19:09'),
(64, 'Topic - 37', 4, 'Scipy', '2023-07-13 10:19:33', '2023-07-13 10:19:33'),
(65, 'Topic - 38', 4, 'Pandas', '2023-07-13 10:19:56', '2023-07-13 10:19:56'),
(66, 'Topic - 39', 4, 'Matplotlib', '2023-07-13 10:20:18', '2023-07-13 10:20:18'),
(67, 'Topic - 40', 4, 'Data Cleaning and Filtering', '2023-07-13 10:20:47', '2023-07-13 10:20:47'),
(68, 'Topic - 41', 4, 'Estimation of Central Tendency', '2023-07-13 10:21:13', '2023-07-13 10:21:13'),
(69, 'Topic - 42', 4, 'Estimation of Imbalance Statistics (Skewness)', '2023-07-13 10:21:38', '2023-07-13 10:21:38'),
(70, 'Topic - 43', 4, 'Percentiles', '2023-07-13 10:22:05', '2023-07-13 10:22:05'),
(71, 'Topic - 44', 4, 'Estimation of correlation Between Mini-Batches of data', '2023-07-13 10:22:28', '2023-07-13 10:22:28'),
(72, 'Topic - 45', 4, 'Topic Modeling project from google review', '2023-07-13 10:22:49', '2023-07-13 10:22:49'),
(73, 'Topic - 46', 4, 'Statistical Data Visualization', '2023-07-13 10:23:09', '2023-07-13 10:23:09'),
(74, 'Topic - 47', 4, 'Tensorflow Framework', '2023-07-13 10:23:38', '2023-07-13 10:23:38'),
(75, 'Topic - 48', 4, 'Implementation of Different Supervised Learning Algorithms', '2023-07-13 10:24:12', '2023-07-13 10:27:06'),
(76, 'Topic - 49', 4, 'Make a Recommendation System', '2023-07-13 10:27:31', '2023-07-13 10:27:31'),
(77, 'Topic - 50', 4, 'Make a prediction based algorithm', '2023-07-13 10:27:51', '2023-07-13 10:27:51'),
(78, 'Topic - 51', 4, 'Search based Recommendation System', '2023-07-13 10:28:16', '2023-07-13 10:28:16'),
(79, 'Topic - 52', 4, 'Backend Web Development Part -1 - Introduction', '2023-07-13 10:29:13', '2023-07-13 10:29:13'),
(80, 'Topic - 53', 4, 'Frontend vs Backend', '2023-07-13 10:29:40', '2023-07-13 10:29:40'),
(81, 'Topic - 54', 4, 'HTML Basics', '2023-07-13 10:30:05', '2023-07-13 10:30:05'),
(82, 'Topic - 55', 4, 'CSS Basics', '2023-07-13 10:30:28', '2023-07-13 10:30:28'),
(83, 'Topic - 56', 4, 'Software Development Life Cycle', '2023-07-13 10:31:06', '2023-07-13 10:31:06'),
(84, 'Topic - 57', 4, 'Planning and Requirement Analysis for a ML Project', '2023-07-13 10:31:34', '2023-07-13 10:31:34'),
(85, 'Topic - 58', 4, 'Database Design', '2023-07-13 10:32:07', '2023-07-13 10:32:07'),
(86, 'Topic - 59', 4, 'SQL Analytics', '2023-07-13 10:32:49', '2023-07-13 10:32:49'),
(87, 'Topic - 60', 4, 'Introduction to Django', '2023-07-13 10:33:29', '2023-07-13 10:33:29'),
(88, 'Topic - 61', 4, 'MVT based Design Pattern', '2023-07-13 10:33:54', '2023-07-13 10:33:54'),
(89, 'Topic - 62', 4, 'MVT VS MVC', '2023-07-13 10:34:17', '2023-07-13 10:34:17'),
(90, 'Topic - 63', 4, 'Create a Project and App', '2023-07-13 10:34:41', '2023-07-13 10:34:41'),
(91, 'Topic - 64', 4, 'Initial Project Configuration', '2023-07-13 10:35:04', '2023-07-13 10:35:04'),
(92, 'Topic - 65', 4, 'URL Functionality', '2023-07-13 10:35:27', '2023-07-13 10:35:27'),
(93, 'Topic - 66', 4, 'Connection Between URL and View', '2023-07-13 10:35:46', '2023-07-13 10:35:46'),
(94, 'Topic - 67', 4, 'Template Rendering', '2023-07-13 10:36:15', '2023-07-13 10:36:15'),
(95, 'Topic - 68', 4, 'REST API', '2023-07-13 10:36:41', '2023-07-13 10:36:41'),
(96, 'Topic - 69', 4, 'Django Admin Panel', '2023-07-13 10:37:01', '2023-07-13 10:37:01'),
(97, 'Topic - 70', 4, 'Registration with Form Validation', '2023-07-13 10:37:27', '2023-07-13 10:37:27'),
(98, 'Topic - 71', 4, 'Email Regex and Verification', '2023-07-13 10:37:54', '2023-07-13 10:37:54'),
(99, 'Topic - 72', 4, 'Package and Custom Authentication', '2023-07-13 10:38:13', '2023-07-13 10:38:13'),
(100, 'Topic - 73', 4, 'User Role Management', '2023-07-13 10:38:34', '2023-07-13 10:38:34'),
(101, 'Topic - 74', 4, 'Admin Panel Customization using Bootstrap', '2023-07-13 10:38:55', '2023-07-13 10:38:55'),
(102, 'Topic - 75', 4, 'Admin Panel Customization using Bootstrap', '2023-07-13 10:39:15', '2023-07-13 10:39:15'),
(103, 'Topic - 76', 4, 'ORM Builder', '2023-07-13 10:39:56', '2023-07-13 10:39:56'),
(104, 'Topic - 77', 4, 'CRUD Functionality', '2023-07-13 10:40:16', '2023-07-13 10:40:16'),
(105, 'Topic - 78', 4, 'JOIN Functionality', '2023-07-13 10:40:34', '2023-07-13 10:40:34'),
(106, 'Topic - 79', 4, 'Data Table Implementation', '2023-07-13 10:40:59', '2023-07-13 10:40:59'),
(107, 'Topic - 80', 4, 'Autocomplete Search', '2023-07-13 10:41:20', '2023-07-13 10:41:20'),
(108, 'Topic - 81', 4, 'Userend Template Customization', '2023-07-13 10:41:56', '2023-07-13 10:41:56'),
(109, 'Topic - 82', 4, 'Show data to userend', '2023-07-13 10:42:16', '2023-07-13 10:42:16'),
(110, 'Topic - 83', 4, 'Implement Keyword based recommendation system using ML algorithm to the project', '2023-07-13 10:42:47', '2023-07-13 10:42:47'),
(111, 'Topic - 84', 4, 'Add to Cart', '2023-07-13 10:43:30', '2023-07-13 10:43:30'),
(112, 'Topic - 85', 4, 'Checkout and Trial Payment Integration', '2023-07-13 10:43:48', '2023-07-13 10:43:48'),
(113, 'Topic - 86', 4, 'Order Process Control', '2023-07-13 10:44:11', '2023-07-13 10:44:11'),
(114, 'Topic - 87', 4, 'User Tracking', '2023-07-13 10:44:35', '2023-07-13 10:44:35'),
(115, 'Topic - 88', 4, 'Deploy your project to a hosting', '2023-07-13 10:44:58', '2023-07-13 10:44:58'),
(116, 'Topic - 1', 6, 'Introduction to Social Marketing', '2023-07-15 07:24:56', '2023-07-15 07:24:56'),
(117, 'Topic - 2', 6, 'Defining social marketing', '2023-07-15 07:25:25', '2023-07-15 07:25:25'),
(118, 'Topic - 3', 6, 'Distinctions between social marketing and commercial marketing', '2023-07-15 07:25:57', '2023-07-15 07:25:57'),
(119, 'Topic - 4', 6, 'Historical context and evolution of social marketing', '2023-07-15 07:27:14', '2023-07-15 07:27:14'),
(120, 'Topic - 5', 6, 'Understanding Target Audiences', '2023-07-15 07:27:46', '2023-07-15 07:27:46'),
(121, 'Topic - 6', 6, 'Tools', '2023-07-15 07:28:11', '2023-07-15 07:28:11'),
(122, 'Topic - 7', 6, 'Meta Ads', '2023-07-15 07:28:35', '2023-07-15 07:28:35'),
(123, 'Topic - 8', 6, 'LinkedIn Ads', '2023-07-15 07:29:12', '2023-07-15 07:29:12'),
(124, 'Topic - 9', 6, 'Segmentation and targeting techniques', '2023-07-15 07:29:45', '2023-07-15 07:29:45'),
(125, 'Topic - 10', 6, 'Audience analysis and research methods', '2023-07-15 07:30:11', '2023-07-15 07:30:11'),
(126, 'Topic - 11', 6, 'Behavioral determinants and psychographics', '2023-07-15 07:30:41', '2023-07-15 07:30:41'),
(127, 'Topic - 12', 6, 'Social Marketing Planning', '2023-07-15 07:31:06', '2023-07-15 07:31:06'),
(128, 'Topic - 13', 6, 'Setting objectives and goals', '2023-07-15 07:31:31', '2023-07-15 07:31:31'),
(129, 'Topic - 14', 6, 'Formulating a social marketing strategy', '2023-07-15 07:31:56', '2023-07-15 07:31:56'),
(130, 'Topic - 15', 6, 'Developing a social marketing plan', '2023-07-15 07:32:17', '2023-07-15 07:32:17'),
(131, 'Topic - 16', 6, 'Behavior Change Theories', '2023-07-15 07:32:41', '2023-07-15 07:32:41'),
(132, 'Topic - 17', 6, 'Theories and models for behavior change (e.g., Transtheoretical Model, Social Cognitive Theory)', '2023-07-15 07:33:05', '2023-07-15 07:33:05'),
(133, 'Topic - 18', 6, 'Applying behavior change theories to social marketing campaigns', '2023-07-15 07:33:32', '2023-07-15 07:33:32'),
(134, 'Topic - 19', 6, 'Message Development and Communication Strategies', '2023-07-15 07:34:06', '2023-07-15 07:34:06'),
(135, 'Topic - 20', 6, 'Crafting effective social marketing messages', '2023-07-15 07:35:02', '2023-07-15 07:35:02'),
(136, 'Topic - 21', 6, 'Identifying key message channels and platforms', '2023-07-15 07:35:28', '2023-07-15 07:35:28'),
(137, 'Topic - 22', 6, 'Tailoring messages to target audiences', '2023-07-15 07:35:56', '2023-07-15 07:35:56'),
(138, 'Topic - 23', 6, 'Social Media Marketing', '2023-07-15 07:36:20', '2023-07-15 07:36:20'),
(139, 'Topic - 24', 6, 'Leveraging social media platforms for social marketing', '2023-07-15 07:36:45', '2023-07-15 07:36:45'),
(140, 'Topic - 25', 6, 'Best practices for social media campaigns', '2023-07-15 07:37:12', '2023-07-15 07:37:12'),
(141, 'Topic - 26', 6, 'Monitoring and evaluating social media metrics', '2023-07-15 07:37:32', '2023-07-15 07:37:32'),
(142, 'Topic - 27', 6, 'Campaign Implementation and Management', '2023-07-15 07:37:57', '2023-07-15 07:37:57'),
(143, 'Topic - 28', 6, 'Campaign implementation strategies and tactics', '2023-07-15 07:38:27', '2023-07-15 07:38:27'),
(144, 'Topic - 29', 6, 'Stakeholder engagement and partnerships', '2023-07-15 07:38:52', '2023-07-15 07:38:52'),
(145, 'Topic - 30', 6, 'Budgeting and resource allocation', '2023-07-15 07:39:20', '2023-07-15 07:39:20'),
(146, 'Topic - 31', 6, 'Ethical Considerations in Social Marketing', '2023-07-15 07:39:48', '2023-07-15 07:39:48'),
(147, 'Topic - 32', 6, 'Balancing persuasion and manipulation', '2023-07-15 07:40:12', '2023-07-15 07:40:12'),
(148, 'Topic - 33', 6, 'Ensuring transparency and accountability', '2023-07-15 07:40:41', '2023-07-15 07:40:41'),
(149, 'Topic - 34', 6, 'Addressing potential social and cultural impacts', '2023-07-15 07:41:06', '2023-07-15 07:41:06'),
(150, 'Topic - 35', 6, 'Evaluation and Impact Assessment', '2023-07-15 07:41:30', '2023-07-15 07:41:30'),
(151, 'Topic - 36', 6, 'Monitoring and evaluation frameworks', '2023-07-15 07:41:55', '2023-07-15 07:41:55'),
(152, 'Topic - 37', 6, 'Measuring behavior change and social impact', '2023-07-15 07:42:17', '2023-07-15 07:42:17'),
(153, 'Topic - 38', 6, 'Using data for continuous improvement', '2023-07-15 07:42:37', '2023-07-15 07:42:37'),
(154, 'Topic - 39', 6, 'Case Studies and Best Practices', '2023-07-15 07:43:11', '2023-07-15 07:43:11'),
(155, 'Topic - 40', 6, 'Examining successful social marketing campaigns', '2023-07-15 07:43:36', '2023-07-15 07:43:36'),
(156, 'Topic - 41', 6, 'Learning from failures and challenges', '2023-07-15 07:43:57', '2023-07-15 07:43:57'),
(157, 'Topic - 42', 6, 'Analyzing real-world examples from various sectors (health, environment etc.)', '2023-07-15 07:45:00', '2023-07-15 07:45:00'),
(158, 'Topic - 1', 7, 'Course objectives and expectations', '2023-08-15 12:57:36', '2023-08-15 12:57:36'),
(159, 'Topic - 2', 7, 'Overview of the course structure and materials', '2023-08-15 12:58:47', '2023-08-15 12:58:47'),
(160, 'Topic - 3', 7, 'Recommended development environment setup', '2023-08-15 12:59:34', '2023-08-15 12:59:34'),
(161, 'Topic - 4', 7, 'Overview of essential tools and resources', '2023-08-15 13:00:18', '2023-08-15 13:00:18'),
(162, 'Topic - 5', 7, 'Introduction to Python programming language', '2023-08-15 13:00:48', '2023-08-15 13:00:48'),
(163, 'Topic - 6', 7, 'Syntax, variables, data types, and basic operations', '2023-08-15 13:01:37', '2023-08-15 13:01:37'),
(164, 'Topic - 7', 7, 'Control flow statements: conditionals and loops', '2023-08-15 13:02:18', '2023-08-15 13:02:18'),
(165, 'Topic - 8', 7, 'Defining and calling functions', '2023-08-15 13:02:48', '2023-08-15 13:02:48'),
(166, 'Topic - 9', 7, 'Working with modules and libraries', '2023-08-15 13:03:23', '2023-08-15 13:03:23'),
(167, 'Topic - 10', 7, 'Introduction to common Python libraries for data structures and algorithms', '2023-08-15 13:03:59', '2023-08-15 13:03:59'),
(168, 'Topic - 11', 7, 'OOP', '2023-08-15 13:04:33', '2023-08-15 13:04:33'),
(169, 'Topic - 12', 7, 'Basics of data structures and algorithms', '2023-08-15 13:05:12', '2023-08-15 13:05:12'),
(170, 'Topic - 13', 7, 'Overview of algorithmic thinking and problem-solving strategies', '2023-08-15 13:05:43', '2023-08-15 13:05:43'),
(171, 'Topic - 14', 7, 'Introduction to arrays and their operations', '2023-08-15 13:06:26', '2023-08-15 13:06:26'),
(172, 'Topic - 15', 7, 'Solving problems using Array', '2023-08-15 13:07:14', '2023-08-15 13:07:14'),
(173, 'Topic - 16', 7, 'Introduction to String and their operations', '2023-08-15 13:07:41', '2023-08-15 13:07:41'),
(174, 'Topic - 17', 7, 'Solving problems using String', '2023-08-15 13:08:06', '2023-08-15 13:08:06'),
(175, 'Topic - 18', 7, 'Introduction to Stack and their operations', '2023-08-15 13:08:41', '2023-08-15 13:08:41'),
(176, 'Topic - 19', 7, 'Solving problems using Stack', '2023-08-15 13:09:29', '2023-08-15 13:09:29'),
(177, 'Topic - 20', 7, 'Introduction to Queue and their operations', '2023-08-15 13:10:20', '2023-08-15 13:10:20'),
(178, 'Topic - 21', 7, 'Solving problems using Queue', '2023-08-15 13:10:53', '2023-08-15 13:10:53'),
(179, 'Topic - 22', 7, 'Introduction to Linked List and their operations', '2023-08-15 13:11:32', '2023-08-15 13:11:32'),
(180, 'Topic - 23', 7, 'Solving problems using Linked List', '2023-08-15 13:12:00', '2023-08-15 13:12:00'),
(181, 'Topic - 24', 7, 'Introduction to Linked List and their operations', '2023-08-15 13:12:30', '2023-08-15 13:12:30'),
(182, 'Topic - 25', 7, 'Solving problems using Linked List', '2023-08-15 13:12:56', '2023-08-15 13:12:56'),
(183, 'Topic - 26', 7, 'Introduction to sorting and searching algorithms', '2023-08-15 13:13:28', '2023-08-15 13:13:28'),
(184, 'Topic - 27', 7, 'Comparing different sorting and searching techniques', '2023-08-15 13:14:14', '2023-08-15 13:14:14'),
(185, 'Topic - 28', 7, 'Exploring hashing techniques and hash table implementations', '2023-08-15 13:14:46', '2023-08-15 13:14:46'),
(186, 'Topic - 29', 7, 'Solving problems using hashing', '2023-08-15 13:15:23', '2023-08-15 13:15:23'),
(187, 'Topic - 30', 7, 'Basics of time complexity analysis', '2023-08-15 13:16:12', '2023-08-15 13:16:12'),
(188, 'Topic - 31', 7, 'Evaluating algorithm efficiency using Big O notation', '2023-08-15 13:16:43', '2023-08-15 13:16:43'),
(189, 'Topic - 32', 7, 'Basics of space complexity analysis', '2023-08-15 13:17:17', '2023-08-15 13:17:17'),
(190, 'Topic - 33', 7, 'Analyzing memory usage in algorithms', '2023-08-15 13:18:02', '2023-08-15 13:18:02'),
(191, 'Topic - 34', 7, 'Understanding recursion and its applications', '2023-08-15 13:18:33', '2023-08-15 13:18:33'),
(192, 'Topic - 35', 7, 'Solving problems using recursive algorithms', '2023-08-15 13:19:02', '2023-08-15 13:19:02'),
(193, 'Topic - 36', 7, 'Understanding dynamic programming concepts', '2023-08-15 13:19:40', '2023-08-15 13:19:40'),
(194, 'Topic - 37', 7, 'Solving problems using dynamic programming techniques', '2023-08-15 13:20:06', '2023-08-15 13:20:06'),
(195, 'Topic - 38', 7, 'Exploring greedy algorithms and their characteristics', '2023-08-15 13:20:36', '2023-08-15 13:20:36'),
(196, 'Topic - 39', 7, 'Solving problems using greedy strategies', '2023-08-15 13:21:16', '2023-08-15 13:21:16'),
(197, 'Topic - 40', 7, 'Guided practice sessions to solve coding problems', '2023-08-15 13:21:47', '2023-08-15 13:21:47'),
(198, 'Topic - 41', 7, 'Problem-solving exercises and challenges', '2023-08-15 13:22:17', '2023-08-15 13:22:17'),
(199, 'Topic - 42', 7, 'Review and discussion of solutions, including time and space complexity analysis', '2023-08-15 13:22:59', '2023-08-15 13:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `course_batches`
--

CREATE TABLE `course_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name_id` bigint(20) UNSIGNED NOT NULL,
  `course_batch` varchar(255) NOT NULL,
  `course_avail_seat` varchar(255) NOT NULL,
  `course_num_class` varchar(255) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `course_batch_start` varchar(255) NOT NULL,
  `course_batch_end` varchar(255) NOT NULL,
  `course_last_date_regist` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `course_category`, `created_at`, `updated_at`) VALUES
(4, 'IT', '2023-07-02 08:36:45', '2023-07-13 12:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `course_infos`
--

CREATE TABLE `course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_category_id` bigint(20) UNSIGNED NOT NULL,
  `course_image` text NOT NULL,
  `course_document` text NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_infos`
--

INSERT INTO `course_infos` (`id`, `course_title`, `course_category_id`, `course_image`, `course_document`, `course_duration`, `course_description`, `created_at`, `updated_at`, `course_fee`) VALUES
(4, 'AI Based Web Development with Django', 4, '1689271898.WhatsApp Image 2023-07-09 at 5.04.44 PM.jpeg', '/storage/', '40 Classes', 'Python Django is a web framework that allows to quickly create efficient web pages. Django is also called batteries included framework because it provides built-in features such as Django Admin Interface, default database – SQLite3, etc. When you’re building a website, you always need a similar set of components: a way to handle user authentication (signing up, signing in, signing out), a management panel for your website, forms, a way to upload files, etc. Django gives you ready-made components to use.', '2023-07-02 08:39:23', '2023-07-13 12:11:38', '3200'),
(5, 'Machine & Deep Learning with Computer Vision', 4, '1689271962.WhatsApp Image 2023-07-09 at 12.19.49 AM.jpeg', '/storage/', '24 Classes', 'Machine learning (ML) and deep learning (DL) have revolutionized the field of computer vision, enabling machines to understand and interpret visual data with remarkable accuracy. Computer vision, a subfield of artificial intelligence (AI), focuses on teaching computers to process, analyze, and comprehend images and videos, mimicking human visual perception. By harnessing the power of ML and DL in computer vision, we unlock a multitude of applications that range from autonomous vehicles and facial recognition systems to medical imaging and augmented reality.', '2023-07-02 08:41:35', '2023-07-13 12:12:42', '3200'),
(6, 'Strategical Social Media Marketing', 4, '1692175542.1692173175.1689271719.WhatsApp Image 2023-07-09 at 5.04.45 PM.jpeg', '/storage/', '24 Classes', 'Strategic social media marketing is a discipline that focuses on utilizing social media platforms as a part of an overall marketing strategy to achieve specific business objectives. It involves developing and implementing a comprehensive plan to effectively leverage social media channels to connect with target audiences, build brand awareness, drive website traffic, and ultimately, achieve desired marketing outcomes.', '2023-07-13 12:08:39', '2023-08-16 02:45:42', '3200'),
(7, 'Data Structure and Algorithm with Leetcode Exercise', 4, '1692125738.Algorithm-and-Data-Structure-Course.jpeg', '/storage/', '24 Classes', 'Data structure and algorithms are two of the most important aspects of computer science. Data structures allow us to organize and store data, while algorithms allow us to process that data in a meaningful way. Learning data structure and algorithms will help you become a better programmer. You will be able to write code that is more efficient and more reliable. You will also be able to solve problems more quickly and more effectively.\r\n\r\nInnovative Skill enhances the problem solving ability of the programmers by teaching DSA through problem solving at Leetcode as it is one of the the biggest platforms for problem solvers', '2023-08-15 12:55:38', '2023-08-15 12:55:38', '2200');

-- --------------------------------------------------------

--
-- Table structure for table `custom_auth_users`
--

CREATE TABLE `custom_auth_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_auth_users`
--

INSERT INTO `custom_auth_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', 'eyJpdiI6IllzdVdJVFZOVzZYMEZ2UHlScFJtZnc9PSIsInZhbHVlIjoic1YxL25OaDRISThCM2xiWmlyL3lYUT09IiwibWFjIjoiOGI2YjM2Yzc3YmJhOTg5Nzc1MjdlYmQ2NWY1YjRjNmU3MGExYTdhYzg2ZDk2NGU5ODdiZTMwNjdmMTQwZjljOCIsInRhZyI6IiJ9', '2023-06-15 03:27:13', '2023-06-15 03:27:13'),
(2, 'test', 'user@gmail.com', 'eyJpdiI6InVSMCs5TDV3VWNWZEErSE9QYnQrRXc9PSIsInZhbHVlIjoia3FvRGR0V3JpYlpzRkhXS0phbC84QT09IiwibWFjIjoiMzBkODBjOGFiZWU2NmMyMzljYTE0YmZlOGE4MjBjOTRhYTBmMjAwNjNjM2FjMzMxMTNkMjM3YzA2NTJhMmUzNyIsInRhZyI6IiJ9', '2023-06-26 04:09:44', '2023-06-26 04:09:44'),
(3, 'Md Farhan Sadiq', 'mdfarhansadiq01@gmail.com', 'eyJpdiI6Ii9zVkRSR2ROUUluRFBTbTY2WUg5Vnc9PSIsInZhbHVlIjoiV1RKNnhmc2dadVRBWkViMEprbUgva3RtQnIrL0ZuSGFycHpXT3dScmV6ND0iLCJtYWMiOiJhNmVkYjQxM2FiM2Q1NjhmMjc2OWI3ZmRiMjhmZThhMzhhZWNkM2M5MTU5OTNhMGVjNDJmMWY2ZDhiYjM4MzQ5IiwidGFnIjoiIn0=', '2023-06-28 11:42:42', '2023-06-28 11:42:42'),
(4, 'test2', 'test2@gmail.com', 'eyJpdiI6Ims4NkFqWnEyWTlMUXNLNTRNaEQ5N0E9PSIsInZhbHVlIjoiMjg3cnlrSktWdTQrUTAyWWhtQ0xtdz09IiwibWFjIjoiNDFkMTYxYmJkZDY0MDk5NTgxZTJmNTM3OTA0NDU1ZjMyODVlZDVhYThlNGVkMjFiMWYyNzUxMjU4OTdjMmZmMCIsInRhZyI6IiJ9', '2023-07-03 00:35:10', '2023-07-03 00:35:10'),
(5, 'test3', 'test3@gmail.com', 'eyJpdiI6Ilp1TmtCdUtqOUMxdUNDbkZ1NXdqWHc9PSIsInZhbHVlIjoiaG1STVB5dENUek1STFhxSDkvN2xHUT09IiwibWFjIjoiMjRjNDdmZmNmODQ5NGQyZWFiN2UwN2Y0NzAzOGFhOTdlZDgzM2ZkZjJiYWFkNmFiMWY3YmJlODI1OGRlMDRiMyIsInRhZyI6IiJ9', '2023-07-03 00:36:48', '2023-07-03 00:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`id`, `course`, `name`, `email`, `number`, `addres`, `occupation`, `created_at`, `updated_at`) VALUES
(2, 'cyber security', 'Mahibullah', 'mahibullah@gmail.com', '01404561995', 'Dhaka', 'Student', '2023-06-20 08:39:12', '2023-06-20 08:39:12'),
(3, 'Web Development with Fast API Framework', 'test', 'test@gmail.com', '01732329072', 'test', 'test', '2023-07-03 02:09:19', '2023-07-03 02:09:19'),
(5, 'Web Development with Fast API Framework', 'test', 'test@gmail.com', 'test', 'test', 'test', '2023-07-04 01:20:12', '2023-07-04 01:20:12'),
(6, 'Web Development with Fast API Framework', 'test', 'test@gmail.com', 'test', 'test', 'test', '2023-07-04 01:20:35', '2023-07-04 01:20:35'),
(9, 'AI Based Web Development with Django', 'Azom Hossen', 'azomhossen9262@gmail.com', '01745909262', 'Empty', 'empty', '2023-07-26 05:49:03', '2023-07-26 05:49:03'),
(10, 'AI Based Web Development with Django', 'Azom Hossen', 'azomhossen9262@gmail.com', '01745909262', 'Empty', 'empty', '2023-07-26 05:49:31', '2023-07-26 05:49:31'),
(11, 'Machine & Deep Learning with Computer Vision', 'Md. Tanvir Hayat', 'tanvirsrv155@gmail.com', '01537345929', 'Empty', 'empty', '2023-07-28 05:40:33', '2023-07-28 05:40:33'),
(12, 'AI Based Web Development with Django', 'Md. Mahbubur Rahman', 'creativesmahbub@gmail.com', '01833647547', 'Empty', 'empty', '2023-07-28 17:50:00', '2023-07-28 17:50:00'),
(13, 'AI Based Web Development with Django', 'Md. Tanver Ahammed', 'tanvermbstuit16@gmail.com', '01828586035', 'Empty', 'empty', '2023-07-28 21:32:14', '2023-07-28 21:32:14'),
(14, 'AI Based Web Development with Django', 'Ekramul Haque', 'ehronybd@gmail.com', '01768505068', 'Empty', 'empty', '2023-07-29 10:50:51', '2023-07-29 10:50:51'),
(15, 'AI Based Web Development with Django', 'Abdullah Al Mahmud', 'shaowntxt@gmail.com', '01711124221', 'Empty', 'empty', '2023-07-29 15:32:31', '2023-07-29 15:32:31'),
(16, 'AI Based Web Development with Django', 'Md Rashid Arif', 'rashid.cse17@gmail.com', '01537338465', 'Empty', 'empty', '2023-08-02 12:41:19', '2023-08-02 12:41:19'),
(17, 'AI Based Web Development with Django', 'Kazy md abdullsh al symun', 'mdsymun16@gmail.com', '01879405869', 'Empty', 'empty', '2023-08-04 10:02:26', '2023-08-04 10:02:26'),
(18, 'Machine & Deep Learning with Computer Vision', 'MD. Asadullah Shibli', 'asadtakewondo@gmail.com', '01865805497', 'Empty', 'empty', '2023-08-09 07:27:35', '2023-08-09 07:27:35'),
(19, 'Machine & Deep Learning with Computer Vision', 'MD. TOHIDUL ISLAM', 'tohidulphy16182@gmail.com', '01580341289', 'Empty', 'empty', '2023-08-09 12:16:54', '2023-08-09 12:16:54'),
(20, 'Strategical Social Media Marketing', 'Abir Khan', 'abirkhan96@gmail.com', '01777111709', 'Empty', 'empty', '2023-08-12 02:31:53', '2023-08-12 02:31:53'),
(21, 'Strategical Social Media Marketing', 'Abir Khan', 'abirkhan96@gmail.com', '01777111709', 'Empty', 'empty', '2023-08-12 02:32:20', '2023-08-12 02:32:20'),
(22, 'Strategical Social Media Marketing', 'Golam Sarwar Siddiqi', 'golamsarwarsiddiqi@gmail.com', '01571363356', 'Empty', 'empty', '2023-08-17 05:21:01', '2023-08-17 05:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folder_name` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_fasts`
--

CREATE TABLE `home_fasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_fasts`
--

INSERT INTO `home_fasts` (`id`, `title`, `dis`, `created_at`, `updated_at`) VALUES
(1, 'The World’s Leading Distance Learning Provider 1', 'Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The Vdemy can offer you to enjoy the beauty of eLearning!', '2023-06-15 04:16:21', '2023-06-15 04:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `home_forths`
--

CREATE TABLE `home_forths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iframe` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_forths`
--

INSERT INTO `home_forths` (`id`, `iframe`, `created_at`, `updated_at`, `image`) VALUES
(1, 'https://www.youtube.com/embed/tsMakd5YcVM', '2023-06-15 06:22:42', '2023-06-15 06:22:42', ''),
(2, 'https://www.youtube.com/embed/tsMakd5YcVM', '2023-06-21 03:57:42', '2023-06-21 03:57:42', '1687341462.img1.babf2c5f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_seconds`
--

CREATE TABLE `home_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_seconds`
--

INSERT INTO `home_seconds` (`id`, `title`, `dis`, `created_at`, `updated_at`) VALUES
(1, 'Affordable Online Courses and Learning Opportunities 1', 'Finding your own space and utilize better learning options can result in faster than the traditional ways. Enjoy the beauty of eLearning!', '2023-06-15 05:22:12', '2023-06-15 05:24:00'),
(2, 'Learn the Latest Top Skills', 'Learning top skills can bring an extra-ordinary outcome in a career.', '2023-06-15 05:46:17', '2023-06-15 05:46:17'),
(3, 'Affordable Online Courses and Learning Opportunities 1', 'Finding your own space and utilize better learning options can result in faster than the traditional ways. Enjoy the beauty of eLearning!', '2023-06-15 05:47:34', '2023-06-21 03:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `home_thirds`
--

CREATE TABLE `home_thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_thirds`
--

INSERT INTO `home_thirds` (`id`, `title`, `dis`, `created_at`, `updated_at`) VALUES
(1, 'Learn the Latest Top Skills', 'Learning top skills can bring an extra-ordinary outcome in a career.', '2023-06-15 05:48:01', '2023-06-15 05:48:01'),
(2, 'Learn in Your Own Pace 2', 'Everyone prefers to enjoy learning at their own pace & that gives a great result.', '2023-06-15 05:48:17', '2023-06-15 05:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_26_092111_create_files', 1),
(6, '2023_05_04_120018_create_contents', 1),
(7, '2023_05_10_085747_create_course_categories_table', 1),
(8, '2023_05_11_041148_create_course_infos_table', 1),
(9, '2023_05_11_101324_create_coursecontents_table', 1),
(10, '2023_05_16_111542_create_course_batches_table', 1),
(11, '2023_05_18_090836_create_custom_auth_users_table', 1),
(12, '2023_05_19_123805_create_admission_pending_lists_table', 1),
(13, '2023_05_20_111437_create_admission_acceptance_lists', 1),
(14, '2023_05_22_104245_create_assign_batches_table', 1),
(15, '2023_06_15_094620_create_home_fasts_table', 2),
(16, '2023_06_15_100901_create_home_fasts_table', 3),
(17, '2023_06_15_110630_create_home_seconds_table', 4),
(18, '2023_06_15_113305_create_home_thirds_table', 5),
(19, '2023_06_15_121312_create_home_forths_table', 6),
(20, '2023_06_18_154952_create_blog_cats_table', 7),
(21, '2023_06_18_162751_create_blogs_table', 8),
(22, '2023_06_19_105020_create_about_fasts_table', 9),
(23, '2023_06_19_113208_create_about_seconds_table', 10),
(24, '2023_06_20_135720_create_enrolls_table', 11),
(25, '2023_07_08_083536_create_contactforms_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_fasts`
--
ALTER TABLE `about_fasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_seconds`
--
ALTER TABLE `about_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_acceptance_lists`
--
ALTER TABLE `admission_acceptance_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_acceptance_lists_student_enroll_course_id_foreign` (`student_enroll_course_id`);

--
-- Indexes for table `admission_pending_lists`
--
ALTER TABLE `admission_pending_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_pending_lists_course_title_id_foreign` (`course_title_id`);

--
-- Indexes for table `assign_batches`
--
ALTER TABLE `assign_batches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_batches_accepted_student_id_foreign` (`accepted_student_id`),
  ADD KEY `assign_batches_course_batch_id_foreign` (`course_batch_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_cat_id_foreign` (`blog_cat_id`);

--
-- Indexes for table `blog_cats`
--
ALTER TABLE `blog_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactforms`
--
ALTER TABLE `contactforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecontents`
--
ALTER TABLE `coursecontents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursecontents_course_title_id_foreign` (`course_title_id`);

--
-- Indexes for table `course_batches`
--
ALTER TABLE `course_batches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_batches_course_name_id_foreign` (`course_name_id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_infos_course_category_id_foreign` (`course_category_id`);

--
-- Indexes for table `custom_auth_users`
--
ALTER TABLE `custom_auth_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_fasts`
--
ALTER TABLE `home_fasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_forths`
--
ALTER TABLE `home_forths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_seconds`
--
ALTER TABLE `home_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_thirds`
--
ALTER TABLE `home_thirds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `about_fasts`
--
ALTER TABLE `about_fasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_seconds`
--
ALTER TABLE `about_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admission_acceptance_lists`
--
ALTER TABLE `admission_acceptance_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_pending_lists`
--
ALTER TABLE `admission_pending_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_batches`
--
ALTER TABLE `assign_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_cats`
--
ALTER TABLE `blog_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactforms`
--
ALTER TABLE `contactforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coursecontents`
--
ALTER TABLE `coursecontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `course_batches`
--
ALTER TABLE `course_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_infos`
--
ALTER TABLE `course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `custom_auth_users`
--
ALTER TABLE `custom_auth_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_fasts`
--
ALTER TABLE `home_fasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_forths`
--
ALTER TABLE `home_forths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_seconds`
--
ALTER TABLE `home_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_thirds`
--
ALTER TABLE `home_thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission_acceptance_lists`
--
ALTER TABLE `admission_acceptance_lists`
  ADD CONSTRAINT `admission_acceptance_lists_student_enroll_course_id_foreign` FOREIGN KEY (`student_enroll_course_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admission_pending_lists`
--
ALTER TABLE `admission_pending_lists`
  ADD CONSTRAINT `admission_pending_lists_course_title_id_foreign` FOREIGN KEY (`course_title_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assign_batches`
--
ALTER TABLE `assign_batches`
  ADD CONSTRAINT `assign_batches_accepted_student_id_foreign` FOREIGN KEY (`accepted_student_id`) REFERENCES `admission_acceptance_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_batches_course_batch_id_foreign` FOREIGN KEY (`course_batch_id`) REFERENCES `course_batches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_cat_id_foreign` FOREIGN KEY (`blog_cat_id`) REFERENCES `blog_cats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coursecontents`
--
ALTER TABLE `coursecontents`
  ADD CONSTRAINT `coursecontents_course_title_id_foreign` FOREIGN KEY (`course_title_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_batches`
--
ALTER TABLE `course_batches`
  ADD CONSTRAINT `course_batches_course_name_id_foreign` FOREIGN KEY (`course_name_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD CONSTRAINT `course_infos_course_category_id_foreign` FOREIGN KEY (`course_category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
