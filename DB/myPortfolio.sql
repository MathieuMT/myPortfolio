-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Sam 27 Juillet 2019 à 14:28
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

--
-- Contenu de la table `slides`
--

INSERT INTO `slides` (`id`, `name`, `slideImg`, `work_id`) VALUES
(1, 'Accueil', 'work1_1.jpg', 1),
(2, 'Services_1', 'work1_2.jpg', 1),
(3, 'Services_2', 'work1_3.jpg', 1),
(4, 'Portfolio_1', 'work1_4.jpg', 1),
(5, 'Portfolio_2', 'work1_5.jpg', 1),
(6, 'Contact', 'work1_6.jpg', 1),
(7, 'Accueil_1', 'work2_1.jpg', 2),
(8, 'Accueil_2', 'work2_2.jpg', 2),
(9, 'Actualités', 'work2_3.jpg', 2),
(10, 'Plus d\'infos', 'work2_4.jpg', 2),
(11, 'Activités du mois', 'work2_5.jpg', 2),
(12, 'Contact', 'work2_6.jpg', 2),
(13, 'Étape_1', 'work3_1.jpg', 3),
(14, 'Étape_2', 'work3_2.jpg', 3),
(15, 'Étape_3', 'work3_3.jpg', 3),
(16, 'Étape_4', 'work3_4.jpg', 3),
(17, 'Étape_5', 'work3_5.jpg', 3),
(18, 'Étape_6', 'work3_6.jpg', 3),
(19, 'Étape_7', 'work3_7.jpg', 3),
(20, 'Accueil_1', 'work4_1.jpg', 4),
(21, 'Accueil_2', 'work4_2.jpg', 4),
(22, 'Chapitres_étape_1', 'work4_3.jpg', 4),
(23, 'Chapitres_étape_2', 'work4_4.jpg', 4),
(24, 'Chapitres_étape_3', 'work4_5.jpg', 4),
(25, 'Chapitres_étape_4', 'work4_6.jpg', 4),
(26, 'Chapitres_étape_5', 'work4_7.jpg', 4),
(27, 'Inscription', 'work4_8.jpg', 4),
(28, 'Connexion', 'work4_9.jpg', 4),
(29, 'Gestion des chapitres_1', 'work4_10.jpg', 4),
(30, 'Gestion des chapitres_2', 'work4_11.jpg', 4),
(31, 'Gestion des chapitres_3 (TinyMCE)', 'work4_12.jpg', 4),
(32, 'Gestion des chapitres_4', 'work4_13.jpg', 4),
(33, 'Gestion des chapitres_5', 'work4_14.jpg', 4),
(34, 'Gestion des commentaires', 'work4_15.jpg', 4),
(35, 'Profil_1', 'work4_16.jpg', 4),
(36, 'Profil_2', 'work4_17.jpg', 4),
(37, 'Gestion des utilisateurs', 'work4_18.jpg', 4);

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
(1, 'MathieuMT', 'Mathieu', 'de Millo Terrazzani', '', '$2y$10$Sq6YcMQrfbNXsKEHHC8NtOgqWhGSgva0XI50E5ZUnVdSIn3Y34KiW', 'Développeur WEB', 'passionné par le développement web, j\'ai suivi une formation professionnelle chez OpenClassRooms, qui est une école en ligne qui propose à ses membres des cours certifiants et des parcours débouchant sur un métier d\'avenir.<br />\r\n<br />\r\nJe porte autant d\'intérêt pour le développement front-end que back-end. Mon but est d\'associer design et technologie, afin de créer des sites internet attractifs ainsi que des applications web, afin de rendre l\'outil information plus humain.<br />\r\n<br />\r\nJe suis capable d\'utiliser différentes technologies comme HTML5, CSS3 et son frameworks Bootstrap 4, Javascript et son frameworks jQuery, PHP avec une architecture MVC ou bien d\'utiliser des CMS comme WordPress. À travers la visite de mon Portfolio, vous découvrirez l’acquisition de mes certificats et vous pourrez aussi visualiser les projets réalisés chez OpenClassRooms.<br />\r\n', '', '');

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
-- Contenu de la table `works`
--

