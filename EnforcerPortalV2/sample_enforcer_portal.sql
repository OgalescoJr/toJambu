-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 07:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_enforcer_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `violatorsinfo`
--

CREATE TABLE `violatorsinfo` (
  `violator_id` int(100) NOT NULL,
  `violator_surname` varchar(255) NOT NULL,
  `violator_firstname` varchar(255) NOT NULL,
  `violator_middlename` varchar(255) NOT NULL,
  `violator_age` int(100) NOT NULL,
  `violator_gender` varchar(255) NOT NULL,
  `violator_violation` varchar(255) NOT NULL,
  `violator_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violatorsinfo`
--

INSERT INTO `violatorsinfo` (`violator_id`, `violator_surname`, `violator_firstname`, `violator_middlename`, `violator_age`, `violator_gender`, `violator_violation`, `violator_location`) VALUES
(5, 'samples', 'samplef', 'samplem', 69, 'Male', 'samplev', 'samplel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `violatorsinfo`
--
ALTER TABLE `violatorsinfo`
  ADD PRIMARY KEY (`violator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `violatorsinfo`
--
ALTER TABLE `violatorsinfo`
  MODIFY `violator_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
