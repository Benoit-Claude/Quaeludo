-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 23, 2021 at 07:50 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `quaeludo`
--

-- --------------------------------------------------------
--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
                             `ID_CATEGORIE` int(11) NOT NULL,
                             `NOM_CATEGORIE` varchar(50) NOT NULL,
                             `DESC_CATEGORIE` text DEFAULT NULL,
                             `IMAGE_CATEGORIE` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------
--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
                          `ID_GROUPE` int(11) NOT NULL,
                          `NOM_GROUPE` varchar(50) NOT NULL,
                          `DESC_GROUPE` text DEFAULT NULL,
                          `IMAGE_GROUPE` varchar(500) DEFAULT NULL,
                          `ID_JOUEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------
--
-- Table structure for table `joueur`
--

CREATE TABLE `joueur` (
                          `ID_JOUEUR` int(11) NOT NULL,
                          `PSEUDO` varchar(50) NOT NULL,
                          `NOM_JOUEUR` varchar(50) NOT NULL,
                          `PRENOM` varchar(50) NOT NULL,
                          `DATENAISSANCE` date NOT NULL,
                          `ADRESSEMAIL` varchar(50) NOT NULL,
                          `MDP` varchar(50) NOT NULL,
                          `IMAGE_JOUEUR` varchar(500) DEFAULT NULL,
                          `ID_CATEGORIE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------
--
-- Table structure for table `jeu`
--

