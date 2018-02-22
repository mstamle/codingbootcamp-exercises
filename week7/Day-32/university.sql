-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Pát 16. úno 2018, 14:44
-- Verze serveru: 10.0.33-MariaDB-0ubuntu0.16.04.1
-- Verze PHP: 7.1.14-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `university`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `courses`
--

CREATE TABLE `courses` (
  `id` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `semesters` tinyint(4) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `courses`
--

INSERT INTO `courses` (`id`, `title`, `teacher`, `semesters`, `capacity`) VALUES
('6.002', 'Circuits and Electronics', 'danmck2', 2, 80),
('6.003', 'Signals and Systems', 'danmck2', 2, 40),
('6.004', 'Computation Structures', 'danmck2', 1, 60),
('6.006', 'Introduction to Algorithms', 'hencon1', 1, 180),
('6.00SC', 'Introduction to Computer Science', 'danpin1', 1, 160),
('6.01SC', 'Introduction to Electrical Engineering', 'waywal1', 1, 160),
('6.033', 'Computer System Engineering', 'timrey3', 1, 120),
('6.034', 'Artificial Intelligence', 'katmat1', 2, 65),
('6.035', 'Computer Language Engineering', 'katmat1', 2, 50),
('6.042J', 'Mathematics for Computer Science', 'ednpor2', 2, 120),
('6.045J', 'Automata, Computability, and Complexity', 'ednpor2', 2, 100),
('6.046J', 'Design and Analysis of Algorithms', 'dorros1', 2, 80),
('6.073', 'Creating Video Games', 'dorros1', 1, 30);

-- --------------------------------------------------------

--
-- Struktura tabulky `students`
--

CREATE TABLE `students` (
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `year` year(4) NOT NULL,
  `programme` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `students`
--

INSERT INTO `students` (`id`, `name`, `year`, `programme`) VALUES
('aidgay3', 'Aidan Gay', 2002, 'mathematics'),
('alarya1', 'Alannah Ryan', 2003, 'computer science'),
('angpra3', 'Angelina Pratt', 2003, 'engineering'),
('ariwea2', 'Arianna Weaver', 2002, 'computer science'),
('daicar1', 'Daisy Carroll', 2003, 'computer science'),
('daxher3', 'Dax Herrera', 2004, 'computer science'),
('haydel1', 'Hayden Delgado', 2004, 'engineering'),
('jamwhi1', 'Jamar Whitney', 2002, 'mathematics'),
('jaybax2', 'Jaydin Baxter', 2004, 'mathematics'),
('kadmos1', 'Kadin Moses', 2002, 'mathematics'),
('lingil2', 'Lindsay Gill', 2003, 'mathematics'),
('lunmas1', 'Luna Mason', 2002, 'computer science'),
('maxowe2', 'Maximilian Owens', 2001, 'engineering'),
('milwoo1', 'Mila Woodard', 2001, 'engineering'),
('natsch1', 'Nataly Schroeder', 2001, 'engineering'),
('prefis1', 'Precious Fischer', 2001, 'engineering'),
('rasmey1', 'Rashad Meyer', 2002, 'engineering'),
('sanmar2', 'Saniya Marsh', 2004, 'mathematics'),
('skyhar1', 'Skyler Harrison', 2001, 'computer science'),
('thahol2', 'Thalia Holt', 2001, 'computer science');

-- --------------------------------------------------------

--
-- Struktura tabulky `student_course`
--

CREATE TABLE `student_course` (
  `student_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `student_course`
--

INSERT INTO `student_course` (`student_id`, `course_id`, `year`) VALUES
('aidgay3', '6.003', 2017),
('aidgay3', '6.037', 2012),
('alarya1', '6.00SC', 2016),
('angpra3', '6.01SC', 2011),
('ariwea2', '6.007', 2015),
('ariwea2', '6.033', 2016),
('ariwea2', '6.034', 2011),
('ariwea2', '6.035', 2012),
('daicar1', '6.004', 2016),
('daicar1', '6.038', 2012),
('daicar1', '6.073', 2017),
('daxher3', '6.007', 2017),
('haydel1', '6.006', 2014),
('jamwhi1', '6.00SC', 2017),
('jaybax2', '6.01SC', 2011),
('kadmos1', '6.008', 2016),
('kadmos1', '6.034', 2017),
('lingil2', '6.004', 2015),
('lingil2', '6.036', 2011),
('lunmas1', '6.002', 2012),
('maxowe2', '6.00SC', 2014),
('milwoo1', '6.006', 2011),
('natsch1', '6.01SC', 2012),
('prefis1', '6.005', 2015),
('rasmey1', '6.003', 2012),
('sanmar2', '6.01SC', 2017),
('skyhar1', '6.00SC', 2015),
('thahol2', '6.00SC', 2016);

-- --------------------------------------------------------

--
-- Struktura tabulky `teachers`
--

CREATE TABLE `teachers` (
  `id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `birth` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone`, `email`, `degree`, `birth`) VALUES
('danmck2', 'Danyel A. McKeen', '312-798-0781', 'danyel.mckeen@univ.org', 'MSc', 1975),
('danpin1', 'Daniel L. Pinegar', '315-884-0223', 'daniel.pinegar@univ.org', 'MSc', 1986),
('dorros1', 'Dorthy C. Rose', '870-250-8667', 'dorthy.rose@univ.org', 'DSc', 1971),
('ednpor2', 'Edna E. Porter', '610-494-8868', 'edna.porter@univ.org', 'CSc', 1981),
('eliron1', 'Elizabeth D. Roney', '973-238-3932', 'elizabeth.roney@univ.org', 'DSc', 1983),
('hencon1', 'Henry A. Connery', '504-335-4403', 'henry.connery@univ.org', 'DSc', 1968),
('katmat1', 'Kathryn H. Matson', '802-705-2507', 'kathryn.matson@univ.org', 'DSc', 1977),
('timrey3', 'Timothy H. Reynolds', '708-532-8769', 'timothy.reynolds@univ.org', 'CSc', 1966),
('waywal1', 'Wayne D. Walters', '215-907-5467', 'wayne.walters@univ.org', 'MSc', 1991);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `student_course`
--
ALTER TABLE `student_course`
  ADD UNIQUE KEY `student_course_uniq` (`student_id`,`course_id`);

--
-- Klíče pro tabulku `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
