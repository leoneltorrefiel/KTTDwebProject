-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 09:51 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
(1, 'admin', 'admin', 'wewe@yahoo.com', '', 'Firstname', 'Lastname', 'Buhangin Davao City', '09123456789', 'Software Engineer', 'Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'client1', 'client1', 'wewe123@yahoo.com', '', 'Firstname', 'Lastname', 'Buhangin Davao City', '09123456789', 'IT Professional', 'Client', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'client2', 'client2', 'waa@yahoo.com', 'image/usep logo.png', 'Firstname', 'Lastname', 'Buhangin Davao City', '09123456789', 'Mechanical Engineer', 'Client', '2018-07-03 13:13:27', '2018-07-03 13:14:44'),
(14, 'staff1', 'staff1', 'waaa@gmail.com', 'image/usep logo.png', 'Firstname', 'Lastname', 'Buhangin Davao City', '09123456789', 'Electrical Engineer', 'Staff', '2018-07-03 13:12:50', '2018-07-03 14:41:16'),
(15, 'client3', 'client3', 'asdksjdfiaj2232@gmail.com', 'assets-home/images/12.png', 'Firstname', 'Lastname', 'Buhangin Davao City', '09123456789', 'MIT', 'Client', '2018-07-24 11:12:27', '2018-07-24 11:28:00'),
(16, 'client4', 'client4', 'asdasdasd@gamil.com', 'image/burger.png', 'Firstname', 'Lastname', 'Buhangin Davao City', '09123456789', 'Computer Scientist', 'Client', '2018-08-04 03:24:30', '2018-08-04 03:24:41');

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
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvedreq`
--

INSERT INTO `approvedreq` (`req_id`, `username`, `firstname`, `lastname`, `email`, `contact`, `reqdate`, `reason`) VALUES
(2, 'fish', 'aaaaa', 'aqsdasd', 'asdasdasd@gamil.com', '09321654987', '2018-08-23', 'Inquire for Patent'),
(3, 'client1', 'Firstname', 'Lastname', 'wewe123@yahoo.com', '09123456789', '2018-08-10', 'test meeting schedule');

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
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'pending1', 'pending1', 'Firstname', 'Lastname', 'email@yahoo.com', 'bunawan davao city', '09123456789', 'Science Teacher', '2.png', 'image/png', 'assets-home/images/2.png', '2018-07-24 11:16:41', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `pending_tech`
--

CREATE TABLE `pending_tech` (
  `pending_tech_id` int(11) NOT NULL,
  `pending_tech_name` varchar(255) NOT NULL,
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

INSERT INTO `pending_tech` (`pending_tech_id`, `pending_tech_name`, `pending_tech_description`, `pending_tech_owner`, `pending_tech_username`, `pending_tech_acct`, `pen_file_type`, `p_tech_filename`, `p_tech_filetype`, `p_tech_filepath`, `datetime`) VALUES
(33, 'loooooooo', 'vjnvnb', 'aa ssss', 'admin', 'Staff', 'Copyright', 'P3_EWC.pdf', 'application/pdf', 'files/P3_EWC.pdf', '2018-07-09 16:41:07'),
(41, 'ssdddsd', 'asdadsad', 'aa ssss', 'admin', 'Staff', 'Copyright', 'KTTD-HOME-revised.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'files/KTTD-HOME-revised.docx', '2018-07-25 04:17:15'),
(42, 'AhhTek', 'Lie detector phone application', 'Firstname Lastname', 'client1', 'Client', 'Patent', 'squatter.jpg', 'image/jpeg', 'files/squatter.jpg', '2018-08-06 04:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `tech_id` int(11) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
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

INSERT INTO `technologies` (`tech_id`, `tech_name`, `tech_description`, `tech_owner`, `tech_username`, `tech_acct`, `tech_filename`, `tech_filetype`, `tech_filepath`, `status`, `file_type`, `date_approved`, `date_request`) VALUES
(9, 'Technology_1', 'Technology description 1; Technology description 1; Technology description 1; ', 'admin', 'admin', 'Staff', 'P2.pdf', 'application/pdf', 'files/P2.pdf', 6, 'Patent', '2018-07-09 15:30:55', '2018-07-09 15:05:28'),
(10, 'Technology_2', 'Technology description 2; Technology description 2; Technology description 2;\\', 'admin', 'admin', 'Staff', 'EWC Scanned receipt.pdf', 'application/pdf', 'files/EWC Scanned receipt.pdf', 2, 'Copyright', '2018-07-09 15:43:52', '2018-07-09 15:43:45'),
(11, 'Technology_3', 'Technology description 3; Technology description 3; Technology description 3; ', 'admin', 'admin', 'Staff', 'P2_EWC.pdf', 'application/pdf', 'files/P2_EWC.pdf', 0, 'Copyright', '2018-07-09 16:41:17', '2018-07-09 15:05:11'),
(12, 'Technology_4', 'Technology description 4; Technology description 4; Technology description 4; ', 'admin', 'admin', 'Staff', 'P2_EWC.pdf', 'application/pdf', 'files/P2_EWC.pdf', 2, 'Patent', '2018-07-09 16:41:24', '2018-07-09 15:55:14'),
(13, 'Technology_5', 'Technology description 5; Technology description 5; Technology description 5; ', 'client1', 'client1', 'Client', 'KTTD-HOME-revised.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'files/KTTD-HOME-revised.docx', 1, 'Patent', '2018-07-24 14:16:31', '2018-07-24 14:16:17'),
(14, 'Technology_6', 'Technology description 6; Technology description 6; Technology description 6; ', 'admin', 'admin', 'Staff', 'KTTD-ORG.-STRUCTURE (2).pdf', 'application/pdf', 'files/KTTD-ORG.-STRUCTURE (2).pdf', 1, 'Copyright', '2018-07-25 12:54:05', '2018-07-24 14:54:48'),
(15, 'Technology_7', 'Technology description 7; Technology description 7; Technology description 7; ', 'staff1', 'staff1', 'Staff', 'KTTD-ORG.-STRUCTURE (2).pdf', 'application/pdf', 'files/KTTD-ORG.-STRUCTURE (2).pdf', 2, 'Patent', '2018-07-25 12:57:15', '2018-07-25 12:56:55');

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `approvedreq`
--
ALTER TABLE `approvedreq`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peding_request`
--
ALTER TABLE `peding_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_account`
--
ALTER TABLE `pending_account`
  MODIFY `pending_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_tech`
--
ALTER TABLE `pending_tech`
  MODIFY `pending_tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
