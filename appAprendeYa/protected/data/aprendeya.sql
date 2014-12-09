-- MySQL dump 10.15  Distrib 10.0.14-MariaDB, for Linux (x86_64)
--
<<<<<<< HEAD
-- Host: localhost    Database: aprendeya
-- ------------------------------------------------------
-- Server version	10.0.14-MariaDB-log
=======
-- Servidor: localhost
-- Tiempo de generación: 08-12-2014 a las 23:34:20
-- Versión del servidor: 5.5.35
-- Versión de PHP: 5.4.35-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

>>>>>>> 0d36dc006242a8234120d8facbabe44702a3ad9f

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Aceptacion`
--

DROP TABLE IF EXISTS `Aceptacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Aceptacion` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Aceptacion`
--

LOCK TABLES `Aceptacion` WRITE;
/*!40000 ALTER TABLE `Aceptacion` DISABLE KEYS */;
INSERT INTO `Aceptacion` VALUES ('AC001','S0001','T0001','A0001',15.0,'E0001'),('AC002','S0002','T0004','A0002',17.0,'E0002');
/*!40000 ALTER TABLE `Aceptacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Alumno`
--

DROP TABLE IF EXISTS `Alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Alumno` (
  `id_alumno` varchar(5) NOT NULL,
  `id_usuario` varchar(5) NOT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `fk_Alumno_Usuario1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Alumno`
--

LOCK TABLES `Alumno` WRITE;
/*!40000 ALTER TABLE `Alumno` DISABLE KEYS */;
INSERT INTO `Alumno` VALUES ('A0001','U0001'),('A0002','U0004'),('A0003','U0005');
/*!40000 ALTER TABLE `Alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Experto`
--

DROP TABLE IF EXISTS `Experto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Experto` (
  `id_Experto` varchar(5) NOT NULL,
  `nivel_actividad` int(11) DEFAULT NULL,
  `Calificacion` int(3) NOT NULL,
  `nro_sesion` int(11) DEFAULT NULL,
  `id_aceptacion` varchar(5) DEFAULT NULL,
  `id_usuario` varchar(5) NOT NULL,
  `calificacion` double(4,2) DEFAULT NULL,
  PRIMARY KEY (`id_Experto`),
  KEY `fk_Experto_Usuario1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Experto`
--

<<<<<<< HEAD
LOCK TABLES `Experto` WRITE;
/*!40000 ALTER TABLE `Experto` DISABLE KEYS */;
INSERT INTO `Experto` VALUES ('E0001',5,12,'AC001','U0002',4.00),('E0002',6,15,'AC002','U0003',3.00);
/*!40000 ALTER TABLE `Experto` ENABLE KEYS */;
UNLOCK TABLES;
=======
INSERT INTO `Experto` (`id_Experto`, `nivel_actividad`, `Calificacion`, `nro_sesion`, `id_aceptacion`, `id_usuario`) VALUES
('E0001', 5, 1, 12, 'AC001', 'U0002'),
('E0002', 6, 1, 15, 'AC002', 'U0003');

-- --------------------------------------------------------
>>>>>>> 0d36dc006242a8234120d8facbabe44702a3ad9f

--
-- Table structure for table `Experto_Referencias`
--

