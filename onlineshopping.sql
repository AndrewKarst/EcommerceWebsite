-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Clothing'),
(2, 'Technology'),
(3, 'Video Games'),
(4, 'Kids'),
(5, 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_image`, `product_desc`, `product_price`) VALUES
(1, 1, 'Men\'s 100% Italian Cow Leather Belt Men With Anti-Scratch Buckle,Packed in a Box', 'images/pageonepic.jpg', '', 9.99),
(2, 1, 'Wrangler Authentics Men\'s Classic Straight Fit Jean', 'images/pagetwopic.jpg', '', 24.99),
(3, 2, 'Philips SHP6000 HiFi Stereo Wired Headphone with High Resolution Audio, Deep Bass and Superior Comfort Over The Ear Headphones', 'images/pagethreepic.jpg', '', 39.99),
(4, 2, '[Upgraded] Anker Soundcore 2 Portable Bluetooth Speaker with 12W Stereo Sound, Bluetooth 5, Bassup, IPX7 Waterproof, 24-Hour Playtime, Wireless Stereo Pairing, Speaker for Home, Outdoors, Travel', 'images/pagefourpic.jpg', '', 49.99),
(5, 3, 'Valkyria Chronicles Remastered - PlayStation 4', 'images/pagefivepic.jpg', '', 59.99),
(6, 3, 'Concrete Genie - PlayStation 4', 'images/pagesixpic.jpg', '', 39.99),
(7, 3, 'Marvel\'s Spider-Man: Game of The Year Edition - PlayStation 4', 'images/pagesevenpic.jpg', '', 34.99),
(8, 4, 'Safety 1st Guide 65 Convertible Car Seat (Seaport)', 'images/pageeightpic.jpg', '', 75.99),
(9, 4, 'Summer Infant Pop N\' Play Portable Playard', 'images/pageninepic.jpg', '', 56.99),
(10, 5, 'Cracking the Coding Interview: 189 Programming Questions and Solutions', 'images/pagetenpic.jpg', '', 19.99),
(11, 3, 'Video Game Title', '', 'This is a good video game.', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
