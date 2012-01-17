-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 17 dec 2011 om 18:34
-- Serverversie: 5.1.58
-- PHP-Versie: 5.3.6-13ubuntu3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quizproject`
--

--
-- Gegevens worden uitgevoerd voor tabel `participant`
--

INSERT INTO `participant` VALUES
(0, 'DUT', 26, 'M', 'Informatiekunde', 'NL', 26, 'DUT', 'DUT', 14, 6, 16, 0, 0, 0, 2, 3, 0, 'a lot', 'a lot', 'a lot', 'a lot', 'a lot', 'a lot');

--
-- Gegevens worden uitgevoerd voor tabel `questions`
--

INSERT INTO `questions` VALUES
(0, 1, 'what is the average airspeed velocity of an unladen swallow?', 'ENG', 'what do you mean, an African or European one', NULL);

--
-- Gegevens worden uitgevoerd voor tabel `user_given_answers`
--

INSERT INTO `user_given_answers` VALUES
(0, 0, 'roughly 25 miles an hour');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
