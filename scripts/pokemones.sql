-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2022 a las 06:01:06
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
(4, 1, 'Bulbasaur.JPG', 'Bulbasaur', 'veneno.png', NULL),
(5, 2, 'Ivysaur.PNG', 'Ivysaur', 'veneno.png', NULL),
(6, 3, 'Venusaur.PNG', 'Venusaur', 'fuego.png', NULL),
(7, 4, 'Charmander.PNG', 'Charmander', 'fuego.png', NULL),
(8, 5, 'Charmeleon.PNG', 'Charmeleon', 'fuego.png', NULL),
(9, 6, 'Charizard.PNG', 'Charizard', 'agua.png', NULL),
(10, 7, 'Squirtle.PNG', 'Squirtle', 'agua.png', NULL),
(11, 8, 'Wartortle.PNG', 'Wartortle', 'agua.png', NULL),
(12, 9, 'Blastoise.PNG', 'Blastoise', 'tierra.png', NULL),
(13, 10, 'Caterpie.PNG', 'Caterpie', 'tierra.png', NULL),
(14, 11, 'Metapod.PNG', 'Metapod', 'tierra.png', NULL),
(15, 12, 'Butterfree.PNG', 'Butterfree', 'veneno.png', NULL),
(16, 13, 'Weedle.PNG', 'Weedle', 'veneno.png', NULL),
(17, 14, 'Kakuna.PNG', 'Kakuna', 'veneno.png', NULL),
(18, 15, 'Beedrill.PNG', 'Beedrill', 'veneno.png', NULL),
(19, 16, 'Pidgey.PNG', 'Pnumerogey', 'tierra.png', NULL),
(20, 17, 'Pidgeotto.PNG', 'Pnumerogeotto', 'tierra.png', NULL),
(21, 18, 'Pidgeot.PNG', 'Pnumerogeot', 'tierra.png', NULL),
(22, 19, 'Rattata.PNG', 'Rattata', 'tierra.png', NULL),
(23, 20, 'Raticate.PNG', 'Raticate', 'tierra.png', NULL),

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
(5, 'Sofia', '1234', b'1');
(6, 'default', '1234', b'0'),

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
