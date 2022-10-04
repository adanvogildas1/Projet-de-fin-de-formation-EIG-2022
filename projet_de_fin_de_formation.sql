-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 oct. 2022 à 15:28
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_de_fin_de_formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `titre` varchar(225) NOT NULL,
  `paragraphe` text NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`id`, `image`, `titre`, `paragraphe`, `date_ajout`, `date_modification`) VALUES
(1, 'https://www.banouto.bj/uploads/images/patrice-talon-monument-12.jpg', 'Patrice Guillaume Athanase TALON', 'Né ler mai 1958 à Ouidah(République du D\'Abomey), il est un homme d\'affaires et homme d\'Etat béninois, président de la république depuis le 6 avril 2016.', '2022-09-26 17:28:35', '2022-09-26 17:28:35'),
(2, 'https://cdn.resfu.com/media/img_news/afp_fr_c4d4b3118f1370b2bcc9f1e5af161794e8412248.jpg\r\n             ', 'Chritiano Ronaldo Dos Santos AVEIRO', 'Né le 5 février à Funchal, il est un footballeur international portugais qui évolue au poste d\'attaquant à Manchester United.', '2022-09-26 17:28:35', '2022-09-26 17:28:35'),
(3, 'https://img.lemde.fr/2022/01/05/0/0/4513/3180/664/0/75/0/f4aef04_743165530-000-8wa6va.jpg\"\r\n            ', 'Elon MUSK', 'Actuellement le plus riche du monde, il est né le 28 Juin 1971 à Pretoria(Afrique du Sud), est un ingénieur, entrepreneur, chef d\'entreprise et milliardaire de nationalités Sud-africaine, Canadienne et Américaine.', '2022-09-26 17:32:43', '2022-09-26 17:32:43'),
(4, 'https://media.gettyimages.com/photos/lionel-messi-poses-onstage-after-winning-his-sixth-ballon-dor-award-picture-id1191655197?s=594x594\r\n             ', 'Lionel MESSI', 'Né le 24 Juin 1987 à Rosario en Argentine, il est un footballeur international évoluant au poste d\'attaquant au Paris Saint Germain.', '2022-09-26 17:32:43', '2022-09-26 17:32:43'),
(5, 'https://cherry.img.pmdstatic.net/fit/https.3A.2F.2Fimg.2Esport.2Egentside.2Ecom.2Fs3.2Ffrgss.2Fmma.2Fdefault_2022-09-05_a0fe1731-62a5-4a86-ad27-f45b0886b6bf.2Ejpeg/1200x675/quality/80/ciryl-gane-a-donne-son-avis-sur-francis-ngannou-et-une-eventuelle-revanche-en-conference-de-presse-de-l-ufc-paris.jpg\r\n             ', 'Francis NGANNOU', 'Né le 5 septembre 1986 à Batié au Cameroun, il est un pratiquant franco-camerounais d\'arts martiaux mixtes(MMA)', '2022-09-26 17:35:55', '2022-09-26 17:35:55');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(500) NOT NULL,
  `sujet` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `sujet`, `email`, `subject`, `date_ajout`, `date_modification`) VALUES
(18, 'ADANVO Gildas Zinsou', 'réclamation ', 'gadanvo33@gmail.com', 'je vous envoie ce message pour vous signalé ..........', '2022-10-04 16:51:52', '2022-10-04 16:51:52');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nom_du_personnage` varchar(255) NOT NULL,
  `en_savoir_plus` text NOT NULL,
  `image` text NOT NULL,
  `categorie` enum('FOOTBALLEURS','ENTREPRENEURS','DEVELOPPEURS','TAEKWONDOISTES') NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_du_personnage`, `en_savoir_plus`, `image`, `categorie`, `date_ajout`, `date_modification`) VALUES
