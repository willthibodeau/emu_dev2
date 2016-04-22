-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 06:32 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elitemeats_dev1`
--
CREATE DATABASE IF NOT EXISTS `elitemeats_dev1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elitemeats_dev1`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_categoryID` int(11) NOT NULL,
  `cat_categoryName` varchar(60) NOT NULL,
  `cat_price` decimal(10,2) NOT NULL,
  `cat_discount` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `categories`:
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`, `cat_price`, `cat_discount`) VALUES
(52, 'poor boy special', '100.00', 0.1),
(53, 'rich boy special', '200.00', 0.1),
(54, 'chicken and beef', '500.00', 0.1),
(55, 'pork and seafood', '900.00', 0.1),
(56, 'Shirmp and Seafood', '450.00', 0.1),
(57, 'kabobs', '500.00', 0.25);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `com_commentID` int(11) NOT NULL,
  `com_userID` int(11) NOT NULL,
  `com_commentText` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `comments`:
--   `com_userID`
--       `users` -> `users_userID`
--

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_commentID`, `com_userID`, `com_commentText`) VALUES
(1, 1, 'this is comment text 1'),
(2, 2, 'This is comment text 2 user id 2'),
(3, 3, 'this is comment text 3 user id 3'),
(4, 4, 'this is comment text 4 user id 4'),
(5, 1, 'this is the second comment for user id one'),
(6, 2, 'asdfasd'),
(7, 2, 'sdfasdfweqrqwer'),
(8, 2, 'qwerqwe   asdfasdfsdf   sdfgsdfg'),
(11, 4, 'more commentssasdfasdfasfs');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orders_orderID` int(11) NOT NULL,
  `orders_userID` int(11) NOT NULL,
  `orders_categoryID` int(11) NOT NULL,
  `orders_quantity` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `orders`:
--

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_orderID`, `orders_userID`, `orders_categoryID`, `orders_quantity`) VALUES
(43, 3, 52, 1),
(44, 3, 53, 1),
(45, 2, 52, 1),
(46, 2, 53, 1),
(47, 2, 54, 2),
(48, 4, 52, 1),
(49, 5, 52, 1),
(50, 5, 52, 2),
(51, 5, 53, 2),
(52, 4, 52, 1),
(53, 4, 52, 1),
(54, 4, 52, 1),
(55, 4, 52, 1),
(56, 4, 52, 2),
(57, 4, 53, 2),
(58, 4, 55, 1),
(59, 4, 54, 2),
(60, 6, 52, 1),
(61, 4, 54, 2),
(62, 4, 56, 1),
(63, 4, 57, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `prod_productID` int(11) NOT NULL,
  `prod_categoryID` int(11) NOT NULL,
  `prod_prodCode` varchar(60) NOT NULL,
  `prod_productQuantity` varchar(60) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `imagepath` text NOT NULL,
  `imagealt` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `products`:
--   `prod_categoryID`
--       `categories` -> `cat_categoryID`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productQuantity`, `prod_description`, `prod_price`, `imagepath`, `imagealt`) VALUES
(1, 57, '100', '10', 'Pork and Seafood Kabobs', '100.00', '../imageProcess/images/kabobs_100.jpg', 'kabobs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_userID` int(11) NOT NULL,
  `users_username` varchar(60) NOT NULL,
  `users_password` varchar(60) NOT NULL,
  `users_userLevel` varchar(2) NOT NULL,
  `users_firstName` varchar(60) NOT NULL,
  `users_lastName` varchar(60) NOT NULL,
  `users_email` varchar(60) NOT NULL,
  `users_phone` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_userID`, `users_username`, `users_password`, `users_userLevel`, `users_firstName`, `users_lastName`, `users_email`, `users_phone`) VALUES
(1, 'btadmin', '1d1d13dc7908f8a13abe325f3e269261722a565c', 'a', 'Brad admin', '', '', ''),
(2, 'btmem', 'e45026b7feb0793800d65b2b232bafc0b19fe553', 'm', 'Brad member', '', '', ''),
(3, 'wtadmin', 'c630d316c8209829a6762e7882a2595e751a9935', 'a', 'Will Admin', '', '', ''),
(4, 'wtmem', 'cbafd2979f771552cee574b69c17f572e615927e', 'm', 'will Member', '', '', ''),
(5, 'wtadmin12', '965dbfc0fda5e2463a0edb37329c54a81725a05a', 'm', 'wilfred', 'thi', 'asmith@mactec.com', '5551212'),
(6, 'wtmem13', 'a228bff908b8410beeb1dd40f1a62f543e5d001f', 'm', 'wilfred', 'thi', 'asmith@mactec.com', '5551212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_categoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_commentID`),
  ADD KEY `fk_comments` (`com_userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_productID`),
  ADD KEY `prod_categoryID` (`prod_categoryID`),
  ADD KEY `prod_productName` (`prod_productQuantity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_userID`),
  ADD UNIQUE KEY `users_username` (`users_username`),
  ADD KEY `users_username_2` (`users_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_categoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_commentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_orderID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments` FOREIGN KEY (`com_userID`) REFERENCES `users` (`users_userID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`prod_categoryID`) REFERENCES `categories` (`cat_categoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
