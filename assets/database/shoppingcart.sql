-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 07:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `id` int(11) NOT NULL,
  `product_code` varchar(25) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `stocks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`id`, `product_code`, `product_name`, `brand_name`, `description`, `price`, `stocks`) VALUES
(1, 'E0001SC', 'FlareS5', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 5500, 100),
(2, 'E0002SC', 'Flare S5 Lite', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 5000, 100),
(3, 'E0003SC', 'Infinix Pure X200', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 4500, 100),
(4, 'E0004SC', 'Infinix Pure XL', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 5800, 100),
(5, 'E0005SC', 'Flare S5', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 5500, 100),
(6, 'E0006SC', 'Flare S5 Lite', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 5000, 100),
(7, 'E0007SC', 'Infinix Pure X200', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 4500, 100),
(8, 'E0008SC', 'Infinix Pure XL', 'Cherry mobile', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem', 5800, 100);

-- --------------------------------------------------------

--
-- Table structure for table `products_temp_tbl`
--

CREATE TABLE `products_temp_tbl` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_temp_tbl`
--
ALTER TABLE `products_temp_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products_temp_tbl`
--
ALTER TABLE `products_temp_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
