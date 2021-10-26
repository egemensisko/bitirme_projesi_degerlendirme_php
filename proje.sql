-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 May 2021, 20:49:13
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deger`
--

CREATE TABLE `deger` (
  `ogrenci_id` int(11) NOT NULL,
  `proje_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_danısman` int(255) NOT NULL,
  `juri_1` int(255) NOT NULL,
  `juri_2` int(255) NOT NULL,
  `juri_3` int(255) NOT NULL,
  `proje_sure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `deger`
--

INSERT INTO `deger` (`ogrenci_id`, `proje_ad`, `proje_danısman`, `juri_1`, `juri_2`, `juri_3`, `proje_sure`) VALUES
(2, 'wwew', 0, 0, 0, 0, 4),
(21, 'otomasyon sistemlerim', 1, 1, 1, 1, 2),
(123, 'wwew', 0, 0, 0, 0, 4),
(734, 'pilim', 2, 1, 3, 3, 5),
(896, 'otomasyon sistemleri', 1, 1, 1, 1, 2),
(1235, 'hava', 5, 2, 3, 7, 4),
(6778, 'web sitesi', 1, 1, 1, 1, 3),
(12356, 'pil', 1, 1, 1, 1, 8),
(68900, 'web sitesi', 1, 4, 9, 5, 2),
(123467, 'web sitesi', 1, 3, 5, 6, 2),
(1237802, 'web sitesi', 5, 4, 2, 6, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcı`
--

CREATE TABLE `kullanıcı` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanıcı`
--

INSERT INTO `kullanıcı` (`user_id`, `user_name`, `user_password`) VALUES
(0, '21996737', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `deger`
--
ALTER TABLE `deger`
  ADD PRIMARY KEY (`ogrenci_id`);

--
-- Tablo için indeksler `kullanıcı`
--
ALTER TABLE `kullanıcı`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
