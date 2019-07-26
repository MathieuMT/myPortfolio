-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 26 Juillet 2019 à 21:50
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
-- Structure de la table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `certificatImg` text NOT NULL,
  `certificatTitle` varchar(255) NOT NULL,
  `certificatDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `certificatImg`, `certificatTitle`, `certificatDescription`) VALUES
(1, 'Certificat 1: ', 'certificat_1_comprendre-le-web.jpg', '&quot;Comprendre le web&quot;', 'La culture du Web !'),
(2, 'Certificat 2: ', 'certificat_2_creer-votre-site-web-avec-html5-et-css3.jpg', '&quot;Créer votre site web&quot;', 'Le développement de sites web en HTML5 et CSS3'),
(3, 'Certificat 3: ', 'certificat_3_decouvrez-les-solutions-cms.jpg', '&quot;Les CMS&quot;', 'Les CMS (Content Management System) permettent de lancer rapidement un site web que le client peut modifier à sa guise sans connaissances techniques.'),
(4, 'Certificat 4:', 'certificat_4_apprenez-a-coder-avec-javascript.jpg', '&quot;Apprendre à coder en Javascript&quot;', 'Les bases de la programmation Javascript pour devenir acteur du monde numérique.'),
(5, 'Certificat 5: ', 'certificat_5_creez-des-pages-web-interactives-avec-javascript.jpg', '&quot;Créer des pages web interactives avec Javascript&quot;', 'Grâce au langage de programmation Javascript nous rendons nos sites vivants et interactifs.'),
(6, 'Certificat 6: ', 'certificat_6_introduction-a-jquery.jpg', '&quot;Introduction à jQuery&quot;', 'jQuery est une bibliothèque Javascript qui permet de réaliser certains effets avancés sur les sites web.'),
(7, 'Certificat 7: ', 'certificat_7_les-cles-pour-reussir-son-referencement.jpg', '&quot;Les clès pour réussir son référencement web&quot;', 'Le SEO (Search Engine Optimization) sert à mieux référencer les pages d\'un site web et optimiser leur positionnement parmis les résultats de recherche des moteurs. Les notions de pertinence et de notoriété sont central au référencement des pages web d\'un site.'),
(8, 'Certificat 8: ', 'certificat_8_concever-votre-site-web-avec-PHP-et-MySQL.jpg', '&quot;Concevoir son site web avec PHP et MySQL&quot;', 'Le PHP (Hypertext Preprocessor) est un langage de programmation qui permet la création de sites web dynamique. Et MySQL (Structured Query Langage) est un langage standard pour le traitement des données stockées en base de données dans différentes tables.'),
(9, 'Certificat 9: ', 'certificat_9_realisez-des-sites-modernes-et-beaux-grace-a-wordpress-min copie.jpg', '&quot;Réalisez des sites modernes et beaux grâce à WordPress&quot;', 'WordPress est un CMS pour créer des sites web.'),
(10, 'Certificat 10: ', 'certificat_10_adopter-une-architecture-MVC-en-PHP.jpg', '&quot;Adopter une architecture MVC en PHP&quot;', 'Les sites professionnel ont une architecture MVC avec une programmation orientées objet (POO).');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `subject`, `comments`, `comment_date`) VALUES
(1, 'Mathieu', 'de Millo Terrazzani', '2mmtmc@gmail.com', 'Test d&#39;envoie ', 'Je m&#39;envoie un 1er message test aussi bien en BDD que par email ', '0000-00-00 00:00:00'),
(2, 'Mathieu', 'de Millo ', 'mmtmc@hotmail.com', 'Test 2', 'J&#39;envoie un email 2', '0000-00-00 00:00:00'),
(3, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test d&#39;envoie', 'En BDD et par email : 1', '0000-00-00 00:00:00'),
(4, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'Test d&#39;envoie', 'Par email et en BDD ! ', '0000-00-00 00:00:00'),
(5, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test d&#39;envoie', '1/ BDD   EMAIL ', '0000-00-00 00:00:00'),
(6, 'mathieu', 'de millo', 'mmtmc@hotmail.com', 'test d&#39;envoie', 'RE TEST', '0000-00-00 00:00:00'),
(7, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test d&#39;envoi', 'en BDD et par email', '0000-00-00 00:00:00'),
(8, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test d&#39;envoie', 'bdd et email ...', '0000-00-00 00:00:00'),
(9, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoi', 'bdd ', '0000-00-00 00:00:00'),
(10, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoie', 'bdd et email', '0000-00-00 00:00:00'),
(11, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoie', 'bdd et email', '0000-00-00 00:00:00'),
(12, 'Baptiste', 'de Millo', 'bdemillo@mac.com', 'test d&#39;envoie', 'bdd et mail ...', '0000-00-00 00:00:00'),
(13, 'Baptiste', 'de Millo', 'bdemillo@mac.com', 'test envoi', 'bdd - emil 2', '0000-00-00 00:00:00'),
(14, 'Baptiste', 'de Millo', 'bdemillo@mac.com', 'test envoie', 'bdd ', '0000-00-00 00:00:00'),
(15, 'zemfhn', 'selfhi', '2mmtmc@gmail.com', 'test envoi', 'bdd email ...', '0000-00-00 00:00:00'),
(16, 'lol', 'lol', 'mmtmc@hotmail.com', 'test envoi', 'mznlk,nz', '0000-00-00 00:00:00'),
(17, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoi', 'en bdd ...', '0000-00-00 00:00:00'),
(18, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoi', 'lizefhoihzef', '0000-00-00 00:00:00'),
(19, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoi', 'lkfjkzejflonze', '0000-00-00 00:00:00'),
(20, 'mi', 'mo', 'mmtmc@hotmail.com', 'test', 'bdd', '0000-00-00 00:00:00'),
(21, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoi', 'mofnlnd', '0000-00-00 00:00:00'),
(22, 'Mi', 'MU', 'mmtmc@hotmail.com', 'test envoi', 'lakdhlkhkln', '0000-00-00 00:00:00'),
(23, 'Mi', 'Mo', 'mmtmc@hotmail.com', 'test envoi', 'mljdmmljmlfj', '0000-00-00 00:00:00'),
(24, 'Mi', 'Mo', 'mmtmc@hotmail.com', 'test envoi', 'msdlfjmljsf', '0000-00-00 00:00:00'),
(25, 'mi', 'mo', 'mmtmc@hotmail.com', 'test envoi', 'jnlsdnlnlknslnl', '0000-00-00 00:00:00'),
(26, 'LO ', 'LI', 'mmtmc@hotmail.com', 'test envoi', 'moihefoi', '0000-00-00 00:00:00'),
(27, 'LO', 'LI', 'mmtmc@hotmail.com', 'test envoi', 'sflsjfojosdjf', '0000-00-00 00:00:00'),
(28, 'HO', 'HA', 'mmtmc@hotmail.com', 'test envoi', 'sldfihsflhsfln', '0000-00-00 00:00:00'),
(29, 'TU', 'TE', 'mmtmc@hotmail.com', 'test envoi', 'fknsflksfps', '0000-00-00 00:00:00'),
(30, 'mat', 'mat', '2mmtmc@gmail.com', 'test d&#39;envoi', 'lhqldhlzef', '0000-00-00 00:00:00'),
(31, 'mat', 'mat', '2mmtmc@gmail.com', 'test d&#39;envoi', 'lshfmjmzef', '0000-00-00 00:00:00'),
(32, 'mat', 'mat', '2mmtmc@gmail.com', 'test d&#39;envoi', 'smefjmljsf', '0000-00-00 00:00:00'),
(33, 'mi', 'mo', 'mmtmc@hotmail.com', 'test d&#39;envoi', 'msdjvmjhsmdv', '0000-00-00 00:00:00'),
(34, 'la', 'la', 'mmtmc@hotmail.com', 'test d&#39;envoi', 'lkshdvmh', '0000-00-00 00:00:00'),
(35, 'ti', 'to', 'mmtmc@hotmail.com', 'test d&#39;envoi', 'mjsdmlhsmdf', '0000-00-00 00:00:00'),
(36, 'Mathieu', 'de Millo', 'mmtmc@hotmail.com', 'test envoie 2', 'bdd et email !!!', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slideImg` text NOT NULL,
  `work_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `profession` varchar(255) NOT NULL,
  `description` longtext,
  `avatar` text NOT NULL,
  `mini_avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `pass`, `profession`, `description`, `avatar`, `mini_avatar`) VALUES
