-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 12 Janvier 2015 à 00:31
-- Version du serveur: 5.5.40
-- Version de PHP: 5.3.10-1ubuntu3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dutinfopw20148`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `idUser` bigint(20) NOT NULL,
  `idPub` bigint(20) NOT NULL,
  `idCommentaire` bigint(20) NOT NULL AUTO_INCREMENT,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `dateCom` date NOT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`idUser`, `idPub`, `idCommentaire`, `contenu`, `dateCom`) VALUES
(6, 6, 5, 'Oh, quelle belle publication', '2014-10-26'),
(6, 6, 6, '2 eme super commentaire', '2014-10-26'),
(5, 7, 7, 'Oh quelle publication merdique', '2014-10-27'),
(5, 8, 8, 'eyruert', '2014-10-27'),
(4, 0, 20, 'Aha premiere pub !', '2014-11-29'),
(4, 0, 21, 'azdzf', '2014-11-29'),
(4, 0, 22, 'azdzf', '2014-11-29'),
(4, 0, 23, 'sdfdsg', '2014-11-29'),
(4, 0, 24, 'sdfdsg', '2014-11-29'),
(4, 0, 25, 'zz', '2014-11-29'),
(4, 0, 26, 'qfsdgf', '2014-11-29'),
(4, 0, 27, 'qfsdwd', '2014-11-29'),
(4, 31, 28, 'eeee', '2014-11-29'),
(4, 31, 29, 'zadsvdq', '2014-11-29'),
(4, 33, 30, 'azgdg', '2014-11-29'),
(4, 31, 31, 'aa', '2014-11-30'),
(4, 32, 32, 'commentaire', '2014-11-30'),
(4, 39, 33, 'qqqq', '2014-12-13'),
(4, 39, 34, 'Niark', '2014-12-13'),
(4, 39, 35, 'Niark', '2014-12-13'),
(4, 39, 36, 'Niark', '2014-12-13'),
(4, 34, 37, 'zzz', '2014-12-13'),
(4, 34, 38, 'fvvvvv', '2014-12-13'),
(4, 34, 39, 'ssss', '2014-12-13'),
(4, 34, 40, 'aaaa', '2014-12-13'),
(4, 39, 41, 'azrttyu', '2014-12-13'),
(4, 39, 42, 'azrttyu', '2014-12-13'),
(4, 51, 43, 'UÃ© et toi?', '2014-12-14'),
(4, 51, 44, 'aaa', '2014-12-14'),
(4, 51, 45, 'aa', '2014-12-14'),
(4, 51, 46, 'tyuiol;,nbvcxs', '2014-12-14'),
(4, 51, 47, 'azerty', '2014-12-14'),
(4, 52, 48, 'ertyhbvcxs', '2014-12-14'),
(4, 52, 49, 'dsfghj, ', '2014-12-14'),
(4, 52, 50, 'sdfghn,;', '2014-12-14'),
(4, 51, 51, 'qsdgfhchvjb;:', '2014-12-14'),
(4, 51, 52, 'zrtyujnhbvds', '2014-12-14'),
(4, 51, 53, 'qswdfxgch', '2014-12-14'),
(4, 51, 54, 'qswdfxgch', '2014-12-14'),
(4, 39, 55, 'qsdsfghjkl', '2014-12-14'),
(4, 40, 56, '>swdfxgchvjbk', '2014-12-14'),
(4, 59, 57, 'xcbwnxfn', '2014-12-14'),
(15, 60, 58, 'Oh la belle publication ', '2015-01-10'),
(4, 60, 59, 'Yo !', '2015-01-10'),
(4, 60, 60, 'Plop', '2015-01-10'),
(4, 60, 61, 'aa', '2015-01-10'),
(4, 86, 62, 'Ca va ?', '2015-01-10'),
(6, 89, 63, 'Coucou', '2015-01-10'),
(6, 91, 64, 'TrÃ¨s bien et toi ? :p', '2015-01-10'),
(6, 91, 65, 'Alors ?', '2015-01-10'),
(6, 91, 66, 'Oula', '2015-01-10'),
(6, 90, 67, 'Coucou ', '2015-01-10');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `idUser1` bigint(20) NOT NULL,
  `idUser2` bigint(20) NOT NULL,
  `etat` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUser1`,`idUser2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`idUser1`, `idUser2`, `etat`) VALUES
(4, 6, 1),
(4, 10, 1),
(4, 15, 1),
(6, 4, 1),
(9, 10, 3),
(10, 4, 1),
(10, 9, 2),
(10, 14, 2),
(10, 15, 2),
(14, 10, 3),
(15, 4, 1),
(15, 10, 3);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idUserSource` int(11) NOT NULL,
  `idUserDestination` int(11) NOT NULL,
  `dateEnvoi` date NOT NULL,
  `heureEnvoi` int(2) NOT NULL,
  `minuteEnvoi` int(2) NOT NULL,
  `secondeEnvoi` int(2) NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idMessage`, `idUserSource`, `idUserDestination`, `dateEnvoi`, `heureEnvoi`, `minuteEnvoi`, `secondeEnvoi`, `contenu`) VALUES
(36, 4, 6, '2015-01-10', 20, 4, 36, 'Bonjour'),
(37, 6, 4, '2015-01-10', 20, 5, 46, 'Salut'),
(38, 6, 4, '2015-01-10', 20, 15, 22, 'Ca va ?'),
(39, 6, 4, '2015-01-10', 20, 19, 30, 'aa'),
(40, 4, 6, '2015-01-10', 20, 38, 38, 'Tres bien et toi?'),
(41, 4, 4, '2015-01-11', 1, 43, 43, 'Test'),
(42, 6, 6, '2015-01-11', 11, 16, 29, 'Coucou'),
(43, 6, 4, '2015-01-11', 11, 16, 45, 'Oh oui :p'),
(44, 10, 4, '2015-01-11', 12, 17, 4, 'yo '),
(45, 10, 4, '2015-01-12', 0, 4, 18, 'alors tu me rep pas ?');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `idPublication` int(11) DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `taille` int(11) DEFAULT NULL,
  `type` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idPhoto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`idPublication`, `idUser`, `idPhoto`, `description`, `titre`, `photo`, `taille`, `type`) VALUES
(0, 4, 34, '', '', 'Assets/photo/dragon-art-1920x1200.jpg', 16000000, 'jpg'),
(0, 10, 35, '', '', 'Assets/photo/Assassins-Creed-Game-485x728.jpg', 16000000, 'jpg'),
(0, 15, 36, '', '', 'Assets/photo/dragon-art-1920x1200.jpg', 16000000, 'jpg'),
(0, 4, 37, '', '', 'Assets/photo/07844089-photo-je-suis-charlie.jpg', 16000000, 'jpg'),
(0, 6, 40, '', '', 'Assets/photo/07844089-photo-je-suis-charlie.jpg', 16000000, 'jpg'),
(0, 6, 41, '', '', 'Assets/photo/dragon-art-1920x1200.jpg', 16000000, 'jpg');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `idUser` bigint(20) NOT NULL,
  `idAuteur` bigint(20) NOT NULL,
  `idPublication` bigint(20) NOT NULL AUTO_INCREMENT,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `datePub` date NOT NULL,
  PRIMARY KEY (`idPublication`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=96 ;

--
-- Contenu de la table `publication`
--

INSERT INTO `publication` (`idUser`, `idAuteur`, `idPublication`, `contenu`, `datePub`) VALUES
(4, 4, 89, 'Coucou premiere publication', '2015-01-10'),
(4, 6, 90, 'Premiere pub de sarah sur timeline victor', '2015-01-10'),
(6, 4, 91, 'Salut ca va ?', '2015-01-10'),
(4, 4, 95, 'Test', '2015-01-11');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `prenom` text COLLATE utf8_unicode_ci NOT NULL,
  `genre` tinyint(1) NOT NULL,
  `adresse` text COLLATE utf8_unicode_ci NOT NULL,
  `idPhoto` bigint(20) DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `datNais` date NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `metier` text COLLATE utf8_unicode_ci,
  `lieuTravail` text COLLATE utf8_unicode_ci,
  `etude` text COLLATE utf8_unicode_ci,
  `status` text COLLATE utf8_unicode_ci,
  `citation` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`idUser`),
  FULLTEXT KEY `index_nom` (`nom`,`prenom`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `prenom`, `genre`, `adresse`, `idPhoto`, `email`, `password`, `datNais`, `telephone`, `metier`, `lieuTravail`, `etude`, `status`, `citation`) VALUES
(4, 'Rocheron', 'Victor', 1, 'Rosny', 37, 'victor.rocheron@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '0000-00-00', 664293505, 'Analyste dÃ©velopeur', 'Montreuil', 'Dut informatique', 'Etudiant', NULL),
(5, 'Vic', 'Tor', 0, '', NULL, 'victor.18@live.fr', '4124bc0a9335c27f086f24ba207a4912', '2014-10-22', 664293505, NULL, NULL, NULL, NULL, NULL),
(6, 'Bastien', 'Sarah', 0, '', 44, 'sarahbas@wanadoo.fr', '23206deb7eba65b3fbc80a2ffbc53c28', '0000-00-00', 648789914, 'Medecin', NULL, NULL, NULL, NULL),
(8, 'Monsieur', 'X', 1, '', NULL, 'monsieur@X.fr', '4124bc0a9335c27f086f24ba207a4912', '2014-11-13', 648789914, NULL, NULL, NULL, NULL, NULL),
(9, 'Khefif', 'Aurelien', 0, '', NULL, 'aurel@hotmail.fr', '4124bc0a9335c27f086f24ba207a4912', '1995-06-07', 4556445645, NULL, NULL, NULL, NULL, NULL),
(10, 'Marteaux', 'Alexandre', 1, '', 35, 'ialexandre.marteaux@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '1995-09-01', 6555555, NULL, NULL, NULL, NULL, NULL),
(11, 'vict', 'vict', 1, '', NULL, 'vic', '4124bc0a9335c27f086f24ba207a4912', '1999-06-06', 201, NULL, NULL, NULL, NULL, NULL),
(12, 'a', 'a', 1, '3 rue daurion', NULL, 'a@a.fr', '4124bc0a9335c27f086f24ba207a4912', '2015-01-15', 12399, NULL, NULL, NULL, NULL, NULL),
(13, 'aeh', 'qergr', 1, 'aaefzf', NULL, 'shhsrh', '08a4415e9d594ff960030b921d42b91e', '2015-01-14', 0, NULL, NULL, NULL, NULL, NULL),
(14, 'Alexandre', 'Chaigneau', 1, 'Avenue de lesperance', NULL, 'alex@chaigneau.fr', '4124bc0a9335c27f086f24ba207a4912', '2015-01-14', 358988, NULL, NULL, NULL, NULL, NULL),
(15, 'aerz', 'retzret', 1, 'Rosny', 36, 'z@z.fr', '4124bc0a9335c27f086f24ba207a4912', '0000-00-00', 2354854, 'Analyste dÃ©velopeur', 'Montreuil', 'aaa', 'Etudiant', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
