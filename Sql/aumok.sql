-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 21 juin 2022 à 06:17
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aumok`
--

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `CodeUser` varchar(100) NOT NULL DEFAULT 'n/a',
  `Name` text NOT NULL DEFAULT 'n/a',
  `Firstname` text NOT NULL DEFAULT 'n/a',
  `BirthDate` date NOT NULL DEFAULT '0000-00-00',
  `eMail` varchar(100) NOT NULL DEFAULT 'n/a',
  `Phone` varchar(100) NOT NULL DEFAULT 'n/a',
  `Username` text NOT NULL DEFAULT 'n/a',
  `Password` text NOT NULL DEFAULT 'n/a',
  `isAlive` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`CodeUser`, `Name`, `Firstname`, `BirthDate`, `eMail`, `Phone`, `Username`, `Password`, `isAlive`) VALUES
('KanDav52356280084', 'Kante', 'David', '2022-05-30', 'aa@gmail.com', '4382336332', 'David', '123', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`CodeUser`),
  ADD UNIQUE KEY `eMail` (`eMail`) USING BTREE,
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Username` (`Username`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
