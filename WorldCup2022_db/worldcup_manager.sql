-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: worldcup
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manager` (
  `manager_id` int NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT INTO `manager` VALUES (1,'Sanchez Bas','Felix',47,'Spanish'),(2,'Alfaro','Gustavo',61,'Argentinian'),(3,'Cisse','Aliou',47,'Senegalese'),(4,'van Gaal','Louis',72,'Dutchman'),(5,'Southgate','Gareth',53,'English'),(6,'Queiroz','Carlos',70,'Portuguese'),(7,'Berhalter','Gregg',50,'American'),(8,'Page','Robert',49,'Welsh'),(9,'Scaloni','Lionel',45,'Argentinian'),(10,'Renard','Herve',55,'French'),(11,'Martino','Gerardo',60,'Argentinian'),(12,'Michniewicz','Czeslaw',53,'Polish'),(13,'Deschamps','Didier',55,'French'),(14,'Arnold','Graham',60,'Australian'),(15,'Hjulmand','Kasper',51,'Danish'),(16,'Kadri','Jalel',51,'Tunisian'),(17,'Enrique','Luis',53,'Spanish'),(18,'Suarez','Luis Fernando',63,'Colombian'),(19,'Moriyasu','Hajime',55,'Japanese'),(20,'Flick','Hansi',58,'German'),(21,'Martinez','Roberto',50,'Spanish'),(22,'Herdman','John',48,'English'),(23,'Regragui','Walid',48,'Moroccan'),(24,'Dalic','Zlatko',57,'Croatian'),(25,'Bacchi','Adenor Leonardo',62,'Brazilian'),(26,'Stojkovic','Dragan',58,'Serbian'),(27,'Yakin','Murat',49,'Swiss'),(28,'Song','Rigobert',47,'Cameroonian'),(29,'Santos','Fernando',69,'Portuguese'),(30,'Addo','Otto',48,'Ghanaian'),(31,'Alonso','Diego',48,'Uruguayan'),(32,'Bento','Paulo',54,'Portuguese');
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-18 17:33:45
