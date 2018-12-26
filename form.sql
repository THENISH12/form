-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 06:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdetail`
--

CREATE TABLE `formdetail` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formdetail`
--

INSERT INTO `formdetail` (`id`, `name`, `mname`, `lname`, `email`, `mobile`, `password`, `cpassword`, `time`) VALUES
(4, 'mushq', 'dd', 'ddd', 'dshqureshi12@gmail.com', '8819990041', '12345', '12345', '2018-12-24 11:48:28'),
(8, 'mushq', 'dd', 'ddd', 'dshqureshi12@gmail.com', '8819990041', '12345', '12345', '2018-12-24 12:20:12'),
(9, 'Rashid', 'd', 'ddd', 'mushq@gmail.com', '654654654654', '555', '888', '2018-12-24 12:36:50'),
(13, 'shahrukh', 'dddd', 'khan', 'shahrukh12@gmail.com', '7970009785', 'Shahrukh', 'Shahrukh', '2018-12-25 04:10:01'),
(14, 'MOHD', '', 'DANISH', 'user@gmail.com', '8819990041', '12345', '12345', '2018-12-25 17:48:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdetail`
--
ALTER TABLE `formdetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdetail`
--
ALTER TABLE `formdetail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
