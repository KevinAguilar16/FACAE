-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: educayso_facae
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignatura` (
  `idasignatura` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `creditos` int DEFAULT NULL,
  PRIMARY KEY (`idasignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departamento` (
  `iddepartamento` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `idunidad` int NOT NULL,
  PRIMARY KEY (`iddepartamento`),
  KEY `fk_departamento_unidad1_idx` (`idunidad`),
  CONSTRAINT `fk_departamento_unidad1` FOREIGN KEY (`idunidad`) REFERENCES `unidad` (`idunidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Coordinación de Ingenieria en Tecnología de l',1);
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinatario`
--

DROP TABLE IF EXISTS `destinatario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destinatario` (
  `iddocumento` int NOT NULL,
  `idpersona` int NOT NULL,
  PRIMARY KEY (`iddocumento`,`idpersona`),
  KEY `fk_documentos_has_persona_persona1_idx` (`idpersona`),
  KEY `fk_documentos_has_persona_documentos1_idx` (`iddocumento`),
  CONSTRAINT `fk_documentos_has_persona_documentos1` FOREIGN KEY (`iddocumento`) REFERENCES `documento` (`iddocumento`),
  CONSTRAINT `fk_documentos_has_persona_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinatario`
--

LOCK TABLES `destinatario` WRITE;
/*!40000 ALTER TABLE `destinatario` DISABLE KEYS */;
INSERT INTO `destinatario` VALUES (3,6),(1,7);
/*!40000 ALTER TABLE `destinatario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `destinatario1`
--

