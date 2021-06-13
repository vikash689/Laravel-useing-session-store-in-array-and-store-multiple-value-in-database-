-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 03:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `password`, `image`, `phone`, `role`, `email`, `date`, `created_at`, `updated_at`) VALUES
(1, 'vikash', '123654', '1623583501.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(2, 'vikash sharma', '458965214', '1623583519.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(3, 'vikash sharma', '458965214', '1623583569.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(4, 'vikash sharma', '458965214', '1623583594.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(5, 'vikash sharma', '458965214', '1623583620.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(6, 'vikash sharma', '458965214', '1623583646.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(7, 'vikash sharma', '458965214', '1623583652.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(8, 'vikash sharma', '458965214', '1623583744.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(9, 'vikash sharma', '458965214', '1623583755.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(10, 'vikash sharma', '458965214', '1623583806.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(11, 'vikash sharma', '458965214', '1623583815.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(12, 'vikash sharma', '458965214', '1623583956.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(13, 'vikash sharma', '458965214', '1623583981.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(14, 'vikash sharma', '458965214', '1623584004.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(15, 'vikash sharma', '458965214', '1623584012.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(16, 'vikash sharma', '458965214', '1623584036.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(17, 'vikash sharma', '458965214', '1623584052.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(18, 'vikash sharma', '458965214', '1623584063.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(19, 'vikash sharma', '458965214', '1623584609.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(20, 'vikash sharma', '458965214', '1623588322.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(21, 'vikash sharma', '458965214', '1623588335.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:19', '2021-06-13 13:13:19'),
(22, 'vikash sharma', '458965214', '1623588350.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:20', '2021-06-13 13:13:20'),
(23, 'vikash sharma', '458965214', '1623588394.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:20', '2021-06-13 13:13:20'),
(24, 'vikash sharma', '458965214', '1623588502.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:20', '2021-06-13 13:13:20'),
(25, 'vikash sharma', '458965214', '1623589282.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:20', '2021-06-13 13:13:20'),
(26, 'vikash sharma', '458965214', '1623589434.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:20', '2021-06-13 13:13:20'),
(27, 'vikash sharma', '458965214', '1623589674.jpeg', 706217952, '2021-06-03', 'admin@admin.com', 'admin', '2021-06-13 07:43:20', '2021-06-13 13:13:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
