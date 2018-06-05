-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: codeigniterdb
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('00k94n2h8u05p5lh2hts5c4ikqq20sri','::1',1528184398,'__ci_last_regenerate|i:1528184382;msg|s:103:\"<div class=\"alert alert-success textcenter\">Student\r\n                details added to Database!!!</div>\";__ci_vars|a:1:{s:3:\"msg\";s:3:\"old\";}'),('el65luvbe5b08f603d5mlr2e3nmojidr','::1',1528185346,'__ci_last_regenerate|i:1528185321;msg|s:103:\"<div class=\"alert alert-success textcenter\">Student\r\n                details added to Database!!!</div>\";__ci_vars|a:1:{s:3:\"msg\";s:3:\"old\";}'),('jmh18p8i5jo4oqb62qiip62o6jupajdc','::1',1528183367,'__ci_last_regenerate|i:1528183086;msg|s:106:\"<div class=\"alert alert-success textcenter\">Student\r\n                Record is Successfully Updated!</div>\";__ci_vars|a:1:{s:3:\"msg\";s:3:\"old\";}'),('lifg22q308eeccd0d9a0r4rcerr9rtaj','::1',1528181619,'__ci_last_regenerate|i:1528181455;'),('qlcb0g30tvlgg616ot723skh2na0src2','::1',1528183644,'__ci_last_regenerate|i:1528183623;msg|s:106:\"<div class=\"alert alert-success textcenter\">Student\r\n                Record is Successfully Updated!</div>\";__ci_vars|a:1:{s:3:\"msg\";s:3:\"old\";}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-05 17:42:19
