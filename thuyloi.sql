-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuyloi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kenh_dongs`
--

CREATE TABLE `kenh_dongs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `HTL` varchar(255) DEFAULT NULL,
  `HHL_17_50` varchar(255) DEFAULT NULL,
  `a1` varchar(255) DEFAULT NULL,
  `a2` varchar(255) DEFAULT NULL,
  `a3` varchar(255) DEFAULT NULL,
  `HTL_17_32` varchar(255) DEFAULT NULL,
  `HTL_16_20` varchar(255) DEFAULT NULL,
  `HTL_16_07` varchar(255) DEFAULT NULL,
  `HHL_15_90` varchar(255) DEFAULT NULL,
  `HTL_15_69` varchar(255) DEFAULT NULL,
  `HHL_15_49` varchar(255) DEFAULT NULL,
  `HTL_15_19` varchar(255) DEFAULT NULL,
  `HHL_15_00` varchar(255) DEFAULT NULL,
  `HTL_14_85` varchar(255) DEFAULT NULL,
  `HHL_14_40` varchar(255) DEFAULT NULL,
  `HTL_3_82` varchar(255) DEFAULT NULL,
  `HHL_13_62` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenh_dongs`
--

INSERT INTO `kenh_dongs` (`id`, `day`, `HTL`, `HHL_17_50`, `a1`, `a2`, `a3`, `HTL_17_32`, `HTL_16_20`, `HTL_16_07`, `HHL_15_90`, `HTL_15_69`, `HHL_15_49`, `HTL_15_19`, `HHL_15_00`, `HTL_14_85`, `HHL_14_40`, `HTL_3_82`, `HHL_13_62`, `created_at`, `updated_at`) VALUES
(5, 'Ngày 1', '10,05', '10,08', '45', '24', '22', '11', '23', '334', '445', '433', '223', '112', '333', '222', '222', '333', '22', '2024-03-24 23:45:38', '2024-05-01 01:06:52'),
(9, 'Ngày 2', '10', '20', '10', '2', '4', '4', '2', '6', '5', '2', '7', '7.9', '7.9', '1.2', '1.2', '2.1', '3.9', '2024-03-25 02:53:55', '2024-05-01 01:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `kenh_duc_hoas`
--

CREATE TABLE `kenh_duc_hoas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `HTL_14_08` varchar(255) DEFAULT NULL,
  `HHL_13_72` varchar(255) DEFAULT NULL,
  `HTL_13_54` varchar(255) DEFAULT NULL,
  `HHL_13_04` varchar(255) DEFAULT NULL,
  `HTL_12_85` varchar(255) DEFAULT NULL,
  `HHL_12_35` varchar(255) DEFAULT NULL,
  `HTL_9_24` varchar(255) DEFAULT NULL,
  `HHL_8_89` varchar(255) DEFAULT NULL,
  `HTL_7_50` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenh_duc_hoas`
--

INSERT INTO `kenh_duc_hoas` (`id`, `day`, `HTL_14_08`, `HHL_13_72`, `HTL_13_54`, `HHL_13_04`, `HTL_12_85`, `HHL_12_35`, `HTL_9_24`, `HHL_8_89`, `HTL_7_50`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Ngày 1', '3', '5', '5', '5', '4', '3', '4', '3', '4', '2', '2024-05-01 01:17:40', '2024-05-01 01:17:40'),
(2, 'Ngày 2', '2', '2', '1', '2', '3', '3', '3', '2', '1', '3', '2024-05-01 01:18:01', '2024-05-01 01:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `kenh_phuoc_hoas`
--

CREATE TABLE `kenh_phuoc_hoas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `zho` varchar(255) DEFAULT NULL,
  `who106_m3` varchar(255) DEFAULT NULL,
  `Q_den_m3` varchar(255) DEFAULT NULL,
  `W_den_106_m3` varchar(255) DEFAULT NULL,
  `HHL_42_27` varchar(255) DEFAULT NULL,
  `A_1` varchar(255) DEFAULT NULL,
  `A_2` varchar(255) DEFAULT NULL,
  `A_3` varchar(255) DEFAULT NULL,
  `Q_cong_m3` varchar(255) DEFAULT NULL,
  `W_cong_106_m3` varchar(255) DEFAULT NULL,
  `Q_tran_m3` varchar(255) DEFAULT NULL,
  `W_tran_106_m3` varchar(255) DEFAULT NULL,
  `QTMV_m3` varchar(255) DEFAULT NULL,
  `WTMV_106_m3` varchar(255) DEFAULT NULL,
  `QMT_m3` varchar(255) DEFAULT NULL,
  `WMT_106_m3` varchar(255) DEFAULT NULL,
  `QĐCĐ_m3` varchar(255) DEFAULT NULL,
  `WĐCĐ_106_m3` varchar(255) DEFAULT NULL,
  `HTL_41_82` varchar(255) DEFAULT NULL,
  `HHL_41_76` varchar(255) DEFAULT NULL,
  `HTL_40_64` varchar(255) DEFAULT NULL,
  `HHL_40_64` varchar(255) DEFAULT NULL,
  `HTL_39_75` varchar(255) DEFAULT NULL,
  `HHL_39_07` varchar(255) DEFAULT NULL,
  `HTL_38_55` varchar(255) DEFAULT NULL,
  `HHL_29_48` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenh_phuoc_hoas`
--

INSERT INTO `kenh_phuoc_hoas` (`id`, `day`, `zho`, `who106_m3`, `Q_den_m3`, `W_den_106_m3`, `HHL_42_27`, `A_1`, `A_2`, `A_3`, `Q_cong_m3`, `W_cong_106_m3`, `Q_tran_m3`, `W_tran_106_m3`, `QTMV_m3`, `WTMV_106_m3`, `QMT_m3`, `WMT_106_m3`, `QĐCĐ_m3`, `WĐCĐ_106_m3`, `HTL_41_82`, `HHL_41_76`, `HTL_40_64`, `HHL_40_64`, `HTL_39_75`, `HHL_39_07`, `HTL_38_55`, `HHL_29_48`, `created_at`, `updated_at`) VALUES
(1, 'Ngày 1', '2', '2.2', '2.6', '6.5', '54', '5', '5', '5', '4.3', '3.5', '4.3', '5.89', '9.8', '9.9', '7', '6', '5', '4', '4', '5', '5', '4', '6', '7', '4', '4', '2024-04-30 20:04:19', '2024-05-01 01:16:13'),
(2, 'Ngày 2', '23', '32', '34', '4', '4', '2', '3', '4', '1', '3', '3', '2', '4', '4', '3', '213', '2.1', '2', '3', '3.4', '43', '3', '2', '1', '3', '37', '2024-05-01 01:17:06', '2024-05-01 01:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `kenh_tan_hungs`
--

CREATE TABLE `kenh_tan_hungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `thuong_luu` varchar(255) DEFAULT NULL,
  `ha_luu` varchar(255) DEFAULT NULL,
  `THL` varchar(255) DEFAULT NULL,
  `A_1` varchar(255) DEFAULT NULL,
  `A_2` varchar(255) DEFAULT NULL,
  `A_3` varchar(255) DEFAULT NULL,
  `Q_m3` varchar(255) DEFAULT NULL,
  `khoi_luong_m3` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenh_tan_hungs`
--

INSERT INTO `kenh_tan_hungs` (`id`, `day`, `thuong_luu`, `ha_luu`, `THL`, `A_1`, `A_2`, `A_3`, `Q_m3`, `khoi_luong_m3`, `note`, `created_at`, `updated_at`) VALUES
(2, 'Ngày 1', '6.54', '5.4', '7.6', '6.5', '6.5', '5.9', '1.2', '4.7', '6.0', '2024-03-27 02:56:54', '2024-05-01 01:04:54'),
(3, 'Ngày 2', '7.8', '1.2', '5.6', '5.43', '6.78', '2.32', '1.6', '1.76', '1.09', '2024-04-26 05:34:23', '2024-05-01 01:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `kenh_tays`
--

CREATE TABLE `kenh_tays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `HTL` varchar(255) DEFAULT NULL,
  `HTL_16_77` varchar(255) DEFAULT NULL,
  `m_a1` varchar(255) DEFAULT NULL,
  `m_a2` varchar(255) DEFAULT NULL,
  `m_a3` varchar(255) DEFAULT NULL,
  `HTL_15_99` varchar(255) DEFAULT NULL,
  `HTL_15_49` varchar(255) DEFAULT NULL,
  `CDTK1_a1` varchar(255) DEFAULT NULL,
  `CDTK1_a2` varchar(255) DEFAULT NULL,
  `CDTK1_a3` varchar(255) DEFAULT NULL,
  `Q_m3` varchar(255) DEFAULT NULL,
  `HTL_15_75` varchar(255) DEFAULT NULL,
  `HHL_15_55` varchar(255) DEFAULT NULL,
  `HTL_14_96` varchar(255) DEFAULT NULL,
  `HHL_14_95` varchar(255) DEFAULT NULL,
  `HTL_14_71` varchar(255) DEFAULT NULL,
  `HHL_14_46` varchar(255) DEFAULT NULL,
  `HTL_14_05` varchar(255) DEFAULT NULL,
  `HHL_14_04` varchar(255) DEFAULT NULL,
  `HTL_13_47` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kenh_tays`
--

INSERT INTO `kenh_tays` (`id`, `day`, `HTL`, `HTL_16_77`, `m_a1`, `m_a2`, `m_a3`, `HTL_15_99`, `HTL_15_49`, `CDTK1_a1`, `CDTK1_a2`, `CDTK1_a3`, `Q_m3`, `HTL_15_75`, `HHL_15_55`, `HTL_14_96`, `HHL_14_95`, `HTL_14_71`, `HHL_14_46`, `HTL_14_05`, `HHL_14_04`, `HTL_13_47`, `created_at`, `updated_at`) VALUES
(1, 'Ngày 1', '12', '2.4', '4.55', '3.22', '4.32', '5.43', '65.4', '4.21', '2.90', '2.8', '3.1', '3.21', '3.55', '5.78', '8.9', '2.1', '2.43', '3.333', '2.1', '2.98', '2024-03-27 07:07:07', '2024-05-01 01:12:44'),
(2, 'Ngày 2', '1.2', '6.76', '7.65', '7.89', '9.87', '7.65', NULL, '8.76', '7.86', '7.86', '7', '54', '6', '34', '5', '6', '5', '4', '5', '6', '2024-03-27 07:09:37', '2024-05-01 01:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `mau_dieu_tiets`
--

CREATE TABLE `mau_dieu_tiets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `zho_N_TRUOC` varchar(255) DEFAULT NULL,
  `zho_N_NAY` varchar(255) DEFAULT NULL,
  `who_106_m3` varchar(255) DEFAULT NULL,
  `Q_den_m3` varchar(255) DEFAULT NULL,
  `W_den_106_m3` varchar(255) DEFAULT NULL,
  `QPH_m3` varchar(255) DEFAULT NULL,
  `WPH_106_m3` varchar(255) DEFAULT NULL,
  `Q_tran_m3` varchar(255) DEFAULT NULL,
  `W_tran_106_m3` varchar(255) DEFAULT NULL,
  `Q_cong1_m3` varchar(255) DEFAULT NULL,
  `W_cong1_106_m3` varchar(255) DEFAULT NULL,
  `Q_cong2_m3` varchar(255) DEFAULT NULL,
  `W_cong2_106_m3` varchar(255) DEFAULT NULL,
  `Q_cong3_m3` varchar(255) DEFAULT NULL,
  `W_cong3_106_m3` varchar(255) DEFAULT NULL,
  `Q_ton_that_m3` varchar(255) DEFAULT NULL,
  `W_ton_that_106_m3` varchar(255) DEFAULT NULL,
  `Q_tong_nuoc_di_m3` varchar(255) DEFAULT NULL,
  `W_tong_nuoc_di_106_m3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mau_dieu_tiets`
