-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` int(11) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `token_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fullName`, `userName`, `password`, `photo`, `token`, `token_expires_at`, `created_at`) VALUES
(3, 'icejan181@gmail.com', 'Jenish Imsong', 'Jenish Jenish', 'Janice618#', NULL, '9a606625fba5b0cc3850bae8a3f041c5', NULL, '2024-02-10 08:24:10'),
(10, 'icejan180@gmail.com', 'Ice Jan', 'Ice', 'ice1', NULL, 'e8237fcfe6717801c1c287b2c4c46a31', NULL, '2024-02-10 11:59:47'),
(11, 'madan34@gmail.com', 'Madan Limbu', 'Ginga', 'madan', NULL, '743ec9fd5cc86c6ca91dbe579964666c', NULL, '2024-02-10 12:02:30'),
(12, 'sushant12@gmail.com', 'Sushant Acharya', 'acharya12', 'abc', NULL, NULL, NULL, '2024-02-10 12:11:08'),
(14, 'kiran32@gmail.com', 'Kiran Jethara', 'Jethara Bhai Edited', 'jethara', NULL, '717e6a37285cd8b43705774e0a3890f8', NULL, '2024-02-10 12:19:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
