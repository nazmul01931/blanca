-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2018 at 07:25 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_blanca`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_awards`
--

DROP TABLE IF EXISTS `tbl_awards`;
CREATE TABLE IF NOT EXISTS `tbl_awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_awards`
--

INSERT INTO `tbl_awards` (`id`, `name`, `place`, `date`) VALUES
(1, 'Digital Blog Awards', '1st Place', '2015'),
(2, 'Digital Blog Awards', '2nd Place', '2016'),
(3, 'Peoples Choise', 'Nominated ', '2018'),
(4, 'Digital Blog Awards', '1st Place', '20179');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `update_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `body`, `user_id`, `cat_id`, `image_path`, `created_at`, `update_at`) VALUES
(11, 'The standard chunk of Lorem Ipsum used since the ', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 2, 'http://[::1]/blanca/uploads/2.jpg', '2018-06-01 00:00:00', '2018-06-13 00:00:00'),
(12, 'The standard chunk of those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 2, 'http://[::1]/blanca/uploads/about-2.png', '2018-06-01 00:00:00', '2018-06-19 00:00:00'),
(13, 'interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 4, 'http://[::1]/blanca/uploads/d.jpg', '2018-06-01 00:00:00', 'Jun 14 2018'),
(2, 'Rackham.The standard chunk of Lorem ', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ', '2', 3, 'http://[::1]/blanca/uploads/blog-img-1.png', '2018-06-01 00:00:00', '2018-06-11 00:00:00'),
(7, 'Reproduced below for The those interested.', 'Reproduced below for those interested. reproduced below for those interested.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 3, 'http://[::1]/blanca/uploads/3.jpg', '2018-06-01 00:00:00', '2018-06-18 00:00:00'),
(9, ' Ipsum used since the 1500s is reproduced below for those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 4, 'http://[::1]/blanca/uploads/11.jpg', '2018-06-01 00:00:00', '2018-06-27 00:00:00'),
(10, ' reproduced below for those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 3, 'http://[::1]/blanca/uploads/blog-img-21.png', '2018-06-01 00:00:00', '2018-06-26 00:00:00'),
(14, ' reproduced below for those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 3, 'http://[::1]/blanca/uploads/22.jpg', '2018-06-01 00:00:00', '2018-06-26 00:00:00'),
(15, 'The standard chunk of Lorem  interested.', '\r\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam. Cras in maximus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n                        <p>Pellentesque facilisis lorem sed orci rhoncus, non sagittis sem hendrerit. Nam rhoncus molestie felis, eget laoreet tortor sagittis ac. Pellentesque sapien nunc, vehicula ut tortor sed, gravida tristique magna. Praesent nec finibus est. Maecenas a purus auctor, varius ligula sed, ultricies lacus. Vestibulum erat eros, interdum ut finibus efficitur, efficitur sit amet sem. Proin sed imperdiet arcu, eget auctor turpis.</p>\r\n\r\n                        <p>Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate. </p>', '1', 2, 'http://[::1]/blanca/uploads/1.jpg', '2018-06-02 00:00:00', '2018-06-17 00:00:00'),
(16, 'The or those interested.', '\r\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam. Cras in maximus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n                        <p>Pellentesque facilisis lorem sed orci rhoncus, non sagittis sem hendrerit. Nam rhoncus molestie felis, eget laoreet tortor sagittis ac. Pellentesque sapien nunc, vehicula ut tortor sed, gravida tristique magna. Praesent nec finibus est. Maecenas a purus auctor, varius ligula sed, ultricies lacus. Vestibulum erat eros, interdum ut finibus efficitur, efficitur sit amet sem. Proin sed imperdiet arcu, eget auctor turpis.</p>\r\n\r\n                        <p>Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate. </p>', '1', 2, 'http://[::1]/blanca/uploads/21.jpg', '2018-06-01 00:00:00', '2018-06-25 00:00:00'),
(17, 'below for those interested.', '\r\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam. Cras in maximus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n                        <p>Pellentesque facilisis lorem sed orci rhoncus, non sagittis sem hendrerit. Nam rhoncus molestie felis, eget laoreet tortor sagittis ac. Pellentesque sapien nunc, vehicula ut tortor sed, gravida tristique magna. Praesent nec finibus est. Maecenas a purus auctor, varius ligula sed, ultricies lacus. Vestibulum erat eros, interdum ut finibus efficitur, efficitur sit amet sem. Proin sed imperdiet arcu, eget auctor turpis.</p>\r\n\r\n                        <p>Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate. </p>', '1', 2, 'http://[::1]/blanca/uploads/blog-img-2.png', '2018-06-01 00:00:00', '2018-06-03 00:00:00'),
(28, 'The standard chunk of those interestedbbbbb', '                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam. Cras in maximus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae </br>\r\n\r\n                         Pellentesque facilisis lorem sed orci rhoncus, non sagittis sem hendrerit. Nam rhoncus molestie felis, eget laoreet tortor sagittis ac. Pellentesque sapien nunc, vehicula ut tortor sed, gravida tristique magna. Praesent nec finibus est. Maecenas a purus auctor, varius ligula sed, ultricies lacus. Vestibulum erat eros, interdum ut finibus efficitur, efficitur sit amet sem. Proin sed imperdiet arcu, eget auctor turpis.&amp;amp;lt;/p&amp;amp;gt;\r\n</br>\r\n                         Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, </br> sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate.  ', '1', 3, 'http://[::1]/blanca/uploads/cartoon7.png', 'Jun 13 2018', 'Jun 17 2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_create_at` timestamp NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_desc`, `cat_create_at`) VALUES
(1, 'Winter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '0000-00-00 00:00:00'),
(2, 'Love', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '2018-06-20 18:00:00'),
(3, 'Snow', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '2018-06-19 18:00:00'),
(4, 'January2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(32) NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `com_email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(32) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment_sender_name`, `com_email`, `comment`, `post_id`, `date`) VALUES
(1, 0, 'Namzul', 'csenazmul96@gmail.com', 'Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus.', 28, '2018-06-01 00:00:00'),
(2, 1, 'Bokker', 'bokker@gmail.com', 'Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus.', 28, '2018-06-01 00:00:00'),
(3, 2, 'dsfsdfsdfsdf', 'nadkjf@gmail.com', 'sdfsdf', 28, '23'),
(4, 0, ' hgfhfh  hkh jg dg df sdf sdf sddf sd sdf ', 'sdfsdf@gmail.com', 'sdvxzc', 28, ''),
(5, 0, 'Md.Nazmul Hossain', 'csenazmul96@gmail.com', 'This is good product . not bad but some thing is wrong . it not bad', 28, ''),
(6, 0, 'Md.Nazmul Hossain', 'csenazmul96@gmail.com', 'dfg sdg sdf sdf sdf sdf ', 28, ''),
(7, 0, 'Md.Nazmul Hossain', 'csenazmul96@gmail.com', 'sdgsd fsd ', 28, ''),
(8, 0, 'Md Nazmul Hossainf', 'csenazmul96@gmail.com', 'fghfgh fgh fg h', 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

DROP TABLE IF EXISTS `tbl_info`;
CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `name`, `email`, `message`, `date`) VALUES
(32, 'Nazmul', 'csenazmul96@gmail.com', 'sdfsdf', ''),
(31, 'hhhhhhh', 'kamal@gmail.com', 'sdfsdf', ''),
(35, 'hhhhhhh', 'kamal@gmail.com', 'xcvmmmmmmmmmmmmmmmmmmmm', ''),
(33, 'dfgsdf', 'sanazmul5@gmail.com', 'sdafdsf sdf f', ''),
(29, 'ooooooo', 'kamal@gmail.com', 'sdfsdf', ''),
(25, 'MD NAZMUL HOSSAIN', 'csenazmul96@gmail.com', 'dfg dfg dfg fd fd dfgdf gdfg dg d aw 34 y5 yy', ''),
(34, 'Nazmul', 'kamal@gmail.com', 'sdfsd sdf sfd sdf sdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

DROP TABLE IF EXISTS `tbl_page`;
CREATE TABLE IF NOT EXISTS `tbl_page` (
  `pag_id` int(11) NOT NULL AUTO_INCREMENT,
  `pag_name` varchar(255) NOT NULL,
  `pag_slug` text NOT NULL,
  `pag_desc` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `update_at` varchar(255) NOT NULL,
  PRIMARY KEY (`pag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`pag_id`, `pag_name`, `pag_slug`, `pag_desc`, `image_path`, `created_at`, `update_at`) VALUES