INSERT INTO `works` (`id`, `name`, `workImg`, `workTitle`, `workDescription`, `workCategory`, `workLink`) VALUES
(1, 'Projet 1', 'work1_1.jpg', '&quot;WebAgency&quot;', 'Je viens d\'être embauché par une agence Web, la WebAgency, qui réalise des sites web pour différents clients. La directrice technique de l’agence vous informe que le site actuel est vieillissant et que son équipe a peu de temps pour travailler dessus.<br />\r\n<br />\r\nElle vous propose donc, pour votre première mission, de vous occuper de la refonte du site de l\'agence.<br />\r\n<br />\r\n<br />\r\nCompétences évaluées:<br />\r\n<br />\r\n - Définir le contenu d\'une page web à partir d\'une maquette.<br />\r\n - Gérer la responsivité avec les Media Queries.<br />\r\n - Présenter une réalisation de manière professionnelle.<br />\r\n - Coder la présentation d\'une page web en CSS.<br />\r\n - Coder la structure d\'une page web en HTML.', 'HTML5 - CSS3', 'https://github.com/MathieuMT/WebAgency'),
(2, 'Projet 2', 'work2_1.jpg', '&quot;Personnaliser un thème WordPress&quot;', 'Vous avez un client : l\'office du tourisme de la ville de Strasbourg en France ! Ils souhaitent un site web à l\'image de la ville pour attirer des touristes et informer sur les activités proposées.<br />\r\n<br />\r\nCompétences évaluées:<br />\r\n - Créer une animation avec CSS3.<br />\r\n - Définir la structure de navigation du site.<br />\r\n - Adapter l\'affichage en fonction de la taille de l\'écran.<br />\r\n - Assurer la cohérence graphique du site.<br />\r\n - Appliquer les principes de SEO dans le code HTML.<br />\r\n - Assurer l\'accessibilité du site aux différents types d\'utilisateurs.', 'HTML5 - CSS3 - SEO - Wordpress', 'https://github.com/MathieuMT/WordPress_theme'),
(3, 'Projet 3', 'work3_1.jpg', '&quot;Carte interactive de location de vélo&quot;', 'Vous devez développer une page de type &quot;Single page Application&quot; simulant la réservation de vélos dans une ville. Ces vélos sont répartis dans de nombreuses stations dans la ville. L\'utilisateur doit pouvoir réserver un vélo depuis son navigateur (à condition qu\'il reste des vélos disponibles à la station !). La réservation est alors temporairement enregistrée sur le navigateur du visiteur.<br />\r\n<br />\r\nCette application doit notamment, en s\'appuyant sur JavaScript, afficher une carte avec la liste des stations de location de vélos disponibles dans la ville. <br />\r\n<br />\r\nCompétences évaluées:<br />\r\n - Ecrire un code source lisible.<br />\r\n - Récupérer des données de formulaires en utilisant le langage JavaScript.<br />\r\n - Faire des requêtes HTTP en langage JavaScript.<br />\r\n - Créer des objets simples en JavaScript, contenant des méthodes et des propriétés.', 'HTML5 - CSS3 - JavaScript', 'https://github.com/MathieuMT/Application_Velib_Lyon'),
(4, 'Projet 4 ', 'work4_1.jpg', '&quot;Blog pour un écrivain&quot;', 'Vous venez de décrocher un contrat avec Jean Forteroche, acteur et écrivain. Il travaille actuellement sur son prochain roman, &quot;Billet simple pour l\'Alaska&quot;. Il souhaite innover et le publier par épisode en ligne sur son propre site.<br />\r\n<br />\r\nSeul problème : Jean n\'aime pas WordPress et souhaite avoir son propre outil de blog, offrant des fonctionnalités plus simples. Vous allez donc devoir développer un moteur de blog en PHP et MySQL.<br />\r\n<br />\r\nCompétences évaluées:<br />\r\n - Récupérer la saisie d’un formulaire utilisateur en langage PHP.<br />\r\n - Organiser le code en langage PHP.<br />\r\n - Construire une base de données.<br />\r\n - Analyser les données utilisées par le site ou l’application.<br />\r\n - Récupérer les données d’une base.<br />\r\n - Créer un site Internet, de sa conception à sa livraison.<br />\r\n - Soutenir et argumenter ses propositions.<br />\r\n - Insérer ou modifier les données d’une base.', 'HTML5 - CSS3 - JavaScript - PHP - MySQL', 'https://github.com/MathieuMT/simpleBlog');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slide_work` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
