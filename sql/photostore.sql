-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 03:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photostore`
--

-- --------------------------------------------------------

--
-- Table structure for table `allphoto`
--

CREATE TABLE `allphoto` (
  `aid` int(11) NOT NULL,
  `aname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adetail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `aprice` int(255) NOT NULL,
  `pname` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `allphoto`
--

INSERT INTO `allphoto` (`aid`, `aname`, `adetail`, `aprice`, `pname`, `type`) VALUES
(1, 'l1', 'Fishing boat in the sea.', 5, 'Fishing boat', 'landscape'),
(2, 'l2', 'Fishing boats in a bay.', 5, 'Fishing boats', 'landscape'),
(3, 'l3', 'The fishing boat in the sea.', 5, 'Fishing boat', 'landscape'),
(4, 'l4', 'A bridge to the vanilla sky.', 5, 'Vanilla sky', 'landscape'),
(5, 'l5', 'A bridge to the vanilla sky.', 5, 'Vanilla sky', 'landscape'),
(6, 'l6', 'Simple lifestyle.', 5, 'Lifestyle', 'landscape'),
(7, 'l7', 'You will be with me forever.', 5, 'You and me', 'landscape'),
(8, 'l8', 'The natures is beautiful.', 5, 'Nature', 'landscape'),
(9, 'l9', 'The natures is beautiful.', 5, 'Nature', 'landscape'),
(10, 'l10', 'Mon bridge at Sangkhlaburi in Thailand.', 5, ' Mon bridge', 'landscape'),
(11, 'l11', 'I''m into the vanilla sky.', 5, 'Signature', 'landscape'),
(12, 'l12', 'The people see out of the train when the train on the death bridge.', 5, 'Death bridge', 'landscape'),
(13, 'l13', 'Thai people are believe in Buddha.', 5, 'Believe', 'landscape'),
(14, 'l14', 'Thai people are believe in Buddha.', 5, 'Believe', 'landscape'),
(15, 'l15', 'Thai people are believe in Buddha.', 5, 'Believe', 'landscape'),
(16, 'l16', 'Anyone  have a destination for live.', 5, 'The destination', 'landscape'),
(17, 'l17', 'Destiny brought us together. It was our destiny to meet.', 5, 'The destiny', 'landscape'),
(18, 'l18', 'It give feel relax.', 5, 'Relax', 'landscape'),
(19, 'l19', 'The people see out of around the glass bridge.', 5, 'The peple', 'landscape'),
(20, 'l20', 'Mahanakhon in Thailand.', 5, 'MahaNakhon', 'landscape'),
(21, 'l21', 'the light is like the life because It is a straight line.', 5, 'Light', 'landscape'),
(22, 'l22', 'Mahanakhon in Thailand (BTS).', 5, 'A ways', 'landscape'),
(23, 'l23', 'Mahanakhon in Thailand (BTS).', 5, 'A ways', 'landscape'),
(24, 'l24', 'Bangkok noi train station.', 5, 'The railway', 'landscape'),
(25, 'p1', 'Portrait photo.', 5, 'The girl', 'portrait'),
(26, 'p2', 'Portrait photo.', 5, 'The girl', 'portrait'),
(27, 'p3', 'Portrait photo.', 5, 'Thinking', 'portrait'),
(28, 'p4', 'Portrait photo.', 5, 'Smile', 'portrait'),
(29, 'p5', 'Portrait photo.', 5, 'Thinking of you', 'portrait'),
(30, 'p6', 'Portrait photo.', 5, 'Beautiful smile', 'portrait'),
(31, 'p7', 'Portrait photo.', 5, 'The girl', 'portrait'),
(32, 'p8', 'Portrait photo.', 5, 'Candy', 'portrait'),
(33, 'p9', 'Portrait photo.', 5, 'Love', 'portrait'),
(34, 'p10', 'Portrait photo.', 5, 'Vanilla Light', 'portrait'),
(35, 'p11', 'Portrait photo.', 5, 'Gray', 'portrait'),
(36, 'p12', 'Portrait photo.', 5, 'The man', 'portrait'),
(37, 'p13', 'Portrait photo.', 5, 'Pretty girl', 'portrait'),
(38, 'p14', 'Portrait photo.', 5, 'Pretty girl', 'portrait'),
(39, 'p15', 'Portrait photo.', 5, ' Backlit', 'portrait'),
(40, 'p16', 'Portrait photo.', 5, 'Pretty girl', 'portrait'),
(41, 'p17', 'Portrait photo.', 5, 'Look at me', 'portrait'),
(42, 'p18', 'Portrait photo.', 5, 'Fair', 'portrait'),
(43, 'p19', 'Portrait photo.', 5, 'Pretty girl', 'portrait'),
(44, 'p20', 'Portrait photo.', 5, 'Pretty girl', 'portrait'),
(45, 'p21', 'Portrait photo.', 5, 'Look at me', 'portrait'),
(46, 'p22', 'Portrait photo.', 5, 'Pretty girl', 'portrait'),
(47, 'p23', 'Portrait photo.', 5, 'Backlit', 'portrait'),
(48, 'p24', 'Portrait photo.', 5, 'Pretty girl', 'portrait'),
(49, 'd1', 'The coin stick with the wall.', 5, 'Coin', 'dark'),
(50, 'd2', 'Guiding light for live.', 5, 'Light', 'dark'),
(51, 'd3', 'The dog look out of the window.', 5, 'Look out', 'dark'),
(52, 'd4', 'Light bulb in the darkness.', 5, 'Light bulb', 'dark'),
(53, 'd5', 'Candlelight in the darkness.', 5, 'Candlelight', 'dark'),
(54, 'd6', 'Light in the darkness.', 5, 'Light in darkness', 'dark'),
(55, 'd7', 'Boat on the dark water.', 5, 'Alone', 'dark'),
(56, 'd8', 'Black White tone.', 5, 'Black White', 'dark'),
(57, 'd9', 'Cutting line between darkness and light.', 5, 'Cutting line', 'dark'),
(58, 'd10', 'Black sand beach at rayong in Thailand.', 5, 'Black sand beach', 'dark'),
(59, 'd11', 'I''m tried.', 5, 'Tried', 'dark'),
(60, 'd12', 'Shut up.. Shh', 5, ' Shh', 'dark'),
(61, 'd13', 'The Smiley win every thing.', 5, 'smile in sadness', 'dark'),
(62, 'd14', 'Hope in the darkness.', 5, 'Dark light', 'dark'),
(63, 'd15', 'I will stay here.', 5, ' Be tired', 'dark'),
(64, 'd16', 'Black hope.', 5, 'Dark sky', 'dark'),
(65, 'd17', 'Picture is memory.', 5, 'Memo', 'dark'),
(66, 'd18', 'Keep holding on, I love you.', 5, 'Keep holding on', 'dark'),
(67, 'd19', 'Light in the darkness.', 5, 'Light in darkness', 'dark'),
(68, 'd20', 'Black White tone.', 5, 'Black White', 'dark'),
(69, 'd21', 'Stay here.', 5, 'Destiny', 'dark'),
(70, 'd22', 'High St,Brooklyn,Bridge', 5, 'High st', 'dark'),
(71, 'd23', 'Black White tone.', 5, 'Black White', 'dark'),
(72, 'd24', 'Shh', 5, 'Shh', 'dark'),
(73, 'n1', 'Vintage style.', 7, 'Vintage', 'new'),
(74, 'n2', 'i wanna bee a superman.', 7, 'Black and White', 'new'),
(75, 'n3', 'oldness.', 7, '1990s', 'new'),
(76, 'n4', 'The pretty girl.', 7, 'Bikini', 'new'),
(77, 'n5', 'The pretty girl.', 7, 'Bikini', 'new'),
(78, 'n6', 'The pretty girl.', 7, 'Pretty', 'new'),
(79, 'n7', 'Keep clam and drink coffee.', 7, 'Keep Clam', 'new'),
(80, 'n8', 'Black and White tone.', 7, 'Guitar', 'new'),
(81, 'n9', 'A dog. A dog. A dog.', 7, 'Dog', 'new'),
(82, 'n10', 'A dog. A dog. A dog.', 7, 'Dog', 'new'),
(83, 'n11', 'A dog. A dog. A dog.', 7, 'Dog', 'new'),
(84, 'n12', 'A dog. A dog. A dog.', 7, 'Dog', 'new'),
(85, 'n13', 'A cat. A cat. A cat.', 7, 'Cat', 'new'),
(86, 'n14', 'A cat. A cat. A cat.', 7, 'Cat', 'new'),
(87, 'n15', 'A cat. A cat. A cat.', 7, 'Cat', 'new'),
(88, 'n16', 'Cool wall.', 7, 'Cool', 'new'),
(89, 'n17', 'Different wall.', 7, 'Saturation', 'new'),
(90, 'n18', 'Flower girl.', 7, 'Flower', 'new'),
(91, 'n19', 'Gentleman on the bike.', 7, 'Gentleman', 'new'),
(92, 'n20', 'View on the tower.', 7, 'View', 'new'),
(93, 'p25', '69696969', 69, 'Tjung', 'portrait');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `Fname` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `Onumber` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `Fname`, `phone`, `email`, `Onumber`, `comment`) VALUES
(1, 'qwe', 'qwe', 'poriqwe@hsdaf.com', 'qweqew', 'qwe'),
(2, 'porinut', '0831494189', 'porinut1@gmail.com', 'l1', 'Your mother name?');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `eid` int(11) NOT NULL,
  `emailAddress` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`eid`, `emailAddress`) VALUES
