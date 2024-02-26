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
-- Table structure for table `statsoverall`
--

DROP TABLE IF EXISTS `statsoverall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statsoverall` (
  `stats_id` int NOT NULL AUTO_INCREMENT,
  `player_id` int DEFAULT NULL,
  `goals` int DEFAULT '0',
  `assists` int DEFAULT '0',
  `redcards` int DEFAULT '0',
  `yellowcards` int DEFAULT '0',
  `saves` int DEFAULT '0',
  PRIMARY KEY (`stats_id`),
  KEY `player_id` (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=836 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statsoverall`
--

LOCK TABLES `statsoverall` WRITE;
/*!40000 ALTER TABLE `statsoverall` DISABLE KEYS */;
INSERT INTO `statsoverall` VALUES (1,100,0,0,0,0,1),(2,101,0,1,0,0,0),(3,102,0,0,0,0,0),(4,103,0,0,0,0,0),(5,104,0,0,0,0,0),(6,105,0,0,0,0,0),(7,106,0,0,0,0,0),(8,107,0,0,0,0,0),(9,108,0,0,0,0,0),(10,109,0,0,0,0,0),(11,110,0,0,0,0,0),(12,111,0,0,0,0,0),(13,112,3,0,0,0,0),(14,113,0,0,0,0,0),(15,114,0,0,0,0,0),(16,115,0,0,0,0,0),(17,116,0,1,0,0,0),(18,117,0,0,0,0,0),(19,118,0,0,0,0,0),(20,119,0,0,0,2,0),(21,120,0,0,0,0,0),(22,121,0,0,0,0,0),(23,122,1,0,0,0,0),(24,123,0,0,0,0,0),(25,124,0,0,0,0,0),(26,125,0,0,0,0,0),(27,126,0,0,0,0,0),(28,127,0,0,0,0,0),(29,128,0,0,0,0,0),(30,129,0,0,0,0,0),(31,130,0,0,0,1,0),(32,131,0,0,0,0,0),(33,132,0,0,0,0,0),(34,133,3,0,0,0,0),(35,134,0,0,0,0,0),(36,135,1,0,0,0,0),(37,136,0,1,0,0,0),(38,137,0,0,0,0,0),(39,138,0,0,0,0,0),(40,139,1,2,0,0,0),(41,140,0,0,0,0,0),(42,141,0,0,0,0,0),(43,142,1,1,0,0,0),(44,143,0,0,0,0,0),(45,144,2,0,0,1,0),(46,145,0,1,0,0,0),(47,146,1,1,0,0,0),(48,147,1,2,1,2,0),(49,148,0,0,0,0,18),(50,149,0,0,0,0,0),(51,150,0,0,0,0,0),(52,151,0,0,0,0,0),(53,152,0,0,0,0,1),(54,153,0,0,0,0,0),(55,154,0,0,0,0,0),(56,155,0,0,0,0,0),(57,156,0,0,0,0,0),(58,157,0,0,0,0,0),(59,158,0,0,0,0,0),(60,159,0,0,0,0,0),(61,160,1,0,0,0,0),(62,161,0,0,0,0,0),(63,162,0,0,0,1,0),(64,163,0,0,0,0,0),(65,164,0,0,0,0,0),(66,165,0,0,0,1,0),(67,166,0,0,0,0,0),(68,167,0,0,0,0,0),(69,168,0,1,0,0,0),(70,169,0,0,0,0,0),(71,170,0,0,0,1,0),(72,171,0,0,0,0,0),(73,172,0,0,0,0,0),(74,173,0,0,0,0,4),(75,174,0,0,0,0,0),(76,175,0,0,0,0,0),(77,176,0,0,0,0,0),(78,177,0,0,0,0,0),(79,178,0,0,0,0,0),(80,179,0,0,0,0,0),(81,180,1,0,0,0,0),(82,181,0,0,0,0,0),(83,182,0,0,0,0,0),(84,183,0,0,0,0,0),(85,184,0,0,0,0,0),(86,185,0,0,0,0,0),(87,186,1,0,0,0,0),(88,187,0,0,0,0,0),(89,188,0,0,0,0,0),(90,189,0,0,0,0,0),(91,190,0,1,0,0,0),(92,191,0,1,0,0,0),(93,192,0,0,0,0,0),(94,193,0,0,0,0,7),(95,194,0,0,0,0,0),(96,195,1,0,0,0,0),(97,196,1,0,0,0,0),(98,197,1,0,0,0,0),(99,198,0,0,0,0,0),(100,199,0,0,0,0,0),(101,200,0,0,0,0,0),(102,201,0,0,0,0,0),(103,202,0,0,0,0,0),(104,203,0,0,0,2,0),(105,204,0,0,0,0,7),(106,205,0,0,0,0,0),(107,206,0,1,0,0,0),(108,207,0,0,0,0,0),(109,208,0,0,0,0,0),(110,209,0,1,0,0,0),(111,210,1,0,0,0,0),(112,211,1,0,0,0,0),(113,212,2,3,0,0,0),(114,213,1,1,0,0,0),(115,214,3,0,0,0,0),(116,215,0,0,0,0,0),(117,216,0,0,0,0,0),(118,217,0,1,0,0,0),(119,218,0,0,0,0,0),(120,219,0,0,0,0,0),(121,220,3,0,0,0,0),(122,221,0,0,0,0,0),(123,222,0,0,0,0,0),(124,223,1,2,0,0,0),(125,224,0,0,0,0,0),(126,225,1,1,0,0,0),(127,226,0,0,0,0,0),(128,227,0,0,0,0,0),(129,228,0,0,0,0,0),(130,229,0,0,0,0,0),(131,230,0,0,0,0,4),(132,231,0,0,0,0,0),(133,232,0,0,0,0,0),(134,233,0,0,0,0,0),(135,234,0,0,0,0,0),(136,235,0,0,0,0,0),(137,236,0,0,0,2,0),(138,237,0,0,0,0,0),(139,238,2,1,0,0,0),(140,239,0,0,0,0,0),(141,240,0,0,0,0,0),(142,241,0,0,0,0,0),(143,242,0,0,0,0,0),(144,243,0,0,0,0,0),(145,244,1,0,0,0,0),(146,245,0,0,0,0,0),(147,246,0,1,0,0,0),(148,247,0,0,0,0,0),(149,248,0,0,0,0,0),(150,249,0,0,0,0,0),(151,250,0,0,0,0,0),(152,251,0,0,0,0,0),(153,252,1,0,0,0,0),(154,253,0,0,0,0,4),(155,254,0,0,0,1,0),(156,255,0,0,0,0,9),(157,256,0,1,0,0,0),(158,257,0,0,0,0,0),(159,258,0,0,0,0,0),(160,259,0,0,0,0,0),(161,260,0,0,0,0,0),(162,261,0,0,0,0,0),(163,262,0,0,0,0,0),(164,263,0,0,0,0,0),(165,264,1,2,0,0,0),(166,265,0,0,0,0,0),(167,266,0,0,0,0,0),(168,267,0,0,0,0,0),(169,268,0,0,0,0,0),(170,269,0,0,0,0,0),(171,270,0,0,0,0,0),(172,271,0,0,0,0,0),(173,272,0,0,0,0,0),(174,273,1,0,0,0,0),(175,274,0,0,0,0,0),(176,275,1,0,0,0,0),(177,276,0,0,0,0,0),(178,277,0,0,0,0,0),(179,278,0,0,0,0,0),(180,279,0,0,0,0,0),(181,280,0,0,0,0,0),(182,281,0,0,1,0,5),(183,282,0,0,0,0,0),(184,283,0,0,0,0,0),(185,284,0,0,0,0,0),(186,285,0,0,0,0,0),(187,286,0,0,0,0,0),(188,287,0,0,0,0,0),(189,288,0,0,0,0,0),(190,289,0,0,0,0,0),(191,290,0,0,0,0,0),(192,291,1,0,0,0,0),(193,292,0,0,0,0,4),(194,293,0,0,0,0,0),(195,294,0,0,0,0,0),(196,295,0,0,0,0,0),(197,296,0,0,0,0,0),(198,297,0,0,0,0,0),(199,298,0,0,0,0,0),(200,299,0,0,0,0,0),(201,300,0,0,0,0,0),(202,301,0,0,0,0,0),(203,302,0,0,0,0,0),(204,303,0,0,0,0,0),(205,304,0,0,0,0,0),(206,305,0,0,0,0,0),(207,306,0,0,0,0,0),(208,307,0,0,0,0,0),(209,308,0,0,0,0,0),(210,309,0,0,0,0,0),(211,310,0,0,0,3,0),(212,311,0,0,0,2,0),(213,312,0,0,0,0,0),(214,313,0,0,0,0,0),(215,314,0,0,0,3,0),(216,315,4,0,0,0,0),(217,316,7,3,0,1,0),(218,317,1,1,0,0,0),(219,318,0,0,0,0,0),(220,319,0,0,0,2,0),(221,320,0,0,0,0,0),(222,321,0,0,0,0,0),(223,322,0,0,0,0,0),(224,323,0,0,0,0,0),(225,324,0,0,0,0,0),(226,325,0,1,0,2,0),(227,326,1,1,0,0,0),(228,327,0,0,0,0,0),(229,328,0,0,0,0,0),(230,329,0,0,0,0,7),(231,330,1,1,0,0,0),(232,331,0,0,0,0,0),(233,332,1,1,0,0,0),(234,333,0,0,0,0,0),(235,334,0,0,0,1,0),(236,335,0,1,0,0,0),(237,336,0,0,0,0,0),(238,337,0,0,0,0,0),(239,338,0,0,0,0,0),(240,339,0,0,0,0,0),(241,340,0,0,0,0,0),(242,341,0,0,0,0,0),(243,342,0,0,0,0,0),(244,343,0,0,0,0,0),(245,344,0,0,0,0,0),(246,345,0,0,0,0,3),(247,346,0,0,0,0,0),(248,347,0,0,0,0,0),(249,348,0,0,0,0,0),(250,349,0,0,0,0,0),(251,350,0,0,0,0,0),(252,351,0,0,0,0,0),(253,352,1,0,0,0,0),(254,353,0,0,0,0,0),(255,354,0,0,0,0,0),(256,355,0,0,0,0,0),(257,356,1,0,0,0,0),(258,357,0,0,0,0,0),(259,358,0,0,0,0,0),(260,359,0,0,0,0,23),(261,360,0,0,0,2,0),(262,361,0,0,0,0,0),(263,362,0,0,0,0,0),(264,363,0,0,0,0,0),(265,364,0,0,0,0,0),(266,365,0,0,0,0,0),(267,366,0,0,0,0,0),(268,367,2,1,0,0,0),(269,368,0,0,0,0,0),(270,369,0,0,0,0,0),(271,370,0,0,0,0,0),(272,371,0,0,0,0,0),(273,372,0,0,0,0,0),(274,373,0,0,0,0,0),(275,374,0,0,0,0,0),(276,375,0,0,0,0,0),(277,376,0,0,0,0,0),(278,377,0,0,0,0,0),(279,378,1,0,0,0,0),(280,379,0,0,0,0,0),(281,380,0,0,0,0,0),(282,381,0,0,0,0,0),(283,382,0,0,0,0,0),(284,383,0,0,0,0,0),(285,384,0,0,0,0,0),(286,385,0,0,0,0,0),(287,386,0,0,0,0,0),(288,387,0,0,0,1,0),(289,388,0,0,0,2,0),(290,389,0,0,0,1,0),(291,390,0,0,0,0,0),(292,391,0,0,0,0,0),(293,392,0,0,0,2,0),(294,393,0,0,0,0,0),(295,394,2,0,0,1,0),(296,395,1,0,0,0,0),(297,396,0,0,0,0,0),(298,397,0,0,0,0,0),(299,398,0,0,0,0,0),(300,399,0,0,0,1,0),(301,400,0,0,0,0,0),(302,401,0,0,0,0,0),(303,402,0,0,0,1,0),(304,403,0,0,0,0,0),(305,404,0,0,0,0,0),(306,405,0,0,0,1,14),(307,406,0,0,0,0,0),(308,407,0,0,0,0,0),(309,408,0,0,0,0,0),(310,409,0,0,0,0,0),(311,410,0,0,0,0,0),(312,411,0,0,0,0,12),(313,412,0,0,0,2,0),(314,413,0,0,0,0,0),(315,414,0,0,0,0,0),(316,415,0,0,0,0,0),(317,416,0,0,0,0,0),(318,417,1,1,0,0,0),(319,418,0,0,0,0,0),(320,419,0,0,0,0,0),(321,420,0,0,0,0,0),(322,421,0,0,0,0,0),(323,422,0,0,0,0,0),(324,423,0,0,0,0,0),(325,424,0,1,0,0,0),(326,425,1,0,0,0,0),(327,426,0,0,0,0,0),(328,427,0,0,0,0,0),(329,428,0,0,0,0,0),(330,429,0,0,0,0,0),(331,430,0,0,0,0,0),(332,431,0,0,0,0,0),(333,432,0,0,0,2,0),(334,433,1,0,0,0,0),(335,434,0,0,0,0,0),(336,435,0,0,0,0,0),(337,436,0,0,0,0,0),(338,437,0,0,0,0,8),(339,438,0,1,0,0,0),(340,439,0,0,0,0,0),(341,440,0,0,0,0,0),(342,441,0,0,0,0,0),(343,442,1,0,0,0,0),(344,443,0,0,0,0,0),(345,444,0,0,0,0,0),(346,445,0,0,0,0,0),(347,446,0,0,0,0,0),(348,447,0,0,0,0,0),(349,448,0,0,0,0,0),(350,449,0,0,0,0,0),(351,450,0,0,0,0,0),(352,451,0,0,0,0,0),(353,452,0,0,0,0,0),(354,453,0,0,0,0,0),(355,454,0,0,0,0,0),(356,455,0,0,0,0,0),(357,456,0,0,0,0,0),(358,457,0,0,0,0,0),(359,458,0,0,0,0,0),(360,459,0,0,0,0,0),(361,460,0,0,0,0,0),(362,461,0,0,0,0,0),(363,462,0,0,0,0,0),(364,463,0,0,0,0,17),(365,464,0,0,0,0,0),(366,465,0,0,0,0,0),(367,466,0,0,0,0,0),(368,467,0,0,0,0,0),(369,468,0,0,0,0,0),(370,469,0,3,0,0,0),(371,470,1,0,0,0,0),(372,471,4,0,0,0,0),(373,472,8,2,0,0,0),(374,473,0,2,0,0,0),(375,474,1,0,0,0,0),(376,475,0,0,0,0,0),(377,476,1,1,0,0,0),(378,477,0,0,0,0,0),(379,478,0,0,0,0,2),(380,479,0,0,0,0,0),(381,480,0,0,0,0,0),(382,481,0,0,0,0,0),(383,482,0,0,0,0,0),(384,483,0,0,0,0,0),(385,484,1,2,0,0,0),(386,485,0,0,0,0,0),(387,486,0,0,0,0,0),(388,487,0,0,0,0,0),(389,488,0,2,0,0,0),(390,489,0,0,0,0,0),(391,490,0,0,0,0,0),(392,491,0,0,0,0,0),(393,492,0,0,0,0,0),(394,493,0,0,0,0,0),(395,494,0,0,0,0,0),(396,495,0,0,0,0,0),(397,496,0,0,0,0,0),(398,497,0,0,0,0,0),(399,498,1,0,0,0,0),(400,499,0,0,0,0,0),(401,500,0,0,0,0,0),(402,501,0,0,0,0,0),(403,502,0,1,0,1,0),(404,503,0,0,0,0,0),(405,504,0,0,0,0,9),(406,505,0,0,0,0,0),(407,506,0,0,0,0,0),(408,507,0,0,0,0,0),(409,508,0,0,0,0,0),(410,509,0,0,0,0,0),(411,510,0,0,0,0,0),(412,511,0,0,0,0,0),(413,512,0,0,0,1,0),(414,513,0,0,0,0,0),(415,514,0,0,0,0,0),(416,515,0,0,0,0,11),(417,516,0,0,0,0,0),(418,517,1,0,0,0,0),(419,518,1,0,0,0,0),(420,519,0,0,0,0,0),(421,520,0,0,0,0,0),(422,521,0,0,0,1,0),(423,522,0,0,0,0,0),(424,523,0,0,0,0,0),(425,524,0,0,0,0,0),(426,525,0,0,0,0,0),(427,526,0,0,0,0,0),(428,527,0,0,0,0,0),(429,528,0,0,0,0,0),(430,529,0,0,0,2,0),(431,530,0,0,0,0,0),(432,531,1,1,0,0,0),(433,532,0,0,0,0,0),(434,533,0,0,0,0,0),(435,534,0,0,0,0,0),(436,535,0,0,0,0,0),(437,536,0,0,0,0,0),(438,537,0,0,0,0,0),(439,538,0,0,0,0,0),(440,539,0,0,0,0,0),(441,540,0,0,0,0,0),(442,541,0,0,0,0,8),(443,542,0,0,0,0,0),(444,543,0,1,0,0,0),(445,544,0,0,0,0,0),(446,545,0,0,0,0,0),(447,546,0,0,0,0,0),(448,547,2,0,0,0,0),(449,548,0,0,0,0,0),(450,549,2,1,0,0,0),(451,550,1,1,0,0,0),(452,551,0,0,0,0,0),(453,552,0,0,0,0,0),(454,553,0,0,0,0,0),(455,554,0,1,0,0,0),(456,555,0,0,0,0,0),(457,556,0,0,0,0,0),(458,557,0,0,0,0,0),(459,558,0,0,0,0,0),(460,559,0,1,0,0,0),(461,560,0,0,0,0,0),(462,561,1,0,0,0,0),(463,562,0,0,0,0,0),(464,563,0,0,0,0,0),(465,564,0,0,0,0,0),(466,565,0,0,0,0,0),(467,566,0,0,0,0,0),(468,567,0,0,0,0,0),(469,568,0,0,0,0,0),(470,569,0,0,0,0,0),(471,570,0,1,0,2,0),(472,571,0,0,0,0,0),(473,572,0,0,0,0,0),(474,573,0,0,0,0,0),(475,574,2,0,0,0,0),(476,575,0,1,0,0,0),(477,576,0,0,0,0,0),(478,577,0,0,0,0,0),(479,578,0,0,0,0,15),(480,579,0,0,0,0,0),(481,580,0,1,0,0,0),(482,581,0,0,0,0,0),(483,582,0,0,0,0,0),(484,583,1,0,0,0,0),(485,584,1,0,0,0,0),(486,585,0,0,0,0,0),(487,586,0,0,0,0,0),(488,587,0,0,0,0,0),(489,588,0,1,0,0,0),(490,589,0,0,0,0,0),(491,590,0,0,0,0,0),(492,591,1,0,0,0,0),(493,592,0,0,0,0,0),(494,593,0,0,0,0,0),(495,594,0,1,0,0,0),(496,595,0,0,0,0,0),(497,596,0,0,0,0,0),(498,597,0,0,0,0,0),(499,598,0,0,0,0,0),(500,599,3,1,0,0,0),(501,600,0,0,0,0,0),(502,601,1,0,0,0,0),(503,602,1,0,0,0,0),(504,603,2,0,0,0,0),(505,604,0,0,0,0,0),(506,605,0,0,0,0,0),(507,606,0,0,0,0,0),(508,607,0,0,0,0,0),(509,608,0,0,0,0,0),(510,609,0,0,0,0,0),(511,610,0,2,0,0,0),(512,611,1,0,0,0,0),(513,612,0,0,0,0,0),(514,613,1,1,0,0,0),(515,614,0,0,0,0,0),(516,615,0,0,0,0,6),(517,616,0,0,0,0,0),(518,617,0,0,0,0,0),(519,618,0,0,0,0,0),(520,619,0,0,0,0,9),(521,620,0,1,0,0,0),(522,621,0,0,0,0,0),(523,622,0,0,0,0,0),(524,623,0,0,0,0,0),(525,624,0,0,0,0,0),(526,625,0,0,0,0,0),(527,626,0,0,0,0,0),(528,627,0,0,0,0,0),(529,628,0,0,0,0,0),(530,629,0,0,0,0,0),(531,630,0,0,0,0,0),(532,631,0,0,0,0,0),(533,632,0,0,0,0,0),(534,633,0,0,0,0,0),(535,634,0,0,0,0,0),(536,635,0,0,0,0,0),(537,636,0,0,0,2,0),(538,637,0,0,0,0,0),(539,638,0,0,0,0,0),(540,639,0,0,0,0,0),(541,640,0,0,0,0,0),(542,641,1,0,0,0,0),(543,642,0,0,0,0,0),(544,643,0,0,0,0,0),(545,644,0,0,0,0,0),(546,645,0,0,0,0,0),(547,646,0,0,0,1,0),(548,647,0,0,0,1,0),(549,648,0,0,0,0,0),(550,649,0,0,0,0,0),(551,650,0,0,0,0,0),(552,651,0,0,0,0,0),(553,652,0,0,0,0,0),(554,653,0,0,0,0,0),(555,654,0,0,0,0,0),(556,655,0,1,0,0,0),(557,656,0,0,0,0,0),(558,657,0,0,0,0,0),(559,658,0,0,0,0,0),(560,659,0,0,0,0,0),(561,660,0,0,0,0,0),(562,661,0,0,0,0,0),(563,662,0,0,0,0,8),(564,663,1,0,0,0,0),(565,664,0,0,0,0,0),(566,665,0,0,0,0,0),(567,666,0,0,0,0,0),(568,667,0,0,0,0,0),(569,668,0,0,0,0,0),(570,669,0,0,0,0,0),(571,670,0,0,0,0,0),(572,671,0,0,0,0,25),(573,672,0,0,0,0,0),(574,673,0,0,0,0,0),(575,674,1,3,0,0,0),(576,675,0,0,0,0,0),(577,676,0,1,0,0,0),(578,677,1,0,0,0,0),(579,678,0,0,0,2,0),(580,679,2,0,0,0,0),(581,680,0,0,0,0,0),(582,681,0,0,0,0,0),(583,682,0,0,0,0,0),(584,683,0,0,0,0,0),(585,684,1,1,0,0,0),(586,685,0,0,0,0,0),(587,686,1,0,0,0,0),(588,687,0,0,0,0,0),(589,688,1,2,0,0,0),(590,689,0,0,0,0,0),(591,690,1,0,0,0,0),(592,691,0,0,0,0,0),(593,692,0,1,0,0,0),(594,693,0,0,0,0,0),(595,694,0,0,0,0,0),(596,695,0,0,0,0,0),(597,696,0,0,0,0,0),(598,697,0,0,0,0,7),(599,698,0,1,0,0,0),(600,699,0,0,0,0,0),(601,700,0,0,0,1,0),(602,701,0,0,0,0,0),(603,702,1,0,0,0,0),(604,703,1,1,0,0,0),(605,704,0,0,0,0,0),(606,705,0,0,0,0,0),(607,706,0,0,0,0,0),(608,707,0,1,0,0,0),(609,708,0,0,0,0,3),(610,709,0,0,0,0,0),(611,710,1,0,0,0,0),(612,711,0,0,0,0,0),(613,712,0,0,0,0,0),(614,713,0,0,0,0,0),(615,714,0,0,0,0,0),(616,715,2,0,0,0,0),(617,716,1,0,0,1,0),(618,717,0,0,1,2,0),(619,718,0,0,0,0,0),(620,719,0,0,0,0,0),(621,720,0,0,0,0,0),(622,721,0,1,0,0,0),(623,722,0,0,0,0,0),(624,723,0,0,0,0,5),(625,724,0,0,0,0,0),(626,725,0,1,0,0,0),(627,726,0,0,0,0,0),(628,727,1,0,0,0,0),(629,728,0,0,0,0,0),(630,729,1,1,0,0,0),(631,730,0,0,0,0,0),(632,731,3,0,0,0,0),(633,732,2,1,0,0,0),(634,733,0,0,0,0,0),(635,734,0,0,0,0,0),(636,735,0,0,0,0,0),(637,736,0,0,0,0,0),(638,737,0,0,0,0,0),(639,738,0,0,0,0,0),(640,739,0,0,0,0,0),(641,740,0,0,0,0,0),(642,741,0,0,0,0,0),(643,742,1,2,0,0,0),(644,743,0,1,0,0,0),(645,744,0,0,0,0,0),(646,745,0,0,0,0,2),(647,746,0,0,0,0,0),(648,747,0,0,0,0,0),(649,748,0,0,0,0,0),(650,749,0,0,0,0,0),(651,750,0,1,0,0,0),(652,751,0,1,0,0,0),(653,752,0,0,0,0,0),(654,753,0,0,0,0,0),(655,754,0,0,0,0,0),(656,755,0,0,0,0,0),(657,756,0,0,0,0,0),(658,757,0,0,0,0,0),(659,758,2,1,1,0,0),(660,759,0,0,0,0,0),(661,760,0,0,0,0,0),(662,761,1,0,0,0,0),(663,762,0,0,0,0,0),(664,763,0,0,0,0,0),(665,764,0,0,0,0,9),(666,765,0,0,0,0,0),(667,766,0,0,0,0,0),(668,767,0,0,0,2,0),(669,768,0,0,0,0,0),(670,769,1,1,0,0,0),(671,770,0,0,0,0,0),(672,771,0,0,0,0,2),(673,772,0,0,0,0,0),(674,773,0,0,0,0,0),(675,774,0,0,0,0,0),(676,775,0,0,0,0,0),(677,776,1,0,0,2,0),(678,777,0,0,0,0,0),(679,778,0,0,0,2,0),(680,779,0,0,0,0,0),(681,780,0,0,0,0,0),(682,781,0,0,0,0,0),(683,782,0,0,0,2,0),(684,783,2,0,0,1,0),(685,784,0,2,0,0,0),(686,785,0,0,0,0,0),(687,786,0,0,0,0,0),(688,787,0,0,0,0,0),(689,788,0,2,0,0,0),(690,789,0,0,0,0,0),(691,790,0,0,0,2,0),(692,791,0,0,0,0,0),(693,792,1,0,0,0,0),(694,793,0,0,0,0,0),(695,794,1,0,0,0,0),(696,795,0,0,0,0,0),(697,796,0,0,0,0,0),(698,797,0,0,0,0,16),(699,798,0,0,0,0,0),(700,799,0,0,0,0,0),(701,800,0,0,0,0,0),(702,801,0,0,0,0,12),(703,802,0,0,0,0,0),(704,803,0,1,0,0,0),(705,804,0,0,0,0,0),(706,805,1,0,0,1,0),(707,806,0,0,0,0,0),(708,807,2,0,0,0,0),(709,808,1,0,0,0,0),(710,809,0,0,0,0,0),(711,810,0,0,0,0,0),(712,811,0,0,0,0,0),(713,812,0,0,0,0,0),(714,813,0,0,0,0,0),(715,814,0,0,0,0,0),(716,815,0,1,0,0,0),(717,816,0,0,0,0,0),(718,817,0,1,0,0,0),(719,818,0,0,0,0,0),(720,819,0,0,0,0,0),(721,820,0,0,0,0,0),(722,821,0,0,0,0,2),(723,822,0,0,0,2,0),(724,823,1,1,0,0,0),(725,824,0,0,0,0,0),(726,825,0,0,0,0,0),(727,826,0,0,0,0,0),(728,827,0,0,0,0,10),(729,828,0,0,0,0,0),(730,829,0,0,0,0,0),(731,830,1,0,0,0,0),(732,831,0,0,0,0,0),(733,832,0,0,0,0,0),(734,833,0,0,0,0,0),(735,834,0,0,0,0,0),(736,835,0,1,0,0,0),(737,836,1,0,0,1,0),(738,837,1,0,0,0,0),(739,838,0,0,0,0,0),(740,839,0,0,0,0,0),(741,840,0,0,0,0,0),(742,841,0,0,0,0,0),(743,842,0,0,0,0,0),(744,843,0,0,0,0,0),(745,844,0,0,0,1,0),(746,845,0,0,0,0,0),(747,846,0,0,0,0,0),(748,847,0,0,0,0,0),(749,848,0,0,0,0,0),(750,849,0,0,0,0,0),(751,850,0,0,0,0,0),(752,851,0,0,0,0,0),(753,852,0,0,0,2,0),(754,853,0,0,0,0,0),(755,854,0,1,0,0,0),(756,855,1,0,0,0,0),(757,856,0,0,0,0,0),(758,857,1,2,0,0,0),(759,858,0,0,0,0,0),(760,859,1,0,0,0,0),(761,860,2,3,0,0,0),(762,861,0,0,0,0,0),(763,862,0,0,0,0,0),(764,863,1,2,0,0,0),(765,864,0,0,0,0,0),(766,865,0,0,0,0,0),(767,866,0,0,0,0,0),(768,867,0,0,0,0,0),(769,868,0,0,0,0,0),(770,869,0,0,0,0,0),(771,870,0,0,0,0,0),(772,871,0,0,0,0,0),(773,872,0,0,0,0,0),(774,873,1,0,0,0,0),(775,874,0,0,0,0,11),(776,875,0,0,0,0,0),(777,876,0,0,0,0,0),(778,877,0,0,0,0,0),(779,878,3,1,0,0,0),(780,879,0,0,0,0,11),(781,880,0,0,0,0,0),(782,881,0,1,0,0,0),(783,882,0,0,0,0,0),(784,883,0,0,0,2,0),(785,884,0,0,0,0,0),(786,885,0,1,0,0,0),(787,886,1,0,0,0,0),(788,887,2,0,0,0,0),(789,888,0,0,0,0,0),(790,889,1,0,0,0,0),(791,890,0,0,0,0,0),(792,891,0,0,0,0,0),(793,892,0,0,0,0,0),(794,893,0,0,0,0,0),(795,894,0,0,0,0,0),(796,895,0,0,0,0,0),(797,896,0,1,0,0,0),(798,897,1,0,0,0,0),(799,898,0,0,0,0,0),(800,899,0,0,0,0,0),(801,900,0,0,0,0,0),(802,901,0,0,0,0,0),(803,902,0,0,0,0,0),(804,903,0,0,0,0,0),(805,904,0,0,0,0,0),(806,905,0,0,0,0,0),(807,906,0,0,0,0,0),(808,907,0,0,0,0,0),(809,908,0,0,0,0,0),(810,909,0,0,0,0,0),(811,910,0,0,0,0,0),(812,911,0,0,0,0,0),(813,912,0,0,0,0,0),(814,913,0,1,0,0,0),(815,914,2,0,0,0,0),(816,915,0,0,0,0,0),(817,916,0,0,0,0,0),(818,917,0,0,0,0,0),(819,918,0,0,0,0,0),(820,919,0,0,0,0,0),(821,920,0,0,0,0,0),(822,921,0,0,0,0,0),(823,922,0,0,0,0,0),(824,923,0,0,0,0,0),(825,924,0,0,0,0,0),(826,925,0,0,0,0,0),(827,926,0,0,0,0,0),(828,927,0,0,0,0,5),(829,928,0,0,0,0,0),(830,929,0,0,0,0,0),(831,930,0,0,0,0,0),(832,934,2,1,0,3,0);
/*!40000 ALTER TABLE `statsoverall` ENABLE KEYS */;
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
