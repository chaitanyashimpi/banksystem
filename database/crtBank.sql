-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2021 at 06:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crtBank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(5) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `transfer_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `sender`, `receiver`, `amount`, `transfer_date`) VALUES
(1, 'Chaitanya Shimpi', 'Ravina Bachhav', 1, '2021-09-19 18:54:22'),
(2, 'Chaitanya Shimpi', 'Ravina Bachhav', 5028, '2021-09-19 20:01:28'),
(3, 'Swarupa Bagade', 'Srushti Labade', 4325, '2021-09-19 20:02:33'),
(4, 'Kunal Deore', 'Sunayana Guthale', 4324, '2021-09-19 20:02:53'),
(5, 'Abhishek Doltade', 'Manish Prasah', 56543, '2021-09-19 20:03:02'),
(6, 'Aditya Karpe', 'Chaitanya Shimpi', 3423, '2021-09-19 20:03:12'),
(7, 'Janhavi Sanap', 'Ravina Bachhav', 35446, '2021-09-19 20:03:19'),
(8, 'Sanjana Desale', 'Kunal Deore', 4365, '2021-09-19 20:03:35'),
(9, 'Ravina Bachhav', 'Sunayana Guthale', 10000, '2021-09-19 20:03:50'),
(10, 'Srushti Labade', 'Ravina Bachhav', 10000, '2021-09-19 20:04:02'),
(11, 'Srushti Labade', 'Sejal Ahire', 12421, '2021-09-19 20:04:15'),
(12, 'Sejal Ahire', 'Chaitanya Shimpi', 1111, '2021-09-19 20:04:26'),
(13, 'Sejal Ahire', 'Manish Prasah', 2112, '2021-09-19 20:04:38'),
(14, 'Sejal Ahire', 'Janhavi Sanap', 6456, '2021-09-19 20:04:48'),
(15, 'Ravina Bachhav', 'Swarupa Bagade', 2435, '2021-09-19 20:04:56'),
(16, 'Swarupa Bagade', 'Srushti Labade', 3422, '2021-09-19 20:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Chaitanya Shimpi', 'chaitanyashimpi2001@gmail.com', 19505),
(2, 'Ravina Bachhav', 'ravinabachhav@gmail.com', 138040),
(3, 'Janhavi Sanap', 'janhavisanap2001@gmail.com', 71010),
(4, 'Swarupa Bagade', 'swarupabagade2001@gmail.com', 200360),
(5, 'Sejal Ahire', 'sejalahire@gmail.com', 102771),
(6, 'Srushti Labade', 'srushtilabade@gmail.com', 858018),
(7, 'Adarsh Bhosale', 'adarshbhosale@gmail.com', 82718),
(8, 'Sunayana Guthale', 'sunaynaguthale27@gmail.com', 96692),
(9, 'Sanjana Desale', 'sanjanadesale@gmail.com', 270306),
(10, 'Kunal Deore', 'kunaldeore@gmail.com', 987322),
(11, 'Manish Prasah', 'manishprasad@gmail.com', 141916),
(12, 'Abhishek Doltade', 'abhidoltade@gmail.com', 110748),
(13, 'Aditya Karpe', 'adityakarpe@gmail.com', 722758);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
