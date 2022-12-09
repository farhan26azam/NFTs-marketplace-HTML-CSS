-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2022 at 10:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptex`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `account_ID` varchar(30) COLLATE utf32_bin NOT NULL,
  `name` varchar(255) COLLATE utf32_bin NOT NULL,
  `email` varchar(255) COLLATE utf32_bin NOT NULL,
  `password` varchar(255) COLLATE utf32_bin NOT NULL,
  `cc_no` bigint(100) NOT NULL,
  `cc_cvv` int(11) NOT NULL,
  `NFTs_owned` int(11) NOT NULL DEFAULT 0,
  `account_credit` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`account_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_ID`, `name`, `email`, `password`, `cc_no`, `cc_cvv`, `NFTs_owned`, `account_credit`) VALUES
('dipp97', 'dippiestash', 'dippie@gmail.com', '123', 4326548725761634, 233, 0, 0),
('team48', 'teamazuki', 'teamazuki@gmail.com', '456', 4098245398704675, 511, 0, 0),
('team35', 'teamkpr', 'teamkpr@gmail.com', '789', 2154365298567854, 295, 0, 0),
('fe7155', 'fe71', 'fe71@gmail.com', '321', 987789065433456, 876, 0, 0),
('drea80', 'dreamydeployer', 'dreamydeployer@gmail.com', '098', 192837465019283, 286, 0, 0),
('dori76', 'dori_deployer', 'dori_deployer@gmail.com', '888', 8907876356209243, 111, 0, 0),
('A87412', 'A874AA', 'A874AA@gmail.com', '454', 3984723098914738, 222, 0, 0),
('weas87', 'weasuki', 'weasuki@gmail.com', '852', 5489652498763574, 956, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nfts`
--

