-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 10:02 AM
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
  `board_price_per_unit` int(11) NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` int(11) NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galaxy_art_board`
--

INSERT INTO `tbl_galaxy_art_board` (`board_auto_id`, `board_uniq_id`, `board_name`, `board_gsm`, `board_color`, `board_brand`, `board_unit_qty`, `board_price_per_unit`, `board_added_date_time`, `board_status`, `board_added_total_amount`, `board_added_user_id`) VALUES
(1, 'ART_B_GLX', 'Art Board', 310, 'N/A', 'None', 344, 32, '2020-09-09 04:46:07', 'Active', 11008, '0'),
(2, 'ART_B_GLX', 'Art Board', 0, 'N/A', 'bohui', 20, 10, '2020-09-09 04:49:44', 'Active', 200, '0'),
(3, 'ART_B_GLX', 'Art Board', 0, 'N/A', 'gc', 34, 32, '2020-09-09 04:51:54', 'Active', 1088, '0'),
(4, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'gc', 100, 12, '2020-09-09 05:01:55', 'Active', 1200, 'naflin_01'),
(5, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'bohui', 34, 43, '2020-09-09 05:08:09', 'Active', 1462, 'naflin_01'),
(6, 'ART_B_GLX', 'Art Board', 230, 'N/A', 'bohui', 44, 23, '2020-09-09 05:10:23', 'Pending', 1012, 'naflin_01'),
(7, 'ART_B_GLX', 'Art Board', 230, 'N/A', 'gc', 7, 89, '2020-09-10 09:19:36', 'Active', 623, 'naflin_01'),
(8, 'ART_B_GLX', 'Art Board', 310, 'N/A', 'bohui', 9, 8, '2020-09-10 04:42:21', 'Active', 72, 'naflin_01'),
(9, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'bohui', 100, 32, '2020-09-11 10:15:31', 'Active', 3200, 'naflin_01'),
(10, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'N/A', 10, 12, '2020-09-11 02:18:04', 'Active', 120, 'naflin_01'),
(11, 'ART_B_GLX', 'Art Board', 260, 'N/A', 'bohui', 22, 23, '2020-09-11 03:32:06', 'Active', 506, 'naflin_01'),
(12, 'ARTBGLX', 'Art Board', 310, 'N/A', 'gc', 33, 10, '2020-09-12 11:32:27', 'Active', 330, 'naflin_01'),
(13, 'ARTB', 'Art Board', 260, 'N/A', 'bohui', 100, 12, '2020-09-12 11:38:50', 'Active', 1200, 'naflin_01');

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
  `board_price_per_unit` int(11) NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` int(11) NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `board_price_per_unit` int(11) NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` int(11) NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL
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
  `board_price_per_unit` int(11) NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` int(11) NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `board_price_per_unit` int(11) NOT NULL,
  `board_added_date_time` datetime NOT NULL,
  `board_status` varchar(100) NOT NULL,
  `board_added_total_amount` int(11) NOT NULL,
  `board_added_user_id` varchar(50) NOT NULL
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
-- AUTO_INCREMENT for table `tbl_galaxy_art_board`
--
ALTER TABLE `tbl_galaxy_art_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_galaxy_box_board`
--
ALTER TABLE `tbl_galaxy_box_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galaxy_bristal_board`
--
ALTER TABLE `tbl_galaxy_bristal_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galaxy_icegold_board`
--
ALTER TABLE `tbl_galaxy_icegold_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galaxy_items`
--
ALTER TABLE `tbl_galaxy_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_galaxy_ivery_board`
--
ALTER TABLE `tbl_galaxy_ivery_board`
  MODIFY `board_auto_id` int(11) NOT NULL AUTO_INCREMENT;

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