CREATE TABLE `jeu` (
                       `ID_JEU` int(11) NOT NULL,
                       `NOM_JEU` varchar(50) NOT NULL,
                       `IMAGE_JEU` varchar(500) DEFAULT NULL,
                       `DESC_JEU` varchar(500) DEFAULT NULL,
                       `AGEMIN` int(11) NOT NULL,
                       `AGEMAX` int(99) DEFAULT NULL,
                       `DUREEMIN` time NOT NULL,
                       `DUREEMAX` time DEFAULT NULL,
                       `JOUEURMIN` int(1) NOT NULL,
                       `JOUEURMAX` int(2) NOT NULL,
                       `LIENAFFILIE` varchar(500) DEFAULT NULL,
                       `ID_CATEGORIE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------
--
-- Table structure for table `ludothèque`
--

CREATE TABLE `ludotheque` (
                              `ID_LUDOTHEQUE` int(11) NOT NULL,
                              `NOM_LUDOTHEQUE` varchar(50) NOT NULL,
                              `IMAGE_LUDOTHEQUE` varchar(500) DEFAULT NULL,
                              `DESC_LUDOTHEQUE` varchar(500) DEFAULT NULL,
                              `ID_JOUEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------
--
-- Table structure for table `contient`
--

CREATE TABLE `contient` (
                            `ID_JEU` int(11) NOT NULL,
                            `ID_LUDOTHEQUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
                          `ID_JEU` int(11) NOT NULL,
                          `ID_CATEGORIE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prefere`
--

CREATE TABLE `prefere` (
                           `ID_JOUEUR` int(11) NOT NULL,
                           `ID_CATEGORIE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------
--
-- Table structure for table `regroupe`
--

CREATE TABLE `regroupe` (
                            `ID_GROUPE` int(11) NOT NULL,
                            `ID_JOUEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
--
-- Table structure for table `possède`
--

CREATE TABLE `possede` (
                           `ID_LUDOTHEQUE` int(11) NOT NULL,
                           `ID_JOUEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------
--
-- Table structure for table `aime`
--

CREATE TABLE `aime` (
                        `ID_CATEGORIE` int(11) NOT NULL,
                        `ID_GROUPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





-- ---------------------------------------------------------- --------------------------------------------------------
-- ---------------------------------------------------------- --------------------------------------------------------
--
-- Indexes for dumped tables
--


-- --------------------------------------------------------
--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
    ADD PRIMARY KEY (`ID_CATEGORIE`);

-- --------------------------------------------------------
--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
    ADD PRIMARY KEY (`ID_GROUPE`),
    ADD UNIQUE KEY `NOM_GROUPE` (`NOM_GROUPE`);

-- --------------------------------------------------------
--
-- Indexes for table `joueur`
--
ALTER TABLE `joueur`
    ADD PRIMARY KEY (`ID_JOUEUR`),
    ADD UNIQUE KEY `PSEUDO` (`PSEUDO`),
    ADD UNIQUE KEY `ADRESSEMAIL` (`ADRESSEMAIL`),
    ADD KEY `ID_CATEGORIE` (`ID_CATEGORIE`);

-- --------------------------------------------------------
--
-- Indexes for table `jeu`
--
ALTER TABLE `jeu`
    ADD PRIMARY KEY (`ID_JEU`),
    ADD KEY `ID_CATEGORIE` (`ID_CATEGORIE`) USING BTREE;

-- --------------------------------------------------------
--
-- Indexes for table `ludotheque`
--
ALTER TABLE `ludotheque`
    ADD PRIMARY KEY (`ID_LUDOTHEQUE`),
    ADD KEY `ID_JOUEUR` (`ID_JOUEUR`) USING BTREE;



-- --------------------------------------------------------
--
-- Indexes for table `contient`
--
ALTER TABLE `contient`
    ADD PRIMARY KEY (`ID_JEU`,`ID_LUDOTHEQUE`),
    ADD KEY `ID_JEU` (`ID_JEU`) USING BTREE,
    ADD KEY `ID_LUDOTHEQUE` (`ID_LUDOTHEQUE`) USING BTREE;

-- --------------------------------------------------------
--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
    ADD PRIMARY KEY (`ID_JEU`,`ID_CATEGORIE`),
    ADD KEY `IDJEU` (`ID_JEU`) USING BTREE,
    ADD KEY `IDCategorie` (`ID_CATEGORIE`) USING BTREE;

-- --------------------------------------------------------
--
-- Indexes for table `prefere`
--
ALTER TABLE `prefere`
    ADD PRIMARY KEY (`ID_JOUEUR`,`ID_CATEGORIE`) USING BTREE,
    ADD UNIQUE KEY `ID_CATEGORIE` (`ID_CATEGORIE`) USING BTREE;

-- --------------------------------------------------------
--
-- Indexes for table `regroupe`
--
ALTER TABLE `regroupe`
    ADD PRIMARY KEY (`ID_GROUPE`,`ID_JOUEUR`),
    ADD KEY `ID_GROUPE` (`ID_GROUPE`) USING BTREE,
    ADD KEY `ID_JOUEUR` (`ID_JOUEUR`) USING BTREE;

-- --------------------------------------------------------
--
-- Table structure for table `possède`
--
ALTER TABLE `possede`
    ADD PRIMARY KEY (`ID_LUDOTHEQUE`,`ID_JOUEUR`),
    ADD KEY `ID_LUDOTHEQUE` (`ID_LUDOTHEQUE`) USING BTREE,
    ADD KEY `ID_JOUEUR` (`ID_JOUEUR`) USING BTREE;


-- --------------------------------------------------------
--
-- Table structure for table `aime`
--
ALTER TABLE `aime`
    ADD PRIMARY KEY (`ID_GROUPE`,`ID_CATEGORIE`),
    ADD KEY `ID_GROUPE` (`ID_GROUPE`) USING BTREE,
    ADD KEY `ID_CATEGORIE` (`ID_CATEGORIE`) USING BTREE;







-- ---------------------------------------------------------- --------------------------------------------------------
-- ---------------------------------------------------------- --------------------------------------------------------
--
-- AUTO_INCREMENT for dumped tables
--

-- --------------------------------------------------------
--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
    MODIFY `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------
--
-- AUTO_INCREMENT for table `groupe`
--
ALTER TABLE `groupe`
    MODIFY `ID_GROUPE` int(11) NOT NULL AUTO_INCREMENT;


-- --------------------------------------------------------
--
-- AUTO_INCREMENT for table `joueur`
--
ALTER TABLE `joueur`
    MODIFY `ID_JOUEUR` int(11) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------
--
-- AUTO_INCREMENT for table `jeu`
--
ALTER TABLE `jeu`
    MODIFY `ID_JEU` int(11) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------
--
-- AUTO_INCREMENT for table `ludotheque`
--
ALTER TABLE `ludotheque`
    MODIFY `ID_LUDOTHEQUE` int(11) NOT NULL AUTO_INCREMENT;













-- ---------------------------------------------------------- --------------------------------------------------------
-- ---------------------------------------------------------- --------------------------------------------------------
--
-- Constraints for dumped tables
--



-- --------------------------------------------------------
--
-- Constraints for table `categorie`
--

-- --------------------------------------------------------
--
-- Constraints for table `groupe`
--
ALTER TABLE `groupe`
    ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`ID_JOUEUR`) REFERENCES `joueur` (`ID_JOUEUR`);
-- --------------------------------------------------------
--
-- Constraints for table `joueur`
--

ALTER TABLE `joueur`
    ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`ID_CATEGORIE`) REFERENCES `categorie` (`ID_CATEGORIE`);

-- --------------------------------------------------------
--
-- Constraints for table `jeu`
--
ALTER TABLE `jeu`
    ADD CONSTRAINT `jeu_ibfk_1` FOREIGN KEY (`ID_CATEGORIE`) REFERENCES `categorie` (`ID_CATEGORIE`);

-- --------------------------------------------------------
--
-- Constraints for table `ludotheque`
--
ALTER TABLE `ludotheque`
    ADD CONSTRAINT `ludotheque_ibfk_1` FOREIGN KEY (`ID_JOUEUR`) REFERENCES `JOUEUR` (`ID_JOUEUR`);

-- --------------------------------------------------------
--
-- Constraints for table `contient`
--
ALTER TABLE `contient`
    ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`ID_JEU`) REFERENCES `jeu` (`ID_JEU`),
    ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`ID_LUDOTHEQUE`) REFERENCES `ludotheque` (`ID_LUDOTHEQUE`);

