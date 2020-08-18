-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2016 at 02:53 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanhangdientu`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `MaCTHD` int(10) NOT NULL,
  `MaHD` int(10) NOT NULL,
  `MaSP` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `DonGia` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaCTHD`, `MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(1, 2, 8, 100, 15900),
(3, 32, 9, 1, 15990000),
(4, 32, 19, 1, 15990000),
(5, 33, 21, 1, 18990000),
(6, 33, 7, 5, 3490000),
(7, 34, 21, 1, 18990000),
(8, 34, 7, 5, 3490000),
(9, 35, 2, 1, 9900000),
(10, 35, 17, 1, 2290000),
(11, 36, 2, 1, 9900000),
(12, 36, 17, 1, 2290000),
(13, 37, 2, 1, 9900000),
(14, 37, 17, 5, 2290000),
(15, 38, 2, 1, 9900000),
(16, 38, 17, 5, 2290000),
(17, 39, 2, 1, 9900000),
(18, 39, 17, 5, 2290000),
(19, 40, 9, 1, 15990000),
(20, 41, 9, 1, 15990000),
(21, 42, 9, 1, 15990000),
(22, 43, 9, 1, 15990000),
(23, 44, 9, 1, 15990000),
(24, 45, 9, 1, 15990000),
(25, 46, 9, 1, 15990000),
(26, 47, 9, 1, 15990000),
(27, 48, 9, 1, 15990000),
(28, 49, 18, 1, 6990000),
(29, 50, 18, 1, 6990000),
(30, 51, 18, 1, 6990000),
(31, 52, 18, 1, 6990000),
(32, 53, 18, 1, 6990000),
(33, 53, 17, 3, 2290000),
(34, 54, 18, 1, 6990000),
(35, 54, 17, 3, 2290000),
(36, 54, 9, 1, 15990000),
(37, 55, 18, 1, 6990000),
(38, 55, 17, 3, 2290000),
(39, 55, 9, 1, 15990000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` int(10) NOT NULL,
  `MaKH` int(10) NOT NULL,
  `NgayDat` datetime NOT NULL,
  `NoiGiao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TinhTrang` enum('Đã giao','Chưa giao','Đang giao','Đã hủy') COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `NgayDat`, `NoiGiao`, `TinhTrang`, `TongTien`) VALUES
