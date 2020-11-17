-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 04:59:09
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `lastname`, `email`, `user`, `pass`) VALUES
(1, 'root', 'root', 'root@gmail.com', 'root', 'root'),
(2, 'test', 'test', 'test@gmail.com', 'test', 'test'),
(3, 'a', 'a', 'a@a', 'a', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tests`
--

CREATE TABLE `tests` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `correct` int(11) NOT NULL,
  `incorrect` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tests`
--

INSERT INTO `tests` (`id`, `name`, `date`, `time`, `correct`, `incorrect`, `id_student`) VALUES
(1, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2015-11-20', '00:00:00', 3, 7, 1),
(2, '', '2015-11-20', '17:46:43', 0, 10, 1),
(3, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2015-11-20', '17:47:00', 5, 5, 1),
(4, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2016-11-20', '21:47:13', 4, 6, 1),
(5, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2016-11-20', '21:50:49', 4, 6, 1),
(6, '', '0000-00-00', '21:52:36', 0, 10, 1),
(7, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-16', '21:53:22', 1, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `lastname`, `email`, `user`, `pass`) VALUES
(1, 'root', 'root', 'root@test.com', 'root', 'root'),
(8, 'test', 'test', 'test', 'test', 'test'),
(9, 'tes', 'test', 'test', 'test', 'test'),
(10, 'aa', 'aa', 'aaa@test', 'test', 'test'),
(13, 'test', 'test', 'test@gmail.com', 'test', 'test'),
(14, 'fsdg', 'fdg', 'df@hh', 'tienda', 'ale'),
(15, 'adsf', 'dsaf', 'ab@a', 'dssdaf', 'oli'),
(16, 'fg', 'fg', 'a@a', 'abc', 'abc'),
(17, 'ff', 'ff', 'ff@f', 'ff', 'ff'),
(18, 'ttt', 'ttt', 't@t', 'ttt', 'ttt'),
(19, 'tttt', 't', 't@t', 't', 't'),
(20, 'a', 'a', 'a@a', 'a', 'a'),
(21, 'aaa', 'aaa', 'a@a', 'aaa', 'aaa'),
(22, 'aaaa', 'aaa', 'a@a', 'aaaa', 'aaa'),
(23, 'testaaa', 'testaaa', 'a@a', 'testaaa', 'a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
