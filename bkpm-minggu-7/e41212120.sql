-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 10:13 AM
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
-- Database: `e41212120`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_fullname` varchar(50) NOT NULL,
  `user_value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `user_email`, `user_password`, `user_fullname`, `user_value`) VALUES
(1, 'ojakchanhuha@kaftapus.id', 'perampastelurkiloan', 'Fatkhur Rozak', 9),
(2, 'abhinayahuha@kaftapus.id', 'kaumnahdatululama', 'Abhinaya Fahar Layla', 8),
(3, 'harisharushuha@kaftapus.id', 'masmasganteng', 'Haris Asysyauqi', 10),
(4, 'mamenhuha@kaftapus.id', 'carokkapanpun', 'Miftahur Rahman', 9),
(5, 'dapekngaberhuha@kaftapus.id', 'gresikkawasankacau', 'Daffa Agung Nugroho', 10),
(6, 'tegartaqhuha@kaftapus.id', 'taqberanadalsidokare', 'Tegar Alam Qushoyyi', 9),
(7, 'ferdiansemburhuha@kaftapus.id', 'massemburjagongecas', 'M Ferdiansyah', 8),
(8, 'lukmanninjahuha@kaftapus.id', 'lukmanofflanerkacau', 'Lukman', 8),
(9, 'algapunkhuha@kaftapus.id', 'cowokpunkbencidangdut', 'Rachmadani Anggowo Rizki', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
