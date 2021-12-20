-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 déc. 2021 à 09:04
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque_inconnu`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom_auteur` varchar(125) NOT NULL,
  `prenom_auteur` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom_auteur`, `prenom_auteur`) VALUES
(1, 'Klein\r\n', 'Naomi\r\n'),
(2, 'Meyer\r\n', 'Erin\r\n'),
(3, 'Daniel\r\n', 'Jean-Marc\r\n'),
(4, 'Collectif\r\n', NULL),
(5, 'Bainville\r\n', 'Jacques\r\n'),
(6, 'Van Rie\r\n', 'Hubert\r\n'),
(7, 'Thibault\r\n', 'Laurence\r\n'),
(8, 'Batsch\r\n', 'Laurent\r\n'),
(9, 'Weber\r\n', 'Patrick\r\n'),
(10, 'Besbes\r\n', 'Imène\r\n'),
(11, 'Ibanez\r\n', 'Eric\r\n'),
(12, 'Eben\r\n', 'Bernard\r\n'),
(13, 'Gierach\r\n', 'John\r\n'),
(14, 'Potelet\r\n', 'Hélène\r\n'),
(15, 'Claval\r\n', 'Paul\r\n'),
(16, 'Chollet\r\n', 'Mona\r\n'),
(17, 'Cash\r\n', 'Adam\r\n'),
(18, 'André\r\n', 'Christophe\r\n'),
(19, 'Comte-Sponville\r\n', 'André\r\n'),
(20, 'Lenoir\r\n', 'Frédéric\r\n'),
(21, 'Pépin\r\n', 'Charles\r\n'),
(22, 'Cerise\r\n', 'Sébastien\r\n'),
(23, 'Davidson\r\n', 'Carol\r\n'),
(24, 'Costa\r\n', 'Raphaël \r\n'),
(25, 'Bissardon\r\n', 'Sébastien\r\n'),
(26, 'Perino\r\n', 'Luc\r\n'),
(27, 'Dachez\r\n', 'Roger\r\n'),
(28, 'Dordoigne\r\n', 'José\r\n'),
(29, 'ACISSI\r\n', ''),
(30, 'Engebretson\r\n', 'Patrick\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

CREATE TABLE `collection` (
  `id_collection` int(11) NOT NULL,
  `nom_collection` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `collection`
--

INSERT INTO `collection` (`id_collection`, `nom_collection`) VALUES
(1, 'Divers		\r\n'),
(2, 'Epsilon		\r\n	\r\n'),
(3, 'Ressources informatiques		\r\n		\r\n'),
(4, 'Larousse		\r\n'),
(5, 'Cahiers Libres		\r\n'),
(6, 'Fil Droit		\r\n'),
(7, 'Le Néant		\r\n'),
(8, 'Meilleur Du Droit		\r\n'),
(9, 'Comprendre 		\r\n'),
(10, 'Bibliotheca		\r\n'),
(11, 'Mytho		\r\n'),
(12, 'Ldp Documents		\r\n'),
(13, 'Ldp 		\r\n'),
(14, 'Poche Odile Jacob		\r\n'),
(15, 'Nuls en Poche		\r\n'),
(16, 'Sorcières		\r\n'),
(17, 'Revue Le Point Hors-Série		\r\n'),
(18, 'Œuvres et Thèmes		\r\n'),
(19, 'Totem		\r\n'),
(20, 'Beaux Livres Relies		\r\n'),
(21, 'Eyrolles		\r\n'),
(22, 'Dunod		\r\n'),
(23, 'Bloc-Notes		\r\n'),
(24, 'Librio		\r\n'),
(25, 'Poche		\r\n'),
(26, 'Pour Les Nuls Business		\r\n'),
(27, 'Atlas Illustre		\r\n'),
(28, 'TEXTO		\r\n'),
(29, 'Grand Larousse		\r\n'),
(30, 'Optimum		\r\n'),
(31, 'Arrow		\r\n'),
(32, 'Babel		\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `constituer`
--

CREATE TABLE `constituer` (
  `id_theme` int(11) NOT NULL,
  `isbn_ouvrage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `constituer`
--

