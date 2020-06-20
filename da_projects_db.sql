-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 06:22 AM
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
-- Database: `da_projects_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'homepage',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `link`, `active`, `cat`, `date_created`) VALUES
(22, 'Mohitebanneram', 'Mohitebanneram on the request.', 'http://localhost/mti/admin/uploads/banner/2017/07/541499218996.jpg', 1, 'homepage', '2017-07-05 02:13:48'),
(24, 'Vipinebanneram', 'Vipinebanneram self.', 'http://localhost/mti/admin/uploads/banner/2017/07/321499219145.jpg', 1, 'homepage', '2017-07-05 02:13:45'),
(25, 'Unanimous', 'Unanimous ....', 'http://localhost/mti/admin/uploads/banner/2017/07/241499219171.jpg', 1, 'homepage', '2017-07-21 01:25:37'),
(26, 'Unanimous', 'Unanimous', 'http://localhost/mti/admin/uploads/banner/2017/07/371500682225.jpg', 1, 'homepage', '2017-11-11 22:47:15'),
(27, 'BN', 'Sun', 'http://localhost/mti/admin/uploads/banner/2017/07/891501014065.jpg', 1, 'homepage', '2017-11-11 22:58:00'),
(28, 'View', 'nice view', 'http://localhost/mti/admin/uploads/banner/2018/04/701524681405.jpeg', 1, 'homepage', '2018-04-25 19:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_type` int(11) DEFAULT NULL,
  `client_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `client_company` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `client_add1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_add2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_state` int(11) DEFAULT NULL,
  `client_pin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_phone1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_phone2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_email1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_email2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `passport_issued` date NOT NULL,
  `passport_expiry` date NOT NULL,
  `client_website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedBy` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedOn` datetime DEFAULT NULL,
  `imagepath` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Client_WalkInDate` date DEFAULT NULL,
  `Client_RefBy` int(10) DEFAULT NULL,
  `Company` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_type`, `client_name`, `dob`, `client_company`, `client_add1`, `client_add2`, `client_city`, `client_state`, `client_pin`, `client_phone1`, `client_phone2`, `client_email1`, `client_email2`, `passport`, `passport_issued`, `passport_expiry`, `client_website`, `UserName`, `CreatedBy`, `CreatedOn`, `imagepath`, `Client_WalkInDate`, `Client_RefBy`, `Company`) VALUES
(44, 7, 'Mohit', '0000-00-00', 'IPAGE', 'Dwarka', 'Dwarka', 'delhi', 10, '111111', '8888888888', '4444444444', 'a@b.com', 'abc@b.comd', 'LLLPPOO5445', '2015-07-01', '2020-07-31', 'http://abc.in', 'vipin', 'Vipin', '2017-07-18 12:36:09', NULL, '2017-07-31', 4, 'LTA Tours');

-- --------------------------------------------------------

--
-- Table structure for table `client_allocation`
--

CREATE TABLE `client_allocation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `remarks` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `allocated_by` int(11) NOT NULL,
  `allocated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_allocation`
--

