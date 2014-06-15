-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2014 at 08:21 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nssdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `evnt_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `genre_id` int(11) DEFAULT NULL,
  `StartTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EndTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Description` text NOT NULL,
  `formLink` text NOT NULL,
  `nameField` text NOT NULL,
  `EntryNoField` text NOT NULL,
  `EmailIDField` text NOT NULL,
  `phoneNoField` text NOT NULL,
  `ExtraNotesField` text NOT NULL,
  PRIMARY KEY (`evnt_id`),
  UNIQUE KEY `evnt_id` (`evnt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evnt_id`, `name`, `genre_id`, `StartTime`, `EndTime`, `Description`, `formLink`, `nameField`, `EntryNoField`, `EmailIDField`, `phoneNoField`, `ExtraNotesField`) VALUES
(1, 'NAB', 1, '2014-06-11 18:36:21', '2014-06-09 18:30:00', 'somethign realater to NAV', 'https://docs.google.com/forms/d/1Wqn0A1D5Sy4K-9q3YPYu7QncTCc0G_3G4ojMAqmGpWU/formResponse', 'entry.1910052895', 'entry.1103196731', 'entry.399168322', 'entry.1544699882', 'entry.554333590'),
(2, 'something elrsea', 2, '2014-06-11 16:18:47', '0000-00-00 00:00:00', 'fovmoim', 'https://docs.google.com/forms/d/1Wqn0A1D5Sy4K-9q3YPYu7QncTCc0G_3G4ojMAqmGpWU/formResponse', '0', '', '0', '', ''),
(4, 'someoancdfkjcmnvl,fd', NULL, '2014-06-11 16:25:44', '0000-00-00 00:00:00', 'ovamklmvfdlskmv', 'https://docs.google.com/forms/d/1Wqn0A1D5Sy4K-9q3YPYu7QncTCc0G_3G4ojMAqmGpWU/formResponse', '0', '', '0', '', '');
