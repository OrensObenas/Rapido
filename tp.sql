-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 mai 2024 à 17:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp`
--

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE `chauffeur` (
  `id` int(11) NOT NULL,
  `nomChauffeur` varchar(20) DEFAULT NULL,
  `prenomChauffeur` varchar(20) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `disponible` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `nomChauffeur`, `prenomChauffeur`, `tel`, `sexe`, `disponible`) VALUES
(1, 'Albert', 'claude', 98850086, 'M', 'oui'),
(2, 'Kevin', 'appolinaire', 98850087, 'M', 'non'),
(3, 'Mark', 'Didier', 98850088, 'M', 'non'),
(4, 'luck', 'Aimerick', 98850089, 'M', 'non'),
(5, 'john', 'Eliel', 98850090, 'M', 'oui'),
(6, 'prince', 'Gilbert', 98850091, 'M', 'oui'),
(7, 'franck', 'Crespin', 98850092, 'M', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `depart` varchar(50) DEFAULT NULL,
  `arriver` varchar(50) DEFAULT NULL,
  `heure` datetime DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `etatCourse` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id_course`, `depart`, `arriver`, `heure`, `id`, `etatCourse`) VALUES
(23, 'Cotonou', 'dangbo', '2024-12-10 00:00:00', 2, 'Terminer'),
(24, 'parakou', 'porto', '2024-12-11 00:00:00', 5, 'Terminer'),
(25, 'Savalou', 'Dassa', '2024-12-12 00:00:00', 6, 'Terminer'),
(26, 'Dassa', 'Savalou', '2024-12-14 00:00:00', 7, 'Terminer'),
(27, 'porto', 'parakou', '2024-12-15 00:00:00', 3, 'En cours'),
(36, 'calavi', 'Bohicon', '2024-05-21 12:53:00', 2, 'Terminer'),
(37, 'calavi', 'Bohicon', '2024-05-28 17:33:00', 4, 'Terminer'),
(38, 'calavi', 'Bohicon', '2024-05-17 01:37:00', 2, 'En attente'),
(39, 'Nati', 'St Michel', '2024-05-19 08:30:00', 4, 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `operateur`
--

CREATE TABLE `operateur` (
  `matricule` int(11) NOT NULL,
  `nomOperateur` varchar(20) DEFAULT NULL,
  `prenomOperateur` varchar(20) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `operateur`
--

INSERT INTO `operateur` (`matricule`, `nomOperateur`, `prenomOperateur`, `tel`, `sexe`) VALUES
(1, 'Gregoire', 'Norbert', 53194117, 'M'),
(2, 'Vicent', 'Tam', 53194118, 'M'),
(3, 'Prince', 'Raouf', 53194119, 'M'),
(4, 'Greg', 'Kevin', 53194120, 'M'),
(5, 'Amstrong', 'Morel', 53194121, 'M'),
(6, 'Jack', 'Espoir', 53194122, 'M'),
(7, 'Jean', 'Elise', 53194123, 'M');

-- --------------------------------------------------------

--
-- Structure de la table `pleinte`
--

CREATE TABLE `pleinte` (
  `id_pleinte` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `objet` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `messages` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pleinte`
--

INSERT INTO `pleinte` (`id_pleinte`, `nom`, `numero`, `objet`, `email`, `messages`) VALUES
(1, 'orens', 53194117, 'pleinte', 'gilbertobenas@gmail.com', 'je ne suis pas satisfait de mon superieur. Il est trop arrogant.'),
(2, 'gilbert', 525135858, 'Remerciment', 'khmv2425@gmail.com', 'Merci pour votre aide la derniere fois. Je ne suis plus embeter par mon superieur.'),
(3, 'gilbert', 525135858, 'Remerciment', 'khmv2425@gmail.com', 'Merci de m\'avoir recommander au poste d\'operateur.'),
(4, 'gilbert', 53194117, 'Remerciment', 'khmv2425@gmail.com', 'Merci de m\'avoir recommander au poste de chauffeur.'),
(5, 'gilbert', 53194117, 'Pleintes', 'khmv2425@gmail.com', 'Je ne suis pas satisfait de mon salaire.'),
(6, 'gilbert', 53194117, 'Remerciment', 'khmv2425@gmail.com', 'Merci de m\'avoir soutenu apres l\'accident.'),
(7, 'gilbert', 53194117, 'Remerciment', 'khmv2425@gmail.com', 'je suis satisfait de mon superieur. Il est trop sympa.'),
(8, 'gilbert', 53194117, 'pleinte', 'khmv2425@gmail.com', 'mon taxi est en panne depuis deux semaines et vous ne l\'avez pas reparer'),
(9, 'orens', 4, 'Pleinte', 'gilbertobenas@gmail.com', 'Vous ne donnez pas suites a mes pleintes.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `operateur`
--
ALTER TABLE `operateur`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `pleinte`
--
ALTER TABLE `pleinte`
  ADD PRIMARY KEY (`id_pleinte`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `operateur`
--
ALTER TABLE `operateur`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `pleinte`
--
ALTER TABLE `pleinte`
  MODIFY `id_pleinte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