--

INSERT INTO `mau_dieu_tiets` (`id`, `day`, `zho_N_TRUOC`, `zho_N_NAY`, `who_106_m3`, `Q_den_m3`, `W_den_106_m3`, `QPH_m3`, `WPH_106_m3`, `Q_tran_m3`, `W_tran_106_m3`, `Q_cong1_m3`, `W_cong1_106_m3`, `Q_cong2_m3`, `W_cong2_106_m3`, `Q_cong3_m3`, `W_cong3_106_m3`, `Q_ton_that_m3`, `W_ton_that_106_m3`, `Q_tong_nuoc_di_m3`, `W_tong_nuoc_di_106_m3`, `created_at`, `updated_at`) VALUES
(1, 'Ngày 1', '34', '3', '3', '3', '4', '2', '4', '2', '3', '3', '2', '1', '3', '5', '64', '6', '4', '5', '4', '2024-05-01 01:19:08', '2024-05-01 01:19:08'),
(2, 'Ngày 2', '4', '33', '34', '4', '4', '4', '3', '2', '4', '4', '6', '6', '54', '3', '54', '4', '2', '4', '2', '2024-05-01 01:19:40', '2024-05-01 01:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `mau_nhap_sos`
--

CREATE TABLE `mau_nhap_sos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `hour` varchar(255) DEFAULT NULL,
  `zho_DT` varchar(255) DEFAULT NULL,
  `Q_den_ho_DT` varchar(255) DEFAULT NULL,
  `tong_Q_tran_m3` varchar(255) DEFAULT NULL,
  `A_1_tran` varchar(255) DEFAULT NULL,
  `A_2_tran` varchar(255) DEFAULT NULL,
  `A_3_tran` varchar(255) DEFAULT NULL,
  `A_4_tran` varchar(255) DEFAULT NULL,
  `A_5_tran` varchar(255) DEFAULT NULL,
  `A_6_tran` varchar(255) DEFAULT NULL,
  `HHL_cong1` varchar(255) DEFAULT NULL,
  `A_1_cong1` varchar(255) DEFAULT NULL,
  `A_2_cong1` varchar(255) DEFAULT NULL,
  `A_3_cong1` varchar(255) DEFAULT NULL,
  `QCS1_m3` varchar(255) DEFAULT NULL,
  `HHL_cong2` varchar(255) DEFAULT NULL,
  `A_1_cong2` varchar(255) DEFAULT NULL,
  `A_2_cong2` varchar(255) DEFAULT NULL,
  `A_3_cong2` varchar(255) DEFAULT NULL,
  `QCS2_m3` varchar(255) DEFAULT NULL,
  `HHL_cong3` varchar(255) DEFAULT NULL,
  `A_1_cong3` varchar(255) DEFAULT NULL,
  `QCS3_m3` varchar(255) DEFAULT NULL,
  `zho_PH` varchar(255) DEFAULT NULL,
  `QPH_DT_m3` varchar(255) DEFAULT NULL,
  `QMT_m3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mau_nhap_sos`
--

INSERT INTO `mau_nhap_sos` (`id`, `day`, `hour`, `zho_DT`, `Q_den_ho_DT`, `tong_Q_tran_m3`, `A_1_tran`, `A_2_tran`, `A_3_tran`, `A_4_tran`, `A_5_tran`, `A_6_tran`, `HHL_cong1`, `A_1_cong1`, `A_2_cong1`, `A_3_cong1`, `QCS1_m3`, `HHL_cong2`, `A_1_cong2`, `A_2_cong2`, `A_3_cong2`, `QCS2_m3`, `HHL_cong3`, `A_1_cong3`, `QCS3_m3`, `zho_PH`, `QPH_DT_m3`, `QMT_m3`, `created_at`, `updated_at`) VALUES
(1, 'Ngày 1', '4:00', '3', '4', '3', '3', '4', '2', '1', '7', '765', '67', '76', '7', '7', '65', '5', '7', '65', '67', '76', '76', '7', '7', '5', '76', '5', '2024-05-01 01:20:46', '2024-05-01 01:20:46'),
(2, 'Ngày 2', '6:00', '43', '3', '2', '3', '43', '2', '4', '4', '3', '2', '4', '43', '3', '2', '4', '2', '4', '3', '3', '3', '4', '54', '43', '43', '33', '2024-05-01 01:21:46', '2024-05-01 01:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2024_03_20_124551_create_kenhdongs_table', 1),
(10, '2024_03_20_131109_create_kenh_dongs_table', 2),
(12, '2024_03_27_065609_create_kenh_tan_hungs_table', 3),
(13, '2024_03_27_131135_create_kenh_tays_table', 4),
(14, '2024_04_28_122326_create_kenh_phuoc_hoas_table', 5),
(15, '2024_04_30_145625_create_kenh_duc_hoas_table', 5),
(16, '2024_04_30_145825_create_mau_dieu_tiets_table', 5),
(17, '2024_04_30_145856_create_mau_nhap_sos_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sơn', 'son@gmail.com', NULL, '$2y$10$L45zoB6ZhcqeBrQ5NVfLoe8zpxhg5q7T8RmmS237tXgkzhYWK9jy2', NULL, '2024-03-27 05:57:52', '2024-03-27 05:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kenh_dongs`
--
ALTER TABLE `kenh_dongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenh_duc_hoas`
--
ALTER TABLE `kenh_duc_hoas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenh_phuoc_hoas`
--
ALTER TABLE `kenh_phuoc_hoas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenh_tan_hungs`
--
ALTER TABLE `kenh_tan_hungs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenh_tays`
--
ALTER TABLE `kenh_tays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mau_dieu_tiets`
--
ALTER TABLE `mau_dieu_tiets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mau_nhap_sos`
--
ALTER TABLE `mau_nhap_sos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kenh_dongs`
--
ALTER TABLE `kenh_dongs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kenh_duc_hoas`
--
ALTER TABLE `kenh_duc_hoas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kenh_phuoc_hoas`
--
ALTER TABLE `kenh_phuoc_hoas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kenh_tan_hungs`
--
ALTER TABLE `kenh_tan_hungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kenh_tays`
--
ALTER TABLE `kenh_tays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mau_dieu_tiets`
--
ALTER TABLE `mau_dieu_tiets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mau_nhap_sos`
--
ALTER TABLE `mau_nhap_sos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