(44, 'qwe@hot.com'),
(49, 'porinut@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `tid` int(11) NOT NULL,
  `ord_id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `pricePerpiece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`tid`, `ord_id`, `aid`, `aname`, `quantity`, `pricePerpiece`) VALUES
(39, 94, 85, 'n13', 4, 7),
(40, 94, 88, 'n16', 4, 7),
(41, 94, 76, 'n4', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(20) NOT NULL,
  `mid` int(10) NOT NULL,
  `ord_date` datetime NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` enum('wait','pay','send','cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `mid`, `ord_date`, `username`, `status`) VALUES
(94, 5, '2017-11-21 05:41:20', 'porinut', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mid` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FirstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Postcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mid`, `username`, `Email`, `FirstName`, `LastName`, `phone`, `password`, `Address`, `Province`, `District`, `Postcode`, `question`, `answer`) VALUES
(4, 'ruengyod', 'ruengyod1@gmail.com', 'Rueangyot', 'Treemat', '0887924355', 'qwerty1', '123/2002 Moo 16 tumbon NaiMueang', 'Khonkaen', 'Mueang', '40002', '', ''),
(5, 'porinut', 'porinut@hotmail.com', 'qwe', 'qwe', 'qwe', '123', 'qwe', 'qwe', 'qwe', 'qwe', '1', 'bee'),
(7, 'nutsupreme', 'porinut1@gmail.com', 'Purinut', 'Ninlaong', '0831494189', '12345', '123/4', 'Khonkaen', 'Khonkaen', '40000', '1', 'bee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allphoto`
--
ALTER TABLE `allphoto`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allphoto`
--
ALTER TABLE `allphoto`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
