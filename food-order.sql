-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2021 lúc 08:15 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `food-order`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carousel`
--

CREATE TABLE `carousel` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `carousel`
--

INSERT INTO `carousel` (`ID`, `Name`, `Image`, `Description`) VALUES
(1, 'Spicy Noodles', 'Food-8499.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?'),
(2, 'Fried Chicken', 'Carousel-7075.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?'),
(4, 'Hot Pizza', 'Carousel-6956.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Category_ID` int(10) UNSIGNED NOT NULL,
  `Category_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`) VALUES
(1, 'Pizza'),
(2, 'Buger'),
(3, 'Desserts '),
(4, 'Drink');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `Coupon_ID` int(11) NOT NULL,
  `Coupon_Code` varchar(255) NOT NULL,
  `Coupon_Value` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`Coupon_ID`, `Coupon_Code`, `Coupon_Value`) VALUES
(1, 'Discount20', '0.8'),
(2, 'Discount30', '0.7'),
(3, 'Discount40', '0.6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dishes`
--

CREATE TABLE `dishes` (
  `Dishes_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dishes`
--

INSERT INTO `dishes` (`Dishes_ID`, `Name`, `Image`) VALUES
(20, 'Pizza', 'Dish-9128.png'),
(21, 'Buger', 'Dish-439.png'),
(22, 'Desserts ', 'Dish-2072.png'),
(24, 'Drink', 'Dish-4363.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `Food_ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Category_ID` int(10) UNSIGNED NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`Food_ID`, `Name`, `Price`, `Image`, `Category_ID`, `Description`) VALUES
(4, 'Buger', '12.00', 'menu-2.jpg', 2, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(5, 'Pancake', '12.00', 'menu-3.jpg', 3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(6, 'Ice-Cream', '12.00', 'menu-4.jpg', 3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(7, 'Fruit Cake', '12.00', 'menu-5.jpg', 3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(10, 'Cup Cake', '12.00', 'menu-6.jpg', 3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(11, 'Fruit juice ', '12.00', 'menu-7.jpg', 4, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(12, 'Cereals ', '12.00', 'menu-8.jpg', 3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(13, 'Lemonade ', '12.00', 'menu-9.jpg', 4, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(23, 'Pizza', '12.00', 'Food-7717.jpg', 1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(29, 'Pizza Hut', '15.00', 'Food-3414.png', 1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(30, 'Pizza Company', '15.00', 'Food-6779.jpg', 1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(31, 'Buger KFC', '15.00', 'Food-2911.jpg', 2, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(32, 'Buger Loteria', '15.00', 'Food-8701.jfif', 2, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.'),
(33, 'Cocktail', '15.00', 'Food-7832.jpg', 4, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `Footer_ID` int(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Social_Media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`Footer_ID`, `Email`, `Phone`, `Social_Media`) VALUES
(1, 'quocquan052000@gmail.com', 918414170, 'https://www.facebook.com/hiimkaito.1105/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order-manager`
--

CREATE TABLE `order-manager` (
  `Order_ID` int(10) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phonenumber` int(15) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Total_Price` decimal(4,2) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order-manager`
--

INSERT INTO `order-manager` (`Order_ID`, `User_ID`, `Fullname`, `Email`, `Phonenumber`, `Address`, `Total_Price`, `Status`) VALUES
(63, 0, 'Bùi An Quốc Quân', 'quanbaqgcs18073@fpt.edu.vn', 918414170, 'B6/6 Quốc lộ 50 Bình Hưng Bình Chánh', '36.00', 'Processing'),
(65, 0, 'Quân', 'quocquan052000@gmail.com', 918414170, 'B6/6 Quốc lộ 50 Bình Hưng Bình Chánh', '19.20', 'Processing'),
(66, 0, 'bùi quốc long', 'quanbaqgcs18073@fpt.edu.vn', 347956738, 'Quận 3', '57.60', 'Processing'),
(67, 0, 'testing', 'quocquan052000@gmail.com', 347956738, 'testing', '48.00', 'Processing');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `User_ID` int(10) UNSIGNED NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phonenumber` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`User_ID`, `Fullname`, `Email`, `Address`, `Phonenumber`, `Username`, `Password`, `Role`) VALUES
(10, 'Kaito', 'quocquan052000@gmail.com', 'District 3', 918414170, 'tesing', 'tesing', 'Guest'),
(13, 'testing', 'testing@gmail.com', 'testing', 123456789, 'test', '123', 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user-order`
--

CREATE TABLE `user-order` (
  `Order_ID` int(10) NOT NULL,
  `Food_Name` varchar(100) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user-order`
--

INSERT INTO `user-order` (`Order_ID`, `Food_Name`, `Price`, `Quantity`) VALUES
(63, 'Pancake', '12.00', 3),
(65, 'Buger', '12.00', 2),
(66, 'Pancake', '12.00', 4),
(66, 'Fruit juice ', '12.00', 2),
(67, 'Pancake', '12.00', 3),
(67, 'Fruit juice ', '12.00', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`Coupon_ID`);

--
-- Chỉ mục cho bảng `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`Dishes_ID`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Food_ID`),
  ADD KEY `food-category` (`Category_ID`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`Footer_ID`);

--
-- Chỉ mục cho bảng `order-manager`
--
ALTER TABLE `order-manager`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Chỉ mục cho bảng `user-order`
--
ALTER TABLE `user-order`
  ADD KEY `user-order` (`Order_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carousel`
--
ALTER TABLE `carousel`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `coupon`
--
ALTER TABLE `coupon`
  MODIFY `Coupon_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dishes`
--
ALTER TABLE `dishes`
  MODIFY `Dishes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `Food_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `Footer_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order-manager`
--
ALTER TABLE `order-manager`
  MODIFY `Order_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food-category` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`Category_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
