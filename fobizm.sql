-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3308
-- Üretim Zamanı: 24 Ara 2019, 09:02:56
-- Sunucu sürümü: 8.0.18
-- PHP Sürümü: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fobizm`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mental_issue_id` int(11) NOT NULL,
  `comment_text` longtext NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `mental_issue_id`, `comment_text`) VALUES
(1, 8, 2, 'asdasdasdasdasdasd'),
(2, 8, 2, 'vxcvxcvxcvxcv'),
(3, 8, 2, 'bcvbcvbcvbcvb');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mental_issue`
--

DROP TABLE IF EXISTS `mental_issue`;
CREATE TABLE IF NOT EXISTS `mental_issue` (
  `mental_issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `issue_name` text NOT NULL,
  `issue_type_id` text NOT NULL,
  `thumb_img_url` text NOT NULL,
  PRIMARY KEY (`mental_issue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mental_issue`
--

INSERT INTO `mental_issue` (`mental_issue_id`, `issue_name`, `issue_type_id`, `thumb_img_url`) VALUES
(1, 'Karanlık Fobisi\r\n( Nyctophdoia ) ', '1', 'img/Fobiler/Karanl%C4%B1k.jpg'),
(2, 'Yükseklik Fobisi\r\n( Acrophdoia )', '1', 'img/Fobiler/y%C3%BCkseklik.jpg'),
(3, 'Yoldan Karşıya Geçme Fobisi\r\n( Agirafobi ) ', '1', 'img/Fobiler/yol.jpg'),
(4, 'Travmatik Yas', '2', ''),
(5, 'İlgi Bağımlılığı', '2', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mental_issue_type`
--

DROP TABLE IF EXISTS `mental_issue_type`;
CREATE TABLE IF NOT EXISTS `mental_issue_type` (
  `mental_issue_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `mental_issue_type_title` text NOT NULL,
  PRIMARY KEY (`mental_issue_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mental_issue_type`
--

INSERT INTO `mental_issue_type` (`mental_issue_type_id`, `mental_issue_type_title`) VALUES
(1, 'Fobi'),
(2, 'Travma');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `mail`) VALUES
(5, 'mabel', '6c14da109e294d1e8155be8aa4b1ce8e', 'gasdas@gmail.com'),
(6, 'ibrahimtatlisex', '81dc9bdb52d04dc20036dbd8313ed055', 'asdasdas@gmail.com'),
(7, 'kokko', '81dc9bdb52d04dc20036dbd8313ed055', 'sds@gmail.com'),
(8, 'dipper', '81dc9bdb52d04dc20036dbd8313ed055', 'xcx@gmail.com'),
(9, 'kahveland', 'bcfa8a783aaf938cdef361634d5f9289', 'esmsofficial@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
