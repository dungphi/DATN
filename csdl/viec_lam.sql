-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 26, 2017 lúc 04:51 PM
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
-- Cấu trúc bảng cho bảng `viec_lam`
--

DROP TABLE IF EXISTS `viec_lam`;
CREATE TABLE IF NOT EXISTS `viec_lam` (
  `id_vl` int(11) NOT NULL AUTO_INCREMENT,
  `id_ntd` int(11) NOT NULL,
  `vip` tinyint(4) NOT NULL DEFAULT '0',
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

INSERT INTO `viec_lam` (`id_vl`, `id_ntd`, `vip`, `id_nganh`, `id_kinh_nghiem`, `id_muc_luong`, `id_ddlv`, `id_trinh_do`, `tieu_de`, `vi_tri`, `mo_ta`, `so_luong`, `ngay_dk`, `ngay_hh`, `active_vl`, `yc_gioi_tinh`, `chuc_vu`, `hinh_anh`, `luot_xem`, `quy_mo`, `hinh_thuc_lv`) VALUES
(1, 1, 1, 1, 4, 5, 1, 1, 'Tuyển giám đốc kinh doanh', '1', NULL, 1, '2017-10-10', '2017-10-31', 1, '3', 'Giám đốc', 'images/vieclam/3.jpg', 9, '500 người', '1'),
(2, 2, 1, 2, 3, 3, 4, 1, ' Tuyển kỹ thuật viên', '3', NULL, 3, '2017-10-10', '2017-10-31', 1, '3', 'Ky Thuat Vien', 'images/vieclam/4.jpg', 31, '50-100 người', '1'),
(3, 4, 1, 3, 1, 4, 2, 7, 'Karaoke Cơ sở Hoa Lan 2  cần tuyển nữ massage và karaoke.', '2', 'Karaoke Cơ sở Hoa Lan 2 số 729 đường Dương Nội, Quận Hà Đông, Hà Nội, cần tuyển nữ massage và karaoke.\r\n- Thu nhập: Karaoke 100K/h, massage 40K/h+ tiền Bo\r\n- Thanh toán vào các ngày cuối tuần trong tháng.\r\nLH: Anh Thắng, 0973.20.20.30', 10, '2017-10-31', '2017-11-30', 1, '2', 'nhân viên', 'images/vieclam/hinhanh.png', 55, '10-50 người', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