(1, 'MathieuMT', 'Mathieu', 'de Millo Terrazzani', '', '$2y$10$Sq6YcMQrfbNXsKEHHC8NtOgqWhGSgva0XI50E5ZUnVdSIn3Y34KiW', 'Développeur WEB', 'Passionné par le développement web, j\'ai suivi une formation professionnelle chez OpenClassRooms, qui est une école en ligne qui propose à ses membres des cours certifiants et des parcours débouchant sur un métier d\'avenir. Je porte autant d\'intérêt pour le développement front-end que back-end. Mon but est d\'associer design et technologie, afin de créer des sites internet attractifs ainsi que des applications web, afin de rendre l\'outil information plus humain. Je suis capable d\'utiliser différentes technologies comme HTML5 , CSS3 et son frameworks Bootstrap 4, Javascript et son frameworks jQuery, PHP avec une architecture MVC ou bien d\'utiliser des CMS comme WordPress. À travers la visite de mon Portfolio, vous découvrirez l’acquisition de mes certificats et vous pourrez aussi visualiser les projets réalisés chez OpenClassRooms.', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `workImg` text NOT NULL,
  `workTitle` varchar(255) NOT NULL,
  `workDescription` text NOT NULL,
  `workCategory` varchar(255) NOT NULL,
  `workLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workId` (`work_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `work_slides` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
