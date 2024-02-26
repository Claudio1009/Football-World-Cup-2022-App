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
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team` (
  `team_id` int NOT NULL AUTO_INCREMENT,
  `manager_id` int DEFAULT NULL,
  `teamName` varchar(30) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `home_jersey_color` varchar(255) DEFAULT NULL,
  `away_jersey_color` varchar(255) DEFAULT NULL,
  `ranking` int DEFAULT NULL,
  `acronim` char(5) DEFAULT NULL,
  `groupLetter` varchar(255) DEFAULT NULL,
  `flag` varchar(255) NOT NULL,
  `position` int DEFAULT NULL,
  PRIMARY KEY (`team_id`),
  KEY `manager_id` (`manager_id`),
  CONSTRAINT `team_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,1,'Qatar','The Maroons','Maroon','White',61,'QAT','A','https://www.atiner.gr/members/country_files/image276.jpg',4),(2,2,'Ecuador','La Tri\'s','Yellow','Light blue',36,'ECU','A','https://www.atiner.gr/members/countries_flags_files/image029.jpg',3),(3,3,'Senegal','The Lions of Teranga','White','Green',20,'SEN','A','https://upload.wikimedia.org/wikipedia/commons/f/fd/Flag_of_Senegal.svg',2),(4,4,'Netherlands','Clockwork Orange','Orange','Blue',7,'NED','A','https://www.atiner.gr/members/country_files/image222.gif',1),(5,5,'England','The Three Lions','White','Red',4,'ENG','B','https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_England.svg',1),(6,6,'Iran','Team Melli','White','Red',21,'IRN','B','https://www.atiner.gr/members/country_files/image289.gif',3),(7,7,'USA','The Stars and Stripes','White','Blue',11,'USA','B','https://www.atiner.gr/members/country_files/image277.gif',2),(8,8,'Wales','The Dragons','Red','White',28,'WAL','B','https://upload.wikimedia.org/wikipedia/commons/c/c1/Flag_of_Wales_%28bordered%29.svg',4),(9,9,'Argentina','La Albiceleste','Sky Blue','Purple',1,'ARG','C','https://www.atiner.gr/members/country_files/image172.jpg',1),(10,10,'Arabia Saudita','The Green Falcons','White','Green',57,'KSA','C','https://www.atiner.gr/members/country_files/image193.jpg',4),(11,11,'Mexico','El Tri','Green','White',12,'MEX','C','https://www.atiner.gr/members/country_files/image213.gif',3),(12,12,'Poland','The Eagles','White','Red',31,'POL','C','https://www.atiner.gr/members/country_files/image263.gif',2),(13,13,'France','Les Bleus','Dark Blue','White',2,'FRA','D','https://www.atiner.gr/members/country_files/image242.gif',1),(14,14,'Australia','Socceroos','Yellow','Green',27,'AUS','D','https://www.atiner.gr/members/country_files/image175.gif',2),(15,15,'Denmark','The Tin Soldiers','Red','White',19,'DNK','D','https://www.atiner.gr/members/country_files/image228.jpg',4),(16,16,'Tunisia','Eagles of Carthage','White','Red',32,'TUN','D','https://www.atiner.gr/members/country_files/image241.jpg',3),(17,17,'Spain','La Furia Roja','Red','White',8,'ESP','E','https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/125px-Flag_of_Spain.svg.png',2),(18,18,'Costa Rica','Los Ticos','Red','Red with Blue',46,'CRI','E','https://www.atiner.gr/members/country_files/image282.jpg',4),(19,19,'Japan','Samurai Blue','Blue','Gray',18,'JPN','E','https://www.atiner.gr/members/country_files/image176.jpg',1),(20,20,'Germany','Die Mannschaft','Orange','Blue',16,'GER','E','https://www.atiner.gr/members/country_files/image251.jpg',3),(21,21,'Belgium','The Red Devils','Red','Yellow',5,'BEL','F','https://www.atiner.gr/members/country_files/image182.gif',3),(22,22,'Canada','Les Rouges','White','Black',45,'CAN','F','https://www.atiner.gr/members/country_files/image206.gif',4),(23,23,'Morocco','Atlas Lions','Red','White',13,'MAR','F','https://www.atiner.gr/members/country_files/image192.jpg',1),(24,24,'Croatia','Vatreni','Red and White square','Blue',10,'CRO','F','https://www.atiner.gr/members/country_files/image218.jpg',2),(25,25,'Brazil','Verde-Amarela','Yellow','Blue',3,'BRA','G','https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/125px-Flag_of_Brazil.svg.png',1),(26,26,'Serbia','The White Eagles','Red','White',29,'SRB','G','https://www.atiner.gr/members/country_files/image196.jpg',4),(27,27,'Switzerland','Rossocrociati','Red','White',14,'SWI','G','https://www.atiner.gr/members/country_files/image223.gif',2),(28,28,'Cameroon','Indomitable Lions','Green','White',43,'CMR','G','https://www.atiner.gr/members/country_files/image203.jpg',3),(29,29,'Portugal','A Selecao das Quinas','Red','White',6,'POR','H','https://www.atiner.gr/members/country_files/image269.gif',1),(30,30,'Ghana','Black stars','White','Red',60,'GHA','H','https://www.atiner.gr/members/country_files/image257.jpg',4),(31,31,'Uruguay','La Celeste','Sky Blue','White',15,'URY','H','https://www.atiner.gr/members/countries_flags_files/image040.jpg',3),(32,32,'South Korea','Taegeuk Warriors','Red','White',24,'KOR','H','https://www.atiner.gr/members/country_files/image208.gif',2);
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
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
