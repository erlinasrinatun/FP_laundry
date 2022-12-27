-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 10:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_msib`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `idjenis` int(11) NOT NULL,
  `jenis_laundry` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`idjenis`, `jenis_laundry`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Selimut', 11000, NULL, '2022-11-27 21:58:05'),
(2, 'Boneka Besar', 10000, NULL, '2022-12-11 06:03:50'),
(5, 'Paket 1', 7000, '2022-11-12 21:13:02', '2022-12-11 06:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idkaryawan` int(11) NOT NULL,
  `kode_karyawan` varchar(20) NOT NULL,
  `nama_karyawan` varchar(45) DEFAULT NULL,
  `no_tlp` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idkaryawan`, `kode_karyawan`, `nama_karyawan`, `no_tlp`, `alamat`, `gender`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'KR101', 'Nur Afika Firanti', '085432678101', 'Dahlia Raya II', 'L', 'foto-KR101.jpg', NULL, '2022-12-09 21:09:03'),
(2, 'KR102', 'Robert Downey', '082341567904', 'NYC', 'P', 'foto-KR102.jpg', NULL, '2022-12-11 06:04:47'),
(3, 'KR103', 'John Mayer', '082111223111', 'NYC', 'P', NULL, '2022-11-16 01:03:22', '2022-12-13 08:11:47'),
(4, 'KR104', 'Philip', '081222111333', 'US', 'L', 'foto-KR104.jpg', '2022-11-16 07:19:12', '2022-12-11 06:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nurnainishadir028@gmail.com', '$2y$10$vfuIKBmoFKGE5.jpYUtc1uheilsknBeaIL0GKkZuXRwdhujaGlZU6', '2022-12-09 23:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 18, 'token', '40ba49992b8a51a1154deb7a9d3bb31d064387de97fd86e1aeee7b713796e4b0', '[\"*\"]', '2022-12-15 17:47:03', NULL, '2022-12-13 21:43:25', '2022-12-15 17:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `berat` int(11) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_ambil` date DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status` enum('Proses','Selesai') NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `nama_customer`, `jenis_id`, `berat`, `tgl_awal`, `tgl_ambil`, `total_bayar`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(17, 'erlin', 2, 2, '2022-12-27', '2022-12-28', 20000, 'Selesai', 4, '2022-12-27 01:30:31', NULL),
(18, 'Diana', 2, 3, '2022-12-27', NULL, 30000, 'Proses', 20, '2022-12-27 01:42:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','karyawan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'karyawan',
  `isactive` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `isactive`, `phone`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nurnaini', 'nurnainishadir028@gmail.com', NULL, '$2y$10$McWJ7lJWQPsZz6XGuSdkge90JKn8QUKZxjdgEZy8i6yeqGhQc1wwm', 'karyawan', 1, NULL, 'foto-Nurnaini.jpg', NULL, '2022-12-07 21:55:15', '2022-12-14 23:25:15'),
(2, 'ABCDEF', 'abdecf@gmail.com', NULL, '$2y$10$mpA5oKCsbiaVWqsh4hE9buF6eD/rNd8HJDMfDRwtzxKiL0DQF4/VG', 'karyawan', 1, '', '', NULL, '2022-12-12 23:05:34', '2022-11-28 03:21:38'),
(3, 'Admin', 'administrator@gmail.com', NULL, '$2y$10$1iKddQ8R4UNPvXxSpycCiudKxnvfXLqrvxOzwqJ6GpkOSwEapacdK', 'admin', 1, '082188785082', 'foto-Admin.jpg', NULL, '2022-12-11 01:06:46', '2022-11-28 04:26:50'),
(4, 'Tsana', 'tsana@gmail.com', NULL, '$2y$10$b9UozQeljwMIBnCsY702d.UR61JGeeaDJEDWo/5EcWvsmZPU5yt6S', 'karyawan', 1, '', NULL, NULL, '2022-12-14 02:08:19', '2022-11-28 07:48:13'),
(8, 'admin', 'admin@gmail.com', NULL, '$2y$10$TiX0UCNkdo/9PpBaRIs0x.fWzb9o5NfxymTig4/aTZEZJ6a/tOaIy', 'admin', 1, '', '', NULL, '2022-12-10 20:02:48', '2022-11-30 06:06:15'),
(14, 'Nur Afika Firanti', 'afikafrt@gmail.com', NULL, '$2y$10$ZCw1I.ErdpWgoO6bfwgDuu/0e.Ch6k.b4YomPq1otBAfn/kP8UjPy', 'admin', 1, '', '', NULL, '2022-12-11 06:01:47', '2022-12-03 19:32:12'),
(18, 'Aini', 'ainiii@gmail.com', NULL, '$2y$10$NFD03M5NktCk7Bn8PQN8auiQ2OOn/zuL1TDiIS6CUQ0coTMHL8EQS', 'karyawan', 1, '', NULL, NULL, '2022-12-13 21:41:30', '2022-12-13 21:41:30'),
(20, 'erlinann', 'erlinann@gmail.com', NULL, '$2y$10$kAl0t5oqF7mZRDZctgILgOfy.KtfB0rc2s6gKF0Di2/inNNAXj6au', 'karyawan', 1, NULL, NULL, NULL, '2022-12-27 01:41:10', '2022-12-27 01:41:10');

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
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idkaryawan`),
  ADD UNIQUE KEY `kode_karyawan` (`kode_karyawan`);

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
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `fk_transaksi_jenis1_idx` (`jenis_id`),
  ADD KEY `fk_transaksi_users1_idx` (`users_id`);

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
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `idjenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idkaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_jenis1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`idjenis`),
  ADD CONSTRAINT `fk_transaksi_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
