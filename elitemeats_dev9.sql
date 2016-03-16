-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 09:29 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_categoryID` int(11) NOT NULL,
  `cat_categoryName` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `categories`:
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_categoryID`, `cat_categoryName`) VALUES
(1, 'beef'),
(2, 'chicken'),
(28, 'pbj');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `com_commentID` int(11) NOT NULL,
  `com_commentText` text NOT NULL,
  `com_userID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `comments`:
--   `com_userID`
--       `users` -> `users_userID`
--

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_commentID`, `com_commentText`, `com_userID`) VALUES
(1, 'this is the first comment', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_productID` int(11) NOT NULL,
  `prod_categoryID` int(11) NOT NULL,
  `prod_prodCode` varchar(60) NOT NULL,
  `prod_productName` varchar(60) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_date` datetime NOT NULL,
  `imagepath` text NOT NULL,
  `imagealt` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `products`:
--   `prod_categoryID`
--       `categories` -> `cat_categoryID`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_productID`, `prod_categoryID`, `prod_prodCode`, `prod_productName`, `prod_description`, `prod_price`, `prod_date`, `imagepath`, `imagealt`) VALUES
(1, 1, 'beef', 'beef package 1', 'many packages of beef', '100.00', '2016-02-04 00:00:00', '../imageProcess/images/steak.jpg', 'steak text'),
(3, 2, '100', 'beef tenderloin', 'Yummy steaks', '100.00', '2016-03-08 00:00:00', '', ''),
(5, 1, '100', 'beef roast', 'beef roast', '500.00', '2016-03-09 00:00:00', '', ''),
(7, 28, '100', 'pbj', 'pork belly', '2.00', '0000-00-00 00:00:00', '', ''),
(8, 2, '100', 'pbj', 'pork belly', '2.00', '0000-00-00 00:00:00', '', ''),
(10, 1, '101', 'beefy Tips ', 'tips for dinner', '50.00', '0000-00-00 00:00:00', '', ''),
(12, 2, '101', 'chicken wings', 'hot', '505.00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_userID` int(11) NOT NULL,
  `users_username` varchar(60) NOT NULL,
  `users_firstName` varchar(60) NOT NULL,
  `users_lastName` varchar(60) NOT NULL,
  `users_password` varchar(60) NOT NULL,
  `users_email` varchar(60) NOT NULL,
  `users_phone` varchar(12) NOT NULL,
  `users_userLevel` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_userID`, `users_username`, `users_firstName`, `users_lastName`, `users_password`, `users_email`, `users_phone`, `users_userLevel`) VALUES
(1, 'btadmin', '', '', '1d1d13dc7908f8a13abe325f3e269261722a565c', '', '', 'a'),
(2, 'btmem', '', '', 'e45026b7feb0793800d65b2b232bafc0b19fe553', '', '', 'm'),
(3, 'wtadmin', '', '', 'c630d316c8209829a6762e7882a2595e751a9935', '', '', 'a'),
(4, 'wtmem', '', '', 'cbafd2979f771552cee574b69c17f572e615927e', '', '', 'm');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_productID`),
  ADD KEY `prod_categoryID` (`prod_categoryID`),
  ADD KEY `prod_productName` (`prod_productName`);

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
  MODIFY `cat_categoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_commentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
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
