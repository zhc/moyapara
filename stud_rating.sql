-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2012 at 01:03 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stud_rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject_id_2` (`subject_id`,`date`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=482 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `subject_id`, `date`) VALUES
(352, 10, 1346796000),
(353, 10, 1347400800),
(354, 10, 1348005600),
(355, 10, 1348610400),
(356, 10, 1349215200),
(357, 10, 1349820000),
(358, 10, 1350424800),
(359, 10, 1351029600),
(360, 10, 1351634400),
(361, 10, 1352239200),
(362, 10, 1352844000),
(363, 10, 1353448800),
(364, 10, 1354053600),
(365, 10, 1354658400),
(366, 10, 1355263200),
(367, 10, 1355868000),
(368, 10, 1356472800),
(369, 11, 1346709600),
(370, 11, 1347314400),
(371, 11, 1347919200),
(372, 11, 1348524000),
(373, 11, 1349128800),
(374, 11, 1349733600),
(375, 11, 1350338400),
(376, 11, 1350943200),
(377, 11, 1351548000),
(378, 11, 1352152800),
(379, 11, 1352757600),
(380, 11, 1353362400),
(381, 11, 1353967200),
(382, 11, 1354572000),
(383, 11, 1355176800),
(384, 11, 1355781600),
(385, 11, 1356386400),
(448, 14, 1346731200),
(449, 14, 1347336000),
(450, 14, 1347940800),
(451, 14, 1348545600),
(452, 14, 1349150400),
(453, 14, 1349755200),
(454, 14, 1350360000),
(455, 14, 1350964800),
(456, 14, 1351569600),
(457, 14, 1352174400),
(458, 14, 1352779200),
(459, 14, 1353384000),
(460, 14, 1353988800),
(461, 14, 1354593600),
(462, 14, 1355198400),
(463, 14, 1355803200),
(464, 14, 1356408000),
(465, 15, 1346889000),
(466, 15, 1347493800),
(467, 15, 1348098600),
(468, 15, 1348703400),
(469, 15, 1349308200),
(470, 15, 1349913000),
(471, 15, 1350517800),
(472, 15, 1351122600),
(473, 15, 1351727400),
(474, 15, 1352332200),
(475, 15, 1352937000),
(476, 15, 1353541800),
(477, 15, 1354146600),
(478, 15, 1354751400),
(479, 15, 1355356200),
(480, 15, 1355961000),
(481, 15, 1356565800);

-- --------------------------------------------------------

--
-- Table structure for table `class_presences`
--

CREATE TABLE IF NOT EXISTS `class_presences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `presence` int(11) NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id_2` (`student_id`,`class_id`),
  KEY `student_id` (`student_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=99 ;

--
-- Dumping data for table `class_presences`
--

INSERT INTO `class_presences` (`id`, `student_id`, `class_id`, `presence`, `description`) VALUES
(76, 22, 352, 1, '""'),
(77, 23, 352, 1, '""'),
(78, 24, 352, 1, '""'),
(79, 25, 352, 1, '""'),
(80, 26, 352, 1, '""'),
(81, 27, 352, 1, '""'),
(82, 28, 352, 1, '""'),
(83, 29, 352, 1, '""'),
(84, 22, 369, 1, '""'),
(85, 23, 369, 1, '""'),
(86, 24, 369, 1, '""'),
(87, 25, 369, 1, '""'),
(88, 26, 369, 1, '""'),
(89, 27, 369, 1, '""'),
(90, 28, 369, 1, '""'),
(91, 29, 369, 1, '""'),
(96, 33, 448, 1, '""'),
(97, 34, 448, 1, '""'),
(98, 35, 448, 1, '""');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(13, 'МО-12-2'),
(15, 'ФИИТ-12');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `group_id`) VALUES
(22, 'Тарасов Айыы-Сиэн', 13),
(23, 'Булатов Афанасий', 13),
(24, 'Егорова Сахаайа', 13),
(25, 'Слепцова Анна', 13),
(26, 'Борисова Елена', 13),
(27, 'Павлова Ньургуйаана', 13),
(28, 'Дьяконов Айтал', 13),
(29, 'Семенова Любовь', 13),
(33, 'Студент1', 15),
(34, 'Студент2', 15),
(35, 'Студент3', 15);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `group_id`) VALUES
(10, 'Языки программирования', 13),
(11, 'Практикум на ЭВМ', 13),
(14, 'Введение в программирование', 15),
(15, 'Практикум на ЭВМ', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `task_category_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `assigned_date` int(11) NOT NULL,
  `ball` float NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `task_category_id` (`task_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `subject_id`, `task_category_id`, `name`, `description`, `assigned_date`, `ball`) VALUES
(2, 14, 9, 'adasdasd', '', 1346916804, 1),
(3, 14, 11, 'asdfsdf', '', 1346916822, 1),
(4, 14, 10, 'asdasd', 'asdasdasdasdasdasd\nasdasdasd\nasdasd\nasdasd', 1346916876, 1),
(5, 14, 11, 'Зад1', 'ыаваывавыавыаыв', 1346982744, 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_categories`
--

CREATE TABLE IF NOT EXISTS `task_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `task_categories`
--

INSERT INTO `task_categories` (`id`, `subject_id`, `name`, `description`) VALUES
(9, 14, 'Офвавыавы', ''),
(10, 14, 'фыаываыв', ''),
(11, 14, 'аывфа ыва', '');

-- --------------------------------------------------------

--
-- Table structure for table `task_students`
--

CREATE TABLE IF NOT EXISTS `task_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `complete_date` int(11) NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `task_id` (`task_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `task_students`
--

INSERT INTO `task_students` (`id`, `task_id`, `student_id`, `complete_date`, `description`) VALUES
(8, 2, 33, 1346986699, ''),
(9, 2, 34, 1346986700, ''),
(11, 3, 33, 1346986702, ''),
(13, 3, 35, 1346986703, ''),
(15, 4, 34, 1346986704, ''),
(16, 4, 35, 1346986705, ''),
(17, 5, 35, 1346986706, ''),
(18, 5, 34, 1346986706, ''),
(19, 5, 33, 1346986707, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `class_presences`
--
ALTER TABLE `class_presences`
  ADD CONSTRAINT `class_presences_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `class_presences_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tasks_ibfk_4` FOREIGN KEY (`task_category_id`) REFERENCES `task_categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `task_categories`
--
ALTER TABLE `task_categories`
  ADD CONSTRAINT `task_categories_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `task_students`
--
ALTER TABLE `task_students`
  ADD CONSTRAINT `task_students_ibfk_3` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `task_students_ibfk_4` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
