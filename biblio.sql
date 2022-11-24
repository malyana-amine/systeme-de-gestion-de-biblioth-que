-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 nov. 2022 à 10:08
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(46, 'abdo', 'abdo', 'abdo@gmail.com', 'abdo@gmail.com'),
(49, 'am', 'ine', 'amins@gmail.com', 'amins@gmail.com'),
(51, 'amine', 'malyana', 'amine@gmail.com', '1234'),
(52, 'amine', 'malyana', 'aminemalyana@gmail.com', 'aminemalyana@gmail.com'),
(53, 'amine', 'malyana', 'aminemlya@gmail.com', 'aminemlya@gmail.com'),
(54, 'nouhaila', 'khaouti', 'nouhaila@gmail.com', 'nouhaila@gmail.com'),
(55, 'qzdzdazdazd', 'azdazdazdazdza', 'amazdazdine@gmail.com', 'aminezdadazd'),
(56, 'qdqfzdzqd', 'azdazdazd', 'amineazdazd@gmail.com', 'amineazdazd');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `publisher` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `publisher`, `img`) VALUES
(49, 'Omar Bruce', 'Ut ex dolore ipsum e', 51, 'book-637e28e63f527.jpg'),
(50, 'Noel Thomas', 'Et veniam nisi ut e', 51, 'book-637e28f5a06c7.jpg'),
(51, 'Gillian Dudley', 'Nulla accusamus quod', 51, 'book-637f2ef30c21e.webp'),
(52, 'Randall Norris', 'Magnam aliqua Liber', 51, 'book-637f2efbdb4c8.webp'),
(53, 'Autumn Gray', 'Esse culpa neque ull', 51, 'book-637f2f06af06e.webp'),
(54, 'Hyacinth Riggs', 'Maxime soluta hic qu', 51, 'book-637f2f223f745.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher` (`publisher`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`publisher`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
