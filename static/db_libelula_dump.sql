-- MySQL dump 10.13  Distrib 5.6.25, for Linux (x86_64)
--
-- Host: localhost    Database: db_libelula
-- ------------------------------------------------------
-- Server version	5.6.25

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
-- Table structure for table `alternativas`
--

DROP TABLE IF EXISTS `alternativas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alternativas` (
  `id_alternativa` int(11) NOT NULL AUTO_INCREMENT,
  `id_pregunta` int(11) DEFAULT NULL,
  `tipo_alternativa` varchar(45) DEFAULT 'ABIERTA' COMMENT 'ABIERTA / RADIO / CHECK',
  `titulo_alternativa` varchar(400) DEFAULT NULL,
  `subtitulo_alternativa` varchar(400) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alternativa`),
  KEY `fk_pregunta_idx` (`id_pregunta`),
  CONSTRAINT `fk_alternativa_pregunta` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alternativas`
--

LOCK TABLES `alternativas` WRITE;
/*!40000 ALTER TABLE `alternativas` DISABLE KEYS */;
INSERT INTO `alternativas` VALUES (1,1,'ABIERTA','','INGRESE NÚMERO DE PERSONAS',NULL),(2,2,'ABIERTA','Bus o Combi','INGRESE HORAS',NULL),(3,2,'ABIERTA','Tren electrico','INGRESE HORAS',NULL),(4,2,'ABIERTA','Metropolitano','INGRESE HORAS',NULL),(5,3,'ABIERTA',NULL,'INGRESE COSTO EN SOLES',NULL),(6,4,'RADIO','Gasolina',NULL,1),(7,4,'RADIO','GNV',NULL,2),(8,4,'RADIO','Diesel',NULL,3),(9,4,'RADIO','No tengo Vehículo',NULL,4),(10,4,'RADIO','GLP',NULL,5),(12,5,'ABIERTA',NULL,'INGRESE COSTO EN SOLES',NULL),(13,6,'RADIO','Menos de 7',NULL,1),(14,6,'RADIO','Menos de 7 y 10',NULL,2),(15,6,'RADIO','Mas de 10',NULL,3),(16,7,'RADIO','Sedán',NULL,1),(17,7,'RADIO','Van',NULL,2),(18,7,'RADIO','4x4',NULL,3),(19,7,'RADIO','Moto',NULL,4),(20,8,'ABIERTA','Avión','INGRESE HORAS',NULL),(21,8,'ABIERTA','Bus','INGRESE HORAS',NULL),(22,8,'ABIERTA','Vehículo','INGRESE HORAS',NULL);
/*!40000 ALTER TABLE `alternativas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(400) DEFAULT NULL,
  `id_pregunta_padre` int(11) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`),
  KEY `fk_pregunta_idx` (`id_pregunta_padre`),
  CONSTRAINT `fk_pregunta` FOREIGN KEY (`id_pregunta_padre`) REFERENCES `preguntas` (`id_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (1,'Cuántas personas viven en tu hogar?',NULL,'TRANSPORTE','0000-00-00 00:00:00'),(2,'Cuántas horas a la semana pasas en cada uno de estos transporte?',1,'TRANSPORTE','0000-00-00 00:00:00'),(3,'Cuanto gastas a la semana en taxis?',NULL,'TRANSPORTE','0000-00-00 00:00:00'),(4,'Si usas vehículo propio: ¿Qué tipo de combustible empleas?',NULL,'TRANSPORTE','0000-00-00 00:00:00'),(5,'Si usas vehículo propio: ¿Cuánto gastas en combustible a la semana?',NULL,'TRANSPORTE','0000-00-00 00:00:00'),(6,'Si usas vehículo propio: ¿Cuántos años tiene tu vehículo?',NULL,'TRANSPORTE','0000-00-00 00:00:00'),(7,'Si usas vehículo propio: ¿Qué tipo de vehículo?',NULL,'TRANSPORTE','0000-00-00 00:00:00'),(8,'Viajes en el año: ¿Cuántas horas has pasado en?',NULL,'TRANSPORTE','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `miembros_familia` int(3) DEFAULT '0',
  `fecha_creacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (13,'papilon','papilon','papilon@papilon.com',3,NULL),(14,'','','',1,'2015-09-13 00:00:00'),(15,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(16,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(17,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(18,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(19,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(20,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(21,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(22,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(23,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(24,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(25,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(26,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(27,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(28,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(29,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(30,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00'),(31,'pedro','charun','pedroleo666@hotmail.com',12,'2015-09-13 00:00:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_respuestas`
--

DROP TABLE IF EXISTS `usuarios_respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_respuestas` (
  `id_usuario_respuesta` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_alternativa` int(11) DEFAULT NULL,
  `valor_respuesta` varchar(100) DEFAULT NULL,
  `factor_unitario` double DEFAULT NULL,
  `resultado_generado` double DEFAULT NULL COMMENT 'factor_unitario * valor',
  `fecha_creacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario_respuesta`),
  KEY `fk_usuarios_respuesta_idx` (`id_alternativa`),
  KEY `fk_usuarios_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_usuarios_respuesta` FOREIGN KEY (`id_alternativa`) REFERENCES `alternativas` (`id_alternativa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_respuestas`
--

LOCK TABLES `usuarios_respuestas` WRITE;
/*!40000 ALTER TABLE `usuarios_respuestas` DISABLE KEYS */;
INSERT INTO `usuarios_respuestas` VALUES (1,1,1,'5',NULL,0,NULL),(2,1,2,'10',0.0172615365,0.172615365,NULL),(3,1,3,'20',0.001153933144,0.02307866288,NULL),(4,1,4,'30',0.00170394485444444,0.05111834563,NULL),(5,1,5,'30',0.00536124203875815,0.1608372612,NULL),(6,1,6,NULL,NULL,NULL,NULL),(7,1,12,'100',NULL,NULL,NULL),(8,1,15,NULL,NULL,NULL,NULL),(9,1,17,NULL,NULL,0.555555,NULL),(10,1,20,'25',0.0939477,2.3486925,NULL),(11,1,21,'30',0.00149996489361702,0.04499894681,NULL),(12,1,22,'12',0.00429075,0.051489,NULL),(14,17,22,'',0,0,'2015-09-13 00:00:00'),(15,17,22,'1234',1234,12345,'2015-09-13 00:00:00'),(16,17,22,'1234',1234,12345,'2015-09-13 00:00:00'),(17,17,22,'',0,0,'2015-09-13 00:00:00'),(18,17,22,'',0,0,'2015-09-13 00:00:00'),(19,17,22,'',0,0,'2015-09-13 00:00:00'),(20,17,22,'',0,0,'2015-09-13 00:00:00'),(21,17,22,'',0,0,'2015-09-13 00:00:00'),(22,17,22,'',0,0,'2015-09-13 00:00:00'),(23,17,22,'',0,0,'2015-09-13 00:00:00'),(24,17,22,'',0,0,'2015-09-13 00:00:00'),(25,17,22,'',0,0,'2015-09-13 00:00:00'),(26,17,22,'',0,0,'2015-09-13 00:00:00'),(27,17,22,'',0,0,'2015-09-13 00:00:00'),(28,17,22,'',0,0,'2015-09-13 00:00:00'),(29,17,22,'',0,0,'2015-09-13 00:00:00'),(30,17,22,'',0,0,'2015-09-13 00:00:00'),(31,17,22,'',0,0,'2015-09-13 00:00:00'),(32,17,22,'',0,0,'2015-09-13 00:00:00'),(33,17,22,'',0,0,'2015-09-13 00:00:00'),(34,17,22,'',0,0,'2015-09-13 00:00:00'),(35,17,22,'',0,0,'2015-09-13 00:00:00'),(36,17,22,'',0,0,'2015-09-13 00:00:00'),(37,17,22,'',0,0,'2015-09-13 00:00:00'),(38,17,22,'',0,0,'2015-09-13 00:00:00'),(39,17,22,'',0,0,'2015-09-13 00:00:00'),(40,17,22,'',0,0,'2015-09-13 00:00:00'),(41,17,22,'',0,0,'2015-09-13 00:00:00'),(42,17,22,'',0,0,'2015-09-13 00:00:00'),(43,17,22,'',0,0,'2015-09-13 00:00:00'),(44,17,22,'',0,0,'2015-09-13 00:00:00'),(45,17,22,'',0,0,'2015-09-13 00:00:00'),(46,17,22,'',0,0,'2015-09-13 00:00:00'),(47,17,22,'',0,0,'2015-09-13 00:00:00'),(48,17,22,'',0,0,'2015-09-13 00:00:00'),(49,17,22,'',0,0,'2015-09-13 00:00:00'),(50,17,22,'',0,0,'2015-09-13 00:00:00'),(51,17,22,'',0,0,'2015-09-13 00:00:00'),(52,17,22,'',0,0,'2015-09-13 00:00:00'),(53,17,22,'',0,0,'2015-09-13 00:00:00'),(54,17,22,'',0,0,'2015-09-13 00:00:00'),(55,17,22,'',0,0,'2015-09-13 00:00:00'),(56,17,22,'',0,0,'2015-09-13 00:00:00');
/*!40000 ALTER TABLE `usuarios_respuestas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-14  0:04:27
