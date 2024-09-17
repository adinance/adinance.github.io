-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 07:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ir`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('tkd3uol1huml58g7gl0edh3c0vb04fgm', '::1', 1709607763, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393630373736333b),
('61su95sr4bupt6fqltq9ia3vqea4v2gk', '::1', 1709608285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393630383238353b),
('jffdgubn6isvuslgo9uq1i4botqmj5eg', '::1', 1709608593, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393630383539333b),
('efcjjhqj6oi89jle0ners7tott37fg0q', '::1', 1709608932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393630383933323b),
('ftugij0r0ggvii869cscd9g3spt3cjkc', '::1', 1709610204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631303230343b),
('hsl5g2tfaia1ri234p9ljta01eqrvk5d', '::1', 1709610542, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631303534323b),
('fl5irvjr0i88d05hrpvq6uui1mimsoqe', '::1', 1709610845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631303834353b),
('n27ja64lntbuflhcma7ofm2nbj76ufet', '::1', 1709611190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631313139303b),
('if2ceonjqjbpmsriikec1vnos4m1opb9', '::1', 1709611679, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631313637393b),
('9k0i36q2eqjarctm90mracfsaja77a4b', '::1', 1709612014, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631323031343b),
('i0idkldqgr276k05eue723g1k04s6dgg', '::1', 1709612792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631323739323b),
('e14v09io04qj3oolnun7r71u3g7rpegi', '::1', 1709613375, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631333337353b),
('a221sgd3d761k243915lb2ag1bpq7qfh', '::1', 1709613375, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393631333337353b),
('48bmpuvi0thv9aoqj7eivvhqiri3ieer', '::1', 1709620794, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730393632303738303b);

-- --------------------------------------------------------

--
-- Table structure for table `tb_analyst_coverage`
--

CREATE TABLE `tb_analyst_coverage` (
  `id` int(11) DEFAULT NULL,
  `broker_name` varchar(255) DEFAULT NULL,
  `broker_pic` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_analyst_coverage`
--

