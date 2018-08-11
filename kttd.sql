-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 09:58 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kttd`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `dateApplied` varchar(255) NOT NULL,
  `dateApproved` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `email`, `file_path`, `firstname`, `lastname`, `address`, `contact`, `profession`, `account_type`, `dateApplied`, `dateApproved`) VALUES
(1, 'admin', 'admin', 'wewe@yahoo.com', '', 'aa', 'ssss', 'dasdsad', '14321321', 'asdsad', 'Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'william', '123', 'wewe123@yahoo.com', '', 'qweqew', 'qwewqeqwe', 'qwewqeqwe', '000000000', 'sssssxxxx', 'Client', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'waaa1', '111', 'waa@yahoo.com', 'image/usep logo.png', 'asdsad', '12weqsadasd', 'asdasdas', '6231654', 'asdasd', 'Client', '2018-07-03 13:13:27', '2018-07-03 13:14:44'),
(14, 'waaaa123', '1234', 'waaa@gmail.com', 'image/usep logo.png', 'waaaa', 'waaaa', 'asdasd', '09321456987', 'asdasds', 'Staff', '2018-07-03 13:12:50', '2018-07-03 14:41:16'),
(15, 'ttt', '1234', 'asdksjdfiaj2232@gmail.com', 'assets-home/images/12.png', 'asdsad', 'asdasd', 'dasdsadad', '03126549887', 'asdsadsad', 'Client', '2018-07-24 11:12:27', '2018-07-24 11:28:00'),
(16, 'fish', '123', 'asdasdasd@gamil.com', 'image/burger.png', 'waaaa', 'waaaa', 'asdasd', '09321456987', 'asdasds', 'Client', '2018-08-04 03:24:30', '2018-08-04 03:24:41'),
(17, 'sphinx', '123', 'cardo@gmail.com', 'image/0.jpg', 'Cardo', 'Immortal', 'Agdao', '09321654987', 'Police Officer', 'Staff', '2018-08-05 03:04:31', '2018-08-05 03:09:53'),
(18, 'bird', '123', 'hawk@gmail.com', 'image/321321.jpg', 'Hawk', 'Eye', 'Avengers', '09123654789', 'Hero', 'Client', '2018-08-05 03:11:28', '2018-08-05 03:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `approvedreq`
--

CREATE TABLE `approvedreq` (
  `req_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `reqdate` varchar(255) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `reqTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedreq`
--

INSERT INTO `approvedreq` (`req_id`, `username`, `firstname`, `lastname`, `email`, `contact`, `reqdate`, `reason`, `reqTime`) VALUES
(4, 'waaa1', 'asdsad', '12weqsadasd', 'waa@yahoo.com', '6231654', '2018-08-28', 'Apply for Patent!', '14:00');

-- --------------------------------------------------------

--
-- Table structure for table `peding_request`
--

CREATE TABLE `peding_request` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `reqDate` varchar(255) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `reqTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peding_request`
--

INSERT INTO `peding_request` (`id`, `username`, `firstname`, `lastname`, `email`, `contact`, `reqDate`, `reason`, `reqTime`) VALUES
(1, 'fish', 'waaaa', 'waaaa', 'asdasdasd@gamil.com', '09321456987', '2018-08-30', 'Apply for Copyright', '15:59');

-- --------------------------------------------------------

--
-- Table structure for table `pending_account`
--

