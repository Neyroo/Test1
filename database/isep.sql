-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 jan. 2022 à 22:39
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
-- Base de données : `isep`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

DROP TABLE IF EXISTS `apprenants`;
CREATE TABLE IF NOT EXISTS `apprenants` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `Idfiliere` int(11) NOT NULL,
  PRIMARY KEY (`matricule`),
  KEY `apprenants_ibfk_1` (`Idfiliere`)
) ENGINE=MyISAM AUTO_INCREMENT=12359 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`matricule`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `age`, `Idfiliere`) VALUES
(345, 'Mbadji', 'Mouhame', 'mouha@gmail.com', '7772345712', 'Ouakam', 20, 12),
(3231, 'Mbadji', 'Mouhamed', 'mouha@gmail.com', '7772345712', 'Ouakam', 21, 112),
(1235, 'Tine', 'Abdousalam', 'abdou@gmail.com', '775424543', 'Tamba', 20, 12),
(12346, 'Dia', 'Ousmane', 'elimanely64@yahoo.com', '53597978697', 'touba', 23, 1324),
(12347, 'Ka', 'Issa', 'issa@gmail.com', '774625432', 'Kaolack', 27, 1325),
(12348, 'Sy', 'Maguette', 'max@gmail.com', '7743624232', 'Dakar', 20, 1326),
(12349, 'Ndiaye', 'Elhadji Yaya', 'yaya@gmail.com', '7743624234', 'Zac Mbao', 20, 1327),
(12350, 'Seck', 'Maguette', 'max1@gmail.com', '7743624230', 'Mbacke', 34, 1328),
(12351, 'Ndiaye', 'Assane', 'ass02@hotmail.com', '7743624231', 'Dakar', 20, 1321),
(12352, 'Ndiaye', 'Cherif', 'riffo@gmail.com', '7743624212', 'Dakar', 32, 1320),
(12353, 'Seck', 'Assane', 'ass01@hotmail.com', '7743624221', 'Kaolack', 23, 1326),
(12354, 'sow', 'ous', 'ous1@gmail.com', '774362423', 'thies', 23, 1327);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `libelle` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `IdFormateur` int(11) NOT NULL,
  `idFiliere` int(11) NOT NULL,
  PRIMARY KEY (`idFiliere`),
  KEY `IdFormateur` (`IdFormateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`libelle`, `description`, `IdFormateur`, `idFiliere`) VALUES
('DFE', 'Developpement front-end', 1234, 12),
('DBE', 'Developpement back-end', 1234, 2),
('DBE', 'Developpement back-end', 78, 1234),
('APD', 'Analyse en performance digital ', 56, 78),
('APD', 'Analyse en performance digital ', 56, 234),
('ABD', 'Administration base de donnée', 49, 345),
('ABD', 'Administration base de donnée', 49, 3456);

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `nomF` varchar(50) NOT NULL,
  `prenomF` varchar(100) NOT NULL,
  `adresseF` varchar(100) NOT NULL,
  `ageF` varchar(100) NOT NULL,
  `telephoneF` varchar(100) NOT NULL,
  `emailF` varchar(100) NOT NULL,
  `idFormateur` int(11) NOT NULL,
  PRIMARY KEY (`idFormateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`nomF`, `prenomF`, `adresseF`, `ageF`, `telephoneF`, `emailF`, `idFormateur`) VALUES
('Fall', 'Mr', 'Dakar', '34', '763482364', 'fall@gamil.com', 78),
('Ndiaye', 'Cherif', 'Dakar', '50', '77 700 64 93', 'chtcndiaye@gmail.com', 12),
('Niang', 'Mr', 'Dakar', '32', '771239365', 'niang01@gamil.com', 345),
('Sylla', 'Mr', 'Dakar', '43', '777349276', 'sylla03@gmail.com', 56),
('Ngom', 'Mr', 'Dakar', '43', '777349276', 'Ngoma03@gmail.com', 45),
('Sene', 'Mr', 'Dakar', '34', '763482364', 'sene@gamil.com', 89);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idFormateur` int(11) NOT NULL,
  `IdApprenant` int(11) NOT NULL,
  KEY `idFormateur` (`idFormateur`),
  KEY `IdApprenant` (`IdApprenant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
