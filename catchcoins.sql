-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 23 feb 2018 kl 15:02
-- Serverversion: 10.1.30-MariaDB
-- PHP-version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `catchcoins`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `Username` varchar(15) COLLATE utf8_bin NOT NULL,
  `Password` int(11) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `accounts`
--

INSERT INTO `accounts` (`ID`, `Username`, `Password`, `Score`) VALUES
(1, 'anna', 111, 100),
(2, 'leo', 222, 200),
(3, 'guled', 333, 300),
(4, 'carl', 444, 400),
(5, 'kanya', 555, 500),
(6, 'lisa', 666, 600);

-- --------------------------------------------------------

--
-- Tabellstruktur `coins`
--

CREATE TABLE `coins` (
  `ID` int(11) NOT NULL,
  `lat` varchar(15) COLLATE utf8_bin NOT NULL,
  `lng` varchar(15) COLLATE utf8_bin NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `coins`
--

INSERT INTO `coins` (`ID`, `lat`, `lng`, `value`) VALUES
(1, '59.313453', '18.110636', 100),
(2, '59.311710', '18.110991', 200),
(3, '59.311502', '18.104389', 100),
(4, '59.313472', '18.106649', 200),
(5, '59.314939', '18.110146', 300),
(6, '59.315305', '18.114417', 300);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `coins`
--
ALTER TABLE `coins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
