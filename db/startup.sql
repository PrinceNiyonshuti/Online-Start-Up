-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 03:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startup`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `display_name` longtext DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `full_names` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `display_name`, `password`, `full_names`, `phone`, `email`, `profile`) VALUES
(1, 'Flove Designs', 'Flove Designs data', '123', 'Ndiho Pen', 123, 'pen@gmail.com', '1.png'),
(3, 'Bakery', 'Kigali Bakery', '123', 'Niyonshuti Prince', 780589950, 'npprince47@gmail.com', '4.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_names` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_names`, `username`, `password`, `phone`, `email`, `profile`) VALUES
(1, 'Startup Admin', 'aubey', '123', 789685445, 'aubey@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appt_id` int(11) NOT NULL,
  `inv_names` longtext NOT NULL,
  `inv_email` longtext NOT NULL,
  `inv_tel` longtext NOT NULL,
  `startup_id` int(11) NOT NULL,
  `sched_date` datetime NOT NULL,
  `details` longtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appt_id`, `inv_names`, `inv_email`, `inv_tel`, `startup_id`, `sched_date`, `details`, `created_date`) VALUES
(2, 'Niyonshuti Prince', 'npprince47@gmail.com', '0780589950', 7, '2021-01-11 00:00:00', 'afsdafadsf', '2021-01-01 14:47:09'),
(3, 'Niyonshuti Prince', 'npprince47@gmail.com', '0780589950', 7, '2021-01-04 19:48:00', 'sfsdfasdf', '2021-01-01 14:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `startup_tbl`
--

CREATE TABLE `startup_tbl` (
  `start_id` int(11) NOT NULL,
  `start_name` longtext DEFAULT NULL,
  `start_descr` longtext DEFAULT NULL,
  `start_category` longtext DEFAULT NULL,
  `start_profile` longtext DEFAULT NULL,
  `start_doc` longtext DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `startup_tbl`
--

INSERT INTO `startup_tbl` (`start_id`, `start_name`, `start_descr`, `start_category`, `start_profile`, `start_doc`, `account_id`, `created_date`) VALUES
(7, 'Testing Data', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower', 'er', 'er.jpeg', 'er.pdf', 1, '2021-03-01 13:21:02'),
(8, 'Testing Data', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\n                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\n                        fraction of the camp price. However, who has the willpower', 'er', 'er.jpeg', 'er.pdf', 1, '0000-00-00 00:00:00'),
(9, 'Google inks pact for new 35-storey office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying sad That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying', 'Technology', 'Google inks pact for new 35-storey office.png', 'Google inks pact for new 35-storey office.pdf', 3, '2021-03-02 16:17:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appt_id`),
  ADD KEY `appoint_projet` (`startup_id`);

--
-- Indexes for table `startup_tbl`
--
ALTER TABLE `startup_tbl`
  ADD PRIMARY KEY (`start_id`),
  ADD KEY `account_projects` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `startup_tbl`
--
ALTER TABLE `startup_tbl`
  MODIFY `start_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appoint_projet` FOREIGN KEY (`startup_id`) REFERENCES `startup_tbl` (`start_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `startup_tbl`
--
ALTER TABLE `startup_tbl`
  ADD CONSTRAINT `account_projects` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
