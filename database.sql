CREATE DATABASE  IF NOT EXISTS `iforme` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `iforme`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: iforme
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `informacoes`
--

DROP TABLE IF EXISTS `informacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informacoes` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `horario_funcionamento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informacoes`
--

LOCK TABLES `informacoes` WRITE;
/*!40000 ALTER TABLE `informacoes` DISABLE KEYS */;
INSERT INTO `informacoes` VALUES (1,' Seg a Sex das 8:00 ao 12:00 e 13:30 as 18:00<br>');
/*!40000 ALTER TABLE `informacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refeicao`
--

DROP TABLE IF EXISTS `refeicao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `refeicao` (
  `id_refeicao` int(11) NOT NULL AUTO_INCREMENT,
  `data_refeicao` date NOT NULL,
  `acomp1_refeicao` varchar(100) NOT NULL,
  `acomp2_refeicao` varchar(100) NOT NULL,
  `guarnicao1_refeicao` varchar(100) NOT NULL,
  `guarnicao2_refeicao` varchar(100) NOT NULL,
  `salada_refeicao` varchar(100) NOT NULL,
  `tipo_id_tipo` int(11) NOT NULL,
  `acomp1_refeicao_icone` varchar(100) NOT NULL DEFAULT 'restaurant',
  `acomp2_refeicao_icone` varchar(100) NOT NULL DEFAULT 'restaurant',
  `guarnicao1_refeicao_icone` varchar(100) NOT NULL DEFAULT 'restaurant',
  `guarnicao2_refeicao_icone` varchar(100) NOT NULL DEFAULT 'restaurant',
  `salada_refeicao_icone` varchar(100) NOT NULL DEFAULT 'restaurant',
  PRIMARY KEY (`id_refeicao`),
  KEY `fk_refeicao_tipo_idx` (`tipo_id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refeicao`
--

LOCK TABLES `refeicao` WRITE;
/*!40000 ALTER TABLE `refeicao` DISABLE KEYS */;
INSERT INTO `refeicao` VALUES (2,'2017-09-12','macarrão','ovo','farofa','pimentão','alface',2,'restaurant','restaurant','restaurant','restaurant','restaurant'),(4,'2017-09-21','arroz','feijão','polenta','ovo','brocolis',1,'restaurant','restaurant','restaurant','restaurant','restaurant');
/*!40000 ALTER TABLE `refeicao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'Almoço'),(2,'Janta');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_ticket`
--

DROP TABLE IF EXISTS `tipo_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_ticket` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_ticket`
--

LOCK TABLES `tipo_ticket` WRITE;
/*!40000 ALTER TABLE `tipo_ticket` DISABLE KEYS */;
INSERT INTO `tipo_ticket` VALUES (1,'Professor'),(2,'Visitante'),(3,'Estudante'),(4,'Terceirizado'),(5,'adda'),(6,'tipo');
/*!40000 ALTER TABLE `tipo_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(200) DEFAULT NULL,
  `senha_usuario` varchar(50) DEFAULT NULL,
  `email_usuario` varchar(100) DEFAULT NULL,
  `nivel_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'José Leonardo','202cb962ac59075b964b07152d234b70','joseleonardodacosta@gmail.com',2),(2,'adm','202cb962ac59075b964b07152d234b70','adm@gmail.com',1),(3,'refeitorio','202cb962ac59075b964b07152d234b70','refeitorio@gmail.com',3),(4,'todos','202cb962ac59075b964b07152d234b70','todos@gmail.com',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valor_ticket`
--

DROP TABLE IF EXISTS `valor_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valor_ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `data_cadastro` date DEFAULT NULL,
  `valor_ticket` float DEFAULT NULL,
  `id_tipo_ticket` int(11) NOT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `tipo_idx` (`id_tipo_ticket`),
  CONSTRAINT `tipo` FOREIGN KEY (`id_tipo_ticket`) REFERENCES `tipo_ticket` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valor_ticket`
--

LOCK TABLES `valor_ticket` WRITE;
/*!40000 ALTER TABLE `valor_ticket` DISABLE KEYS */;
INSERT INTO `valor_ticket` VALUES (1,'2017-09-22',3,1),(2,'2017-09-22',5,2),(3,'2017-11-13',1,2),(4,'2017-11-13',5,3),(5,'2017-11-13',8,4),(6,'2017-11-13',5.75,2),(7,'2017-11-13',1,5),(8,NULL,1052.85,1),(9,NULL,89,6);
/*!40000 ALTER TABLE `valor_ticket` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-13 21:57:38
