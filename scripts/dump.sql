-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : jeu. 27 mars 2025 à 06:58
-- Version du serveur : 8.0.32
-- Version de PHP : 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `import_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `import`
--

CREATE TABLE `import` (
  `id` int NOT NULL,
  `business_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_event_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_number` bigint DEFAULT NULL,
  `title` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_vehicle_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_supplement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_registration_date` datetime DEFAULT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `last_event_date` datetime DEFAULT NULL,
  `mark` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prospect_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miles` bigint DEFAULT NULL,
  `energy` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_vn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_vo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_comment` longtext COLLATE utf8mb4_unicode_ci,
  `type_vnvo` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_number_vnvo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_intermediary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `event_origin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `import`
--
ALTER TABLE `import`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
