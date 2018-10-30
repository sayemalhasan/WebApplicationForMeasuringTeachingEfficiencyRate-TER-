-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 07:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access_level` tinyint(1) NOT NULL,
  `deletion_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `student_id`, `password`, `access_level`, `deletion_status`) VALUES
(1, '12510246', '0cf2efb4cc1b05e85ba2da592a9340e9', 1, 1),
(2, '12510247', '0e8f45f71d250d3f41677bdefbcbf958', 1, 1),
(3, '142010400032', 'a6a15da2ccd562602bf28a05fe1f1921', 1, 1),
(4, '142010200006', 'd34862e371b9793d1344864f2e36ff30', 1, 1),
(5, '13410099', '3de213cb645fc98b01bf5c4ce0f0f8dc', 1, 1),
(6, '13410100', '958775a8ad34bd556bc01441bcebbd6f', 1, 1),
(7, '13410101', 'b2c3d2bd1ede17859e63b5bc55ecd01b', 1, 1),
(8, '13410102', 'f5a374cbed84630a6bd583fa62fe6e57', 1, 1),
(9, '13410103', '383e2da31159949e503efce5f2b81200', 1, 1),
(10, '13410104', 'a31a10acfc4fd8c04b96572e75257ee0', 1, 1),
(11, '13410105', 'e0b4cdf57b9c8edbc5d28a2f12a56196', 1, 1),
(12, '13410106', '65651925b123f36c30fce5ee889c6c2d', 1, 1),
(13, '13410107', 'c771c9971e9bb6580909efa5236b8cec', 1, 1),
(14, '13410108', '45f2eef5b2383dfacef7db5ec1946fdf', 1, 1),
(15, '13410109', 'b0788a64600174c582729cbe54031d06', 1, 1),
(16, '13410110', 'c9933e34f72419609b150c47b800efc9', 1, 1),
(17, '13410111', '7fe5dff72db1f07e2d4db474617f86fe', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
