-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 05:52 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_depositor`
--

CREATE TABLE `tb_depositor` (
  `depositor_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postcode` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_depositor`
--

INSERT INTO `tb_depositor` (`depositor_id`, `firstname`, `lastname`, `othernames`, `email`, `phone`, `country_id`, `state_id`, `city`, `address`, `postcode`, `photo`, `dob`, `gender`, `date_registered`) VALUES
(1, 'Mark', 'Zuckerberg', 'Elliot', 'markzuckerberg@facebook.com', '08034567890', 1, 1, 'Ajah', '10 Somewhere in Ajah', 234, '9-books-mark-zuckerberg-thinks-everyone-should-read.jpg', '1989-06-07 00:00:00', 'Male', '2017-04-04 17:27:31'),
(2, 'Bill', 'Gates', 'Wasiu', 'billgates@microsoft.com', '08098786540', 1, 1, 'Akure', '10 Oba Adesida Rd', 32432, 'bill.jpg', '1979-03-08 00:00:00', 'Male', '2017-04-04 17:33:47'),
(3, 'Steve', 'Jobs', 'Suraju', 'stevejobs@apple.com', '2348102937011', 1, 1, 'Ile-Ife', '10 Glover Road, Ikoyi', 543, 'steve.jpg', '1989-07-27 00:00:00', 'Male', '2017-04-04 17:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `date_registered` datetime NOT NULL,
  `ref_id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_bank` varchar(20) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `balance` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `fullname`, `phone`, `email`, `password`, `photo`, `date_registered`, `ref_id`, `account_name`, `account_bank`, `account_number`, `balance`, `level`) VALUES
(9, 'Adeleke Oladapo', '08020803580', 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'dapo.jpg', '2017-03-28 14:48:33', 0, '', '', '', 70000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_depositor`
--
ALTER TABLE `tb_depositor`
  ADD PRIMARY KEY (`depositor_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_depositor`
--
ALTER TABLE `tb_depositor`
  MODIFY `depositor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
