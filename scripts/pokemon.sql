-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 21-09-2022 a las 03:27:22
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

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

INSERT INTO pokemon(numero,tipo,nombre,imagen) values(1,'Veneno','Bulbasaur','Bulbasaur.jpg');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(2,'Veneno','Ivysaur','Ivysaur.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(3,'Fuego','Venusaur','Venusaur.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(4,'Fuego','Charmander','Charmander.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(5,'Fuego','Charmeleon','Charmeleon.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(6,'Agua','Charizard','Charizard.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(7,'Agua','Squirtle','Squirtle.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(8,'Agua','Wartortle','Wartortle.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(9,'Tierra','Blastoise','Blastoise.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(10,'Tierra','Caterpie','Caterpie.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(11,'Tierra','Metapod','Metapod.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(12,'Veneno','Butterfree','Butterfree.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(13,'Veneno','Weedle','Weedle.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(14,'Veneno','Kakuna','Kakuna.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(15,'Veneno','Beedrill','Beedrill.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(16,'Tierra','Pnumerogey','Pidgey.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(17,'Tierra','Pnumerogeotto','Pidgeotto.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(18,'Tierra','Pnumerogeot','Pidgeot.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(19,'Tierra','Rattata','Rattata.PNG');
INSERT INTO pokemon(numero,tipo,nombre,imagen) values(20,'Tierra','Raticate','Raticate.PNG');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
