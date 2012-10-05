-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2012 at 03:20 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.4

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=388 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `subject_id`, `date`) VALUES
(352, 10, 1346796000),
(353, 10, 1347400800),
(354, 10, 1348005600),
(386, 10, 1348437600),
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
(387, 11, 1348444200),
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
(385, 11, 1356386400);

-- --------------------------------------------------------

--
-- Table structure for table `class_presences`
--

CREATE TABLE IF NOT EXISTS `class_presences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id_2` (`student_id`,`class_id`),
  KEY `student_id` (`student_id`),
  KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=139 ;

--
-- Dumping data for table `class_presences`
--

INSERT INTO `class_presences` (`id`, `student_id`, `class_id`, `description`) VALUES
(127, 22, 387, ''),
(128, 24, 387, ''),
(129, 26, 387, ''),
(130, 28, 387, ''),
(131, 23, 386, ''),
(132, 24, 386, ''),
(133, 25, 386, ''),
(134, 26, 386, ''),
(135, 27, 386, ''),
(136, 28, 386, ''),
(137, 23, 369, ''),
(138, 24, 369, '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(13, 'МО-12-2'),
(22, 'ПМ-03'),
(23, 'МО-11-2');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(2, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

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
(40, 'Григорьев Александр', 22),
(41, 'Борисов Виктор', 22),
(42, 'Студент1', 23),
(43, 'Студент2', 23),
(46, 'asdfsdfasd', 23);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `group_id`) VALUES
(10, 'Языки программирования', 13),
(11, 'Практикум на ЭВМ', 13);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `task_categories`
--

INSERT INTO `task_categories` (`id`, `subject_id`, `name`, `description`) VALUES
(26, 10, 'Лабораторка', ''),
(27, 10, 'Домашка', ''),
(28, 11, 'Реферат', ''),
(29, 11, 'Отстой', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES
(2, 'ololO@mail.ru', 'zhc', '682ae9ef4f95f1a302b398e2935c1c6d', 37, 1348458338);

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `type`, `created`, `expires`) VALUES
(1, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'a74772dd699e4c09b11efac2233877719ce251c8', '', 1347514085, 1348723685),
(2, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'adad6117e9301508efc37a85f0ce08c458684952', '', 1347514087, 1348723687),
(3, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'be2835ad5053ed8b6247f85f46a1a73c42625fc7', '', 1347514087, 1348723687),
(4, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '60491fd31df18c4144e5cf8f47935d43bcd72edd', '', 1347514087, 1348723687),
(5, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '98d8c17639f1b3ff5ef94c6fa330c6e5b2abf206', '', 1347514087, 1348723687),
(6, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '9b73a675dd1f4abb4b954b6c5c6ea580ddf4979d', '', 1347514088, 1348723688),
(7, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '3bbefc0d235a5ec84685a5ff08e7ec926b0f6cb5', '', 1347514088, 1348723688),
(8, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '80ab9cea5343770497ae21b29fd202805de78c5b', '', 1347514088, 1348723688),
(9, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '7b602954744d954ada9a2cdd594b05eb891f309f', '', 1347514089, 1348723689),
(10, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '59f35da8d5dd82b16479a7f0fced680f594e36c9', '', 1347514089, 1348723689),
(11, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'b6778b1b86cf6f50dccf7a4c841f6cb15fe08c0b', '', 1347514090, 1348723690),
(12, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'b54fd0c165335034c160d063d3711da45cd16380', '', 1347514090, 1348723690),
(13, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '316384ff84a745263ab2e0b3d6ed42940216cab8', '', 1347514090, 1348723690),
(14, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '260e643d256df9251318fdff8af119480d4dd366', '', 1347514091, 1348723691),
(15, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'cedd2ee2bf69e1e70eb7c9b57a44ffe30e020e3f', '', 1347514091, 1348723691),
(16, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'aad5e03bc3a7e6b0e12b2dbc88ccfcd0e80196fe', '', 1347514092, 1348723692),
(17, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '4104a3869cdb48df6ab7d48ef3a8609dc74840cb', '', 1347514092, 1348723692),
(18, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '28964f0fc8bacf04ed6cc4ffe4e280f73580ecde', '', 1347514092, 1348723692),
(19, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '93a34bde36b6cb6f77fe0d1c25427a342252d6d4', '', 1347514092, 1348723692),
(20, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '2f2935044976cc4ddb18b05166369e99b3855a6d', '', 1347514093, 1348723693),
(21, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', 'b4297485cae9fc05e1bd34e127e9a13b642b7f19', '', 1347514093, 1348723693),
(30, 2, 'b68f4403fd97104b7d3d2eee13ed1317dd3a6c62', '1ba58765edef981d2109294f431d30ad63bcf75d', '', 1347601843, 1348811443),
(31, 2, '57dbd2e710be6fe807570cfdfda61cffc6b69628', '2b5cbddf99e0c012a4f91295bcc652ea24d37000', '', 1348451272, 1349660872);

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
-- Constraints for table `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
