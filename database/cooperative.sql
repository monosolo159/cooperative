-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 09:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooperative`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `activity_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_image`) VALUES
(2, 'activity2018pm15185105.jpg'),
(3, 'activity2018pm15185113.jpg'),
(4, 'activity2018pm15185118.jpg'),
(5, 'activity2018pm15185131.jpg'),
(6, 'activity2018pm15185211.jpg'),
(7, 'activity2018pm15205212.jpg'),
(8, 'activity2018pm15205226.jpg'),
(9, 'activity2018pm15205232.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_surname` varchar(50) NOT NULL,
  `admin_idcard` varchar(13) NOT NULL,
  `admin_birthday` date NOT NULL,
  `admin_tel` varchar(15) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_gender` varchar(10) NOT NULL,
  `admin_address` text NOT NULL,
  `admin_image` varchar(50) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_surname`, `admin_idcard`, `admin_birthday`, `admin_tel`, `admin_email`, `admin_gender`, `admin_address`, `admin_image`, `admin_user`, `admin_password`) VALUES
(1, 'Admin', 'Admin', '0000000000000', '1994-11-02', '0845611555', 'test@gmail.com', 'ผู้หญิง', '100/100', 'admin2018am15090410.jpg', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `authorities`
--

CREATE TABLE `authorities` (
  `authorities_id` int(11) NOT NULL,
  `authorities_name` varchar(50) NOT NULL,
  `authorities_surname` varchar(50) NOT NULL,
  `authorities_idcard` varchar(13) NOT NULL,
  `authorities_birthday` date NOT NULL,
  `authorities_tel` varchar(15) NOT NULL,
  `authorities_email` varchar(50) NOT NULL,
  `authorities_gender` varchar(10) NOT NULL,
  `authorities_address` text NOT NULL,
  `authorities_image` varchar(50) NOT NULL,
  `authorities_user` varchar(50) NOT NULL,
  `authorities_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorities`
--

INSERT INTO `authorities` (`authorities_id`, `authorities_name`, `authorities_surname`, `authorities_idcard`, `authorities_birthday`, `authorities_tel`, `authorities_email`, `authorities_gender`, `authorities_address`, `authorities_image`, `authorities_user`, `authorities_password`) VALUES
(4, 'ปริชาติ', 'สิงห์คำมา', 'xxxxxxxxxxxxx', '2018-02-01', '0878666236', 'parichat@gmail.com', 'ผู้หญิง', '596 ถนนเสรีไท ต.ดงมะไฟน้อย อ.เมือง จ.สกลนคร 47000 ', 'authorities2018am15104050.jpg', 'parichat', 'd43dd1a626a58a4afbe376da2e566435'),
(5, 'TEST', 'MASTER', '1212121212121', '2012-12-12', '0812121212', 'test@gmail.com', 'ผู้ชาย', 'Sole', 'authorities2018pm15194830.jpg', 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_surname` varchar(50) NOT NULL,
  `member_idcard` varchar(13) NOT NULL,
  `member_birthday` date NOT NULL,
  `member_tel` varchar(15) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_gender` varchar(10) NOT NULL,
  `member_address` text NOT NULL,
  `member_image` varchar(50) NOT NULL,
  `member_user` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL,
  `member_share` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_surname`, `member_idcard`, `member_birthday`, `member_tel`, `member_email`, `member_gender`, `member_address`, `member_image`, `member_user`, `member_password`, `member_share`) VALUES
(2, '123233', '123', '1231232313123', '2018-02-09', '1231231231', 'member@hotmail.com', 'ผู้ชาย', '1000131', 'member2018am15110154.jpg', '123', '202cb962ac59075b964b07152d234b70', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_balance` varchar(20) NOT NULL,
  `product_order` varchar(20) NOT NULL DEFAULT '0',
  `product_sale` varchar(20) NOT NULL DEFAULT '0',
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_balance`, `product_order`, `product_sale`, `product_image`) VALUES
(2, 'มาม่าโจ๊กคัพรสไก่', '15', '100', '50', '1000', 'product2018pm15180624.jpg'),
(3, 'เลย์เน็ต', '20', '150', '0', '500', 'product2018pm15180725.jpg'),
(5, 'TORO', '20', '100', '0', '499', 'product2018pm15182318.jpg'),
(6, 'เลย์รสมันฝรั่ง', '5', '100', '0', '0', 'product2018pm15204813.jpg'),
(7, 'ปลาสวรรค์รสบาร์บี้คิว', '20', '100', '0', '0', 'product2018pm15204840.jpg'),
(8, 'ปาปรีก้า', '5', '100', '0', '0', 'product2018pm15204909.jpg'),
(9, 'ขาไก่อาโกริ', '5', '100', '0', '0', 'product2018pm15204937.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `authorities`
--
ALTER TABLE `authorities`
  ADD PRIMARY KEY (`authorities_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `authorities`
--
ALTER TABLE `authorities`
  MODIFY `authorities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
