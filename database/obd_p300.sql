-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obd_p300`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation_history`
--

CREATE TABLE `blood_donation_history` (
  `b_id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donation_history`
--

INSERT INTO `blood_donation_history` (`b_id`, `user_id`, `date`) VALUES
(1, '1', '2020-02-20'),
(2, '2', '2019-10-20'),
(3, '7', '2020-10-11'),
(4, '8', '2020-10-23'),
(5, '4', '2020-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood_group`
--

CREATE TABLE `tbl_blood_group` (
  `b_id` int(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blood_group`
--

INSERT INTO `tbl_blood_group` (`b_id`, `blood_group`) VALUES
(6, 'O+'),
(7, 'A+'),
(8, 'A-'),
(9, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Ashique Adnan', 'ashique@gmail.com', '1712795943', 'I need O+ blood.'),
(2, 'Akash', 'akash@gmail.com', '01712795943', 'I need O+ Blood.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(255) NOT NULL,
  `place_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`) VALUES
(2, 'Sylhet'),
(3, 'Sunamgong'),
(4, 'Sumangong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `status` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `place_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `mobile`, `date_of_birth`, `blood_group`, `weight`, `status`, `address`, `place_id`, `type`) VALUES
(4, 'Zabed Ahmed Chowdhury', 'mdzac96@gmail.com', '123123', '01712795943', '1995-10-20', 'A+', 60, 0, 'Barlekha,Moulvibazar', '2', 'admin'),
(6, 'Habiba Akter', 'ha20@gmail.com', '145632', '19876543210', '2006-12-02', 'O-', 24, 0, 'Pathantula,Sylhet', '11', ''),
(7, 'Nabila Haque', 'nabila22@gmail.com', '987654', '96325874102', '2010-01-20', 'O-', 35, 0, 'Akhalia,Sylhet', '3100', ''),
(8, 'Shakib Ahmed', 'sh75@gmail.com', '741258', '96321478500', '1985-07-25', 'AB+', 78, 0, 'Beanibazar,Sylhet', '1200', ''),
(9, 'Raiyan Ahmed Chowdhury', 'raiyan69@gmail.com', '654789', '11223344775', '1998-02-25', 'B+', 59, 0, 'Barlekha,Moulvibazar', '1425', ''),
(10, 'Ariful Haque', 'arif98@gmail.com', '123456', '01712795943', '1998-10-10', 'AB-', 85, 0, 'Kumarpara,Sylhet', '5', ''),
(11, 'Samia Akter', 'samia12@gmail.com', '123123', '01712795943', '1995-10-20', 'O-', 47, 0, 'Subidbazar,Sylhet', '14', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donation_history`
--
ALTER TABLE `blood_donation_history`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_blood_group`
--
ALTER TABLE `tbl_blood_group`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donation_history`
--
ALTER TABLE `blood_donation_history`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_blood_group`
--
ALTER TABLE `tbl_blood_group`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
