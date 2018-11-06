-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 06 nov. 2018 à 08:27
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mspr`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `body` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_start` date NOT NULL,
  `hour_start` time NOT NULL,
  `date_end` date NOT NULL,
  `hour_end` time NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `name_city` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `limited_number_participant` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `picture` varchar(50) NOT NULL,
  `is_published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `id_user`, `name`, `date_start`, `hour_start`, `date_end`, `hour_end`, `zip_code`, `name_city`, `street_address`, `description`, `limited_number_participant`, `date_created`, `picture`, `is_published`) VALUES
(4, 1, 'nantes music event', '2018-11-05', '23:20:00', '2018-11-06', '03:30:00', '44200', 'nantes', '8, rue de nantes', 'music festival', 55, '2018-11-05 18:26:10', 'astronomie.png', 1),
(5, 1, 'aaaa', '2018-12-05', '23:30:00', '2018-12-05', '23:50:00', '44200', 'nantes', '8, rue de nantes', 'aaa', 50, '2018-11-05 18:38:25', 'astronomie.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id_event` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_birthday` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `date_birthday`, `username`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'Logan', 'Le Saux', '1998-08-20 00:00:00', 'LoganLS', 'logan.lesaux@gmail.com', '3447adfd742cdfb9048a3b29baf1ae7d', 'utilisateur', '2018-11-05 18:06:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
