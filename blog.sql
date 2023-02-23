-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Şub 2023, 14:43:45
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `createDate` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `body` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `advertisementSef` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `createDate` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `situation` varchar(8) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildirimler`
--

CREATE TABLE `bildirimler` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categorys`
--

CREATE TABLE `categorys` (
  `id` int(8) NOT NULL,
  `categoryName` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `categorySef` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `createdDate` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categorys`
--

INSERT INTO `categorys` (`id`, `categoryName`, `categorySef`, `createdDate`) VALUES
(1, 'react-native', 'react-native', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `messageSubName` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `messageEmail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `readmessage` varchar(8) COLLATE utf8_turkish_ci NOT NULL,
  `messageDate` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `messageSubName`, `messageEmail`, `message`, `readmessage`, `messageDate`) VALUES
(1, 'Denme', '99eyp99@gmail.com', 'Deneme', 'false', '03-02-2023');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `preface` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `github` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `stackoverflow` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `codeopen` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `navbar`
--

INSERT INTO `navbar` (`id`, `title`, `preface`, `instagram`, `linkedin`, `github`, `stackoverflow`, `codeopen`) VALUES
(1, 'Eyyüp Biçer', 'Merhaba,ben Eyyüp Biçer. Bilgisayar mühendisiyim. Bur da eğlenceli veya faydalı bulduğum yazılarımı paylaşıyorum. ', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `id` int(8) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `body` longtext COLLATE utf8_turkish_ci NOT NULL,
  `categories` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `createDate` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `postslink` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `postsSeen` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `images` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `situation` varchar(8) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `categories`, `createDate`, `postslink`, `postsSeen`, `images`, `situation`) VALUES
(1, 'Post başlık', 'dfgdsfgdsfg', 'ad', '2-12-2022', 'post-baslik', '12', 'ana.jpg', 'Aktif'),
(2, 'post Başlık 2', '<p>Body</p>\r\n', 'react-native', '31-01-2023', 'post-baslik-2', '0', 'yazilim-bilisim-kodlama-11.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `recommendation`
--

CREATE TABLE `recommendation` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `body` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sefLink` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `createDate` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `uname` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `createdDate` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `nameSorname` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `uname`, `password`, `createdDate`, `nameSorname`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '31-01-2023', 'Eyyüp Biçer');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bildirimler`
--
ALTER TABLE `bildirimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `bildirimler`
--
ALTER TABLE `bildirimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `recommendation`
--
ALTER TABLE `recommendation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
