-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019-12-13 21:07:29
-- 服务器版本： 5.6.40-84.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zexuanl0_finalpjkt`
--

-- --------------------------------------------------------

--
-- 表的结构 `FACULTY`
--

CREATE TABLE `FACULTY` (
  `fac_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `office` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `FACULTY`
--

INSERT INTO `FACULTY` (`fac_id`, `password`, `office`, `phone`, `email`) VALUES
('anotherAdmin', 'nopedope', 'SIM', NULL, 'whoneedsanemail@email.com'),
('kmalone', 'mKrista123', 'Department of Curriculum and Instructions', '608-263-4600', 'klmalone@wisc.edu'),
('mmitchell', 'mMeg123', 'Department of Arts', '608-265-4593', 'msmegmitchell@gmail.com\r\n'),
('testAdmin', 'password', 'MIS', '6038385438', 'fakeid@gmail.com');

-- --------------------------------------------------------

--
-- 表的结构 `FAC_INFOBOARD`
--

CREATE TABLE `FAC_INFOBOARD` (
  `fac_id` varchar(255) NOT NULL,
  `fac_name` varchar(255) NOT NULL,
  `img_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `FAC_INFOBOARD`
--

INSERT INTO `FAC_INFOBOARD` (`fac_id`, `fac_name`, `img_loc`) VALUES
('kmalone', 'Krista-Lee Meghan Malone', '/'),
('mmitchell', 'Meg Mitchell', '/'),
('testAdmin', 'Not Ow', 'img/prof1.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `ITEMS`
--

CREATE TABLE `ITEMS` (
  `item_code` int(16) NOT NULL,
  `fac_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `display_order` int(4) NOT NULL,
  `active` int(2) NOT NULL DEFAULT '1',
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ITEMS`
--

INSERT INTO `ITEMS` (`item_code`, `fac_id`, `category`, `display_order`, `active`, `description`) VALUES
(1, 'testAdmin', 'PUBLICATIONS', 1, 1, 'Somebody,N. (2019) I Never Publicate This, Journal of Nonsense Dec.3rd'),
(2, 'testAdmin', 'PUBLICATIONS', 2, 1, 'Somebody,N. (2018) Should This Be The Second Paper, Journal of Nonsense, Aug.27th'),
(3, 'testAdmin', 'CONFERENCE PRESENTATIONS', 1, 1, 'Madison GarbageTalk Society, 2019'),
(4, 'testAdmin', 'RESEARCH IN PROGRESS', 1, 1, 'Somebody,N. (2019) Study on How to Purge University Students Sleep Later Than 2 Am'),
(5, 'testAdmin', 'COURSES TAUGHT', 2, 1, 'IS 333'),
(6, 'testAdmin', 'COURSES TAUGHT', 4, 1, 'IS 451'),
(7, 'testAdmin', 'COURSES TAUGHT', 3, 1, 'IS 666'),
(12, 'mmitchell', 'PUBLICATIONS', 1, 1, 'Art Papers'),
(13, 'mmitchell', 'PUBLICATIONS', 2, 0, 'Arts in America'),
(14, 'mmitchell', 'CONFERENCE PRESENTATIONS', 1, 1, 'Museum for Applied Art in Vienna'),
(15, 'mmitchell', 'CONFERENCE PRESENTATIONS', 2, 1, 'Atlantic Center for the Arts'),
(16, 'mmitchell', 'RESEARCH IN PROGRESS', 1, 1, 'Home Grown'),
(17, 'mmitchell', 'RESEARCH IN PROGRESS', 2, 1, 'On the Impossibility of Landing'),
(18, 'mmitchell', 'COURSES TAUGHT', 1, 1, 'Art 107'),
(19, 'mmitchell', 'COURSES TAUGHT', 2, 1, 'Com 355'),
(20, 'kmalone', 'PUBLICATIONS', 1, 1, 'Islands in the Making: National Investment and the Cultural Imagination in Taiwan'),
(21, 'kmalone', 'PUBLICATIONS', 2, 1, 'Dragon Kill Points: The Economics of Power Gamers. Games and Culture, Vol. 4, No. 3, 296-316 (2009)'),
(22, 'kmalone', 'CONFERENCE PRESENTATIONS', 1, 1, '\r\nPanelist: “Higher Ed Game Development in WI” M+Dev 2018 A Midwest Game Developers Conference'),
(23, 'kmalone', 'CONFERENCE PRESENTATIONS', 2, 1, 'Panelist: “Trends in Game-Based Teaching and Learning…Pearls and Perils,” M+Dev 2018 A Midwest Game Developers Conference'),
(24, 'kmalone', 'RESEARCH IN PROGRESS', 1, 1, 'The SideQuest Inn - The UWM Game Research Lab: Global Game Jam, experiments in educational game design'),
(25, 'kmalone', 'RESEARCH IN PROGRESS', 2, 1, 'Ethnographic research on gender in tabletop role-playing games including: public presentation of game play and self through Twitch, YouTube, and Facebook; social media use between players (amongst themselves) and between players and viewers'),
(26, 'kmalone', 'COURSES TAUGHT', 1, 1, 'C&I 277: Videogames & Learning'),
(27, 'kmalone', 'COURSES TAUGHT', 2, 1, 'C&I 357: Game Design I');

-- --------------------------------------------------------

--
-- 表的结构 `PROFESSOR`
--

CREATE TABLE `PROFESSOR` (
  `fac_id` varchar(255) NOT NULL,
  `prof_name` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `PROFESSOR`
--

INSERT INTO `PROFESSOR` (`fac_id`, `prof_name`, `passwd`) VALUES
('kmalone', 'Krista-Lee Meghan Malone', 'mKrista123'),
('mmitchell', 'Meg Mitchell', 'mMeg123'),
('notSameAdmin', 'Not Wo', 'password'),
('testAdmin', 'Not Ow', 'password');

-- --------------------------------------------------------

--
-- 表的结构 `RECORD`
--

CREATE TABLE `RECORD` (
  `record_id` int(6) NOT NULL,
  `is_available` int(1) NOT NULL DEFAULT '1',
  `fac_id` varchar(255) NOT NULL,
  `student_4_digit` int(4) DEFAULT NULL COMMENT 'null=available',
  `student_lname` varchar(255) DEFAULT NULL COMMENT 'null=available',
  `record_date` varchar(16) NOT NULL,
  `record_starttime` varchar(255) NOT NULL,
  `record_endtime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `RECORD`
--

INSERT INTO `RECORD` (`record_id`, `is_available`, `fac_id`, `student_4_digit`, `student_lname`, `record_date`, `record_starttime`, `record_endtime`) VALUES
(1, 1, 'testAdmin', NULL, NULL, '2019-12-02', '11:00', '11:30'),
(2, 1, 'testAdmin', NULL, NULL, '2019-12-02', '13:00', '13:30'),
(3, 1, 'testAdmin', 9901, 'Linn', '2019-12-03', '11:00', '11:30'),
(4, 1, 'testAdmin', 8765, 'NiL', '2019-12-02', '13:30', '14:00'),
(6, 1, 'notSameAdmin', NULL, NULL, '2019-12-02', '11:00', '11:30'),
(9, 1, 'testAdmin', NULL, NULL, '2019-12-05', '15:00', '15:30'),
(10, 1, 'mmitchell', 8765, 'NiL', '2019-12-02', '11:00', '11:30'),
(11, 1, 'mmitchell', NULL, NULL, '2019-12-03', '11:00', '11:30'),
(12, 1, 'mmitchell', NULL, NULL, '2019-12-04', '11:00', '11:30'),
(13, 1, 'mmitchell', NULL, NULL, '2019-12-05', '11:00', '11:30'),
(14, 1, 'mmitchell', NULL, NULL, '2019-12-06', '11:00', '11:30'),
(16, 0, 'kmalone', NULL, NULL, '2019-12-06', '12:00PM', '1:00PM'),
(17, 1, 'kmalone', NULL, NULL, '2019-12-04', '11:00', '11:30'),
(18, 1, 'kmalone', NULL, NULL, '2019-12-05', '11:00', '11:30'),
(19, 1, 'kmalone', NULL, NULL, '2019-12-06', '11:00', '11:30'),
(20, 1, 'kmalone', NULL, NULL, '2019-12-03', '14:00', '14:30'),
(22, 1, 'mmitchell', NULL, NULL, '2019-12-05', '15:00', '15:30'),
(24, 1, 'mmitchell', NULL, NULL, '2019-12-06', '14:00', '14:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FACULTY`
--
ALTER TABLE `FACULTY`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `FAC_INFOBOARD`
--
ALTER TABLE `FAC_INFOBOARD`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `ITEMS`
--
ALTER TABLE `ITEMS`
  ADD PRIMARY KEY (`item_code`);

--
-- Indexes for table `PROFESSOR`
--
ALTER TABLE `PROFESSOR`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `RECORD`
--
ALTER TABLE `RECORD`
  ADD PRIMARY KEY (`record_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ITEMS`
--
ALTER TABLE `ITEMS`
  MODIFY `item_code` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 使用表AUTO_INCREMENT `RECORD`
--
ALTER TABLE `RECORD`
  MODIFY `record_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
