-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 04:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gds`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` int(8) NOT NULL,
  `rayon` varchar(20) NOT NULL,
  `rombel` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama`, `nis`, `rayon`, `rombel`, `keterangan`, `date`) VALUES
(8, 'Ramon', 1220, 'cisarua 1', 'PPLG XI-4', 'Tidak Memakai NameTag', '2023-09-18'),
(9, 'Samsul', 1220, 'cisarua 1', 'PPLG XI-4', 'Tidak Memakai NameTag', '2023-09-18'),
(10, 'Hilman', 1220, 'cisarua 2', 'PPLG XI-4', 'Telat Hadir', '2023-09-18'),
(11, 'Lisma Salma', 1220, 'cisarua 3', 'PPLG XI-4', 'Telat Hadir', '2023-09-17'),
(12, 'Fachril', 1220, 'cisarua 4', 'PPLG XI-4', 'Telat Hadir', '2023-09-17'),
(13, 'Catur', 1220, 'cisarua 5', 'PPLG XI-4', 'Tidak Memakai NameTag', '2023-09-18'),
(16, 'Aria Manggala', 1220, 'Wikrama 3', 'PPLG XI-5', 'Telat Hadir', '2023-09-19'),
(17, 'Muhamad Fadly Alviansyah', 1220, 'Wikrama 4', 'PPLG XI-1', 'Kaos Kaki Tidak Sesuai', '2023-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `rayon` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `rayon`, `nama`) VALUES
(2, 'admin', '$2y$10$69bs2SM4W5S4P6bnEfnAuefV7T13TBdZ48UW5cL8R25NPaP/W.0wO', 'admin', '', 'Admin'),
(26, 'dede', '$2y$10$Bx0vo4irzwJgcX72q5jDVOCHMNI9kfEPP07Ccinbo9EU7CaAfaGTe', 'user', 'cisarua 1', 'Dede Mulyana, S.T. '),
(27, 'dewi', '$2y$10$QRYHJfAD1tVxWYAYG6ISpu.JnDMgdRbdS7aza4Ttzj2y.M/IuGJBi', 'user', 'cisarua 2', 'Dewi Ramayanti, S.Pd.'),
(28, 'rizal', '$2y$10$4dK0jqL3/BNmppB4zD7LNuqTYWb31EX6eXjscN8BBedonhvQtjDra', 'user', 'cisarua 3', 'Mohamad Rizal, S.Pd.'),
(29, 'endang', '$2y$10$HpUAAYlD9ia6yb5OxyuC.ON80X8fAwQ75QRVQ6my3p/zthfkglIbm', 'user', 'Cisarua 4', 'Endang Setiawan, S.Pd.'),
(32, 'nurdin', '$2y$10$IeowyGlJNQfeJikgX2ItXuYNA/g/fzI6.eNI1nr2/o8iVtGUIvF2m', 'user', 'Cisarua 5', 'Nurdin '),
(34, 'ria', '$2y$10$HXv.JFBQjCV.VDcd8HzorukONn5EsPnDZJ4Vf8i6a/YxoAA23t2tm', 'user', 'Cisarua 6', 'Ria Aryalita, S.Pd'),
(35, 'nunuk', '$2y$10$w0af.MYfcGMFniGgBB2GPO2qp/4LrQz8xGYKyhkHay4BMomS.QWzq', 'user', 'Wikrama 1', 'Nunuk Mujiana, S.Pd. '),
(36, 'ono', '$2y$10$rJK6aLqc6KPm2kA42LlpOuLgbhMSw1qW/O3Kkp3gomAwXlgt.9oXS', 'user', 'Wikrama 2', 'Budiyono, S.Pd. '),
(37, 'acep', '$2y$10$ek7R4oCcVIVXUCrtym8zQuXyHF8ujcdsKE91iwvWLAt8kRRKoMoUm', 'user', 'Wikrama 3', 'Acep Rahmat, S.Kom.'),
(38, 'tri', '$2y$10$jTDGuZD0hfEezdtos7OU9eW7AZaNTPHDuUscz9rnTgWCsowCUZR1S', 'user', 'Wikrama 4', 'Tri Novitasari, S.Pd.'),
(39, 'sofyan', '$2y$10$0p.NUCI6/co153yo7DQkT.UcqbjNqAms0yPF2rOy6911GZWgO1G3.', 'user', 'Wikrama 5', 'Mochamad Sofyan, S.Pd. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
