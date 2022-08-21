-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 09:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sltiet`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `No` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Name` text NOT NULL,
  `father name` text NOT NULL,
  `Surname` text NOT NULL,
  `Email_ID` text NOT NULL,
  `Department` text NOT NULL,
  `Address` text NOT NULL,
  `MobileNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`No`, `Title`, `Name`, `father name`, `Surname`, `Email_ID`, `Department`, `Address`, `MobileNumber`) VALUES
(35, 'Asst. Professor', 'haaaaaa', 'horse', 'horse', 'horse@gmail.com', 'CSE', 'horse nagar, rajkot-360001', 2147483647),
(36, 'Lab. Assitant', 'horse', 'horse', 'horse', 'horse@gmail.com', 'Mechanical', 'horse nagar, rajkot-360001', 2147483647),
(93, 'Professor', 'horse', 'horse', 'horse', 'admin@admin.com', 'Mechanical', 'horse nagar,rajkot-360005', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
