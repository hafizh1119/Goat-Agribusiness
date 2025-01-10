-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 11:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webternak_berkah`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(3, 'Kambing Jawarandu', 'Ciri-cirinya memiliki bobot lebih dari 40 kilogram, jantan dan betina memiliki tanduk, telinga lebar yang terbuka, panjang, dan terkulai. Kambing ini bisa menghasilkan susu hingga 1,5 liter per hari dan dagingnya dimanfaatkan sebagai ternak kurban\r\n\r\n\r\nArtikel ini telah tayang di Idntimes.com dengan judul \"12 Jenis-Jenis Kambing yang Diternakkan di Indonesia\".\r\n', '20250107204031.jpg', '2025-01-07 20:40:31', 'admin'),
(7, 'Kambing Gembrong', 'Ciri fisik yang paling terlihat yakni sekujur tubuh tertutup bulu mengilap. Jika dibiarkan, bulu kambing jantan bisa tumbuh hingga 30 sentimeter. Kambing ini memiliki tanduk kecil dengan warna tubuh cokelat, cokelat muda, atau putih. Bobotnya berkisar antara 32-45 kilogram.\r\n\r\n\r\nArtikel ini telah tayang di Idntimes.com dengan judul \"12 Jenis-Jenis Kambing yang Diternakkan di Indonesia\".', '20250107211629.jpeg', '2025-01-07 21:16:29', 'admin'),
(8, 'Kambing Muara', 'Kambing muara bersifat prolifik dan produktif secara reproduksi. Ia bisa melahirkan dua hingga empat anak sekali persalinan. Lebih lanjut, induk kambing ini memiliki produksi susu yang berkualitas sehingga anak-anaknya bisa tumbuh sehat tanpa bantuan susu tambahan.\r\n\r\n\r\nArtikel ini telah tayang di Idntimes.com dengan judul \"12 Jenis-Jenis Kambing yang Diternakkan di Indonesia\".\r\n', '20250109215235.jpeg', '2025-01-09 21:52:35', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama`, `gambar`, `tanggal`, `username`) VALUES
(6, 'Hafizh Naufal Nuha Kusuma', '20250110164105.jpeg', '2025-01-10 16:41:05', 'admin'),
(7, 'Nuha', '20250110164127.jpg', '2025-01-10 16:41:27', 'admin'),
(8, 'Hafizh Naufal Nuha Kusuma', '20250110164337.jpeg', '2025-01-10 16:43:37', 'admin'),
(9, 'kusuma', '20250110164417.jpg', '2025-01-10 16:44:17', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20250110165610.jpeg'),
(2, 'hafizh', '81dc9bdb52d04dc20036dbd8313ed055', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
