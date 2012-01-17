-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 17 dec 2011 om 17:28
-- Serverversie: 5.1.58
-- PHP-Versie: 5.3.6-13ubuntu3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'quizproject'
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel 'participant'
--

CREATE TABLE participant (
  pID int(11) NOT NULL,
  native_language varchar(255) DEFAULT NULL,
  p_age int(100) DEFAULT NULL,
  p_gender varchar(10) DEFAULT NULL,
  p_study varchar(255) DEFAULT NULL,
  p_country_lived_in varchar(255) DEFAULT NULL,
  p_years_lived_in_country int(100) DEFAULT NULL,
  p_language_to_mother varchar(255) DEFAULT NULL,
  p_language_to_father varchar(255) DEFAULT NULL,
  p_years_learning_english int(26) DEFAULT NULL,
  p_years_learning_french int(13) DEFAULT NULL,
  p_years_learning_german int(13) DEFAULT NULL,
  p_years_learning_russian int(13) DEFAULT NULL,
  p_years_learning_italian int(13) DEFAULT NULL,
  p_years_learning_spanish int(13) DEFAULT NULL,
  p_years_learning_ancientGreek int(13) DEFAULT NULL,
  p_years_learning_latin int(13) DEFAULT NULL,
  p_years_learning_other int(13) DEFAULT NULL,
  p_using_english_in_speaking varchar(255) DEFAULT NULL,
  p_using_english_watching_tv varchar(255) DEFAULT NULL,
  p_using_english_playing_games varchar(255) DEFAULT NULL,
  p_using_english_chatting varchar(255) DEFAULT NULL,
  p_using_english_talking varchar(255) DEFAULT NULL,
  p_using_english_reading varchar(255) DEFAULT NULL,
  PRIMARY KEY (pID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel 'questions'
--

CREATE TABLE questions (
  qID int(11) NOT NULL DEFAULT '0',
  question_nr int(11) DEFAULT NULL,
  questiontext varchar(255) DEFAULT NULL,
  language_tag varchar(255) DEFAULT NULL,
  correct_answer varchar(255) DEFAULT NULL,
  question_type varchar(255) DEFAULT NULL,
  PRIMARY KEY (qID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel 'user_given_answers'
--

CREATE TABLE user_given_answers (
  pID int(11) NOT NULL DEFAULT '0',
  qID int(11) NOT NULL DEFAULT '0',
  p_given_ans varchar(255) DEFAULT NULL,
  PRIMARY KEY (pID,qID),
  KEY qID (qID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
