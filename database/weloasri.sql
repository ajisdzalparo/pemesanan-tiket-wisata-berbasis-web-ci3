-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2024 at 01:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weloasri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` char(8) NOT NULL,
  `location` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Wiloasri',
  `guests` int NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `location`, `guests`, `date`, `time`) VALUES
('A30ED1UM', 'wiloasri', 2, '2024-08-16', '00:00:00'),
('W0CZKIX9', 'wiloasri', 5, '2024-08-16', '00:00:00'),
('08ZEZZVB', 'wiloasri', 4, '2024-08-16', '04:53:00'),
('J0HWL379', 'wiloasri', 4, '2024-08-16', '04:53:00'),
('J4B4MP1T', 'wiloasri', 5, '2024-08-16', '08:10:00'),
('WFHEYN2J', 'wiloasri', 2, '2024-08-16', '03:48:00'),
('0ZDGMOV8', 'wiloasri', 1, '2024-08-16', '03:55:00'),
('S41XF67M', 'wiloasri', 1, '2024-08-16', '04:50:00'),
('Z9AQ8NLP', 'wiloasri', 5, '2024-08-16', '09:13:00'),
('B367YL4D', 'wiloasri', 6, '2024-08-16', '09:17:00'),
('MS1SMHD5', 'wiloasri', 10, '2024-08-16', '08:18:00'),
('GA52PD9N', 'Wiloasri', 2, '2024-08-16', '06:42:00'),
('YHCSHIVR', 'wiloasri', 5, '2024-08-16', '06:45:00'),
('OLSGX2AN', 'Smg', 1, '2024-08-16', '06:47:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
