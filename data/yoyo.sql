-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 26 nov. 2021 à 14:08
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yoyo`
--
CREATE DATABASE IF NOT EXISTS `yoyo` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `yoyo`;

-- --------------------------------------------------------

--
-- Structure de la table `crud`
--

DROP TABLE IF EXISTS `crud`;
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `phone`, `city`, `password`) VALUES
(19, 'Jules', 'jul@viacesi.fr', '0781715802', 'epone', '$2y$10$7CUZJWSQSxfLLfYGRxhfu..u8CUh.Uxi1/hMandEoFeYa6BQ3FyeO'),
(20, 'thomas', 'thomas.lima@viacesi.fr', '0781715802', 'epone', '$2y$10$3xZ672KeTHKtKnRxF6Spsuzqhw00vR.Cmy43FWhmeYmba6fl7Ndgm'),
(21, 'elisa', 'elisa@viacesi.fr', '0781715802', 'epone', '$2y$10$Y60vJjlKd38XXFdE4RQ2t.I2Qxcrl70e.wRj2IaUW4I82DV9xGwyK');

-- --------------------------------------------------------

--
-- Structure de la table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(1024) COLLATE utf8_bin NOT NULL,
  `request` varchar(1024) COLLATE utf8_bin NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `request`
--

INSERT INTO `request` (`id`, `id_user`, `name`, `request`) VALUES
(1, 21, 'elisa', 'mr and mrs smith'),
(2, 21, 'elisa', 'mr and mrs smith'),
(3, 21, 'elisa', 'mr and mrs smith'),
(4, 21, 'elisa', 'mr and mrs smith'),
(5, 21, 'elisa', 'mr and mrs smith'),
(6, 21, 'elisa', 'mr and mrs smith'),
(7, 21, 'elisa', 'mr and mrs smith'),
(8, 21, 'elisa', 'mr and mrs smith'),
(9, 21, 'elisa', 'mr and mrs smith'),
(10, 21, 'elisa', 'mr and mrs smith'),
(11, 21, 'elisa', 'mr and mrs smith'),
(12, 21, 'elisa', 'mr and mrs smith'),
(13, 19, 'Jules', 'got'),
(14, 19, 'Jules', 'lol'),
(15, 19, 'Jules', 'extel'),
(16, 19, 'Jules', 'mr and mrs smith'),
(17, 19, 'Jules', 'mr and mrs smith'),
(18, 19, 'Jules', 'mr and mrs smith'),
(19, 19, 'Jules', 'ntntnt'),
(20, 19, 'Jules', 'mr and mrs smith'),
(21, 19, 'Jules', 'mr and mrs smith'),
(22, 19, 'Jules', 'mr and mrs smith'),
(23, 19, 'Jules', 'fff'),
(24, 19, 'Jules', 'ffffff'),
(25, 19, 'Jules', 'mr and mrs smith');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
