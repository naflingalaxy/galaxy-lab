-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 12:52 PM
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
(7, 'receipt', 'receipt', 1, 1),
(8, 'sales summary', 'sales-summary', 1, 3),
(9, 'products', 'products', 1, 4);

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
-- Table structure for table `tbl_galaxy_customer`
--

CREATE TABLE `tbl_galaxy_customer` (
  `customer_uniq_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_number` varchar(100) NOT NULL,
  `customer_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_customer`
--

INSERT INTO `tbl_galaxy_customer` (`customer_uniq_id`, `customer_id`, `customer_name`, `customer_address`, `customer_number`, `customer_status`) VALUES
(1, 2, 'Rasa Arana Family Restaurant', 'Colombo Rd, Dambokka', '0772309780', 0),
(2, 3, 'PRINCE LANKA', 'PANAGAMUWA', '0703060701', 0),
(3, 4, 'NIPPON HELMET', 'PUSSELLA ROAD, PARAGAHADENIYA', '0767716199', 0),
(4, 5, 'DULAN', 'WELLAWA', '0705935457', 0),
(5, 6, 'DAYANI PLASTICS', 'KURUNEGALA', '0372225990', 0),
(6, 7, 'SHANAKA W', 'Pellendeniya Jn, Kurunegala', '0719929999', 0),
(7, 8, 'KIRUNI EAGLE AGENCY', 'Noel Senaviratne Mw, Kurunegala', '0372228285', 0),
(8, 9, 'C.N Hardware', 'Kurunegala', '0715696947', 0),
(9, 10, 'Rifkan - ASR Distributors', 'Henegedara, Panadaragama', '0714656521', 0),
(10, 11, 'Nippon Holdings (PVT) Ltd', 'Mawathagama', '0774478135', 0),
(11, 12, 'Jayathilaka (dealer)', 'Mawathagama', '0724991648', 0),
(12, 13, 'Jet Lanka Medi Academy', 'Kurunegala', '0765774689', 0),
(13, 14, 'National Hardware', 'No.153 , Dambulla Rd, Galewela', '0763456778', 0),
(14, 15, 'LUCKY CENTRE', '48, Dambulla Rd, Melsiripura', '0372250139', 0),
(15, 16, 'Lucky Iron Stores', 'Kandy Rd, Ilukwella, Paragahadeniya', '0763456778', 0),
(16, 17, 'NEW SAARC HARDWARE', 'NO.129 A/B NEGOMBO RD, KURUNEGALA', '0777290530', 0),
(17, 18, 'CT CHOICE', 'NO.15, MAIN ST, KALMUNAI', '0763456778', 0),
(18, 19, 'LAKSHMAN TRADERS', 'MATHAWA, KOHILAGEDARA', '0715696947', 0),
(19, 20, 'SENEVIRATHNA HARDWARE', 'NO.101/1, RAMBUKANA RD, GALAGEDARA', '0812461087', 0),
(20, 21, 'NS MOTORS', 'KURUNEGALA RD, KUMBUREGAMA', '0763456778', 0),
(21, 22, 'KISHAN STORES', 'NO.59, POLA RD, MAWATHAGAMA', '0763456778', 0),
(22, 23, 'SAARC TRADERS', 'NO.30A, NEGOMBO RD, KURUNEGALA', '0777650424', 0),
(23, 24, 'PRAMILA MOTORS', 'NO.128, COLOMBO RD, POTHUHERA', '0773323014', 0),
(24, 25, 'NIMAL TRADERS', 'MATHAWA JN, KOHILEGEDARA', '0372238117', 0),
(25, 26, 'TOCHIGI LANKA', 'NO.62, 3RD LANE, NISALATHENNA, WARIYAPOLA', '0772543647', 0),
(26, 27, 'NEW NILEKA JEWELLERS', 'NO.25, KURUNEGALA RD, RIDIGAMA', '0774572050', 0),
(27, 28, 'UNCOMMON TEXTILES', 'NO.67, KURUNEGALA RD, MAWATHAGAMA', '0755573232', 0),
(28, 29, 'FASHION SHORT', 'KURUNEGALA', '0715696947', 0),
(29, 30, 'CHAMAL BAKE HOUSE', 'POLGAHAWELA', '0715110701', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_customer_account`
--

CREATE TABLE `tbl_galaxy_customer_account` (
  `account_uniq_id` int(11) NOT NULL,
  `account_customer_id` int(11) NOT NULL,
  `account_added_receipt_id` int(11) NOT NULL,
  `account_credit` varchar(100) NOT NULL,
  `account_debit` varchar(100) NOT NULL,
  `account_status` int(11) NOT NULL,
  `account_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `invoice_customer_id` int(11) NOT NULL,
  `invoice_customer_name` varchar(100) NOT NULL,
  `invoice_description` varchar(250) NOT NULL,
  `invoice_qty` int(11) NOT NULL,
  `invoice_rate` varchar(10) NOT NULL,
  `invoice_discount` int(11) NOT NULL,
  `invoice_advance` int(11) NOT NULL,
  `invoice_date_time` datetime NOT NULL,
  `invoice_added_user` varchar(15) NOT NULL,
  `invoice_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_invoice`
--

INSERT INTO `tbl_galaxy_invoice` (`invoice_uniq_id`, `invoice_id`, `invoice_job_card_id`, `invoice_customer_id`, `invoice_customer_name`, `invoice_description`, `invoice_qty`, `invoice_rate`, `invoice_discount`, `invoice_advance`, `invoice_date_time`, `invoice_added_user`, `invoice_status`) VALUES
(2, 1075, 386, 2, ' Rasa Arana Family Restaurant', 'Lunch Box Small', 2000, '7.5', 0, 3200, '2020-11-20 05:41:41', 'azeem_01', 1),
(3, 1076, 392, 8, ' KIRUNI EAGLE AGENCY', 'HANDBILL', 1000, '6.5', 0, 0, '2020-11-25 01:01:28', 'azeem_01', 1),
(4, 1077, 389, 5, ' MR DULAN', 'TAG CARD', 1000, '2.75', 0, 2750, '2020-11-25 01:15:31', 'azeem_01', 1),
(5, 1078, 393, 5, ' MR DULAN', 'BILL BOOK', 10, '200', 0, 2000, '2020-11-28 11:25:48', 'azeem_01', 1),
(6, 1079, 394, 9, ' C N Hardware', 'BILL BOOK - A6', 20, '200', 0, 0, '2020-11-28 11:29:45', 'azeem_01', 1),
(7, 1080, 388, 4, ' NIPPON HELMET', 'BB009 HEADERS', 8000, '4.3', 0, 0, '2020-11-30 02:32:08', 'azeem_01', 1),
(8, 1081, 390, 6, ' DAYANI PLASTICS', 'TAG CARD', 10000, '2.5', 0, 5000, '2020-11-30 02:42:19', 'azeem_01', 1),
(9, 1082, 396, 8, ' KIRUNI EAGLE AGENCY', 'LEAFLET', 1000, '6.5', 0, 0, '2020-11-30 05:37:19', 'azeem_01', 1),
(10, 1083, 402, 14, ' National Hardware', 'Office Calendar - 6 Pages', 1200, '45', 0, 10000, '2020-12-01 12:03:32', 'azeem_01', 1),
(11, 1084, 399, 12, ' Mr Jayathilaka', 'A4 - Print', 1000, '3.8', 0, 0, '2020-12-01 01:45:14', 'azeem_01', 1),
(12, 1085, 400, 12, ' Mr Jayathilaka', 'Impression 70GSM - 2 Color', 2, '1550', 0, 0, '2020-12-01 01:47:12', 'azeem_01', 1),
(13, 1086, 403, 15, ' LUCKY CENTRE', 'Calendar - 12 Pages', 500, '83', 0, 10000, '2020-12-01 03:08:02', 'azeem_01', 1),
(14, 1087, 401, 13, ' Jet Lanka Medi Academy', 'Handbill', 1000, '6.5', 0, 2000, '2020-12-02 10:08:24', 'azeem_01', 1),
(15, 1088, 413, 25, ' NIMAL TRADERS', 'Office Calendar - 6 Pages', 250, '57', 0, 5000, '2020-12-02 01:18:25', 'azeem_01', 1),
(16, 1089, 412, 24, ' PRAMILA MOTORS', 'Calendar - 12 Pages', 200, '87', 0, 5000, '2020-12-02 01:20:28', 'azeem_01', 1),
(17, 1090, 411, 23, ' SAARC TRADERS', 'Calendar - 12 Pages', 100, '89', 0, 1000, '2020-12-02 02:59:09', 'azeem_01', 1),
(18, 1091, 409, 21, ' NS MOTORS', 'Office Calendar - 6 Pages', 200, '57', 0, 0, '2020-12-02 04:20:40', 'azeem_01', 1),
(19, 1092, 408, 20, ' SENEVIRATHNA HARDWARE', 'Calendar - 12 Pages', 200, '87', 0, 0, '2020-12-02 04:22:55', 'azeem_01', 1),
(20, 1093, 415, 27, ' NEW NILEKA JEWELLERS', 'Office Calendar - 6 Pages', 100, '59', 0, 0, '2020-12-02 04:24:08', 'azeem_01', 1),
(21, 1094, 410, 22, ' KISHAN STORES', 'Office Calendar - 6 Pages', 200, '57', 0, 0, '2020-12-02 04:25:14', 'azeem_01', 1),
(22, 1095, 398, 11, ' Nippon Holdings PVT Ltd', 'Sticker', 6000, '2.5', 0, 0, '2020-12-03 12:09:59', 'azeem_01', 1),
(23, 1096, 404, 16, ' Lucky Iron Stores', 'Office Calendar - 6 Pages', 500, '49', 0, 5000, '2020-12-03 03:35:06', 'azeem_01', 1),
(24, 1097, 387, 3, 'PRINCE LANKA', 'ANTENNA BOX', 1000, '38', 0, 0, '2020-12-03 07:36:41', 'azeem_01', 1),
(25, 1098, 395, 3, 'PRINCE LANKA', 'ANTENNA BOX - BOTTOM ONLY', 250, '18.748', 0, 0, '2020-12-03 07:39:08', 'azeem_01', 1);

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
  `receipt_jobcard_id` int(11) NOT NULL,
  `receipt_invoice_id` int(11) NOT NULL,
  `receipt_cus_id` int(11) NOT NULL,
  `receipt_amount` varchar(15) NOT NULL,
  `receipt_amount_letters` varchar(500) NOT NULL,
  `receipt_cheque_number` varchar(110) NOT NULL,
  `receipt_cheque_amount` varchar(15) NOT NULL,
  `receipt_cheque_bank` varchar(150) NOT NULL,
  `receipt_cheque_date` date NOT NULL,
  `receipt_direct_deposit_ref_number` varchar(100) NOT NULL,
  `receipt_direct_deposit_amount` varchar(15) NOT NULL,
  `receipt_direct_deposit_bank` varchar(100) NOT NULL,
  `receipt_direct_deposit_date_time` date NOT NULL,
  `receipt_date_time` datetime NOT NULL,
  `receipt_added_user` varchar(30) NOT NULL,
  `receipt_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_receipt`
--

INSERT INTO `tbl_galaxy_receipt` (`receipt_uniq_id`, `receipt_id`, `receipt_jobcard_id`, `receipt_invoice_id`, `receipt_cus_id`, `receipt_amount`, `receipt_amount_letters`, `receipt_cheque_number`, `receipt_cheque_amount`, `receipt_cheque_bank`, `receipt_cheque_date`, `receipt_direct_deposit_ref_number`, `receipt_direct_deposit_amount`, `receipt_direct_deposit_bank`, `receipt_direct_deposit_date_time`, `receipt_date_time`, `receipt_added_user`, `receipt_status`) VALUES
(1, 1, 386, 0, 0, '3200', 'Three thousand two hundred only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-11-21 12:00:46', 'azeem_01', 1),
(2, 2, 386, 0, 0, '4300', 'Four thousand three hundred only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-11-21 12:00:46', 'azeem_01', 1),
(3, 3, 390, 0, 0, '5000', 'Five thousand rupees only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-11-21 12:00:46', 'azeem_01', 1),
(4, 4, 391, 0, 0, '1800', 'One thousand eight hundred only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-11-21 12:00:46', 'azeem_01', 1),
(5, 5, 394, 0, 0, '4000', 'Four Thousand Only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-12-01 02:57:18', 'azeem_01', 1),
(6, 6, 389, 0, 0, '2750', 'Two thousand seven hundred fifty only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-12-02 10:03:13', 'azeem_01', 1),
(7, 7, 393, 0, 0, '2000', 'Two thousand Only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-12-02 10:13:23', 'azeem_01', 1),
(8, 8, 402, 0, 0, '44000', 'Forty four thousand Only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-12-02 10:21:42', 'azeem_01', 1),
(9, 9, 401, 0, 0, '6500', 'Six thousand five hundred only', '0', '0', '0', '0000-00-00', '0', '0', '0', '0000-00-00', '2020-12-02 02:38:26', 'azeem_01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galaxy_sales_job_card`
--

CREATE TABLE `tbl_galaxy_sales_job_card` (
  `job_card_uniq_id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `job_card_customer_id` int(11) NOT NULL,
  `job_card_job_type` varchar(100) NOT NULL,
  `job_card_amount` varchar(100) NOT NULL,
  `job_card_qty` int(11) NOT NULL,
  `job_card_salesman` varchar(100) NOT NULL,
  `job_card_date_time` datetime NOT NULL,
  `job_card_added_user_id` varchar(100) NOT NULL,
  `job_card_status` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_sales_job_card`
--

INSERT INTO `tbl_galaxy_sales_job_card` (`job_card_uniq_id`, `job_card_id`, `job_card_customer_id`, `job_card_job_type`, `job_card_amount`, `job_card_qty`, `job_card_salesman`, `job_card_date_time`, `job_card_added_user_id`, `job_card_status`) VALUES
(3, 386, 2, 'Lunch Box Small', '7.5', 2000, 'Lionel', '2020-11-19 17:06:03', 'habeeb_01', '2'),
(4, 387, 3, 'ANTENNA BOX', '38', 1000, 'Amjath', '2020-11-19 12:42:14', 'habeeb_01', '1'),
(5, 388, 4, 'BB009 HEADERS', '4.3', 8000, 'Amjath', '2020-11-19 01:29:13', 'habeeb_01', '2'),
(6, 389, 5, 'TAG CARD', '2.75', 1000, 'General', '2020-11-20 11:59:37', 'azeem_01', '2'),
(7, 390, 6, 'TAG CARD', '2.5', 10000, 'General', '2020-11-21 11:24:20', 'azeem_01', '2'),
(8, 391, 7, 'Visiting Card', '1.8', 1000, 'General', '2020-11-21 02:10:10', 'azeem_01', '1'),
(9, 392, 8, 'Handbill', '6.5', 1000, 'General', '2020-11-23 01:13:05', 'azeem_01', '2'),
(10, 393, 5, 'BILL BOOK', '200', 10, 'General', '2020-11-23 05:22:37', 'azeem_01', '2'),
(11, 394, 9, 'Bill Book - A6', '200', 20, 'Dilshan', '2020-11-24 01:12:41', 'azeem_01', '2'),
(12, 395, 3, 'ANTENNA BOX - BOTTOM ONLY', '18.74', 250, 'Amjath', '2020-11-28 12:38:34', 'azeem_01', '1'),
(13, 396, 8, 'LEAFLET', '6.5', 1000, 'General', '2020-11-28 12:40:37', 'azeem_01', '2'),
(14, 397, 10, 'Bill Book - A6', '350', 10, 'Amjath', '2020-11-30 09:48:48', 'azeem_01', '1'),
(15, 398, 11, 'Sticker', '2.5', 6000, 'Amjath', '2020-11-30 09:51:03', 'azeem_01', '2'),
(16, 399, 12, 'A4 - print', '3.8', 1000, 'Jayathilake', '2020-11-30 10:37:00', 'azeem_01', '2'),
(17, 400, 12, 'Impression 70GSM - 2 Color', '1550', 2, 'Jayathilake', '2020-11-30 11:34:51', 'azeem_01', '2'),
(18, 401, 13, 'Handbill', '6.5', 1000, 'General', '2020-11-30 03:08:30', 'azeem_01', '2'),
(19, 402, 14, 'Office Calendar - 6 pages', '45', 1200, 'Nipun', '2020-12-01 11:56:51', 'azeem_01', '2'),
(20, 403, 15, 'Calendar - 12 Pages', '83', 500, 'Nipun', '2020-12-01 03:06:27', 'azeem_01', '2'),
(21, 404, 16, 'Office Calendar - 6 Pages', '94', 500, 'Nipun', '2020-12-01 04:37:56', 'azeem_01', '2'),
(22, 405, 17, 'Calendar - 12 Pages', '92', 150, 'Indika', '2020-12-01 04:55:45', 'azeem_01', '1'),
(23, 406, 18, 'Calendar - 12 Pages', '88', 400, 'GM', '2020-12-01 04:59:12', 'azeem_01', '1'),
(24, 407, 19, 'Office Calendar - 6 Pages', '59', 100, 'Dilshan', '2020-12-01 05:02:59', 'azeem_01', '1'),
(25, 408, 20, 'Calendar - 12 Pages', '87', 200, 'Nipun', '2020-12-01 05:08:20', 'azeem_01', '2'),
(26, 409, 21, 'Office Calendar - 6 Pages', '57', 200, 'Nipun', '2020-12-01 05:14:28', 'azeem_01', '2'),
(27, 410, 22, 'Office Calendar - 6 Pages', '57', 200, 'Nipun', '2020-12-01 05:16:04', 'azeem_01', '2'),
(28, 411, 23, 'Calendar - 12 Pages', '89', 100, 'Amjath', '2020-12-01 05:18:27', 'azeem_01', '2'),
(29, 412, 24, 'Calendar - 12 Pages', '87', 200, 'Dilshan', '2020-12-01 05:22:38', 'azeem_01', '2'),
(30, 413, 25, 'Office Calendar - 6 Pages', '57', 250, 'Dilshan', '2020-12-01 05:24:41', 'azeem_01', '2'),
(31, 414, 26, 'Calendar - 12 Pages', '89', 300, 'Indika', '2020-12-01 05:26:34', 'azeem_01', '1'),
(32, 415, 27, 'Office Calendar - 6 Pages', '59', 100, 'Amjath', '2020-12-01 05:28:34', 'azeem_01', '2'),
(33, 416, 28, 'VISITING CARD', '1.8', 1000, 'Amjath', '2020-12-03 02:12:42', 'azeem_01', '1'),
(34, 417, 29, 'TAG CARD', '1.5', 5000, 'Dilshan', '2020-12-03 02:13:36', 'azeem_01', '1'),
(35, 418, 30, 'TAG', '5.75', 2000, 'Lionel', '2020-12-03 04:33:50', 'azeem_01', '1'),
(36, 419, 30, '34tt4t4', '43', 34, 'Naflan', '2020-12-04 11:18:05', 'naflin_01', '0');

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
-- Indexes for table `tbl_galaxy_customer`
--
ALTER TABLE `tbl_galaxy_customer`
  ADD PRIMARY KEY (`customer_uniq_id`);

--
-- Indexes for table `tbl_galaxy_customer_account`
--
ALTER TABLE `tbl_galaxy_customer_account`
  ADD PRIMARY KEY (`account_uniq_id`);

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `tbl_galaxy_customer`
--
ALTER TABLE `tbl_galaxy_customer`
  MODIFY `customer_uniq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_galaxy_customer_account`
--
ALTER TABLE `tbl_galaxy_customer_account`
  MODIFY `account_uniq_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `invoice_uniq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `receipt_uniq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
