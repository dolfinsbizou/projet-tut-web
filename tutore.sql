-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2016 at 10:46 
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `color`) VALUES
(1, 'Boulevard-de-Belleville', 'pink'),
(2, 'Rue-Lecourbe', 'pink'),
(3, 'Rue-de-Vaugirard', 'turquoise'),
(4, 'Rue-de-Courcelles', 'turquoise'),
(5, 'Avenue-de-la-République', 'turquoise'),
(6, 'Boulevard-de-la-Villette', 'violet'),
(7, 'Avenue-de-Neuilly', 'violet'),
(8, 'Rue-de-Paradis', 'violet'),
(9, 'Avenue-Mozart', 'orange'),
(10, 'Boulevard-Saint-Michel', 'orange'),
(11, 'Place-Pigalle', 'orange'),
(12, 'Avenue-Matignon', 'red'),
(13, 'Boulevard-Malesherbes', 'red'),
(14, 'Avenue-Henri-Martin', 'red'),
(15, 'Faubourg-Saint-Honoré', 'yellow'),
(16, 'Place-de-la-Bourse', 'yellow'),
(17, 'Rue-la-Fayette', 'yellow'),
(18, 'Avenue-de-Breteuil', 'green'),
(19, 'Avenue-Foch', 'green'),
(20, 'Boulevard-des-Capucines', 'green'),
(21, 'Avenue-des-Champs-Elysées', 'blue'),
(22, 'Rue-de-la Paix', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idCard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `idUser`, `idCard`) VALUES
(8, 1, 12),
(9, 1, 16),
(11, 2, 8),
(12, 2, 14),
(13, 1, 20),
(14, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(11) NOT NULL,
  `idSellingUser` int(11) NOT NULL,
  `idBuyingUser` int(11) DEFAULT NULL,
  `idSellingCard` int(11) NOT NULL,
  `idBuyingCard` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0: avalaible/pending ; -1:declined ; 1:accepted',
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `idSellingUser`, `idBuyingUser`, `idSellingCard`, `idBuyingCard`, `status`, `comment`) VALUES
(1, 2, 1, 13, 12, 1, 'Je l''ai en double !\r\nPrends celle là !'),
(2, 1, 2, 11, 14, 1, '-Je l''aime pas\r\n-Take this one my child.'),
(4, 1, 2, 8, 12, -1, 'Ptdr\r\nReprends là en fait');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `pseudo` varchar(20) NOT NULL COMMENT 'Pseudo de l''utilisateur',
  `name` varchar(40) NOT NULL COMMENT 'Nom complet',
  `gender` varchar(30) NOT NULL COMMENT 'Genre de l''utilisateur',
  `bio` text COMMENT 'Courte description de l''utilisateur',
  `email` varchar(255) NOT NULL COMMENT 'email de l''utilisateur',
  `pswd` varchar(255) NOT NULL COMMENT 'hash du mot de passe',
  `birth` date NOT NULL COMMENT 'Date de naissance',
  `avatar` varchar(5) DEFAULT NULL COMMENT 'vaut null si pas d''avatar, l''extension sinon',
  `admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Administrateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Données utilisateur';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `name`, `gender`, `bio`, `email`, `pswd`, `birth`, `avatar`, `admin`) VALUES
(1, 'admin', 'Caroline', 'Femme', 'Bye bye Caroline.', 'admin@tutore.dev', 'dd94709528bb1c83d08f3088d4043f4742891f4f', '1954-02-23', 'png', 1),
(2, 'dolfsquare', 'Guillaume JORANDON', 'Homme', 'Développeur web.', 'jorandon@gmail.com', '5526af210a8c424ded4d5cd6e7d58e30082e3d5f', '1997-04-28', 'png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
