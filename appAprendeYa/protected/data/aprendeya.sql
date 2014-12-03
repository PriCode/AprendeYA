-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2014 a las 12:19:39
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aprendeya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Aceptacion`
--

CREATE TABLE IF NOT EXISTS `Aceptacion` (
  `id_aceptacion` varchar(5) NOT NULL,
  `id_sesion` varchar(5) DEFAULT NULL,
  `id_tema` varchar(5) DEFAULT NULL,
  `id_alumno` varchar(5) DEFAULT NULL,
  `puntuacion` decimal(3,1) DEFAULT NULL,
  `id_Experto` varchar(5) NOT NULL,
  PRIMARY KEY (`id_aceptacion`),
  KEY `fk_Aceptacion_Experto1_idx` (`id_Experto`),
  KEY `fk_Aceptacion_1_idx` (`id_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE IF NOT EXISTS `Alumno` (
  `id_alumno` varchar(5) NOT NULL,
  `id_usuario` varchar(5) NOT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `fk_Alumno_Usuario1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Experto`
--

CREATE TABLE IF NOT EXISTS `Experto` (
  `id_Experto` varchar(5) NOT NULL,
  `nivel_actividad` int(11) DEFAULT NULL,
  `nro_sesion` int(11) DEFAULT NULL,
  `id_aceptacion` varchar(5) DEFAULT NULL,
  `id_usuario` varchar(5) NOT NULL,
  PRIMARY KEY (`id_Experto`),
  KEY `fk_Experto_Usuario1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Experto_Referencias`
--

CREATE TABLE IF NOT EXISTS `Experto_Referencias` (
  `id_experto_referencias` varchar(2) NOT NULL,
  `id_experto` varchar(5) DEFAULT NULL,
  `url_red1` varchar(200) DEFAULT NULL,
  `url_red2` varchar(200) DEFAULT NULL,
  `url_red3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_experto_referencias`),
  KEY `fk_Experto_Referencias_1_idx` (`id_experto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Logueo`
--

CREATE TABLE IF NOT EXISTS `Logueo` (
  `id_logueo` varchar(5) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_usuario` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_logueo`),
  KEY `fk_Logueo_1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Matricula`
--

CREATE TABLE IF NOT EXISTS `Matricula` (
  `id_matricula` varchar(5) NOT NULL,
  `id_alumno` varchar(5) DEFAULT NULL,
  `id_experto` varchar(5) DEFAULT NULL,
  `id_sesion` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_matricula`),
  KEY `fk_Matricula_1_idx` (`id_alumno`),
  KEY `fk_Matricula_2_idx` (`id_experto`),
  KEY `fk_Matricula_3_idx` (`id_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pass`
--

CREATE TABLE IF NOT EXISTS `Pass` (
  `id_pass` varchar(2) NOT NULL,
  `hash_pass` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Pass`
--

INSERT INTO `Pass` (`id_pass`, `hash_pass`) VALUES
('P1', '1b49d03ad9ecf3790c645be0cca00f9048ead771a1fd1a95ca0d4173f5353cba4e4f6c43f88c2ac9cfcbc6894124d216ca97c90e06e92f8f76f3f66c07deb702');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Perfil`
--

CREATE TABLE IF NOT EXISTS `Perfil` (
  `id_perfil` varchar(5) NOT NULL,
  `descrip_perfil` varchar(200) DEFAULT NULL,
  `descrip_intereses` varchar(45) DEFAULT NULL,
  `id_red` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Perfil`
--

INSERT INTO `Perfil` (`id_perfil`, `descrip_perfil`, `descrip_intereses`, `id_red`) VALUES
('P0001', 'Experto en desarrollo web', 'Desarrollo web', 'R0001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sesion`
--

CREATE TABLE IF NOT EXISTS `Sesion` (
  `id_sesion` varchar(5) NOT NULL,
  `titulo_sesion` varchar(30) DEFAULT NULL,
  `desc_sesion` varchar(200) DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `id_tipo_sesion` varchar(5) DEFAULT NULL,
  `id_tema` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_sesion`),
  KEY `fk_Sesion_1_idx` (`id_tipo_sesion`),
  KEY `fk_Sesion_2_idx` (`id_tema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_experto`
--

CREATE TABLE IF NOT EXISTS `sesion_experto` (
  `id_experto` varchar(45) DEFAULT NULL,
  `id_sesion` varchar(5) NOT NULL,
  KEY `fk_sesion_experto_1_idx` (`id_experto`),
  KEY `fk_sesion_experto_Sesion1_idx` (`id_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tema`
--

CREATE TABLE IF NOT EXISTS `Tema` (
  `id_tema` varchar(5) NOT NULL,
  `descrip_tema` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_sesion`
--

CREATE TABLE IF NOT EXISTS `Tipo_sesion` (
  `id_tipo_sesion` varchar(5) NOT NULL,
  `descrip_tipo` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `Tipo_usuario` (
  `id_tipo` varchar(5) NOT NULL,
  `descrip_tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Tipo_usuario`
--

INSERT INTO `Tipo_usuario` (`id_tipo`, `descrip_tipo`) VALUES
('TU001', 'Alumno'),
('TU002', 'Experto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id_usuario` varchar(5) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `dni` varchar(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_tipo` varchar(3) DEFAULT NULL,
  `id_pass` varchar(5) DEFAULT NULL,
  `id_perfil` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_Usuario_1_idx` (`id_tipo`),
  KEY `fk_Usuario_2_idx` (`id_pass`),
  KEY `fk_Usuario_3_idx` (`id_perfil`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id_usuario`, `usuario`, `dni`, `email`, `id_tipo`, `id_pass`, `id_perfil`) VALUES
('US001', 'Eduardo Huaroto', '72761314', 'edu.huaroto@gmail.com', NULL, 'P1', 'P0001');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Aceptacion`
--
ALTER TABLE `Aceptacion`
  ADD CONSTRAINT `fk_Aceptacion_1` FOREIGN KEY (`id_sesion`) REFERENCES `Sesion` (`id_sesion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aceptacion_Experto1` FOREIGN KEY (`id_Experto`) REFERENCES `Experto` (`id_Experto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `fk_Alumno_Usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Experto`
--
ALTER TABLE `Experto`
  ADD CONSTRAINT `fk_Experto_Usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Experto_Referencias`
--
ALTER TABLE `Experto_Referencias`
  ADD CONSTRAINT `fk_Experto_Referencias_1` FOREIGN KEY (`id_experto`) REFERENCES `Experto` (`id_Experto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Logueo`
--
ALTER TABLE `Logueo`
  ADD CONSTRAINT `fk_Logueo_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Matricula`
--
ALTER TABLE `Matricula`
  ADD CONSTRAINT `fk_Matricula_1` FOREIGN KEY (`id_alumno`) REFERENCES `Alumno` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Matricula_2` FOREIGN KEY (`id_experto`) REFERENCES `Experto` (`id_Experto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Matricula_3` FOREIGN KEY (`id_sesion`) REFERENCES `Sesion` (`id_sesion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Sesion`
--
ALTER TABLE `Sesion`
  ADD CONSTRAINT `fk_Sesion_1` FOREIGN KEY (`id_tipo_sesion`) REFERENCES `Tipo_sesion` (`id_tipo_sesion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Sesion_2` FOREIGN KEY (`id_tema`) REFERENCES `Tema` (`id_tema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sesion_experto`
--
ALTER TABLE `sesion_experto`
  ADD CONSTRAINT `fk_sesion_experto_1` FOREIGN KEY (`id_experto`) REFERENCES `Experto` (`id_Experto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sesion_experto_Sesion1` FOREIGN KEY (`id_sesion`) REFERENCES `Sesion` (`id_sesion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `fk_Usuario_1` FOREIGN KEY (`id_tipo`) REFERENCES `Tipo_usuario` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_2` FOREIGN KEY (`id_pass`) REFERENCES `Pass` (`id_pass`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_3` FOREIGN KEY (`id_perfil`) REFERENCES `Perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
