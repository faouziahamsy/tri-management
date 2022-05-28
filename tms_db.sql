-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 mai 2022 à 15:32
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tms_db2`
--

-- --------------------------------------------------------

--
-- Structure de la table `cellule`
--

CREATE TABLE `cellule` (
  `id_sujet` int(5) NOT NULL,
  `id_cellule` int(2) NOT NULL,
  `groupe` varchar(256) NOT NULL,
  `sujet` text NOT NULL,
  `id_encadrant` int(2) NOT NULL,
  `description` text NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cellule`
--

INSERT INTO `cellule` (`id_sujet`, `id_cellule`, `groupe`, `sujet`, `id_encadrant`, `description`, `date_debut`, `date_fin`) VALUES
(27, 1, 'PFA1IITE2', 'Correction automatique des QCMs avec JAVA et OpenCV', 26, 'XXX', '2022-05-02', '2022-04-05'),
(28, 1, 'PFA2ISIC2', 'Conception et realisation d\'un bras manipulateur', 8, 'XXX', '2022-03-11', '2022-05-05'),
(30, 1, 'PFA1IITE1', 'Python s Real Time Calculation Thermal Comfort Tool', 31, 'XXX', '2022-05-05', '2022-12-05'),
(34, 3, 'HIND', 'XX', 22, 'XX', '2022-05-05', '2022-05-29'),
(36, 1, 'GRP5', 'application web ', 1, 'application web pour la gestion administrative du département tri ', '2022-02-21', '2022-05-23');

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

