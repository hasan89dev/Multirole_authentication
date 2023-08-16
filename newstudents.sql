-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newstudents`
--

-- --------------------------------------------------------

--
-- Table structure for table `resister`
--

CREATE TABLE `resister` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resister`
--

INSERT INTO `resister` (`id`, `name`, `email`, `department`, `password`) VALUES
(15, 'jarraf', 'jarraf@gmail.com', 'bba', '$2y$10$NO.la.QRhX2H5LGiotv2Eue9jK1vFM46qEidvL6zp9hWeXork9rTm'),
(16, 'kamal', 'kamal@gmail.com', 'cse', '$2y$10$sjdLWG7Ow0/8V6bxSsFHVupwZ.JT5eyIUgGtExt/549P994jnSkkC'),
(17, 'tamim', 'tamim@gmail.com', 'civil', '$2y$10$HDoTrU97TgVmEwGPynHMPuBArHo3gwLIX9yAnVl0Rx5G1l7E0snnm');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phpne` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `user_id`, `name`, `email`, `phpne`) VALUES
(14, 15, 'rozina', 'rozina@gmail.com', '01973645275'),
(15, 17, 'rehana', 'rehana@gmail.com', '01973645275');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resister`
--
ALTER TABLE `resister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resister`
--
ALTER TABLE `resister`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