-- --------------------------------------------------------
--
-- Constraints for table `classe`
--
ALTER TABLE `classe`
    ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`ID_JEU`) REFERENCES `jeu` (`ID_JEU`),
    ADD CONSTRAINT `classe_ibfk_2` FOREIGN KEY (`ID_CATEGORIE`) REFERENCES `categorie` (`ID_CATEGORIE`);

-- --------------------------------------------------------
--
-- Constraints for table `prefere`
--
ALTER TABLE `prefere`
    ADD CONSTRAINT `prefere_ibfk_1` FOREIGN KEY (`ID_JOUEUR`) REFERENCES `joueur` (`ID_JOUEUR`),
    ADD CONSTRAINT `prefere_ibfk_2` FOREIGN KEY (`ID_CATEGORIE`) REFERENCES `categorie` (`ID_CATEGORIE`);

-- --------------------------------------------------------
--
-- Constraints for table `regroupe`
--
ALTER TABLE `regroupe`
    ADD CONSTRAINT `regroupe_ibfk_1` FOREIGN KEY (`ID_GROUPE`) REFERENCES `groupe` (`ID_GROUPE`),
    ADD CONSTRAINT `regroupe_ibfk_2` FOREIGN KEY (`ID_JOUEUR`) REFERENCES `joueur` (`ID_JOUEUR`);


-- --------------------------------------------------------
--
-- Table structure for table `possède`
--
ALTER TABLE `possede`
    ADD CONSTRAINT `possede_ibfk_1` FOREIGN KEY (`ID_LUDOTHEQUE`) REFERENCES `ludotheque` (`ID_LUDOTHEQUE`),
    ADD CONSTRAINT `possede_ibfk_2` FOREIGN KEY (`ID_JOUEUR`) REFERENCES `joueur` (`ID_JOUEUR`);

-- --------------------------------------------------------
--
-- Table structure for table `aime`
--
ALTER TABLE `aime`
    ADD CONSTRAINT `aime_ibfk_1` FOREIGN KEY (`ID_GROUPE`) REFERENCES `groupe` (`ID_GROUPE`),
    ADD CONSTRAINT `aime_ibfk_2` FOREIGN KEY (`ID_CATEGORIE`) REFERENCES `categorie` (`ID_CATEGORIE`);





-- --------------------------------------------------------
--
-- Donnée rentrée
--

-- --------------------------------------------------------
--
-- Donnée rentrée `categorie`
--
INSERT INTO `categorie` (`ID_CATEGORIE`, `NOM_CATEGORIE`, `DESC_CATEGORIE`, `IMAGE_CATEGORIE`) VALUES
(1, 'Dés', NULL, NULL),
(2, 'Adresse', NULL, NULL),
(3, 'Ambiance', NULL, NULL),
(4, 'Cartes', NULL, NULL),
(5, 'Plateau', NULL, NULL),
(6, 'Mémoire', NULL, NULL),
(7, 'Connaissance', NULL, NULL),
(8, 'Lettre', NULL, NULL),
(9, 'Logique', NULL, NULL),
(10, 'Pion', NULL, NULL),
(11, 'Éducatif', NULL, NULL),
(12, 'Enquête', NULL, NULL),
(13, 'Coopération', NULL, NULL),
(14, 'Bluff', NULL, NULL),
(15, 'Stratégie', NULL, NULL),
(16, 'Gestion', NULL, NULL),
(17, 'Hasard', NULL, NULL),
(18, 'Rôle', NULL, NULL),
(19, 'Créatif', NULL, NULL);


