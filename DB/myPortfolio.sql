-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Dim 16 Juin 2019 à 17:20
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `myPortfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `certificatImg` text NOT NULL,
  `certificatTitle` varchar(255) NOT NULL,
  `certificatDescription` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `catergory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `description`) VALUES
(1, 'MathieuMT', '$2y$10$0vU3BHAgFG3SJV3q9HrIKun5WjChzYit6BnjJdtyQxkwCX5RwSGwO', 'Developpeur WEB'),
(2, 'Bat', '', 'Chef cuisto'),
(3, 'Bob', '$2y$10$JOZcgPnuH5vH9Oc9OF2jbuykDdA3VKpAJBbwhNrj8lPJYMHIgaiAe', NULL),
(4, 'Seb', '$2y$10$OHAVsQnwTCRzdxWc0EHEL..ufOt9bJv3uYgjFhMKfhdwZ0Br8dELe', NULL),
(5, 'Tim', '$2y$10$GJfqe/n.vsjNQaqm77yemuAdTb0.jLQh3mfleEDH89/utr4gwkjn.', NULL),
(6, 'Olivier', '$2y$10$cBVZkdA5b4DWPquvcWk3Z.nSOV3EDehK54uqi3QSIUBE6OSxR1872', NULL),
(7, 'Bibop', '$2y$10$hVQ/smKm60FAWiaTmWhY7OwrNgBQEABWIl8VGPzeUAr8sdPEIE8Ee', NULL),
(8, 'Tom', '$2y$10$0vU3BHAgFG3SJV3q9HrIKun5WjChzYit6BnjJdtyQxkwCX5RwSGwO', NULL),
(9, 'Leo', '$2y$10$eLhekjNaqxzl/9aMwsibcO7lP3S8qfEvR/eMKyo7Qx06yIlIjpPQS', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `works`
--

INSERT INTO `works` (`id`, `name`, `slug`, `category_id`) VALUES
(1, 'HTML', '', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catergory_id` (`catergory_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
