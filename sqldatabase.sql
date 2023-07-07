-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 09:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextdoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `time`) VALUES
('ram', 'ram', '2023-05-15 14:46:56'),
('siddhant', 'siddahnt', '2023-06-01 08:30:04'),
('harshil', 'harshil', '2023-06-10 14:02:40'),
('x', 'x', '2023-06-12 12:22:10'),
('r', 'r', '2023-06-12 12:24:43'),
('asas', 'asas', '2023-06-14 09:11:50'),
('uu', 'uuu', '2023-06-14 09:13:41'),
('1212', '1212', '2023-06-14 09:17:02'),
('sam', 'sam', '2023-06-14 09:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_sell`
--

CREATE TABLE `product_sell` (
  `id` int(100) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `contact_no` text NOT NULL,
  `branch` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `details` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_sell`
--

INSERT INTO `product_sell` (`id`, `name`, `contact_no`, `branch`, `product`, `details`, `image`) VALUES
(19, 'priyanshu baliyan', '1234567890', 'AI/ML', 'test product', 'test', '648c64e6b1773.jpg'),
(20, 'sankalp', '0000000000', 'AI/ML', 'test product', 'test', '648c65c7d40f3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `username`, `password`, `time`) VALUES
('siddhant', 'siddhant@email.com', 'siddhant', 'siddhant', '2023-05-15 07:55:49'),
('ram', 'ram@email.com', 'ram', 'ram', '2023-05-15 08:48:28'),
('q', 'q@1', 'q', 'q', '2023-05-18 04:06:22'),
('harshil', 'harshil@email.com', 'harshil', 'harshil', '2023-06-10 14:03:10'),
('qqqqq', 'qqq@em', 'qqq', 'qqqq', '2023-06-14 09:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(6, 809269, 'ram', 'ram', '2023-06-16 13:29:24'),
(7, 2147483647, 'priyanshu', 'priyanshu', '2023-06-16 13:30:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_sell`
--
ALTER TABLE `product_sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_sell`
--
ALTER TABLE `product_sell`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
