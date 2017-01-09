-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2017 at 04:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppidbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `position` varchar(100) NOT NULL,
  `admin_type` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `photo` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `last_name`, `first_name`, `position`, `admin_type`, `username`, `password`, `photo`, `date_added`) VALUES
(1, 'Labrador', 'Aldwin', 'position2', 'Super Admin', 'aldwin', 'aldwin', 'user_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2016-12-28 18:01:27'),
(2, 'Aba', 'Rosel Ann', 'position1', 'Administrator', 'rosel', 'rosel', 'ppi/user_images/Icon-App-76x76@3x.png', '2016-12-28 18:01:27'),
(3, 'Labrador', 'Kier', 'position3', 'Staff', 'kier', 'kier', 'ppi/user_images/Icon-App-83.5x83.5@2x.png', '2016-12-28 18:01:27'),
(4, 'Labrador', 'Alex', 'position1', 'Super Admin', 'alex', 'alex', 'ppi/user_images/Icon-App-83.5x83.5@2x.png', '2016-12-28 18:01:27'),
(5, 'Labrador', 'Carmelita', 'position1', 'Administrator', 'mhel', 'mhel', 'ppi/user_images/Icon-App-83.5x83.5@2x.png', '2016-12-28 18:01:27'),
(6, 'mang', 'mang', 'position2', 'Administrator', 'mang', 'mang', 'user_images/happy-birthday-hd-wallpaper-133.jpg', '2016-12-29 08:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documentation`
--

CREATE TABLE `tbl_documentation` (
  `id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `seminar_id` int(11) NOT NULL,
  `docu_type` varchar(45) NOT NULL,
  `other_file` text NOT NULL,
  `other_name` text NOT NULL,
  `other_ext` varchar(10) NOT NULL,
  `pdf_file` text NOT NULL,
  `pdf_name` text NOT NULL,
  `pdf_ext` varchar(10) NOT NULL,
  `remarks` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_documentation`
--

INSERT INTO `tbl_documentation` (`id`, `partner_id`, `seminar_id`, `docu_type`, `other_file`, `other_name`, `other_ext`, `pdf_file`, `pdf_name`, `pdf_ext`, `remarks`) VALUES
(2, 4, 4, 'Programme', 'documentation_upload/TwinJay Receipt.jpg', '', '', 'partner_images/Booking Confirmation2.pdf', '', '', 'Complete'),
(3, 4, 4, 'Programme', 'documentation_upload/TwinJay Receipt.psd', '', '', 'partner_images/Booking Confirmation2.pdf', '', '', 'Incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `id` int(11) NOT NULL,
  `partner_name` mediumtext NOT NULL,
  `contact_person` mediumtext NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `address` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `website` mediumtext NOT NULL,
  `partnership_date` datetime NOT NULL,
  `partner_logo` longtext NOT NULL,
  `partner_banner` longtext NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_partner`
--

INSERT INTO `tbl_partner` (`id`, `partner_name`, `contact_person`, `contact_number`, `address`, `email`, `website`, `partnership_date`, `partner_logo`, `partner_banner`, `date_added`) VALUES
(1, 'Kier Labrador', 'Kier Labrador', '09215314325', '121.A Gonzales Street Poblacion Caloocan City', 'labradoraldwin@rocketmail.com', 'kierlabrador.info', '2016-12-30 00:00:00', 'partner_images/happy-birthday-hd-wallpaper-133.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2016-12-28 20:23:03'),
(4, 'Aldwin B. Labrador', 'Aldwin B. Labradorsa', '2147483647', '121.A Gonzales Street Poblacion Caloocan City', 'labradoraldwin@rocketmail.com', 'kierlabrador.info', '2016-12-30 00:00:00', 'partner_images/exploding-party-popper-with-serpantin-and-confetti-seamless-pattern-f.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2016-12-31 10:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seminars`
--

CREATE TABLE `tbl_seminars` (
  `id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `title_seminar` mediumtext NOT NULL,
  `period_to` date NOT NULL,
  `period_from` date NOT NULL,
  `areas` varchar(25) NOT NULL,
  `remarks` varchar(25) NOT NULL,
  `luzon` mediumtext NOT NULL,
  `visayas` mediumtext NOT NULL,
  `mindanao` mediumtext NOT NULL,
  `seminar_logo` mediumtext NOT NULL,
  `seminar_banner` mediumtext NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seminars`
--

INSERT INTO `tbl_seminars` (`id`, `partner_id`, `title_seminar`, `period_to`, `period_from`, `areas`, `remarks`, `luzon`, `visayas`, `mindanao`, `seminar_logo`, `seminar_banner`, `date_added`, `date_updated`, `deleted`) VALUES
(1, 4, 'Feeding Program ni Ivan', '0000-00-00', '0000-00-00', 'Luzon Only', 'Complete', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'YES'),
(2, 4, 'Seminar Ko', '2017-01-01', '2016-12-31', 'Luzon Only', 'Incomplete', 'Dyan lang ', '', '', 'partner_images/happy-birthday-hd-wallpaper-133.jpg', 'partner_images/happy-birthday-hd-wallpaper-133.jpg', '2016-12-31 17:15:38', '0000-00-00 00:00:00', 'NO'),
(3, 4, 'Seminar Ko nanaman', '2016-12-23', '2016-12-07', 'Visayas Only', 'Incomplete', '', 'Dyan po', '', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2016-12-31 17:17:16', '0000-00-00 00:00:00', 'YES'),
(4, 4, 'Seminar ni Kuya', '2016-12-30', '2016-12-29', 'Nationwide', 'Incomplete', 'Metro Manila', 'Bohol', 'Davao', 'partner_images/happy-birthday-hd-wallpaper-133.jpg', 'partner_images/happy-birthday-hd-wallpaper-133.jpg', '2016-12-31 17:24:06', '0000-00-00 00:00:00', 'NO'),
(5, 1, 'Seminar po to :)', '2017-01-08', '2017-01-04', 'Luzon Only', 'Incomplete', 'Metro Manila', '', '', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2017-01-04 21:06:21', '0000-00-00 00:00:00', 'NO'),
(6, 4, 'Seminar nga naman', '2017-01-05', '2017-01-04', 'Luzon Only', 'Incomplete', 'Metro Manila', '', '', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2017-01-04 21:07:47', '0000-00-00 00:00:00', 'NO'),
(7, 4, 'Seminar po', '2017-01-08', '2017-01-05', 'Luzon Only', 'Incomplete', 'Metro Manila', '', '', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2017-01-04 21:09:02', '0000-00-00 00:00:00', 'NO'),
(8, 4, 'opopopo', '2017-01-25', '2017-01-17', 'Luzon Only', 'Incomplete', 'Wala', 'None', 'None', 'partner_images/happy-birthday-hd-wallpaper-133.jpg', 'partner_images/happy-birthday-hd-wallpaper-133.jpg', '2017-01-04 21:13:54', '0000-00-00 00:00:00', 'NO'),
(9, 4, 'hello po', '2017-01-05', '2017-01-05', 'Nationwide', 'Incomplete', 'wow', 'None', 'None', 'partner_images/exploding-party-popper-with-serpantin-and-confetti-seamless-pattern-f.jpg', 'partner_images/exploding-party-popper-with-serpantin-and-confetti-seamless-pattern-f.jpg', '2017-01-04 21:15:53', '0000-00-00 00:00:00', 'NO'),
(10, 4, 'hello po', '2017-01-05', '2017-01-05', 'Nationwide', 'Incomplete', 'wow', 'None', 'None', 'partner_images/exploding-party-popper-with-serpantin-and-confetti-seamless-pattern-f.jpg', 'partner_images/exploding-party-popper-with-serpantin-and-confetti-seamless-pattern-f.jpg', '2017-01-04 21:16:22', '0000-00-00 00:00:00', 'NO'),
(11, 4, 'kumusta po?', '2017-01-31', '2017-01-30', 'Nationwide', 'Incomplete', 'nice', 'nice nice', 'nice nice nice', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2017-01-04 21:19:16', '0000-00-00 00:00:00', 'NO'),
(12, 4, 'Nice Nice', '2017-01-06', '2017-01-05', 'Visayas Only', 'Incomplete', 'None', 'nice nice', 'None', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', 'partner_images/birthday-cake-clip-art-39dBuA-clipart.jpg', '2017-01-04 21:19:51', '0000-00-00 00:00:00', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_documentation`
--
ALTER TABLE `tbl_documentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seminars`
--
ALTER TABLE `tbl_seminars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_documentation`
--
ALTER TABLE `tbl_documentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_seminars`
--
ALTER TABLE `tbl_seminars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
