-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 12 feb 2018 kl 15:50
-- Serverversion: 10.1.28-MariaDB
-- PHP-version: 7.1.11

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

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(15) COLLATE utf8_bin NOT NULL,
  `Password` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `Image` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `accounts`
--

INSERT INTO `accounts` (`ID`, `Username`, `Password`, `Score`, `Image`) VALUES
(1, '', 0, 0, ''),
(2, 'leo', 666666, 0, 0x333730353531393439392e6a7067),
(3, 'bajs', 0, 0, ''),
(4, 'tsttest', 0, 0, '');

-- --------------------------------------------------------

--
-- Tabellstruktur `coins`
--

DROP TABLE IF EXISTS `coins`;
CREATE TABLE IF NOT EXISTS `coins` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `lat` varchar(15) COLLATE utf8_bin NOT NULL,
  `lng` varchar(15) COLLATE utf8_bin NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `coins`
--

INSERT INTO `coins` (`ID`, `lat`, `lng`, `value`) VALUES
(1, '59.313453', '18.110636', 100),
(2, '59.311710', '18.110991', 200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
