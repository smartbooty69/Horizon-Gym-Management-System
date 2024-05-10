-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 01:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `memberAge` int(11) NOT NULL,
  `packageExpiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`memberId`, `memberImage`, `memberName`, `membershipPackage`, `memberPhone`, `memberEmail`, `memberAddress`, `memberGender`, `joinDate`, `memberAge`, `packageExpiry`) VALUES
(105, 0x53637265656e73686f7420323032342d30332d3234203138323433332e706e67, 'samuel hanok anchan', 'SILVER', 2147483647, 'samuelhanok0@gmail.com', 'mangalore', 'male', '2024-04-14', 21, '2024-07-14'),
(106, 0x53637265656e73686f7420323032342d30332d3234203138323433332e706e67, 'clancy m', 'BRONZE', 2147483647, 'samuelhanok0@gmail.com', 'mangalore', 'female', '2024-03-12', 24, '2024-04-12'),
(107, 0x53637265656e73686f7420323032342d30332d3234203138323433332e706e67, 'sharan', 'SILVER', 2147483647, 'samuelhanok0@gmail.com', 'mangalore', 'other', '2024-01-13', 34, '2024-04-13'),
(110, 0x53637265656e73686f7420323032332d30392d3137203132343333372e706e67, 'sharan', 'BRONZE', 866003542, 'samuelhanok0@gmail.com', 'mangalore', 'male', '2024-04-11', 0, '2024-05-11');

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
  MODIFY `memberId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
