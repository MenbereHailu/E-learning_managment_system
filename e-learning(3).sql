-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2017 at 08:40 AM
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
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `replied` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `answer_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `like` int(20) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answer`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(1, 1, 'True,False', 'False'),
(2, 2, 'query,language ,button action,none', 'query'),
(3, 3, 'by,mo,cya,none', 'by'),
(4, 4, 'b,c,d,e', 'e'),
(5, 5, 'True,False', 'True'),
(6, 6, 'True,False', 'True');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `descreption`, `name`, `start_time`, `end_time`, `value`, `teacher_id`, `student_id`, `class_id`, `aloc`) VALUES
(72, 'please submit on date', 'assignmentone', '2017-06-01 10:50:04', '2017-06-03 00:00:00', 0, 15, 0, 33, '../upload/4833_File_5115ijcseit01.pdf'),
(73, 'this is for group 2 student', 'assignmentone', '2017-06-01 10:51:47', '0000-00-00 00:00:00', 0, 0, 35, 33, '../upload/2317_File_5115ijcseit01.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `section_id`, `course_id`, `teacher_id`, `student_id`) VALUES
(33, '1a', 'managment', '15', 0),
(32, '2a', 'graphics', '14', 0),
(29, '1a', 'graphics', '13', 0),
(30, '2a', 'database', '13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `name`, `email`, `comment`, `date`) VALUES
(2, 'fghj', 'menbere.hailu@facebook.com', 'fgfhgjh', '0000-00-00 00:00:00'),
(3, 'fghbjnj', 'cfbjhnkjhgcg', 'fghjiut67ilmgfgdtyirresdvbnn,n', '2017-05-23 01:33:24'),
(4, 'jggggh', 'mulualem@gmail.com', 'hjgjbjn', '2017-05-26 09:17:39'),
(5, 'amele', 'amele@gmail.com', 'good', '2017-06-01 05:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `credithour` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_title`, `credithour`) VALUES
(10, 'insy 1010 ', 'database', 3),
(11, 'cs1919', 'graphics', 3),
(16, 'mgmt234', 'pdf', 3),
(17, 'mgt123', 'managment', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `incharge` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `incharge`, `title`, `department`) VALUES
(28, 'zerihun', 'head', 'managment'),
(27, 'getachew', 'head', 'biology'),
(26, 'alemu', 'head', 'information science'),
(24, 'tewodros', 'head', 'computer science'),
(25, 'abebe', 'head', 'information technology'),
(23, 'worku abebe', 'head', 'information systems');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`) VALUES
(49, '../upload/5407_File_home.png', '2017-05-30 17:54:06', 'gjgkh', 15, 34, 'fgg'),
(48, '../upload/6778_File_LOGO.docx', '2017-05-23 17:56:01', 'bbbbbbbbbbbbbbbbbbbbbbb', 14, 32, 'dfhgjjkjlk'),
(46, '../upload/1596_File_CHAPTER 06.doc', '2017-05-23 17:14:49', 'hci', 13, 29, 'chapter 6'),
(47, '../upload/6915_File_Chapter-2.docx', '2017-05-23 17:45:12', 'sdfghh', 13, 30, 'chapter 2'),
(50, '../upload/9797_File_Using and writing functions.docx', '2017-05-30 17:59:46', 'this is the o', 15, 34, 'tfhghj'),
(51, '../upload/5667_File_Chapter 5.pdf', '2017-05-30 18:00:35', 'sdfghjkl', 15, 34, 'networking'),
(52, '../upload/8591_File_project.pdf', '2017-05-31 08:46:36', 'dddddd', 35, 33, 'asse');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE IF NOT EXISTS `newsfeed` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`news_id`, `head`, `information`, `date`) VALUES
(1, 'Congradulation.', 'Dr. Sisay Yifru, the current Dean of College of Medicine and Health Sciences, UoG, receives one of the highest and prestigious Ã¢â‚¬Å“Young rising star awardÃ¢â‚¬Â', '2017-05-23 02:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `question_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subtopic_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `heading`, `question_detail`, `datetime`, `teacher_id`, `student_id`, `subtopic_id`, `views`) VALUES
(53, 'fghj', 'gfcghhgv', '2017-05-18 18:22:02', 0, 25, 15, 0),
(54, 'means of stress', 'whats are the cause of stress ?', '2017-05-19 19:49:50', 10, 0, 22, 20);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `type` varchar(2) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question`, `type`, `quiz_id`) VALUES
(1, 1, 'database is one of programing language', 'tf', 1),
(2, 2, 'data fron the database retrived by ', 'mc', 1),
(3, 3, 'hi', 'mc', 4),
(4, 4, 'a', 'mc', 5),
(5, 5, 'a', 'tf', 6),
(6, 6, 'dxfcg', 'tf', 7);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `descreption` varchar(255) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `value` int(11) NOT NULL,
  `time_allowed` time NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `descreption`, `start_time`, `end_time`, `value`, `time_allowed`, `teacher_id`, `class_id`) VALUES
(1, 'first quiz', '2017-05-29 04:42:32', '2017-05-29 00:00:00', 10, '01:00:00', 13, 30),
(2, 'quiz 1', '2017-05-29 11:05:37', '2017-05-23 00:00:00', 10, '01:00:00', 15, 0),
(3, 'wewe', '2017-05-30 17:16:40', '2017-05-29 00:00:00', 10, '01:00:00', 15, 33),
(4, 'accedent', '2017-05-31 11:01:26', '2017-06-02 00:00:00', 10, '01:00:00', 15, 33),
(5, 'quizone', '2017-06-01 12:21:59', '2017-06-02 00:00:00', 10, '01:00:00', 15, 33),
(6, 'sub', '2017-06-02 20:03:42', '2017-06-03 00:00:00', 10, '02:00:00', 15, 33),
(7, 'qqqq', '2017-06-02 20:37:50', '2017-06-29 00:00:00', 10, '03:00:00', 15, 33);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `assignment_name` varchar(255) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `result_q` int(11) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `assignment_id`, `assignment_name`, `quiz_id`, `quiz_name`, `student_id`, `teacher_id`, `class_id`, `result`, `result_q`) VALUES
(1, 73, 'assignmentone', 0, '', 35, 15, 33, 15, 0),
(22, 0, '', 5, 'quizone', 35, 15, 33, 0, 10),
(25, 0, '', 6, 'sub', 15, 15, 33, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_year` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_year`, `department`) VALUES
(10, '1a', 'computer science'),
(11, '1a', 'information systems'),
(12, '2a', 'information systems'),
(13, '2a', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `section_year` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `section_year`, `course_id`, `teacher_id`, `username`, `password`, `location`, `department`) VALUES
(32, 'mastewal', 'hizkel', '', '', 0, 'mastewal', '123', '../upload/2017-01-25-17-50-56-325.jpg', 'information systems'),
(33, 'menbere', 'kassa', '', '', 0, 'menbere', '123', '../upload/2017-01-25-20-42-06-761.jpg', 'computer science'),
(34, 'meseret', 'gedif', '', '', 0, 'meseret', '123', '../upload/2017-02-11-10-52-08-719.jpg', 'computer science'),
(35, 'hiwot', 'tesfaye', '', '', 0, 'hiwot', 'YmFiYQ==', '../upload/home.png', 'information technology');

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE IF NOT EXISTS `subtopic` (
  `subtopic_id` int(11) NOT NULL AUTO_INCREMENT,
  `subtopic_name` varchar(50) NOT NULL,
  `subtopic_description` varchar(500) NOT NULL,
  `s_status` varchar(20) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`subtopic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `subtopic`
--


-- --------------------------------------------------------

--
-- Table structure for table `sws`
--

CREATE TABLE IF NOT EXISTS `sws` (
  `sws_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `section_year` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`sws_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `sws`
--

INSERT INTO `sws` (`sws_id`, `student_id`, `teacher_id`, `section_year`, `course_id`, `class_id`) VALUES
(70, 31, 15, '1a', 'pdf', 34),
(71, 32, 15, '1a', 'pdf', 34),
(67, 35, 15, '1a', 'managment', 33),
(69, 32, 15, '1a', 'managment', 33),
(66, 33, 14, '2a', 'graphics', 32),
(65, 34, 14, '2a', 'graphics', 32),
(64, 34, 13, '2a', 'database', 30),
(63, 33, 13, '2a', 'database', 30),
(57, 31, 13, '1a', 'graphics', 29),
(58, 32, 13, '1a', 'graphics', 29);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `department`, `student_id`, `location`) VALUES
(15, 'girma', 'MTIzNA==', 'girma', 'girma', 'information technology', 0, '../upload/home.png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course`
--

CREATE TABLE IF NOT EXISTS `teacher_course` (
  `teacher_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `teacher_course`
--

INSERT INTO `teacher_course` (`teacher_course_id`, `course_id`, `teacher_id`) VALUES
(37, 11, 15),
(36, 17, 15),
(35, 11, 14),
(34, 11, 13),
(33, 10, 13),
(38, 16, 15);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_information`
--

CREATE TABLE IF NOT EXISTS `teacher_information` (
  `teacher_information_id` int(11) NOT NULL AUTO_INCREMENT,
  `occupation` varchar(200) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `question1` varchar(200) NOT NULL,
  `question2` varchar(200) NOT NULL,
  `question3` varchar(200) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_information_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `teacher_information`
--

INSERT INTO `teacher_information` (`teacher_information_id`, `occupation`, `mobile`, `email`, `question1`, `question2`, `question3`, `teacher_id`, `student_id`, `user_id`) VALUES
(1, 'instructor', 'hjhbj', '0932246787', 'rice', 'selam', 'abebe', 0, 0, 12),
(2, 'student', '098765432', 'menbere@gmail.com', 'ma', 'ba', 'ca', 0, 33, 0),
(4, 'teacher', '098765432', 'm@gmail.com', 'we', 're', 'te', 13, 0, 0),
(5, 'admin', 'mulualem@gmail.com', '0932246787', 'shiro', 'tizu', 'sara', 0, 0, 12),
(6, 'instructor', 'menbere.hailu@facebook.com', '0932246787', 'rice', 'tizu', 'temesgen', 15, 0, 0),
(7, 'admin', 'muluaem@gmail.com', '0932246787', 'shiro', 'selam', 'sara', 0, 0, 19),
(8, 'student', 'menbere.hailu@facebook.com', '0932246787', 'shiro', 'tizu', 'sara', 0, 35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_student`
--

CREATE TABLE IF NOT EXISTS `teacher_student` (
  `teacher_student_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `teacher_student`
--

INSERT INTO `teacher_student` (`teacher_student_id`, `teacher_id`, `student_id`) VALUES
(39, 15, 32);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(50) NOT NULL,
  `topic_type` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `topic_type`) VALUES
(27, 'personality', 'psychology'),
(28, 'stress', 'psychology'),
(29, 'php data connectivity', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(12, 'menbere', 'amele', 'menbere', 'hailu'),
(19, 'amele', 'bWVuYmk=', 'amele', 'amele');
