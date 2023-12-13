-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 09:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_storage`
--
CREATE DATABASE IF NOT EXISTS `video_storage` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `video_storage`;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `files` blob NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `user_id`, `user_name`, `title`, `files`, `uploaded_on`) VALUES
(26, NULL, NULL, 'bike game', 0x62696b652067616d6520766964656f2e6d7034, '2023-12-12 22:00:41'),
(27, NULL, NULL, 'fish game', 0x666973682067616d6520766964656f2e6d7034, '2023-12-12 22:00:57'),
(28, NULL, NULL, 'board game', 0x626f6172642067616d6520766964656f2e6d7034, '2023-12-13 19:51:08'),
(29, NULL, NULL, 'story game', 0x73746f72792067616d6520766964656f2e6d7034, '2023-12-13 19:57:20'),
(31, NULL, NULL, 'cat game', 0x6361742067616d6520766964656f2e6d7034, '2023-12-13 20:19:01'),
(32, NULL, NULL, 'car game', 0x6361722067616d6520766964656f2e6d7034, '2023-12-13 20:24:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
