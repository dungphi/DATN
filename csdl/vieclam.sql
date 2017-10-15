-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 15, 2017 lúc 08:17 AM
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
-- Cấu trúc bảng cho bảng `nguoi_tim_viec`
--

DROP TABLE IF EXISTS `nguoi_tim_viec`;
CREATE TABLE IF NOT EXISTS `nguoi_tim_viec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bang_cap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ky_nang` text COLLATE utf8mb4_unicode_ci,
  `kinh_nghiem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muc_luong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chung_chi` text COLLATE utf8mb4_unicode_ci,
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_tim_viec`
--

INSERT INTO `nguoi_tim_viec` (`id`, `ten`, `email`, `phone`, `ngay_sinh`, `dia_chi`, `bang_cap`, `ky_nang`, `kinh_nghiem`, `muc_luong`, `avatar`, `chung_chi`, `gioi_tinh`, `active`) VALUES
(1, 'Tuấn', 'tuan@gmail.com', '0123456798', '1992-03-10', 'tp hcm', 'Đại học', 'Kỹ Thuật máy tính', NULL, NULL, 'images/hoso/9.jpg', NULL, 'nam', 1),
(2, 'Trường', 'truong@gmail.com', '0123456789', '1990-11-02', 'HCM', 'Phổ Thông', NULL, NULL, '3000000d-5000000d', 'images/hoso/12.jpg', NULL, 'nam', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_tuyen_dung`
--

DROP TABLE IF EXISTS `nha_tuyen_dung`;
CREATE TABLE IF NOT EXISTS `nha_tuyen_dung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_cty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_tuyen_dung`
--

INSERT INTO `nha_tuyen_dung` (`id`, `ten_cty`, `email`, `phone`, `dia_chi`, `active`) VALUES
(1, 'Công Ty Cổ Phần Ống Thép Việt Đức', 'vietduc@gmail.com', '0123456789', 'TP HCM', 1),
(2, 'CÔNG TY TNHH HƯNG THỊNH', 'hungthinh@gmail.com', '0123456678', 'Tp HCM', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `viec_lam`
--

DROP TABLE IF EXISTS `viec_lam`;
CREATE TABLE IF NOT EXISTS `viec_lam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_viec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bang_cap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinh_nghiem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muc_luong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vi_tri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci,
  `ngay_dk` date NOT NULL,
  `ngay_hh` date NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `yeu_cau` text COLLATE utf8mb4_unicode_ci,
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_ntd` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `viec_lam`
--

INSERT INTO `viec_lam` (`id`, `ten_viec`, `nganh`, `bang_cap`, `kinh_nghiem`, `muc_luong`, `vi_tri`, `mo_ta`, `ngay_dk`, `ngay_hh`, `active`, `yeu_cau`, `chuc_vu`, `hinh_anh`, `id_ntd`) VALUES
(1, 'Tuyển giám đốc kinh doanh', 'CEO', 'Đại học', '2 năm', '10000000', 'Tp hcm', NULL, '2017-10-10', '2017-10-31', 1, NULL, 'Giám đốc', 'images/vieclam/3.jpg', 1),
(2, ' Tuyển kỹ thuật viên', 'Điện tử', 'Đại học', '2 năm', '10000000', 'Tp hcm', NULL, '2017-10-10', '2017-10-31', 1, NULL, 'Ky Thuat Vien', 'images/vieclam/4.jpg', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
