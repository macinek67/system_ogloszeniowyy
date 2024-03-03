-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 04:21 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_ogloszeniowy`
--
CREATE DATABASE IF NOT EXISTS `system_ogloszeniowy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `system_ogloszeniowy`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `announcement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(10) UNSIGNED NOT NULL,
  `localization_link` text NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `position_name` varchar(75) NOT NULL,
  `earnings` varchar(15) NOT NULL,
  `position_level_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(35) NOT NULL,
  `contract_type_id` int(10) UNSIGNED NOT NULL,
  `working_time_id` int(10) UNSIGNED NOT NULL,
  `work_type_id` int(10) UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `theme_color` varchar(15) NOT NULL,
  PRIMARY KEY (`announcement_id`),
  KEY `company_id` (`company_id`),
  KEY `category_id` (`category_id`),
  KEY `subcategory_id` (`subcategory_id`),
  KEY `position_level_id` (`position_level_id`),
  KEY `contract_type_id` (`contract_type_id`),
  KEY `working_time_id` (`working_time_id`),
  KEY `work_type_id` (`work_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `company_id`, `localization_link`, `category_id`, `subcategory_id`, `position_name`, `earnings`, `position_level_id`, `city`, `contract_type_id`, `working_time_id`, `work_type_id`, `start_date`, `end_date`, `theme_color`) VALUES
(2, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d558.9586037178242!2d20.422488659585543!3d49.70542410001207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160b792e405b0d%3A0x6e6ed68f3365bc14!2sVapeON!5e0!3m2!1spl!2spl!4v1708514084730!5m2!1spl!2spl', 1, 1, 'Programista (DevOps - System Pasywnej Lokacji)', '9500-11000', 4, 'Kraków', 1, 3, 2, '2024-02-21 12:37:43', '2024-02-22 23:59:00', 'primary');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_benefit`
--

CREATE TABLE IF NOT EXISTS `announcement_benefit` (
  `benefit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`benefit_id`),
  KEY `announcement_id` (`announcement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_category`
--

CREATE TABLE IF NOT EXISTS `announcement_category` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_category`
--

INSERT INTO `announcement_category` (`category_id`, `name`) VALUES
(1, 'Programowanie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_contract_type`
--

CREATE TABLE IF NOT EXISTS `announcement_contract_type` (
  `contract_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`contract_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_contract_type`
--

INSERT INTO `announcement_contract_type` (`contract_type_id`, `name`) VALUES
(1, 'Umowa o pracę'),
(2, 'Umowa o dzieło'),
(3, 'Umowa zlecenie'),
(4, 'Kontrakt B2B'),
(5, 'Umowa na zastępstwo'),
(6, 'Umowa agencyjna'),
(7, 'Umowa o pracę tymczasową'),
(8, 'Umowa o staż / praktyki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_position_level`
--

CREATE TABLE IF NOT EXISTS `announcement_position_level` (
  `position_level_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`position_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_position_level`
--

INSERT INTO `announcement_position_level` (`position_level_id`, `name`) VALUES
(1, 'Praktykant / Stażysta'),
(2, 'Asystent'),
(3, 'Młodszy specjalista (Junior)'),
(4, 'Specjalista (Mid/Regular)'),
(5, 'Starszy Specjalista (Senior)'),
(6, 'Ekspert'),
(7, 'Kierownik / koordynator'),
(8, 'Menedżer'),
(9, 'Dyrektor'),
(10, 'Prezes'),
(11, 'Pracownik fizyczny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_requirement`
--

CREATE TABLE IF NOT EXISTS `announcement_requirement` (
  `requirement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`requirement_id`),
  KEY `announcement_id` (`announcement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_responsibility`
--

CREATE TABLE IF NOT EXISTS `announcement_responsibility` (
  `responsibility_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`responsibility_id`),
  KEY `announcement_id` (`announcement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_subcategory`
--

CREATE TABLE IF NOT EXISTS `announcement_subcategory` (
  `subcategory_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`subcategory_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_subcategory`
--

INSERT INTO `announcement_subcategory` (`subcategory_id`, `category_id`, `name`) VALUES
(1, 1, 'Programowanie aplikacji webowych');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_working_time`
--

CREATE TABLE IF NOT EXISTS `announcement_working_time` (
  `working_time_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`working_time_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_working_time`
--

INSERT INTO `announcement_working_time` (`working_time_id`, `name`) VALUES
(1, 'Część etatu'),
(2, 'Dodatkowa / tymczasowa'),
(3, 'Pełny etat');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_work_type`
--

CREATE TABLE IF NOT EXISTS `announcement_work_type` (
  `work_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`work_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_work_type`
--

INSERT INTO `announcement_work_type` (`work_type_id`, `name`) VALUES
(1, 'Praca stacjonarna'),
(2, 'Praca hybrydowa'),
(3, 'Praca zdalna'),
(4, 'Praca mobilna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `logo` text NOT NULL,
  `localization_link` text NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `short_name`, `logo`, `localization_link`) VALUES
(1, 'PIT-RADWAR Spółka Arytmetyczna', 'PIT-RADWAR S.A.', 'announcementLogoTest.jpg', 'nic');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login_session`
--

CREATE TABLE IF NOT EXISTS `login_session` (
  `session_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `sign_type` enum('In','Up','','') NOT NULL,
  `start_date` datetime NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `role_id`) VALUES
(3, 'tak@gmail.com', '$2y$10$SvpIfsvrX8QtCI7CjC00hOQf.qzzRHHmonOMxmLFshLW3UGzgPAvq', 2),
(6, 'xd@gmail.com', '$2y$10$CgPJaZH9M6X/Hsa0aH9dXecruiNvcZGK3gd8.F1OTEBOVSi89mVbW', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_application`
--

CREATE TABLE IF NOT EXISTS `user_application` (
  `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`application_id`),
  KEY `announcement_id` (`announcement_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_course`
--

CREATE TABLE IF NOT EXISTS `user_course` (
  `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `organizer` varchar(40) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  PRIMARY KEY (`course_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `user_data_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `surname` varchar(25) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `telephone_number` decimal(9,0) DEFAULT NULL,
  `pfp` text DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `currnent_occupation` varchar(75) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  PRIMARY KEY (`user_data_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_education`
--

CREATE TABLE IF NOT EXISTS `user_education` (
  `education_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `school_name` varchar(75) NOT NULL,
  `city` varchar(35) NOT NULL,
  `level` enum('podstawowe','zawodowe','średnie','licencjat','inżynier','magister','doktor','doktor habilitowany','profesor') NOT NULL,
  `specialization` varchar(75) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  PRIMARY KEY (`education_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_experience`
--

CREATE TABLE IF NOT EXISTS `user_experience` (
  `experience_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `position` varchar(75) NOT NULL,
  `company` varchar(50) NOT NULL,
  `localization` varchar(35) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `duties` text NOT NULL,
  PRIMARY KEY (`experience_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_language`
--

CREATE TABLE IF NOT EXISTS `user_language` (
  `language_id` int(11) NOT NULL,
  `language` varchar(35) NOT NULL,
  `level` enum('podstawowy',' średnio-zaawansowany','zaawansowany','') NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_link`
--

CREATE TABLE IF NOT EXISTS `user_link` (
  `link_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` enum('Portfolio','Strona osobista','Strona firmowa','Projekt','Link do profilu społecznościowego','Inny') NOT NULL,
  PRIMARY KEY (`link_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `name`) VALUES
(1, 'administrator'),
(2, 'użytkownik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_saved`
--

CREATE TABLE IF NOT EXISTS `user_saved` (
  `saved_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`saved_id`),
  KEY `announcement_id` (`announcement_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_skill`
--

CREATE TABLE IF NOT EXISTS `user_skill` (
  `skill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `announcement_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `announcement_subcategory` (`subcategory_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `announcement_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `announcement_category` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `announcement_subcategory`
--
ALTER TABLE `announcement_subcategory`
  ADD CONSTRAINT `announcement_subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `announcement_category` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_application`
--
ALTER TABLE `user_application`
  ADD CONSTRAINT `user_application_ibfk_2` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_application_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_education`
--
ALTER TABLE `user_education`
  ADD CONSTRAINT `user_education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_experience`
--
ALTER TABLE `user_experience`
  ADD CONSTRAINT `user_experience_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_language`
--
ALTER TABLE `user_language`
  ADD CONSTRAINT `user_language_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_link`
--
ALTER TABLE `user_link`
  ADD CONSTRAINT `user_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_saved`
--
ALTER TABLE `user_saved`
  ADD CONSTRAINT `user_saved_ibfk_2` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_saved_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD CONSTRAINT `user_skill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `Delete_Older_Than_10_mins_login_sessions` ON SCHEDULE EVERY 1 SECOND STARTS '2024-02-19 14:45:07' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM login_session
    WHERE start_date < DATE_SUB(NOW(), INTERVAL 10 MINUTE)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
