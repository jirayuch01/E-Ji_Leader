-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 09:21 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectwebpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_system`
--

CREATE TABLE `admin_system` (
  `id` int(4) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `IDCard` varchar(13) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `Status` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_system`
--

INSERT INTO `admin_system` (`id`, `user_name`, `user_pass`, `email`, `IDCard`, `fname`, `lname`, `birthday`, `address`, `Telephone`, `sex`, `Status`) VALUES
(13, 'test', 'testtest', 's5730211009@phuket.psu.ac.th', '5198516519561', 'test', 'test', '2016-11-25', 'PSU Phuket', '0320602306', 'F', 'emp'),
(15, 'admin', 'admin12345', 'nai.supachok.zaza@gmail.com', '1101500831091', 'Suphachok', 'Noopan', '2016-11-26', 'PSU Phuket', '0887575475', 'M', 'adm'),
(18, 'customer', '12345', 'nai.supachok.zaza@gmail.com', '1101500831091', 'Suphachok', 'Noopan', '1995-12-28', 'PSU Phuket', '0887575475', 'M', 'cus'),
(17, 'admin-oly', '123456789', 's5730211009@phuket.psu.ac.th', '1101500831091', 'Oly', 'SiStER', '2016-11-27', 'PSU Phuket', '0887575475', 'M', 'adm'),
(19, 'employee', '12345', 's5730211009@phuket.psu.ac.th', '1101500831091', 'Suphachok', 'Noopan', '1995-12-28', 'PSU Phuket', '0789654123', 'M', 'emp'),
(21, 'naisupachok', '123456789', 'nai.supachok.zaza@gmail.com', '1234567890123', 'Suphachok', 'Noopan', '2016-12-14', 'PSU Phuket', '0887575475', 'M', 'cus');

-- --------------------------------------------------------

--
-- Table structure for table `customers_booking_rooms`
--

CREATE TABLE `customers_booking_rooms` (
  `idBooking` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `RoomsID` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `smoke` varchar(15) NOT NULL,
  `floor` varchar(15) NOT NULL,
  `bedtype` varchar(15) NOT NULL,
  `CheckInDate` date NOT NULL,
  `CheckOutDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_booking_rooms`
--

INSERT INTO `customers_booking_rooms` (`idBooking`, `CustomerID`, `RoomsID`, `title`, `fname`, `lname`, `email`, `nationality`, `phone`, `smoke`, `floor`, `bedtype`, `CheckInDate`, `CheckOutDate`) VALUES
(20, 18, 2, 'Miss.', 'Suphachok', 'Noopan', 'nai.supachok.zaza@gmail.com', 'Thailand', '0887575475', 'Non Smoking', 'High Floor', 'King Bed', '2016-12-13', '2016-12-21'),
(19, 18, 6, 'Dr.', 'Chay', 'Zee', 'zee@gmail.com', 'Thai', '09517532684', 'Smoke', 'Low', 'King', '2016-12-15', '2016-12-16'),
(18, 18, 5, 'Dr.', 'Aom', 'Sin', 'Aomsin@hotmail.com', 'Thai', '0546798312', 'Smoke', 'High', 'King', '2016-12-13', '2016-12-15'),
(17, 18, 4, 'Mrs.', 'Gun', 'Zaa', 's5730211068@phuket.psu.ac.th', 'Thai', '0987654321', 'non-smoke', 'Low', 'King', '2016-12-22', '2016-12-23'),
(16, 18, 3, 'Ms.', 'Ji', 'Chin', 'asdf@gmail.com', 'Thai', '0123456789', 'Smoke', 'High', 'King', '2016-12-13', '2016-12-15'),
(14, 18, 1, 'Mr.', 'Suphachok', 'Noopan', 'nai.supachok.zaza@gmail.com', 'Thai', '0887575475', 'non-smoke', 'High', 'King', '2016-12-12', '2016-12-13'),
(15, 18, 2, 'Mr.', 'Ji', 'Chin', 'asdfasdf@hotmail.com', 'Thai', '0882541245', 'Smoke', 'Low', 'King', '2016-12-22', '2016-12-31'),
(21, 18, 2, 'Dr.', 'Suphachok', 'Noopan', 'nai.supachok.zaza@gmail.com', 'Afghanistan', '020001012', 'Non Smoking', 'Low Floor', 'King Bed', '2017-01-11', '2017-01-12'),
(22, 18, 5, 'Dr.', 'Gun', 'Zaa', 'nai.supachok.zaza@gmail.com', 'Australia', '0321456987', 'Non Smoking', 'Low Floor', 'King Bed', '2017-01-01', '2017-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `idRooms` int(11) NOT NULL,
  `RoomsNo` varchar(4) NOT NULL,
  `RoomsType` varchar(45) NOT NULL,
  `RoomsPrice` int(11) NOT NULL,
  `RoomsStatus` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`idRooms`, `RoomsNo`, `RoomsType`, `RoomsPrice`, `RoomsStatus`) VALUES
(2, '2001', 'SUPERIOR SUITE', 6000, 'Reserve'),
(1, '1001', 'DELUXE ROOM', 5000, 'Available'),
(3, '3001', 'PAVILION SUITE', 7500, 'Available'),
(4, '4001', 'PAVILION SEA VIEW', 8500, 'Available'),
(5, '5001', 'EXECUTIVE PAVILION SEA VIEW', 10000, 'Reserve'),
(6, '6001', 'EXECUTIVE PAVILION GARDEN VIEW', 11000, 'Reserve');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IDCard` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ReserveDate` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Telephone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `Activityname` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `email`, `IDCard`, `fname`, `lname`, `ReserveDate`, `Telephone`, `sex`, `Activityname`) VALUES
(57, 'nai.supachok.zaza@gmail.com', '1101500831091', 'Suphachok', 'Noopan', '2016-12-12', '0887575475', 'M', 'KohCHANG'),
(61, 'asdf@gmail.com', '1101500831091', 'Gunz', 'Zaa', '2016-12-15', '0945966225', 'M', 'KohCHANG'),
(60, 's5730211009@phuket.psu.ac.th', '1101500831091', 'Ji', 'Chin', '2016-12-14', '0887575475', 'F', 'KohCHANG'),
(59, 'nai.supachok.zaza@gmail.com', '1101500831091', 'Chay', 'Zee', '2016-12-14', '0887575475', 'M', 'JamesBondIsland');

-- --------------------------------------------------------

--
-- Table structure for table `tours_detail`
--

CREATE TABLE `tours_detail` (
  `idTours` int(4) NOT NULL,
  `Activityname` text COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tours_detail`
--

INSERT INTO `tours_detail` (`idTours`, `Activityname`, `Price`) VALUES
(1, 'KohCHANG', 3000),
(2, 'JamesBondIsland', 2000),
(3, 'AroundPhuket', 1000),
(4, 'PhangNga', 1250),
(7, 'Koh Yao Noi', 8900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_system`
--
ALTER TABLE `admin_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_booking_rooms`
--
ALTER TABLE `customers_booking_rooms`
  ADD PRIMARY KEY (`idBooking`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`idRooms`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours_detail`
--
ALTER TABLE `tours_detail`
  ADD PRIMARY KEY (`idTours`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_system`
--
ALTER TABLE `admin_system`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `customers_booking_rooms`
--
ALTER TABLE `customers_booking_rooms`
  MODIFY `idBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `idRooms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tours_detail`
--
ALTER TABLE `tours_detail`
  MODIFY `idTours` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
