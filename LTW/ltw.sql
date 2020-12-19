-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th12 12, 2020 lúc 06:25 AM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltw`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `id_lop` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lop` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_lop`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id_lop`, `ten_lop`) VALUES
(1, 'Lớp 01'),
(2, 'Lớp 02'),
(3, 'Lớp 03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id_sinh_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_lop` int(11) DEFAULT NULL,
  `mssv` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_sinh_vien`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id_sinh_vien`, `ho_ten`, `id_lop`, `mssv`) VALUES
(32, 'Trần Thị Như', 0, '18004556'),
(31, 'Tú', 0, '45'),
(30, 'Nguyễn Văn C', 0, '123'),
(29, 'Nguyễn Văn A', 0, '123456789'),
(28, 'Nguyễn Văn A', 0, '12345'),
(27, 'Nguyễn Văn A', 0, '12345'),
(26, '444', 0, '555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tro_choi`
--

DROP TABLE IF EXISTS `tro_choi`;
CREATE TABLE IF NOT EXISTS `tro_choi` (
  `id_mon` text COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tro_choi`
--

INSERT INTO `tro_choi` (`id_mon`, `loai`) VALUES
('3', 1),
('2', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
