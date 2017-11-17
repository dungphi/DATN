-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 17, 2017 lúc 01:33 PM
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
-- Cấu trúc bảng cho bảng `ho_so_tim_viec`
--

DROP TABLE IF EXISTS `ho_so_tim_viec`;
CREATE TABLE IF NOT EXISTS `ho_so_tim_viec` (
  `id_hoso` int(11) NOT NULL,
  `id_ntv` int(11) NOT NULL,
  `vip` tinyint(4) NOT NULL DEFAULT '0',
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh_nghe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinh_nghiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chưa có',
  `ngay_dk` date DEFAULT NULL,
  `muc_luong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_hoso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ho_so_tim_viec`
--

INSERT INTO `ho_so_tim_viec` (`id_hoso`, `id_ntv`, `vip`, `tieu_de`, `nganh_nghe`, `kinh_nghiem`, `ngay_dk`, `muc_luong`) VALUES
(1, 2, 1, 'Tìm việc chăm em bé, giúp việc nhà hoặc nuôi bệnh tại TPHCM', 'lao động phổ thông', 'chưa có', '2017-10-31', '4-6 triệu'),
(2, 1, 1, 'Nhận thiết kế website, Marketing Online, Quản trị web, SEO web, chăm sóc web...', 'Kỹ thuật máy tính', '3 năm', '2017-10-31', '6-9 Triệu'),
(3, 3, 1, 'kế toán thuế chuyên nghiệp trong mọi loại hình doanh nghiệp', 'kế toán', 'trên 5 năm', '2017-10-31', '4-7 triệu');

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
-- Cấu trúc bảng cho bảng `lien_he`
--

DROP TABLE IF EXISTS `lien_he`;
CREATE TABLE IF NOT EXISTS `lien_he` (
  `id` int(11) NOT NULL,
  `id_ntd` int(11) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_lh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_lh` int(11) NOT NULL
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_tim_viec`
--

DROP TABLE IF EXISTS `nguoi_tim_viec`;
CREATE TABLE IF NOT EXISTS `nguoi_tim_viec` (
  `id_ntv` int(11) NOT NULL AUTO_INCREMENT,
  `ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bang_cap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'images/hoso/avatar.png',
  `chung_chi` text COLLATE utf8mb4_unicode_ci,
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ntv`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_tim_viec`
--

INSERT INTO `nguoi_tim_viec` (`id_ntv`, `ho`, `ten`, `email`, `phone`, `ngay_sinh`, `dia_chi`, `bang_cap`, `avatar`, `chung_chi`, `gioi_tinh`, `active`, `pass`) VALUES
(1, '', 'Tuấn', 'tuan@gmail.com', '0123456798', '1992-03-10', 'tp hcm', 'Đại học', 'images/hoso/9.jpg', NULL, 'nam', 1, ''),
(2, '', 'Trường', 'truong@gmail.com', '0123456789', '1990-10-03', 'HCM', 'Phổ Thông', 'images/hoso/12.jpg', NULL, 'nam', 1, ''),
(3, 'Thanh', 'Thùy', 'thuy@gmail.com', '0123456777', '1997-10-19', 'HCM', 'Trung Cấp', 'images/hoso/avatar.png', NULL, 'Nữ', 1, ''),
(8, 'Trần', 'Phi', 'phi@gmail.com', '01239876543', NULL, NULL, NULL, 'images/hoso/avatar.png', NULL, 'Nam', 1, '202cb962ac59075b964b07152d234b70');

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
  `ms_thue` int(11) DEFAULT NULL,
  `ten_lh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_lh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_lh` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_tuyen_dung`
--

INSERT INTO `nha_tuyen_dung` (`id`, `ten_cty`, `email`, `phone`, `dia_chi`, `ms_thue`, `ten_lh`, `email_lh`, `pass`, `sdt_lh`, `active`) VALUES
(1, 'Công Ty Cổ Phần Ống Thép Việt Đức', 'vietduc@gmail.com', '0123456789', 'TP HCM', NULL, '', '', 'c4ca4238a0b923820dcc509a6f75849b', 0, 1),
(2, 'CÔNG TY TNHH HƯNG THỊNH', 'hungthinh@gmail.com', '0123456678', 'Tp HCM', NULL, '', '', 'c4ca4238a0b923820dcc509a6f75849b', 0, 1),
(4, 'Karaoke Cơ sở Hoa Lan 2', 'a@gmail.com', '0987654321', 'tp hcm', 1, 'a', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 987654321, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `viec_lam`
--

DROP TABLE IF EXISTS `viec_lam`;
CREATE TABLE IF NOT EXISTS `viec_lam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ntd` int(11) NOT NULL,
  `tieu_de` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bang_cap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinh_nghiem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muc_luong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vi_tri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci,
  `so_luong` int(11) NOT NULL DEFAULT '1',
  `ngay_dk` date NOT NULL,
  `ngay_hh` date NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `yeu_cau` text COLLATE utf8mb4_unicode_ci,
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `viec_lam`
--

INSERT INTO `viec_lam` (`id`, `id_ntd`, `tieu_de`, `nganh`, `bang_cap`, `kinh_nghiem`, `muc_luong`, `vi_tri`, `mo_ta`, `so_luong`, `ngay_dk`, `ngay_hh`, `active`, `yeu_cau`, `chuc_vu`, `hinh_anh`) VALUES
(1, 1, 'Tuyển giám đốc kinh doanh', 'CEO', 'Đại học', '2 năm', '10000000', 'Tp hcm', NULL, 1, '2017-10-10', '2017-10-31', 1, NULL, 'Giám đốc', 'images/vieclam/3.jpg'),
(2, 2, ' Tuyển kỹ thuật viên', 'Điện tử', 'Đại học', '2 năm', '10000000', 'Tp hcm', NULL, 1, '2017-10-10', '2017-10-31', 1, NULL, 'Ky Thuat Vien', 'images/vieclam/4.jpg'),
(3, 4, 'Karaoke Cơ sở Hoa Lan 2  cần tuyển nữ massage và karaoke.', 'massage', 'phổ thông', NULL, '0', 'TP HCM', 'Karaoke Cơ sở Hoa Lan 2 số 729 đường Dương Nội, Quận Hà Đông, Hà Nội, cần tuyển nữ massage và karaoke.\r\n- Thu nhập: Karaoke 100K/h, massage 40K/h+ tiền Bo\r\n- Thanh toán vào các ngày cuối tuần trong tháng.\r\nLH: Anh Thắng, 0973.20.20.30', 1, '2017-10-31', '2017-11-30', 1, NULL, 'nhân viên', 'images/vieclam/hinhanh.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
