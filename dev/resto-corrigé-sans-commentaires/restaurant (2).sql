-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 09 Novembre 2018 à 17:53
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `Booking`
--

CREATE TABLE `Booking` (
  `Id` int(11) NOT NULL,
  `BookingDate` date NOT NULL,
  `BookingTime` time NOT NULL,
  `NumberOfSeats` tinyint(4) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `CreationTimestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Booking`
--

INSERT INTO `Booking` (`Id`, `BookingDate`, `BookingTime`, `NumberOfSeats`, `User_Id`, `CreationTimestamp`) VALUES
(28, '2018-02-02', '12:00:00', 1, 38, '2018-10-30 10:27:40'),
(29, '2018-01-01', '12:00:00', 1, 42, '2018-10-30 11:43:14'),
(30, '2018-01-01', '12:00:00', 1, 42, '2018-10-30 12:49:37'),
(31, '2018-01-01', '12:00:00', 1, 41, '2018-10-30 12:56:22'),
(32, '2018-01-01', '12:00:00', 1, 45, '2018-10-30 14:23:26'),
(33, '2018-12-14', '12:00:00', 4, 34, '2018-10-30 15:39:15'),
(34, '2018-01-01', '12:00:00', 1, 44, '2018-10-30 16:36:41'),
(35, '2018-01-01', '12:00:00', 1, 50, '2018-10-30 17:20:11'),
(36, '2018-05-01', '12:00:00', 2, 50, '2018-10-30 17:21:03'),
(37, '2018-01-01', '12:00:00', 1, 40, '2018-10-31 09:16:43'),
(38, '2018-01-01', '12:00:00', 1, 40, '2018-10-31 09:17:52'),
(39, '2018-01-01', '12:00:00', 1, 40, '2018-10-31 09:19:11'),
(40, '2018-01-01', '12:00:00', 1, 37, '2018-10-31 09:47:04'),
(41, '2018-01-01', '12:00:00', 1, 49, '2018-10-31 10:15:29'),
(42, '2018-01-01', '12:00:00', 1, 49, '2018-10-31 10:15:35'),
(43, '2018-01-01', '12:00:00', 1, 49, '2018-10-31 12:45:48');

-- --------------------------------------------------------

--
-- Structure de la table `Meal`
--

CREATE TABLE `Meal` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `QuantityInStock` tinyint(4) NOT NULL,
  `BuyPrice` double NOT NULL,
  `SalePrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Meal`
--

INSERT INTO `Meal` (`Id`, `Name`, `Photo`, `Description`, `QuantityInStock`, `BuyPrice`, `SalePrice`) VALUES
(1, 'Coca-Cola', 'coca.jpg', 'Mmmm, le Coca-Cola avec 10 morceaux de sucres et tout plein de caféine !', 72, 0.6, 3),
(2, 'Bagel Thon', 'bagel_thon.jpg', 'Notre bagel est constitué d\'un pain moelleux avec des grains de sésame et du thon albacore, accompagné de feuilles de salade fraîche du jour  et d\'une sauce renversante :-)', 18, 2.75, 5.5),
(3, 'Bacon Cheeseburger', 'bacon_cheeseburger.jpg', 'Ce délicieux cheeseburger contient un steak haché viande française de 150g ainsi que d\'un buns grillé juste comme il faut, le tout accompagné de frites fraîches maison !', 14, 6, 12.5),
(4, 'Carrot Cake', 'carrot_cake.jpg', 'Le carrot cake maison ravira les plus gourmands et les puristes : tous les ingrédients sont naturels !\r\nÀ consommer sans modération', 9, 3, 6.75),
(5, 'Donut Chocolat', 'chocolate_donut.jpg', 'Les donuts sont fabriqués le matin même et sont recouvert d\'une délicieuse sauce au chocolat !', 16, 3, 6.2),
(6, 'Dr. Pepper', 'drpepper.jpg', 'Son goût sucré avec de l\'amande vous ravira !', 53, 0.5, 2.9),
(7, 'Milkshake', 'milkshake.jpg', 'Notre milkshake bien crémeux contient des morceaux d\'Oréos et est accompagné de crème chantilly et de smarties en guise de topping. Il éblouira vos papilles !', 12, 2, 5.35),
(8, 'Frites', 'frites.jpg', 'Aaaaaah ces merveilleux bâtonnets de pomme de terre qui nous régalent depuis qu\'on est petit. Venez déguster les notres, elles sont faites maison !', 127, 0.5, 2.5),
(9, 'Hot-dog', 'hotdog.jpeg', 'Le typique sandwitch américain avec sa saucisse cuite accompagnée de ketchup, moutarde, oignons ou encore une bonne mayonnaise dont nous avons le secret.', 55, 0.7, 3.5),
(10, 'Gillian Anderson', 'gillian.jpeg', 'Pourquoi ne pas profiter de votre repas avec la charmante compagnie de l\'héroine de X-Files ? L\'Amérique comme vous l\'avez toujours rêvé...', 1, 0, 4000),
(11, 'Sarah Michelle Gellar', 'sarah.jpg', 'Le petit plus de la maison : la possibilité de manger avec Buffy ! Attention elle est très gourmande...', 1, 0, 3000),
(12, 'Test', '', 'test', 12, 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `Order`
--

CREATE TABLE `Order` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `TotalAmount` double DEFAULT NULL,
  `TaxRate` float DEFAULT NULL,
  `TaxAmount` double DEFAULT NULL,
  `CreationTimestamp` datetime DEFAULT NULL,
  `CompleteTimestamp` datetime DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Order`
--

INSERT INTO `Order` (`Id`, `User_Id`, `TotalAmount`, `TaxRate`, `TaxAmount`, `CreationTimestamp`, `CompleteTimestamp`, `Status`) VALUES
(153, 40, 35.25, 20, 7.05, '2018-11-07 10:48:59', '2018-11-07 10:48:59', 'payed'),
(154, 49, 35.75, 20, 7.15, '2018-11-07 10:49:19', '2018-11-07 10:49:19', NULL),
(156, 38, NULL, 20, NULL, '2018-11-07 10:51:51', NULL, NULL),
(157, 38, NULL, 20, NULL, '2018-11-07 10:51:51', NULL, NULL),
(158, 38, NULL, 20, NULL, '2018-11-07 10:51:57', NULL, NULL),
(159, 38, NULL, 20, NULL, '2018-11-07 10:51:57', NULL, NULL),
(160, 38, NULL, 20, NULL, '2018-11-07 10:51:58', NULL, NULL),
(161, 38, NULL, 20, NULL, '2018-11-07 10:51:58', NULL, NULL),
(162, 38, NULL, 20, NULL, '2018-11-07 10:52:18', NULL, NULL),
(163, 38, NULL, 20, NULL, '2018-11-07 10:52:18', NULL, NULL),
(165, 38, 8.5, 20, 1.7, '2018-11-07 12:16:26', '2018-11-07 12:16:26', NULL),
(166, 38, 5.5, 20, 1.1, '2018-11-07 12:17:07', '2018-11-07 12:17:07', NULL),
(167, 40, 24, 20, 4.8, '2018-11-07 12:25:26', '2018-11-07 12:25:26', 'payed'),
(168, 40, 58, 20, 11.6, '2018-11-07 12:29:52', '2018-11-07 12:29:52', 'payed'),
(169, 40, 9, 20, 1.8, '2018-11-07 12:59:24', '2018-11-07 12:59:24', NULL),
(170, 40, 58, 20, 11.6, '2018-11-08 09:50:32', '2018-11-08 09:50:32', 'not payed'),
(171, 48, 3, 20, 0.6, '2018-11-08 09:59:43', '2018-11-08 09:59:43', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `OrderLine`
--

CREATE TABLE `OrderLine` (
  `Id` int(11) NOT NULL,
  `QuantityOrdered` int(4) NOT NULL,
  `Meal_Id` int(11) NOT NULL,
  `Order_Id` int(11) NOT NULL,
  `PriceEach` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `OrderLine`
--

INSERT INTO `OrderLine` (`Id`, `QuantityOrdered`, `Meal_Id`, `Order_Id`, `PriceEach`) VALUES
(115, 3, 4, 153, 6.75),
(116, 5, 1, 153, 3),
(117, 3, 1, 154, 3),
(118, 5, 7, 154, 5.35),
(123, 1, 1, 165, 3),
(124, 1, 2, 165, 5.5),
(125, 1, 2, 166, 5.5),
(126, 8, 1, 167, 3),
(127, 20, 6, 168, 2.9),
(128, 3, 1, 169, 3),
(129, 20, 6, 170, 2.9),
(130, 1, 1, 171, 3);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `BirthDate` date NOT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(40) NOT NULL,
  `ZipCode` char(5) NOT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `Phone` char(10) NOT NULL,
  `CreationTimestamp` datetime NOT NULL,
  `LastLoginTimestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`Id`, `FirstName`, `LastName`, `Email`, `Password`, `BirthDate`, `Address`, `City`, `ZipCode`, `Country`, `Phone`, `CreationTimestamp`, `LastLoginTimestamp`) VALUES
(32, 'aa', 'a', 'a', 'a', '1940-02-01', 'a', 'a', 'a', NULL, 'a', '2018-10-29 12:36:38', NULL),
(33, 'ghjghj', 'vcx', 'hj', '$2y$11$65b5a1fc85ae725a8f27cehX.y66G9b6y0NXVoC51HqLpQwEI39EW', '1940-01-01', 'ghjgjh', 'g', '78000', NULL, '2', '2018-10-29 15:00:38', NULL),
(34, 'alan', 'perreira', 'add@hotmail.fr', '$2y$11$03c6c91ed5a758684f188uQnztnqNZ2cDi7i7bNAdWdga1MC3fO6G', '1995-01-01', 'hggghgghghgg', 'ghghghhg', '93170', NULL, '612234356', '2018-10-29 15:28:23', NULL),
(35, 'alan', 'perreira', 'hjjdhj@hotmail.fr', '$2y$11$4987175975eae3c465b6buqt0HS3C5dkofeAjlPTgheevYj2MzeWq', '1940-01-01', 'hggghgghghgg', 'ghghghhg', '93170', NULL, '612234356', '2018-10-29 15:28:56', NULL),
(36, 'BAR', 'BA', 'elep@hant.com', '$2y$11$f8f1c0f4712c5d8620125ON7YPJKARsmGIn8ZVyUuotq9.b/LhNHC', '1940-04-01', '1 rue des éléphants', 'Paris', '75018', NULL, '0121545458', '2018-10-29 17:21:58', NULL),
(37, 'San', 'Gohan', 'san.gohan@dbz.fr', '$2y$11$0088601bd65937a86e2e7OqoXGyXoYYlzKoq6lAE.FRIFQZEwhWzW', '1989-01-01', '10 rue du temple', 'Namek', '66666', NULL, '120202020', '2018-10-30 09:58:16', NULL),
(38, 'Well', 'Vitamin', 'vitamin@well.fr', '$2y$11$f497a6eb1c2ee697d477bObyWJrjvbC7Ph0Afn4YT6YGiA4jTnI3u', '1989-01-01', '10 rue du temple', 'Namek', '66666', NULL, '120202020', '2018-10-30 10:04:30', NULL),
(39, 'Well', 'Vitamin', 'vitamin@reload.fr', '$2y$11$06355b9e86a23d108b83fu2H8sq3QHbFnOcrUnf2JbkPwIGWVMlpC', '1940-01-01', '10 rue du temple', 'Namek', '66666', NULL, '120202020', '2018-10-30 10:07:28', NULL),
(40, 'Thib', 'Monesma', 'thib@gmail.com', '$2y$11$3b387067d71ff0965add2uW.jqdRcGXgAG0hXm3hQow6ccQgs.fY2', '1955-01-01', '208 rue de la rep', 'Paris', '75010', NULL, '0651508656', '2018-10-30 10:33:17', NULL),
(41, 'baba', 'ha', 'baba@gmail.com', '$2y$11$1144ae7c5f683df3f3081uNmAFDEt6RY03K/y4biKBw2zof90GLIS', '1940-01-01', 'chez baba', 'babaland', '00000', NULL, '000000000', '2018-10-30 11:30:48', NULL),
(42, 'a', 'a', 'a@a.com', '$2y$11$fe04c8ad7dde64bb3e3beOo.hLXfD8bPvPw/Fb0PKxhH.OJ.yeoxy', '1940-01-01', '30 bd de la république', 'Paris', '75018', NULL, '689898989', '2018-10-30 11:42:45', NULL),
(43, 'Cyril', 'LECOMTE', 'ciril', '$2y$11$b522481ef33de5becf714uotjhTenhWxjRHVGu.4xFgjhexpqGaey', '1982-01-01', '102 rue de freneuse', 'saint aubin les elbeuf', '76410', NULL, '0646214065', '2018-10-30 11:47:23', NULL),
(44, 'fs', 'df', 'azerty@gmail.com', '$2y$11$dee078ee23826025a8955OiXyON8i84JGRRALAyFNmSBiMxISMdaS', '1940-01-01', 'fs', 'fs', '95170', NULL, '8888888888', '2018-10-30 12:56:20', NULL),
(45, 'a', 'a', 'b@b.com', '$2y$11$9e32be6c7f5f7f6ea2cecuafqOXUQrfgCsOdMcsb10r0tVlRlAEy2', '1940-01-01', '30 bd de la république', 'Paris', '75018', NULL, '689898989', '2018-10-30 14:23:07', NULL),
(46, 'a', 'a', 'aaa', '$2y$11$041a52302b6ae080da60duuzJvK97IvSVh6rX6Xt12b4r233t99LS', '1940-01-01', 'a', 'a', '1', NULL, '1', '2018-10-30 14:38:40', NULL),
(47, 'a', 'ab', 'ab', '$2y$11$1e6d6c32ac34ae874d0d3uXGEn12DT6wk9TVshkw/sm/XjtlZaJum', '1940-01-01', 'a', 'aa', '78948', NULL, '0654987321', '2018-10-30 14:51:37', NULL),
(48, 'p', 'alan', 'alanp@gmail.com', '$2y$11$75af9fab293d4d3bc5cd1uO0y4T/HSdCzL6OHUyvUVKMu1YWsX/Cu', '1989-01-01', '3 rue academy', 'paris', '75018', NULL, '160954566', '2018-10-30 15:26:07', NULL),
(49, 'a', 'a', 'cb@starsw.com', '$2y$11$367214ca2f37624932f6eexgv5R49.fYG1lWbewzVjc.Avzhoifxq', '1940-01-01', 'a', 'a', '75018', NULL, '0600000000', '2018-10-30 17:06:01', NULL),
(50, 'dddddd', 'nododd', 'saliou@gmail.com', '$2y$11$1a8e79b7c75d6bfd06f45uqwAqETVj6TwsmlcUAPcmKu9h0B8U1YO', '1940-01-01', 'dddddd', 'dddd', '00000', NULL, '000000', '2018-10-30 17:19:53', NULL),
(51, 'a', 'a', 'marc@gmail.com', '$2y$11$22d043d2e3172cf0efa00u7Opq0RvlWtoDvymUkqhzZio62HuqFj6', '1940-01-01', '', '', '75000', NULL, '0696969696', '2018-11-05 10:29:35', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Index pour la table `Meal`
--
ALTER TABLE `Meal`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Index pour la table `OrderLine`
--
ALTER TABLE `OrderLine`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UniciteMealOrder` (`Meal_Id`,`Order_Id`),
  ADD KEY `Meal_Id` (`Meal_Id`),
  ADD KEY `Order_Id` (`Order_Id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `Meal`
--
ALTER TABLE `Meal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `Order`
--
ALTER TABLE `Order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT pour la table `OrderLine`
--
ALTER TABLE `OrderLine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Booking`
--
ALTER TABLE `Booking`
  ADD CONSTRAINT `Booking_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `User` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `Order_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `User` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `OrderLine`
--
ALTER TABLE `OrderLine`
  ADD CONSTRAINT `OrderLine_ibfk_1` FOREIGN KEY (`Meal_Id`) REFERENCES `Meal` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `OrderLine_ibfk_2` FOREIGN KEY (`Order_Id`) REFERENCES `Order` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
