-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 02:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helmify`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `password`) VALUES
(8, 'mrgaez@gmail.com', 'gaez', '$2y$10$Pge8Y7PuSc2xMhyts7HKE.wzCJZylY9h8qZ1M8o8gkhZAlwkD75yK'),
(9, 'rea@gmail.com', 'rea', '$2y$10$m0G2A3MCv93/vEPk.ke/T.TH/QOjQLfj3nutGDS3y/ZxQ9C8uj6xm'),
(10, 'rajuidiot25@gmail.com', 'rajuidiot', '$2y$10$9Avp4KQJcLfoBkE72dBqpuSWOQlRBCpL7Nl6P8ZdAIDom9Gq5V6Yq'),
(11, 'gaez@gmail.com', '123', '$2y$10$dGIQckZS.qIxJJAMMhQnuesK9MYhvKJa8PNHB.WFvbJEr.yIFYfwW'),
(12, 'zxz@gmail.com', 'zxz', '$2y$10$ue//pXD/t8Tp7fukkscxxOu4/jlv7jSo4M.gvlYxlWC.y8OCUrDKy'),
(13, 'dan@gmail.com', 'dan', '$2y$10$2M7Qr8IafDzrFFi2bvKZg.LSzNvCY8bTDncWPKLo7.K4SpVdRoVvO'),
(14, 'rizkygaez@gmail.com', 'rizkygaez', '$2y$10$fVUEvDniXj1AAI6SBsCYL.rVcLRN6zVc2KXV/WHUeJ6HoH5G5UvX.');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kurir` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `nama`, `email`, `telp`, `alamat`, `barang`, `jumlah`, `kurir`, `pembayaran`, `bukti`) VALUES
(1, 'gaez', 'gaez@gmail.com', '2147483647', 'nowhere', '', 0, '', '1', '1.jpg'),
(2, 'asdasd', 'asdasd@gmail.com', '2147483647', 'wew', '', 0, '', '2', 'PointBlank_20201002_191722.jpg'),
(3, 'ini bener', 'bener@gmail.com', '08170867726', 'wadaw', '', 0, '', '1', '1.jpg'),
(4, 'hudan', 'hudanlee61@gmail.com', '123', 'asd', '', 0, '', '2', 'PointBlank_20201002_191719.jpg'),
(5, 'nann', 'nann@gmail.com', '112233', 'asasas', '', 0, '', 'BCA', 'test.jpg'),
(6, 'foto1', 'foto1@gmail.com', '21212112', 'aassdd', '', 0, '', 'OVO', '1.jpg'),
(7, 'rizky', 'rizkygaez@gmail.com', '6289618547500', 'jl kesadaran 1 gang damai', '', 0, '', 'OVO', 'Event_Page.png'),
(8, 'danz', 'danz@gmail.com', '089618547500', 'Jauh', 'Helm Bogo JPN', 1, '', 'BCA', 'anemo.png'),
(9, 'Final', 'Final@gmail.com', '6289618547555', 'Unknown', 'Helm Bogo JPN', 1, 'Gosend', 'DANA', 'bg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
