-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-12-2014 a las 23:34:20
-- Versión del servidor: 5.5.35
-- Versión de PHP: 5.4.35-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Aceptacion`
--

INSERT INTO `Aceptacion` (`id_aceptacion`, `id_sesion`, `id_tema`, `id_alumno`, `puntuacion`, `id_Experto`) VALUES
('AC001', 'S0001', 'T0001', 'A0001', 15.0, 'E0001'),
('AC002', 'S0002', 'T0004', 'A0002', 17.0, 'E0002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE IF NOT EXISTS `Alumno` (
  `id_alumno` varchar(5) NOT NULL,
  `id_usuario` varchar(5) NOT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `fk_Alumno_Usuario1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`id_alumno`, `id_usuario`) VALUES
('A0001', 'U0001'),
('A0002', 'U0004'),
('A0003', 'U0005');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Experto`
--

CREATE TABLE IF NOT EXISTS `Experto` (
  `id_Experto` varchar(5) NOT NULL,
  `nivel_actividad` int(11) DEFAULT NULL,
  `Calificacion` int(3) NOT NULL,
  `nro_sesion` int(11) DEFAULT NULL,
  `id_aceptacion` varchar(5) DEFAULT NULL,
  `id_usuario` varchar(5) NOT NULL,
  PRIMARY KEY (`id_Experto`),
  KEY `fk_Experto_Usuario1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Experto`
--

INSERT INTO `Experto` (`id_Experto`, `nivel_actividad`, `Calificacion`, `nro_sesion`, `id_aceptacion`, `id_usuario`) VALUES
('E0001', 5, 1, 12, 'AC001', 'U0002'),
('E0002', 6, 1, 15, 'AC002', 'U0003');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Logueo`
--

INSERT INTO `Logueo` (`id_logueo`, `fecha`, `hora_entrada`, `hora_salida`, `id_usuario`) VALUES
('L0001', '2014-12-04', '09:00:00', '12:00:00', 'U0004'),
('L0002', '2014-12-02', '03:00:00', '05:00:00', 'U0002');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Matricula`
--

INSERT INTO `Matricula` (`id_matricula`, `id_alumno`, `id_experto`, `id_sesion`) VALUES
('M0001', 'A0002', 'E0001', 'S0001'),
('M0002', 'A0001', 'E0002', 'S0002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pass`
--

CREATE TABLE IF NOT EXISTS `Pass` (
  `id_pass` varchar(5) NOT NULL,
  `hash_pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_pass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Pass`
--

INSERT INTO `Pass` (`id_pass`, `hash_pass`) VALUES
('P0001', 'alex'),
('P0002', 'alejandra'),
('P0003', 'ana'),
('P0004', 'diego'),
('P0005', 'lidia');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Perfil`
--

INSERT INTO `Perfil` (`id_perfil`, `descrip_perfil`, `descrip_intereses`, `id_red`) VALUES
('PE001', 'texto_descripcion', 'texto_interes', 'R0001'),
('PE002', 'texto_descripcion', 'texto_interes', 'R0001'),
('PE003', 'texto_descripcion', 'texto_interes', 'R0001'),
('PE004', 'texto_descripcion', 'texto_interes', 'R0001'),
('PE005', 'texto_descripcion', 'texto_interes', 'R0001');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Sesion`
--

INSERT INTO `Sesion` (`id_sesion`, `titulo_sesion`, `desc_sesion`, `dia`, `hora_ini`, `hora_fin`, `lugar`, `id_tipo_sesion`, `id_tema`) VALUES
('S0001', 'Quena', 'Aprende a tocar la quena (101)', '2014-12-18', '15:00:00', '17:00:00', 'Av. la paz 365, Sucre', 'TS001', 'TT001'),
('S0002', 'Musica clasica de hoy?', 'La interpretacion de la musica clasica hoy en dia', '2014-12-12', '08:00:00', '09:00:00', 'aprendeYa', 'TS001', 'TT002'),
('S0003', 'Introduccion de serigrafia ', 'Aprende serigrafia ', '2014-12-23', '02:00:00', '05:00:00', 'Av. Brasil 264', 'TS002', 'TT004');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_experto`
--

CREATE TABLE IF NOT EXISTS `sesion_experto` (
  `id_experto` varchar(45) DEFAULT NULL,
  `id_sesion` varchar(5) NOT NULL,
  KEY `fk_sesion_experto_1_idx` (`id_experto`),
  KEY `fk_sesion_experto_Sesion1_idx` (`id_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sesion_experto`
--

INSERT INTO `sesion_experto` (`id_experto`, `id_sesion`) VALUES
('E0001', 'S0002'),
('E0002', 'S0003');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tema`
--

CREATE TABLE IF NOT EXISTS `Tema` (
  `id_tema` varchar(5) NOT NULL,
  `descrip_tema` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Tema`
--

INSERT INTO `Tema` (`id_tema`, `descrip_tema`) VALUES
('TT001', 'Musica Folclorica'),
('TT002', 'Musica Clasica'),
('TT003', 'Fotografia digital'),
('TT004', 'Serigrafia'),
('TT005', 'Dibujo dijital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_sesion`
--

CREATE TABLE IF NOT EXISTS `Tipo_sesion` (
  `id_tipo_sesion` varchar(5) NOT NULL,
  `descrip_tipo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Tipo_sesion`
--

INSERT INTO `Tipo_sesion` (`id_tipo_sesion`, `descrip_tipo`) VALUES
('TS001', 'Virtual'),
('TS002', 'Presencial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `Tipo_usuario` (
  `id_tipo` varchar(5) NOT NULL,
  `descrip_tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `email` varchar(20) NOT NULL,
  `id_tipo` varchar(5) DEFAULT NULL,
  `id_pass` varchar(5) DEFAULT NULL,
  `id_perfil` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_Usuario_1_idx` (`id_tipo`),
  KEY `fk_Usuario_2_idx` (`id_pass`),
  KEY `fk_Usuario_3_idx` (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id_usuario`, `usuario`, `dni`, `email`, `id_tipo`, `id_pass`, `id_perfil`) VALUES
('U0001', 'Alex', '23456543', 'alex@correo.com', 'TU001', 'P0001', 'PE001'),
('U0002', 'Alejandra', '33456742', 'alejandra@correo.com', 'TU002', 'P0002', 'PE002'),
('U0003', 'Ana', '56753423', 'ana@correo.com', 'TU002', 'P0003', 'PE003'),
('U0004', 'Diego', '45676534', 'diego@correo.com', 'TU001', 'P0004', 'PE004'),
('U0005', 'Lidia', '54637465', 'lidia@correo.com', 'TU001', 'P0005', 'PE005');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
