-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 01:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `email`, `tahun_lulus`, `pekerjaan`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'Dimas Kendika Fazrulfalah', 'dkendika1@gmail.com', 2027, 'Programmer', 'Purwokerto', '081123456789', '2025-04-17 01:57:40', '2025-04-17 01:58:36'),
(2, 'Sellyjuan Alya Rosalina', 'selly@gmail.com', 2026, 'IT Manager', 'Purwokerto', '081123456789', '2025-04-17 02:01:56', '2025-04-17 02:01:56'),
(3, 'M Edwi Tsanystya Raihan', 'raihan@gmail.com', 2028, 'Cyber Security', 'Pati', '081234567899', '2025-04-17 02:03:04', '2025-04-17 02:03:04'),
(4, 'Nadzare Kafah Alfatiha', 'kafah@gmail.com', 2029, 'UI/UX Designer', 'Ajibarang', '081234567890', '2025-04-17 02:04:44', '2025-04-17 02:04:44'),
(5, 'Mukhammad Alfaen Fadhillah', 'alpaen@gmail.com', 2030, 'Backend Programmer', 'Tegal', '081234567890', '2025-04-17 02:06:04', '2025-04-17 02:06:04'),
(7, 'Renggo Harya Pandora', 'renggo@gmail.com', 2030, 'Hacker', 'Kober', '08123456789', '2025-04-17 08:59:36', '2025-04-17 08:59:36'),
(8, 'Udin Sedunia', 'udin@gmail.com', 2040, 'Bakul Nasi Goreng ', 'Jakarta', '08123456789', '2025-04-17 09:00:37', '2025-04-17 09:00:37'),
(9, 'Charles Zuniga', 'hsmith@fletcher.com', 2014, 'Sales promotion account executive', NULL, '(984)992-6734', '2024-06-06 23:13:30', '2024-11-27 16:22:12'),
(10, 'Todd Lawson MD', 'clayton25@yahoo.com', 2006, NULL, NULL, NULL, '2024-06-08 19:14:57', '2023-07-11 01:13:24'),
(11, 'Alejandra Moreno', 'tmendoza@young.com', 2011, NULL, '20057 James Key, Port Johnfort, CT 80617', NULL, '2023-11-12 23:04:57', '2025-03-23 00:06:21'),
(12, 'Crystal Green', 'lisaponce@gmail.com', 2019, NULL, '106 Cunningham Valley Suite 636, South Sabrina, US', NULL, '2023-08-26 09:43:35', '2023-10-06 11:39:47'),
(13, 'Tonya Hess', 'wilsonphillip@costa-williams.biz', 2005, NULL, NULL, '+1-214-578-8612', '2023-09-26 15:54:25', '2025-04-15 15:34:42'),
(14, 'Judy Curry', 'nstrickland@garrett.com', 2019, NULL, '5409 Allen Canyon Suite 150, East Kevinberg, IN 80482', NULL, '2023-12-10 09:43:57', '2023-11-11 16:59:27'),
(15, 'Anita Ochoa', 'novakjohn@gonzalez.net', 2005, NULL, NULL, '062.071.9981', '2024-12-15 14:50:41', '2023-11-08 08:43:05'),
(16, 'Ms. Katherine Norman', 'ahoffman@davis.biz', 2006, NULL, '5453 Carey Harbor, South Nichole, CA 60265', '001-453-981-7547x138', '2025-02-07 12:44:46', '2025-01-22 05:40:35'),
(17, 'Amanda Wilson', 'donaldvilla@yahoo.com', 2001, NULL, '374 Edward Squares, North Traceyhaven, AR 97738', NULL, '2025-01-15 10:00:44', '2024-09-18 09:34:30'),
(18, 'Christopher Carson', 'stephen91@robertson.info', 2023, NULL, 'USCGC Nelson, FPO AE 88074', '8216362439', '2023-12-07 14:10:09', '2024-04-09 19:09:44'),
(19, 'Matthew Palmer', 'samanthajensen@yahoo.com', 2020, NULL, '317 Eric Passage, Ronaldport, ND 07456', '511.444.1005x803', '2024-05-10 20:56:56', '2023-11-22 18:38:26'),
(20, 'Jeremiah Perry', 'jose05@gmail.com', 2003, NULL, '113 Smith Centers Suite 901, Andrewsland, MT 63720', NULL, '2024-12-25 13:20:51', '2023-06-23 11:44:37'),
(21, 'Lori Johnson', 'zprince@branch.info', 2006, 'Medical sales representative', NULL, NULL, '2023-09-18 04:00:55', '2023-05-14 01:44:31'),
(22, 'Benjamin Williams', 'rachel24@hotmail.com', 2007, NULL, NULL, '8406020306', '2024-09-21 01:11:25', '2023-06-12 03:09:59'),
(24, 'Virginia Dixon', 'tylermcguire@coleman.com', 2022, NULL, NULL, NULL, '2024-09-16 17:07:25', '2023-08-12 02:39:30'),
(25, 'Nicole Wolf', 'jose81@griffin.com', 2001, NULL, '0233 Emily Lane Suite 654, Port Amy, MI 24171', NULL, '2023-09-22 20:09:53', '2025-03-23 14:49:43'),
(26, 'Timothy Burke', 'keithrobinson@hotmail.com', 2011, NULL, NULL, NULL, '2023-06-20 09:42:37', '2024-04-08 10:17:48'),
(27, 'Jennifer Golden', 'omarmullen@yahoo.com', 2021, NULL, '3620 Flynn Rapids, Lake Aaron, IA 06204', '731.957.9100', '2024-11-11 15:13:30', '2025-01-29 03:06:22'),
(28, 'Stephanie Alvarado', 'williamgray@jones.com', 2017, 'Sports development officer', NULL, NULL, '2023-10-03 21:21:07', '2023-10-12 12:59:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
