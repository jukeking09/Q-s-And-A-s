-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 10:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q's and a's`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `a_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`a_id`, `q_id`, `user_id`, `description`) VALUES
(9, 16, 9, 'answer'),
(10, 15, 9, 'printing'),
(11, 10, 9, 'this is the answer');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `description`, `user_id`) VALUES
(10, 'hello this is a verry verrrrrry long question', 9),
(11, 'this is a question???', 9),
(12, 'Question?????\r\n\r\n', 9),
(13, 'how to...\r\n', 9),
(14, 'Hlooo', 9),
(15, 'hello world', 9),
(16, 'helloooooo', 9),
(17, 'new question', 9),
(18, 'this is a refresh test', 9),
(19, 'this is a refresh test', 9),
(20, 'refresh test', 9),
(21, 'hhh', 9),
(22, 'hhh', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `college` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `college`, `create_datetime`) VALUES
(3, 'asas', 'asas', 'asas', 'baa7a52965b99778f38ef37f235e9053', 'asas', '2022-05-16 11:05:08'),
(4, 'zach', 'khon', 'zachkhon', '24faeb5b793908888c18a97c2d323c39', 'Anthony', '2022-05-16 13:22:56'),
(5, 'zaza', 'zaza', 'zaza', '$2y$10$2/.0y7tC88K15Bv4uSz4kuTT9fKNh0nxTTSokq9etyi', 'zaza', '2022-05-16 14:05:17'),
(6, 'newacc', 'newacc', 'newacc', '$2y$10$lgwWt44oRjljMN0IiHoGau0xx80dMWlM7Zl2EeQVl0j', 'newacc', '2022-05-16 16:40:36'),
(8, 'last', 'last', 'last', '$2y$10$Jpwq7nXFlGLJo7ZnH4vO5uflv.PiUuZgtthc5h4n5QM', 'last', '2022-05-16 22:46:10'),
(9, 'lastfr', 'lastfr', 'lastfr', '$2y$10$UsjU43xtjUFK5yZlOu2cQuVa5zNt/t1ihOKIlulltAF9n2j7gF/H.', 'lastfr', '2022-05-16 23:05:24'),
(10, 'marang', 'nongbet', 'marangnongbet@gmail.com', '$2y$10$G86kxPT5PIqtaqLEUS7oYO5Qk8XSW2CjDGRE03tXXiQJ3.Z82huxy', 'Shillong', '2022-05-18 12:56:58'),
(11, 'Rang', 'Nongbet', 'rangnongbet@gmail.com', '$2y$10$rq1QWvReQ6/diLNzLe.u8.WJ4SuiK08qpJZZPTZyST648yscWD4Hy', 'Shillong College', '2022-05-26 22:10:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
