-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 05:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaints_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_email`, `admin_password`) VALUES
('devikakanyal04@gmail.com', 'thehawks'),
('diyagandotra@gmail.com', 'thehawks');

-- --------------------------------------------------------

--
-- Table structure for table `drive_table`
--

CREATE TABLE `drive_table` (
  `hashtag` varchar(20) NOT NULL,
  `organization` varchar(40) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `moto` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `aim` varchar(100) NOT NULL,
  `vision` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drive_table`
--

INSERT INTO `drive_table` (`hashtag`, `organization`, `location`, `date`, `time`, `moto`, `description`, `aim`, `vision`) VALUES
('', '', '', '0000-00-00', '00:00:00', '', '', '', ''),
('', '', '', '0000-00-00', '00:00:00', '', '', '', ''),
('', '', '', '0000-00-00', '00:00:00', '', '', '', ''),
('#dev', 'vani', 'noida', '2023-02-03', '14:48:00', '', '', '', ''),
('#dev', 'vani', 'noida', '2023-02-25', '14:49:00', 'i', 'g', 'u', 'm'),
('#dev', 'vani', 'noida', '2023-02-03', '21:04:00', 'you', 'can', 'do', 'this'),
('#dev', 'vani', 'noida', '2023-03-11', '20:49:00', 'you', 'can', 'do', 'this'),
('#dev', 'vani', 'noida', '2023-03-11', '20:49:00', 'you', 'can', 'do', 'this');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `email` varchar(30) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`email`, `feedback`) VALUES
('devika', 'nbkjs');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `email` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `locality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`email`, `psw`, `locality`) VALUES
('', '', ''),
('1@gmail.com', '', ''),
('aastha@gmail.com', '567', ''),
('arun@gmail.com', '123', ''),
('dimple@gmail.com', 'devika', ''),
('gungun@gmail.com', 'devika', ''),
('h@gmail.com', 'hii', ''),
('karu@gmail.com', 'hello', ''),
('karunaa@gmail.com', '123', ''),
('mansi@gmail.com', 'mansi', ''),
('mansii@gmail.com', 'mansi', ''),
('sakshi@gmail.com', 'sakshi', ''),
('tanu@gmail.com', 'tanu', ''),
('tom@gmail.com', 'tom@g', ''),
('TYU@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_complaints_table`
--

CREATE TABLE `register_complaints_table` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `mno` int(11) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `streetno` tinyint(4) NOT NULL,
  `complainttype` varchar(20) NOT NULL,
  `subcomplainttype` varchar(30) NOT NULL,
  `complaintdescription` varchar(300) NOT NULL,
  `trackid` varchar(20) NOT NULL,
  `yes` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_complaints_table`
--

INSERT INTO `register_complaints_table` (`fname`, `mname`, `lname`, `gender`, `dob`, `email`, `mno`, `state`, `district`, `pincode`, `locality`, `streetno`, `complainttype`, `subcomplainttype`, `complaintdescription`, `trackid`, `yes`, `no`, `status`) VALUES
('devika', 'kanyal', 'kan', 'on', '2023-03-10', 'devikaaaa@gmail.com', 2147483647, 'uttarakhand', 'nainital', 2345, 'nainital', 67, 'Violation_of_order', 'food', 'gdhdgdh', '63ddf6ca71b69', 3, 4, 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
