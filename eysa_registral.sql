-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 10:36 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eysa_registral`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, 2008, 1000, 1050, 50),
(2, 2009, 2000, 2200, 200),
(3, 2010, 5000, 6500, 1500),
(4, 2011, 6500, 6800, 200),
(5, 2012, 4000, 4000, 0),
(6, 2013, 3000, 7000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dep_id` int(20) NOT NULL,
  `dep_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`) VALUES
(1, 'Athletics_Jumping'),
(2, 'Athletics_Throwing'),
(3, 'Athletics_Running_Short_distance'),
(4, 'Athletics_Running_Long_distance'),
(5, 'Athletics_Running_Midle_distance'),
(6, 'Athletics_Running_Steeple_chease'),
(7, 'Basket_ball'),
(8, 'Bickle'),
(9, 'Box'),
(10, 'Table_tannis'),
(11, 'Football_u_15'),
(12, 'Football_u_17'),
(13, 'Football_u_19'),
(14, 'Football_u_21'),
(15, 'Swimming'),
(16, 'Volly_ball'),
(17, 'World_taekwondo');

-- --------------------------------------------------------

--
-- Table structure for table `forgraph`
--

CREATE TABLE `forgraph` (
  `stud_id` int(11) NOT NULL,
  `Anthropometric` int(11) NOT NULL,
  `Phy_Fit_T` int(11) NOT NULL,
  `Passing_for_1_mints` int(11) NOT NULL,
  `Dribbling` int(11) NOT NULL,
  `Shooting` int(11) NOT NULL,
  `test_num` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgraph`
--

INSERT INTO `forgraph` (`stud_id`, `Anthropometric`, `Phy_Fit_T`, `Passing_for_1_mints`, `Dribbling`, `Shooting`, `test_num`, `total`) VALUES
(1, 9, 20, 10, 6, 10, 1, 70),
(1, 8, 25, 10, 8, 10, 2, 80),
(1, 8, 25, 10, 6, 10, 3, 90);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `stud_id` int(255) NOT NULL,
  `ga` varchar(255) NOT NULL,
  `bl_pr` varchar(20) NOT NULL,
  `pulse` int(20) NOT NULL,
  `temp` int(20) NOT NULL,
  `r_r` int(20) NOT NULL,
  `height` int(20) NOT NULL,
  `weight` int(20) NOT NULL,
  `bms` int(20) NOT NULL,
  `leg_len` int(20) NOT NULL,
  `s_h` int(20) NOT NULL,
  `a_s` int(20) NOT NULL,
  `rbs` int(20) NOT NULL,
  `hgs` int(20) NOT NULL,
  `u_a` int(20) NOT NULL,
  `hepatitis` varchar(10) NOT NULL,
  `blood_g` varchar(20) NOT NULL,
  `head` varchar(20) NOT NULL,
  `R_aye` varchar(20) NOT NULL,
  `L_aye` varchar(20) NOT NULL,
  `R_ear` varchar(20) NOT NULL,
  `L_ear` varchar(20) NOT NULL,
  `cvs` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `gis` varchar(20) NOT NULL,
  `gus` varchar(20) NOT NULL,
  `mss` varchar(20) NOT NULL,
  `nuro_ex` varchar(20) NOT NULL,
  `explanation` varchar(255) NOT NULL,
  `hTest_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`stud_id`, `ga`, `bl_pr`, `pulse`, `temp`, `r_r`, `height`, `weight`, `bms`, `leg_len`, `s_h`, `a_s`, `rbs`, `hgs`, `u_a`, `hepatitis`, `blood_g`, `head`, `R_aye`, `L_aye`, `R_ear`, `L_ear`, `cvs`, `chest`, `gis`, `gus`, `mss`, `nuro_ex`, `explanation`, `hTest_num`) VALUES
