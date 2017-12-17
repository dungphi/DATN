-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 17, 2017 lúc 01:55 PM
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
-- Cấu trúc bảng cho bảng `nha_tuyen_dung`
--

DROP TABLE IF EXISTS `nha_tuyen_dung`;
CREATE TABLE IF NOT EXISTS `nha_tuyen_dung` (
  `id_ntd` int(11) NOT NULL AUTO_INCREMENT,
  `id_vl` int(11) NOT NULL,
  `ten_cty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ms_thue` int(11) DEFAULT NULL,
  `ten_lh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_lh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_lh` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_ntd`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_tuyen_dung`
--

INSERT INTO `nha_tuyen_dung` (`id_ntd`, `id_vl`, `ten_cty`, `email`, `phone`, `dia_chi`, `ms_thue`, `ten_lh`, `email_lh`, `pass`, `sdt_lh`, `avatar`, `active`) VALUES
(1, 1, 'Công Ty Cổ Phần Ống Thép Việt Đức', 'vietduc@gmail.com', '0123456789', 'TP HCM', NULL, '', '', 'c4ca4238a0b923820dcc509a6f75849b', '0', '', 1),
(2, 2, 'CÔNG TY TNHH HƯNG THỊNH', 'hungthinh@gmail.com', '0123456678', 'Tp HCM', NULL, '', '', 'c4ca4238a0b923820dcc509a6f75849b', '0', '', 1),
(4, 3, 'Karaoke Cơ sở Hoa Lan 2', 'a@gmail.com', '0987654321', 'tp hcm', 123455, 'abc', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', '0987654321', 'images/vieclam/Screenshot_(5).png', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
