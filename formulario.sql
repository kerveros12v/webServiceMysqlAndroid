-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2019 a las 02:53:43
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--
create database  `formulario`;
use `formulario`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombres`, `apellidos`, `cedula`, `sexo`, `pais`, `provincia`, `direccion`) VALUES
('', '', '', '', '', '', ''),
('Juan', 'Chimarro', '1003746029', 'Masculino', '0', 'Pichincha', 'Cayambe'),
('David', 'Ch', '1003746788', 'Masculino', '0', 'Pichincha', 'Cayambe'),
('Maria ', 'Montenegro ', '123', 'Femenino', '0', 'Pichincha ', 'Cayambe '),
('Monica', 'lopez', '1234', 'Femenino', '2', 'Pichincha ', 'Cayambe '),
('Luis', 'Campos ', '123456', 'Masculino', '2', 'Caracas', 'ColÃ³n '),
('Juan', 'Tugunango', '1727677724', 'hombre', '1', 'Pichincha', 'Juan montalvo'),
('Becker', 'Quinatoa', '1754820536', 'Masculino', '2', 'Pichincha', 'Juan Montalvo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `stock` int(11) NOT NULL,
  `precioCosto` double NOT NULL,
  `precioVenta` double NOT NULL,
  `ganancia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `stock`, `precioCosto`, `precioVenta`, `ganancia`) VALUES
(0, '', 0, 0, 0, 0),
(1, 'Audifonos', 10, 10, 14, 0),
(2, 'flash', 50, 10, 14, 4),
(3, 'parlantes', 20, 12, 16, 4),
(4, 'celular', 10, 200, 250, 50),
(5, 'flash', 100, 15.5, 17.5, 2),
(6, 'Parlantes', 50, 8, 12, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
