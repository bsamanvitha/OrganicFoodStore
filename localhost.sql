-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2017 at 03:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofsdb`
--
CREATE DATABASE IF NOT EXISTS `ofsdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ofsdb`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--
-- Creation: Mar 22, 2017 at 10:10 PM
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `categories`:
--

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
-- Table structure for table `products`
--
-- Creation: Mar 22, 2017 at 10:10 PM
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `products`:
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_image`, `product_desc`, `product_cat`, `product_price`, `product_keywords`) VALUES
(1, 'Lettuce', 'lettuce.png', '<p>Delicious Green Crunchy Lettuce!!</p>', 1, 1, 'vegetable'),
(2, 'Onions', 'onions.png', '', 1, 2, 'onions'),
(3, 'Broccoli', 'broccoli.png', '', 1, 2, 'broccoli'),
(4, 'Mushrooms', 'mushroom.png', '', 1, 3, 'mushroom'),
(5, 'Carrots', 'carrot.png', '', 1, 3, 'carrots'),
(6, 'Red Bellpeppers', 'bellpepper.png', '', 1, 3, 'bellpepper'),
(7, 'Celery', 'celery.png', '', 1, 3, 'celery'),
(8, 'Corn', 'corn.png', '', 1, 4, 'corn'),
(9, 'Cucumbers', 'cucumber.png', '', 1, 3, 'cucumber'),
(10, 'Apples', 'redApple.png', '', 2, 2, 'apple'),
(11, 'Oranges', 'orange.png', '', 2, 4, 'orange'),
(12, 'Pears', 'pear.png', '', 2, 3, 'pear'),
(13, 'Banana', 'banana.png', '', 2, 3, 'banana'),
(14, 'Grapes', 'grapes.png', '', 2, 3, 'grapes'),
(15, 'Strawberry', 'strawberries.png', '', 2, 5, 'strawberry'),
(16, 'Peaches', 'peaches.png', '', 2, 5, 'peaches'),
(17, 'Mangoes', 'mango.png', '', 2, 6, 'Mango'),
(18, 'Blueberries', 'blueberries.png', '', 2, 4, 'berries'),
(19, 'Milk', 'milk.png', '', 3, 5, 'milk'),
(20, 'Chocolate Milk', 'chocomilk.png', '', 3, 5, 'chocolate'),
(21, 'Ice Cream', 'icecream.png', '', 3, 10, 'ice'),
(22, 'Eggs', 'eggs.png', '', 3, 5, 'eggs'),
(23, 'Cheddar Cheese', 'cheddar.png', '', 3, 12, 'cheddar'),
(24, 'Butter', 'butter.png', '', 3, 6, 'butter'),
(25, 'Feta Cheese', 'fetacheese.png', '', 3, 12, 'feta cheese'),
(26, 'Stony Yogurt', 'yogurtStony.png', '', 3, 7, 'yogurt'),
(27, 'Cream Cheese', 'creamcheese.png', '', 3, 8, 'cream cheese'),
(28, 'Pretzels', 'pretzels.png', '', 6, 5, 'pretzel'),
(29, 'Bunnies Fruit Snacks', 'bunnies.png', '', 6, 4, 'fruit snacks'),
(30, 'Banana Chips', 'bananachips.png', '', 6, 7, 'chips'),
(31, 'Corn chips', 'cornchips.png', '', 6, 6, 'corn chips'),
(32, 'Tortilla chips', 'tortillachips.png', '', 6, 7, 'tortilla chips'),
(33, 'Dark Chocolate', 'chocolate.png', '', 6, 19, 'chocolate'),
(34, 'Dark Chocolate Almonds', 'chocoalmonds.png', '', 6, 8, 'almonds'),
(35, 'Apple Chips', 'applechips.png', '', 6, 8, 'apple chips'),
(36, 'Fruit Snacks', 'fruitsnacks.png', '', 6, 10, 'snacks');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
