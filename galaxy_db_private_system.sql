-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 01:53 PM
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
(13, 'NCR', 2, 'ncr'),
(19, 'Demain', 2, 'demain'),
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
-- Indexes for table `tbl_galaxy_items`
--
ALTER TABLE `tbl_galaxy_items`
  ADD PRIMARY KEY (`item_id`);

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
-- AUTO_INCREMENT for table `tbl_galaxy_items`
--
ALTER TABLE `tbl_galaxy_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
