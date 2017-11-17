-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 17, 2017 lúc 02:15 PM
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
-- Cấu trúc bảng cho bảng `ho_so_tim_viec`
--

DROP TABLE IF EXISTS `ho_so_tim_viec`;
CREATE TABLE IF NOT EXISTS `ho_so_tim_viec` (
  `id_hoso` int(11) NOT NULL,
  `id_ntv` int(11) NOT NULL,
  `vip` tinyint(4) NOT NULL DEFAULT '0',
  `luot_xem` int(11) NOT NULL DEFAULT '0',
  `tieu_de` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nganh_nghe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinh_nghiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chưa có',
  `trinh_do` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dk` date DEFAULT NULL,
  `muc_luong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hon_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'độc thân',
  `chung_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chưa cập nhật',
  `ngoai_ngu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chưa cập nhật',
  `hinh_thuc_lam_viec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `muc_tieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Công việc phù hợp và ổn định  Môi trường làm việc thân thiện Chế độ theo quy định',
  `chuc_vu_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu_mm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_diem_lam_viec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_hoso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ho_so_tim_viec`
--

INSERT INTO `ho_so_tim_viec` (`id_hoso`, `id_ntv`, `vip`, `luot_xem`, `tieu_de`, `nganh_nghe`, `kinh_nghiem`, `trinh_do`, `ngay_dk`, `muc_luong`, `hon_nhan`, `chung_chi`, `ngoai_ngu`, `hinh_thuc_lam_viec`, `muc_tieu`, `chuc_vu_ht`, `chuc_vu_mm`, `dia_diem_lam_viec`) VALUES
(1, 2, 1, 0, 'Tìm việc chăm em bé, giúp việc nhà hoặc nuôi bệnh tại TPHCM', 'lao động phổ thông', 'chưa có', 'Phổ thông', '2017-10-31', '4-6 triệu', 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên', 'Bình Dương'),
(2, 1, 1, 0, 'Nhận thiết kế website, Marketing Online, Quản trị web, chăm sóc web', 'Kỹ thuật máy tính', '3 năm', 'Đại học', '2017-10-31', '6-9 Triệu', 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên', 'Tp HCM'),
(3, 3, 1, 0, 'Kế toán thuế chuyên nghiệp trong mọi loại hình doanh nghiệp', 'kế toán', 'trên 5 năm', 'Đại học', '2017-10-31', '4-7 triệu', 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên', 'Tp HCM');

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
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'images/hoso/avatar.png',
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ntv`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_tim_viec`
--

INSERT INTO `nguoi_tim_viec` (`id_ntv`, `ho`, `ten`, `email`, `phone`, `ngay_sinh`, `dia_chi`, `avatar`, `gioi_tinh`, `active`, `pass`) VALUES
(1, 'Thanh', 'Tuấn', 'tuan@gmail.com', '0123456798', '1992-03-10', 'Tp HCM', 'images/hoso/9.jpg', 'nam', 1, ''),
(2, 'Phan Anh', 'Trường', 'truong@gmail.com', '0123456789', '1990-10-03', 'HCM', 'images/hoso/12.jpg', 'nam', 1, ''),
(3, 'Thanh', 'Thùy', 'thuy@gmail.com', '0123456777', '1997-10-19', 'HCM', 'images/hoso/avatar.png', 'Nữ', 1, ''),
(8, 'Trần', 'Phi', 'phi@gmail.com', '01239876543', NULL, 'Ha Noi', 'images/hoso/avatar.png', 'Nam', 1, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_tuyen_dung`
--

DROP TABLE IF EXISTS `nha_tuyen_dung`;
CREATE TABLE IF NOT EXISTS `nha_tuyen_dung` (
  `id_ntd` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_ntd`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_tuyen_dung`
--

INSERT INTO `nha_tuyen_dung` (`id_ntd`, `ten_cty`, `email`, `phone`, `dia_chi`, `ms_thue`, `ten_lh`, `email_lh`, `pass`, `sdt_lh`, `active`) VALUES
(1, 'Công Ty Cổ Phần Ống Thép Việt Đức', 'vietduc@gmail.com', '0123456789', 'TP HCM', NULL, '', '', 'c4ca4238a0b923820dcc509a6f75849b', 0, 1),
(2, 'CÔNG TY TNHH HƯNG THỊNH', 'hungthinh@gmail.com', '0123456678', 'Tp HCM', NULL, '', '', 'c4ca4238a0b923820dcc509a6f75849b', 0, 1),
(4, 'Karaoke Cơ sở Hoa Lan 2', 'a@gmail.com', '0987654321', 'tp hcm', 1, 'a', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 987654321, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `viec_lam`
--

DROP TABLE IF EXISTS `viec_lam`;
CREATE TABLE IF NOT EXISTS `viec_lam` (
  `id_vl` int(11) NOT NULL AUTO_INCREMENT,
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
  `yc_gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Không yêu cầu',
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luot_xem` int(11) NOT NULL DEFAULT '0',
  `quy_mo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_diem_lv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_thuc_lv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_vl`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `viec_lam`
--

INSERT INTO `viec_lam` (`id_vl`, `id_ntd`, `tieu_de`, `nganh`, `bang_cap`, `kinh_nghiem`, `muc_luong`, `vi_tri`, `mo_ta`, `so_luong`, `ngay_dk`, `ngay_hh`, `active`, `yc_gioi_tinh`, `chuc_vu`, `hinh_anh`, `luot_xem`, `quy_mo`, `dia_diem_lv`, `hinh_thuc_lv`) VALUES
(1, 1, 'Tuyển giám đốc kinh doanh', 'Quản trị kinh doanh', 'Đại học', '2 năm', '10000000', 'Tp hcm', NULL, 1, '2017-10-10', '2017-10-31', 1, 'Không yêu cầu', 'Giám đốc', 'images/vieclam/3.jpg', 0, '500 người', 'Tp HCM', 'Nhân viên chính thức'),
(2, 2, ' Tuyển kỹ thuật viên', 'Điện tử', 'Đại học', '2 năm', '10000000', 'Tp hcm', NULL, 3, '2017-10-10', '2017-10-31', 1, 'Không yêu cầu', 'Ky Thuat Vien', 'images/vieclam/4.jpg', 0, '50-100 người', 'TP HCM', 'Nhân viên chính thức'),
(3, 4, 'Karaoke Cơ sở Hoa Lan 2  cần tuyển nữ massage và karaoke.', 'massage', 'phổ thông', NULL, '0', 'TP HCM', 'Karaoke Cơ sở Hoa Lan 2 số 729 đường Dương Nội, Quận Hà Đông, Hà Nội, cần tuyển nữ massage và karaoke.\r\n- Thu nhập: Karaoke 100K/h, massage 40K/h+ tiền Bo\r\n- Thanh toán vào các ngày cuối tuần trong tháng.\r\nLH: Anh Thắng, 0973.20.20.30', 10, '2017-10-31', '2017-11-30', 1, 'Không yêu cầu', 'nhân viên', 'images/vieclam/hinhanh.png', 0, '10-50 người', 'TP HCM', 'Nhân viên chính thức');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