(5, 'CRITIANO RONALDO', 'https://fr.wikipedia.org/wiki/Cristiano_Ronaldo', 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Cristiano_Ronaldo_2018.jpg', 'FOOTBALLEURS', '2022-09-26 15:34:55', '2022-09-26 15:34:55'),
(2, 'ELON MUSK', '', 'https://images.rtl.fr/~c/2000v2000/rtl/www/1524020-elon-musk-le-2-mai-2022.jpg', 'ENTREPRENEURS', '2022-09-25 15:59:08', '2022-09-25 15:59:08'),
(3, 'BILL GATES', 'https://www.youtube.com/watch?v=iIsv3xtPtgw', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Bill_Gates_-_Nov._8%2C_2019.jpg/640px-Bill_Gates_-_Nov._8%2C_2019.jpg', 'DEVELOPPEURS', '2022-09-25 16:12:56', '2022-09-25 16:12:56'),
(4, 'FRANCIS NGANNOU', 'https://fr.wikipedia.org/wiki/Francis_Ngannou#Biographie', ' https://sportnewsafrica.com/wp-content/uploads/2021/10/Francis-Ngannou.jpg', 'TAEKWONDOISTES', '2022-09-25 16:12:56', '2022-09-25 16:12:56'),
(6, 'KYLIAN MBAPPE', 'https://fr.wikipedia.org/wiki/Kylian_Mbapp%C3%A9', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/2019-07-17_SG_Dynamo_Dresden_vs._Paris_Saint-Germain_by_Sandro_Halank%E2%80%93129_%28cropped%29.jpg/800px-2019-07-17_SG_Dynamo_Dresden_vs._Paris_Saint-Germain_by_Sandro_Halank%E2%80%93129_%28cropped%29.jpg', 'FOOTBALLEURS', '2022-09-26 19:10:55', '2022-09-26 19:10:55'),
(7, 'SADIO MANE', 'https://fr.wikipedia.org/wiki/Sadio_Man%C3%A9', 'https://www.thesun.co.uk/wp-content/uploads/2022/06/NINTCHDBPICT000738953589-2.jpg', 'FOOTBALLEURS', '2022-09-26 19:17:02', '2022-09-26 19:17:02'),
(8, 'Patrice Guillaume Athanase TALON', 'https://fr.wikipedia.org/wiki/Patrice_Talon', 'https://www.agenceafrique.com/wp-content/uploads/2021/12/TALON.png', 'ENTREPRENEURS', '2022-09-26 19:20:48', '2022-09-26 19:20:48'),
(9, 'ADA LOVELACE', 'https://fr.wikipedia.org/wiki/Ada_Lovelace', 'http://blogs.univ-poitiers.fr/busciences/files/2019/10/417px-Ada_Lovelace_portrait.jpg', 'DEVELOPPEURS', '2022-09-26 19:33:36', '2022-09-26 19:33:36'),
(10, 'KAMARU USMAN', 'https://en.wikipedia.org/wiki/Kamaru_Usman', 'https://parlersport.com/wp-content/uploads/2021/06/Comment-osez-vous-Kamaru-Usman-sur-Gilbert-Burns-le-defiant.jpg', 'TAEKWONDOISTES', '2022-09-26 19:39:32', '2022-09-26 19:39:32');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(200) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mot_de_passe` text,
  `type_compte` enum('USER','ADMIN','DEV') NOT NULL DEFAULT 'USER',
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom_prenom`, `email`, `telephone`, `mot_de_passe`, `type_compte`, `date_ajout`, `date_modification`) VALUES
(2, 'ADANVO Gildas Zinsou', 'adanvogildas@gmail.com', '0022966987445', '3656234f6c8b5a344f7e65a9723fdb68468bd340a0ea1816d5ef141bf69957f9db5a01b828eced83a6a3243b539880297f07f0f2a1c4ee7371e036f3b8bf962a', 'ADMIN', '2022-09-25 10:58:48', '2022-09-25 10:58:48'),
(3, 'gildas', 'gadanvo33@gmail.com', '00229658774', '3656234f6c8b5a344f7e65a9723fdb68468bd340a0ea1816d5ef141bf69957f9db5a01b828eced83a6a3243b539880297f07f0f2a1c4ee7371e036f3b8bf962a', 'USER', '2022-09-25 15:37:58', '2022-09-25 15:37:58'),
(5, 'pokpo', 'gadanvo33@gmail.com', '229657842', '3656234f6c8b5a344f7e65a9723fdb68468bd340a0ea1816d5ef141bf69957f9db5a01b828eced83a6a3243b539880297f07f0f2a1c4ee7371e036f3b8bf962a', 'USER', '2022-09-28 15:13:10', '2022-09-28 15:13:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
