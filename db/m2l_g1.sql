-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 sep. 2022 à 13:59
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `m2l_g1`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `idFaq` int(11) NOT NULL,
  `libelle_question` varchar(255) NOT NULL,
  `date_question` varchar(50) NOT NULL,
  `libelle_reponse` varchar(255) NOT NULL,
  `date_reponse` varchar(50) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`idFaq`, `libelle_question`, `date_question`, `libelle_reponse`, `date_reponse`, `idUtilisateur`) VALUES
(1, 'Quelle est la taille d’une cage de foot ?', '2021-01-15 10:30:00', 'NULL', 'NULL', 3),
(2, 'Quelle est la durée d’un match de handball ?', '2021-01-15 10:35:00', 'Deux mi-temps de 30 minutes', 'NULL', 6),
(3, 'Quelle est le nombre de joueurs dans une équipe de handball ?', '2021-01-15 12:15:00', 'NULL', 'NULL', 7),
(6, 'La FAQ marche-t-elle ?', '', '', '', 1),
(7, 'La FAQ marche-t-elle ?', '', '', '', 1),
(8, 'La FAQ marche-t-elle ?', '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE `ligue` (
  `idLigue` int(11) NOT NULL,
  `libelle_ligue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligue`
--

INSERT INTO `ligue` (`idLigue`, `libelle_ligue`) VALUES
(1, 'Toutes les ligues'),
(2, 'Ligue de basket'),
(3, 'Ligue de volley'),
(4, 'Ligue de handball'),
(5, 'Ligue de football');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `libelle_type_long` varchar(255) NOT NULL,
  `libelle_type_court` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`idType`, `libelle_type_long`, `libelle_type_court`) VALUES
(1, 'utilisateur', ''),
(2, 'admin', ''),
(3, 'super admin', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `pseudo_utilisateur` varchar(50) NOT NULL,
  `mdp_utilisateur` varchar(50) NOT NULL,
  `mail_utilisateur` varchar(100) NOT NULL,
  `idType` int(11) NOT NULL,
  `idLigue` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `pseudo_utilisateur`, `mdp_utilisateur`, `mail_utilisateur`, `idType`, `idLigue`) VALUES
(1, 'superadmin', 'superadmin', 'superadmin@m2l.fr', 3, NULL),
(2, 'adminfoot', 'adminfoot', 'adminfoot@m2l.fr', 2, NULL),
(3, 'userfoot1', 'userfoot1', 'userfoot1@m2l.fr', 1, NULL),
(4, 'userfoot2', 'userfoot2', 'userfoot2@m2l.fr', 1, NULL),
(5, 'adminhand', 'adminhand', 'adminhand@m2l.fr', 2, NULL),
(6, 'userhand1', 'userhand1', 'userhand1@m2l.fr', 1, NULL),
(7, 'userhand2', 'userhand2', 'userhand2@m2k.fr', 1, NULL),
(8, 'adminvolley', 'adminvolley', 'adminvolley@m2l.fr', 2, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idFaq`),
  ADD KEY `faq_utilisateur_FK` (`idUtilisateur`);

--
-- Index pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`idLigue`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD KEY `utilisateur_type_FK` (`idType`),
  ADD KEY `utilisateur_ligue0_FK` (`idLigue`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `idFaq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `ligue`
--
ALTER TABLE `ligue`
  MODIFY `idLigue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_utilisateur_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ligue0_FK` FOREIGN KEY (`idLigue`) REFERENCES `ligue` (`idLigue`),
  ADD CONSTRAINT `utilisateur_type_FK` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
