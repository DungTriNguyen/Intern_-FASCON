-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 07:03 AM
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
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_giamkhao`
--

CREATE TABLE `table_giamkhao` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(20) NOT NULL,
  `personID` varchar(40) NOT NULL,
  `personImage` varchar(200) NOT NULL DEFAULT 'http://sandichvu.com.vn/images/logos/logo.png',
  `deleted` tinyint(4) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_giamkhao`
--

INSERT INTO `table_giamkhao` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`, `code`, `personID`, `personImage`, `deleted`, `phone`) VALUES
(2, 'Ngọc Ánh', 'Phan', 'pnanh', '0c4635c5af0f173c26b0d85b6c9b398b', 'uploads/avatars/2.png?v=1711970400', NULL, 2, '2022-04-21 13:49:02', '2024-04-01 11:20:00', '', '0', '', 0, ''),
(4, 'Văn Kiệt', 'Võ', 'vvkiet', '202cb962ac59075b964b07152d234b70', 'uploads/avatars/4.png?v=1650531008', NULL, 3, '2022-04-21 16:50:08', '2024-03-25 13:13:19', '', '0', '', 0, ''),
(9, 'Con gái', '', '', '', NULL, NULL, 0, '2024-03-27 03:43:29', '2024-03-27 03:43:29', '', '2379725093229035520', 'https://static.hanet.ai/face/employee/15866/0c27fcc6-2312-4999-b046-085660a8224e.jpg', 0, ''),
(17, 'niFe1cCwb9', 'xqRb8S0bAF', '', '', NULL, NULL, 0, '2024-03-27 09:55:58', '2024-03-27 09:55:58', '', '0', 'https://s3-hn-2.cloud.cmctelecom.vn/hanet-camera-image/alarm/upload/H2226HV0543/2024/03/27/3074588c-ec20-11ee-9712-3e0958d8f1ac.jpg', 0, ''),
(18, 'niFe1cCwb9', 'xqRb8S0bAF', '', '', NULL, NULL, 0, '2024-03-27 09:56:02', '2024-03-27 09:56:02', '', '0', 'https://s3-hn-2.cloud.cmctelecom.vn/hanet-camera-image/face/upload/H2226HV0543/2024/03/27/31b3c4bc-ec20-11ee-820a-ee43bb699813.jpg', 0, ''),
(21, 'PLGNPF5GFT', 'WW0CCIAABQ', '', '', 'data/b10910d7-94a5-4edf-9b8b-373d903ddb85/image0.png', NULL, 0, '2024-04-04 05:51:52', '2024-04-04 05:51:52', '', 'b10910d7-94a5-4edf-9b8b-373d903ddb85', 'http://sandichvu.com.vn/images/logos/logo.png', 0, ''),
(23, 'zsqbtMNGhW', 'u7hUquLflP', '', '', 'data/435387bb-0b51-44d7-b03e-8f6177b8a28b/image0.png', NULL, 0, '2024-04-04 07:59:06', '2024-04-04 07:59:06', '', '435387bb-0b51-44d7-b03e-8f6177b8a28b', 'http://sandichvu.com.vn/images/logos/logo.png', 0, ''),
(24, 'cGYY0R6Vw', 'VJmOZniyCP', '', '', 'data/ae27b8db-8359-4fcb-8f7e-20d2695d1cb6/image0.png', NULL, 0, '2024-04-04 08:08:06', '2024-04-04 08:08:06', '', 'ae27b8db-8359-4fcb-8f7e-20d2695d1cb6', 'http://sandichvu.com.vn/images/logos/logo.png', 0, ''),
(27, 'o6bjFStS32', '7anR9xKbaW', '', '', 'uploads/avatars/70ec3bec-c66a-413a-970b-99bb5ce315da/image0.png', NULL, 0, '2024-04-04 08:31:20', '2024-04-04 08:31:20', '', '70ec3bec-c66a-413a-970b-99bb5ce315da', 'http://sandichvu.com.vn/images/logos/logo.png', 0, ''),
(28, 'iIwgjyuaje', 'eNw8Tq6Vlj', '', '', 'uploads/avatars/3a532351-216a-4e99-8a9d-57f3ec27d7df/image0.png', NULL, 0, '2024-04-05 00:03:55', '2024-04-05 00:03:55', '', '3a532351-216a-4e99-8a9d-57f3ec27d7df', 'http://sandichvu.com.vn/images/logos/logo.png', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_ketquathi`
--

CREATE TABLE `table_ketquathi` (
  `id` bigint(20) NOT NULL,
  `id_exam` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_capdaiduthi` int(11) NOT NULL,
  `ketqua` tinyint(4) NOT NULL COMMENT '1: dau , 2 rot',
  `tinhtrang` tinyint(4) NOT NULL,
  `donluyen` float NOT NULL,
  `canban` float NOT NULL,
  `songluyen` float NOT NULL,
  `doikhang` float NOT NULL,
  `lythuyet` float NOT NULL,
  `theluc` float NOT NULL,
  `ghichu` varchar(100) NOT NULL,
  `id_giamkhao` int(11) NOT NULL,
  `ngaycham` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_ketquathi`
--

INSERT INTO `table_ketquathi` (`id`, `id_exam`, `id_member`, `id_capdaiduthi`, `ketqua`, `tinhtrang`, `donluyen`, `canban`, `songluyen`, `doikhang`, `lythuyet`, `theluc`, `ghichu`, `id_giamkhao`, `ngaycham`) VALUES
(7, 29, 34, 9, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(8, 29, 16, 10, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(9, 37, 28, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(10, 37, 22, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(11, 37, 19, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(12, 37, 57, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(13, 37, 21, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(15, 37, 26, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(16, 37, 24, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(17, 37, 59, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(19, 37, 32, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(20, 37, 62, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(21, 37, 65, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(22, 37, 52, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(25, 37, 36, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(26, 37, 56, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(27, 37, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(28, 37, 37, 2, 1, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(30, 119, 101, 2, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(31, 119, 102, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(41, 120, 121, 2, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(73, 119, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(89, 119, 56, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(90, 119, 52, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(91, 119, 37, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(92, 119, 36, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(94, 119, 62, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(97, 119, 22, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(98, 119, 21, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(100, 119, 32, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(101, 119, 28, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(102, 119, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(103, 119, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(104, 0, 158, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(105, 0, 159, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(106, 128, 174, 2, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(107, 119, 24, 3, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(109, 0, 218, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(110, 0, 223, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(111, 0, 225, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(112, 0, 224, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(113, 119, 67, 2, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(114, 0, 190, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(115, 0, 191, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(116, 0, 219, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(117, 0, 220, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(118, 0, 221, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(119, 0, 222, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(120, 119, 18, 2, 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(121, 0, 226, 2, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(122, 133, 226, 2, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(123, 133, 190, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(124, 133, 191, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(125, 133, 218, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(126, 133, 219, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(127, 133, 220, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(128, 133, 221, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(129, 133, 222, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12'),
(130, 133, 224, 3, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '2024-05-12 12:17:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_giamkhao`
--
ALTER TABLE `table_giamkhao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ketquathi`
--
ALTER TABLE `table_ketquathi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_giamkhao`
--
ALTER TABLE `table_giamkhao`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `table_ketquathi`
--
ALTER TABLE `table_ketquathi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
