-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2025 at 10:21 AM
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
-- Database: `dbvms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Maha Khan', 'admin@gmail.com', '123', 'assets/image/pic3.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `appoint_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `v_id` int(11) NOT NULL,
  `app_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_tbl`
--

INSERT INTO `appointment_tbl` (`appoint_id`, `child_id`, `hospital_id`, `date`, `time`, `v_id`, `app_status`) VALUES
(1, 1, 1, '2025-8-6', '6-9', 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `child_tbl`
--

CREATE TABLE `child_tbl` (
  `child_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_fathername` varchar(50) NOT NULL,
  `c_age` int(11) NOT NULL,
  `c_gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_tbl`
--

INSERT INTO `child_tbl` (`child_id`, `c_name`, `c_fathername`, `c_age`, `c_gender`) VALUES
(1, 'Maha Kahn', 'Ali Khan', 5, 'baby girl'),
(2, 'Rida Ali', 'M. ALi Shah', 6, 'baby girl'),
(3, 'Rimsha Bilal', 'M. Bilal Shah', 6, 'baby girl');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_tbl`
--

CREATE TABLE `hospital_tbl` (
  `hospital_id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_phone` varchar(50) NOT NULL,
  `h_email` varchar(50) NOT NULL,
  `h_address` varchar(100) NOT NULL,
  `h_password` varchar(50) NOT NULL,
  `h_status` varchar(20) DEFAULT 'deactivate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_tbl`
--

INSERT INTO `hospital_tbl` (`hospital_id`, `h_name`, `h_phone`, `h_email`, `h_address`, `h_password`, `h_status`) VALUES
(1, 'Ziauddin Hospital ', '032567678899', 'ziauddin@gmail.com', 'karachi', '1234', 'activate'),
(3, 'Aga Khan', '458887777', 'agakhan@gmail.com', 'karimabad karachi', '234', 'activate'),
(4, 'Alkhidmat hospital', '4848393202', 'ak@gamil.com', 'karach', '234', 'deactivate'),
(9, 'sana', '458887777777', 'anasaslam961@gmail.com', 'karach', '1234', 'Deactivate');

-- --------------------------------------------------------

--
-- Table structure for table `parent_tbl`
--

CREATE TABLE `parent_tbl` (
  `parent_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_phone` varchar(50) NOT NULL,
  `P_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccines_tbl`
--

CREATE TABLE `vaccines_tbl` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `v_status` enum('Available','Unavailable') DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccines_tbl`
--

INSERT INTO `vaccines_tbl` (`v_id`, `v_name`, `v_status`) VALUES
(1, 'polio vaccine', 'Unavailable'),
(2, 'measles', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `child_tbl`
--
ALTER TABLE `child_tbl`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `hospital_tbl`
--
ALTER TABLE `hospital_tbl`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `parent_tbl`
--
ALTER TABLE `parent_tbl`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `vaccines_tbl`
--
ALTER TABLE `vaccines_tbl`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child_tbl`
--
ALTER TABLE `child_tbl`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospital_tbl`
--
ALTER TABLE `hospital_tbl`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parent_tbl`
--
ALTER TABLE `parent_tbl`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccines_tbl`
--
ALTER TABLE `vaccines_tbl`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
