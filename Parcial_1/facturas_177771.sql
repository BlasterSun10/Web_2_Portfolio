-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2022 a las 20:44:14
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
-- Base de datos: `facturas_177771`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `ID` int(11) NOT NULL,
  `NombreArt` varchar(30) NOT NULL DEFAULT 'NE',
  `Cantidad` int(11) NOT NULL DEFAULT 1,
  `Precio` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`ID`, `NombreArt`, `Cantidad`, `Precio`) VALUES
(1, 'Motocicleta', 1, 25000),
(2, 'Huevos', 30, 180),
(3, 'Pan Bimbo', 3, 50),
(4, 'Galletas Gamesa', 10, 60),
(5, 'Libreta Scribe', 8, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artxfactura`
--

CREATE TABLE `artxfactura` (
  `FolioFactura` int(11) NOT NULL,
  `IdArticulo` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `CostoTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artxfactura`
--

INSERT INTO `artxfactura` (`FolioFactura`, `IdArticulo`, `Cantidad`, `CostoTotal`) VALUES
(1, 4, 3, 300),
(2, 2, 30, 2000),
(3, 5, 8, 8000),
(5, 3, 15, 10000),
(4, 1, 1, 25000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Nombre` varchar(30) NOT NULL DEFAULT 'NE',
  `CorreoElectronico` varchar(20) NOT NULL DEFAULT 'NE',
  `RFC` varchar(15) NOT NULL DEFAULT 'NE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Nombre`, `CorreoElectronico`, `RFC`) VALUES
('Pepe', 'pepe@hotmail.com', 'PERS040897AS2'),
('Ricardo', 'richie@hotmail.com', 'RISU150418UY7'),
('Simon', 'simon@hotmail.com', 'STER082468RW2'),
('Samuel', 'sam@hotmail.com', 'STRE020598SE7'),
('Timoteo', 'timoteo@hotmail.com', 'TMI040204HT1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Folio` int(11) NOT NULL,
  `RFC_Cliente` varchar(15) NOT NULL DEFAULT 'NE',
  `FechaEmision` date NOT NULL,
  `MontoTotal` float NOT NULL DEFAULT 0,
  `IVA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Folio`, `RFC_Cliente`, `FechaEmision`, `MontoTotal`, `IVA`) VALUES
(1, 'PERS040897AS2', '2022-08-02', 15000, 16.5),
(2, 'RISU150418UY7', '2022-08-15', 20000, 16),
(3, 'STER082468RW2', '2022-08-18', 400, 16.5),
(4, 'TMI040204HT1', '2022-08-21', 5000, 16.5),
(5, 'STRE020598SE7', '2022-08-01', 600, 15.2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `artxfactura`
--
ALTER TABLE `artxfactura`
  ADD KEY `FolioFactura` (`FolioFactura`),
  ADD KEY `IdArticulo` (`IdArticulo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`RFC`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `RFC_Cliente` (`RFC_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artxfactura`
--
ALTER TABLE `artxfactura`
  ADD CONSTRAINT `artxfactura_ibfk_1` FOREIGN KEY (`FolioFactura`) REFERENCES `factura` (`Folio`),
  ADD CONSTRAINT `artxfactura_ibfk_2` FOREIGN KEY (`IdArticulo`) REFERENCES `articulos` (`ID`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`RFC_Cliente`) REFERENCES `clientes` (`RFC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