INSERT INTO `constituer` (`id_theme`, `isbn_ouvrage`) VALUES
(1, 43),
(1, 47),
(1, 51),
(2, 31),
(2, 35),
(2, 39),
(3, 19),
(3, 23),
(3, 27),
(4, 18),
(4, 22),
(4, 26),
(5, 30),
(5, 34),
(5, 38),
(6, 37),
(6, 41),
(6, 42),
(7, 46),
(7, 49),
(7, 50),
(8, 44),
(8, 45),
(8, 48),
(9, 25),
(9, 29),
(9, 33),
(10, 15),
(10, 21),
(10, 40),
(11, 28),
(11, 32),
(11, 36),
(12, 14),
(12, 20),
(12, 24);

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom_editeur` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `nom_editeur`) VALUES
(1, 'Le Point		\r\n'),
(2, 'Que Sais-Je		\r\n'),
(3, 'Hatier		\r\n'),
(4, 'Gallmeister		\r\n'),
(5, 'Seuil		\r\n'),
(6, 'Eyrolles		\r\n'),
(7, 'Dunod		\r\n'),
(8, 'Ellipses		\r\n'),
(9, 'Librio		\r\n'),
(10, 'Larousse		\r\n'),
(11, 'Taschen		\r\n'),
(12, 'Paca Eds		\r\n'),
(13, 'Allary Eds		\r\n'),
(14, 'Lgf		\r\n'),
(15, 'Odile Jacob		\r\n'),
(16, 'First		\r\n'),
(17, 'Zones		\r\n'),
(18, 'Pearson France		\r\n'),
(19, 'Eni Editions		\r\n'),
(20, 'Tallandier		\r\n'),
(21, 'La Découverte		\r\n'),
(22, 'Enrick B. Eds		\r\n'),
(23, 'Marabout'),
(24, 'First		\r\n'),
(25, 'Atlas		\r\n'),
(26, 'Robert Laffont		\r\n'),
(27, 'PublicAffairs		\r\n'),
(28, 'knopf canada		\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE `gerer` (
  `isbn_ouvrage` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_pret` date NOT NULL,
  `date_retour` date NOT NULL,
  `delai_pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ouvrage`
--

CREATE TABLE `ouvrage` (
  `isbn_ouvrage` int(11) NOT NULL,
  `photo` longblob DEFAULT NULL,
  `titre_ouvrage` varchar(125) NOT NULL,
  `date_parution` year(4) NOT NULL,
  `dispo` varchar(125) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_collection` int(11) NOT NULL,
  `id_editeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ouvrage`
--

INSERT INTO `ouvrage` (`isbn_ouvrage`, `photo`, `titre_ouvrage`, `date_parution`, `dispo`, `id_auteur`, `id_collection`, `id_editeur`) VALUES
(14, '', 'La stratégie du choc\r\n', 2007, 'Disponible\r\n', 1, 32, 28),
(15, '', 'La France et sa Géographie', 2021, 'Disponible\r\n', 4, 17, 1),
(18, '', 'Sorcières - La Puissance invaincue des Femmes\r\n', 2018, 'Disponible', 16, 16, 17),
(19, '', 'Les Bases du Hacking\r\n', 2017, 'Disponible', 30, 1, 18),
(20, '', 'The Culture Map', 2016, 'Disponible', 2, 31, 27),
(21, '', 'Histoire de la Géographie\r\n', 2011, 'Disponible', 15, 7, 2),
(22, '', 'La Psychologie pour les Nuls\r\n', 2020, 'Disponible', 17, 15, 16),
(23, '', 'Sécurité Informatique\r\n', 2017, 'Disponible', 29, 2, 19),
(24, '', 'Traité d\'économie\r\n', 2021, 'Disponible\r\n', 3, 30, 8),
(25, '', 'Les Mille et Une Nuits\r\n', 2020, 'Disponible\r\n', 14, 18, 3),
(26, '', 'Psychologie de la Peur\r\n', 2005, 'Disponible\r\n', 18, 14, 16),
(27, '', 'Réseaux informatiques - Notions Fondamentales\r\n', 2019, 'Disponible\r\n', 28, 3, 19),
(28, '', 'Le grand Larousse de l\'histoire de France\r\n', 2020, 'Disponible\r\n', 4, 29, 10),
(29, '', 'Traité du Zen et de l\'Art de la pêche à la Mouche \r\n', 2018, 'Disponible\r\n', 13, 19, 4),
(30, '', 'Présentations de la Philosophie\r\n', 2002, 'Disponible\r\n', 19, 13, 15),
(31, '', 'Histoire de la Médecine\r\n', 2021, 'Disponible\r\n', 27, 28, 20),
(32, '', 'Histoire de France\r\n', 2020, 'Disponible\r\n', 5, 28, 20),
(33, '', 'Haïkus, l\'Art de boire et de Manger\r\n', 2020, 'Disponible\r\n', 4, 20, 5),
(34, '', 'Le Miracle Spinoza\r\n', 2019, 'Disponible\r\n', 20, 12, 14),
(35, '', 'Médecine\r\n', 2017, 'Disponible\r\n', 4, 4, 10),
(36, '', 'Les Bons Mots De L\'Histoire\r\n', 2021, 'Disponible\r\n', 6, 7, 26),
(37, '', 'E-Commerce: Tout savoir avant de créer une boutique en ligne!\r\n', 2021, 'Disponible\r\n', 12, 21, 6),
(38, '', 'La Rencontre - Une Philosophie\r\n', 2021, 'Disponible\r\n', 21, 7, 13),
(39, '', 'Patients Zéro - Histoires inversées de la Médecine\r\n', 2020, 'Disponible\r\n', 26, 5, 21),
(40, '', 'Le nouvel Atlas Géographique Du Monde\r\n', 2018, 'Disponible\r\n', 4, 27, 25),
(41, '', 'Drop-Shipping - Se Lancer et Réussir en E-Commerce\r\n', 2019, 'Disponible\r\n', 11, 22, 7),
(42, '', 'Enfin Rentier\r\n', 2018, 'Disponible\r\n', 22, 11, 12),
(43, '', 'Paroles de Palais de Justice\r\n', 2019, 'Disponible\r\n', 25, 6, 22),
(44, '', 'La comptabilité\r\n', 2019, 'Disponible', 7, 26, 24),
(45, '', 'Compta à Bloc\r\n', 2020, 'Disponible', 10, 23, 8),
(46, '', 'L\'Architecture Moderne A-Z\r\n', 2016, 'Disponible', 4, 10, 11),
(47, '', 'Le Droit sans Fautes\r\n', 2020, 'Disponible', 25, 7, 22),
(48, '', 'La Comptabilité Facile\r\n', 2020, 'Disponible', 8, 25, 23),
(49, '', 'Histoire de l\'Architecture\r\n', 2018, 'Disponible', 9, 24, 9),
(50, '', 'Comprendre l\'Architecture\r\n', 2016, 'Disponible', 23, 9, 10),
(51, '', 'Curiosités Juridiques\r\n', 2020, 'Disponible', 24, 8, 22);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id_theme` int(11) NOT NULL,
  `nom_theme` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id_theme`, `nom_theme`) VALUES
(1, 'Droit		\r\n'),
(2, 'Médecine		\r\n'),
(3, 'Informatique		\r\n'),
(4, 'Psychologie		\r\n'),
(5, 'Philosophie		\r\n'),
(6, 'Commerce		\r\n'),
(7, 'Architecture		\r\n'),
(8, 'Comptabilité		\r\n'),
(9, 'Art et Littérature		\r\n'),
(10, 'Géographie		\r\n'),
(11, 'Histoire		\r\n'),
(12, 'économie		\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(125) NOT NULL,
  `prenom_user` varchar(125) NOT NULL,
  `adresse_user` varchar(125) NOT NULL,
  `email_user` varchar(125) NOT NULL,
  `psw_user` varchar(255) NOT NULL,
  `tel_user` int(11) NOT NULL,
  `categorie_user` varchar(10) NOT NULL,
  `pseudo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `adresse_user`, `email_user`, `psw_user`, `tel_user`, `categorie_user`, `pseudo`) VALUES
