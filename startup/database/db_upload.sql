-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 12:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `tbl_approved`
--

CREATE TABLE `tbl_approved` (
  `a_id` int(200) NOT NULL,
  `a_first_name` varchar(200) NOT NULL,
  `a_last_name` varchar(200) NOT NULL,
  `a_address` varchar(200) NOT NULL,
  `a_event` varchar(200) NOT NULL,
  `a_event_start` date NOT NULL,
  `a_event_end` date NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_contact` varchar(200) NOT NULL,
  `a_message` varchar(200) NOT NULL,
  `a_category` text NOT NULL,
  `a_type` text NOT NULL,
  `a_status` varchar(100) NOT NULL,
  `a_approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_approved`
--

INSERT INTO `tbl_approved` (`a_id`, `a_first_name`, `a_last_name`, `a_address`, `a_event`, `a_event_start`, `a_event_end`, `a_email`, `a_contact`, `a_message`, `a_category`, `a_type`, `a_status`, `a_approve`) VALUES
(51, 'juan', 'pedro', 'ph', 'ph', '2020-03-13', '2020-03-14', 'juan@gmail.com', '12312312313', '', 'BIRTHDAY PACKAGE', 'SWEET 16', 'Pending', 'Approved'),
(52, 'Jake', 'Ryan', 'Bugallon', 'Bugallon', '2020-03-12', '2020-03-12', 'jake@gmail.com', '09090909090', 'jajsdjasdjasjdajsdjasd', 'BIRTHDAY PACKAGE', 'SWEET 16', 'Pending', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birthdayphotos`
--

CREATE TABLE `tbl_birthdayphotos` (
  `id` int(11) NOT NULL,
  `imageBD` varchar(200) NOT NULL,
  `image_textBD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_birthdayphotos`
--

INSERT INTO `tbl_birthdayphotos` (`id`, `imageBD`, `image_textBD`) VALUES
(17, 'liquid backgound 1.jpg', 'BIRTHDAY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birthdayvideos`
--

CREATE TABLE `tbl_birthdayvideos` (
  `id` int(11) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_birthdayvideos`
--

INSERT INTO `tbl_birthdayvideos` (`id`, `videos`, `video_text`) VALUES
(17, 'sample.mp4', 'assss'),
(18, 'SAMPLE2.mp4', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_christeningphotos`
--

CREATE TABLE `tbl_christeningphotos` (
  `id` int(11) NOT NULL,
  `imageCH` varchar(200) NOT NULL,
  `image_textCH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_christeningphotos`
--

INSERT INTO `tbl_christeningphotos` (`id`, `imageCH`, `image_textCH`) VALUES
(39, 'BGR.jpg', 'CHRISTENING');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_christeningvideos`
--

CREATE TABLE `tbl_christeningvideos` (
  `id` int(11) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_christeningvideos`
--

INSERT INTO `tbl_christeningvideos` (`id`, `videos`, `video_text`) VALUES
(19, 'SAMPLE2.mp4', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debutphotos`
--

CREATE TABLE `tbl_debutphotos` (
  `id` int(11) NOT NULL,
  `imageDB` varchar(200) NOT NULL,
  `image_textDB` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_debutphotos`
--

INSERT INTO `tbl_debutphotos` (`id`, `imageDB`, `image_textDB`) VALUES
(22, 'IMG_20200101_205423.jpg', 'DEBUT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debutvideos`
--

CREATE TABLE `tbl_debutvideos` (
  `id` int(11) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_debutvideos`
--

INSERT INTO `tbl_debutvideos` (`id`, `videos`, `video_text`) VALUES
(18, 'SAMPLE2.mp4', 'asssss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `id` int(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  `p_price` decimal(11,0) NOT NULL,
  `p_content` text NOT NULL,
  `imagePackage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`id`, `p_category`, `p_type`, `p_price`, `p_content`, `imagePackage`) VALUES
(83, 'BIRTHDAY PACKAGE', 'SWEET 16', '10000', 'lorem ipsumlorem ipsum\r\nlorem ipsum\r\nlorem ipsum\r\nlorem ipsum\r\nlorem ipsum\r\nlorem ipsum\r\nlorem ipsum\r\nlorem ipsum\r\nlorem ipsum\r\nlorem ipsum', 'patrick-tomasso-59247-unsplash.jpg');

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
  `r_contact` varchar(11) NOT NULL,
  `r_message` varchar(200) NOT NULL,
  `r_category` text NOT NULL,
  `r_type` text NOT NULL,
  `r_status` varchar(100) NOT NULL,
  `r_approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`r_id`, `r_first_name`, `r_last_name`, `r_address`, `r_event`, `r_event_start`, `r_event_end`, `r_email`, `r_contact`, `r_message`, `r_category`, `r_type`, `r_status`, `r_approve`) VALUES
(110, 'Pedro', 'juan', 'dagupan', 'dagupan', '2020-03-12', '2020-03-12', 'a@gmail.com', '12312312312', 'hellooo', 'BIRTHDAY PACKAGE', 'SWEET 16', 'Pending', 'Approved');

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
(290, 'ch.png', 'REUNIONs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reunionvideos`
--

CREATE TABLE `tbl_reunionvideos` (
  `id` int(100) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `video_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reunionvideos`
--

INSERT INTO `tbl_reunionvideos` (`id`, `videos`, `video_text`) VALUES
(73, 'sample.mp4', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `u_id` int(100) NOT NULL,
  `u_Fname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `u_Lname` varchar(100) NOT NULL,
  `u_Email` varchar(100) NOT NULL,
  `u_Cnumber` varchar(100) NOT NULL,
  `u_Password` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `u_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`u_id`, `u_Fname`, `u_Lname`, `u_Email`, `u_Cnumber`, `u_Password`, `u_type`) VALUES
(55, 'Jake', 'Ryan', 'jake@gmail.com', '2133123123', '$2y$10$0TPKmRt0dQr2HaLT6/yKCulErUrIW7uNCc2N9r/nrAXyzWimrvg9.', 'SuperAdmin'),
(67, 'Admin', 'Admin', 'Admin@gmail.com', '12345667888', '$2y$10$1OPvdr5Ty6IGZj.ugEozQuZpEKe9PZpIuv4W5Oy/mEjnYKsTCaXbG', 'Admin'),
(68, 'SuperAdmin', 'SuperAdmin', 'SuperAdmin@gmail.com', '1234567899', '$2y$10$FVyHNoy0m4fTDOhNQKsSb.BFHFx2dXrI/Z1vWvcX0kRwy56JEFhDW', 'SuperAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weddingphotos`
--

CREATE TABLE `tbl_weddingphotos` (
  `id` int(11) NOT NULL,
  `imageWED` varchar(200) NOT NULL,
  `image_textWED` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_weddingphotos`
--

INSERT INTO `tbl_weddingphotos` (`id`, `imageWED`, `image_textWED`) VALUES
(22, '5399643221_45e08b5550_b.jpg', 'WEDDING');

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
-- Dumping data for table `tbl_weddingvideos`
--

INSERT INTO `tbl_weddingvideos` (`id`, `videos`, `video_text`) VALUES
(25, 'sample.mp4', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_approved`
--
ALTER TABLE `tbl_approved`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_birthdayphotos`
--
ALTER TABLE `tbl_birthdayphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_birthdayvideos`
--
ALTER TABLE `tbl_birthdayvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_christeningphotos`
--
ALTER TABLE `tbl_christeningphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_christeningvideos`
--
ALTER TABLE `tbl_christeningvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_debutphotos`
--
ALTER TABLE `tbl_debutphotos`
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
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `tbl_weddingphotos`
--
ALTER TABLE `tbl_weddingphotos`
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
-- AUTO_INCREMENT for table `tbl_approved`
--
ALTER TABLE `tbl_approved`
  MODIFY `a_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_birthdayphotos`
--
ALTER TABLE `tbl_birthdayphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_birthdayvideos`
--
ALTER TABLE `tbl_birthdayvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_christeningphotos`
--
ALTER TABLE `tbl_christeningphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_christeningvideos`
--
ALTER TABLE `tbl_christeningvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_debutphotos`
--
ALTER TABLE `tbl_debutphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_debutvideos`
--
ALTER TABLE `tbl_debutvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `r_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_reunionphotos`
--
ALTER TABLE `tbl_reunionphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `tbl_reunionvideos`
--
ALTER TABLE `tbl_reunionvideos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_weddingphotos`
--
ALTER TABLE `tbl_weddingphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_weddingvideos`
--
ALTER TABLE `tbl_weddingvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