INSERT INTO `tb_analyst_coverage` (`id`, `broker_name`, `broker_pic`, `create_date`) VALUES
(1, 'Finansia Syrus Securities  Public Company Limited', 'analyst-finansia.jpeg', '2024-02-13 21:30:23'),
(2, 'Yuanta Securities (Thailand) Company Limited', 'analyst-yuanta.jpeg', '2024-02-13 21:32:04'),
(3, 'Asia Plus Securities Company  Limited', 'analyst-asiaplus.jpeg', '2024-02-13 21:33:06'),
(4, 'Maybank Kim Eng Securities  (Thailand) Public Company Limited', 'analyst-mbket.jpeg', '2024-02-13 21:47:10'),
(5, 'Thanachart Securities Public Company Limited', 'analyst-thanachart.jpeg', '2024-02-13 21:50:10'),
(6, 'Country Group Securities  Public Company Limited', 'analyst-cgc.jpeg', '2024-02-13 21:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_annual_report`
--

CREATE TABLE `tb_annual_report` (
  `id` int(11) NOT NULL,
  `img_topic` varchar(255) DEFAULT NULL,
  `topic_name1` varchar(255) DEFAULT NULL,
  `topic_name2` varchar(255) DEFAULT NULL,
  `file_name1` varchar(255) DEFAULT NULL,
  `file_name2` varchar(255) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_annual_report`
--

INSERT INTO `tb_annual_report` (`id`, `img_topic`, `topic_name1`, `topic_name2`, `file_name1`, `file_name2`, `Year`, `create_date`) VALUES
(1, '56-1-2017.jpg', 'Annual Report', NULL, '2021_form_op_0_th.pdf', NULL, '2008', '2024-02-12 17:07:58'),
(2, '56-1-2017.jpg', 'Annual Report', NULL, '2021_form_op_0_th.pdf', NULL, '2009', '2024-02-12 17:12:20'),
(3, '56-1-2017.jpg', 'Annual Report', NULL, '2021_form_op_0_th.pdf', NULL, '2010', '2024-02-12 17:12:32'),
(4, '56-1-2017.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2011', '2024-02-12 17:12:39'),
(5, '56-1-2017.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2012', '2024-02-12 17:12:47'),
(6, '56-1-2017.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2013', '2024-02-12 17:12:54'),
(7, '56-1-2017.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2014', '2024-02-12 17:16:24'),
(8, '56-1-2017.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2015', '2024-02-12 17:16:37'),
(9, '56-1-2017.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2016', '2024-02-12 17:16:44'),
(10, '56-1-2017.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2017', '2024-02-12 17:16:55'),
(11, '56-1-2018.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2018', '2024-02-12 17:17:04'),
(12, '56-1-2019.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2019', '2024-02-12 17:17:21'),
(13, '56-1-2020.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2020', '2024-02-12 17:17:32'),
(14, '56-1-2021.jpg', 'Annual Report', 'Form 56-1', '2021_form_op_0_th.pdf', '2021_form_op_0_th.pdf', '2021', '2024-02-12 17:17:42'),
(15, '56-1-2022.jpg', '56-1 One Report', NULL, '2021_form_op_0_th.pdf', NULL, '2022', '2024-02-12 17:17:49'),
(16, 'annual_report.mp4', '56-1 One Report', 'Form 56-1', '2021_form_op_0_th.pdf', NULL, '2023', '2024-02-12 17:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_company_factsheet`
--

CREATE TABLE `tb_company_factsheet` (
  `id` int(11) DEFAULT NULL,
  `factsheet_year` varchar(4) DEFAULT NULL,
  `factsheet_file` varchar(100) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_company_factsheet`
--

INSERT INTO `tb_company_factsheet` (`id`, `factsheet_year`, `factsheet_file`, `date_create`) VALUES
(1, '2016', '2021_form_op_0_th.pdf', '2024-02-19 15:19:16'),
(2, '2017', '2021_form_op_0_th.pdf', '2024-02-19 15:19:22'),
(3, '2018', '2021_form_op_0_th.pdf', '2024-02-19 15:19:29'),
(4, '2019', '2021_form_op_0_th.pdf', '2024-02-19 15:19:38'),
(5, '2020', '2021_form_op_0_th.pdf', '2024-02-19 15:19:47'),
(6, '2021', '2021_form_op_0_th.pdf', '2024-02-19 15:20:01'),
(7, '2022', '2021_form_op_0_th.pdf', '2024-02-19 15:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presentation_webcast`
--

CREATE TABLE `tb_presentation_webcast` (
  `id` int(11) DEFAULT NULL,
  `header_en` varchar(255) DEFAULT NULL,
  `header_th` varchar(255) DEFAULT NULL,
  `order_no` int(11) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `webcast_url` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_presentation_webcast`
--

INSERT INTO `tb_presentation_webcast` (`id`, `header_en`, `header_th`, `order_no`, `year`, `webcast_url`, `file_name`) VALUES
(1, 'OPPORTUNITY <br> DAY <br> Q2/2022', '', 1, '2022', 'https://www.youtube.com/watch?v=98zIkUETFjw', 'http://localhost/ir.cmo-group.com/assets/img/publication/2021_form_op_0_th.pdf'),
(2, 'ANALYST <br> MEETING <br> Q2/2022', '', 2, '2022', 'https://www.youtube.com/watch?v=98zIkUETFjw', 'http://localhost/ir.cmo-group.com/assets/img/publication/2021_form_op_0_th.pdf'),
(3, 'OPPORTUNITY <br> DAY <br> Q1/2022', '', 3, '2022', 'https://www.youtube.com/watch?v=98zIkUETFjw', 'http://localhost/ir.cmo-group.com/assets/img/publication/2021_form_op_0_th.pdf'),
(4, 'OPPORTUNITY <br> DAY <br> Q2/2023', '', 1, '2023', 'https://www.youtube.com/watch?v=98zIkUETFjw', 'http://localhost/ir.cmo-group.com/assets/img/publication/2021_form_op_0_th.pdf'),
(5, 'ANALYST <br> MEETING <br> Q2/2023', '', 2, '2023', 'https://www.youtube.com/watch?v=98zIkUETFjw', 'http://localhost/ir.cmo-group.com/assets/img/publication/2021_form_op_0_th.pdf'),
(6, 'OPPORTUNITY <br> DAY <br> Q1/2023', '', 3, '2023', 'https://www.youtube.com/watch?v=98zIkUETFjw', 'http://localhost/ir.cmo-group.com/assets/img/publication/2021_form_op_0_th.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tb_annual_report`
--
ALTER TABLE `tb_annual_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_annual_report`
--
ALTER TABLE `tb_annual_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
