-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2020 a las 20:34:54
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
(4, 'SERGIO ALEJANDRO', 'DOMÃNGUEZ ORTÃZ', 'salejandr@gmail.com', 'dortiz', 'abc123');

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
(3, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2015-11-20', '17:47:00', 5, 5, 1),
(4, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2016-11-20', '21:47:13', 4, 6, 1),
(5, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2016-11-20', '21:50:49', 4, 6, 1),
(7, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-16', '21:53:22', 1, 9, 1),
(10, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '19:54:11', 4, 6, 24),
(11, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N FINAL', '2020-11-21', '19:54:55', 5, 5, 24),
(16, 'OrtografÃ­a 2DO TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '20:09:19', 5, 5, 24),
(17, 'OrtografÃ­a 3ER TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '20:10:27', 2, 8, 24),
(18, 'OrtografÃ­a 5TO TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '20:10:58', 1, 9, 24),
(19, 'OrtografÃ­a 2DO TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '20:51:25', 6, 4, 25),
(20, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '21:02:39', 3, 7, 26),
(21, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '21:02:58', 3, 7, 26),
(22, 'OrtografÃ­a 1ER TRIMESTRE EVALUACIÃ“N INICIAL', '2020-11-21', '21:20:32', 2, 8, 1);

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
(24, 'SERGIO ALEJANDRO', 'DOMÃNGUEZ ORTÃZ', 'alejandro@gmail.com', 'salejandro', 'abc123'),
(25, 'Usuario1', 'usuario1', 'prueba@hotmail.com', 'user1', 'abc123'),
(26, 'examen', 'repetido', 'repetido@gmail.com', 'repetido', 'repetido');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
