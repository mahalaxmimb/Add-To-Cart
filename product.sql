-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 02:32 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `ptype` varchar(150) NOT NULL,
  `brandtype` varchar(150) NOT NULL,
  `upload_img` varchar(150) NOT NULL,
  `p_desc` varchar(150) NOT NULL,
  `cost` double NOT NULL,
  `cart` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `pname`, `ptype`, `brandtype`, `upload_img`, `p_desc`, `cost`, `cart`) VALUES
(1, 'Samsung j6', 'mobile', 'Samsung', 'note31.jpg', 'new version of mobile', 15000, 1),
(2, 'Samsung 43', 'Mobiles', 'Samsung', 's43.jpg', 'All about new', 10000, 0),
(3, 'iphone', 'Mobiles', 'Redmi', 'i51.jpg', 'latest', 21000, 1),
(4, 'Earphones', 'Accesories', 'Samsung', 'androidlogo.png', 'Various new models', 150, 0),
(5, 'fan', 'Home appliances', 'Oppo', 'i51.jpg', 'latest', 1500, 0),
(6, 'mobile', 'Mobiles', 'Vivo', 'note31.jpg', 'abc', 16000, 0),
(7, 'dell', 'Accesories', 'Vivo', 'androidlogo.png', 'asdfg', 21000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
