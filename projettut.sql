-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Mai 2016 à 15:54
-- Version du serveur :  5.6.26
-- Version de PHP :  5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projettut`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartes`
--

CREATE TABLE IF NOT EXISTS `cartes` (
  `idCarte` int(11) NOT NULL,
  `nomCarte` varchar(50) NOT NULL,
  `couleurCarte` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cartes`
--

INSERT INTO `cartes` (`idCarte`, `nomCarte`, `couleurCarte`) VALUES
(1, 'Boulevard-de-Belleville', 'Rose'),
(2, 'Rue-Lecourbe', 'Rose'),
(3, 'Rue-de-Vaugirard', 'Turquoise'),
(4, 'Rue-de-Courcelles', 'Turquoise'),
(5, 'Avenue-de-la-République', 'Turquoise'),
(6, 'Boulevard-de-la-Villette', 'Violet'),
(7, 'Avenue-de-Neuilly', 'Violet'),
(8, 'Rue-de-Paradis', 'Violet'),
(9, 'Avenue-Mozart', 'Orange'),
(10, 'Boulevard-Saint-Michel', 'Orange'),
(11, 'Place-Pigalle', 'Orange'),
(12, 'Avenue-Matignon', 'Rouge'),
(13, 'Boulevard-Malesherbes', 'Rouge'),
(14, 'Avenue-Henri-Martin', 'Rouge'),
(15, 'Faubourg-Saint-Honoré', 'Jaune'),
(16, 'Place-de-la-Bourse', 'Jaune'),
(17, 'Rue-la-Fayette', 'Jaune'),
(18, 'Avenue-de-Breteuil', 'Vert'),
(19, 'Avenue-Foch', 'Vert'),
(20, 'Boulevard-des-Capucines', 'Vert'),
(21, 'Avenue-des-Champs-Elysées', 'Bleu'),
(22, 'Rue-de-la Paix', 'Bleu');

-- --------------------------------------------------------

--
-- Structure de la table `echanges`
--

CREATE TABLE IF NOT EXISTS `echanges` (
  `idEchange` int(11) NOT NULL,
  `idDonneur` int(11) NOT NULL,
  `idDonne` int(11) NOT NULL,
  `idCarte` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `echanges`
--

INSERT INTO `echanges` (`idEchange`, `idDonneur`, `idDonne`, `idCarte`) VALUES
(1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `login`, `mdp`, `email`, `Admin`) VALUES
(1, 'Kurara', 'test', 'ameline.clara@gmail.', 0),
(2, 'Guiguou', 'mdpguiguou', 'guiguouAdmin@google.', 1),
(3, 'Simclem', '123', 'simon.clement98@yaho', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cartes`
--
ALTER TABLE `cartes`
  ADD PRIMARY KEY (`idCarte`);

--
-- Index pour la table `echanges`
--
ALTER TABLE `echanges`
  ADD PRIMARY KEY (`idEchange`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cartes`
--
ALTER TABLE `cartes`
  MODIFY `idCarte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `echanges`
--
ALTER TABLE `echanges`
  MODIFY `idEchange` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
