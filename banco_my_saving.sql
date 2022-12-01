-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 06:19:54
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco_my_saving`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosclientes`
--

CREATE TABLE `datosclientes` (
  `idcliente` int(11) NOT NULL,
  `tipoDocumento` varchar(100) NOT NULL,
  `estadoCivil` varchar(100) NOT NULL,
  `numeroDocumento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fechaNacimiento` varchar(100) NOT NULL,
  `celular` varchar(60) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `departamento` varchar(90) NOT NULL,
  `ciudad` varchar(90) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosclientes`
--

INSERT INTO `datosclientes` (`idcliente`, `tipoDocumento`, `estadoCivil`, `numeroDocumento`, `nombre`, `fechaNacimiento`, `celular`, `direccion`, `departamento`, `ciudad`, `email`) VALUES
(1, 'cedula', 'soltero', 22222, 'carlos', '1899/11/9', '444444', '65a', 'attt', 'quilla', 'kkkkkk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Dirección` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`Codigo`, `Nombre`, `Dirección`) VALUES
(1, 'Barranquilla', '5 Stuart Terrace'),
(2, 'Cali', '85178 Miller Circle'),
(3, 'Bogota', '616 Darwin Junction'),
(4, 'Santa Marta', '1 8th Drive'),
(5, 'Soledad', '78 Sunfield Hill'),
(6, 'Bucaramanga', '7530 Hollow Ridge Court'),
(7, 'Soacha', '2608 Farmco Alley'),
(8, 'Cartagena', '5462 Jenna Junction'),
(9, 'Medellin', '5 Farmco Court'),
(10, 'Palmira', '021 Summerview Street');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosclientes`
--
ALTER TABLE `datosclientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosclientes`
--
ALTER TABLE `datosclientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
