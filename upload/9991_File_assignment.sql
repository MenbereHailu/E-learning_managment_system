-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2017 at 02:58 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` int(11) NOT NULL AUTO_INCREMENT,
  `descreption` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `value` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `aloc` varchar(255) NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `descreption`, `name`, `start_time`, `end_time`, `value`, `teacher_id`, `student_id`, `class_id`, `aloc`) VALUES
(27, 'breafly explain', 'assignment1', '2017-05-23 17:15:32', '0000-00-00 00:00:00', 0, 13, 0, 29, '../upload/5116_File_Documentphppp.rtf'),
(28, 'sdfghjk', 'assignment1', '2017-05-23 17:45:50', '0000-00-00 00:00:00', 0, 13, 0, 30, '../upload/3170_File_BACKGROUND.docx'),
(29, 'sdfghjk', 'sdfghjk', '2017-05-23 17:56:38', '0000-00-00 00:00:00', 0, 14, 0, 32, '../upload/9629_File_go.docx'),
(32, 'sdfgghghh', 'sdfghjk', '2017-05-23 18:13:33', '0000-00-00 00:00:00', 0, 0, 33, 32, '../upload/7010_File_Documentphppp.rtf'),
(33, 'asdfghj', 'assignment1', '2017-05-23 18:15:52', '0000-00-00 00:00:00', 0, 0, 33, 30, '../upload/3314_File_CHAPTER 06.doc'),
(34, 'please do it properly', 'assignment 2', '2017-05-25 10:39:24', '0000-00-00 00:00:00', 0, 13, 0, 30, '../upload/3332_File_3105_File_Chapter 1(1).ppt'),
(35, 'please do it  first and second question', 'assignment 3', '2017-05-25 10:42:41', '0000-00-00 00:00:00', 0, 13, 0, 30, '../upload/1313_File_Chapter 3.doc');
