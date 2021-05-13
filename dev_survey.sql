-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 01:50 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `slno` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `interest` int(5) NOT NULL,
  `knowledge` int(5) NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`slno`, `name`, `interest`, `knowledge`, `count`) VALUES
(1, 'Python', 27, 23, 6),
(2, 'JavaScript', 19, 22, 6),
(3, 'C/C++', 8, 12, 6),
(4, 'Java', 13, 10, 6),
(5, 'PHP', 14, 12, 6),
(6, 'C#', 9, 14, 6),
(7, 'Kotlin', 10, 17, 6),
(8, 'Swift', 9, 15, 6),
(9, 'Pearl', 9, 13, 6),
(10, 'HTML/CSS', 18, 11, 6);

-- --------------------------------------------------------

--
-- Table structure for table `survey_entry`
--

CREATE TABLE `survey_entry` (
  `slno` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `python` int(5) NOT NULL,
  `javascript` int(5) NOT NULL,
  `ccpp` int(5) NOT NULL,
  `java` int(5) NOT NULL,
  `php` int(5) NOT NULL,
  `csharp` int(5) NOT NULL,
  `kotlin` int(5) NOT NULL,
  `swift` int(5) NOT NULL,
  `pearl` int(5) NOT NULL,
  `htmlcss` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_entry`
--

INSERT INTO `survey_entry` (`slno`, `timestamp`, `email`, `name`, `python`, `javascript`, `ccpp`, `java`, `php`, `csharp`, `kotlin`, `swift`, `pearl`, `htmlcss`) VALUES
(56, '2021-01-25 14:45:19', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, '2021-01-25 14:44:47', 'aszxczxcd@asd.com', 'asdasd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, '0000-00-00 00:00:00', 'athul@gmail.com', 'athul', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, '2021-01-25 14:44:07', 'zxczasdxc@asd.com', 'asdasdasd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `survey_entry`
--
ALTER TABLE `survey_entry`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `slno` (`slno`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `slno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey_entry`
--
ALTER TABLE `survey_entry`
  MODIFY `slno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
