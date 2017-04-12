-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2015 at 11:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(63, 345, '34535434', 'Completed', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_image`, `short_desc`, `product_category_id`, `product_price`, `product_description`, `product_quantity`) VALUES
(1, 'Lettuce', 'lettuce.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 1, 'vegetable', 5),
(2, 'Onions', 'onions.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 2, 'onions', 5),
(3, 'Broccoli', 'broccoli.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 2, 'broccoli', 5),
(4, 'Mushrooms', 'mushroom.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 3, 'mushroom', 5),
(5, 'Carrots', 'carrot.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 3, 'carrots', 5),
(6, 'Red Bellpeppers', 'bellpepper.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 3, 'bellpepper', 5),
(7, 'Celery', 'celery.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 3, 'celery', 5),
(8, 'Corn', 'corn.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 4, 'corn', 5),
(9, 'Cucumbers', 'cucumber.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 3, 'cucumber', 5),
(10, 'Apples', 'redApple.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 2, 'apple', 5),
(11, 'Oranges', 'orange.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 4, 'orange', 5),
(12, 'Pears', 'pear.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 3, 'pear', 5),
(13, 'Banana', 'banana.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 3, 'banana', 5),
(14, 'Grapes', 'grapes.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 3, 'grapes', 5),
(15, 'Strawberry', 'strawberries.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 5, 'strawberry', 5),
(16, 'Peaches', 'peaches.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 5, 'peaches', 5),
(17, 'Mangoes', 'mango.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 6, 'Mango', 5),
(18, 'Blueberries', 'blueberries.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 2, 4, 'berries', 5),
(19, 'Milk', 'milk.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 5, 'milk', 5),
(20, 'Chocolate Milk', 'chocomilk.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 5, 'chocolate', 5),
(21, 'Ice Cream', 'icecream.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 10, 'ice', 5),
(22, 'Eggs', 'eggs.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 5, 'eggs', 5),
(23, 'Cheddar Cheese', 'cheddar.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 12, 'cheddar', 5),
(24, 'Butter', 'butter.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 6, 'butter', 5),
(25, 'Feta Cheese', 'fetacheese.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 12, 'feta cheese', 5),
(26, 'Stony Yogurt', 'yogurtStony.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 7, 'yogurt', 5),
(27, 'Cream Cheese', 'creamcheese.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 3, 8, 'cream cheese', 5),
(28, 'Pretzels', 'pretzels.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 5, 'pretzel', 5),
(29, 'Bunnies Fruit Snacks', 'bunnies.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 4, 'fruit snacks', 5),
(30, 'Banana Chips', 'bananachips.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 7, 'chips', 5),
(31, 'Corn chips', 'cornchips.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 6, 'corn chips', 5),
(32, 'Tortilla chips', 'tortillachips.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 7, 'tortilla chips', 5),
(33, 'Dark Chocolate', 'chocolate.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 19, 'chocolate', 5),
(34, 'Dark Chocolate Almonds', 'chocoalmonds.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 8, 'almonds', 5),
(35, 'Apple Chips', 'applechips.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 8, 'apple chips', 5),
(36, 'Fruit Snacks', 'fruitsnacks.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 6, 10, 'snacks', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
`report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'rico', 'rico@hotmail.com', '123'),
(4, 'dem_user', 'support@edwindiaz.com', '123');

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
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
