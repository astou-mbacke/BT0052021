-- Base de données : `monsite`
--

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
  `nouveau_mdp` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `identifiant`, `mdp`, `nom`, `prenom`, `email`, `sexe`, `adresse`, `nouveau_mdp`) VALUES
(1, 'astou_mb', '12345', 'Astou', 'MBACKE', 'astoucheikh422@gmail.com', 'f', 'dakar', 0),
(2, 'Ablaye', '1996', 'SARR', 'Ablaye', 'ablaye2@gmail.com', 'm', 'Dakar', 0),
(3, 'toko', '2000', 'MBODJ', 'Tokosel', 'toko@gmail.com', 'f', 'Fouta', 0),
(4, 'soura', '1992', 'TEUW', 'Mansour', 'mansour@gmail.com', 'm', 'Thies', 0),
(5, 'Alya', '1235', 'KHAYATI', 'Alya', 'alya.khati@hotmail.com', 'f', 'Tunise', 0);

