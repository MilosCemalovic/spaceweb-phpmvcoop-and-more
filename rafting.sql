-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 04:51 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rafting`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingform`
--

CREATE TABLE `bookingform` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `thegroup` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingform`
--

INSERT INTO `bookingform` (`id`, `fullname`, `email`, `thegroup`) VALUES
(1, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', 'largegroup'),
(2, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', 'largegroup'),
(3, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', 'largegroup'),
(4, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', 'smallgroup'),
(5, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', 'largegroup'),
(6, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', 'largegroup'),
(7, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', 'largegroup'),
(8, 'Milos Cemalovic', 'miloscemalovicnew@gmail.c', 'largegroup'),
(9, 'Danas 18 Avgust 2020', 'miloscemalovicnew@gmail.com', 'smallgroup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingform`
--
ALTER TABLE `bookingform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingform`
--
ALTER TABLE `bookingform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
