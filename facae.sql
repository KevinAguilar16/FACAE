-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: facae
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinatario`
--

LOCK TABLES `destinatario` WRITE;
/*!40000 ALTER TABLE `destinatario` DISABLE KEYS */;
/*!40000 ALTER TABLE `destinatario` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  PRIMARY KEY (`iddocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emisor`
--

LOCK TABLES `emisor` WRITE;
/*!40000 ALTER TABLE `emisor` DISABLE KEYS */;
/*!40000 ALTER TABLE `emisor` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiane`
--

LOCK TABLES `estudiane` WRITE;
/*!40000 ALTER TABLE `estudiane` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiane` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (6,'FRANCIS QUINDE STALIN ADALBERTO',NULL,'0801560517',NULL,'fotos/0801560517.jpg','pdfs/0801560517.pdf',1,1,1,1);
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
  `color` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hojadevida` tinyint DEFAULT NULL,
  `hojadevidapdf` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `silabo` tinyint DEFAULT NULL,
  `silabopdf` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cuadernillo` tinyint DEFAULT NULL,
  `cuadernillopdf` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horario` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horariopdf` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `plancatedra` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `plancatedrapdf` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reportenotas` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reportenotaspdf` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `informelabores` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `informelaborespdf` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horarioexamen` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horarioexamenpdf` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observaciones` text COLLATE utf8mb4_general_ci,
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
-- Table structure for table `tipodoc`
--

DROP TABLE IF EXISTS `tipodoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipodoc` (
  `idtipodoc` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipodoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodoc`
--

LOCK TABLES `tipodoc` WRITE;
/*!40000 ALTER TABLE `tipodoc` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipodoc` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'PIWIIB1234',6,'educaysoft@gmail.com',1),(2,'1233',6,'educaysoft@hotmail.com',1);
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
-- Final view structure for view `usuario1`
--

/*!50001 DROP VIEW IF EXISTS `usuario1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
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

-- Dump completed on 2021-09-03 10:14:57
