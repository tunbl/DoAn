-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2020 lúc 04:56 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `miker2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `avatar`) VALUES
(1, 'None', NULL),
(2, 'Panasonic', 'panasonic-logo.png'),
(3, 'LG Electronics', 'lg-logo.png'),
(4, 'SONY', 'sony-logo.png'),
(5, 'Sam Sung', 'samsung-logo.png'),
(6, 'Asanzo', 'asanzo-logo.png'),
(7, 'Toshiba', 'toshiba-logo.png'),
(8, 'VSmart', 'vsmart-logo.png'),
(9, 'HP', 'hp-logo.png'),
(10, 'DELL', 'dell-logo.png'),
(11, 'Iphone', 'iphone-logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `qty` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `id_order`, `name`, `image`, `price`, `qty`, `created_at`, `updated_at`) VALUES
(3, 41, 51, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-10 03:07:13', '2020-05-10 03:07:13'),
(4, 41, 52, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-10 03:08:05', '2020-05-10 03:08:05'),
(5, 41, 53, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-10 03:08:45', '2020-05-10 03:08:45'),
(6, 41, 54, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-11 07:51:46', '2020-05-11 07:51:46'),
(7, 3, 54, 'OPPO A31', 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 4490, 1, '2020-05-11 07:51:46', '2020-05-11 07:51:46'),
(8, 41, 55, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-11 08:02:54', '2020-05-11 08:02:54'),
(9, 3, 55, 'OPPO A31', 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 4490, 1, '2020-05-11 08:02:54', '2020-05-11 08:02:54'),
(10, 41, 56, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-11 08:02:56', '2020-05-11 08:02:56'),
(11, 3, 56, 'OPPO A31', 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 4490, 1, '2020-05-11 08:02:56', '2020-05-11 08:02:56'),
(12, 41, 57, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-11 08:03:26', '2020-05-11 08:03:26'),
(13, 3, 57, 'OPPO A31', 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 4490, 1, '2020-05-11 08:03:26', '2020-05-11 08:03:26'),
(14, 41, 58, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-11 08:04:33', '2020-05-11 08:04:33'),
(15, 3, 58, 'OPPO A31', 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 4490, 1, '2020-05-11 08:04:33', '2020-05-11 08:04:33'),
(16, 41, 59, 'Điện thoại Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s-400x460-400x460.png', 600, 1, '2020-05-11 08:04:47', '2020-05-11 08:04:47'),
(17, 3, 59, 'OPPO A31', 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 4490, 1, '2020-05-11 08:04:47', '2020-05-11 08:04:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `id_chill` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `id_chill`, `name`, `slug`, `level`, `created_at`, `updated_at`) VALUES
(1, 0, 'SmartPhone', 'smartphone', 0, NULL, '2020-05-16 03:14:11'),
(2, 0, 'Laptop', 'Laptop', 0, NULL, '2020-05-08 03:18:22'),
(3, 0, 'Camera', 'camera', 0, '2020-05-08 03:18:42', '2020-05-08 03:18:42'),
(4, 0, 'Accessories', 'Accessories', 0, '2020-05-08 03:18:51', '2020-05-08 03:18:51'),
(5, 1, 'SamSung123', 'samsung123', 1, NULL, '2020-05-16 04:55:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` float NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `id_status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `id_user`, `name`, `address`, `phone`, `email`, `total`, `note`, `id_status`, `created_at`, `updated_at`) VALUES
(51, 1, 'Lê Văn Sĩ', 'dell can xin', '0918274113', 'lesi20061998@gmail.com', 726, 'trực tiếp ', 1, '2020-05-10 03:07:13', '2020-05-10 03:07:13'),
(52, 1, 'Lê Văn Sĩ', 'dell can xin', '0918274113', 'lesi20061998@gmail.com', 726, 'trực tiếp ', 1, '2020-05-10 03:08:05', '2020-05-10 03:08:05'),
(53, 1, ' Lê Văn Sĩ', 'dell co', '0918274113', 'lesi20061998@gmail.com', 726, 'trực tiếp', 2, '2020-05-10 03:08:45', '2020-05-10 19:20:44'),
(54, 1, 'LE SI', 'bình thuận', '19002019', 'lesi20061998@gmail.com', 6, 'Internet Banking', 3, '2020-05-11 07:51:46', '2020-05-31 19:13:55'),
(55, 1, 'LE SI', 'bình thuận', '19002019', 'lesi20061998@gmail.com', 6, 'Internet Banking', 1, '2020-05-11 08:02:54', '2020-05-11 08:02:54'),
(56, 1, 'LE SI', 'bình thuận', '19002019', 'lesi20061998@gmail.com', 6, 'Internet Banking', 1, '2020-05-11 08:02:56', '2020-05-11 08:02:56'),
(57, 1, 'LE SI', 'bình thuận', '19002019', 'lesi20061998@gmail.com', 6, 'Internet Banking', 1, '2020-05-11 08:03:26', '2020-05-11 08:03:26'),
(58, 1, 'LE SI', 'bình thuận', '19002019', 'lesi20061998@gmail.com', 6, 'Internet Banking', 1, '2020-05-11 08:04:33', '2020-05-11 08:04:33'),
(59, 1, 'LE SI', 'bình thuận', '19002019', 'lesi20061998@gmail.com', 6, 'Internet Banking', 1, '2020-05-11 08:04:47', '2020-05-11 08:04:47'),
(60, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 41680, 'Thanh toán khi nhận hàng', 1, '2020-05-31 08:56:59', '2020-05-31 08:56:59'),
(61, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 41680, 'Thanh toán khi nhận hàng', 1, '2020-05-31 08:59:38', '2020-05-31 08:59:38'),
(62, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 41680, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:06:59', '2020-05-31 09:06:59'),
(63, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 19990, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:07:43', '2020-05-31 09:07:43'),
(64, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 19990, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:10:45', '2020-05-31 09:10:45'),
(65, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 19990, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:11:07', '2020-05-31 09:11:07'),
(66, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 44380, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:14:19', '2020-05-31 09:14:19'),
(67, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 44380, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:14:50', '2020-05-31 09:14:50'),
(68, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 28580, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:17:44', '2020-05-31 09:17:44'),
(69, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 28580, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:18:00', '2020-05-31 09:18:00'),
(70, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 28580, 'Thanh toán khi nhận hàng', 1, '2020-05-31 09:18:18', '2020-05-31 09:18:18'),
(71, 0, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 30780, 'Thanh toán khi nhận hàng', 1, '2020-05-31 18:06:49', '2020-05-31 18:06:49'),
(72, 1, 'dat 123', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', '0356787892', 'cus@gmail.com', 40180, 'Thanh toán khi nhận hàng', 4, '2020-05-31 18:29:54', '2020-05-31 19:23:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `id_agency` int(10) NOT NULL,
  `id_status` int(1) NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_product` int(11) NOT NULL,
  `qty_product` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_order`, `id_product`, `id_agency`, `id_status`, `name_product`, `price_product`, `qty_product`, `created_at`, `updated_at`) VALUES
(1, 54, 38, 2, 1, 'Cap Lightning 1m', 300, 1, NULL, NULL),
(2, 54, 11, 2, 4, 'Laptop Asus', 500, 1, NULL, '2020-05-31 19:23:48'),
(3, 55, 11, 2, 1, 'Laptop Asus', 500, 1, NULL, NULL),
(6, 67, 19, 2, 1, 'Laptop HP Envy 13 aq1022TU i5 10210U/8GB/512GB/Win10 (8QN69PA)', 22690, 1, '2020-05-31 09:14:50', '2020-05-31 09:14:50'),
(7, 70, 14, 1, 1, 'Laptop Acer Swift 3 SF315 52 50T9 i5 8250U/8GB/256GB/Win10', 15290, 1, '2020-05-31 09:18:18', '2020-05-31 09:18:18'),
(8, 70, 11, 1, 1, 'Laptop Asus VivoBook A512FA i3 8145U/4GB/512GB/Win10 (EJ1868T)', 13290, 1, '2020-05-31 09:18:18', '2020-05-31 09:18:18'),
(9, 71, 12, 1, 1, 'Laptop HP Pavilion 14 ce3027TU i5 1035G1/8GB/16GB+256GB/Win10', 17490, 1, '2020-05-31 18:06:50', '2020-05-31 18:06:50'),
(10, 71, 11, 1, 1, 'Laptop Asus VivoBook A512FA i3 8145U/4GB/512GB/Win10 (EJ1868T)', 13290, 1, '2020-05-31 18:06:50', '2020-05-31 18:06:50'),
(11, 72, 19, 1, 1, 'Laptop HP Envy 13 aq1022TU i5 10210U/8GB/512GB/Win10 (8QN69PA)', 22690, 1, '2020-05-31 18:29:54', '2020-05-31 18:29:54'),
(12, 72, 12, 1, 1, 'Laptop HP Pavilion 14 ce3027TU i5 1035G1/8GB/16GB+256GB/Win10', 17490, 1, '2020-05-31 18:29:54', '2020-05-31 18:29:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_unit` float DEFAULT NULL,
  `price_promotion` float DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `id_catalog` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_brand` int(11) NOT NULL DEFAULT 1,
  `qty` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`, `price_unit`, `price_promotion`, `content`, `detail`, `new`, `id_catalog`, `id_user`, `id_brand`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'IPhone 11 64GB', 'iphone-11 ', 'iphone-11-pro-max-black-400x460.png,iphone-11-pro-max-black-400x460.png,iphone-11-pro-max-black-400x460.png,iphone-11-pro-max-black-400x460.png', 21990, 21690, 'Thông số kỹ thuật\r\nMàn hình:	IPS LCD, 6.1\", Liquid Retina\r\nHệ điều hành:	iOS 13\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ SIM:\r\n1 eSIM & 1 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	3110 mAh, có sạc nhanh', 'detail may k nhap cũng dc  c ái new mày cho tao 1 hoặc 0  cái id_parent là loai sp còn id chill thi cho gi cũng dc . id user cũng vậy \r\ncreate vs up thì cứ lick ', 1, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(3, 'OPPO A31', 'oppo-a31-4gb-128gb ', 'oppo-a31-4gb-128gb-trang-400x460-400x460.png', 4490, 4490, 'Thông số kỹ thuật\r\nMàn hình:	IPS LCD, 6.5\", HD+\r\nHệ điều hành:	ColorOS 6.1 (Android 9.0)\r\nCamera sau:	Chính 12 MP & Phụ 2 MP, 2 MP\r\nCamera trước:	8 MP\r\nCPU:	MediaTek Helio P35 8 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	4230 mAh', '1', 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(4, 'oppo-A91', 'oppo-a91 slug', 'oppo-a91-trang-400x460-1-400x460.png', 6990, 6490, '1', NULL, 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(5, 'Realme 6i    ', 'realme-6i ', 'realme-6i-trang-400x460-fix-400x460.png', 4490, 4490, '\r\nMàu sắc:  \r\nGiá bán: 4.490.000₫ 4.990.000₫\r\nNHẬN THÔNG TIN\r\nTHÔNG SỐ KỸ THUẬT\r\nMàn hình:	IPS LCD, 6.5\", HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước:	16 MP\r\nCPU:	MediaTek Helio G80 8 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	5000 mAh, có sạc nhanh', '1', 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(6, 'Samsung Galaxy A31', 'samsung-galaxy-a31 ', 'product_16066_1.png', 6490, 6490, 'Thông số kỹ thuật\r\nMàn hình:	Super AMOLED, 6.4\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 8 MP, 5 MP, 5 MP\r\nCamera trước:	20 MP\r\nCPU:	MediaTek MT6768 8 nhân (Helio P65)\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	5000 mAh, có sạc nhanh', '1', 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(7, 'Samsung Galaxy Note 10 Lite', 'samsung-galaxy-note-10-lite', 'samsung-galaxy-note-10-lite-chi-tiet-1-400x460.png', 13990, 12490, 'Thông số kỹ thuật\r\nMàn hình:	Super AMOLED, 6.7\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 12 MP & Phụ 12 MP, 12 MP\r\nCamera trước:	32 MP\r\nCPU:	Exynos 9810 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	4500 mAh, có sạc nhanh', '1', 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(8, 'samsung-galaxy-a11', 'samsung-galaxy-a11 ', 'samsung-galaxy-a11-400x460-1-400x460.png', 3690, 3390, 'Thông số kỹ thuật\r\nMàn hình:	PLS TFT LCD, 6.4\", HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 13 MP & Phụ 5 MP, 2 MP\r\nCamera trước:	8 MP\r\nCPU:	Snapdragon 450 8 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	4000 mAh, có sạc nhanh', '1', 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(9, 'Xiaomi Redmi Note 8', 'xiaomi-redmi-note-8-pro-6gb-128gb', 'xiaomi-redmi-note-8-white-400x460.png', 5990, 5990, 'Thông số kỹ thuật\r\nMàn hình:	IPS LCD, 6.53\", Full HD+\r\nHệ điều hành:	Android 9.0 (Pie)\r\nCamera sau:	Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước:	20 MP\r\nCPU:	Mediatek Helio G90T 8 nhân\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	4500 mAh, có sạc nhanh', '1', 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(10, 'Xiaomi Redmi Note 9S', 'xiaomi-redmi-note-9s slug', 'xiaomi-redmi-note-9-pro-max.png', 5990, 5990, 'Thông số kỹ thuật\r\nMàn hình:	IPS LCD, 6.67\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP\r\nCamera trước:	16 MP\r\nCPU:	Snapdragon 720G 8 nhân\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)\r\nDung lượng pin:	5020 mAh, có sạc nhanh', '1', 0, 1, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(11, 'Laptop Asus VivoBook A512FA i3 8145U/4GB/512GB/Win10 (EJ1868T)', 'asus-vivobook-a512fa-i3-ej1868t ', '637043097497589746_asus-vivobook-a512-bac-1.png', 13290, 13290, 'Thông số kỹ thuật\r\nCPU:	Intel Core i3 Coffee Lake, 8145U, 2.10 GHz\r\nRAM:	4 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	SSD 512GB, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	2 x USB 2.0, HDMI, USB 3.0, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa - nắp lưng bằng kim loại, PIN liền\r\nKích thước:	Dày 19.9 mm, 1.7 kg\r\nThời điểm ra mắt:	2019', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(12, 'Laptop HP Pavilion 14 ce3027TU i5 1035G1/8GB/16GB+256GB/Win10', 'hp-pavilion-14-ce3027tu-i5-8wj02pa ', 'hp-pavilion-14-ce3027tu-i5-1035g1-8gb-16gb-256gb-1-600x600.jpg', 17490, 17490, 'Thông số kỹ thuật\r\nCPU:	Intel Core i5 Ice Lake, 1035G1, 1.10 GHz\r\nRAM:	8 GB, DDR4 (1 khe), 2666 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Intel Optane 16GB (H10), Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	14 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối:	2 x USB 3.1, HDMI, LAN (RJ45), USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Nắp lưng và chiếu nghỉ tay bằng kim loại, PIN liền\r\nKích thước:	Dày 17.9 cm, 1.6 kg\r\nThời điểm ra mắt:	2019', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(13, 'Laptop Lenovo IdeaPad S340 14IIL i3 1005G1/8GB/512GB/Win10', 'lenovo-ideapad-s340-14iil-i3-1005g1-8gb-512gb-win1', 'lenovo-ideapad-s340-15iil-i3-1005g1-8gb-512gb-win1123-600x600.jpg', 13990, 13690, 'Thông số kỹ thuật\r\nCPU:	Intel Core i3 Ice Lake, 1005G1, 1.20 GHz\r\nRAM:	8 GB, DDR4 (On board 4GB +1 khe 4GB), 2666 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	14 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối:	2 x USB 3.1, HDMI, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa - nắp lưng bằng kim loại, PIN liền\r\nKích thước:	Dày 17.9 mm, 1.6 kg\r\nThời điểm ra mắt:	2019', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(14, 'Laptop Acer Swift 3 SF315 52 50T9 i5 8250U/8GB/256GB/Win10', 'acer-swift-sf315-52-50t9-i5-8250u-8gb-256gb-win10\r\n', 'acer-swift-sf315-52-50t9-i5-8250u-8gb-256gb-win10-19-600x600.jpg', 16990, 15290, 'Thông số kỹ thuật\r\nCPU:	Intel Core i5 Coffee Lake, 8250U, 1.60 GHz\r\nRAM:	8 GB, DDR4 (On board +1 khe), 2133 MHz\r\nỔ cứng:	SSD: 256 GB M.2 SATA3, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620\r\nCổng kết nối:	2 x USB 3.0, HDMI, USB 2.0, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 16.9 mm, 1.7 kg\r\nThời điểm ra mắt:	2018', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(15, 'Laptop Dell Vostro 3580 i5 8265U/4GB/1TB/2GB AMD520/Win10 (P75F010V80I)', 'dell-vostro-3580-i5-8265u-4gb-1tb-2gb-amd520-win10', 'dell-vostro-3580-i5-8265u-4gb-1tb-2gb-amd520-win10-15-600x600.jpg', 16690, 15690, 'Thông số kỹ thuật\r\nCPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	4 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, AMD Radeon 520, 2GB\r\nCổng kết nối:	2 x USB 3.1, HDMI, LAN (RJ45), USB 2.0, VGA (D-Sub)\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 20.65 mm, 2.28 kg\r\nThời điểm ra mắt:	2019', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(16, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', 'apple-macbook-air-mqd32sa-a-i5-5350u', 'apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg', 19990, 19990, 'Thông số kỹ thuật\r\nCPU:	Intel Core i5 Broadwell, 1.80 GHz\r\nRAM:	8 GB, DDR3L(On board), 1600 MHz\r\nỔ cứng:	SSD: 128 GB\r\nMàn hình:	13.3 inch, WXGA+(1440 x 900)\r\nCard màn hình:	Card đồ họa tích hợp, Intel HD Graphics 6000\r\nCổng kết nối:	MagSafe 2, 2 x USB 3.0, Thunderbolt 2\r\nHệ điều hành:	Mac OS\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 17 mm, 1.35 Kg\r\nThời điểm ra mắt:	2017', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(17, 'Laptop Macbook Pro Touch 16 inch 2019 i7 2.6GHz/16GB/512GB/4GB Radeon Pro 5300M (MVVJ2SA/A)\r\n\r\n', 'macbook-pro-16-2019', 'macbook-pro-16-201926-macbookprotouch16inch-1-600x600.jpg', 59990, 56990, 'Thông số kỹ thuật\r\nCPU:	Intel Core i7 Coffee Lake, 2.60 GHz\r\nRAM:	16 GB, DDR4 (1 khe), 2666 MHz\r\nỔ cứng:	SSD 512GB\r\nMàn hình:	16 inch, Retina (3072 x 1920)\r\nCard màn hình:	Card đồ họa rời, Radeon Pro 5300M, 4GB\r\nCổng kết nối:	4 x Thunderbolt 3 (USB-C)\r\nHệ điều hành:	Mac OS\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 16.2 mm, 2.0 kg\r\nThời điểm ra mắt:	2019', '1', 0, 2, 2, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(18, 'Laptop Asus ZenBook UX533FD i5 8265U/8GB/256GB/2GB GTX1050/Túi/Win10 (A9091T)', 'asus-ux533fd-i5-8265u-8gb-256gb-2gb-gtx1050-156f-c', 'asus-ux533fd-i5-8265u-8gb-256gb-2gb-gtx1050-156f-c-600x600.jpg', 25490, 23990, 'Thông số kỹ thuật\r\nCPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	8 GB, DDR4 (On board), 2400 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA GeForce GTX 1050, 2 GB\r\nCổng kết nối:	USB 3.1, HDMI, USB 3.0, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 17.9 mm, 1.6 kg\r\nThời điểm ra mắt:	2018', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(19, 'Laptop HP Envy 13 aq1022TU i5 10210U/8GB/512GB/Win10 (8QN69PA)', 'hp-envy-13-aq1022tu-i5-10210u-8gb-512gb-win10-8qn ', 'hp-envy-13-aq1022tu-i5-10210u-8gb-512gb-win10-8qn-600x600.jpg', 22690, 22690, 'Thông số kỹ thuật\r\nCPU:	Intel Core i5 Comet Lake, 10210U, 1.60 GHz\r\nRAM:	8 GB, DDR4 (On board), 2400 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe\r\nMàn hình:	13 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối:	2 x USB 3.1, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 14.7 mm, 1.17 kg\r\nThời điểm ra mắt:	2019', '1', 0, 2, 1, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(20, 'Laptop HP Pavilion 15 cs2120TX i5 8265U/8GB/1TB/2GB MX130/Win10 (8AG58PA)\r\n\r\n', 'hp-pavilion-15-cs2120tx-i5-8265u-8gb-1tb-2g-mx130', 'hp-pavilion-15-cs2120tx-8ag58pa-i5-8265u_b4d351a36a454d67bfd52af3c0c8eced_grande.jpg', 16990, 15990, 'Thông số kỹ thuật\r\nCPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\nRAM:	8 GB, DDR4 (2 khe), 2666 MHz\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa rời, NVIDIA Geforce MX130, 2GB\r\nCổng kết nối:	2 x USB 3.1, HDMI, LAN (RJ45), USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 17.9 mm, 1.83 kg\r\nThời điểm ra mắt:	2019', '1', 0, 2, 2, 0, 1, '2020-05-05 03:00:00', '2020-05-05 03:00:00'),
(31, 'Pin sạc dự phòng 15.000 mAh Xmobile LA Y615N', 'pin-sac-du-phong-15000mah-xmobile-la-y615n', 'pin-sac-du-phong-15000mah-xmobile-la-y615n-anh-dai-dien-400x400.jpg', 850, 595, 'Thông số kỹ thuật\r\nHiệu suất sạc:	65%\r\nDung lượng pin:	15.000 mAh\r\nThời gian sạc đầy pin:	15 - 16 giờ (dùng Adapter 1A)8 - 9 giờ (dùng Adapter 2A)\r\nNguồn vào:	Micro USB: 5V - 2A\r\nNguồn ra:	USB 1: 5V - 1AUSB 2: 5V - 2.1A\r\nLõi pin:	Li-ion LG/Panasonic\r\nCông nghệ/Tiện ích:	Đèn LED báo hiệu\r\nKích thước:	Dài 13.7 cm - Ngang 6.2 cm - Dày 2.1 cm\r\nTrọng lượng:	303.5g\r\nThương hiệu của:	Thế Giới Di Động\r\nSản xuất tại:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(32, 'Pin sạc dự phòng Polymer 10.000mAh Type C PD QC3.0 Mbest DS506-WB Gold\r\n', 'sac-du-phong-10000mah-type-c-qc30-mbest-ds506-wb ', 'pin-sac-khong-day-10000mah-type-c-pd-qc3-qe10007pq-xam-1-600x600.jpg', 5990, 420, 'Thông số kỹ thuật\r\nHiệu suất sạc:	65%\r\nDung lượng pin:	10.000 mAh\r\nThời gian sạc đầy pin:	10 - 11 giờ (dùng Adapter 1A)5 - 6 giờ (dùng Adapter 2A)\r\nNguồn vào:	Micro USB: 5V - 2AType C (PD): 5V - 3A, 9V - 2A, 12V - 1.5A\r\nNguồn ra:	USB: 5V - 3A, 9V - 2A, 12V - 1.5AType-C: 5V - 3A, 9V - 2A, 12V - 1.5A\r\nLõi pin:	Pin Polymer (Li-Po)\r\nCông nghệ/Tiện ích:	Quick Charge 3.0Đèn LED báo hiệuPower Delivery\r\nKích thước:	Dài 14.5 cm - Rộng 6.85 cm - Dày 1.35 cm\r\nTrọng lượng:	235g\r\nThương hiệu của:	Thế Giới Di Động\r\nSản xuất tại:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(33, 'Tai nghe Bluetooth Mozard Z702 Xanh\r\n', 'tai-nghe-bluetooth-mozard-z702-xanh', 'tai-nghe-bluetooth-mozard-z702-xanh-1-600x600-1-400x400.jpg', 5990, 5990, 'Thông số kỹ thuật\r\nTương thích:	AndroidiOS (iPhone)\r\nCổng sạc:	Micro USB\r\nThời gian sử dụng:	12 giờ\r\nThời gian sạc đầy:	3 giờ\r\nKết nối cùng lúc:	1 thiết bị\r\nKhoảng cách kết nối:	10m (Bluetooth 5.0)\r\nPhím điều khiển:	Mic thoạiNghe/nhận cuộc gọiPhát/dừng chơi nhạcChuyển bài hátTăng/giảm âm lượngBật/ Tắt Bluetooth\r\nTrọng lượng:	31g\r\nThương hiệu của:	Thế Giới Di Động\r\nSản xuất tại:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(34, 'Tai nghe Bluetooth Mozard S205A Xanh\r\n', 'tai-nghe-bluetooth-mozard-s205a-xanh ', 'tai-nghe-bluetooth-mozard-s205a-xanh-1-600x600-1-400x400.jpg', 5990, 5990, 'Thông số kỹ thuật\r\nTương thích:	AndroidWindowsiOS (iPhone)Windows Phone\r\nCổng sạc:	Micro USB\r\nThời gian sạc đầy:	2 giờ\r\nKết nối cùng lúc:	1 thiết bị\r\nKhoảng cách kết nối:	10 m\r\nPhím điều khiển:	Mic thoạiTăng/giảm âm lượngBật/ Tắt Bluetooth\r\nTrọng lượng:	100 g\r\nSản xuất tại:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(35, 'Pin sạc dự phòng Polymer 10.000 mAh Xmobile Atela 10 Nhôm Xám', 'sac-du-phong-polymer-10000mah-xmobile-atela-10 ', 'sac-du-phong-polymer-10000mah-xmobile-atela-10-add-600x600.jpg', 5990, 5990, 'Thông số kỹ thuật\r\nHiệu suất sạc:	65%\r\nDung lượng pin:	10.000 mAh\r\nThời gian sạc đầy pin:	10 - 11 giờ (dùng Adapter 1A)6 - 8 giờ (dùng Adapter 2A)\r\nNguồn vào:	Micro USB/Type-C: 5V - 2A, 9V - 2A, 12V - 1.5A\r\nNguồn ra:	USB: 5V - 3AType-C: 5V - 3A, 9V - 2A, 12V - 1.5A\r\nLõi pin:	Pin Polymer (Li-Po)\r\nCông nghệ/Tiện ích:	Đèn LED báo hiệu\r\nKích thước:	Dài 15.3 cm - Ngang 7.36 cm - Dày 1.35 cm\r\nTrọng lượng:	302 g\r\nThương hiệu của:	Thế Giới Di Động\r\nSản xuất tại:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(36, 'Loa Bluetooth Wetop A3 Đen\r\n\r\n', 'loa-bluetooth-wetop-a3-den', 'loa-bluetooth-wetop-a3-den-avatar-1-600x600.jpg', 990, 150, 'Thông số kỹ thuật\r\nLoại loa:	Loa bluetooth\r\nTương thích:	AndroidWindowsiOS (iPhone)\r\nTổng công suất:	10 W\r\nThời gian sử dụng:	Sạc khoảng 3 tiếngDùng khoảng 3 - 5 tiếng\r\nKết nối không dây:	Bluetooth\r\nKết nối khác:	Thẻ nhớ Micro SD\r\nTiện ích:	Có micro đàm thoại\r\nPhím điều khiển:	Nút nguồnTăng/giảm âm lượngChuyển bài hátPhát/dừng chơi nhạcNghe/nhận cuộc gọi\r\nThương hiệu của:	Thế Giới Di Động', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(37, 'Loa Bluetooth Fenda W19 Nâu\r\n', 'loa-bluetooth-fenda-w19-nau', 'loa-bluetooth-fenda-w19-nau-600x600-1-600x600.jpg', 2990, 5990, 'Thông số kỹ thuật\r\nLoại loa:	Loa bluetooth\r\nTương thích:	AndroidWindowsiOS (iPhone)\r\nTổng công suất:	12 W\r\nThời gian sử dụng:	Dùng khoảng 3 - 4 tiếngSạc khoảng 4 - 5 tiếng\r\nKết nối không dây:	Bluetooth\r\nKết nối khác:	Jack 3.5 mmUSB\r\nPhím điều khiển:	Nút nguồnTăng/giảm âm lượngPhát/dừng chơi nhạcChuyển chế độNghe/nhận cuộc gọi\r\nĐiều khiển bằng điện thoại:	Bằng ứng dụng Karaoke Connect\r\nThương hiệu của:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(38, 'Cáp Lightning 1m Xmobile LTL-01 Xanh rêu\r\n', 'cap-lightning-1m-xmobile-ltl-01-xanh-reu', 'pin-sac-khong-day-10000mah-type-c-pd-qc3-qe10007pq-xam-1-600x600.jpg', 7990, 5990, 'Thông số kỹ thuật\r\nChức năng:	SạcTruyền dữ liệu\r\nĐầu ra:	Lightning: 5V - 2.1A\r\nĐộ dài dây:	1 m\r\nThương hiệu của:	Thế Giới Di Động\r\nSản xuất tại:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(39, 'Tai nghe AirPods 2 Apple MV7N2\r\n', 'tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang', 'tai-nghe-bluetooth-airpods-2-apple-mv7n2-trang-avatar-1-600x600.jpg', 120, 150, 'Thông số kỹ thuật\r\nTương thích:	AndroidiOS (iPhone)\r\nCổng sạc:	Lightning\r\nThời gian sạc đầy:	15 phút\r\nKết nối cùng lúc:	1 thiết bị\r\nKhoảng cách kết nối:	10 m\r\nPhím điều khiển:	Mic thoạiNghe/nhận cuộc gọiPhát/dừng chơi nhạcChuyển bài hát\r\nTrọng lượng:	4 g\r\nThương hiệu của:	Mỹ\r\nSản xuất tại:	Việt Nam / Trung Quốc (tùy lô hàng)', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(40, 'Dây cáp Lightning 1 m e.VALU LTL-01\r\n', 'cap-lightning-1m-evalu-ltl-01', 'cap-lightning-1m-evalu-ltl-01-avatar-1-600x600-1-fix-400x400.jpg', 120, 0, 'Thông số kỹ thuật\r\nChức năng:	SạcTruyền dữ liệu\r\nĐầu ra:	Lightning: 5V - 2.1A\r\nĐộ dài dây:	1 m\r\nThương hiệu của:	Thế Giới Di Động\r\nSản xuất tại:	Trung Quốc', '1', 0, 4, 1, 0, 1, '2020-05-06 03:00:00', '2020-05-06 03:00:00'),
(41, 'Điện thoại Xiaomi Redmi Note 9S', 'dien-thoai-xiaomi-redmi-note-9s', 'banthan.jpg', 5990, 4990, '<p>dellasdasasdsad</p>', 'nothing', 0, 1, 2, 0, 1, '2020-05-08 03:21:47', '2020-05-21 06:20:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `image`) VALUES
(1, NULL, 'abc.jpg'),
(2, NULL, 'slider-2.jpg'),
(3, NULL, 'slider-3.jpg'),
(4, NULL, 'slider-4.jpg'),
(5, NULL, 'slider-5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Đang Chờ'),
(2, 'Đã tiếp nhận'),
(3, 'Đã xử Lý'),
(4, 'Đã gửi bên vận chuyển\r\n'),
(5, 'Đang Giao hàng'),
(6, 'Hoàn thành '),
(7, 'Đã Huỷ Đơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `provider`, `provider_id`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 0, 'dat 123', NULL, NULL, 'cus@gmail.com', NULL, '$2y$10$EmIWvPN3EUjQb/WATBHFC.f27cUs.zXSjg32jB2VWdiJOS7JlQXvu', NULL, '0356787892', '10 Hồ Văn Huê, Phú Nhuận, Gò Vấp', NULL, '2020-05-25 19:39:41'),
(2, 1, 'Si', NULL, NULL, 'agency@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '123123', 'asdssd', NULL, '2020-04-16 04:42:27'),
(3, 2, 'admin', NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '1231231231', 'asdsadasdasdsad', NULL, '2020-05-23 21:58:54'),
(4, 0, 'adadad', NULL, NULL, 'abc11@gmail.com', NULL, '123', NULL, '1231231231', '1231231', '2020-04-16 05:00:23', '2020-04-16 05:00:23'),
(6, 1, 'adadad123', NULL, NULL, 'abc112@gmail.com', NULL, '123', NULL, '1231231231', '1231231', '2020-04-16 05:00:54', '2020-04-16 05:00:54'),
(9, 0, 'Võ Hải', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '2020-05-19 06:28:16', '2020-05-19 06:28:16'),
(10, 0, 'Thien dia', NULL, NULL, 'abcabcabc@gmal.com', NULL, '12345', NULL, NULL, NULL, '2020-05-21 02:17:33', '2020-05-21 02:17:33'),
(11, 0, 'Thien dia 2', NULL, NULL, 'qwerty@gmail.com', NULL, '$2y$10$IWDTEz4VkHVFVHnFmIpN2ufILRfJSvVJE8ozmo4cpgfi16MUU./Dm', NULL, NULL, NULL, '2020-05-21 02:24:05', '2020-05-21 02:24:05'),
(13, 0, 'asdasdasd', NULL, NULL, 'asdasddas@gmail.com', NULL, '$2y$10$KSlzqlbQ1qpvrIbI08NQGuBVfIBayA9Gx6onrDBvfVuC4/p4oDSo2', NULL, NULL, NULL, '2020-05-21 02:28:41', '2020-05-21 02:28:41'),
(14, 0, 'abababab', NULL, NULL, 'abc12312@gmail.com', NULL, '$2y$10$6fhaErfo3vf2DeXWm.luPeC2tecVLAr9RQILqbRtwf3M7LFCs5hTi', NULL, NULL, NULL, '2020-05-21 02:35:50', '2020-05-21 02:35:50'),
(15, 0, '2222111122', NULL, NULL, 'asasddas@gmail.com', NULL, '$2y$10$WtakJqcS3MHvZcom/LT6OeHfs7ResmDBbmfSXP3ipYlcw5BlH.hIS', NULL, NULL, NULL, '2020-05-21 02:38:04', '2020-05-21 02:38:04'),
(16, 0, 'zing.vn', NULL, NULL, 'zzzzzzzzzzzzzz@gmail.com', NULL, '$2y$10$.ny9uEJa3J9rnX2OeWxV1.S6WqjJQxNqB9BBB1v5jBtWWxW3Dgfo6', NULL, NULL, NULL, '2020-05-21 02:39:29', '2020-05-21 02:39:29'),
(17, 0, 'Thien dia 3', NULL, NULL, 'dangky@gmail.com', NULL, '$2y$10$KCwY0yHgJgYQGnjPtsqv1euLqQVFHI3xLAC10rjAECQaCqw6muRm2', NULL, '0362077459', 'asdasd', '2020-05-21 02:44:07', '2020-05-21 02:44:07'),
(18, 0, 'adasdasd', NULL, NULL, 'asdsadzxczxczxczxcasdasdqwdasd@gmail.com', NULL, '$2y$10$Z9u3YtYo1lYU4MkL0S/b4e5CNucowoE7ujjhtpMJnj6DiojjvVqmi', NULL, '1231231231', 'ádasdasd', '2020-05-21 03:23:26', '2020-05-21 03:23:26'),
(19, 0, 'sadasdasd', NULL, NULL, 'abcasdasdsa@gmail.com', NULL, '$2y$10$DB.pGYvKy5CVz2F3UrEh9eZmVyhMbu6K0K9btpxhOQijrmkV8so0C', NULL, '1231231231', 'ádasdsad', '2020-05-21 03:25:02', '2020-05-21 03:25:02'),
(20, 0, 'ádasdas', NULL, NULL, 'asdasdas@gmail.com', NULL, '$2y$10$IapQ9flN6pZAtK6/BDzC/ejfqLAszQgSjG78fI6fBerN62kxHegDW', NULL, '1231231231', 'ádasd', '2020-05-21 03:27:30', '2020-05-21 03:27:30'),
(21, 0, 'ádasdsada', NULL, NULL, 'asdsadasd@gmail.com', NULL, '$2y$10$FtlGZEngWmYEAnVBi1MDnOgS1A7cvU7xHw.6te6lBUTxlmt562k6y', NULL, '1231231231', 'ádadsads', '2020-05-21 03:28:59', '2020-05-21 03:28:59'),
(22, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$/xEz71UvFtwUdfjyU6thbeZ986oKIdJcdsN5P.B2bQxVcVsn.TJQO', NULL, '1231231231', 'ádasd', '2020-05-21 03:29:46', '2020-05-21 03:29:46'),
(23, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$7207rS0Fu.IXHGVbvATffuYIlwH/aA6k.n125d1ei5qeQL.LE7bxm', NULL, '1231231231', 'ádasd', '2020-05-21 03:32:11', '2020-05-21 03:32:11'),
(24, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$BgMoAq8FYUDLUN1XIV1SnegKa8wBdUxzF1glUbp96OqYEwLUSki86', NULL, '1231231231', 'ádasd', '2020-05-21 03:32:13', '2020-05-21 03:32:13'),
(25, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$fSyXoSN5vQUIjz5.kGtqruPe7c.MHZ.W8nErnCbviuN5/KCqwNysO', NULL, '1231231231', 'ádasd', '2020-05-21 03:32:14', '2020-05-21 03:32:14'),
(26, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$v0zd4eXeVl1uFje7tX2J/O1Q5ZFyM57xxRbYdiP66uh6IzDWE.EB6', NULL, '1231231231', 'ádasd', '2020-05-21 03:32:51', '2020-05-21 03:32:51'),
(27, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$XX8wSjEANqKWgBglF/2RNOuaSXmb8zI5wxZTVoTshEN4bLT/QcC7i', NULL, '1231231231', 'ádasd', '2020-05-21 03:32:54', '2020-05-21 03:32:54'),
(28, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$UY1Bp0rg9pO/ucAxVWozTeKAWPzRoByv2gGjUDTvCd5Nk1iiQgu5.', NULL, '1231231231', 'ádasd', '2020-05-21 03:33:21', '2020-05-21 03:33:21'),
(29, 0, 'ádasdasd', NULL, NULL, 'abc@gmail.com', NULL, '$2y$10$d85pgTjhoYO5l47EDwppaefzqlqIIU1QwX1oHOWWsndsVrgHlT99q', NULL, '1231231231', 'ádasd', '2020-05-21 03:34:01', '2020-05-21 03:34:01'),
(30, 0, 'abcabc', NULL, NULL, 'abc123123123@gmail.com', NULL, '$2y$10$xD02wPVD1yn6BjR.BsD4lOx5CAs2w9fXS6TLH2HQPnMFVtB1M54uC', NULL, '1231231230', '12321312', '2020-05-21 03:38:57', '2020-05-21 03:38:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_product` (`id_product`),
  ADD KEY `fk_cart_order` (`id_order`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cataparent_catachill` (`id_chill`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_status` (`id_status`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`,`id_product`),
  ADD KEY `Fk_orderDetail_product` (`id_product`),
  ADD KEY `id_agency` (`id_agency`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_cataparent` (`id_catalog`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `Fk_orderDetail_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
