-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 09:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL PRIMARY KEY,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--
CREATE TABLE IF NOT EXISTS `category` (
`categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(4, 'ITALIAN'),
(5, 'CREPES'),
(6, 'SOUPS'),
(7, 'DESSERT'),
(8, 'BEVERAGES');


CREATE TABLE `registration` (
  `name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL PRIMARY KEY DEFAULT '',
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `username`, `email`, `password`) VALUES
('simran', 'simran123', 'simran@gmail.com', 'simran'),
('ritika', 'ritika123', 'ritika@gmail.com', 'ritika'),
('abhishek', 'abhishek123', 'abhishek@gmail.com', 'abhishek');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`orderid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customer`, `total`, `date_purchase`) VALUES
(100, 'Rajesh', 600, '2021-02-06 15:29:00'),
(101, 'Sonali', 450, '2021-01-09 20:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
--
-- Dumping data for table `tbl_product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(14, 4,'Alfredo Pasta',  200, 'upload/Alfredopasta.jpg'),
(15, 4,'Bruschetta',350, 'upload/bruschetta.jpg'),
(16, 4,'Lasagna',350, 'upload/lasagna.jpg'),
(17, 4,'Mozzarella Pizza',250, 'upload/mozzarellapizza.jpg'),
(18, 5, 'Mushroom Crepe', 300,'upload/mushroomcrepe.jpg'),
(19, 5,'Seafood Mornay Crepe', 650,'upload/seafoodmornaycrepe.jpg' ),
(20, 6,'Chicken Corn Soup', 320 ,'upload/chickencornsoup.jpg'),
(21, 6, 'Noodle Soup', 350,'upload/noodlesoup.jpg' ),
(22, 6,'Munchow Soup', 320, 'upload/munchowsoup.jpg'),
(23, 7,'Blueberry Cheesecake', 280 , 'upload/blueberrycheesecake.jpg'),
(24, 7,'Chocolate Brownie', 450, 'upload/chocolatebrownie.jpg'),
(25, 7,'Ice cream', 200, 'upload/icecream.jpg'),
(26, 8,'Fresh Lime Soda', 80, 'upload/chocolatebrownie.jpg'),
(27, 8,'Fruit Punch', 320, 'upload/fruitpunch.jpg'),
(28, 8,'Iced Tea', 180, 'upload/icedtea.jpg' );


-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--
--
-- Table structure for table `purchase_detail`
--

CREATE TABLE IF NOT EXISTS `purchase_detail` (
`pdid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `orderid`, `productid`, `quantity`) VALUES
(10, 8, 15, 2),
(11, 8, 17, 2),
(12, 8, 18, 2),
(13, 9, 15, 3);
COMMIT;


ALTER TABLE `category`
 ADD PRIMARY KEY (`categoryid`);
 
ALTER TABLE `product`
 ADD PRIMARY KEY (`productid`);
 
 ALTER TABLE `orders`
 ADD PRIMARY KEY (`orderid`);
 
 ALTER TABLE `purchase_detail`
 ADD PRIMARY KEY (`pdid`);
 
 
 
 ALTER TABLE `category`
MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;

ALTER TABLE `product`
MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;

ALTER TABLE `orders`
MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;

ALTER TABLE `purchase_detail`
MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;


CREATE TABLE IF NOT EXISTS `c_details`(
  `c_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_phone` varchar(20) NOT NULL PRIMARY KEY DEFAULT '',
  `c_address` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
