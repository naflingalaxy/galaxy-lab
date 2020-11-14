-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 09:32 AM
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
  `account_status` int(11) NOT NULL,
  `account_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_accounts`
--

INSERT INTO `tbl_galaxy_accounts` (`account_id`, `account_name`, `account_url`, `account_status`, `account_group`) VALUES
(1, 'job card', 'job-card', 1, 1),
(2, 'invoice', 'invoice', 1, 1),
(4, 'costing', 'costing', 1, 2),
(5, 'daily sales', 'daily-sales', 1, 2),
(6, 'Price List', 'price-list', 1, 2),
(7, 'receipt', 'receipt', 1, 1);

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
-- Table structure for table `tbl_galaxy_cost_child`
--

CREATE TABLE `tbl_galaxy_cost_child` (
  `cost_id` int(11) NOT NULL,
  `cost_parent_id` int(11) NOT NULL,
  `cost_name` varchar(100) NOT NULL,
  `cost_qty` decimal(10,0) NOT NULL,
  `cost_cost` varchar(11) NOT NULL,
  `cost_pro` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_cost_child`
--

INSERT INTO `tbl_galaxy_cost_child` (`cost_id`, `cost_parent_id`, `cost_name`, `cost_qty`, `cost_cost`, `cost_pro`) VALUES
(176, 24, '230_GSM_Art_Board_gc', '56', '1820.00', '2275.00'),
(177, 24, '310_GSM_Art_Board_gc', '56', '2366.00', '3167.50'),
(178, 24, 'NCR_Top_white_(carbonized)Pindo 2000', '56', '683.20', '854.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_cost_parent`
--

CREATE TABLE `tbl_galaxy_cost_parent` (
  `cost_parent_id` int(11) NOT NULL,
  `cost_parent_name` varchar(100) NOT NULL,
  `cost_parent_desc` varchar(100) NOT NULL,
  `cost_parent_qty` int(11) NOT NULL,
  `cost_parent_artwork` float NOT NULL,
  `cost_parent_plate` float NOT NULL,
  `cost_parent_laminating` float NOT NULL,
  `cost_parent_cutter` float NOT NULL,
  `cost_parent_cutter_charge` float NOT NULL,
  `cost_parent_preparization` float NOT NULL,
  `cost_parent_transport` float NOT NULL,
  `cost_parent_other` float NOT NULL,
  `cost_parent_impression` int(11) NOT NULL,
  `cost_parent_added_date_time` datetime NOT NULL,
  `cost_parent_added_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_cost_parent`
--

INSERT INTO `tbl_galaxy_cost_parent` (`cost_parent_id`, `cost_parent_name`, `cost_parent_desc`, `cost_parent_qty`, `cost_parent_artwork`, `cost_parent_plate`, `cost_parent_laminating`, `cost_parent_cutter`, `cost_parent_cutter_charge`, `cost_parent_preparization`, `cost_parent_transport`, `cost_parent_other`, `cost_parent_impression`, `cost_parent_added_date_time`, `cost_parent_added_user_id`) VALUES
(24, 'et', 'tert', 56, 6, 6, 6, 6, 6, 6, 6, 6, 6, '2020-10-16 10:59:11', 'naflin_01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_daily_sales_jobcard`
--

CREATE TABLE `tbl_galaxy_daily_sales_jobcard` (
  `jobcard_uniq_id` int(11) NOT NULL,
  `jobcard_id` int(11) NOT NULL,
  `jobcard_sales_man` varchar(100) NOT NULL,
  `jobcard_status` int(11) NOT NULL,
  `jobcard_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `tbl_galaxy_invoice`
--

CREATE TABLE `tbl_galaxy_invoice` (
  `invoice_uniq_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoice_job_card_id` int(11) NOT NULL,
  `invoice_customer_name` varchar(100) NOT NULL,
  `invoice_description` varchar(250) NOT NULL,
  `invoice_qty` int(11) NOT NULL,
  `invoice_rate` int(11) NOT NULL,
  `invoice_discount` int(11) NOT NULL,
  `invoice_advance` int(11) NOT NULL,
  `invoice_date_time` datetime NOT NULL,
  `invoice_added_user` varchar(15) NOT NULL,
  `invoice_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_invoice`
--

INSERT INTO `tbl_galaxy_invoice` (`invoice_uniq_id`, `invoice_id`, `invoice_job_card_id`, `invoice_customer_name`, `invoice_description`, `invoice_qty`, `invoice_rate`, `invoice_discount`, `invoice_advance`, `invoice_date_time`, `invoice_added_user`, `invoice_status`) VALUES
(1, 1, 17, 'testing', 'testing', 120, 10, 5, 150, '2020-11-11 16:07:09', 'Naflin_01', 0),
(2, 2, 8, ' king arther', '8tyj', 87, 9, 67, 8, '2020-11-12 02:26:26', 'naflin_01', 1),
(3, 3, 10, 'testing', 'fverger', 45, 54, 4, 3, '2020-11-12 02:40:41', 'naflin_01', 1),
(6, 8, 10, ' leesa', 'twe', 45, 5, 4, 5, '2020-11-14 09:33:38', 'naflin_01', 0),
(7, 7, 12, ' king arther 55', 'gesg test', 454, 544, 10, 5001, '2020-11-13 01:46:18', 'naflin_01', 0),
(8, 8, 8, ' king arther', '57', 67, 76, 76, 67, '2020-11-14 11:25:40', 'naflin_01', 0);

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
  `job_card_auto_id` int(11) NOT NULL,
  `job_card_customer_name` varchar(150) NOT NULL,
  `job_card_customer_address` varchar(300) NOT NULL,
  `job_card_customer_contact` varchar(15) NOT NULL,
  `job_card_customer_mail` varchar(150) NOT NULL,
  `job_card_item` varchar(100) NOT NULL,
  `job_card_item_qty` varchar(100) NOT NULL,
  `job_card_item_size` varchar(100) NOT NULL,
  `job_card_item_single_color` varchar(100) NOT NULL,
  `job_card_item_double_f_color` varchar(100) NOT NULL,
  `job_card_item_double_b_color` varchar(100) NOT NULL,
  `job_card_item_status` varchar(100) NOT NULL,
  `job_card_item_meterial_paper` varchar(100) NOT NULL,
  `job_card_item_meterial_board` varchar(100) NOT NULL,
  `job_card_item_pages` varchar(100) NOT NULL,
  `job_card_item_laminating` varchar(100) NOT NULL,
  `job_card_item_orientation` varchar(100) NOT NULL,
  `job_card_item_sample` varchar(100) NOT NULL,
  `job_card_item_duplicate` varchar(100) NOT NULL,
  `job_card_item_perparate` varchar(100) NOT NULL,
  `job_card_item_numbering` varchar(100) NOT NULL,
  `job_card_item_book_number` varchar(100) NOT NULL,
  `job_card_item_binding` varchar(100) NOT NULL,
  `job_card_item_added_user` varchar(100) NOT NULL,
  `job_card_item_edited_user` varchar(100) NOT NULL,
  `job_card_item_date_time` varchar(100) NOT NULL
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
-- Table structure for table `tbl_galaxy_price_list`
--

CREATE TABLE `tbl_galaxy_price_list` (
  `price_list_item_auto_id` int(11) NOT NULL,
  `price_list_item_id` varchar(100) NOT NULL,
  `price_list_item_cost` varchar(10) NOT NULL,
  `price_list_item_qty` int(11) NOT NULL,
  `price_list_item_added_date_time` datetime NOT NULL,
  `price_list_item_added_user_id` varchar(100) NOT NULL,
  `price_list_item_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_price_list`
--

INSERT INTO `tbl_galaxy_price_list` (`price_list_item_auto_id`, `price_list_item_id`, `price_list_item_cost`, `price_list_item_qty`, `price_list_item_added_date_time`, `price_list_item_added_user_id`, `price_list_item_status`) VALUES
(13, 'ABGC230', '32.5', 39, '2020-10-24 12:43:36', 'naflin_01', 0),
(14, 'ABBH230', '32.5', 0, '2020-10-24 12:44:00', 'naflin_01', 0),
(15, 'ABUN260', '37.5', 0, '2020-10-24 12:46:46', 'naflin_01', 0),
(16, 'ABUN270', '32', 100, '2020-10-24 12:47:06', 'naflin_01', 0),
(17, 'ABGC310', '45.25', 186, '2020-10-24 12:47:35', 'naflin_01', 0),
(18, 'IVERY', '48.5', 0, '2020-10-24 12:49:17', 'naflin_01', 0),
(19, 'ICEG', '50', 4, '2020-10-24 12:50:08', 'naflin_01', 0),
(20, 'BXBKER250', '25.5', 220, '2020-10-24 12:59:03', 'naflin_01', 0),
(21, 'BXBKER300', '32', 500, '2020-10-24 01:02:51', 'naflin_01', 0),
(22, 'BXBSRI350', '37.5', 371, '2020-10-24 01:04:57', 'naflin_01', 0),
(23, 'BXBSRI400', '46', 49, '2020-10-24 01:05:24', 'naflin_01', 0),
(24, 'BRSTLBUNBLU', '15.75', 25, '2020-10-24 01:11:17', 'naflin_01', 0),
(25, 'BRSTLBUNWHT', '13.5', 98, '2020-10-24 01:12:08', 'naflin_01', 0),
(26, 'BRSTLBSPBPNK', '16', 25, '2020-10-24 01:12:29', 'naflin_01', 0),
(27, 'BRSTLBSPBYLW', '16', 24, '2020-10-24 01:12:45', 'naflin_01', 0),
(28, 'BRSTLBSPBGRN', '16', 20, '2020-10-24 01:13:00', 'naflin_01', 0),
(29, 'NCRTWCP2000', '12.2', 0, '2020-10-24 01:17:34', 'naflin_01', 0),
(30, 'NCRTWCADLR', '12.6', 331, '2020-10-24 01:18:14', 'naflin_01', 0),
(31, 'NCRMBCP2000', '12.55', 357, '2020-10-24 01:18:52', 'naflin_01', 0),
(32, 'NCRMPCP2000', '12.55', 0, '2020-10-24 01:19:32', 'naflin_01', 0),
(33, 'NCRMGP2000', '12.55', 235, '2020-10-24 01:20:06', 'naflin_01', 0),
(34, 'NCRBYP2000', '11.35', 525, '2020-10-24 01:20:43', 'naflin_01', 0),
(35, 'NCRBPADLR', '11.8', 415, '2020-10-24 01:21:15', 'naflin_01', 0),
(36, 'DMNYUDA', '7.2', 66, '2020-10-24 01:21:51', 'naflin_01', 0),
(37, 'DMNWNP48RAN', '3.05', 262, '2020-10-24 01:23:15', 'naflin_01', 0),
(38, 'DMNPNKRAN', '3.35', 11, '2020-10-24 01:27:26', 'naflin_01', 0),
(39, 'CVRPPNK', '9', 72, '2020-10-24 01:49:14', 'naflin_01', 0),
(40, 'CVRPGRN', '9', 4, '2020-10-24 01:49:39', 'naflin_01', 0),
(41, 'BNKUN60SH', '6', 15, '2020-10-24 01:50:25', 'naflin_01', 0),
(42, 'BNKB60', '7.45', 523, '2020-10-24 01:51:01', 'naflin_01', 0),
(43, 'BNKUN60LG', '7.5', 653, '2020-10-24 01:51:44', 'naflin_01', 0),
(44, 'BNKB70', '7.15', 500, '2020-10-24 01:52:25', 'naflin_01', 0),
(45, 'BNKIB80', '9', 1446, '2020-10-24 01:52:51', 'naflin_01', 0),
(47, 'ARTP100CH', '12.4', 453, '2020-10-24 01:54:24', 'naflin_01', 0),
(48, 'ARTP120CH', '15.35', 0, '2020-10-24 01:54:56', 'naflin_01', 0),
(49, 'ARTP150N', '16.7', 12, '2020-10-24 01:55:16', 'naflin_01', 0),
(50, 'STCKR', '40.5', 7, '2020-10-24 01:55:38', 'naflin_01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_receipt`
--

CREATE TABLE `tbl_galaxy_receipt` (
  `receipt_uniq_id` int(11) NOT NULL,
  `receipt_id` int(11) NOT NULL,
  `receipt_job_card_id` int(11) NOT NULL,
  `receipt_amount` int(11) NOT NULL,
  `receipt_amount_letters` varchar(250) NOT NULL,
  `receipt_invoice_id` int(11) NOT NULL,
  `receipt_cheque_id` int(11) NOT NULL,
  `receipt_cheque_bank` varchar(150) NOT NULL,
  `receipt_cheque_date` date NOT NULL,
  `receipt_date_time` datetime NOT NULL,
  `receipt_added_user` varchar(30) NOT NULL,
  `receipt_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_sales_job_card`
--

CREATE TABLE `tbl_galaxy_sales_job_card` (
  `job_card_uniq_id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `job_card_customer_id` int(11) NOT NULL,
  `job_card_customer_name` varchar(100) NOT NULL,
  `job_card_address` varchar(100) NOT NULL,
  `job_card_customer_number` varchar(100) NOT NULL,
  `job_card_job_type` varchar(100) NOT NULL,
  `job_card_amount` decimal(10,0) NOT NULL,
  `job_card_date_time` datetime NOT NULL,
  `job_card_added_user_id` varchar(100) NOT NULL,
  `job_card_status` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_sales_job_card`
--

INSERT INTO `tbl_galaxy_sales_job_card` (`job_card_uniq_id`, `job_card_id`, `job_card_customer_id`, `job_card_customer_name`, `job_card_address`, `job_card_customer_number`, `job_card_job_type`, `job_card_amount`, `job_card_date_time`, `job_card_added_user_id`, `job_card_status`) VALUES
(1, 0, 1, 'se', '5645', '56', '56', '56', '2020-10-19 02:06:48', '0', '0'),
(2, 0, 18, 'rakman', '5645', '56', '56', '56', '2020-10-19 02:06:48', '0', '0'),
(3, 0, 1, 'zuri', '5645', '56', '56', '56', '2020-10-19 02:06:48', '0', '0'),
(4, 7, 1, 'king arther', '5645', '56', '56', '56', '2020-10-19 02:06:48', '0', '0'),
(5, 0, 1, 'tger', 'tger', '546', 'ger', '654', '2020-10-19 02:10:59', 'naflin_01', '0'),
(6, 0, 1, 'hrt', 'rt', '546', 'y567', '567', '2020-10-19 02:11:06', 'naflin_01', '0'),
(7, 8, 1, 'king arther', '5645', '56', '56', '56', '2020-10-19 02:06:48', '0', '1'),
(8, 5, 1, 'kin raseed', '12231', '2434', '43243', '432', '2020-10-19 02:27:09', 'naflin_01', '0'),
(9, 0, 1, 'ghe54y', 'h54y', '54', '456', '645', '2020-10-19 02:30:55', 'naflin_01', '0'),
(10, 0, 1, 'jhrt', 'jrt', '67', '67', '76', '2020-10-19 02:31:50', 'naflin_01', '0'),
(11, 0, 1, 'jtyj', 'tyj', '67', 'jtyj', '7', '2020-10-19 02:32:32', 'naflin_01', '0'),
(12, 0, 16, 'hrth', 'hrt', '657', '756', '76', '2020-10-19 02:33:13', 'naflin_01', '0'),
(13, 0, 1, 'king arther', '54', '567', '76', '76', '2020-10-27 10:09:14', 'naflin_01', '0'),
(14, 0, 18, 'bdghhr', 'hrth', '6', '6776', '76', '2020-10-27 10:09:30', 'naflin_01', '0'),
(15, 0, 1, 'king arther', '677', '67', '76', '76', '2020-10-27 10:09:45', 'naflin_01', '0'),
(16, 0, 19, '34', '4656', '6546', '654', '645', '2020-10-27 10:10:37', 'naflin_01', '0'),
(18, 0, 20, '455ger', 'gerg', '656', '456', '656', '2020-10-27 10:11:35', 'naflin_01', '0'),
(20, 1, 16, 'hrth', '34', '234', '4324', '3445', '2020-10-27 12:44:03', 'naflin_01', '0'),
(21, 1, 16, 'hrth', '3', '334', '44', '3', '2020-10-27 12:46:13', 'naflin_01', '0'),
(22, 1, 16, 'hrth', '454', '5646', '56', '56', '2020-10-27 12:46:45', 'naflin_01', '0'),
(23, 1, 16, 'hrth', '56', '456', '654', '65', '2020-10-27 12:47:17', 'naflin_01', '0'),
(24, 1, 16, 'hrth', '56', '5', '5', '5', '2020-10-27 01:15:12', 'naflin_01', '0'),
(26, 9, 21, 'gewrtger', 'greg', '6', '56', '65', '2020-10-27 03:03:03', 'naflin_01', '0'),
(27, 10, 22, 'leesa', '45', '545', '54', '54', '2020-10-27 03:03:51', 'naflin_01', '1'),
(28, 11, 23, '', 'rehyh', '56', '56', '65', '2020-10-27 04:31:36', 'naflin_01', '0'),
(29, 12, 1, 'king arther', 'rt', '56', '67', '67', '2020-10-27 04:32:11', 'naflin_01', '1'),
(30, 13, 24, '56ggghtg', '56', '456', '546', '5464', '2020-10-27 04:32:21', 'naflin_01', '1'),
(31, 14, 1, 'king arther', 'dxf', '4444', '44', '54', '2020-11-10 08:56:12', 'naflin_01', '0'),
(32, 15, 25, 'killadi ranga', '45', '534', '54', '45', '2020-11-10 08:56:33', 'naflin_01', '0'),
(33, 16, 27, 'killadi rangaq', '77888888333', '8788883333', '88888333', '778883333', '2020-11-10 11:41:37', 'naflin_01', '0'),
(34, 17, 1, 'king arther', 'grh555', '464444', '64564444', '6546444', '2020-11-10 11:05:44', 'naflin_01', '1'),
(35, 18, 27, 'killadi rangaq', 'bdgh', '64565', 'geyhrt', '12', '2020-11-13 01:48:20', 'naflin_01', '0'),
(36, 19, 19, 'testers', '444', '444', '44', '44', '2020-11-13 02:16:46', 'naflin_01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_stock_items`
--

CREATE TABLE `tbl_galaxy_stock_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_section` int(11) NOT NULL,
  `item_url` varchar(200) NOT NULL,
  `item_cost_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_stock_items`
--

INSERT INTO `tbl_galaxy_stock_items` (`item_id`, `item_name`, `item_section`, `item_url`, `item_cost_id`) VALUES
(1, 'Art Board', 1, 'art-board', 1),
(5, 'Ivery board', 1, 'ivery-board', 1),
(6, 'Ice Gold', 1, 'ice-gold', 1),
(10, 'Box Board', 1, 'box-board', 1),
(11, 'Bristal Board', 1, 'bristal-board', 1),
(13, 'NCR', 2, 'ncr-paper', 1),
(19, 'Demain', 2, 'demain-paper', 1),
(21, 'Cover Paper', 2, 'cover-paper', 1),
(23, 'Bank Paper', 2, 'bank-paper', 1),
(27, 'Art Paper', 2, 'art-paper', 1),
(38, 'Fire red', 3, 'fire-red', 0),
(42, 'Fount', 4, 'fount', 0),
(43, 'Sticker Paper', 2, 'sticker-paper', 1),
(44, 'Warm red', 3, 'warm-red', 0),
(45, 'Royal Blue', 3, 'royal-blue', 0),
(46, 'E|green', 3, 'egreen', 0),
(47, 'Cyen', 3, 'cyen', 0),
(48, 'Yellow', 3, 'yellow', 0),
(49, 'Magenta', 3, 'magenta', 0),
(50, 'Black', 3, 'black', 0),
(51, 'Gold', 3, 'gold', 0),
(52, 'Violet', 3, 'violet', 0),
(53, 'B|Orange', 3, 'borange', 0);

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
(2, 'naflin_01', 'galaxy_admin', '0cc175b9c0f1b6a831c399e269772661', 'Moahamed naflin', 'naflin456@gmail.com', 1, 2, '0777951404', 'images/user/03.jpg'),
(3, 'habeeb_01', 'habeeb', '47bce5c74f589f4867dbd57e9ca9f808', 'Habeeb', 'gemskurunegala@gmail.com', 1, 2, '0777951404', 'images/user/03.jpg'),
(4, 'azeem_01', 'azeem', '202cb962ac59075b964b07152d234b70', 'azeem', 'azeem@gmail.com', 1, 3, '0767720200', 'images/user/05.jpg');

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
-- Indexes for table `tbl_galaxy_cost_child`
--
ALTER TABLE `tbl_galaxy_cost_child`
  ADD PRIMARY KEY (`cost_id`);

--
-- Indexes for table `tbl_galaxy_cost_parent`
--
ALTER TABLE `tbl_galaxy_cost_parent`
  ADD PRIMARY KEY (`cost_parent_id`);

--
-- Indexes for table `tbl_galaxy_daily_sales_jobcard`
--
ALTER TABLE `tbl_galaxy_daily_sales_jobcard`
  ADD PRIMARY KEY (`jobcard_uniq_id`);

--
-- Indexes for table `tbl_galaxy_icegold_board`
--
ALTER TABLE `tbl_galaxy_icegold_board`
  ADD PRIMARY KEY (`board_auto_id`);

--
-- Indexes for table `tbl_galaxy_invoice`
--
ALTER TABLE `tbl_galaxy_invoice`
  ADD PRIMARY KEY (`invoice_uniq_id`);

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
-- Indexes for table `tbl_galaxy_price_list`
--
ALTER TABLE `tbl_galaxy_price_list`
  ADD PRIMARY KEY (`price_list_item_auto_id`);

--
-- Indexes for table `tbl_galaxy_receipt`
--
ALTER TABLE `tbl_galaxy_receipt`
  ADD PRIMARY KEY (`receipt_uniq_id`);

--
-- Indexes for table `tbl_galaxy_sales_job_card`
--
ALTER TABLE `tbl_galaxy_sales_job_card`
  ADD PRIMARY KEY (`job_card_uniq_id`);

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `tbl_galaxy_cost_child`
--
ALTER TABLE `tbl_galaxy_cost_child`
  MODIFY `cost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `tbl_galaxy_cost_parent`
--
ALTER TABLE `tbl_galaxy_cost_parent`
  MODIFY `cost_parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_galaxy_daily_sales_jobcard`
--
ALTER TABLE `tbl_galaxy_daily_sales_jobcard`
  MODIFY `jobcard_uniq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galaxy_icegold_board`
--
ALTER TABLE `tbl_galaxy_icegold_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_galaxy_invoice`
--
ALTER TABLE `tbl_galaxy_invoice`
  MODIFY `invoice_uniq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `tbl_galaxy_price_list`
--
ALTER TABLE `tbl_galaxy_price_list`
  MODIFY `price_list_item_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_galaxy_receipt`
--
ALTER TABLE `tbl_galaxy_receipt`
  MODIFY `receipt_uniq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galaxy_sales_job_card`
--
ALTER TABLE `tbl_galaxy_sales_job_card`
  MODIFY `job_card_uniq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_galaxy_stock_items`
--
ALTER TABLE `tbl_galaxy_stock_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_galaxy_users`
--
ALTER TABLE `tbl_galaxy_users`
  MODIFY `user_default_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
