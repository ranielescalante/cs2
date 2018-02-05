-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 07:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tglc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'shirts'),
(2, 'hoodie'),
(3, 'pullovers'),
(4, 'sando');

-- --------------------------------------------------------

--
-- Table structure for table `final_order`
--

CREATE TABLE `final_order` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `order_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `purchase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_order`
--

INSERT INTO `final_order` (`id`, `email`, `item_id`, `item_quantity`, `item_price`, `order_time`, `purchase_id`) VALUES
(1, 'tglc@gmail.com', 18, 1, 350, '2018-02-02 09:19:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `final_userorder`
--

CREATE TABLE `final_userorder` (
  `id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `delivery_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_userorder`
--

INSERT INTO `final_userorder` (`id`, `total_price`, `email`, `delivery_status`) VALUES
(1, 350, 'tglc@gmail.com', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `image`, `price`, `category_id`) VALUES
(1, 'Black Script Tee', 'One of TGLC Firsts t-shirt release. Black shirt with script design.', 'img/scriptBlack.jpg', '450.00', 1),
(2, 'White Script Tee', 'One of TGLC Firsts t-shirt release. White shirt with script design.', 'img/scriptWhite.jpg', '450.00', 1),
(3, 'Grey Emblem Tee', 'One of TGLC Firsts t-shirt release. Grey shirt with the TGLC Logo emblem design', 'img/emGrey.jpg', '500.00', 1),
(4, 'Black Emblem Tee', 'One of TGLC Firsts t-shirt release. Black shirt with the TGLC Logo emblem design.', 'img/emBlack2.jpg', '500.00', 1),
(5, 'White Emblem Tee', 'One of TGLC Firsts t-shirt release. White shirt with the TGLC Logo emblem design', 'img/emWhite.jpg', '500.00', 1),
(6, 'Grey Jap Tee', 'One of TGLC Firsts t-shirt release. Grey shirt with the Japanese design which means \"Guoduraifu\".', 'img/japGrey.jpg', '550.00', 1),
(7, 'Black Jap Tee', 'One of TGLC Firsts t-shirt release. Black shirt with the Japanese design which means \"Guoduraifu\".', 'img/japBlack.jpg', '550.00', 1),
(8, 'White Jap Tee', 'One of TGLC Firsts t-shirt release. White shirt with the Japanese design which means \"Guoduraifu\".', 'img/japWhite.jpg', '550.00', 1),
(9, 'WHite Emblem Hoodie', 'White Hoodie with TGLC Emblem logo design. Perfect for the cold weather.', 'img/hoodEmWhite.jpg', '850.00', 2),
(10, 'Black Emblem Hoodie', 'Black Hoodie with TGLC Emblem logo design. Perfect for the cold weather.', 'img/hoodEmBlack.jpg', '850.00', 2),
(11, 'Grey Jap Hoodie', 'Grey Hoodie with TGLC Japanese logo design. Perfect for the cold weather.', 'img/hoodJapGrey.jpg', '900.00', 2),
(12, 'Black Jap Hoodie', 'Black Hoodie with TGLC Japanese logo design. Perfect for the cold weather.', 'img/hoodJapBlack.jpg', '900.00', 2),
(13, 'White Jap Pullovers', 'White Pullover with TGLC Japanese logo design. Perfect for the cold weather.', 'img/pullWhite.jpg', '950.00', 3),
(14, 'Black Jap Pullovers', 'Black Pullover with TGLC Japanese logo design. Perfect for the cold weather.', 'img/pullBlack.jpg', '950.00', 3),
(15, 'Grey Jap Pullovers', 'Grey Pullover with TGLC Japanese logo design. Perfect for the cold weather.', 'img/pullGrey.jpg', '950.00', 3),
(16, 'Summer Teal Sando', 'One of TGLC summer release. Teal Sando perfect for the summer', 'img/summerTeal.jpg', '350.00', 4),
(17, 'Summer Grey Sando', 'One of TGLC summer release. Grey Sando perfect for the summer', 'img/summerGrey.jpg', '350.00', 4),
(18, 'Summer Orange Sando', 'One of TGLC summer release. Orange Sando perfect for the summer', 'img/summerOrange.jpg', '350.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `password`, `role`, `status`) VALUES
(1, 'Raniel Escalante', 'admin@gmail.com', 'Quezon City', 'a55d037f385cad22efe7862e07b805938d150154', 'admin', 'active'),
(2, 'Tglc User Test', 'tglc@gmail.com', 'Taguig', '8cb2237d0679ca88db6464eac60da96345513964', 'customer', 'active'),
(3, 'Kevin Payas', 'kevin@gmail.com', 'Baguio City', '8cb2237d0679ca88db6464eac60da96345513964', 'customer', 'active'),
(4, 'Chester Almonte', 'chester@gmail.com', 'Quezon City', '8cb2237d0679ca88db6464eac60da96345513964', 'customer', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_order`
--
ALTER TABLE `final_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_id` (`purchase_id`);

--
-- Indexes for table `final_userorder`
--
ALTER TABLE `final_userorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `final_order`
--
ALTER TABLE `final_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `final_userorder`
--
ALTER TABLE `final_userorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `final_order`
--
ALTER TABLE `final_order`
  ADD CONSTRAINT `final_order_ibfk_1` FOREIGN KEY (`purchase_id`) REFERENCES `final_userorder` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
