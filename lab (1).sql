-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-05 02:40:56
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- 表的结构 `gx_annm`
--

CREATE TABLE IF NOT EXISTS `gx_annm` (
  `an_id` int(8) NOT NULL AUTO_INCREMENT,
  `an_content` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`an_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gx_annm`
--

INSERT INTO `gx_annm` (`an_id`, `an_content`) VALUES
(1, '从12月10起明德楼将禁止预约实验室。'),
(3, '12月20日开放知行楼实验室111'),
(4, '睡觉哦大家扫平独家哦喷洒紧迫的紧迫啊时间颇多'),
(5, '啊三大松溪哦帕斯夸下囧W激动i我就阿婆单位大碗大碗打扫打扫 '),
(6, '是大苏打撒旦撒旦撒打算');

-- --------------------------------------------------------

--
-- 表的结构 `gx_appminfo`
--

CREATE TABLE IF NOT EXISTS `gx_appminfo` (
  `af_id` int(11) NOT NULL AUTO_INCREMENT,
  `af_user` varchar(30) CHARACTER SET utf8 NOT NULL,
  `af_labname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `af_project` varchar(30) CHARACTER SET utf8 NOT NULL,
  `af_date` varchar(20) CHARACTER SET utf8 NOT NULL,
  `af_time` varchar(20) CHARACTER SET utf8 NOT NULL,
  `af_phone` int(30) NOT NULL,
  `af_type` varchar(20) CHARACTER SET utf8 NOT NULL,
  `af_check` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`af_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `gx_appminfo`
--

INSERT INTO `gx_appminfo` (`af_id`, `af_user`, `af_labname`, `af_project`, `af_date`, `af_time`, `af_phone`, `af_type`, `af_check`) VALUES
(25, '郭喜鸿', '502', 'dasdsad', '2016-12-22', '14:00-16:00', 123213444, '学生', '通过'),
(26, '郭喜鸿', '403', 'fdgdf', '2016-12-11', '7:00-9:00', 234234324, '学生', '通过'),
(27, '问是', '503', 'dasd', '2016-12-13', '16:00-18:00', 423432432, '教师', '通过'),
(28, '问是', '502', 'dasssss', '2016-11-30', '16:00-18:00', 123123213, '教师', '通过'),
(29, '问是', '502', 'gfsdfds', '2016-12-28', '9:00-11:00', 123213, '教师', '通过'),
(30, '问是', '502', '123', '2016-12-07', '14:00-16:00', 2321333, '教师', '不通过'),
(31, '问是', '503', 'dsa', '2016-12-28', '9:00-11:00', 0, '教师', '不通过'),
(32, '问是', '403', 'ddd', '2016-12-22', '14:00-16:00', 0, '教师', '不通过'),
(33, '问是', '503', 'dasxx', '2016-12-22', '14:00-16:00', 0, '教师', '通过'),
(34, '问是', '503', '4645', '2017-01-10', '9:00-11:00', 45645, '教师', '通过'),
(35, '问是', '503', '一体化', '2017-03-08', '9:00-11:00', 2147483647, '教师', '通过'),
(36, '哈哈', '502', 'dad', '2017-03-08', '9:00-11:00', 0, '学生', '不通过'),
(37, '哈哈', '403', 'kkkk', '2017-03-18', '14:00-16:00', 0, '学生', '通过'),
(38, '哈哈', '403', 'dasd', '2017-03-08', '9:00-11:00', 2321, '学生', '通过'),
(39, '大苏打', '502', 'lll', '2017-03-31', '7:00-9:00', 0, '学生', '通过'),
(40, '大苏打', '502', '123', '2017-04-05', '9:00-11:00', 3123, '学生', '通过'),
(41, '大苏打', '502', ';;;', '2017-04-06', '7:00-9:00', 0, '学生', '不通过'),
(42, '大苏打', '503', '12312', '2017-03-09', '9:00-11:00', 2147483647, '学生', '通过'),
(43, '大苏打', '503', 'wfwef', '2017-03-07', '9:00-11:00', 0, '学生', '不通过'),
(44, '舒适度', '503', 'hhh', '2017-03-09', '14:00-16:00', 0, '教师', '通过'),
(45, '舒适度', '503', 'gdgg', '2017-03-15', '14:00-16:00', 2147483647, '教师', '不通过'),
(46, '陈永信', '503', 'dasdas', '2017-03-15', '14:00-16:00', 123123213, '学生', '通过'),
(47, '陈永信', '503', 'ggf', '2017-03-13', '7:00-9:00', 34324, '学生', '通过'),
(48, '陈永信', '403', '34324', '2017-03-09', '14:00-16:00', 2147483647, '学生', '不通过'),
(49, '陈永信', '403', 'greter', '2017-03-29', '9:00-11:00', 2147483647, '学生', '不通过');

-- --------------------------------------------------------

--
-- 表的结构 `gx_appmtime`
--

CREATE TABLE IF NOT EXISTS `gx_appmtime` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `at_time` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `gx_appmtime`
--

INSERT INTO `gx_appmtime` (`at_id`, `at_time`) VALUES
(1, '7:00-9:00'),
(2, '9:00-11:00'),
(3, '14:00-16:00'),
(5, '16:00-18:00');

-- --------------------------------------------------------

--
-- 表的结构 `gx_blog`
--

CREATE TABLE IF NOT EXISTS `gx_blog` (
  `bl_id` int(11) NOT NULL AUTO_INCREMENT,
  `bl_name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `bl_speak` varchar(360) CHARACTER SET utf8 NOT NULL,
  `bl_time` varchar(32) NOT NULL,
  PRIMARY KEY (`bl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `gx_blog`
--

INSERT INTO `gx_blog` (`bl_id`, `bl_name`, `bl_speak`, `bl_time`) VALUES
(23, '丘淼帆', '我的天！！！', '2017-03-10 11:24:59'),
(24, '丘淼帆', '这东西怎么预约？？', '2017-03-10 11:28:23'),
(27, '陈永信', '这么简单都不会？', '2017-03-10 11:31:54'),
(28, '陈永信', '怎么这么笨', '2017-03-10 11:32:13'),
(29, '陈永信', '琐琐碎碎', '2017-03-10 13:43:34'),
(30, '陈永信', 'what the fuck!!!!', '2017-03-10 14:18:00'),
(31, '陈永信', 'sssssss', '2017-03-10 16:49:14'),
(32, '陈永信', 'hhhhh', '2017-03-21 08:50:37'),
(33, '陈永信', '司机!', '2017-03-21 09:25:05');

-- --------------------------------------------------------

--
-- 表的结构 `gx_control`
--

CREATE TABLE IF NOT EXISTS `gx_control` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_type` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gx_control`
--

INSERT INTO `gx_control` (`ct_id`, `ct_type`) VALUES
(1, '无');

-- --------------------------------------------------------

--
-- 表的结构 `gx_lab`
--

CREATE TABLE IF NOT EXISTS `gx_lab` (
  `lab_id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `lab_address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lab_use` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lab_remark` varchar(80) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`lab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `gx_lab`
--

INSERT INTO `gx_lab` (`lab_id`, `lab_name`, `lab_address`, `lab_use`, `lab_remark`) VALUES
(1, '503', '明德楼A栋', '上机', '22'),
(2, '502', '明德楼', '撒旦撒旦', '防范地方的发生的事'),
(3, '403', '明德楼', '打算妨碍附近哦啊岁的', '大宋i独家哦爱睡觉都as');

-- --------------------------------------------------------

--
-- 表的结构 `gx_manager`
--

CREATE TABLE IF NOT EXISTS `gx_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `mg_pwd` varchar(32) CHARACTER SET utf8 NOT NULL,
  `mg_safe` int(11) NOT NULL,
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `gx_manager`
--

INSERT INTO `gx_manager` (`mg_id`, `mg_name`, `mg_pwd`, `mg_safe`) VALUES
(1, 'admin', '123456', 0),
(3, 'xiaoxiao', '123456', 1),
(5, 'my', '123456', 1);

-- --------------------------------------------------------

--
-- 表的结构 `gx_notice`
--

CREATE TABLE IF NOT EXISTS `gx_notice` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_content` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `gx_notice`
--

INSERT INTO `gx_notice` (`no_id`, `no_content`) VALUES
(3, '不能故意损坏实验室设备'),
(4, '不准带食物进入实验室'),
(5, '离开实验室请把垃圾带走'),
(6, '离开实验室请关闭所有电源'),
(7, 's大撒旦撒打算的我让他予以uyoiuoiujk'),
(8, '有try任天堂太太太太太太太太太太太太太太太太太太太太团与人沟通日');

-- --------------------------------------------------------

--
-- 表的结构 `gx_stuinformation`
--

CREATE TABLE IF NOT EXISTS `gx_stuinformation` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `st_pwd` varchar(32) CHARACTER SET utf8 NOT NULL,
  `st_no` varchar(32) CHARACTER SET utf8 NOT NULL,
  `st_usertype` varchar(4) CHARACTER SET utf8 NOT NULL,
  `st_identity` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`st_id`),
  KEY `st_id` (`st_id`),
  KEY `st_id_2` (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- 转存表中的数据 `gx_stuinformation`
--

INSERT INTO `gx_stuinformation` (`st_id`, `st_name`, `st_pwd`, `st_no`, `st_usertype`, `st_identity`) VALUES
(26, '非官方', '333255512dd', '656', '学生', '56456111'),
(27, '退热贴而', '123211111', '3232455', '学生', '66561111111'),
(30, '三水', '2331144dd', '1321321', '学生', '2312344'),
(31, '陈永信', '123456', '130201011005', '学生', '44000000000000002211'),
(36, '黄晓明', '123456', '130201011006', '学生', '440000000000011'),
(38, '32132', '132132111', '1321', '学生', '444'),
(39, '大苏打', '12323dasd', '4444', '学生', '1231231'),
(41, 'hg', 'ghh', 'hjjjjjj', '学生', 'jhgjhg'),
(42, 'fdfds', 'cdsc', 'csdcdsc', '学生', 'ddssdfds'),
(44, 'gg', 'gg', 'vvfdvd', '学生', 'vdfvdf'),
(46, 'dsa', 'dsad', 'sad', '学生', 'asdsad'),
(47, 'xas', 'xasx', 'asxs', '学生', 'axsass'),
(48, 'asd', 'sadsa', 'dsa', '学生', 'dsadas'),
(49, '晓明', '123456', '130201011013', '学生', '4416251994556365'),
(50, '站名', '123456', '1302011122321', '学生', '441569888745562236526'),
(51, 'siiajdas', '123456', '130201011022', '学生', 'jfujdiidiojxiasdjk'),
(52, '丘淼帆', '123456', '130201011036', '学生', '444444444444444444'),
(53, '王红', '123456', '130201011008', '学生', '45984545654545654');

-- --------------------------------------------------------

--
-- 表的结构 `gx_teacher`
--

CREATE TABLE IF NOT EXISTS `gx_teacher` (
  `te_id` int(11) NOT NULL AUTO_INCREMENT,
  `te_name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `te_pwd` varchar(32) CHARACTER SET utf8 NOT NULL,
  `te_no` varchar(32) CHARACTER SET utf8 NOT NULL,
  `te_usertype` varchar(8) CHARACTER SET utf8 NOT NULL,
  `te_identity` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`te_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `gx_teacher`
--

INSERT INTO `gx_teacher` (`te_id`, `te_name`, `te_pwd`, `te_no`, `te_usertype`, `te_identity`) VALUES
(4, '王震', '123213', '1232323232', '教师', '2321111144444444444'),
(5, '问是', '11112222da', '123123', '教师', '22312312'),
(6, '舒适度', '11211111', '321312', '教师', '321321112'),
(7, '发达省', '4234234', '565675756', '教师', '765756'),
(8, '的呃呃呃', '12321ttggfd', '3234', '教师', '545'),
(11, '陈波', '123456', '12365494', '教师', '441563698785236596');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
