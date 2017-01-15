-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2011 at 06:39 AM
-- Server version: 5.1.52
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mohonaor_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `hit_counter`
--

CREATE TABLE IF NOT EXISTS `hit_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `hits` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hit_counter`
--

INSERT INTO `hit_counter` (`id`, `page_name`, `page_id`, `hits`) VALUES
(1, 'index.php', 1, 3269),
(2, 'home.php', 2, 1872),
(3, 'mverify.php', 3, 1297),
(4, 'password.php', 4, 1),
(5, 'averify.php', 5, 1255),
(6, 'anwar.php', 6, 2),
(7, 'more_links.php', 7, 1174),
(8, 'contact.php', 8, 985),
(9, 'about.php', 9, 346),
(10, 'privacy_policy.php', 10, 311),
(11, 'help.php', 11, 3498);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `siteurl` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `links`
--


-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE IF NOT EXISTS `passwords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `siteurl` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`id`, `sitename`, `siteurl`, `username`, `password`, `about`, `status`) VALUES
(1, 'Google Blogger', 'http://amarmoina.blogspot.com/', 'i.mohona@gmail.com', 'codename1102knd', 'you', 1),
(2, 'Gmail', 'http://www.gmail.com', 'i.mohona@gmail.com', 'codename1102knd', 'you', 1),
(3, 'Wordpress', 'http://www.wordpress.com', 'fiasco23', 'codename1102knd', 'you', 1),
(4, 'Yahoo!', 'http://mail.yahoo.com', 'arif1102@yahoo.com', 'codename1102knd', 'you', 1),
(5, 'Gmail', 'http://www.gmail.com', 'delwar.hossain.arif', 'codename1102knd', 'you', 1),
(6, 'Gmail', 'http://www.gmail.com', 'arif1102@gmail.com', 'codename1102knd', 'you', 1),
(7, 'Hotmail', 'http://www.hotmail.com', 'delwar.hossain.arif@hotmail.com', 'codename1102knd', 'you', 1),
(8, 'IUT - webmail', 'http://mail.iut-dhaka.edu', 'arif23', 'arif23', 'you', 1),
(9, 'Facebook', 'http://www.facebook.com', 'delwar.hossain.arif', 'codename1102knd', 'me', 1),
(10, 'Twitter', 'http://www.twitter.com', 'arif_1102', 'codename1102knd', 'me', 1),
(11, 'Last.fm', 'http://www.last.fm', 'arif_1102', 'codename1102knd', 'me', 1),
(12, 'eBuddy', 'http://www.ebuddy.com/', 'arif_1102', 'codename1102knd', 'you', 1),
(13, 'Mig33', 'http://www.mig33.com', 'sparky_boy_arif', '?????????????????', 'me', 1),
(14, 'Mig33', 'http://www.mig33.com', 'skywalker1102', 'arif23', 'me', 1),
(15, 'ATM pincode', '#', '-------', '7109', 'you', 1),
(16, 'Youtube', 'http://www.youtube.com', 'arif074423', 'codename1102knd', 'you', 1),
(17, 'Hotmail Skydrive', 'http://www.hotmail.com', 'delwar.hossain.arif@hotmail.com', 'codename1102knd', 'you', 1),
(18, 'Google Photo', 'http://picasaweb.google.com', 'i.mohona@gmail.com', 'codename1102knd', 'you', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `name`, `username`, `password`, `usertype`, `email`, `status`) VALUES
(1, 'Delwar Hossain Arif', 'arif', 'admin', 'codename1102knd', 'admin', 'arif23@mohona.org', 1),
(2, 'Mahjabin Afroz Mohona', 'mohona', 'master', 'ziY2HL85koH42bdD', 'master', 'i.mohona@gmail.com', 1),
(3, 'Mahjabin Afroz Mohona', 'mohona', 'mohona', '9QNYU069t8WXQ1CA8Z9NL5976GPG9BCQ', 'privileged', 'i.mohona@gmail.com', 1),
(4, 'Anwar-ul-Karim Bappi', 'anwar', 'anwar', '8xFtTvkjsnMsQIk3wJsvoefdV8174Us0', 'privileged', 'anwar_1101@mohona.org', 1);
