-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 09:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Movie_id` int(11) NOT NULL,
  `Movie_Title` varchar(50) NOT NULL,
  `Movie_Desc` varchar(100) NOT NULL,
  `Movie_Type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Movie_id`, `Movie_Title`, `Movie_Desc`, `Movie_Type`, `image`) VALUES
(12, 'Men in black', ' men in black (MIB) are purported men dressed in black suits who claim to be quasi-government agents', 'Action', '../images/meninbalck.jpg'),
(13, 'Wrath of Man', ' A cold and mysterious character working at a cash truck company responsible for moving a lot of mon', 'Action', '../images/wm.jpg'),
(14, 'Harley', ' man with bike called him self harley fall in love with girl', 'drama', '../images/harley.jpg'),
(15, 'Tatah', ' a crazy man got a dangerous mission', 'comedy', '../images/tath.jpg'),
(52, 'Home Front', ' ason Statham, James Franco, Winona Ryder, Kate Bosworth, Rachelle Lefevre, Frank Grillo, Clancy Bro', 'Action', '../images/01-47-23homefront.jpg'),
(53, 'Mission impossible', ' Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gon', 'Action', '../images/01-51-11mimp.jpg'),
(54, 'John Wick', ' gamed', 'Action', '../images/02-33-14jw.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `holder_name` varchar(50) NOT NULL,
  `num` int(20) NOT NULL,
  `exp_date` varchar(50) NOT NULL,
  `cvv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`holder_name`, `num`, `exp_date`, `cvv`) VALUES
('0gggggggggggg', 0, '000', 0),
('mazen mohamed', 555, '555', 555),
('mazen ahmed', 7777, '7777', 444);

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `feedback` text NOT NULL,
  `movie` varchar(20) NOT NULL,
  `movid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`name`, `email`, `feedback`, `movie`, `movid`) VALUES
('mazen', 'mazen@gmail.com', 'very good', 'Men in black', 12),
('ahmed', 'ahmed@gmail.com', '7elw', 'Tatah', 15),
('mazen', 'mazen@gmail.com', 'very nice film and story', 'Wrath of Man', 13),
('Ahmed', 'Ahmed@gmail.com', 'film 3ady gdn', 'Tatah', 15),
('Mazen', 'mazen@gmail.com', 'very good actor', 'Home Front', 52);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `rolename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `rolename`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_data`
--

CREATE TABLE `ticket_data` (
  `id` int(11) NOT NULL,
  `Seat_Number` varchar(50) NOT NULL,
  `Hall_Number` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `movie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_data`
--

INSERT INTO `ticket_data` (`id`, `Seat_Number`, `Hall_Number`, `Date`, `client_id`, `movie`) VALUES
(47, 'R1-S4', ' H-3/12:am', '17-tuesday', 2, 'alhasa al sadsa'),
(48, 'R2-S4', ' H-3/12:am', '17-tuesday', 2, 'alhasa al sadsa'),
(49, 'R2-S5', ' H-3/12:am', '17-tuesday', 2, 'alhasa al sadsa'),
(50, 'R2-S5', ' H-5/9:am', '14-Tomorrow', 3, 'alhasa al sadsa'),
(51, 'R3-S5', ' H-5/9:am', '14-Tomorrow', 3, 'alhasa al sadsa'),
(52, 'R2-S5', ' H-3/12:am', '6-monday', 2, 'John Wick'),
(53, 'R3-S5', ' H-3/12:am', '6-monday', 2, 'John Wick');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `roleid`) VALUES
(1, 'mazen', 'mazen@gmail.com', '12345', 1),
(2, 'ahmed', 'ahmed@gmail.com', '12345', 2),
(3, 'nafe3', 'nafe3@gmail.com', '12345', 2),
(4, 'basant', 'basant@gmail.com', '12345', 2),
(5, 'Mezo Ahmed', 'mezo@gmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `watch_list`
--

CREATE TABLE `watch_list` (
  `userid` int(20) NOT NULL,
  `movieid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD KEY `movid` (`movid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_data`
--
ALTER TABLE `ticket_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `watch_list`
--
ALTER TABLE `watch_list`
  ADD KEY `movieid` (`movieid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `Movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket_data`
--
ALTER TABLE `ticket_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `poll`
--
ALTER TABLE `poll`
  ADD CONSTRAINT `poll_ibfk_2` FOREIGN KEY (`movid`) REFERENCES `movie` (`Movie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_data`
--
ALTER TABLE `ticket_data`
  ADD CONSTRAINT `ticket_data_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`id`);

--
-- Constraints for table `watch_list`
--
ALTER TABLE `watch_list`
  ADD CONSTRAINT `watch_list_ibfk_1` FOREIGN KEY (`movieid`) REFERENCES `movie` (`Movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
