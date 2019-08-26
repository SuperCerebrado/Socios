-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2019 a las 01:30:25
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `socios1.3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calles`
--

CREATE TABLE `calles` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calles`
--

INSERT INTO `calles` (`Id`, `Nombre`) VALUES
(1, 'Jujuy'),
(2, 'Lamadrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
  `Id` int(11) NOT NULL,
  `N°` int(11) NOT NULL,
  `Calle` int(11) NOT NULL,
  `Altura` int(11) NOT NULL,
  `Pago` int(11) NOT NULL,
  `Horario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`Id`, `N°`, `Calle`, `Altura`, `Pago`, `Horario`) VALUES
(7, 33, 1, 33, 130, 'Mañana'),
(8, 232, 1, 0, 150, 'Mañana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `usuario`, `clave`) VALUES
(1, 'leo', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calles`
--
ALTER TABLE `calles`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Calle` (`Calle`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calles`
--
ALTER TABLE `calles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
