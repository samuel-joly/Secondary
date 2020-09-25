-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2020 at 02:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `Nom`, `Date_parution`, `Description`) VALUES
(1, 'Le premier article', '2020-09-03', 'Aujourdhui j\'apprend symfony et je m\'amuse en etant en alternance ! Qui aurait pu croire que l\'on pouvais faires un back-end complet en si peut de temps et d\'effort ? Je me demande pourquoi cela coute si cer de faire faire un site de nos jours. \r\nCa doit surement etre la fin de l\'age d\'or du developement web !'),
(2, 'L\'article de la victoire', '2020-09-03', 'Ce moment ou tu passes 3 heures a mettre en place un systeme bugué ne fait que rajouter de la dopamine qui sera libérée au moment ou le programme marchera. Un pur plaisir que de réussir de si petite fonctionnalité avec de si c\'omplexe\' outils. Maintenant que l\'on en parle, pour l\'instant c\'est Overkill  def aire un blog avec symphony');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20200903072321', '2020-09-03 07:24:39', 50),
('DoctrineMigrations\\Version20200903130203', '2020-09-03 13:03:08', 590),
('DoctrineMigrations\\Version20200907132343', '2020-09-07 13:24:12', 120);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `avatar`) VALUES
(2, 'Email1@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$TGRIT2RwdjM5ZWpYeGYuWQ$YFGvpxAzZWWOWLnRT8R5gW7BGP3emJJrr/FMj67WyxY', 'default.png'),
(3, 'Email2@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$ZGluSE13T3Zra2lWTEdzSQ$fZ7XYbxgRZxEy1xtoMzCxoerW5KimOWksli1qIehyZk', 'default.png'),
(4, 'test@test.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$T2lJV3Yuc3ppclhVQWg5RQ$woyJw1FqJTxz0xnGkfI1inLvMt/wjLtD8YkLAhit+M4', 'default.png'),
(5, 'test@test.test', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$TWlQWWY3SlRkNllkUUh0Tw$eStCQP6+V/E55TV+TtLlrT3qhPpa+e3Yadv3zoJdnwU', '5.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