INSERT INTO `client_allocation` (`id`, `user_id`, `client_id`, `remarks`, `allocated_by`, `allocated_on`) VALUES
(13, 5, 44, 'Auto assigned , when client created.', 1, '2017-12-05 21:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `client_documents`
--

CREATE TABLE `client_documents` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `doc_file_type` int(11) NOT NULL,
  `doc_cat` int(11) NOT NULL,
  `file_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_type`
--

CREATE TABLE `client_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_type`
--

INSERT INTO `client_type` (`id`, `name`, `created_by`, `created_on`) VALUES
(7, 'Individual', 'Vipin', '2017-07-18 19:11:34'),
(8, 'Corporate', 'Vipin', '2017-07-18 22:21:43'),
(9, 'Test', 'Vipin', '2017-09-25 10:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `cop_master`
--

CREATE TABLE `cop_master` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `budget_heads` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cop_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `po_number` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contractor_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contractor_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `wo_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `po_wo_work` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `extra_work` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `extra_work_charge` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `deduction` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `retention` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `other_payments` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `payment_certified_upto_last_bill` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `temp_data` int(11) NOT NULL DEFAULT '1',
  `net_payment` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cumulative_payment` date NOT NULL,
  `remark` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cop_date` date NOT NULL,
  `special_condition` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cop_master`
--

INSERT INTO `cop_master` (`id`, `project_id`, `project_name`, `budget_heads`, `cop_number`, `po_number`, `contact_person_name`, `contact_person_email`, `contact_person_phone`, `contractor_name`, `contractor_address`, `wo_number`, `po_wo_work`, `extra_work`, `extra_work_charge`, `deduction`, `retention`, `other_payments`, `payment_certified_upto_last_bill`, `created_by`, `temp_data`, `net_payment`, `cumulative_payment`, `remark`, `cop_date`, `special_condition`) VALUES
(9, 1, 'Test', '', 'WO/2018002/00001', 'jjjj', 'hg', 'gh', 'h', 'h', 'j', 'hg', '', 'j ', 'h', 'h', 'h ', '0000-00-00', '2018-02-04 20:00:45', 5, 1, 'g', '0000-00-00', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `directory`
--

CREATE TABLE `directory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'real name of file',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'description of the file ',
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'dir for directory , file for file upload',
  `created_by` int(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(11) NOT NULL DEFAULT '1' COMMENT '1=yes,0=No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `directory`
--

INSERT INTO `directory` (`id`, `name`, `parent_id`, `title`, `description`, `type`, `created_by`, `date_created`, `is_active`) VALUES
(127, 'New Folder1', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-23 07:16:58', 1),
(128, 'New Folder2', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-16 10:04:57', 1),
(129, 'Desert.jpg', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'file', 6, '2018-06-16 10:04:57', 1),
(131, 'Penguins.jpg', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'file', 6, '2018-06-16 10:04:57', 1),
(132, 'New Folder3', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-16 10:04:57', 1),
(133, 'New Folder4', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-16 10:04:57', 1),
(134, 'New Folder21', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-16 10:04:57', 1),
(135, 'New Folder123', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-16 10:04:57', 1),
(136, 'ctutorial.pdf', 135, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'file', 6, '2018-06-16 10:04:57', 1),
(138, 'New Folder21', 135, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-16 10:04:57', 1),
(140, 'New Folder', 138, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 0, '2018-06-16 10:04:57', 1),
(141, 'New Folder2', 140, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 0, '2018-06-16 10:04:57', 1),
(142, 'New Folder3', 140, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 0, '2018-06-16 10:04:57', 1),
(143, 'New Folder4', 141, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 0, '2018-06-16 10:04:57', 1),
(144, 'Test', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-22 12:01:43', 1),
(145, 'Book1_(1).xlsx', 144, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'file', 6, '2018-06-23 04:55:20', 1),
(146, 'New Folder', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'dir', 6, '2018-06-23 07:10:57', 1),
(147, 'Chrysanthemum.jpg', 146, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'file', 6, '2018-06-25 09:14:29', 1),
(148, 'Book1.xlsx', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text', 'file', 6, '2018-06-23 04:56:44', 1),
(149, 'Tulips.jpg', 135, '', 'Lorem Ipsum has been the industry\'s standard dummy text2', 'file', 6, '2018-06-16 10:06:53', 1),
(150, 'Koala.jpg', 135, '', 'Lorem Ipsum has been the industry\'s standard dummy text2', 'file', 6, '2018-06-16 10:09:19', 1),
(151, 'Jellyfish.jpg', 0, '', 'Lorem Ipsum has been the industry\'s standard dummy text1', 'file', 6, '2018-06-16 10:10:54', 1),
(152, 'Desert.jpg', 144, '', 'Lorem Ipsum has been the industry\'s standard dummy text23', 'file', 6, '2018-06-16 10:12:45', 1),
(153, 'Lighthouse.jpg', 144, '', 'Lorem Ipsum has been the industry\'s standard dummy text34234', 'file', 6, '2018-06-16 10:13:24', 1),
(154, 'store', 0, '', 'store some file', 'dir', 6, '2018-06-16 10:19:38', 1),
(155, 'Chrysanthemum.jpg', 0, '', 'xcv', 'file', 6, '2018-06-21 13:34:03', 1),
(157, 'Hydrangeas.jpg', 144, '', 'ads', 'file', 6, '2018-06-22 06:01:02', 1),
(158, 'Tulips.jpg', 138, '', 'asd', 'file', 4, '2018-06-22 06:16:55', 1),
(159, 'Jellyfish.jpg', 133, '', 'adsddsa', 'file', 4, '2018-06-22 09:55:20', 1),
(160, 'Hydrangeas.jpg', 133, '', 'dfgdfg', 'file', 4, '2018-06-22 09:58:15', 1),
(161, 'Koala.jpg', 140, '', 'asas', 'file', 4, '2018-06-22 10:46:23', 1),
(162, 'Chrysanthemum.jpg', 143, '', 'sdfsdf', 'file', 4, '2018-06-22 10:51:07', 1),
(163, 'Koala.jpg', 143, '', 'asd', 'file', 4, '2018-06-22 11:09:57', 1),
(164, 'Tulips.jpg', 143, '', 'dfss', 'file', 4, '2018-06-22 11:12:50', 1),
(165, 'Tulips.jpg', 127, '', 'tulips test', 'file', 6, '2018-06-25 09:33:52', 1),
(166, 'Penguins.jpg', 127, '', 'penguins test\r\n', 'file', 6, '2018-06-25 09:35:38', 1),
(167, 'Jellyfish.jpg', 127, '', 'jellyfish test\r\n', 'file', 6, '2018-06-25 09:39:20', 1),
(168, 'Chrysanthemum.jpg', 127, '', 'asdasd', 'file', 6, '2018-06-25 09:41:42', 1),
(169, 'Desert.jpg', 127, '', 'asdasdasd', 'file', 6, '2018-06-25 09:45:17', 1),
(170, 'Hydrangeas.jpg', 127, '', 'ghgfggh', 'file', 6, '2018-06-25 09:48:10', 1),
(171, 'Lighthouse.jpg', 127, '', 'light', 'file', 6, '2018-06-25 10:02:24', 1),
(172, 'Chrysanthemum.jpg', 128, '', 'dsfsdf', 'file', 6, '2018-06-25 10:04:19', 1),
(173, 'Desert.jpg', 128, '', 'njjk', 'file', 6, '2018-06-25 10:10:33', 1),
(174, 'Penguins.jpg', 128, '', 'sssssssq', 'file', 6, '2018-06-25 10:11:44', 1),
(175, 'Penguins.jpg', 128, '', 'ddd', 'file', 6, '2018-06-25 10:14:56', 1),
(176, 'Koala.jpg', 128, '', '', 'file', 6, '2018-06-25 10:16:48', 1),
(177, 'Lighthouse.jpg', 128, '', '', 'file', 6, '2018-06-25 10:17:19', 1),
(178, 'Desert.jpg', 128, '', '', 'file', 6, '2018-06-25 10:24:24', 1),
(179, 'up_files', 128, '', 'sadasdasdasdsadasdasdas', 'dir', 6, '2018-06-25 10:25:50', 1),
(180, 'Chrysanthemum.jpg', 179, '', 'Chrysanthemum Chrysanthemum', 'file', 6, '2018-06-25 10:26:51', 1),
(181, 'Chrysanthemum.jpg', 154, '', 'dfgdfgdfg', 'file', 6, '2018-06-25 11:22:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `directory_files_comment`
--

CREATE TABLE `directory_files_comment` (
  `id` int(10) NOT NULL,
  `file_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directory_files_comment`
--

INSERT INTO `directory_files_comment` (`id`, `file_id`, `user_id`, `comment`, `date`) VALUES
(1, 129, 6, 'comment1', '2018-05-28 16:45:03'),
(2, 129, 6, 'comment2', '2018-05-28 16:45:03'),
(3, 129, 6, 'comment3', '2018-05-28 16:45:30'),
(4, 129, 6, 'comment4', '2018-05-28 16:45:13'),
(5, 129, 6, 'dfasdads', '2018-05-28 18:02:58'),
(6, 131, 6, 'asdasd', '2018-05-28 18:03:08'),
(7, 135, 6, 'adasdas', '2018-05-28 18:09:53'),
(8, 135, 6, 'fgdfgdfgdfgdf', '2018-05-28 18:22:38'),
(9, 136, 6, 'asdasd', '2018-05-28 18:25:47'),
(10, 136, 6, 'asdasd1', '2018-05-28 18:25:47'),
(11, 136, 6, 'asdasd12', '2018-05-28 18:25:47'),
(12, 137, 0, 'asdasdasd', '2018-05-29 12:24:14'),
(13, 137, 6, 'asdasdsdaazzZ', '2018-05-29 12:25:32'),
(14, 145, 6, 'asdasd', '2018-06-12 15:11:09'),
(15, 145, 6, 'dsfsdfsdfsd', '2018-06-16 16:12:46'),
(16, 145, 6, 'sdfsdf', '2018-06-16 16:13:30'),
(17, 145, 6, 'sadasd', '2018-06-16 16:14:42'),
(18, 145, 6, 'adsasd', '2018-06-16 16:31:23'),
(23, 157, 6, 'sdf', '2018-06-22 11:43:23'),
(24, 158, 4, 'cv', '2018-06-22 11:47:15'),
(25, 158, 6, 'asd', '2018-06-22 11:52:48'),
(29, 0, 4, 'sd', '2018-06-22 12:03:15'),
(30, 0, 4, 'asd', '2018-06-22 12:05:25'),
(39, 155, 4, 'aS', '2018-06-22 12:38:01'),
(40, 155, 4, 'kjgjk', '2018-06-22 12:45:16'),
(41, 155, 4, 'asdd', '2018-06-22 12:46:08'),
(42, 155, 4, 'sdfsdf', '2018-06-22 13:21:26'),
(43, 155, 4, 'dsfsd', '2018-06-22 13:23:57'),
(44, 155, 4, 'asdasd', '2018-06-22 13:37:03'),
(45, 155, 4, 'asd', '2018-06-22 14:03:57'),
(46, 155, 4, 'asdasd', '2018-06-22 14:09:25'),
(47, 155, 4, 'asdasd', '2018-06-22 14:52:41'),
(48, 145, 4, 'ZSDas', '2018-06-22 14:53:49'),
(49, 157, 4, 'jfhj', '2018-06-22 14:54:29'),
(50, 153, 4, 'asdasd', '2018-06-22 15:08:12'),
(51, 153, 4, 'asdasd', '2018-06-22 15:08:17'),
(52, 155, 4, 'as', '2018-06-22 15:09:50'),
(53, 155, 4, 'sa', '2018-06-22 15:16:40'),
(54, 155, 4, 'sa', '2018-06-22 15:19:06'),
(55, 159, 6, 'asdasd', '2018-06-22 15:25:38'),
(56, 160, 4, 'sdfsdf', '2018-06-22 15:28:54'),
(57, 161, 6, 'asdasdasd', '2018-06-22 16:16:48'),
(58, 161, 6, 'asdasd', '2018-06-22 16:18:42'),
(59, 161, 6, 'asdds', '2018-06-22 16:19:34'),
(60, 162, 6, 'asdasdasd', '2018-06-22 16:21:32'),
(61, 155, 4, 'asdas', '2018-06-22 16:34:59'),
(62, 155, 4, 'asdasd', '2018-06-22 16:35:49'),
(63, 155, 4, 'kjfdasjkd', '2018-06-22 16:37:09'),
(64, 155, 4, 'asd', '2018-06-22 16:37:44'),
(65, 155, 4, 'sdf', '2018-06-22 16:39:05'),
(66, 163, 6, 'asdasd', '2018-06-22 16:40:28'),
(67, 164, 6, 'dsfsfsdfsdf', '2018-06-22 16:43:14'),
(68, 166, 4, 'file working\r\n', '2018-06-25 15:07:03'),
(69, 170, 7, 'sdfasd', '2018-06-25 15:20:28'),
(70, 171, 4, 'light1', '2018-06-25 15:32:46'),
(71, 180, 4, 'try comment', '2018-06-25 15:57:30'),
(72, 181, 4, 'name', '2018-06-25 16:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `cat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subcat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `discussion_text` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `comments` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `sender_id`, `receiver_id`, `cat`, `subcat`, `post_id`, `discussion_text`, `date_posted`, `date_modified`, `comments`) VALUES
(22, 2, 0, 'tourpost', 'comment', 21, 'hi mohit i want to know about this trip', '2017-06-06 01:09:19', '0000-00-00 00:00:00', ''),
(23, 2, 0, 'tourpost', 'comment', 21, 'can you tell me ', '2017-06-06 01:09:34', '0000-00-00 00:00:00', ''),
(24, 3, 0, 'tourpost', 'comment', 21, 'yes say ', '2017-06-06 01:11:30', '0000-00-00 00:00:00', ''),
(25, 3, 0, 'tourpost', 'comment', 21, 'what to ask', '2017-06-06 01:13:33', '0000-00-00 00:00:00', ''),
(30, 2, 0, 'tourpost', 'comment', 20, 'Hi sir', '2017-06-06 01:39:17', '0000-00-00 00:00:00', ''),
(31, 2, 0, 'tourpost', 'comment', 20, 'are you there', '2017-06-06 01:45:32', '0000-00-00 00:00:00', ''),
(34, 2, 0, 'tourpost', 'comment', 21, 'how was the journey', '2017-06-06 01:53:02', '0000-00-00 00:00:00', ''),
(35, 3, 0, 'tourpost', 'comment', 21, 'it was very nice', '2017-06-06 01:53:24', '0000-00-00 00:00:00', ''),
(36, 2, 0, 'tourpost', 'comment', 21, 'what was the cost', '2017-06-06 01:54:16', '0000-00-00 00:00:00', ''),
(49, 3, 0, 'tourpost', 'comment', 21, 'hey', '2017-06-06 02:29:38', '0000-00-00 00:00:00', ''),
(50, 3, 0, 'tourpost', 'comment', 21, 'how are u', '2017-06-06 02:30:04', '0000-00-00 00:00:00', ''),
(51, 3, 0, 'tourpost', 'comment', 21, 'whats going on', '2017-06-06 02:31:09', '0000-00-00 00:00:00', ''),
(53, 2, 0, 'tourpost', 'comment', 21, 'hey', '2017-06-06 02:32:21', '0000-00-00 00:00:00', ''),
(60, 3, 0, 'tourpost', 'comment', 20, 'hi', '2017-06-06 02:37:03', '0000-00-00 00:00:00', ''),
(61, 3, 0, 'tourpost', 'comment', 29, 'hey..bro', '2017-06-06 20:58:33', '0000-00-00 00:00:00', ''),
(62, 3, 0, 'tourpost', 'comment', 21, 'yes', '2017-06-07 01:12:56', '0000-00-00 00:00:00', ''),
(63, 2, 2, 'tourpost', 'comment', 27, 'nice view', '2017-06-08 01:02:45', '0000-00-00 00:00:00', ''),
(74, 2, 3, 'tourpost', 'comment', 20, 'yes say ', '2017-06-08 02:03:38', '0000-00-00 00:00:00', ''),
(75, 2, 3, 'tourpost', 'comment', 20, 'what you want to ask', '2017-06-08 02:04:03', '0000-00-00 00:00:00', ''),
(76, 2, 2, 'tourpost', 'comment', 29, 'what about trip', '2017-07-01 20:02:03', '0000-00-00 00:00:00', ''),
(77, 4, 2, 'tourpost', 'comment', 29, 'hello sir', '2017-07-01 22:17:33', '0000-00-00 00:00:00', ''),
(78, 4, 2, 'tourpost', 'comment', 29, 'Kay haal hai', '2017-07-01 22:17:40', '0000-00-00 00:00:00', ''),
(79, 2, 4, 'tourpost', 'comment', 31, 'ssssssss', '2017-07-03 22:23:17', '0000-00-00 00:00:00', ''),
(80, 2, 2, 'tourpost', 'comment', 28, 'hello', '2017-07-04 01:59:27', '0000-00-00 00:00:00', ''),
(81, 2, 2, 'tourpost', 'comment', 20, 'test', '2017-07-15 20:38:27', '0000-00-00 00:00:00', ''),
(82, 2, 2, 'tourpost', 'comment', 20, 'ldkyhfkdls', '2017-07-15 20:38:30', '0000-00-00 00:00:00', ''),
(83, 2, 2, 'tourpost', 'comment', 20, ';kasudaadckdd', '2017-07-15 20:38:33', '0000-00-00 00:00:00', ''),
(84, 2, 2, 'tourpost', 'comment', 20, 'd', '2017-07-15 20:38:33', '0000-00-00 00:00:00', ''),
(85, 2, 2, 'tourpost', 'comment', 20, 'df', '2017-07-15 20:38:33', '0000-00-00 00:00:00', ''),
(86, 2, 2, 'tourpost', 'comment', 20, 'df', '2017-07-15 20:38:34', '0000-00-00 00:00:00', ''),
(87, 2, 2, 'tourpost', 'comment', 20, '', '2017-07-15 20:38:34', '0000-00-00 00:00:00', ''),
(88, 2, 2, 'tourpost', 'comment', 20, '', '2017-07-15 20:38:34', '0000-00-00 00:00:00', ''),
(89, 2, 2, 'tourpost', 'comment', 20, 'f', '2017-07-15 20:38:34', '0000-00-00 00:00:00', ''),
(90, 2, 2, 'tourpost', 'comment', 20, 's', '2017-07-15 20:38:34', '0000-00-00 00:00:00', ''),
(91, 2, 2, 'tourpost', 'comment', 20, 'd', '2017-07-15 20:38:34', '0000-00-00 00:00:00', ''),
(92, 2, 2, 'tourpost', 'comment', 20, 'fdf', '2017-07-15 20:38:35', '0000-00-00 00:00:00', ''),
(93, 2, 2, 'tourpost', 'comment', 20, '', '2017-07-15 20:38:35', '0000-00-00 00:00:00', ''),
(94, 2, 2, 'tourpost', 'comment', 20, 'fd', '2017-07-15 20:38:35', '0000-00-00 00:00:00', ''),
(95, 2, 2, 'tourpost', 'comment', 20, '', '2017-07-15 20:38:35', '0000-00-00 00:00:00', ''),
(96, 2, 2, 'tourpost', 'comment', 20, '', '2017-07-15 20:38:35', '0000-00-00 00:00:00', ''),
(97, 2, 2, 'tourpost', 'comment', 20, '<3', '2017-07-15 20:38:50', '0000-00-00 00:00:00', ''),
(98, 2, 2, 'tourpost', 'comment', 29, 'dasd ', '2017-07-15 20:43:35', '0000-00-00 00:00:00', ''),
(99, 2, 2, 'tourpost', 'comment', 29, '', '2017-07-15 20:44:52', '0000-00-00 00:00:00', ''),
(100, 2, 2, 'tourpost', 'comment', 29, '', '2017-07-15 20:44:54', '0000-00-00 00:00:00', ''),
(101, 2, 2, 'tourpost', 'comment', 29, '', '2017-07-15 20:44:55', '0000-00-00 00:00:00', ''),
(102, 2, 2, 'tourpost', 'comment', 29, '', '2017-07-15 20:44:55', '0000-00-00 00:00:00', ''),
(103, 2, 2, 'tourpost', 'comment', 29, '', '2017-07-15 20:44:58', '0000-00-00 00:00:00', ''),
(104, 2, 2, 'tourpost', 'comment', 29, 'dafdaf', '2017-07-15 20:45:13', '0000-00-00 00:00:00', ''),
(105, 2, 2, 'tourpost', 'comment', 56, 'hello', '2017-07-17 21:24:13', '0000-00-00 00:00:00', ''),
(106, 3, 2, 'tourpost', 'comment', 53, 'Nice place', '2017-07-17 21:26:46', '0000-00-00 00:00:00', ''),
(107, 3, 2, 'tourpost', 'comment', 53, 'Thanx', '2017-07-17 21:33:29', '0000-00-00 00:00:00', ''),
(108, 2, 2, 'tourpost', 'comment', 56, 'hey', '2017-07-17 22:13:55', '0000-00-00 00:00:00', ''),
(109, 3, 2, 'tourpost', 'comment', 56, 'Hello', '2017-07-17 22:14:19', '0000-00-00 00:00:00', ''),
(110, 2, 3, 'tourpost', 'comment', 57, 'Hey', '2017-07-17 23:29:35', '0000-00-00 00:00:00', ''),
(111, 2, 3, 'tourpost', 'comment', 57, 'jQuery31109591735997605781_1501034823289', '2017-07-26 02:07:07', '0000-00-00 00:00:00', ''),
(112, 2, 3, 'tourpost', 'comment', 57, 'jQuery3110039333064041967125_1501034879159', '2017-07-26 02:08:02', '0000-00-00 00:00:00', ''),
(113, 2, 3, 'tourpost', 'comment', 57, 'sdsds', '2017-07-26 02:15:08', '0000-00-00 00:00:00', ''),
(114, 2, 2, 'tourpost', 'comment', 55, 'hello', '2017-09-20 10:09:21', '0000-00-00 00:00:00', ''),
(115, 2, 2, 'tourpost', 'comment', 58, 'dhsjhd', '2018-04-25 18:30:27', '0000-00-00 00:00:00', ''),
(116, 2, 2, 'tourpost', 'comment', 58, 'sdsds', '2018-04-25 18:30:39', '0000-00-00 00:00:00', ''),
(117, 3, 2, 'tourpost', 'comment', 58, 'hello', '2018-04-25 18:32:25', '0000-00-00 00:00:00', ''),
(118, 3, 2, 'tourpost', 'comment', 58, 'how was trip', '2018-04-25 18:32:32', '0000-00-00 00:00:00', ''),
(119, 3, 2, 'tourpost', 'comment', 58, 'pls tell me', '2018-04-25 18:33:08', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `document_category`
--

CREATE TABLE `document_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_category`
--

INSERT INTO `document_category` (`id`, `category_name`) VALUES
(1, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `document_file_type`
--

CREATE TABLE `document_file_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document_file_type`
--

INSERT INTO `document_file_type` (`id`, `type_name`, `slug`) VALUES
(1, 'PDF', 'pdf'),
(2, 'IMAGE', 'image'),
(3, 'MS-EXCEL', 'ms_excel'),
(4, 'MS-WORD', 'ms_word'),
(5, 'PPT', 'ppt');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `link_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link_address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subcat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `post_id`, `link_type`, `link_address`, `cat`, `subcat`, `slug`) VALUES
(50, 3, 0, 'image', 'http://localhost/mti/user/profile_pic/user_3/full_size/8511496778935.jpg', 'profile', 'fullsize', ''),
(51, 3, 0, 'image', 'http://localhost/mti/user/profile_pic/user_3/thumb/8511496778935.jpg', 'profile', 'thumb', ''),
(52, 2, 0, 'image', 'http://localhost/mti/user/profile_pic/user_2/full_size/3461500152674.jpg', 'profile', 'fullsize', ''),
(53, 2, 0, 'image', 'http://localhost/mti/user/profile_pic/user_2/thumb/3461500152674.jpg', 'profile', 'thumb', ''),
(54, 2, 0, 'url', 'https://www.facebook.com/narendramodi', 'social', 'facebook', ''),
(55, 2, 0, 'url', 'https://twitter.com/narendramodi', 'social', 'twitter', ''),
(56, 2, 0, 'url', 'https://plus.google.com/+NarendraModi', 'social', 'google_plus', ''),
(57, 2, 0, 'url', '', 'social', 'linkedin', ''),
(58, 2, 0, 'url', 'https://instagram.com/narendramodi', 'social', 'instagram', ''),
(59, 2, 0, 'url', 'https://www.youtube.com/user/narendramodi', 'social', 'youtube', ''),
(60, 4, 0, 'url', 'https://www.facebook.com/narendramodi', 'social', 'facebook', ''),
(61, 4, 0, 'url', 'https://twitter.com/narendramodi', 'social', 'twitter', ''),
(62, 4, 0, 'url', 'https://plus.google.com/+NarendraModi', 'social', 'google_plus', ''),
(63, 4, 0, 'url', 'https://in.linkedin.com/in/narendramodi', 'social', 'linkedin', ''),
(64, 4, 0, 'url', 'https://instagram.com/narendramodi', 'social', 'instagram', ''),
(65, 4, 0, 'url', '', 'social', 'youtube', ''),
(66, 4, 0, 'image', 'http://localhost/mti/user/profile_pic/user_4/full_size/9761497303051.jpg', 'profile', 'fullsize', ''),
(67, 4, 0, 'image', 'http://localhost/mti/user/profile_pic/user_4/thumb/9761497303051.jpg', 'profile', 'thumb', ''),
(70, 3, 0, 'url', 'https://www.facebook.com/narendramodi', 'social', 'facebook', ''),
(71, 3, 0, 'url', 'https://www.facebook.com/narendramodi', 'social', 'twitter', ''),
(72, 3, 0, 'url', '', 'social', 'google_plus', ''),
(73, 3, 0, 'url', '', 'social', 'linkedin', ''),
(74, 3, 0, 'url', '', 'social', 'instagram', ''),
(75, 3, 0, 'url', '', 'social', 'youtube', ''),
(84, 6, 0, 'url', '', 'social', 'facebook', ''),
(85, 6, 0, 'url', '', 'social', 'twitter', ''),
(86, 6, 0, 'url', '', 'social', 'google_plus', ''),
(87, 6, 0, 'url', '', 'social', 'linkedin', ''),
(88, 6, 0, 'url', '', 'social', 'instagram', ''),
(89, 6, 0, 'url', '', 'social', 'youtube', ''),
(90, 6, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'fullsize', ''),
(91, 6, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'thumb', ''),
(96, 2, 52, 'image', 'http://localhost/mti/user/tour_img/user_2/fullsize/7721500320499.jpg', 'tour_img_fullsize', 'national', ''),
(97, 2, 52, 'image', 'http://localhost/mti/user/tour_img/user_2/thumb/7721500320499.jpg', 'tour_img_thumb', 'national', ''),
(98, 2, 53, 'image', 'http://localhost/mti/user/tour_img/user_2/fullsize/8581500320604.jpg', 'tour_img_fullsize', 'international', ''),
(99, 2, 53, 'image', 'http://localhost/mti/user/tour_img/user_2/thumb/8581500320604.jpg', 'tour_img_thumb', 'international', ''),
(104, 3, 57, 'image', 'http://localhost/mti/user/tour_img/user_3/fullsize/5501500326787.jpg', 'tour_img_fullsize', 'national', ''),
(105, 3, 57, 'image', 'http://localhost/mti/user/tour_img/user_3/thumb/5501500326787.jpg', 'tour_img_thumb', 'national', ''),
(198, 2, 53, 'image', 'http://localhost/mti/user/tour_img/user_2/fullsize/53821501357314.jpg', 'tour_img_fullsize', 'international', ''),
(199, 2, 53, 'image', 'http://localhost/mti/user/tour_img/user_2/thumb/53821501357314.jpg', 'tour_img_thumb', 'international', ''),
(204, 2, 55, 'image', 'http://localhost/mti/user/tour_img/user_2/fullsize/55801501358230.jpg', 'tour_img_fullsize', 'international', ''),
(205, 2, 55, 'image', 'http://localhost/mti/user/tour_img/user_2/thumb/55801501358230.jpg', 'tour_img_thumb', 'international', ''),
(206, 8, 0, 'url', '', 'social', 'facebook', ''),
(207, 8, 0, 'url', '', 'social', 'twitter', ''),
(208, 8, 0, 'url', '', 'social', 'google_plus', ''),
(209, 8, 0, 'url', '', 'social', 'linkedin', ''),
(210, 8, 0, 'url', '', 'social', 'instagram', ''),
(211, 8, 0, 'url', '', 'social', 'youtube', ''),
(212, 8, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'fullsize', ''),
(213, 8, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'thumb', ''),
(214, 3, 57, 'image', 'http://localhost/mti/user/tour_img/user_3/fullsize/57801510439001.jpg', 'tour_img_fullsize', 'national', ''),
(215, 3, 57, 'image', 'http://localhost/mti/user/tour_img/user_3/thumb/57801510439001.jpg', 'tour_img_thumb', 'national', ''),
(216, 2, 55, 'image', 'http://localhost/mti/user/tour_img/user_2/fullsize/55791524680797.jpg', 'tour_img_fullsize', 'international', ''),
(217, 2, 55, 'image', 'http://localhost/mti/user/tour_img/user_2/thumb/55791524680797.jpg', 'tour_img_thumb', 'international', ''),
(218, 2, 58, 'image', 'http://localhost/mti/user/tour_img/user_2/fullsize/58331524681006.jpg', 'tour_img_fullsize', 'international', ''),
(219, 2, 58, 'image', 'http://localhost/mti/user/tour_img/user_2/thumb/58331524681006.jpg', 'tour_img_thumb', 'international', ''),
(220, 8, 0, 'url', '', 'social', 'facebook', ''),
(221, 8, 0, 'url', '', 'social', 'twitter', ''),
(222, 8, 0, 'url', '', 'social', 'google_plus', ''),
(223, 8, 0, 'url', '', 'social', 'linkedin', ''),
(224, 8, 0, 'url', '', 'social', 'instagram', ''),
(225, 8, 0, 'url', '', 'social', 'youtube', ''),
(226, 8, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'fullsize', ''),
(227, 8, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'thumb', ''),
(228, 9, 0, 'url', '', 'social', 'facebook', ''),
(229, 9, 0, 'url', '', 'social', 'twitter', ''),
(230, 9, 0, 'url', '', 'social', 'google_plus', ''),
(231, 9, 0, 'url', '', 'social', 'linkedin', ''),
(232, 9, 0, 'url', '', 'social', 'instagram', ''),
(233, 9, 0, 'url', '', 'social', 'youtube', ''),
(234, 9, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'fullsize', ''),
(235, 9, 0, 'image', 'http://localhost/mti/user/profile_pic/avtar.jpg', 'profile', 'thumb', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `id` int(11) NOT NULL,
  `menu_display_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `page_query_string` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `menu_group_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`id`, `menu_display_name`, `page_query_string`, `display_order`, `menu_group_id`, `date_created`) VALUES
(47, 'Create Project', 'create-project', 5, 1, '2018-01-04 20:26:56'),
(48, 'Add WBS', 'wbs', 6, 1, '2018-01-04 20:27:03'),
(49, 'Add WBS Category', 'add-wbs-cat', 1, 1, '2017-12-19 02:17:06'),
(50, 'Add WBS Sub Category', 'add-wbs-subcat', 2, 1, '2018-01-03 20:57:27'),
(52, 'Project Charter', 'project-charter', 7, 1, '2018-01-04 20:16:52'),
(53, 'Budget / Cost', 'budget-cost-summary', 9, 1, '2018-01-19 00:39:24'),
(54, 'PO Entry', 'po-entry', 8, 1, '2018-01-25 00:50:16'),
(55, 'Work Order Entry', 'wo-entry', 10, 1, '2018-02-04 18:41:03'),
(56, 'COP Entry', 'cop-entry', 11, 1, '2018-02-05 02:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `menu_group`
--

CREATE TABLE `menu_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_group`
--

INSERT INTO `menu_group` (`id`, `group_name`, `display_order`, `date_created`) VALUES
(1, 'Menu', 1, '2017-12-04 10:14:06'),
(99, 'Admin Options', 0, '2017-11-14 01:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `menu_user`
--

CREATE TABLE `menu_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comma_seperated_menu_ids` text COLLATE utf8_unicode_ci NOT NULL,
  `assigned_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_user`
--

INSERT INTO `menu_user` (`id`, `user_id`, `comma_seperated_menu_ids`, `assigned_on`) VALUES
(5, 6, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100', '2018-06-18 12:44:47'),
(7, 4, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100', '2018-06-21 10:03:52'),
(8, 3, '7,8', '2017-09-02 06:56:52'),
(9, 2, '1,3,2,30,7,6,5,4,8,9,22,23,24,27,25,26', '2017-09-25 06:42:05'),
(11, 1, '1,7,9,28,16', '2017-09-18 12:44:37'),
(12, 65, '17,18,18,19,19,18,18,17,17,19,19,24,24,21,0,0,0,0,0,21,20,0,20', '2018-05-26 10:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `next_serial_number`
--

CREATE TABLE `next_serial_number` (
  `id` int(11) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `active_month` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `active_year` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `financial_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `serial_number_for` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'po_number/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `next_serial_number`
--

INSERT INTO `next_serial_number` (`id`, `serial_number`, `active_month`, `active_year`, `financial_year`, `serial_number_for`) VALUES
(13, 5, '001', '2018', '2018-2019', 'po_number'),
(14, 1, '002', '2018', '2018-2019', 'wo_number');

-- --------------------------------------------------------

--
-- Table structure for table `notification_details`
--

CREATE TABLE `notification_details` (
  `id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subcat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `clear` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_notified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification_details`
--

INSERT INTO `notification_details` (`id`, `to_id`, `from_id`, `type`, `cat`, `subcat`, `cat_id`, `subcat_id`, `clear`, `comment`, `date_notified`) VALUES
(40, 2, 2, 'user', 'post', 'comment', 56, 105, 0, '', '2017-07-17 21:24:13'),
(41, 2, 3, 'user', 'post', 'comment', 53, 106, 1, '', '2017-07-17 21:27:20'),
(42, 2, 3, 'user', 'post', 'comment', 53, 107, 1, '', '2017-07-17 21:33:47'),
(43, 2, 3, 'user', 'post', 'comment', 56, 109, 1, '', '2017-07-17 22:14:36'),
(44, 3, 2, 'user', 'post', 'comment', 57, 110, 1, '', '2017-11-11 22:13:07'),
(45, 3, 2, 'user', 'post', 'comment', 57, 111, 0, '', '2017-07-26 02:07:07'),
(46, 3, 2, 'user', 'post', 'comment', 57, 112, 0, '', '2017-07-26 02:08:02'),
(47, 3, 2, 'user', 'post', 'comment', 57, 113, 0, '', '2017-07-26 02:15:08'),
(48, 2, 3, 'user', 'post', 'comment', 58, 117, 1, '', '2018-04-25 18:33:27'),
(49, 2, 3, 'user', 'post', 'comment', 58, 118, 1, '', '2018-04-25 18:33:43'),
(50, 2, 3, 'user', 'post', 'comment', 58, 119, 1, '', '2018-04-25 18:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `notification_summary`
--

CREATE TABLE `notification_summary` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `current_counter` int(11) NOT NULL,
  `total_counter` int(11) NOT NULL,
  `clear` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification_summary`
--

INSERT INTO `notification_summary` (`id`, `user_id`, `type`, `current_counter`, `total_counter`, `clear`, `comment`) VALUES
(5, 2, 'user', 0, 35, 1, ''),
(6, 4, 'user', 1, 1, 0, ''),
(7, 3, 'user', 0, 4, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pop_tax_rates`
--

CREATE TABLE `pop_tax_rates` (
  `id` int(11) NOT NULL,
  `tax_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tax_rate` float(10,2) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pop_tax_rates`
--

INSERT INTO `pop_tax_rates` (`id`, `tax_type`, `tax_rate`, `created_by`, `created_on`) VALUES
(1, 'GST', 5.00, 5, '2017-11-15 01:40:38'),
(2, 'GST', 18.00, 5, '2017-11-15 01:40:38'),
(3, 'GST', 28.00, 5, '2017-11-15 01:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `pop_unit`
--

CREATE TABLE `pop_unit` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `std_display_txt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pop_unit`
--

INSERT INTO `pop_unit` (`id`, `unit_name`, `std_display_txt`, `created_by`, `date_created`) VALUES
(1, 'Meter', 'm', 5, '2017-11-15 01:39:47'),
(2, 'Centimeter', 'cm', 5, '2017-11-15 01:39:47'),
(3, 'Kilogram', 'kg', 5, '2017-11-15 01:39:47'),
(4, 'No', 'No', 5, '2017-11-15 01:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `po_master`
--

CREATE TABLE `po_master` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `budget_heads` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `po_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `po_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `payment_term` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `billing_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `late_delivery_clause` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `enclosure` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `warranty_guarantee` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `liquidated_damages` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `special_condition` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `po_date` date NOT NULL,
  `insurance` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `freight` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loading_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `packing` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `temp_data` int(11) NOT NULL DEFAULT '1' COMMENT '1=temp data , 0=final data',
  `contract_value` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `po_master`
--

INSERT INTO `po_master` (`id`, `project_id`, `project_name`, `budget_heads`, `po_number`, `po_title`, `contact_person_name`, `contact_person_email`, `contact_person_phone`, `supplier_name`, `supplier_address`, `payment_term`, `billing_address`, `delivery_address`, `late_delivery_clause`, `enclosure`, `warranty_guarantee`, `liquidated_damages`, `special_condition`, `po_date`, `insurance`, `freight`, `loading_type`, `packing`, `delivery_date`, `created_on`, `created_by`, `temp_data`, `contract_value`) VALUES
(4, 4, 'New Project', '', 'PO/2018001/00001', 'PO For Item1', 'PO For Item1', 'a@b.com', 'PO For Item1', 'Sup1', 'dwarka\r\ndwarka', '60Days', '        dwarka\r\n', '        dwarka\r\n', 'sss', '        ss', '2Years', 'test', '        sss', '0000-00-00', '200', '100', '300', '400', '0000-00-00', '2018-07-02 08:43:01', 6, 1, ''),
(6, 4, 'New Project', '', 'PO/2018001/00001', 'PO For Item1', 'PO For Item1', 'a@b.com', 'PO For Item1', 'Sup1', 'dwarka\r\ndwarka', '60Days', '        dwarka\r\n', '        dwarka\r\n', 'sss', '        ss', '2Years', 'test', '        sss', '0000-00-00', '200', '100', '300', '400', '0000-00-00', '2018-07-02 08:43:01', 6, 1, ''),
(7, 4, 'New Project', '', 'PO/2018001/00001', 'PO For Item1', 'PO For Item1', 'a@b.com', 'PO For Item1', 'Sup1', 'dwarka\r\ndwarka', '60Days', '        dwarka\r\n', '        dwarka\r\n', 'sss', '        ss', '2Years', 'test', '        sss', '0000-00-00', '200', '100', '300', '400', '0000-00-00', '2018-07-02 08:43:01', 6, 1, ''),
(9, 1, 'g', '', 'gg', 'g', 'g', 'g', 'g', 'g', 'g', 'gg', 'g ', 'g ', 'g', 'gg ', 'g', 'g', 'g ', '0000-00-00', '', '', '', '', '0000-00-00', '2018-06-05 06:59:15', 6, 1, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `po_transaction`
--

CREATE TABLE `po_transaction` (
  `id` int(11) NOT NULL,
  `po_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `item_package_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `taxes` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `item_total` float(10,2) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `tax_total` float(10,2) NOT NULL,
  `item_rate` float(10,2) NOT NULL,
  `freight` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loading_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `insurance` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `po_transaction`
--

INSERT INTO `po_transaction` (`id`, `po_number`, `item_package_name`, `taxes`, `quantity`, `unit`, `item_total`, `grand_total`, `tax_total`, `item_rate`, `freight`, `loading_type`, `insurance`) VALUES
(6, 'PO/2018001/00001', 'It1', 18.00, 20, 'inch', 11100.00, 13098.00, 1998.00, 555.00, '', '', ''),
(7, 'j', 'HHHH', 0.00, 0, 'hhh', 0.00, 0.00, 0.00, 0.00, '', '', ''),
(8, 'j', 'JHH', 12.00, 55, 'kg', 299970.00, 335966.41, 35996.40, 5454.00, '', '', ''),
(9, 'j', 'HHJH', 12.00, 5, 'kk', 220.00, 246.40, 26.40, 44.00, '', '', ''),
(10, 'PO/2018002/00005', 'HHGFGg', 54.00, 54, '54', 2916.00, 4490.64, 1574.64, 54.00, '', '', ''),
(11, 'PO/2018001/00001', 'asdas', 10.00, 10, 'kg', 1000.00, 1100.00, 100.00, 100.00, 'asdasd', 'asdasd', 'jhvhmgcvhv');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type_of_project` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `far` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ground_coverage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `project_login_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `passcode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1=In Process , 2= Complete, 3= Hold'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `location`, `type_of_project`, `area`, `far`, `ground_coverage`, `project_login_id`, `passcode`, `is_active`, `created_by`, `created_on`, `status`) VALUES
(1, 'New Project 1', 'Delhi', 'green_field', '5000', '04', '40', 'proj_gf', 'proj_gf', '1', '5', '0000-00-00', 1),
(4, 'New Project', 'Delhi', 'green_field', '5000', '04', '40', 'proj_gf', 'proj_gf', '1', '5', '0000-00-00', 1),
(5, 'New Project 2', 'Delhi', 'fitout', '5656', '90', '90', 'P11112', 'P11112', '1', '5', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_charter`
--

CREATE TABLE `project_charter` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `tentative_project_cost` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tentative_project_timeline` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `buildup_area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `project_brief` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `architects` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `other_consultants` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `major_constraints` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_charter`
--

INSERT INTO `project_charter` (`id`, `project_id`, `tentative_project_cost`, `tentative_project_timeline`, `buildup_area`, `project_brief`, `architects`, `other_consultants`, `major_constraints`, `created_by`, `created_on`, `updated_on`) VALUES
(3, 1, '2500000', '2019', '2 Acre', '18 storey building ', '2 architect', 'No', 'NA', 5, '2018-01-24 20:10:19', '2018-01-24 20:10:19'),
(4, 0, 'asd', 'adasd', 'asdasd', 'bvjkd\r\n', 'asdasda', 'asdasd', 'asdasd', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, 'G', 'g', 'g', 'gsadasd', 'g', 'g', 'gg', 5, '2018-05-18 18:30:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sidemenu`
--

CREATE TABLE `sidemenu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `page_query_string` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `display_order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `jquery_event` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(11) NOT NULL DEFAULT '1' COMMENT '1=yes,0=No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sidemenu`
--

INSERT INTO `sidemenu` (`id`, `menu_name`, `page_query_string`, `display_order`, `parent_id`, `jquery_event`, `date_created`, `is_active`) VALUES
(1, 'Dashboard', '#', 1, 0, 'error-menu', '2018-05-26 05:58:50', 1),
(2, 'Dashboard', 'da_projects/dashboard', 2, 1, 'error-menu', '2018-06-18 12:34:43', 1),
(20, 'WBS Section ', '#', 20, 0, 'error-menu1', '2018-06-18 12:34:49', 1),
(21, 'Add WBS Sub Category', 'da_projects/wbs_sub_category', 21, 20, '', '2018-06-18 12:34:56', 1),
(22, 'Add WBS ', 'da_projects/add_wbs', 22, 20, '', '2018-06-18 12:35:03', 1),
(23, 'Manage Category', 'da_projects/select_category', 23, 20, '', '2018-07-03 12:11:00', 1),
(25, 'Project Section', '#', 25, 0, 'legal-menu', '2018-06-18 12:35:06', 1),
(26, 'Create Project', 'da_projects/create_project', 26, 25, '', '2018-06-18 12:35:14', 1),
(27, 'Project Charter', 'da_projects/project_charter', 27, 25, '', '2018-06-18 12:35:20', 1),
(30, 'Tracking & Follow up Sheet', '#', 30, 0, 'legal-menu1', '2018-06-18 12:37:57', 1),
(31, 'Tracking & Follow up Sheet', 'da_projects/tracking_sheet', 31, 30, '', '2018-06-18 12:35:28', 1),
(35, 'Entry Section', '#', 35, 0, 'legal-menu2', '2018-06-18 12:40:09', 1),
(36, 'PO Entry', 'da_projects/po_entry', 36, 35, '', '2018-06-18 12:35:42', 1),
(37, 'Work Order Entry', 'da_projects/work_order', 37, 35, '', '2018-06-18 12:35:48', 1),
(38, 'COP Entry', 'da_projects/cop_entry', 38, 35, '', '2018-06-18 12:35:55', 1),
(40, 'Budget/Cost Section', '#', 40, 0, 'legal-menu3', '2018-06-18 12:38:23', 1),
(41, 'Budget/Cost', 'da_projects/budget', 41, 40, '', '2018-06-18 12:36:08', 1),
(45, 'Directory Structure', '#', 45, 0, 'legal-menu4', '2018-06-18 12:38:27', 1),
(46, 'Directory', 'da_projects/create_folder/root', 46, 45, '', '2018-06-21 10:45:39', 1),
(50, 'List of project', '#', 50, 0, 'legal-menu5', '2018-06-18 12:38:31', 1),
(51, 'Projects', 'da_projects/project_list', 51, 50, '', '2018-06-18 12:36:28', 1),
(55, 'Account', '#', 55, 0, 'legal-menu6', '2018-06-18 12:38:35', 1),
(56, 'Change Password', 'da_projects/change_password', 56, 55, '', '2018-06-18 12:36:38', 1),
(57, 'Logout', 'da_projects/logout', 57, 55, '', '2018-06-18 12:36:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli'),
(9, 'Daman and Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Orissa'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Tripura'),
(33, 'Uttarakhand'),
(34, 'Uttar Pradesh'),
(35, 'West Bengal'),
(37, 'Jharkhand'),
(38, 'Telangana'),
(39, 'Uttarakhand'),
(40, 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `task_list_master`
--

CREATE TABLE `task_list_master` (
  `id` int(11) NOT NULL,
  `task_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `task_start_date` date NOT NULL,
  `task_end_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `completed` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `remark` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task_list_master`
--

INSERT INTO `task_list_master` (`id`, `task_name`, `task_start_date`, `task_end_date`, `status`, `completed`, `user_id`, `remark`, `date_created`, `created_by`) VALUES
(6, 'New Task Today', '2017-12-05', '2017-12-31', 2, 1, 5, 'Tst', '2017-12-05 22:00:35', 0),
(7, 'New Task LOGO4', '2017-12-28', '2017-12-26', 1, 0, 5, 'hh', '2017-12-05 23:53:49', 5);

-- --------------------------------------------------------

--
-- Table structure for table `task_list_transaction`
--

CREATE TABLE `task_list_transaction` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `completed` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `remark` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task_list_transaction`
--

INSERT INTO `task_list_transaction` (`id`, `task_id`, `status`, `completed`, `user_id`, `remark`, `date_updated`) VALUES
(8, 6, 1, 1, 5, 'test', '2017-12-05 22:00:35'),
(9, 6, 2, 1, 5, 'Done', '2017-12-05 22:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `task_status`
--

CREATE TABLE `task_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task_status`
--

INSERT INTO `task_status` (`id`, `status_name`) VALUES
(1, 'In Process'),
(2, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_places`
--

CREATE TABLE `tourist_places` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `continent` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '10',
  `country_name_for_map` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourist_places`
--

INSERT INTO `tourist_places` (`id`, `name`, `continent`, `points`, `country_name_for_map`) VALUES
(1, 'Australia', 11, 10, 'Australia'),
(2, 'Bismark Archipelago (New Ireland, New Britain, Bougainville, Admiralty Islands)', 11, 10, 'IN'),
(3, 'Chatham Islands', 11, 10, 'IN'),
(4, 'Cook Islands (Rarotonga, Aitutaki, Penrhyn)', 11, 10, 'IN'),
(5, 'Easter Island', 11, 10, 'IN'),
(6, 'Fiji Islands', 11, 10, 'IN'),
(7, 'French Polynesia (Tahiti,Tuamotu, Austral, Gambier)', 11, 10, 'IN'),
(8, 'Galapagos Islands', 11, 10, 'IN'),
(9, 'Guam', 11, 10, 'Guam'),
(10, 'Hawaiian Islands', 11, 10, 'IN'),
(11, 'Juan Fernandez Islands (Robinson Crusoe Island)', 11, 10, 'IN'),
(12, 'Kiribati (Gilberts,Tarawa, Ocean Island)', 11, 10, 'IN'),
(13, 'Line/Phoenix Islands (Palmyra, Fanning, Christmas, Canton, Enderbury, Howland)', 11, 10, 'IN'),
(14, 'Lord Howe Island', 11, 10, 'IN'),
(15, 'Marquesas Islands', 11, 10, 'IN'),
(16, 'Marshall Islands, Republic of (Majuro, Kwajalein, Eniwetok)', 11, 10, 'IN'),
(17, 'Micronesia, Fed.States of (Pohnpei, Kosrae, Chuuk,Yap,Caroline Islands)', 11, 10, 'IN'),
(18, 'Midway Island', 11, 10, 'IN'),
(19, 'Nauru', 11, 10, 'Nauru'),
(20, 'New Caledonia & Deps. (Noumea, Loyalty Islands)', 11, 10, 'IN'),
(21, 'New Zealand', 11, 10, 'New Zealand'),
(22, 'Niue', 11, 10, 'Niue'),
(23, 'Norfolk Island', 11, 10, 'Norfolk Island'),
(24, 'Northern Marianas (Saipan, Tinian)', 11, 10, 'IN'),
(25, 'Ogasawara (Bonin, Volcano Island, Iwo Jima)', 11, 10, 'IN'),
(26, 'Palau, Republic of', 11, 10, 'IN'),
(27, 'Papua New Guinea', 11, 10, 'Papua New Guinea'),
(28, 'Pitcairn Island', 11, 10, 'IN'),
(29, 'Ryukyu Islands (Okinawa)', 11, 10, 'IN'),
(30, 'Samoa, American (Pago Pago)', 11, 10, 'IN'),
(31, 'Samoa (Apia)', 11, 10, 'IN'),
(32, 'Solomon Islands (Guadalcanal, New Georgia,Tulagi)', 11, 10, 'IN'),
(33, 'Tasmania', 11, 10, 'IN'),
(34, 'Tokelau Islands (Fakaofu, Atafu, Union)', 11, 10, 'IN'),
(35, 'Tonga (Nukualofa)', 11, 10, 'IN'),
(36, 'Tuvalu (Ellice Island, Funafuti, Vaitapu)', 11, 10, 'IN'),
(37, 'Vanuatu (New Hebrides Islands)', 11, 10, 'IN'),
(38, 'Wake Island', 11, 10, 'IN'),
(39, 'Wallis & Futuna Islands', 11, 10, 'IN'),
(40, 'Alaska', 10, 10, 'IN'),
(41, 'Canada', 10, 10, 'Canada'),
(42, 'Mexico', 10, 10, 'Mexico'),
(43, 'Prince Edward Island', 10, 10, 'IN'),
(44, 'St. Pierre & Miquelon', 10, 10, 'IN'),
(45, 'United States (continental)', 10, 10, 'IN'),
(46, 'Belize (British Honduras)', 6, 10, 'IN'),
(47, 'Costa Rica', 6, 10, 'Costa Rica'),
(48, 'El Salvador', 6, 10, 'El Salvador'),
(49, 'Guatemala', 6, 10, 'Guatemala'),
(50, 'Honduras', 6, 10, 'Honduras'),
(51, 'Nicaragua', 6, 10, 'Nicaragua'),
(52, 'Panama', 6, 10, 'Panama'),
(53, 'Argentina', 12, 10, 'Argentina'),
(54, 'Bolivia', 12, 10, 'Bolivia'),
(55, 'Brazil', 12, 10, 'Brazil'),
(56, 'Chile', 12, 10, 'Chile'),
(57, 'Colombia', 12, 10, 'Colombia'),
(58, 'Ecuador', 12, 10, 'Ecuador'),
(59, 'French Guiana', 12, 10, 'French Guiana'),
(60, 'Guyana (British Guiana)', 12, 10, 'IN'),
(61, 'Nueva Esparta (Margarita Island)', 12, 10, 'IN'),
(62, 'Paraguay', 12, 10, 'Paraguay'),
(63, 'Peru', 12, 10, 'Peru'),
(64, 'Suriname (Netherlands Guiana)', 12, 10, 'IN'),
(65, 'Uruguay', 12, 10, 'Uruguay'),
(66, 'Venezuela', 12, 10, 'Venezuela'),
(67, 'Anguilla', 5, 10, 'Anguilla'),
(68, 'Antigua & Deps. (Barbuda, Redonda)', 5, 10, 'IN'),
(69, 'Aruba', 5, 10, 'Aruba'),
(70, 'Bahamas', 5, 10, 'Bahamas'),
(71, 'Barbados', 5, 10, 'Barbados'),
(72, 'Bonaire', 5, 10, 'IN'),
(73, 'Cayman Islands', 5, 10, 'Cayman Islands'),
(74, 'Cuba', 5, 10, 'Cuba'),
(75, 'Curacao', 5, 10, 'IN'),
(76, 'Dominica', 5, 10, 'Dominica'),
(77, 'Dominican Republic', 5, 10, 'Dominican Republic'),
(78, 'Grenada & Deps. (Carriacou, Grenadines)', 5, 10, 'IN'),
(79, 'Guadeloupe & Deps.(Marie Galante)', 5, 10, 'IN'),
(80, 'Haiti', 5, 10, 'Haiti'),
(81, 'Jamaica', 5, 10, 'Jamaica'),
(82, 'Leeward Islands, French (St. Martin)', 5, 10, 'IN'),
(83, 'Leeward Islands, Netherlands (Saba, St. Eustatius)', 5, 10, 'IN'),
(84, 'Martinique', 5, 10, 'Martinique'),
(85, 'Montserrat', 5, 10, 'Montserrat'),
(86, 'Puerto Rico', 5, 10, 'Puerto Rico'),
(87, 'St. Barts', 5, 10, 'IN'),
(88, 'San Andres & Providencia', 5, 10, 'IN'),
(89, 'St. Kitts & Nevis', 5, 10, 'IN'),
(90, 'St. Lucia', 5, 10, 'IN'),
(91, 'St. Maarten (formerly Netherlands Antilles)', 5, 10, 'IN'),
(92, 'St. Vincent & Deps. (Bequia, Canouan Grenadines)', 5, 10, 'IN'),
(93, 'Trinidad & Tobago', 5, 10, 'IN'),
(94, 'Turks & Caicos Islands', 5, 10, 'IN'),
(95, 'Virgin Islands, U.S. (St. Croix, St. John, St. Thomas)', 5, 10, 'IN'),
(96, 'Virgin Islands, British (Tortola, etc.)', 5, 10, 'IN'),
(97, 'Ascension', 4, 10, 'IN'),
(98, 'Azores Islands', 4, 10, 'IN'),
(99, 'Bermuda', 4, 10, 'Bermuda'),
(100, 'Canary Islands', 4, 10, 'IN'),
(101, 'Cape Verde Islands', 4, 10, 'IN'),
(102, 'Falkland Islands', 4, 10, 'IN'),
(103, 'Fernando do Noronha', 4, 10, 'IN'),
(104, 'Faroe Islands', 4, 10, 'Faroe Islands'),
(105, 'Greenland (KalaallitNunaat)', 4, 10, 'IN'),
(106, 'Iceland', 4, 10, 'Iceland'),
(107, 'Madeira', 4, 10, 'IN'),
(108, 'St. Helena', 4, 10, 'IN'),
(109, 'Tristan da Cunha', 4, 10, 'IN'),
(110, 'Aland Islands (Mariehamn)', 7, 10, 'IN'),
(111, 'Albania', 7, 10, 'Albania'),
(112, 'Andorra', 7, 10, 'Andorra'),
(113, 'Austria', 7, 10, 'Austria'),
(114, 'Balearic Islands (Mallorca, Minorca)', 7, 10, 'IN'),
(115, 'Belarus', 7, 10, 'Belarus'),
(116, 'Belgium', 7, 10, 'Belgium'),
(117, 'Bosnia & Herzegovina (Sarajevo)', 7, 10, 'IN'),
(118, 'Bulgaria', 7, 10, 'Bulgaria'),
(119, 'Corsica', 7, 10, 'IN'),
(120, 'Crete', 7, 10, 'IN'),
(121, 'Croatia', 7, 10, 'Croatia'),
(122, 'Cyprus, Republic', 7, 10, 'IN'),
(123, 'Cyprus, Turkish Fed. State', 7, 10, 'IN'),
(124, 'Czech Republic', 7, 10, 'Czech Republic'),
(125, 'Denmark', 7, 10, 'Denmark'),
(126, 'Dodecanese Is. (Rhodes)', 7, 10, 'IN'),
(127, 'England', 7, 10, 'IN'),
(128, 'Estonia', 7, 10, 'Estonia'),
(129, 'Finland', 7, 10, 'Finland'),
(130, 'France', 7, 10, 'France'),
(131, 'Germany', 7, 10, 'Germany'),
(132, 'Gibraltar', 7, 10, 'Gibraltar'),
(133, 'Greece', 7, 10, 'Greece'),
(134, 'Guernsey & Deps (Alderney, Herm, Sark, Channel Islands)', 7, 10, 'IN'),
(135, 'Hungary', 7, 10, 'Hungary'),
(136, 'Ionian Islands (Corfu, etc.)', 7, 10, 'IN'),
(137, 'Ireland (Eire)', 7, 10, 'IN'),
(138, 'Ireland, Northern (Ulster)', 7, 10, 'IN'),
(139, 'Isle of Man', 7, 10, 'Isle of Man'),
(140, 'Italy', 7, 10, 'Italy'),
(141, 'Jersey (Channel Islands)', 7, 10, 'IN'),
(142, 'Kaliningrad', 7, 10, 'IN'),
(143, 'Kosovo', 7, 10, 'Kosovo'),
(144, 'Lampedusa', 7, 10, 'IN'),
(145, 'Latvia', 7, 10, 'Latvia'),
(146, 'Liechtenstein', 7, 10, 'Liechtenstein'),
(147, 'Lithuania', 7, 10, 'Lithuania'),
(148, 'Luxembourg', 7, 10, 'Luxembourg'),
(149, 'Macedonia', 7, 10, 'IN'),
(150, 'Malta', 7, 10, 'Malta'),
(151, 'Moldova', 7, 10, 'Moldova'),
(152, 'Monaco', 7, 10, 'Monaco'),
(153, 'Montenegro', 7, 10, 'Montenegro'),
(154, 'Netherlands', 7, 10, 'Netherlands'),
(155, 'Norway', 7, 10, 'Norway'),
(156, 'Poland', 7, 10, 'Poland'),
(157, 'Portugal', 7, 10, 'Portugal'),
(158, 'Romania', 7, 10, 'Romania'),
(159, 'Russia', 7, 10, 'Russia'),
(160, 'San Marino', 7, 10, 'San Marino'),
(161, 'Sardinia', 7, 10, 'IN'),
(162, 'Scotland', 7, 10, 'IN'),
(163, 'Serbia', 7, 10, 'Serbia'),
(164, 'Sicily', 7, 10, 'IN'),
(165, 'Slovakia', 7, 10, 'Slovakia'),
(166, 'Slovenia', 7, 10, 'Slovenia'),
(167, 'Spain', 7, 10, 'Spain'),
(168, 'Spitsbergen (Svalbard, Bear Island)', 7, 10, 'IN'),
(169, 'Srpska', 7, 10, 'IN'),
(170, 'Sweden', 7, 10, 'Sweden'),
(171, 'Switzerland', 7, 10, 'Switzerland'),
(172, 'Trans Dniester', 7, 10, 'IN'),
(173, 'Turkey in Europe (Istanbul)', 7, 10, 'IN'),
(174, 'Ukraine', 7, 10, 'Ukraine'),
(175, 'Vatican City', 7, 10, 'Vatican City'),
(176, 'Wales', 7, 10, 'IN'),
(177, 'Argentine (Palmer Peninsula)', 2, 10, 'IN'),
(178, 'Australian Antarctic Territory South Pole (Mawson, Davis, Macquarie, Heard)', 2, 10, 'IN'),
(179, 'Chilean (Palmer Peninsula)', 2, 10, 'IN'),
(180, 'Falkland Islands Dependencies (British Antarctica, Graham Land, So. Shetland, So. Sandwich, So. Geor', 2, 10, 'IN'),
(181, 'French Southern & Antarctic Territory (Kerguelen, Crozet, Amsterdam, St. Paul)', 2, 10, 'IN'),
(182, 'Norwegian (Queen Maud Land, Bouvet)', 2, 10, 'IN'),
(183, 'New Zealand (Ross Dependency)', 2, 10, 'IN'),
(184, 'Algeria', 1, 10, 'Algeria'),
(185, 'Angola', 1, 10, 'Angola'),
(186, 'Benin (Dahomey)', 1, 10, 'IN'),
(187, 'Botswana (Bechuanaland)', 1, 10, 'IN'),
(188, 'Burkina Faso (Upper Volta)', 1, 10, 'IN'),
(189, 'Burundi (Urundi)', 1, 10, 'IN'),
(190, 'Cabinda', 1, 10, 'IN'),
(191, 'Cameroon', 1, 10, 'Cameroon'),
(192, 'Central African Republic', 1, 10, 'Central African Republic'),
(193, 'Chad', 1, 10, 'Chad'),
(194, 'Republic of Congo', 1, 10, 'IN'),
(195, 'Democratic Republic of Congo', 1, 10, 'IN'),
(196, 'Djibouti', 1, 10, 'Djibouti'),
(197, 'Egypt in Africa', 1, 10, 'IN'),
(198, 'Equatorial Guinea (Bioko Fernando Poo)', 1, 10, 'IN'),
(199, 'Equatorial Guinea (Rio Muni)', 1, 10, 'IN'),
(200, 'Eritrea', 1, 10, 'Eritrea'),
(201, 'Ethiopia', 1, 10, 'Ethiopia'),
(202, 'Gabon', 1, 10, 'Gabon'),
(203, 'Gambia', 1, 10, 'Gambia'),
(204, 'Ghana (Gold Coast, British Togoland)', 1, 10, 'IN'),
(205, 'Guinea (French)', 1, 10, 'IN'),
(206, 'Guinea-Bissau', 1, 10, 'Guinea-Bissau'),
(207, 'Ivory Coast', 1, 10, 'IN'),
(208, 'Kenya', 1, 10, 'Kenya'),
(209, 'Lesotho (Basutoland)', 1, 10, 'IN'),
(210, 'Liberia', 1, 10, 'Liberia'),
(211, 'Libya', 1, 10, 'Libya'),
(212, 'Malawi (Nyasaland)', 1, 10, 'IN'),
(213, 'Mali', 1, 10, 'Mali'),
(214, 'Mauritania', 1, 10, 'Mauritania'),
(215, 'Morocco', 1, 10, 'Morocco'),
(216, 'Morocco,Spanish (Ceuta, Melilla)', 1, 10, 'IN'),
(217, 'Mozambique', 1, 10, 'Mozambique'),
(218, 'Namibia', 1, 10, 'Namibia'),
(219, 'Niger', 1, 10, 'Niger'),
(220, 'Nigeria', 1, 10, 'Nigeria'),
(221, 'Rwanda', 1, 10, 'Rwanda'),
(222, 'Sao Tome & Principe', 1, 10, 'IN'),
(223, 'Senegal', 1, 10, 'Senegal'),
(224, 'Sierra Leone', 1, 10, 'Sierra Leone'),
(225, 'Somalia (Italian Somaliland)', 1, 10, 'IN'),
(226, 'Somaliland (Brit.)', 1, 10, 'IN'),
(227, 'South Africa', 1, 10, 'South Africa'),
(228, 'South Sudan', 1, 10, 'IN'),
(229, 'Sudan', 1, 10, 'Sudan'),
(230, 'Swaziland', 1, 10, 'Swaziland'),
(231, 'Tanzania (Tanganyika)', 1, 10, 'IN'),
(232, 'Togo', 1, 10, 'Togo'),
(233, 'Tunisia', 1, 10, 'Tunisia'),
(234, 'Uganda', 1, 10, 'Uganda'),
(235, 'Western Sahara (Spanish Sahara)', 1, 10, 'IN'),
(236, 'Zambia (No. Rhodesia)', 1, 10, 'IN'),
(237, 'Zanzibar', 1, 10, 'IN'),
(238, 'Zimbabwe (So. Rhodesia)', 1, 10, 'IN'),
(239, 'Abu Dhabi', 9, 10, 'IN'),
(240, 'Ajman', 9, 10, 'IN'),
(241, 'Bahrain', 9, 10, 'Bahrain'),
(242, 'Dubai', 9, 10, 'IN'),
(243, 'Egypt in Asia (Sinai Peninsula)', 9, 10, 'IN'),
(244, 'Fujeirah', 9, 10, 'IN'),
(245, 'Iran', 9, 10, 'Iran'),
(246, 'Iraq', 9, 10, 'Iraq'),
(247, 'Israel', 9, 10, 'Israel'),
(248, 'Jordan', 9, 10, 'Jordan'),
(249, 'Kuwait', 9, 10, 'Kuwait'),
(250, 'Lebanon', 9, 10, 'Lebanon'),
(251, 'Oman', 9, 10, 'Oman'),
(252, 'Palestine', 9, 10, 'IN'),
(253, 'Qatar', 9, 10, 'Qatar'),
(254, 'Ras Al Khaimah', 9, 10, 'IN'),
(255, 'Saudi Arabia', 9, 10, 'Saudi Arabia'),
(256, 'Sharjah', 9, 10, 'IN'),
(257, 'Syria', 9, 10, 'Syria'),
(258, 'Umm Al Qaiwain', 9, 10, 'IN'),
(259, 'Yemen', 9, 10, 'Yemen'),
(260, 'Andaman-Nicobar Islands (India)', 8, 10, 'IN'),
(261, 'British Indian Ocean Territory (Chagos Arch, Diego Garcia)', 8, 10, 'IN'),
(262, 'Christmas Island', 8, 10, 'Christmas Island'),
(263, 'Cocos Islands (Keeling)', 8, 10, 'IN'),
(264, 'Comoro Islands (Anjouan, Moheli, Grand Comoro)', 8, 10, 'IN'),
(265, 'Lakshadweep and Minicoy (India)', 8, 10, 'IN'),
(266, 'Madagascar', 8, 10, 'Madagascar'),
(267, 'Maldive Islands', 8, 10, 'IN'),
(268, 'Mauritius & Deps. (Agalega, St. Brandon)', 8, 10, 'IN'),
(269, 'Mayotte (Dzaoudzi)', 8, 10, 'IN'),
(270, 'Reunion & Deps. (Tromelin, Glorioso)', 8, 10, 'IN'),
(271, 'Rodriguez Island', 8, 10, 'IN'),
(272, 'Seychelles', 8, 10, 'Seychelles'),
(273, 'Socotra', 8, 10, 'IN'),
(274, 'ZilElwannyenSesel (Aldabra, Farquhar, Amirante Is.)', 8, 10, 'IN'),
(275, 'Abkhazia', 3, 10, 'IN'),
(276, 'Afghanistan', 3, 10, 'Afghanistan'),
(277, 'Armenia (Yerevan)', 3, 10, 'IN'),
(278, 'Azerbaijan (Baku)', 3, 10, 'IN'),
(279, 'Bangladesh', 3, 10, 'Bangladesh'),
(280, 'Bhutan', 3, 10, 'Bhutan'),
(281, 'Brunei', 3, 10, 'Brunei'),
(282, 'Cambodia', 3, 10, 'Cambodia'),
(283, 'China, People?s Republic', 3, 10, 'IN'),
(284, 'Georgia', 3, 10, 'Georgia'),
(285, 'Hainan Island', 3, 10, 'IN'),
(286, 'Hong Kong', 3, 10, 'Hong Kong'),
(287, 'India', 3, 10, 'India'),
(288, 'Kashmir (India)', 3, 10, 'IN'),
(289, 'North East India (Arunachal, Mizoram, Nagaland, Meghalaya, Sikkim)', 3, 10, 'IN'),
(290, 'Indonesia (Java)', 3, 10, 'IN'),
(291, 'Japan', 3, 10, 'Japan'),
(292, 'Jeju Island (South Korea)', 3, 10, 'IN'),
(293, 'Kalimantan (Indonesian Borneo)', 3, 10, 'IN'),
(294, 'Kashmir', 3, 10, 'IN'),
(295, 'Kazakhstan', 3, 10, 'Kazakhstan'),
(296, 'Kyrgyzstan', 3, 10, 'Kyrgyzstan'),
(297, 'Korea, North', 3, 10, 'IN'),
(298, 'Korea, South', 3, 10, 'IN'),
(299, 'Laos', 3, 10, 'Laos'),
(300, 'Lesser Sunda Islands (Bali,Timor, Indonesia)', 3, 10, 'IN'),
(301, 'Macau', 3, 10, 'Macau'),
(302, 'Malaysia', 3, 10, 'Malaysia'),
(303, 'Moluka', 3, 10, 'IN'),
(304, 'Mongolia, Republic', 3, 10, 'IN'),
(305, 'Myanmar (Burma)', 3, 10, 'IN'),
(306, 'Nakhchivan', 3, 10, 'IN'),
(307, 'Nepal', 3, 10, 'Nepal'),
(308, 'Pakistan', 3, 10, 'Pakistan'),
(309, 'Papua (Irian Jaya)', 3, 10, 'IN'),
(310, 'Philippines', 3, 10, 'Philippines'),
(311, 'Sabah (No. Borneo)', 3, 10, 'IN'),
(312, 'Sarawak', 3, 10, 'IN'),
(313, 'Siberia (Russia in Asia)', 3, 10, 'IN'),
(314, 'Singapore', 3, 10, 'Singapore'),
(315, 'Sri Lanka (Ceylon)', 3, 10, 'IN'),
(316, 'Sulawesi (Celebes, Indonesia)', 3, 10, 'IN'),
(317, 'Sumatra (Indonesia)', 3, 10, 'IN'),
(318, 'Taiwan. R.O.C.', 3, 10, 'IN'),
(319, 'Tajikistan', 3, 10, 'Tajikistan'),
(320, 'Thailand', 3, 10, 'Thailand'),
(321, 'Tibet', 3, 10, 'IN'),
(322, 'Timor Leste', 3, 10, 'IN'),
(323, 'Turkey in Asia (Anatolia, Ankara, Izmir)', 3, 10, 'IN'),
(324, 'Turkmenistan', 3, 10, 'Turkmenistan'),
(325, 'Uzbekistan', 3, 10, 'Uzbekistan'),
(326, 'Vietnam', 3, 10, 'Vietnam'),
(1, 'Australia', 11, 10, 'Australia'),
(2, 'Bismark Archipelago (New Ireland, New Britain, Bougainville, Admiralty Islands)', 11, 10, 'IN'),
(3, 'Chatham Islands', 11, 10, 'IN'),
(4, 'Cook Islands (Rarotonga, Aitutaki, Penrhyn)', 11, 10, 'IN'),
(5, 'Easter Island', 11, 10, 'IN'),
(6, 'Fiji Islands', 11, 10, 'IN'),
(7, 'French Polynesia (Tahiti,Tuamotu, Austral, Gambier)', 11, 10, 'IN'),
(8, 'Galapagos Islands', 11, 10, 'IN'),
(9, 'Guam', 11, 10, 'Guam'),
(10, 'Hawaiian Islands', 11, 10, 'IN'),
(11, 'Juan Fernandez Islands (Robinson Crusoe Island)', 11, 10, 'IN'),
(12, 'Kiribati (Gilberts,Tarawa, Ocean Island)', 11, 10, 'IN'),
(13, 'Line/Phoenix Islands (Palmyra, Fanning, Christmas, Canton, Enderbury, Howland)', 11, 10, 'IN'),
(14, 'Lord Howe Island', 11, 10, 'IN'),
(15, 'Marquesas Islands', 11, 10, 'IN'),
(16, 'Marshall Islands, Republic of (Majuro, Kwajalein, Eniwetok)', 11, 10, 'IN'),
(17, 'Micronesia, Fed.States of (Pohnpei, Kosrae, Chuuk,Yap,Caroline Islands)', 11, 10, 'IN'),
(18, 'Midway Island', 11, 10, 'IN'),
(19, 'Nauru', 11, 10, 'Nauru'),
(20, 'New Caledonia & Deps. (Noumea, Loyalty Islands)', 11, 10, 'IN'),
(21, 'New Zealand', 11, 10, 'New Zealand'),
(22, 'Niue', 11, 10, 'Niue'),
(23, 'Norfolk Island', 11, 10, 'Norfolk Island'),
(24, 'Northern Marianas (Saipan, Tinian)', 11, 10, 'IN'),
(25, 'Ogasawara (Bonin, Volcano Island, Iwo Jima)', 11, 10, 'IN'),
(26, 'Palau, Republic of', 11, 10, 'IN'),
(27, 'Papua New Guinea', 11, 10, 'Papua New Guinea'),
(28, 'Pitcairn Island', 11, 10, 'IN'),
(29, 'Ryukyu Islands (Okinawa)', 11, 10, 'IN'),
(30, 'Samoa, American (Pago Pago)', 11, 10, 'IN'),
(31, 'Samoa (Apia)', 11, 10, 'IN'),
(32, 'Solomon Islands (Guadalcanal, New Georgia,Tulagi)', 11, 10, 'IN'),
(33, 'Tasmania', 11, 10, 'IN'),
(34, 'Tokelau Islands (Fakaofu, Atafu, Union)', 11, 10, 'IN'),
(35, 'Tonga (Nukualofa)', 11, 10, 'IN'),
(36, 'Tuvalu (Ellice Island, Funafuti, Vaitapu)', 11, 10, 'IN'),
(37, 'Vanuatu (New Hebrides Islands)', 11, 10, 'IN'),
(38, 'Wake Island', 11, 10, 'IN'),
(39, 'Wallis & Futuna Islands', 11, 10, 'IN'),
(40, 'Alaska', 10, 10, 'IN'),
(41, 'Canada', 10, 10, 'Canada'),
(42, 'Mexico', 10, 10, 'Mexico'),
(43, 'Prince Edward Island', 10, 10, 'IN'),
(44, 'St. Pierre & Miquelon', 10, 10, 'IN'),
(45, 'United States (continental)', 10, 10, 'IN'),
(46, 'Belize (British Honduras)', 6, 10, 'IN'),
(47, 'Costa Rica', 6, 10, 'Costa Rica'),
(48, 'El Salvador', 6, 10, 'El Salvador'),
(49, 'Guatemala', 6, 10, 'Guatemala'),
(50, 'Honduras', 6, 10, 'Honduras'),
(51, 'Nicaragua', 6, 10, 'Nicaragua'),
(52, 'Panama', 6, 10, 'Panama'),
(53, 'Argentina', 12, 10, 'Argentina'),
(54, 'Bolivia', 12, 10, 'Bolivia'),
(55, 'Brazil', 12, 10, 'Brazil'),
(56, 'Chile', 12, 10, 'Chile'),
(57, 'Colombia', 12, 10, 'Colombia'),
(58, 'Ecuador', 12, 10, 'Ecuador'),
(59, 'French Guiana', 12, 10, 'French Guiana'),
(60, 'Guyana (British Guiana)', 12, 10, 'IN'),
(61, 'Nueva Esparta (Margarita Island)', 12, 10, 'IN'),
(62, 'Paraguay', 12, 10, 'Paraguay'),
(63, 'Peru', 12, 10, 'Peru'),
(64, 'Suriname (Netherlands Guiana)', 12, 10, 'IN'),
(65, 'Uruguay', 12, 10, 'Uruguay'),
(66, 'Venezuela', 12, 10, 'Venezuela'),
(67, 'Anguilla', 5, 10, 'Anguilla'),
(68, 'Antigua & Deps. (Barbuda, Redonda)', 5, 10, 'IN'),
(69, 'Aruba', 5, 10, 'Aruba'),
(70, 'Bahamas', 5, 10, 'Bahamas'),
(71, 'Barbados', 5, 10, 'Barbados'),
(72, 'Bonaire', 5, 10, 'IN'),
(73, 'Cayman Islands', 5, 10, 'Cayman Islands'),
(74, 'Cuba', 5, 10, 'Cuba'),
(75, 'Curacao', 5, 10, 'IN'),
(76, 'Dominica', 5, 10, 'Dominica'),
(77, 'Dominican Republic', 5, 10, 'Dominican Republic'),
(78, 'Grenada & Deps. (Carriacou, Grenadines)', 5, 10, 'IN'),
(79, 'Guadeloupe & Deps.(Marie Galante)', 5, 10, 'IN'),
(80, 'Haiti', 5, 10, 'Haiti'),
(81, 'Jamaica', 5, 10, 'Jamaica'),
(82, 'Leeward Islands, French (St. Martin)', 5, 10, 'IN'),
(83, 'Leeward Islands, Netherlands (Saba, St. Eustatius)', 5, 10, 'IN'),
(84, 'Martinique', 5, 10, 'Martinique'),
(85, 'Montserrat', 5, 10, 'Montserrat'),
(86, 'Puerto Rico', 5, 10, 'Puerto Rico'),
(87, 'St. Barts', 5, 10, 'IN'),
(88, 'San Andres & Providencia', 5, 10, 'IN'),
(89, 'St. Kitts & Nevis', 5, 10, 'IN'),
(90, 'St. Lucia', 5, 10, 'IN'),
(91, 'St. Maarten (formerly Netherlands Antilles)', 5, 10, 'IN'),
(92, 'St. Vincent & Deps. (Bequia, Canouan Grenadines)', 5, 10, 'IN'),
(93, 'Trinidad & Tobago', 5, 10, 'IN'),
(94, 'Turks & Caicos Islands', 5, 10, 'IN'),
(95, 'Virgin Islands, U.S. (St. Croix, St. John, St. Thomas)', 5, 10, 'IN'),
(96, 'Virgin Islands, British (Tortola, etc.)', 5, 10, 'IN'),
(97, 'Ascension', 4, 10, 'IN'),
(98, 'Azores Islands', 4, 10, 'IN'),
(99, 'Bermuda', 4, 10, 'Bermuda'),
(100, 'Canary Islands', 4, 10, 'IN'),
(101, 'Cape Verde Islands', 4, 10, 'IN'),
(102, 'Falkland Islands', 4, 10, 'IN'),
(103, 'Fernando do Noronha', 4, 10, 'IN'),
(104, 'Faroe Islands', 4, 10, 'Faroe Islands'),
(105, 'Greenland (KalaallitNunaat)', 4, 10, 'IN'),
(106, 'Iceland', 4, 10, 'Iceland'),
(107, 'Madeira', 4, 10, 'IN'),
(108, 'St. Helena', 4, 10, 'IN'),
(109, 'Tristan da Cunha', 4, 10, 'IN'),
(110, 'Aland Islands (Mariehamn)', 7, 10, 'IN'),
(111, 'Albania', 7, 10, 'Albania'),
(112, 'Andorra', 7, 10, 'Andorra'),
(113, 'Austria', 7, 10, 'Austria'),
(114, 'Balearic Islands (Mallorca, Minorca)', 7, 10, 'IN'),
(115, 'Belarus', 7, 10, 'Belarus'),
(116, 'Belgium', 7, 10, 'Belgium'),
(117, 'Bosnia & Herzegovina (Sarajevo)', 7, 10, 'IN'),
(118, 'Bulgaria', 7, 10, 'Bulgaria'),
(119, 'Corsica', 7, 10, 'IN'),
(120, 'Crete', 7, 10, 'IN'),
(121, 'Croatia', 7, 10, 'Croatia'),
(122, 'Cyprus, Republic', 7, 10, 'IN'),
(123, 'Cyprus, Turkish Fed. State', 7, 10, 'IN'),
(124, 'Czech Republic', 7, 10, 'Czech Republic'),
(125, 'Denmark', 7, 10, 'Denmark'),
(126, 'Dodecanese Is. (Rhodes)', 7, 10, 'IN'),
(127, 'England', 7, 10, 'IN'),
(128, 'Estonia', 7, 10, 'Estonia'),
(129, 'Finland', 7, 10, 'Finland'),
(130, 'France', 7, 10, 'France'),
(131, 'Germany', 7, 10, 'Germany'),
(132, 'Gibraltar', 7, 10, 'Gibraltar'),
(133, 'Greece', 7, 10, 'Greece'),
(134, 'Guernsey & Deps (Alderney, Herm, Sark, Channel Islands)', 7, 10, 'IN'),
(135, 'Hungary', 7, 10, 'Hungary'),
(136, 'Ionian Islands (Corfu, etc.)', 7, 10, 'IN'),
(137, 'Ireland (Eire)', 7, 10, 'IN'),
(138, 'Ireland, Northern (Ulster)', 7, 10, 'IN'),
(139, 'Isle of Man', 7, 10, 'Isle of Man'),
(140, 'Italy', 7, 10, 'Italy'),
(141, 'Jersey (Channel Islands)', 7, 10, 'IN'),
(142, 'Kaliningrad', 7, 10, 'IN'),
(143, 'Kosovo', 7, 10, 'Kosovo'),
(144, 'Lampedusa', 7, 10, 'IN'),
(145, 'Latvia', 7, 10, 'Latvia'),
(146, 'Liechtenstein', 7, 10, 'Liechtenstein'),
(147, 'Lithuania', 7, 10, 'Lithuania'),
(148, 'Luxembourg', 7, 10, 'Luxembourg'),
(149, 'Macedonia', 7, 10, 'IN'),
(150, 'Malta', 7, 10, 'Malta'),
(151, 'Moldova', 7, 10, 'Moldova'),
(152, 'Monaco', 7, 10, 'Monaco'),
(153, 'Montenegro', 7, 10, 'Montenegro'),
(154, 'Netherlands', 7, 10, 'Netherlands'),
(155, 'Norway', 7, 10, 'Norway'),
(156, 'Poland', 7, 10, 'Poland'),
(157, 'Portugal', 7, 10, 'Portugal'),
(158, 'Romania', 7, 10, 'Romania'),
(159, 'Russia', 7, 10, 'Russia'),
(160, 'San Marino', 7, 10, 'San Marino'),
(161, 'Sardinia', 7, 10, 'IN'),
(162, 'Scotland', 7, 10, 'IN'),
(163, 'Serbia', 7, 10, 'Serbia'),
(164, 'Sicily', 7, 10, 'IN'),
(165, 'Slovakia', 7, 10, 'Slovakia'),
(166, 'Slovenia', 7, 10, 'Slovenia'),
(167, 'Spain', 7, 10, 'Spain'),
(168, 'Spitsbergen (Svalbard, Bear Island)', 7, 10, 'IN'),
(169, 'Srpska', 7, 10, 'IN'),
(170, 'Sweden', 7, 10, 'Sweden'),
(171, 'Switzerland', 7, 10, 'Switzerland'),
(172, 'Trans Dniester', 7, 10, 'IN'),
(173, 'Turkey in Europe (Istanbul)', 7, 10, 'IN'),
(174, 'Ukraine', 7, 10, 'Ukraine'),
(175, 'Vatican City', 7, 10, 'Vatican City'),
(176, 'Wales', 7, 10, 'IN'),
(177, 'Argentine (Palmer Peninsula)', 2, 10, 'IN'),
(178, 'Australian Antarctic Territory South Pole (Mawson, Davis, Macquarie, Heard)', 2, 10, 'IN'),
(179, 'Chilean (Palmer Peninsula)', 2, 10, 'IN'),
(180, 'Falkland Islands Dependencies (British Antarctica, Graham Land, So. Shetland, So. Sandwich, So. Geor', 2, 10, 'IN'),
(181, 'French Southern & Antarctic Territory (Kerguelen, Crozet, Amsterdam, St. Paul)', 2, 10, 'IN'),
(182, 'Norwegian (Queen Maud Land, Bouvet)', 2, 10, 'IN'),
(183, 'New Zealand (Ross Dependency)', 2, 10, 'IN'),
(184, 'Algeria', 1, 10, 'Algeria'),
(185, 'Angola', 1, 10, 'Angola'),
(186, 'Benin (Dahomey)', 1, 10, 'IN'),
(187, 'Botswana (Bechuanaland)', 1, 10, 'IN'),
(188, 'Burkina Faso (Upper Volta)', 1, 10, 'IN'),
(189, 'Burundi (Urundi)', 1, 10, 'IN'),
(190, 'Cabinda', 1, 10, 'IN'),
(191, 'Cameroon', 1, 10, 'Cameroon'),
(192, 'Central African Republic', 1, 10, 'Central African Republic'),
(193, 'Chad', 1, 10, 'Chad'),
(194, 'Republic of Congo', 1, 10, 'IN'),
(195, 'Democratic Republic of Congo', 1, 10, 'IN'),
(196, 'Djibouti', 1, 10, 'Djibouti'),
(197, 'Egypt in Africa', 1, 10, 'IN'),
(198, 'Equatorial Guinea (Bioko Fernando Poo)', 1, 10, 'IN'),
(199, 'Equatorial Guinea (Rio Muni)', 1, 10, 'IN'),
(200, 'Eritrea', 1, 10, 'Eritrea'),
(201, 'Ethiopia', 1, 10, 'Ethiopia'),
(202, 'Gabon', 1, 10, 'Gabon'),
(203, 'Gambia', 1, 10, 'Gambia'),
(204, 'Ghana (Gold Coast, British Togoland)', 1, 10, 'IN'),
(205, 'Guinea (French)', 1, 10, 'IN'),
(206, 'Guinea-Bissau', 1, 10, 'Guinea-Bissau'),
(207, 'Ivory Coast', 1, 10, 'IN'),
(208, 'Kenya', 1, 10, 'Kenya'),
(209, 'Lesotho (Basutoland)', 1, 10, 'IN'),
(210, 'Liberia', 1, 10, 'Liberia'),
(211, 'Libya', 1, 10, 'Libya'),
(212, 'Malawi (Nyasaland)', 1, 10, 'IN'),
(213, 'Mali', 1, 10, 'Mali'),
(214, 'Mauritania', 1, 10, 'Mauritania'),
(215, 'Morocco', 1, 10, 'Morocco'),
(216, 'Morocco,Spanish (Ceuta, Melilla)', 1, 10, 'IN'),
(217, 'Mozambique', 1, 10, 'Mozambique'),
(218, 'Namibia', 1, 10, 'Namibia'),
(219, 'Niger', 1, 10, 'Niger'),
(220, 'Nigeria', 1, 10, 'Nigeria'),
(221, 'Rwanda', 1, 10, 'Rwanda'),
(222, 'Sao Tome & Principe', 1, 10, 'IN'),
(223, 'Senegal', 1, 10, 'Senegal'),
(224, 'Sierra Leone', 1, 10, 'Sierra Leone'),
(225, 'Somalia (Italian Somaliland)', 1, 10, 'IN'),
(226, 'Somaliland (Brit.)', 1, 10, 'IN'),
(227, 'South Africa', 1, 10, 'South Africa'),
(228, 'South Sudan', 1, 10, 'IN'),
(229, 'Sudan', 1, 10, 'Sudan'),
(230, 'Swaziland', 1, 10, 'Swaziland'),
(231, 'Tanzania (Tanganyika)', 1, 10, 'IN'),
(232, 'Togo', 1, 10, 'Togo'),
(233, 'Tunisia', 1, 10, 'Tunisia'),
(234, 'Uganda', 1, 10, 'Uganda'),
(235, 'Western Sahara (Spanish Sahara)', 1, 10, 'IN'),
(236, 'Zambia (No. Rhodesia)', 1, 10, 'IN'),
(237, 'Zanzibar', 1, 10, 'IN'),
(238, 'Zimbabwe (So. Rhodesia)', 1, 10, 'IN'),
(239, 'Abu Dhabi', 9, 10, 'IN'),
(240, 'Ajman', 9, 10, 'IN'),
(241, 'Bahrain', 9, 10, 'Bahrain'),
(242, 'Dubai', 9, 10, 'IN'),
(243, 'Egypt in Asia (Sinai Peninsula)', 9, 10, 'IN'),
(244, 'Fujeirah', 9, 10, 'IN'),
(245, 'Iran', 9, 10, 'Iran'),
(246, 'Iraq', 9, 10, 'Iraq'),
(247, 'Israel', 9, 10, 'Israel'),
(248, 'Jordan', 9, 10, 'Jordan'),
(249, 'Kuwait', 9, 10, 'Kuwait'),
(250, 'Lebanon', 9, 10, 'Lebanon'),
(251, 'Oman', 9, 10, 'Oman'),
(252, 'Palestine', 9, 10, 'IN'),
(253, 'Qatar', 9, 10, 'Qatar'),
(254, 'Ras Al Khaimah', 9, 10, 'IN'),
(255, 'Saudi Arabia', 9, 10, 'Saudi Arabia'),
(256, 'Sharjah', 9, 10, 'IN'),
(257, 'Syria', 9, 10, 'Syria'),
(258, 'Umm Al Qaiwain', 9, 10, 'IN'),
(259, 'Yemen', 9, 10, 'Yemen'),
(260, 'Andaman-Nicobar Islands (India)', 8, 10, 'IN'),
(261, 'British Indian Ocean Territory (Chagos Arch, Diego Garcia)', 8, 10, 'IN'),
(262, 'Christmas Island', 8, 10, 'Christmas Island'),
(263, 'Cocos Islands (Keeling)', 8, 10, 'IN'),
(264, 'Comoro Islands (Anjouan, Moheli, Grand Comoro)', 8, 10, 'IN'),
(265, 'Lakshadweep and Minicoy (India)', 8, 10, 'IN'),
(266, 'Madagascar', 8, 10, 'Madagascar'),
(267, 'Maldive Islands', 8, 10, 'IN'),
(268, 'Mauritius & Deps. (Agalega, St. Brandon)', 8, 10, 'IN'),
(269, 'Mayotte (Dzaoudzi)', 8, 10, 'IN'),
(270, 'Reunion & Deps. (Tromelin, Glorioso)', 8, 10, 'IN'),
(271, 'Rodriguez Island', 8, 10, 'IN'),
(272, 'Seychelles', 8, 10, 'Seychelles'),
(273, 'Socotra', 8, 10, 'IN'),
(274, 'ZilElwannyenSesel (Aldabra, Farquhar, Amirante Is.)', 8, 10, 'IN'),
(275, 'Abkhazia', 3, 10, 'IN'),
(276, 'Afghanistan', 3, 10, 'Afghanistan'),
(277, 'Armenia (Yerevan)', 3, 10, 'IN'),
(278, 'Azerbaijan (Baku)', 3, 10, 'IN'),
(279, 'Bangladesh', 3, 10, 'Bangladesh'),
(280, 'Bhutan', 3, 10, 'Bhutan'),
(281, 'Brunei', 3, 10, 'Brunei'),
(282, 'Cambodia', 3, 10, 'Cambodia'),
(283, 'China, People?s Republic', 3, 10, 'IN'),
(284, 'Georgia', 3, 10, 'Georgia'),
(285, 'Hainan Island', 3, 10, 'IN'),
(286, 'Hong Kong', 3, 10, 'Hong Kong'),
(287, 'India', 3, 10, 'India'),
(288, 'Kashmir (India)', 3, 10, 'IN'),
(289, 'North East India (Arunachal, Mizoram, Nagaland, Meghalaya, Sikkim)', 3, 10, 'IN'),
(290, 'Indonesia (Java)', 3, 10, 'IN'),
(291, 'Japan', 3, 10, 'Japan'),
(292, 'Jeju Island (South Korea)', 3, 10, 'IN'),
(293, 'Kalimantan (Indonesian Borneo)', 3, 10, 'IN'),
(294, 'Kashmir', 3, 10, 'IN'),
(295, 'Kazakhstan', 3, 10, 'Kazakhstan'),
(296, 'Kyrgyzstan', 3, 10, 'Kyrgyzstan'),
(297, 'Korea, North', 3, 10, 'IN'),
(298, 'Korea, South', 3, 10, 'IN'),
(299, 'Laos', 3, 10, 'Laos'),
(300, 'Lesser Sunda Islands (Bali,Timor, Indonesia)', 3, 10, 'IN'),
(301, 'Macau', 3, 10, 'Macau'),
(302, 'Malaysia', 3, 10, 'Malaysia'),
(303, 'Moluka', 3, 10, 'IN'),
(304, 'Mongolia, Republic', 3, 10, 'IN'),
(305, 'Myanmar (Burma)', 3, 10, 'IN'),
(306, 'Nakhchivan', 3, 10, 'IN'),
(307, 'Nepal', 3, 10, 'Nepal'),
(308, 'Pakistan', 3, 10, 'Pakistan'),
(309, 'Papua (Irian Jaya)', 3, 10, 'IN'),
(310, 'Philippines', 3, 10, 'Philippines'),
(311, 'Sabah (No. Borneo)', 3, 10, 'IN'),
(312, 'Sarawak', 3, 10, 'IN'),
(313, 'Siberia (Russia in Asia)', 3, 10, 'IN'),
(314, 'Singapore', 3, 10, 'Singapore'),
(315, 'Sri Lanka (Ceylon)', 3, 10, 'IN'),
(316, 'Sulawesi (Celebes, Indonesia)', 3, 10, 'IN'),
(317, 'Sumatra (Indonesia)', 3, 10, 'IN'),
(318, 'Taiwan. R.O.C.', 3, 10, 'IN'),
(319, 'Tajikistan', 3, 10, 'Tajikistan'),
(320, 'Thailand', 3, 10, 'Thailand'),
(321, 'Tibet', 3, 10, 'IN'),
(322, 'Timor Leste', 3, 10, 'IN'),
(323, 'Turkey in Asia (Anatolia, Ankara, Izmir)', 3, 10, 'IN'),
(324, 'Turkmenistan', 3, 10, 'Turkmenistan'),
(325, 'Uzbekistan', 3, 10, 'Uzbekistan'),
(326, 'Vietnam', 3, 10, 'Vietnam');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_places_india`
--

CREATE TABLE `tourist_places_india` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region_id` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '10',
  `country_name_for_map` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'India'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourist_places_india`
--

INSERT INTO `tourist_places_india` (`id`, `name`, `region_id`, `points`, `country_name_for_map`) VALUES
(1, 'Itanagar', 1, 10, 'India'),
(2, 'Dispur', 2, 10, 'India'),
(3, 'Patna', 3, 10, 'India'),
(4, 'Raipur', 4, 10, 'India'),
(5, 'Panaji', 5, 10, 'India'),
(6, 'Gandhinagar', 6, 10, 'India'),
(7, 'Chandigarh', 7, 10, 'India'),
(8, 'Shimla', 8, 10, 'India'),
(9, 'Srinagar', 9, 10, 'India'),
(10, 'Ranchi', 10, 10, 'India'),
(11, 'Bangalore', 11, 10, 'India'),
(12, 'Thiruvananthapuram', 12, 10, 'India'),
(13, 'Bhopal', 13, 10, 'India'),
(14, 'Mumbai', 14, 10, 'India'),
(15, 'Imphal', 15, 10, 'India'),
(16, 'Shillong', 16, 10, 'India'),
(17, 'Aizawl', 17, 10, 'India'),
(18, 'Kohima', 18, 10, 'India'),
(19, 'Bhubaneshwar', 19, 10, 'India'),
(20, 'Chandigarh', 20, 10, 'India'),
(21, 'Jaipur', 21, 10, 'India'),
(22, 'Gangtok', 22, 10, 'India'),
(23, 'Chennai', 23, 10, 'India'),
(24, 'Hyderabad', 24, 10, 'India'),
(25, 'Agartala', 25, 10, 'India'),
(26, 'Dehradun', 26, 10, 'India'),
(27, 'Lucknow', 27, 10, 'India'),
(28, 'Kolkata', 28, 10, 'India'),
(29, 'Port Blair', 29, 10, 'India'),
(30, 'Chandigarh', 30, 10, 'India'),
(31, 'Delhi', 31, 10, 'India'),
(32, 'Silvassa', 32, 10, 'India'),
(33, 'Daman', 33, 10, 'India'),
(34, 'Kavaratti', 34, 10, 'India'),
(35, 'Puducherry', 35, 10, 'India'),
(1, 'Itanagar', 1, 10, 'India'),
(2, 'Dispur', 2, 10, 'India'),
(3, 'Patna', 3, 10, 'India'),
(4, 'Raipur', 4, 10, 'India'),
(5, 'Panaji', 5, 10, 'India'),
(6, 'Gandhinagar', 6, 10, 'India'),
(7, 'Chandigarh', 7, 10, 'India'),
(8, 'Shimla', 8, 10, 'India'),
(9, 'Srinagar', 9, 10, 'India'),
(10, 'Ranchi', 10, 10, 'India'),
(11, 'Bangalore', 11, 10, 'India'),
(12, 'Thiruvananthapuram', 12, 10, 'India'),
(13, 'Bhopal', 13, 10, 'India'),
(14, 'Mumbai', 14, 10, 'India'),
(15, 'Imphal', 15, 10, 'India'),
(16, 'Shillong', 16, 10, 'India'),
(17, 'Aizawl', 17, 10, 'India'),
(18, 'Kohima', 18, 10, 'India'),
(19, 'Bhubaneshwar', 19, 10, 'India'),
(20, 'Chandigarh', 20, 10, 'India'),
(21, 'Jaipur', 21, 10, 'India'),
(22, 'Gangtok', 22, 10, 'India'),
(23, 'Chennai', 23, 10, 'India'),
(24, 'Hyderabad', 24, 10, 'India'),
(25, 'Agartala', 25, 10, 'India'),
(26, 'Dehradun', 26, 10, 'India'),
(27, 'Lucknow', 27, 10, 'India'),
(28, 'Kolkata', 28, 10, 'India'),
(29, 'Port Blair', 29, 10, 'India'),
(30, 'Chandigarh', 30, 10, 'India'),
(31, 'Delhi', 31, 10, 'India'),
(32, 'Silvassa', 32, 10, 'India'),
(33, 'Daman', 33, 10, 'India'),
(34, 'Kavaratti', 34, 10, 'India'),
(35, 'Puducherry', 35, 10, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `tour_continent`
--

CREATE TABLE `tour_continent` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_continent`
--

INSERT INTO `tour_continent` (`id`, `name`) VALUES
(1, 'AFRICA'),
(2, 'ANTARCTICA'),
(3, 'ASIA'),
(4, 'ATLANTIC OCEAN'),
(5, 'CARIBBEAN'),
(6, 'CENTRAL AMERICA'),
(7, 'EUROPE & MEDITERRANEAN'),
(8, 'INDIAN OCEAN'),
(9, 'MIDDLE EAST'),
(10, 'NORTH AMERICA'),
(11, 'PACIFIC OCEAN'),
(12, 'SOUTH AMERICA'),
(1, 'AFRICA'),
(2, 'ANTARCTICA'),
(3, 'ASIA'),
(4, 'ATLANTIC OCEAN'),
(5, 'CARIBBEAN'),
(6, 'CENTRAL AMERICA'),
(7, 'EUROPE & MEDITERRANEAN'),
(8, 'INDIAN OCEAN'),
(9, 'MIDDLE EAST'),
(10, 'NORTH AMERICA'),
(11, 'PACIFIC OCEAN'),
(12, 'SOUTH AMERICA');

-- --------------------------------------------------------

--
-- Table structure for table `tour_posts`
--

CREATE TABLE `tour_posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `destination` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'tour',
  `tour_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_posts`
--

INSERT INTO `tour_posts` (`id`, `user_id`, `title`, `region`, `place`, `destination`, `description`, `post_type`, `tour_type`, `date_posted`, `date_modified`, `remark`) VALUES
(52, 2, 'NewPost', 9, 9, 'Laddakh', 'Ladakh (\"land of high passes\") is a region in Indian state of Jammu and Kashmir that currently extends from the Kunlun mountain range[3] to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent.[4][5] It is one of the most sparsely populated regions in Jammu and Kashmir and its culture and history are closely related to that of Tibet. Ladakh is renowned for its remote mountain beauty and culture.\r\n\r\nHistorically, the region included the Baltistan (Baltiyul) valleys (now mostly in Pakistan), the entire upper Indus Valley, the remote Zanskar, Lahaul and Spiti to the south, much of Ngari including the Rudok region and Guge in the east, Aksai Chin in the northeast (extending to the Kun Lun Mountains), and the Nubra Valley to the north over Khardong La in the Ladakh Range. Contemporary Ladakh borders Tibet to the east, the Lahaul and Spiti regions to the south, the Vale of Kashmir, Jammu and Baltiyul regions to the west, and the southwest corner of Xinjiang across the Karakoram Pass in the far north.', 'tour', 'national', '2017-07-17 19:41:39', '2017-08-16 21:33:58', ''),
(53, 2, 'NewPost', 1, 187, 'Crete', 'Ladakh (\"land of high passes\") is a region in Indian state of Jammu and Kashmir that currently extends from the Kunlun mountain range[3] to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent.[4][5] It is one of the most sparsely populated regions in Jammu and Kashmir and its culture and history are closely related to that of Tibet. Ladakh is renowned for its remote mountain beauty and culture.\r\n\r\nHistorically, the region included the Baltistan (Baltiyul) valleys (now mostly in Pakistan), the entire upper Indus Valley, the remote Zanskar, Lahaul and Spiti to the south, much of Ngari including the Rudok region and Guge in the east, Aksai Chin in the northeast (extending to the Kun Lun Mountains), and the Nubra Valley to the north over Khardong La in the Ladakh Range. Contemporary Ladakh borders Tibet to the east, the Lahaul and Spiti regions to the south, the Vale of Kashmir, Jammu and Baltiyul regions to the west, and the southwest corner of Xinjiang across the Karakoram Pass in the far north.', 'tour', 'international', '2017-07-17 19:43:24', '2017-07-29 20:06:25', ''),
(55, 2, 'NewPost', 1, 186, 'CHDGRH', 'CHDGRH', 'tour', 'international', '2017-07-17 20:55:09', '2018-04-25 18:26:36', ''),
(57, 3, 'NewPost', 2, 2, 'Dispur', 'dispur', 'tour', 'national', '2017-07-17 21:26:27', '2017-11-11 22:23:21', ''),
(58, 2, 'NewPost', 1, 201, 'Test', 'hgh agshas ahag agh', 'tour', 'international', '2018-04-25 18:30:06', '0000-00-00 00:00:00', ''),
(52, 2, 'NewPost', 9, 9, 'Laddakh', 'Ladakh (\"land of high passes\") is a region in Indian state of Jammu and Kashmir that currently extends from the Kunlun mountain range[3] to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent.[4][5] It is one of the most sparsely populated regions in Jammu and Kashmir and its culture and history are closely related to that of Tibet. Ladakh is renowned for its remote mountain beauty and culture.\r\n\r\nHistorically, the region included the Baltistan (Baltiyul) valleys (now mostly in Pakistan), the entire upper Indus Valley, the remote Zanskar, Lahaul and Spiti to the south, much of Ngari including the Rudok region and Guge in the east, Aksai Chin in the northeast (extending to the Kun Lun Mountains), and the Nubra Valley to the north over Khardong La in the Ladakh Range. Contemporary Ladakh borders Tibet to the east, the Lahaul and Spiti regions to the south, the Vale of Kashmir, Jammu and Baltiyul regions to the west, and the southwest corner of Xinjiang across the Karakoram Pass in the far north.', 'tour', 'national', '2017-07-17 19:41:39', '2017-08-16 21:33:58', ''),
(53, 2, 'NewPost', 1, 187, 'Crete', 'Ladakh (\"land of high passes\") is a region in Indian state of Jammu and Kashmir that currently extends from the Kunlun mountain range[3] to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent.[4][5] It is one of the most sparsely populated regions in Jammu and Kashmir and its culture and history are closely related to that of Tibet. Ladakh is renowned for its remote mountain beauty and culture.\r\n\r\nHistorically, the region included the Baltistan (Baltiyul) valleys (now mostly in Pakistan), the entire upper Indus Valley, the remote Zanskar, Lahaul and Spiti to the south, much of Ngari including the Rudok region and Guge in the east, Aksai Chin in the northeast (extending to the Kun Lun Mountains), and the Nubra Valley to the north over Khardong La in the Ladakh Range. Contemporary Ladakh borders Tibet to the east, the Lahaul and Spiti regions to the south, the Vale of Kashmir, Jammu and Baltiyul regions to the west, and the southwest corner of Xinjiang across the Karakoram Pass in the far north.', 'tour', 'international', '2017-07-17 19:43:24', '2017-07-29 20:06:25', ''),
(55, 2, 'NewPost', 1, 186, 'CHDGRH', 'CHDGRH', 'tour', 'international', '2017-07-17 20:55:09', '2018-04-25 18:26:36', ''),
(57, 3, 'NewPost', 2, 2, 'Dispur', 'dispur', 'tour', 'national', '2017-07-17 21:26:27', '2017-11-11 22:23:21', ''),
(58, 2, 'NewPost', 1, 201, 'Test', 'hgh agshas ahag agh', 'tour', 'international', '2018-04-25 18:30:06', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tour_states_india`
--

CREATE TABLE `tour_states_india` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_states_india`
--

INSERT INTO `tour_states_india` (`id`, `name`) VALUES
(1, 'Arunachal Pradesh '),
(2, 'Assam '),
(3, 'Bihar '),
(4, 'Chhattisgarh '),
(5, 'Goa '),
(6, 'Gujarat '),
(7, 'Haryana '),
(8, 'Himachal Pradesh '),
(9, 'Jammu & Kashmir '),
(10, 'Jharkhand '),
(11, 'Karnataka '),
(12, 'Kerala '),
(13, 'Madhya Pradesh '),
(14, 'Maharashtra '),
(15, 'Manipur '),
(16, 'Meghalaya '),
(17, 'Mizoram '),
(18, 'Nagaland '),
(19, 'Odisha '),
(20, 'Punjab '),
(21, 'Rajasthan '),
(22, 'Sikkim '),
(23, 'Tamil Nadu '),
(24, 'Telangana '),
(25, 'Tripura '),
(26, 'Uttarakhand '),
(27, 'Uttar Pradesh '),
(28, 'West Bengal '),
(29, 'Andaman and Nicobar Islands '),
(30, 'Chandigarh '),
(31, 'The Government of NCT of Delhi '),
(32, 'Dadra and Nagar Haveli '),
(33, 'Daman and Diu '),
(34, 'Lakshadweep '),
(35, 'Puducherry '),
(1, 'Arunachal Pradesh '),
(2, 'Assam '),
(3, 'Bihar '),
(4, 'Chhattisgarh '),
(5, 'Goa '),
(6, 'Gujarat '),
(7, 'Haryana '),
(8, 'Himachal Pradesh '),
(9, 'Jammu & Kashmir '),
(10, 'Jharkhand '),
(11, 'Karnataka '),
(12, 'Kerala '),
(13, 'Madhya Pradesh '),
(14, 'Maharashtra '),
(15, 'Manipur '),
(16, 'Meghalaya '),
(17, 'Mizoram '),
(18, 'Nagaland '),
(19, 'Odisha '),
(20, 'Punjab '),
(21, 'Rajasthan '),
(22, 'Sikkim '),
(23, 'Tamil Nadu '),
(24, 'Telangana '),
(25, 'Tripura '),
(26, 'Uttarakhand '),
(27, 'Uttar Pradesh '),
(28, 'West Bengal '),
(29, 'Andaman and Nicobar Islands '),
(30, 'Chandigarh '),
(31, 'The Government of NCT of Delhi '),
(32, 'Dadra and Nagar Haveli '),
(33, 'Daman and Diu '),
(34, 'Lakshadweep '),
(35, 'Puducherry ');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_detail`
--

CREATE TABLE `tracking_detail` (
  `id` int(11) NOT NULL,
  `tracking_number` varchar(100) NOT NULL,
  `project_id` int(10) NOT NULL,
  `noting_title` varchar(200) NOT NULL,
  `noting_place` varchar(200) NOT NULL,
  `noting_date` date NOT NULL,
  `points` text NOT NULL,
  `target_date` date NOT NULL,
  `actual_date` date NOT NULL,
  `status` int(20) NOT NULL,
  `responsibility` int(10) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email_to` varchar(100) NOT NULL,
  `email_cc` varchar(100) NOT NULL,
  `reminder_days` int(50) NOT NULL,
  `reminder_time` time NOT NULL,
  `last_remainder_date` date NOT NULL,
  `email_notification` int(11) NOT NULL DEFAULT '0' COMMENT '0=allow email notification , 1 = not allow email notification',
  `risk` varchar(100) NOT NULL,
  `remark` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_detail`
--

INSERT INTO `tracking_detail` (`id`, `tracking_number`, `project_id`, `noting_title`, `noting_place`, `noting_date`, `points`, `target_date`, `actual_date`, `status`, `responsibility`, `contact_no`, `email_to`, `email_cc`, `reminder_days`, `reminder_time`, `last_remainder_date`, `email_notification`, `risk`, `remark`, `created_by`, `created_on`, `updated_on`) VALUES
(1, 'asd', 4, 'making', 'asdasda', '2018-06-16', 'asdsadasdasdasd', '2018-06-08', '2018-06-09', 1, 7, '674675486757', '4,7', '7', 4, '10:29:00', '2018-06-14', 0, '4', 'sjkhgskjdfhkjgsdfjghsdsjgsdkjfg', 6, '0000-00-00', '2018-06-19 18:20:35'),
(2, 'g', 4, 'g', 'g', '2018-06-15', 'g', '2018-06-03', '2018-06-02', 1, 7, 'g', '7', '4,7', 5, '14:34:00', '0000-00-00', 1, 'g', 'gg', 4, '2018-06-25', '2018-06-25 15:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_status`
--

CREATE TABLE `tracking_status` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_status`
--

INSERT INTO `tracking_status` (`id`, `name`) VALUES
(1, 'In Process'),
(2, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `travel_deal_cat`
--

CREATE TABLE `travel_deal_cat` (
  `id` int(11) NOT NULL,
  `title` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `travel_deal_cat`
--

INSERT INTO `travel_deal_cat` (`id`, `title`, `date_created`) VALUES
(1, 'Hotel', '2017-07-21 01:56:03'),
(2, 'Airlines', '2017-07-21 01:59:14'),
(3, 'Bus', '2017-07-21 02:06:24'),
(4, 'Cruise', '2017-07-21 02:31:57'),
(5, 'Test', '2018-04-25 20:08:58'),
(1, 'Hotel', '2017-07-21 01:56:03'),
(2, 'Airlines', '2017-07-21 01:59:14'),
(3, 'Bus', '2017-07-21 02:06:24'),
(4, 'Cruise', '2017-07-21 02:31:57'),
(5, 'Test', '2018-04-25 20:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `travel_deal_master`
--

CREATE TABLE `travel_deal_master` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cat` int(11) NOT NULL,
  `subcat` int(11) NOT NULL,
  `web_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `thumb_img_link` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fullsize_img_link` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `deal_start_date` date NOT NULL,
  `deal_end_date` date NOT NULL,
  `active` int(11) NOT NULL,
  `temp_data` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remark` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `travel_deal_master`
--

INSERT INTO `travel_deal_master` (`id`, `title`, `cat`, `subcat`, `web_link`, `thumb_img_link`, `fullsize_img_link`, `deal_start_date`, `deal_end_date`, `active`, `temp_data`, `date_created`, `date_modified`, `remark`) VALUES
(2, 'Hotel In Shimla', 1, 8, 'https://www.w3schools.com', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/thumb/181500937428.jpg', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/fullsize/181500937428.jpg', '2017-07-10', '2017-09-27', 0, 0, '2017-07-22 02:15:38', '2017-07-24 23:03:48', 'https://www.w3schools.com'),
(3, 'Vistara', 2, 4, 'https://www.google.co.in/', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/thumb/621500925300.jpg', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/fullsize/621500925300.jpg', '2017-07-24', '2017-08-31', 0, 0, '2017-07-24 19:41:40', '2017-07-25 00:32:19', 'aaaaaaaaa'),
(4, 'test', 2, 2, 'https://www.w3schools.com', 'http://localhost/mti/admin/uploads/travel_deals/2018/04/thumb/301524687068.jpg', 'http://localhost/mti/admin/uploads/travel_deals/2018/04/fullsize/301524687068.jpg', '2018-04-25', '2018-04-30', 0, 0, '2018-04-25 20:11:08', '0000-00-00 00:00:00', 'With remark '),
(2, 'Hotel In Shimla', 1, 8, 'https://www.w3schools.com', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/thumb/181500937428.jpg', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/fullsize/181500937428.jpg', '2017-07-10', '2017-09-27', 0, 0, '2017-07-22 02:15:38', '2017-07-24 23:03:48', 'https://www.w3schools.com'),
(3, 'Vistara', 2, 4, 'https://www.google.co.in/', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/thumb/621500925300.jpg', 'http://localhost/mti/admin/uploads/travel_deals/2017/07/fullsize/621500925300.jpg', '2017-07-24', '2017-08-31', 0, 0, '2017-07-24 19:41:40', '2017-07-25 00:32:19', 'aaaaaaaaa'),
(4, 'test', 2, 2, 'https://www.w3schools.com', 'http://localhost/mti/admin/uploads/travel_deals/2018/04/thumb/301524687068.jpg', 'http://localhost/mti/admin/uploads/travel_deals/2018/04/fullsize/301524687068.jpg', '2018-04-25', '2018-04-30', 0, 0, '2018-04-25 20:11:08', '0000-00-00 00:00:00', 'With remark ');

-- --------------------------------------------------------

--
-- Table structure for table `travel_deal_subcat`
--

CREATE TABLE `travel_deal_subcat` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `travel_deal_subcat`
--

INSERT INTO `travel_deal_subcat` (`id`, `cat_id`, `title`, `date_created`) VALUES
(1, 2, 'Air India', '2017-07-21 20:36:06'),
(2, 2, 'Air Asia', '2017-07-21 20:37:01'),
(3, 2, 'Indigo', '2017-07-21 20:37:12'),
(4, 2, 'Vistara', '2017-07-21 20:37:19'),
(5, 2, 'Finn', '2017-07-21 20:37:27'),
(6, 1, '3 Star', '2017-07-21 20:37:49'),
(7, 1, '4 Star', '2017-07-21 20:37:59'),
(8, 1, '5 Star', '2017-07-21 20:38:07'),
(9, 1, '7 Star', '2017-07-21 20:38:13'),
(1, 2, 'Air India', '2017-07-21 20:36:06'),
(2, 2, 'Air Asia', '2017-07-21 20:37:01'),
(3, 2, 'Indigo', '2017-07-21 20:37:12'),
(4, 2, 'Vistara', '2017-07-21 20:37:19'),
(5, 2, 'Finn', '2017-07-21 20:37:27'),
(6, 1, '3 Star', '2017-07-21 20:37:49'),
(7, 1, '4 Star', '2017-07-21 20:37:59'),
(8, 1, '5 Star', '2017-07-21 20:38:07'),
(9, 1, '7 Star', '2017-07-21 20:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `travel_deal_transaction`
--

CREATE TABLE `travel_deal_transaction` (
  `id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `travel_deal_transaction`
--

INSERT INTO `travel_deal_transaction` (`id`, `deal_id`, `description`, `date_created`) VALUES
(1, 2, '2 Room with cross ventilation.', '2017-07-22 02:24:34'),
(2, 2, 'Fully Air Conditioned.', '2017-07-22 02:33:00'),
(3, 2, 'With swimming Pool and Gym', '2017-07-22 19:23:52'),
(4, 3, 'Meal Dinner and Lunch facility .', '2017-07-25 20:11:52'),
(5, 3, '12 Hour tour to USA.', '2017-07-25 20:11:35'),
(6, 4, '12 Hour tour to USA', '2018-04-25 20:11:39'),
(7, 4, 'Aa dfdf', '2018-04-25 20:11:47'),
(1, 2, '2 Room with cross ventilation.', '2017-07-22 02:24:34'),
(2, 2, 'Fully Air Conditioned.', '2017-07-22 02:33:00'),
(3, 2, 'With swimming Pool and Gym', '2017-07-22 19:23:52'),
(4, 3, 'Meal Dinner and Lunch facility .', '2017-07-25 20:11:52'),
(5, 3, '12 Hour tour to USA.', '2017-07-25 20:11:35'),
(6, 4, '12 Hour tour to USA', '2018-04-25 20:11:39'),
(7, 4, 'Aa dfdf', '2018-04-25 20:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `travel_place_count`
--

CREATE TABLE `travel_place_count` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `place_count` int(11) NOT NULL,
  `comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `travel_place_count`
--

INSERT INTO `travel_place_count` (`id`, `user_id`, `tour_type`, `place_count`, `comment`) VALUES
(8, 2, 'national', 25, '0'),
(9, 2, 'international', 28, '0'),
(10, 3, 'national', 2, '0'),
(11, 3, 'international', 4, '0'),
(12, 4, 'national', 1, ''),
(13, 4, 'international', 1, ''),
(8, 2, 'national', 25, '0'),
(9, 2, 'international', 28, '0'),
(10, 3, 'national', 2, '0'),
(11, 3, 'international', 4, '0'),
(12, 4, 'national', 1, ''),
(13, 4, 'international', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `travel_points`
--

CREATE TABLE `travel_points` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `bonus_point` int(11) NOT NULL,
  `bonus_type` varchar(75) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `travel_points`
--

INSERT INTO `travel_points` (`id`, `user_id`, `tour_type`, `points`, `bonus_point`, `bonus_type`) VALUES
(8, 2, 'national', 320, 0, ''),
(9, 2, 'international', 350, 0, ''),
(10, 3, 'national', 40, 0, ''),
(11, 3, 'international', 20, 0, ''),
(12, 4, 'national', 10, 0, ''),
(13, 4, 'international', 10, 0, ''),
(8, 2, 'national', 320, 0, ''),
(9, 2, 'international', 350, 0, ''),
(10, 3, 'national', 40, 0, ''),
(11, 3, 'international', 20, 0, ''),
(12, 4, 'national', 10, 0, ''),
(13, 4, 'international', 10, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(18) NOT NULL,
  `project_id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user' COMMENT 'admin,internal_user,client_user,vendor_user',
  `company_id` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `project_id`, `username`, `password`, `full_name`, `user_type`, `company_id`, `department_id`, `email_id`, `created_by`, `created_on`) VALUES
(4, 4, 'vipin', 'vipin', 'Vipin Mishra', 'internal_user', 5, 0, 'test@test.com', 1, '2017-11-14 02:14:20'),
(6, 4, 'admin', 'admin@2017', 'Admin', 'admin', 0, NULL, 'admin@imaginationlight.in', 0, '2017-07-26 21:12:05'),
(7, 4, 'test', 'test', 'test', 'internal_user', 5, 0, 'test@test.com', 1, '2017-11-14 02:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_wbd_category_subcategory`
--

CREATE TABLE `user_wbd_category_subcategory` (
  `id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `category_id` varchar(200) NOT NULL,
  `subcat1_id` varchar(200) NOT NULL,
  `subcat2_id` varchar(200) NOT NULL,
  `subcat3_id` varchar(200) NOT NULL,
  `subcat4_id` varchar(200) NOT NULL,
  `subcat5_id` varchar(200) NOT NULL,
  `created_by` int(10) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_wbd_category_subcategory`
--

INSERT INTO `user_wbd_category_subcategory` (`id`, `project_id`, `category_id`, `subcat1_id`, `subcat2_id`, `subcat3_id`, `subcat4_id`, `subcat5_id`, `created_by`, `created_on`, `updated_on`) VALUES
(2, 4, '2,3,4,5,6,7,8,9,10,11', '1,2,4,7,3,8,11,10,12', '1,2,4,5,6,7,9,10,11,12,13,14', '6,9,7,8,10,11', '6,7,9,10,11', '12,6,7,11,8,9,10', 6, '2018-07-03', '2018-07-04 10:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `usr_cities`
--

CREATE TABLE `usr_cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_cities`
--

INSERT INTO `usr_cities` (`id`, `name`, `state_id`) VALUES
(1, 'Kolhapur', 24),
(2, 'Port Blair', 1),
(3, 'Adilabad', 2),
(4, 'Adoni', 2),
(5, 'Amadalavalasa', 2),
(6, 'Amalapuram', 2),
(7, 'Anakapalle', 2),
(8, 'Anantapur', 2),
(9, 'Badepalle', 2),
(10, 'Banganapalle', 2),
(11, 'Bapatla', 2),
(12, 'Bellampalle', 2),
(13, 'Bethamcherla', 2),
(14, 'Bhadrachalam', 2),
(15, 'Bhainsa', 2),
(16, 'Bheemunipatnam', 2),
(17, 'Bhimavaram', 2),
(18, 'Bhongir', 2),
(19, 'Bobbili', 2),
(20, 'Bodhan', 2),
(21, 'Chilakaluripet', 2),
(22, 'Chirala', 2),
(23, 'Chittoor', 2),
(24, 'Cuddapah', 2),
(25, 'Devarakonda', 2),
(26, 'Dharmavaram', 2),
(27, 'Eluru', 2),
(28, 'Farooqnagar', 2),
(29, 'Gadwal', 2),
(30, 'Gooty', 2),
(31, 'Gudivada', 2),
(32, 'Gudur', 2),
(33, 'Guntakal', 2),
(34, 'Guntur', 2),
(35, 'Hanuman Junction', 2),
(36, 'Hindupur', 2),
(37, 'Hyderabad', 2),
(38, 'Ichchapuram', 2),
(39, 'Jaggaiahpet', 2),
(40, 'Jagtial', 2),
(41, 'Jammalamadugu', 2),
(42, 'Jangaon', 2),
(43, 'Kadapa', 2),
(44, 'Kadiri', 2),
(45, 'Kagaznagar', 2),
(46, 'Kakinada', 2),
(47, 'Kalyandurg', 2),
(48, 'Kamareddy', 2),
(49, 'Kandukur', 2),
(50, 'Karimnagar', 2),
(51, 'Kavali', 2),
(52, 'Khammam', 2),
(53, 'Koratla', 2),
(54, 'Kothagudem', 2),
(55, 'Kothapeta', 2),
(56, 'Kovvur', 2),
(57, 'Kurnool', 2),
(58, 'Kyathampalle', 2),
(59, 'Macherla', 2),
(60, 'Machilipatnam', 2),
(61, 'Madanapalle', 2),
(62, 'Mahbubnagar', 2),
(63, 'Mancherial', 2),
(64, 'Mandamarri', 2),
(65, 'Mandapeta', 2),
(66, 'Manuguru', 2),
(67, 'Markapur', 2),
(68, 'Medak', 2),
(69, 'Miryalaguda', 2),
(70, 'Mogalthur', 2),
(71, 'Nagari', 2),
(72, 'Nagarkurnool', 2),
(73, 'Nandyal', 2),
(74, 'Narasapur', 2),
(75, 'Narasaraopet', 2),
(76, 'Narayanpet', 2),
(77, 'Narsipatnam', 2),
(78, 'Nellore', 2),
(79, 'Nidadavole', 2),
(80, 'Nirmal', 2),
(81, 'Nizamabad', 2),
(82, 'Nuzvid', 2),
(83, 'Ongole', 2),
(84, 'Palacole', 2),
(85, 'Palasa Kasibugga', 2),
(86, 'Palwancha', 2),
(87, 'Parvathipuram', 2),
(88, 'Pedana', 2),
(89, 'Peddapuram', 2),
(90, 'Pithapuram', 2),
(91, 'Pondur', 2),
(92, 'Ponnur', 2),
(93, 'Proddatur', 2),
(94, 'Punganur', 2),
(95, 'Puttur', 2),
(96, 'Rajahmundry', 2),
(97, 'Rajam', 2),
(98, 'Ramachandrapuram', 2),
(99, 'Ramagundam', 2),
(100, 'Rayachoti', 2),
(101, 'Rayadurg', 2),
(102, 'Renigunta', 2),
(103, 'Repalle', 2),
(104, 'Sadasivpet', 2),
(105, 'Salur', 2),
(106, 'Samalkot', 2),
(107, 'Sangareddy', 2),
(108, 'Sattenapalle', 2),
(109, 'Siddipet', 2),
(110, 'Singapur', 2),
(111, 'Sircilla', 2),
(112, 'Srikakulam', 2),
(113, 'Srikalahasti', 2),
(114, 'Suryapet', 2),
(115, 'Tadepalligudem', 2),
(116, 'Tadpatri', 2),
(117, 'Tandur', 2),
(118, 'Tanuku', 2),
(119, 'Tenali', 2),
(120, 'Tirupati', 2),
(121, 'Tuni', 2),
(122, 'Uravakonda', 2),
(123, 'Venkatagiri', 2),
(124, 'Vicarabad', 2),
(125, 'Vijayawada', 2),
(126, 'Vinukonda', 2),
(127, 'Visakhapatnam', 2),
(128, 'Vizianagaram', 2),
(129, 'Wanaparthy', 2),
(130, 'Warangal', 2),
(131, 'Yellandu', 2),
(132, 'Yemmiganur', 2),
(133, 'Yerraguntla', 2),
(134, 'Zahirabad', 2),
(135, 'Rajampet', 2),
(136, 'Along', 4),
(137, 'Bomdila', 4),
(138, 'Itanagar', 4),
(139, 'Naharlagun', 4),
(140, 'Pasighat', 4),
(141, 'Abhayapuri', 5),
(142, 'Amguri', 5),
(143, 'Anandnagaar', 5),
(144, 'Barpeta', 5),
(145, 'Barpeta Road', 5),
(146, 'Bilasipara', 5),
(147, 'Bongaigaon', 5),
(148, 'Dhekiajuli', 5),
(149, 'Dhubri', 5),
(150, 'Dibrugarh', 5),
(151, 'Digboi', 5),
(152, 'Diphu', 5),
(153, 'Dispur', 5),
(154, 'Gauripur', 5),
(155, 'Goalpara', 5),
(156, 'Golaghat', 5),
(157, 'Guwahati', 5),
(158, 'Haflong', 5),
(159, 'Hailakandi', 5),
(160, 'Hojai', 5),
(161, 'Jorhat', 5),
(162, 'Karimganj', 5),
(163, 'Kokrajhar', 5),
(164, 'Lanka', 5),
(165, 'Lumding', 5),
(166, 'Mangaldoi', 5),
(167, 'Mankachar', 5),
(168, 'Margherita', 5),
(169, 'Mariani', 5),
(170, 'Marigaon', 5),
(171, 'Nagaon', 5),
(172, 'Nalbari', 5),
(173, 'North Lakhimpur', 5),
(174, 'Rangia', 5),
(175, 'Sibsagar', 5),
(176, 'Silapathar', 5),
(177, 'Silchar', 5),
(178, 'Tezpur', 5),
(179, 'Tinsukia', 5),
(180, 'Amarpur', 6),
(181, 'Araria', 6),
(182, 'Areraj', 6),
(183, 'Arrah', 6),
(184, 'Asarganj', 6),
(185, 'Aurangabad', 6),
(186, 'Bagaha', 6),
(187, 'Bahadurganj', 6),
(188, 'Bairgania', 6),
(189, 'Bakhtiarpur', 6),
(190, 'Banka', 6),
(191, 'Banmankhi Bazar', 6),
(192, 'Barahiya', 6),
(193, 'Barauli', 6),
(194, 'Barbigha', 6),
(195, 'Barh', 6),
(196, 'Begusarai', 6),
(197, 'Behea', 6),
(198, 'Bettiah', 6),
(199, 'Bhabua', 6),
(200, 'Bhagalpur', 6),
(201, 'Bihar Sharif', 6),
(202, 'Bikramganj', 6),
(203, 'Bodh Gaya', 6),
(204, 'Buxar', 6),
(205, 'Chandan Bara', 6),
(206, 'Chanpatia', 6),
(207, 'Chhapra', 6),
(208, 'Colgong', 6),
(209, 'Dalsinghsarai', 6),
(210, 'Darbhanga', 6),
(211, 'Daudnagar', 6),
(212, 'Dehri-on-Sone', 6),
(213, 'Dhaka', 6),
(214, 'Dighwara', 6),
(215, 'Dumraon', 6),
(216, 'Fatwah', 6),
(217, 'Forbesganj', 6),
(218, 'Gaya', 6),
(219, 'Gogri Jamalpur', 6),
(220, 'Gopalganj', 6),
(221, 'Hajipur', 6),
(222, 'Hilsa', 6),
(223, 'Hisua', 6),
(224, 'Islampur', 6),
(225, 'Jagdispur', 6),
(226, 'Jamalpur', 6),
(227, 'Jamui', 6),
(228, 'Jehanabad', 6),
(229, 'Jhajha', 6),
(230, 'Jhanjharpur', 6),
(231, 'Jogabani', 6),
(232, 'Kanti', 6),
(233, 'Katihar', 6),
(234, 'Khagaria', 6),
(235, 'Kharagpur', 6),
(236, 'Kishanganj', 6),
(237, 'Lakhisarai', 6),
(238, 'Lalganj', 6),
(239, 'Madhepura', 6),
(240, 'Madhubani', 6),
(241, 'Maharajganj', 6),
(242, 'Mahnar Bazar', 6),
(243, 'Makhdumpur', 6),
(244, 'Maner', 6),
(245, 'Manihari', 6),
(246, 'Marhaura', 6),
(247, 'Masaurhi', 6),
(248, 'Mirganj', 6),
(249, 'Mokameh', 6),
(250, 'Motihari', 6),
(251, 'Motipur', 6),
(252, 'Munger', 6),
(253, 'Murliganj', 6),
(254, 'Muzaffarpur', 6),
(255, 'Narkatiaganj', 6),
(256, 'Naugachhia', 6),
(257, 'Nawada', 6),
(258, 'Nokha', 6),
(259, 'Patna', 6),
(260, 'Piro', 6),
(261, 'Purnia', 6),
(262, 'Rafiganj', 6),
(263, 'Rajgir', 6),
(264, 'Ramnagar', 6),
(265, 'Raxaul Bazar', 6),
(266, 'Revelganj', 6),
(267, 'Rosera', 6),
(268, 'Saharsa', 6),
(269, 'Samastipur', 6),
(270, 'Sasaram', 6),
(271, 'Sheikhpura', 6),
(272, 'Sheohar', 6),
(273, 'Sherghati', 6),
(274, 'Silao', 6),
(275, 'Sitamarhi', 6),
(276, 'Siwan', 6),
(277, 'Sonepur', 6),
(278, 'Sugauli', 6),
(279, 'Sultanganj', 6),
(280, 'Supaul', 6),
(281, 'Warisaliganj', 6),
(282, 'Ahiwara', 7),
(283, 'Akaltara', 7),
(284, 'Ambagarh Chowki', 7),
(285, 'Ambikapur', 7),
(286, 'Arang', 7),
(287, 'Bade Bacheli', 7),
(288, 'Balod', 7),
(289, 'Baloda Bazar', 7),
(290, 'Bemetra', 7),
(291, 'Bhatapara', 7),
(292, 'Bilaspur', 7),
(293, 'Birgaon', 7),
(294, 'Champa', 7),
(295, 'Chirmiri', 7),
(296, 'Dalli-Rajhara', 7),
(297, 'Dhamtari', 7),
(298, 'Dipka', 7),
(299, 'Dongargarh', 7),
(300, 'Durg-Bhilai Nagar', 7),
(301, 'Gobranawapara', 7),
(302, 'Jagdalpur', 7),
(303, 'Janjgir', 7),
(304, 'Jashpurnagar', 7),
(305, 'Kanker', 7),
(306, 'Kawardha', 7),
(307, 'Kondagaon', 7),
(308, 'Korba', 7),
(309, 'Mahasamund', 7),
(310, 'Mahendragarh', 7),
(311, 'Mungeli', 7),
(312, 'Naila Janjgir', 7),
(313, 'Raigarh', 7),
(314, 'Raipur', 7),
(315, 'Rajnandgaon', 7),
(316, 'Sakti', 7),
(317, 'Tilda Newra', 7),
(318, 'Amli', 8),
(319, 'Silvassa', 8),
(320, 'Daman and Diu', 9),
(321, 'Daman and Diu', 9),
(322, 'Asola', 10),
(323, 'Delhi', 10),
(324, 'Aldona', 11),
(325, 'Curchorem Cacora', 11),
(326, 'Madgaon', 11),
(327, 'Mapusa', 11),
(328, 'Margao', 11),
(329, 'Marmagao', 11),
(330, 'Panaji', 11),
(331, 'Ahmedabad', 12),
(332, 'Amreli', 12),
(333, 'Anand', 12),
(334, 'Ankleshwar', 12),
(335, 'Bharuch', 12),
(336, 'Bhavnagar', 12),
(337, 'Bhuj', 12),
(338, 'Cambay', 12),
(339, 'Dahod', 12),
(340, 'Deesa', 12),
(341, 'Dharampur, India', 12),
(342, 'Dholka', 12),
(343, 'Gandhinagar', 12),
(344, 'Godhra', 12),
(345, 'Himatnagar', 12),
(346, 'Idar', 12),
(347, 'Jamnagar', 12),
(348, 'Junagadh', 12),
(349, 'Kadi', 12),
(350, 'Kalavad', 12),
(351, 'Kalol', 12),
(352, 'Kapadvanj', 12),
(353, 'Karjan', 12),
(354, 'Keshod', 12),
(355, 'Khambhalia', 12),
(356, 'Khambhat', 12),
(357, 'Kheda', 12),
(358, 'Khedbrahma', 12),
(359, 'Kheralu', 12),
(360, 'Kodinar', 12),
(361, 'Lathi', 12),
(362, 'Limbdi', 12),
(363, 'Lunawada', 12),
(364, 'Mahesana', 12),
(365, 'Mahuva', 12),
(366, 'Manavadar', 12),
(367, 'Mandvi', 12),
(368, 'Mangrol', 12),
(369, 'Mansa', 12),
(370, 'Mehmedabad', 12),
(371, 'Modasa', 12),
(372, 'Morvi', 12),
(373, 'Nadiad', 12),
(374, 'Navsari', 12),
(375, 'Padra', 12),
(376, 'Palanpur', 12),
(377, 'Palitana', 12),
(378, 'Pardi', 12),
(379, 'Patan', 12),
(380, 'Petlad', 12),
(381, 'Porbandar', 12),
(382, 'Radhanpur', 12),
(383, 'Rajkot', 12),
(384, 'Rajpipla', 12),
(385, 'Rajula', 12),
(386, 'Ranavav', 12),
(387, 'Rapar', 12),
(388, 'Salaya', 12),
(389, 'Sanand', 12),
(390, 'Savarkundla', 12),
(391, 'Sidhpur', 12),
(392, 'Sihor', 12),
(393, 'Songadh', 12),
(394, 'Surat', 12),
(395, 'Talaja', 12),
(396, 'Thangadh', 12),
(397, 'Tharad', 12),
(398, 'Umbergaon', 12),
(399, 'Umreth', 12),
(400, 'Una', 12),
(401, 'Unjha', 12),
(402, 'Upleta', 12),
(403, 'Vadnagar', 12),
(404, 'Vadodara', 12),
(405, 'Valsad', 12),
(406, 'Vapi', 12),
(407, 'Vapi', 12),
(408, 'Veraval', 12),
(409, 'Vijapur', 12),
(410, 'Viramgam', 12),
(411, 'Visnagar', 12),
(412, 'Vyara', 12),
(413, 'Wadhwan', 12),
(414, 'Wankaner', 12),
(415, 'Adalaj', 12),
(416, 'Adityana', 12),
(417, 'Alang', 12),
(418, 'Ambaji', 12),
(419, 'Ambaliyasan', 12),
(420, 'Andada', 12),
(421, 'Anjar', 12),
(422, 'Anklav', 12),
(423, 'Antaliya', 12),
(424, 'Arambhada', 12),
(425, 'Atul', 12),
(426, 'Ballabhgarh', 15),
(427, 'Ambala', 15),
(428, 'Ambala', 15),
(429, 'Asankhurd', 15),
(430, 'Assandh', 15),
(431, 'Ateli', 15),
(432, 'Babiyal', 15),
(433, 'Bahadurgarh', 15),
(434, 'Barwala', 15),
(435, 'Bhiwani', 15),
(436, 'Charkhi Dadri', 15),
(437, 'Cheeka', 15),
(438, 'Ellenabad 2', 15),
(439, 'Faridabad', 15),
(440, 'Fatehabad', 15),
(441, 'Ganaur', 15),
(442, 'Gharaunda', 15),
(443, 'Gohana', 15),
(444, 'Gurgaon', 15),
(445, 'Haibat(Yamuna Nagar)', 15),
(446, 'Hansi', 15),
(447, 'Hisar', 15),
(448, 'Hodal', 15),
(449, 'Jhajjar', 15),
(450, 'Jind', 15),
(451, 'Kaithal', 15),
(452, 'Kalan Wali', 15),
(453, 'Kalka', 15),
(454, 'Karnal', 15),
(455, 'Ladwa', 15),
(456, 'Mahendragarh', 15),
(457, 'Mandi Dabwali', 15),
(458, 'Narnaul', 15),
(459, 'Narwana', 15),
(460, 'Palwal', 15),
(461, 'Panchkula', 15),
(462, 'Panipat', 15),
(463, 'Pehowa', 15),
(464, 'Pinjore', 15),
(465, 'Rania', 15),
(466, 'Ratia', 15),
(467, 'Rewari', 15),
(468, 'Rohtak', 15),
(469, 'Safidon', 15),
(470, 'Samalkha', 15),
(471, 'Shahbad', 15),
(472, 'Sirsa', 15),
(473, 'Sohna', 15),
(474, 'Sonipat', 15),
(475, 'Taraori', 15),
(476, 'Thanesar', 15),
(477, 'Tohana', 15),
(478, 'Yamunanagar', 15),
(479, 'Arki', 16),
(480, 'Baddi', 16),
(481, 'Bilaspur', 16),
(482, 'Chamba', 16),
(483, 'Dalhousie', 16),
(484, 'Dharamsala', 16),
(485, 'Hamirpur', 16),
(486, 'Mandi', 16),
(487, 'Nahan', 16),
(488, 'Shimla', 16),
(489, 'Solan', 16),
(490, 'Sundarnagar', 16),
(491, 'Jammu', 18),
(492, 'Achabbal', 18),
(493, 'Akhnoor', 18),
(494, 'Anantnag', 18),
(495, 'Arnia', 18),
(496, 'Awantipora', 18),
(497, 'Bandipore', 18),
(498, 'Baramula', 18),
(499, 'Kathua', 18),
(500, 'Leh', 18),
(501, 'Punch', 18),
(502, 'Rajauri', 18),
(503, 'Sopore', 18),
(504, 'Srinagar', 18),
(505, 'Udhampur', 18),
(506, 'Amlabad', 19),
(507, 'Ara', 19),
(508, 'Barughutu', 19),
(509, 'Bokaro Steel City', 19),
(510, 'Chaibasa', 19),
(511, 'Chakradharpur', 19),
(512, 'Chandrapura', 19),
(513, 'Chatra', 19),
(514, 'Chirkunda', 19),
(515, 'Churi', 19),
(516, 'Daltonganj', 19),
(517, 'Deoghar', 19),
(518, 'Dhanbad', 19),
(519, 'Dumka', 19),
(520, 'Garhwa', 19),
(521, 'Ghatshila', 19),
(522, 'Giridih', 19),
(523, 'Godda', 19),
(524, 'Gomoh', 19),
(525, 'Gumia', 19),
(526, 'Gumla', 19),
(527, 'Hazaribag', 19),
(528, 'Hussainabad', 19),
(529, 'Jamshedpur', 19),
(530, 'Jamtara', 19),
(531, 'Jhumri Tilaiya', 19),
(532, 'Khunti', 19),
(533, 'Lohardaga', 19),
(534, 'Madhupur', 19),
(535, 'Mihijam', 19),
(536, 'Musabani', 19),
(537, 'Pakaur', 19),
(538, 'Patratu', 19),
(539, 'Phusro', 19),
(540, 'Ramngarh', 19),
(541, 'Ranchi', 19),
(542, 'Sahibganj', 19),
(543, 'Saunda', 19),
(544, 'Simdega', 19),
(545, 'Tenu Dam-cum- Kathhara', 19),
(546, 'Arasikere', 20),
(547, 'Bangalore', 20),
(548, 'Belgaum', 20),
(549, 'Bellary', 20),
(550, 'Chamrajnagar', 20),
(551, 'Chikkaballapur', 20),
(552, 'Chintamani', 20),
(553, 'Chitradurga', 20),
(554, 'Gulbarga', 20),
(555, 'Gundlupet', 20),
(556, 'Hassan', 20),
(557, 'Hospet', 20),
(558, 'Hubli', 20),
(559, 'Karkala', 20),
(560, 'Karwar', 20),
(561, 'Kolar', 20),
(562, 'Kota', 20),
(563, 'Lakshmeshwar', 20),
(564, 'Lingsugur', 20),
(565, 'Maddur', 20),
(566, 'Madhugiri', 20),
(567, 'Madikeri', 20),
(568, 'Magadi', 20),
(569, 'Mahalingpur', 20),
(570, 'Malavalli', 20),
(571, 'Malur', 20),
(572, 'Mandya', 20),
(573, 'Mangalore', 20),
(574, 'Manvi', 20),
(575, 'Mudalgi', 20),
(576, 'Mudbidri', 20),
(577, 'Muddebihal', 20),
(578, 'Mudhol', 20),
(579, 'Mulbagal', 20),
(580, 'Mundargi', 20),
(581, 'Mysore', 20),
(582, 'Nanjangud', 20),
(583, 'Pavagada', 20),
(584, 'Puttur', 20),
(585, 'Rabkavi Banhatti', 20),
(586, 'Raichur', 20),
(587, 'Ramanagaram', 20),
(588, 'Ramdurg', 20),
(589, 'Ranibennur', 20),
(590, 'Robertson Pet', 20),
(591, 'Ron', 20),
(592, 'Sadalgi', 20),
(593, 'Sagar', 20),
(594, 'Sakleshpur', 20),
(595, 'Sandur', 20),
(596, 'Sankeshwar', 20),
(597, 'Saundatti-Yellamma', 20),
(598, 'Savanur', 20),
(599, 'Sedam', 20),
(600, 'Shahabad', 20),
(601, 'Shahpur', 20),
(602, 'Shiggaon', 20),
(603, 'Shikapur', 20),
(604, 'Shimoga', 20),
(605, 'Shorapur', 20),
(606, 'Shrirangapattana', 20),
(607, 'Sidlaghatta', 20),
(608, 'Sindgi', 20),
(609, 'Sindhnur', 20),
(610, 'Sira', 20),
(611, 'Sirsi', 20),
(612, 'Siruguppa', 20),
(613, 'Srinivaspur', 20),
(614, 'Talikota', 20),
(615, 'Tarikere', 20),
(616, 'Tekkalakota', 20),
(617, 'Terdal', 20),
(618, 'Tiptur', 20),
(619, 'Tumkur', 20),
(620, 'Udupi', 20),
(621, 'Vijayapura', 20),
(622, 'Wadi', 20),
(623, 'Yadgir', 20),
(624, 'Adoor', 21),
(625, 'Akathiyoor', 21),
(626, 'Alappuzha', 21),
(627, 'Ancharakandy', 21),
(628, 'Aroor', 21),
(629, 'Ashtamichira', 21),
(630, 'Attingal', 21),
(631, 'Avinissery', 21),
(632, 'Chalakudy', 21),
(633, 'Changanassery', 21),
(634, 'Chendamangalam', 21),
(635, 'Chengannur', 21),
(636, 'Cherthala', 21),
(637, 'Cheruthazham', 21),
(638, 'Chittur-Thathamangalam', 21),
(639, 'Chockli', 21),
(640, 'Erattupetta', 21),
(641, 'Guruvayoor', 21),
(642, 'Irinjalakuda', 21),
(643, 'Kadirur', 21),
(644, 'Kalliasseri', 21),
(645, 'Kalpetta', 21),
(646, 'Kanhangad', 21),
(647, 'Kanjikkuzhi', 21),
(648, 'Kannur', 21),
(649, 'Kasaragod', 21),
(650, 'Kayamkulam', 21),
(651, 'Kochi', 21),
(652, 'Kodungallur', 21),
(653, 'Kollam', 21),
(654, 'Koothuparamba', 21),
(655, 'Kothamangalam', 21),
(656, 'Kottayam', 21),
(657, 'Kozhikode', 21),
(658, 'Kunnamkulam', 21),
(659, 'Malappuram', 21),
(660, 'Mattannur', 21),
(661, 'Mavelikkara', 21),
(662, 'Mavoor', 21),
(663, 'Muvattupuzha', 21),
(664, 'Nedumangad', 21),
(665, 'Neyyattinkara', 21),
(666, 'Ottappalam', 21),
(667, 'Palai', 21),
(668, 'Palakkad', 21),
(669, 'Panniyannur', 21),
(670, 'Pappinisseri', 21),
(671, 'Paravoor', 21),
(672, 'Pathanamthitta', 21),
(673, 'Payyannur', 21),
(674, 'Peringathur', 21),
(675, 'Perinthalmanna', 21),
(676, 'Perumbavoor', 21),
(677, 'Ponnani', 21),
(678, 'Punalur', 21),
(679, 'Quilandy', 21),
(680, 'Shoranur', 21),
(681, 'Taliparamba', 21),
(682, 'Thiruvalla', 21),
(683, 'Thiruvananthapuram', 21),
(684, 'Thodupuzha', 21),
(685, 'Thrissur', 21),
(686, 'Tirur', 21),
(687, 'Vadakara', 21),
(688, 'Vaikom', 21),
(689, 'Varkala', 21),
(690, 'Kavaratti', 22),
(691, 'Ashok Nagar', 23),
(692, 'Balaghat', 23),
(693, 'Betul', 23),
(694, 'Bhopal', 23),
(695, 'Burhanpur', 23),
(696, 'Chhatarpur', 23),
(697, 'Dabra', 23),
(698, 'Datia', 23),
(699, 'Dewas', 23),
(700, 'Dhar', 23),
(701, 'Fatehabad', 23),
(702, 'Gwalior', 23),
(703, 'Indore', 23),
(704, 'Itarsi', 23),
(705, 'Jabalpur', 23),
(706, 'Katni', 23),
(707, 'Kotma', 23),
(708, 'Lahar', 23),
(709, 'Lundi', 23),
(710, 'Maharajpur', 23),
(711, 'Mahidpur', 23),
(712, 'Maihar', 23),
(713, 'Malajkhand', 23),
(714, 'Manasa', 23),
(715, 'Manawar', 23),
(716, 'Mandideep', 23),
(717, 'Mandla', 23),
(718, 'Mandsaur', 23),
(719, 'Mauganj', 23),
(720, 'Mhow Cantonment', 23),
(721, 'Mhowgaon', 23),
(722, 'Morena', 23),
(723, 'Multai', 23),
(724, 'Murwara', 23),
(725, 'Nagda', 23),
(726, 'Nainpur', 23),
(727, 'Narsinghgarh', 23),
(728, 'Narsinghgarh', 23),
(729, 'Neemuch', 23),
(730, 'Nepanagar', 23),
(731, 'Niwari', 23),
(732, 'Nowgong', 23),
(733, 'Nowrozabad', 23),
(734, 'Pachore', 23),
(735, 'Pali', 23),
(736, 'Panagar', 23),
(737, 'Pandhurna', 23),
(738, 'Panna', 23),
(739, 'Pasan', 23),
(740, 'Pipariya', 23),
(741, 'Pithampur', 23),
(742, 'Porsa', 23),
(743, 'Prithvipur', 23),
(744, 'Raghogarh-Vijaypur', 23),
(745, 'Rahatgarh', 23),
(746, 'Raisen', 23),
(747, 'Rajgarh', 23),
(748, 'Ratlam', 23),
(749, 'Rau', 23),
(750, 'Rehli', 23),
(751, 'Rewa', 23),
(752, 'Sabalgarh', 23),
(753, 'Sagar', 23),
(754, 'Sanawad', 23),
(755, 'Sarangpur', 23),
(756, 'Sarni', 23),
(757, 'Satna', 23),
(758, 'Sausar', 23),
(759, 'Sehore', 23),
(760, 'Sendhwa', 23),
(761, 'Seoni', 23),
(762, 'Seoni-Malwa', 23),
(763, 'Shahdol', 23),
(764, 'Shajapur', 23),
(765, 'Shamgarh', 23),
(766, 'Sheopur', 23),
(767, 'Shivpuri', 23),
(768, 'Shujalpur', 23),
(769, 'Sidhi', 23),
(770, 'Sihora', 23),
(771, 'Singrauli', 23),
(772, 'Sironj', 23),
(773, 'Sohagpur', 23),
(774, 'Tarana', 23),
(775, 'Tikamgarh', 23),
(776, 'Ujhani', 23),
(777, 'Ujjain', 23),
(778, 'Umaria', 23),
(779, 'Vidisha', 23),
(780, 'Wara Seoni', 23),
(781, 'Ahmednagar', 24),
(782, 'Akola', 24),
(783, 'Amravati', 24),
(784, 'Aurangabad', 24),
(785, 'Baramati', 24),
(786, 'Chalisgaon', 24),
(787, 'Chinchani', 24),
(788, 'Devgarh', 24),
(789, 'Dhule', 24),
(790, 'Dombivli', 24),
(791, 'Durgapur', 24),
(792, 'Ichalkaranji', 24),
(793, 'Jalna', 24),
(794, 'Kalyan', 24),
(795, 'Latur', 24),
(796, 'Loha', 24),
(797, 'Lonar', 24),
(798, 'Lonavla', 24),
(799, 'Mahad', 24),
(800, 'Mahuli', 24),
(801, 'Malegaon', 24),
(802, 'Malkapur', 24),
(803, 'Manchar', 24),
(804, 'Mangalvedhe', 24),
(805, 'Mangrulpir', 24),
(806, 'Manjlegaon', 24),
(807, 'Manmad', 24),
(808, 'Manwath', 24),
(809, 'Mehkar', 24),
(810, 'Mhaswad', 24),
(811, 'Miraj', 24),
(812, 'Morshi', 24),
(813, 'Mukhed', 24),
(814, 'Mul', 24),
(815, 'Mumbai', 24),
(816, 'Murtijapur', 24),
(817, 'Nagpur', 24),
(818, 'Nalasopara', 24),
(819, 'Nanded-Waghala', 24),
(820, 'Nandgaon', 24),
(821, 'Nandura', 24),
(822, 'Nandurbar', 24),
(823, 'Narkhed', 24),
(824, 'Nashik', 24),
(825, 'Navi Mumbai', 24),
(826, 'Nawapur', 24),
(827, 'Nilanga', 24),
(828, 'Osmanabad', 24),
(829, 'Ozar', 24),
(830, 'Pachora', 24),
(831, 'Paithan', 24),
(832, 'Palghar', 24),
(833, 'Pandharkaoda', 24),
(834, 'Pandharpur', 24),
(835, 'Panvel', 24),
(836, 'Parbhani', 24),
(837, 'Parli', 24),
(838, 'Parola', 24),
(839, 'Partur', 24),
(840, 'Pathardi', 24),
(841, 'Pathri', 24),
(842, 'Patur', 24),
(843, 'Pauni', 24),
(844, 'Pen', 24),
(845, 'Phaltan', 24),
(846, 'Pulgaon', 24),
(847, 'Pune', 24),
(848, 'Purna', 24),
(849, 'Pusad', 24),
(850, 'Rahuri', 24),
(851, 'Rajura', 24),
(852, 'Ramtek', 24),
(853, 'Ratnagiri', 24),
(854, 'Raver', 24),
(855, 'Risod', 24),
(856, 'Sailu', 24),
(857, 'Sangamner', 24),
(858, 'Sangli', 24),
(859, 'Sangole', 24),
(860, 'Sasvad', 24),
(861, 'Satana', 24),
(862, 'Satara', 24),
(863, 'Savner', 24),
(864, 'Sawantwadi', 24),
(865, 'Shahade', 24),
(866, 'Shegaon', 24),
(867, 'Shendurjana', 24),
(868, 'Shirdi', 24),
(869, 'Shirpur-Warwade', 24),
(870, 'Shirur', 24),
(871, 'Shrigonda', 24),
(872, 'Shrirampur', 24),
(873, 'Sillod', 24),
(874, 'Sinnar', 24),
(875, 'Solapur', 24),
(876, 'Soyagaon', 24),
(877, 'Talegaon Dabhade', 24),
(878, 'Talode', 24),
(879, 'Tasgaon', 24),
(880, 'Tirora', 24),
(881, 'Tuljapur', 24),
(882, 'Tumsar', 24),
(883, 'Uran', 24),
(884, 'Uran Islampur', 24),
(885, 'Wadgaon Road', 24),
(886, 'Wai', 24),
(887, 'Wani', 24),
(888, 'Wardha', 24),
(889, 'Warora', 24),
(890, 'Warud', 24),
(891, 'Washim', 24),
(892, 'Yevla', 24),
(893, 'Uchgaon', 24),
(894, 'Udgir', 24),
(895, 'Umarga', 24),
(896, 'Umarkhed', 24),
(897, 'Umred', 24),
(898, 'Vadgaon Kasba', 24),
(899, 'Vaijapur', 24),
(900, 'Vasai', 24),
(901, 'Virar', 24),
(902, 'Vita', 24),
(903, 'Yavatmal', 24),
(904, 'Yawal', 24),
(905, 'Imphal', 26),
(906, 'Kakching', 26),
(907, 'Lilong', 26),
(908, 'Mayang Imphal', 26),
(909, 'Thoubal', 26),
(910, 'Jowai', 27),
(911, 'Nongstoin', 27),
(912, 'Shillong', 27),
(913, 'Tura', 27),
(914, 'Aizawl', 28),
(915, 'Champhai', 28),
(916, 'Lunglei', 28),
(917, 'Saiha', 28),
(918, 'Dimapur', 29),
(919, 'Kohima', 29),
(920, 'Mokokchung', 29),
(921, 'Tuensang', 29),
(922, 'Wokha', 29),
(923, 'Zunheboto', 29),
(924, 'Anandapur', 30),
(925, 'Anugul', 30),
(926, 'Asika', 30),
(927, 'Balangir', 30),
(928, 'Balasore', 30),
(929, 'Baleshwar', 30),
(930, 'Bamra', 30),
(931, 'Barbil', 30),
(932, 'Bargarh', 30),
(933, 'Bargarh', 30),
(934, 'Baripada', 30),
(935, 'Basudebpur', 30),
(936, 'Belpahar', 30),
(937, 'Bhadrak', 30),
(938, 'Bhawanipatna', 30),
(939, 'Bhuban', 30),
(940, 'Bhubaneswar', 30),
(941, 'Biramitrapur', 30),
(942, 'Brahmapur', 30),
(943, 'Brajrajnagar', 30),
(944, 'Byasanagar', 30),
(945, 'Cuttack', 30),
(946, 'Debagarh', 30),
(947, 'Dhenkanal', 30),
(948, 'Gunupur', 30),
(949, 'Hinjilicut', 30),
(950, 'Jagatsinghapur', 30),
(951, 'Jajapur', 30),
(952, 'Jaleswar', 30),
(953, 'Jatani', 30),
(954, 'Jeypur', 30),
(955, 'Jharsuguda', 30),
(956, 'Joda', 30),
(957, 'Kantabanji', 30),
(958, 'Karanjia', 30),
(959, 'Kendrapara', 30),
(960, 'Kendujhar', 30),
(961, 'Khordha', 30),
(962, 'Koraput', 30),
(963, 'Malkangiri', 30),
(964, 'Nabarangapur', 30),
(965, 'Paradip', 30),
(966, 'Parlakhemundi', 30),
(967, 'Pattamundai', 30),
(968, 'Phulabani', 30),
(969, 'Puri', 30),
(970, 'Rairangpur', 30),
(971, 'Rajagangapur', 30),
(972, 'Raurkela', 30),
(973, 'Rayagada', 30),
(974, 'Sambalpur', 30),
(975, 'Soro', 30),
(976, 'Sunabeda', 30),
(977, 'Sundargarh', 30),
(978, 'Talcher', 30),
(979, 'Titlagarh', 30),
(980, 'Umarkote', 30),
(981, 'Karaikal', 31),
(982, 'Mahe', 31),
(983, 'Pondicherry', 31),
(984, 'Yanam', 31),
(985, 'Ahmedgarh', 32),
(986, 'Amritsar', 32),
(987, 'Barnala', 32),
(988, 'Batala', 32),
(989, 'Bathinda', 32),
(990, 'Bhagha Purana', 32),
(991, 'Budhlada', 32),
(992, 'Chandigarh', 32),
(993, 'Dasua', 32),
(994, 'Dhuri', 32),
(995, 'Dinanagar', 32),
(996, 'Faridkot', 32),
(997, 'Fazilka', 32),
(998, 'Firozpur', 32),
(999, 'Firozpur Cantt.', 32),
(1000, 'Giddarbaha', 32),
(1001, 'Gobindgarh', 32),
(1002, 'Gurdaspur', 32),
(1003, 'Hoshiarpur', 32),
(1004, 'Jagraon', 32),
(1005, 'Jaitu', 32),
(1006, 'Jalalabad', 32),
(1007, 'Jalandhar', 32),
(1008, 'Jalandhar Cantt.', 32),
(1009, 'Jandiala', 32),
(1010, 'Kapurthala', 32),
(1011, 'Karoran', 32),
(1012, 'Kartarpur', 32),
(1013, 'Khanna', 32),
(1014, 'Kharar', 32),
(1015, 'Kot Kapura', 32),
(1016, 'Kurali', 32),
(1017, 'Longowal', 32),
(1018, 'Ludhiana', 32),
(1019, 'Malerkotla', 32),
(1020, 'Malout', 32),
(1021, 'Mansa', 32),
(1022, 'Maur', 32),
(1023, 'Moga', 32),
(1024, 'Mohali', 32),
(1025, 'Morinda', 32),
(1026, 'Mukerian', 32),
(1027, 'Muktsar', 32),
(1028, 'Nabha', 32),
(1029, 'Nakodar', 32),
(1030, 'Nangal', 32),
(1031, 'Nawanshahr', 32),
(1032, 'Pathankot', 32),
(1033, 'Patiala', 32),
(1034, 'Patran', 32),
(1035, 'Patti', 32),
(1036, 'Phagwara', 32),
(1037, 'Phillaur', 32),
(1038, 'Qadian', 32),
(1039, 'Raikot', 32),
(1040, 'Rajpura', 32),
(1041, 'Rampura Phul', 32),
(1042, 'Rupnagar', 32),
(1043, 'Samana', 32),
(1044, 'Sangrur', 32),
(1045, 'Sirhind Fatehgarh Sahib', 32),
(1046, 'Sujanpur', 32),
(1047, 'Sunam', 32),
(1048, 'Talwara', 32),
(1049, 'Tarn Taran', 32),
(1050, 'Urmar Tanda', 32),
(1051, 'Zira', 32),
(1052, 'Zirakpur', 32),
(1053, 'Bali', 34),
(1054, 'Banswara', 34),
(1055, 'Ajmer', 34),
(1056, 'Alwar', 34),
(1057, 'Bandikui', 34),
(1058, 'Baran', 34),
(1059, 'Barmer', 34),
(1060, 'Bikaner', 34),
(1061, 'Fatehpur', 34),
(1062, 'Jaipur', 34),
(1063, 'Jaisalmer', 34),
(1064, 'Jodhpur', 34),
(1065, 'Kota', 34),
(1066, 'Lachhmangarh', 34),
(1067, 'Ladnu', 34),
(1068, 'Lakheri', 34),
(1069, 'Lalsot', 34),
(1070, 'Losal', 34),
(1071, 'Makrana', 34),
(1072, 'Malpura', 34),
(1073, 'Mandalgarh', 34),
(1074, 'Mandawa', 34),
(1075, 'Mangrol', 34),
(1076, 'Merta City', 34),
(1077, 'Mount Abu', 34),
(1078, 'Nadbai', 34),
(1079, 'Nagar', 34),
(1080, 'Nagaur', 34),
(1081, 'Nargund', 34),
(1082, 'Nasirabad', 34),
(1083, 'Nathdwara', 34),
(1084, 'Navalgund', 34),
(1085, 'Nawalgarh', 34),
(1086, 'Neem-Ka-Thana', 34),
(1087, 'Nelamangala', 34),
(1088, 'Nimbahera', 34),
(1089, 'Nipani', 34),
(1090, 'Niwai', 34),
(1091, 'Nohar', 34),
(1092, 'Nokha', 34),
(1093, 'Pali', 34),
(1094, 'Phalodi', 34),
(1095, 'Phulera', 34),
(1096, 'Pilani', 34),
(1097, 'Pilibanga', 34),
(1098, 'Pindwara', 34),
(1099, 'Pipar City', 34),
(1100, 'Prantij', 34),
(1101, 'Pratapgarh', 34),
(1102, 'Raisinghnagar', 34),
(1103, 'Rajakhera', 34),
(1104, 'Rajaldesar', 34),
(1105, 'Rajgarh (Alwar)', 34),
(1106, 'Rajgarh (Churu', 34),
(1107, 'Rajsamand', 34),
(1108, 'Ramganj Mandi', 34),
(1109, 'Ramngarh', 34),
(1110, 'Ratangarh', 34),
(1111, 'Rawatbhata', 34),
(1112, 'Rawatsar', 34),
(1113, 'Reengus', 34),
(1114, 'Sadri', 34),
(1115, 'Sadulshahar', 34),
(1116, 'Sagwara', 34),
(1117, 'Sambhar', 34),
(1118, 'Sanchore', 34),
(1119, 'Sangaria', 34),
(1120, 'Sardarshahar', 34),
(1121, 'Sawai Madhopur', 34),
(1122, 'Shahpura', 34),
(1123, 'Shahpura', 34),
(1124, 'Sheoganj', 34),
(1125, 'Sikar', 34),
(1126, 'Sirohi', 34),
(1127, 'Sojat', 34),
(1128, 'Sri Madhopur', 34),
(1129, 'Sujangarh', 34),
(1130, 'Sumerpur', 34),
(1131, 'Suratgarh', 34),
(1132, 'Taranagar', 34),
(1133, 'Todabhim', 34),
(1134, 'Todaraisingh', 34),
(1135, 'Tonk', 34),
(1136, 'Udaipur', 34),
(1137, 'Udaipurwati', 34),
(1138, 'Vijainagar', 34),
(1139, 'Gangtok', 35),
(1140, 'Calcutta', 42),
(1141, 'Arakkonam', 36),
(1142, 'Arcot', 36),
(1143, 'Aruppukkottai', 36),
(1144, 'Bhavani', 36),
(1145, 'Chengalpattu', 36),
(1146, 'Chennai', 36),
(1147, 'Chinna salem', 36),
(1148, 'Coimbatore', 36),
(1149, 'Coonoor', 36),
(1150, 'Cuddalore', 36),
(1151, 'Dharmapuri', 36),
(1152, 'Dindigul', 36),
(1153, 'Erode', 36),
(1154, 'Gudalur', 36),
(1155, 'Gudalur', 36),
(1156, 'Gudalur', 36),
(1157, 'Kanchipuram', 36),
(1158, 'Karaikudi', 36),
(1159, 'Karungal', 36),
(1160, 'Karur', 36),
(1161, 'Kollankodu', 36),
(1162, 'Lalgudi', 36),
(1163, 'Madurai', 36),
(1164, 'Nagapattinam', 36),
(1165, 'Nagercoil', 36),
(1166, 'Namagiripettai', 36),
(1167, 'Namakkal', 36),
(1168, 'Nandivaram-Guduvancheri', 36),
(1169, 'Nanjikottai', 36),
(1170, 'Natham', 36),
(1171, 'Nellikuppam', 36),
(1172, 'Neyveli', 36),
(1173, 'O\' Valley', 36),
(1174, 'Oddanchatram', 36),
(1175, 'P.N.Patti', 36),
(1176, 'Pacode', 36),
(1177, 'Padmanabhapuram', 36),
(1178, 'Palani', 36),
(1179, 'Palladam', 36),
(1180, 'Pallapatti', 36),
(1181, 'Pallikonda', 36),
(1182, 'Panagudi', 36),
(1183, 'Panruti', 36),
(1184, 'Paramakudi', 36),
(1185, 'Parangipettai', 36),
(1186, 'Pattukkottai', 36),
(1187, 'Perambalur', 36),
(1188, 'Peravurani', 36),
(1189, 'Periyakulam', 36),
(1190, 'Periyasemur', 36),
(1191, 'Pernampattu', 36),
(1192, 'Pollachi', 36),
(1193, 'Polur', 36),
(1194, 'Ponneri', 36),
(1195, 'Pudukkottai', 36),
(1196, 'Pudupattinam', 36),
(1197, 'Puliyankudi', 36),
(1198, 'Punjaipugalur', 36),
(1199, 'Rajapalayam', 36),
(1200, 'Ramanathapuram', 36),
(1201, 'Rameshwaram', 36),
(1202, 'Rasipuram', 36),
(1203, 'Salem', 36),
(1204, 'Sankarankoil', 36),
(1205, 'Sankari', 36),
(1206, 'Sathyamangalam', 36),
(1207, 'Sattur', 36),
(1208, 'Shenkottai', 36),
(1209, 'Sholavandan', 36),
(1210, 'Sholingur', 36),
(1211, 'Sirkali', 36),
(1212, 'Sivaganga', 36),
(1213, 'Sivagiri', 36),
(1214, 'Sivakasi', 36),
(1215, 'Srivilliputhur', 36),
(1216, 'Surandai', 36),
(1217, 'Suriyampalayam', 36),
(1218, 'Tenkasi', 36),
(1219, 'Thammampatti', 36),
(1220, 'Thanjavur', 36),
(1221, 'Tharamangalam', 36),
(1222, 'Tharangambadi', 36),
(1223, 'Theni Allinagaram', 36),
(1224, 'Thirumangalam', 36),
(1225, 'Thirunindravur', 36),
(1226, 'Thiruparappu', 36),
(1227, 'Thirupuvanam', 36),
(1228, 'Thiruthuraipoondi', 36),
(1229, 'Thiruvallur', 36),
(1230, 'Thiruvarur', 36),
(1231, 'Thoothukudi', 36),
(1232, 'Thuraiyur', 36),
(1233, 'Tindivanam', 36),
(1234, 'Tiruchendur', 36),
(1235, 'Tiruchengode', 36),
(1236, 'Tiruchirappalli', 36),
(1237, 'Tirukalukundram', 36),
(1238, 'Tirukkoyilur', 36),
(1239, 'Tirunelveli', 36),
(1240, 'Tirupathur', 36),
(1241, 'Tirupathur', 36),
(1242, 'Tiruppur', 36),
(1243, 'Tiruttani', 36),
(1244, 'Tiruvannamalai', 36),
(1245, 'Tiruvethipuram', 36),
(1246, 'Tittakudi', 36),
(1247, 'Udhagamandalam', 36),
(1248, 'Udumalaipettai', 36),
(1249, 'Unnamalaikadai', 36),
(1250, 'Usilampatti', 36),
(1251, 'Uthamapalayam', 36),
(1252, 'Uthiramerur', 36),
(1253, 'Vadakkuvalliyur', 36),
(1254, 'Vadalur', 36),
(1255, 'Vadipatti', 36),
(1256, 'Valparai', 36),
(1257, 'Vandavasi', 36),
(1258, 'Vaniyambadi', 36),
(1259, 'Vedaranyam', 36),
(1260, 'Vellakoil', 36),
(1261, 'Vellore', 36),
(1262, 'Vikramasingapuram', 36),
(1263, 'Viluppuram', 36),
(1264, 'Virudhachalam', 36),
(1265, 'Virudhunagar', 36),
(1266, 'Viswanatham', 36),
(1267, 'Agartala', 37),
(1268, 'Badharghat', 37),
(1269, 'Dharmanagar', 37),
(1270, 'Indranagar', 37),
(1271, 'Jogendranagar', 37),
(1272, 'Kailasahar', 37),
(1273, 'Khowai', 37),
(1274, 'Pratapgarh', 37),
(1275, 'Udaipur', 37),
(1276, 'Achhnera', 39),
(1277, 'Adari', 39),
(1278, 'Agra', 39),
(1279, 'Aligarh', 39),
(1280, 'Allahabad', 39),
(1281, 'Amroha', 39),
(1282, 'Azamgarh', 39),
(1283, 'Bahraich', 39),
(1284, 'Ballia', 39),
(1285, 'Balrampur', 39),
(1286, 'Banda', 39),
(1287, 'Bareilly', 39),
(1288, 'Chandausi', 39),
(1289, 'Dadri', 39),
(1290, 'Deoria', 39),
(1291, 'Etawah', 39),
(1292, 'Fatehabad', 39),
(1293, 'Fatehpur', 39),
(1294, 'Fatehpur', 39),
(1295, 'Greater Noida', 39),
(1296, 'Hamirpur', 39),
(1297, 'Hardoi', 39),
(1298, 'Jajmau', 39),
(1299, 'Jaunpur', 39),
(1300, 'Jhansi', 39),
(1301, 'Kalpi', 39),
(1302, 'Kanpur', 39),
(1303, 'Kota', 39),
(1304, 'Laharpur', 39),
(1305, 'Lakhimpur', 39),
(1306, 'Lal Gopalganj Nindaura', 39),
(1307, 'Lalganj', 39),
(1308, 'Lalitpur', 39),
(1309, 'Lar', 39),
(1310, 'Loni', 39),
(1311, 'Lucknow', 39),
(1312, 'Mathura', 39),
(1313, 'Meerut', 39),
(1314, 'Modinagar', 39),
(1315, 'Muradnagar', 39),
(1316, 'Nagina', 39),
(1317, 'Najibabad', 39),
(1318, 'Nakur', 39),
(1319, 'Nanpara', 39),
(1320, 'Naraura', 39),
(1321, 'Naugawan Sadat', 39),
(1322, 'Nautanwa', 39),
(1323, 'Nawabganj', 39),
(1324, 'Nehtaur', 39),
(1325, 'NOIDA', 39),
(1326, 'Noorpur', 39),
(1327, 'Obra', 39),
(1328, 'Orai', 39),
(1329, 'Padrauna', 39),
(1330, 'Palia Kalan', 39),
(1331, 'Parasi', 39),
(1332, 'Phulpur', 39),
(1333, 'Pihani', 39),
(1334, 'Pilibhit', 39),
(1335, 'Pilkhuwa', 39),
(1336, 'Powayan', 39),
(1337, 'Pukhrayan', 39),
(1338, 'Puranpur', 39),
(1339, 'Purquazi', 39),
(1340, 'Purwa', 39),
(1341, 'Rae Bareli', 39),
(1342, 'Rampur', 39),
(1343, 'Rampur Maniharan', 39),
(1344, 'Rasra', 39),
(1345, 'Rath', 39),
(1346, 'Renukoot', 39),
(1347, 'Reoti', 39),
(1348, 'Robertsganj', 39),
(1349, 'Rudauli', 39),
(1350, 'Rudrapur', 39),
(1351, 'Sadabad', 39),
(1352, 'Safipur', 39),
(1353, 'Saharanpur', 39),
(1354, 'Sahaspur', 39),
(1355, 'Sahaswan', 39),
(1356, 'Sahawar', 39),
(1357, 'Sahjanwa', 39),
(1358, 'Saidpur, Ghazipur', 39),
(1359, 'Sambhal', 39),
(1360, 'Samdhan', 39),
(1361, 'Samthar', 39),
(1362, 'Sandi', 39),
(1363, 'Sandila', 39),
(1364, 'Sardhana', 39),
(1365, 'Seohara', 39),
(1366, 'Shahabad, Hardoi', 39),
(1367, 'Shahabad, Rampur', 39),
(1368, 'Shahganj', 39),
(1369, 'Shahjahanpur', 39),
(1370, 'Shamli', 39),
(1371, 'Shamsabad, Agra', 39),
(1372, 'Shamsabad, Farrukhabad', 39),
(1373, 'Sherkot', 39),
(1374, 'Shikarpur, Bulandshahr', 39),
(1375, 'Shikohabad', 39),
(1376, 'Shishgarh', 39),
(1377, 'Siana', 39),
(1378, 'Sikanderpur', 39),
(1379, 'Sikandra Rao', 39),
(1380, 'Sikandrabad', 39),
(1381, 'Sirsaganj', 39),
(1382, 'Sirsi', 39),
(1383, 'Sitapur', 39),
(1384, 'Soron', 39),
(1385, 'Suar', 39),
(1386, 'Sultanpur', 39),
(1387, 'Sumerpur', 39),
(1388, 'Tanda', 39),
(1389, 'Tanda', 39),
(1390, 'Tetri Bazar', 39),
(1391, 'Thakurdwara', 39),
(1392, 'Thana Bhawan', 39),
(1393, 'Tilhar', 39),
(1394, 'Tirwaganj', 39),
(1395, 'Tulsipur', 39),
(1396, 'Tundla', 39),
(1397, 'Unnao', 39),
(1398, 'Utraula', 39),
(1399, 'Varanasi', 39),
(1400, 'Vrindavan', 39),
(1401, 'Warhapur', 39),
(1402, 'Zaidpur', 39),
(1403, 'Zamania', 39),
(1404, 'Almora', 40),
(1405, 'Bazpur', 40),
(1406, 'Chamba', 40),
(1407, 'Dehradun', 40),
(1408, 'Haldwani', 40),
(1409, 'Haridwar', 40),
(1410, 'Jaspur', 40),
(1411, 'Kashipur', 40),
(1412, 'kichha', 40),
(1413, 'Kotdwara', 40),
(1414, 'Manglaur', 40),
(1415, 'Mussoorie', 40),
(1416, 'Nagla', 40),
(1417, 'Nainital', 40),
(1418, 'Pauri', 40),
(1419, 'Pithoragarh', 40),
(1420, 'Ramnagar', 40),
(1421, 'Rishikesh', 40),
(1422, 'Roorkee', 40),
(1423, 'Rudrapur', 40),
(1424, 'Sitarganj', 40),
(1425, 'Tehri', 40),
(1426, 'Muzaffarnagar', 41),
(1427, 'Adra, Purulia', 42),
(1428, 'Alipurduar', 42),
(1429, 'Arambagh', 42),
(1430, 'Asansol', 42),
(1431, 'Baharampur', 42),
(1432, 'Bally', 42),
(1433, 'Balurghat', 42),
(1434, 'Bankura', 42),
(1435, 'Barakar', 42),
(1436, 'Barasat', 42),
(1437, 'Bardhaman', 42),
(1438, 'Bidhan Nagar', 42),
(1439, 'Chinsura', 42),
(1440, 'Contai', 42),
(1441, 'Cooch Behar', 42),
(1442, 'Darjeeling', 42),
(1443, 'Durgapur', 42),
(1444, 'Haldia', 42),
(1445, 'Howrah', 42),
(1446, 'Islampur', 42),
(1447, 'Jhargram', 42),
(1448, 'Kharagpur', 42),
(1449, 'Kolkata', 42),
(1450, 'Mainaguri', 42),
(1451, 'Mal', 42),
(1452, 'Mathabhanga', 42),
(1453, 'Medinipur', 42),
(1454, 'Memari', 42),
(1455, 'Monoharpur', 42),
(1456, 'Murshidabad', 42),
(1457, 'Nabadwip', 42),
(1458, 'Naihati', 42),
(1459, 'Panchla', 42),
(1460, 'Pandua', 42),
(1461, 'Paschim Punropara', 42),
(1462, 'Purulia', 42),
(1463, 'Raghunathpur', 42),
(1464, 'Raiganj', 42),
(1465, 'Rampurhat', 42),
(1466, 'Ranaghat', 42),
(1467, 'Sainthia', 42),
(1468, 'Santipur', 42),
(1469, 'Siliguri', 42),
(1470, 'Sonamukhi', 42),
(1471, 'Srirampore', 42),
(1472, 'Suri', 42),
(1473, 'Taki', 42),
(1474, 'Tamluk', 42),
(1475, 'Tarakeswar', 42),
(1476, 'Chikmagalur', 20),
(1477, 'Davanagere', 20),
(1478, 'Dharwad', 20),
(1479, 'Gadag', 20),
(1480, 'Chennai', 36),
(1481, 'Coimbatore', 36),
(1482, 'Barrackpur', 38),
(1483, 'Barwani', 38),
(1484, 'Basna', 38),
(1485, 'Bawal', 38),
(1486, 'Beawar', 38),
(1487, 'Berhampur', 38),
(1488, 'Bhajanpura', 38),
(1489, 'Bhandara', 38),
(1490, 'Bharatpur', 38),
(1491, 'Bharthana', 38),
(1492, 'Bhilai', 38),
(1493, 'Bhilwara', 38),
(1494, 'Bhinmal', 38),
(1495, 'Bhiwandi', 38),
(1496, 'Bhusawal', 38),
(1497, 'Bidar', 38),
(1498, 'Bijnaur', 38),
(1499, 'Bilara', 38),
(1500, 'Budaun', 38),
(1501, 'Bulandshahr', 38),
(1502, 'Burla', 38),
(1503, 'Chakeri', 38),
(1504, 'Champawat', 38),
(1505, 'Chandil', 38),
(1506, 'Chandrapur', 38),
(1507, 'Chapirevula', 38),
(1508, 'Charkhari', 38),
(1509, 'Charkhi Dadri', 38),
(1510, 'Chhindwara', 38),
(1511, 'Chiplun', 38),
(1512, 'Chitrakoot', 38),
(1513, 'Churu', 38),
(1514, 'Dalkhola', 38),
(1515, 'Damoh', 38),
(1516, 'Daund', 38),
(1517, 'Dehgam', 38),
(1518, 'Devgarh', 38),
(1519, 'Dhulian', 38),
(1520, 'Dumdum', 38),
(1521, 'Dwarka1', 38),
(1522, 'Etah', 38),
(1523, 'Faizabad', 38),
(1524, 'Falna', 38),
(1525, 'Farrukhabad', 38),
(1526, 'Fatehgarh', 38),
(1527, 'Fatehpur Chaurasi', 38),
(1528, 'Fatehpur Sikri', 38),
(1529, 'Firozabad', 38),
(1530, 'Gadchiroli', 38),
(1531, 'Gandhidham', 38),
(1532, 'Ganjam', 38),
(1533, 'Ghatampur', 38),
(1534, 'Ghatanji', 38),
(1535, 'Ghaziabad', 38),
(1536, 'Ghazipur', 38),
(1537, 'Goa Velha', 38),
(1538, 'Gokak', 38),
(1539, 'Gondiya', 38),
(1540, 'Gorakhpur', 38),
(1541, 'Guna', 38),
(1542, 'Hanumangarh', 38),
(1543, 'Harda', 38),
(1544, 'Harsawa', 38),
(1545, 'Hastinapur', 38),
(1546, 'Hathras', 38),
(1547, 'Jagadhri', 38),
(1548, 'Jais', 38),
(1549, 'Jaitaran', 38),
(1550, 'Jalgaon', 38),
(1551, 'Jalore', 38),
(1552, 'Jhabua', 38),
(1553, 'Jhalawar', 38),
(1554, 'Jhunjhunu', 38),
(1555, 'Junnar', 38),
(1556, 'Kailaras', 38),
(1557, 'Kalburgi', 38),
(1558, 'Kalimpong', 38),
(1559, 'Kamthi', 38),
(1560, 'Kanpur', 38),
(1561, 'Karad', 38),
(1562, 'Keylong', 38),
(1563, 'Kheri', 38),
(1564, 'Khurai', 38),
(1565, 'Kodad', 38),
(1566, 'Konnagar', 38),
(1567, 'Krishnanagar', 38),
(1568, 'Kuchinda', 38),
(1569, 'Madhyamgram', 38),
(1570, 'Mahabaleswar', 38),
(1571, 'Mahoba', 38),
(1572, 'Mahwa', 38),
(1573, 'Manesar', 38),
(1574, 'Mangalagiri', 38),
(1575, 'Mira-Bhayandar', 38),
(1576, 'Mirzapur', 38),
(1577, 'Mithapur', 38),
(1578, 'Mohania', 38),
(1579, 'Mokama', 38),
(1580, 'Moradabad', 38),
(1581, 'Mukatsar', 38),
(1582, 'Nagalapuram', 38),
(1, 'Kolhapur', 24),
(2, 'Port Blair', 1),
(3, 'Adilabad', 2),
(4, 'Adoni', 2),
(5, 'Amadalavalasa', 2),
(6, 'Amalapuram', 2),
(7, 'Anakapalle', 2),
(8, 'Anantapur', 2),
(9, 'Badepalle', 2),
(10, 'Banganapalle', 2),
(11, 'Bapatla', 2),
(12, 'Bellampalle', 2),
(13, 'Bethamcherla', 2),
(14, 'Bhadrachalam', 2),
(15, 'Bhainsa', 2),
(16, 'Bheemunipatnam', 2),
(17, 'Bhimavaram', 2),
(18, 'Bhongir', 2),
(19, 'Bobbili', 2),
(20, 'Bodhan', 2),
(21, 'Chilakaluripet', 2),
(22, 'Chirala', 2),
(23, 'Chittoor', 2),
(24, 'Cuddapah', 2),
(25, 'Devarakonda', 2),
(26, 'Dharmavaram', 2),
(27, 'Eluru', 2),
(28, 'Farooqnagar', 2),
(29, 'Gadwal', 2),
(30, 'Gooty', 2),
(31, 'Gudivada', 2),
(32, 'Gudur', 2),
(33, 'Guntakal', 2),
(34, 'Guntur', 2),
(35, 'Hanuman Junction', 2),
(36, 'Hindupur', 2),
(37, 'Hyderabad', 2),
(38, 'Ichchapuram', 2),
(39, 'Jaggaiahpet', 2),
(40, 'Jagtial', 2),
(41, 'Jammalamadugu', 2),
(42, 'Jangaon', 2),
(43, 'Kadapa', 2),
(44, 'Kadiri', 2),
(45, 'Kagaznagar', 2),
(46, 'Kakinada', 2),
(47, 'Kalyandurg', 2),
(48, 'Kamareddy', 2),
(49, 'Kandukur', 2),
(50, 'Karimnagar', 2),
(51, 'Kavali', 2),
(52, 'Khammam', 2),
(53, 'Koratla', 2),
(54, 'Kothagudem', 2),
(55, 'Kothapeta', 2),
(56, 'Kovvur', 2),
(57, 'Kurnool', 2),
(58, 'Kyathampalle', 2),
(59, 'Macherla', 2),
(60, 'Machilipatnam', 2),
(61, 'Madanapalle', 2),
(62, 'Mahbubnagar', 2),
(63, 'Mancherial', 2),
(64, 'Mandamarri', 2),
(65, 'Mandapeta', 2),
(66, 'Manuguru', 2),
(67, 'Markapur', 2),
(68, 'Medak', 2),
(69, 'Miryalaguda', 2),
(70, 'Mogalthur', 2),
(71, 'Nagari', 2),
(72, 'Nagarkurnool', 2),
(73, 'Nandyal', 2),
(74, 'Narasapur', 2),
(75, 'Narasaraopet', 2),
(76, 'Narayanpet', 2),
(77, 'Narsipatnam', 2),
(78, 'Nellore', 2),
(79, 'Nidadavole', 2),
(80, 'Nirmal', 2),
(81, 'Nizamabad', 2),
(82, 'Nuzvid', 2),
(83, 'Ongole', 2),
(84, 'Palacole', 2),
(85, 'Palasa Kasibugga', 2),
(86, 'Palwancha', 2),
(87, 'Parvathipuram', 2),
(88, 'Pedana', 2),
(89, 'Peddapuram', 2),
(90, 'Pithapuram', 2),
(91, 'Pondur', 2),
(92, 'Ponnur', 2),
(93, 'Proddatur', 2),
(94, 'Punganur', 2),
(95, 'Puttur', 2),
(96, 'Rajahmundry', 2),
(97, 'Rajam', 2),
(98, 'Ramachandrapuram', 2),
(99, 'Ramagundam', 2),
(100, 'Rayachoti', 2),
(101, 'Rayadurg', 2),
(102, 'Renigunta', 2),
(103, 'Repalle', 2),
(104, 'Sadasivpet', 2),
(105, 'Salur', 2),
(106, 'Samalkot', 2),
(107, 'Sangareddy', 2),
(108, 'Sattenapalle', 2),
(109, 'Siddipet', 2),
(110, 'Singapur', 2),
(111, 'Sircilla', 2),
(112, 'Srikakulam', 2),
(113, 'Srikalahasti', 2),
(114, 'Suryapet', 2),
(115, 'Tadepalligudem', 2),
(116, 'Tadpatri', 2),
(117, 'Tandur', 2),
(118, 'Tanuku', 2),
(119, 'Tenali', 2),
(120, 'Tirupati', 2),
(121, 'Tuni', 2),
(122, 'Uravakonda', 2),
(123, 'Venkatagiri', 2),
(124, 'Vicarabad', 2),
(125, 'Vijayawada', 2),
(126, 'Vinukonda', 2),
(127, 'Visakhapatnam', 2),
(128, 'Vizianagaram', 2),
(129, 'Wanaparthy', 2),
(130, 'Warangal', 2),
(131, 'Yellandu', 2),
(132, 'Yemmiganur', 2),
(133, 'Yerraguntla', 2),
(134, 'Zahirabad', 2),
(135, 'Rajampet', 2),
(136, 'Along', 4),
(137, 'Bomdila', 4),
(138, 'Itanagar', 4),
(139, 'Naharlagun', 4),
(140, 'Pasighat', 4),
(141, 'Abhayapuri', 5),
(142, 'Amguri', 5),
(143, 'Anandnagaar', 5),
(144, 'Barpeta', 5),
(145, 'Barpeta Road', 5),
(146, 'Bilasipara', 5),
(147, 'Bongaigaon', 5),
(148, 'Dhekiajuli', 5),
(149, 'Dhubri', 5),
(150, 'Dibrugarh', 5),
(151, 'Digboi', 5),
(152, 'Diphu', 5),
(153, 'Dispur', 5),
(154, 'Gauripur', 5),
(155, 'Goalpara', 5),
(156, 'Golaghat', 5),
(157, 'Guwahati', 5),
(158, 'Haflong', 5),
(159, 'Hailakandi', 5),
(160, 'Hojai', 5),
(161, 'Jorhat', 5),
(162, 'Karimganj', 5),
(163, 'Kokrajhar', 5),
(164, 'Lanka', 5),
(165, 'Lumding', 5),
(166, 'Mangaldoi', 5),
(167, 'Mankachar', 5),
(168, 'Margherita', 5),
(169, 'Mariani', 5),
(170, 'Marigaon', 5),
(171, 'Nagaon', 5),
(172, 'Nalbari', 5),
(173, 'North Lakhimpur', 5),
(174, 'Rangia', 5),
(175, 'Sibsagar', 5),
(176, 'Silapathar', 5),
(177, 'Silchar', 5),
(178, 'Tezpur', 5),
(179, 'Tinsukia', 5),
(180, 'Amarpur', 6),
(181, 'Araria', 6),
(182, 'Areraj', 6),
(183, 'Arrah', 6),
(184, 'Asarganj', 6),
(185, 'Aurangabad', 6),
(186, 'Bagaha', 6),
(187, 'Bahadurganj', 6),
(188, 'Bairgania', 6),
(189, 'Bakhtiarpur', 6),
(190, 'Banka', 6),
(191, 'Banmankhi Bazar', 6),
(192, 'Barahiya', 6),
(193, 'Barauli', 6),
(194, 'Barbigha', 6),
(195, 'Barh', 6),
(196, 'Begusarai', 6),
(197, 'Behea', 6),
(198, 'Bettiah', 6),
(199, 'Bhabua', 6),
(200, 'Bhagalpur', 6),
(201, 'Bihar Sharif', 6),
(202, 'Bikramganj', 6),
(203, 'Bodh Gaya', 6),
(204, 'Buxar', 6),
(205, 'Chandan Bara', 6),
(206, 'Chanpatia', 6),
(207, 'Chhapra', 6),
(208, 'Colgong', 6),
(209, 'Dalsinghsarai', 6),
(210, 'Darbhanga', 6),
(211, 'Daudnagar', 6),
(212, 'Dehri-on-Sone', 6),
(213, 'Dhaka', 6),
(214, 'Dighwara', 6),
(215, 'Dumraon', 6),
(216, 'Fatwah', 6),
(217, 'Forbesganj', 6),
(218, 'Gaya', 6),
(219, 'Gogri Jamalpur', 6),
(220, 'Gopalganj', 6),
(221, 'Hajipur', 6),
(222, 'Hilsa', 6),
(223, 'Hisua', 6),
(224, 'Islampur', 6),
(225, 'Jagdispur', 6),
(226, 'Jamalpur', 6),
(227, 'Jamui', 6),
(228, 'Jehanabad', 6),
(229, 'Jhajha', 6),
(230, 'Jhanjharpur', 6),
(231, 'Jogabani', 6),
(232, 'Kanti', 6),
(233, 'Katihar', 6),
(234, 'Khagaria', 6),
(235, 'Kharagpur', 6),
(236, 'Kishanganj', 6),
(237, 'Lakhisarai', 6),
(238, 'Lalganj', 6),
(239, 'Madhepura', 6),
(240, 'Madhubani', 6),
(241, 'Maharajganj', 6),
(242, 'Mahnar Bazar', 6),
(243, 'Makhdumpur', 6),
(244, 'Maner', 6),
(245, 'Manihari', 6),
(246, 'Marhaura', 6),
(247, 'Masaurhi', 6),
(248, 'Mirganj', 6),
(249, 'Mokameh', 6),
(250, 'Motihari', 6),
(251, 'Motipur', 6),
(252, 'Munger', 6),
(253, 'Murliganj', 6),
(254, 'Muzaffarpur', 6),
(255, 'Narkatiaganj', 6),
(256, 'Naugachhia', 6),
(257, 'Nawada', 6),
(258, 'Nokha', 6),
(259, 'Patna', 6),
(260, 'Piro', 6),
(261, 'Purnia', 6),
(262, 'Rafiganj', 6),
(263, 'Rajgir', 6),
(264, 'Ramnagar', 6),
(265, 'Raxaul Bazar', 6),
(266, 'Revelganj', 6),
(267, 'Rosera', 6),
(268, 'Saharsa', 6),
(269, 'Samastipur', 6),
(270, 'Sasaram', 6),
(271, 'Sheikhpura', 6),
(272, 'Sheohar', 6),
(273, 'Sherghati', 6),
(274, 'Silao', 6),
(275, 'Sitamarhi', 6),
(276, 'Siwan', 6),
(277, 'Sonepur', 6),
(278, 'Sugauli', 6),
(279, 'Sultanganj', 6),
(280, 'Supaul', 6),
(281, 'Warisaliganj', 6),
(282, 'Ahiwara', 7),
(283, 'Akaltara', 7),
(284, 'Ambagarh Chowki', 7),
(285, 'Ambikapur', 7),
(286, 'Arang', 7),
(287, 'Bade Bacheli', 7),
(288, 'Balod', 7),
(289, 'Baloda Bazar', 7),
(290, 'Bemetra', 7),
(291, 'Bhatapara', 7),
(292, 'Bilaspur', 7),
(293, 'Birgaon', 7),
(294, 'Champa', 7),
(295, 'Chirmiri', 7),
(296, 'Dalli-Rajhara', 7),
(297, 'Dhamtari', 7),
(298, 'Dipka', 7),
(299, 'Dongargarh', 7),
(300, 'Durg-Bhilai Nagar', 7),
(301, 'Gobranawapara', 7),
(302, 'Jagdalpur', 7),
(303, 'Janjgir', 7),
(304, 'Jashpurnagar', 7),
(305, 'Kanker', 7),
(306, 'Kawardha', 7),
(307, 'Kondagaon', 7),
(308, 'Korba', 7),
(309, 'Mahasamund', 7),
(310, 'Mahendragarh', 7),
(311, 'Mungeli', 7),
(312, 'Naila Janjgir', 7),
(313, 'Raigarh', 7),
(314, 'Raipur', 7),
(315, 'Rajnandgaon', 7),
(316, 'Sakti', 7),
(317, 'Tilda Newra', 7),
(318, 'Amli', 8),
(319, 'Silvassa', 8),
(320, 'Daman and Diu', 9),
(321, 'Daman and Diu', 9),
(322, 'Asola', 10),
(323, 'Delhi', 10),
(324, 'Aldona', 11),
(325, 'Curchorem Cacora', 11),
(326, 'Madgaon', 11),
(327, 'Mapusa', 11),
(328, 'Margao', 11),
(329, 'Marmagao', 11),
(330, 'Panaji', 11),
(331, 'Ahmedabad', 12),
(332, 'Amreli', 12),
(333, 'Anand', 12),
(334, 'Ankleshwar', 12),
(335, 'Bharuch', 12),
(336, 'Bhavnagar', 12),
(337, 'Bhuj', 12),
(338, 'Cambay', 12),
(339, 'Dahod', 12),
(340, 'Deesa', 12),
(341, 'Dharampur, India', 12),
(342, 'Dholka', 12),
(343, 'Gandhinagar', 12),
(344, 'Godhra', 12),
(345, 'Himatnagar', 12),
(346, 'Idar', 12),
(347, 'Jamnagar', 12),
(348, 'Junagadh', 12),
(349, 'Kadi', 12),
(350, 'Kalavad', 12),
(351, 'Kalol', 12),
(352, 'Kapadvanj', 12),
(353, 'Karjan', 12),
(354, 'Keshod', 12),
(355, 'Khambhalia', 12),
(356, 'Khambhat', 12),
(357, 'Kheda', 12),
(358, 'Khedbrahma', 12),
(359, 'Kheralu', 12),
(360, 'Kodinar', 12),
(361, 'Lathi', 12),
(362, 'Limbdi', 12),
(363, 'Lunawada', 12),
(364, 'Mahesana', 12),
(365, 'Mahuva', 12),
(366, 'Manavadar', 12),
(367, 'Mandvi', 12),
(368, 'Mangrol', 12),
(369, 'Mansa', 12),
(370, 'Mehmedabad', 12),
(371, 'Modasa', 12),
(372, 'Morvi', 12),
(373, 'Nadiad', 12),
(374, 'Navsari', 12),
(375, 'Padra', 12),
(376, 'Palanpur', 12),
(377, 'Palitana', 12),
(378, 'Pardi', 12),
(379, 'Patan', 12),
(380, 'Petlad', 12),
(381, 'Porbandar', 12),
(382, 'Radhanpur', 12),
(383, 'Rajkot', 12),
(384, 'Rajpipla', 12),
(385, 'Rajula', 12),
(386, 'Ranavav', 12),
(387, 'Rapar', 12),
(388, 'Salaya', 12),
(389, 'Sanand', 12),
(390, 'Savarkundla', 12),
(391, 'Sidhpur', 12),
(392, 'Sihor', 12),
(393, 'Songadh', 12),
(394, 'Surat', 12),
(395, 'Talaja', 12),
(396, 'Thangadh', 12),
(397, 'Tharad', 12),
(398, 'Umbergaon', 12),
(399, 'Umreth', 12),
(400, 'Una', 12),
(401, 'Unjha', 12),
(402, 'Upleta', 12),
(403, 'Vadnagar', 12),
(404, 'Vadodara', 12),
(405, 'Valsad', 12),
(406, 'Vapi', 12),
(407, 'Vapi', 12),
(408, 'Veraval', 12),
(409, 'Vijapur', 12),
(410, 'Viramgam', 12),
(411, 'Visnagar', 12),
(412, 'Vyara', 12),
(413, 'Wadhwan', 12),
(414, 'Wankaner', 12),
(415, 'Adalaj', 12),
(416, 'Adityana', 12),
(417, 'Alang', 12),
(418, 'Ambaji', 12),
(419, 'Ambaliyasan', 12),
(420, 'Andada', 12),
(421, 'Anjar', 12),
(422, 'Anklav', 12),
(423, 'Antaliya', 12),
(424, 'Arambhada', 12),
(425, 'Atul', 12),
(426, 'Ballabhgarh', 15),
(427, 'Ambala', 15),
(428, 'Ambala', 15),
(429, 'Asankhurd', 15),
(430, 'Assandh', 15),
(431, 'Ateli', 15),
(432, 'Babiyal', 15),
(433, 'Bahadurgarh', 15),
(434, 'Barwala', 15),
(435, 'Bhiwani', 15),
(436, 'Charkhi Dadri', 15),
(437, 'Cheeka', 15),
(438, 'Ellenabad 2', 15),
(439, 'Faridabad', 15),
(440, 'Fatehabad', 15),
(441, 'Ganaur', 15),
(442, 'Gharaunda', 15),
(443, 'Gohana', 15),
(444, 'Gurgaon', 15),
(445, 'Haibat(Yamuna Nagar)', 15),
(446, 'Hansi', 15),
(447, 'Hisar', 15),
(448, 'Hodal', 15),
(449, 'Jhajjar', 15),
(450, 'Jind', 15),
(451, 'Kaithal', 15),
(452, 'Kalan Wali', 15),
(453, 'Kalka', 15),
(454, 'Karnal', 15),
(455, 'Ladwa', 15),
(456, 'Mahendragarh', 15),
(457, 'Mandi Dabwali', 15),
(458, 'Narnaul', 15),
(459, 'Narwana', 15),
(460, 'Palwal', 15),
(461, 'Panchkula', 15),
(462, 'Panipat', 15),
(463, 'Pehowa', 15),
(464, 'Pinjore', 15),
(465, 'Rania', 15),
(466, 'Ratia', 15),
(467, 'Rewari', 15),
(468, 'Rohtak', 15),
(469, 'Safidon', 15),
(470, 'Samalkha', 15),
(471, 'Shahbad', 15),
(472, 'Sirsa', 15),
(473, 'Sohna', 15),
(474, 'Sonipat', 15),
(475, 'Taraori', 15),
(476, 'Thanesar', 15),
(477, 'Tohana', 15),
(478, 'Yamunanagar', 15),
(479, 'Arki', 16),
(480, 'Baddi', 16),
(481, 'Bilaspur', 16),
(482, 'Chamba', 16),
(483, 'Dalhousie', 16),
(484, 'Dharamsala', 16),
(485, 'Hamirpur', 16),
(486, 'Mandi', 16),
(487, 'Nahan', 16),
(488, 'Shimla', 16),
(489, 'Solan', 16),
(490, 'Sundarnagar', 16),
(491, 'Jammu', 18),
(492, 'Achabbal', 18),
(493, 'Akhnoor', 18),
(494, 'Anantnag', 18),
(495, 'Arnia', 18),
(496, 'Awantipora', 18),
(497, 'Bandipore', 18),
(498, 'Baramula', 18),
(499, 'Kathua', 18),
(500, 'Leh', 18),
(501, 'Punch', 18),
(502, 'Rajauri', 18),
(503, 'Sopore', 18),
(504, 'Srinagar', 18),
(505, 'Udhampur', 18),
(506, 'Amlabad', 19),
(507, 'Ara', 19),
(508, 'Barughutu', 19),
(509, 'Bokaro Steel City', 19),
(510, 'Chaibasa', 19),
(511, 'Chakradharpur', 19),
(512, 'Chandrapura', 19),
(513, 'Chatra', 19),
(514, 'Chirkunda', 19),
(515, 'Churi', 19),
(516, 'Daltonganj', 19),
(517, 'Deoghar', 19),
(518, 'Dhanbad', 19),
(519, 'Dumka', 19),
(520, 'Garhwa', 19),
(521, 'Ghatshila', 19),
(522, 'Giridih', 19),
(523, 'Godda', 19),
(524, 'Gomoh', 19),
(525, 'Gumia', 19),
(526, 'Gumla', 19),
(527, 'Hazaribag', 19),
(528, 'Hussainabad', 19),
(529, 'Jamshedpur', 19),
(530, 'Jamtara', 19),
(531, 'Jhumri Tilaiya', 19),
(532, 'Khunti', 19),
(533, 'Lohardaga', 19),
(534, 'Madhupur', 19),
(535, 'Mihijam', 19),
(536, 'Musabani', 19),
(537, 'Pakaur', 19),
(538, 'Patratu', 19),
(539, 'Phusro', 19),
(540, 'Ramngarh', 19),
(541, 'Ranchi', 19),
(542, 'Sahibganj', 19),
(543, 'Saunda', 19),
(544, 'Simdega', 19),
(545, 'Tenu Dam-cum- Kathhara', 19),
(546, 'Arasikere', 20),
(547, 'Bangalore', 20),
(548, 'Belgaum', 20),
(549, 'Bellary', 20),
(550, 'Chamrajnagar', 20),
(551, 'Chikkaballapur', 20),
(552, 'Chintamani', 20),
(553, 'Chitradurga', 20),
(554, 'Gulbarga', 20),
(555, 'Gundlupet', 20),
(556, 'Hassan', 20),
(557, 'Hospet', 20),
(558, 'Hubli', 20),
(559, 'Karkala', 20),
(560, 'Karwar', 20),
(561, 'Kolar', 20),
(562, 'Kota', 20),
(563, 'Lakshmeshwar', 20),
(564, 'Lingsugur', 20),
(565, 'Maddur', 20),
(566, 'Madhugiri', 20),
(567, 'Madikeri', 20),
(568, 'Magadi', 20),
(569, 'Mahalingpur', 20),
(570, 'Malavalli', 20),
(571, 'Malur', 20),
(572, 'Mandya', 20),
(573, 'Mangalore', 20),
(574, 'Manvi', 20),
(575, 'Mudalgi', 20),
(576, 'Mudbidri', 20),
(577, 'Muddebihal', 20),
(578, 'Mudhol', 20),
(579, 'Mulbagal', 20),
(580, 'Mundargi', 20),
(581, 'Mysore', 20),
(582, 'Nanjangud', 20),
(583, 'Pavagada', 20),
(584, 'Puttur', 20),
(585, 'Rabkavi Banhatti', 20),
(586, 'Raichur', 20),
(587, 'Ramanagaram', 20),
(588, 'Ramdurg', 20),
(589, 'Ranibennur', 20),
(590, 'Robertson Pet', 20),
(591, 'Ron', 20),
(592, 'Sadalgi', 20),
(593, 'Sagar', 20),
(594, 'Sakleshpur', 20),
(595, 'Sandur', 20),
(596, 'Sankeshwar', 20),
(597, 'Saundatti-Yellamma', 20),
(598, 'Savanur', 20),
(599, 'Sedam', 20),
(600, 'Shahabad', 20),
(601, 'Shahpur', 20),
(602, 'Shiggaon', 20),
(603, 'Shikapur', 20),
(604, 'Shimoga', 20),
(605, 'Shorapur', 20),
(606, 'Shrirangapattana', 20),
(607, 'Sidlaghatta', 20),
(608, 'Sindgi', 20),
(609, 'Sindhnur', 20),
(610, 'Sira', 20),
(611, 'Sirsi', 20),
(612, 'Siruguppa', 20),
(613, 'Srinivaspur', 20),
(614, 'Talikota', 20),
(615, 'Tarikere', 20),
(616, 'Tekkalakota', 20),
(617, 'Terdal', 20),
(618, 'Tiptur', 20),
(619, 'Tumkur', 20),
(620, 'Udupi', 20),
(621, 'Vijayapura', 20),
(622, 'Wadi', 20),
(623, 'Yadgir', 20),
(624, 'Adoor', 21),
(625, 'Akathiyoor', 21),
(626, 'Alappuzha', 21),
(627, 'Ancharakandy', 21),
(628, 'Aroor', 21),
(629, 'Ashtamichira', 21),
(630, 'Attingal', 21),
(631, 'Avinissery', 21),
(632, 'Chalakudy', 21),
(633, 'Changanassery', 21),
(634, 'Chendamangalam', 21),
(635, 'Chengannur', 21),
(636, 'Cherthala', 21),
(637, 'Cheruthazham', 21),
(638, 'Chittur-Thathamangalam', 21),
(639, 'Chockli', 21),
(640, 'Erattupetta', 21),
(641, 'Guruvayoor', 21),
(642, 'Irinjalakuda', 21),
(643, 'Kadirur', 21),
(644, 'Kalliasseri', 21),
(645, 'Kalpetta', 21),
(646, 'Kanhangad', 21),
(647, 'Kanjikkuzhi', 21),
(648, 'Kannur', 21),
(649, 'Kasaragod', 21),
(650, 'Kayamkulam', 21),
(651, 'Kochi', 21),
(652, 'Kodungallur', 21),
(653, 'Kollam', 21),
(654, 'Koothuparamba', 21),
(655, 'Kothamangalam', 21),
(656, 'Kottayam', 21),
(657, 'Kozhikode', 21),
(658, 'Kunnamkulam', 21),
(659, 'Malappuram', 21),
(660, 'Mattannur', 21),
(661, 'Mavelikkara', 21),
(662, 'Mavoor', 21),
(663, 'Muvattupuzha', 21),
(664, 'Nedumangad', 21),
(665, 'Neyyattinkara', 21),
(666, 'Ottappalam', 21),
(667, 'Palai', 21),
(668, 'Palakkad', 21),
(669, 'Panniyannur', 21),
(670, 'Pappinisseri', 21),
(671, 'Paravoor', 21),
(672, 'Pathanamthitta', 21),
(673, 'Payyannur', 21),
(674, 'Peringathur', 21),
(675, 'Perinthalmanna', 21),
(676, 'Perumbavoor', 21),
(677, 'Ponnani', 21),
(678, 'Punalur', 21),
(679, 'Quilandy', 21),
(680, 'Shoranur', 21),
(681, 'Taliparamba', 21),
(682, 'Thiruvalla', 21),
(683, 'Thiruvananthapuram', 21),
(684, 'Thodupuzha', 21),
(685, 'Thrissur', 21),
(686, 'Tirur', 21),
(687, 'Vadakara', 21),
(688, 'Vaikom', 21),
(689, 'Varkala', 21),
(690, 'Kavaratti', 22),
(691, 'Ashok Nagar', 23),
(692, 'Balaghat', 23),
(693, 'Betul', 23),
(694, 'Bhopal', 23),
(695, 'Burhanpur', 23),
(696, 'Chhatarpur', 23),
(697, 'Dabra', 23),
(698, 'Datia', 23),
(699, 'Dewas', 23),
(700, 'Dhar', 23),
(701, 'Fatehabad', 23),
(702, 'Gwalior', 23),
(703, 'Indore', 23),
(704, 'Itarsi', 23),
(705, 'Jabalpur', 23),
(706, 'Katni', 23),
(707, 'Kotma', 23),
(708, 'Lahar', 23),
(709, 'Lundi', 23),
(710, 'Maharajpur', 23),
(711, 'Mahidpur', 23),
(712, 'Maihar', 23),
(713, 'Malajkhand', 23),
(714, 'Manasa', 23),
(715, 'Manawar', 23),
(716, 'Mandideep', 23),
(717, 'Mandla', 23),
(718, 'Mandsaur', 23),
(719, 'Mauganj', 23),
(720, 'Mhow Cantonment', 23),
(721, 'Mhowgaon', 23),
(722, 'Morena', 23),
(723, 'Multai', 23),
(724, 'Murwara', 23),
(725, 'Nagda', 23),
(726, 'Nainpur', 23),
(727, 'Narsinghgarh', 23),
(728, 'Narsinghgarh', 23),
(729, 'Neemuch', 23),
(730, 'Nepanagar', 23),
(731, 'Niwari', 23),
(732, 'Nowgong', 23),
(733, 'Nowrozabad', 23),
(734, 'Pachore', 23),
(735, 'Pali', 23),
(736, 'Panagar', 23),
(737, 'Pandhurna', 23),
(738, 'Panna', 23),
(739, 'Pasan', 23),
(740, 'Pipariya', 23),
(741, 'Pithampur', 23),
(742, 'Porsa', 23),
(743, 'Prithvipur', 23),
(744, 'Raghogarh-Vijaypur', 23),
(745, 'Rahatgarh', 23),
(746, 'Raisen', 23),
(747, 'Rajgarh', 23),
(748, 'Ratlam', 23),
(749, 'Rau', 23),
(750, 'Rehli', 23),
(751, 'Rewa', 23),
(752, 'Sabalgarh', 23),
(753, 'Sagar', 23),
(754, 'Sanawad', 23),
(755, 'Sarangpur', 23),
(756, 'Sarni', 23),
(757, 'Satna', 23),
(758, 'Sausar', 23),
(759, 'Sehore', 23),
(760, 'Sendhwa', 23),
(761, 'Seoni', 23),
(762, 'Seoni-Malwa', 23),
(763, 'Shahdol', 23),
(764, 'Shajapur', 23),
(765, 'Shamgarh', 23),
(766, 'Sheopur', 23),
(767, 'Shivpuri', 23),
(768, 'Shujalpur', 23),
(769, 'Sidhi', 23),
(770, 'Sihora', 23),
(771, 'Singrauli', 23),
(772, 'Sironj', 23),
(773, 'Sohagpur', 23),
(774, 'Tarana', 23),
(775, 'Tikamgarh', 23),
(776, 'Ujhani', 23),
(777, 'Ujjain', 23),
(778, 'Umaria', 23),
(779, 'Vidisha', 23),
(780, 'Wara Seoni', 23),
(781, 'Ahmednagar', 24),
(782, 'Akola', 24),
(783, 'Amravati', 24),
(784, 'Aurangabad', 24),
(785, 'Baramati', 24),
(786, 'Chalisgaon', 24),
(787, 'Chinchani', 24),
(788, 'Devgarh', 24),
(789, 'Dhule', 24),
(790, 'Dombivli', 24),
(791, 'Durgapur', 24),
(792, 'Ichalkaranji', 24),
(793, 'Jalna', 24),
(794, 'Kalyan', 24);
INSERT INTO `usr_cities` (`id`, `name`, `state_id`) VALUES
(795, 'Latur', 24),
(796, 'Loha', 24),
(797, 'Lonar', 24),
(798, 'Lonavla', 24),
(799, 'Mahad', 24),
(800, 'Mahuli', 24),
(801, 'Malegaon', 24),
(802, 'Malkapur', 24),
(803, 'Manchar', 24),
(804, 'Mangalvedhe', 24),
(805, 'Mangrulpir', 24),
(806, 'Manjlegaon', 24),
(807, 'Manmad', 24),
(808, 'Manwath', 24),
(809, 'Mehkar', 24),
(810, 'Mhaswad', 24),
(811, 'Miraj', 24),
(812, 'Morshi', 24),
(813, 'Mukhed', 24),
(814, 'Mul', 24),
(815, 'Mumbai', 24),
(816, 'Murtijapur', 24),
(817, 'Nagpur', 24),
(818, 'Nalasopara', 24),
(819, 'Nanded-Waghala', 24),
(820, 'Nandgaon', 24),
(821, 'Nandura', 24),
(822, 'Nandurbar', 24),
(823, 'Narkhed', 24),
(824, 'Nashik', 24),
(825, 'Navi Mumbai', 24),
(826, 'Nawapur', 24),
(827, 'Nilanga', 24),
(828, 'Osmanabad', 24),
(829, 'Ozar', 24),
(830, 'Pachora', 24),
(831, 'Paithan', 24),
(832, 'Palghar', 24),
(833, 'Pandharkaoda', 24),
(834, 'Pandharpur', 24),
(835, 'Panvel', 24),
(836, 'Parbhani', 24),
(837, 'Parli', 24),
(838, 'Parola', 24),
(839, 'Partur', 24),
(840, 'Pathardi', 24),
(841, 'Pathri', 24),
(842, 'Patur', 24),
(843, 'Pauni', 24),
(844, 'Pen', 24),
(845, 'Phaltan', 24),
(846, 'Pulgaon', 24),
(847, 'Pune', 24),
(848, 'Purna', 24),
(849, 'Pusad', 24),
(850, 'Rahuri', 24),
(851, 'Rajura', 24),
(852, 'Ramtek', 24),
(853, 'Ratnagiri', 24),
(854, 'Raver', 24),
(855, 'Risod', 24),
(856, 'Sailu', 24),
(857, 'Sangamner', 24),
(858, 'Sangli', 24),
(859, 'Sangole', 24),
(860, 'Sasvad', 24),
(861, 'Satana', 24),
(862, 'Satara', 24),
(863, 'Savner', 24),
(864, 'Sawantwadi', 24),
(865, 'Shahade', 24),
(866, 'Shegaon', 24),
(867, 'Shendurjana', 24),
(868, 'Shirdi', 24),
(869, 'Shirpur-Warwade', 24),
(870, 'Shirur', 24),
(871, 'Shrigonda', 24),
(872, 'Shrirampur', 24),
(873, 'Sillod', 24),
(874, 'Sinnar', 24),
(875, 'Solapur', 24),
(876, 'Soyagaon', 24),
(877, 'Talegaon Dabhade', 24),
(878, 'Talode', 24),
(879, 'Tasgaon', 24),
(880, 'Tirora', 24),
(881, 'Tuljapur', 24),
(882, 'Tumsar', 24),
(883, 'Uran', 24),
(884, 'Uran Islampur', 24),
(885, 'Wadgaon Road', 24),
(886, 'Wai', 24),
(887, 'Wani', 24),
(888, 'Wardha', 24),
(889, 'Warora', 24),
(890, 'Warud', 24),
(891, 'Washim', 24),
(892, 'Yevla', 24),
(893, 'Uchgaon', 24),
(894, 'Udgir', 24),
(895, 'Umarga', 24),
(896, 'Umarkhed', 24),
(897, 'Umred', 24),
(898, 'Vadgaon Kasba', 24),
(899, 'Vaijapur', 24),
(900, 'Vasai', 24),
(901, 'Virar', 24),
(902, 'Vita', 24),
(903, 'Yavatmal', 24),
(904, 'Yawal', 24),
(905, 'Imphal', 26),
(906, 'Kakching', 26),
(907, 'Lilong', 26),
(908, 'Mayang Imphal', 26),
(909, 'Thoubal', 26),
(910, 'Jowai', 27),
(911, 'Nongstoin', 27),
(912, 'Shillong', 27),
(913, 'Tura', 27),
(914, 'Aizawl', 28),
(915, 'Champhai', 28),
(916, 'Lunglei', 28),
(917, 'Saiha', 28),
(918, 'Dimapur', 29),
(919, 'Kohima', 29),
(920, 'Mokokchung', 29),
(921, 'Tuensang', 29),
(922, 'Wokha', 29),
(923, 'Zunheboto', 29),
(924, 'Anandapur', 30),
(925, 'Anugul', 30),
(926, 'Asika', 30),
(927, 'Balangir', 30),
(928, 'Balasore', 30),
(929, 'Baleshwar', 30),
(930, 'Bamra', 30),
(931, 'Barbil', 30),
(932, 'Bargarh', 30),
(933, 'Bargarh', 30),
(934, 'Baripada', 30),
(935, 'Basudebpur', 30),
(936, 'Belpahar', 30),
(937, 'Bhadrak', 30),
(938, 'Bhawanipatna', 30),
(939, 'Bhuban', 30),
(940, 'Bhubaneswar', 30),
(941, 'Biramitrapur', 30),
(942, 'Brahmapur', 30),
(943, 'Brajrajnagar', 30),
(944, 'Byasanagar', 30),
(945, 'Cuttack', 30),
(946, 'Debagarh', 30),
(947, 'Dhenkanal', 30),
(948, 'Gunupur', 30),
(949, 'Hinjilicut', 30),
(950, 'Jagatsinghapur', 30),
(951, 'Jajapur', 30),
(952, 'Jaleswar', 30),
(953, 'Jatani', 30),
(954, 'Jeypur', 30),
(955, 'Jharsuguda', 30),
(956, 'Joda', 30),
(957, 'Kantabanji', 30),
(958, 'Karanjia', 30),
(959, 'Kendrapara', 30),
(960, 'Kendujhar', 30),
(961, 'Khordha', 30),
(962, 'Koraput', 30),
(963, 'Malkangiri', 30),
(964, 'Nabarangapur', 30),
(965, 'Paradip', 30),
(966, 'Parlakhemundi', 30),
(967, 'Pattamundai', 30),
(968, 'Phulabani', 30),
(969, 'Puri', 30),
(970, 'Rairangpur', 30),
(971, 'Rajagangapur', 30),
(972, 'Raurkela', 30),
(973, 'Rayagada', 30),
(974, 'Sambalpur', 30),
(975, 'Soro', 30),
(976, 'Sunabeda', 30),
(977, 'Sundargarh', 30),
(978, 'Talcher', 30),
(979, 'Titlagarh', 30),
(980, 'Umarkote', 30),
(981, 'Karaikal', 31),
(982, 'Mahe', 31),
(983, 'Pondicherry', 31),
(984, 'Yanam', 31),
(985, 'Ahmedgarh', 32),
(986, 'Amritsar', 32),
(987, 'Barnala', 32),
(988, 'Batala', 32),
(989, 'Bathinda', 32),
(990, 'Bhagha Purana', 32),
(991, 'Budhlada', 32),
(992, 'Chandigarh', 32),
(993, 'Dasua', 32),
(994, 'Dhuri', 32),
(995, 'Dinanagar', 32),
(996, 'Faridkot', 32),
(997, 'Fazilka', 32),
(998, 'Firozpur', 32),
(999, 'Firozpur Cantt.', 32),
(1000, 'Giddarbaha', 32),
(1001, 'Gobindgarh', 32),
(1002, 'Gurdaspur', 32),
(1003, 'Hoshiarpur', 32),
(1004, 'Jagraon', 32),
(1005, 'Jaitu', 32),
(1006, 'Jalalabad', 32),
(1007, 'Jalandhar', 32),
(1008, 'Jalandhar Cantt.', 32),
(1009, 'Jandiala', 32),
(1010, 'Kapurthala', 32),
(1011, 'Karoran', 32),
(1012, 'Kartarpur', 32),
(1013, 'Khanna', 32),
(1014, 'Kharar', 32),
(1015, 'Kot Kapura', 32),
(1016, 'Kurali', 32),
(1017, 'Longowal', 32),
(1018, 'Ludhiana', 32),
(1019, 'Malerkotla', 32),
(1020, 'Malout', 32),
(1021, 'Mansa', 32),
(1022, 'Maur', 32),
(1023, 'Moga', 32),
(1024, 'Mohali', 32),
(1025, 'Morinda', 32),
(1026, 'Mukerian', 32),
(1027, 'Muktsar', 32),
(1028, 'Nabha', 32),
(1029, 'Nakodar', 32),
(1030, 'Nangal', 32),
(1031, 'Nawanshahr', 32),
(1032, 'Pathankot', 32),
(1033, 'Patiala', 32),
(1034, 'Patran', 32),
(1035, 'Patti', 32),
(1036, 'Phagwara', 32),
(1037, 'Phillaur', 32),
(1038, 'Qadian', 32),
(1039, 'Raikot', 32),
(1040, 'Rajpura', 32),
(1041, 'Rampura Phul', 32),
(1042, 'Rupnagar', 32),
(1043, 'Samana', 32),
(1044, 'Sangrur', 32),
(1045, 'Sirhind Fatehgarh Sahib', 32),
(1046, 'Sujanpur', 32),
(1047, 'Sunam', 32),
(1048, 'Talwara', 32),
(1049, 'Tarn Taran', 32),
(1050, 'Urmar Tanda', 32),
(1051, 'Zira', 32),
(1052, 'Zirakpur', 32),
(1053, 'Bali', 34),
(1054, 'Banswara', 34),
(1055, 'Ajmer', 34),
(1056, 'Alwar', 34),
(1057, 'Bandikui', 34),
(1058, 'Baran', 34),
(1059, 'Barmer', 34),
(1060, 'Bikaner', 34),
(1061, 'Fatehpur', 34),
(1062, 'Jaipur', 34),
(1063, 'Jaisalmer', 34),
(1064, 'Jodhpur', 34),
(1065, 'Kota', 34),
(1066, 'Lachhmangarh', 34),
(1067, 'Ladnu', 34),
(1068, 'Lakheri', 34),
(1069, 'Lalsot', 34),
(1070, 'Losal', 34),
(1071, 'Makrana', 34),
(1072, 'Malpura', 34),
(1073, 'Mandalgarh', 34),
(1074, 'Mandawa', 34),
(1075, 'Mangrol', 34),
(1076, 'Merta City', 34),
(1077, 'Mount Abu', 34),
(1078, 'Nadbai', 34),
(1079, 'Nagar', 34),
(1080, 'Nagaur', 34),
(1081, 'Nargund', 34),
(1082, 'Nasirabad', 34),
(1083, 'Nathdwara', 34),
(1084, 'Navalgund', 34),
(1085, 'Nawalgarh', 34),
(1086, 'Neem-Ka-Thana', 34),
(1087, 'Nelamangala', 34),
(1088, 'Nimbahera', 34),
(1089, 'Nipani', 34),
(1090, 'Niwai', 34),
(1091, 'Nohar', 34),
(1092, 'Nokha', 34),
(1093, 'Pali', 34),
(1094, 'Phalodi', 34),
(1095, 'Phulera', 34),
(1096, 'Pilani', 34),
(1097, 'Pilibanga', 34),
(1098, 'Pindwara', 34),
(1099, 'Pipar City', 34),
(1100, 'Prantij', 34),
(1101, 'Pratapgarh', 34),
(1102, 'Raisinghnagar', 34),
(1103, 'Rajakhera', 34),
(1104, 'Rajaldesar', 34),
(1105, 'Rajgarh (Alwar)', 34),
(1106, 'Rajgarh (Churu', 34),
(1107, 'Rajsamand', 34),
(1108, 'Ramganj Mandi', 34),
(1109, 'Ramngarh', 34),
(1110, 'Ratangarh', 34),
(1111, 'Rawatbhata', 34),
(1112, 'Rawatsar', 34),
(1113, 'Reengus', 34),
(1114, 'Sadri', 34),
(1115, 'Sadulshahar', 34),
(1116, 'Sagwara', 34),
(1117, 'Sambhar', 34),
(1118, 'Sanchore', 34),
(1119, 'Sangaria', 34),
(1120, 'Sardarshahar', 34),
(1121, 'Sawai Madhopur', 34),
(1122, 'Shahpura', 34),
(1123, 'Shahpura', 34),
(1124, 'Sheoganj', 34),
(1125, 'Sikar', 34),
(1126, 'Sirohi', 34),
(1127, 'Sojat', 34),
(1128, 'Sri Madhopur', 34),
(1129, 'Sujangarh', 34),
(1130, 'Sumerpur', 34),
(1131, 'Suratgarh', 34),
(1132, 'Taranagar', 34),
(1133, 'Todabhim', 34),
(1134, 'Todaraisingh', 34),
(1135, 'Tonk', 34),
(1136, 'Udaipur', 34),
(1137, 'Udaipurwati', 34),
(1138, 'Vijainagar', 34),
(1139, 'Gangtok', 35),
(1140, 'Calcutta', 42),
(1141, 'Arakkonam', 36),
(1142, 'Arcot', 36),
(1143, 'Aruppukkottai', 36),
(1144, 'Bhavani', 36),
(1145, 'Chengalpattu', 36),
(1146, 'Chennai', 36),
(1147, 'Chinna salem', 36),
(1148, 'Coimbatore', 36),
(1149, 'Coonoor', 36),
(1150, 'Cuddalore', 36),
(1151, 'Dharmapuri', 36),
(1152, 'Dindigul', 36),
(1153, 'Erode', 36),
(1154, 'Gudalur', 36),
(1155, 'Gudalur', 36),
(1156, 'Gudalur', 36),
(1157, 'Kanchipuram', 36),
(1158, 'Karaikudi', 36),
(1159, 'Karungal', 36),
(1160, 'Karur', 36),
(1161, 'Kollankodu', 36),
(1162, 'Lalgudi', 36),
(1163, 'Madurai', 36),
(1164, 'Nagapattinam', 36),
(1165, 'Nagercoil', 36),
(1166, 'Namagiripettai', 36),
(1167, 'Namakkal', 36),
(1168, 'Nandivaram-Guduvancheri', 36),
(1169, 'Nanjikottai', 36),
(1170, 'Natham', 36),
(1171, 'Nellikuppam', 36),
(1172, 'Neyveli', 36),
(1173, 'O\' Valley', 36),
(1174, 'Oddanchatram', 36),
(1175, 'P.N.Patti', 36),
(1176, 'Pacode', 36),
(1177, 'Padmanabhapuram', 36),
(1178, 'Palani', 36),
(1179, 'Palladam', 36),
(1180, 'Pallapatti', 36),
(1181, 'Pallikonda', 36),
(1182, 'Panagudi', 36),
(1183, 'Panruti', 36),
(1184, 'Paramakudi', 36),
(1185, 'Parangipettai', 36),
(1186, 'Pattukkottai', 36),
(1187, 'Perambalur', 36),
(1188, 'Peravurani', 36),
(1189, 'Periyakulam', 36),
(1190, 'Periyasemur', 36),
(1191, 'Pernampattu', 36),
(1192, 'Pollachi', 36),
(1193, 'Polur', 36),
(1194, 'Ponneri', 36),
(1195, 'Pudukkottai', 36),
(1196, 'Pudupattinam', 36),
(1197, 'Puliyankudi', 36),
(1198, 'Punjaipugalur', 36),
(1199, 'Rajapalayam', 36),
(1200, 'Ramanathapuram', 36),
(1201, 'Rameshwaram', 36),
(1202, 'Rasipuram', 36),
(1203, 'Salem', 36),
(1204, 'Sankarankoil', 36),
(1205, 'Sankari', 36),
(1206, 'Sathyamangalam', 36),
(1207, 'Sattur', 36),
(1208, 'Shenkottai', 36),
(1209, 'Sholavandan', 36),
(1210, 'Sholingur', 36),
(1211, 'Sirkali', 36),
(1212, 'Sivaganga', 36),
(1213, 'Sivagiri', 36),
(1214, 'Sivakasi', 36),
(1215, 'Srivilliputhur', 36),
(1216, 'Surandai', 36),
(1217, 'Suriyampalayam', 36),
(1218, 'Tenkasi', 36),
(1219, 'Thammampatti', 36),
(1220, 'Thanjavur', 36),
(1221, 'Tharamangalam', 36),
(1222, 'Tharangambadi', 36),
(1223, 'Theni Allinagaram', 36),
(1224, 'Thirumangalam', 36),
(1225, 'Thirunindravur', 36),
(1226, 'Thiruparappu', 36),
(1227, 'Thirupuvanam', 36),
(1228, 'Thiruthuraipoondi', 36),
(1229, 'Thiruvallur', 36),
(1230, 'Thiruvarur', 36),
(1231, 'Thoothukudi', 36),
(1232, 'Thuraiyur', 36),
(1233, 'Tindivanam', 36),
(1234, 'Tiruchendur', 36),
(1235, 'Tiruchengode', 36),
(1236, 'Tiruchirappalli', 36),
(1237, 'Tirukalukundram', 36),
(1238, 'Tirukkoyilur', 36),
(1239, 'Tirunelveli', 36),
(1240, 'Tirupathur', 36),
(1241, 'Tirupathur', 36),
(1242, 'Tiruppur', 36),
(1243, 'Tiruttani', 36),
(1244, 'Tiruvannamalai', 36),
(1245, 'Tiruvethipuram', 36),
(1246, 'Tittakudi', 36),
(1247, 'Udhagamandalam', 36),
(1248, 'Udumalaipettai', 36),
(1249, 'Unnamalaikadai', 36),
(1250, 'Usilampatti', 36),
(1251, 'Uthamapalayam', 36),
(1252, 'Uthiramerur', 36),
(1253, 'Vadakkuvalliyur', 36),
(1254, 'Vadalur', 36),
(1255, 'Vadipatti', 36),
(1256, 'Valparai', 36),
(1257, 'Vandavasi', 36),
(1258, 'Vaniyambadi', 36),
(1259, 'Vedaranyam', 36),
(1260, 'Vellakoil', 36),
(1261, 'Vellore', 36),
(1262, 'Vikramasingapuram', 36),
(1263, 'Viluppuram', 36),
(1264, 'Virudhachalam', 36),
(1265, 'Virudhunagar', 36),
(1266, 'Viswanatham', 36),
(1267, 'Agartala', 37),
(1268, 'Badharghat', 37),
(1269, 'Dharmanagar', 37),
(1270, 'Indranagar', 37),
(1271, 'Jogendranagar', 37),
(1272, 'Kailasahar', 37),
(1273, 'Khowai', 37),
(1274, 'Pratapgarh', 37),
(1275, 'Udaipur', 37),
(1276, 'Achhnera', 39),
(1277, 'Adari', 39),
(1278, 'Agra', 39),
(1279, 'Aligarh', 39),
(1280, 'Allahabad', 39),
(1281, 'Amroha', 39),
(1282, 'Azamgarh', 39),
(1283, 'Bahraich', 39),
(1284, 'Ballia', 39),
(1285, 'Balrampur', 39),
(1286, 'Banda', 39),
(1287, 'Bareilly', 39),
(1288, 'Chandausi', 39),
(1289, 'Dadri', 39),
(1290, 'Deoria', 39),
(1291, 'Etawah', 39),
(1292, 'Fatehabad', 39),
(1293, 'Fatehpur', 39),
(1294, 'Fatehpur', 39),
(1295, 'Greater Noida', 39),
(1296, 'Hamirpur', 39),
(1297, 'Hardoi', 39),
(1298, 'Jajmau', 39),
(1299, 'Jaunpur', 39),
(1300, 'Jhansi', 39),
(1301, 'Kalpi', 39),
(1302, 'Kanpur', 39),
(1303, 'Kota', 39),
(1304, 'Laharpur', 39),
(1305, 'Lakhimpur', 39),
(1306, 'Lal Gopalganj Nindaura', 39),
(1307, 'Lalganj', 39),
(1308, 'Lalitpur', 39),
(1309, 'Lar', 39),
(1310, 'Loni', 39),
(1311, 'Lucknow', 39),
(1312, 'Mathura', 39),
(1313, 'Meerut', 39),
(1314, 'Modinagar', 39),
(1315, 'Muradnagar', 39),
(1316, 'Nagina', 39),
(1317, 'Najibabad', 39),
(1318, 'Nakur', 39),
(1319, 'Nanpara', 39),
(1320, 'Naraura', 39),
(1321, 'Naugawan Sadat', 39),
(1322, 'Nautanwa', 39),
(1323, 'Nawabganj', 39),
(1324, 'Nehtaur', 39),
(1325, 'NOIDA', 39),
(1326, 'Noorpur', 39),
(1327, 'Obra', 39),
(1328, 'Orai', 39),
(1329, 'Padrauna', 39),
(1330, 'Palia Kalan', 39),
(1331, 'Parasi', 39),
(1332, 'Phulpur', 39),
(1333, 'Pihani', 39),
(1334, 'Pilibhit', 39),
(1335, 'Pilkhuwa', 39),
(1336, 'Powayan', 39),
(1337, 'Pukhrayan', 39),
(1338, 'Puranpur', 39),
(1339, 'Purquazi', 39),
(1340, 'Purwa', 39),
(1341, 'Rae Bareli', 39),
(1342, 'Rampur', 39),
(1343, 'Rampur Maniharan', 39),
(1344, 'Rasra', 39),
(1345, 'Rath', 39),
(1346, 'Renukoot', 39),
(1347, 'Reoti', 39),
(1348, 'Robertsganj', 39),
(1349, 'Rudauli', 39),
(1350, 'Rudrapur', 39),
(1351, 'Sadabad', 39),
(1352, 'Safipur', 39),
(1353, 'Saharanpur', 39),
(1354, 'Sahaspur', 39),
(1355, 'Sahaswan', 39),
(1356, 'Sahawar', 39),
(1357, 'Sahjanwa', 39),
(1358, 'Saidpur, Ghazipur', 39),
(1359, 'Sambhal', 39),
(1360, 'Samdhan', 39),
(1361, 'Samthar', 39),
(1362, 'Sandi', 39),
(1363, 'Sandila', 39),
(1364, 'Sardhana', 39),
(1365, 'Seohara', 39),
(1366, 'Shahabad, Hardoi', 39),
(1367, 'Shahabad, Rampur', 39),
(1368, 'Shahganj', 39),
(1369, 'Shahjahanpur', 39),
(1370, 'Shamli', 39),
(1371, 'Shamsabad, Agra', 39),
(1372, 'Shamsabad, Farrukhabad', 39),
(1373, 'Sherkot', 39),
(1374, 'Shikarpur, Bulandshahr', 39),
(1375, 'Shikohabad', 39),
(1376, 'Shishgarh', 39),
(1377, 'Siana', 39),
(1378, 'Sikanderpur', 39),
(1379, 'Sikandra Rao', 39),
(1380, 'Sikandrabad', 39),
(1381, 'Sirsaganj', 39),
(1382, 'Sirsi', 39),
(1383, 'Sitapur', 39),
(1384, 'Soron', 39),
(1385, 'Suar', 39),
(1386, 'Sultanpur', 39),
(1387, 'Sumerpur', 39),
(1388, 'Tanda', 39),
(1389, 'Tanda', 39),
(1390, 'Tetri Bazar', 39),
(1391, 'Thakurdwara', 39),
(1392, 'Thana Bhawan', 39),
(1393, 'Tilhar', 39),
(1394, 'Tirwaganj', 39),
(1395, 'Tulsipur', 39),
(1396, 'Tundla', 39),
(1397, 'Unnao', 39),
(1398, 'Utraula', 39),
(1399, 'Varanasi', 39),
(1400, 'Vrindavan', 39),
(1401, 'Warhapur', 39),
(1402, 'Zaidpur', 39),
(1403, 'Zamania', 39),
(1404, 'Almora', 40),
(1405, 'Bazpur', 40),
(1406, 'Chamba', 40),
(1407, 'Dehradun', 40),
(1408, 'Haldwani', 40),
(1409, 'Haridwar', 40),
(1410, 'Jaspur', 40),
(1411, 'Kashipur', 40),
(1412, 'kichha', 40),
(1413, 'Kotdwara', 40),
(1414, 'Manglaur', 40),
(1415, 'Mussoorie', 40),
(1416, 'Nagla', 40),
(1417, 'Nainital', 40),
(1418, 'Pauri', 40),
(1419, 'Pithoragarh', 40),
(1420, 'Ramnagar', 40),
(1421, 'Rishikesh', 40),
(1422, 'Roorkee', 40),
(1423, 'Rudrapur', 40),
(1424, 'Sitarganj', 40),
(1425, 'Tehri', 40),
(1426, 'Muzaffarnagar', 41),
(1427, 'Adra, Purulia', 42),
(1428, 'Alipurduar', 42),
(1429, 'Arambagh', 42),
(1430, 'Asansol', 42),
(1431, 'Baharampur', 42),
(1432, 'Bally', 42),
(1433, 'Balurghat', 42),
(1434, 'Bankura', 42),
(1435, 'Barakar', 42),
(1436, 'Barasat', 42),
(1437, 'Bardhaman', 42),
(1438, 'Bidhan Nagar', 42),
(1439, 'Chinsura', 42),
(1440, 'Contai', 42),
(1441, 'Cooch Behar', 42),
(1442, 'Darjeeling', 42),
(1443, 'Durgapur', 42),
(1444, 'Haldia', 42),
(1445, 'Howrah', 42),
(1446, 'Islampur', 42),
(1447, 'Jhargram', 42),
(1448, 'Kharagpur', 42),
(1449, 'Kolkata', 42),
(1450, 'Mainaguri', 42),
(1451, 'Mal', 42),
(1452, 'Mathabhanga', 42),
(1453, 'Medinipur', 42),
(1454, 'Memari', 42),
(1455, 'Monoharpur', 42),
(1456, 'Murshidabad', 42),
(1457, 'Nabadwip', 42),
(1458, 'Naihati', 42),
(1459, 'Panchla', 42),
(1460, 'Pandua', 42),
(1461, 'Paschim Punropara', 42),
(1462, 'Purulia', 42),
(1463, 'Raghunathpur', 42),
(1464, 'Raiganj', 42),
(1465, 'Rampurhat', 42),
(1466, 'Ranaghat', 42),
(1467, 'Sainthia', 42),
(1468, 'Santipur', 42),
(1469, 'Siliguri', 42),
(1470, 'Sonamukhi', 42),
(1471, 'Srirampore', 42),
(1472, 'Suri', 42),
(1473, 'Taki', 42),
(1474, 'Tamluk', 42),
(1475, 'Tarakeswar', 42),
(1476, 'Chikmagalur', 20),
(1477, 'Davanagere', 20),
(1478, 'Dharwad', 20),
(1479, 'Gadag', 20),
(1480, 'Chennai', 36),
(1481, 'Coimbatore', 36),
(1482, 'Barrackpur', 38),
(1483, 'Barwani', 38),
(1484, 'Basna', 38),
(1485, 'Bawal', 38),
(1486, 'Beawar', 38),
(1487, 'Berhampur', 38),
(1488, 'Bhajanpura', 38),
(1489, 'Bhandara', 38),
(1490, 'Bharatpur', 38),
(1491, 'Bharthana', 38),
(1492, 'Bhilai', 38),
(1493, 'Bhilwara', 38),
(1494, 'Bhinmal', 38),
(1495, 'Bhiwandi', 38),
(1496, 'Bhusawal', 38),
(1497, 'Bidar', 38),
(1498, 'Bijnaur', 38),
(1499, 'Bilara', 38),
(1500, 'Budaun', 38),
(1501, 'Bulandshahr', 38),
(1502, 'Burla', 38),
(1503, 'Chakeri', 38),
(1504, 'Champawat', 38),
(1505, 'Chandil', 38),
(1506, 'Chandrapur', 38),
(1507, 'Chapirevula', 38),
(1508, 'Charkhari', 38),
(1509, 'Charkhi Dadri', 38),
(1510, 'Chhindwara', 38),
(1511, 'Chiplun', 38),
(1512, 'Chitrakoot', 38),
(1513, 'Churu', 38),
(1514, 'Dalkhola', 38),
(1515, 'Damoh', 38),
(1516, 'Daund', 38),
(1517, 'Dehgam', 38),
(1518, 'Devgarh', 38),
(1519, 'Dhulian', 38),
(1520, 'Dumdum', 38),
(1521, 'Dwarka1', 38),
(1522, 'Etah', 38),
(1523, 'Faizabad', 38),
(1524, 'Falna', 38),
(1525, 'Farrukhabad', 38),
(1526, 'Fatehgarh', 38),
(1527, 'Fatehpur Chaurasi', 38),
(1528, 'Fatehpur Sikri', 38),
(1529, 'Firozabad', 38),
(1530, 'Gadchiroli', 38),
(1531, 'Gandhidham', 38),
(1532, 'Ganjam', 38),
(1533, 'Ghatampur', 38),
(1534, 'Ghatanji', 38),
(1535, 'Ghaziabad', 38),
(1536, 'Ghazipur', 38),
(1537, 'Goa Velha', 38),
(1538, 'Gokak', 38),
(1539, 'Gondiya', 38),
(1540, 'Gorakhpur', 38),
(1541, 'Guna', 38),
(1542, 'Hanumangarh', 38),
(1543, 'Harda', 38),
(1544, 'Harsawa', 38),
(1545, 'Hastinapur', 38),
(1546, 'Hathras', 38),
(1547, 'Jagadhri', 38),
(1548, 'Jais', 38),
(1549, 'Jaitaran', 38),
(1550, 'Jalgaon', 38),
(1551, 'Jalore', 38),
(1552, 'Jhabua', 38),
(1553, 'Jhalawar', 38),
(1554, 'Jhunjhunu', 38),
(1555, 'Junnar', 38),
(1556, 'Kailaras', 38),
(1557, 'Kalburgi', 38),
(1558, 'Kalimpong', 38),
(1559, 'Kamthi', 38),
(1560, 'Kanpur', 38),
(1561, 'Karad', 38),
(1562, 'Keylong', 38),
(1563, 'Kheri', 38),
(1564, 'Khurai', 38),
(1565, 'Kodad', 38),
(1566, 'Konnagar', 38),
(1567, 'Krishnanagar', 38),
(1568, 'Kuchinda', 38),
(1569, 'Madhyamgram', 38),
(1570, 'Mahabaleswar', 38),
(1571, 'Mahoba', 38),
(1572, 'Mahwa', 38),
(1573, 'Manesar', 38),
(1574, 'Mangalagiri', 38),
(1575, 'Mira-Bhayandar', 38),
(1576, 'Mirzapur', 38),
(1577, 'Mithapur', 38),
(1578, 'Mohania', 38),
(1579, 'Mokama', 38),
(1580, 'Moradabad', 38),
(1581, 'Mukatsar', 38),
(1582, 'Nagalapuram', 38);

-- --------------------------------------------------------

--
-- Table structure for table `usr_country`
--

CREATE TABLE `usr_country` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `continent` int(11) NOT NULL,
  `sub_continent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usr_country`
--

INSERT INTO `usr_country` (`id`, `name`, `continent`, `sub_continent`) VALUES
(1, 'India', 1, 0),
(2, 'USA', 2, 0),
(3, 'China', 1, 0),
(1, 'India', 1, 0),
(2, 'USA', 2, 0),
(3, 'China', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usr_states`
--

CREATE TABLE `usr_states` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_states`
--

INSERT INTO `usr_states` (`id`, `name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Islands', 1),
(2, 'Andhra Pradesh', 1),
(4, 'Arunachal Pradesh', 1),
(5, 'Assam', 1),
(6, 'Bihar', 1),
(7, 'Chhattisgarh', 1),
(8, 'Dadra & Nagar Haveli', 1),
(9, 'Daman & Diu', 1),
(10, 'Delhi', 1),
(11, 'Goa', 1),
(12, 'Gujarat', 1),
(15, 'Haryana', 1),
(16, 'Himachal Pradesh', 1),
(18, 'Jammu and Kashmir', 1),
(19, 'Jharkhand', 1),
(20, 'Karnataka', 1),
(21, 'Kerala', 1),
(22, 'Lakshadweep', 1),
(23, 'Madhya Pradesh', 1),
(24, 'Maharashtra', 1),
(26, 'Manipur', 1),
(27, 'Meghalaya', 1),
(28, 'Mizoram', 1),
(29, 'Nagaland', 1),
(30, 'Orissa', 1),
(31, 'Pondicherry', 1),
(32, 'Punjab', 1),
(34, 'Rajasthan', 1),
(35, 'Sikkim', 1),
(36, 'Tamil Nadu', 1),
(37, 'Tripura', 1),
(38, 'unknown', 1),
(39, 'Uttar Pradesh', 1),
(40, 'Uttarakhand', 1),
(41, 'Uttarpradesh', 1),
(42, 'West Bengal', 1),
(1, 'Andaman and Nicobar Islands', 1),
(2, 'Andhra Pradesh', 1),
(4, 'Arunachal Pradesh', 1),
(5, 'Assam', 1),
(6, 'Bihar', 1),
(7, 'Chhattisgarh', 1),
(8, 'Dadra & Nagar Haveli', 1),
(9, 'Daman & Diu', 1),
(10, 'Delhi', 1),
(11, 'Goa', 1),
(12, 'Gujarat', 1),
(15, 'Haryana', 1),
(16, 'Himachal Pradesh', 1),
(18, 'Jammu and Kashmir', 1),
(19, 'Jharkhand', 1),
(20, 'Karnataka', 1),
(21, 'Kerala', 1),
(22, 'Lakshadweep', 1),
(23, 'Madhya Pradesh', 1),
(24, 'Maharashtra', 1),
(26, 'Manipur', 1),
(27, 'Meghalaya', 1),
(28, 'Mizoram', 1),
(29, 'Nagaland', 1),
(30, 'Orissa', 1),
(31, 'Pondicherry', 1),
(32, 'Punjab', 1),
(34, 'Rajasthan', 1),
(35, 'Sikkim', 1),
(36, 'Tamil Nadu', 1),
(37, 'Tripura', 1),
(38, 'unknown', 1),
(39, 'Uttar Pradesh', 1),
(40, 'Uttarakhand', 1),
(41, 'Uttarpradesh', 1),
(42, 'West Bengal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL COMMENT 'Our Company ID',
  `vendor_cat` int(11) NOT NULL,
  `vendor_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Company Name',
  `vendor_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor_city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor_state` int(11) DEFAULT NULL,
  `state_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gstin` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_details` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `person_conatct_details` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Phone and email ID',
  `payment_terms` int(11) DEFAULT NULL COMMENT 'Number of days',
  `bank_details1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bank_details2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `logo_link` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `company_id`, `vendor_cat`, `vendor_name`, `vendor_address`, `vendor_city`, `vendor_state`, `state_code`, `pincode`, `gstin`, `contact_details`, `email`, `website`, `contact_person_name`, `person_conatct_details`, `payment_terms`, `bank_details1`, `bank_details2`, `logo_link`, `created_by`, `created_on`) VALUES
(7, 5, 2, 'Vendor 1', 'Dwarka\r\n', '', 4, 'dwarka', '', 'V78GHGH', '4545454545', 'prg6@ipageindia.com', 'http://imaginationlight.in', 'Vendor 1', '8989898989', 25, 'Vendor 1', 'Vendor 1', 'http://localhost/orient/uploads/vendors/logo/2017/11/5001510687107.png', 5, '2017-11-14 11:18:27'),
(8, 5, 2, 'Mohit', 'Delhi', '', 10, 'DEL67677', '', 'GG66767', '9999999999', 'thakurmohit1123@gmail.com', 'imaginationlight@s.in', 'Vendor 2', '8989898989', 50, 'SBI', 'ICICI', 'http://localhost/orient/uploads/vendors/logo/2017/11/3181510695527.png', 5, '2017-11-14 13:38:47'),
(9, 5, 3, 'Vipin', 'Delhi', '', 6, 'Uttarpradesh', '', 'V78GHGHS', '4545454545', 'a@b.comss', 'http://imaginationlight.in', 'Vendor 1', '8989898989', 50, 'ICICI', 'SBI', 'http://localhost/orient/uploads/vendors/logo/2017/11/7371510699938.png', 5, '2017-11-14 14:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_category`
--

CREATE TABLE `vendor_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor_category`
--

INSERT INTO `vendor_category` (`id`, `name`, `created_by`, `created_on`) VALUES
(2, 'A', '5', '2017-11-29 21:42:26'),
(3, 'B', '5', '2017-11-29 21:42:55'),
(4, 'C', '5', '2017-11-29 21:42:55'),
(5, 'D', '5', '2017-11-29 21:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `wbs_category`
--

CREATE TABLE `wbs_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_category`
--

INSERT INTO `wbs_category` (`id`, `category_name`, `created_by`, `created_on`) VALUES
(2, 'Design', 5, '2017-12-19 03:00:57'),
(3, 'Site Enabling', 5, '2017-12-19 03:05:26'),
(4, 'Other Consultant', 5, '2017-12-19 03:05:37'),
(5, 'Approvals', 5, '2017-12-19 03:06:03'),
(6, 'Construction', 5, '2017-12-19 03:06:12'),
(7, 'Test', 5, '2018-01-05 01:16:12'),
(8, 'test1', 5, '2018-01-15 01:37:57'),
(9, '28test', 6, '2018-05-28 01:22:03'),
(10, 'ac', 6, '2018-05-28 02:14:07'),
(11, 'cat', 6, '2018-06-04 05:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `wbs_master`
--

CREATE TABLE `wbs_master` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `remark` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `temp_data` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_master`
--

INSERT INTO `wbs_master` (`id`, `project_id`, `remark`, `temp_data`, `created_by`, `created_on`, `last_updated`) VALUES
(21, 1, ' dfgdfgdf', 1, 5, '2018-06-06 05:37:31', '2018-06-06 02:07:31'),
(22, 5, '  dfgdfgdf', 1, 5, '2018-05-22 04:30:27', '0000-00-00 00:00:00'),
(23, 4, ' ', 1, 6, '2018-06-25 11:46:32', '2018-06-25 11:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `wbs_sub_category1`
--

CREATE TABLE `wbs_sub_category1` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_name1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_sub_category1`
--

INSERT INTO `wbs_sub_category1` (`id`, `category_id`, `sub_category_name1`, `created_by`, `created_on`) VALUES
(1, 2, 'Architect', 5, '2018-01-03 03:11:17'),
(2, 2, 'Interior Designer', 5, '2018-01-03 03:12:28'),
(3, 6, 'Work Orders', 5, '2018-01-03 22:01:06'),
(4, 2, 'Structural Consultant', 5, '2018-01-03 23:54:34'),
(7, 5, 'Pre Construction', 5, '2018-01-04 01:05:09'),
(8, 9, '28test', 6, '2018-05-28 01:22:13'),
(9, 0, '', 6, '2018-05-28 01:22:43'),
(10, 10, 'acd', 6, '2018-05-28 02:14:49'),
(11, 9, '29test', 6, '2018-06-04 05:03:30'),
(12, 11, 'subcat1', 6, '2018-06-04 05:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `wbs_sub_category2`
--

CREATE TABLE `wbs_sub_category2` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcat_id1` int(11) NOT NULL,
  `sub_category_name2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_sub_category2`
--

INSERT INTO `wbs_sub_category2` (`id`, `category_id`, `subcat_id1`, `sub_category_name2`, `created_on`, `created_by`) VALUES
(1, 2, 1, 'Architect', '2018-07-03 11:03:14', 5),
(2, 2, 1, 'Interior Designer', '2018-07-03 11:03:18', 5),
(3, 6, 1, 'Work Orders', '2018-07-03 11:03:21', 5),
(4, 2, 1, 'Structural Consultant', '2018-07-03 11:03:24', 5),
(5, 2, 1, 'FaÃ§ade Consultant', '2018-07-03 11:03:27', 5),
(6, 5, 7, 'Land Conversion', '2018-01-04 01:07:02', 5),
(7, 6, 3, 'Civil Works', '2018-01-04 01:09:54', 5),
(9, 6, 3, 'Electrical works', '2018-01-04 01:58:39', 5),
(10, 6, 3, 'Interior works', '2018-01-04 02:08:53', 5),
(11, 6, 3, 'test', '2018-01-05 01:16:46', 5),
(12, 9, 8, '28test', '2018-05-28 01:22:21', 6),
(13, 9, 11, '29test', '2018-06-04 05:46:32', 6),
(14, 11, 12, 'subcat2', '2018-06-04 05:47:01', 6);

-- --------------------------------------------------------

--
-- Table structure for table `wbs_sub_category3`
--

CREATE TABLE `wbs_sub_category3` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcat_id1` int(11) NOT NULL,
  `subcat_id2` int(11) NOT NULL,
  `sub_category_name3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_sub_category3`
--

INSERT INTO `wbs_sub_category3` (`id`, `category_id`, `subcat_id1`, `subcat_id2`, `sub_category_name3`, `created_on`, `created_by`) VALUES
(6, 6, 3, 7, 'Excavation', '2018-01-04 01:30:20', 5),
(7, 6, 3, 9, 'Conduiting and Point wiring', '2018-01-04 01:59:13', 5),
(8, 6, 3, 10, 'BOH', '2018-01-04 02:09:15', 5),
(9, 6, 3, 7, 'Substructure Works', '2018-01-04 03:10:26', 5),
(10, 9, 8, 12, '28test', '2018-05-28 01:22:30', 6),
(11, 11, 12, 14, 'subcat3', '2018-06-04 05:47:11', 6);

-- --------------------------------------------------------

--
-- Table structure for table `wbs_sub_category4`
--

CREATE TABLE `wbs_sub_category4` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcat_id1` int(11) NOT NULL,
  `subcat_id2` int(11) NOT NULL,
  `subcat_id3` int(11) NOT NULL,
  `sub_category_name4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_sub_category4`
--

INSERT INTO `wbs_sub_category4` (`id`, `category_id`, `subcat_id1`, `subcat_id2`, `subcat_id3`, `sub_category_name4`, `created_on`, `created_by`) VALUES
(6, 6, 3, 9, 7, 'Lights', '2018-01-04 02:02:36', 5),
(7, 6, 3, 9, 7, 'Power Points', '2018-01-04 02:06:19', 5),
(9, 6, 3, 10, 8, 'Plant Room', '2018-01-04 02:09:41', 5),
(10, 9, 8, 12, 10, '28test', '2018-05-28 01:23:03', 6),
(11, 11, 12, 14, 11, 'subcat4', '2018-06-04 05:47:57', 6);

-- --------------------------------------------------------

--
-- Table structure for table `wbs_sub_category5`
--

CREATE TABLE `wbs_sub_category5` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcat_id1` int(11) NOT NULL,
  `subcat_id2` int(11) NOT NULL,
  `subcat_id3` int(11) NOT NULL,
  `subcat_id4` int(11) NOT NULL,
  `sub_category_name5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_sub_category5`
--

INSERT INTO `wbs_sub_category5` (`id`, `category_id`, `subcat_id1`, `subcat_id2`, `subcat_id3`, `subcat_id4`, `sub_category_name5`, `created_on`, `created_by`) VALUES
(6, 6, 3, 10, 8, 9, 'Flooring', '2018-01-04 02:19:48', 5),
(7, 6, 3, 10, 8, 9, 'Wall finishes', '2018-01-04 02:20:36', 5),
(8, 9, 8, 12, 10, 10, '28test', '2018-05-28 01:23:14', 6),
(9, 9, 8, 12, 10, 10, '29test', '2018-05-28 01:23:32', 6),
(10, 11, 12, 14, 11, 11, 'subcat5', '2018-06-04 05:48:04', 6),
(11, 6, 3, 10, 8, 9, 'wall painting', '2018-06-06 02:11:10', 6),
(12, 6, 3, 9, 7, 7, 'finishing work', '2018-06-16 06:29:37', 6);

-- --------------------------------------------------------

--
-- Table structure for table `wbs_transaction`
--

CREATE TABLE `wbs_transaction` (
  `id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT '0',
  `subcat_id1` int(11) DEFAULT NULL,
  `subcat_id2` int(11) DEFAULT NULL,
  `subcat_id3` int(11) DEFAULT NULL,
  `subcat_id4` int(11) DEFAULT NULL,
  `subcat_id5` int(11) DEFAULT NULL,
  `vendor_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estimated_cost` float(10,2) NOT NULL,
  `cost_unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Rs.',
  `remark` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'description',
  `temp_data` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mode_of_purchase` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'local' COMMENT 'local/imported (specially for purchaseorder)',
  `last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbs_transaction`
--

INSERT INTO `wbs_transaction` (`id`, `master_id`, `project_id`, `category_id`, `subcat_id1`, `subcat_id2`, `subcat_id3`, `subcat_id4`, `subcat_id5`, `vendor_name`, `estimated_cost`, `cost_unit`, `remark`, `temp_data`, `created_by`, `created_on`, `mode_of_purchase`, `last_updated`) VALUES
(25, 21, 1, 6, 3, 10, 8, 9, 6, 'vk3', 2133.00, '2133.00', '', 1, 5, '2018-06-07 12:22:40', '', '0000-00-00 00:00:00'),
(26, 22, 5, 6, 3, 10, 8, 9, 7, 'dsfsdf', 342.00, '342.00', '', 1, 5, '2018-05-22 05:05:29', '', '0000-00-00 00:00:00'),
(27, 22, 5, 9, 8, 12, 10, 10, 8, 'virender', 23434.00, '23434.00', '', 1, 6, '2018-05-28 01:35:09', '', '0000-00-00 00:00:00'),
(28, 21, 1, 10, 10, 0, 0, 0, 0, 'abc', 150.00, '150', '', 1, 6, '2018-06-06 02:07:31', '', '2018-06-06 02:07:31'),
(30, 21, 1, 6, 0, 0, 0, 0, 0, 'vk1', 200.00, '200', '', 1, 6, '2018-06-06 05:34:48', '', '0000-00-00 00:00:00'),
(31, 21, 1, 6, 3, 0, 0, 0, 0, 'vk21', 100.00, '100', '', 1, 6, '2018-06-06 05:34:48', '', '0000-00-00 00:00:00'),
(32, 21, 1, 6, 3, 10, 0, 0, 0, 'vhwe', 1223.00, '1223', '', 1, 6, '2018-06-06 05:34:48', '', '0000-00-00 00:00:00'),
(74, 23, 4, 6, 3, 10, 8, 9, 6, 'asdfsad', 550.00, '550.00', '', 1, 6, '2018-06-25 11:46:32', '', '2018-06-25 11:46:32'),
(75, 23, 4, 6, 3, 10, 8, 9, 7, 'jljhkj', 400.00, '400.00', '', 1, 6, '2018-06-05 10:05:50', '', '0000-00-00 00:00:00'),
(76, 21, 1, 6, 3, 7, 0, 0, 0, 'szdZSCXz', 150.00, '150', ' zxczxczxc', 1, 6, '2018-06-06 01:53:51', '', '0000-00-00 00:00:00'),
(77, 23, 4, 6, 3, 10, 8, 9, 11, 'asdasd', 200.00, '200', ' asdasdasda', 1, 6, '2018-06-06 08:44:57', '', '0000-00-00 00:00:00'),
(78, 23, 4, 2, 2, 0, 0, 0, 0, 'asdasd', 100.00, '100', ' asdasd', 1, 6, '2018-06-06 08:46:13', '', '0000-00-00 00:00:00'),
(79, 23, 4, 6, 3, 10, 7, 7, 12, 'sdfsdf', 300.00, '300.00', ' sdfsdf', 1, 6, '2018-06-25 11:29:36', '', '2018-06-25 11:29:36'),
(80, 21, 1, 6, 3, 7, 9, 0, 0, 'asdasd', 50.00, '50', ' asdadasd', 1, 6, '2018-06-07 08:35:31', '', '0000-00-00 00:00:00'),
(81, 23, 4, 6, 3, 7, 0, 0, 0, 'abc', 100.00, '100', ' aSs', 1, 6, '2018-06-07 09:03:07', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wo_master`
--

CREATE TABLE `wo_master` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `budget_heads` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wo_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wo_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contractor_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contractor_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `payment_term` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `late_delivery_clause` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `enclosure` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `defect_liability_period` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `liquidated_damages` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `special_condition` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `completion_date` date NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `temp_data` int(11) NOT NULL DEFAULT '1',
  `contract_value` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wo_issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wo_master`
--

INSERT INTO `wo_master` (`id`, `project_id`, `project_name`, `budget_heads`, `wo_number`, `wo_title`, `contact_person_name`, `contact_person_email`, `contact_person_phone`, `contractor_name`, `contractor_address`, `payment_term`, `late_delivery_clause`, `enclosure`, `defect_liability_period`, `liquidated_damages`, `special_condition`, `completion_date`, `created_on`, `created_by`, `temp_data`, `contract_value`, `wo_issue_date`) VALUES
(9, 1, 'Test', '', 'WO/2018002/00001', 'jjjj', 'hg', 'gh', 'h', 'h', 'j', 'hg', '', '  j ', 'h', 'h', '  h ', '2018-05-23', '2018-05-19 11:19:12', 5, 1, 'g', '2018-05-21'),
(10, 0, 'hKHjhj', 'kjhkjh', '678687', 'jkh', 'kj', 'h', 'hk', 'jh', 'kh', 'j', '', 'khk ', 'hk', 'hkj', 'jhkj ', '2018-05-21', '2018-05-19 11:19:18', 5, 1, 'k', '2018-05-29'),
(11, 4, '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', ' ', '0000-00-00', '2018-06-19 08:39:51', 6, 1, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `wo_tnc_template`
--

CREATE TABLE `wo_tnc_template` (
  `id` int(11) NOT NULL,
  `template_text` text NOT NULL,
  `template_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wo_transaction`
--

CREATE TABLE `wo_transaction` (
  `id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `wo_number` varchar(30) NOT NULL,
  `template_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_allocation`
--
ALTER TABLE `client_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_documents`
--
ALTER TABLE `client_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_type`
--
ALTER TABLE `client_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cop_master`
--
ALTER TABLE `cop_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directory`
--
ALTER TABLE `directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directory_files_comment`
--
ALTER TABLE `directory_files_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_category`
--
ALTER TABLE `document_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_file_type`
--
ALTER TABLE `document_file_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_group`
--
ALTER TABLE `menu_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_user`
--
ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_serial_number`
--
ALTER TABLE `next_serial_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_details`
--
ALTER TABLE `notification_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_summary`
--
ALTER TABLE `notification_summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pop_tax_rates`
--
ALTER TABLE `pop_tax_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pop_unit`
--
ALTER TABLE `pop_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_master`
--
ALTER TABLE `po_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_transaction`
--
ALTER TABLE `po_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_charter`
--
ALTER TABLE `project_charter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidemenu`
--
ALTER TABLE `sidemenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_list_master`
--
ALTER TABLE `task_list_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_list_transaction`
--
ALTER TABLE `task_list_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_status`
--
ALTER TABLE `task_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_detail`
--
ALTER TABLE `tracking_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_status`
--
ALTER TABLE `tracking_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_wbd_category_subcategory`
--
ALTER TABLE `user_wbd_category_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_category`
--
ALTER TABLE `vendor_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_category`
--
ALTER TABLE `wbs_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_master`
--
ALTER TABLE `wbs_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_sub_category1`
--
ALTER TABLE `wbs_sub_category1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_sub_category2`
--
ALTER TABLE `wbs_sub_category2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_sub_category3`
--
ALTER TABLE `wbs_sub_category3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_sub_category4`
--
ALTER TABLE `wbs_sub_category4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_sub_category5`
--
ALTER TABLE `wbs_sub_category5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbs_transaction`
--
ALTER TABLE `wbs_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wo_master`
--
ALTER TABLE `wo_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wo_tnc_template`
--
ALTER TABLE `wo_tnc_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wo_transaction`
--
ALTER TABLE `wo_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `client_allocation`
--
ALTER TABLE `client_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client_documents`
--
ALTER TABLE `client_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_type`
--
ALTER TABLE `client_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cop_master`
--
ALTER TABLE `cop_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `directory`
--
ALTER TABLE `directory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `directory_files_comment`
--
ALTER TABLE `directory_files_comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `document_category`
--
ALTER TABLE `document_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document_file_type`
--
ALTER TABLE `document_file_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `menu_group`
--
ALTER TABLE `menu_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `menu_user`
--
ALTER TABLE `menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `next_serial_number`
--
ALTER TABLE `next_serial_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pop_tax_rates`
--
ALTER TABLE `pop_tax_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pop_unit`
--
ALTER TABLE `pop_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `po_master`
--
ALTER TABLE `po_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `po_transaction`
--
ALTER TABLE `po_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_charter`
--
ALTER TABLE `project_charter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sidemenu`
--
ALTER TABLE `sidemenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `task_list_master`
--
ALTER TABLE `task_list_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task_list_transaction`
--
ALTER TABLE `task_list_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task_status`
--
ALTER TABLE `task_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tracking_detail`
--
ALTER TABLE `tracking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tracking_status`
--
ALTER TABLE `tracking_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_wbd_category_subcategory`
--
ALTER TABLE `user_wbd_category_subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vendor_category`
--
ALTER TABLE `vendor_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wbs_category`
--
ALTER TABLE `wbs_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wbs_master`
--
ALTER TABLE `wbs_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wbs_sub_category1`
--
ALTER TABLE `wbs_sub_category1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wbs_sub_category2`
--
ALTER TABLE `wbs_sub_category2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wbs_sub_category3`
--
ALTER TABLE `wbs_sub_category3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wbs_sub_category4`
--
ALTER TABLE `wbs_sub_category4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wbs_sub_category5`
--
ALTER TABLE `wbs_sub_category5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wbs_transaction`
--
ALTER TABLE `wbs_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `wo_master`
--
ALTER TABLE `wo_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wo_tnc_template`
--
ALTER TABLE `wo_tnc_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wo_transaction`
--
ALTER TABLE `wo_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
