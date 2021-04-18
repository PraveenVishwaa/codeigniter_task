-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 12:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `tk_users`
--

CREATE TABLE `tk_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '1-male 2-female 3-other',
  `photo` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tk_users`
--

INSERT INTO `tk_users` (`user_id`, `username`, `email`, `password`, `age`, `gender`, `photo`, `created_date`) VALUES
(1, 'Praveen', 'admin@123.com', '1234', 20, 1, 'uploads/popup.png', '2021-04-16 19:07:03'),
(2, 'admin_KSR', 'sd@ds.com', 'sdsd', 12, 1, 'uploads/eqms issue.png', '2021-04-18 01:06:55'),
(4, 'admin_KSR', 'sd@dsa.com', 'asas', 12, 1, 'uploads/eqms issue.png', '2021-04-18 01:12:16'),
(6, 'dc\\vr_praveen.v', 'praveenpriyan16@gmail.com', 'asdsa', 2122, 1, 'uploads/popup.png', '2021-04-18 01:14:01'),
(8, 'admin_KSR', 'praveenpriyan16@gmail.comz', 'asas', 22, 2, 'uploads/Screenshot 2021-02-15 113625.png', '2021-04-18 01:18:24'),
(9, 'admin_KSR', 'praveenpriyan16@gmail.comzs', 'sdsd', 22, 1, 'uploads/Screenshot 2021-02-15 113625.png', '2021-04-18 01:19:06'),
(10, 'admin_KSR', 'praveenpriyan16@gmail.coms', '123', 2, 1, 'uploads/eqms issue.png', '2021-04-18 14:40:57'),
(11, 'sdsd', 'praveenpriyan16@gmail.comssd', 'sddsd', 221, 1, 'uploads/req3.png', '2021-04-18 14:48:35'),
(13, 'dc\\vr_praveen.v', 'vicky@xd.c', '1233', 21, 2, 'uploads/eqms issue.png', '2021-04-18 14:52:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tk_users`
--
ALTER TABLE `tk_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tk_users`
--
ALTER TABLE `tk_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
