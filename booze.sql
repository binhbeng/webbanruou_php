-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2020 lúc 04:50 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `booze`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'binhbeng', '123', 'Lara Croft');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booze`
--

CREATE TABLE `booze` (
  `booze_id` int(11) NOT NULL,
  `booze_name` varchar(255) NOT NULL,
  `booze_img` varchar(255) NOT NULL,
  `booze_price` float NOT NULL,
  `booze_des` varchar(255) NOT NULL,
  `booze_discount` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booze`
--

INSERT INTO `booze` (`booze_id`, `booze_name`, `booze_img`, `booze_price`, `booze_des`, `booze_discount`, `catalog_id`, `producer_id`) VALUES
(7, 'Muserk Rights', 'singleton42.jpg', 11000, 'DJ Okawari - Another Starlight', 0, 10, 7),
(8, 'Perfect Blue', 'hennessy49.jpg', 15000, 'Another Starlight', 0, 8, 4),
(9, 'Táo mèo', 'meo68.jpg', 60000, 'TYPESETTER & ENCODER\r\nCỔ PHONG\r\nEMILY STYLER', 0, 10, 4),
(11, 'Tequila', 'tequila47.jpg', 78000, 'Click to subscribe: http://bit.ly/THUONGVOOFFICIAL\r\nMore information about', 0, 10, 4),
(12, 'Ballantine', 'ballantine74.jpg', 98, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq', 50, 7, 4),
(13, 'Chivas', 'glenfid99.jpg', 1200, 'uống như nước lã', 0, 11, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `catalog_id` int(11) NOT NULL,
  `catalog_name` varchar(255) NOT NULL,
  `catalog_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`catalog_id`, `catalog_name`, `catalog_des`) VALUES
(7, 'Mang Chủng', 'Người theo đuổi ánh sáng'),
(8, 'Bạch Lộ', 'Sầm Ninh Nhi'),
(9, 'Cốc vũ', 'Âm Khuyết Thi Thính'),
(10, 'Hàn Lộ', 'Triệu Phương Tịnh'),
(11, 'Đại Tuyết', 'TOWER RECORDS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_password`, `customer_email`, `customer_phone`) VALUES
(6, 'binhbeng', '123', 'binhadcarry@gmail.com', '093651533'),
(7, 'Katarina', '123', 'katarina@gmail.com', '123'),
(8, 'Heccarim', '123', 'Heccarim@gmail.com', '0274536288');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `info_id` int(11) NOT NULL,
  `info_address` varchar(255) NOT NULL,
  `info_phone` char(255) NOT NULL,
  `info_name` varchar(255) NOT NULL,
  `info_notes` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`info_id`, `info_address`, `info_phone`, `info_name`, `info_notes`, `customer_id`, `payment`, `status`, `created_at`) VALUES
(36, 'Sumoner Riff', '037265147', 'Bình', 'ok hello', 7, 1, 'Chưa xủ lý', '2020-04-24 13:11:07'),
(37, '34  Riff', '123421', 'Kẻ săn mồi tàn nhẫn', 'ok', 8, 1, 'Chưa xủ lý', '2020-04-24 13:11:07'),
(38, 'eeee', 'eee', 'oze', 'eeee', 8, 1, 'Đã xong', '2020-04-24 13:11:07'),
(39, '33 uu ii', '09871244', 'yasuo', 'okokokoko', 6, 1, 'Chưa xử lý', '2020-04-24 13:11:07'),
(40, '34 summoner Riff', 'werwerwer', 'binh', 'hhihih', 6, 1, 'Đã xong', '2020-04-24 13:12:33'),
(41, 'dasdasd', '123123123', 'adsad', '68678678', 6, 1, 'Chưa xử lý', '2020-04-27 06:32:50'),
(42, 'rrr', 'rrrr', '888rrrr', 'rrrr', 6, 1, 'Chưa xử lý', '2020-04-27 06:54:18'),
(43, 'rrr', 'rrrr', '888rrrr', 'rrrr', 6, 1, 'Chưa xử lý', '2020-04-27 06:57:06'),
(44, '54166 nguyễn chí thanh', '0789678', 'Binh Beng', 'đâsdadsa', 6, 1, 'Chưa xử lý', '2020-04-27 08:01:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_details`
--

CREATE TABLE `info_details` (
  `info_details_id` int(11) NOT NULL,
  `info_id` int(11) NOT NULL,
  `booze_id` int(11) NOT NULL,
  `booze_name` varchar(255) NOT NULL,
  `booze_price` float NOT NULL,
  `booze_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `info_details`
--

INSERT INTO `info_details` (`info_details_id`, `info_id`, `booze_id`, `booze_name`, `booze_price`, `booze_qty`) VALUES
(18, 36, 9, 'Táo mèo', 60000, 1),
(19, 37, 9, 'Táo mèo', 60000, 1),
(21, 38, 8, 'Perfect Blue', 15000, 1),
(22, 39, 12, 'Ballantine', 98, 1),
(23, 40, 12, 'Ballantine', 98, 1),
(24, 40, 9, 'Táo mèo', 60000, 1),
(25, 40, 7, 'Muserk Rights', 11000, 1),
(26, 43, 7, 'Muserk Rights', 11000, 1),
(27, 43, 8, 'Perfect Blue', 15000, 1),
(28, 43, 12, 'Ballantine', 98, 1),
(29, 43, 9, 'Táo mèo', 60000, 4),
(30, 44, 12, 'Ballantine', 98, 1),
(31, 44, 9, 'Táo mèo', 60000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producer`
--

CREATE TABLE `producer` (
  `producer_id` int(11) NOT NULL,
  `producer_name` varchar(255) NOT NULL,
  `producer_address` varchar(255) NOT NULL,
  `producer_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `producer`
--

INSERT INTO `producer` (`producer_id`, `producer_name`, `producer_address`, `producer_des`) VALUES
(4, 'Âm Khuyết Thi Thính', 'Sumonner Riff', 'Translator'),
(5, 'Sầm Ninh Nhi', '222 sumonner', 'Typesetter'),
(6, 'Triệu Phương Tịnh', '12 Believe Music', '24 Tiết Khí'),
(7, 'Emily Styler', '08 Emotions Swim Inside', 'Over The Rain');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `booze`
--
ALTER TABLE `booze`
  ADD PRIMARY KEY (`booze_id`),
  ADD KEY `catalog_id` (`catalog_id`),
  ADD KEY `producer_id` (`producer_id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`catalog_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `fk_hi` (`customer_id`);

--
-- Chỉ mục cho bảng `info_details`
--
ALTER TABLE `info_details`
  ADD PRIMARY KEY (`info_details_id`),
  ADD KEY `fk_ha` (`info_id`),
  ADD KEY `fk_he` (`booze_id`);

--
-- Chỉ mục cho bảng `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`producer_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `booze`
--
ALTER TABLE `booze`
  MODIFY `booze_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `catalog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `info_details`
--
ALTER TABLE `info_details`
  MODIFY `info_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `producer`
--
ALTER TABLE `producer`
  MODIFY `producer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booze`
--
ALTER TABLE `booze`
  ADD CONSTRAINT `booze_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`catalog_id`),
  ADD CONSTRAINT `booze_ibfk_2` FOREIGN KEY (`producer_id`) REFERENCES `producer` (`producer_id`);

--
-- Các ràng buộc cho bảng `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `fk_hi` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `info_details`
--
ALTER TABLE `info_details`
  ADD CONSTRAINT `fk_ha` FOREIGN KEY (`info_id`) REFERENCES `info` (`info_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_he` FOREIGN KEY (`booze_id`) REFERENCES `booze` (`booze_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
