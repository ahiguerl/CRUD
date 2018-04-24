-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2018 a las 18:57:54
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notification`
--

CREATE TABLE `notification` (
  `idNotification` int(11) NOT NULL,
  `idUsuarioOrigen` int(11) NOT NULL,
  `idUsuarioDestino` int(11) NOT NULL,
  `fechahora` datetime DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenservicio`
--

CREATE TABLE `ordenservicio` (
  `id` int(11) NOT NULL,
  `idCliente` varchar(45) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cantidadProductos` int(11) NOT NULL,
  `costoTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordenservicio`
--

INSERT INTO `ordenservicio` (`id`, `idCliente`, `fechaHora`, `descripcion`, `cantidadProductos`, `costoTotal`) VALUES
(3, 'CLI002', '2018-04-03 00:00:00', 'Reparación Impresora Cp1415', 12, 190000),
(4, 'CLI003', '2018-04-17 00:00:00', 'Recarga tóner HP CF400A', 1, 123000),
(5, 'CLI002', '2018-04-17 00:34:00', 'Reparación unidad fusora HP Laserjer 4345', 1, 450000),
(6, 'CLI004', '2018-04-23 11:20:00', 'Recarga tóner lexmark T654X11L', 1, 320000),
(7, 'CLI005', '2018-04-01 08:00:17', 'Recarga tóner Samsung MLT-D303E', 1, 280000),
(8, 'CLI007', '2018-04-25 08:34:00', 'Recarga tóner HP CE320A', 2, 150000),
(9, 'CLI005', '2018-04-09 13:00:28', 'Remanufactura Unidad de Drum Lexmark MX611', 2, 370000),
(10, 'CLI002', '2018-04-03 10:00:00', 'Actualización firmware unlocked Samsung SL-M2070FW', 4, 235000),
(11, 'CLI004', '2018-04-17 16:00:00', 'Reparación clutch Impresora Xerox 3117', 1, 76000),
(12, 'CLI006', '2018-04-30 07:00:00', 'Mantenimiento preventivo Impresora Ricoh Sp3510', 1, 160000),
(13, 'CLI002', '2018-04-03 00:00:00', 'Reparación Impresora Cp1415', 1, 190000),
(14, 'CLI003', '2018-04-17 00:00:00', 'Recarga tóner HP CF400A', 1, 123000),
(15, 'CLI002', '2018-04-17 00:34:00', 'Reparación unidad fusora HP Laserjer 4345', 1, 450000),
(16, 'CLI004', '2018-04-23 11:20:00', 'Recarga tóner lexmark T654X11L', 1, 320000),
(17, 'CLI005', '2018-04-01 08:00:17', 'Recarga tóner Samsung MLT-D303E', 1, 280000),
(18, 'CLI007', '2018-04-25 08:34:00', 'Recarga tóner HP CE320A', 2, 150000),
(19, 'CLI005', '2018-04-09 13:00:28', 'Remanufactura Unidad de Drum Lexmark MX611', 2, 370000),
(20, 'CLI002', '2018-04-03 10:00:00', 'Actualización firmware unlocked Samsung SL-M2070FW', 4, 235000),
(21, 'CLI004', '2018-04-17 16:00:00', 'Reparación clutch Impresora Xerox 3117', 1, 76000),
(22, 'CLI008', '2018-04-30 07:00:00', 'Mantenimiento preventivo Impresora Ricoh Sp3510', 1, 160000),
(23, 'CLI0023', '2018-04-04 00:00:00', 'Caja azul y roja', 1, 120000),
(24, 'CLI0025', '2018-04-02 00:00:00', 'Caja verde', 13, 76000),
(25, 'CLI0026', '2018-04-11 00:00:00', 'Caja verde', 13, 76000),
(26, 'CLI0025', '2018-04-11 00:00:00', 'Caja cafe', 134, 760000),
(27, 'CLI00234', '2018-04-24 00:00:00', 'Caja plata', 7, 4000),
(28, '1018430', '2018-04-27 00:00:00', 'Caja amarilla', 7, 18000),
(29, 'CLI0026', '2018-04-27 00:00:00', 'Tóner grande', 9, 6400),
(30, 'CLI0027', '2018-04-25 00:00:00', 'Caja roja', 7, 96000),
(31, 'CLI0027', '2018-04-25 00:00:00', 'Caja roja', 7, 96000),
(32, 'CLI0027', '2018-04-25 00:00:00', 'Caja roja', 7, 96000),
(33, 'CLI0025', '2018-04-17 00:00:00', 'Caja roja', 7, 89000),
(34, 'CLI0025', '2018-04-17 00:00:00', 'Caja roja', 7, 89000),
(35, 'CLI0026', '2018-04-04 00:00:00', 'Caja azul rojo', 1, 76000),
(36, 'CLI0026', '2018-04-04 00:00:00', 'Caja azul rojo', 1, 76000),
(37, 'CLI0027', '2018-04-26 00:00:00', 'Caja roja', 6, 98000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`idNotification`);

--
-- Indices de la tabla `ordenservicio`
--
ALTER TABLE `ordenservicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notification`
--
ALTER TABLE `notification`
  MODIFY `idNotification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenservicio`
--
ALTER TABLE `ordenservicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
