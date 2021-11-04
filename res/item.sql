-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 03 nov. 2021 à 16:13
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bertaux_sy_collection`
--

--
-- Tronquer la table avant d'insérer `item`
--

TRUNCATE TABLE `item`;
--
-- Déchargement des données de la table `item`
--

INSERT DELAYED INTO `item` (`id`, `name`, `description`, `added_at`, `image`) VALUES(1, 'Pikachu', 'Pokemon Pikachu', '2021-11-01 10:55:30', 'https://m.media-amazon.com/images/I/6196+Z5YgZL._AC_SL1000_.jpg');
INSERT DELAYED INTO `item` (`id`, `name`, `description`, `added_at`, `image`) VALUES(2, 'Beyblade bleu', 'Toupie Beyblade bleu', '2021-11-01 10:56:28', 'https://www.mon-kdo.com/2764-large_default/toupie-burst-victory-valkyrie-beyblade-bleu-avec-lanceur.jpg');
INSERT DELAYED INTO `item` (`id`, `name`, `description`, `added_at`, `image`) VALUES(3, 'Beyblade rose', 'Toupie Beyblade de couleur rose', '2021-11-01 16:26:53', '');
INSERT DELAYED INTO `item` (`id`, `name`, `description`, `added_at`, `image`) VALUES(4, 'Pokeball', 'Pokemon Pokeball rouge et blanche', '2021-11-01 17:39:49', 'https://ae01.alicdn.com/kf/HTB1zREHgBDH8KJjSszcq6zDTFXaN/7-CM-20-pi-ces-BOHS-Gros-Pokeball-Balle-Jouet.jpg');
INSERT DELAYED INTO `item` (`id`, `name`, `description`, `added_at`, `image`) VALUES(5, 'Barbie Sirène', 'Poupée Barbie Sirène étanche et clignotante', '2021-11-02 15:50:29', 'https://lagranderecre-lagranderecre-fr-storage.omn.proximis.com/Imagestorage/imagesSynchro/0/0/3aee6835d7bad42495284d7494a2c18a68b0aabe_IMG-PRODUCT-853604-1.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
