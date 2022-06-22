-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 23 juin 2022 à 00:29
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `AuMoK`
--

-- --------------------------------------------------------

--
-- Structure de la table `CarBrands`
--

CREATE TABLE `CarBrands` (
  `IdBrand` int(11) NOT NULL,
  `BrandName` varchar(100) NOT NULL,
  `BrandLogo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `CarBrands`
--

INSERT INTO `CarBrands` (`IdBrand`, `BrandName`, `BrandLogo`) VALUES
(1, '4 Stroke', 'https://images.caradisiac.com/logos-ref/auto/auto--4-stroke.png'),
(2, 'Abarth', 'https://images.caradisiac.com/logos-ref/auto/auto--abarth.png'),
(3, 'AC', 'https://images.caradisiac.com/logos-ref/auto/auto--ac.png'),
(4, 'Acrea', 'https://images.caradisiac.com/logos-ref/auto/auto--acrea.png'),
(5, 'Acura', 'https://images.caradisiac.com/logos-ref/auto/auto--acura.png'),
(6, 'Ad Tramontana', 'https://images.caradisiac.com/logos-ref/auto/auto--ad-tramontana.png'),
(7, 'Adler', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(8, 'Aiways', 'https://images.caradisiac.com/logos-ref/auto/auto--aiways.png'),
(9, 'Aixam', 'https://images.caradisiac.com/logos-ref/auto/auto--aixam.png'),
(10, 'Al Melling', 'https://images.caradisiac.com/logos-ref/auto/auto--al-melling.png'),
(11, 'Aleko', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(12, 'Alfa Romeo', 'https://images.caradisiac.com/logos-ref/auto/auto--alfa-romeo.png'),
(13, 'Alke', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(14, 'Alpina', 'https://images.caradisiac.com/logos-ref/auto/auto--alpina.png'),
(15, 'Alpine', 'https://images.caradisiac.com/logos-ref/auto/auto--alpine-renault.png'),
(16, 'Alvis', 'https://images.caradisiac.com/logos-ref/auto/auto--alvis.png'),
(17, 'Am General', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(18, 'Amc', 'https://images.caradisiac.com/logos-ref/auto/auto--amc.png'),
(19, 'Amphicar', 'https://images.caradisiac.com/logos-ref/auto/auto--amphicar.png'),
(20, 'Anaig', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(21, 'Apal', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(22, 'Aptera Motors', 'https://images.caradisiac.com/logos-ref/auto/auto--aptera-motors.png'),
(23, 'Ariel', 'https://images.caradisiac.com/logos-ref/auto/auto--ariel.png'),
(24, 'Armstrong Siddeley', 'https://images.caradisiac.com/logos-ref/auto/auto--armstrong-siddeley.png'),
(25, 'Aro', 'https://images.caradisiac.com/logos-ref/auto/auto--aro.png'),
(26, 'Artega', 'https://images.caradisiac.com/logos-ref/auto/auto--artega.png'),
(27, 'Ascari', 'https://images.caradisiac.com/logos-ref/auto/auto--ascari.png'),
(28, 'Aspark', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(29, 'Aston Martin', 'https://images.caradisiac.com/logos-ref/auto/auto--aston-martin.png'),
(30, 'Auburn', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(31, 'Audi', 'https://images.caradisiac.com/logos-ref/auto/auto--audi.png'),
(32, 'Austin', 'https://images.caradisiac.com/logos-ref/auto/auto--austin.png'),
(33, 'Austin Healey', 'https://images.caradisiac.com/logos-ref/auto/auto--austin-healey.png'),
(34, 'Auto Union', 'https://images.caradisiac.com/logos-ref/auto/auto--auto-union.png'),
(35, 'Autobianchi', 'https://images.caradisiac.com/logos-ref/auto/auto--autobianchi.png'),
(36, 'Auverland', 'https://images.caradisiac.com/logos-ref/auto/auto--auverland.png'),
(37, 'Bee Automobiles', 'https://images.caradisiac.com/logos-ref/auto/auto--bee-automobiles.png'),
(38, 'Bellier', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(39, 'Bentley', 'https://images.caradisiac.com/logos-ref/auto/auto--bentley.png'),
(40, 'Berliet', 'https://images.caradisiac.com/logos-ref/auto/auto--berliet.png'),
(41, 'Bertone', 'https://images.caradisiac.com/logos-ref/auto/auto--bertone.png'),
(42, 'Bitter', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(43, 'Bizzarrini', 'https://images.caradisiac.com/logos-ref/auto/auto--bizzarrini.png'),
(44, 'Bluecar Groupe Bollore', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(45, 'BMW', 'https://images.caradisiac.com/logos-ref/auto/auto--bmw.png'),
(46, 'Bollore', 'https://images.caradisiac.com/logos-ref/auto/auto--bollore.png'),
(47, 'Bongarini', 'https://images.caradisiac.com/logos-ref/auto/auto--bongarini.png'),
(48, 'Booxt', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(49, 'Borgward', 'https://images.caradisiac.com/logos-ref/auto/auto--borgward.png'),
(50, 'Bowler', 'https://images.caradisiac.com/logos-ref/auto/auto--bowler.png'),
(51, 'Brabus', 'https://images.caradisiac.com/logos-ref/auto/auto--brabus.png'),
(52, 'Bremach', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(53, 'Brilliance', 'https://images.caradisiac.com/logos-ref/auto/auto--brilliance.png'),
(54, 'Bristol', 'https://images.caradisiac.com/logos-ref/auto/auto--bristol.png'),
(55, 'Brooke Cars', 'https://images.caradisiac.com/logos-ref/auto/auto--brooke-cars.png'),
(56, 'Bugatti', 'https://images.caradisiac.com/logos-ref/auto/auto--bugatti.png'),
(57, 'Buick', 'https://images.caradisiac.com/logos-ref/auto/auto--buick.png'),
(58, 'Burby S', 'https://images.caradisiac.com/logos-ref/auto/auto--burby-s.png'),
(59, 'BYD', 'https://images.caradisiac.com/logos-ref/auto/auto--byd.png'),
(60, 'Cadillac', 'https://images.caradisiac.com/logos-ref/auto/auto--cadillac.png'),
(61, 'Caparo', 'https://images.caradisiac.com/logos-ref/auto/auto--caparo.png'),
(62, 'Carbodies', 'https://images.caradisiac.com/logos-ref/auto/auto--carbodies.png'),
(63, 'Carbontech', 'https://images.caradisiac.com/logos-ref/auto/auto--carbontech.png'),
(64, 'Carver', 'https://images.caradisiac.com/logos-ref/auto/auto--carver.png'),
(65, 'Casalini', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(66, 'Caterham', 'https://images.caradisiac.com/logos-ref/auto/auto--caterham.png'),
(67, 'CG', 'https://images.caradisiac.com/logos-ref/auto/auto--cg.png'),
(68, 'Chateney', 'https://images.caradisiac.com/logos-ref/auto/auto--chatenet.png'),
(69, 'Chenard Et Walcker', 'https://images.caradisiac.com/logos-ref/auto/auto--chenard-et-walcker.png'),
(70, 'Chery', 'https://images.caradisiac.com/logos-ref/auto/auto--chery.png'),
(71, 'Chevrolet', 'https://images.caradisiac.com/logos-ref/auto/auto--chevrolet.png'),
(72, 'China Automobile', 'https://images.caradisiac.com/logos-ref/auto/auto--china-automobile.png'),
(73, 'Chrysler', 'https://images.caradisiac.com/logos-ref/auto/auto--chrysler.png'),
(74, 'Citroen', 'https://images.caradisiac.com/logos-ref/auto/auto--citroen.png'),
(75, 'Clenet', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(76, 'Commuter Cars', 'https://images.caradisiac.com/logos-ref/auto/auto--commuter-cars.png'),
(77, 'Connaught', 'https://images.caradisiac.com/logos-ref/auto/auto--connaught.png'),
(78, 'Coste', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(79, 'Courb', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(80, 'Cupra', 'https://images.caradisiac.com/logos-ref/auto/auto--cupra.png'),
(81, 'Dacia', 'https://images.caradisiac.com/logos-ref/auto/auto--dacia.png'),
(82, 'Daewoo', 'https://images.caradisiac.com/logos-ref/auto/auto--daewoo.png'),
(83, 'Daf', 'https://images.caradisiac.com/logos-ref/auto/auto--daf.png'),
(84, 'Daihatsu', 'https://images.caradisiac.com/logos-ref/auto/auto--daihatsu.png'),
(85, 'Daimler', 'https://images.caradisiac.com/logos-ref/auto/auto--daimler.png'),
(86, 'Dallara', 'https://images.caradisiac.com/logos-ref/auto/auto--dallara.png'),
(87, 'Dangel', 'https://images.caradisiac.com/logos-ref/auto/auto--dangel.png'),
(88, 'Darmont', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(89, 'Datsun', 'https://images.caradisiac.com/logos-ref/auto/auto--datsun.png'),
(90, 'De Fremont', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(91, 'De La Chapelle', 'https://images.caradisiac.com/logos-ref/auto/auto--de-la-chapelle.png'),
(92, 'De Lorean', 'https://images.caradisiac.com/logos-ref/auto/auto--de-lorean.png'),
(93, 'De Soto', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(94, 'De Tomaso', 'https://images.caradisiac.com/logos-ref/auto/auto--de-tomaso.png'),
(95, 'Delage', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(96, 'Delaye', 'https://images.caradisiac.com/logos-ref/auto/auto--delahaye.png'),
(97, 'Deronda', 'https://images.caradisiac.com/logos-ref/auto/auto--deronda.png'),
(98, 'Deutsc-bonnet', 'https://images.caradisiac.com/logos-ref/auto/auto--deutsch-bonnet.png'),
(99, 'Devinci', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(100, 'Devon', 'https://images.caradisiac.com/logos-ref/auto/auto--devon.png'),
(101, 'DFSK', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(102, 'DKW', 'https://images.caradisiac.com/logos-ref/auto/auto--dodge.png'),
(103, 'Dongfeng', 'https://images.caradisiac.com/logos-ref/auto/auto--dongfeng.png'),
(104, 'Donkervoort', 'https://images.caradisiac.com/logos-ref/auto/auto--donkervoort.png'),
(105, 'Donnet', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(106, 'Dr Motor', 'https://images.caradisiac.com/logos-ref/auto/auto--dr-motor.png'),
(107, 'DS', 'https://images.caradisiac.com/logos-ref/auto/auto--ds.png'),
(108, 'Due', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(109, 'Duesenberg', 'https://images.caradisiac.com/logos-ref/auto/auto--duesenberg.png'),
(110, 'Eagle', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(111, 'Ebro', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(112, 'Edsel', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(113, 'ELV', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(114, 'Embuggy', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(115, 'Erad', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(116, 'Estrima', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(117, 'Exagon Motors', 'https://images.caradisiac.com/logos-ref/auto/auto--exagon-motors.png'),
(118, 'Excalibur', 'https://images.caradisiac.com/logos-ref/auto/auto--excalibur.png'),
(119, 'Facel Vega', 'https://images.caradisiac.com/logos-ref/auto/auto--facel-vega.png'),
(120, 'Fam Automobiles', 'https://images.caradisiac.com/logos-ref/auto/auto--fam-automobiles.png'),
(121, 'Faraday Future', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(122, 'Faralli Mazzanti', 'https://images.caradisiac.com/logos-ref/auto/auto--faralli-mazzanti.png'),
(123, 'Farbio', 'https://images.caradisiac.com/logos-ref/auto/auto--farbio.png'),
(124, 'Ferrari', 'https://images.caradisiac.com/logos-ref/auto/auto--ferrari.png'),
(125, 'Fiat', 'https://images.caradisiac.com/logos-ref/auto/auto--fiat.png'),
(126, 'Fioravanti', 'https://images.caradisiac.com/logos-ref/auto/auto--fioravanti.png'),
(127, 'Fisker', 'https://images.caradisiac.com/logos-ref/auto/auto--fisker.png'),
(128, 'Ford', 'https://images.caradisiac.com/logos-ref/auto/auto--ford.png'),
(129, 'Fornasari', 'https://images.caradisiac.com/logos-ref/auto/auto--fornasari.png'),
(130, 'FSO', 'https://images.caradisiac.com/logos-ref/auto/auto--fso.png'),
(131, 'Gac Gonow', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(132, 'Gac Motor', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(133, 'Geely', 'https://images.caradisiac.com/logos-ref/auto/auto--geely.png'),
(134, 'Genesis', 'https://images.caradisiac.com/logos-ref/auto/auto--genesis.png'),
(135, 'Gillet', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(136, 'Ginetta', 'https://images.caradisiac.com/logos-ref/auto/auto--ginetta.png'),
(137, 'Glas', 'https://images.caradisiac.com/logos-ref/auto/auto--glas.png'),
(138, 'GMC', 'https://images.caradisiac.com/logos-ref/auto/auto--gmc.png'),
(139, 'GME', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(140, 'Goupil', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(141, 'Grandin', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(142, 'Greet Wall', 'https://images.caradisiac.com/logos-ref/auto/auto--great-wall.png'),
(143, 'Grecav', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(144, 'Gumpert', 'https://images.caradisiac.com/logos-ref/auto/auto--gumpert.png'),
(145, 'Healey', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(146, 'Helem', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(147, 'Hennessey', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(148, 'Heuliez', 'https://images.caradisiac.com/logos-ref/auto/auto--heuliez.png'),
(149, 'Hillman', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(150, 'Hispano Suiza Cars', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(151, 'Holden', 'https://images.caradisiac.com/logos-ref/auto/auto--holden.png'),
(152, 'Hommell', 'https://images.caradisiac.com/logos-ref/auto/auto--hommell.png'),
(153, 'Honda', 'https://images.caradisiac.com/logos-ref/auto/auto--honda.png'),
(154, 'Hotchkiss', 'https://images.caradisiac.com/logos-ref/auto/auto--hotchkiss.png'),
(155, 'Howmet', 'https://images.caradisiac.com/logos-ref/auto/auto--howmet.png'),
(156, 'Hudson', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(157, 'Humber', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(158, 'Hummer', 'https://images.caradisiac.com/logos-ref/auto/auto--hummer.png'),
(159, 'Hyundai', 'https://images.caradisiac.com/logos-ref/auto/auto--hyundai.png'),
(160, 'Imperial', 'https://images.caradisiac.com/logos-ref/auto/auto--imperial.png'),
(161, 'Ineos', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(162, 'Infiniti', 'https://images.caradisiac.com/logos-ref/auto/auto--infiniti.png'),
(163, 'Innocenti', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(164, 'Innotech', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(165, 'Intermeccanica', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(166, 'International', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(167, 'Invicta', 'https://images.caradisiac.com/logos-ref/auto/auto--invicta.png'),
(168, 'ISO', 'https://images.caradisiac.com/logos-ref/auto/auto--iso.png'),
(169, 'Isorivolta', 'https://images.caradisiac.com/logos-ref/auto/auto--isorivolta.png'),
(170, 'Isuku', 'https://images.caradisiac.com/logos-ref/auto/auto--isuzu.png'),
(171, 'Italcar', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(172, 'Iveco', 'https://images.caradisiac.com/logos-ref/auto/auto--iveco.png'),
(173, 'Jaguar', 'https://images.caradisiac.com/logos-ref/auto/auto--jaguar.png'),
(174, 'JDM Simpa', 'https://images.caradisiac.com/logos-ref/auto/auto--jdm-simpa.png'),
(175, 'Jeep', 'https://images.caradisiac.com/logos-ref/auto/auto--jeep.png'),
(176, 'Jensen', 'https://images.caradisiac.com/logos-ref/auto/auto--jensen.png'),
(177, 'Jiayuan', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(178, 'Karma', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(179, 'Kassbohrer Setra', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(180, 'KIA', 'https://images.caradisiac.com/logos-ref/auto/auto--kia.png'),
(181, 'Koenigsegg', 'https://images.caradisiac.com/logos-ref/auto/auto--koenigsegg.png'),
(182, 'KTM', 'https://images.caradisiac.com/logos-ref/auto/auto--ktm.png'),
(183, 'Lada', 'https://images.caradisiac.com/logos-ref/auto/auto--lada.png'),
(184, 'Lagonda', 'https://images.caradisiac.com/logos-ref/auto/auto--lagonda.png'),
(185, 'Lamborghini', 'https://images.caradisiac.com/logos-ref/auto/auto--lamborghini.png'),
(186, 'Lancia', 'https://images.caradisiac.com/logos-ref/auto/auto--lancia.png'),
(187, 'Land Rover', 'https://images.caradisiac.com/logos-ref/auto/auto--land-rover.png'),
(188, 'Landwind', 'https://images.caradisiac.com/logos-ref/auto/auto--landwind.png'),
(189, 'Lantana', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(190, 'Laraki', 'https://images.caradisiac.com/logos-ref/auto/auto--laraki.png'),
(191, 'LDV', 'https://images.caradisiac.com/logos-ref/auto/auto--ldv.png'),
(192, 'Levc', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(193, 'Lexus', 'https://images.caradisiac.com/logos-ref/auto/auto--lexus.png'),
(194, 'Lightyear', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(195, 'Ligier', 'https://images.caradisiac.com/logos-ref/auto/auto--ligier.png'),
(196, 'Lincoln', 'https://images.caradisiac.com/logos-ref/auto/auto--lincoln.png'),
(197, 'Lister', 'https://images.caradisiac.com/logos-ref/auto/auto--lister.png'),
(198, 'Little', 'https://images.caradisiac.com/logos-ref/auto/auto--little.png'),
(199, 'Lola', 'https://images.caradisiac.com/logos-ref/auto/auto--lola.png'),
(200, 'London Taxi Company', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(201, 'Loremo', 'https://images.caradisiac.com/logos-ref/auto/auto--loremo.png'),
(202, 'Lotus', 'https://images.caradisiac.com/logos-ref/auto/auto--lotus.png'),
(203, 'Lumeneo', 'https://images.caradisiac.com/logos-ref/auto/auto--lumeneo.png'),
(204, 'Lynk & Co', 'https://images.caradisiac.com/logos-ref/auto/auto--lynk-co.png'),
(205, 'Mahindra', 'https://images.caradisiac.com/logos-ref/auto/auto--mahindra.png'),
(206, 'Man', 'https://images.caradisiac.com/logos-ref/auto/auto--man.png'),
(207, 'Marcadier', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(208, 'Marcos', 'https://images.caradisiac.com/logos-ref/auto/auto--marcos.png'),
(209, 'Martin', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(210, 'Marussia', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(211, 'Maruti', 'https://images.caradisiac.com/logos-ref/auto/auto--maruti.png'),
(212, 'Maserati', 'https://images.caradisiac.com/logos-ref/auto/auto--maserati.png'),
(213, 'Matra', 'https://images.caradisiac.com/logos-ref/auto/auto--matra.png'),
(214, 'Maybach', 'https://images.caradisiac.com/logos-ref/auto/auto--maybach.png'),
(215, 'Mazda', 'https://images.caradisiac.com/logos-ref/auto/auto--mazda.png'),
(216, 'McLaren', 'https://images.caradisiac.com/logos-ref/auto/auto--mclaren.png'),
(217, 'MDI', 'https://images.caradisiac.com/logos-ref/auto/auto--mdi.png'),
(218, 'Mega', 'https://images.caradisiac.com/logos-ref/auto/auto--mega.png'),
(219, 'Melkus', 'https://images.caradisiac.com/logos-ref/auto/auto--melkus.png'),
(220, 'Mercedes BENZ', 'https://images.caradisiac.com/logos-ref/auto/auto--mercedes.png'),
(221, 'Mercedes AMG', 'https://images.caradisiac.com/logos-ref/auto/auto--mercedes-amg.png'),
(222, 'Mercury', 'https://images.caradisiac.com/logos-ref/auto/auto--mercury.png'),
(223, 'Messerschimitt', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(224, 'MEV', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(225, 'Meyers Manx', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(226, 'MG', 'https://images.caradisiac.com/logos-ref/auto/auto--mg.png'),
(227, 'Mia Electric', 'https://images.caradisiac.com/logos-ref/auto/auto--mia-electric.png'),
(228, 'Microcar', 'https://images.caradisiac.com/logos-ref/auto/auto--microcar.png'),
(229, 'Minauto', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(230, 'Mini', 'https://images.caradisiac.com/logos-ref/auto/auto--mini.png'),
(231, 'Mitsubushi', 'https://images.caradisiac.com/logos-ref/auto/auto--mitsubishi.png'),
(232, 'Mitsubishi Fuso', 'https://images.caradisiac.com/logos-ref/auto/auto--mitsubishi-fuso.png'),
(233, 'Mitsuoka', 'https://images.caradisiac.com/logos-ref/auto/auto--mitsuoka.png'),
(234, 'Monteverdi', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(235, 'Morgan', 'https://images.caradisiac.com/logos-ref/auto/auto--morgan.png'),
(236, 'Morris', 'https://images.caradisiac.com/logos-ref/auto/auto--morris.png'),
(237, 'Mosler', 'https://images.caradisiac.com/logos-ref/auto/auto--mosler.png'),
(238, 'MPM Motors', 'https://images.caradisiac.com/logos-ref/auto/auto--mpm-motors.png'),
(239, 'MVS', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(240, 'Mygale', 'https://images.caradisiac.com/logos-ref/auto/auto--mygale.png'),
(241, 'Nanjing', 'https://images.caradisiac.com/logos-ref/auto/auto--nanjing.png'),
(242, 'Nash', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(243, 'Neckar', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(244, 'Newyark', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(245, 'Nosmoke', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(246, 'Noun Electric', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(247, 'Numexia', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(248, 'Newteon', 'https://images.caradisiac.com/logos-ref/auto/auto--newteon.png'),
(249, 'Nissan', 'https://images.caradisiac.com/logos-ref/auto/auto--nissan.png'),
(250, 'Noble', 'https://images.caradisiac.com/logos-ref/auto/auto--noble.png'),
(251, 'NSU', 'https://images.caradisiac.com/logos-ref/auto/auto--nsu.png'),
(252, 'Opel', 'https://images.caradisiac.com/logos-ref/auto/auto--opel.png'),
(253, 'Oldsmobile', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(254, 'OSI', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(255, 'Packard', 'https://images.caradisiac.com/logos-ref/auto/auto--packard.png'),
(256, 'Pagani', 'https://images.caradisiac.com/logos-ref/auto/auto--pagani.png'),
(257, 'Panhard', 'https://images.caradisiac.com/logos-ref/auto/auto--panhard.png'),
(258, 'Panoz', 'https://images.caradisiac.com/logos-ref/auto/auto--panoz.png'),
(259, 'Panther', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(260, 'Pegaso', 'https://images.caradisiac.com/logos-ref/auto/auto--pegaso.png'),
(261, 'Perana', 'https://images.caradisiac.com/logos-ref/auto/auto--perana.png'),
(262, 'Peugeot', 'https://images.caradisiac.com/logos-ref/auto/auto--peugeot.png'),
(263, 'PGO', 'https://images.caradisiac.com/logos-ref/auto/auto--pgo.png'),
(264, 'Piaggio', 'https://images.caradisiac.com/logos-ref/auto/auto--piaggio.png'),
(265, 'Pilbeam', 'https://images.caradisiac.com/logos-ref/auto/auto--pilbeam.png'),
(266, 'Pininfarina', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(267, 'Plymouth', 'https://images.caradisiac.com/logos-ref/auto/auto--plymouth.png'),
(268, 'Polestar', 'https://images.caradisiac.com/logos-ref/auto/auto--polestar.png'),
(269, 'Polski', 'https://images.caradisiac.com/logos-ref/auto/auto--polski.png'),
(270, 'Pontiac', 'https://images.caradisiac.com/logos-ref/auto/auto--pontiac.png'),
(271, 'Porsche', 'https://images.caradisiac.com/logos-ref/auto/auto--porsche.png'),
(272, 'Proton', 'https://images.caradisiac.com/logos-ref/auto/auto--proton.png'),
(273, 'Protoscar', 'https://images.caradisiac.com/logos-ref/auto/auto--protoscar.png'),
(274, 'Qoros', 'https://images.caradisiac.com/logos-ref/auto/auto--qoros.png'),
(275, 'Quant', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(276, 'Radical', 'https://images.caradisiac.com/logos-ref/auto/auto--radical.png'),
(277, 'RAM', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(278, 'Realm', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(279, 'Reliant', 'https://images.caradisiac.com/logos-ref/auto/auto--reliant.png'),
(280, 'Renault', 'https://images.caradisiac.com/logos-ref/auto/auto--renault.png'),
(281, 'Renault Trucks', 'https://images.caradisiac.com/logos-ref/auto/auto--renault-trucks.png'),
(282, 'Rene Bonnet', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(283, 'Reva', 'https://images.caradisiac.com/logos-ref/auto/auto--reva.png'),
(284, 'Reynard', 'https://images.caradisiac.com/logos-ref/auto/auto--reynard.png'),
(285, 'Riley', 'https://images.caradisiac.com/logos-ref/auto/auto--riley.png'),
(286, 'Rimac', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(287, 'Rinspeed', 'https://images.caradisiac.com/logos-ref/auto/auto--rinspeed.png'),
(288, 'Rivian', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(289, 'Rosengart', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(290, 'Rolls Royce', 'https://images.caradisiac.com/logos-ref/auto/auto--rolls-royce.png'),
(291, 'Ronart', 'https://images.caradisiac.com/logos-ref/auto/auto--ronart.png'),
(292, 'Rovert', 'https://images.caradisiac.com/logos-ref/auto/auto--rover.png'),
(293, 'Russo-Baltique', 'https://images.caradisiac.com/logos-ref/auto/auto--russo-baltique.png'),
(294, 'SAAB', 'https://images.caradisiac.com/logos-ref/auto/auto--saab.png'),
(295, 'SAIC', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(296, 'Saleen', 'https://images.caradisiac.com/logos-ref/auto/auto--saleen.png'),
(297, 'Salica', 'https://images.caradisiac.com/logos-ref/auto/auto--salica.png'),
(298, 'Salmson', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(299, 'Samsung', 'https://images.caradisiac.com/logos-ref/auto/auto--samsung.png'),
(300, 'Santana', 'https://images.caradisiac.com/logos-ref/auto/auto--santana.png'),
(301, 'Saturn', 'https://images.caradisiac.com/logos-ref/auto/auto--saturn.png'),
(302, 'Savel', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(303, 'Saviem', 'https://images.caradisiac.com/logos-ref/auto/auto--saviem.png'),
(304, 'Sbarro', 'https://images.caradisiac.com/logos-ref/auto/auto--sbarro.png'),
(305, 'Scania', 'https://images.caradisiac.com/logos-ref/auto/auto--scania.png'),
(306, 'Scion', 'https://images.caradisiac.com/logos-ref/auto/auto--scion.png'),
(307, 'Seat', 'https://images.caradisiac.com/logos-ref/auto/auto--seat.png'),
(308, 'Secma', 'https://images.caradisiac.com/logos-ref/auto/auto--secma.png'),
(309, 'Seres', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(310, 'Shelby', 'https://images.caradisiac.com/logos-ref/auto/auto--shelby.png'),
(311, 'Shuanghuan', 'https://images.caradisiac.com/logos-ref/auto/auto--shuanghuan.png'),
(312, 'Simca', 'https://images.caradisiac.com/logos-ref/auto/auto--simca.png'),
(313, 'Singer', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(314, 'Sivax', 'https://images.caradisiac.com/logos-ref/auto/auto--sivax.png'),
(315, 'Skoda', 'https://images.caradisiac.com/logos-ref/auto/auto--skoda.png'),
(316, 'Smart', 'https://images.caradisiac.com/logos-ref/auto/auto--smart.png'),
(317, 'SMS', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(318, 'Sovamag', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(319, 'Spectre', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(320, 'Spyker', 'https://images.caradisiac.com/logos-ref/auto/auto--spyker.png'),
(321, 'SRT', 'https://images.caradisiac.com/logos-ref/auto/auto--srt.png'),
(322, 'Ssangyong', 'https://images.caradisiac.com/logos-ref/auto/auto--ssangyong.png'),
(323, 'SSC', 'https://images.caradisiac.com/logos-ref/auto/auto--ssc.png'),
(324, 'Studebaker', 'https://images.caradisiac.com/logos-ref/auto/auto--studebaker.png'),
(325, 'Stutz', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(326, 'Subaru', 'https://images.caradisiac.com/logos-ref/auto/auto--subaru.png'),
(327, 'Sunbeam', 'https://images.caradisiac.com/logos-ref/auto/auto--sunbeam.png'),
(328, 'Suzuki', 'https://images.caradisiac.com/logos-ref/auto/auto--sunbeam.png'),
(329, 'Talbot', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(330, 'Talbot Simca', 'https://images.caradisiac.com/logos-ref/auto/auto--talbot-simca.png'),
(331, 'Tata', 'https://images.caradisiac.com/logos-ref/auto/auto--tata.png'),
(332, 'Teihol', 'https://images.caradisiac.com/logos-ref/auto/auto--teilhol.png'),
(333, 'Tesla', 'https://images.caradisiac.com/logos-ref/auto/auto--tesla.png'),
(334, 'Think', 'https://images.caradisiac.com/logos-ref/auto/auto--think.png'),
(335, 'Toyota', 'https://images.caradisiac.com/logos-ref/auto/auto--toyota.png'),
(336, 'Trabant', 'https://images.caradisiac.com/logos-ref/auto/auto--trabant.png'),
(337, 'Triumph', 'https://images.caradisiac.com/logos-ref/auto/auto--triumph.png'),
(338, 'TVR', 'https://images.caradisiac.com/logos-ref/auto/auto--tvr.png'),
(339, 'Ultima', 'https://images.caradisiac.com/logos-ref/auto/auto--ultima.png'),
(340, 'UMM', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(341, 'vaillante', 'https://images.caradisiac.com/logos-ref/auto/auto--vaillante.png'),
(342, 'Van Hool', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(343, 'Vanden Plas', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(344, 'Vauxhall', 'https://images.caradisiac.com/logos-ref/auto/auto--vauxhall.png'),
(345, 'Velam', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(346, 'Venturi', 'https://images.caradisiac.com/logos-ref/auto/auto--venturi.png'),
(347, 'Veritas', 'https://images.caradisiac.com/logos-ref/auto/auto--veritas.png'),
(348, 'Vespa', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(349, 'Vinfast', 'https://images.caradisiac.com/logos-ref/auto/auto--vinfast.png'),
(350, 'Virago', 'https://images.caradisiac.com/logos-ref/auto/auto--virago.png'),
(351, 'Volkswagen', 'https://images.caradisiac.com/logos-ref/auto/auto--volkswagen.png'),
(352, 'Volteis', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(353, 'Volvo', 'https://images.caradisiac.com/logos-ref/auto/auto--volvo.png'),
(354, 'Volvo Trucks', 'https://images.caradisiac.com/logos-ref/auto/auto--volvo-trucks.png'),
(355, 'Wallys Car', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(356, 'Wolseley', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(357, 'Xinyang', 'https://static.caradisiac.com/img_site/logo_marqueDefault.gif'),
(358, 'Westfield', 'https://images.caradisiac.com/logos-ref/auto/auto--westfield.png'),
(359, 'Wiesmann', 'https://images.caradisiac.com/logos-ref/auto/auto--wiesmann.png'),
(360, 'Willys', 'https://images.caradisiac.com/logos-ref/auto/auto--willys.png'),
(361, 'Zagato', 'https://images.caradisiac.com/logos-ref/auto/auto--zagato.png'),
(362, 'ZAP', 'https://images.caradisiac.com/logos-ref/auto/auto--zap.png'),
(363, 'Zastava', 'https://images.caradisiac.com/logos-ref/auto/auto--zastava.png'),
(364, 'Zenn', 'https://images.caradisiac.com/logos-ref/auto/auto--zenn.png'),
(365, 'Zenvo', 'https://images.caradisiac.com/logos-ref/auto/auto--zenvo.png');

-- --------------------------------------------------------

--
-- Structure de la table `CarModels`
--

CREATE TABLE `CarModels` (
  `idModel` int(11) NOT NULL,
  `ModelName` varchar(100) NOT NULL,
  `BrandName` varchar(100) NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `CodeUser` varchar(100) NOT NULL DEFAULT 'n/a',
  `Name` text NOT NULL DEFAULT 'n/a',
  `Firstname` text NOT NULL DEFAULT 'n/a',
  `BirthDate` date NOT NULL DEFAULT '0000-00-00',
  `eMail` varchar(100) NOT NULL DEFAULT 'n/a',
  `Phone` varchar(100) NOT NULL DEFAULT 'n/a',
  `Username` text NOT NULL DEFAULT 'n/a',
  `Password` text NOT NULL DEFAULT 'n/a',
  `isAlive` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`CodeUser`, `Name`, `Firstname`, `BirthDate`, `eMail`, `Phone`, `Username`, `Password`, `isAlive`) VALUES
('KanDav52356280084', 'Kante', 'David', '2022-05-30', 'aa@gmail.com', '4382336332', 'David', '123', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `CarBrands`
--
ALTER TABLE `CarBrands`
  ADD PRIMARY KEY (`IdBrand`) USING BTREE,
  ADD UNIQUE KEY `BrandName` (`BrandName`);

--
-- Index pour la table `CarModels`
--
ALTER TABLE `CarModels`
  ADD PRIMARY KEY (`idModel`) USING BTREE,
  ADD UNIQUE KEY `ModelName` (`ModelName`,`BrandName`),
  ADD KEY `carmodels_ibfk_1` (`BrandName`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`CodeUser`),
  ADD UNIQUE KEY `eMail` (`eMail`) USING BTREE,
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Username` (`Username`) USING HASH;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `CarBrands`
--
ALTER TABLE `CarBrands`
  MODIFY `IdBrand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT pour la table `CarModels`
--
ALTER TABLE `CarModels`
  MODIFY `idModel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `CarModels`
--
ALTER TABLE `CarModels`
  ADD CONSTRAINT `carmodels_ibfk_1` FOREIGN KEY (`BrandName`) REFERENCES `CarBrands` (`BrandName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
