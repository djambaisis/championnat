-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Juillet 2020 à 22:28
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `championnat`
--

-- --------------------------------------------------------

--
-- Structure de la table `authentification`
--

CREATE TABLE IF NOT EXISTS `authentification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `authentification`
--

INSERT INTO `authentification` (`id`, `login`, `psw`) VALUES
(1, 'kamgue', 'romaric');

-- --------------------------------------------------------

--
-- Structure de la table `disputer`
--

CREATE TABLE IF NOT EXISTS `disputer` (
  `id_jeux` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  PRIMARY KEY (`id_jeux`,`id_joueur`),
  KEY `id_joueur` (`id_joueur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int(11) NOT NULL AUTO_INCREMENT,
  `nom_equipe` varchar(255) DEFAULT NULL,
  `classement` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_equipe`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nom_equipe`, `classement`) VALUES
(27, 'fst321', 1),
(25, 'irt', 1),
(24, 'fst', 1),
(23, 'fss', 1);

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE IF NOT EXISTS `jeux` (
  `id_jeux` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipe` int(11) NOT NULL,
  `id_equipe_disputer` int(11) NOT NULL,
  `nbre_but` int(11) DEFAULT NULL,
  `nbre_tir` int(11) DEFAULT NULL,
  `nbre_faute` int(11) DEFAULT NULL,
  `nbre_corner` int(11) DEFAULT NULL,
  `nbre_hors_jeux` int(11) DEFAULT NULL,
  `nbre_carton_jaune` int(11) DEFAULT NULL,
  `nbre_carton_rouge` int(11) DEFAULT NULL,
  `jour_jeux` date DEFAULT NULL,
  `heure_debut_jeux` time DEFAULT NULL,
  `heure_fin_jeux` time DEFAULT NULL,
  `stade_jeux` varchar(255) DEFAULT NULL,
  `intitule_jeux` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jeux`),
  KEY `id_equipe` (`id_equipe`),
  KEY `id_equipe_disputer` (`id_equipe_disputer`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `jeux`
--

INSERT INTO `jeux` (`id_jeux`, `id_equipe`, `id_equipe_disputer`, `nbre_but`, `nbre_tir`, `nbre_faute`, `nbre_corner`, `nbre_hors_jeux`, `nbre_carton_jaune`, `nbre_carton_rouge`, `jour_jeux`, `heure_debut_jeux`, `heure_fin_jeux`, `stade_jeux`, `intitule_jeux`) VALUES
(56, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30', '12:00:00', NULL, 'metropole arene', 'nt'),
(47, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31', '11:01:00', NULL, 'metropole arene', 'final'),
(48, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31', '01:22:00', NULL, 'paris stadium', 'huitieme de final'),
(49, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31', '01:22:00', NULL, 'paris stadium', 'huitieme de final'),
(50, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31', '01:22:00', NULL, 'paris stadium', 'huitieme de final'),
(51, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31', '01:22:00', NULL, 'paris stadium', 'huitieme de final'),
(52, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31', '01:22:00', NULL, 'paris stadium', 'huitieme de final'),
(53, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30', '01:22:00', NULL, 'paris stadium', 'huitieme de final'),
(54, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30', '12:00:00', NULL, 'metropole arene', 'nt'),
(55, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30', '12:00:00', NULL, 'metropole arene', 'nt'),
(57, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30', '12:00:00', NULL, 'metropole arene', 'nt'),
(58, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31', '12:00:00', NULL, 'metropole arene', 'nt');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `id_joueur` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipe` int(11) NOT NULL,
  `nom_joueur` varchar(255) DEFAULT NULL,
  `prenom_joueur` varchar(255) DEFAULT NULL,
  `date_nai_joueur` date DEFAULT NULL,
  `tel_joueur` int(11) DEFAULT NULL,
  `adresse_joueur` varchar(255) DEFAULT NULL,
  `nbre_but_joueur` int(11) DEFAULT NULL,
  `taille` float DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_joueur`),
  KEY `id_equipe` (`id_equipe`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `id_equipe`, `nom_joueur`, `prenom_joueur`, `date_nai_joueur`, `tel_joueur`, `adresse_joueur`, `nbre_but_joueur`, `taille`, `position`) VALUES
(1, 1, 'andrew', 'messi', '2000-07-12', 671285881, 'bandjoun', 0, 1.6, 'avant-centre'),
(2, 15, 'kamgue', 'Romaric', '1999-03-12', 671285881, 'Bangangte', 1, 1.7, 'avant centre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