-- --------------------------------------------------------
--
-- Donnée rentrée `joueur`
--
INSERT INTO `joueur` (`ID_JOUEUR`, `PSEUDO`, `NOM_JOUEUR`, `PRENOM`, `DATENAISSANCE`, `ADRESSEMAIL`, `MDP`, `IMAGE_JOUEUR`, `ID_CATEGORIE`) VALUES
(1, 'Azlenor', 'CLAUDE', 'Benoît', '2002-02-15', 'benoit.claude14@gmail.com', 'benoitclaude14', NULL, 16),
(2, 'Diverair', 'BONIN', 'Raphaël', '2002-02-04', 'raph.bonin@gmail.com', 'raphaelb2002', NULL, 12),
(3, 'Nasobol90', 'BAUMANN', 'Nathan', '2002-10-02', 'nathan.baumann90@gmail.com', 'nathanbaumann90', NULL, 4);


-- --------------------------------------------------------
--
-- Donnée rentrée `groupe`
--
INSERT INTO `groupe` (`ID_GROUPE`, `NOM_GROUPE`, `DESC_GROUPE`, `IMAGE_GROUPE`, `ID_JOUEUR`) VALUES
(1, 'Staff', 'Groupe du Staff', '//images/Logos/logo.png', 2),
(2, 'Développeur', 'Groupe des développeurs du projet', '//images/Logos/logo.png', 2);


-- --------------------------------------------------------
--
-- Donnée rentrée `jeu`
--
INSERT INTO `jeu` (`ID_JEU`, `NOM_JEU`, `IMAGE_JEU`, `DESC_JEU`, `AGEMIN`, `AGEMAX`, `DUREEMIN`, `DUREEMAX`, `JOUEURMIN`, `JOUEURMAX`, `LIENAFFILIE`, `ID_CATEGORIE`) VALUES
(1, 'Détective', NULL, 'Détective un jeu d\'enquête Moderne', 16, NULL, '02:00:00','03:00:00', 1, 5, 'https://amzn.to/3hPkz1I', 12),
(2, 'Chronicle Of Crime 1400', NULL, 'Nous sommes en 1400 et vous êtes Abelard Lavel, un chevalier vient à Paris. Depuis votre tendre enfance, vous êtes hanté par des rêves prophétiques dépeignant des crimes, passés et futurs. Vous êtes parvenu à faire bon usage de votre don, résolvant des mystères que nul autre ne réussissait à éclaircir. Grâce à votre réputation sans cesse croissante, le peuple de Paris vous appelle au secours. Leur viendrez-vous en aide ?', 12, NULL, '01:00:00', '01:30:00', 1, 4, 'https://amzn.to/3vj4d5w', 12),
(3, 'Myto', NULL, 'Permis de tricher', 7, NULL, '00:25:00', NULL, 3, 5, 'https://amzn.to/3fg8q4m', 4),
(4, 'Imaginarium', NULL, 'vous incarnez un machiniste qui commence son premier jour de travail dans une incroyable usine: la manufacture des rêves !', 14, NULL, '01:30:00', NULL, 2, 5, 'https://amzn.to/3fLm66u', 16);


-- --------------------------------------------------------
--
-- Donnée rentrée `ludotheque`
--
INSERT INTO `ludotheque` (`ID_LUDOTHEQUE`, `NOM_LUDOTHEQUE`, `IMAGE_LUDOTHEQUE`, `DESC_LUDOTHEQUE`, `ID_JOUEUR`) VALUES
(1, 'Ma ludothèque', NULL, NULL, 1),
(2, 'Ma ludothèque', NULL, NULL, 2),
(3, 'Ma ludothèque', NULL, NULL, 3);

-- --------------------------------------------------------
--
-- Donnée rentrée `contient`
--
INSERT INTO `contient` (`ID_JEU`, `ID_LUDOTHEQUE`) VALUES
(1, 2),
(2, 2),
(3, 3),
(4, 1);


-- --------------------------------------------------------
--
-- Donnée rentrée `classe`
--
INSERT INTO `classe` (`ID_JEU`, `ID_CATEGORIE`) VALUES
(1, 12),
(2, 12),
(4, 5),
(4, 16);

-- --------------------------------------------------------
--
-- Constraints for table `prefere`
--
INSERT INTO `prefere` (`ID_JOUEUR`, `ID_CATEGORIE`) VALUES
(3, 4),
(2, 12),
(1, 16);

-- --------------------------------------------------------
--
-- Donnée rentrée `regroupe`
--
INSERT INTO `regroupe` (`ID_GROUPE`, `ID_JOUEUR`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2);

-- --------------------------------------------------------
--
-- Donnée rentrée `possède`
--
INSERT INTO `possede` (`ID_LUDOTHEQUE`, `ID_JOUEUR`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------
--
-- Donnée rentrée `aime`
--
INSERT INTO `aime` (`ID_CATEGORIE`, `ID_GROUPE`) VALUES
(13, 1),
(13, 2);
