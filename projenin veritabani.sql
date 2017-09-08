-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 13 May 2014, 01:30:14
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `351927`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminler`
--

CREATE TABLE IF NOT EXISTS `adminler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kuladi` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `adminler`
--

INSERT INTO `adminler` (`id`, `kuladi`, `sifre`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cevaplar`
--

CREATE TABLE IF NOT EXISTS `cevaplar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `ders` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `soruid` int(11) NOT NULL,
  `cevap` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=64 ;

--
-- Tablo döküm verisi `cevaplar`
--

INSERT INTO `cevaplar` (`id`, `kullanici`, `ders`, `soruid`, `cevap`) VALUES
(8, 'sda', 'turkce', 1, 'D) Zenginleþtirme yollarýnýn açýklandýðý'),
(9, 'sda', 'turkce', 2, 'D) Ýnsan, yeteneklerinin sýnýrlarýný gerçekçi bir tutumla belirlemeli, kendisini tarafsýz bir gözle deðerlendirmelidir.'),
(10, 'sda', 'turkce', 3, 'E) V.'),
(11, 'sda', 'turkce', 4, 'D) Oyuncularýn gösterdiði baþarýyla çok boyutlu bir yapý kazanmýþtýr.'),
(12, 'sda', 'turkce', 5, 'C) Her eser, baþka metinlerden alýnan parçalarla renklenen bir tablodur.'),
(13, 'sda', 'turkce', 6, 'A) Çok önemli iki ödül almasýna raðmen son romanýnýzýn çok satýlmamasýnýn nedeni ne olabilir?'),
(14, 'sda', 'turkce', 7, 'E) Þiir okuyucusunu karamsarlýða itmenin bir anlamý var mý'),
(15, 'sda', 'turkce', 8, 'C) III.  '),
(25, 'sda', 'mat', 1, '1'),
(26, 'sda', 'mat', 2, '5'),
(27, 'sda', 'mat', 3, '4'),
(28, 'sda', 'mat', 4, '7'),
(29, 'sda', 'mat', 5, '12'),
(30, 'sda', 'mat', 6, '116'),
(31, 'sda', 'mat', 7, '12'),
(32, 'sda', 'mat', 8, '140'),
(33, 'sda', 'mat', 9, '4'),
(34, 'sda', 'mat', 10, 'Miladi Takvim'),
(35, 'asd', 'mat', 1, '1'),
(36, 'asd', 'mat', 2, '3'),
(37, 'asd', 'mat', 3, '2'),
(38, 'asd', 'mat', 4, '10'),
(39, 'asd', 'mat', 5, '21'),
(40, 'asd', 'mat', 6, '144'),
(41, 'asd', 'mat', 7, '15'),
(42, 'asd', 'mat', 8, '140'),
(43, 'asd', 'mat', 9, '3'),
(44, 'asd', 'mat', 10, 'Yükseli takvim'),
(45, 'asd', 'sosyal', 1, 'Ýskenderiye Kütüphanesinin yakýlmasý '),
(46, 'asd', 'sosyal', 2, 'Kültürel etkileþimin artmasýnda '),
(47, 'asd', 'sosyal', 3, 'Arap edebiyatýnýn geliþtiði'),
(48, 'asd', 'sosyal', 4, 'Fars kültürünün etkisinde kaldýklarýný '),
(49, 'asd', 'sosyal', 5, 'Laiklik'),
(50, 'asd', 'sosyal', 6, 'kayý'),
(51, 'asd', 'sosyal', 7, 'A.B.D'),
(52, 'asd', 'sosyal', 8, 'Kazým Karabekir'),
(56, 'asd', 'turkce', 4, 'A) Belirli bir izleyici kitlesine seslenmek amaçlanmýþtýr.'),
(57, 'asd', 'turkce', 5, 'E) Çaðýný aþmýþ eserleri okuma, yaratýcýlýðý besleyen bir etkinliktir.'),
(58, 'asd', 'turkce', 6, 'D) Bazý yazarlarýmýzýn dediði gibi '),
(59, 'asd', 'turkce', 7, 'E) Þiir okuyucusunu karamsarlýða itmenin bir anlamý var mý'),
(60, 'asd', 'turkce', 8, 'D) IV.'),
(61, 'asd', 'turkce', 1, 'C) Çaðrýþýmsal deðerlerinin belirtildiði'),
(62, 'asd', 'turkce', 2, 'E) Ýnsanlar, hayattaki olumsuz durumlarý da olumlu durumlardaki gibi olgunlukla karþýlamalýdýr.'),
(63, 'asd', 'turkce', 3, 'E) V.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fen`
--

