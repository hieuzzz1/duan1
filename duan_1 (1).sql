-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2024 at 03:19 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `madh` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int DEFAULT NULL,
  `bill_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bill_diachi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bill_phone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bill_email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total` int DEFAULT NULL,
  `ngaydathang` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaygiaohang` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pttt` tinyint DEFAULT '0',
  `ghichu` text COLLATE utf8mb4_general_ci,
  `trangthai` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `madh`, `id_user`, `bill_name`, `bill_diachi`, `bill_phone`, `bill_email`, `total`, `ngaydathang`, `ngaygiaohang`, `pttt`, `ghichu`, `trangthai`) VALUES
(13, '#HTB44-61', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 1200000, '09/01/2023 11:28 PM', '07/12/2023 11:48 PM', 0, NULL, 3),
(14, '#HTB44-7', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 800000, '07/03/2023 11:53 PM', NULL, 0, NULL, 4),
(15, '#HTB44-40', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 3000000, '07/04/2023 11:54 PM', '07/12/2023 11:54 PM', 0, NULL, 4),
(16, '#HTB44-72', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 1600000, '24/02/2023 11:55 PM', '08/12/2023 12:16 AM', 0, NULL, 4),
(17, '#HTB44-71', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 1600000, '14/05/2023 11:55 PM', '07/12/2023 11:57 PM', 0, NULL, 4),
(18, '#HTB44-68', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 750000, '18/06/2023 11:57 PM', '08/12/2023 12:32 AM', 0, NULL, 3),
(19, '#HTB44-44', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 1600000, '08/07/2023 12:16 AM', '08/12/2023 12:31 AM', 0, NULL, 3),
(20, '#HTB44-52', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 800000, '08/08/2023 12:22 AM', '08/12/2023 01:55 AM', 1, NULL, 4),
(21, '#HTB44-97', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 800000, '08/09/2023 12:25 AM', '08/12/2023 12:28 AM', NULL, NULL, 4),
(22, '#HTB44-69', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 1600000, '08/10/2023 12:25 AM', '08/12/2023 12:32 AM', 0, NULL, 3),
(23, '#HTB44-90', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 1200000, '08/12/2023 12:33 AM', '08/12/2023 12:35 AM', 1, NULL, 3),
(24, '#HTB44-11', 44, 'Hiếu', 'Hà Nội', '02122121122', 'hieunguyentrung24042004@gmail.com', 1600000, '08/12/2023 12:36 AM', '08/12/2023 12:39 AM', 0, NULL, 3),
(25, '#HTB44-38', 44, 'Hiếu', 'Hà Nội', '099999999', 'hieunguyentrung24042004@gmail.com', 2250000, '08/12/2023 12:49 AM', '08/12/2023 12:50 AM', 0, NULL, 3),
(26, '#HTB43-61', 43, 'ADMIN', 'Trịnh Văn Bô - Hà Nội', '0345497282', 'Admin@gmail.com', 2250000, '08/12/2023 01:49 AM', '08/12/2023 02:18 AM', 0, NULL, 3),
(27, '#HTB43-77', 43, 'ADMIN', 'Trịnh Văn Bô - Hà Nội', '0345497282', 'Admin@gmail.com', 800000, '08/12/2023 02:07 AM', '08/12/2023 02:13 AM', 0, NULL, 3),
(28, '#HTB43-87', 43, 'ADMIN', 'Trịnh Văn Bô - Hà Nội', '0345497282', 'Admin@gmail.com', 1200000, '08/12/2023 02:31 AM', '08/12/2023 02:32 AM', 0, NULL, 3),
(29, '#HTB43-53', 43, 'ADMIN', 'Trịnh Văn Bô - Hà Nội', '0345497282', 'Admin@gmail.com', 2400000, '08/12/2023 02:39 AM', '08/12/2023 02:39 AM', 0, NULL, 3),
(30, '#HTB43-63', 43, 'ADMIN', 'Trịnh Văn Bô - Hà Nội', '0345497282', 'Admin@gmail.com', 4250000, '08/12/2023 02:41 AM', '08/12/2023 02:41 AM', 0, NULL, 3),
(31, '#HTB43-39', 43, 'ADMIN', 'Trịnh Văn Bô - Hà Nội', '0345497282', 'Admin@gmail.com', 4550000, '08/12/2023 02:42 AM', '08/12/2023 02:52 AM', 0, NULL, 3),
(32, '#HTB47-94', 47, 'thai', 'Ba Vì -Hà Nội', '0124785456', 'hieunguyentrung24042004@gmail.com', 10000000, '08/12/2023 02:58 AM', '08/12/2023 03:00 AM', 1, NULL, 3),
(33, '#HTB48-8', 48, 'Nguyễn Trung Hiếu', '', '', '', 1200000, '08/12/2023 03:22 AM', '08/12/2023 03:23 AM', 0, NULL, 4),
(34, '#HTB49-1', 49, 'Nguyễn Trung Hiếu', '', '', '', 0, '08/12/2023 03:28 AM', '08/12/2023 01:00 PM', 0, NULL, 2),
(35, '#HTB50-89', 50, 'Nguyễn Trung Hiếu', '', '', '', 0, '08/12/2023 03:28 AM', '08/12/2023 01:01 PM', 0, NULL, 1),
(36, '#HTB51-43', 51, 'hieunguyen', '', '', '', 1200000, '08/12/2023 03:28 AM', '08/12/2023 01:04 PM', 1, NULL, 1),
(42, '#HTB57-19', 57, '', '', '', '', 1600000, '08/12/2023 03:31 AM', '08/12/2023 01:15 PM', 1, NULL, 4),
(43, '#HTB44-77', 44, 'Hiếu', 'Hà Nội', '0345497282', 'hieunguyentrung24042004@gmail.com', 750000, '08/12/2023 03:32 AM', '08/12/2023 05:22 AM', 0, NULL, 3),
(44, '#HTB58-15', 58, 'thai111', '', '', '', 750000, '08/12/2023 03:34 AM', '08/12/2023 01:15 PM', 1, NULL, 4),
(45, '#HTB59-8', 59, 'thai111', '', '', '', 0, '08/12/2023 03:48 AM', '08/12/2023 05:24 AM', 1, NULL, 2),
(46, '#HTB60-83', 60, 'thai', '', '', '', 4400000, '08/12/2023 03:58 AM', '08/12/2023 03:58 AM', 1, NULL, 3),
(47, '#HTB61-71', 61, '', '', '', '', 450000, '08/12/2023 04:58 AM', '08/12/2023 01:14 PM', 1, NULL, 4),
(48, '#HTB71-71', 71, 'thai', 'a', 'a', 'aa@gmail.com', 640000, '08/12/2023 05:13 AM', '08/12/2023 01:14 PM', NULL, NULL, 2),
(49, '#HTB72-10', 72, 'OK', 'Trịnh Văn Bô', '0345284562', 'ookgef@gmail.com', 1490000, '08/12/2023 05:19 AM', '08/12/2023 01:09 PM', 0, 'Giao hàng nhanh', 2),
(50, '#HTB44-75', 44, 'Hiếu', 'Hà Nội', '0345497282', 'hieunguyentrung24042004@gmail.com', 640000, '08/12/2023 05:24 AM', '08/12/2023 05:26 AM', 0, 'Giao hàng vào thứ 7', 3),
(51, '#HTB44-28', 44, 'Hiếu', 'Hà Nội', '0345497282', 'hieunguyentrung24042004@gmail.com', 6400000, '08/12/2023 05:27 AM', '08/12/2023 05:27 AM', 1, 'OK', 3),
(52, '#HTB44-67', 44, 'Hiếu', 'Hà Nội', '0345497282', 'hieunguyentrung24042004@gmail.com', 12800000, '08/12/2023 05:29 AM', '08/12/2023 05:29 AM', 0, 'OK', 3),
(53, '#HTB73-2', 73, 'Nam', 'Trịnh Văn Bô - Hà Nội', '0321474551', 'Nam@gmail.com', 7340000, '08/12/2023 10:56 AM', '08/12/2023 10:59 AM', 1, 'Giao sáng', 3),
(54, '#HTB76-82', 76, 'Hiếu', 'Hà Nội', '214578551', 'hieu@gmail.com', 5690000, '08/12/2023 01:06 PM', '08/12/2023 01:14 PM', 0, 'Giao cuối ngày', 4),
(55, '#HTB76-88', 76, 'Hiếu', 'Hà Nội', '214578551', 'hieu@gmail.com', 8940000, '08/12/2023 01:10 PM', '08/12/2023 01:11 PM', 1, 'Ghi chú', 3),
(56, '#HTB76-21', 76, 'Hiếu', 'Hà Nội', '214578551', 'hieu@gmail.com', 2560000, '08/12/2023 01:12 PM', '08/12/2023 01:20 PM', 0, 'Ghi chú', 2),
(57, '#HTB78-88', 78, 'NguyenTrungHieu', 'Ba Vì - Hà Nội', '0954741235', 'Nguyenhieu@gmail.com', 650000, '08/12/2023 01:21 PM', '28/06/2024 01:12 AM', 1, 'Giao cuối tuần', 2);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `id_sp` int DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaybinhluan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phanhoi` mediumtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_user`, `id_sp`, `noidung`, `ngaybinhluan`, `phanhoi`) VALUES
(1, 10, 10, 'Sản phẩm tốt', '08/12/2023 10:52 AM', 'Cảm ơn bạn');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `id_pro` int DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `giasp` int DEFAULT NULL,
  `soluong` int DEFAULT NULL,
  `thanhtien` int DEFAULT NULL,
  `id_bill` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_pro`, `img`, `name`, `giasp`, `soluong`, `thanhtien`, `id_bill`) VALUES
(1, 15, '../upload/suaruamat4.png', 'Sửa rửa mặt', 600000, 4, 2400000, 1),
(3, 13, '../upload/kemchongnang2.webp', 'Kem chống nắng', 320000, 4, 1280000, 1),
(4, 11, 'nuoctaytrang3.png', 'Nước tẩy trang', 300000, 1, 300000, 1),
(5, 10, 'nuoctaytrang1.webp', 'Nước tẩy trang', 450000, 1, 450000, 1),
(6, 12, 'kemchongnang4.webp', 'Kem chống nắng', 900000, 1, 900000, 1),
(7, 4, 'nuoctaytrang2.png', 'Nước tẩy trang', 500000, 1, 500000, 1),
(9, 10, 'nuoctaytrang1.webp', 'Nước tẩy trang', 450000, 1, 450000, 2),
(10, 13, '../upload/kemchongnang2.webp', 'Kem chống nắng', 320000, 6, 1920000, 2),
(11, 10, 'nuoctaytrang1.webp', 'Nước tẩy trang', 450000, 1, 450000, 3),
(12, 9, 'nuoctaytrang4.png', 'Nước tẩy trang', 600000, 2, 1200000, 3),
(13, 4, 'nuoctaytrang2.png', 'Nước tẩy trang', 500000, 1, 500000, 3),
(14, 13, '../upload/kemchongnang2.webp', 'Kem chống nắng', 320000, 7, 2240000, 4),
(15, 12, '../upload/kemchongnang4.webp', 'Kem chống nắng', 900000, 5, 4500000, 5),
(16, 14, 'kemchongnang1.webp', 'Kem chống nắng', 940000, 1, 940000, 5),
(17, 15, 'suaruamat4.png', 'Sửa rửa mặt 56', 600000, 10, 600000, 5),
(18, 11, 'nuoctaytrang3.png', 'Nước tẩy trang', 300000, 1, 300000, 5),
(20, 15, '../upload/suaruamat4.png', 'Sửa rửa mặt', 600000, 4, 2400000, 6),
(21, 10, '../upload/nuoctaytrang1.webp', 'Nước tẩy trang', 450000, 4, 1800000, 6),
(22, 11, '../upload/nuoctaytrang3.png', 'Nước tẩy trang', 300000, 3, 900000, 6),
(24, 23, '../upload/nuoctaytrang4.png', 'Nước tẩy trang', 450000, 1, 450000, 8),
(25, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng', 940000, 2, 1880000, 9),
(26, 15, '../upload/suaruamat4.png', 'Sửa rửa mặt', 600000, 1, 600000, 10),
(27, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng', 940000, 2, 1880000, 10),
(28, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng', 940000, 1, 940000, 11),
(29, 12, '../upload/kemchongnang4.webp', 'Kem chống nắng 2', 900000, 10, 4500000, 12),
(30, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng 4', 940000, 2, 1880000, 13),
(31, 15, '../upload/suaruamat4.png', 'Sửa rửa mặt', 600000, 1, 600000, 14),
(32, 15, '../upload/suaruamat4.png', 'Sửa rửa mặt', 600000, 1, 600000, 16),
(33, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng 4', 940000, 1, 940000, 18),
(34, 13, '../upload/kemchongnang2.webp', 'Kem chống nắng', 320000, 1, 320000, 21),
(35, 15, '../upload/suaruamat4.png', 'Sửa rửa mặt', 600000, 1, 600000, 21),
(36, 10, '../upload/nuoctaytrang1.webp', 'Nước tẩy trang', 450000, 1, 450000, 22),
(37, 10, 'suaruamat3.webp', 'Gel Rửa Mặt Auragins ', 850000, 2, 1700000, 23),
(38, 13, '../upload/kemchongnang2.webp', 'Kem chống nắng', 320000, 2, 640000, 24),
(39, 12, '../upload/kemchongnang4.webp', 'Kem chống nắng 2', 900000, 1, 900000, 24),
(40, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng 4', 940000, 4, 3760000, 25),
(41, 4, 'nuoctaytrang2.png', 'Nước tẩy trang', 500000, 2, 1000000, 26),
(42, 10, 'nuoctaytrang1.webp', 'Nước tẩy trang', 450000, 2, 900000, 26),
(43, 13, 'kemchongnang2.webp', 'Kem chống nắng', 320000, 1, 320000, 26),
(44, 12, 'kemchongnang4.webp', 'Kem chống nắng 2', 900000, 1, 900000, 26),
(45, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng 4', 940000, 4, 3760000, 26),
(46, 10, '../upload/nuoctaytrang1.webp', 'Nước tẩy trang', 450000, 6, 2700000, 27),
(47, 14, '../upload/kemchongnang1.webp', 'Kem chống nắng 4', 940000, 4, 3760000, 28),
(48, 6, '../upload/kemchongnang2.webp', 'Kem Chống Nắng Cancer', 1100000, 5, 5500000, 1),
(49, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 3, 1200000, 2),
(50, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 10, 4000000, 3),
(51, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 8, 6000000, 3),
(52, 10, 'suaruamat3.webp', 'Gel Rửa Mặt Auragins ', 850000, 1, 850000, 4),
(53, 8, 'kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 2, 1500000, 4),
(54, 7, 'kemchongnang3.webp', 'Kem Chống Nắng Martiderm', 1000000, 1, 1000000, 4),
(55, 5, 'kemchongnang1.webp', 'Kem Chống Nắng 50 PA+', 150000, 1, 150000, 4),
(56, 6, 'kemchongnang2.webp', 'Kem Chống Nắng Cancer', 1100000, 1, 1100000, 4),
(57, 4, 'nuoctaytrang4.png', 'Dung Dịch Bioderma', 650000, 1, 650000, 4),
(58, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 5, 2000000, 4),
(59, 7, 'kemchongnang3.webp', 'Kem Chống Nắng Martiderm', 1000000, 2, 2000000, 5),
(60, 10, 'suaruamat3.webp', 'Gel Rửa Mặt Auragins ', 850000, 1, 850000, 5),
(61, 8, 'kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 2, 1500000, 5),
(62, 4, '../upload/nuoctaytrang4.png', 'Dung Dịch Bioderma', 650000, 5, 3250000, 5),
(63, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 7, 2800000, 6),
(64, 5, '../upload/kemchongnang1.webp', 'Kem Chống Nắng 50 PA+', 150000, 20, 3000000, 7),
(65, 5, '../upload/kemchongnang1.webp', 'Kem Chống Nắng 50 PA+', 150000, 3, 450000, 8),
(66, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 1, 400000, 9),
(67, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 5, 3750000, 10),
(68, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 3, 1200000, 11),
(69, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 12),
(70, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 3, 1200000, 13),
(71, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 2, 800000, 14),
(72, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 4, 3000000, 15),
(73, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 16),
(74, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 17),
(75, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 1, 750000, 18),
(76, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 19),
(77, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 2, 800000, 20),
(78, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 2, 800000, 21),
(79, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 22),
(80, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 3, 1200000, 23),
(81, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 24),
(82, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 3, 2250000, 25),
(83, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 3, 2250000, 26),
(84, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 2, 800000, 27),
(85, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 3, 1200000, 28),
(86, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 6, 2400000, 29),
(87, 10, '../upload/suaruamat3.webp', 'Gel Rửa Mặt Auragins ', 850000, 5, 4250000, 30),
(88, 4, '../upload/nuoctaytrang4.png', 'Dung Dịch Bioderma', 650000, 7, 4550000, 31),
(89, 7, '../upload/kemchongnang3.webp', 'Kem Chống Nắng Martiderm', 1000000, 10, 10000000, 32),
(90, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 3, 1200000, 33),
(91, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 3, 1200000, 36),
(92, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 4, 3000000, 39),
(93, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 42),
(94, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 1, 750000, 43),
(95, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 1, 750000, 44),
(96, 6, '../upload/kemchongnang2.webp', 'Kem Chống Nắng Cancer', 1100000, 4, 4400000, 46),
(97, 5, '../upload/kemchongnang1.webp', 'Kem Chống Nắng 50 PA+', 150000, 3, 450000, 47),
(98, 16, '../upload/suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 1, 640000, 48),
(99, 16, '../upload/suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 1, 640000, 49),
(100, 17, '../upload/kemchongnang4.webp', 'Kem chống nắng', 850000, 1, 850000, 49),
(101, 16, '../upload/suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 1, 640000, 50),
(102, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 16, 6400000, 51),
(103, 16, '../upload/suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 20, 12800000, 52),
(104, 10, '../upload/suaruamat3.webp', 'Gel Rửa Mặt Auragins ', 850000, 5, 4250000, 53),
(105, 17, 'kemchongnang4.webp', 'Kem chống nắng', 850000, 1, 850000, 53),
(106, 16, 'suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 1, 640000, 53),
(107, 9, '../upload/suaruamat1.png', 'Sữa Rửa Mặt Skin&Lab', 400000, 4, 1600000, 53),
(108, 8, '../upload/kemchongnang4.webp', 'Kem Chống Nắng Anessa ', 750000, 3, 2250000, 54),
(109, 17, 'kemchongnang4.webp', 'Kem chống nắng', 850000, 1, 850000, 54),
(110, 16, 'suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 1, 640000, 54),
(111, 13, '../upload/nuoctaytrang2.png', 'Nước Tẩy Trang Garnier', 650000, 3, 1950000, 54),
(112, 17, 'kemchongnang4.webp', 'Kem chống nắng', 850000, 1, 850000, 55),
(113, 16, 'suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 1, 640000, 55),
(114, 13, 'nuoctaytrang2.png', 'Nước Tẩy Trang Garnier', 650000, 1, 650000, 55),
(115, 10, '../upload/suaruamat3.webp', 'Gel Rửa Mặt Auragins ', 850000, 8, 6800000, 55),
(116, 16, '../upload/suaruamat3.png', 'Sữa Rửa Mặt 473ml', 640000, 4, 2560000, 56),
(117, 13, '../upload/nuoctaytrang2.png', 'Nước Tẩy Trang Garnier', 650000, 1, 650000, 57);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendm` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`) VALUES
(219, 'Nước tẩy trang'),
(220, 'Sữa rửa mặt'),
(227, 'Kem chống nắng');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `noidung1` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `noidung2` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `noidung3` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `name_post` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `gioithieu` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `noidung1`, `noidung2`, `noidung3`, `name_post`, `image`, `gioithieu`) VALUES
(1, 'Sản phẩm Mỹ Phẩm X là sự kết hợp hoàn hảo của công nghệ tiên tiến và thành phần tự nhiên, đặc biệt được thiết kế để mang lại làn da sáng mịn và khỏe mạnh. Với công thức độc đáo, sản phẩm không chỉ cung cấp dưỡng chất cần thiết để tái tạo làn da mà còn giúp cải thiện độ đàn hồi và đồng đều màu da. Điều này tạo nên một trải nghiệm làm đẹp toàn diện, giúp phục hồi và nuôi dưỡng làn da từ bên trong.', 'Khám phá lựa chọn hoàn hảo cho làn da của bạn với Mỹ Phẩm X - một sản phẩm không chỉ chăm sóc da mặt mà còn tối ưu hóa làn da sáng mịn. Công thức độc đáo của chúng tôi chứa đựng những thành phần tự nhiên được chiết xuất kỹ lưỡng, giúp giảm thiểu tình trạng mụn, nâng cao độ ẩm và giảm nếp nhăn. Với Mỹ Phẩm X, bạn sẽ có làn da trông tươi trẻ và rạng rỡ mỗi ngày.', 'Sự kết hợp hoàn hảo giữa khoa học và thiên nhiên đã tạo nên Mỹ Phẩm X - giải pháp toàn diện cho làn da sáng mịn. Với các thành phần chọn lọc, sản phẩm không chỉ mang lại hiệu quả ngay từ lần sử dụng đầu tiên mà còn giúp cải thiện tình trạng da theo thời gian. Đặc biệt, Mỹ Phẩm X không chứa các hóa chất gây hại, đảm bảo an toàn tuyệt đối cho làn da của bạn. Hãy trải nghiệm sự khác biệt với Mỹ Phẩm X ngay hôm nay!', 'Sản phẩm Mỹ Phẩm X hoàn hảo cho làn da sáng mịn', 'suaruamat1.png', 'Sản phẩm mới ra mắt của chúng tôi'),
(2, 'Khám phá bí mật của làn da trẻ trung suốt đêm với Mỹ Phẩm Y - một giải pháp toàn diện cho làn da bạn. Với công nghệ tiên tiến và thành phần chăm sóc da tinh tế, sản phẩm chúng tôi không chỉ giúp tái tạo tế bào da trong khi bạn ngủ, mà còn đảm bảo cung cấp độ ẩm sâu và dưỡng chất cần thiết. Kết quả là làn da bạn sẽ tỏa sáng và tràn đầy sức sống mỗi buổi sáng.', 'Mỹ Phẩm Y không chỉ là sản phẩm làm đẹp thông thường - đó là một trải nghiệm chăm sóc da toàn diện cho đêm dài. Công thức độc đáo của chúng tôi được thiết kế đặc biệt để hỗ trợ quá trình tái tạo tế bào da, giúp làn da khôi phục và trẻ trung hơn sau giấc ngủ. Đồng thời, khả năng làm dịu và giảm nếp nhăn của Mỹ Phẩm Y sẽ khiến bạn hoàn toàn phải mê mệt với làn da của mình.', 'Với Mỹ Phẩm Y, đêm không chỉ là thời gian để nghỉ ngơi mà còn là cơ hội để làn da bạn trở nên trẻ trung và đầy tinh tế. Sản phẩm không chỉ chăm sóc tận sâu bên trong làn da, mà còn tăng cường độ đàn hồi và giúp da trở nên mềm mại hơn. Hãy để Mỹ Phẩm Y là đối tác đáng tin cậy trong hành trình chăm sóc da của bạn và khám phá sức sống mới cho làn da mỗi buổi sáng!', 'Làn da trẻ trung suốt đêm với sản phẩm Mỹ Phẩm Y', 'kemchongnang4.webp', 'Sản phẩm Mỹ Phẩm A - Bí quyết cho làn da căng mịn từ bên trong');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `image`) VALUES
(1, 'Bài viết 1', 'Mô tả mô tả mô tả', NULL),
(2, 'Bài viết 1', 'Mô tả mô tả mô tả', NULL),
(4, 'Bài viết 3', 'Mô tả mô tả mô tả', NULL),
(5, 'Bài viết 4', 'Mô tả mô tả mô tả', NULL),
(6, 'Bài viết 5', 'Mô tả mô tả mô tả', NULL),
(7, 'Bài viết 6', 'Mô tả mô tả mô tả', NULL),
(8, 'Bài viết 7', 'Mô tả mô tả mô tả', NULL),
(9, 'Bài viết 8', 'Mô tả mô tả mô tả', NULL),
(10, 'Insert', 'aaa', NULL),
(11, 'Insert', 'aaa', NULL),
(12, 'Insert1', 'aaa', NULL),
(13, 'Insert2', 'aaa', NULL),
(14, 'Insert', 'aaa', NULL),
(15, 'Insert2', 'aaa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `giasale` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `iddm` int DEFAULT NULL,
  `id_dt` int DEFAULT NULL,
  `id_ct` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `giasale`, `img`, `iddm`, `id_dt`, `id_ct`) VALUES
(3, 'Nước Tẩy Trang SVR', 310000.00, '20%', 'nuoctaytrang3.png', 219, NULL, NULL),
(4, 'Dung Dịch Bioderma', 650000.00, '25%', 'nuoctaytrang4.png', 219, NULL, NULL),
(5, 'Kem Chống Nắng 50 PA+', 150000.00, '10%', 'kemchongnang1.webp', 227, NULL, NULL),
(6, 'Kem Chống Nắng Cancer', 1100000.00, '20%', 'kemchongnang2.webp', 227, NULL, NULL),
(7, 'Kem Chống Nắng Martiderm', 1000000.00, '30%', 'kemchongnang3.webp', 227, NULL, NULL),
(8, 'Kem Chống Nắng Anessa ', 750000.00, '20%', 'kemchongnang4.webp', 227, NULL, NULL),
(9, 'Sữa Rửa Mặt Skin&Lab', 400000.00, '18%', 'suaruamat1.png', 220, NULL, NULL),
(10, 'Gel Rửa Mặt Auragins ', 850000.00, '12%', 'suaruamat3.webp', 220, NULL, NULL),
(13, 'Nước Tẩy Trang Garnier', 650000.00, '12%', 'nuoctaytrang2.png', 219, NULL, NULL),
(16, 'Sữa Rửa Mặt 473ml', 640000.00, '30%', 'suaruamat3.png', 220, NULL, NULL),
(17, 'Kem chống nắng', 850000.00, '10%', 'kemchongnang4.webp', 227, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `ten`, `email`, `diachi`, `tel`, `role`) VALUES
(43, 'ADMIN', '123', '', 'Admin@gmail.com', 'Trịnh Văn Bô - Hà Nội', '0345497282', 1),
(44, 'Hiếu', '999', '', 'hieunguyentrung24042004@gmail.com', 'Hà Nội', '0345497282', 0),
(73, 'user825', 'pass123', 'Nam', 'Nam@gmail.com', 'Trịnh Văn Bô - Hà Nội', '0321474551', 0),
(76, 'Hiếu', '123', NULL, 'hieu@gmail.com', 'Hà Nội', '214578551', 0),
(78, 'user66722', 'pass123', 'NguyenTrungHieu', 'Nguyenhieu@gmail.com', 'Ba Vì - Hà Nội', '0954741235', 0);

-- --------------------------------------------------------

--
-- Table structure for table `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `giasp` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_pro`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
