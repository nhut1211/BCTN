-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2022 lúc 02:08 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlphongtro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_05_113131_create_tbl_login_user_table', 1),
(6, '2021_10_05_115746_create_tbl_login_user_table', 2),
(7, '2021_10_22_132244_create_tbl_phong_table', 3),
(8, '2021_10_25_132134_create_tbl_khachtro_table', 4),
(9, '2021_10_27_074200_create_tbl_loaiphong_table', 5),
(10, '2021_11_08_073956_create_tbl_admin_table', 6),
(11, '2022_03_18_134008_create_tbl_dichvu_table', 7),
(12, '2022_03_25_135639_create_khuvuc_table', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `admin_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_taikhoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `admin_fullname`, `admin_taikhoan`, `admin_matkhau`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Quốc Nhựt', 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dichvu`
--

CREATE TABLE `tbl_dichvu` (
  `id_dichvu` int(10) UNSIGNED NOT NULL,
  `ten_dichvu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dichvu`
--

INSERT INTO `tbl_dichvu` (`id_dichvu`, `ten_dichvu`, `gia`, `trang_thai`, `mo_ta`, `created_at`, `updated_at`) VALUES
(1, 'Nước', '6.000đ', '1', '1 khối = 6.000đ', NULL, NULL),
(2, 'Điện', '3.000đ', '0', '1kg điện = 3.000đ', NULL, NULL),
(3, 'Rác', '10.000đ', '0', '1 tháng = 10.000đ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hopdong`
--

CREATE TABLE `tbl_hopdong` (
  `id_hopdong` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `nam_sinh` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_hopdong`
--

INSERT INTO `tbl_hopdong` (`id_hopdong`, `ho_ten`, `nam_sinh`, `dia_chi`, `so_dien_thoai`, `e_mail`, `user_id`) VALUES
(2, 'Nguyễn Ngọc Cẩm Tú', '2000', 'Tân Uyên, Bình Dương', '0258258147', 'tumap@gmail.com', 2),
(3, 'Nguyễn Quốc Nhựt', '2000', 'Bến Cát, Bình Dương', '0947420100', 'nguyenquocnhut@gmail.com', 35),
(4, 'Nguyễn Quốc Nhựt', '2000', 'Bến Cát, Bình Dương', '0947420100', 'nguyenquocnhut1211@gmail.com', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachtro`
--

CREATE TABLE `tbl_khachtro` (
  `id_khachtro` int(10) UNSIGNED NOT NULL,
  `so_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_dem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khachtro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_cmnd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `que_quan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luu_tru` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachtro`
--

INSERT INTO `tbl_khachtro` (`id_khachtro`, `so_phong`, `ho_dem`, `ten_khachtro`, `so_cmnd`, `so_phone`, `que_quan`, `ho_khau`, `luu_tru`, `created_at`, `updated_at`) VALUES
(3, '2', 'Lưu Bá', 'Đức', '123456987', '0159487623', 'Bình Dương', 'Bàu Bàng, Bình Dương', 1, NULL, NULL),
(4, '3', 'Nguyễn Trọng', 'Hiệp', '258146355', '0123456987', 'Bình Dương', 'Long Nguyên, Bến Cát, Bình Dương', 1, NULL, NULL),
(5, '2', 'Nguyễn Quốc', 'Nhựt', '12664455', '0947420100', 'Bình Dương', 'Bàu Bàng, Bình Dương', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuvuc`
--

CREATE TABLE `tbl_khuvuc` (
  `id_khuvuc` int(10) UNSIGNED NOT NULL,
  `ten_khu_vuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuvuc`
--

INSERT INTO `tbl_khuvuc` (`id_khuvuc`, `ten_khu_vuc`, `dia_chi`, `created_at`, `updated_at`) VALUES
(1, 'A1', 'GGGG', NULL, NULL),
(2, 'A2', 'FFFF', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaiphong`
--

CREATE TABLE `tbl_loaiphong` (
  `id_loaiphong` int(10) UNSIGNED NOT NULL,
  `stt` int(11) NOT NULL,
  `loai_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaiphong`
--

INSERT INTO `tbl_loaiphong` (`id_loaiphong`, `stt`, `loai_phong`, `mo_ta`, `gia_phong`, `created_at`, `updated_at`) VALUES
(3, 1, 'Phòng gia đình', '- Phòng dành cho gia đình 2 người lớn và 2 trẻ nhỏ dưới 15 tuổi\r\n- Phòng dành cho gia đình 3 người lớn', '1.000.000', NULL, NULL),
(4, 2, 'Phòng Đơn', 'Phòng danh cho 1 người ở', '500.000', NULL, NULL),
(5, 3, 'Phòng Đôi', 'Phòng dành cho 2 người ở', '600.000', NULL, NULL),
(8, 4, 'Vip', 'phòng đành cho mở tiệc', '1.200.000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loginuser`
--

CREATE TABLE `tbl_loginuser` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loginuser`
--

INSERT INTO `tbl_loginuser` (`user_id`, `user_fullname`, `user_password`, `user_email`, `user_phone`, `created_at`, `updated_at`) VALUES
(1, 'Trương Minh Quốc', 'quocdam123', 'quocdam2@gmail.com', '0000000000', NULL, NULL),
(2, 'Nguyễn Ngọc Cẩm Tú', 'tumap123', 'nguyenngoccamtu123@gmail.com', '0258147369', NULL, NULL),
(19, 'Lưu Bá Đức', 'duck123', 'duck123@gmail.com', '0909090901', NULL, NULL),
(31, 'Phạm Ngọc Yến Nhi', 'abcd', 'nhicute@gmail.com', '00000011111', NULL, NULL),
(34, 'Trần Văn Dương', 'duong1', 'duongtv@gmail.com', '0909090901', NULL, NULL),
(35, 'Nguyễn Quốc Nhựt', 'nhut1211', 'nguyenquocnhut@gmail.com', '0947420100', NULL, NULL),
(36, 'Nguyễn Quốc Nhựt', 'nhút23', 'nguyenquocnhut1211@gmail.com', '0947420100', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phong`
--

CREATE TABLE `tbl_phong` (
  `id_phong` int(10) UNSIGNED NOT NULL,
  `so_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khu_vuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luu_tru` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phong`
--

INSERT INTO `tbl_phong` (`id_phong`, `so_phong`, `loai_phong`, `khu_vuc`, `trang_thai`, `luu_tru`, `created_at`, `updated_at`) VALUES
(15, '2', 'Phòng Đơn', 'A1', '0', 1, NULL, NULL),
(16, '1', 'Phòng gia đình', 'A1', '0', 1, NULL, NULL),
(18, '4', 'Vip', 'A1', '0', 1, NULL, NULL),
(20, '3', 'Vip', 'A2', '0', 1, NULL, NULL),
(21, '5', 'Vip', 'A2', '0', 1, NULL, NULL),
(22, '6', 'Phòng Đơn', 'A2', '0', 0, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  ADD PRIMARY KEY (`id_dichvu`);

--
-- Chỉ mục cho bảng `tbl_hopdong`
--
ALTER TABLE `tbl_hopdong`
  ADD PRIMARY KEY (`id_hopdong`);

--
-- Chỉ mục cho bảng `tbl_khachtro`
--
ALTER TABLE `tbl_khachtro`
  ADD PRIMARY KEY (`id_khachtro`);

--
-- Chỉ mục cho bảng `tbl_khuvuc`
--
ALTER TABLE `tbl_khuvuc`
  ADD PRIMARY KEY (`id_khuvuc`);

--
-- Chỉ mục cho bảng `tbl_loaiphong`
--
ALTER TABLE `tbl_loaiphong`
  ADD PRIMARY KEY (`id_loaiphong`);

--
-- Chỉ mục cho bảng `tbl_loginuser`
--
ALTER TABLE `tbl_loginuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  ADD PRIMARY KEY (`id_phong`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  MODIFY `id_dichvu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_hopdong`
--
ALTER TABLE `tbl_hopdong`
  MODIFY `id_hopdong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_khachtro`
--
ALTER TABLE `tbl_khachtro`
  MODIFY `id_khachtro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_khuvuc`
--
ALTER TABLE `tbl_khuvuc`
  MODIFY `id_khuvuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_loaiphong`
--
ALTER TABLE `tbl_loaiphong`
  MODIFY `id_loaiphong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_loginuser`
--
ALTER TABLE `tbl_loginuser`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  MODIFY `id_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
