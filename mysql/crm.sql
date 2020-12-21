-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 21 Ara 2020, 23:28:18
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `crm`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cName` text NOT NULL,
  `cLastName` text NOT NULL,
  `cEmail` text NOT NULL,
  `cAddress` text NOT NULL,
  `cPhone` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `cimagename` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `customer`
--

INSERT INTO `customer` (`id`, `cName`, `cLastName`, `cEmail`, `cAddress`, `cPhone`, `department_id`, `manager_id`, `cimagename`) VALUES
(56, 'necip', 'uysal', 'nu@numail.com', 'beÅŸiktas istanbul', 539, 17, 11, 'w4.png'),
(59, 'mustafa', 'gÃ¼ltekin', 'ma@mail.com', 'adana', 535, 17, 12, 'w2.png'),
(61, 'burak', 'yÄ±lmaz', 'by@mail.com', 'trabzon', 507, 19, 15, 'w3.png'),
(62, 'ali', 'metin', 'ali@mail.com', 'antalya', 531, 22, 13, 'w7.png'),
(75, 'department', 'Ã§anakk', 'm@mail.com', 'fdhdfhdf', 1232, 21, 13, 'm4.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dName` text,
  `dNumber` varchar(500) DEFAULT NULL,
  `dAddress` text CHARACTER SET utf8,
  `dPhoneNumber` varchar(500) DEFAULT NULL,
  `dContent` varchar(500) DEFAULT NULL,
  `dCountry` varchar(500) DEFAULT NULL,
  `dEmail` varchar(500) DEFAULT NULL,
  `dPostCode` varchar(500) DEFAULT NULL,
  `dCostumerType` varchar(500) DEFAULT NULL,
  `dReferenceCustomer` varchar(500) DEFAULT NULL,
  `dimagename` text,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `department`
--

INSERT INTO `department` (`did`, `dName`, `dNumber`, `dAddress`, `dPhoneNumber`, `dContent`, `dCountry`, `dEmail`, `dPostCode`, `dCostumerType`, `dReferenceCustomer`, `dimagename`) VALUES
(21, 'ADIM ROBOT', '42', 'kÃ¼tahya teknokent', '05302239182', NULL, NULL, 'info@adimrobot.com', NULL, NULL, NULL, 'logo5.png'),
(17, 'kuvarssoft', '44', 'DumlupÄ±nar Ãœniversitesi Teknokentti Ã‡alca Mah. EskiÅŸehir Karayolu 5. km. Ofis No : 9/10 Merkez/KÃœTAHYA', '785', NULL, NULL, 'destek@kuvarssoft.com', NULL, NULL, NULL, 'kuvars-mini-logo.png'),
(19, 'cevizsoft', '43', 'GazcÄ±lar Cad. KÄ±rcaali Mah. Anafartalar Sokak No: 2/1 Osmangazi / BURSA', ' 0549 252 19 00', NULL, NULL, 'info@cevizsoft.com', NULL, NULL, NULL, 'logo8.png'),
(20, 'AKM Ä°nteraktif', '47', 'KÃ¼tahya DumlupÄ±nar TasarÄ±m Teknokent 1. Kat D:11, 2. OSB, KÃœTAHYA', '0534 228 85 05', NULL, NULL, 'ahmedberaterarslan', NULL, NULL, NULL, 'logo9.png'),
(22, 'cezeri', '', 'Ã‡alca OSB Mah. 1 Cad. No: 1/14 43100 MERKEZ ', '9863', NULL, NULL, 'cezeriteknoloji@gmail', NULL, NULL, NULL, 'logo6.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `imagetables`
--

DROP TABLE IF EXISTS `imagetables`;
CREATE TABLE IF NOT EXISTS `imagetables` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` text,
  `iCustomerid` text,
  PRIMARY KEY (`iid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `imagetables`
--

INSERT INTO `imagetables` (`iid`, `imagename`, `iCustomerid`) VALUES
(5, 'papatya3.jpg', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mName` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mLastName` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mAddress` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mEmail` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mRole` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `mimagename` text,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `manager`
--

INSERT INTO `manager` (`mid`, `mName`, `mLastName`, `mAddress`, `mEmail`, `mRole`, `mimagename`) VALUES
(10, 'ABDULKERÄ°M', 'Ã‡AY', 'bursa', 'ac@acmail.com', 'insan kaynaklarÄ± yÃ¶neticisi', 'm2.png'),
(11, 'Deniz', 'ArpacÄ±', 'eskisehir', 'da@damail.com', 'muhasebe uzmanÄ±', 'w1.png'),
(12, 'sefa', 'karagÃ¶z', 'izmir', 'sk@skmail.com', 'yazÄ±lÄ±m geliÅŸtirme uzmanÄ±', 'm1.png'),
(13, 'bora', 'aydÄ±n', 'bursa', 'ba@bamail.com', 'Ã¼retim mÃ¼dÃ¼rÃ¼', 'w6.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `systemmanager`
--

DROP TABLE IF EXISTS `systemmanager`;
CREATE TABLE IF NOT EXISTS `systemmanager` (
  `ID` int(11) NOT NULL,
  `smName` varchar(11) NOT NULL,
  `smLastName` varchar(11) NOT NULL,
  `smUserName` text NOT NULL,
  `smPassword` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `systemmanager`
--

INSERT INTO `systemmanager` (`ID`, `smName`, `smLastName`, `smUserName`, `smPassword`) VALUES
(654321, 'mehmet', 'canak', 'mehmet', '75');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pas` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `pas`, `email`) VALUES
(16, 'demo', 'asdas', 'asdasd'),
(17, 'demo', 'asdas', 'asdasd'),
(18, 'demo', 'asdas', 'asdasd'),
(19, 'sadasd', 'asdsad', 'asdasd'),
(20, '1', '1', '1'),
(21, '121321', '321321321', '132321'),
(22, 'oguz', 'oguz', 'oguz'),
(23, 'qweqweqweqw', 'eqwqwe', 'eqweqwe'),
(24, 'asdsad', 'sdasdas', 'asda'),
(25, 'asdas', 'dsa', 'asdsad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
