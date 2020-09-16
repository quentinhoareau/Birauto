-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 mars 2020 à 12:49
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `birauto`
--

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `idCar` int(2) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(50) NOT NULL,
  `type_fuel` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `url_img` varchar(50) NOT NULL,
  `car_condition` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`idCar`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`idCar`, `model_name`, `type_fuel`, `price`, `url_img`, `car_condition`) VALUES
(1, 'SUV PEUGEOT 2008', 'carburant', 3600, 'medias/products1.png', 'N'),
(2, 'PEUGEOT RIFTER', 'essence', 4000, 'medias/products2.png', 'O'),
(3, 'PEUGEOT ION', 'essence', 5000, 'medias/products3.png', 'N'),
(4, 'SUV PEUGEOT 5008', 'diesel', 4200, 'medias/products4.png', 'N');

-- --------------------------------------------------------

--
-- Structure de la table `car_feature`
--

DROP TABLE IF EXISTS `car_feature`;
CREATE TABLE IF NOT EXISTS `car_feature` (
  `idCar` int(2) NOT NULL,
  `idFeature` int(2) NOT NULL,
  PRIMARY KEY (`idCar`,`idFeature`),
  KEY `idFeature` (`idFeature`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `car_feature`
--

INSERT INTO `car_feature` (`idCar`, `idFeature`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idContact` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `object` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idContact`, `name`, `email`, `tel`, `object`, `message`) VALUES
(1, 'Bigot', 'test97480@gmail', '02645821', 'refund', 'zefghj');

-- --------------------------------------------------------

--
-- Structure de la table `feature`
--

DROP TABLE IF EXISTS `feature`;
CREATE TABLE IF NOT EXISTS `feature` (
  `idFeature` int(2) NOT NULL AUTO_INCREMENT,
  `labelFeature` varchar(100) NOT NULL,
  PRIMARY KEY (`idFeature`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `feature`
--

INSERT INTO `feature` (`idFeature`, `labelFeature`) VALUES
(1, 'Navigation 3D connectée'),
(2, 'Grip control'),
(3, 'Peugeot i-Cockpit'),
(4, 'GAdvanced Grip Control'),
(5, 'Charge rapide'),
(6, 'Radio Bluetooth'),
(7, '7 places intérieures'),
(8, 'Boîte automatique');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `car_feature`
--
ALTER TABLE `car_feature`
  ADD CONSTRAINT `car_feature_ibfk_1` FOREIGN KEY (`idCar`) REFERENCES `car` (`idCar`),
  ADD CONSTRAINT `car_feature_ibfk_2` FOREIGN KEY (`idFeature`) REFERENCES `feature` (`idFeature`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
