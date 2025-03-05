-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2023 at 04:20 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(10) NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `cpassword`) VALUES
('admin', 'admin@gmail.com', 'admin1234', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

DROP TABLE IF EXISTS `booktable`;
CREATE TABLE IF NOT EXISTS `booktable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `arrivedate` date NOT NULL,
  `arrivetime` time NOT NULL,
  `npeople` int NOT NULL,
  `coffeename` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fname` (`fname`,`lname`,`pnumber`,`email`,`arrivedate`,`arrivetime`,`npeople`,`coffeename`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `fname`, `lname`, `pnumber`, `email`, `arrivedate`, `arrivetime`, `npeople`, `coffeename`) VALUES
(1, 'sasa', 'qsqs', '1212', 'qaz@sas', '0121-12-12', '02:12:00', 1212, ''),
(2, 'aas', 'asas', '1212', 'asa@asas', '0212-11-21', '23:21:00', 121, ''),
(3, 'asas', 'asas', '2121', 'ss@asas', '0012-02-12', '00:12:00', 212, ''),
(4, 'redmi', 'k20', '2147483647', 'redmi@gmail.com', '2023-04-02', '07:41:00', 2, ''),
(5, 'salman', 'khan', '2147483647', 'salman@gmail.com', '2023-04-18', '23:17:00', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'shaikh', 'skimran740434@gmail.', 'hello my name is imran'),
(2, 'imran', 'sk@gmai.com', 'hii'),
(3, 'fazal', 'fazal@gmail.com', 'hello'),
(4, 'shahebaj', 'shahebaj@gmail.com', 'hey'),
(5, 'ayan', 'ayan@gmail.com', 'whats up'),
(6, 'shahrukh', 'shahrukh@gmail.com', 'how are you!'),
(7, 'shahrukh', 'shahrukh@gmail.com', 'how are you!'),
(8, 'shahrukh', 'shahrukh@gmail.com', 'how are you!'),
(9, 'shamsh', 'shamsh@gmail.com', 'kay hal chal'),
(10, 'shamsh', 'shamsh@gmail.com', 'kay hal chal'),
(11, 'shamsh', 'shamsh@gmail.com', 'kay hal chal');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lname` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mobil` varchar(10) NOT NULL,
  `address1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `zip` int NOT NULL,
  `pname` varchar(10) NOT NULL,
  `pprice` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `fname`, `lname`, `email`, `mobil`, `address1`, `address2`, `city`, `state`, `zip`, `pname`, `pprice`) VALUES
(1, 'shaikh', 'imran', 'skimran740434@gmail.com', '7558305059', 'At Post Belkhed', 'T. Telhara', 'Akola', 'Maharsatra', 444104, 'Nescafe', 150),
(2, 'Shahebaj ', 'Pathan', 'shahebaj1234@gmail.com', '7558305059', 'At Post Belkhed', 'T akola', 'Akola', 'Maharastra', 444109, 'Continelta', 195),
(3, 'Shaikh ', 'Fazal', 'shaikhfazal@gmail.com', '7558305059', 'At Post Belkhed', 'Telhara', 'Akola', 'Maharastra', 444108, 'BRU', 292),
(4, 'Natwar', 'Bhatt', 'natwarbharr@gmail.com', '7558305059', 'At Post Belkhed', 'balapur', 'akola', 'maharstra', 444110, 'Devil', 150),
(5, 'shahruk', 'khan', 'shahruk1234@gmail.com', '7558305059', 'At Post Belkhed', 'Akot', 'Akola', 'Maharsatra', 444108, 'cold', 150),
(6, 'Mattie', 'Cole', 'cole@gmail.com', '7558305059', 'At Post Belkhed', 'Shegaon', 'Buldana', 'maharsatra', 444201, 'iced', 150);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`email`,`password`,`cpassword`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'shaikh', 'skimran@gmail.com', 'skimran', 'skimran'),
(2, 'sk', 'sk@gmail.com', 'sk', 'sk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
