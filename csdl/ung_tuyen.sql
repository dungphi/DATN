-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 15, 2018 lúc 02:24 PM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vieclam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ung_tuyen`
--

DROP TABLE IF EXISTS `ung_tuyen`;
CREATE TABLE IF NOT EXISTS `ung_tuyen` (
  `id_ut` int(11) NOT NULL AUTO_INCREMENT,
  `id_vl` int(11) NOT NULL,
  `id_ntv` int(11) NOT NULL,
  `ngay_ut` datetime NOT NULL,
  PRIMARY KEY (`id_ut`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ung_tuyen`
--

INSERT INTO `ung_tuyen` (`id_ut`, `id_vl`, `id_ntv`, `ngay_ut`) VALUES
(2, 2, 1, '2018-01-14 16:57:53'),
(3, 4, 1, '2018-01-14 16:58:46'),
(4, 1, 1, '2018-01-14 18:12:23'),
(5, 3, 1, '2018-01-14 18:13:45'),
(6, 4, 8, '2018-01-15 00:00:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
