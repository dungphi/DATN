-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 10, 2017 lúc 05:21 PM
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
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `ten`, `user`, `pass`, `active`) VALUES
(1, 'Thiệu', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'admin', 'admin1', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cap_bac`
--

DROP TABLE IF EXISTS `cap_bac`;
CREATE TABLE IF NOT EXISTS `cap_bac` (
  `id_cb` int(11) NOT NULL AUTO_INCREMENT,
  `cap_bac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cb`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cap_bac`
--

INSERT INTO `cap_bac` (`id_cb`, `cap_bac`) VALUES
(1, 'CTV'),
(2, 'Nhân Viên'),
(3, 'Trưởng nhóm'),
(4, 'Trưởng phó phòng'),
(5, 'Chuyên gia'),
(6, 'Quản lý cấp cao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_diem`
--

DROP TABLE IF EXISTS `dia_diem`;
CREATE TABLE IF NOT EXISTS `dia_diem` (
  `id_dd` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dd`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dia_diem`
--

INSERT INTO `dia_diem` (`id_dd`, `ten_dd`) VALUES
(1, 'TP.Hồ Chí Minh'),
(2, 'Hà Nội'),
(3, 'Bình Dương'),
(4, 'Đồng Nai'),
(5, 'Lâm Đồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioi_tinh`
--

DROP TABLE IF EXISTS `gioi_tinh`;
CREATE TABLE IF NOT EXISTS `gioi_tinh` (
  `id_gt` int(11) NOT NULL,
  `gioi_tinh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa cập nhật',
  PRIMARY KEY (`id_gt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gioi_tinh`
--

INSERT INTO `gioi_tinh` (`id_gt`, `gioi_tinh`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Không yêu cầu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_thuc_lam_viec`
--

DROP TABLE IF EXISTS `hinh_thuc_lam_viec`;
CREATE TABLE IF NOT EXISTS `hinh_thuc_lam_viec` (
  `id_htlv` int(11) NOT NULL AUTO_INCREMENT,
  `hinh_thuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_htlv`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh_thuc_lam_viec`
--

INSERT INTO `hinh_thuc_lam_viec` (`id_htlv`, `hinh_thuc`) VALUES
(1, 'Nhân viên chính thức'),
(2, 'Nhân viên thời vụ'),
(3, 'Bán thời gian'),
(4, 'Làm ngoài giờ'),
(5, 'Thực tập & dự án');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ho_so_tim_viec`
--

DROP TABLE IF EXISTS `ho_so_tim_viec`;
CREATE TABLE IF NOT EXISTS `ho_so_tim_viec` (
  `id_hoso` int(11) NOT NULL AUTO_INCREMENT,
  `id_ntv` int(11) NOT NULL,
  `vip` tinyint(4) NOT NULL DEFAULT '0',
  `luot_xem` int(11) NOT NULL DEFAULT '0',
  `tieu_de` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nn` int(11) NOT NULL,
  `id_ddlv` int(11) NOT NULL COMMENT 'dia_diem_lam_viec',
  `id_kinh_nghiem` int(11) NOT NULL,
  `id_trinh_do` int(11) NOT NULL,
  `ngay_dk` date DEFAULT NULL,
  `id_muc_luong` int(11) NOT NULL,
  `hon_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'độc thân',
  `chung_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chưa cập nhật',
  `ngoai_ngu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'chưa cập nhật',
  `hinh_thuc_lam_viec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `muc_tieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Công việc phù hợp và ổn định  Môi trường làm việc thân thiện Chế độ theo quy định',
  `chuc_vu_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu_mm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_hoso`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ho_so_tim_viec`
--

INSERT INTO `ho_so_tim_viec` (`id_hoso`, `id_ntv`, `vip`, `luot_xem`, `tieu_de`, `id_nn`, `id_ddlv`, `id_kinh_nghiem`, `id_trinh_do`, `ngay_dk`, `id_muc_luong`, `hon_nhan`, `chung_chi`, `ngoai_ngu`, `hinh_thuc_lam_viec`, `muc_tieu`, `chuc_vu_ht`, `chuc_vu_mm`) VALUES
(1, 2, 1, 2, 'Tìm việc chăm em bé, giúp việc nhà hoặc nuôi bệnh tại TPHCM', 7, 3, 1, 7, '2017-10-31', 2, 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên'),
(2, 1, 1, 2, 'Nhận thiết kế website, Marketing Online, Quản trị web, chăm sóc web', 4, 1, 4, 1, '2017-10-31', 3, 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên'),
(3, 3, 1, 4, 'Kế toán thuế chuyên nghiệp trong mọi loại hình doanh nghiệp', 6, 1, 7, 1, '2017-10-31', 4, 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên'),
(4, 8, 0, 10, 'Kĩ sư máy tính, iT,mạng máy tính.', 4, 1, 3, 1, '2017-12-03', 3, 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên'),
(5, 4, 0, 4, 'Nhân Viên Sale', 6, 1, 3, 1, '2017-12-03', 3, 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên'),
(6, 5, 1, 5, 'Nhân Viên Bán Hàng', 7, 3, 1, 5, '2017-12-03', 2, 'độc thân', 'chưa cập nhật', 'chưa cập nhật', 'nhân viên chính thức', 'Công việc phù hợp và ổn định \r\nMôi trường làm việc thân thiện Chế độ theo quy định', 'nhân viên', 'nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinh_nghiem`
--

DROP TABLE IF EXISTS `kinh_nghiem`;
CREATE TABLE IF NOT EXISTS `kinh_nghiem` (
  `id_kn` int(11) NOT NULL AUTO_INCREMENT,
  `ten_kn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_kn`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kinh_nghiem`
--

INSERT INTO `kinh_nghiem` (`id_kn`, `ten_kn`) VALUES
(1, 'Chưa có '),
(2, 'Dưới 1 năm'),
(3, '1 năm'),
(4, '2 năm'),
(5, '3 năm'),
(6, '4 năm'),
(7, '5 năm'),
(8, 'Trên 5 năm');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `muc_luong`
--

INSERT INTO `muc_luong` (`id_ml`, `muc_luong`) VALUES
(1, 'Dưới 3 triệu'),
(2, '3-5 triệu'),
(3, '5-7 triệu'),
(4, '7-10 triệu'),
(5, '10-12 triệu'),
(6, '13-17 triệu'),
(7, '17-20 triệu'),
(8, '21-25 triệu'),
(9, '26-30 triệu'),
(10, 'Trên 30 triệu ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh_nghe`
--

DROP TABLE IF EXISTS `nganh_nghe`;
CREATE TABLE IF NOT EXISTS `nganh_nghe` (
  `id_nn` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_nn`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh_nghe`
--

INSERT INTO `nganh_nghe` (`id_nn`, `ten_nn`) VALUES
(4, 'Nhân viên IT'),
(5, 'Bán hàng'),
(6, 'Kế toán'),
(1, 'Quản trị kinh doanh'),
(2, 'Điện tử'),
(3, 'Massage'),
(7, 'Người giúp việc'),
(8, 'Báo chí/Biên tập viên');

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
  `id_gioi_tinh` int(11) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ntv`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_tim_viec`
--

INSERT INTO `nguoi_tim_viec` (`id_ntv`, `ho`, `ten`, `email`, `phone`, `ngay_sinh`, `dia_chi`, `avatar`, `id_gioi_tinh`, `active`, `pass`) VALUES
(1, 'Thanh', 'Tuấn', 'tuan@gmail.com', '0123456798', '1992-03-10', 'Tp HCM', 'images/hoso/9.jpg', 1, 1, ''),
(2, 'Phan Anh', 'Trường', 'truong@gmail.com', '0123456789', '1990-10-03', 'HCM', 'images/hoso/12.jpg', 1, 1, ''),
(3, 'Thanh', 'Thùy', 'thuy@gmail.com', '0123456777', '1997-10-19', 'HCM', 'images/hoso/avatar.png', 2, 1, ''),
(8, 'Trần', 'Phi', 'phi@gmail.com', '01239876543', '1990-02-11', 'Ha Noi', 'images/hoso/avatar.png', 1, 1, '202cb962ac59075b964b07152d234b70'),
(4, 'Nguyễn Vũ Vân ', 'Anh', 'vananh@gmail.com', '0987654321', '1996-02-01', 'Hồ Chí Minh', 'images/hoso/avatar.png', 2, 1, ''),
(5, 'Nguyễn Tấn ', 'Thành', 'thanh@gmail.com', '0987654321', '1998-03-02', 'Hồ Chí Minh', 'images/hoso/avatar.png', 1, 1, '');

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
-- Cấu trúc bảng cho bảng `trinh_do`
--

DROP TABLE IF EXISTS `trinh_do`;
CREATE TABLE IF NOT EXISTS `trinh_do` (
  `id_td` int(11) NOT NULL,
  `trinh_do` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_td`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trinh_do`
--

INSERT INTO `trinh_do` (`id_td`, `trinh_do`) VALUES
(1, 'Đại học'),
(2, 'Cao đẳng'),
(3, 'Trung cấp'),
(4, 'Cao học'),
(5, 'Trung học'),
(6, 'Chứng chỉ nghề'),
(7, 'Phổ Thông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `viec_lam`
--

DROP TABLE IF EXISTS `viec_lam`;
CREATE TABLE IF NOT EXISTS `viec_lam` (
  `id_vl` int(11) NOT NULL AUTO_INCREMENT,
  `id_ntd` int(11) NOT NULL,
  `id_nganh` int(11) NOT NULL,
  `id_kinh_nghiem` int(11) DEFAULT NULL,
  `id_muc_luong` int(11) DEFAULT NULL,
  `id_ddlv` int(11) NOT NULL COMMENT 'dia_diem_lam_viec',
  `id_trinh_do` int(11) NOT NULL,
  `tieu_de` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_tri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci,
  `so_luong` int(11) NOT NULL DEFAULT '1',
  `ngay_dk` date NOT NULL,
  `ngay_hh` date NOT NULL,
  `active_vl` tinyint(4) NOT NULL DEFAULT '1',
  `yc_gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Không yêu cầu',
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luot_xem` int(11) NOT NULL DEFAULT '0',
  `quy_mo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_thuc_lv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_vl`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `viec_lam`
--

INSERT INTO `viec_lam` (`id_vl`, `id_ntd`, `id_nganh`, `id_kinh_nghiem`, `id_muc_luong`, `id_ddlv`, `id_trinh_do`, `tieu_de`, `vi_tri`, `mo_ta`, `so_luong`, `ngay_dk`, `ngay_hh`, `active_vl`, `yc_gioi_tinh`, `chuc_vu`, `hinh_anh`, `luot_xem`, `quy_mo`, `hinh_thuc_lv`) VALUES
(1, 1, 1, 4, 5, 1, 1, 'Tuyển giám đốc kinh doanh', '1', NULL, 1, '2017-10-10', '2017-10-31', 1, '3', 'Giám đốc', 'images/vieclam/3.jpg', 2, '500 người', 'Nhân viên chính thức'),
(2, 2, 2, 3, 3, 4, 1, ' Tuyển kỹ thuật viên', '3', NULL, 3, '2017-10-10', '2017-10-31', 1, '3', 'Ky Thuat Vien', 'images/vieclam/4.jpg', 2, '50-100 người', 'Nhân viên chính thức'),
(3, 4, 3, 1, 4, 2, 7, 'Karaoke Cơ sở Hoa Lan 2  cần tuyển nữ massage và karaoke.', '2', 'Karaoke Cơ sở Hoa Lan 2 số 729 đường Dương Nội, Quận Hà Đông, Hà Nội, cần tuyển nữ massage và karaoke.\r\n- Thu nhập: Karaoke 100K/h, massage 40K/h+ tiền Bo\r\n- Thanh toán vào các ngày cuối tuần trong tháng.\r\nLH: Anh Thắng, 0973.20.20.30', 10, '2017-10-31', '2017-11-30', 1, '2', 'nhân viên', 'images/vieclam/hinhanh.png', 9, '10-50 người', 'Nhân viên chính thức');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
