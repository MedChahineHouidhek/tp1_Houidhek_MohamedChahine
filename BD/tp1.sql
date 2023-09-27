-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 03:59 AM
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
-- Database: `tp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculatrice`
--

CREATE TABLE `calculatrice` (
  `id` int(11) NOT NULL,
  `types` varchar(20) NOT NULL,
  `Mark` varchar(20) NOT NULL,
  `Annee_creation` smallint(4) NOT NULL,
  `prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calculatrice`
--

INSERT INTO `calculatrice` (`id`, `types`, `Mark`, `Annee_creation`, `prix`) VALUES
(1, '', 'Noname', 0, NULL),
(4, 'Scientifique', 'Dollarama', 2023, 5),
(5, 'Scientifique', 'Dollarama', 2023, 5),
(6, 'Scientifique', 'Noname', 0, 5),
(7, 'Scientifique', 'Noname', 0, 5),
(8, 'Scientifique', 'Noname', 2023, 5),
(9, 'Scientifique', 'Dollarama', 2023, 5),
(11, 'Scientifique', 'Dollarama', 2023, 5),
(12, 'Scientifique', 'Dollarama', 2023, 5),
(13, 'Scientifique', 'Dollarama', 2023, 5),
(14, 'Scientifique', 'Dollarama', 2023, 5),
(15, 'Scientifique', 'Dollarama', 2023, 5),
(16, 'Scientifique', 'Dollarama', 2023, 5),
(17, 'Scientifique', 'Dollarama', 2023, 5),
(18, 'Scientifique', 'Dollarama', 2023, 5),
(19, 'Scientifique', 'Dollarama', 2023, 5),
(20, 'Scientifique', 'Dollarama', 2023, 5),
(21, 'Scientifique', 'Dollarama', 2023, 5),
(22, 'Scientifique', 'Dollarama', 2023, 5),
(23, 'Scientifique', 'Dollarama', 2023, 5),
(24, 'Scientifique', 'Dollarama', 2023, 5),
(25, 'Scientifique', 'Dollarama', 2023, 5),
(26, 'Scientifique', 'Dollarama', 2023, 5),
(27, 'Scientifique', 'Dollarama', 2023, 5),
(28, 'Scientifique', 'Dollarama', 2023, 5),
(29, 'Scientifique', 'Dollarama', 2023, 5),
(30, 'Scientifique', 'Dollarama', 2023, 5),
(31, 'Scientifique', 'Dollarama', 2023, 5),
(32, 'Scientifique', 'Dollarama', 2023, 5),
(33, 'Scientifique', 'Dollarama', 2023, 5),
(34, 'Scientifique', 'Dollarama', 2023, 5),
(35, 'Scientifique', 'Dollarama', 2023, 5),
(36, 'Scientifique', 'Dollarama', 2023, 5),
(37, 'Scientifique', 'Dollarama', 2023, 5),
(38, 'Scientifique', 'Dollarama', 2023, 5),
(39, 'Scientifique', 'Dollarama', 2023, 5),
(40, 'Scientifique', 'Dollarama', 2023, 5),
(41, 'Scientifique', 'Dollarama', 2023, 5),
(42, 'Scientifique', 'Dollarama', 2023, 5),
(43, 'Scientifique', 'Dollarama', 2023, 5),
(44, 'Scientifique', 'Dollarama', 2023, 5),
(45, 'Scientifique', 'Dollarama', 2023, 5),
(46, 'Scientifique', 'Dollarama', 2023, 5),
(47, 'Scientifique', 'Dollarama', 2023, 5),
(48, 'Scientifique', 'Dollarama', 2023, 5),
(49, 'Scientifique', 'Dollarama', 2023, 5),
(50, 'Scientifique', 'Dollarama', 2023, 5),
(51, 'Scientifique', 'Dollarama', 2023, 5),
(52, 'Scientifique', 'Dollarama', 2023, 5),
(53, 'Scientifique', 'Dollarama', 2023, 5),
(54, 'Scientifique', 'Dollarama', 2023, 5),
(55, 'Scientifique', 'Dollarama', 2023, 5),
(56, 'Scientifique', 'Dollarama', 2023, 5),
(57, 'Scientifique', 'Dollarama', 2023, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculatrice`
--
ALTER TABLE `calculatrice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculatrice`
--
ALTER TABLE `calculatrice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
