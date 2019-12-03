-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 03:18:32
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_labajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(35) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(35) COLLATE utf8_bin NOT NULL,
  `email` varchar(35) COLLATE utf8_bin NOT NULL,
  `password` varchar(35) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `email`, `password`) VALUES
('marcelo', 'torres', 'chelo8torres@gmail.com', '123'),
('juan ', 'perz', 'juanperez@gmail.com', '1234'),
('juan', 'perez', 'carlosmontellano@gmail.com', '12345'),
('juan', 'perez', 'carlosmontellano@gmail.com', '12345'),
('aa', 'ewr`', 'carlomontellano@gmail.com', '1234'),
('chelo', 'perez', 'carlosmontellano@gmail.com', '12345'),
('marcelo', 'torres', 'chelo8torres@gmail.com', '1234'),
('', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
