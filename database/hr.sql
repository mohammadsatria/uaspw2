-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 03:39 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(10) NOT NULL,
  `emp_name` varchar(35) NOT NULL,
  `emp_address` text,
  `emp_birthdate` date NOT NULL,
  `emp_birthplace` varchar(35) NOT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_created_by` varchar(15) DEFAULT NULL,
  `emp_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emp_gender` enum('0','1') NOT NULL COMMENT '0 = Male, 1 = Female',
  `emp_religion` enum('I','P','K','B','H','O') NOT NULL COMMENT 'I = Islam, P = Protestan, K = Katolik, B = Budha, H = Hindu, O = Others',
  `emp_grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_address`, `emp_birthdate`, `emp_birthplace`, `emp_email`, `emp_created_by`, `emp_update`, `emp_gender`, `emp_religion`, `emp_grade`) VALUES
('AX0001', 'Mohammad Satria', 'Perumahan Griya Benda Asri ', '1994-02-01', 'Jakarta', 'mohammad.satria3498@gmail.com', 'hrd', '2018-05-07 00:00:00', '1', 'I', 1),
('AX0003', 'Feeder Aginta', 'Pamulang', '1992-05-07', 'Medan, Sumatra Utara', 'feeder.aginta@gmail.com', 'hrd', '2018-05-07 00:00:00', '0', 'I', 1),
('AX0004', 'Dewa Danubrata', 'Cijantung, Jakarta Timur', '1992-05-03', 'Bekasi', 'dewa.awed@gmail.com', 'hrd', '2018-05-15 00:00:00', '0', 'H', 1),
('AX0005', 'Aburizal Rosadi', 'Jogjakarta', '1996-05-03', 'Jogjakarta', 'abu.rizal@gmail.com', 'hrd', '2018-05-15 00:00:00', '0', 'I', 1),
('AX0006', 'Muhammad Otong', 'Depok', '1976-03-21', 'Jakarta', 'otong.ajah@gmail.com', 'hrd', '2018-05-08 00:00:00', '0', 'I', 1),
('AX0007', 'Ria Hanifah', 'Depok', '1995-03-20', 'Solo', 'ria.hani@gmail.com', 'hrd', '2018-05-16 00:00:00', '1', 'P', 1),
('AX0008', 'Gretha Lasut', 'Bekasi', '1974-05-17', 'NTB', 'gretha.lasut@gmail.com', 'hrd', '2018-05-24 00:00:00', '1', 'P', 1),
('AX0009', 'Roni Erjanto', 'Cibinong', '1988-07-23', 'Bogor', 'roni.erjanto@gmail.com', 'hrd', '2018-05-24 00:00:00', '0', 'P', 1),
('AX010', 'Eggi Gunawan', 'Depok', '1994-02-20', 'Jakarta', 'eggi.gunawan@axiasolusi.com', 'hrd', '2018-05-22 00:00:00', '0', 'I', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `grade_desc` varchar(35) NOT NULL,
  `grade_order` int(11) NOT NULL,
  `grade_created_by` varchar(15) DEFAULT NULL,
  `grade_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `grade_desc`, `grade_order`, `grade_created_by`, `grade_update`) VALUES
(1, 'Director', 1, 'hrd', '2018-05-14 23:18:32'),
(2, 'General Manager', 2, 'hrd', '2018-05-14 23:18:32'),
(3, 'Manager', 4, 'hrd', '2018-05-14 23:18:32'),
(4, 'Senior Assistant Manager', 5, 'hrd', '2018-05-14 23:18:32'),
(6, 'Senior Manager', 3, NULL, '2018-05-14 23:18:32'),
(15, 'Senior Developer', 10, 'hrd', '2018-05-15 07:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_created_by` varchar(10) NOT NULL,
  `user_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