DROP TABLE IF EXISTS `Experto_Referencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Experto_Referencias` (
  `id_experto_referencias` varchar(2) NOT NULL,
  `id_experto` varchar(5) DEFAULT NULL,
  `url_red1` varchar(200) DEFAULT NULL,
  `url_red2` varchar(200) DEFAULT NULL,
  `url_red3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_experto_referencias`),
  KEY `fk_Experto_Referencias_1_idx` (`id_experto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Experto_Referencias`
--

LOCK TABLES `Experto_Referencias` WRITE;
/*!40000 ALTER TABLE `Experto_Referencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `Experto_Referencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Logueo`
--

DROP TABLE IF EXISTS `Logueo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Logueo` (
  `id_logueo` varchar(5) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_usuario` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_logueo`),
  KEY `fk_Logueo_1_idx` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Logueo`
--

LOCK TABLES `Logueo` WRITE;
/*!40000 ALTER TABLE `Logueo` DISABLE KEYS */;
INSERT INTO `Logueo` VALUES ('L0001','2014-12-04','09:00:00','12:00:00','U0004'),('L0002','2014-12-02','03:00:00','05:00:00','U0002');
/*!40000 ALTER TABLE `Logueo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Matricula`
--

DROP TABLE IF EXISTS `Matricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Matricula` (
  `id_matricula` varchar(5) NOT NULL,
  `id_alumno` varchar(5) DEFAULT NULL,
  `id_experto` varchar(5) DEFAULT NULL,
  `id_sesion` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_matricula`),
  KEY `fk_Matricula_1_idx` (`id_alumno`),
  KEY `fk_Matricula_2_idx` (`id_experto`),
  KEY `fk_Matricula_3_idx` (`id_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Matricula`
--

LOCK TABLES `Matricula` WRITE;
/*!40000 ALTER TABLE `Matricula` DISABLE KEYS */;
INSERT INTO `Matricula` VALUES ('M0001','A0002','E0001','S0001'),('M0002','A0001','E0002','S0002');
/*!40000 ALTER TABLE `Matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pass`
--

DROP TABLE IF EXISTS `Pass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pass` (
  `id_pass` varchar(5) NOT NULL,
  `hash_pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_pass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pass`
--

LOCK TABLES `Pass` WRITE;
/*!40000 ALTER TABLE `Pass` DISABLE KEYS */;
INSERT INTO `Pass` VALUES ('P0001','alex'),('P0002','alejandra'),('P0003','ana'),('P0004','diego'),('P0005','lidia');
/*!40000 ALTER TABLE `Pass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Perfil`
--

DROP TABLE IF EXISTS `Perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Perfil` (
  `id_perfil` varchar(5) NOT NULL,
  `descrip_perfil` varchar(200) DEFAULT NULL,
  `descrip_intereses` varchar(45) DEFAULT NULL,
  `id_red` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Perfil`
--

LOCK TABLES `Perfil` WRITE;
/*!40000 ALTER TABLE `Perfil` DISABLE KEYS */;
INSERT INTO `Perfil` VALUES ('PE001','texto_descripcion','texto_interes','R0001'),('PE002','texto_descripcion','texto_interes','R0001'),('PE003','texto_descripcion','texto_interes','R0001'),('PE004','texto_descripcion','texto_interes','R0001'),('PE005','texto_descripcion','texto_interes','R0001');
/*!40000 ALTER TABLE `Perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Sesion`
--

DROP TABLE IF EXISTS `Sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Sesion` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Sesion`
--

LOCK TABLES `Sesion` WRITE;
/*!40000 ALTER TABLE `Sesion` DISABLE KEYS */;
INSERT INTO `Sesion` VALUES ('S0001','Quena','Aprende a tocar la quena (101)','2014-12-18','15:00:00','17:00:00','Av. la paz 365, Sucre','TS001','TT001'),('S0002','Musica clasica de hoy?','La interpretacion de la musica clasica hoy en dia','2014-12-12','08:00:00','09:00:00','aprendeYa','TS001','TT002'),('S0003','Introduccion de serigrafia ','Aprende serigrafia ','2014-12-23','02:00:00','05:00:00','Av. Brasil 264','TS002','TT004');
/*!40000 ALTER TABLE `Sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tema`
--

DROP TABLE IF EXISTS `Tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tema` (
  `id_tema` varchar(5) NOT NULL,
  `descrip_tema` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tema`
--

<<<<<<< HEAD
LOCK TABLES `Tema` WRITE;
/*!40000 ALTER TABLE `Tema` DISABLE KEYS */;
INSERT INTO `Tema` VALUES ('T0001','Musica Folclorica'),('T0002','Musica Clasica'),('T0003','Fotografia digital'),('T0004','Serigrafia'),('T0005','Dibujo dijital');
/*!40000 ALTER TABLE `Tema` ENABLE KEYS */;
UNLOCK TABLES;
=======
INSERT INTO `Tema` (`id_tema`, `descrip_tema`) VALUES
('TT001', 'Musica Folclorica'),
('TT002', 'Musica Clasica'),
('TT003', 'Fotografia digital'),
('TT004', 'Serigrafia'),
('TT005', 'Dibujo dijital');

-- --------------------------------------------------------
>>>>>>> 0d36dc006242a8234120d8facbabe44702a3ad9f

--
-- Table structure for table `Tipo_sesion`
--

DROP TABLE IF EXISTS `Tipo_sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tipo_sesion` (
  `id_tipo_sesion` varchar(5) NOT NULL,
  `descrip_tipo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tipo_sesion`
--

LOCK TABLES `Tipo_sesion` WRITE;
/*!40000 ALTER TABLE `Tipo_sesion` DISABLE KEYS */;
INSERT INTO `Tipo_sesion` VALUES ('TS001','Virtual'),('TS002','Presencial');
/*!40000 ALTER TABLE `Tipo_sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tipo_usuario`
--

DROP TABLE IF EXISTS `Tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tipo_usuario` (
  `id_tipo` varchar(5) NOT NULL,
  `descrip_tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tipo_usuario`
--

LOCK TABLES `Tipo_usuario` WRITE;
/*!40000 ALTER TABLE `Tipo_usuario` DISABLE KEYS */;
INSERT INTO `Tipo_usuario` VALUES ('TU001','Alumno'),('TU002','Experto');
/*!40000 ALTER TABLE `Tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES ('U0001','Alex','23456543','alex@correo.com','TU001','P0001','PE001'),('U0002','Alejandra','33456742','alejandra@correo.com','TU002','P0002','PE002'),('U0003','Ana','56753423','ana@correo.com','TU002','P0003','PE003'),('U0004','Diego','45676534','diego@correo.com','TU001','P0004','PE004'),('U0005','Lidia','54637465','lidia@correo.com','TU001','P0005','PE005');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sesion_experto`
--

DROP TABLE IF EXISTS `sesion_experto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sesion_experto` (
  `id_experto` varchar(45) DEFAULT NULL,
  `id_sesion` varchar(5) NOT NULL,
  KEY `fk_sesion_experto_1_idx` (`id_experto`),
  KEY `fk_sesion_experto_Sesion1_idx` (`id_sesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sesion_experto`
--

LOCK TABLES `sesion_experto` WRITE;
/*!40000 ALTER TABLE `sesion_experto` DISABLE KEYS */;
INSERT INTO `sesion_experto` VALUES ('E0001','S0002'),('E0002','S0003');
/*!40000 ALTER TABLE `sesion_experto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-09 12:00:21
