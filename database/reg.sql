-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2021 at 06:00 AM
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
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_skills`
--

CREATE TABLE `reg_skills` (
  `id` int(11) NOT NULL,
  `first1` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mem_sex` varchar(255) NOT NULL,
  `mem_work` varchar(255) NOT NULL,
  `mem_fac` varchar(255) NOT NULL,
  `mem_pro` varchar(255) NOT NULL,
  `mem_add` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mem_phone` varchar(255) NOT NULL,
  `mem_food` varchar(255) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_con` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reg_skills`
--

INSERT INTO `reg_skills` (`id`, `first1`, `name`, `mem_sex`, `mem_work`, `mem_fac`, `mem_pro`, `mem_add`, `phone`, `mem_phone`, `mem_food`, `name1`, `name2`, `name3`, `email`, `password`, `password_con`) VALUES
(1, 'นาย', 'ศราวุฒิ เกิดถาวร', 'ชาย', 'มหาวิทยาลัยราชภัฏชัยภูมิ', 'สำนักวิทยบริการฯ', 'คอมพิวเตอร์', '32/9 หมู่ เมืองชัยภูมิ', '0985865881', '0985865881', 'ปกติ', 'สุชาติ สุชาติ', 'สมพร สมพร', 'สมพล สมพล', 'topzaneverdie@gmail.com', '123456789', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_skills`
--
ALTER TABLE `reg_skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_skills`
--
ALTER TABLE `reg_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
