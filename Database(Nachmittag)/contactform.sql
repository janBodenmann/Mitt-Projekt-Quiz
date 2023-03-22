-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Mrz 2023 um 14:50
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `contactform`
--
CREATE DATABASE IF NOT EXISTS `contactform` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `contactform`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user1`
--

CREATE TABLE `user1` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ort` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user1`
--

INSERT INTO `user1` (`id`, `name`, `ort`, `adresse`) VALUES
(1, 'Tim', 'Brig', '00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user2`
--

CREATE TABLE `user2` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ort` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user2`
--

INSERT INTO `user2` (`id`, `name`, `ort`, `adresse`) VALUES
(2, 'Tom', 'Visp', '000');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user3`
--

CREATE TABLE `user3` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ort` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user3`
--

INSERT INTO `user3` (`id`, `name`, `ort`, `adresse`) VALUES
(3, 'Max', 'Naters', '0000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
