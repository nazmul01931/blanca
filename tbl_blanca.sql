-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2018 at 05:37 AM
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
(13, 'interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 2, 'http://[::1]/blanca/uploads/blog-img-1.png', '2018-06-01 00:00:00', '2018-06-12 00:00:00'),
(2, 'Rackham.The standard chunk of Lorem ', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ', '2', 3, 'http://[::1]/blanca/uploads/blog-img-1.png', '2018-06-01 00:00:00', '2018-06-11 00:00:00'),
(7, 'Reproduced below for The those interested.', 'Reproduced below for those interested. reproduced below for those interested.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 3, 'http://[::1]/blanca/uploads/3.jpg', '2018-06-01 00:00:00', '2018-06-18 00:00:00'),
(9, ' Ipsum used since the 1500s is reproduced below for those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 4, 'http://[::1]/blanca/uploads/11.jpg', '2018-06-01 00:00:00', '2018-06-27 00:00:00'),
(10, ' reproduced below for those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 3, 'http://[::1]/blanca/uploads/blog-img-21.png', '2018-06-01 00:00:00', '2018-06-26 00:00:00'),
(14, ' reproduced below for those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 3, 'http://[::1]/blanca/uploads/22.jpg', '2018-06-01 00:00:00', '2018-06-26 00:00:00'),
(15, 'The standard chunk of Lorem  interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 2, 'http://[::1]/blanca/uploads/1.jpg', '2018-06-02 00:00:00', '2018-06-17 00:00:00'),
(16, 'The or those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 2, 'http://[::1]/blanca/uploads/21.jpg', '2018-06-01 00:00:00', '2018-06-25 00:00:00'),
(17, 'below for those interested.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '1', 2, 'http://[::1]/blanca/uploads/blog-img-2.png', '2018-06-01 00:00:00', '2018-06-03 00:00:00'),
(27, 'The standard chunk of those interested.2', 'sdfsdfcvb cvbc fx fg ', '1', 1, 'http://[::1]/blanca/uploads/31.jpg', '', 'Jun 13 2018'),
(28, 'The standard chunk of those interested.2', 'sfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '1', 3, 'http://[::1]/blanca/uploads/blog-img-22.png', 'Jun 13 2018', 'Jun 13 2018');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_desc`, `cat_create_at`) VALUES
(1, 'Winter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '2018-06-05 18:00:00'),
(2, 'Love', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '2018-06-20 18:00:00'),
(3, 'Snow', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '2018-06-19 18:00:00'),
(4, 'January', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla p', '2018-06-27 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(255) NOT NULL,
  `com_email` varchar(255) NOT NULL,
  `com_message` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `com_create_at` timestamp NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`com_id`, `com_name`, `com_email`, `com_message`, `post_id`, `com_create_at`) VALUES
(1, 'Nazmul', 'csenazmul96@gmail.com', 'Nice Product', 11, '2018-05-31 18:00:00'),
(2, 'Bokker', 'bokker@gmail.com', 'Not good product', 12, '2018-06-13 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

DROP TABLE IF EXISTS `tbl_info`;
CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` text NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `info`, `email`) VALUES
(1, 'HELLO WORLD, MY NAME IS BLANCA\r\n\r\n', 'csenazmul96@gmail.com'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna.', 'I’m Amelia Smith');

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
  PRIMARY KEY (`pag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`pag_id`, `pag_name`, `pag_slug`, `pag_desc`) VALUES
(1, 'About', 'Contact me or just say HI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat. Proin nec interdum sem. Quisque in porttitor magna, a imperdiet est. Donec accumsan justo nulla, sit amet varius urna laoreet vitae. Maecenas feugiat fringilla metus. Nullam semper ornare quam eu sagittis. Curabitur ornare sem eu dapibus rutrum. Sed lobortis eros ut sapien lobortis, euismod dignissim odio interdum. Integer finibus molestie tellus sit amet egestas. Aliquam ullamcorper magna in ipsum sollicitudin imperdiet consectetur vitae nunc. Maecenas vel erat et erat lobortis porttitor ac id diam.');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sectionbg`
--

INSERT INTO `tbl_sectionbg` (`sec_id`, `sec_name`, `sec_img`, `sec_page`) VALUES
(1, 'About us', 'about-bg.jpg', 'about'),
(2, 'Contact page section', 'contact-bg.jpg', 'contact'),
(3, 'Blog page section ', 'blog-bg.jpg', 'blog');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_class`, `social_link`) VALUES
(1, 'fa fa-pinterest', 'http://www.gmail.com'),
(2, 'fa fa-linkedin', 'www.facebook.com'),
(3, 'fa fa-twitter', 'http://www.gmail.com'),
(4, 'fa fa-facebook', 'http://www.gmail.com'),
(5, 'fa fa-pinterest', 'http://www.gmail.com'),
(6, 'fa fa-dribbble', 'www.facebook.com');

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
