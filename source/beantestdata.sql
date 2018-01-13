-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2018 at 07:26 PM
-- Server version: 5.5.58
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakedbeanv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `beandata`
--

CREATE TABLE `beandata` (
  `id` int(11) NOT NULL COMMENT 'id',
  `testdate` date NOT NULL COMMENT 'The date of the tests being run',
  `barcode` varchar(13) NOT NULL COMMENT 'Barcode No.',
  `batch` varchar(30) NOT NULL COMMENT 'Batch information',
  `productmass` int(11) NOT NULL COMMENT 'Mass (weight) on packaging',
  `productname` varchar(120) NOT NULL COMMENT 'Full Product Name',
  `dataurl` varchar(100) DEFAULT NULL COMMENT 'Data URL',
  `brand` varchar(30) DEFAULT NULL COMMENT 'Brand',
  `shop` varchar(30) DEFAULT NULL COMMENT 'Shop',
  `price` decimal(4,2) DEFAULT NULL COMMENT 'Purchase price',
  `massfull` decimal(10,0) DEFAULT NULL COMMENT 'Weight of full can (grams)',
  `massempty` decimal(10,0) DEFAULT NULL COMMENT 'Weight of empty can (grams)',
  `massbeans` decimal(10,0) DEFAULT NULL COMMENT 'Weight of the beans',
  `beanstoliquid` decimal(10,0) DEFAULT NULL COMMENT 'Bean to liquid ratio',
  `beancount` int(11) DEFAULT NULL COMMENT 'Bean count',
  `tasterating` int(11) DEFAULT NULL COMMENT 'Taste rating 1 to 5',
  `ingredientlist` varchar(200) DEFAULT NULL COMMENT 'List of ingreients',
  `sauceviscosity` int(11) DEFAULT NULL COMMENT 'Sauce viscosity',
  `pullring` int(11) DEFAULT NULL COMMENT 'Is it a pullring can?',
  `bestbeforedate` date DEFAULT NULL COMMENT 'Best before date',
  `purchasedate` date DEFAULT NULL COMMENT 'Puchase date',
  `comments` varchar(200) DEFAULT NULL COMMENT 'Comments'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beandata`
--

INSERT INTO `beandata` (`id`, `testdate`, `barcode`, `batch`, `productmass`, `productname`, `dataurl`, `brand`, `shop`, `price`, `massfull`, `massempty`, `massbeans`, `beanstoliquid`, `beancount`, `tasterating`, `ingredientlist`, `sauceviscosity`, `pullring`, `bestbeforedate`, `purchasedate`, `comments`) VALUES
(1, '2018-01-17', '5011835061116', 'B1U V3 6291 09:07 12.7', 400, 'Whole Earth Saucy Organic Baked Beans', NULL, 'Whole Earth', 'Tesco', '1.45', '447', '66', '256', '1', 206, 5, 'organic blah blah', 6, 1, '2018-10-31', '2017-01-31', 'test'),
(2, '2018-01-17', '5000169635490', 'B1U V3 6291 09:07 12.7', 400, 'Waitrose Duchy Organic Baked Beans in Tomato Sauce', NULL, 'Waitrose', 'Waitrose', '2.11', '490', '45', '143', NULL, 404, 5, 'organic haricot beans (49%), water, oranic tomato puree (21%), organic sugar, maize starch, sea salt.....', 4, 1, '2019-01-31', '2017-01-31', 'test'),
(3, '2017-10-25', '5000169061046', 'B1U V3 6291 09:07 12.7', 400, 'Waitrose Essential Baked bean in tomato sauce', NULL, 'Waitrose', 'Waitrose', '1.01', '446', '36', '223', NULL, 666, 4, 'beans, tomatoes blah blahorganic haricot beans (49%), water, oranic tomato puree (21%), organic sugar, maize starch, sea salt.....organic haricot beans (49%), water, oranic tomato puree (21%), organic', 4, 1, '2019-01-31', '2017-01-31', 'test'),
(4, '2018-01-15', '5000232902450', 'B1U V3 6291 09:07 12.7', 410, 'Branston Baked Beans', NULL, 'Branston', 'Coop', '0.76', '476', '67', '232', NULL, 545, 4, 'beans.  tomatos sugar', 2, 0, '2019-01-31', '2016-01-31', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beandata`
--
ALTER TABLE `beandata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beandata`
--
ALTER TABLE `beandata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
