-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2019 a las 01:42:30
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
(3, 'Av Alfonsina Storni'),
(4, 'Neuquen'),
(5, 'Monseñor de Andrea'),
(6, 'Leon XII'),
(7, 'España'),
(8, 'Moreno'),
(9, 'Echeverria'),
(10, 'Sargento Cabral'),
(11, 'Av Sixto Rodriges'),
(12, 'Brwon'),
(13, 'Avellaneda'),
(14, 'Las Heras'),
(15, 'Lamadrid'),
(16, 'Mitre'),
(17, 'Belgrano'),
(18, 'Av 12 de octubre'),
(19, 'Plumerillo'),
(20, 'Bagorria'),
(21, 'Granaderos'),
(22, 'Grad Bourg'),
(23, 'Boulogne Sur Mer'),
(24, 'Rep Argentina'),
(25, 'Rep Chile'),
(26, 'Av Rep Del Peru'),
(27, 'Primer Triunvirato'),
(28, 'Congreso Del Tucuman'),
(29, 'Directorio'),
(30, 'Coliqueo'),
(31, 'Catriel'),
(32, 'Casique Namuncura'),
(33, 'Ruta 67'),
(34, 'Av Olavarria'),
(35, 'Rodolfo Brandenbar'),
(36, 'Los 2 Pinos'),
(37, 'P Goyena'),
(38, 'Sin Nombre'),
(39, 'Bernardo De Hirigoyen'),
(40, 'Pasaje N1'),
(41, 'Juvenilla'),
(42, 'Roque Saens Peña'),
(43, 'P Betnaza'),
(44, 'Av Conturbi'),
(45, 'Alberdi'),
(46, 'Urquiza'),
(47, 'Rivas'),
(48, 'Pasaje De Las Americas'),
(59, 'Mar Del Plata'),
(60, 'Harriot'),
(61, 'Palenzona'),
(62, 'Lacunza'),
(63, 'Hipolito Hirigoyen'),
(64, 'Rivadavia'),
(65, 'Lavalle'),
(66, 'Junin'),
(67, 'Virgen De Fatima'),
(68, 'San Martin'),
(69, 'Ameguino'),
(70, 'Palacios'),
(71, 'Av Uriburu'),
(72, 'Italia'),
(73, 'Alemania'),
(74, 'Isrrael'),
(75, 'Francia'),
(76, 'Buenos Aires'),
(77, 'Roma'),
(78, 'Madrid'),
(79, 'Av Libertad'),
(80, 'Av Terisa de Castilla'),
(81, 'Av Gregoria Matorras'),
(82, 'Los Andes'),
(83, 'Uspallata'),
(84, 'Guayaquil'),
(85, 'Yapeyu'),
(86, '17 de Agosto'),
(87, 'San Lorenzo'),
(88, 'Maipu'),
(89, 'Av San Martin'),
(90, 'Chacabuco'),
(91, 'Remedio de Escalada'),
(92, 'Los Patos'),
(93, '25 De Febrero'),
(94, 'Cuyo'),
(95, 'Aconcagua'),
(96, 'Merceditas'),
(97, 'Av Balcarce'),
(98, 'Liners'),
(99, 'Fray Luis Beltran'),
(100, 'Logia Lautaro'),
(101, 'Consulado'),
(102, 'Juan Arguelles'),
(103, 'Simon Bolivar'),
(104, 'Jose Kohen'),
(105, 'Provevio'),
(106, 'Laprida'),
(107, 'Chaco'),
(108, 'Santiago Del Estero'),
(109, 'Soldado Maciel'),
(110, 'Salamanca'),
(111, 'Pasaje B Gantus'),
(112, 'Pasaje A Estrada '),
(113, 'Av Mateo Llovera'),
(114, 'Pasaje Americano'),
(115, ''),
(116, 'Primera Junta'),
(117, 'Juramento'),
(118, 'Canonigo Gorriti'),
(119, '20 de Junio'),
(120, 'Jujuy'),
(121, 'Bandera Nacional'),
(122, 'Barracas del Parana'),
(123, 'Tucuman'),
(124, 'Salta'),
(125, '27 de Fabrero'),
(126, 'Campichuelo'),
(127, 'Paraguay'),
(128, 'Mandusovi'),
(129, 'Euskal-Echea'),
(130, 'Brown Bis'),
(131, 'Cales'),
(132, 'Jenquel'),
(133, 'Alem'),
(134, 'Lovecchio'),
(135, 'Escuela Sarmiento'),
(136, 'Pablo Pizurno'),
(137, 'Dorrego'),
(138, 'Coronel Pringles'),
(139, 'Antonio Bague'),
(140, 'M Montero'),
(141, 'Falucho'),
(142, '10 de Octubre'),
(143, 'Sauce Corto'),
(144, 'Tres Arrollos'),
(145, 'Exodo Jujenio'),
(146, 'P Comunidad'),
(147, 'P J De San Martin'),
(148, 'Euzkadi'),
(149, 'Av del Molino'),
(150, 'Campaña del Desierto'),
(151, 'Pasaje A Roca'),
(152, 'Garibaldi'),
(153, 'Villegas'),
(154, 'Brandsen'),
(155, 'Sarmiento'),
(156, 'Colon'),
(157, 'Arcoiris'),
(158, '12 de Mayo'),
(159, 'Pioneros'),
(160, '29 de Junio'),
(161, 'Los Principios'),
(162, 'Dr Patane'),
(163, 'Pregon Rural'),
(164, 'Av Alsina'),
(165, '12 de Octubre'),
(166, 'Canal 4'),
(167, 'Ensueños'),
(168, 'Av Casei');

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
  `Horario` varchar(50) NOT NULL,
  `Zona` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`Id`, `N°`, `Calle`, `Altura`, `Pago`, `Horario`, `Zona`) VALUES
