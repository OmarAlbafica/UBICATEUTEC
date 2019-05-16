-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2019 a las 18:26:04
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tourutec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_sitio`
--

CREATE TABLE `detalle_sitio` (
  `iddetalle_sitio` int(11) NOT NULL,
  `idsitio` int(11) NOT NULL,
  `historia` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anio_creacion` int(4) NOT NULL,
  `estructura` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_b` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_sitio`
--

INSERT INTO `detalle_sitio` (`iddetalle_sitio`, `idsitio`, `historia`, `nombre`, `anio_creacion`, `estructura`, `fecha_b`) VALUES
(1, 1, '                                                                                                                        nada                                                                                                                                                                                                                                                                                                     ', 'Descripcion Los Fundadores', 200, 'Concreto', '0000-00-00 00:00:00'),
(2, 2, '                                                                                                                        nada                                                                                                                                                                                                                                                                                                     ', 'Descripcion Jorge Luis Borges', 200, 'Concreto', '0000-00-00 00:00:00'),
(3, 3, '                                                                                                                        nada                                                                                                                                                                                                                                                                                                     ', 'Descripcion Francisco Morazan', 200, 'Concreto', '0000-00-00 00:00:00'),
(4, 4, '                                                                                                                        nada                                                                                                                                                                                                                                                                                                     ', 'Benijo Juarez', 200, 'Concreto', '0000-00-00 00:00:00'),
(5, 5, '                                                                                                                        nada                                                                                                                                                                                                                                                                                                     ', 'Gabriela Mistral', 200, 'Concreto', '0000-00-00 00:00:00'),
(8, 8, '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ssdasd', 'mio', 2008, 'Concreto', '0000-00-00 00:00:00'),
(9, 9, '                                                                                                                                                      nada         saadss                                                                                                                                                                                                                                                                                                                        ', 'asd', 2003, 'Concreto', '0000-00-00 00:00:00'),
(10, 10, '                                                            asdaaaaaaaaaa                                                        ', 'hoy si', 2000, 'Concreto', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgubicate`
--

CREATE TABLE `imgubicate` (
  `idimg` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `idsitio` int(11) NOT NULL,
  `imgr` varchar(45) COLLATE utf8_bin NOT NULL,
  `fechaimg` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `idlugar` int(11) NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `planta` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abreviatura` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_construccion` date NOT NULL,
  `idsitio` int(11) NOT NULL,
  `fecha_b` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `idmedia` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `idsitio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qr`
--

CREATE TABLE `qr` (
  `idqr` varchar(100) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechaqr` varchar(50) NOT NULL,
  `idsitio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `qr`
--

INSERT INTO `qr` (`idqr`, `nombre`, `fechaqr`, `idsitio`) VALUES
('1', 'qr/', '2019-04-03', 1),
('2', 'qr/', '2019-04-03', 2),
('3', 'qr/', '2019-04-03', 3),
('asd', 'qr/', '2019-04-26', 9),
('hoy si', 'qr/', '', 10),
('mio', 'qr/', '2019-04-01', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

CREATE TABLE `sitio` (
  `idsitio` int(11) NOT NULL,
  `sitio` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipositio` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_b` datetime NOT NULL,
  `fecha_construccion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`idsitio`, `sitio`, `tipositio`, `fecha_b`, `fecha_construccion`) VALUES
(1, 'ss', 'Edificio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ss', 'Edificio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ss', 'Edificio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ss', 'Edificio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ss', 'Edificio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'dsadasdhoy sidsadasdas', 'Edificiosdasdsadsasassasdasda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'ssssaa', 'Edificiosasa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'hoy si', 'Edificio', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusurario` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_b` datetime NOT NULL,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusurario`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `user`, `pass`, `estado`, `tipo`, `fecha_b`, `fecha_creacion`) VALUES
(1, 'omar', 'garcia', 'sadas', '2222-2222', 'js@gmail.com', 'omar', '123', 'ACTIVO', 'ADMIN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'franks', 'franks', 'aaaaaaaaaaaaaaaaa', '7777-7777', 'aaaaaaaaaaaaa@aaaa.com', 'franks', '123', 'ACTIVO', 'COLA', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_sitio`
--
ALTER TABLE `detalle_sitio`
  ADD PRIMARY KEY (`iddetalle_sitio`),
  ADD KEY `idsitio` (`idsitio`);

--
-- Indices de la tabla `imgubicate`
--
ALTER TABLE `imgubicate`
  ADD PRIMARY KEY (`idimg`),
  ADD KEY `asa_idx` (`idsitio`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`idlugar`),
  ADD KEY `idsitio` (`idsitio`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idmedia`),
  ADD KEY `idsitio` (`idsitio`);

--
-- Indices de la tabla `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`idqr`),
  ADD KEY `idsitio` (`idsitio`);

--
-- Indices de la tabla `sitio`
--
ALTER TABLE `sitio`
  ADD PRIMARY KEY (`idsitio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusurario`),
  ADD UNIQUE KEY `user_UNIQUE` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_sitio`
--
ALTER TABLE `detalle_sitio`
  MODIFY `iddetalle_sitio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `imgubicate`
--
ALTER TABLE `imgubicate`
  MODIFY `idimg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `idlugar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `idmedia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sitio`
--
ALTER TABLE `sitio`
  MODIFY `idsitio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusurario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_sitio`
--
ALTER TABLE `detalle_sitio`
  ADD CONSTRAINT `detalle_sitio_ibfk_1` FOREIGN KEY (`idsitio`) REFERENCES `sitio` (`idsitio`) ON DELETE CASCADE;

--
-- Filtros para la tabla `imgubicate`
--
ALTER TABLE `imgubicate`
  ADD CONSTRAINT `asa` FOREIGN KEY (`idsitio`) REFERENCES `sitio` (`idsitio`) ON DELETE CASCADE;

--
-- Filtros para la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD CONSTRAINT `lugares_ibfk_1` FOREIGN KEY (`idsitio`) REFERENCES `sitio` (`idsitio`) ON DELETE CASCADE;

--
-- Filtros para la tabla `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `foramedia` FOREIGN KEY (`idsitio`) REFERENCES `sitio` (`idsitio`) ON DELETE CASCADE;

--
-- Filtros para la tabla `qr`
--
ALTER TABLE `qr`
  ADD CONSTRAINT `qr_ibfk_1` FOREIGN KEY (`idsitio`) REFERENCES `sitio` (`idsitio`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
