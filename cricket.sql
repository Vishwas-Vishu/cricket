-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 01:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_coach` ()  NO SQL
SELECT c_name FROM coaches$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_pid` ()  NO SQL
SELECT par_id FROM paticipant$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `mail`, `password`) VALUES
(1, 'crickadmin@gmail.com', 'crick');

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `c_role` varchar(30) NOT NULL,
  `about` varchar(100) NOT NULL,
  `c_d` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`c_id`, `c_name`, `gender`, `age`, `contact`, `c_role`, `about`, `c_d`) VALUES
(8, 'Anil Kumble', 'male', 34, 65656345, 'Bowling', '7 years', '2020-12-23'),
(9, 'Ricky', 'male', 43, 7896556545, 'Batting', '10 years', '2020-12-23'),
(10, 'Johnny', 'male', 45, 7689345678, 'Batting', '30+ years', '2020-12-23'),
(11, 'Yathish', 'male', 40, 6784563456, 'Bowling', '14 years', '2020-12-23'),
(12, 'Sunil Gawaskar', 'male', 45, 343345454, 'Batting', '10 years', '2020-12-25'),
(13, 'Rahul Dravid', 'male', 50, 9865745126, 'Batting', '30+ years', '2020-12-30'),
(14, 'Verendra Sehwag', 'male', 51, 8567412365, 'Batting', '25+  years', '2020-12-30'),
(15, 'zaheer Khan', 'male', 46, 5687412565, 'Bowling', '25+  years', '2020-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `co_id` int(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `par_id` int(10) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `fees` int(30) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`co_id`, `course`, `par_id`, `batch`, `c_name`, `fees`, `mail`) VALUES
(9, 'Annual Academy', 14, 'Afternoon Batch', 'Ricky', 20000, 'psxwwykuw@theeasymail.com'),
(10, 'Sports Psychology and Counseling', 15, 'Full Day', 'Johnny', 40000, 'Nicolett@gmail.com'),
(11, 'Summar Camp', 16, 'Afternoon Batch', 'Yathish', 59000, 'vasu@gmail.com'),
(13, 'Sports Psychology and Counseling', 15, 'Full Day', 'Yathish', 35000, 'harris@gmail.com'),
(14, 'Sports Psychology and Counseling', 20, 'Afternoon Batch', 'zaheer Khan', 50000, 'Vikas@gmail.com'),
(15, 'Full Day Coaching Programme', 19, 'Afternoon Batch', 'Verendra Sehwag', 80000, 'Sumanth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paticipant`
--

CREATE TABLE `paticipant` (
  `par_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `r_d` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paticipant`
--

INSERT INTO `paticipant` (`par_id`, `name`, `gender`, `age`, `city`, `contact`, `r_d`) VALUES
(14, 'pavan', 'male', 20, 'bangalore', 9513789921, '2020-12-23'),
(15, 'Harish', 'male', 20, 'Hyderbad', 8347374373, '2020-12-23'),
(16, 'Rohan', 'male', 15, 'Mysuru', 9876543223, '2020-12-23'),
(17, 'vivek', 'male', 23, 'mangalore', 8934837344, '2020-12-25'),
(18, 'chethan', 'male', 23, 'Bangalore', 8796754566, '2020-12-29'),
(19, 'Rakshith', 'male', 24, 'Delhi', 7996122655, '2020-12-30'),
(20, 'Ruthless', 'male', 25, 'Chennai', 8965231473, '2020-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `mail`, `name`, `password`) VALUES
(11, 'harris@gmail.com', 'Harris', 'haris@123'),
(12, 'nameeb@gmail.com', 'Nameeb', 'Yts123'),
(14, 'psxwwykuw@theeasymail.com', 'Sampath R', 'Sampath@123'),
(15, 'Nicolett@gmail.com', 'Nicolette', 'Nicolet123'),
(16, 'kendra@gmail.com', 'Kendra', 'kendra123'),
(17, 'vasu@gmail.com', 'Vasu', 'Vasu123'),
(19, 'chethanmsd183@gmail.com', 'Chethan', 'chethan123'),
(20, 'Vikas@gmail.com', 'Vikas kumar', 'vikas123'),
(21, 'Sumanth@gmail.com', 'Sumanth kumar', 'sumanth123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `paticipant`
--
ALTER TABLE `paticipant`
  ADD PRIMARY KEY (`par_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `co_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `paticipant`
--
ALTER TABLE `paticipant`
  MODIFY `par_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
