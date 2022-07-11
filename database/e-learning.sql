-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2017 at 07:43 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `replied`, `question_id`, `answer_detail`, `datetime`, `teacher_id`, `student_id`, `like`) VALUES
(10, 0, '56', 'their are many theories of personality .some are cognitive social theory, humanistic theory and others.', '2017-06-17 07:40:11', 0, 38, 0),
(12, 0, '56', 'ya the same to mahlet in additon to this there are some other theories like trait theory,social loffing,and others.', '2017-06-17 07:51:50', 20, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(28, 29, 'True,False', 'True'),
(29, 30, 'Procedural language. ,None- Procedural language. , Data definition language. ,High level language. ', 'High level language. '),
(30, 31, 'True,False', 'True'),
(31, 32, ' DSS ,MIS ,ESS , TPS ', ' TPS '),
(32, 33, ' Serve managers interested in weekly, monthly, and yearly results, not day-to-day activities. ,Help managers make decisions that are unique, rapidly changing, and not easily specified in advance. ,Provide mangers with a generalized computing and telecommu', '. Perform and record the daily routine transactions necessary to the conduct of business'),
(33, 34, 'True,False', 'False'),
(34, 35, 'true,false', 'false');

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
  `status` int(11) NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `descreption`, `name`, `start_time`, `end_time`, `value`, `teacher_id`, `student_id`, `class_id`, `aloc`, `status`) VALUES
(82, 'individual assignment', 'assignment 1', '2017-06-17 07:18:01', '2017-06-23 00:00:00', 0, 20, 0, 39, '../upload/8074_File_1.docx', 0),
(83, 'individual', 'assignment 1', '2017-06-17 07:22:52', '0000-00-00 00:00:00', 0, 0, 37, 39, '../upload/9695_File_832-S2004.pdf', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `section_id`, `course_id`, `teacher_id`, `student_id`) VALUES
(39, '4a', 'networking', '20', 0),
(38, '1a', 'database', '15', 0),
(37, '2a', 'pdf', '15', 0),
(36, '2a', 'managment', '15', 0),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_title`, `credithour`) VALUES
(10, 'insy 1010 ', 'database', 3),
(11, 'cs1919', 'graphics', 3),
(17, 'mgt123', 'managment', 2),
(18, 'mgt 1348', 'inroduction to psychology', 3),
(19, 'inst 1190', 'networking', 4);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `incharge`, `title`, `department`) VALUES
(30, 'mohammed', 'head', 'psychology'),
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
  `status` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `status`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`) VALUES
