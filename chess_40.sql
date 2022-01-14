-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 12:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chess_40`
--

-- --------------------------------------------------------

--
-- Table structure for table `chess_40`
--

CREATE TABLE `chess_40` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL 
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chess_40`
--

INSERT INTO `chess_40` (`name`, `id`) VALUES
('King', '39EAB06D'),
('Queen', '769174F8'),
('Bishop', '81A3DC79'),
('Horse', '866080F8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chess_40`
--
ALTER TABLE `chess_40`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
