-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 27, 2024 at 12:01 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `company_id`, `localization_link`, `category_id`, `subcategory_id`, `position_name`, `earnings`, `position_level_id`, `city`, `contract_type_id`, `working_time_id`, `work_type_id`, `start_date`, `end_date`, `theme_color`) VALUES
(2, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d558.9586037178242!2d20.422488659585543!3d49.70542410001207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160b792e405b0d%3A0x6e6ed68f3365bc14!2sVapeON!5e0!3m2!1spl!2spl!4v1708514084730!5m2!1spl!2spl', 1, 1, 'Programista (DevOps - System Pasywnej Lokacji)', '9 500-11 000', 4, 'Kraków', 1, 3, 2, '2024-03-17 12:37:43', '2024-03-19 23:59:00', 'dark'),
(3, 2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d558.9586037178242!2d20.422488659585543!3d49.70542410001207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160b792e405b0d%3A0x6e6ed68f3365bc14!2sVapeON!5e0!3m2!1spl!2spl!4v1708514084730!5m2!1spl!2spl', 1, 1, 'Programista (DevOps - System Pasywnej Lokacji)', '9 500-11 000', 4, 'Kraków', 1, 3, 2, '2024-04-05 12:37:43', '2024-04-08 23:59:00', 'danger'),
(4, 2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d558.9586037178242!2d20.422488659585543!3d49.70542410001207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160b792e405b0d%3A0x6e6ed68f3365bc14!2sVapeON!5e0!3m2!1spl!2spl!4v1708514084730!5m2!1spl!2spl', 2, 2, 'Programista (DevOps - System Pasywnej Lokacji)', '9 500-11 000', 4, 'Kraków', 1, 3, 2, '2024-04-05 12:37:43', '2024-04-17 23:59:00', 'primary'),
(5, 6, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d558.9586037178242!2d20.422488659585543!3d49.70542410001207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160b792e405b0d%3A0x6e6ed68f3365bc14!2sVapeON!5e0!3m2!1spl!2spl!4v1708514084730!5m2!1spl!2spl', 3, 3, 'Programista (DevOps - System Pasywnej Lokacji)', '9 500-11 000', 4, 'Kraków', 1, 3, 2, '2024-04-05 12:37:43', '2024-04-17 23:59:00', 'success'),
(19, 6, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d327619.50873535516!2d19.2887177890625!3d50.0951344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165a30017685ed%3A0x26522ec422c68a0c!2sMicrosoft%20Dynamics!5e0!3m2!1spl!2spl!4v1715523542644!5m2!1spl!2spl', 2, 2, 'Programista do zarządzania bazami danych PHP', '7 800-10 000', 7, 'Warszawa', 8, 2, 3, '2024-05-26 21:06:33', '2024-05-31 00:00:00', 'danger');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_benefit`
--

INSERT INTO `announcement_benefit` (`benefit_id`, `description`, `announcement_id`) VALUES
(1, 'kawa za darmo', 2),
(2, 'pomoc medyczna', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_category`
--

CREATE TABLE IF NOT EXISTS `announcement_category` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_category`
--

INSERT INTO `announcement_category` (`category_id`, `name`, `image`) VALUES
(1, 'Programowanie', 'programowanie1.png'),
(2, 'Infolinia', 'categoryTest.jpg'),
(3, 'Budownictwo', 'obraz_2024-05-12_194844311.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_requirement`
--

INSERT INTO `announcement_requirement` (`requirement_id`, `description`, `announcement_id`) VALUES
(1, 'posiadasz wykształcenie wyższe lub jesteś w trakcie studiów (mile widziane studia z zakresu marketingu, zarządzania lub innych pokrewnych kierunków),', 2),
(2, 'jesteś bardzo dokładny/-a i zwracasz uwagę na szczegóły, a jeśli jest np. jakaś literówka w tekście - z łatwością ją zauważasz.', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_responsibility`
--

INSERT INTO `announcement_responsibility` (`responsibility_id`, `description`, `announcement_id`) VALUES
(1, 'Streamline & digitize Atlassian business flows & service requests On boarding teams to the Atlassian stack (Bitbucket, Jira, Confluence, etc.) and creating new functionality in support of the product and technology platform tribes. This includes the automation of manual service requests, enabling the end user to complete common activities themselves, and overall streamlining of business workflows.', 2),
(2, 'planowanie harmonogramu oraz realizowanie zgodnie z nim działań marketingowych jednego z naszych brandów,', 2),
(3, 'kontakt z kontrahentami.', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_subcategory`
--

INSERT INTO `announcement_subcategory` (`subcategory_id`, `category_id`, `name`) VALUES
(1, 1, 'Programowanie aplikacji webowych'),
(2, 2, 'Telefoniczna obsługa klienta'),
(3, 3, 'Budownictwo energooszczędne'),
(4, 1, 'Sigma');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `short_name`, `logo`, `localization_link`) VALUES
(1, 'PIT-RADWAR Spółka Arytmetyczna', 'PIT-RADWAR S.A.', 'announcementLogoTest.jpg', 'nic'),
(2, 'Motorniczy Bank Centralny', 'Mbank', 'companyIconTest.jpg', 'nic'),
(6, 'Microsoft s.p.z.o.o', 'Microsoft', 'microsoft.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d327619.50873535516!2d19.2887177890625!3d50.0951344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165a30017685ed%3A0x26522ec422c68a0c!2sMicrosoft%20Dynamics!5e0!3m2!1spl!2spl!4v1715523542644!5m2!1spl!2spl');

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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `role_id`) VALUES
(3, 'tak@gmail.com', '$2y$10$SvpIfsvrX8QtCI7CjC00hOQf.qzzRHHmonOMxmLFshLW3UGzgPAvq', 2),
(6, 'xd@gmail.com', '$2y$10$CgPJaZH9M6X/Hsa0aH9dXecruiNvcZGK3gd8.F1OTEBOVSi89mVbW', 1),
(7, 'user@gmail.com', '$2y$10$8gCMOpAkTRKhbTVkgyQn0OPyEctg/Jkt.UVjTQ.F94cYE/2dBrYke', 2),
(8, 'kamilek333@gmail.com', '$2y$10$P4iEy30wvgQfIFrsdk8tFup7/AmldPL2Mg16nx720DsRof/AJYDc2', 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_application`
--

INSERT INTO `user_application` (`application_id`, `announcement_id`, `user_id`) VALUES
(6, 2, 6),
(7, 4, 6),
(8, 2, 7),
(11, 3, 8);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`course_id`, `user_id`, `name`, `organizer`, `period_start`, `period_end`) VALUES
(2, 6, 'Podstawy systemu operacyjnego Linux', 'Biedronka', '2020-05-15', '2020-06-15'),
(3, 6, 'Prawo jazdy kategorii B', 'Ja sam', '2023-05-12', '2020-06-15');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `user_data_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `surname` varchar(25) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `telephone_number` varchar(9) DEFAULT NULL,
  `pfp` text DEFAULT 'deafult.jpg',
  `city` varchar(35) DEFAULT NULL,
  `currnent_occupation` varchar(75) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  PRIMARY KEY (`user_data_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_data_id`, `user_id`, `name`, `surname`, `birth_date`, `telephone_number`, `pfp`, `city`, `currnent_occupation`, `summary`) VALUES
(18, 6, 'Marcin', 'Gawron', '0000-00-00', '', 'deafult.jpg', 'Kraków', '', 'essa krutko'),
(26, 7, NULL, NULL, NULL, NULL, 'deafult.jpg', NULL, NULL, NULL),
(30, 8, 'Kamil', '', '0000-00-00', '123456789', 'deafult.jpg', '', '', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_education`
--

CREATE TABLE IF NOT EXISTS `user_education` (
  `education_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `school_name` varchar(75) NOT NULL,
  `level` enum('podstawowe','zawodowe','średnie','licencjat','inżynier','magister','doktor','doktor habilitowany','profesor') NOT NULL,
  `direction` varchar(50) NOT NULL,
  `specialization` varchar(75) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  PRIMARY KEY (`education_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`education_id`, `user_id`, `school_name`, `level`, `direction`, `specialization`, `period_start`, `period_end`) VALUES
(2, 6, 'Zespół Szkół Technicznych i Ogólnokształcacych im. Jana Pawła II', 'zawodowe', 'Technik Programista', 'Informatyka', '2020-09-01', '2025-06-23'),
(3, 6, 'Szkoła Podstawowa nr 3 im. ks. płk. Józefa Jońca w Limanowej', 'podstawowe', '', '', '2012-09-01', '2020-06-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_experience`
--

CREATE TABLE IF NOT EXISTS `user_experience` (
  `experience_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `position` varchar(75) NOT NULL,
  `company` varchar(50) NOT NULL,
  `city` varchar(35) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `duties` text NOT NULL,
  PRIMARY KEY (`experience_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_experience`
--

INSERT INTO `user_experience` (`experience_id`, `user_id`, `position`, `company`, `city`, `period_start`, `period_end`, `duties`) VALUES
(2, 6, 'Junior Programista', 'Qarbon IT', 'Kraków', '2023-05-12', '2023-12-17', 'dużo roboty i wgl, mało siedzenia na dupie, praktyka 2 miesiace');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_language`
--

CREATE TABLE IF NOT EXISTS `user_language` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(35) NOT NULL,
  `level` enum('podstawowy','średnio-zaawansowany','zaawansowany','') NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`language_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_language`
--

INSERT INTO `user_language` (`language_id`, `language`, `level`, `user_id`) VALUES
(6, 'Hiszpański', 'średnio-zaawansowany', 6),
(7, 'Angielski', 'zaawansowany', 6),
(8, 'Niemiecki', 'podstawowy', 6),
(10, 'Angielski', 'średnio-zaawansowany', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_link`
--

CREATE TABLE IF NOT EXISTS `user_link` (
  `link_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` enum('Portfolio','Strona osobista','Strona firmowa','Projekt','Link do profilu społecznościowego','Inny') NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`link_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_link`
--

INSERT INTO `user_link` (`link_id`, `user_id`, `name`, `url`) VALUES
(1, 6, 'Link do profilu społecznościowego', 'https://github.com/macinek67'),
(2, 6, 'Strona firmowa', 'https://www.pepper.pl/nowe');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_saved`
--

INSERT INTO `user_saved` (`saved_id`, `announcement_id`, `user_id`) VALUES
(1, 2, 6),
(3, 4, 6),
(4, 3, 7),
(6, 3, 6);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_skill`
--

INSERT INTO `user_skill` (`skill_id`, `user_id`, `name`) VALUES
(5, 6, 'Photoshop 2021'),
(6, 6, 'Excel'),
(7, 6, 'Microsoft Access'),
(8, 6, 'XAMPP');

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
CREATE DEFINER=`root`@`localhost` EVENT `Delete_Older_Than_10_mins_login_sessions` ON SCHEDULE EVERY 1 SECOND STARTS '2024-04-12 15:16:34' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM login_session
    WHERE start_date < DATE_SUB(NOW(), INTERVAL 10 MINUTE)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
