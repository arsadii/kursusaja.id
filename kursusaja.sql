-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2020 at 02:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursusaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `id_lmbg` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `nama_pembicara` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `id_lmbg`, `judul`, `gambar`, `deskripsi`, `harga`, `daerah`, `tgl_mulai`, `nama_pembicara`, `created_at`, `updated_at`) VALUES
(1, 1, 'Creative Talk with Animedia Tadulako', 'card-project2.jpg', 'Talkshow bertajuk \"Creative Talk\" ini akan membahas tentang bagaimana sih kita bisa tetap kreatif berkarya ditengah pandemi.', 30000, 'Palu', '2020-07-31', 'Arsadi', '2020-07-07 10:57:46', '2020-07-07 10:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `id_lmbg` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `lama_kursus` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id`, `id_lmbg`, `judul`, `gambar`, `deskripsi`, `harga`, `daerah`, `tgl_mulai`, `lama_kursus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Become Inkscape Master', 'card-project2.jpg', 'Kursus desain menggunakan aplikasi Inkscape yang akan buat kamu makin terdepan dalam dunia desain grafis.', 200000, 'Palu', '2020-07-18 09:00:00', '30 Hari', NULL, NULL),
(2, 2, 'Desain UI/UX', 'card-project2.jpg', 'Ini kelas Saya', 180000, 'Palu', '2020-07-19 00:00:00', '30 Hari', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_kursus` int(255) NOT NULL,
  `urutan` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link_vid` varchar(255) NOT NULL,
  `penjelasan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_kursus`, `urutan`, `judul`, `link_vid`, `penjelasan`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'Pengenalan Inkscape', 'https://youtube.com', 'Inkscape adalah aplikasi editing berbasis vector open source atau gratis. Walaupun gratis, tapi inkscape sangat powerfull untuk desain grafis yang rumit sekalipun.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lmbg` varchar(255) NOT NULL,
  `tnggl_brdr` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `username`, `password`, `nama_lmbg`, `tnggl_brdr`, `alamat`, `hp`, `email`, `created_at`, `updated_at`) VALUES
(1, 'kursusaja', 'kursusaja', 'Kursusaja.id', '2020-07-17', 'Jl. Merpati', '082291340835', 'kursusaja.id@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `nama_lngkp` varchar(255) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `role`, `nama_lngkp`, `ttl`, `alamat`, `hp`, `email`, `created_at`, `updated_at`) VALUES
(1, 'arsad', 'arsad', 'admin', 'Arsadi', '1999-08-11', 'Jl. Asam II Lr.2', '082291340835', 'sadiyuitherz@gmail.com', NULL, NULL),
(2, 'azur', 'azur', 'admin', 'Azur Fachry', '1998-12-02', 'Lasoani', '08124124912', 'azur@gmail.com', '2020-07-10 07:00:06', '2020-07-10 07:00:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
