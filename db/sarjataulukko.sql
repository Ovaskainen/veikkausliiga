-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: 15.02.2023 klo 09:49
-- Palvelimen versio: 8.0.32
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `sarjataulukko`
--

CREATE TABLE `sarjataulukko` (
  `id` int NOT NULL,
  `joukkue` text NOT NULL,
  `voitot` int UNSIGNED NOT NULL,
  `tasapelit` int UNSIGNED NOT NULL,
  `tappiot` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Vedos taulusta `sarjataulukko`
--

INSERT INTO `sarjataulukko` (`id`, `joukkue`, `voitot`, `tasapelit`, `tappiot`) VALUES
(1, 'HJK', 15, 3, 2),
(2, 'KuPS', 13, 4, 3),
(3, 'Ilves', 5, 7, 8),
(4, 'FC Lahti', 4, 5, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sarjataulukko`
--
ALTER TABLE `sarjataulukko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sarjataulukko`
--
ALTER TABLE `sarjataulukko`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
