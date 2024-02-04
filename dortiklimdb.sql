-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Şub 2024, 19:05:59
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dortiklimdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `ImagePath` varchar(100) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`Id`, `Name`, `Description`, `ImagePath`, `IsActive`, `CreatedDate`) VALUES
(2, 'test yeni 12', 'test test test test ', '81KXvv9bd9L._AC_UF1000,1000_QL80_.jpg', 1, '2024-02-04 16:13:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `Id` int(11) NOT NULL,
  `AuthorName` varchar(100) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1,
  `Title` text DEFAULT NULL,
  `CreatedDate` datetime NOT NULL,
  `Description` text DEFAULT NULL,
  `ImagePath` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`Id`, `AuthorName`, `IsActive`, `Title`, `CreatedDate`, `Description`, `ImagePath`, `Date`) VALUES
(1, 'Test Blog Yazarı', 1, 'Test Blog Başlığı', '2024-02-04 14:28:56', 'Test blog metnidir. Dikkate almayınız silinecektir', '81KXvv9bd9L._AC_UF1000,1000_QL80_.jpg', '2024-02-04'),
(2, 'fwerfwerf', 1, 'wefwerfwerf', '2024-02-04 15:38:15', 'wefwefwerf', '81KXvv9bd9L._AC_UF1000,1000_QL80_.jpg', '2024-02-14'),
(3, 'test12', 1, 'bunu düzenledim', '2024-02-04 16:24:16', 'sdgsdfgsdfg', 'indir.png', '2024-02-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `Id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `ImagePath` text DEFAULT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`Id`, `Name`, `Description`, `IsActive`, `ImagePath`, `CreatedDate`) VALUES
(33, 'asdf', 'adgsadgfsdgf', 1, 'pexels-francesco-ungaro-1525041.jpg', '2024-02-03 18:04:41'),
(35, 'adfasdasd', 'sdfsdf\r\nsdfsdfsd\r\nsdfsdfsdf', 1, 'test.png', '2024-02-03 18:28:46'),
(36, 'test', 'asdasdasd', 1, 'test.png', '2024-02-03 18:37:24'),
(37, 'test1123', 'gsdfgsdfg', 1, 'pexels-francesco-ungaro-1525041.jpg', '2024-02-03 18:38:49');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(13) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`Id`, `Name`, `Surname`, `Email`, `PhoneNumber`, `IsActive`, `Password`, `Role`) VALUES
(1, 'Veysel', 'Duran', 'vdrn76@gmail.com', '053888735527', 1, '12345', 1),
(2, 'Super', 'User', 'test@gmail.com', '053888735527', 1, 'User', 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD KEY `Id_2` (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
