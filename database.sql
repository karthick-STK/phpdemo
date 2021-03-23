-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 05:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo_product`
--

CREATE TABLE `demo_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `cate` varchar(150) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo_product`
--

INSERT INTO `demo_product` (`id`, `name`, `cate`, `price`, `desc`) VALUES
(1, 'headset', 'electronics', 2000, 'most value'),
(2, 'keyboadr', 'electronics', 2000, 'most value'),
(3, 'phone', 'electronics', 3000, 'nice phone'),
(4, 'phone', 'electronics', 3000, 'nice phone'),
(5, 'plywood', 'wood', 3000, 'valuable house');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo_product`
--
ALTER TABLE `demo_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo_product`
--
ALTER TABLE `demo_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
