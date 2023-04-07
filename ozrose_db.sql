-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2022, 02:21:20
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ozrose_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Sofa Set'),
(2, 'Corner Sofa'),
(3, 'Dinner Table'),
(4, 'Garden Furniture'),
(5, 'Chair'),
(6, 'Bergere');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `product_short_desc`, `product_image`) VALUES
(1, 'Gray Corner Sofa', 2, 5275, 25, 'It is made of metal, poplar and chipboard material. All parts are shipped disassembled.', 'Corner Sofa, Elongated Corner', 'graycornersofa.jpg'),
(2, 'Sky Blue Sofa Set', 1, 8750, 15, 'It consists of 1 triple sofa and 1 armchair.', 'Comfortable and useful sofa set.', 'skybluesofaset.jpg'),
(3, 'Black Corner Sofa', 2, 5600, 19, 'It is made of metal, poplar and chipboard material. All parts are shipped disassembled.', 'Corner Sofa, Elongated Corner', 'blackcornersofa.jpg'),
(4, 'Yellow-Blue Sofa Set', 1, 15000, 3, 'It consists of 1 triple sofa and 1 armchair. Woven linen fabric is used.It can be wiped with a damp cloth without using chemical cleaning products.', 'Nice looking, Comfortable', 'yellowbluesofaset.jpg'),
(5, 'Bodrum Sofa Set', 1, 18000, 2, 'Indispensable for summer places.', 'Limited Edition', 'bodrumsofaset.jpg'),
(6, 'White Sofa Set', 1, 8500, 35, 'A soft form filling consisting of 70% silicone and 30% soft sponge crumb mixture was applied. 	The sofa legs are sent disassembled.', 'Comfortable and useful sofa set.', 'whitesofaset.jpg'),
(7, 'Orange Sofa Set', 1, 18000, 1, 'A polyester-containing fabric consisting of polyurethane and acrylic derivatives was used. Soft textured fabric is used.', 'Limited Edition', 'orangesofaset.jpg'),
(8, 'White Chair', 5, 800, 100, 'No fabric. Wooden. You can clean your furniture by wiping it with a damp cloth. Protect from direct sunlight. Avoid prolonged contact of hot surfaces and water.', 'Comfortable and useful chair.', 'whitechair.jpg'),
(9, 'red chair', 5, 1050, 50, 'Faux Leather. Wooden. You can clean your furniture by wiping it with a damp cloth. Protect from direct sunlight. Avoid prolonged contact of hot surfaces and water.', 'Comfortable and useful chair.', 'redchair.jpg'),
(10, 'Gray Chair', 5, 1500, 150, 'Upholstered. Wooden. You can clean your furniture by wiping it with a damp cloth. Protect from direct sunlight. Avoid prolonged contact of hot surfaces and water.', 'Comfortable and useful chair.', 'graychair.jpg'),
(11, 'Dark Blue Chair', 5, 2000, 200, 'Upholstered. Wooden. You can clean your furniture by wiping it with a damp cloth. Protect from direct sunlight. Avoid prolonged contact of hot surfaces and water.', 'Comfortable and useful chair.', 'darkbluechair.jpg'),
(12, 'Dark Green Bergere', 6, 5000, 100, 'All parts are shipped assembled.', 'Nice looking bergere', 'darkgreenbergere.jpg'),
(13, 'Multi Color Bergere', 6, 7000, 100, 'All parts are shipped assembled.', 'Nice looking bergere', 'multicolorbergere.jpg'),
(14, 'Pink Bergere', 6, 5500, 100, 'All parts are shipped assembled.', 'Nice looking bergere', 'pinkbergere.jpg'),
(15, 'Orange Bergere', 6, 4500, 100, 'All parts are shipped assembled.', 'Nice looking bergere', 'orangebergere.jpg'),
(16, 'White Bergere', 6, 6000, 100, 'All parts are shipped assembled.', 'Nice looking bergere', 'whitebergere.jpg'),
(17, 'White Dinner Table', 3, 12000, 50, 'You can clean your furniture by wiping it with a damp cloth. Protect from direct sunlight. Avoid prolonged contact of hot surfaces and water.', 'For Your Special Dinner', 'whitedinnertable.jpg'),
(18, 'Dark Wooden Dinner Table', 3, 10000, 50, 'You can clean your furniture by wiping it with a damp cloth. Protect from direct sunlight. Avoid prolonged contact of hot surfaces and water.', 'For Your Special Dinner', 'DarkWoodenDinnerTable.jpg'),
(19, 'Round Dinner Table', 3, 9500, 50, 'You can clean your furniture by wiping it with a damp cloth. Protect from direct sunlight. Avoid prolonged contact of hot surfaces and water.', 'For Your Special Dinner', 'circledinnertable.jpg'),
(20, 'White Garden Furniture', 4, 16000, 10, 'You can clean your furniture by wiping it with a damp cloth. Avoid contact of the surface with water for a long time. It is made of wood material.', 'For your pleasant conversations', 'whitegardenset.jpg'),
(21, 'Brown Gareden Furniture', 4, 20000, 10, 'You can clean your furniture by wiping it with a damp cloth. Avoid contact of the surface with water for a long time. It is made of wood material.', 'For your pleasant conversations', 'browngardenset.jpg'),
(22, 'Gray Garden Swing', 4, 35000, 10, 'You can clean your furniture by wiping it with a damp cloth. Avoid contact of the surface with water for a long time. It is made of wood material.', 'For your pleasant conversations', 'graygardenset.jpg'),
(23, 'Light Pink Corner Sofa', 2, 7500, 25, 'It consists of 1 double right arm module, 1 corner module, 1 armless double module and 1 square pouf.', 'Corner Sofa, Elongated Corner', 'lightpinkcornersofa.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234'),
(2, 'ozgulbilici', 'ozgulbilici98@gmail.com', '123456'),
(3, 'abs', 'haybinelma@gmail.com', '7485');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