CREATE TABLE IF NOT EXISTS `fen` (
  `soruid` int(11) NOT NULL AUTO_INCREMENT,
  `soru` text COLLATE utf8_turkish_ci NOT NULL,
  `c1` text COLLATE utf8_turkish_ci NOT NULL,
  `c2` text COLLATE utf8_turkish_ci NOT NULL,
  `c3` text COLLATE utf8_turkish_ci NOT NULL,
  `c4` text COLLATE utf8_turkish_ci NOT NULL,
  `c5` text COLLATE utf8_turkish_ci NOT NULL,
  `dogru` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`soruid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mat`
--

CREATE TABLE IF NOT EXISTS `mat` (
  `soruid` int(11) NOT NULL AUTO_INCREMENT,
  `soru` text COLLATE utf8_turkish_ci NOT NULL,
  `c1` text COLLATE utf8_turkish_ci NOT NULL,
  `c2` text COLLATE utf8_turkish_ci NOT NULL,
  `c3` text COLLATE utf8_turkish_ci NOT NULL,
  `c4` text COLLATE utf8_turkish_ci NOT NULL,
  `c5` text COLLATE utf8_turkish_ci NOT NULL,
  `dogru` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`soruid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `mat`
--

INSERT INTO `mat` (`soruid`, `soru`, `c1`, `c2`, `c3`, `c4`, `c5`, `dogru`) VALUES
(1, 'Birler basamaðý 3 olan ve 9 ile bölünebilen üç basamaklý sayýlar abc biçiminde yazýlacaktýr. a  b  c koþulu ile böyle kaç tane sayý yazýlabilir?', '2', '4', '1', '5', '3', '2'),
(2, 'a en küçük ve c en büyük olmak üzere a, b ve c sayýlarý ardýþýk doðal sayýlardýr. \r\n[ (c-a) . (c-b)] / (b-a) iþleminin sonucu kaçtýr?', '1', '4', '5', '3', '2', '2'),
(3, '3 sayýsýnýn 73 üncü kuvvetinin 5 ile bölümünden kalan kaçtýr?', '1', '2', '3', '4', '5', '3'),
(4, '1  a  10 koþulu ile (2a+1) / a bayaðý kesirinin 10 katýnýn bir tamsayý olmasý için a ya verilebilecek deðerlerin toplamý kaçtýr?\r\n ', '7', '6', '11', '10', '8', '7'),
(5, 'Ardýþýk iki sayýnýn farkýnýn mutlak deðerinin iki fazlasýnýn karesine 6 eklersek hangi sayýyý elde ederiz? ', '17', '21', '9', '12', '15', '15'),
(6, 'Bir üçgenin iç açýlarý 2 : 3 : 5 sayýlarý ile orantýlýdýr. Bu üçgenin en büyük dýþ açýsýnýn ölçüsü kaç derecedir?', '116', '132', '128', '144', '146', '144'),
(7, 'Toplamlarý 26 olan a ve b pozitif tamsayýlarýnýn en küçük ortak katý 105 tir. Buna göre a - b nin mutlak deðeri nedir?', '14', '15', '13', '12', '16', '16'),
(8, '3 limonu 40 bin TL ye alýp 5 limonu 90 bin TL ye satan bir manav kaç limon satarsa 560 bin TL kar eder?', '120', '130', '110', '140', '150', '120'),
(9, 'Rakamlarý birbirinden farklý olan üç basamaklý en büyük doðal sayý aþaðýdakilerden hangisi ile kalansýz bölünebilir?', '6', '3', '4', '11', '9', '6'),
(10, '1926 yýlýndan itibaren kullandýðýmýz takvim türü hangisidir?', 'Rumi Takvim', 'Miladi Takvim', 'Celali Takvim', 'Hicri Takvim', 'Yükseli takvim', 'Miladi Takvim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmenler`
--

CREATE TABLE IF NOT EXISTS `ogretmenler` (
  `ogretmenid` int(11) NOT NULL AUTO_INCREMENT,
  `kuladi` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `adsoyad` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ogretmenid`,`kuladi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `ogretmenler`
--

INSERT INTO `ogretmenler` (`ogretmenid`, `kuladi`, `sifre`, `adsoyad`) VALUES
(1, 'ogretmen', '123', 'ali hoca');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal`
--

CREATE TABLE IF NOT EXISTS `sosyal` (
  `soruid` int(11) NOT NULL AUTO_INCREMENT,
  `soru` text COLLATE utf8_turkish_ci NOT NULL,
  `c1` text COLLATE utf8_turkish_ci NOT NULL,
  `c2` text COLLATE utf8_turkish_ci NOT NULL,
  `c3` text COLLATE utf8_turkish_ci NOT NULL,
  `c4` text COLLATE utf8_turkish_ci NOT NULL,
  `c5` text COLLATE utf8_turkish_ci NOT NULL,
  `dogru` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`soruid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `sosyal`
--

INSERT INTO `sosyal` (`soruid`, `soru`, `c1`, `c2`, `c3`, `c4`, `c5`, `dogru`) VALUES
(1, 'Parþömenin Bergama þehrinde icat edilmiþ\r\nolmasýyla aþaðýdaki olaylardan hangisi arasýnda\r\ndoðrudan bir iliþki kurulabilir?', 'Bergama Kütüphanesinin, Antik Çað’ýn en zengin iki kütüphanesinden biri olmasý', 'III. Attalos’un Bergama Krallýðý’ný bir vasiyetle Roma halkýna býrakmasý', 'Bergama Krallýðý’nýn Ýyonya ayaklanmasýna destek vermesi', 'Ýskenderiye Kütüphanesinin yakýlmasý ', 'Roma’nýn MÖ 129’da Bergama Krallýðý’ný ele geçirmesi', 'Bergama Kütüphanesinin, Antik Çað’ýn en zengin iki kütüphanesinden biri olmasý'),
(2, 'Arap ülkelerinden kuzeye, Bizans’tan doðuya uzanan\r\nticaret yollarý üzerinde yaþayan Hazarlar, VII. ve IX.\r\nyüzyýllar arasýnda bulunduklarý bölgede huzuru ve\r\nulaþým güvenliðini saðlayarak bu dönemin Hazar Barýþ\r\nÇaðý olarak adlandýrýlmasýna neden olmuþlardýr.\r\nBu durumun, aþaðýdakilerden hangisinde etkili\r\nolduðu savunulamaz?', 'Ticaretin canlanmasýnda', 'Kültürel etkileþimin artmasýnda ', 'Farklý dinlerin yayýlmasýnda', 'Ülkede refahýn yükselmesinde', 'Türkçenin ortak dil olarak kullanýlmasýnda', 'Türkçenin ortak dil olarak kullanýlmasýnda'),
(3, 'Ýslamiyet öncesi Arabistan da barýþýn hâkim olduðu\r\n Haram Aylarý nda Mekke ve çevresinde panayýrlar\r\nkurulur, ticaret yapýlýr, eðlenceler ve þiir yarýþmalarý\r\ndüzenlenirdi. Bu dönemde ayrýca putlarýn bulunduðu\r\nKâbe ziyaret edilirdi.\r\nBuna göre aþaðýdakilerden hangisi ileri sürülemez?', 'Sosyal ve kültürel geliþmelerin yaþandýðý ', 'Toplumsal barýþýn saðlandýðý', 'Arapçanýn farklý coðrafyalara yayýldýðý ', 'Arap edebiyatýnýn geliþtiði', 'Dinî etkinliklerin yapýldýðý ', 'Arapçanýn farklý coðrafyalara yayýldýðý '),
(4, 'Anadolu Selçuklu Devleti nde hükümdarlarýn\r\nKeyhüsrev, Keykubat ve Keykavus gibi adlar\r\nkullanmalarýnýn aþaðýdakilerden hangisini gösterdiði\r\nsavunulabilir?', 'Ýlk Türk devletlerine ait gelenekleri devam ettirdiklerini', 'Fars kültürünün etkisinde kaldýklarýný ', 'Anadolu nun eski kültürlerinden etkilendiklerini', 'Arapça unvanlarý öne çýkardýklarýný', 'Bizans ýn hükümdarlýk unvanlarýný kullandýklarýný', 'Fars kültürünün etkisinde kaldýklarýný '),
(5, 'Osmanlý Ýmparatorluðunun son döneminde Ýslamcýlýk ve Osmanlýcýlýk anlayýþlarý etkilerini yitirirken yeni bir anlayýþ güç kazanmýþtýr. Bu yeni anlayýþ aþaðýdakilerden hangisidir? ', 'Islahatçýlýk', 'Milliyetçilik', 'Devletçilik', 'Laiklik', 'Halkçýlýk', 'Milliyetçilik'),
(6, 'Osmanlý Devletinin kurucusu olan Osmanlý ailesi hangi Türk boyuna mensuptur?', 'kayý', 'sarý', 'bazok', 'üçok', 'ikiok', 'kayý'),
(7, 'Osmanlý Devleti ilk dýþ borcu hangi ülkeden almýþtýr?', 'Ýngiltere', 'Fransa', 'Ýtalya', 'A.B.D', 'Ýspanya', 'Ýngiltere'),
(8, 'Lozan Barýþ Antlaþmasýnda Türk Devletini kim temsil etmiþtir?', 'Mustafa Kemal Atatürk', 'Celal Bayar', 'Kazým Karabekir', 'Ýsmet Ýnönü', 'Ahmet Necdet', 'Ýsmet Ýnönü');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turkce`
--

CREATE TABLE IF NOT EXISTS `turkce` (
  `soruid` int(11) NOT NULL AUTO_INCREMENT,
  `soru` text COLLATE utf8_turkish_ci NOT NULL,
  `c1` text COLLATE utf8_turkish_ci NOT NULL,
  `c2` text COLLATE utf8_turkish_ci NOT NULL,
  `c3` text COLLATE utf8_turkish_ci NOT NULL,
  `c4` text COLLATE utf8_turkish_ci NOT NULL,
  `c5` text COLLATE utf8_turkish_ci NOT NULL,
  `dogru` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`soruid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `turkce`
--

INSERT INTO `turkce` (`soruid`, `soru`, `c1`, `c2`, `c3`, `c4`, `c5`, `dogru`) VALUES
(1, 'Sözlük hazýrlamanýn en güç yaný sözcükleri anlam\r\nkayganlýðýndan kurtarma, onlarý belli bir yere oturtmadýr.\r\nBu da ancak Samuel Butler in dediði gibi onlarýn belirsiz\r\nyanlarýný söz duvarlarýyla kuþatmakla gerçekleþebilir.\r\nBu cümledeki altý çizili sözle, sözcüklere yönelik\r\nolarak ne yapýldýðý anlatýlmýþtýr?', 'A) Tanýmsal sýnýrlar koyulduðu', 'B) Birbirlerinden etkileniþlerinin gösterildiði', 'C) Çaðrýþýmsal deðerlerinin belirtildiði', 'D) Zenginleþtirme yollarýnýn açýklandýðý', 'E) Kullaným sýklýðýnýn yansýtýldýðý', 'A) Tanýmsal sýnýrlar koyulduðu'),
(2, 'Bazý insanlar yapabileceklerinin farkýnda olmadan, sürekli bir özgüven eksikliði içinde yaþarlar. Bazýlarý da abartýlý bir özgüvenle, hayatta her þeyi baþarabileceklerine, her alanda en iyi olduklarýna inandýrýrlar kendilerini. Oysa insan kendisine içbükey veya dýþbükey aynada deðil, düz aynada bakmalýdýr.\r\n\r\nBu parçadaki altý çizili sözle anlatýlmak istenen aþaðýdakilerden hangisidir?', 'A) Ýnsanýn kendisine güvenerek baþladýðý her iþte baþarýlý olmasý mümkündür.', 'B) Ýnsan, her alanda kendisinden daha üstün birilerinin olabileceðini unutmamalýdýr.', 'C) Yaþamda mutlu olmak için olumsuzluklar karþýsýnda direnmeli, önüne çýkan engelleri sabýrla aþmaya çalýþmalýdýr.', 'D) Ýnsan, yeteneklerinin sýnýrlarýný gerçekçi bir tutumla belirlemeli, kendisini tarafsýz bir gözle deðerlendirmelidir.', 'E) Ýnsanlar, hayattaki olumsuz durumlarý da olumlu durumlardaki gibi olgunlukla karþýlamalýdýr.', 'D) Ýnsan, yeteneklerinin sýnýrlarýný gerçekçi bir tutumla belirlemeli, kendisini tarafsýz bir gözle deðerlendirmelidir.'),
(3, 'L. Frank Baum, (I)bu dünyadan geçerken öyle derin (II)izler býraktý ki (III)yaþamanýn deðerini milyonlarca kez kanýtlamýþ oldu. Bu ölümsüz yazarýn (IV)eli deðdiði anda çocuk edebiyatý (V)yeþermeye baþladý.\r\n\r\nBu parçadaki numaralanmýþ sözlerden hangisinde mecazlý bir söyleyiþ yoktur?', 'A) I.   ', 'B) II.', 'C) III.', 'D) IV', 'E) V.', 'C) III.'),
(4, '2011 in sonuna doðru gösterime giren bu film, geleneksel sinemanýn kullandýðý tekniklere baðlý kalmadan, bir hayatta kalma savaþýmýný insanda yoðunlaþarak anlatýyor.\r\n\r\nBu cümleden söz konusu filmle ilgili olarak aþaðýdakilerin hangisi çýkarýlabilir?', 'A) Belirli bir izleyici kitlesine seslenmek amaçlanmýþtýr.', 'B) Yeni çekim yöntemlerine baþvurulmuþtur.', 'C) Bugüne deðin beyaz perdeye taþýnmamýþ bir sorun iþlenmiþtir.', 'D) Oyuncularýn gösterdiði baþarýyla çok boyutlu bir yapý kazanmýþtýr.', 'E) Yýlýn çok izlenen filmleri arasýnda yerini almýþtýr.&#8195;', 'B) Yeni çekim yöntemlerine baþvurulmuþtur.'),
(5, 'Klasik eserleri okumaya en çok, kendi yazdýklarýmý tekrar ettiðimi hissettiðim zamanlarda ihtiyaç duyarým.\r\n\r\nAþaðýdakilerden hangisi bu cümleye anlamca en yakýndýr?', 'A) Kimi eserlerin her dönemde okunurluðunu sürdürdüðü bilinir.', 'B) Bir yazarýn, okuduklarýndan etkilenmeden yazmasý mümkün deðildir.', 'C) Her eser, baþka metinlerden alýnan parçalarla renklenen bir tablodur.', 'D) Yazar, benzer ürünler ortaya koymaktan kaçýnmak istiyorsa yazdýklarýný ara sýra gözden geçirmelidir.', 'E) Çaðýný aþmýþ eserleri okuma, yaratýcýlýðý besleyen bir etkinliktir.', 'E) Çaðýný aþmýþ eserleri okuma, yaratýcýlýðý besleyen bir etkinliktir.'),
(6, 'Bir gazeteci, söyleþi yaptýðý kiþinin rahatsýz olabileceði bir soruyu, kendisiyle soru arasýna mesafe koyarak üçüncü kiþilerin aðzýndan sormalýdýr.\r\n\r\nAþaðýdakilerden hangisi bu ilkeye dikkat edilerek hazýrlanmýþ bir sorudur?', 'A) Çok önemli iki ödül almasýna raðmen son romanýnýzýn çok satýlmamasýnýn nedeni ne olabilir?', 'B) Bazý eleþtirmenler son romanýnýzýn bazý bölümlerinin bir Alman yazarýn romanýndan alýndýðýný iddia ediyor, bu konuda ne düþünüyorsunuz?', 'C) Eserlerinizde soyut konularý ele alýþýnýzýn okuyucuyu yorduðunu düþünmüyor musunuz?', 'D) Bazý yazarlarýmýzýn dediði gibi "Keþke yayýmlamasaydým!" diye düþündüðünüz yazýlarýnýz oldu mu?', 'E) Eserlerinizde ayný konuyu iþleyip durmaktan kurtulamamanýzý neye baðlýyorsunuz?', 'B) Bazý eleþtirmenler son romanýnýzýn bazý bölümlerinin bir Alman yazarýn romanýndan alýndýðýný iddia ediyor, bu konuda ne düþünüyorsunuz?'),
(7, 'Þiir, yalnýzca acýlarý, yoksunluklarý, mutsuzluklarý dile getirmemelidir. ----?\r\n\r\nBu sözler aþaðýdakilerden hangisiyle sürdürülemez?', 'A) Gerçekte de sevinçle hüzün, ölümle yaþam yan yana karþýmýza çýkmaz mý', 'B) Türk halk müziðinde uzun havalardan sonra oyun havalarýna geçilmez mi', 'C) Okuyucunun þiirden alacaðý hazzý sýnýrlamaya gerek var mý', 'D) Günümüzde insan yaþamýnýn trajik yönlerini yansýtan eserler de ilgi çekmiyor mu', 'E) Þiir okuyucusunu karamsarlýða itmenin bir anlamý var mý', 'D) Günümüzde insan yaþamýnýn trajik yönlerini yansýtan eserler de ilgi çekmiyor mu'),
(8, '(I) Rüyada Gezdiðim Ev hikâyesinde de sevgiliye duyulan özlem anlatýlmaktadýr. (II) Hikâyenin kahramaný, bütün iç ve dýþ özellikleriyle anlatýlmýþtýr. (III) Kahraman, sekiz sene evvel gönlünü kaptýrdýðý sevgilisinin oturduðu evin sokaðýnda dolaþýr. (IV) Kendisine yüz vermeyen sevgilisiyle hep rüyalarýnda buluþur. (V) O güne kadar sadece rüyalarýnda gördüðü sevgilisinin evini çok merak etmektedir. (VI) Sokaktan geçerken, rüyalarýnda gördüðü sevgilisinin evinin kiralýk olduðunu görür ve evi tutmak ister. Fakat kahramanýn bu isteði gerçekleþmez, çünkü ertesi gün evi bir baþkasý tutar.\r\n\r\nYukarýdaki parçada numaralanmýþ cümlelerden hangisi, hikâyelerin içeriðiyle ilgili deðildir?', 'A) I.    ', 'B) II. ', 'C) III.  ', 'D) IV.', 'E) V.', 'B) II. '),
(9, 'soru', '123', '12', '23', '4', '5', '23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uyeid` int(11) NOT NULL AUTO_INCREMENT,
  `kuladi` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`uyeid`,`kuladi`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeid`, `kuladi`, `sifre`, `ad`, `soyad`, `email`) VALUES
(1, 'asd', '123', 'asd', 'asd', 'asd@asd.com'),
(2, 'sda', '123', 'sda', 'sda', 'dsa@dsa.com'),
(3, 'ogrenci', '123', 'og', 'renci', 'oasd@asdwq.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
