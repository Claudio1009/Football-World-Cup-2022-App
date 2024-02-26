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
-- Table structure for table `matchstats`
--

DROP TABLE IF EXISTS `matchstats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matchstats` (
  `match_id` int NOT NULL,
  `groupID` varchar(10) DEFAULT NULL,
  `round` varchar(30) DEFAULT NULL,
  `winningteam` varchar(255) DEFAULT NULL,
  `hometeam_id` int DEFAULT NULL,
  `awayteam_id` int DEFAULT NULL,
  `goalsFor` int DEFAULT NULL,
  `goalsAgainst` int DEFAULT NULL,
  `yellowcards` int DEFAULT NULL,
  `redCards` int DEFAULT NULL,
  `datamatch` datetime DEFAULT NULL,
  `stadium_id` int DEFAULT NULL,
  `hourmatch` time DEFAULT NULL,
  PRIMARY KEY (`match_id`),
  UNIQUE KEY `match_id_UNIQUE` (`match_id`),
  KEY `stadium_id` (`stadium_id`),
  KEY `matchstats_ibfk_2` (`hometeam_id`),
  KEY `matchstats_ibfk_3` (`awayteam_id`),
  CONSTRAINT `matchstats_ibfk_1` FOREIGN KEY (`stadium_id`) REFERENCES `stadium` (`stadium_id`),
  CONSTRAINT `matchstats_ibfk_2` FOREIGN KEY (`hometeam_id`) REFERENCES `team` (`team_id`),
  CONSTRAINT `matchstats_ibfk_3` FOREIGN KEY (`awayteam_id`) REFERENCES `team` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matchstats`
--

LOCK TABLES `matchstats` WRITE;
/*!40000 ALTER TABLE `matchstats` DISABLE KEYS */;
INSERT INTO `matchstats` VALUES (1,'A','Group Stage','Ecuador',1,2,0,2,6,0,'2022-11-20 00:00:00',2,'18:00:00'),(2,'B','Group Stage','England',5,6,6,2,2,0,'2022-11-21 00:00:00',5,'15:00:00'),(3,'A','Group Stage','Netherlands',3,4,0,2,3,0,'2022-11-21 00:00:00',8,'18:00:00'),(4,'B','Group Stage','Draw',7,8,1,1,6,0,'2022-11-21 00:00:00',4,'21:00:00'),(5,'C','Group Stage','Arabia Saudita',9,10,1,2,6,0,'2022-11-22 00:00:00',1,'12:00:00'),(6,'D','Group Stage','Draw',15,16,0,0,3,0,'2022-11-22 00:00:00',6,'15:00:00'),(7,'C','Group Stage','Draw',11,12,0,0,3,0,'2022-11-22 00:00:00',7,'18:00:00'),(8,'D','Group Stage','France',13,14,4,1,3,0,'2022-11-22 00:00:00',3,'21:00:00'),(9,'F','Group Stage','Draw',23,24,0,0,1,0,'2022-11-23 00:00:00',2,'12:00:00'),(10,'E','Group Stage','Japan',20,19,1,2,0,0,'2022-11-23 00:00:00',5,'15:00:00'),(11,'E','Group Stage','Spain',17,18,7,0,2,0,'2022-11-23 00:00:00',8,'18:00:00'),(12,'F','Group Stage','Belgium',21,22,1,0,5,0,'2022-11-23 00:00:00',4,'21:00:00'),(13,'G','Group Stage','Switzerland',27,28,1,0,3,0,'2022-11-24 00:00:00',3,'12:00:00'),(14,'H','Group Stage','Draw',31,32,0,0,3,0,'2022-11-24 00:00:00',6,'15:00:00'),(15,'H','Group Stage','Portugal',29,30,3,2,6,0,'2022-11-24 00:00:00',7,'18:00:00'),(16,'G','Group Stage','Brazil',25,26,2,0,3,0,'2022-11-24 00:00:00',1,'21:00:00'),(17,'B','Group Stage','Iran',8,6,0,2,3,1,'2022-11-25 00:00:00',4,'12:00:00'),(18,'A','Group Stage','Senegal',1,3,1,3,6,0,'2022-11-25 00:00:00',8,'15:00:00'),(19,'A','Group Stage','Draw',4,2,1,1,1,0,'2022-11-25 00:00:00',5,'18:00:00'),(20,'B','Group Stage','Draw',5,7,0,0,0,0,'2022-11-25 00:00:00',2,'21:00:00'),(21,'D','Group Stage','Australia',16,14,0,1,3,0,'2022-11-26 00:00:00',3,'12:00:00'),(22,'C','Group Stage','Poland',12,10,2,0,5,0,'2022-11-26 00:00:00',6,'15:00:00'),(23,'D','Group Stage','France',13,15,2,1,3,0,'2022-11-26 00:00:00',7,'18:00:00'),(24,'C','Group Stage','Argentina',9,11,2,0,5,0,'2022-11-26 00:00:00',1,'21:00:00'),(25,'E','Group Stage','Costa Rica',19,18,0,1,6,0,'2022-11-27 00:00:00',4,'12:00:00'),(26,'F','Group Stage','Morocco',21,23,0,2,2,0,'2022-11-27 00:00:00',8,'15:00:00'),(27,'F','Group Stage','Croatia',24,22,4,1,4,0,'2022-11-27 00:00:00',5,'18:00:00'),(28,'E','Group Stage','Draw',17,20,1,1,4,0,'2022-11-27 00:00:00',2,'21:00:00'),(29,'G','Group Stage','Draw',28,26,3,3,4,0,'2022-11-28 00:00:00',3,'12:00:00'),(30,'H','Group Stage','Ghana',32,30,2,3,4,1,'2022-11-28 00:00:00',6,'15:00:00'),(31,'G','Group Stage','Brazil',25,27,1,0,2,0,'2022-11-28 00:00:00',7,'18:00:00'),(32,'H','Group Stage','Portugal',29,31,2,0,5,0,'2022-11-28 00:00:00',1,'21:00:00'),(33,'A','Group Stage','Senegal',2,3,1,2,1,0,'2022-11-29 00:00:00',5,'00:00:00'),(34,'A','Group Stage','Netherlands',4,1,2,0,1,0,'2022-11-29 00:00:00',2,'00:00:00'),(35,'B','Group Stage','England',8,5,0,3,2,0,'2022-11-29 00:00:00',4,'00:00:00'),(36,'B','Group Stage','USA',6,7,0,1,4,0,'2022-11-29 00:00:00',8,'00:00:00'),(37,'D','Group Stage','Australia',14,15,1,0,3,0,'2022-11-30 00:00:00',3,'00:00:00'),(38,'D','Group Stage','Tunisia',16,13,1,0,1,0,'2022-11-30 00:00:00',6,'00:00:00'),(39,'C','Group Stage','Mexico',10,11,1,2,7,0,'2022-11-30 00:00:00',1,'00:00:00'),(40,'C','Group Stage','Argentina',12,9,0,2,2,0,'2022-11-30 00:00:00',7,'00:00:00'),(41,'F','Group Stage','Morocco',22,23,1,2,4,0,'2022-12-01 00:00:00',8,'00:00:00'),(42,'F','Group Stage','Draw',24,21,0,0,1,0,'2022-12-01 00:00:00',4,'00:00:00'),(43,'E','Group Stage','Germany',18,20,2,4,1,0,'2022-12-01 00:00:00',2,'00:00:00'),(44,'E','Group Stage','Japan',19,17,2,1,3,0,'2022-12-01 00:00:00',5,'00:00:00'),(45,'H','Group Stage','Uruguay',30,31,0,2,7,0,'2022-12-02 00:00:00',3,'00:00:00'),(46,'H','Group Stage','South Korea',32,29,2,1,2,0,'2022-12-02 00:00:00',6,'00:00:00'),(47,'G','Group Stage','Switzerland',26,27,2,3,11,0,'2022-12-02 00:00:00',7,'00:00:00'),(48,'G','Group Stage','Cameroon',28,25,1,0,7,1,'2022-12-02 00:00:00',1,'00:00:00'),(49,'','Round of 16','Netherlands',4,7,3,1,2,0,'2022-12-03 00:00:00',5,'00:00:00'),(50,'','Round of 16','Argentina',9,14,2,1,2,0,'2022-12-03 00:00:00',4,'00:00:00'),(51,'','Round of 16','England',5,3,3,0,1,0,'2022-12-04 00:00:00',2,'00:00:00'),(52,'','Round of 16','France',13,12,3,1,3,0,'2022-12-04 00:00:00',8,'00:00:00'),(53,'','Round of 16','Croatia',19,24,1,2,2,0,'2022-12-05 00:00:00',3,'00:00:00'),(54,'','Round of 16','Brazil',25,32,4,1,1,0,'2022-12-05 00:00:00',7,'00:00:00'),(55,'','Round of 16','Morocco',23,17,1,0,2,0,'2022-12-06 00:00:00',6,'00:00:00'),(56,'','Round of 16','Portugal',29,27,6,1,2,0,'2022-12-06 00:00:00',1,'00:00:00'),(57,'','Quarterfinals','Argentina',4,9,2,3,17,1,'2022-12-09 00:00:00',1,'00:00:00'),(58,'','Quarterfinals','Croatia',24,25,2,1,5,0,'2022-12-09 00:00:00',6,'00:00:00'),(59,'','Quarterfinals','France',5,13,1,2,4,0,'2022-12-10 00:00:00',2,'00:00:00'),(60,'','Quarterfinals','Morocco',23,29,1,0,4,1,'2022-12-10 00:00:00',8,'00:00:00'),(61,'','Semifinals','Argentina',9,24,3,0,4,0,'2022-12-13 00:00:00',1,'00:00:00'),(62,'','Semifinals','France',13,23,2,0,1,0,'2022-12-14 00:00:00',2,'00:00:00'),(63,'','Third-place play-off','Croatia',24,23,2,1,2,0,'2022-12-17 00:00:00',5,'00:00:00'),(64,'','Final','Argentina',9,13,4,3,8,0,'2022-12-18 00:00:00',1,'00:00:00');
/*!40000 ALTER TABLE `matchstats` ENABLE KEYS */;
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