(58, 0, '../upload/6339_File_Chapter4.pdf', '2017-06-17 06:49:24', 'chapter 7', 20, 39, 'chapter 7'),
(57, 0, '../upload/1075_File_Chapter 1.pptx', '2017-06-17 06:46:15', 'about introduction  to  network', 20, 39, 'chapter one');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`news_id`, `head`, `information`, `date`) VALUES
(1, 'Congradulation.', 'Dr. Sisay Yifru, the current Dean of College of Medicine and Health Sciences, UoG, receives one of the highest and prestigious Ã¢â‚¬Å“Young rising star awardÃ¢â‚¬Â', '2017-05-23 02:22:36'),
(3, 'EXIT EXAM', 'every student that is going to be graduated must to take the exit exam this comming thusday at 2:00AM', '2017-06-17 06:36:07');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `heading`, `question_detail`, `datetime`, `teacher_id`, `student_id`, `subtopic_id`, `views`) VALUES
(54, 'means of stress', 'whats are the cause of stress ?', '2017-05-19 19:49:50', 10, 0, 22, 20),
(56, 'theory', 'what are the theories of personality', '2017-06-17 07:29:22', 0, 37, 3, 24);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question`, `type`, `quiz_id`) VALUES
(31, 31, ' Information systems that monitor the elementary activities and transactions of the organizations', 'tf', 1),
(32, 32, ' Projections and responses to queries are information output characteristics associated with a (n) ', 'mc', 1),
(33, 33, ' Management information systems usually: ', 'mc', 1),
(34, 34, 'networking is branch of psychology', 'tf', 1),
(35, 35, 'peer to peer network requires at least 100 people', 'tf', 1);

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
  `status` int(11) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `descreption`, `start_time`, `end_time`, `value`, `time_allowed`, `teacher_id`, `class_id`, `status`) VALUES
(1, 'quiz 1', '2017-06-17 07:04:59', '2017-06-17 00:00:00', 5, '02:00:00', 20, 39, 0);

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
  `status` int(11) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `result`
--


-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_year` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_year`, `department`) VALUES
(10, '1a', 'computer science'),
(11, '1a', 'information systems'),
(12, '2a', 'information systems'),
(13, '2a', 'computer science'),
(14, '1b', 'computer science'),
(15, '2b', 'information science'),
(16, '3a', 'managment'),
(17, '3b', 'managment'),
(18, '4a', 'information systems');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `section_year`, `course_id`, `teacher_id`, `username`, `password`, `location`, `department`) VALUES
(41, 'meseret', 'kebede', '', '', 0, 'meseret', 'bWVzZXJldA==', '../upload/1151.06.jpg', 'information systems'),
(37, 'menbere', 'hailu', '', '', 0, 'menbere', 'bWVuYmVyZQ==', '../upload/1.JPG', 'information systems'),
(38, 'mahlet', 'nigus', '', '', 0, 'mahlet', 'bWFobGV0', '../upload/1124.06.jpg', 'information systems'),
(39, 'beza', 'alem', '', '', 0, 'beza', 'YmV6YQ==', '../upload/0996.06.jpg', 'information technology'),
(40, 'adina', 'wubalem', '', '', 0, 'adina', 'YWRpbmE=', '../upload/0932.06.jpg', 'psychology'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`subtopic_id`, `subtopic_name`, `subtopic_description`, `s_status`, `topic_id`) VALUES
(3, 'theories of personality', 'about theory', 'discuss', 27),
(4, 'database connection', 'connectivity', 'connect', 29),
(5, 'materials  for instalation', 'material', 'network', 30);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `sws`
--

INSERT INTO `sws` (`sws_id`, `student_id`, `teacher_id`, `section_year`, `course_id`, `class_id`) VALUES
(78, 41, 19, '', '', 39),
(77, 38, 20, '4a', 'networking', 39),
(76, 37, 20, '4a', 'networking', 39),
(75, 33, 15, '2a', 'managment', 36),
(73, 34, 15, '2a', 'managment', 36),
(74, 32, 15, '1a', 'database', 38),
(70, 31, 15, '1a', 'pdf', 34),
(71, 32, 15, '1a', 'pdf', 34),
(67, 35, 15, '1a', 'managment', 33),
(72, 35, 15, '2a', 'managment', 36),
(69, 32, 15, '1a', 'managment', 33),
(66, 33, 14, '2a', 'graphics', 32),
(65, 34, 14, '2a', 'graphics', 32),
(64, 34, 13, '2a', 'database', 30),
(63, 33, 13, '2a', 'database', 30),
(57, 31, 13, '1a', 'graphics', 29),
(58, 32, 13, '1a', 'graphics', 29),
(79, 41, 20, '4a', 'networking', 39);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `department`, `student_id`, `location`) VALUES
(22, 'narayana', 'bmFyYXlhbmE=', 'narayana', 'mohamod', 'managment', 0, '../upload/fb2.jpg'),
(19, 'selemon', 'c2VsZW1vbg==', 'selemon', 'abebe', 'managment', 0, 'uploads/2017-01-25-17-51-12-771.jpg'),
(20, 'mulualem', 'bXVsdWFsZW0=', 'mulualem', 'bitew', 'information systems', 0, '../upload/fb1.jpg'),
(21, 'sewale', 'c2V3YWxl', 'sewale', 'abebe', 'computer science', 0, '../upload/fb1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course`
--

CREATE TABLE IF NOT EXISTS `teacher_course` (
  `teacher_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `teacher_course`
--

INSERT INTO `teacher_course` (`teacher_course_id`, `course_id`, `teacher_id`) VALUES
(37, 11, 15),
(36, 17, 15),
(35, 11, 14),
(34, 11, 13),
(33, 10, 13),
(38, 16, 15),
(39, 10, 15),
(40, 10, 18),
(41, 19, 20);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
(8, 'student', 'menbere.hailu@facebook.com', '0932246787', 'shiro', 'tizu', 'sara', 0, 35, 0),
(9, 'instuctor', 'mulualem@gmail.com', '0932457789', 'shiro', 'asemre', 'girma', 20, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `topic_type`) VALUES
(27, 'personality', 'psychology'),
(29, 'php data connectivity', 'php'),
(30, 'network  instalation', 'network');

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
