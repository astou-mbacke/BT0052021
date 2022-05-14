-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 15 mai 2022 à 01:21
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
-- Base de données : `monsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `username`, `email`, `sujet`, `message`) VALUES
(1, 'fatou', 'astoucheikh422@gmail.com', 'test', 'bonjour test');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `identifiant` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sexe` enum('m','f') DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `nouveau_mdp` int(4) DEFAULT 0,
  `role` varchar(50) NOT NULL DEFAULT 'utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `identifiant`, `mdp`, `nom`, `prenom`, `email`, `sexe`, `adresse`, `nouveau_mdp`, `role`) VALUES
(4, 'Abou', '8cb2237d0679ca88db6464eac60da96345513964', 'SARR', 'Ablaye', 'ablaye2@gmail.com', 'm', 'Dakar', 0, 'admin'),
(6, 'alya', '8cb2237d0679ca88db6464eac60da96345513964', 'KHAYATI', 'Alya', 'alya.khati@hotmail.com', 'f', 'dakar', 0, 'utilisateur'),
(9, 'fafa', '8cb2237d0679ca88db6464eac60da96345513964', 'DIOP', 'Fatima', 'fa@gmail.com', 'f', 'Dakar', 0, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `image` varchar(300) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `prix` int(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `image`, `titre`, `prix`, `description`) VALUES
(1, 'raw.jpg', 'Iphone', 15, 'memoire 128G'),
(2, 'img1.jpg', 'pull', 20000, 'bon pour le froid'),
(3, 'img2.webp', 'robe', 10000, 'robe beige'),
(4, 'img3.webp', 'robe', 35000, 'robe noire'),
(5, 'img4.jpg', 'culotte', 5000, 'Culotte rouge-blanc'),
(6, 'img5.jpg', 'pull', 10000, 'pull pour femme en saumo'),
(7, 'img6.webp', 't-shirt', 5000, 't-shirt en gris'),
(8, 'img7.webp', 'jean', 3500, 'jean bleu'),
(9, 'img8.webp', 'jean', 5000, 'jean bleu'),
(10, 'img9.webp', 'chemise', 10000, 'chemise en crepe'),
(11, 'img10.jpg', 'chemise', 10000, 'ensemble chemise pantalon'),
(12, 'img11.webp', 'fare a paupiére', 10000, 'tres belle et discret'),
(13, 'img12.jpeg', 'fare ', 5000, 'discret'),
(14, 'img13.jpg', 'pinceau', 3500, 'utilser pour le  maquillage'),
(16, 'img15.webp', 'chaussure', 20000, 'basket bleu'),
(17, 'img16.jpg', 'chaussure', 10000, 'air force noire'),
(18, 'img17.jpg', 'chaussure', 20000, 'air jordan bleu'),
(19, 'img18.jpg', 'chaussure', 5000, 'ballerine blanc'),
(20, 'img19.jpg', 'chaussure', 35000, 'chaussure noire'),
(21, 'img20.jpeg', 'iphone', 250000, 'memoire 32G'),
(23, 'img21.jpg', 'Samsung', 190000, 'memoire 64G'),
(24, 'cosmetiques.jpg', 'maquillage', 12000, 'bonne qualite');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
