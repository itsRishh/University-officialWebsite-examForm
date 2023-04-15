-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 01:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud exam details`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_info12`
--

CREATE TABLE `stud_info12` (
  `S.No` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Father's name` varchar(255) NOT NULL,
  `Parmanent address` varchar(255) NOT NULL,
  `Phone No` bigint(255) NOT NULL,
  `Local address` varchar(255) NOT NULL,
  `L Phone No` bigint(255) NOT NULL,
  `Programme` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `Roll No` varchar(255) NOT NULL,
  `Enrollment No` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Repeat/Semester Fees` varchar(255) NOT NULL,
  `Receipt No/Date` varchar(255) NOT NULL,
  `Subject 1` varchar(255) NOT NULL,
  `Date 1` date NOT NULL,
  `Subject 2` varchar(255) NOT NULL,
  `Date 2` date NOT NULL,
  `Subject 3` varchar(255) NOT NULL,
  `Date 3` date NOT NULL,
  `Subject 4` varchar(255) NOT NULL,
  `Date 4` date NOT NULL,
  `Subject 5` varchar(255) NOT NULL,
  `Date 5` date NOT NULL,
  `Subject 6` varchar(255) NOT NULL,
  `Date 6` date NOT NULL,
  `Subject 7` varchar(255) NOT NULL,
  `Date 7` date NOT NULL,
  `Subject 8` varchar(255) NOT NULL,
  `Date 8` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_info12`
--

INSERT INTO `stud_info12` (`S.No`, `Name`, `Father's name`, `Parmanent address`, `Phone No`, `Local address`, `L Phone No`, `Programme`, `Semester`, `Roll No`, `Enrollment No`, `Year`, `Month`, `Repeat/Semester Fees`, `Receipt No/Date`, `Subject 1`, `Date 1`, `Subject 2`, `Date 2`, `Subject 3`, `Date 3`, `Subject 4`, `Date 4`, `Subject 5`, `Date 5`, `Subject 6`, `Date 6`, `Subject 7`, `Date 7`, `Subject 8`, `Date 8`) VALUES
(47, 'Rishabh Jaiswal', 'Basant Jaiswal', '390, Shiv City, Tulsi Parisar Phase 1', 9826956546, '390, Shiv City, Tulsi Parisar Phase 1', 9826956546, '', '', '', '', '', '', '', '0000-00-00 00:00:00.000000', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00'),
(48, 'Rishabh Jaiswal', 'Basant Jaiswal', '390, Shiv City, Tulsi Parisar Phase 1', 9826956546, '390, Shiv City, Tulsi Parisar Phase 1', 9826956546, '', '', '', '', '', '', '', 'rubs8ga8d', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_info12`
--
ALTER TABLE `stud_info12`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_info12`
--
ALTER TABLE `stud_info12`
  MODIFY `S.No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