(21, 22, 1, 0, 150, 'Mañana', 'zona1'),
(23, 1267, 102, 778, 150, 'Mañana', 'zona1'),
(24, 22, 59, 952, 150, 'Mañana', 'zona1'),
(25, 36, 13, 2038, 150, 'Mañana', 'zona1'),
(26, 54, 132, 423, 150, 'Mañana', 'zona1'),
(27, 67, 20, 450, 150, 'Mañana', 'zona1'),
(28, 68, 68, 965, 150, 'Mañana', 'zona1'),
(29, 69, 64, 1279, 150, 'Mañana', 'zona1'),
(30, 70, 46, 0, 150, 'Mañana', 'zona1'),
(31, 84, 84, 181, 150, 'Mañana', 'zona1'),
(32, 158, 15, 237, 150, 'Mañana', 'zona1'),
(33, 163, 14, 1130, 150, 'Mañana', 'zona1'),
(34, 168, 68, 1143, 150, 'Mañana', 'zona1'),
(35, 177, 65, 20, 150, 'Mañana', 'zona1'),
(36, 180, 154, 60, 150, 'Mañana', 'zona1'),
(37, 189, 84, 398, 150, 'Mañana', 'zona1'),
(38, 189, 84, 389, 150, 'Mañana', 'zona1'),
(39, 194, 14, 1060, 150, 'Mañana', 'zona1'),
(40, 211, 154, 251, 150, 'Mañana', 'zona1'),
(41, 224, 68, 235, 150, 'Mañana', 'zona1'),
(42, 225, 68, 235, 150, 'Mañana', 'zona1'),
(43, 226, 16, 518, 150, 'Mañana', 'zona1'),
(44, 231, 16, 811, 150, 'Mañana', 'zona1'),
(45, 249, 15, 2175, 150, 'Mañana', 'zona1'),
(46, 255, 164, 464, 150, 'Mañana', 'zona1'),
(47, 258, 112, 661, 150, 'Mañana', 'zona1'),
(48, 264, 154, 473, 150, 'Mañana', 'zona1'),
(49, 270, 15, 1240, 150, 'Mañana', 'zona1'),
(50, 272, 64, 263, 150, 'Mañana', 'zona1'),
(51, 281, 16, 1564, 150, 'Mañana', 'zona1'),
(52, 285, 25, 193, 150, 'Mañana', 'zona1'),
(53, 288, 45, 951, 150, 'Mañana', 'zona1'),
(54, 290, 45, 335, 150, 'Mañana', 'zona1'),
(55, 307, 165, 1389, 150, 'Noche', 'zona1'),
(56, 309, 44, 593, 150, 'Mañana', 'zona1'),
(57, 314, 155, 349, 150, 'Mañana', 'zona1'),
(58, 315, 11, 1461, 150, 'Mañana', 'zona1'),
(59, 320, 64, 819, 150, 'Mañana', 'zona1'),
(60, 344, 166, 800, 150, 'Mañana', 'zona1'),
(61, 345, 89, 709, 150, 'Mañana', 'zona1'),
(62, 347, 167, 578, 150, 'Mañana', 'zona1'),
(63, 350, 153, 372, 150, 'Mañana', 'zona1'),
(64, 357, 14, 644, 150, 'Mañana', 'zona1'),
(65, 364, 13, 2070, 150, 'Mañana', 'zona1'),
(66, 367, 11, 1735, 150, 'Mañana', 'zona1'),
(67, 385, 45, 1128, 150, 'Mañana', 'zona1'),
(68, 392, 164, 674, 150, 'Mañana', 'zona1'),
(69, 396, 63, 1254, 150, 'Mañana', 'zona1'),
(70, 397, 45, 87, 150, 'Mañana', 'zona1'),
(71, 398, 16, 811, 150, 'Mañana', 'zona1'),
(72, 402, 168, 1168, 150, 'Mañana', 'zona1'),
(73, 412, 13, 1, 150, 'Mañana', 'zona1'),
(74, 421, 155, 560, 150, 'Mañana', 'zona1');

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
(1, 'leo', '1234'),
(2, 'Joaco', '1234');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