(1, 'Well looking', '3', 32, 23, 23, 23, 23, 23, 32, 32, 23, 23, 23, 23, 'B+', 'A-', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'jlajlfajfl ppfjpafp pfpafapfoaf', 1),
(1, '0', '120', 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 42, 24, 'B+', 'A-', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'jhtrtferwegw', 2),
(1, 'Well looking', '13', 31, 3, 13, 31, 13, 31, 31, 3, 1, 13, 31, 13, 'B+', 'A+', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'uyjhtgrfe tewr', 3),
(1, 'Well looking', '3', 3, 31, 13, 13, 13, 13, 13, 13, 13, 31, 13, 13, 'B+', 'A+', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'jhergrge eewgregw', 4),
(1, '0', '120', 24, 4241, 413, 421, 41, 4, 4, 41, 41, 41, 41, 41, 'B+', 'A-', 'Normal', 'Normal', 'Abnormal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'lkfjlj ljljflaj ljljerlq', 5),
(1, '0', '120', 321, 41, 41, 14, 4, 4, 41, 43, 43, 41, 43, 31, 'B+', 'A-', 'Normal', 'Normal', 'Normal', 'Normal', 'Abnormal', 'Normal', 'Normal', 'Normal', 'Normal', 'Abnormal', 'Normal', '41444kjljlsfj ljlfjljerq', 6),
(1, 'Well looking', '3', 24, 342, 342, 234, 42, 42, 42, 24, 24, 42, 42, 4, 'B+', 'A-', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'rqrqrq qrrrreqr', 7),
(1, 'Well looking', '34', 32, 432, 42, 24, 42, 42, 432, 42, 24, 243, 42, 24, 'B+', 'A+', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'jlfj ajlkfjlajf', 8),
(2, 'Well looking', '1', 2, 23, 32, 23, 3, 32, 23, 32, 32, 23, 32, 23, 'B+', 'A+', 'Normal', 'Normal', 'Normal', 'Abnormal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'health', 1),
(2, 'Well looking', '1', 2, 23, 32, 23, 3, 32, 23, 32, 32, 23, 32, 23, 'B+', 'A+', 'Normal', 'Normal', 'Normal', 'Abnormal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'health', 1);

-- --------------------------------------------------------

--
-- Table structure for table `relative_addis`
--

CREATE TABLE `relative_addis` (
  `stud_id` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phon_num` int(20) NOT NULL,
  `sub_city` varchar(50) NOT NULL,
  `kebele` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relative_addis`
--

INSERT INTO `relative_addis` (`stud_id`, `full_name`, `phon_num`, `sub_city`, `kebele`) VALUES
('1', 'ggg', 44444, 'gggg', '44'),
('10', 'hfjhgfj', 2552, 'khkh', '10'),
('11', 'gggg', 789465, 'ffff', '10'),
('13', 'hkhk', 789465, 'hkjh', '10'),
('14', 'hkhk', 789465, 'hkjh', '10'),
('15', 'hkhk', 789465, 'hkjh', '10'),
('16', 'hkhk', 789465, 'hkjh', '10'),
('17', 'hkhk', 789465, 'hkjh', '10'),
('2', 'ffff ffff', 4444, 'ffff', '455'),
('20', 'ffff ffff', 454545, 'khkh', '12'),
('21', 'gggg', 789465, 'ffff', '10'),
('23', 'gggg', 789465, 'ffff', '10'),
('3', 'ffff ffff', 225, 'jhj', '12'),
('30', 'Tal Yariv', 547077703, 'Pardes Hanna-Karkur', '112'),
('4', 'hfjhgfj', 2552, 'khkh', '10'),
('44', '122', 547077703, 'Pardes Hanna-Karkur', '112'),
('45', 'Tal Yariv', 547077703, 'Pardes Hanna-Karkur', '112'),
('5', 'hfjhgfj', 2552, 'khkh', '10'),
('6', 'hfjhgfj', 2552, 'khkh', '10'),
('7', 'hfjhgfj', 2552, 'khkh', '10'),
('8', 'hfjhgfj', 2552, 'khkh', '10'),
('9', 'hfjhgfj', 2552, 'khkh', '10');

-- --------------------------------------------------------

--
-- Table structure for table `relative_home_address`
--

CREATE TABLE `relative_home_address` (
  `stud_id` varchar(25) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phon_num` int(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `wereda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relative_home_address`
--

INSERT INTO `relative_home_address` (`stud_id`, `full_name`, `phon_num`, `region`, `zone`, `wereda`) VALUES
('1', 'ggg', 4444, 'gggg', 'gggg', '44'),
('10', 'kkkkkk', 84653120, 'gjkhkj', 'khkjhk', '25522'),
('11', 'gggg', 79777, 'gjkhkj', 'khkjhk', '25522'),
('13', 'ggg', 978465, 'ok', 'kjk', 'jk'),
('14', 'ggg', 978465, 'ok', 'kjk', 'jk'),
('15', 'ggg', 978465, 'ok', 'kjk', 'jk'),
('16', 'ggg', 978465, 'ok', 'kjk', 'jk'),
('17', 'ggg', 978465, 'ok', 'kjk', 'jk'),
('2', 'ffff', 4444, 'fffff', 'ffff', 'ffff'),
('20', 'gggg', 789645, 'fffff', '10', '12'),
('21', 'gggg ffff', 7977712, 'gjkhkjh', 'khkjhk', '2552223'),
('23', 'gggg ffff', 7977712, 'gjkhkjh', 'khkjhk', '2552223'),
('3', 'gggg', 255, 'or', 'ada', '03'),
('30', 'Tal Yariv', 547077703, 'Haifa District', 'xdad', '2'),
('4', 'kkkkkk', 84653120, 'gjkhkj', 'khkjhk', '25522'),
('44', 'sfsf sffs sfsf', 547077703, 'Haifa District', 'xdad', '2'),
('45', 'Tal Yariv', 547077703, 'Haifa District', 'xdad', '2'),
('5', 'kkkkkk', 84653120, 'gjkhkj', 'khkjhk', '25522'),
('6', 'kkkkkk', 84653120, 'gjkhkj', 'khkjhk', '25522'),
('7', 'kkkkkk', 84653120, 'gjkhkj', 'khkjhk', '25522'),
('8', 'kkkkkk', 84653120, 'gjkhkj', 'khkjhk', '25522'),
('9', 'kkkkkk', 84653120, 'gjkhkj', 'khkjhk', '25522');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `se_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`se_id`, `semester`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` int(25) NOT NULL,
  `semester` int(11) NOT NULL,
  `attendance` int(10) NOT NULL,
  `injury` int(10) NOT NULL,
  `motivation` int(10) NOT NULL,
  `respect` int(10) NOT NULL,
  `discipline` int(10) NOT NULL,
  `evaluation` int(10) NOT NULL,
  `computition_review` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `semester`, `attendance`, `injury`, `motivation`, `respect`, `discipline`, `evaluation`, `computition_review`, `total`) VALUES
(2, 1, 10, 10, 20, 10, 20, 10, 40, 100),
(2, 2, 10, 10, 10, 10, 20, 10, 40, 100),
(2, 3, 10, 10, 10, 10, 20, 10, 40, 100),
(2, 4, 10, 10, 10, 10, 20, 10, 40, 100),
(2, 5, 10, 10, 10, 10, 20, 10, 40, 100),
(2, 6, 10, 10, 10, 10, 20, 10, 40, 100),
(2, 7, 10, 10, 10, 10, 20, 10, 40, 100),
(2, 8, 10, 10, 10, 10, 20, 10, 40, 100),
(1, 1, 10, 10, 2, 2, 2, 2, 2, 30),
(1, 2, 10, 10, 2, 2, 2, 2, 2, 30),
(1, 3, 10, 10, 2, 2, 2, 2, 2, 30),
(1, 4, 10, 10, 2, 2, 2, 2, 2, 30),
(1, 5, 10, 10, 2, 2, 2, 2, 2, 30),
(1, 6, 10, 10, 2, 2, 2, 2, 2, 30),
(1, 7, 10, 10, 2, 2, 2, 2, 2, 30),
(1, 8, 10, 10, 2, 2, 2, 2, 2, 30),
(3, 1, 10, 10, 10, 10, 20, 10, 40, 100),
(3, 2, 10, 10, 10, 10, 20, 10, 40, 100),
(3, 3, 10, 10, 10, 10, 20, 10, 40, 100),
(3, 4, 10, 10, 10, 10, 20, 10, 40, 100),
(3, 5, 10, 10, 10, 10, 20, 10, 40, 100),
(3, 6, 10, 10, 10, 10, 20, 10, 40, 100),
(3, 7, 10, 10, 10, 10, 20, 10, 40, 100),
(3, 8, 10, 10, 10, 10, 20, 10, 40, 100),
(10, 1, 10, 10, 10, 10, 20, 10, 40, 100),
(10, 2, 10, 10, 10, 10, 20, 10, 40, 100),
(10, 3, 10, 10, 10, 10, 20, 10, 40, 100),
(10, 4, 10, 10, 10, 10, 20, 10, 40, 100),
(13, 1, 10, 10, 5, 5, 10, 20, 40, 100),
(13, 2, 10, 10, 5, 5, 10, 15, 35, 90),
(13, 3, 5, 5, 5, 5, 1, 20, 35, 76),
(13, 4, 5, 5, 5, 5, 5, 5, 5, 35),
(13, 5, 5, 5, 5, 5, 5, 5, 5, 35);

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

CREATE TABLE `student_address` (
  `stud_id` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `sub_city` varchar(50) NOT NULL,
  `wereda` varchar(50) NOT NULL,
  `kebele` varchar(50) NOT NULL,
  `po_box` varchar(20) NOT NULL,
  `phon_num` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_address`
--

INSERT INTO `student_address` (`stud_id`, `region`, `sub_city`, `wereda`, `kebele`, `po_box`, `phon_num`) VALUES
('1', 'gg', 'ggg', '44', '44', '444', 44),
('10', 'kkk', 'kkkk', '10', '10', '225555', 896451320),
('11', 'or', 'fff', 'ggg', '45', '225555', 4614444),
('13', 'kkk', 'kkkk', '23', '34', 'ffff', 8456132),
('14', 'kkk', 'kkkk', '23', '34', 'ffff', 8456132),
('15', 'kkk', 'kkkk', '23', '34', 'ffff', 8456132),
('16', 'kkk', 'kkkk', '23', '34', 'ffff', 8456132),
('17', 'kkk', 'kkkk', '23', '34', 'ffff', 8456132),
('2', 'fff', 'fff', '23', '444', '4455', 22),
('20', 'kkk', 'kkkk', '10', 'ffff', '225555', 897645123),
('21', 'or', 'fff', 'ggg', '45', '225555', 4614444),
('23', 'or', 'fff', 'ggg', '45', '225555', 4614444),
('3', 'or', 'kk', '03', '45', '444444', 122),
('30', 'Haifa District', 'Pardes Hanna-Karkur', '23', '23', '3750956', 547077703),
('4', 'kkk', 'kkkk', '10', '10', '225555', 896451320),
('44', 'oro', 'fsff', '23', '23', '42442', 123456),
('45', '0547077703', 'Pardes Hanna-Karkur', '23', '23', '42442', 547077703),
('5', 'kkk', 'kkkk', '10', '10', '225555', 896451320),
('6', 'kkk', 'kkkk', '10', '10', '225555', 896451320),
('7', 'kkk', 'kkkk', '10', '10', '225555', 896451320),
('8', 'kkk', 'kkkk', '10', '10', '225555', 896451320),
('9', 'kkk', 'kkkk', '10', '10', '225555', 896451320);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stud_id` varchar(255) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `m_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `height` int(255) DEFAULT NULL,
  `S_weight` int(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `dep` int(20) DEFAULT NULL,
  `e_level` int(255) NOT NULL,
  `olompic_type` varchar(255) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Certificates` longblob,
  `result` int(255) DEFAULT NULL,
  `place_computed` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stud_id`, `f_name`, `m_name`, `l_name`, `mothers_name`, `birth_date`, `height`, `S_weight`, `sex`, `dep`, `e_level`, `olompic_type`, `reg_date`, `Certificates`, `result`, `place_computed`) VALUES
('1', '00000', '0000', '0000', 'ggg  gggg ggg', '2019-08-31', 1244, 12239, 'male', 1, 4555, 'Olympic', '2019-08-22 09:06:53', 0x436861707465722030352e706466, 44, 'ggg gggg gggg'),
('10', 'qqqqqqqq', 'kkk', 'kkk', 'kkkk kkkk kkk', '2019-08-22', 98, 96, 'male', 15, 10, 'Olympic', '2019-08-29 09:27:26', 0x4c61622054776f2e706466, 99, 'hfhggjh'),
('11', 'fff', 'jlaf', 'ggg', 'kkkk kkkk kkk', '2018-10-04', 122, 125, 'female', 6, 10, 'Paralympic', '2019-09-17 09:29:33', '', 12, 'xzdsfsfsfsf'),
('13', 'afa', 'jlaf', 'ff', 'fff fff fff', '2019-06-11', 58, 85, 'female', 13, 10, 'Paralympic', '2019-09-03 11:17:20', '', 58, 'khkhk jbjb jbb'),
('14', 'afa', 'jlaf', 'ff', 'fff fff fff', '2019-06-11', 58, 85, 'female', 13, 10, 'Paralympic', '2019-09-03 11:24:12', '', 58, 'khkhk jbjb jbb'),
('15', 'afa', 'jlaf', 'ff', 'fff fff fff', '2019-06-11', 58, 85, 'female', 13, 10, 'Paralympic', '2019-09-03 11:26:18', '', 58, 'khkhk jbjb jbb'),
('16', 'afa', 'jlaf', 'ff', 'fff fff fff', '2019-06-11', 58, 85, 'female', 13, 10, 'Paralympic', '2019-09-03 11:34:13', '', 58, 'khkhk jbjb jbb'),
('17', 'afa', 'jlaf', 'ff', 'fff fff fff', '2019-06-11', 58, 85, 'female', 13, 10, 'Paralympic', '2019-09-03 11:47:26', '', 58, 'khkhk jbjb jbb'),
('2', 'fff', 'fff', 'ff', 'fff fff fff', '2019-08-29', 11, 12, 'male', 2, 45, 'Olympic', '2019-08-22 09:08:18', 0x436861707465722030352e706466, 444, 'dsfghj'),
('20', 'ggg', 'ggg', 'gs', 'afa fafa afaf', '2019-09-20', 20, 30, 'male', 12, 50, 'Olympic', '2019-09-03 11:52:26', '', 92, 'dfghj ghjk ghjk'),
('21', 'fff', 'jlaf', 'ggg', 'kkkk kkkk kkk', '2018-10-04', 122, 125, 'female', 6, 10, 'Paralympic', '2019-09-17 09:39:36', '', 12, 'xzdsfsfsfsf'),
('23', 'fff', 'jlaf', 'ggg', 'kkkk kkkk kkk', '2018-10-04', 122, 125, 'female', 6, 10, 'Paralympic', '2019-09-17 11:32:22', NULL, 12, 'xzdsfsfsfsf'),
('3', 'kkkk', 'kkk', 'kkk', 'kk', '2019-08-28', 12, 56, 'male', 9, 10, 'Paralympic', '2019-08-24 14:49:11', 0x4c61622054776f2e706466, 15, '0936'),
('30', 'Tal', 'sff', 'Yariv', 'Tal Yariv', '2019-09-05', 77, 88, 'female', 15, 12, 'Paralympic', '2019-09-24 08:26:40', NULL, 56, '12'),
('4', 'qqqqqqqq', 'kkk', 'kkk', 'kkkk kkkk kkk', '2019-08-22', 98, 96, 'male', 1, 10, 'Olympic', '2019-08-29 09:18:19', 0x4c61622054776f2e706466, 99, 'hfhggjh'),
('44', 'fsff', 'sff', 'fs', 'sffffffs sffssf', '2019-09-05', 342, 242, 'female', 13, 12, 'Paralympic', '2019-09-24 07:21:23', NULL, 43, '12'),
('45', 'eqe', 'eqqe', 'eq', 'addad jaljlkda', '2019-09-12', 131, 21, 'female', 1, 12, 'Paralympic', '2019-09-24 07:23:29', NULL, 12, '12'),
('5', 'qqqqqqqq', 'kkk', 'kkk', 'kkkk kkkk kkk', '2019-08-22', 98, 96, 'male', 1, 10, 'Olympic', '2019-08-29 09:16:39', 0x4c61622054776f2e706466, 99, 'hfhggjh'),
('6', 'qqqqqqqq', 'kkk', 'kkk', 'kkkk kkkk kkk', '2019-08-22', 98, 96, 'male', 1, 10, 'Olympic', '2019-08-29 09:18:50', 0x4c61622054776f2e706466, 99, 'hfhggjh'),
('7', 'qqqqqqqq', 'kkk', 'kkk', 'kkkk kkkk kkk', '2019-08-22', 98, 96, 'male', 9, 10, 'Olympic', '2019-08-29 09:19:06', 0x4c61622054776f2e706466, 99, 'hfhggjh'),
('8', 'qqqqqqqq', 'kkk', 'kkk', 'kkkk kkkk kkk', '2019-08-22', 98, 96, 'male', 9, 10, 'Olympic', '2019-08-29 09:19:27', 0x4c61622054776f2e706466, 99, 'hfhggjh'),
('9', 'qqqqqqqq', 'kkk', 'kkk', 'kkkk kkkk kkk', '2019-08-22', 98, 96, 'male', 2, 10, 'Olympic', '2019-08-29 09:20:54', 0x4c61622054776f2e706466, 99, 'hfhggjh');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `stud_id` int(255) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Arm_Span` int(11) NOT NULL,
  `Hand_Span` int(11) NOT NULL,
  `Shuttle_run` int(11) NOT NULL,
  `run_m` int(11) NOT NULL,
  `T_test` int(11) NOT NULL,
  `Illinois` int(11) NOT NULL,
  `Set_up` int(11) NOT NULL,
  `Push_up` int(11) NOT NULL,
  `P_a_A_test` int(11) NOT NULL,
  `P_a_d_m` int(11) NOT NULL,
  `V_Jump` int(11) NOT NULL,
  `Broad_jump` int(11) NOT NULL,
  `S_rich` int(11) NOT NULL,
  `Chest` int(11) NOT NULL,
  `Bounce` int(11) NOT NULL,
  `O_head` int(11) NOT NULL,
  `Baseball` int(11) NOT NULL,
  `Push` int(11) NOT NULL,
  `Speed_se` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `Varity` int(11) NOT NULL,
  `R_h` int(11) NOT NULL,
  `L_h` int(11) NOT NULL,
  `corne_Jump` int(11) NOT NULL,
  `point_rep` int(11) NOT NULL,
  `Set_shot` int(11) NOT NULL,
  `test_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`stud_id`, `Height`, `Weight`, `Arm_Span`, `Hand_Span`, `Shuttle_run`, `run_m`, `T_test`, `Illinois`, `Set_up`, `Push_up`, `P_a_A_test`, `P_a_d_m`, `V_Jump`, `Broad_jump`, `S_rich`, `Chest`, `Bounce`, `O_head`, `Baseball`, `Push`, `Speed_se`, `area`, `Varity`, `R_h`, `L_h`, `corne_Jump`, `point_rep`, `Set_shot`, `test_num`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2),
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3),
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 4),
(1, 2, 1, 2, 1, 2, 2, 2, 1, 2, 1, 1, 2, 1, 2, 1, 2, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 5),
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 6),
(1, 6, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 7),
(1, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 8),
(1, 4, 2, 4, 4, 4, 3, 3, 3, 2, 2, 2, 3, 4, 4, 2, 3, 2, 2, 2, 2, 3, 3, 4, 3, 3, 3, 3, 3, 9),
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 10),
(1, 10, 2, 2, 2, 5, 3, 3, 3, 2, 2, 3, 3, 4, 4, 2, 2, 2, 2, 2, 2, 3, 3, 4, 3, 3, 3, 3, 3, 11),
(1, 10, 2, 4, 4, 4, 2, 3, 4, 1, 2, 3, 2, 4, 4, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 12),
(2, 10, 2, 3, 3, 3, 3, 3, 3, 2, 2, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 1),
(2, 10, 2, 4, 4, 5, 3, 3, 4, 2, 2, 3, 3, 4, 4, 2, 2, 2, 2, 2, 2, 3, 3, 4, 3, 3, 3, 3, 3, 2),
(2, 10, 2, 4, 3, 4, 3, 3, 4, 2, 2, 2, 2, 3, 3, 2, 2, 2, 2, 2, 2, 3, 3, 4, 3, 3, 3, 3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `test_num`
--

CREATE TABLE `test_num` (
  `test_id` int(11) NOT NULL,
  `test_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_num`
--

INSERT INTO `test_num` (`test_id`, `test_num`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `relative_addis`
--
ALTER TABLE `relative_addis`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `relative_home_address`
--
ALTER TABLE `relative_home_address`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`se_id`);

--
-- Indexes for table `student_address`
--
ALTER TABLE `student_address`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `stud_id` (`stud_id`),
  ADD KEY `fk_dep` (`dep`);

--
-- Indexes for table `test_num`
--
ALTER TABLE `test_num`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dep_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test_num`
--
ALTER TABLE `test_num`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `fk_dep` FOREIGN KEY (`dep`) REFERENCES `departments` (`dep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