DROP TABLE IF EXISTS `nfts`;
CREATE TABLE IF NOT EXISTS `nfts` (
  `id` varchar(10) COLLATE utf32_bin NOT NULL,
  `name` varchar(50) COLLATE utf32_bin NOT NULL,
  `type` varchar(50) COLLATE utf32_bin NOT NULL,
  `price` int(5) NOT NULL,
  `creation_date` date NOT NULL,
  `owner_name` varchar(50) COLLATE utf32_bin NOT NULL,
  `project_name` varchar(50) COLLATE utf32_bin NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `nfts`
--

INSERT INTO `nfts` (`id`, `name`, `type`, `price`, `creation_date`, `owner_name`, `project_name`) VALUES
('#239', 'dippies #239', 'cartoon', 99, '2022-03-01', 'dippiestash', 'dippies'),
('#531', 'dippies #531', 'cartoon', 95, '2022-03-02', 'dippiestash', 'dippies'),
('#841', 'dippies #841', 'cartoon', 92, '2022-03-03', 'dippiestash', 'dippies'),
('#8413', 'dippies #8413', 'cartoon', 98, '2022-03-04', 'dippiestash', 'dippies'),
('#8429', 'dippies #8429', 'cartoon', 90, '2022-03-05', 'dippiestash', 'dippies'),
('#8498', 'dippies #8498', 'cartoon', 95, '2022-03-06', 'dippiestash', 'dippies'),
('#7233', 'dippies #7233', 'cartoon', 83, '2022-03-07', 'dippiestash', 'dippies'),
('#3760', 'dippies #3760', 'cartoon', 89, '2022-03-08', 'dippiestash', 'dippies'),
('#480', 'beanz #480', 'species', 1054, '2022-03-01', 'teamazuki', 'beanz'),
('#3171', 'beanz #3171', 'species', 541, '2022-03-02', 'teamazuki', 'beanz'),
('#4564', 'beanz #4564', 'species', 300, '2022-03-03', 'teamazuki', 'beanz'),
('#5275', 'beanz #5275', 'species', 750, '2022-03-04', 'teamazuki', 'beanz'),
('#11607', 'beanz #11607', 'species', 210, '2022-03-05', 'teamazuki', 'beanz'),
('#12459', 'beanz #12459', 'species', 220, '2022-03-06', 'teamazuki', 'beanz'),
('#15235', 'beanz #15235', 'species', 874, '2022-03-07', 'teamazuki', 'beanz'),
('#15745', 'beanz #15745', 'species', 652, '2022-03-08', 'teamazuki', 'beanz'),
('#100', 'cryptokitties #100', 'breedables', 30, '2017-11-01', 'A874AA', 'cryptokitties'),
('#200', 'cryptokitties #200', 'breedables', 26, '2017-11-02', 'A874AA', 'cryptokitties'),
('#300', 'cryptokitties #300', 'breedables', 87, '2017-11-03', 'A874AA', 'cryptokitties'),
('#400', 'cryptokitties #400', 'breedables', 65, '2017-11-04', 'A874AA', 'cryptokitties'),
('#500', 'cryptokitties #500', 'breedables', 41, '2017-11-05', 'A874AA', 'cryptokitties'),
('#600', 'cryptokitties #600', 'breedables', 77, '2017-11-06', 'A874AA', 'cryptokitties'),
('#700', 'cryptokitties #700', 'breedables', 19, '2017-11-07', 'A874AA', 'cryptokitties'),
('#800', 'cryptokitties #800', 'breedables', 45, '2017-11-08', 'A874AA', 'cryptokitties'),
('#2046', 'keeper #2046', 'art', 398, '2022-11-01', 'teamkpr', 'keeper'),
('#3527', 'keeper #3527', 'art', 410, '2022-11-02', 'teamkpr', 'keeper'),
('#4687', 'keeper #4687', 'art', 400, '2022-11-03', 'teamkpr', 'keeper'),
('#5767', 'keeper #5767', 'art', 652, '2022-11-04', 'teamkpr', 'keeper'),
('#6553', 'keeper #6553', 'art', 210, '2022-11-05', 'teamkpr', 'keeper'),
('#8723', 'keeper #8723', 'art', 248, '2022-11-06', 'teamkpr', 'keeper'),
('#9731', 'keeper #9731', 'art', 784, '2022-11-07', 'teamkpr', 'keeper'),
('#9906', 'keeper #9906', 'art', 325, '2022-11-08', 'teamkpr', 'keeper'),
('#637', 'pancake #637', 'cartoon', 7, '2022-08-01', 'fe71', 'pancake'),
('#1000', 'pancake #1000', 'cartoon', 8, '2022-08-02', 'fe71', 'pancake'),
('#1016', 'pancake #1016', 'cartoon', 18, '2022-08-03', 'fe71', 'pancake'),
('#1026', 'pancake #1026', 'cartoon', 14, '2022-08-04', 'fe71', 'pancake'),
('#1490', 'pancake #1490', 'cartoon', 10, '2022-08-05', 'fe71', 'pancake'),
('#3910', 'pancake #3910', 'cartoon', 5, '2022-08-06', 'fe71', 'pancake'),
('#4683', 'pancake #4683', 'cartoon', 3, '2022-08-07', 'fe71', 'pancake'),
('#9868', 'pancake #9868', 'cartoon', 17, '2022-08-08', 'fe71', 'pancake'),
('#298', 'dreamy #298', 'adventure', 100, '2022-11-01', 'dreamydeployer', 'dreamy'),
('#1002', 'dreamy #1002', 'adventure', 152, '2022-11-02', 'dreamydeployer', 'dreamy'),
('#1579', 'dreamy #1579', 'adventure', 145, '2022-11-03', 'dreamydeployer', 'dreamy'),
('#3305', 'dreamy #3305', 'adventure', 148, '2022-11-04', 'dreamydeployer', 'dreamy'),
('#3838', 'dreamy #3838', 'adventure', 321, '2022-11-05', 'dreamydeployer', 'dreamy'),
('#3945', 'dreamy #3945', 'adventure', 159, '2022-11-06', 'dreamydeployer', 'dreamy'),
('#4562', 'dreamy #4562', 'adventure', 146, '2022-11-07', 'dreamydeployer', 'dreamy'),
('#5112', 'dreamy #5112', 'adventure', 187, '2022-11-08', 'dreamydeployer', 'dreamy'),
('#5', 'weasuki #5', 'anime', 132, '2021-11-05', 'weasuki', 'weasuki'),
('#6', 'weasuki #6', 'anime', 149, '2021-11-06', 'weasuki', 'weasuki'),
('#1', 'weasuki #1', 'anime', 125, '2021-11-01', 'weasuki', 'weasuki'),
('#2', 'weasuki #2', 'anime', 148, '2021-11-02', 'weasuki', 'weasuki'),
('#3', 'weasuki #3', 'anime', 154, '2021-11-03', 'weasuki', 'weasuki'),
('#4', 'weasuki #4', 'anime', 169, '2021-11-04', 'weasuki', 'weasuki'),
('#10', 'samurai #10', 'art', 652, '2022-12-01', 'dori_deployer', 'samurai'),
('#20', 'samurai #20', 'art', 649, '2022-12-02', 'dori_deployer', 'samurai'),
('#30', 'samurai #30', 'art', 642, '2022-12-03', 'dori_deployer', 'samurai'),
('#40', 'samurai #40', 'art', 615, '2022-12-04', 'dori_deployer', 'samurai'),
('#50', 'samurai #50', 'art', 698, '2022-12-05', 'dori_deployer', 'samurai'),
('#60', 'samurai #60', 'art', 648, '2022-12-06', 'dori_deployer', 'samurai'),
('#70', 'samurai #70', 'art', 598, '2022-12-07', 'dori_deployer', 'samurai'),
('#80', 'samurai #80', 'art', 547, '2022-12-08', 'dori_deployer', 'samurai'),
('#7', 'weasuki #7', 'anime', 147, '2021-11-07', 'weasuki', 'weasuki'),
('#8', 'weasuki #8', 'anime', 164, '2021-11-08', 'weasuki', 'weasuki');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `pname` varchar(50) COLLATE utf32_bin NOT NULL,
  `launch_date` date NOT NULL,
  `cname` varchar(50) COLLATE utf32_bin NOT NULL,
  `oname` varchar(50) COLLATE utf32_bin NOT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pname`, `launch_date`, `cname`, `oname`) VALUES
('Dippies', '2022-03-01', 'dippiestash', 'dippiestash'),
('Beanz', '2022-03-01', 'teamazuki', 'teamazuki'),
('Keeper', '2022-03-01', 'teamkpr', 'teamkpr'),
('Pancake', '2022-08-01', 'fe71', 'fe71'),
('Dreamy', '2022-11-01', 'dreamydeployer', 'dreamydeployer'),
('Samurai', '2022-12-01', 'dori_deployer', 'dori_deployer'),
('Cryptokitties', '2017-11-01', 'A874AA', 'A874AA'),
('Weasuki', '2021-11-01', 'weasuki', 'weasuki');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