DROP TABLE IF EXISTS `destinatario1`;
/*!50001 DROP VIEW IF EXISTS `destinatario1`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `destinatario1` AS SELECT 
 1 AS `iddocumento`,
 1 AS `asunto`,
 1 AS `idpersona`,
 1 AS `nombres`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `directorio`
--

DROP TABLE IF EXISTS `directorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directorio` (
  `iddirectorio` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `ruta` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `idordenador` int NOT NULL,
  PRIMARY KEY (`iddirectorio`,`idordenador`),
  KEY `fk_directorio_ordenador1_idx` (`idordenador`),
  CONSTRAINT `fk_directorio_ordenador1` FOREIGN KEY (`idordenador`) REFERENCES `ordenador` (`idordenador`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorio`
--

LOCK TABLES `directorio` WRITE;
/*!40000 ALTER TABLE `directorio` DISABLE KEYS */;
INSERT INTO `directorio` VALUES (1,'pdf',NULL,NULL,1),(2,'pdf','/pdfs',NULL,1);
/*!40000 ALTER TABLE `directorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docente`
--

DROP TABLE IF EXISTS `docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docente` (
  `iddocente` int NOT NULL AUTO_INCREMENT,
  `idpersona` int NOT NULL,
  PRIMARY KEY (`iddocente`,`idpersona`),
  KEY `fk_docente_persona1_idx` (`idpersona`),
  CONSTRAINT `fk_docente_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documento` (
  `iddocumento` int NOT NULL AUTO_INCREMENT,
  `fechaelaboracion` date DEFAULT NULL,
  `asunto` varchar(200) DEFAULT NULL,
  `archivopdf` varchar(100) DEFAULT NULL,
  `fechaentrerecep` datetime DEFAULT NULL,
  `observacion` text,
  `idtipodocu` int NOT NULL,
  PRIMARY KEY (`iddocumento`,`idtipodocu`),
  KEY `fk_documento_tipodocu1_idx` (`idtipodocu`),
  CONSTRAINT `fk_documento_tipodocu1` FOREIGN KEY (`idtipodocu`) REFERENCES `tipodocu` (`idtipodocu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES (1,'2021-09-02','Documento de prueba','Planificacion-MTI.pdf','2021-09-22 00:00:00','Este es un documento de prueba que se sube',2),(3,'2021-09-17','prueba de documento recibido','HojaDeVida-hola.pdf','2021-09-23 00:00:00','Esta es un documeot de prueba',1),(4,'2021-09-24','RECLAMO SOBRE NOTAS','Folleto digital - MDS.pdf','2021-09-30 00:00:00','UN RECLAMO SOBRE NOTAS ATRASADAS ',3),(5,'2021-09-18','SOLICITUD DE MATRICULA PARA EL PERIODO 2021-1S','PagoRosangelaMesEnero.pdf','2021-09-20 00:00:00','EL DOCUMENTO ES UN PAGO',2);
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emisor`
--

DROP TABLE IF EXISTS `emisor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emisor` (
  `idpersona` int NOT NULL,
  `iddocumento` int NOT NULL,
  PRIMARY KEY (`idpersona`,`iddocumento`),
  KEY `fk_persona_has_documentos_persona1_idx` (`idpersona`),
  KEY `fk_emisor_documento1_idx` (`iddocumento`),
  CONSTRAINT `fk_emisor_documento1` FOREIGN KEY (`iddocumento`) REFERENCES `documento` (`iddocumento`),
  CONSTRAINT `fk_persona_has_documentos_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emisor`
--

LOCK TABLES `emisor` WRITE;
/*!40000 ALTER TABLE `emisor` DISABLE KEYS */;
INSERT INTO `emisor` VALUES (6,1),(7,1),(7,3);
/*!40000 ALTER TABLE `emisor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `emisor1`
--

DROP TABLE IF EXISTS `emisor1`;
/*!50001 DROP VIEW IF EXISTS `emisor1`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `emisor1` AS SELECT 
 1 AS `iddocumento`,
 1 AS `idpersona`,
 1 AS `asunto`,
 1 AS `nombres`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `estudiane`
--

DROP TABLE IF EXISTS `estudiane`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiane` (
  `idestudiane` int NOT NULL AUTO_INCREMENT,
  `idpersona` int NOT NULL,
  PRIMARY KEY (`idestudiane`,`idpersona`),
  KEY `fk_estudiane_persona1_idx` (`idpersona`),
  CONSTRAINT `fk_estudiane_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiane`
--

LOCK TABLES `estudiane` WRITE;
/*!40000 ALTER TABLE `estudiane` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `idfuncionario` int NOT NULL AUTO_INCREMENT,
  `idpersona` int NOT NULL,
  PRIMARY KEY (`idfuncionario`),
  KEY `fk_funcionario_persona1_idx` (`idpersona`),
  CONSTRAINT `fk_funcionario_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institucion`
--

DROP TABLE IF EXISTS `institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `institucion` (
  `idinstitucion` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idinstitucion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institucion`
--

LOCK TABLES `institucion` WRITE;
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` VALUES (1,'Universidad Tecnica Luis Vargas Torres');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nombramiento`
--

DROP TABLE IF EXISTS `nombramiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nombramiento` (
  `idfuncionario` int NOT NULL,
  `iddepartamento` int NOT NULL,
  `fechaingreso` date DEFAULT NULL,
  `fechasalida` date DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`,`iddepartamento`),
  KEY `fk_funcionario_has_departamento_departamento1_idx` (`iddepartamento`),
  KEY `fk_funcionario_has_departamento_funcionario1_idx` (`idfuncionario`),
  CONSTRAINT `fk_funcionario_has_departamento_departamento1` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`),
  CONSTRAINT `fk_funcionario_has_departamento_funcionario1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nombramiento`
--

LOCK TABLES `nombramiento` WRITE;
/*!40000 ALTER TABLE `nombramiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `nombramiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenador`
--

DROP TABLE IF EXISTS `ordenador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordenador` (
  `idordenador` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idordenador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenador`
--

LOCK TABLES `ordenador` WRITE;
/*!40000 ALTER TABLE `ordenador` DISABLE KEYS */;
INSERT INTO `ordenador` VALUES (1,'LANUBE');
/*!40000 ALTER TABLE `ordenador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil` (
  `idperfil` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Administrador');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persona` (
  `idpersona` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `fechanaci` date DEFAULT NULL,
  `foto` char(50) DEFAULT NULL,
  `pdf` char(50) DEFAULT NULL,
  `idgenero` int DEFAULT NULL,
  `idtiposangre` int DEFAULT NULL,
  `idestadocivil` int DEFAULT NULL,
  `idnacionalidad` int DEFAULT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (6,'FRANCIS QUINDE STALIN ADALBERTO',NULL,'0801560517',NULL,'fotos/0801560517.jpg','pdfs/0801560517.pdf',1,1,1,1),(7,'Miranda Bolaños Damaris',NULL,'0850489881',NULL,'fotos/0850489881.jpg','pdfs/0850489881.pdf',1,1,1,1);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portafoliod`
--

DROP TABLE IF EXISTS `portafoliod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portafoliod` (
  `idportafoliod` int NOT NULL AUTO_INCREMENT,
  `color` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hojadevida` tinyint DEFAULT NULL,
  `hojadevidapdf` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `silabo` tinyint DEFAULT NULL,
  `silabopdf` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cuadernillo` tinyint DEFAULT NULL,
  `cuadernillopdf` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horariopdf` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `plancatedra` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `plancatedrapdf` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reportenotas` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reportenotaspdf` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `informelabores` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `informelaborespdf` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horarioexamen` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horarioexamenpdf` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observaciones` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `iddocente` int NOT NULL,
  `idasignatura` int NOT NULL,
  PRIMARY KEY (`idportafoliod`,`iddocente`,`idasignatura`),
  KEY `fk_portafoliod_docente1_idx` (`iddocente`),
  KEY `fk_portafoliod_asignatura1_idx` (`idasignatura`),
  CONSTRAINT `fk_portafoliod_asignatura1` FOREIGN KEY (`idasignatura`) REFERENCES `asignatura` (`idasignatura`),
  CONSTRAINT `fk_portafoliod_docente1` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`iddocente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portafoliod`
--

LOCK TABLES `portafoliod` WRITE;
/*!40000 ALTER TABLE `portafoliod` DISABLE KEYS */;
/*!40000 ALTER TABLE `portafoliod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipodocu`
--

DROP TABLE IF EXISTS `tipodocu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipodocu` (
  `idtipodocu` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipodocu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodocu`
--

LOCK TABLES `tipodocu` WRITE;
/*!40000 ALTER TABLE `tipodocu` DISABLE KEYS */;
INSERT INTO `tipodocu` VALUES (1,'OFICIO RECIBIDO'),(2,'OFICIO ENTREGADOS'),(3,'OFICIO DE RECLAMO');
/*!40000 ALTER TABLE `tipodocu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidad`
--

DROP TABLE IF EXISTS `unidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unidad` (
  `idunidad` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `idinstitucion` int NOT NULL,
  PRIMARY KEY (`idunidad`),
  KEY `fk_unidad_institucion1_idx` (`idinstitucion`),
  CONSTRAINT `fk_unidad_institucion1` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad`
--

LOCK TABLES `unidad` WRITE;
/*!40000 ALTER TABLE `unidad` DISABLE KEYS */;
INSERT INTO `unidad` VALUES (1,'Facultad de Ingenierias',1);
/*!40000 ALTER TABLE `unidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuario` int unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(45) DEFAULT NULL,
  `idpersona` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `idperfil` int NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idpersona` (`idpersona`),
  KEY `fk_usuario_perfil1_idx` (`idperfil`),
  CONSTRAINT `fk_usuario_perfil1` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'PIWIIB1234',6,'educaysoft@gmail.com',1),(2,'1233',6,'educaysoft@hotmail.com',1),(3,'123456',7,'damaris.miranda@utelvt.edu.ec',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `usuario1`
--

DROP TABLE IF EXISTS `usuario1`;
/*!50001 DROP VIEW IF EXISTS `usuario1`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `usuario1` AS SELECT 
 1 AS `idusuario`,
 1 AS `password`,
 1 AS `idpersona`,
 1 AS `nombres`,
 1 AS `idperfil`,
 1 AS `descripcion`,
 1 AS `email`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `destinatario1`
--

/*!50001 DROP VIEW IF EXISTS `destinatario1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `destinatario1` AS select `destinatario`.`iddocumento` AS `iddocumento`,`documento`.`asunto` AS `asunto`,`destinatario`.`idpersona` AS `idpersona`,`persona`.`nombres` AS `nombres` from ((`destinatario` join `documento`) join `persona`) where ((`destinatario`.`iddocumento` = `documento`.`iddocumento`) and (`destinatario`.`idpersona` = `persona`.`idpersona`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `emisor1`
--

/*!50001 DROP VIEW IF EXISTS `emisor1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `emisor1` AS select `emisor`.`iddocumento` AS `iddocumento`,`emisor`.`idpersona` AS `idpersona`,`documento`.`asunto` AS `asunto`,`persona`.`nombres` AS `nombres` from ((`emisor` join `documento`) join `persona`) where ((`emisor`.`iddocumento` = `documento`.`iddocumento`) and (`emisor`.`idpersona` = `persona`.`idpersona`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `usuario1`
--

/*!50001 DROP VIEW IF EXISTS `usuario1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `usuario1` AS select `usuario`.`idusuario` AS `idusuario`,`usuario`.`password` AS `password`,`usuario`.`idpersona` AS `idpersona`,`persona`.`nombres` AS `nombres`,`usuario`.`idperfil` AS `idperfil`,`perfil`.`descripcion` AS `descripcion`,`usuario`.`email` AS `email` from ((`usuario` join `perfil`) join `persona`) where ((`usuario`.`idpersona` = `persona`.`idpersona`) and (`usuario`.`idperfil` = `perfil`.`idperfil`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-19 20:12:57