(1, 'Contact', 'Contact me or just say HI', '\r\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam. Cras in maximus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n                        <p>Pellentesque facilisis lorem sed orci rhoncus, non sagittis sem hendrerit. Nam rhoncus molestie felis, eget laoreet tortor sagittis ac. Pellentesque sapien nunc, vehicula ut tortor sed, gravida tristique magna. Praesent nec finibus est. Maecenas a purus auctor, varius ligula sed, ultricies lacus. Vestibulum erat eros, interdum ut finibus efficitur, efficitur sit amet sem. Proin sed imperdiet arcu, eget auctor turpis.</p>\r\n\r\n                        <p>Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate. </p>', 'http://[::1]/blanca/uploads/blog-img-21.png', '2018-06-01 00:00:00', '2018-06-26 00:00:00'),
(2, 'About me', 'Why I love Winter: A short story', '                        &amp;lt;p&amp;gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam. Cras in maximus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;&amp;lt;/p&amp;gt;\r\n\r\n                        &amp;lt;p&amp;gt;Pellentesque facilisis lorem sed orci rhoncus, non sagittis sem hendrerit. Nam rhoncus molestie felis, eget laoreet tortor sagittis ac. Pellentesque sapien nunc, vehicula ut tortor sed, gravida tristique magna. Praesent nec finibus est. Maecenas a purus auctor, varius ligula sed, ultricies lacus. Vestibulum erat eros, interdum ut finibus efficitur, efficitur sit amet sem. Proin sed imperdiet arcu, eget auctor turpis.&amp;lt;/p&amp;gt;\r\n\r\n                        &amp;lt;p&amp;gt;Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate. &amp;lt;/p&amp;gt;', 'http://[::1]/blanca/uploads/cartoon3.png', '2018-06-01 00:00:00', 'Jun 16 2018'),
(3, 'Blog', 'Blog page', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam. Cras in maximus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;&lt;/p&gt;\r\n\r\n                        &lt;p&gt;Pellentesque facilisis lorem sed orci rhoncus, non sagittis sem hendrerit. Nam rhoncus molestie felis, eget laoreet tortor sagittis ac. Pellentesque sapien nunc, vehicula ut tortor sed, gravida tristique magna. Praesent nec finibus est. Maecenas a purus auctor, varius ligula sed, ultricies lacus. Vestibulum erat eros, interdum ut finibus efficitur, efficitur sit amet sem. Proin sed imperdiet arcu, eget auctor turpis.&lt;/p&gt;\r\n\r\n                        &lt;p&gt;Nullam non nisi ut dolor pellentesque eleifend. Aliquam commodo vitae risus malesuada varius. Nulla ornare lacus eu elit sollicitudin varius. Nulla aliquet ornare massa id tempor. Sed luctus dui non turpis sodales, ac tristique risus consequat. Donec tincidunt mi a magna rhoncus dapibus. Integer ut lectus euismod, dignissim tortor sed, imperdiet nibh. Donec urna nisl, sodales tincidunt lorem sit amet, vestibulum commodo tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tempor ex sed iaculis vulputate. &lt;/p&gt;', 'http://[::1]/blanca/uploads/sumi5.png', 'sdf', 'Jun 16 2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sectionbg`
--

DROP TABLE IF EXISTS `tbl_sectionbg`;
CREATE TABLE IF NOT EXISTS `tbl_sectionbg` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_name` varchar(255) NOT NULL,
  `sec_img` varchar(255) NOT NULL,
  `sec_page` varchar(255) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sectionbg`
--

INSERT INTO `tbl_sectionbg` (`sec_id`, `sec_name`, `sec_img`, `sec_page`) VALUES
(1, 'About me', 'http://[::1]/blanca/uploads/about-bg.jpg', 'about'),
(2, 'Contact', 'http://[::1]/blanca/uploads/contact-bg.jpg', 'Contact'),
(3, 'The Story', 'http://[::1]/blanca/uploads/sumi3.png', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `name`, `image`) VALUES
(1, 'first', 'http://[::1]/blanca/uploads/slider.jpg'),
(2, 'second', 'http://[::1]/blanca/uploads/slider2.jpg'),
(3, 'third3', 'http://[::1]/blanca/uploads/slider11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

DROP TABLE IF EXISTS `tbl_social`;
CREATE TABLE IF NOT EXISTS `tbl_social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `social_class` varchar(255) NOT NULL,
  `social_link` varchar(255) NOT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_class`, `social_link`) VALUES
(1, 'fa fa-pinterest', 'http://www.gmail.com'),
(2, 'fa fa-linkedin', 'www.facebook.com'),
(3, 'fa fa-twitter', 'http://www.gmail.com'),
(4, 'fa fa-facebook', 'http://www.gmail.com'),
(5, 'fa fa-pinterest', 'http://www.gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `fname`, `lname`, `email`, `password`, `role`, `image`, `des`) VALUES
(1, 'csenazmul96', 'Nazmul', 'Hossain', 'csenazmul96@gmail.com', '12345', 0, '', ''),
(2, 'shariful', 'Shariful', 'Islam', 'shariful@gmail.com', '12345', 0, '', ''),
(3, 'blanca', 'Amelia Smith', 'Hossain', 'BLANCA@gmail.com', '12345', 1, 'http://[::1]/blanca/uploads/yt-subscribe.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
