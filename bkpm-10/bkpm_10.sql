-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 04:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkpm_10`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `name` varchar(40) DEFAULT NULL,
  `id_mhs` varchar(9) NOT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`name`, `id_mhs`, `jenis_kelamin`, `alamat`, `semester`) VALUES
('Fatkhur Rozak', '1', 'L', 'Sidoarjo', 'Semester 3'),
('Sofa Famela ', '10', 'P', 'Sidoarjo', 'Semester 3'),
('Sofi Ismi', '11', 'P', 'Sidoarjo', 'Semester 3'),
('Haidar Azzam', '12', 'L', 'Sidoarjo', 'Semester 3'),
('Iwan Aksen', '13', 'L', 'Magelang', 'Semester 5'),
('Yuana Ananta', '14', 'P', 'Maluku', 'Semester 8'),
('Fikri Hanan', '15', 'L', 'Bondowoso', 'Semester 2'),
('Dinda Amalia Julyandri', '2', 'P', 'Tuban', 'Semester 3'),
('Haris Asysyauqi', '3', 'L', 'Sidoarjo', 'Semester 3'),
('Haikal Izzanour', '4', 'L', 'Surabaya', 'Semester 3'),
('Zolanda Avis ', '5', 'P', 'Sidoarjo', 'Semester 3'),
('Abhinaya', '6', 'L', 'Sidoarjo', 'Semester 3'),
('Nabila Windy', '7', 'P', 'Sidoarjo', 'Semester 3'),
('Clearesta', '8', 'P', 'Jember', 'Semester 3'),
('Argya Fauza', '9', 'L', 'Sidoarjo', 'Semester 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
