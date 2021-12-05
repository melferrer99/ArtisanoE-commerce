-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 06:09 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birthdayvideos`
--

CREATE TABLE `tbl_birthdayvideos` (
  `id` int(11) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_christeningvideos`
--

CREATE TABLE `tbl_christeningvideos` (
  `id` int(11) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debutvideos`
--

CREATE TABLE `tbl_debutvideos` (
  `id` int(11) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `id` int(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  `p_price` decimal(11,0) NOT NULL,
  `p_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`id`, `p_category`, `p_type`, `p_price`, `p_content`) VALUES
(13, 'Wedding Package', 'Pre Nuptial Sessions', '5000', 'Unlimited shots\r\nPhoto Coverage\r\nPre Nuptial Photoshoots\r\nDigital Files stored on USB on Flash Drive\r\n2 Photographers'),
(15, 'kasal package', 'pre nup session', '5000', 'free 100 shots\r\n2 photographers\r\nfree video ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `r_id` int(200) NOT NULL,
  `r_first_name` varchar(200) NOT NULL,
  `r_last_name` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_event` varchar(200) NOT NULL,
  `r_event_start` date NOT NULL,
  `r_event_end` date NOT NULL,
  `r_email` varchar(200) NOT NULL,
  `r_contact` int(200) NOT NULL,
  `r_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reunionphotos`
--

CREATE TABLE `tbl_reunionphotos` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reunionphotos`
--

INSERT INTO `tbl_reunionphotos` (`id`, `image`, `image_text`) VALUES
(209, 'ch.png', 'one'),
(210, 'chae.png', 'dahyun'),
(211, 'BGR.jpg', 'family'),
(214, 'IMG_6032.JPG', 'shoes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reunionvideos`
--

CREATE TABLE `tbl_reunionvideos` (
  `id` int(100) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weddingvideos`
--

CREATE TABLE `tbl_weddingvideos` (
  `id` int(11) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_birthdayvideos`
--
ALTER TABLE `tbl_birthdayvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_christeningvideos`
--
ALTER TABLE `tbl_christeningvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_debutvideos`
--
ALTER TABLE `tbl_debutvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_reunionphotos`
--
ALTER TABLE `tbl_reunionphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reunionvideos`
--
ALTER TABLE `tbl_reunionvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_weddingvideos`
--
ALTER TABLE `tbl_weddingvideos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_birthdayvideos`
--
ALTER TABLE `tbl_birthdayvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_christeningvideos`
--
ALTER TABLE `tbl_christeningvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_debutvideos`
--
ALTER TABLE `tbl_debutvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `r_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reunionphotos`
--
ALTER TABLE `tbl_reunionphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `tbl_reunionvideos`
--
ALTER TABLE `tbl_reunionvideos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_weddingvideos`
--
ALTER TABLE `tbl_weddingvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
