-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Skapad: 27 feb 2015 kl 10:54
-- Serverversion: 5.6.20
-- PHP-version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `slutprojekt`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `produkter`
--

CREATE TABLE IF NOT EXISTS `produkter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pris` int(10) NOT NULL,
  `namn` varchar(15) NOT NULL,
  `märke` varchar(15) NOT NULL,
  `plagg` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `namn` (`namn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
