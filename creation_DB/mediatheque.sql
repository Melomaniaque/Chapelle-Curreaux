-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 oct. 2021 à 21:08
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mediatheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `releaseDate` datetime NOT NULL,
  `description` varchar(250) NOT NULL,
  `author` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `book_id` varchar(60) NOT NULL,
  `available` varchar(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `reservation_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `releaseDate`, `description`, `author`, `gender`, `book_id`, `available`, `user_id`, `reservation_date`, `return_date`) VALUES
(2, 'Harry Potter à l\'école des sorciers', 'https://m.media-amazon.com/images/I/916DM68L6cS._AC_UY218_.jpg', '0000-00-00 00:00:00', 'Harry Potter à l\'école des sorciers est le premier roman de la série littéraire centrée sur le personnage de Harry Potter, créé par J. K. Rowling. Sorti le 26 juin 1997, il est initialement tiré à 500 exemplaires. En France, le roman a été publié le ', 'J. K. Rowling', 'roman', 'bookHPEDS', 'available', '', '2021-10-21', '2021-10-26'),
(10, 'L’INCONNUE DE LA SEINE ', 'https://images-eu.ssl-images-amazon.com/images/I/41lFgBk21-L._SY291_BO1,204,203,200_QL40_ML2_.jpg', '2021-09-21 00:00:00', 'Par une nuit brumeuse de décembre, une jeune femme est repêchée dans la Seine au niveau du Pont-Neuf. Nue, amnésique, mais vivante.\r\nTrès agitée, elle est conduite à l’infirmerie de la préfecture de police de Paris… d’où elle s’échappe au bout de que', 'Guillaume Musso', 'literature', 'hMMK89YzWUnOJ6vM1jva5Bu0lTlR1d5jQ0rIOu7yeiiJidDA1GmtIe5DdVa3', 'available', '', '2021-10-21', '2021-10-26'),
(11, 'UN MONDE DE REVE', 'https://images-na.ssl-images-amazon.com/images/I/41eRz3Pd+KL._SY344_BO1,204,203,200_.jpg', '2014-05-22 00:00:00', 'Isabella et Amadeo forment le couple idéal. Ensemble, ils dirigent une des maisons de couture les plus prestigieuses de Rome et sont les heureux parents d\'un petit garçon. Le rêve se transforme en cauchemar lorsque Amadeo se fait kidnapper puis assas', 'Danielle STEEL', 'roman', 'rKjEMmg7akiVlPI6Jh7pU0RO0nWAXXnIqdVrIyzFKo3N4kPdEQ2ieThwFL2E', 'no', '', NULL, NULL),
(12, 'ASTERIX ET LE GRIFFON- TOME 39 ', 'https://images-na.ssl-images-amazon.com/images/I/51M5271s0JL._SX378_BO1,204,203,200_.jpg', '2021-10-21 00:00:00', 'Astérix, Obélix et Idéfix sont de retour pour une 39e aventure. Accompagnés du plus célèbre des druides, ils s’apprêtent à partir pour un long voyage en quête d’une créature étrange et terrifiante.\r\n\r\nMi-aigle, mi-lion, énigmatique à souhait, le Grif', 'René Goscinny', 'bandedessiner', 'rzYuOUTrOvw03NxCJdvdpJn45vpZ4ov21TRgvyZsc3uiyF8JfhGr6xr4qLOH', 'no', '', NULL, NULL),
(13, 'goldorak', 'https://images-eu.ssl-images-amazon.com/images/I/41aaedPHeQL._SY291_BO1,204,203,200_QL40_ML2_.jpg', '2021-10-15 00:00:00', 'La guerre entre les forces de Véga et Goldorak est un lointain souvenir. Actarus et sa sœur sont repartis sur Euphor tandis qu’Alcor et Vénusia tentent de mener une vie normale. Jusqu’au jour où, issu des confins de l’espace, surgit le plus puissant ', 'Bajram – Dorison – Cossu- Sentenac', 'bd', 'Bkjqfz4uNPwqihcnrE2CzT2r9ZxyQhm44Y1EfJdx3N95zkXecLCaiMX6d7Vv', 'available', '', NULL, NULL),
(14, 'IL N’Y A PAS DE HASARD, QUE DES RENDEZ-VOUS ', 'https://images-na.ssl-images-amazon.com/images/I/41od118ETFL._SX322_BO1,204,203,200_.jpg', '2017-11-01 00:00:00', 'À 33 ans, Nina ne se remet pas de sa rupture avec Paul. Alors qu\'elle se voyait la bague au doigt prête pour fonder une famille, elle doit faire le deuil de sa relation et des enfants qu’elle imaginait déjà. Triste et en colère, elle ne rêve que d’un', 'RITA BADRAOUI', 'bienetre', 'UmNHWU9GRTiWRW4qBeZwSZwYzIBvpbPReNLvsN04dMJMHgtDVzToplLUymbB', 'available', '', NULL, NULL),
(15, 'Mon challenge Au Top ! Beauté du visage', 'https://m.media-amazon.com/images/I/515qTJZYPWL._AC_UY218_.jpg', '2021-10-14 00:00:00', 'La vie est faite de challenges !\r\nSuivez le programme proposé par Laury et Delphine pour relever un nouveau défi Au Top !\r\nLes massages du visage sont un véritable traitement anti-âge, et procurent aussi une intense sensation de bien-être et la satis', 'Laury Thilleman', 'bienetre', 'UJenB96fXmwHG5FyhfeXWJFAULOXehmjnX1CIWXgSyDajeWez0ThGIfwQ0Bx', 'available', '', NULL, NULL),
(16, 'LE POUVOIR DU MOMENT PRESENT – GUIDE EVEIL SPIRITUEL', 'https://m.media-amazon.com/images/I/61Q2a6OPMRL._AC_UY218_.jpg', '2020-09-01 00:00:00', 'Le pouvoir du moment présent est probablement l\'un des livres les plus importants de notre époque. Son enseignement simple et néanmoins profond a aidé des millions de gens à travers le monde à trouver la paix intérieure et à se sentir plus épanouis d', 'Annie Ollivier', 'bienetre', 'v8Hvl75zCOe99xCzEjZ5QUOJ6AMGbupgcLAUHSpRjLEyoK1PT1w6m1L795WS', 'available', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `adress` varchar(100) NOT NULL,
  `validate` varchar(8) NOT NULL,
  `rank` varchar(60) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `birthdate`, `adress`, `validate`, `rank`, `user_id`, `password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '1991-09-20', '111 allés  du dev', 'validate', 'employee', 'wel3jWZdvYHxGydSVGBi', '$2y$10$/nACLFyM2gzZZHoPih2Tv./5mdEqos0DIIqUWWsMqUWvHUSUpUUrq'),
