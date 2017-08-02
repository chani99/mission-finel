-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 02:24 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `proj_emplyee`
--

CREATE TABLE `proj_emplyee` (
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(45) DEFAULT NULL,
  `work_start` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_emplyee`
--

INSERT INTO `proj_emplyee` (`worker_id`, `worker_name`, `work_start`) VALUES
(1, 'hello', '2017-08-23 00:00:00'),
(2, 'shmuel', '2016-04-06 00:00:00'),
(3, 'asd', '2017-08-14 00:00:00'),
(4, 'yoss', '2017-07-05 00:00:00'),
(5, 'hello222222', '2017-08-23 00:00:00'),
(6, 'noa', '2017-07-12 00:00:00'),
(8, 'ayala', '2010-11-01 00:00:00'),
(10, 'cggg', '0000-00-00 00:00:00'),
(11, NULL, '2017-08-31 00:00:00'),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(20, 'hadar', '2017-08-31 00:00:00'),
(21, 'levi', '2017-08-03 00:00:00'),
(23, 'chani', '2017-08-11 00:00:00'),
(24, 'ayala', '2017-08-16 00:00:00'),
(25, 'Levi', '2017-11-09 00:00:00'),
(35, 'asd\"   document.alert(\"hello\");', '2017-08-14 00:00:00'),
(36, 'asd\"   alert(\"hello\");', '2017-08-14 00:00:00'),
(37, '\" <script>alert(\"hello\");</script>', '2017-08-14 00:00:00'),
(38, '\"\" echo <script>alert(\"hello\");</script>', '2017-08-14 00:00:00'),
(89, 'sad', '2017-08-15 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proj_emplyee`
--
ALTER TABLE `proj_emplyee`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proj_emplyee`
--
ALTER TABLE `proj_emplyee`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
