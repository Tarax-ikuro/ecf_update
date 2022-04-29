-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 29 avr. 2022 à 19:35
-- Version du serveur :  8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arMediaBdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int NOT NULL,
  `titre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `auteur` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `genre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_publi` datetime NOT NULL,
  `id_categorie` int NOT NULL,
  `emprunt` tinyint NOT NULL,
  `collection` varchar(145) NOT NULL,
  `edition` varchar(145) NOT NULL,
  `fichier` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `auteur`, `genre`, `date_publi`, `id_categorie`, `emprunt`, `collection`, `edition`, `fichier`, `etat`) VALUES
(1, 'Les quatre accords toltèque ', 'Miguel Ruiz ', 'Développement personnel ', '2016-04-06 09:43:32', 1, 1, 'poche ', 'Jouvence', 'uploads/Les-quatre-accords-tolteques.jpg', 'Indisponible'),
(2, 'Avengers Endgmae', 'Joez Russo et Anthony Russo\r\n\r\n ', 'Science Fiction ', '2019-08-30 08:50:00', 4, 1, 'Marvel ', 'Universal ', 'uploads/Avengers-Endgame-DVD.jpg', 'Indisponible'),
(3, 'Back in black ', 'AC/DC ', 'Hard rock metal ', '2003-01-05 10:00:00', 5, 3, 'Universal Music', 'Special edition ', 'uploads/Back-in-Black.jpg', ''),
(4, ' La plus secrète mémoire des hommes ', 'Mohamed Mbougar Sarr', 'roman ', '2021-08-10 10:06:59', 1, 4, 'Goncourt ', 'jimsann', 'uploads/La-plus-secrete-memoire-des-hommes.jpg', ''),
(6, 'Spiderman No way home ', 'Jon Watts', 'Science Fiction ', '2022-04-20 10:15:47', 4, 1, 'Marvel ', 'SPHE', 'uploads/Spider-Man-No-Way-Home-DVD.jpg', 'Indisponible'),
(7, ' L\'Attaque des Titans - Tome 6 : L\'Attaque des Titans ', 'Hajime Isayama', 'Manga', '2014-03-05 10:25:47', 1, 0, 'Attaque des titans ', 'Pika ', 'uploads/L-attaque-des-Titans.jpg', ''),
(8, ' L\'Attaque des Titans - Tome 33 : L\'Attaque des Titans ', 'Hajime Isayama', 'Manga ', '2022-04-07 10:46:55', 1, 0, 'Pika Seinen', 'Pika', 'uploads/L-attaque-des-Titans.jpg', ''),
(9, ' L\'Attaque des Titans - Tome 29 : L\'Attaque des Titans ', 'Hajime Isayama', 'Manga', '2019-12-11 10:46:55', 1, 0, 'Pika Seinen', 'Pika', 'uploads/L-Attaque-des-Titans.jpg', ''),
(10, ' Miracle morning ', 'Hal Elrod (Auteur)', 'roman ', '2017-04-14 09:43:32', 1, 0, 'Evol-dev\'t personnel\r\n\r\n ', 'Pocket ', 'uploads/Miracle-morning.jpg', ''),
(11, 'my hero academia', 'kohei horikoshi', 'manga', '2022-04-01 00:00:00', 1, 1, 'mha', 'pika', 'uploads/Spider-Man-No-Way-Home-DVD.jpg', ''),
(12, ' My Hero Academia - Tome 05 : My Hero Academia ', 'kohei horikoshi', 'manga', '2016-09-01 00:00:00', 1, 1, 'mha', 'kioon', 'uploads/My-hero-academia.jpg', ''),
(13, ' My Hero Academia - Tome 07 : My Hero Academia ', 'kohei horikoshi', 'roman', '2017-01-12 00:00:00', 1, 1, 'mha', 'kioon', 'uploads/My-Hero-Academiaba.jpg', ''),
(14, 'L\'Attaque des Titans - Tome 01 : L\'Attaque des Titans', 'Hajime Isayama', 'manga', '2013-06-13 00:00:00', 1, 1, 'attaque des titans', 'pika', 'uploads/L-attaque-des-Titans1.jpg', ''),
(15, ' L\'Attaque des Titans - Tome 1 : L\'Attaque des Titans - Before the Fall ', 'Hajime Isayama', 'manga', '2014-01-10 00:00:00', 1, 0, 'Attaque des Titans', 'Pika', 'uploads/L-attaque-des-titans-before-the-fall.jpg', 'disponible'),
(16, '', 'Hajime Isayama', 'manga', '2015-04-15 23:27:38', 1, 0, 'Attaque des Titans', 'pika', 'uploads/Before-the-fall.jpg', 'disponible'),
(17, 'Iron Man - Edition Simple', 'Jon favreau ', 'Action ', '2008-11-10 09:00:16', 4, 1, 'Marvel ', 'M6 videos ', 'uploads/Iron-Man-Edition-Simple.jpg', 'disponible'),
(18, 'Iron Man 2 DVD', 'Jon favreau ', 'Action ', '2010-04-12 09:00:16', 4, 0, 'Marvel ', 'M6 video', 'uploads/Iron-Man-2-DVD.jpg', 'disponible'),
(19, 'Transformers 5: The Last Knight Blu-ray', 'Michael Bay ', 'Science fiction ', '2018-12-06 09:11:54', 4, 1, 'Transformers', 'Hasbro', 'uploads/Transformers-5-The-Last-Knight-Blu-ray.jpg', 'Disponible'),
(20, 'Transformers 3 [Blu-ray] ', 'Michael Bay', 'Science fiction ', '2011-07-12 09:11:54', 4, 1, 'Transformers', 'Hasbro', 'uploads/tf3.jpg', 'Disponible'),
(21, ' Coffret Ip Man 1 et 2 DVD ', 'Wilson Yip', 'Art martiaux', '2014-10-04 09:23:29', 4, 1, 'Yip Man story', 'Metro', 'uploads/Coffret-Ip-Man-1-et-2-DVD.jpg', 'Disponible'),
(22, 'UB 40 Best of volumes 1 and 2', 'UB 40', 'Raggae', '2005-04-03 09:23:29', 5, 0, 'ub40 collection ', 'Emi', 'uploads/Best-of-volumes-1-and-2.jpg', 'Disponible');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int NOT NULL,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `name`) VALUES
(1, 'Livre'),
(4, 'DVD'),
(5, 'CD');

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `id_pret` int NOT NULL,
  `id_users` int NOT NULL,
  `id_article` int NOT NULL,
  `date_retour` timestamp NULL DEFAULT NULL,
  `date_depart` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rendu` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pret`
--

INSERT INTO `pret` (`id_pret`, `id_users`, `id_article`, `date_retour`, `date_depart`, `rendu`) VALUES
(1, 1, 7, '2022-04-20 20:49:18', '2022-04-13 20:49:18', '0000-00-00 00:00:00'),
(2, 1, 1, '2022-05-05 20:07:52', '2022-04-28 20:07:52', NULL),
(5, 1, 6, '2022-05-06 15:29:12', '2022-04-29 15:29:12', NULL),
(6, 1, 6, '2022-05-06 15:29:46', '2022-04-29 15:29:46', NULL),
(7, 1, 2, '2022-05-06 15:40:16', '2022-04-29 15:40:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `prenom` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdp` varchar(275) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adresse` varchar(175) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ville` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cp` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'utilisateur',
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `prenom`, `nom`, `email`, `mdp`, `adresse`, `ville`, `cp`, `type`, `pseudo`) VALUES
(1, 'arias', 'ravelo', 'ariasdu13@hotmail.fr', '$2y$12$6ZYfI8/WZIs07OS7/aaaxubzwxw64MbzJAZuX8RK9C/i/cM/qXwse', '38 chemin de la bigotte', 'marseille', '13015', 'admin', 'tarax'),
(2, 'arielle', 'ravelo', 'arielledu13@hotmail.fr', '$2y$12$6BVEt93R.gVxHVRzHEqQs.e3WiAYGb9kXY/favyFAYdDnMxjMs1LK', '38 chemin de la bigotte', 'marseille', '13015', 'utilisateur', 'damdam'),
(3, 'hanielle', 'razinfin', 'hanielle@gmail.com', '$2y$12$4ggcJhBZrHQ/Hm4fY1kDa.1O3DEKRTmdOkj8zEtBCr/2mjA864Yrq', '38 chemin de la bigotte', 'marseille', '13015', 'utilisateur', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_category` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `pret`
--
ALTER TABLE `pret`
  ADD PRIMARY KEY (`id_pret`),
  ADD UNIQUE KEY `idh_istorique_UNIQUE` (`id_pret`),
  ADD KEY `fk_3` (`id_users`),
  ADD KEY `fk_4` (`id_article`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `id_pret` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pret`
--
ALTER TABLE `pret`
  ADD CONSTRAINT `fk_3` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_4` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
