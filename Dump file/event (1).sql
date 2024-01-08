-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 04:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `eventType` varchar(50) DEFAULT NULL,
  `ticketType` varchar(50) DEFAULT NULL,
  `numTickets` int(11) DEFAULT NULL,
  `eventDate` date DEFAULT NULL,
  `submittedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `eventType`, `ticketType`, `numTickets`, `eventDate`, `submittedAt`) VALUES
(1, 'Movie', 'VVIP', 2, '2024-01-08', '2024-01-08 08:27:51'),
(2, 'Events', 'VIP', 3, '2024-01-09', '2024-01-08 15:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_day` varchar(50) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_venue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_day`, `event_date`, `event_time`, `event_venue`) VALUES
(1, 'Tech Conference', 'Wednesday', '2023-12-15', '10:00:00', 'Conference Center'),
(2, 'Music Festival', 'Saturday', '2023-12-18', '18:00:00', 'Outdoor Arena');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `event_type` varchar(50) DEFAULT NULL,
  `event_category` varchar(50) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `upload_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `filename`, `event_type`, `event_category`, `event_date`, `upload_date`) VALUES
(5, 'download.jpeg', 'Team', 'IEEE', '2023-12-30', '2023-12-29 19:52:06'),
(6, 'leftBottomCorner.PNG', 'Individual', 'Other', '2023-12-29', '2023-12-29 19:52:42'),
(7, 'rightBottomConner.PNG', 'Other', 'Other', '2023-12-30', '2023-12-29 19:53:42'),
(8, 'middleRightCornner.PNG', 'Other', 'Other', '2023-12-20', '2023-12-29 20:02:24'),
(9, 'topRightConner.PNG', 'Team', 'IEEE', '2023-12-05', '2023-12-30 07:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `reg` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `reg`, `email`, `password`) VALUES
(2, 'Umedha', 'Priyadarshani', '2019/ASP/60', 'umedha@gmail.com', '$2y$10$gvPWdHzNSOwC89mUzIwUYe8trIapOKEVlBmK3aX4tXhpeVFC/oEbq'),
(3, 'Sahasra', 'Prabodhani', '2019/ASP/77', 'sahasra@gmail.com', '$2y$10$DwG0ObjKCMsVYH0SqyZAz.v37Pbh9g.OfWPNg/kTRIYqXa9tu1zby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