CREATE TABLE `pending_account` (
  `pending_account_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `account_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_account`
--

INSERT INTO `pending_account` (`pending_account_id`, `username`, `password`, `firstname`, `lastname`, `email`, `address`, `contact`, `profession`, `file_name`, `file_type`, `file_path`, `datetime`, `account_type`) VALUES
(3, 'yyy', '123', 'qsdad', 'dasd', 'asdasdsad#yahoo.com', 'dasd', '0231654987', 'dasdsad', '2.png', 'image/png', 'assets-home/images/2.png', '2018-07-24 11:16:41', 'Client'),
(5, 'Thor', '123', 'Vector', 'Magtanggol', 'vector@gmail.com', 'GMA', '09321654789', 'Hero', '123213213123.jpg', 'image/jpeg', 'image/123213213123.jpg', '2018-08-05 03:08:33', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `pending_tech`
--

CREATE TABLE `pending_tech` (
  `pending_tech_id` int(11) NOT NULL,
  `pending_tech_name` varchar(255) NOT NULL,
  `inventor` varchar(255) NOT NULL,
  `pending_tech_description` varchar(1000) NOT NULL,
  `pending_tech_owner` varchar(255) NOT NULL,
  `pending_tech_username` varchar(255) NOT NULL,
  `pending_tech_acct` varchar(255) NOT NULL,
  `pen_file_type` varchar(255) NOT NULL,
  `p_tech_filename` varchar(255) NOT NULL,
  `p_tech_filetype` varchar(255) NOT NULL,
  `p_tech_filepath` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_tech`
--

INSERT INTO `pending_tech` (`pending_tech_id`, `pending_tech_name`, `inventor`, `pending_tech_description`, `pending_tech_owner`, `pending_tech_username`, `pending_tech_acct`, `pen_file_type`, `p_tech_filename`, `p_tech_filetype`, `p_tech_filepath`, `datetime`) VALUES
(33, 'loooooooo', '', 'vjnvnb', 'aa ssss', 'admin', 'Staff', 'Copyright', 'P3_EWC.pdf', 'application/pdf', 'files/P3_EWC.pdf', '2018-07-09 16:41:07'),
(41, 'ssdddsd', '', 'asdadsad', 'aa ssss', 'admin', 'Staff', 'Copyright', 'KTTD-HOME-revised.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'files/KTTD-HOME-revised.docx', '2018-07-25 04:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `tech_id` int(11) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
  `inventor` varchar(255) NOT NULL,
  `tech_description` varchar(1000) NOT NULL,
  `tech_owner` varchar(255) NOT NULL,
  `tech_username` varchar(255) NOT NULL,
  `tech_acct` varchar(255) NOT NULL,
  `tech_filename` varchar(255) NOT NULL,
  `tech_filetype` varchar(255) NOT NULL,
  `tech_filepath` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `date_approved` datetime NOT NULL,
  `date_request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`tech_id`, `tech_name`, `inventor`, `tech_description`, `tech_owner`, `tech_username`, `tech_acct`, `tech_filename`, `tech_filetype`, `tech_filepath`, `status`, `file_type`, `date_approved`, `date_request`) VALUES
(9, 'asdasdasdas', '', 'torrfiel', 'aa ssss', 'admin', 'Staff', 'P2.pdf', 'application/pdf', 'files/P2.pdf', 1, 'Patent', '2018-07-09 15:30:55', '2018-07-09 15:05:28'),
(10, 'LLLLLLL', '', 'asdasdsad', 'aa ssss', 'admin', 'Staff', 'EWC Scanned receipt.pdf', 'application/pdf', 'files/EWC Scanned receipt.pdf', 1, 'Copyright', '2018-07-09 15:43:52', '2018-07-09 15:43:45'),
(11, 'asdsa', '', 'dsadsadas', 'aa ssss', 'admin', 'Staff', 'P2_EWC.pdf', 'application/pdf', 'files/P2_EWC.pdf', 0, 'Copyright', '2018-07-09 16:41:17', '2018-07-09 15:05:11'),
(12, 'aaaaa336699', '', 'asdad', 'aa ssss', 'admin', 'Staff', 'P2_EWC.pdf', 'application/pdf', 'files/P2_EWC.pdf', 2, 'Patent', '2018-07-09 16:41:24', '2018-07-09 15:55:14'),
(13, 'eerr', '', 'asdadad', 'asdsad 12weqsadasd', 'waaa1', 'Client', 'KTTD-HOME-revised.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'files/KTTD-HOME-revised.docx', 0, 'Copyright', '2018-07-24 14:16:31', '2018-07-24 14:16:17'),
(14, 'sppooo', '', 'asdadasdsad', 'aa ssss', 'admin', 'Staff', 'KTTD-ORG.-STRUCTURE (2).pdf', 'application/pdf', 'files/KTTD-ORG.-STRUCTURE (2).pdf', 0, 'Copyright', '2018-07-25 12:54:05', '2018-07-24 14:54:48'),
(15, 'iiuuu', '', 'asdadsad', 'waaaa waaaa', 'waaaa123', 'Staff', 'KTTD-ORG.-STRUCTURE (2).pdf', 'application/pdf', 'files/KTTD-ORG.-STRUCTURE (2).pdf', 4, 'Copyright', '2018-07-25 12:57:15', '2018-07-25 12:56:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `approvedreq`
--
ALTER TABLE `approvedreq`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `peding_request`
--
ALTER TABLE `peding_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_account`
--
ALTER TABLE `pending_account`
  ADD PRIMARY KEY (`pending_account_id`);

--
-- Indexes for table `pending_tech`
--
ALTER TABLE `pending_tech`
  ADD PRIMARY KEY (`pending_tech_id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`tech_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `approvedreq`
--
ALTER TABLE `approvedreq`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peding_request`
--
ALTER TABLE `peding_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending_account`
--
ALTER TABLE `pending_account`
  MODIFY `pending_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pending_tech`
--
ALTER TABLE `pending_tech`
  MODIFY `pending_tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
