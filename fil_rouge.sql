-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 20 nov. 2024 à 14:29
-- Version du serveur : 5.7.24
-- Version de PHP : 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fil_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `idAddress` int(11) NOT NULL,
  `street` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `numSIRET` varchar(14) NOT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `workField` varchar(50) DEFAULT NULL,
  `contactFirstName` varchar(50) DEFAULT NULL,
  `contactLastName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `clientlivesin`
--

CREATE TABLE `clientlivesin` (
  `numSIRET` varchar(14) NOT NULL,
  `idAddress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `idProject` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `beginDate` datetime DEFAULT NULL,
  `theoriticalDeadLine` datetime DEFAULT NULL,
  `realDeadLine` datetime DEFAULT NULL,
  `idState` int(11) NOT NULL,
  `numSIRET` varchar(14) NOT NULL,
  `idUserProjectManager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `state`
--

CREATE TABLE `state` (
  `idState` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `idTask` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `format` varchar(10) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `beginDate` datetime DEFAULT NULL,
  `theoriticalEndDate` datetime DEFAULT NULL,
  `realEndDate` datetime DEFAULT NULL,
  `idUserDeveloper` int(11) NOT NULL,
  `idProject` int(11) NOT NULL,
  `idState` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `userlivesin`
--

CREATE TABLE `userlivesin` (
  `idUser` int(11) NOT NULL,
  `idAddress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_`
--

CREATE TABLE `user_` (
  `idUser` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`idAddress`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`numSIRET`);

--
-- Index pour la table `clientlivesin`
--
ALTER TABLE `clientlivesin`
  ADD PRIMARY KEY (`numSIRET`,`idAddress`),
  ADD KEY `idAddress` (`idAddress`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`idProject`),
  ADD KEY `idState` (`idState`),
  ADD KEY `numSIRET` (`numSIRET`),
  ADD KEY `idUserProjectManager` (`idUserProjectManager`);

--
-- Index pour la table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`idState`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`idTask`),
  ADD KEY `idUserDeveloper` (`idUserDeveloper`),
  ADD KEY `idProject` (`idProject`),
  ADD KEY `idState` (`idState`);

--
-- Index pour la table `userlivesin`
--
ALTER TABLE `userlivesin`
  ADD PRIMARY KEY (`idUser`,`idAddress`),
  ADD KEY `idAddress` (`idAddress`);

--
-- Index pour la table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `address`
--
ALTER TABLE `address`
  MODIFY `idAddress` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `idProject` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `state`
--
ALTER TABLE `state`
  MODIFY `idState` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `idTask` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_`
--
ALTER TABLE `user_`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clientlivesin`
--
ALTER TABLE `clientlivesin`
  ADD CONSTRAINT `clientlivesin_ibfk_1` FOREIGN KEY (`numSIRET`) REFERENCES `client` (`numSIRET`),
  ADD CONSTRAINT `clientlivesin_ibfk_2` FOREIGN KEY (`idAddress`) REFERENCES `address` (`idAddress`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`idState`) REFERENCES `state` (`idState`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`numSIRET`) REFERENCES `client` (`numSIRET`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`idUserProjectManager`) REFERENCES `user_` (`idUser`);

--
-- Contraintes pour la table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`idUserDeveloper`) REFERENCES `user_` (`idUser`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`idProject`) REFERENCES `project` (`idProject`),
  ADD CONSTRAINT `task_ibfk_3` FOREIGN KEY (`idState`) REFERENCES `state` (`idState`);

--
-- Contraintes pour la table `userlivesin`
--
ALTER TABLE `userlivesin`
  ADD CONSTRAINT `userlivesin_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user_` (`idUser`),
  ADD CONSTRAINT `userlivesin_ibfk_2` FOREIGN KEY (`idAddress`) REFERENCES `address` (`idAddress`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
