-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2022 at 02:09 PM
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
('dipp97', 'dippiestash', 'dippie@gmail.com', '123', 4326548725761634, 233, 0, 0);

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
('#15745', 'beanz #15745', 'species', 652, '2022-03-08', 'teamazuki', 'beanz');

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
('Pancake', '2022-08-01', '29fe71', '29fe71'),
('Dreamy', '2022-11-01', 'dreamydeployer', 'dreamydeployer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
