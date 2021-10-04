-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2021 a las 06:53:31
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibasemicristhian`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Sigla` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paralelo` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ci`, `Sigla`, `paralelo`) VALUES
('123', 'inf-121', 'A'),
('123', 'inf-131', 'B'),
('123', 'inf-111', 'D'),
('7777777', 'inf-112', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `Sigla` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre_mat` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`Sigla`, `nombre_mat`) VALUES
('inf-111', 'INTRODUCCION A LA INFORMATICA'),
('inf-121', 'ALGORITMOS Y PROGRAMACION'),
('inf-131', 'ESTRUCTURA DE DATOS Y ALGORITMOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Sigla` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paralelo` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL,
  `nota3` int(11) DEFAULT NULL,
  `notafin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`ci`, `Sigla`, `paralelo`, `nota1`, `nota2`, `nota3`, `notafin`) VALUES
('321', 'inf-121', 'A', 80, 80, 80, 80),
('321', 'inf-111', 'D', 70, 70, 70, 70),
('321', 'inf-131', 'B', 60, 60, 60, 60),
('4444', 'inf-111', 'D', 65, 65, 65, 65),
('333', 'inf-112', 'A', 85, 85, 85, 85),
('999999999', 'inf-111', 'D', 51, 51, 51, 51),
('999999999', 'inf-121', 'A', 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nac` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `departamento` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `nombre`, `fecha_nac`, `departamento`) VALUES
('123', 'Julio Moyo', '12/09/1997', 'LP'),
('321', 'Alvaro Llanos', '13/11/1999', 'OR'),
('333', 'Juan Pinto', '17/09/1990', 'LP'),
('4444', 'Raul Gimenez', '15/01/1999', 'SC'),
('7777777', 'Paola Garcia', '02/12/1995', 'LP'),
('999999999', 'Maria Zegarra', '02/12/1997', 'OR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `user_password` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `Usuario`, `user_password`) VALUES
('123', 'docente', '1234'),
('321', 'alumno', 'choque'),
('333', 'alumno', '333'),
('4444', 'alumno', '4444'),
('7777777', 'docente', 'hhh'),
('999999999', 'alumno', '999999999');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD KEY `ci` (`ci`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `persona` (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
