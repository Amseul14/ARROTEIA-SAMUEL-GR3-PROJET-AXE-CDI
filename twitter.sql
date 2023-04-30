-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2023 at 02:25 PM
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
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweetliste`
--

CREATE TABLE `tweetliste` (
  `id` int NOT NULL,
  `contenu` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tweetliste`
--

INSERT INTO `tweetliste` (`id`, `contenu`, `date`, `tags`) VALUES
(44, 'test2', '2023-04-30 09:44:32', 'Choisir un tag'),
(46, 'test5', '2023-04-30 09:47:57', 'Choisir un tag');

-- --------------------------------------------------------

--
-- Table structure for table `userliste`
--

CREATE TABLE `userliste` (
  `id` int NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prenom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pseudo` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `motdepasse` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userliste`
--

INSERT INTO `userliste` (`id`, `nom`, `prenom`, `pseudo`, `motdepasse`, `email`, `creation`) VALUES
(9, 'Samuel', 'Arroteia', 'Amseul', 'azerty', 'azerty@azer.com', '2023-02-19 15:19:25'),
(10, 'azety', 'trosll', 'aiuhdiyg', 'puhpohop', 'skso@gmail.fr', '2023-02-19 15:34:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweetliste`
--
ALTER TABLE `tweetliste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userliste`
--
ALTER TABLE `userliste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweetliste`
--
ALTER TABLE `tweetliste`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `userliste`
--
ALTER TABLE `userliste`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