CREATE TABLE `element` (
  `id_element` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `intitule_element` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `emplois1`
--

CREATE TABLE `emplois1` (
  `id` int(5) NOT NULL,
  `heuredebut` varchar(10) NOT NULL,
  `heurefin` varchar(10) NOT NULL,
  `jour` varchar(20) NOT NULL,
  `responsable` varchar(200) NOT NULL,
  `module` varchar(200) NOT NULL,
  `salle` varchar(4) NOT NULL,
  `s_d` varchar(5) NOT NULL,
  `s_fin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emplois1`
--

INSERT INTO `emplois1` (`id`, `heuredebut`, `heurefin`, `jour`, `responsable`, `module`, `salle`, `s_d`, `s_fin`) VALUES
(23, '08h30', '10h20', 'Lundi', '29', '24', 'B1', ' S01', ' S13'),
(24, '13h30', '15h20', 'Mardi', '8', '28', 'B11', ' S01', ' S14'),
(25, '08h30', '10h20', 'Jeudi', '30', '21', 'B1', ' S01', ' S13'),
(26, '10h30', '12h20', 'Jeudi', '30', '21', 'B1', ' S01', ' S13'),
(28, '08h30', '10h20', 'Mardi', '34', '32', 'B1', ' S01', ' S13'),
(29, '10h30', '12h20', 'Mardi', '22', '1', 'B1', ' S01', ' S12'),
(30, '10h30', '12h20', 'Lundi', '32', '24', 'b1', ' S1', ' S2'),
(31, '10h30', '12h20', 'Lundi', '29', '24', 'B1', ' S01', ' S12'),
(36, '08h30', '10h20', 'Lundi', '22', '28', 'B1', ' S01', ' S13'),
(37, '08h30', '10h20', 'Lundi', '22', '28', 'B1', ' S01', ' S13'),
(38, '08h30', '10h20', 'Lundi', '22', '28', 'B1', ' S01', ' S13'),
(39, '08h30', '10h20', 'Lundi', '22', '28', 'B1', ' S01', ' S13'),
(40, '08h30', '10h20', 'Lundi', '22', '28', 'B1', ' S01', ' S13'),
(41, '08h30', '10h20', 'Lundi', '22', '28', 'B1', ' S01', ' S13'),
(42, '10h30', '12h20', 'Mardi', '34', '24', 'B1', ' S01', ' S12'),
(43, '08h30', '10h20', 'Mercredi', '22', '28', 'B1', ' S01', ' S13'),
(44, '13h30', '15h20', 'Mercredi', '8', '34', '', ' ', ' '),
(45, '10h30', '12h20', 'Lundi', '34', '34', 'B11', ' S01', ' S14'),
(46, '08h30', '10h20', 'Mardi', '8', '24', 'B1', ' S01', ' S13'),
(47, '13h30', '15h20', 'Jeudi', '32', '21', 'B1', ' S01', ' S13');

-- --------------------------------------------------------

--
-- Structure de la table `emplois2`
--

CREATE TABLE `emplois2` (
  `id` int(5) NOT NULL,
  `heuredebut` varchar(10) NOT NULL,
  `heurefin` varchar(10) NOT NULL,
  `jour` varchar(20) NOT NULL,
  `responsable` varchar(200) NOT NULL,
  `module` varchar(200) NOT NULL,
  `salle` varchar(4) NOT NULL,
  `s_d` varchar(5) NOT NULL,
  `s_fin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emplois2`
--

INSERT INTO `emplois2` (`id`, `heuredebut`, `heurefin`, `jour`, `responsable`, `module`, `salle`, `s_d`, `s_fin`) VALUES
(0, '10h30', '12h20', 'Lundi', '32', '28', 'B1', ' S01', ' S13'),
(0, '10h30', '12h20', 'Mercredi', '22', '36', 'C11', ' S01', ' S12'),
(0, '13h30', '15h20', 'Mardi', '25', '28', 'B1', ' S01', ' S12'),
(0, '08h30', '10h20', 'Mardi', '34', '28', 'B11', ' S01', ' S12'),
(0, '10h30', '12h20', 'Mercredi', '1', '28', 'B1', ' S01', ' S12'),
(0, '08h30', '10h20', 'Mercredi', '30', '21', 'B1', ' S01', ' S13');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id_eval` int(11) NOT NULL,
  `heuredebut` varchar(10) NOT NULL,
  `heurefin` varchar(10) NOT NULL,
  `jour` varchar(256) NOT NULL,
  `responsable` varchar(256) NOT NULL,
  `module` varchar(256) NOT NULL,
  `salle` varchar(10) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`id_eval`, `heuredebut`, `heurefin`, `jour`, `responsable`, `module`, `salle`, `type`) VALUES
(0, '15h30', '17h20', 'Samedi', '34', '1', 'B1', 'Examen'),
(1, '10h30', '12h20', 'Mercredi', '8', '28', 'B1', ' controle');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation1`
--

CREATE TABLE `evaluation1` (
  `id_eval` int(11) NOT NULL,
  `heuredebut` varchar(10) NOT NULL,
  `heurefin` varchar(10) NOT NULL,
  `jour` varchar(256) NOT NULL,
  `responsable` varchar(256) NOT NULL,
  `module` varchar(256) NOT NULL,
  `salle` varchar(10) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evaluation1`
--

INSERT INTO `evaluation1` (`id_eval`, `heuredebut`, `heurefin`, `jour`, `responsable`, `module`, `salle`, `type`) VALUES
(1, '10h30', '12h20', 'Mercredi', '34', '24', 'B1', ' controle'),
(2, '13h30', '15h20', 'Mardi', '22', '21', 'B1', ' controle'),
(3, '08h30', '10h20', 'Mardi', '32', '21', 'B1', ' controle'),
(5, '13h30', '15h20', 'Samedi', '22', '21', 'B1', 'Examen de tp'),
(6, '10h30', '12h20', 'Jeudi', '30', '21', 'C11', 'Examen');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(5) NOT NULL,
  `type_fonction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `type_fonction`) VALUES
(1, 'Responsable Cellule'),
(2, 'Coordonnateur Filiere'),
(3, 'Membre College'),
(4, 'Enseignant');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `module_id` int(30) NOT NULL,
  `code_module` varchar(20) NOT NULL,
  `intitule` text NOT NULL,
  `element1` varchar(200) NOT NULL,
  `inter1` varchar(200) NOT NULL,
  `element2` varchar(200) NOT NULL,
  `inter2` varchar(200) NOT NULL,
  `element3` varchar(200) NOT NULL,
  `inter3` varchar(200) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `note` varchar(400) NOT NULL,
  `id_semestre` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`module_id`, `code_module`, `intitule`, `element1`, `inter1`, `element2`, `inter2`, `element3`, `inter3`, `responsable`, `note`, `id_semestre`) VALUES
(21, 'm 2 S1', 'base de données  ', '', '', '', '', '', '', '7', 'ss', 1),
(22, 'm1 S2', 'maths', '', '', '', '', '', '', '6', 'ccc', 2),
(23, 'M1 S3', 'test', '', '', '', '', '', '', '7', 'cc', 3),
(24, 'M5 S1', 'Hyperfréquences ', '', '', '', '', '', '', '7', 'xx', 1),
(25, 'm3 s5', 'TSS', '', '', '', '', '', '', '7', 'xxx', 5),
(27, 'm1 S4', 'xxx', '', '', '', '', '', '', '9', 'x', 4),
(28, 'm 2 S1', 'java', '', '', '', '', '', '', '9', 'v', 1),
(29, 'm4 s5', 'test', '', '', '', '', '', '', '9', 'bb', 5),
(30, 'M2-S4', 'PC', '', '', '', '', '', '', '7', 'XX', 4),
(31, 'M3', 'Sécurité', '', '', '', '', '', '', '16', 'M', 3),
(34, 'M1 S1', 'réseaux et protocoles', 'réseaux', '22', 'protocoles', '22', '', '', '', 'E1 * E2 *0.5', 1),
(46, 'M1 S1', '', '', '', '', '', '', '31', '', '', 1),
(49, 'M2 S1', 'module 2', 'TEST 1', 'asmaa hannani', 'TEST2', 'Abdelfatteh Haidine', '', '', '1', 'E1 * E2 *0.5', 1),
(50, 'M1 S1', 'réseaux et protocoles', 'E1', 'Abdelhak Aqqal', 'protocoles', 'Ali Kartit', '', '', '1', 'E1 * E2 *0.5', 1);

-- --------------------------------------------------------

--
-- Structure de la table `module1`
--

CREATE TABLE `module1` (
  `module_id` int(30) NOT NULL,
  `code_module` varchar(20) NOT NULL,
  `intitule` text NOT NULL,
  `element1` varchar(200) NOT NULL,
  `inter1` varchar(200) NOT NULL,
  `element2` varchar(200) NOT NULL,
  `inter2` varchar(200) NOT NULL,
  `element3` varchar(200) NOT NULL,
  `inter3` varchar(200) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `note` varchar(400) NOT NULL,
  `id_semestre` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module1`
--

INSERT INTO `module1` (`module_id`, `code_module`, `intitule`, `element1`, `inter1`, `element2`, `inter2`, `element3`, `inter3`, `responsable`, `note`, `id_semestre`) VALUES
(5, 'M1 S1', 'réseaux et protocoles', 'réseaux', 'Aziz Dahbi', 'protocoles', 'Abdelhak Aqqal', '', '', '1', 'E1 * E2 *0.5', 1);

-- --------------------------------------------------------

--
-- Structure de la table `project_list`
--

CREATE TABLE `project_list` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `manager_id` int(30) NOT NULL,
  `user_ids` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_seance` int(5) NOT NULL,
  `num_seance` int(2) NOT NULL,
  `jour` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `num_seance`, `jour`) VALUES
(1, 1, 'lundi'),
(2, 2, 'lundi'),
(3, 3, 'lundi'),
(4, 4, 'lundi');

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(5) NOT NULL,
  `code_semestre` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `code_semestre`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'S3'),
(4, 'S4'),
(5, 'S5'),
(6, 'S6');

-- --------------------------------------------------------

--
-- Structure de la table `semestre2ite`
--

CREATE TABLE `semestre2ite` (
  `id_semestre` int(5) NOT NULL,
  `code_semestre` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `semestre2ite`
--

INSERT INTO `semestre2ite` (`id_semestre`, `code_semestre`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'S3'),
(4, 'S4'),
(5, 'S5'),
(6, 'S6');

-- --------------------------------------------------------

--
-- Structure de la table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Task Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `id_fonction` int(2) NOT NULL,
  `id_f_c` int(2) DEFAULT 0 COMMENT '1,2,3 pour les cellules. 4,5 pour les filieres'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `avatar`, `date_created`, `id_fonction`, `id_f_c`) VALUES
(1, 'Aziz', 'Dahbi', 'dahbi_aziz@yahoo.fr', '0192023a7bbd73250516f069df18b500', 1, '1652295180_images.png', '2022-05-11 20:26:06', 4, 4),
(8, 'asmaa', 'hannani', 'asmaa.elhannani@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'no-image-available.png', '2022-04-12 21:49:06', 3, 0),
(21, 'Nourredine', 'Assad', 'assad.noureddine@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1652293980_images.png', '2022-05-11 19:33:37', 4, 5),
(22, 'Ali', 'Kartit', 'alikartit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1652294040_images.png', '2022-05-11 19:34:56', 4, 4),
(24, 'Mohamed', 'Hanine', 'm.hanine.ensaj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 4, '1652294220_images.png', '2022-05-11 19:37:06', 4, 5),
(26, 'Rahal', 'Erretahi', 'erratahi2hl@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1652294460_images.png', '2022-05-11 19:41:31', 1, 2),
(27, 'Sanae', 'Elhassani', 'sanae.elhassani@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5, '1652294520_images.png', '2022-05-11 19:42:34', 1, 2),
(28, 'Mohamed', 'Lachgar', 'lachgar.m@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1652294580_images.png', '2022-05-11 19:43:55', 1, 3),
(29, 'Mohamed', 'Eljourmi', 'eljourmi.med@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5, '1652294640_images.png', '2022-05-11 19:44:53', 1, 1),
(30, 'Chafik', 'Baidada', 'chafik29@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5, '1652294700_images.png', '2022-05-11 19:45:52', 1, 3),
(31, 'Fouad', 'Kharroubi', 'fouad.kharroubi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 4, '1652294820_images.png', '2022-05-11 19:47:57', 2, 5),
(32, 'Abdelfatteh', 'Haidine', 'abdel.haidine@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1652294880_images.png', '2022-05-11 19:48:54', 2, 4),
(34, 'Abdelhak', 'Aqqal', 'aqqal_abdelhak@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1652295180_images.png', '2022-05-11 19:53:35', 4, 4),
(37, 'mohamed', 'fertat', 'fertat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '1653139080_WhatsApp Image 2022-05-21 at 13.48.12.jpeg', '2022-05-21 14:18:46', 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cellule`
--
ALTER TABLE `cellule`
  ADD PRIMARY KEY (`id_sujet`);

--
-- Index pour la table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id_element`),
  ADD KEY `module_id_fk1` (`module_id`);

--
-- Index pour la table `emplois1`
--
ALTER TABLE `emplois1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id_eval`);

--
-- Index pour la table `evaluation1`
--
ALTER TABLE `evaluation1`
  ADD PRIMARY KEY (`id_eval`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `id_semestre_fk1` (`id_semestre`);

--
-- Index pour la table `module1`
--
ALTER TABLE `module1`
  ADD PRIMARY KEY (`module_id`);

--
-- Index pour la table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_seance`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Index pour la table `semestre2ite`
--
ALTER TABLE `semestre2ite`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Index pour la table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fonction_fk` (`id_fonction`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cellule`
--
ALTER TABLE `cellule`
  MODIFY `id_sujet` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `element`
--
ALTER TABLE `element`
  MODIFY `id_element` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `emplois1`
--
ALTER TABLE `emplois1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `evaluation1`
--
ALTER TABLE `evaluation1`
  MODIFY `id_eval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `module1`
--
ALTER TABLE `module1`
  MODIFY `module_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_seance` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `semestre2ite`
--
ALTER TABLE `semestre2ite`
  MODIFY `id_semestre` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `element`
--
ALTER TABLE `element`
  ADD CONSTRAINT `module_id_fk1` FOREIGN KEY (`module_id`) REFERENCES `module` (`module_id`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `id_semestre_fk1` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `id_fonction_fk` FOREIGN KEY (`id_fonction`) REFERENCES `fonction` (`id_fonction`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
