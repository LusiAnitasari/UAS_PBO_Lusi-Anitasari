-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2026 at 07:39 AM
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
-- Database: `db_uas_pbo_ti1c_lusi anitasari`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` int NOT NULL,
  `gaji_dasar_per_hari` decimal(10,2) NOT NULL,
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulanan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(10,2) DEFAULT NULL,
  `opsi_saham_id` varchar(20) DEFAULT NULL,
  `uang_saku_bulanan` decimal(10,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulanan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
('K001', 'Andi Wijaya', 'IT Support', 22, '150000.00', 'kontrak', 12, 'PT Sumber Bakat', NULL, NULL, NULL, NULL),
('K002', 'Budi Santoso', 'Marketing', 20, '140000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
('K003', 'Citra Lestari', 'Finance', 21, '160000.00', 'kontrak', 24, 'PT Sumber Bakat', NULL, NULL, NULL, NULL),
('K004', 'Dewi Sartika', 'HRD', 22, '145000.00', 'kontrak', 12, 'PT Prima Karya', NULL, NULL, NULL, NULL),
('K005', 'Eko Prasetyo', 'Operations', 19, '135000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
('K006', 'Fany Rahma', 'Creative', 23, '150000.00', 'kontrak', 12, 'PT Prima Karya', NULL, NULL, NULL, NULL),
('K007', 'Gilang Dirga', 'Sales', 20, '140000.00', 'kontrak', 24, 'PT Sumber Bakat', NULL, NULL, NULL, NULL),
('M001', 'Oki Setiana', 'Engineering', 18, '80000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'Sertifikat MSIB - BackEnd'),
('M002', 'Putra Perkasa', 'Creative', 20, '75000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'Sertifikat Kampus Merdeka - UI/UX'),
('M003', 'Qori Sandi', 'Marketing', 22, '75000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'Sertifikat Kampus Merdeka - Copywriter'),
('M004', 'Rian Jombang', 'IT Support', 15, '80000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'Sertifikat MSIB - Networking'),
('M005', 'Siti Aminah', 'HRD', 21, '70000.00', 'magang', NULL, NULL, NULL, NULL, '1000000.00', 'Sertifikat Kampus Merdeka - HR'),
('M006', 'Taufik Hidayat', 'Sales', 19, '75000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'Sertifikat MSIB - Sales Executive'),
('M007', 'Utami Lestari', 'Finance', 20, '80000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'Sertifikat Kampus Merdeka - Data Analyst'),
('T001', 'Hendra Wijaya', 'Engineering', 22, '250000.00', 'tetap', NULL, NULL, '500000.00', 'ESOP-001', NULL, NULL),
('T002', 'Indah Permata', 'Finance', 21, '230000.00', 'tetap', NULL, NULL, '450000.00', 'ESOP-002', NULL, NULL),
('T003', 'Joko Widodo', 'HRD', 22, '240000.00', 'tetap', NULL, NULL, '500000.00', 'ESOP-003', NULL, NULL),
('T004', 'Kurnia Utama', 'Legal', 20, '260000.00', 'tetap', NULL, NULL, '600000.00', 'ESOP-004', NULL, NULL),
('T005', 'Larasati Putri', 'Marketing', 22, '220000.00', 'tetap', NULL, NULL, '450000.00', 'ESOP-005', NULL, NULL),
('T006', 'Muhammad Ali', 'Engineering', 23, '270000.00', 'tetap', NULL, NULL, '550000.00', 'ESOP-006', NULL, NULL),
('T007', 'Nadia Vega', 'Creative', 21, '225000.00', 'tetap', NULL, NULL, '450000.00', 'ESOP-007', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
