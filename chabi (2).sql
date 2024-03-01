-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 mars 2024 à 10:27
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chabi`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(255) NOT NULL,
  `categorieImages` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nomCategorie`, `categorieImages`, `status`, `created_at`, `updated_at`) VALUES
(2, 'aaaaa', 'a1_1708969484.png', '1', '2024-02-26 16:41:34', '2024-02-26 16:44:44');

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
CREATE TABLE IF NOT EXISTS `equipes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomPrenom` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `detailPersonnel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `equipeImages` varchar(255) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id`, `nomPrenom`, `domaine`, `titre`, `detailPersonnel`, `created_at`, `updated_at`, `equipeImages`, `status`) VALUES
(2, 'grhtj', 'jkyht', 'fdsghj', 'uiykj', '2024-02-26 09:51:55', '2024-02-26 09:55:07', 'ac1_1708944715.png', 0);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `headers`
--

DROP TABLE IF EXISTS `headers`;
CREATE TABLE IF NOT EXISTS `headers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titres` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `headerImages` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `headers`
--

INSERT INTO `headers` (`id`, `titres`, `description1`, `description2`, `headerImages`, `status`, `created_at`, `updated_at`) VALUES
(2, 'bgfhyj', 'kjyhg', 'uythr', 'noimage.jpg', 1, '2024-02-25 11:55:07', '2024-02-25 11:58:32');

-- --------------------------------------------------------

--
-- Structure de la table `innovations`
--

DROP TABLE IF EXISTS `innovations`;
CREATE TABLE IF NOT EXISTS `innovations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(255) NOT NULL,
  `nomAuteur` varchar(255) NOT NULL,
  `prixDeRevenir` int NOT NULL,
  `breveDescriptionInnov` varchar(255) NOT NULL,
  `completeDescriptionInnov` varchar(255) NOT NULL,
  `innovationImages` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `innovations`
--

INSERT INTO `innovations` (`id`, `nomProjet`, `nomAuteur`, `prixDeRevenir`, `breveDescriptionInnov`, `completeDescriptionInnov`, `innovationImages`, `status`, `created_at`, `updated_at`) VALUES
(2, 'dfghjkl', 'dsfghjkl', 754, 'sdfgtytu', 'rtyu', 'c1_1708870557.png', 0, '2024-02-25 13:15:57', '2024-02-25 13:17:57');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_02_24_125637_create_sliders_table', 1),
(11, '2024_02_24_153722_add_sliders_images_to_sliders', 2),
(12, '2024_02_25_120734_create_headers_table', 3),
(15, '2024_02_25_131021_create_equipes_table', 4),
(16, '2024_02_25_132926_create_innovations_table', 4),
(17, '2024_02_26_101037_add_equipe_images_to_equipes', 5),
(19, '2024_02_26_111359_create_categories_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titres` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slidersImages` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `titres`, `description1`, `description2`, `status`, `created_at`, `updated_at`, `slidersImages`) VALUES
(1, 'Mark', 'Otto', 'Otto', 1, '2024-02-24 13:29:37', '2024-02-25 13:28:25', 'a1_1708871305.png'),
(4, 'fcgvhbjkl', 'dqsfgfh', 'dqsfgfhngj', 1, '2024-02-25 11:12:50', '2024-02-25 11:12:50', 'h1_1708863170.png'),
(3, 'LED', 'LED ROUGES', 'LED GOUGES', 1, '2024-02-25 09:44:22', '2024-02-25 11:00:48', 'a1_1708859909.png'),
(5, 'dfghjkl', 'miouykt', 'jkjlm', 0, '2024-02-25 11:15:11', '2024-02-25 11:15:32', 'b1_1708863311.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