(2, 1, '2016-01-14 00:00:00', 'trr', 'Đã giao', 1590000),
(3, 1, '2016-01-03 00:00:00', 'gHGH', 'Đã giao', 25555),
(4, 1, '2015-12-15 00:00:00', 'GHJHGJ', 'Đã giao', 9999),
(6, 1, '2015-10-13 00:00:00', '4545', 'Đã giao', 19999),
(7, 1, '2015-06-23 00:00:00', 'asdasd', 'Đã giao', 50000),
(8, 1, '2015-01-01 00:00:00', 'asd', 'Đã giao', 15000),
(9, 1, '2015-01-01 00:00:00', 'asd', 'Đã giao', 15000),
(10, 1, '2015-02-01 00:00:00', 'asd', 'Đã giao', 15000),
(11, 1, '2015-01-01 00:00:00', 'asd', 'Đã giao', 15000),
(12, 1, '2015-02-01 00:00:00', 'asd', 'Đã giao', 15000),
(13, 1, '2015-02-01 00:00:00', 'asd', 'Đã giao', 15000),
(14, 1, '2015-02-01 00:00:00', 'asd', 'Đã giao', 15000),
(15, 1, '2015-03-01 00:00:00', 'asd', 'Đã giao', 15000),
(16, 1, '2015-04-01 00:00:00', 'asd', 'Đã giao', 55555),
(17, 1, '2015-05-01 00:00:00', 'asd', 'Đã giao', 15000),
(18, 1, '2015-06-01 00:00:00', 'asd', 'Đã giao', 15000),
(19, 1, '2015-07-01 00:00:00', 'asd', 'Đã giao', 77777),
(20, 1, '2015-08-01 00:00:00', 'asd', 'Đã giao', 15000),
(21, 1, '2015-09-01 00:00:00', 'asd', 'Đã giao', 15000),
(22, 1, '2015-10-01 00:00:00', 'asd', 'Đã giao', 89000),
(23, 1, '2015-11-01 00:00:00', 'asd', 'Chưa giao', 99999),
(32, 2, '2016-01-12 05:10:28', 'bbbbbbbbbbbbbbbbb', 'Chưa giao', 31980000),
(33, 5, '2016-01-12 05:13:16', 'ok', 'Chưa giao', 36440000),
(34, 5, '2016-01-12 05:14:13', 'jhjjh', 'Đã giao', 36440000),
(35, 1, '2016-01-12 12:04:46', 'biên hòa', 'Chưa giao', 12190000),
(36, 1, '2016-01-12 12:05:44', 'et', 'Chưa giao', 12190000),
(37, 1, '2016-01-12 12:06:18', 'fghgfh', 'Chưa giao', 21350000),
(38, 1, '2016-01-12 12:07:50', '', 'Chưa giao', 21350000),
(39, 1, '2016-01-12 12:08:30', 'fgh', 'Chưa giao', 21350000),
(40, 1, '2016-01-12 12:11:49', 'dfgfdgdfgdfgdf', 'Chưa giao', 15990000),
(41, 1, '2016-01-12 12:13:48', 'h', 'Chưa giao', 15990000),
(42, 1, '2016-01-12 12:16:04', '', 'Chưa giao', 15990000),
(43, 1, '2016-01-12 12:18:54', '', 'Chưa giao', 15990000),
(44, 1, '2016-01-12 12:23:57', '', 'Chưa giao', 15990000),
(45, 1, '2016-01-12 12:25:56', '', 'Chưa giao', 15990000),
(46, 1, '2016-01-12 12:30:00', '', 'Chưa giao', 15990000),
(47, 1, '2016-01-12 12:31:50', '', 'Chưa giao', 15990000),
(48, 1, '2016-01-12 12:33:11', '', 'Chưa giao', 15990000),
(49, 1, '2016-01-12 12:39:40', '', 'Chưa giao', 6990000),
(50, 1, '2016-01-12 12:47:37', '', 'Chưa giao', 6990000),
(51, 1, '2016-01-12 12:52:35', '', 'Chưa giao', 6990000),
(52, 1, '2016-01-12 12:56:46', '', 'Chưa giao', 6990000),
(53, 1, '2016-01-12 13:36:53', 'hb,', 'Chưa giao', 13860000),
(54, 1, '2016-01-12 13:40:31', 'núi bà đen', 'Chưa giao', 29850000),
(55, 1, '2016-01-12 13:41:42', 'fd', 'Chưa giao', 29850000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` int(10) NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `IsAdmin` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `SoDienThoai`, `DiaChi`, `Email`, `Pass`, `IsAdmin`) VALUES
(1, 'ABCXYZDz', '01657990373', '250 An Duong Vuong P.3 Q.5 TP.HCM', 'buom@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 0),
(2, 'Thach Sau Doi', '0123456789', 'Trai Cai Nghien Thanh Nien Ngao Da', 'thach@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'Nguyen Admina', '01234567892', 'Chu website ban hang dien tua', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(9, 'Thạch', '0126479153', 'Biên Hòa', 'blue.sky.8235@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `MaLoai` int(10) NOT NULL,
  `TenLoai` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`) VALUES
