-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3308
-- Üretim Zamanı: 24 Ara 2019, 10:55:58
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `mental_issue_id`, `comment_text`) VALUES
(6, 10, 2, 'Bilişsel  - Davranışçı terapi bu tarz fobileri tedavi etmek için en sık kullanılan terapidir. Maruz bırakma teknikleri gibi prosedürler, araştırma ve klinik uygulamalarda uzun ve başarılı bir geleneğe sahiptir. Bu yöntemler, yavaş yavaş akrofobikleri korkularının nesnesine yaklaştırır. Kademeli olarak daha güvenli hale gelirler ve kaygı reaksiyonlarını azaltırlar. Bu terapi sayesinde olumsuz düşüncelerinizi ve kaygılarınızı durdurabilir , korkularınızı yenebilirsiniz. Jeffret E. Young isimli yazarın Hayatı Yeniden Keşfedin isimli kitabını okuyabilirsiniz. Bilişsel-Davranışçı terapiyi uygulayabilmeniz için güzel bir yol.'),
(7, 10, 4, 'Ablanız eniştenizin ölümünü kontrol edemediğinden dolayı her elini yıkayışında her şeyi kontrol altına alıyor olabilir. Bu şekilde ellerine zarar vermektense el işi sanatlarıyla uğraşıp yeni hobiler edinip bu sorunu atlatabilir'),
(10, 11, 5, 'Babanın kıymetini bilmelisin. Onun dışında herkesten ilgi beklemek yerine senin de onlarla ilgilenmen gerekebilir belli bir süre. Ne kadar konuşursan ilgilenirsen geri dönüşü de o şekilde olacaktır. Sevgiler ');

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
  `description` longtext NOT NULL,
  PRIMARY KEY (`mental_issue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mental_issue`
--

INSERT INTO `mental_issue` (`mental_issue_id`, `issue_name`, `issue_type_id`, `thumb_img_url`, `description`) VALUES
(1, 'Karanlık Fobisi\r\n( Nyctophdoia ) ', '1', 'img/Fobiler/Karanl%C4%B1k.jpg', 'Kendimi bildim bileli karanlıktan korkuyorum. Sinemada kendimi oldukça huzursuz ve tehlikede hissediyorum.             Gece uyurken de gece lambası yerine odamın kendi ışığını tercih ediyorum , bu da uyumamı zorlaştırıp her günümü mahvediyor. Ne arkadaşlarımla sinemaya gidebiliyorum             ne de rahat uyuyabiliyorum.'),
(2, 'Yükseklik Fobisi\r\n( Acrophdoia )', '1', 'img/Fobiler/y%C3%BCkseklik.jpg', '3.Katın balkonundan bile aşağıya bakamıyorum. Erzurum\'da ailemle beraber yaşıyorum. 2 haftada 1 İstanbul\'a gitmem gerekiyor.             Ve her defasında otobüs yolculuğunu seçmek zorunda kalıyorum. Bu da 2 saatte gidebileceğim yolu yaklaşık 17 saate çıkartıyor.             Yollarda geçen bunca zamanım beni oldukça rahatsız etmeye başladı. Ne yapabilirim bu korkuyu yenebilmek için ?'),
(3, 'Yoldan Karşıya Geçme Fobisi\r\n( Agirafobi ) ', '1', 'img/Fobiler/yol.jpg', '   Yoldan karşıya geçen insanları izlerken içime sürekli kötü hisler doğuyor. Daha önceden arkadaşlarım yardımıyla yoldan karşıya geçmeye çalıştığımda             ne yapacağımı şaşırıp direkt olarak bağırarak geri dönmeyi tercih ettim. Kısa mesafe dahi olsa komşumuz olan bir taksiciyi çağırmam gerekiyor. Her             ne kadar indirim yapsa da öğrenci olduğumdan dolayı maddi sorun yaşayabiliyorum. Yaya olarak da gezebilmek ve istediğim yere gidebilmek istiyorum.'),
(4, 'Travmatik Yas', '2', 'img/Travmalar/travma1.png', '      Ablam kocası vefat ettiğinden beri sürekli olarak ellerini yıkayıp duruyor. Elleri yıkanmaktan tahriş olmuş durumda ve psikoloğa ya da             psikiyatriye gitmeyi reddediyor. Eşi vefat edesiye kadar böyle bir sorunu yoktu ne yapacağımı bilmiyorum. Eşinin vefatının kendisinde bir travma yarattığını             düşünüyorum.'),
(5, 'İlgi Bağımlılığı', '2', 'img/Travmalar/travma2.jpg', ' Babam küçük yaşımdan beri benimle aşırı ilgileniyor. Babamı her şeyden ve herkesten çok seviyorum. Birçok erkek arkadaşım oldu ancak hiçbirinde aradığım ilgiyi göremedim.             Bu yüzden hiçbir ilişkimde mutlu olamıyorum. Benimle kimse babam kadar ilgilenmedi ve ilgilenemez de. Her ne kadar babamın bana olan ilgisi hoşuma gidiyor olsa da tüm ilişkilerimde             karşı taraftan aşırı ilgi beklememe neden oluyor. Bana babamın gösterdiği bu ilginin travmatik bir etkisi olduğunu düşünüyorum. Ne yapmalıyım sizce ?');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `mail`) VALUES
(5, 'mabel', '6c14da109e294d1e8155be8aa4b1ce8e', 'gasdas@gmail.com'),
(6, 'ibrahimtatlisex', '81dc9bdb52d04dc20036dbd8313ed055', 'asdasdas@gmail.com'),
(7, 'kokko', '81dc9bdb52d04dc20036dbd8313ed055', 'sds@gmail.com'),
(8, 'dipper', '81dc9bdb52d04dc20036dbd8313ed055', 'xcx@gmail.com'),
(9, 'kahveland', 'bcfa8a783aaf938cdef361634d5f9289', 'esmsofficial@gmail.com'),
(10, 'osman_kaya', '202cb962ac59075b964b07152d234b70', 'sadasdassadsa@fdsdfsdfsdfdds.com'),
(11, 'Peter Griffin', '140f6969d5213fd0ece03148e62e461e', 'pizzaeater@sagopa.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
