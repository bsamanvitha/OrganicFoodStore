-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2017 at 10:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Vegetables'),
(2, 'Fruits'),
(3, 'Dairy'),
(6, 'Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(63, 345, '34535434', 'Completed', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(1, 'Lettuce', 1, 1, 5, 'vegetable', '<p>Delicious Green Crunchy Lettuce!!</p>', 'lettuce.png'),
(2, 'Onions', 1, 2, 5, 'onions', '<p>Delicious Green Crunchy Lettuce!!</p>', 'onions.png'),
(3, 'Broccoli', 1, 2, 5, 'broccoli', '<p>Delicious Green Crunchy Lettuce!!</p>', 'broccoli.png'),
(4, 'Mushrooms', 1, 3, 5, 'mushroom', '<p>Delicious Green Crunchy Lettuce!!</p>', 'mushroom.png'),
(5, 'Carrots', 1, 3, 5, 'carrots', '<p>Delicious Green Crunchy Lettuce!!</p>', 'carrot.png'),
(6, 'Red Bellpeppers', 1, 3, 5, 'bellpepper', '<p>Delicious Green Crunchy Lettuce!!</p>', 'bellpepper.png'),
(7, 'Celery', 1, 3, 5, 'celery', '<p>Delicious Green Crunchy Lettuce!!</p>', 'celery.png'),
(8, 'Corn', 1, 4, 5, 'corn', '<p>Delicious Green Crunchy Lettuce!!</p>', 'corn.png'),
(9, 'Cucumbers', 1, 3, 5, 'cucumber', '<p>Delicious Green Crunchy Lettuce!!</p>', 'cucumber.png'),
(10, 'Apples', 2, 2, 5, 'apple', '<p>Delicious Green Crunchy Lettuce!!</p>', 'redApple.png'),
(11, 'Oranges', 2, 4, 5, 'orange', '<p>Delicious Green Crunchy Lettuce!!</p>', 'orange.png'),
(12, 'Pears', 2, 3, 5, 'pear', '<p>Delicious Green Crunchy Lettuce!!</p>', 'pear.png'),
(13, 'Banana', 2, 3, 5, 'banana', '<p>Delicious Green Crunchy Lettuce!!</p>', 'banana.png'),
(14, 'Grapes', 2, 3, 5, 'grapes', '<p>Delicious Green Crunchy Lettuce!!</p>', 'grapes.png'),
(15, 'Strawberry', 2, 5, 5, 'strawberry', '<p>Delicious Green Crunchy Lettuce!!</p>', 'strawberries.png'),
(16, 'Peaches', 2, 5, 5, 'peaches', '<p>Delicious Green Crunchy Lettuce!!</p>', 'peaches.png'),
(17, 'Mangoes', 2, 6, 5, 'Mango', '<p>Delicious Green Crunchy Lettuce!!</p>', 'mango.png'),
(18, 'Blueberries', 2, 4, 5, 'berries', '<p>Delicious Green Crunchy Lettuce!!</p>', 'blueberries.png'),
(19, 'Milk', 3, 5, 5, 'milk', '<p>Delicious Green Crunchy Lettuce!!</p>', 'milk.png'),
(20, 'Chocolate Milk', 3, 5, 5, 'chocolate', '<p>Delicious Green Crunchy Lettuce!!</p>', 'chocomilk.png'),
(21, 'Ice Cream', 3, 10, 5, 'ice', '<p>Delicious Green Crunchy Lettuce!!</p>', 'icecream.png'),
(22, 'Eggs', 3, 5, 5, 'eggs', '<p>Delicious Green Crunchy Lettuce!!</p>', 'eggs.png'),
(23, 'Cheddar Cheese', 3, 12, 5, 'cheddar', '<p>Delicious Green Crunchy Lettuce!!</p>', 'cheddar.png'),
(24, 'Butter', 3, 6, 5, 'butter', '<p>Delicious Green Crunchy Lettuce!!</p>', 'butter.png'),
(25, 'Feta Cheese', 3, 12, 5, 'feta cheese', '<p>Delicious Green Crunchy Lettuce!!</p>', 'fetacheese.png'),
(26, 'Stony Yogurt', 3, 7, 5, 'yogurt', '<p>Delicious Green Crunchy Lettuce!!</p>', 'yogurtStony.png'),
(27, 'Cream Cheese', 3, 8, 5, 'cream cheese', '<p>Delicious Green Crunchy Lettuce!!</p>', 'creamcheese.png'),
(28, 'Pretzels', 6, 5, 5, 'pretzel', '<p>Delicious Green Crunchy Lettuce!!</p>', 'pretzels.png'),
(29, 'Bunnies Fruit Snacks', 6, 4, 5, 'fruit snacks', '<p>Delicious Green Crunchy Lettuce!!</p>', 'bunnies.png'),
(30, 'Banana Chips', 6, 7, 5, 'chips', '<p>Delicious Green Crunchy Lettuce!!</p>', 'bananachips.png'),
(31, 'Corn chips', 6, 6, 5, 'corn chips', '<p>Delicious Green Crunchy Lettuce!!</p>', 'cornchips.png'),
(32, 'Tortilla chips', 6, 7, 5, 'tortilla chips', '<p>Delicious Green Crunchy Lettuce!!</p>', 'tortillachips.png'),
(33, 'Dark Chocolate', 6, 19, 5, 'chocolate', '<p>Delicious Green Crunchy Lettuce!!</p>', 'chocolate.png'),
(34, 'Dark Chocolate Almonds', 6, 8, 5, 'almonds', '<p>Delicious Green Crunchy Lettuce!!</p>', 'chocoalmonds.png'),
(35, 'Apple Chips', 6, 8, 5, 'apple chips', '<p>Delicious Green Crunchy Lettuce!!</p>', 'applechips.png'),
(36, 'Fruit Snacks', 6, 10, 5, 'snacks', '<p>Delicious Green Crunchy Lettuce!!</p>', 'fruitsnacks.png');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `product_id`, `order_id`, `product_price`, `product_title`, `product_quantity`) VALUES
(36, 1, 60, 24.99, 'product 1', 1),
(37, 1, 61, 24.99, 'product 1', 1),
(38, 1, 62, 24.99, 'product 1', 1),
(39, 2, 63, 299.99, 'product 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides` (
  `slide_id` int(10) NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_image`) VALUES
(4, 'slide 1', 'slideImage1.png'),
(5, 'slide 2', 'slideImage2.png'),
(6, 'slide 3', 'slideImage3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(5, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
