-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2020 at 04:46 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_parution` date NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Groupe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `Nom`, `Date_parution`, `Description`, `Groupe`) VALUES
(25, 'Why this blog ?', '2020-10-05', '<p>\r\nHi I\'m Sam from Marseille.<br>\r\nIf you are here, it\'s because you are lost on internet nor you know me.\r\nThis place is where I talk about my internet experience as a web developer and code enthusiast\r\n</p>\r\n\r\n<p>\r\nThis website\'s purpose is to share my passion to anyone who has the will to read my articles.\r\n</p>\r\n\r\n<h3 class=\"articleListTitle\">I will talk about:\r\n</h3><p class=\'articleListElement\'> Web development (php,WAMP,Symfony)\r\n</p><p class=\'articleListElement\'> Arduino and Raspberry Pi\r\n</p><p class=\'articleListElement\'> My journey to build a new PC\r\n</p><p class=\'articleListElement\'> The challenges I\'ve done on <a class=\'oui\' href=\'http://codewars.com\'>Codewars</a>\r\n</p><p class=\'articleListElement\'> My Vim tricks/ressources\r\n</p><p class=\'articleListElement\'> Some usefull sites\r\n</p><p class=\'articleListElement\'> <i>Maybe</i> some tutorials if I consider myself good enought\r\n</p>\r\n<p>I hope you\'l have a good time learning or just inspiring yourself on this website.<br>\r\nGood reading fellow coder.\r\nSeeya on the <i>web</i> ! \r\n</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(300) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `pseudo`, `role`) VALUES
(1, '$2y$10$Xpfr/AmpsG/r.5cg2iE3AOR9dILMG80jZBfBeVSA3vcLWJg0sl1IO', 'Azefortwo', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