(1, 'Điện Thoại'),
(3, 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE IF NOT EXISTS `nhasanxuat` (
  `MaNSX` int(10) NOT NULL,
  `TenNSX` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`) VALUES
(1, 'APPLE'),
(2, 'NOKIA'),
(3, 'ACER'),
(4, 'ASUS'),
(5, 'SONY'),
(6, 'OPPO'),
(7, 'SAMSUNG'),
(8, 'DELL');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` int(10) NOT NULL,
  `TenSP` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MaNSX` int(10) NOT NULL,
  `MaLoai` int(10) NOT NULL,
  `OS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RAM` int(2) NOT NULL,
  `Pin` int(5) NOT NULL,
  `Hinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ManHinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `GiaBan` int(10) NOT NULL,
  `SoLuongBan` int(4) DEFAULT NULL,
  `GiamGia` int(3) NOT NULL,
  `New` int(1) NOT NULL,
  `LuotXem` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaNSX`, `MaLoai`, `OS`, `CPU`, `RAM`, `Pin`, `Hinh`, `ManHinh`, `MoTa`, `GiaBan`, `SoLuongBan`, `GiamGia`, `New`, `LuotXem`) VALUES
(2, 'IPhone 5s', 1, 1, 'iOS 9', 'Apple A7, 2 nhân, 1.3 GHz', 1, 1560, 'IPhone_5s.jpg', 'DVGA, 4.0', 'Camera sau:| 8 MP, Quay phim FullHD 1080p@30fps|\\nCamera trước:| 1.2 MP|\\nBộ nhớ trong: |16 GB|', 9900000, 0, 1, 0, 14),
(3, 'iPad Air 2 Cellular', 1, 3, 'iOS 8', '3 nhân, 1.5 GHz', 2, 7340, 'iPad_Air_2_Cellular.jpg', 'Retina,9.7', 'Camera sau: |8 MP, Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |1.2 MP|\\nBộ nhớ trong: |16 GB|', 17500000, 0, 0, 1, 11),
(4, 'iPad Pro Wifi', 1, 3, 'iOS 9', 'Dual - Core, 2.2GHz', 4, 4000, '4636ipad_wifi.png', 'LCD, 12.9 inch', 'Camera sau: |8 MP, Quay phim chuẩn 1080p@30fps|\\nCamera trước: |1.2 MP|\\nBộ nhớ trong: |32 GB|\\nKhông 3G', 19900000, 0, 1, 1, 2),
(5, 'Galaxy S6 Edge Plus', 7, 1, 'Android 5.1 (Lollipop)', 'Exynos 7420,4x1.5GHz', 4, 3000, 'Galaxy_S6_Edge_Plus.jpg', 'Quad HD, 5.7', 'Camera sau: |16 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|', 19990000, 0, 0, 1, 2),
(6, 'Galaxy Note 5', 7, 1, 'Android 5.1 (Lollipop)', 'Exynos 7420,4x1.5GHz', 3, 3000, 'Galaxy_Note_5.jpg', 'Quad HD, 5.7', 'Camera sau: |16 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|', 17950000, 0, 0, 1, 2),
(7, 'Galaxy Tab 3V', 7, 3, 'Android 4.4', 'Quad-core, 1.3 GHz', 1, 3600, 'Galaxy_Tab_3V.jpg', 'TFT, 7 inch', 'Camera sau: |2 MP (1600 x 1200 pixels), Quay phim chuẩn VGA (640x480 pixels)|\\nCamera trước:|2 MP (1600 x 1200 pixels)|\\nHổ trợ sim: NanoSim\\nBộ nhớ trong: |8 gb|', 3490000, 5, 1, 0, 7),
(8, 'Galaxy Tab S2', 7, 3, 'Android 5.0', '8 nhân, 1.3 GHz', 3, 4000, 'Galaxy_Tab_S2.jpg', 'AMOLED, 8 inch', 'Camera sau: |8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |2.1 MP (1920 x 1080 pixels)|\\nBộ nhớ trong: |32gb|\\nHỗ trợ SIM: Nano Sim\\nĐàm thoại: Có', 11990000, 0, 1, 0, 2),
(9, 'Lumia 950 XL', 2, 1, 'Windows 10', 'Snapdragon 4 nhân 1.5 GHz', 3, 3340, 'Lumia_950_XL.jpg', 'AMOLED 5.7', 'Camera sau: |20 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|\\nHỗ trợ thẻ tối đa: 200GB\\nSố khe SIM: 1 Sim, Nano SIM', 15990000, 0, 0, 0, 23),
(10, 'Lumia 540', 2, 1, 'Windows Phone 8.1', '4 nhân, 1.2 GHz', 1, 2200, 'Lumia_540.jpg', 'HD, 5.0', '2 SIM 2 sóng, Micro SIM\\nCamera sau: |8.0 MP, Quay phim 480p@30fps|\\nCamtruoc: |5 MP|\\nBộ nhớ trong: |8 GB|', 3490000, 0, 1, 0, 1),
(11, 'ASUS Fonepad 8', 4, 3, 'Android 4.4', 'Quad-core, 1.33GHz', 1, 4000, 'ASUS_Fonepad 8.jpg', 'LED, IPS, 8 inch', 'Camera sau: |4.9 MP (2560 x 1920 pixels), HD 720p (1280x720 pixels)|\\nCamera trước: |2 MP (1600 x 1200 pixels)|\\nBộ nhớ trong:|8 GB|\\nHỗ trợ SIM: Micro sim\\nĐàm thoại Có, 2 Sim 2 Sóng', 4600000, 0, 1, 1, 4),
(12, 'Asus MeMO Pad 7', 4, 3, 'Android 4.3', 'Dual - Core, 1.2 GHz', 1, 3000, 'Asus_MeMO_Pad_7.jpg', 'WSVGA, 7 inch', 'Camera sau: |2 MP (1600 x 1200 pixels), Quay phim chuẩn HD 720p (1280x720 pixels)|\\nCamera trước: |0.3 MP (VGA 640 x 480 pixels)|\\nBộ nhớ trong: |8 GB|\\n3G: Không 3G', 3790000, 0, 0, 0, 0),
(17, 'Acer Iconia B1-723', 3, 3, 'Android 5.1', 'Quad-core, 1.3 GHz', 1, 3380, 'Acer_Iconia_B1-723.jpg', 'TFT Color LCD, 7', 'Camera sau: |5 MP (2560 x 1920 pixels), 1080p@30fps|\\nCamera trước: |2 MP (1600 x 1200 pixels)|\\nBộ nhớ trong: |16 GB|\\nHỗ trợ SIM: 2 sim - Loại sim: micro', 2290000, 0, 0, 0, 9),
(18, 'Xperia C4 Dual', 5, 1, 'Android 5.0 (Lollipop)', 'MTK 6752 1.7 GHz', 2, 2600, 'Xperia_C4_Dual.jpg', 'Full HD, 5.5', 'Camera sau: |13 MP, Quay phim FullHD 1080p@30fps| \\nCamera trước:|5 MP|\\nBộ nhớ trong: |16 GB|\\nHỗ trợ thẻ tối đa: 128 GB\\nSố khe SIM:	2 SIM 2 sóng, Nano SIM', 6990000, 0, 1, 1, 4),
(19, 'Xperia Z5 Dual', 5, 1, 'Android 5.1 (Lollipop)', '8 nhân, Quad-core 1.5 GHz', 3, 2900, 'Xperia_Z5_Dual.jpg', 'IPS-LCD, 5.2', 'Camera sau: |23 MP, Quay phim 4K 2160p@30fps|\\nCamera trước:|5.1 MP|\\nBộ nhớ trong:|32 GB|\\n2 SIM 2 sóng, Nano SIM', 15990000, 1, 1, 1, 19),
(20, 'OPPO R7 Plus1', 6, 1, 'Android 5.1 (Lollipop)', '8 nhân, Quad-core 1.5GHz ', 3, 4100, 'OPPO_R7_Plus.jpg', 'AMOLED  6.0', 'Camera sau: |13 MP,Quay phim FullHD 1080p@30fps|\\nCamera trước:| 8 MP|\\nBộ nhớ trong:| 32 GB|\\n', 11450000, 26, 1, 1, 16),
(21, 'Iphone 6s', 1, 1, 'iOS 9', 'Apple A9, 2 nhân, 1.8 GHz', 2, 1715, '25882iphone_6s.png', 'Retina HD, 4.7"', 'Camera sau:| 12 MP, Quay phim 4K 2160p@30fps|\\nCamera trước:| 5 MP|\\nBộ nhớ trong:| 16 GB|\\nSố khe SIM: 1 Sim, Nano SIM', 18990000, 1, 0, 1, 17),
(22, 'OPPO Neo 7', 6, 1, 'Android 5.1 (Lollipop)', 'MTK 6582, 4x1.3 GHz', 1, 2420, '10315oppo_neo_7.png', 'qHD, 5.0', 'Camera sau: |8.0 MP, Quay phim FullHD 1080p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |16 GB|\\nHỗ trợ thẻ tối đa: 32 GB\\nSố khe SIM: 2 SIM 2 sóng, 1 Nano + 1 Micro', 3990000, 0, 1, 1, 5),
(23, 'DELL Venue 8', 8, 3, 'Android 4.4', 'Dual-Core 2.1GHz', 12, 4550, '22693dell_venue_8.png', '8.0 inch', 'Camera sau:| 5.0 MP|\\nCamera sau: |2.0 MP|\\nBộ nhớ trong:| 16gb|\\nHổ trợ đàm thoại: Micro Sim', 3990000, 0, 1, 0, 6),
(24, 'iPad Air 2 Cellular', 1, 3, 'iOS 8', '3 nhân, 1.5 GHz', 2, 7340, 'iPad_Air_2_Cellular.jpg', 'Retina,9.7', 'Camera sau: |8 MP, Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |1.2 MP|\\nBộ nhớ trong: |16 GB|', 17500000, 0, 0, 1, 11),
(25, 'iPad Pro Wifi', 1, 3, 'iOS 9', 'Dual - Core, 2.2GHz', 4, 4000, '4636ipad_wifi.png', 'LCD, 12.9 inch', 'Camera sau: |8 MP, Quay phim chuẩn 1080p@30fps|\\nCamera trước: |1.2 MP|\\nBộ nhớ trong: |32 GB|\\nKhông 3G', 19900000, 0, 1, 1, 2),
(26, 'Galaxy S6 Edge Plus', 7, 1, 'Android 5.1 (Lollipop)', 'Exynos 7420,4x1.5GHz', 4, 3000, 'Galaxy_S6_Edge_Plus.jpg', 'Quad HD, 5.7', 'Camera sau: |16 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|', 19990000, 0, 0, 1, 2),
(27, 'Galaxy Note 5', 7, 1, 'Android 5.1 (Lollipop)', 'Exynos 7420,4x1.5GHz', 3, 3000, 'Galaxy_Note_5.jpg', 'Quad HD, 5.7', 'Camera sau: |16 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|', 17950000, 0, 0, 1, 2),
(28, 'Galaxy Tab 3V', 7, 3, 'Android 4.4', 'Quad-core, 1.3 GHz', 1, 3600, 'Galaxy_Tab_3V.jpg', 'TFT, 7 inch', 'Camera sau: |2 MP (1600 x 1200 pixels), Quay phim chuẩn VGA (640x480 pixels)|\\nCamera trước:|2 MP (1600 x 1200 pixels)|\\nHổ trợ sim: NanoSim\\nBộ nhớ trong: |8 gb|', 3490000, 5, 1, 0, 7),
(29, 'Galaxy Tab S2', 7, 3, 'Android 5.0', '8 nhân, 1.3 GHz', 3, 4000, 'Galaxy_Tab_S2.jpg', 'AMOLED, 8 inch', 'Camera sau: |8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |2.1 MP (1920 x 1080 pixels)|\\nBộ nhớ trong: |32gb|\\nHỗ trợ SIM: Nano Sim\\nĐàm thoại: Có', 11990000, 0, 1, 0, 2),
(30, 'Lumia 950 XL', 2, 1, 'Windows 10', 'Snapdragon 4 nhân 1.5 GHz', 3, 3340, 'Lumia_950_XL.jpg', 'AMOLED 5.7', 'Camera sau: |20 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|\\nHỗ trợ thẻ tối đa: 200GB\\nSố khe SIM: 1 Sim, Nano SIM', 15990000, 0, 0, 0, 23),
(31, 'ASUS Fonepad 8', 4, 3, 'Android 4.4', 'Quad-core, 1.33GHz', 1, 4000, 'ASUS_Fonepad 8.jpg', 'LED, IPS, 8 inch', 'Camera sau: |4.9 MP (2560 x 1920 pixels), HD 720p (1280x720 pixels)|\\nCamera trước: |2 MP (1600 x 1200 pixels)|\\nBộ nhớ trong:|8 GB|\\nHỗ trợ SIM: Micro sim\\nĐàm thoại Có, 2 Sim 2 Sóng', 4600000, 0, 1, 1, 4),
(32, 'Asus MeMO Pad 7', 4, 3, 'Android 4.3', 'Dual - Core, 1.2 GHz', 1, 3000, 'Asus_MeMO_Pad_7.jpg', 'WSVGA, 7 inch', 'Camera sau: |2 MP (1600 x 1200 pixels), Quay phim chuẩn HD 720p (1280x720 pixels)|\\nCamera trước: |0.3 MP (VGA 640 x 480 pixels)|\\nBộ nhớ trong: |8 GB|\\n3G: Không 3G', 3790000, 0, 0, 0, 0),
(33, 'IPhone 5s', 1, 1, 'iOS 9', 'Apple A7, 2 nhân, 1.3 GHz', 1, 1560, 'IPhone_5s.jpg', 'DVGA, 4.0', 'Camera sau:| 8 MP, Quay phim FullHD 1080p@30fps|\\nCamera trước:| 1.2 MP|\\nBộ nhớ trong: |16 GB|', 9900000, 0, 1, 0, 14),
(34, 'Galaxy Tab S2', 7, 3, 'Android 5.0', '8 nhân, 1.3 GHz', 3, 4000, 'Galaxy_Tab_S2.jpg', 'AMOLED, 8 inch', 'Camera sau: |8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |2.1 MP (1920 x 1080 pixels)|\\nBộ nhớ trong: |32gb|\\nHỗ trợ SIM: Nano Sim\\nĐàm thoại: Có', 11990000, 0, 1, 0, 2),
(35, 'ASUS Fonepad 8', 4, 3, 'Android 4.4', 'Quad-core, 1.33GHz', 1, 4000, 'ASUS_Fonepad 8.jpg', 'LED, IPS, 8 inch', 'Camera sau: |4.9 MP (2560 x 1920 pixels), HD 720p (1280x720 pixels)|\\nCamera trước: |2 MP (1600 x 1200 pixels)|\\nBộ nhớ trong:|8 GB|\\nHỗ trợ SIM: Micro sim\\nĐàm thoại Có, 2 Sim 2 Sóng', 4600000, 0, 1, 1, 4),
(36, 'Lumia 950 XL', 2, 1, 'Windows 10', 'Snapdragon 4 nhân 1.5 GHz', 3, 3340, 'Lumia_950_XL.jpg', 'AMOLED 5.7', 'Camera sau: |20 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|\\nHỗ trợ thẻ tối đa: 200GB\\nSố khe SIM: 1 Sim, Nano SIM', 15990000, 0, 0, 0, 23),
(37, 'Galaxy Tab S2', 7, 3, 'Android 5.0', '8 nhân, 1.3 GHz', 3, 4000, 'Galaxy_Tab_S2.jpg', 'AMOLED, 8 inch', 'Camera sau: |8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |2.1 MP (1920 x 1080 pixels)|\\nBộ nhớ trong: |32gb|\\nHỗ trợ SIM: Nano Sim\\nĐàm thoại: Có', 11990000, 0, 1, 0, 2),
(38, 'ASUS Fonepad 8', 4, 3, 'Android 4.4', 'Quad-core, 1.33GHz', 1, 4000, 'ASUS_Fonepad 8.jpg', 'LED, IPS, 8 inch', 'Camera sau: |4.9 MP (2560 x 1920 pixels), HD 720p (1280x720 pixels)|\\nCamera trước: |2 MP (1600 x 1200 pixels)|\\nBộ nhớ trong:|8 GB|\\nHỗ trợ SIM: Micro sim\\nĐàm thoại Có, 2 Sim 2 Sóng', 4600000, 0, 1, 1, 4),
(39, 'Lumia 950 XL', 2, 1, 'Windows 10', 'Snapdragon 4 nhân 1.5 GHz', 3, 3340, 'Lumia_950_XL.jpg', 'AMOLED 5.7', 'Camera sau: |20 MP, Quay phim 4K 2160p@30fps|\\nCamera trước: |5 MP|\\nBộ nhớ trong: |32 GB|\\nHỗ trợ thẻ tối đa: 200GB\\nSố khe SIM: 1 Sim, Nano SIM', 15990000, 0, 0, 0, 23),
(40, 'Galaxy Tab S2', 7, 3, 'Android 5.0', '8 nhân, 1.3 GHz', 3, 4000, 'Galaxy_Tab_S2.jpg', 'AMOLED, 8 inch', 'Camera sau: |8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |2.1 MP (1920 x 1080 pixels)|\\nBộ nhớ trong: |32gb|\\nHỗ trợ SIM: Nano Sim\\nĐàm thoại: Có', 11990000, 0, 1, 0, 2),
(41, 'ASUS Fonepad 8', 4, 3, 'Android 4.4', 'Quad-core, 1.33GHz', 1, 4000, 'ASUS_Fonepad 8.jpg', 'LED, IPS, 8 inch', 'Camera sau: |4.9 MP (2560 x 1920 pixels), HD 720p (1280x720 pixels)|\\nCamera trước: |2 MP (1600 x 1200 pixels)|\\nBộ nhớ trong:|8 GB|\\nHỗ trợ SIM: Micro sim\\nĐàm thoại Có, 2 Sim 2 Sóng', 4600000, 0, 1, 1, 4),
(42, 'IPhone 5s', 1, 1, 'iOS 9', 'Apple A7, 2 nhân, 1.3 GHz', 1, 1560, 'IPhone_5s.jpg', 'DVGA, 4.0', 'Camera sau:| 8 MP, Quay phim FullHD 1080p@30fps|\\nCamera trước:| 1.2 MP|\\nBộ nhớ trong: |16 GB|', 9900000, 0, 1, 0, 14),
(43, 'iPad Air 2 Cellular', 1, 3, 'iOS 8', '3 nhân, 1.5 GHz', 2, 7340, 'iPad_Air_2_Cellular.jpg', 'Retina,9.7', 'Camera sau: |8 MP, Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |1.2 MP|\\nBộ nhớ trong: |16 GB|', 17500000, 0, 0, 1, 11),
(44, 'Iphone 6s', 1, 1, 'iOS 9', 'Apple A9, 2 nhân, 1.8 GHz', 2, 1715, '25882iphone_6s.png', 'Retina HD, 4.7"', 'Camera sau:| 12 MP, Quay phim 4K 2160p@30fps|\\nCamera trước:| 5 MP|\\nBộ nhớ trong:| 16 GB|\\nSố khe SIM: 1 Sim, Nano SIM', 18990000, 1, 0, 1, 17),
(45, 'DELL Venue 8', 8, 3, 'Android 4.4', 'Dual-Core 2.1GHz', 12, 4550, '22693dell_venue_8.png', '8.0 inch', 'Camera sau:| 5.0 MP|\\nCamera sau: |2.0 MP|\\nBộ nhớ trong:| 16gb|\\nHổ trợ đàm thoại: Micro Sim', 3990000, 0, 1, 0, 6),
(46, 'Galaxy Tab S2', 7, 3, 'Android 5.0', '8 nhân, 1.3 GHz', 3, 4000, 'Galaxy_Tab_S2.jpg', 'AMOLED, 8 inch', 'Camera sau: |8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |2.1 MP (1920 x 1080 pixels)|\\nBộ nhớ trong: |32gb|\\nHỗ trợ SIM: Nano Sim\\nĐàm thoại: Có', 11990000, 0, 1, 0, 2),
(47, 'Galaxy Tab 3V', 7, 3, 'Android 4.4', 'Quad-core, 1.3 GHz', 1, 3600, 'Galaxy_Tab_3V.jpg', 'TFT, 7 inch', 'Camera sau: |2 MP (1600 x 1200 pixels), Quay phim chuẩn VGA (640x480 pixels)|\\nCamera trước:|2 MP (1600 x 1200 pixels)|\\nHổ trợ sim: NanoSim\\nBộ nhớ trong: |8 gb|', 3490000, 5, 1, 0, 7),
(48, 'Lumia 540', 2, 1, 'Windows Phone 8.1', '4 nhân, 1.2 GHz', 1, 2200, 'Lumia_540.jpg', 'HD, 5.0', '2 SIM 2 sóng, Micro SIM\\nCamera sau: |8.0 MP, Quay phim 480p@30fps|\\nCamtruoc: |5 MP|\\nBộ nhớ trong: |8 GB|', 3490000, 0, 1, 0, 1),
(49, 'Galaxy Tab 3V', 7, 3, 'Android 4.4', 'Quad-core, 1.3 GHz', 1, 3600, 'Galaxy_Tab_3V.jpg', 'TFT, 7 inch', 'Camera sau: |2 MP (1600 x 1200 pixels), Quay phim chuẩn VGA (640x480 pixels)|\\nCamera trước:|2 MP (1600 x 1200 pixels)|\\nHổ trợ sim: NanoSim\\nBộ nhớ trong: |8 gb|', 3490000, 5, 1, 0, 7),
(50, 'Galaxy Tab S2', 7, 3, 'Android 5.0', '8 nhân, 1.3 GHz', 3, 4000, 'Galaxy_Tab_S2.jpg', 'AMOLED, 8 inch', 'Camera sau: |8 MP (3264x2448 pixels), Full HD 1080p (1920x1080 pixels)|\\nCamera trước: |2.1 MP (1920 x 1080 pixels)|\\nBộ nhớ trong: |32gb|\\nHỗ trợ SIM: Nano Sim\\nĐàm thoại: Có', 11990000, 0, 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE IF NOT EXISTS `user_online` (
  `session` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('n0ecm6qjff4h7si1f3e2118vj3', 1468241573);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaKH_2` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaNSX` (`MaNSX`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoai` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `MaNSX` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loaisanpham` (`MaLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
