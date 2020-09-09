-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 04:50 PM
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
-- Database: `spaceweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `formcreateinputs`
--

CREATE TABLE `formcreateinputs` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `opinion` varchar(50) NOT NULL,
  `developer` varchar(5) NOT NULL,
  `letter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formcreateinputs`
--

INSERT INTO `formcreateinputs` (`id`, `fullname`, `email`, `phone`, `skills`, `opinion`, `developer`, `letter`) VALUES
(1, 'Milos Cemalovic', 'miloscemalovicnew@gmail.com', '062327929', 'html5 cssgrid flexbox bem sass mvcoopphp', 'joboffer', 'yes', 'I want you in my company - full time!'),
(4, 'Violeta Kisic', 'violeta@gmail.com', '06012345678', 'html5 cssgrid flexbox bem sass mvcoopphp', 'impressive', 'no', 'Bravo!'),
(5, 'Kuskalara', 'sljakenzi@skl.com', '+381113240654', 'html5', 'impressive', 'yes', 'Kuskalara smrnjf salara km naza!'),
(9, 'Danas 24 Avgust 2020', 'jlajdf@kjasd.com', '+381623056087', 'html5 cssgrid bem sass mvcoopphp', 'good', 'yes', 'I say yeeeeaaaahh! \\\\nn//');

-- --------------------------------------------------------

--
-- Table structure for table `formreadinputs`
--

CREATE TABLE `formreadinputs` (
  `id` int(11) NOT NULL,
  `developer` varchar(5) NOT NULL,
  `letter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formreadinputs`
--

INSERT INTO `formreadinputs` (`id`, `developer`, `letter`) VALUES
(1, 'yes', 'Way to go!'),
(2, 'no', 'bla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formcreateinputs`
--
ALTER TABLE `formcreateinputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formreadinputs`
--
ALTER TABLE `formreadinputs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formcreateinputs`
--
ALTER TABLE `formcreateinputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `formreadinputs`
--
ALTER TABLE `formreadinputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
