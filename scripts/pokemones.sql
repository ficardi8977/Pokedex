-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-09-2022 a las 07:13:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `numero`, `imagen`, `nombre`, `tipo`, `descripcion`) VALUES
(1, 1, 'Bulbasaur.png', 'Bulbasaur', 'veneno.png', NULL),
(2, 2, 'Ivysaur.png', 'Ivysaur', 'veneno.png', NULL),
(3, 3, 'Venusaur.png', 'Venusaur', 'fuego.png', NULL),
(4, 4, 'Charmander.png', 'Charmander', 'fuego.png', NULL),
(5, 5, 'Charmeleon.png', 'Charmeleon', 'fuego.png', NULL),
(6, 6, 'Charizard.png', 'Charizard', 'agua.png', NULL),
(7, 7, 'Squirtle.png', 'Squirtle', 'agua.png', NULL),
(8, 8, 'Wartortle.png', 'Wartortle', 'agua.png', NULL),
(9, 9, 'Blastoise.png', 'Blastoise', 'tierra.png', NULL),
(10, 10, 'Caterpie.png', 'Caterpie', 'tierra.png', NULL),
(11, 11, 'Metapod.png', 'Metapod', 'tierra.png', NULL),
(12, 12, 'Butterfree.png', 'Butterfree', 'veneno.png', NULL),
(13, 13, 'Weedle.png', 'Weedle', 'veneno.png', NULL),
(14, 14, 'Kakuna.png', 'Kakuna', 'veneno.png', NULL),
(15, 15, 'Beedrill.png', 'Beedrill', 'veneno.png', NULL),
(16, 16, 'Pidgey.png', 'Pnumerogey', 'tierra.png', NULL),
(17, 17, 'Pidgeotto.png', 'Pnumerogeotto', 'tierra.png', NULL),
(18, 18, 'Pidgeot.png', 'Pnumerogeot', 'tierra.png', NULL),
(19, 19, 'Rattata.png', 'Rattata', 'tierra.png', NULL),
(20, 20, 'Raticate.png', 'Raticate', 'tierra.png', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Administrador` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Password`, `Administrador`) VALUES
(1, 'Fer', '1234', b'1'),
(2, 'Eve', '1234', b'1'),
(3, 'Juan', '1234', b'1'),
(4, 'Tomas', '1234', b'1'),
(5, 'Sofia', '1234', b'1'),
(6, 'default', '1234', b'0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
