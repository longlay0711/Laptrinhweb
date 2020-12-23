-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2020 at 05:23 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneakerweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `madh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` bigint(20) NOT NULL,
  `thanhtien` bigint(20) NOT NULL,
  KEY `masp` (`masp`),
  KEY `madh` (`madh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` int(11) NOT NULL AUTO_INCREMENT,
  `gia` bigint(10) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idkh` int(11) NOT NULL,
  PRIMARY KEY (`madh`),
  KEY `idkh` (`idkh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `maloai` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('BR', 'Bóng rổ'),
('CB', 'Chạy bộ'),
('CL', 'Cầu lông'),
('CLS', 'Classic'),
('ĐB', 'Đá banh'),
('GB', 'Giày boot'),
('GT', 'Giày tây'),
('QV', 'Quần vợt');

-- --------------------------------------------------------

--
-- Table structure for table `nsx`
--

DROP TABLE IF EXISTS `nsx`;
CREATE TABLE IF NOT EXISTS `nsx` (
  `mansx` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `tennsx` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mansx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nsx`
--

INSERT INTO `nsx` (`mansx`, `tennsx`) VALUES
('Ads', 'Adidas'),
('Jd', 'Jordan'),
('Nk', 'Nike'),
('Pm', 'Puma');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int(11) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `gia` bigint(10) NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `mansx` char(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`masp`),
  KEY `maloai` (`maloai`),
  KEY `mansx` (`mansx`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `mota`, `anh`, `maloai`, `mansx`) VALUES
(15, 'ULTRABOOST 19', 5000000, '', 'pic13.jpg', 'CB', 'Ads'),
(16, 'NMD_R1', 3400000, '', 'pi.jpg', 'CB', 'Ads'),
(17, 'RAPIDARUN', 2000000, '', 'pi1.jpg', 'CB', 'Ads'),
(18, 'AIR JORDAN 11 RETRO ', 2900000, 'bbbbbbbbbbbb', 'pic8.jpg', 'BR', 'Jd'),
(19, 'AIR JORDAN 11 MID SE ', 2700000, 'aaaaaaaaaaaaa', 'pic11.jpg', 'BR', 'Jd'),
(20, 'AIR FORCE 1 REACT', 3500000, '', 'pic6.jpg', 'CLS', 'Nk'),
(21, 'AIR ZOOM PEGASUS 37', 3500000, '', 'pic4.jpg', 'CLS', 'Nk'),
(22, 'AIRFORCE 07 PREMIUM', 3800000, '', 'pi3.jpg', 'CLS', 'Nk'),
(23, 'AIR JORDAN 11 HI FLYEASE ', 5200000, 'ccccccccccccccccc', 'pi5.jpg', 'BR', 'Jd');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_size`
--

DROP TABLE IF EXISTS `sanpham_size`;
CREATE TABLE IF NOT EXISTS `sanpham_size` (
  `masize` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  KEY `masize` (`masize`),
  KEY `masp` (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `masize` int(11) NOT NULL AUTO_INCREMENT,
  `size` int(10) NOT NULL,
  PRIMARY KEY (`masize`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `address`, `numphone`, `password`, `level`) VALUES
(7, 'Lay Van Long', 'lvanlong0711', 'long.lay0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, TP.HCM', '0934098561', 'c607b247236765deb83ae95bddcb0333', 0),
(8, 'Lay Van Long', 'longlay0711', 'long.lay0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, TP.HCM', '0934098561', 'c607b247236765deb83ae95bddcb0333', 0),
(9, 'Furry yellow', 'vanlong', 'long0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, TP.HCM', '0123456789', 'e10adc3949ba59abbe56e057f20f883e', 0),
(10, 'Lay Van Long', 'long', 'long.lay0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, TP.HCM', '0934098561', 'e10adc3949ba59abbe56e057f20f883e', 0),
(13, 'Lày Vân Long', 'longlay0711', 'long.lay0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, Tp.HCM', '0934098561', '07111999', 1),
(21, 'Lay Van Long', 'long', 'long.lay0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, TP.HCM', '0934098561', '202cb962ac59075b964b07152d234b70', 0),
(22, 'Lay Van Long', 'longlay0711', 'long.lay0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, TP.HCM', '0934098561', '698d51a19d8a121ce581499d7b701668', 0),
(29, 'Lay Van Long', 'ddd', 'long.lay0711@gmail.com', '69/57 Hồ Thị Kỷ, Phường 01, Quận 10, TP.HCM', '0934098561', 'c4ca4238a0b923820dcc509a6f75849b', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `user` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`mansx`) REFERENCES `nsx` (`mansx`);

--
-- Constraints for table `sanpham_size`
--
ALTER TABLE `sanpham_size`
  ADD CONSTRAINT `sanpham_size_ibfk_1` FOREIGN KEY (`masize`) REFERENCES `size` (`masize`),
  ADD CONSTRAINT `sanpham_size_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
