-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 14 oct. 2023 à 17:34
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet2-prototype`
--

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `CNE` varchar(11) NOT NULL,
  `Type` varchar(250) NOT NULL,
  `Ville_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`Id`, `Nom`, `CNE`, `Type`, `Ville_Id`) VALUES
(2, 'Hamid Achauo', 'G6734', '0', 1),
(3, 'Amine Lamchatab', 'G23823', '0', 1),
(4, 'Adnane Benasar', 'G23823', '0', 1),
(5, 'Mohamed-Amine Bkhit', 'G9587', '0', 1),
(6, 'Imrane Sarsri', 'G9850', '0', 1),
(7, 'Amina Assaid', 'G984545', '0', 1),
(8, 'Yassmine Daifane', 'G8945', '0', 3),
(9, 'Hussein Bouik', 'G45321', '0', 3),
(10, 'Adnane Lharrak', 'G56324', '0', 3),
(11, 'Hamza zaani', 'G456376', '0', 3),
(12, 'Mohamed Bakkali', 'G54356', '0', 6),
(13, 'Soufian Boukhal', 'GA76Z76', '0', 6),
(14, 'Mohamed Aymane', 'G765376', '0', 5),
(15, 'Ayman Alli', '', '0', 11),
(16, 'Khlid Reda', '', '0', 11),
(17, 'Mohamed Ali', '', '0', 11),
(19, 'Fouad Essarje', '', '0', 1),
(23, 'mouad lhilali', '', '0', 12),
(24, 'Salah eghla', 'P634774', '0', 13),
(25, 'abdo asri', 'P634755', '0', 5),
(27, '565656', '6565565', '0', 1),
(28, 'omar', 'lhh', '0', 1),
(29, 'omar', 'lhh', '0', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`Id`, `Nom`) VALUES
(1, 'Tetouan'),
(2, 'Tanger'),
(3, 'Casablanca'),
(4, 'Rabat'),
(5, 'Larache'),
(6, 'Khouribga'),
(7, 'El Kelaa des Sraghna'),
(8, 'Khenifra'),
(9, 'Beni Mellal'),
(10, 'Tiznit'),
(11, 'Errachidia'),
(12, 'Taroudant'),
(13, 'Ouarzazate'),
(14, 'Safi'),
(15, 'Lahraouyine'),
(16, 'Berrechid'),
(17, 'Fkih Ben Salah'),
(18, 'Taourirt'),
(19, 'Sefrou'),
(20, 'Youssoufia');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
