-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-06-15 03:42:58
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- 表的结构 `mc_detail`
--

CREATE TABLE IF NOT EXISTS `mc_detail` (
  `mcd_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mcd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=242 ;

--
-- 转存表中的数据 `mc_detail`
--

INSERT INTO `mc_detail` (`mcd_id`, `mc_id`, `state`) VALUES
(1, 1, 0),
(2, 2, 1),
(3, 10, 0),
(4, 1, 1),
(5, 2, 1),
(6, 3, 0),
(7, 4, 0),
(8, 5, 0),
(9, 6, 0),
(10, 7, 0),
(11, 8, 0),
(12, 9, 0),
(13, 1, 1),
(14, 2, 1),
(15, 3, 0),
(16, 4, 0),
(17, 5, 0),
(18, 6, 0),
(19, 7, 0),
(20, 8, 0),
(21, 9, 0),
(22, 10, 0),
(23, 1, 1),
(24, 2, 0),
(25, 3, 0),
(26, 4, 0),
(27, 5, 0),
(28, 6, 0),
(29, 7, 0),
(30, 8, 0),
(31, 9, 0),
(32, 10, 0),
(33, 1, 1),
(34, 2, 0),
(35, 3, 0),
(36, 4, 0),
(37, 5, 0),
(38, 6, 0),
(39, 7, 0),
(40, 8, 0),
(41, 9, 0),
(42, 10, 0),
(43, 1, 1),
(44, 2, 0),
(45, 3, 0),
(46, 4, 0),
(47, 5, 0),
(48, 6, 0),
(49, 7, 0),
(50, 8, 0),
(51, 9, 0),
(52, 10, 0),
(53, 1, 1),
(54, 2, 0),
(55, 3, 0),
(56, 4, 0),
(57, 5, 0),
(58, 6, 0),
(59, 7, 0),
(60, 8, 0),
(61, 9, 0),
(62, 10, 0),
(63, 1, 1),
(64, 2, 0),
(65, 3, 0),
(66, 4, 0),
(67, 5, 0),
(68, 6, 0),
(69, 7, 0),
(70, 8, 0),
(71, 9, 0),
(72, 10, 0),
(73, 1, 1),
(74, 2, 0),
(75, 3, 0),
(76, 4, 0),
(77, 5, 0),
(78, 6, 0),
(79, 7, 0),
(80, 8, 0),
(81, 9, 0),
(82, 10, 0),
(83, 1, 1),
(84, 2, 0),
(85, 3, 0),
(86, 4, 0),
(87, 5, 0),
(88, 6, 0),
(89, 7, 0),
(90, 8, 0),
(91, 9, 0),
(92, 10, 0),
(93, 1, 1),
(94, 2, 0),
(95, 3, 0),
(96, 4, 0),
(97, 5, 0),
(98, 6, 0),
(99, 7, 0),
(100, 8, 0),
(101, 9, 0),
(102, 10, 0),
(103, 1, 1),
(104, 2, 0),
(105, 3, 0),
(106, 4, 0),
(107, 5, 0),
(108, 6, 0),
(109, 7, 0),
(110, 8, 0),
(111, 9, 0),
(112, 10, 0),
(113, 1, 1),
(114, 2, 0),
(115, 3, 0),
(116, 4, 0),
(117, 5, 0),
(118, 6, 0),
(119, 7, 0),
(120, 8, 0),
(121, 9, 0),
(122, 10, 0),
(123, 1, 1),
(124, 2, 0),
(125, 3, 0),
(126, 4, 0),
(127, 5, 0),
(128, 6, 0),
(129, 7, 0),
(130, 8, 0),
(131, 9, 0),
(132, 10, 0),
(133, 1, 1),
(134, 2, 0),
(135, 3, 0),
(136, 4, 0),
(137, 5, 0),
(138, 6, 0),
(139, 7, 0),
(140, 8, 0),
(141, 9, 0),
(142, 10, 0),
(143, 1, 1),
(144, 2, 0),
(145, 3, 0),
(146, 4, 0),
(147, 5, 0),
(148, 6, 0),
(149, 7, 0),
(150, 8, 0),
(151, 9, 0),
(152, 10, 0),
(153, 1, 1),
(154, 2, 0),
(155, 3, 0),
(156, 4, 0),
(157, 5, 0),
(158, 6, 0),
(159, 7, 0),
(160, 8, 0),
(161, 9, 0),
(162, 10, 0),
(163, 1, 1),
(164, 2, 0),
(165, 3, 0),
(166, 4, 0),
(167, 5, 0),
(168, 6, 0),
(169, 7, 0),
(170, 8, 0),
(171, 9, 0),
(172, 10, 0),
(173, 1, 1),
(174, 2, 0),
(175, 3, 0),
(176, 4, 0),
(177, 5, 0),
(178, 6, 0),
(179, 7, 0),
(180, 8, 0),
(181, 9, 0),
(182, 10, 0),
(183, 1, 1),
(184, 2, 0),
(185, 3, 0),
(186, 4, 0),
(187, 5, 0),
(188, 6, 0),
(189, 7, 0),
(190, 8, 0),
(191, 9, 0),
(192, 10, 0),
(193, 1, 1),
(194, 2, 0),
(195, 3, 0),
(196, 4, 0),
(197, 5, 0),
(198, 6, 0),
(199, 7, 0),
(200, 8, 0),
(201, 9, 0),
(202, 10, 0),
(203, 1, 1),
(204, 2, 0),
(205, 3, 0),
(206, 4, 0),
(207, 5, 0),
(208, 6, 0),
(209, 7, 0),
(210, 8, 0),
(211, 9, 0),
(212, 10, 0),
(213, 1, 1),
(214, 2, 0),
(215, 3, 0),
(216, 4, 0),
(217, 5, 0),
(218, 6, 0),
(219, 7, 0),
(220, 8, 0),
(221, 9, 0),
(222, 10, 0),
(223, 1, 1),
(224, 2, 0),
(225, 3, 0),
(226, 4, 0),
(227, 5, 0),
(228, 6, 0),
(229, 7, 0),
(230, 8, 0),
(231, 9, 0),
(232, 10, 0),
(233, 1, 0),
(234, 63, 1),
(235, 63, 1),
(236, 64, 0),
(237, 64, 0),
(238, 64, 0),
(239, 64, 1),
(240, 64, 0),
(241, 64, 0);

-- --------------------------------------------------------

--
-- 表的结构 `mc_selle`
--

CREATE TABLE IF NOT EXISTS `mc_selle` (
  `mcs_id` int(11) NOT NULL AUTO_INCREMENT,
  `mcd_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`mcs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `mc_selle`
--

INSERT INTO `mc_selle` (`mcs_id`, `mcd_id`, `date`) VALUES
(1, 1, '2015-06-10'),
(2, 123, '2015-06-10'),
(3, 73, '2015-06-10'),
(4, 53, '2015-06-10'),
(5, 183, '2015-06-09'),
(6, 173, '2015-06-09'),
(7, 63, '2015-06-09'),
(8, 13, '2015-06-11'),
(9, 23, '2015-06-11'),
(10, 9, '2015-06-10'),
(11, 10, '2015-06-10'),
(12, 11, '2015-06-10'),
(13, 12, '2015-06-10'),
(14, 13, '2015-06-10'),
(15, 14, '2015-06-10'),
(16, 15, '2015-06-10'),
(17, 16, '2015-06-10'),
(18, 17, '2015-06-10'),
(19, 18, '2015-06-10'),
(20, 19, '2015-06-10'),
(21, 20, '2015-06-10'),
(22, 21, '2015-06-10'),
(23, 22, '2015-06-10'),
(24, 23, '2015-06-10'),
(25, 24, '2015-06-10'),
(26, 25, '2015-06-10'),
(27, 26, '2015-06-10'),
(28, 27, '2015-06-10'),
(29, 28, '2015-06-10'),
(30, 29, '2015-06-10');

-- --------------------------------------------------------

--
-- 表的结构 `ms_detail`
--

CREATE TABLE IF NOT EXISTS `ms_detail` (
  `msd_id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_id` int(11) NOT NULL,
  `msd_boss` varchar(20) COLLATE utf8_bin NOT NULL,
  `msd_chuanzhen` varchar(10) COLLATE utf8_bin NOT NULL,
  `msd_yingye` varchar(10) COLLATE utf8_bin NOT NULL,
  `msd_yewu` varchar(10) COLLATE utf8_bin NOT NULL,
  `msd_em` varchar(25) COLLATE utf8_bin NOT NULL,
  `msd_develop_2013` int(11) NOT NULL,
  `msd_develop_2014` int(11) NOT NULL,
  `msd_develop_2015` int(11) NOT NULL,
  PRIMARY KEY (`msd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `ms_detail`
--

INSERT INTO `ms_detail` (`msd_id`, `ms_id`, `msd_boss`, `msd_chuanzhen`, `msd_yingye`, `msd_yewu`, `msd_em`, `msd_develop_2013`, `msd_develop_2014`, `msd_develop_2015`) VALUES
(1, 1, '张东光', '028-876543', 'YYZZ234567', '证券 期货', 'daye@daye.com', 1000, 2000, 3000),
(2, 14, '李四', '023-84562', 'YYZZ234567', '证券 期货', 'daye@daye.com', 1000, 1000, 1000);

-- --------------------------------------------------------

--
-- 表的结构 `m_admin`
--

CREATE TABLE IF NOT EXISTS `m_admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `ad_pass` varchar(150) COLLATE utf8_bin NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `m_admin`
--

INSERT INTO `m_admin` (`ad_id`, `ad_name`, `ad_pass`, `time`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70', '0000-00-00'),
(3, '123', '123', '0000-00-00'),
(4, '456', 'zyz', '0000-00-00'),
(5, '789', '202cb962ac59075b964b07152d234b70', '0000-00-00'),
(6, '147', '502e4a16930e414107ee22b6198c578f', '0000-00-00'),
(7, '1234', '099ebea48ea9666a7da2177267983138', '0000-00-00');

-- --------------------------------------------------------

--
-- 表的结构 `m_back`
--

CREATE TABLE IF NOT EXISTS `m_back` (
  `mback_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `mback_num` int(11) NOT NULL,
  `mback_note` varchar(50) COLLATE utf8_bin NOT NULL,
  `mback_own` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `m_back`
--

INSERT INTO `m_back` (`mback_id`, `mc_id`, `mback_num`, `mback_note`, `mback_own`) VALUES
(1, 1, 10, '不想要了', '李四'),
(2, 1, 10, '不想要乐意吗', '张三');

-- --------------------------------------------------------

--
-- 表的结构 `m_back_list`
--

CREATE TABLE IF NOT EXISTS `m_back_list` (
  `mbl_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` int(11) NOT NULL,
  `mbl_num` int(11) NOT NULL,
  `mbl_note` varchar(50) COLLATE utf8_bin NOT NULL,
  `mbl_own` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mbl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `m_back_list`
--

INSERT INTO `m_back_list` (`mbl_id`, `mb_id`, `mbl_num`, `mbl_note`, `mbl_own`) VALUES
(1, 1, 5, '滞销', '张三'),
(2, 1, 5, '质量有问题', '李四');

-- --------------------------------------------------------

--
-- 表的结构 `m_blacklist`
--

CREATE TABLE IF NOT EXISTS `m_blacklist` (
  `mb_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `mb_owner` varchar(50) COLLATE utf8_bin NOT NULL,
  `mb_tel` int(11) NOT NULL,
  `mk_add` varchar(50) COLLATE utf8_bin NOT NULL,
  `mk_date` date NOT NULL,
  `mk_score` int(11) NOT NULL,
  PRIMARY KEY (`mb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `m_blacklist`
--

INSERT INTO `m_blacklist` (`mb_id`, `mb_name`, `mb_owner`, `mb_tel`, `mk_add`, `mk_date`, `mk_score`) VALUES
(1, '三鹿集团', '三鹿', 159506852, '济南市中区', '2015-06-02', -2);

-- --------------------------------------------------------

--
-- 表的结构 `m_blacklist_detail`
--

CREATE TABLE IF NOT EXISTS `m_blacklist_detail` (
  `mbd_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_id` int(11) NOT NULL,
  `mb_date` date NOT NULL,
  `mb_value` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mbd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `m_blacklist_detail`
--

INSERT INTO `m_blacklist_detail` (`mbd_id`, `mb_id`, `mb_date`, `mb_value`) VALUES
(1, 1, '2015-06-10', '次品'),
(2, 1, '2015-06-01', '次品');

-- --------------------------------------------------------

--
-- 表的结构 `m_commodity`
--

CREATE TABLE IF NOT EXISTS `m_commodity` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `mc_image` varchar(100) COLLATE utf8_bin NOT NULL,
  `mt_id` int(11) NOT NULL,
  `ms_id` int(11) NOT NULL,
  `mc_money` double NOT NULL,
  `mc_num` int(11) NOT NULL,
  `mc_uptime` date NOT NULL,
  `mc_downtime` date NOT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=65 ;

--
-- 转存表中的数据 `m_commodity`
--

INSERT INTO `m_commodity` (`mc_id`, `mc_name`, `mc_image`, `mt_id`, `ms_id`, `mc_money`, `mc_num`, `mc_uptime`, `mc_downtime`) VALUES
(1, '蒙牛牛奶', 'upfiles/20150525_170934.jpg', 7, 1, 49, 32, '2015-01-06', '2015-06-15'),
(2, '伊利牛奶', '', 7, 2, 69, 200, '2014-01-06', '2016-08-31'),
(4, '笔记本', '', 1, 4, 10, 2000, '2014-01-06', '2016-08-31'),
(6, '三鹿花生油', '', 3, 8, 100, 2000, '2014-01-06', '2016-08-31'),
(7, '舒服枕头', '', 5, 7, 10, 1000, '2015-05-04', '2015-05-27'),
(8, '蒙牛天天牛奶', '', 7, 1, 50, 2000, '2015-06-01', '2015-06-07'),
(63, '三星手表2号', 'upfiles/20150525_170934.jpg', 1, 17, 2, 4, '2015-06-25', '0000-00-00'),
(64, '张三手巾', 'upfiles/CE57B1FD0BC49DD84B4844EB1F7BE382.png', 1, 18, 20, 6, '2015-06-25', '2016-06-25');

-- --------------------------------------------------------

--
-- 表的结构 `m_order`
--

CREATE TABLE IF NOT EXISTS `m_order` (
  `mo_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `mo_num` int(11) NOT NULL,
  `mo_date` date NOT NULL,
  `mo_add` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `m_order`
--

INSERT INTO `m_order` (`mo_id`, `mc_id`, `mo_num`, `mo_date`, `mo_add`) VALUES
(1, 1, 20, '2015-06-23', '济南');

-- --------------------------------------------------------

--
-- 表的结构 `m_suppliers`
--

CREATE TABLE IF NOT EXISTS `m_suppliers` (
  `ms_id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `ms_owner` varchar(10) COLLATE utf8_bin NOT NULL,
  `ms_tel` varchar(11) COLLATE utf8_bin NOT NULL,
  `ms_add` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ms_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `m_suppliers`
--

INSERT INTO `m_suppliers` (`ms_id`, `ms_name`, `ms_owner`, `ms_tel`, `ms_add`) VALUES
(1, '蒙牛集团', '张三', '15910080952', '济南高新区'),
(2, '伊利集团', '李四', '15188822220', '济南高新区'),
(3, '筷子集团集团', '李四', '15188822220', '济南高新区'),
(4, '惠普笔记本集团', '孙琦', '15188822220', '济南高新区'),
(5, '三星集团', '王霸', '15188822220', '济南高新区'),
(6, '被罩公司', '牛是', '15188833585', '济南历下区'),
(7, '济南枕头公司', '牛不是', '15188833585', '济南历下区'),
(8, '大头集团', '孙大头', '15812003690', '济南历下区'),
(9, '张氏集团', '', '', '济南高新区'),
(10, '张氏集团', '', '', '北京海淀区'),
(14, '三鹿集团', '张三', '15910059358', '剑南高校区'),
(15, '三星手表集团', '', '', '韩国三星'),
(16, '三星手表1号集团', '', '', '三星手表1号2'),
(17, '三星手表1号', '', '', '三星手表1号'),
(18, '李四集团', '', '', '济南高新区');

-- --------------------------------------------------------

--
-- 表的结构 `m_time_sell`
--

CREATE TABLE IF NOT EXISTS `m_time_sell` (
  `mts_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `m_time_money` int(11) NOT NULL,
  `m_time_sell` date NOT NULL,
  `m_sell_end` date NOT NULL,
  PRIMARY KEY (`mts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `m_time_sell`
--

INSERT INTO `m_time_sell` (`mts_id`, `mc_id`, `m_time_money`, `m_time_sell`, `m_sell_end`) VALUES
(2, 1, 48, '2015-06-14', '2015-06-19'),
(3, 64, 15, '2015-06-14', '2015-07-25');

-- --------------------------------------------------------

--
-- 表的结构 `m_type`
--

CREATE TABLE IF NOT EXISTS `m_type` (
  `mt_id` int(11) NOT NULL AUTO_INCREMENT,
  `mt_name` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mt_id`),
  UNIQUE KEY `mt_id` (`mt_id`),
  UNIQUE KEY `mt_name` (`mt_name`),
  UNIQUE KEY `mt_id_2` (`mt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `m_type`
--

INSERT INTO `m_type` (`mt_id`, `mt_name`) VALUES
(2, '家用电器'),
(5, '床上用品'),
(1, '日常百货'),
(3, '油盐酱醋'),
(4, '蔬菜专场'),
(7, '饮食天下'),
(6, '首饰饰品');

-- --------------------------------------------------------

--
-- 表的结构 `return`
--

CREATE TABLE IF NOT EXISTS `return` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `conmdity_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `producer_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `producer_add` varchar(80) COLLATE utf8_bin NOT NULL,
  `money` int(11) NOT NULL,
  `return_money` int(11) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `return`
--

INSERT INTO `return` (`r_id`, `conmdity_name`, `type`, `producer_name`, `producer_add`, `money`, `return_money`, `time`) VALUES
(1, '筷子', '日常百货', '筷子集团集团', '济南高新区', 10, 5, '2015-06-25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
