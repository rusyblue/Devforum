-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 20 mai 2021 à 18:54
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `noforum`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idarti` int NOT NULL AUTO_INCREMENT,
  `nomarti` text NOT NULL,
  `idcat` int NOT NULL,
  `contenuarti` text NOT NULL,
  `heurepost` date NOT NULL,
  `imagearti` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descriarti` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idarti`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idarti`, `nomarti`, `idcat`, `contenuarti`, `heurepost`, `imagearti`, `descriarti`) VALUES
(1, 'A la découverte de GIT', 0, 'Git est un système de contrôle de version distribué gratuit et open source pouvant être utilisé sur tout types projets.\r\nIl a été crée par Linus TORVALDS en 2005 et est depuis 2016 le logiciel de versionning ou de gestion de version le plus populaire.\r\n', '2021-05-08', 'reactjs.png', '1- GIT VA M’AIDER COMMENT ? <br>\r\nGit peut être utiliser comme support de stockage pour les contenus. <br>\r\n Vu qu’il est un système de gestion distribué ,les développeurs peuvent ajouter du code simultané en  <br>\r\nconservant l’historique ou le timeline des changement produits.\r\n2- POURQUOI UTILISER GIT?\r\n <br>\r\n- Efficacité dans la gestion pour type de projet. \r\n- Développement distribué et synchronisé \r\n- Flexibilité dans le développement avec un système de branche\r\n- Plusieurs plateformes pour herber vos projets \r\n3- PLATEFORMES BASÉES SUR GIT <br>\r\n- GITHUB \r\n- BITBUCKET\r\n- GITLAB \r\n\r\n'),
(2, 'La technologie VPN', 0, ' Le VPN (Virtual Private Network) signifie la création d\'un réseau virtuel privé sur le réseau global. <span></span>.<br>Nous ne parlons pas des applications VPN, mais de la technologie VPN d’abord. <br>\r\nLe passage indirect vers un serveur ou un adresse IP en passant par des tunnels sur le réseau.', '2021-05-08', 'vpn.png', ' Aujourd’hui, nous naviguons plus que jamais sur internet et nous sommes <br> tentés de sécurisé plus nos sorties de nos smartphones ou ordinateurs<br> vers l’extérieur. <br>D’où la nécessite des nouvelles technologies tunnels comme le VPN.\r\n'),
(8, 'A la découverte de GitHub', 0, 'GitHub est un site web et un service de cloud qui aide les développeurs à stocker et à gérer leur code, ainsi qu’à suivre et contrôler les modifications qui lui sont apportées. Pour comprendre exactement ce qu’est GitHub, vous devez connaître deux principes liés :\r\n', '2021-05-15', '', 'Le contrôle de version aide les développeurs à suivre et à gérer les modifications apportées au code <br>d’un projet logiciel. Au fur et à mesure qu’un projet logiciel prend de l’ampleur, le contrôle de version devient essentiel.<br>    Au lieu de cela, le contrôle de version permet aux développeurs de travailler en toute sécurité à travers<br> les branchements et les fusions.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pwd` text NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `pseudo`, `pwd`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
