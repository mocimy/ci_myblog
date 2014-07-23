-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-07-17 17:25:02
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(12) NOT NULL,
  `name` varchar(16) NOT NULL,
  `content` text NOT NULL,
  `time` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `name`, `content`, `time`) VALUES
(1, '123', '', '123', '2014/07/09'),
(2, 'ewgw', '', 'erwer', '2014/07/09'),
(3, 'gfhg', '', 'hgfhgfh', '2014/07/09'),
(4, 'sdas', '', 'dsadasd', '2014/07/10'),
(5, '0', '', '0', ''),
(6, '111111111111', '', '0', ''),
(7, '0', '', '0', ''),
(8, '0', '', '0', ''),
(9, '0', '', '0', ''),
(10, '0', '', '0', ''),
(11, '0', '', '0', ''),
(12, '0', '', '0', ''),
(13, '0', '', '0', ''),
(14, '0', '', '0', ''),
(15, '0', '', '0', ''),
(16, '0', '', '0', ''),
(17, '0', '', '0', ''),
(18, '2313223', '', '213131313', ''),
(19, '0', '', '0', ''),
(20, '2313223', '', '213131313', ''),
(21, '0', '', '0', ''),
(22, '0', '', '0', ''),
(23, '0', '', '0', ''),
(24, '0', '', '0', ''),
(25, '0', '', '0', ''),
(26, '111', '', '111111111111111111', ''),
(27, '111', '', '111111111111111111', ''),
(28, '1111111', '', '111111111111111', ''),
(29, '1111111111', '', '111111111111', ''),
(30, '11111111111', '', '11111111111111', ''),
(31, '', '', '', ''),
(32, '222222', '', '222222222222222', ''),
(33, '2222222222', '', '22222222222222222', ''),
(34, '', '', '', ''),
(35, '0', '', '0', ''),
(36, '0', '', '0', ''),
(37, '0', '', '0', ''),
(38, '0', '', '0', ''),
(39, '0', '', '0', ''),
(40, '0', '', '0', ''),
(41, '????????', '', '??????????', '2014/07/17');

-- --------------------------------------------------------

--
-- 表的结构 `new_user`
--

CREATE TABLE IF NOT EXISTS `new_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5001 ;

--
-- 转存表中的数据 `new_user`
--

INSERT INTO `new_user` (`id`, `username`, `password`, `email`) VALUES
(40, '111', 'b59c67bf196a4758191e42f76670ceba', '1111'),
(5000, 'root', '63a9f0ea7bb98050796b649e85481845', '1@1');

-- --------------------------------------------------------

--
-- 表的结构 `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(4) NOT NULL,
  `article` int(4) NOT NULL,
  `name` varchar(12) NOT NULL,
  `content` text NOT NULL,
  `time` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `review`
--

INSERT INTO `review` (`id`, `article`, `name`, `content`, `time`) VALUES
(0, 1, 'sdds', '', '1111'),
(0, 1, 'sdds', '', '1111'),
(0, 0, '', '', ''),
(0, 1, '1323213', '213131231', '2014/07/'),
(0, 1, 'asdsad', 'sadasdas', '2014/07/'),
(0, 1, 'sad', 'ssdsada', '2014/07/'),
(0, 1, 'asds', 'dadada', '2014/07/'),
(0, 2, '11', 'e78582c7fa761cb9358009503f2810a9', ''),
(0, 2, '111111', '111111111111111111', ''),
(0, 2, '111111', '22222222222222222222', ''),
(0, 2, '33333', '33333333333333', ''),
(0, 2, '222', '22222222222222222', ''),
(0, 2, '222', '22222222222222222', ''),
(0, 2, '4444444', '44444444444444444', ''),
(0, 2, '555555', '55555555555555', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'root', '63a9f0ea7bb98050796b649e85481845', '1@1'),
(40, '111', 'b59c67bf196a4758191e42f76670ceba', '1111'),
(41, '111', 'b59c67bf196a4758191e42f76670ceba', '1111'),
(42, '111', 'b59c67bf196a4758191e42f76670ceba', '1111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
