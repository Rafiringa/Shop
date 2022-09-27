-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 juin 2022 à 14:14
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `article` varchar(50) NOT NULL,
  `prix` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `image`, `article`, `prix`) VALUES
(20, 'http://localhost/Dashbord/uploads/abstraitarbrefeuillebriselunesoleilnuit.jpg', 'Banzai', '23$'),
(27, 'http://localhost/Dashbord/uploads/fresh-strawberries-g26b139c30_1280.jpg', 'Fraise', '2$ (Kg)'),
(29, 'http://localhost/Dashbord/uploads/flower-gbd9f4e215_1280.jpg', 'article 1', '12 Ar'),
(30, 'http://localhost/Dashbord/uploads/43ec643e415690208f5d933cf9dcef84.jpg', 'article 2', '400 Ar'),
(32, 'http://localhost/Dashbord/uploads/fond-decran-14.jpg', 'article 6', '23 Ar');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(3, 'http://localhost/Dashbord/uploads/43ec643e415690208f5d933cf9dcef84.jpg'),
(4, 'http://localhost/Dashbord/uploads/fond-decran-14.jpg'),
(6, 'http://localhost/Dashbord/uploads/abstraitarbrefeuillebriselunesoleilnuit.jpg'),
(7, 'http://localhost/Dashbord/uploads/flower-gbd9f4e215_1280.jpg'),
(8, 'http://localhost/Dashbord/uploads/fresh-strawberries-g26b139c30_1280.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `log` varchar(250) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `log`, `motdepasse`) VALUES
(1, 'Ampy', '12345');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