(1, 'SUN', 'Julie', '82 boulevard masséna, 75013 paris', 'sun.julie0@gmail.com', '$2y$10$kvbMcJazJUqKnAudJO7R6..6DCDiNqyaeimOJ/31R8K8WQFn4c1fC', 601281540, 'admin', 'Julie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id_collection`);

--
-- Index pour la table `constituer`
--
ALTER TABLE `constituer`
  ADD PRIMARY KEY (`id_theme`,`isbn_ouvrage`),
  ADD KEY `constituer_Ouvrage0_FK` (`isbn_ouvrage`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD PRIMARY KEY (`isbn_ouvrage`,`id_user`),
  ADD KEY `gerer_users0_FK` (`id_user`);

--
-- Index pour la table `ouvrage`
--
ALTER TABLE `ouvrage`
  ADD PRIMARY KEY (`isbn_ouvrage`),
  ADD KEY `Ouvrage_auteur_FK` (`id_auteur`),
  ADD KEY `Ouvrage_collection0_FK` (`id_collection`),
  ADD KEY `Ouvrage_editeur1_FK` (`id_editeur`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id_theme`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user` (`email_user`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `collection`
--
ALTER TABLE `collection`
  MODIFY `id_collection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `ouvrage`
--
ALTER TABLE `ouvrage`
  MODIFY `isbn_ouvrage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id_theme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `constituer`
--
ALTER TABLE `constituer`
  ADD CONSTRAINT `constituer_Ouvrage0_FK` FOREIGN KEY (`isbn_ouvrage`) REFERENCES `ouvrage` (`isbn_ouvrage`),
  ADD CONSTRAINT `constituer_theme_FK` FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id_theme`);

--
-- Contraintes pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD CONSTRAINT `gerer_Ouvrage_FK` FOREIGN KEY (`isbn_ouvrage`) REFERENCES `ouvrage` (`isbn_ouvrage`),
  ADD CONSTRAINT `gerer_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `ouvrage`
--
ALTER TABLE `ouvrage`
  ADD CONSTRAINT `Ouvrage_auteur_FK` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `Ouvrage_collection0_FK` FOREIGN KEY (`id_collection`) REFERENCES `collection` (`id_collection`),
  ADD CONSTRAINT `Ouvrage_editeur1_FK` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
