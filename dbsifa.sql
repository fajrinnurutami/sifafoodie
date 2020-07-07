-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 03:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `norek` varchar(30) DEFAULT NULL,
  `pemilik` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `nama`, `norek`, `pemilik`) VALUES
(1, 'Bank Transfer BCA', '8608023425', 'PT. Sifafoodie'),
(2, 'Bank Transfer BNI', '0454754326', 'PT. Sifafoodie'),
(3, 'Bank Transfer Mandiri', '11100045789', 'PT. Sifafoodie');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `idkatcat` int(11) NOT NULL,
  `idsupplier` int(11) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `ingredient` varchar(300) DEFAULT NULL,
  `kal` int(11) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `nama`, `harga`, `idkatcat`, `idsupplier`, `deskripsi`, `ingredient`, `kal`, `foto`) VALUES
(1, 'Paket Ayam Bakar Limo', 25000, 1, 3, 'Ayam Bakar Limo, Tempe Bacem, Lalapan+Sambal, Nasi Putih/Merah, Buah Segar', 'daging ayam, jeruk limo, tempe, lalapan, sambal, nasi putih/merah, buah', 692, 'Paket Ayam Bakar Limo.jpeg'),
(2, 'Paket Ayam Balado', 25000, 1, 3, 'Ayam Balado, Sayur Lodeh, Nasi Putih/Merah, Buah Segar', 'daging ayam, wortel, labu siam, kacang panjang, terong, putren, tempe, nasi putih/merah, buah segar', 592, 'Paket Ayam Balado.jpeg'),
(3, 'Paket Nasi Lengko', 30000, 1, 3, 'Nasi Lengko, Empal gepuk, Buah Segar', 'nasi putih, tempe, tahu, tomat, tauge, timun, kacang tanah, daging sapi, buah segar', 855, ''),
(5, 'Paket Garang Asem Ayam', 25000, 1, 3, 'Garang Asem Ayam, Tumis Tempe Buncis, Kuah Kaldu, Nasi putih/Merah, Buah Segar', 'daging ayam, tempe, buncis, nasi putih/merah, buah segar', 689, 'Paket Garang Asem Ayam.jpeg'),
(6, 'Paket Pepes Ikan Kemangi', 25000, 1, 3, 'dhdhs', 'ikan dori, daun kemangi, tahu kuning, kacang panjang, jagung, labu siam, kacang tanah, buah segar', 699, 'Paket Pepes Ikan Kemangi.jpeg'),
(7, 'Paket Rendang', 30000, 1, 3, 'Rendang, Sayur Bumbu Kuning, Nasi Putih/Merah, Buah Segar', 'daging sapi, santan, kacang panjang, wortel, labu siam, kol, nasi putih/merah, buah segar', 644, 'Paket Rendang.jpeg'),
(8, 'Paket Ayam Kungpao', 25000, 2, 3, 'Ayam Kungpao, Capcay, Kuah Kaldu, Nasi Putih/Merah, Buah Segar', 'daging ayam, kacang mete, paprika hijau, saus tiram, minyak wijen, wortel, jagung putren, kembang kol, jamur kuping, caisim, kol putih, buncis, kapri, sawi putih, nasi putih/merah, buah segar', 724, 'Paket Ayam Kungpao.jpeg'),
(9, 'Paket Ayam Szechuan', 25000, 2, 3, 'Ayam Szechuan, Sapo Tahu, Kuah Kaldu, Nasi Putih/Merah, Buah Segar', 'daging ayam, tahu putih, nasi putih/merah, buah segar', 625, 'Paket Ayam Szechuan.jpeg'),
(10, 'Paket Fish Teriyaki', 25000, 2, 3, 'Fish Teriyaki, Miso Soup, Yasai Itame, Nasi Putih/Merah, Fresh Fruits', 'ikan dori, bawang bombay, saus teriyaki, tahu putih, miso, nasi putih/merah, buah segar', 696, 'Paket Fish Teriyaki.jpeg'),
(11, 'Paket Mongolian Beef', 30000, 2, 3, 'Mongolian Beef, Green Bean with Sesame Dressing, Kuah Kaldu, Nasi Putih/Merah, Buah Segar', 'daging sapi, minyak canola, saus wijen, buncis, nasi putih/merah, buah segar', 697, 'Paket Mongolian Beef.jpeg'),
(12, 'Paket Nasi Ayam Hainan', 25000, 2, 3, 'Nasi Ayam Hainam, Pokcoy Garlic, Kuah Kaldu, Buah Segar', 'nasi putih, daging ayam, pokcoy, bawang putih, saus tiram, buah segar', 724, 'Paket Nasi Ayam Hainan.jpeg'),
(13, 'Paket Sapi Saus Hoisin', 25000, 1, 3, 'Sapi Saus Hoisin, Cah Pokcoy, Kuah Kaldu, Nasi Putih/Merah, Buah Segar', 'daging sapi, bawang bombay, paprika merah, paprika hijau, saus hoisin, pokcoy, nasi putih/merah, buah segar', 768, 'Paket Sapi Saus Hoisin.jpeg'),
(14, 'Paket Beef Stew', 30000, 5, 3, 'Beef Stew with Vegetable, Corn Chowder, Baked Potato, Fresh Fruits', 'daging sapi, tomat, bay leaf, parsley, jagung manis, peterselly, kentang, margarin, buah segar', 786, 'Paket Beef Stew.jpeg'),
(15, 'Paket Grilled Chicken Mushroom', 25000, 5, 3, 'Grilled Chicken Mushroom Sauce, Coleslaw, Garlic Potato, Fresh Fruits', 'daging ayam organik, jamur merang, buah segar, wortel, kol, bawang bombay, kentang, bawang putih, buah segar', 618, 'Paket Grilled Chicken Mushroom.jpeg'),
(16, 'Paket Grilled Shrimp', 35000, 5, 3, 'Grilled Shrimp Lemon, Caesar Salad, Pumpkin Soup, Fresh Fruit', 'udang, saus lemon, daging ayam, daun lettuce, roti tawar, keju, labu, susu, buah segar', 595, 'Paket Grilled Shrimp.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formcatering`
--

CREATE TABLE `formcatering` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `idcatering` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `idwaktu` int(11) NOT NULL,
  `idbank` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `note` varchar(100) DEFAULT NULL,
  `status_email` enum('terkirim','belum') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'belum',
  `status_pay` enum('lunas','belum') DEFAULT 'belum',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formcatering`
--

INSERT INTO `formcatering` (`id`, `nama`, `hp`, `email`, `idcatering`, `jumlah`, `tgl_kirim`, `idwaktu`, `idbank`, `alamat`, `note`, `status_email`, `status_pay`, `created_at`) VALUES
(18, 'Abdul Malik', '089645939753', 'abdul@gmail.com', 15, 14, '2020-05-24', 10, 1, 'Jl. Merpati No. 17, Jakarta Barat', NULL, 'terkirim', 'lunas', NULL),
(20, 'Budi Kurniawan', '089645939753', 'budi@gmail.com', 14, 15, '2020-05-31', 6, 1, 'Jl. Pegangsangan Timur No. 56 Jakarta', NULL, 'terkirim', 'lunas', NULL),
(23, 'Ade Wijaya', '0812123456789', 'ade@gmail', 3, 10, '2020-05-17', 10, 1, 'Jln. Cendana RT 05/25, Kedoya Jakarta Barat', 'dibuat tidak pedas', 'terkirim', 'lunas', NULL),
(28, 'Siti Khadijah', '081567891011', 'siti@gmail.com', 15, 15, '2020-05-23', 9, 2, 'Perumahan Graha Raya Blok J No. 7, Cikupa, Tangerang', NULL, 'terkirim', 'lunas', '2020-05-16 20:23:38'),
(30, 'user', '081345678910', 'user@gmail.com', 5, 10, '2020-05-20', 10, 1, 'Jl. Budi Utomo No. 1 Jakarta Selatan', NULL, 'terkirim', 'lunas', '2020-05-17 12:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `katcat`
--

CREATE TABLE `katcat` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `katcat`
--

INSERT INTO `katcat` (`id`, `nama`) VALUES
(1, 'Indonesian Food'),
(2, 'Chinese Food'),
(3, 'Japanese Food'),
(5, 'Western Food'),
(6, 'Korean Food');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
('fajrinutami14@gmail.com', '$2y$10$czaJckZHdwcLRVokn1swxOQkhZ6uUp.6aNJSiHnOZ9n19ZaqllwHe', '2020-05-15 06:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `idformcatering` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_bayar` varchar(30) NOT NULL,
  `an` varchar(30) NOT NULL,
  `bukti` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `idformcatering`, `tgl_bayar`, `total_bayar`, `status_bayar`, `an`, `bukti`) VALUES
