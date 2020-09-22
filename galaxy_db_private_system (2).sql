-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 02:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galaxy_db_private_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_accounts`
--

CREATE TABLE `tbl_galaxy_accounts` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_url` varchar(100) NOT NULL,
  `account_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_accounts`
--

INSERT INTO `tbl_galaxy_accounts` (`account_id`, `account_name`, `account_url`, `account_status`) VALUES
(1, 'job card', 'job-card', 1),
(2, 'invoice', 'invoice', 1),
(3, 'receipt', 'receipt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_art_board`
--

CREATE TABLE `tbl_galaxy_art_board` (
  `board_auto_id` int(11) NOT NULL,
  `board_uniq_id` varchar(2000) NOT NULL,
  `board_name` varchar(100) NOT NULL,
  `board_gsm` int(11) NOT NULL,
  `board_color` varchar(100) NOT NULL,
  `board_brand` varchar(100) NOT NULL,
  `board_unit_qty` int(11) NOT NULL,
  `board_price_per_unit` float NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` float NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL,
  `board_edited_user_id` varchar(50) NOT NULL,
  `board_edited_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_art_board`
--

INSERT INTO `tbl_galaxy_art_board` (`board_auto_id`, `board_uniq_id`, `board_name`, `board_gsm`, `board_color`, `board_brand`, `board_unit_qty`, `board_price_per_unit`, `board_added_date_time`, `board_status`, `board_added_total_amount`, `board_added_user_id`, `board_edited_user_id`, `board_edited_date_time`) VALUES
(1, 'ART_B_GLX', 'Art Board', 310, 'N/A', 'None', 344, 32, '2020-09-09 04:46:07', 'active', 11008, '0', '100', '2020-09-21 09:48:13'),
(2, 'ART_B_GLX', 'Art Board', 0, 'N/A', 'bohui', 20, 10, '2020-09-09 04:49:44', 'active', 200, '0', '100', '2020-09-21 09:48:13'),
(3, 'ART_B_GLX', 'Art Board', 0, 'N/A', 'gc', 34, 32, '2020-09-09 04:51:54', 'active', 1088, '0', '100', '2020-09-21 09:48:13'),
(4, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'gc', 100, 12, '2020-09-09 05:01:55', 'active', 1200, 'naflin_01', '100', '2020-09-21 09:48:13'),
(5, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'bohui', 34, 43, '2020-09-09 05:08:09', 'active', 1462, 'naflin_01', '100', '2020-09-21 09:48:13'),
(6, 'ART_B_GLX', 'Art Board', 230, 'N/A', 'bohui', 44, 23, '2020-09-09 05:10:23', 'cancelled', 1012, 'naflin_01', 'naflin_01', '2020-09-21 01:40:09'),
(7, 'ART_B_GLX', 'Art Board', 230, 'N/A', 'gc', 20, 89, '2020-09-10 09:19:36', 'active', 623, 'naflin_01', '100', '2020-09-21 09:48:13'),
(8, 'ART_B_GLX', 'Art Board', 310, 'N/A', 'bohui', 9, 8, '2020-09-10 04:42:21', 'active', 72, 'naflin_01', '100', '2020-09-21 09:48:13'),
(9, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'bohui', 100, 32, '2020-09-11 10:15:31', 'active', 3200, 'naflin_01', '100', '2020-09-21 09:48:13'),
(10, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'N/A', 10, 12, '2020-09-11 02:18:04', 'active', 120, 'naflin_01', '100', '2020-09-21 09:48:13'),
(11, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'bohui', 22, 23, '2020-09-11 03:32:06', 'active', 506, 'naflin_01', '100', '2020-09-21 09:48:13'),
(12, 'ARTBGLX', 'Art Board', 310, 'N/A', 'gc', 33, 10, '2020-09-12 11:32:27', 'active', 330, 'naflin_01', '100', '2020-09-21 09:48:13'),
(13, 'ARTB', 'Art Board', 260, 'N/A', 'bohui', 100, 12, '2020-09-12 11:38:50', 'active', 1200, 'naflin_01', '100', '2020-09-21 09:48:13'),
(14, 'ART_B_GLX', 'Art Board', 230, 'N/A', 'gc', 7, 89, '2020-09-14 09:19:36', 'active', 623, 'naflin_01', '100', '2020-09-21 09:48:13'),
(15, 'ARTB', 'Art Board', 260, 'N/A', 'gc', 23, 12.3, '2020-09-21 01:42:47', 'pending', 282.9, 'naflin_01', '100', '0000-00-00 00:00:00'),
(16, 'ARTB', 'Art Board', 230, 'N/A', 'bohui', 63, 14.6, '2020-09-21 01:44:00', 'pending', 919.8, 'naflin_01', '100', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_box_board`
--

CREATE TABLE `tbl_galaxy_box_board` (
  `board_auto_id` int(11) NOT NULL,
  `board_uniq_id` varchar(2000) NOT NULL,
  `board_name` varchar(100) NOT NULL,
  `board_gsm` int(11) NOT NULL,
  `board_color` varchar(100) NOT NULL,
  `board_brand` varchar(100) NOT NULL,
  `board_unit_qty` int(11) NOT NULL,
  `board_price_per_unit` float NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` float NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL,
  `board_edited_user_id` varchar(50) NOT NULL,
  `board_edited_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_box_board`
--

INSERT INTO `tbl_galaxy_box_board` (`board_auto_id`, `board_uniq_id`, `board_name`, `board_gsm`, `board_color`, `board_brand`, `board_unit_qty`, `board_price_per_unit`, `board_added_date_time`, `board_status`, `board_added_total_amount`, `board_added_user_id`, `board_edited_user_id`, `board_edited_date_time`) VALUES
(1, 'BOXB', 'Box Board', 0, 'N/A', 'agrawal', 33, 12, '2020-09-17 05:19:15', 'cancelled', 396, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 11:30:47'),
(2, 'BOXB', 'Box Board', 350, 'N/A', 'agrawal', 25, 13, '2020-09-21 11:21:34', 'pending', 313, 'galaxy_amjad_01', '100', '0000-00-00 00:00:00'),
(3, 'BOXB', 'Box Board', 250, 'N/A', 'sripathi', 25, 15, '2020-09-21 11:22:41', 'cancelled', 363, 'galaxy_amjad_01', 'galaxy_amjad_01', '2020-09-21 12:49:15'),
(4, 'BOXB', 'Box Board', 350, 'N/A', 'sripathi', 25, 12.5, '2020-09-21 11:23:38', 'active', 313, 'galaxy_amjad_01', 'galaxy_amjad_01', '2020-09-21 11:46:27'),
(5, 'BOXB', 'Box Board', 300, 'N/A', 'sripathi', 25, 10.5, '2020-09-21 11:24:32', 'active', 263, 'galaxy_amjad_01', 'galaxy_amjad_01', '2020-09-21 11:46:14'),
(6, 'BOXB', 'Box Board', 250, 'N/A', 'agrawal', 24, 9.5, '2020-09-21 11:26:48', 'pending', 228, 'galaxy_amjad_01', '100', '0000-00-00 00:00:00'),
(7, 'BOXB', 'Box Board', 350, 'N/A', 'agrawal', 3, 10.5, '2020-09-21 11:27:43', 'active', 32, 'galaxy_amjad_01', 'naflin_01', '2020-09-22 09:06:30'),
(8, 'BOXB', 'Box Board', 400, 'N/A', 'agrawal', 5, 12.5, '2020-09-21 11:29:05', 'cancelled', 62.5, 'galaxy_amjad_01', 'galaxy_amjad_01', '2020-09-21 11:46:05'),
(9, 'BOXB', 'Box Board', 400, 'N/A', 'sripathi', 25, 7.5, '2020-09-21 11:44:34', 'active', 187.5, 'galaxy_amjad_01', 'galaxy_amjad_01', '2020-09-21 11:45:58'),
(10, 'BOXB', 'Box Board', 400, 'N/A', 'sripathi', 25, 12.5, '2020-09-21 01:13:23', 'cancelled', 312.5, 'naflin_01', 'naflin_01', '2020-09-21 01:13:33'),
(11, 'BOXB', 'Box Board', 300, 'N/A', 'sripathi', 4, 12.9, '2020-09-21 01:20:07', 'pending', 51.6, 'naflin_01', '100', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_bristal_board`
--

CREATE TABLE `tbl_galaxy_bristal_board` (
  `board_auto_id` int(11) NOT NULL,
  `board_uniq_id` varchar(2000) NOT NULL,
  `board_name` varchar(100) NOT NULL,
  `board_gsm` int(11) NOT NULL,
  `board_color` varchar(100) NOT NULL,
  `board_brand` varchar(100) NOT NULL,
  `board_unit_qty` int(11) NOT NULL,
  `board_price_per_unit` float NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` float NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL,
  `board_edited_user_id` varchar(50) NOT NULL,
  `board_edited_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_bristal_board`
--

INSERT INTO `tbl_galaxy_bristal_board` (`board_auto_id`, `board_uniq_id`, `board_name`, `board_gsm`, `board_color`, `board_brand`, `board_unit_qty`, `board_price_per_unit`, `board_added_date_time`, `board_status`, `board_added_total_amount`, `board_added_user_id`, `board_edited_user_id`, `board_edited_date_time`) VALUES
(1, 'BRISTALB', 'Bristal Board', 0, 'Blue', 'N/A', 23, 10, '2020-09-17 05:31:20', 'cancelled', 230, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 12:22:00'),
(2, 'BRISTALB', 'Bristal Board', 0, 'Green', 'N/A', 50, 12, '2020-09-18 09:07:12', 'active', 600, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 12:21:23'),
(3, 'BRISTALB', 'Bristal Board', 0, 'Pink', 'N/A', 20, 11, '2020-09-18 09:07:26', 'cancelled', 220, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 12:21:54'),
(4, 'BRISTALB', 'Bristal Board', 0, 'Yellow', 'N/A', 10, 14, '2020-09-18 09:09:03', 'active', 140, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 12:21:09'),
(5, 'BRISTALB', 'Bristal Board', 0, 'Green', 'N/A', 22, 12.6, '2020-09-21 01:10:38', 'active', 277.2, 'galaxy_amjad_01', 'naflin_01', '2020-09-21 01:12:01'),
(6, 'BRISTALB', 'Bristal Board', 0, 'Green', 'N/A', 14, 125.5, '2020-09-21 01:19:51', 'pending', 1757, 'naflin_01', '100', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_icegold_board`
--

CREATE TABLE `tbl_galaxy_icegold_board` (
  `board_auto_id` int(11) NOT NULL,
  `board_uniq_id` varchar(2000) NOT NULL,
  `board_name` varchar(100) NOT NULL,
  `board_gsm` int(11) NOT NULL,
  `board_color` varchar(100) NOT NULL,
  `board_brand` varchar(100) NOT NULL,
  `board_unit_qty` int(11) NOT NULL,
  `board_price_per_unit` float NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` float NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL,
  `board_edited_user_id` varchar(50) NOT NULL,
  `board_edited_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_icegold_board`
--

INSERT INTO `tbl_galaxy_icegold_board` (`board_auto_id`, `board_uniq_id`, `board_name`, `board_gsm`, `board_color`, `board_brand`, `board_unit_qty`, `board_price_per_unit`, `board_added_date_time`, `board_status`, `board_added_total_amount`, `board_added_user_id`, `board_edited_user_id`, `board_edited_date_time`) VALUES
(1, 'ICEB', 'Ice Gold', 0, 'N/A', 'N/A', 12, 12, '2020-09-17 04:03:58', 'cancelled', 144, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 10:16:13'),
(2, 'ICEB', 'Ice Gold', 0, 'N/A', 'N/A', 10, 43, '2020-09-17 04:06:40', 'active', 430, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 10:11:28'),
(4, 'ICEB', 'Ice Gold', 0, 'N/A', 'N/A', 22, 12.5, '2020-09-21 01:16:12', 'cancelled', 275, 'naflin_01', 'naflin_01', '2020-09-21 01:16:48'),
(5, 'ICEB', 'Ice Gold', 0, 'N/A', 'N/A', 22, 12.2, '2020-09-21 01:20:24', 'pending', 268.4, 'naflin_01', '100', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_items`
--

CREATE TABLE `tbl_galaxy_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_items`
--

INSERT INTO `tbl_galaxy_items` (`item_id`, `item_name`, `item_section_id`) VALUES
(1, 'Handbill or leaflet', 1),
(2, 'Visiting Card', 1),
(3, 'Bill book', 1),
(4, 'Lunch box', 1),
(5, 'Special Box', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_ivery_board`
--

CREATE TABLE `tbl_galaxy_ivery_board` (
  `board_auto_id` int(11) NOT NULL,
  `board_uniq_id` varchar(2000) NOT NULL,
  `board_name` varchar(100) NOT NULL,
  `board_gsm` int(11) NOT NULL,
  `board_color` varchar(100) NOT NULL,
  `board_brand` varchar(100) NOT NULL,
  `board_unit_qty` int(11) NOT NULL,
  `board_price_per_unit` float NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` float NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL,
  `board_edited_user_id` varchar(50) NOT NULL,
  `board_edited_date_time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_ivery_board`
--

INSERT INTO `tbl_galaxy_ivery_board` (`board_auto_id`, `board_uniq_id`, `board_name`, `board_gsm`, `board_color`, `board_brand`, `board_unit_qty`, `board_price_per_unit`, `board_added_date_time`, `board_status`, `board_added_total_amount`, `board_added_user_id`, `board_edited_user_id`, `board_edited_date_time`) VALUES
(1, 'IVERYB', 'Ivery Board', 0, 'N/A', 'N/A', 5, 32, '2020-09-17 10:00:16', 'active', 160, 'naflin_01', '0', '0000-00-00 00:00:00.000000'),
(2, 'IVERYB', 'Ivery Board', 0, 'N/A', 'N/A', 66, 12, '2020-09-17 11:06:01', 'cancelled', 792, 'naflin_01', '0', '0000-00-00 00:00:00.000000'),
(3, 'IVERYB', 'Ivery Board', 0, 'N/A', 'N/A', 18, 10, '2020-09-18 04:35:38', 'cancelled', 180, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 12:02:24.000000'),
(4, 'IVERYB', 'Ivery Board', 0, 'N/A', 'N/A', 11, 20, '2020-09-21 09:31:52', 'cancelled', 220, 'naflin_01', 'galaxy_amjad_01', '2020-09-21 09:44:37.000000'),
(5, 'IVERYB', 'Ivery Board', 0, 'N/A', 'N/A', 12, 12.6, '2020-09-21 12:56:36', 'active', 151.2, 'galaxy_amjad_01', 'galaxy_amjad_01', '2020-09-21 01:06:14.000000'),
(6, 'IVERYB', 'Ivery Board', 0, 'N/A', 'N/A', 15, 16.6, '2020-09-21 01:02:44', 'pending', 249, 'galaxy_amjad_01', '100', '0000-00-00 00:00:00.000000'),
(7, 'BRISTALB', 'Bristal Board', 0, 'Green', 'N/A', 12, 16.3, '2020-09-21 01:09:22', 'pending', 195.6, 'galaxy_amjad_01', '100', '0000-00-00 00:00:00.000000'),
(8, 'IVERYB', 'Ivery Board', 0, 'N/A', 'N/A', 12, 23.7, '2020-09-21 01:22:46', 'pending', 284.4, 'naflin_01', '100', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_job_card`
--

CREATE TABLE `tbl_galaxy_job_card` (
  `job_card_auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_ncr_layers`
--

CREATE TABLE `tbl_galaxy_ncr_layers` (
  `layer_id` int(11) NOT NULL,
  `layer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_ncr_layers`
--

INSERT INTO `tbl_galaxy_ncr_layers` (`layer_id`, `layer_name`) VALUES
(1, 'White (carbonized)'),
(2, 'Blue (carbonized)'),
(3, 'Pink (carbonized)'),
(4, 'Green'),
(5, 'Yellow'),
(6, 'Pink');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_stock_items`
--

CREATE TABLE `tbl_galaxy_stock_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_section` int(11) NOT NULL,
  `item_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_stock_items`
--

INSERT INTO `tbl_galaxy_stock_items` (`item_id`, `item_name`, `item_section`, `item_url`) VALUES
(1, 'Art Board', 1, 'art-board'),
(5, 'Ivery board', 1, 'ivery-board'),
(6, 'Ice Gold', 1, 'ice-gold'),
(10, 'Box Board', 1, 'box-board'),
(11, 'Bristal Board', 1, 'bristal-board'),
(13, 'NCR', 2, 'ncr-paper'),
(19, 'Demain', 2, 'demain-paper'),
(21, 'Cover Paper', 2, 'cover-paper'),
(23, 'Bank Paper', 2, 'bank-paper'),
(27, 'Art Paper', 2, 'art-paper'),
(38, 'Fire red', 3, 'fire-red'),
(42, 'Fount', 4, 'fount'),
(43, 'Sticker Paper', 2, 'sticker-paper'),
(44, 'Warm red', 3, 'warm-red'),
(45, 'Royal Blue', 3, 'royal-blue'),
(46, 'E|green', 3, 'egreen'),
(47, 'Cyen', 3, 'cyen'),
(48, 'Yellow', 3, 'yellow'),
(49, 'Magenta', 3, 'magenta'),
(50, 'Black', 3, 'black'),
(51, 'Gold', 3, 'gold'),
(52, 'Violet', 3, 'violet'),
(53, 'B|Orange', 3, 'borange');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_users`
--

CREATE TABLE `tbl_galaxy_users` (
  `user_default_id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_password` varchar(80) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_type` int(80) NOT NULL,
  `user_number` varchar(80) NOT NULL,
  `user_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_users`
--

INSERT INTO `tbl_galaxy_users` (`user_default_id`, `user_id`, `user_name`, `user_password`, `user_full_name`, `user_email`, `user_status`, `user_type`, `user_number`, `user_image`) VALUES
(1, 'galaxy_amjad_01', 'galaxy_amjad', '0cc175b9c0f1b6a831c399e269772661', 'Amjad Khan', 'infoamjath@gmail.com', 1, 2, '0777951404', 'images/user/1.jpg'),
(2, 'naflin_01', 'galaxy_admin', '0cc175b9c0f1b6a831c399e269772661', 'Moahamed naflin', 'naflin456@gmail.com', 1, 2, '0777951404', 'images/user/03.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_galaxy_accounts`
--
ALTER TABLE `tbl_galaxy_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_galaxy_art_board`
--
ALTER TABLE `tbl_galaxy_art_board`
  ADD PRIMARY KEY (`board_auto_id`);

--
-- Indexes for table `tbl_galaxy_box_board`
--
ALTER TABLE `tbl_galaxy_box_board`
  ADD PRIMARY KEY (`board_auto_id`);

--
-- Indexes for table `tbl_galaxy_bristal_board`
--
ALTER TABLE `tbl_galaxy_bristal_board`
  ADD PRIMARY KEY (`board_auto_id`);

--
-- Indexes for table `tbl_galaxy_icegold_board`
--
ALTER TABLE `tbl_galaxy_icegold_board`
  ADD PRIMARY KEY (`board_auto_id`);

--
-- Indexes for table `tbl_galaxy_items`
--
ALTER TABLE `tbl_galaxy_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_galaxy_ivery_board`
--
ALTER TABLE `tbl_galaxy_ivery_board`
  ADD PRIMARY KEY (`board_auto_id`);

--
-- Indexes for table `tbl_galaxy_job_card`
--
ALTER TABLE `tbl_galaxy_job_card`
  ADD PRIMARY KEY (`job_card_auto_id`);

--
-- Indexes for table `tbl_galaxy_ncr_layers`
--
ALTER TABLE `tbl_galaxy_ncr_layers`
  ADD PRIMARY KEY (`layer_id`);

--
-- Indexes for table `tbl_galaxy_stock_items`
--
ALTER TABLE `tbl_galaxy_stock_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_galaxy_users`
--
ALTER TABLE `tbl_galaxy_users`
  ADD PRIMARY KEY (`user_default_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galaxy_accounts`
--
ALTER TABLE `tbl_galaxy_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_galaxy_art_board`
--
ALTER TABLE `tbl_galaxy_art_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_galaxy_box_board`
--
ALTER TABLE `tbl_galaxy_box_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_galaxy_bristal_board`
--
ALTER TABLE `tbl_galaxy_bristal_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_galaxy_icegold_board`
--
ALTER TABLE `tbl_galaxy_icegold_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_galaxy_items`
--
ALTER TABLE `tbl_galaxy_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_galaxy_ivery_board`
--
ALTER TABLE `tbl_galaxy_ivery_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_galaxy_job_card`
--
ALTER TABLE `tbl_galaxy_job_card`
  MODIFY `job_card_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galaxy_ncr_layers`
--
ALTER TABLE `tbl_galaxy_ncr_layers`
  MODIFY `layer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_galaxy_stock_items`
--
ALTER TABLE `tbl_galaxy_stock_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_galaxy_users`
--
ALTER TABLE `tbl_galaxy_users`
  MODIFY `user_default_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
