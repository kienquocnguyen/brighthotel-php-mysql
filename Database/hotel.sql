-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2019 lúc 09:19 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foods`
--

CREATE TABLE `foods` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` decimal(18,0) NOT NULL,
  `Categories` varchar(100) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `foods`
--

INSERT INTO `foods` (`Id`, `Name`, `Description`, `Price`, `Categories`, `images`) VALUES
(1, 'Egg &amp; Asparagus', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', '31', 'Breakfast', 'images/menu_1.jpg'),
(2, 'Grilled Top Sirloin Steak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', '23', 'Breakfast', 'images/menu_2.jpg'),
(3, 'Egg &amp; Grilled Steak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', '45', 'Breakfast', 'images/menu_3.jpg'),
(4, 'Spicy Noodles', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', '33', 'Breakfast', 'images/menu_4.jpg'),
(5, 'Butternut Squash and White Bean Soup', 'Mash white beans to give this bean and couscous soup a creamy, decadent texture.', '30', 'Lunch', 'images/menu_5.jpg'),
(6, 'Sheet Pan Chickpea Chicken', 'We bet when you reheat this spicy five-ingredient dish, your coworkers will ask what you\'re eating. See for yourself.', '45', 'Lunch', 'images/menu_6.jpg'),
(7, 'Korean Pineapple Beef Lettuce Wraps', 'What\'s not to love about caramelized beef wrapped in a crunchy piece of lettuce and topped with chilies and peanuts? Nothing, that\'s what.', '50', 'Lunch', 'images/menu_7.jpg'),
(8, 'Slow Cooker Orange Chicken', 'This restaurant quality dish is a yummy balance of sweet and savory flavors.', '30', 'Dinner', 'images/menu_8.jpg'),
(9, 'Slow Cooker Jambalaya', 'Every bite of this classic New Orleans comfort food is loaded with chicken, shrimp, and andouille sausage.', '23', 'Dinner', 'images/menu_9.jpg'),
(10, 'Spaghetti Squash and Turkey Meatballs', 'Spaghetti squash can be a great substitute for pasta if you\'re trying to add some more veggies to your diet.', '45', 'Dinner', 'images/menu_10.jpg'),
(11, 'Slow Cooker Red Wine Beef Stew', 'Because red wine makes everything better—including stew.', '45', 'Dinner', 'images/menu_11.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reservation`
--

CREATE TABLE `reservation` (
  `Id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `norooms` int(11) NOT NULL,
  `noadults` int(11) NOT NULL,
  `nochildren` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `reservation`
--

INSERT INTO `reservation` (`Id`, `country`, `rooms`, `checkin`, `checkout`, `norooms`, `noadults`, `nochildren`, `firstname`, `lastname`, `email`, `phone`) VALUES
(1, 'USA', 'Bachelor Room', '2019-01-16', '2019-01-18', 1, 2, 0, 'Nguyen', 'Hoang', 'hoangnguyen@gmail.com', '0913987372'),
(2, 'USA', 'Family Room', '2019-01-16', '2019-01-18', 1, 1, 0, 'Nguyen', 'Hanh', 'hanhnew@gmail.com', '01212471455'),
(3, 'Vietnam', 'Family Room', '2019-01-16', '2019-01-18', 1, 2, 0, 'John', 'Joe', 'johnjoe@gmail.com', '01694888218'),
(4, 'Vietnam', 'Bachelor Room', '2019-01-20', '2019-01-22', 1, 1, 0, 'Nguyen Kien', 'Quoc', 'kienquocnguyen1998@gmail.com', '0792471435'),
(5, 'Vietnam', 'Presidential Room', '2019-01-25', '2019-01-30', 1, 1, 0, 'Nguyen Ngoc My', 'Phuong', 'phuongnguyen@gmail.com', '0792471433'),
(6, 'Australia', 'VIP Room', '2019-01-22', '2019-01-24', 1, 2, 0, 'Nick', 'Jonas', 'nickjonas@gmail.com', '0913987377'),
(7, 'Vietnam', 'VIP Room 2', '2019-03-29', '2019-03-31', 1, 2, 0, 'Nguyen', 'Mike', 'mikenguyen1998@gmail.com', '0947435533'),
(8, 'Australia', 'VIP Room 2', '2019-02-20', '2019-02-24', 1, 1, 0, 'Rans', 'Danny', 'ironfist@gmail.com', '0947436666'),
(9, 'UK', 'VIP Room 2', '2019-02-15', '2019-02-20', 1, 2, 1, 'Banner', 'Bruce', 'thehulk@gmail.com', '01694878234'),
(10, 'USA', 'Double Room', '2019-02-05', '2019-02-07', 1, 1, 0, 'Langs', 'Scott', 'antman@gmail.com', '01694878356'),
(11, 'USA', 'Family Room', '2019-02-08', '2019-02-10', 1, 1, 0, 'Cage', 'Luke', 'powerman@gmail.com', '0947438989');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(18,0) DEFAULT NULL,
  `Contain` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Categories` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Facilities` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Bedtype` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`Id`, `Name`, `Price`, `Contain`, `Categories`, `Facilities`, `Size`, `Bedtype`, `images`) VALUES
(1, 'Bachelor Room', '156', '1', 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '20', 'One bed', 'images/img_1.jpg'),
(2, 'Family Room', '320', '3', 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '20', 'One bed', 'images/img_2.jpg'),
(3, 'Presidential Room', '425', '1', 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '20', 'One bed', 'images/img_3.jpg'),
(4, 'Double Room', '525', '1', 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '20', 'One bed', 'images/img_4.jpg'),
(5, 'VIP Room', '600', '1', 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '20', 'One bed', 'images/img_5.jpg'),
(6, 'VIP Room 2', '760', '1', 'Single', 'Closet with hangers, HD flat-screen TV, Telephone', '20', 'One bed', 'images/img_6.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
