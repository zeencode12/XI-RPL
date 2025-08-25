-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2025 at 08:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `jml_sdr` varchar(50) NOT NULL,
  `rt` varchar(25) NOT NULL,
  `rw` varchar(25) NOT NULL,
  `dsn` varchar(50) NOT NULL,
  `ds` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `pj` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nisn`, `tempat_lahir`, `tgl_lahir`, `jk`, `nama_ayah`, `jml_sdr`, `rt`, `rw`, `dsn`, `ds`, `kec`, `kab`, `no_telp`, `asal_sekolah`, `pj`) VALUES
(9, 'zainudin', '3501062405930002', 'pacitan', '2022-01-08', 'Pria', 'suyono', '2', '1', '1', 'sidorejo', 'gayuhan', 'arjosari', 'pacitan', '087751724240', 'SMP 1 ARJOSARI', 'RPL'),
(10, 'mizan', '69867686', 'pacitan', '2022-01-08', 'Pria', 'samsuri', '2', '2', '2', 'sidorejo', 'gayuhan', 'arjosari', 'pacitan', '08786868686', 'SMP 1 ARJOSARI', 'TKJ'),
(11, 'fauzi', '3023012309', 'pacitan', '2022-01-13', 'Pria', 'sutrisno', '2', '3', '4', 'jenggrik', 'gayuhan', 'arjosari', 'pacitan', '08736486813', 'SMP 1 ARJOSARI', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'zeen', '$2y$10$hNpcEUrnoX2vdJ/.w1jFCOr65XqXVXHH1HtxioW13UQkdXApnDE1O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
