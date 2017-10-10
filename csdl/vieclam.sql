-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2017 lúc 03:15 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `nguoi_tim_viec` (
  `id` int(11) NOT NULL,
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
  `active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_tim_viec`
--

INSERT INTO `nguoi_tim_viec` (`id`, `ten`, `email`, `phone`, `ngay_sinh`, `dia_chi`, `bang_cap`, `ky_nang`, `kinh_nghiem`, `muc_luong`, `avatar`, `chung_chi`, `gioi_tinh`, `active`) VALUES
(1, 'Tuấn', 'tuan@gmail.com', '0123456798', '1992-03-10', 'tp hcm', 'Đại học', NULL, NULL, NULL, NULL, NULL, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_tuyen_dung`
--

CREATE TABLE `nha_tuyen_dung` (
  `id` int(11) NOT NULL,
  `ten_cty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `viec_lam`
--

CREATE TABLE `viec_lam` (
  `id` int(11) NOT NULL,
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
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `viec_lam`
--

INSERT INTO `viec_lam` (`id`, `ten_viec`, `nganh`, `bang_cap`, `kinh_nghiem`, `muc_luong`, `vi_tri`, `mo_ta`, `ngay_dk`, `ngay_hh`, `active`, `yeu_cau`, `chuc_vu`, `hinh_anh`) VALUES
(1, 'Giám đốc kinh doanh', 'CEO', 'Đại học', '2 năm', '10000000', 'Tp hcm', NULL, '2017-10-10', '2017-10-31', 1, NULL, 'Giám đốc', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoi_tim_viec`
--
ALTER TABLE `nguoi_tim_viec`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nha_tuyen_dung`
--
ALTER TABLE `nha_tuyen_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `viec_lam`
--
ALTER TABLE `viec_lam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoi_tim_viec`
--
ALTER TABLE `nguoi_tim_viec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `nha_tuyen_dung`
--
ALTER TABLE `nha_tuyen_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `viec_lam`
--
ALTER TABLE `viec_lam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