(2, 'mary', 'mae', 'mae@hotmail.fr', '1991-09-24', 'rue du puit', 'validate', 'employee', 'EJ3xCUFJOCVAryLzlATp', '$2y$10$wShmMfZL72OwovH9htQfjuQNdu4WMIejiK10CtV49a1Eb/T6HDTby'),
(3, 'jhon', 'doe', 'joe@gmail.com', '1990-03-21', '12 rue du triangle', 'validate', 'lecturer', 'jwhS8xiVI9bca9rjHNxA', '$2y$10$rjdts/Q9WxrBq1HmwTDNFugCgfSEXgr0vQMIYDiC08YlHsmKmSnw6'),
(4, 'bob', 'marley', 'rasta@gmail.com', '1945-02-06', '56 Hope Road in Kingston, Jamaica', 'validate', 'lecturer', 'BiD1yi7xCl5dqUXBAxJX', '$2y$10$SHkdFZOd/ySAyRMG0UXF0upS1QfTFZDKHWo5AKId9fRu3P.R7sDqG'),
(5, 'dany', 'boy', 'boy@hotmail.fr', '1985-06-14', '111 Allée des Glaïeuls', '', 'lecturer', 'FGLC7shQkVbAfgnD5Gqk', '$2y$10$Uhhl9I..uRbN1zP13LsZkeIqa06RUQlz7MG7QR6Ma9VYoatdfpxim'),
(6, 'FANNY', 'LAFOND', 'lafondfannaaaay@hotmail.fr', '1212-12-12', '6 rue des carpe', 'validate', 'lecturer', 'n9Y1gfCc7uiTkEl0pxBD', '$2y$10$dqtBy04zZ5yAXlUtqxa1DeaIZ9f04pwPQtaMuudeuZxWom6X07fU.'),
(7, 'zouz', 'zouzi', 'zouzi@gmail.com', '1984-12-12', '12 rue du 12', 'validate', 'lecturer', 'yTqWlomVgUFOfzAM82Dh', '$2y$10$FMBocAlBY44tP7z/jZTQz.WIAVLMVYLoYziWZaM6rQ87G.d4iJza.'),
(8, 'toto', 'rigolo', 'rigo1233@hotmail.fr', '1993-12-12', '111 Allée des Glaïeuls', 'validate', 'lecturer', 'xwMrAAxLVHXYE76i90Gk', '$2y$10$kePAP9UAKSWYt5BWMZWl4eB5q5tx/RZLWLDQBViffrqlHXqHw.duO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `image` (`image`),
  ADD KEY `releaseDate` (`releaseDate`),
  ADD KEY `description` (`description`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `gender` (`gender`),
  ADD KEY `author` (`author`),
  ADD KEY `available` (`available`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `reservation_date` (`reservation_date`),
  ADD KEY `return_date` (`return_date`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `email` (`email`),
  ADD KEY `birthdate` (`birthdate`),
  ADD KEY `adress` (`adress`),
  ADD KEY `validate` (`validate`),
  ADD KEY `lastname_2` (`lastname`),
  ADD KEY `rank` (`rank`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
