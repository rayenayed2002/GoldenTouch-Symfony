-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 06 avr. 2025 à 15:48
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `byd`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` json DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifier` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_u`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `email`, `username`, `prenom`, `nom`, `role`, `password`, `verifier`, `created_at`, `reset_token`, `photo`) VALUES
(1, 'admin@admin.fr', 'nour', 'nour', 'nour', '[\"ROLE_ADMIN\"]', '$2y$13$K5X5d54K/yV/gKQAQs8U5.p.uhMtEymDHcZtzQXrT0NXDl97p.8zu', 0, NULL, NULL, NULL),
(3, 'malek@live.fr', 'malek', 'malek', 'malek', '[\"ROLE_USER\"]', '$2y$13$EXtTxvbDJ.NdLENOTDCPkuNATQOY29.mdi/NFJWzMgHwXesb0R9nK', 1, NULL, NULL, NULL),
(4, 'nour@nour.fr', 'nour', 'nour', 'nour', '[]', 'admin', 1, NULL, NULL, NULL),
(5, 'malek.kadri@esprit.tn', 'malekmalek', 'malek', 'malek', '[\"ROLE_USER\"]', '$2y$13$oHbt5WoouKYnGkwI03MLveJy5nSjKLEZmooNGlwV5RtPkcArDLl2q', 0, NULL, NULL, NULL),
(6, 'kadrimalek10@gmail.com', 'malouk', 'malek', 'malek', '[\"ROLE_USER\"]', '$2y$13$6aV8mgqT/P2uXsBzvsftiubYfhktpD.vqXxV/Sc7vSOilNrmmFvdO', 1, NULL, NULL, 'Se-3-67f29ee8c3df2.png'),
(7, 'malek@live.fr1', 'malek', 'malek', 'kadri', '[\"ROLE_ADMIN\"]', '$2y$13$fxhINSTXNoReoyK.nhFrk.HB0jWsH4tw.XRGGlm.d18pFhKuFm74e', 0, NULL, NULL, NULL),
(8, 'souissieya2018@gmail.com', 'malek@live.fr2', 'eya', 'souissi', '[\"ROLE_USER\"]', '$2y$13$9g.ctYEevg4x1zdDsiJn7upjeUqPJuumCpZt1AhEM8i7iYysoAbg6', 0, NULL, NULL, NULL),
(9, 'souissieya2018@gmail.com1', 'malek@live.fr22', 'eya', 'souissi', '[\"ROLE_USER\"]', '$2y$13$NWoiS.0zDbumsZn1EgSdquO73QhGt6x4KNxOF/tlk4aLhjRy1/DYu', 1, NULL, NULL, NULL),
(10, 'souissieya2018@gmail.com22', 'eya@example.com22', 'eya', 'souissi', '[\"ROLE_ADMIN\"]', '$2y$13$NV7AiFjP2jQwAX2aCObgP.kGRaZS6H8Yr9NHl.dSBLXIMf0JZgAU6', 0, NULL, NULL, NULL),
(11, 'souissieeeya2018@gmail.com', 'souissieyzzza2018@gmail.com22', 'eya', 'souissii', '[]', '12345678', 0, NULL, NULL, 'Se-3-67f29daa1a4a2.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
