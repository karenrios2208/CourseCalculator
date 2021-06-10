-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 00:27:33
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coursecalculator`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studyprogram`
--

CREATE TABLE `studyprogram` (
  `Code` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject`
--

CREATE TABLE `subject` (
  `Code` varchar(10) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject_user`
--

CREATE TABLE `subject_user` (
  `SubjectKey` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FinalGrade` decimal(5,0) NOT NULL,
  `Teacher` varchar(50) NOT NULL,
  `SemesterCompleted` varchar(30) NOT NULL,
  `Available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `StudyProgram` varchar(8) NOT NULL,
  `photo` varchar(250) NOT NULL DEFAULT 'https://i.ytimg.com/vi/xNwsrnMiDZA/hqdefault.jpg',
  `Available` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Name`, `Password`, `Email`, `StudyProgram`, `photo`, `Available`) VALUES
('cocosdenueve', 'reloj123', 'HHHH@gmail.com', 'ITC11', 'https://olaA/hqdefault.jpg', 1),
('kowo', 'k', 'kiwo@gmail.com', 'INCQ13', 'https://i.ytimg.com/vi/xNwsrnMiDZA/hqdefault.jpg', 1),
('Papas pizza', 'pp', 'papitas@gmail.com', 'ITC11', 'https://i.ytimg.com/vi/xNwsrnMiDZA/hqdefault.jpg', 1),
('Pimpo', 'pipo', 'PatrolPippo@yahoo.com', 'INCQ13', 'https://i.ytimg.com/vi/xNwsrnMiDZA/hqdefault.jpg', 1),
('quesin', 'q', 'q@gmail.com', 'ITC11', 'https://i.ytimg.com/vi/xNwsrnMiDZA/hqdefault.jpg', 1),
('Ratthew', 'r', 'rata@gmail.com', 'INCQ13', 'https://i.ytimg.com/vi/xNwsrnMiDZA/hqdefault.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `studyprogram`
--
ALTER TABLE `studyprogram`
  ADD PRIMARY KEY (`Code`);

--
-- Indices de la tabla `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Code`);

--
-- Indices de la tabla `subject_user`
--
ALTER TABLE `subject_user`
  ADD PRIMARY KEY (`SubjectKey`,`Email`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
