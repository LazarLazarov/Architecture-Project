-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2014 at 11:36 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vecomplex`
--
CREATE DATABASE IF NOT EXISTS `vecomplex` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `vecomplex`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `name_bg` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_bg`) VALUES
(1, 'Residential', 'Жилищни'),
(2, 'Academic', 'Академични'),
(3, 'Office&public', 'Офиси&публични'),
(4, 'Banks', 'Банки'),
(5, 'Hotels', 'Хотели'),
(6, 'Industrial', 'Индустриални'),
(7, 'Interior', 'Интериор');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture_name` int(128) NOT NULL,
  `picture_description` text CHARACTER SET utf8 NOT NULL,
  `picture_description_bg` text CHARACTER SET utf8 NOT NULL,
  `picture_project` int(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `picture_project` (`picture_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `picture_name`, `picture_description`, `picture_description_bg`, `picture_project`) VALUES
(1, 1, 'This is one great example of modern architecture!', 'Този проект е "Мамата си джаса"', 1),
(2, 2, 'Another great project', 'Още един турбо-як наш проект!', 2),
(3, 3, 'This is the final test image.', 'Финална тестова картинка!', 3),
(4, 4, 'Second picture for project 2', 'Втора картинка за втори проект', 2),
(5, 5, 'Third pic for the second project', 'Трета картинка на проект 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `project_name_bg` varchar(128) CHARACTER SET utf8 NOT NULL,
  `project_description` text CHARACTER SET utf8 NOT NULL,
  `project_description_bg` text CHARACTER SET utf8 NOT NULL,
  `project_category` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_category` (`project_category`),
  KEY `project_category_2` (`project_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_name_bg`, `project_description`, `project_description_bg`, `project_category`) VALUES
(1, 'Test Project Number 1', 'Тестов Проект Номер 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae pellentesque sapien. Maecenas quis pretium massa. Suspendisse placerat magna orci, vel aliquam eros interdum congue. Nulla dignissim neque vel vestibulum laoreet. Ut consectetur sapien enim. Aenean gravida, metus nec commodo facilisis, lacus urna porttitor augue, at egestas ipsum sapien tempor lectus. Morbi porta accumsan tellus, quis suscipit sapien varius nec. Nulla congue ultricies dui eu euismod. Proin sollicitudin iaculis sem, nec fermentum velit venenatis et.\r\nCurabitur lobortis dolor ultrices gravida sollicitudin. Curabitur viverra urna non interdum aliquam. Cras id varius purus. Mauris imperdiet, nisi sit amet tempus rutrum, felis tortor sodales ligula, cursus posuere lacus nulla a sapien. Phasellus a ipsum vitae purus varius scelerisque. Proin sagittis lectus et lectus pulvinar euismod. Sed tincidunt diam vitae nisl mattis, elementum volutpat mi mattis. Phasellus viverra lacus magna, sit amet ornare risus pellentesque ut.\r\nAliquam suscipit adipiscing pretium. Suspendisse potenti. Cras quis pharetra est.', 'Интернет сайт ориентиран предимно в сферата на компютрите, информационните технологии и потребителската електроника. Притежава три дъщерни сайта: Tom’s Guide, насочен предимно към класации на различни IT услуги или електроника,  имащи за цел да помогнат на потребителите при правенето на избор; Tom’s IT Pro, предназначен за IT професионалисти; Tom’s Games, сайт с мрежови flash игри.\nTom’s Hardware използва собствена задълбочена методика при анализа на различни категории потребителска електроника (от PC компоненти до монитори, конзоли и аудио системи) и периодично обновява класации (под формата на таблици) на графични карти, процесори, твърди дискове (HDD и SSD), компютърни захранвания, външни памети, компютърни охлаждания, говорители и NAS и RAID решения за съхранение на информация.\n', 1),
(2, 'Test Project Number 2', 'Тестов Проект Номер 2', ' Phasellus a ipsum vitae purus varius scelerisque. Proin sagittis lectus et lectus pulvinar euismod. Sed tincidunt diam vitae nisl mattis, elementum volutpat mi mattis. Phasellus viverra lacus magna, sit amet ornare risus pellentesque ut.\r\nAliquam suscipit adipiscing pretium. Suspendisse potenti. Cras quis pharetra est.', 'Интернет сайт ориентиран предимно в сферата на компютрите, информационните технологии и потребителската електроника. Притежава три дъщерни сайта: Tom’s Guide, насочен предимно към класации на различни IT услуги или електроника,  имащи за цел да помогнат на потребителите при правенето на избор; Tom’s IT Pro, предназначен за IT професионалисти; Tom’s Games, сайт с мрежови flash игри.\nTom’s Hardware използва собствена задълбочена методика при анализа на различни категории потребителска електроника (от PC компоненти до монитори, конзоли и аудио системи) и периодично обновява класации (под формата на таблици) на графични карти, процесори, твърди дискове (HDD и SSD), компютърни захранвания, външни памети, компютърни охлаждания, говорители и NAS и RAID решения за съхранение на информация.\n', 2),
(3, 'Test Project Number 3 ', 'Тестов проект номер три', ' Phasellus a ipsum vitae purus varius scelerisque. Proin sagittis lectus et lectus pulvinar euismod. Sed tincidunt diam vitae nisl mattis, elementum volutpat mi mattis. Phasellus viverra lacus magna, sit amet ornare risus pellentesque ut.\r\nAliquam suscipit adipiscing pretium. Suspendisse potenti. Cras quis pharetra est.', 'Интернет сайт ориентиран предимно в сферата на компютрите, информационните технологии и потребителската електроника. Притежава три дъщерни сайта: Tom’s Guide, насочен предимно към класации на различни IT услуги или електроника,  имащи за цел да помогнат на потребителите при правенето на избор; Tom’s IT Pro, предназначен за IT професионалисти; Tom’s Games, сайт с мрежови flash игри.\nTom’s Hardware използва собствена задълбочена методика при анализа на различни категории потребителска електроника (от PC компоненти до монитори, конзоли и аудио системи) и периодично обновява класации (под формата на таблици) на графични карти, процесори, твърди дискове (HDD и SSD), компютърни захранвания, външни памети, компютърни охлаждания, говорители и NAS и RAID решения за съхранение на информация.\n', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`picture_project`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`project_category`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
