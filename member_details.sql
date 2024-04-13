-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 07:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horizon_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE `member_details` (
  `memberId` int(10) NOT NULL,
  `memberImage` blob NOT NULL,
  `memberName` varchar(255) NOT NULL,
  `membershipPackage` varchar(255) NOT NULL,
  `memberPhone` int(15) NOT NULL,
  `memberEmail` varchar(255) NOT NULL,
  `memberAddress` varchar(255) NOT NULL,
  `memberGender` varchar(10) NOT NULL,
  `joinDate` date NOT NULL,
  `memberAge` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`memberId`, `memberImage`, `memberName`, `membershipPackage`, `memberPhone`, `memberEmail`, `memberAddress`, `memberGender`, `joinDate`, `memberAge`) VALUES
(89, 0x53637265656e73686f7420323032332d30392d3137203132343333372e706e67, 'sa', 'silver', 121323, 's@gamil.com', 'saw', 'male', '2024-04-09', '2022-02-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_details`
--
ALTER TABLE `member_details`
  ADD PRIMARY KEY (`memberId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_details`
--
ALTER TABLE `member_details`
  MODIFY `memberId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
