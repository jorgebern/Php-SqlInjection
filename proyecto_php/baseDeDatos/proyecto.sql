-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2012 a las 10:33:06
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `Nombre_Usuario` varchar(10) NOT NULL DEFAULT '',
  `Password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Nombre_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Nombre_Usuario`, `Password`) VALUES
('jorge', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE IF NOT EXISTS `telefonos` (
  `Id_telefono` int(11) NOT NULL DEFAULT '0',
  `Tipo_telefono` varchar(5) DEFAULT NULL,
  `Numero_telefono` int(11) DEFAULT NULL,
  `Id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_telefono`),
  KEY `Id_usuario` (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`Id_telefono`, `Tipo_telefono`, `Numero_telefono`, `Id_usuario`) VALUES
(0, 'casa', 963258741, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id_usuario` int(11) NOT NULL DEFAULT '0',
  `Nombre` varchar(10) DEFAULT NULL,
  `Apellidos` varchar(20) DEFAULT NULL,
  `Tipo_via` varchar(5) DEFAULT NULL,
  `Direccion` varchar(40) DEFAULT NULL,
  `Codigo_postal` int(5) DEFAULT NULL,
  `Localidad` varchar(20) DEFAULT NULL,
  `Otros` varchar(50) DEFAULT NULL,
  `E-mail` varchar(20) DEFAULT NULL,
  `Twitter` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombre`, `Apellidos`, `Tipo_via`, `Direccion`, `Codigo_postal`, `Localidad`, `Otros`, `E-mail`, `Twitter`) VALUES
(0, 'jorge', 'bernabeu Mira', 'aveni', 'Alicante N44 P2', 3698, 'agost', 'blablabla', 'jorgebernabeu@gmail.', '@jorgebern');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `telefonos` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
