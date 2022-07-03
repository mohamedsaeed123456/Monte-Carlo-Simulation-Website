-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 03:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login2`
--

-- --------------------------------------------------------

--
-- Table structure for table `calc`
--

CREATE TABLE `calc` (
  `id` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `j` int(11) NOT NULL,
  `k` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `n` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calc`
--

INSERT INTO `calc` (`id`, `a`, `b`, `c`, `s`, `d`, `f`, `g`, `h`, `j`, `k`, `m`, `n`) VALUES
(1, 1, 6, 2, 3, 3, 5, 4, 6, 5, 1, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `calc2`
--

CREATE TABLE `calc2` (
  `id` int(11) NOT NULL,
  `aa` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `ss` int(11) NOT NULL,
  `dd` int(11) NOT NULL,
  `ff` int(11) NOT NULL,
  `gg` int(11) NOT NULL,
  `hh` int(11) NOT NULL,
  `jj` int(11) NOT NULL,
  `kk` int(11) NOT NULL,
  `mm` int(11) NOT NULL,
  `nn` int(11) NOT NULL,
  `ll` int(11) NOT NULL,
  `vv` int(11) NOT NULL,
  `xx` int(11) NOT NULL,
  `zz` int(11) NOT NULL,
  `qq` int(11) NOT NULL,
  `ww` int(11) NOT NULL,
  `ee` int(11) NOT NULL,
  `rr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calc2`
--

INSERT INTO `calc2` (`id`, `aa`, `bb`, `cc`, `ss`, `dd`, `ff`, `gg`, `hh`, `jj`, `kk`, `mm`, `nn`, `ll`, `vv`, `xx`, `zz`, `qq`, `ww`, `ee`, `rr`) VALUES
(1, 1, 324, 4, 423, 6, 23, 7, 53, 2, 76, 6, 86, 8, 43, 1, 3, 2, 654, 3, 2),
(2, 23, 2, 45, 12, 32, 53, 21, 132, 21, 53, 4, 21, 12, 55, 5, 11, 56, 43, 231, 13);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `ProjectTitle` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `manager` varchar(1000) NOT NULL,
  `frontend` varchar(1000) NOT NULL,
  `Backend` varchar(1000) NOT NULL,
  `ClientName` varchar(1000) NOT NULL,
  `Description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project2`
--

CREATE TABLE `project2` (
  `id` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `SelectProject` varchar(1000) NOT NULL,
  `SelectType` varchar(1000) NOT NULL,
  `assignedto` varchar(1000) NOT NULL,
  `bugstatus` varchar(1000) NOT NULL,
  `startdate` varchar(1000) NOT NULL,
  `duedate` varchar(1000) NOT NULL,
  `totaltime` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project3`
--

CREATE TABLE `project3` (
  `id` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `UserLevel` varchar(1000) NOT NULL,
  `UserName` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `ConfirmPassword` varchar(1000) NOT NULL,
  `Mobile` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `DateOfBirth` varchar(1000) NOT NULL,
  `AddressLine1` varchar(1000) NOT NULL,
  `AddressLine2` varchar(1000) NOT NULL,
  `City` varchar(1000) NOT NULL,
  `State` varchar(1000) NOT NULL,
  `Country` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`) VALUES
(1, 'mohamed saeed', 'saidahmed784@gmail.com', 'mnbmnbmnb123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calc`
--
ALTER TABLE `calc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calc2`
--
ALTER TABLE `calc2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project2`
--
ALTER TABLE `project2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project3`
--
ALTER TABLE `project3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calc`
--
ALTER TABLE `calc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calc2`
--
ALTER TABLE `calc2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project2`
--
ALTER TABLE `project2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project3`
--
ALTER TABLE `project3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
