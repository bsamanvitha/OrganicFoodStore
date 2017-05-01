-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2017 at 03:08 AM
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
-- Creation: Apr 26, 2017 at 04:58 AM
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
-- Creation: Apr 26, 2017 at 04:58 AM
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `first_name`, `last_name`, `email`, `address`, `timestamp`) VALUES
(1, 'andrew', 'fide', 'afidel1743@yahoo.com', 'asd', '2017-04-24 16:21:51'),
(2, 'Test', 'Test', 'test@aol.com', 'Test', '2017-04-24 18:40:02'),
(3, 'test', 'test', 'test@ao.com', 'test', '2017-04-24 18:53:33'),
(4, 't', 't', 'ofsbuyer2017@gmail.com', 't', '2017-04-24 19:03:51'),
(5, 't', 't', 't', 't', '2017-04-24 19:25:08'),
(6, 'test', 'test', 'naomicampbell951@gmail.com', 't', '2017-04-24 19:33:40'),
(7, 't', 't', 'naomicampbell951', 't', '2017-04-24 19:36:47'),
(8, 't', 't', 'ofsbuyer2017@gmail.com', 't', '2017-04-24 19:37:55'),
(9, 't', 't', 'ofsbuyer2017@gmail.com', 't', '2017-04-24 19:38:30'),
(10, 't', 't', 'naomicampbell951@gmail.com', 'fsf', '2017-04-24 19:38:54'),
(11, 'f', 'f', 'naomicampbell951@gmail.com', 'g', '2017-04-24 19:41:31'),
(12, 't', 't', 'naomicampbell951@gmail.com', 'd', '2017-04-24 19:45:01'),
(13, 't', 't', 'ofsbuyer2017@gmail.com', 'd', '2017-04-24 19:46:23'),
(14, 't', 't', 'naomicampbell951@gmail.com', 't', '2017-04-24 19:52:55'),
(15, 't', 't', 'naomicampbell951@gmail.com', 't', '2017-04-24 19:54:12'),
(16, 'Bob', 'Foods', 'ofsbuyer2017@gmail.com', '1287 Gary Boulevard San Francisco', '2017-04-24 20:33:17'),
(17, 'Kim', 'Le', 'annle7874@gmail.com', '398 Grant Road, Mountain View, CA', '2017-05-01 00:47:03'),
(18, 'Kyle', 'Brown', 'annle7874@gmail.com', '957 Foxglove Drive', '2017-05-01 01:01:29'),
(19, 'Leo', 'Walker', 'annle7874@gmail.com', '398 Grant Road, Mountain View, CA', '2017-05-01 01:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
-- Creation: Apr 26, 2017 at 04:58 AM
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
  `product_image` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`, `product_keywords`) VALUES
(1, 'Lettuce', 1, 1, 5, 'vegetable', '<p>Delicious green crunchy lettuce!</p>', 'lettuce.png', 'vegetables, Vegetables, Vegetable, vegetable, veges, Veges, lettuce, green, Lettuces, lettuces'),
(2, 'Onions', 1, 2, 5, 'onions', '<p>Fresh and tasty onions!</p>', 'onions.png', 'vegetables, Vegetables, Vegetable, vegetable, veges, Veges, onions, onion, Onion, Onions'),
(3, 'Broccoli', 1, 2, 5, 'broccoli', '<p>Nutritious and fresh green broccoli!</p>', 'broccoli.png', 'vegetables, Vegetables, Vegetable, vegetable, veges, Veges, broccoli, Broccoli'),
(4, 'Mushrooms', 1, 3, 5, 'mushroom', '<p>Delicious and fresh mushrooms!</p>', 'mushroom.png', 'vegetables, Vegetables, Vegetable, vegetable, veges, Veges, mushroom, mushrooms, Mushroom, Mushrooms'),
(5, 'Carrots', 1, 3, 5, 'carrots', '<p>Crunchy orange carrots!</p>', 'carrot.png', 'vegetables, Vegetables, Vegetable, vegetable, veges, Veges, carrot, Carrot, carrots, Carrots'),
(6, 'Red Bellpeppers', 1, 3, 5, 'bellpepper', '<p>Delicious Red Bellpeppers!!</p>', 'bellpepper.png', 'bellpepper.png\', \'vegetables, Vegetables, Vegetable, vegetable, veges, Veges, bellpepper, bell peppers, red bell peppers'),
(7, 'Celery', 1, 3, 5, 'celery', '<p>Crunchy fresh green celery!</p>', 'celery.png', 'vegetables, vegetables, vegetable, Vegetable, celery, Celery'),
(8, 'Corn', 1, 4, 5, 'corn', '<p>Fresh golden yellow corn!</p>', 'corn.png', 'vegetables, vegetables, vegetable, Vegetable, corn, Corn'),
(9, 'Cucumbers', 1, 3, 5, 'cucumber', '<p>Crunchy fresh cucumbers!</p>', 'cucumber.png', 'vegetables, vegetables, vegetable, Vegetable, cucumber, Cucumber, Cucumbers, cucumbers'),
(10, 'Apples', 2, 2, 5, 'apple', '<p>Delicious red apples!</p>', 'redApple.png', 'fruit, fruits, Fruit, Fruits, apples, Apple, apple'),
(11, 'Oranges', 2, 4, 5, 'orange', '<p>Juicy tasty oranges!</p>', 'orange.png', 'fruit, fruits, Fruit, Fruits, oranges, Oranges, Orange, orange, oranges, Oranges'),
(12, 'Pears', 2, 3, 5, 'pear', '<p>Fresh and juicy green pears!</p>', 'pear.png', 'fruit, fruits, Fruit, Fruits, Pear, pears, Pears, pear'),
(13, 'Banana', 2, 3, 5, 'banana', '<p>Delicious yellow bananas!</p>', 'banana.png', 'fruit, fruits, Fruit, Fruits, Bananas, bananas, Banana, banana'),
(14, 'Grapes', 2, 3, 5, 'grapes', '<p>Fresh purple grapes!</p>', 'grapes.png', 'fruit, fruits, Fruit, Fruits, Grape, Grapes, grape, grapes'),
(15, 'Strawberry', 2, 5, 5, 'strawberry', '<p>Delicious red strawberries!</p>', 'strawberries.png', 'fruit, fruits, Fruit, Fruits, Strawberry, strawberries, strawberries, strawberry'),
(16, 'Peaches', 2, 5, 5, 'peaches', '<p>Juicy fresh peaches!</p>', 'peaches.png', 'fruit, fruits, Fruit, Fruits, Peach, Peaches, peach, peaches'),
(17, 'Mangoes', 2, 6, 5, 'Mango', '<p>Tasty fresh mangoes!</p>', 'mango.png', 'fruit, fruits, Fruit, Fruits, mangos, Mangos, mango, Mango'),
(18, 'Blueberries', 2, 4, 5, 'berries', '<p>Fresh wild blueberries full of antioxidants!</p>', 'blueberries.png', 'lueberries.png\', \'fruit, fruits, Fruit, Fruits, berry, Berry, Berries, berries, Blueberry, Blueberries'),
(19, 'Milk', 3, 5, 5, 'milk', '<p>Whole milk from Horizon Organic Farm!</p>', 'milk.png', 'dairy, Dairy, Milk, milk'),
(20, 'Chocolate Milk', 3, 5, 5, 'chocolate', '<p>Delicious chocolate milk from Organic Valley farm!</p>', 'chocomilk.png', 'dairy, Dairy, choco, Chocolate, Chocho, Chocolate Milk, chocolate milk, chocolate'),
(21, 'Ice Cream', 3, 10, 5, 'ice cream', '<p>Delicious vanilla bean ice cream from 365 Organic Farm!</p>', 'icecream.png', 'dairy, Dairy, Ice Cream, ice cream, cream, ice'),
(22, 'Eggs', 3, 5, 5, 'eggs', '<p>Fresh brown eggs!</p>', 'eggs.png', 'dairy, Dairy, Eggs, egg, eggs'),
(23, 'Cheddar Cheese', 3, 12, 5, 'cheddar', '<p>Delicious cheddar cheese!</p>', 'cheddar.png', 'dairy, Dairy, Cheddar, cheese, Cheddar Cheese, cheddar cheese, cheddar'),
(24, 'Butter', 3, 6, 5, 'butter', '<p>Creamy unsalted butter from Grassland farm!</p>', 'butter.png', 'dairy, Dairy, Butter, butters, Butter, butter'),
(25, 'Feta Cheese', 3, 12, 5, 'feta cheese', '<p>Delicious feta cheese from Organic Valley farm!</p>', 'fetacheese.png', 'dairy, Dairy, Feta Cheese, Feta cheese, feta cheese'),
(26, 'Stony Yogurt', 3, 7, 5, 'yogurt', '<p>Lowfat french vanilla yogurt from StonyField farm!</p>', 'yogurtStony.png', 'dairy, Dairy, Yogurt, yogurt'),
(27, 'Cream Cheese', 3, 8, 5, 'cream cheese', '<p>Fresh cream cheese from Organic Valley farm!</p>', 'creamcheese.png', 'dairy, Dairy, cream, Cream, Cream Cheese, Cream cheese, cream cheese'),
(28, 'Pretzels', 6, 5, 5, 'pretzel', '<p>Crunchy mini pretzels from Snyder\'s farm!</p>', 'pretzels.png', 'snack, Snacks, Pretzel, pretzel'),
(29, 'Bunnies Fruit Snacks', 6, 4, 5, 'fruit snacks', '<p>Delicious fruit snacks from Annie\'s farm!</p>', 'bunnies.png', 'snack, Snacks, fruit, Fruit, Fruit Snacks, fruit snacks, bunny snacks, bunny, Bunny'),
(30, 'Banana Chips', 6, 7, 5, 'chips', '<p>Sweetened fresh banana chips from Woodstock farm!</p>', 'bananachips.png', 'snack, Snacks, Chips, chip, chips, banana, banana chips, Banana Chips'),
(31, 'Corn chips', 6, 6, 5, 'corn chips', '<p>Crunchy corn chips from Sage Valley farm!</p>', 'cornchips.png', 'snack, Snacks, corn, Corn Chips, Corn chips, chips, corn chips'),
(32, 'Tortilla chips', 6, 7, 5, 'tortilla chips', '<p>Fresh tortilla chips from Simply Balanced farm!</p>', 'tortillachips.png', 'snack, Snacks, chips, Chips, Tortilla Chips, Tortilla chips, tortilla chips'),
(33, 'Dark Chocolate', 6, 19, 5, 'chocolate', '<p>Delicious dark chocolate from Eclat Pennsylvania farm!</p>', 'chocolate.png', 'snack, Snacks, Dark Chocolate, dark chocolate, chocho, chocolate'),
(34, 'Chocolate Almonds', 6, 8, 5, 'almonds', '<p>Delicious dark chocolate covered almonds from Woodstock farm!</p>', 'chocoalmonds.png', 'snack, Snacks, Almond, Almonds, almond, almonds, dark almonds, dark chocolate almonds, chocolate, Dark, Dark Chocolate, Dark Chocolate Almonds, '),
(35, 'Apple Chips', 6, 8, 5, 'apple chips', '<p>Flavorful apple cinnamon chips from Bare farm!</p>', 'applechips.png', 'snack, Snacks, Apple Chips, apple, Apple, apple chips'),
(36, 'Fruit Snacks', 6, 10, 5, 'snacks', '<p>Tasty fruit snacks from StonyField farm!</p>', 'fruitsnacks.png', 'snack, Snacks, fruit snacks, fruit, Fruit Snacks, Fruit, snacks');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--
-- Creation: Apr 26, 2017 at 04:58 AM
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
-- Creation: Apr 26, 2017 at 04:58 AM
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
-- Creation: Apr 26, 2017 at 04:58 AM
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
(5, 'admin', 'admin@gmail.com', 'admin'),
(6, 'naomi', 'naomi@gmail.com', 'naomi');

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
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
