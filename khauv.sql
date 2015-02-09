-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 09 Février 2015 à 16:16
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `khauv`
--


-- --------------------------------------------------------

--
-- Structure de la table `DT_ADMIN`
--

CREATE TABLE `DT_ADMIN` (
  `ADM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ADM_NAME` varchar(45) NOT NULL,
  `ADM_PASSWORD` varchar(45) NOT NULL,
  `ADM_LVL` tinyint(5) NOT NULL,
  PRIMARY KEY (`ADM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `DT_ADMIN`
--

INSERT INTO `DT_ADMIN` (`ADM_ID`, `ADM_NAME`, `ADM_PASSWORD`, `ADM_LVL`) VALUES
(2, 'Thierry', 'b36d331451a61eb2d76860e00c347396', 5),
(3, 'Yamato', 'b36d331451a61eb2d76860e00c347396', 2),
(4, 'Yamato93', 'b36d331451a61eb2d76860e00c347396', 3),
(5, 'kikou', 'b36d331451a61eb2d76860e00c347396', 4),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 4),
(9, 'TEST', '033bd94b1168d7e4f0d644c3c95e35bf', 3);

-- --------------------------------------------------------

--
-- Structure de la table `DT_ANNOUNCEMENT`
--

CREATE TABLE `DT_ANNOUNCEMENT` (
  `ANN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USE_ID` int(11) NOT NULL,
  `ANN_TYPE_ID` int(11) NOT NULL,
  `ANN_NAME` varchar(45) DEFAULT NULL,
  `ANN_DESCR` varchar(45) DEFAULT NULL,
  `ANN_ADRESS` varchar(45) DEFAULT NULL,
  `ANN_ZIPCODE` varchar(45) DEFAULT NULL,
  `ANN_COUNTRY` varchar(45) DEFAULT NULL,
  `ANN_DATE_CREA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ANN_DATE_START` date DEFAULT NULL,
  `ANN_DATE_END` date DEFAULT NULL,
  `DT_LOCALIZATIONS_LOC_ID` int(11) NOT NULL,
  `DT_LOCALIZATIONS_LOC_TYPE_ID` int(11) NOT NULL,
  `DT_LOCALIZATIONS_DT_CITY_CITY_ID` int(11) NOT NULL,
  PRIMARY KEY (`ANN_ID`,`USE_ID`,`ANN_TYPE_ID`,`DT_LOCALIZATIONS_LOC_ID`,`DT_LOCALIZATIONS_LOC_TYPE_ID`,`DT_LOCALIZATIONS_DT_CITY_CITY_ID`),
  KEY `fk_DT_ANNOUNCEMENT_DT_USERS1_idx` (`USE_ID`),
  KEY `fk_DT_ANNOUNCEMENT_DT_ANNOUNCEMENT_TYPE1_idx` (`ANN_TYPE_ID`),
  KEY `fk_DT_ANNOUNCEMENT_DT_LOCALIZATIONS1_idx` (`DT_LOCALIZATIONS_LOC_ID`,`DT_LOCALIZATIONS_LOC_TYPE_ID`,`DT_LOCALIZATIONS_DT_CITY_CITY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `DT_ANNOUNCEMENT_TYPE`
--

CREATE TABLE `DT_ANNOUNCEMENT_TYPE` (
  `ANN_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ANN_TYPE_NAME` varchar(45) DEFAULT NULL,
  `ANN_TYPE_DATE_CREA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ANN_TYPE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `DT_BOOKS`
--

CREATE TABLE `DT_BOOKS` (
  `BOOKS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USE_ID` int(11) NOT NULL,
  `BOOKS_TITLE` varchar(45) DEFAULT NULL,
  `BOOKS_DESCR` text,
  `BOOKS_COVER` varchar(255) DEFAULT NULL,
  `BOOKS_DATE_CREA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`BOOKS_ID`,`USE_ID`),
  KEY `fk_DT_JOURNEY_DT_USERS1_idx` (`USE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `DT_BOOKS`
--

INSERT INTO `DT_BOOKS` (`BOOKS_ID`, `USE_ID`, `BOOKS_TITLE`, `BOOKS_DESCR`, `BOOKS_COVER`, `BOOKS_DATE_CREA`) VALUES
(7, 1, 'Discovering Vietnam', 'An incredible adventure that I recommend to all.', 'public/images/854ab38af460ab498f8ec2625f704a01.jpg', '2015-01-17 02:05:32'),
(8, 1, 'New trip in Russia', 'Wide open spaces to be discovered.', 'public/images/cef85c542452e6373417e0dcad3d9932.jpg', '2015-01-17 02:08:27'),
(9, 1, 'Amazonian forest', 'An incredible circuit into the wild.', 'public/images/9657aef7527042f2c5486112a28fcb44.jpg', '2015-01-17 02:09:14'),
(10, 1, 'Canada book trip', 'Beautiful landscapes to discover.', 'public/images/717f14dda30819a4f4f33e9db62d4b11.jpg', '2015-01-17 02:09:44'),
(11, 1, '2 weeks’ China trip', 'Walk through China’s landscapes!', 'public/images/6396dcf4e70e26edf74069d8c4d54198.jpg', '2015-01-17 02:10:50'),
(12, 1, 'Take an amazing road trip', 'Discover USA’s legendary roads.', 'public/images/143156b2b2c63a9c225fc09a23b67008.jpg', '2015-01-17 02:11:21'),
(13, 1, 'Test', 'info description', 'public/images/967fe1c206965ecd0a9ec7c5f47f5483.jpg', '2015-01-23 15:31:58'),
(14, 1, 'TEST', '2STEP', 'public/images/e4dece8f9984f2011380f7ab3e156618.jpg', '2015-01-23 19:14:12'),
(15, 1, 'test', 'test', 'public/images/7a4dd8fc27e9775806df0801af64ad90.jpg', '2015-01-23 19:43:51'),
(16, 1, 'zrgfdlgm', 'fdglkdlmgk', 'public/images/ea7f92f9d66b549d277b223afd6eea29.jpg', '2015-01-23 23:15:38');

-- --------------------------------------------------------

--
-- Structure de la table `DT_BOOKS_STEPS`
--

CREATE TABLE `DT_BOOKS_STEPS` (
  `BOOKS_STEPS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BOOKS_ID` int(11) NOT NULL,
  `USE_ID` int(11) NOT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `BOOKS_STEPS_CONTENT` text,
  `BOOKS_STEPS_START_DATE` date DEFAULT NULL,
  `BOOKS_STEPS_END_DATE` date DEFAULT NULL,
  `BOOKS_STEPS_DATE_CREA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`BOOKS_STEPS_ID`,`BOOKS_ID`,`USE_ID`),
  KEY `fk_DT_JOURNEY_has_DT_LOCALIZATIONS_DT_LOCALIZATIONS1_idx` (`LOC_ID`),
  KEY `fk_DT_JOURNEY_has_DT_LOCALIZATIONS_DT_JOURNEY1_idx` (`BOOKS_ID`,`USE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Contenu de la table `DT_BOOKS_STEPS`
--

INSERT INTO `DT_BOOKS_STEPS` (`BOOKS_STEPS_ID`, `BOOKS_ID`, `USE_ID`, `LOC_ID`, `BOOKS_STEPS_CONTENT`, `BOOKS_STEPS_START_DATE`, `BOOKS_STEPS_END_DATE`, `BOOKS_STEPS_DATE_CREA`) VALUES
(7, 13, 1, NULL, 'pjfsdksljgkgjkv fdjgkdfjgkldj sdkgjkfldgjdkfl gklfjdkglj dfklgj kldfjg kldfjgkl jkljdfklgjdfklgj', '2015-01-26', '2015-01-31', '2015-01-23 15:31:58'),
(8, 14, 1, NULL, 'Step1', '2015-01-31', '2015-01-31', '2015-01-23 19:14:12'),
(9, 14, 1, NULL, 'Step2', '2015-01-14', '2015-01-25', '2015-01-23 19:14:12'),
(10, 14, 1, NULL, 'Step3', '2015-01-16', '2015-01-14', '2015-01-23 19:14:12'),
(11, 15, 1, NULL, 'tet', '2015-01-24', '2015-01-18', '2015-01-23 19:43:51'),
(12, 15, 1, NULL, 'xcpvfkl', '2015-01-02', '2015-01-25', '2015-01-23 19:43:51'),
(13, 16, 1, NULL, 'fmùgfldmùgldmù', '2015-01-10', '2015-01-31', '2015-01-23 23:15:38'),
(14, 16, 1, NULL, 'dflgùldùmgl test', '2015-01-31', '2015-01-31', '2015-01-23 23:15:38'),
(39, 15, 1, NULL, 'fdgdlfmhkm', '2015-01-24', '2015-01-31', '2015-01-24 21:22:06'),
(40, 16, 1, NULL, 'glfdkgm', '2015-01-24', '2015-01-31', '2015-01-25 01:32:32'),
(41, 16, 1, NULL, 'sfsdkgmlfk', '2015-01-17', '2015-01-31', '2015-01-25 01:42:05'),
(42, 13, 1, NULL, 'fdfgd', '2015-01-23', '2015-01-24', '2015-01-25 01:50:39'),
(43, 13, 1, NULL, 'sdgmfdglmù', '2015-01-25', '2015-01-31', '2015-01-25 01:52:20'),
(44, 13, 1, NULL, 'sdfsfsdf', '2015-01-25', '2015-01-24', '2015-01-25 02:13:57'),
(45, 14, 1, NULL, 'fdgdggfd', '2015-01-25', '2015-01-25', '2015-01-25 02:49:12'),
(46, 16, 1, NULL, 'sdfdsf', '2015-01-25', '2015-01-31', '2015-01-25 03:05:54'),
(47, 16, 1, NULL, 'sdfdsf', '2015-01-25', '2015-01-31', '2015-01-25 03:12:05'),
(48, 16, 1, NULL, 'bfb', '2015-01-25', '2015-01-31', '2015-01-25 03:13:13'),
(49, 16, 1, NULL, 'bfb', '2015-01-25', '2015-01-31', '2015-01-25 03:28:36'),
(50, 16, 1, NULL, 'bfb', '2015-01-25', '2015-01-31', '2015-01-25 03:28:50'),
(51, 16, 1, NULL, 'bfb', '2015-01-25', '2015-01-31', '2015-01-25 03:29:21'),
(52, 16, 1, NULL, '', '0000-00-00', '0000-00-00', '2015-01-25 03:29:27'),
(53, 16, 1, NULL, 'sdklfmdsk', '2015-01-25', '2015-01-31', '2015-01-25 16:42:44'),
(54, 15, 1, NULL, 'cxlbvkmklm', '2015-01-25', '2015-01-29', '2015-01-25 16:44:14'),
(55, 16, 1, NULL, '', '0000-00-00', '0000-00-00', '2015-02-09 14:39:11'),
(56, 16, 1, NULL, 'fkjsdkgljd', '0000-00-00', '0000-00-00', '2015-02-09 14:40:24'),
(57, 16, 1, NULL, 'test', '0000-00-00', '0000-00-00', '2015-02-09 14:41:32'),
(58, 16, 1, NULL, 'test', '0000-00-00', '0000-00-00', '2015-02-09 14:42:05'),
(59, 16, 1, NULL, 'test', '0000-00-00', '0000-00-00', '2015-02-09 14:42:13'),
(60, 16, 1, NULL, 'fglfdkmg', '0000-00-00', '0000-00-00', '2015-02-09 14:43:02'),
(61, 16, 1, NULL, 'vblùlmbk', '0000-00-00', '0000-00-00', '2015-02-09 14:44:25'),
(62, 16, 1, NULL, 'ldfkglmdk', '0000-00-00', '0000-00-00', '2015-02-09 14:44:31'),
(63, 16, 1, NULL, 'df,klvdfj', '0000-00-00', '0000-00-00', '2015-02-09 14:44:56'),
(64, 16, 1, NULL, 'dflvdfk', '0000-00-00', '0000-00-00', '2015-02-09 14:50:27'),
(65, 16, 1, NULL, 'dfgdljk', '0000-00-00', '0000-00-00', '2015-02-09 14:52:33'),
(66, 16, 1, NULL, 'dflmkdfmk', '0000-00-00', '0000-00-00', '2015-02-09 14:54:57'),
(67, 16, 1, NULL, 'vdbmlùl', '0000-00-00', '0000-00-00', '2015-02-09 14:55:04'),
(68, 16, 1, NULL, 'fvfdv', '0000-00-00', '0000-00-00', '2015-02-09 14:59:34'),
(69, 16, 1, NULL, 'xcv mclmù', '0000-00-00', '0000-00-00', '2015-02-09 14:59:41'),
(70, 15, 1, NULL, 'kovkdfopk', '0000-00-00', '0000-00-00', '2015-02-09 15:07:50'),
(71, 15, 1, NULL, 'dfkgopdfk', '0000-00-00', '0000-00-00', '2015-02-09 15:08:02'),
(72, 15, 1, NULL, '', '0000-00-00', '0000-00-00', '2015-02-09 15:09:13'),
(73, 15, 1, NULL, '', '0000-00-00', '0000-00-00', '2015-02-09 15:09:17');

-- --------------------------------------------------------

--
-- Structure de la table `DT_BOOKS_STEPS_PICTURE`
--

CREATE TABLE `DT_BOOKS_STEPS_PICTURE` (
  `PIC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BOOKS_STEPS` int(11) NOT NULL,
  `BOOKS_ID` int(11) NOT NULL,
  `USE_ID` int(11) NOT NULL,
  `STEPS_DATE_CREAT` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `STEPS_IMG` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PIC_ID`,`BOOKS_STEPS`,`BOOKS_ID`,`USE_ID`),
  KEY `fk_DT_BOOKS_STEPS_PICTURE_DT_BOOKS_STEPS1_idx` (`BOOKS_STEPS`,`BOOKS_ID`,`USE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11542 ;

--
-- Contenu de la table `DT_BOOKS_STEPS_PICTURE`
--

INSERT INTO `DT_BOOKS_STEPS_PICTURE` (`PIC_ID`, `BOOKS_STEPS`, `BOOKS_ID`, `USE_ID`, `STEPS_DATE_CREAT`, `STEPS_IMG`) VALUES
(5, 7, 13, 1, '2015-01-23 15:31:58', 'public/images/9f89c330e18904a74079b0262ca663eb.jpg'),
(6, 7, 13, 1, '2015-01-23 15:31:58', 'public/images/6bb68b7d9540118d79423c38651815f1.jpg'),
(7, 8, 14, 1, '2015-01-23 19:14:12', 'public/images/1f7cfb412bddd11f240685bfa98c82c2.jpg'),
(8, 8, 14, 1, '2015-01-23 19:14:12', 'public/images/960437f2a2fbb1da96c250c84933765f.jpg'),
(9, 9, 14, 1, '2015-01-23 19:14:12', 'public/images/26ea7e4a94074213e5e72d97b5fd9fd1.jpg'),
(10, 9, 14, 1, '2015-01-23 19:14:12', 'public/images/5bb72c9f5992e03631c1285da819916f.jpg'),
(11, 10, 14, 1, '2015-01-23 19:14:12', 'public/images/72d239f21813716dd8722942c02db7dd.jpg'),
(12, 11, 15, 1, '2015-01-23 19:43:51', 'public/images/b8581b581dacb2f5df1339b68953f55b.jpg'),
(13, 12, 15, 1, '2015-01-23 19:43:51', 'public/images/c763a770883c808006ec1cdc79231ff4.jpg'),
(14, 12, 15, 1, '2015-01-23 19:43:51', 'public/images/e214721c5d48ab5225822903f9bc55bd.jpg'),
(15, 13, 16, 1, '2015-01-23 23:15:38', 'public/images/bb12a8a21dbe23823d0d2766f53e573d.jpg'),
(16, 13, 16, 1, '2015-01-23 23:15:38', 'public/images/c3e86fe968e8c3abb29e2f7cbe12caf1.jpg'),
(17, 14, 16, 1, '2015-01-23 23:15:38', 'public/images/9023706ebeabab0b29ed1448a53f21e8.jpg'),
(11524, 39, 15, 1, '2015-01-24 21:22:07', 'public/images/9c0ea00d998778917bd7f89da2e899da.jpg'),
(11525, 39, 15, 1, '2015-01-24 21:22:07', 'public/images/19ad27e8cb3da313c0698a414ea28e2a.jpg'),
(11526, 40, 16, 1, '2015-01-25 01:32:32', 'public/images/b40ab5e41e04f951671ee08007b303fd.jpg'),
(11527, 40, 16, 1, '2015-01-25 01:32:32', 'public/images/19ad27e8cb3da313c0698a414ea28e2a.jpg'),
(11528, 41, 16, 1, '2015-01-25 01:42:05', 'public/images/2fb48e17d6dbb1f83502928839ac5979.jpg'),
(11529, 42, 13, 1, '2015-01-25 01:50:39', 'public/images/5552487aea77ddb77a3d633e46a26f56.jpg'),
(11530, 43, 13, 1, '2015-01-25 01:52:20', 'public/images/140ea408f27bc860ecf4cf9756717858.jpg'),
(11531, 44, 13, 1, '2015-01-25 02:13:57', 'public/images/c2ef7a1e089c97a2dfd5216c43a49179.jpg'),
(11532, 45, 14, 1, '2015-01-25 02:49:12', 'public/images/f288a1fbeb4348f0f0968a089222e06b.jpg'),
(11533, 46, 16, 1, '2015-01-25 03:05:54', 'public/images/9f628fe9ed93b57b5b2545f8e5c658c6.jpg'),
(11534, 53, 16, 1, '2015-01-25 16:42:44', 'public/images/d87f39c988d944777bd1258dc012404e.jpg'),
(11535, 54, 15, 1, '2015-01-25 16:44:14', 'public/images/e943e919ab43ecace50a1ca52b36dac6.jpg'),
(11536, 14, 16, 1, '2015-02-05 22:36:00', 'public/images/1605df8ddc585542c4b41518e3d7b49c.jpg'),
(11537, 56, 16, 1, '2015-02-09 14:40:24', 'public/images/63f4350a2cfef85114976e64f08da2a2.jpg'),
(11538, 57, 16, 1, '2015-02-09 14:41:32', 'public/images/7a73361c6f79c040a46dddcb1f6e41a2.jpg'),
(11539, 58, 16, 1, '2015-02-09 14:42:05', 'public/images/86c56cb15a7a2edb1b26f5c58bb4a6d0.jpg'),
(11540, 59, 16, 1, '2015-02-09 14:42:14', 'public/images/202f3ded8b463927a88b9138b57d5582.jpg'),
(11541, 61, 16, 1, '2015-02-09 14:44:25', 'public/images/0472b7f7bd6ebae1c9bbda3bde5aad8b.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `DT_CITY`
--

CREATE TABLE `DT_CITY` (
  `CITY_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CITY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `DT_LOCALIZATIONS`
--

CREATE TABLE `DT_LOCALIZATIONS` (
  `LOC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOC_TYPE_ID` int(11) NOT NULL,
  `DT_CITY_CITY_ID` int(11) NOT NULL,
  `LOC_NAME` varchar(45) DEFAULT NULL,
  `LOC_DATE_CREA` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LOC_ID`,`LOC_TYPE_ID`,`DT_CITY_CITY_ID`),
  KEY `fk_DT_LOCALIZATIONS_DT_LOCALIZATIONS_TYPE1_idx` (`LOC_TYPE_ID`),
  KEY `fk_DT_LOCALIZATIONS_DT_CITY1_idx` (`DT_CITY_CITY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `DT_LOCALIZATIONS_TYPE`
--

CREATE TABLE `DT_LOCALIZATIONS_TYPE` (
  `LOC_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOC_TYPE_NAME` varchar(45) DEFAULT NULL,
  `LOC_TYPE_DATE_CREA` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LOC_TYPE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `DT_ROUTE`
--

CREATE TABLE `DT_ROUTE` (
  `ROUTE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USE_ID` int(11) NOT NULL,
  `ROUTE_TITLE` varchar(45) DEFAULT NULL,
  `ROUTE_DESCR` text,
  `ROUTE_COVER` varchar(45) DEFAULT NULL,
  `ROUTE_DATE_CREA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ROUTE_ID`,`USE_ID`),
  KEY `fk_DT_ROUTE_DT_USERS_idx` (`USE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `DT_ROUTE_STEPS`
--

CREATE TABLE `DT_ROUTE_STEPS` (
  `ROU_STEPS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROU_ID` int(11) NOT NULL,
  `USE_ID` int(11) NOT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `ROUTE_STEPS_TITLE` varchar(45) DEFAULT NULL,
  `ROUTE_STEPS_CONTENT` text,
  `ROUTE_STEPS_DATE` datetime DEFAULT NULL,
  `ROUTE-STEPS_DATE_CREA` datetime DEFAULT NULL,
  PRIMARY KEY (`ROU_STEPS_ID`,`ROU_ID`,`USE_ID`),
  KEY `fk_DT_ROUTE_has_DT_LOCALIZATIONS_DT_LOCALIZATIONS1_idx` (`LOC_ID`),
  KEY `fk_DT_ROUTE_has_DT_LOCALIZATIONS_DT_ROUTE1_idx` (`ROU_ID`,`USE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `DT_USERS`
--

CREATE TABLE `DT_USERS` (
  `USE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USE_TYPE` tinyint(1) DEFAULT NULL,
  `USE_MAIL` varchar(45) DEFAULT NULL,
  `USE_PASSWORD` varchar(255) DEFAULT NULL,
  `USE_LASTNAME` varchar(45) DEFAULT NULL,
  `USE_FIRSTNAME` varchar(45) DEFAULT NULL,
  `USE_BIRTHDAY` date DEFAULT NULL,
  `USE_DESCR` text,
  `USE_PIC` varchar(255) DEFAULT NULL,
  `USE_CLE` varchar(255) DEFAULT NULL,
  `USE_VERIF` tinyint(1) DEFAULT NULL,
  `USE_COUNTRY` varchar(45) DEFAULT NULL,
  `USE_LVL` varchar(45) DEFAULT NULL,
  `USE_DATE_CREA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `USE_FACEBOOK_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`USE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `DT_USERS`
--

INSERT INTO `DT_USERS` (`USE_ID`, `USE_TYPE`, `USE_MAIL`, `USE_PASSWORD`, `USE_LASTNAME`, `USE_FIRSTNAME`, `USE_BIRTHDAY`, `USE_DESCR`, `USE_PIC`, `USE_CLE`, `USE_VERIF`, `USE_COUNTRY`, `USE_LVL`, `USE_DATE_CREA`, `USE_FACEBOOK_ID`) VALUES
(1, 1, 'khauv.t@gmail.com', 'b36d331451a61eb2d76860e00c347396', 'Thierry', 'Khauv', '1990-07-07', 'Etudiant', '', NULL, NULL, '', '', '2014-12-17 21:30:20', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `DT_USERS_TYPE`
--

CREATE TABLE `DT_USERS_TYPE` (
  `USE_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USE_TYPE_NAME` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`USE_TYPE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `DT_ANNOUNCEMENT`
--
ALTER TABLE `DT_ANNOUNCEMENT`
  ADD CONSTRAINT `fk_DT_ANNOUNCEMENT_DT_ANNOUNCEMENT_TYPE1` FOREIGN KEY (`ANN_TYPE_ID`) REFERENCES `DT_ANNOUNCEMENT_TYPE` (`ANN_TYPE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DT_ANNOUNCEMENT_DT_LOCALIZATIONS1` FOREIGN KEY (`DT_LOCALIZATIONS_LOC_ID`, `DT_LOCALIZATIONS_LOC_TYPE_ID`, `DT_LOCALIZATIONS_DT_CITY_CITY_ID`) REFERENCES `DT_LOCALIZATIONS` (`LOC_ID`, `LOC_TYPE_ID`, `DT_CITY_CITY_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DT_ANNOUNCEMENT_DT_USERS1` FOREIGN KEY (`USE_ID`) REFERENCES `DT_USERS` (`USE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `DT_BOOKS`
--
ALTER TABLE `DT_BOOKS`
  ADD CONSTRAINT `fk_DT_JOURNEY_DT_USERS1` FOREIGN KEY (`USE_ID`) REFERENCES `DT_USERS` (`USE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `DT_BOOKS_STEPS`
--
ALTER TABLE `DT_BOOKS_STEPS`
  ADD CONSTRAINT `fk_DT_JOURNEY_has_DT_LOCALIZATIONS_DT_JOURNEY1` FOREIGN KEY (`BOOKS_ID`, `USE_ID`) REFERENCES `DT_BOOKS` (`BOOKS_ID`, `USE_ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DT_JOURNEY_has_DT_LOCALIZATIONS_DT_LOCALIZATIONS1` FOREIGN KEY (`LOC_ID`) REFERENCES `DT_LOCALIZATIONS` (`LOC_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `DT_BOOKS_STEPS_PICTURE`
--
ALTER TABLE `DT_BOOKS_STEPS_PICTURE`
  ADD CONSTRAINT `fk_DT_BOOKS_STEPS_PICTURE_DT_BOOKS_STEPS1` FOREIGN KEY (`BOOKS_STEPS`, `BOOKS_ID`, `USE_ID`) REFERENCES `DT_BOOKS_STEPS` (`BOOKS_STEPS_ID`, `BOOKS_ID`, `USE_ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `DT_LOCALIZATIONS`
--
ALTER TABLE `DT_LOCALIZATIONS`
  ADD CONSTRAINT `fk_DT_LOCALIZATIONS_DT_CITY1` FOREIGN KEY (`DT_CITY_CITY_ID`) REFERENCES `DT_CITY` (`CITY_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DT_LOCALIZATIONS_DT_LOCALIZATIONS_TYPE1` FOREIGN KEY (`LOC_TYPE_ID`) REFERENCES `DT_LOCALIZATIONS_TYPE` (`LOC_TYPE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `DT_ROUTE`
--
ALTER TABLE `DT_ROUTE`
  ADD CONSTRAINT `fk_DT_ROUTE_DT_USERS` FOREIGN KEY (`USE_ID`) REFERENCES `DT_USERS` (`USE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `DT_ROUTE_STEPS`
--
ALTER TABLE `DT_ROUTE_STEPS`
  ADD CONSTRAINT `fk_DT_ROUTE_has_DT_LOCALIZATIONS_DT_LOCALIZATIONS1` FOREIGN KEY (`LOC_ID`) REFERENCES `DT_LOCALIZATIONS` (`LOC_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DT_ROUTE_has_DT_LOCALIZATIONS_DT_ROUTE1` FOREIGN KEY (`ROU_ID`, `USE_ID`) REFERENCES `DT_ROUTE` (`ROUTE_ID`, `USE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
