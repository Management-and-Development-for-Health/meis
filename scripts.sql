-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 01:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18
CREATE DATABASE meis;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meis`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `backup_type` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `city_name` varchar(20) NOT NULL,
  `country_id` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `hasc` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `country_id`, `created_at`, `updated_at`, `hasc`, `zone_id`, `dt`) VALUES
(1, 'Arusha', 1, NULL, NULL, 'TZ.AS', 4, '2021-06-09 05:00:27'),
(2, 'Dar es Salaam', 1, NULL, NULL, 'TZ.DS', 2, '2021-06-09 05:00:27'),
(3, 'Dodoma', 1, NULL, NULL, 'TZ.DO', 1, '2021-06-09 05:00:27'),
(4, 'Geita', 1, NULL, NULL, 'TZ.GE', 3, '2021-06-09 05:00:27'),
(5, 'Iringa', 1, NULL, NULL, 'TZ.IG', 5, '2021-06-09 05:00:27'),
(6, 'Kagera', 1, NULL, NULL, 'TZ.KG', 3, '2021-06-09 05:00:27'),
(7, 'Katavi', 1, NULL, NULL, 'TZ.KA', 5, '2021-06-09 05:00:27'),
(8, 'Kigoma', 1, NULL, NULL, 'TZ.KM', 1, '2021-06-09 05:00:27'),
(9, 'Kilimanjaro', 1, NULL, NULL, 'TZ.KL', 4, '2021-06-09 05:00:27'),
(10, 'Lindi', 1, NULL, NULL, 'TZ.LI', 6, '2021-06-09 05:00:27'),
(11, 'Manyara', 1, NULL, NULL, 'TZ.MY', 4, '2021-06-09 05:00:27'),
(12, 'Mara', 1, NULL, NULL, 'TZ.MA', 3, '2021-06-09 05:00:27'),
(13, 'Mbeya', 1, NULL, NULL, 'TZ.MB', 5, '2021-06-09 05:00:27'),
(14, 'Morogoro', 1, NULL, NULL, 'TZ.MO', 2, '2021-06-09 05:00:27'),
(15, 'Mtwara', 1, NULL, NULL, 'TZ.MT', 6, '2021-06-09 05:00:27'),
(16, 'Mwanza', 1, NULL, NULL, 'TZ.MZ', 3, '2021-06-09 05:00:27'),
(17, 'Njombe', 1, NULL, NULL, 'TZ.NJ', 5, '2021-06-09 05:00:27'),
(18, 'Pemba North', 1, NULL, NULL, 'TZ.PN', 2, '2021-06-09 05:00:27'),
(19, 'Pemba South', 1, NULL, NULL, 'TZ.PS', 2, '2021-06-09 05:00:27'),
(20, 'Pwani', 1, NULL, NULL, 'TZ.PW', 2, '2021-06-09 05:00:27'),
(21, 'Rukwa', 1, NULL, NULL, 'TZ.RU', 5, '2021-06-09 05:00:27'),
(22, 'Ruvuma', 1, NULL, NULL, 'TZ.RV', 6, '2021-06-09 05:00:27'),
(23, 'Shinyanga', 1, NULL, NULL, 'TZ.SY', 3, '2021-06-09 05:00:27'),
(24, 'Simiyu', 1, NULL, NULL, 'TZ.SI', 3, '2021-06-09 05:00:27'),
(25, 'Singida', 1, NULL, NULL, 'TZ.SD', 1, '2021-06-09 05:00:27'),
(26, 'Tabora', 1, NULL, NULL, 'TZ.TB', 1, '2021-06-09 05:00:27'),
(27, 'Tanga', 1, NULL, NULL, 'TZ.TN', 4, '2021-06-09 05:00:27'),
(28, 'Zanzibar North', 1, NULL, NULL, 'TZ.ZN', 2, '2021-06-09 05:00:27'),
(29, 'Zanzibar South and C', 1, NULL, NULL, 'TZ.ZS', 2, '2021-06-09 05:00:27'),
(30, 'Zanzibar West', 1, NULL, NULL, 'TZ.ZW', 2, '2021-06-09 05:00:27'),
(31, 'Songwe', 1, NULL, NULL, NULL, 5, '2021-06-09 05:00:27'),
(32, 'Unguja South', 1, NULL, NULL, NULL, 2, '2021-06-09 05:00:27'),
(33, 'Unguja North', 1, NULL, NULL, NULL, 2, '2021-06-09 05:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `nickname` varchar(200) NOT NULL,
  `hotspot` varchar(200) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `dob` varchar(100) NOT NULL,
  `age` int(20) NOT NULL,
  `file_no` varchar(100) NOT NULL,
  `uic` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `kvp_group` varchar(100) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `councils` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `city_id` int(11) NOT NULL,
  `council_name` varchar(30) NOT NULL,
  `council_type` varchar(30) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `councils`
--

INSERT INTO `councils` (`id`, `city_id`, `council_name`, `council_type`, `dt`) VALUES
(1, 1, 'Meru', 'DC', '2021-06-20 17:26:19'),
(2, 1, 'Arusha City', 'MC', '2021-06-20 17:26:19'),
(3, 1, 'Arusha District', 'DC', '2021-06-20 17:26:19'),
(4, 1, 'Karatu', 'DC', '2021-06-20 17:26:19'),
(5, 1, 'Longido', 'DC', '2021-06-20 17:26:19'),
(6, 1, 'Monduli', 'TC', '2021-06-20 17:26:19'),
(7, 1, 'Ngorongoro', 'DC', '2021-06-20 17:26:19'),
(8, 2, 'Ilala', 'MC', '2021-06-20 17:26:19'),
(9, 2, 'Kinondoni', 'MC', '2021-06-20 17:26:19'),
(10, 2, 'Temeke', 'MC', '2021-06-20 17:26:19'),
(11, 2, 'Kigamboni', 'MC', '2021-06-20 17:26:19'),
(12, 2, 'Ubungo', 'MC', '2021-06-20 17:26:19'),
(13, 3, 'Bahi', 'DC', '2021-06-20 17:26:19'),
(14, 3, 'Chamwino', 'DC', '2021-06-20 17:26:19'),
(15, 3, 'Chemba', 'DC', '2021-06-20 17:26:19'),
(16, 3, 'Dodoma Municipal', 'MC', '2021-06-20 17:26:19'),
(17, 3, 'Kondoa', 'DC', '2021-06-20 17:26:19'),
(18, 3, 'Kongwa', 'DC', '2021-06-20 17:26:19'),
(19, 3, 'Mpwapwa', 'TC', '2021-06-20 17:26:19'),
(20, 4, 'Bukombe', 'DC', '2021-06-20 17:26:19'),
(21, 4, 'Chato', 'DC', '2021-06-20 17:26:19'),
(22, 4, 'Geita Town Council & Geita Dis', 'DC', '2021-06-20 17:26:19'),
(23, 4, 'Mbogwe', 'DC', '2021-06-20 17:26:19'),
(24, 4, 'Nyang\'hwale', 'DC', '2021-06-20 17:26:19'),
(25, 5, 'Iringa District', 'DC', '2021-06-20 17:26:19'),
(26, 5, 'Iringa Municipal', 'MC', '2021-06-20 17:26:19'),
(27, 5, 'Kilolo', 'DC', '2021-06-20 17:26:19'),
(28, 5, 'Mafinga Town', 'TC', '2021-06-20 17:26:19'),
(29, 5, 'Mufindi', 'DC', '2021-06-20 17:26:19'),
(30, 6, 'Biharamulo', 'TC', '2021-06-20 17:26:19'),
(31, 6, 'Bukoba', 'DC', '2021-06-20 17:26:19'),
(32, 6, 'Bukoba Municipal', 'MC', '2021-06-20 17:26:19'),
(33, 6, 'Karagwe', 'DC', '2021-06-20 17:26:19'),
(34, 6, 'Kyerwa', 'DC', '2021-06-20 17:26:19'),
(35, 6, 'Missenyi', 'DC', '2021-06-20 17:26:19'),
(36, 6, 'Muleba', 'DC', '2021-06-20 17:26:19'),
(37, 6, 'Ngara', 'DC', '2021-06-20 17:26:19'),
(38, 7, 'Mlele', 'DC', '2021-06-20 17:26:19'),
(39, 7, 'Mpanda', 'DC', '2021-06-20 17:26:19'),
(40, 7, 'Mpanda Town', 'TC', '2021-06-20 17:26:19'),
(41, 8, 'Buhigwe', 'DC', '2021-06-20 17:26:19'),
(42, 8, 'Kakonko', 'TC', '2021-06-20 17:26:19'),
(43, 8, 'Kasulu District', 'DC', '2021-06-20 17:26:19'),
(44, 8, 'Kasulu Town', 'TC', '2021-06-20 17:26:19'),
(45, 8, 'Kibondo', 'TC', '2021-06-20 17:26:19'),
(46, 8, 'Kigoma District', 'DC', '2021-06-20 17:26:19'),
(47, 8, 'Kigoma-Ujiji Municipal', 'MC', '2021-06-20 17:26:19'),
(48, 8, 'Uvinza', 'DC', '2021-06-20 17:26:19'),
(49, 9, 'Hai', 'DC', '2021-06-20 17:26:19'),
(50, 9, 'Moshi District', 'DC', '2021-06-20 17:26:19'),
(51, 9, 'Moshi Municipal', 'MC', '2021-06-20 17:26:19'),
(52, 9, 'Mwanga', 'DC', '2021-06-20 17:26:19'),
(53, 9, 'Rombo', 'TC', '2021-06-20 17:26:19'),
(54, 9, 'Same', 'DC', '2021-06-20 17:26:19'),
(55, 9, 'Siha', 'DC', '2021-06-20 17:26:19'),
(56, 10, 'Kilwa', 'DC', '2021-06-20 17:26:19'),
(57, 10, 'Lindi District', 'DC', '2021-06-20 17:26:19'),
(58, 10, 'Lindi Municipal', 'MC', '2021-06-20 17:26:19'),
(59, 10, 'Liwale', 'TC', '2021-06-20 17:26:19'),
(60, 10, 'Nachingwea', 'DC', '2021-06-20 17:26:19'),
(61, 10, 'Ruangwa', 'TC', '2021-06-20 17:26:19'),
(62, 11, 'Babati Town', 'TC', '2021-06-20 17:26:19'),
(63, 11, 'Babati District', 'DC', '2021-06-20 17:26:19'),
(64, 11, 'Hanang', 'DC', '2021-06-20 17:26:19'),
(65, 11, 'Kiteto', 'TC', '2021-06-20 17:26:19'),
(66, 11, 'Mbulu', 'DC', '2021-06-20 17:26:19'),
(67, 11, 'Simanjiro', 'TC', '2021-06-20 17:26:19'),
(68, 12, 'Bunda', 'DC', '2021-06-20 17:26:19'),
(69, 12, 'Butiama', 'DC', '2021-06-20 17:26:19'),
(70, 12, 'Musoma District', 'DC', '2021-06-20 17:26:19'),
(71, 12, 'Musoma Municipal', 'TC', '2021-06-20 17:26:19'),
(72, 12, 'Rorya', 'DC', '2021-06-20 17:26:19'),
(73, 12, 'Serengeti', 'DC', '2021-06-20 17:26:19'),
(74, 12, 'Tarime', 'DC', '2021-06-20 17:26:19'),
(75, 13, 'Busokelo', 'TC', '2021-06-20 17:26:19'),
(76, 13, 'Chunya', 'DC', '2021-06-20 17:26:19'),
(77, 13, 'Kyela', 'DC', '2021-06-20 17:26:19'),
(78, 13, 'Mbarali', 'DC', '2021-06-20 17:26:19'),
(79, 13, 'Mbeya City', 'MC', '2021-06-20 17:26:19'),
(80, 13, 'Mbeya District', 'DC', '2021-06-20 17:26:19'),
(81, 13, 'Rungwe', 'DC', '2021-06-20 17:26:19'),
(82, 14, 'Gairo', 'DC', '2021-06-20 17:26:19'),
(83, 14, 'Kilombero', 'DC', '2021-06-20 17:26:19'),
(84, 14, 'Kilosa', 'DC', '2021-06-20 17:26:19'),
(85, 14, 'Morogoro District', 'DC', '2021-06-20 17:26:19'),
(86, 14, 'Morogoro Municipal', 'MC', '2021-06-20 17:26:19'),
(87, 14, 'Mvomero', 'DC', '2021-06-20 17:26:19'),
(88, 14, 'Ulanga', 'MC', '2021-06-20 17:26:19'),
(89, 15, 'Masasi District', 'DC', '2021-06-20 17:26:19'),
(90, 15, 'Masasi Town', 'TC', '2021-06-20 17:26:19'),
(91, 15, 'Mtwara District', 'DC', '2021-06-20 17:26:19'),
(92, 15, 'Mtwara Municipal', 'MC', '2021-06-20 17:26:19'),
(93, 15, 'Nanyumbu', 'DC', '2021-06-20 17:26:19'),
(94, 15, 'Newala', 'TC', '2021-06-20 17:26:19'),
(95, 15, 'Tandahimba', 'TC', '2021-06-20 17:26:19'),
(96, 16, 'Ilemela', 'DC', '2021-06-20 17:26:19'),
(97, 16, 'Kwimba', 'DC', '2021-06-20 17:26:19'),
(98, 16, 'Magu', 'DC', '2021-06-20 17:26:19'),
(99, 16, 'Misungwi', 'DC', '2021-06-20 17:26:19'),
(100, 16, 'Nyamagana', 'TC', '2021-06-20 17:26:19'),
(101, 16, 'Sengerema', 'TC', '2021-06-20 17:26:19'),
(102, 16, 'Ukerewe', 'DC', '2021-06-20 17:26:19'),
(103, 32, 'Kati', 'DC', '2021-06-20 17:26:19'),
(104, 32, 'Kusini', 'DC', '2021-06-20 17:26:19'),
(105, 30, 'Magharibi', 'DC', '2021-06-20 17:26:19'),
(106, 30, 'Mjini', 'DC', '2021-06-20 17:26:19'),
(107, 33, 'Kaskazini A', 'DC', '2021-06-20 17:26:19'),
(108, 33, 'Kaskazini B', 'DC', '2021-06-20 17:26:19'),
(109, 18, 'Micheweni', 'DC', '2021-06-20 17:26:19'),
(110, 18, 'Wete', 'DC', '2021-06-20 17:26:19'),
(111, 19, 'Chake Chake', 'DC', '2021-06-20 17:26:19'),
(112, 19, 'Mkoani', 'DC', '2021-06-20 17:26:19'),
(113, 17, 'Ludewa', 'DC', '2021-06-20 17:26:19'),
(114, 17, 'Makambako', 'TC', '2021-06-20 17:26:19'),
(115, 17, 'Makete', 'DC', '2021-06-20 17:26:19'),
(116, 17, 'Njombe District', 'DC', '2021-06-20 17:26:19'),
(117, 17, 'Njombe Town', 'TC', '2021-06-20 17:26:19'),
(118, 17, 'Wanging\'ombe', 'DC', '2021-06-20 17:26:19'),
(119, 20, 'Bagamoyo', 'MC', '2021-06-20 17:26:19'),
(120, 20, 'Kibaha District', 'DC', '2021-06-20 17:26:19'),
(121, 20, 'Kibaha Town', 'TC', '2021-06-20 17:26:19'),
(122, 20, 'Kisarawe', 'DC', '2021-06-20 17:26:19'),
(123, 20, 'Mafia', 'TC', '2021-06-20 17:26:19'),
(124, 20, 'Mkuranga', 'DC', '2021-06-20 17:26:19'),
(125, 20, 'Rufiji', 'TC', '2021-06-20 17:26:19'),
(126, 21, 'Kalambo', 'DC', '2021-06-20 17:26:19'),
(127, 21, 'Nkasi', 'DC', '2021-06-20 17:26:19'),
(128, 21, 'Sumbawanga District', 'DC', '2021-06-20 17:26:19'),
(129, 21, 'Sumbawanga Municipal', 'MC', '2021-06-20 17:26:19'),
(130, 22, 'Mbinga', 'DC', '2021-06-20 17:26:19'),
(131, 22, 'Songea District', 'DC', '2021-06-20 17:26:19'),
(132, 22, 'Songea Municipal', 'MC', '2021-06-20 17:26:19'),
(133, 22, 'Tunduru', 'DC', '2021-06-20 17:26:19'),
(134, 22, 'Namtumbo', 'DC', '2021-06-20 17:26:19'),
(135, 22, 'Nyasa', 'TC', '2021-06-20 17:26:19'),
(136, 24, 'Bariadi', 'DC', '2021-06-20 17:26:19'),
(137, 24, 'Busega', 'TC', '2021-06-20 17:26:19'),
(138, 24, 'Itilima', 'DC', '2021-06-20 17:26:19'),
(139, 24, 'Maswa', 'TC', '2021-06-20 17:26:19'),
(140, 24, 'Meatu', 'DC', '2021-06-20 17:26:19'),
(141, 25, 'Ikungi', 'DC', '2021-06-20 17:26:19'),
(142, 25, 'Iramba', 'DC', '2021-06-20 17:26:19'),
(143, 25, 'Manyoni', 'DC', '2021-06-20 17:26:19'),
(144, 25, 'Mkalama', 'DC', '2021-06-20 17:26:19'),
(145, 25, 'Singida District', 'DC', '2021-06-20 17:26:19'),
(146, 25, 'Singida Municipal', 'MC', '2021-06-20 17:26:19'),
(147, 26, 'Igunga', 'DC', '2021-06-20 17:26:19'),
(148, 26, 'Kaliua', 'DC', '2021-06-20 17:26:19'),
(149, 26, 'Nzega', 'DC', '2021-06-20 17:26:19'),
(150, 26, 'Sikonge', 'DC', '2021-06-20 17:26:19'),
(151, 26, 'Tabora Municipal', 'MC', '2021-06-20 17:26:19'),
(152, 26, 'Urambo', 'DC', '2021-06-20 17:26:19'),
(153, 26, 'Uyui', 'DC', '2021-06-20 17:26:19'),
(154, 27, 'Handeni District', 'DC', '2021-06-20 17:26:19'),
(155, 27, 'Handeni Town', 'TC', '2021-06-20 17:26:19'),
(156, 27, 'Kilindi', 'DC', '2021-06-20 17:26:19'),
(157, 27, 'Korogwe Town', 'TC', '2021-06-20 17:26:19'),
(158, 27, 'Korogwe District', 'DC', '2021-06-20 17:26:19'),
(159, 27, 'Lushoto', 'DC', '2021-06-20 17:26:19'),
(160, 27, 'Muheza', 'DC', '2021-06-20 17:26:19'),
(161, 27, 'Mkinga', 'DC', '2021-06-20 17:26:19'),
(162, 27, 'Pangani', 'DC', '2021-06-20 17:26:19'),
(163, 27, 'Tanga City', 'MC', '2021-06-20 17:26:19'),
(164, 23, 'Kahama Town', 'TC', '2021-06-20 17:26:19'),
(165, 23, 'Kahama District', 'DC', '2021-06-20 17:26:19'),
(166, 23, 'Kishapu', 'DC', '2021-06-20 17:26:19'),
(167, 23, 'Shinyanga District', 'DC', '2021-06-20 17:26:19'),
(168, 23, 'Shinyanga Municipal', 'MC', '2021-06-20 17:26:19'),
(169, 31, 'Songwe', 'DC', '2021-06-20 17:26:19'),
(170, 31, 'Mbozi', 'DC', '2021-06-20 17:26:19'),
(171, 31, 'Ileje', 'DC', '2021-06-20 17:26:19'),
(172, 31, 'Momba', 'DC', '2021-06-20 17:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `council_id` int(11) NOT NULL,
  `facility_code` int(100) DEFAULT NULL,
  `facility_name` varchar(250) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `council_id`, `facility_code`, `facility_name`, `updated_at`, `created_at`) VALUES
(1, 147, 0, 'Igunga Hospital - District Hospital', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(2, 147, 0, 'Simbo Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(3, 147, 0, 'Igurubi Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(4, 147, 0, 'Nanga Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(5, 147, 0, 'Choma Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(6, 147, 0, 'Itumba Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(7, 147, 0, 'Mwanzugi RC Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(8, 147, 0, 'Buhekela Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(9, 147, 0, 'Sungwizi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(10, 147, 0, 'Isakamaliwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(11, 147, 0, 'Mwamashimba Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(12, 147, 0, 'Itunduru Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(13, 147, 0, 'Chibiso Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(14, 147, 0, 'Ziba Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(15, 147, 0, 'Igoweko Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(16, 147, 0, 'Ndembezi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(17, 147, 0, 'Mwisi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(18, 147, 0, 'Kining\'inila Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(19, 147, 0, 'Mwalala Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(20, 147, 0, 'Kinungu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(21, 147, 0, 'Bulangamilwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(22, 147, 0, 'Ussongo RC Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(23, 147, 0, 'Ntobo Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(24, 147, 0, 'Igogo Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(25, 147, 0, 'Nkinga Hospital - Referral Hospital', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(26, 148, 0, 'Ulyankulu Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(27, 148, 0, 'Kaliua Mission Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(28, 148, 0, 'Kashishi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(29, 148, 0, 'Igagala Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(30, 148, 0, 'Igwisi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(31, 148, 0, 'Ukumbisiganga Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(32, 148, 0, 'Uyowa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(33, 148, 0, 'Mwongozo Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(34, 148, 0, 'Usinge Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(35, 148, 0, 'Sasu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(36, 148, 0, 'Kombe Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(37, 148, 0, 'Nsungwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(38, 148, 0, 'Kaliua govn Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(39, 148, 0, 'Tuombe Mungu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(40, 148, 0, 'Ichemba Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(41, 148, 0, 'Zugimlole Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(42, 148, 0, 'Igombe 56 Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(43, 148, 0, 'Kazaroho Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(44, 148, 0, 'Kilimawe Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(45, 148, 0, 'Seleli Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(46, 149, 0, 'Bukene Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(47, 149, 0, 'Busondo Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(48, 149, 0, 'Igusule Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(49, 149, 0, 'Ikindwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(50, 149, 0, 'Isagenhe Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(51, 149, 0, 'Itanana Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(52, 149, 0, 'Itobo Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(53, 149, 0, 'Kahama Nhalanga Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(54, 149, 0, 'Karitu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(55, 149, 0, 'Kasela Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(56, 149, 0, 'Lusu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(57, 149, 0, 'Mambali Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(58, 149, 0, 'Mbutu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(59, 149, 0, 'Mwamala Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(60, 149, 0, 'Mwangoye Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(61, 149, 0, 'Mwanhala Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(62, 149, 0, 'Nata Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(63, 149, 0, 'Ndala Hospital', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(64, 149, 0, 'Nkindu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(65, 149, 0, 'Nkiniziwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(66, 149, 0, 'Nzega Hospital - District Hospital', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(67, 149, 0, 'Shigamba Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(68, 149, 0, 'Shila Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(69, 149, 0, 'Sigili Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(70, 149, 0, 'Ubinga Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(71, 149, 0, 'Ugembe Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(72, 149, 0, 'Uhemeli Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(73, 149, 0, 'Zogolo Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(74, 149, 0, 'Miguwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(75, 149, 0, 'Samora Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(76, 149, 0, 'Mbogwe Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(77, 150, 0, 'Sikonge Hospital - Designated District Hospital', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(78, 150, 0, 'Kitunda Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(79, 150, 0, 'Ipole Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(80, 150, 0, 'Kipili Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(81, 150, 0, 'Mazinge Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(82, 150, 0, 'Pangale Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(83, 150, 0, 'Mibono Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(84, 150, 0, 'Usunga Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(85, 150, 0, 'Utimule Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(86, 150, 0, 'Usanganya Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(87, 150, 0, 'Igigwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(88, 150, 0, 'Kisanga Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(89, 150, 0, 'Sikonge Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(90, 150, 0, 'Nyahua Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(91, 150, 0, 'Majojoro Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(92, 150, 0, 'Tutuo Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(93, 151, 0, 'Kitete Hospital - Regional Referral Hospital', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(94, 151, 0, 'Tumbi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(95, 151, 0, 'Manoleo Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(96, 151, 0, 'Kakola Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(97, 151, 0, 'Cheyo Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(98, 151, 0, 'St Philipo Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(99, 151, 0, 'Ipuli Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(100, 151, 0, 'Town Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(101, 151, 0, 'Ikomwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(102, 151, 0, 'Ndevelwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(103, 151, 0, 'Itaga Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(104, 151, 0, 'Isevya Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(105, 151, 0, 'Ng\'ambo Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(106, 151, 0, 'Kiloleni Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(107, 152, 0, 'Urambo Hospital - District Hospital', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(108, 152, 0, 'Ussoke Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(109, 152, 0, 'Vumilia Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(110, 152, 0, 'Songambele Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(111, 152, 0, 'Jionee Mwenyewe Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(112, 152, 0, 'Izimbili Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(113, 152, 0, 'Igunguli Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(114, 152, 0, 'Usisya Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(115, 152, 0, 'Uyogo Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(116, 152, 0, 'Itebulanda Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(117, 152, 0, 'Kamsekwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(118, 152, 0, 'Kamalendi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(119, 153, 0, 'Ilolangulu Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(120, 153, 0, 'Goweko Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(121, 153, 0, 'Ishihimulwa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(122, 153, 0, 'Kigwa B Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(123, 153, 0, 'Ufuluma Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(124, 153, 0, 'Lutende Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(125, 153, 0, 'Miswaki Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(126, 153, 0, 'Tura Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(127, 153, 0, 'Upuge Health Center', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(128, 153, 0, 'Kizengi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(129, 153, 0, 'Loya Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(130, 153, 0, 'Ibiri Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(131, 153, 0, 'Isikizya Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(132, 153, 0, 'Nzubuka Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(133, 153, 0, 'Shitage Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(134, 153, 0, 'Makazi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(135, 153, 0, 'Ndono Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(136, 153, 0, 'Miyenze Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(137, 147, 0, 'Uswaya Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(138, 148, 0, 'Kangeme Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(139, 148, 0, 'Kasimana Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(140, 148, 0, 'Mpandamlowoka Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(141, 148, 0, 'Nhwande Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(142, 148, 0, 'Nyasa Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(143, 148, 0, 'Usinga Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(144, 149, 0, 'Semembela Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(145, 151, 0, 'Maili tano Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(146, 153, 0, 'Bukumbi Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(147, 153, 0, 'Mabama Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(148, 153, 0, 'Magiri Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23'),
(149, 153, 0, 'Mwisole Dispensary', '2021-06-20 20:45:23', '2021-06-20 20:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(10) NOT NULL,
  `is_active` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `visits` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `uic` varchar(100) DEFAULT NULL,
  `mahali` varchar(250) DEFAULT NULL,
  `tarehe_ya_hudhurio` varchar(250) DEFAULT NULL,
  `aina_ya_hudhurio` varchar(250) DEFAULT NULL,
  `amepima_na_kupewa_majibu` varchar(250) DEFAULT NULL,
  `ameandikishwa_ctc` varchar(250) DEFAULT NULL,
  `hali_ya_PrEP_mahudhurio` varchar(250) DEFAULT NULL,
  `kisukari` varchar(250) DEFAULT NULL,
  `shinikizo_la_damu` varchar(250) DEFAULT NULL,
  `ugonjwa_wa_figo` varchar(250) DEFAULT NULL,
  `ugonjwa_wa_ini` varchar(250) DEFAULT NULL,
  `dawa_za_kuathiri_figo` varchar(250) DEFAULT NULL,
  `CrCl` varchar(250) DEFAULT NULL,
  `umri_15_35kg` varchar(250) DEFAULT NULL,
  `dalili_za_maambukizi_ya_VVU` varchar(250) DEFAULT NULL,
  `anastahili_kutumia_PrEP` varchar(250) DEFAULT NULL,
  `aina_ya_dawa_PrEP_aliyopewa` varchar(250) DEFAULT NULL,
  `namba_ya_vidonge_alivyopewa` varchar(250) DEFAULT NULL,
  `sababu_za_kumwachisha_PrEP` varchar(250) DEFAULT NULL,
  `matumizi_ya_PrEP` varchar(250) DEFAULT NULL,
  `sababu_za_ufuasi_hafifu` varchar(250) DEFAULT NULL,
  `kuchunguzwa_magonjwa_ya_ngono` varchar(250) DEFAULT NULL,
  `ametibiwa_magonjwa_ya_ngono` varchar(250) DEFAULT NULL,
  `madhara_ya_PrEP` varchar(250) DEFAULT NULL,
  `huduma_nyingine_alizopewa` varchar(250) DEFAULT NULL,
  `tarehe_ya_hudhurio_lijalo` varchar(250) DEFAULT NULL,
  `jina_la_mtoa_huduma` varchar(250) DEFAULT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Updated Scripts 


ALTER TABLE `users` ADD COLUMN firstname varchar(100)  NULL;
ALTER TABLE `users` ADD COLUMN middlename varchar(100)  NULL;
ALTER TABLE `users` ADD COLUMN lastname varchar(100)  NULL;
ALTER TABLE `users` ADD COLUMN phone varchar(100)  NULL;

ALTER TABLE `users` ADD COLUMN email varchar(100)  NULL;


ALTER TABLE `users` ADD COLUMN gender varchar(100)  NULL;


ALTER TABLE `users` ADD COLUMN facility varchar(100)  NULL;


CREATE TABLE `providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
 `phone` varchar(100) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` varchar(100) NOT NULL,
  `age` int(20) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

