-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 17, 2017 lúc 01:53 PM
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
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `ten`, `user`, `pass`) VALUES
(1, 'Thiệu', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_diem`
--

DROP TABLE IF EXISTS `dia_diem`;
CREATE TABLE IF NOT EXISTS `dia_diem` (
  `id_dd` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinh_nghiem`
--

DROP TABLE IF EXISTS `kinh_nghiem`;
CREATE TABLE IF NOT EXISTS `kinh_nghiem` (
  `id_kn` int(11) NOT NULL AUTO_INCREMENT,
  `ten_kn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_kn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muc_luong`
--

DROP TABLE IF EXISTS `muc_luong`;
CREATE TABLE IF NOT EXISTS `muc_luong` (
  `id_ml` int(11) NOT NULL AUTO_INCREMENT,
  `muc_luong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ml`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh_nghe`
--

DROP TABLE IF EXISTS `nganh_nghe`;
CREATE TABLE IF NOT EXISTS `nganh_nghe` (
  `id_nn` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_nn`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh_nghe`
--

INSERT INTO `nganh_nghe` (`id_nn`, `ten_nn`) VALUES
(4, 'Nhân viên IT'),
(5, 'Bán hàng'),
(6, 'Kế toán');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