(5, 18, '2020-05-18', 1500000, 'lunas', 'Abdullah', '18.jpeg'),
(7, 28, '2020-05-17', 375000, 'lunas', 'Siti Khadijah', '28.jpeg'),
(8, 20, '2020-05-20', 450000, 'lunas', 'Budi Kurniawan', '20.jpeg'),
(9, 23, '2020-05-15', 300000, 'lunas', 'Ade Wijaya', '23.jpeg'),
(10, 30, '2020-05-17', 250000, 'lunas', 'user', '30.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `no_telp` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `no_telp`, `alamat`) VALUES
(3, 'Sifa Catering', '081218600708', 'Dasana Indah Kelapa Dua');

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
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `isactive` enum('yes','no','banned','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `foto` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `isactive`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Fajrin', 'fajrin145@gmail.com', NULL, '$2y$10$01tsdNILCumFtH08eyGMa.fy0eEiycY.kwzu/TeFc0/dpWDwvKD/i', 'admin', 'yes', 'Fajrin.png', NULL, '2020-05-14 01:57:24', '2020-05-14 01:57:24'),
(4, 'user', 'user@gmail.com', NULL, '$2y$10$l9NSeKT2/38TMztCMGJfTelf8rdsqho3BglI2Fuwr0DLU2IM8Sjca', 'user', 'yes', 'user.png', NULL, '2020-05-14 04:35:39', '2020-05-14 04:35:39'),
(5, 'indrie', 'indrie@gmail.com', NULL, '$2y$10$bySKZrZqyDiiWwY0qAw4AOvysJaoKiZM1O1SEjI5DcG7GJ6JhR4E6', 'user', 'no', NULL, NULL, '2020-05-14 08:09:06', '2020-05-14 08:09:06'),
(11, 'admin', 'admin@gmail.com', NULL, '$2y$10$ij/1b/kuTA/OGCsaQtF9F.hJywukIL9fRpC/XwZvovFZP6UefiqKS', 'admin', 'yes', '', NULL, NULL, NULL),
(12, 'user1', 'user1@gmail.com', NULL, '$2y$10$zhyoU.Z.ayOBahk3cLd7K.bZkdC9ZuGAov66PyHAGGbPRAWqpwXOy', 'user', 'no', NULL, NULL, '2020-05-16 12:24:02', '2020-05-16 12:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) NOT NULL,
  `jam` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `jam`) VALUES
(1, '07:00 - 08:00'),
(2, '08:00 - 09:00'),
(3, '09:00 - 10:00'),
(4, '10:00 - 11:00'),
(5, '11:00 - 12:00'),
(6, '12:00 - 13:00'),
(7, '13:00 - 14:00'),
(8, '14:00 - 15:00'),
(9, '15:00 - 16:00'),
(10, '16:00 - 17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_supplier1_idx` (`idsupplier`),
  ADD KEY `fk_produk_katcat1_idx` (`idkatcat`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formcatering`
--
ALTER TABLE `formcatering`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_formulir_waktu1_idx` (`idwaktu`),
  ADD KEY `fk_formulir_bank1_idx` (`idbank`) USING BTREE,
  ADD KEY `fk_formulir_catering1_idx` (`idcatering`) USING BTREE;

--
-- Indexes for table `katcat`
--
ALTER TABLE `katcat`
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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payment_formcatering1_idx` (`idformcatering`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formcatering`
--
ALTER TABLE `formcatering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `katcat`
--
ALTER TABLE `katcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catering`
--
ALTER TABLE `catering`
  ADD CONSTRAINT `fk_produk_kategori1` FOREIGN KEY (`idkatcat`) REFERENCES `katcat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produk_supplier1` FOREIGN KEY (`idsupplier`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `formcatering`
--
ALTER TABLE `formcatering`
  ADD CONSTRAINT `fk_formulir_pembayaran1` FOREIGN KEY (`idbank`) REFERENCES `bank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_formulir_waktu1` FOREIGN KEY (`idwaktu`) REFERENCES `waktu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_formcatering1` FOREIGN KEY (`idformcatering`) REFERENCES `formcatering` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
