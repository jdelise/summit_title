-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: summittitle
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.2

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_06_16_150632_create_title_fees_table',2),(6,'2023_06_16_194153_create_standard_fees_table',3),(7,'2023_07_16_031624_create_seller_net_sheets_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller_net_sheets`
--

DROP TABLE IF EXISTS `seller_net_sheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seller_net_sheets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT 0,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller_net_sheets`
--

LOCK TABLES `seller_net_sheets` WRITE;
/*!40000 ALTER TABLE `seller_net_sheets` DISABLE KEYS */;
INSERT INTO `seller_net_sheets` VALUES (85,'Seller Net Sheet','{\"fees\": {\"taxes\": 0, \"request\": {\"price\": 300000, \"taxes\": \"0.00\", \"title_fee\": null, \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": 100000, \"total_other_fees\": null, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"commission\": 18000, \"other_fees\": [{\"fee_name\": \"Search and Exam\", \"fee_amount\": \"250.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Deed Prep\", \"fee_amount\": \"80.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Title Services Fee\", \"fee_amount\": \"85.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Seller CPL\", \"fee_amount\": \"25.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"TIEFF (Owner\'s policy)\", \"fee_amount\": \"5.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Closing Fee\", \"fee_amount\": \"400.00\", \"fee_category\": \"Seller - Fee\"}], \"other_debts\": 0, \"title_insurance\": \"762.50\"}, \"form\": {\"price\": 300000, \"taxes\": \"0.00\", \"title_fee\": \"762.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": 100000, \"total_other_fees\": 845, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"totalFees\": 19607.5, \"savedDataName\": null, \"funds_to_seller\": 180392.5}','2023-08-03 14:25:51','2023-08-03 14:25:51'),(86,'Seller Net Sheet','{\"fees\": {\"taxes\": 0, \"request\": {\"price\": 300000, \"taxes\": \"0.00\", \"title_fee\": \"762.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": 100000, \"total_other_fees\": 845, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"commission\": 18000, \"other_fees\": [{\"fee_name\": \"Search and Exam\", \"fee_amount\": 125, \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Deed Prep\", \"fee_amount\": 40, \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Title Services Fee\", \"fee_amount\": 42.5, \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Seller CPL\", \"fee_amount\": 12.5, \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"TIEFF (Owner\'s policy)\", \"fee_amount\": 2.5, \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Closing Fee\", \"fee_amount\": 200, \"fee_category\": \"Seller - Fee\"}], \"other_debts\": 0, \"title_insurance\": \"762.50\"}, \"form\": {\"price\": 300000, \"taxes\": \"0.00\", \"title_fee\": \"762.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": 100000, \"total_other_fees\": 422.5, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"totalFees\": 19185, \"savedDataName\": null, \"funds_to_seller\": 180815}','2023-08-03 14:26:01','2023-08-03 14:26:01'),(87,'Seller Net Sheet','{\"fees\": {\"taxes\": 0, \"request\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": null, \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": null, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"commission\": 24000, \"other_fees\": [{\"fee_name\": \"Search and Exam\", \"fee_amount\": \"250.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Deed Prep\", \"fee_amount\": \"80.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Title Services Fee\", \"fee_amount\": \"85.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Seller CPL\", \"fee_amount\": \"25.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"TIEFF (Owner\'s policy)\", \"fee_amount\": \"5.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Closing Fee\", \"fee_amount\": \"400.00\", \"fee_category\": \"Seller - Fee\"}], \"other_debts\": 0, \"title_insurance\": \"962.50\"}, \"form\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 400, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"totalFees\": 25362.5, \"savedDataName\": null, \"funds_to_seller\": 374637.5}','2023-08-03 14:29:22','2023-08-03 14:29:22'),(88,'Seller Net Sheet','{\"fees\": {\"taxes\": 0, \"request\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 400, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"commission\": 24000, \"other_fees\": [{\"fee_name\": \"Search and Exam\", \"fee_amount\": \"250.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Deed Prep\", \"fee_amount\": \"80.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Title Services Fee\", \"fee_amount\": \"85.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Seller CPL\", \"fee_amount\": \"25.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"TIEFF (Owner\'s policy)\", \"fee_amount\": \"5.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Closing Fee\", \"fee_amount\": 200, \"fee_category\": \"Seller - Fee\"}], \"other_debts\": 0, \"title_insurance\": \"962.50\"}, \"form\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 200, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"totalFees\": 25162.5, \"savedDataName\": null, \"funds_to_seller\": 374837.5}','2023-08-03 14:29:27','2023-08-03 14:29:27'),(89,'Seller Net Sheet','{\"fees\": {\"taxes\": 0, \"request\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 200, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"commission\": 24000, \"other_fees\": [{\"fee_name\": \"Search and Exam\", \"fee_amount\": \"250.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Deed Prep\", \"fee_amount\": \"80.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Title Services Fee\", \"fee_amount\": \"85.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Seller CPL\", \"fee_amount\": \"25.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"TIEFF (Owner\'s policy)\", \"fee_amount\": \"5.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Closing Fee\", \"fee_amount\": 0, \"fee_category\": \"Seller - Fee\"}], \"other_debts\": 0, \"title_insurance\": \"962.50\"}, \"form\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 0, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"totalFees\": 24962.5, \"savedDataName\": null, \"funds_to_seller\": 375037.5}','2023-08-03 14:29:33','2023-08-03 14:29:33'),(90,'Seller Net Sheet','{\"fees\": {\"taxes\": 0, \"request\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 0, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"commission\": 24000, \"other_fees\": [{\"fee_name\": \"Search and Exam\", \"fee_amount\": \"250.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Deed Prep\", \"fee_amount\": \"80.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Title Services Fee\", \"fee_amount\": \"85.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Seller CPL\", \"fee_amount\": \"25.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"TIEFF (Owner\'s policy)\", \"fee_amount\": \"5.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Closing Fee\", \"fee_amount\": 200, \"fee_category\": \"Seller - Fee\"}], \"other_debts\": 0, \"title_insurance\": \"962.50\"}, \"form\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 200, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"totalFees\": 25162.5, \"savedDataName\": null, \"funds_to_seller\": 374837.5}','2023-08-03 14:29:40','2023-08-03 14:29:40'),(91,'Seller Net Sheet','{\"fees\": {\"taxes\": 0, \"request\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 200, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"commission\": 24000, \"other_fees\": [{\"fee_name\": \"Search and Exam\", \"fee_amount\": \"250.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Deed Prep\", \"fee_amount\": \"80.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Title Services Fee\", \"fee_amount\": \"85.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Seller CPL\", \"fee_amount\": \"25.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"TIEFF (Owner\'s policy)\", \"fee_amount\": \"5.00\", \"fee_category\": \"Seller - Fee\"}, {\"fee_name\": \"Closing Fee\", \"fee_amount\": \"400.00\", \"fee_category\": \"Seller - Fee\"}], \"other_debts\": 0, \"title_insurance\": \"962.50\"}, \"form\": {\"price\": 400000, \"taxes\": \"0.00\", \"title_fee\": \"962.50\", \"commission\": \"6\", \"closing_date\": null, \"loan_balance\": \"0.00\", \"total_other_fees\": 400, \"transaction_type\": \"purchase\", \"is_taxes_percentage\": \"no\", \"is_commission_percentage\": \"yes\"}, \"totalFees\": 25362.5, \"savedDataName\": null, \"funds_to_seller\": 374637.5}','2023-08-03 14:29:47','2023-08-03 14:29:47');
/*!40000 ALTER TABLE `seller_net_sheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standard_fees`
--

DROP TABLE IF EXISTS `standard_fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `standard_fees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_amount` decimal(8,2) NOT NULL,
  `fee_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standard_fees`
--

LOCK TABLES `standard_fees` WRITE;
/*!40000 ALTER TABLE `standard_fees` DISABLE KEYS */;
INSERT INTO `standard_fees` VALUES (1,'Closing Fee',400.00,'Buyer Fee - Mortgage','2023-06-16 20:52:56','2023-06-16 20:52:56'),(2,'Lender\'s Title Insurance',100.00,'Buyer Fee - Mortgage','2023-06-16 20:52:56','2023-06-16 20:52:56'),(3,'Title Services Fee',130.00,'Buyer Fee - Mortgage','2023-06-16 20:52:56','2023-06-16 20:52:56'),(4,'Buyer CPL',25.00,'Buyer Fee - Mortgage','2023-06-16 20:52:56','2023-06-16 20:52:56'),(5,'Lender CPL',35.00,'Buyer Fee - Mortgage','2023-06-16 20:52:56','2023-06-16 20:52:56'),(6,'TIEFF (Loan policy)',5.00,'Buyer Fee - Mortgage','2023-06-16 20:52:56','2023-06-16 20:52:56'),(7,'Recording Fee (estimate)',130.00,'Buyer Fee - Mortgage','2023-06-16 20:52:56','2023-06-16 20:52:56'),(8,'Closing Fee',300.00,'Buyer Fee - Cash','2023-06-16 20:52:56','2023-06-16 20:52:56'),(9,'Title Services Fee',70.00,'Buyer Fee - Cash','2023-06-16 20:52:56','2023-06-16 20:52:56'),(10,'Buyer CPL',25.00,'Buyer Fee - Cash','2023-06-16 20:52:56','2023-06-16 20:52:56'),(11,'Recording Fee',35.00,'Buyer Fee - Cash','2023-06-16 20:52:56','2023-06-16 20:52:56'),(12,'Transfer/Disclosure Fee',30.00,'Buyer Fee - Cash','2023-06-16 20:52:56','2023-06-16 20:52:56'),(13,'Search and Exam',250.00,'Seller - Fee','2023-06-16 20:52:56','2023-06-16 20:52:56'),(14,'Deed Prep',80.00,'Seller - Fee','2023-06-16 20:52:56','2023-06-16 20:52:56'),(15,'Title Services Fee',85.00,'Seller - Fee','2023-06-16 20:52:56','2023-06-16 20:52:56'),(16,'Seller CPL',25.00,'Seller - Fee','2023-06-16 20:52:56','2023-06-16 20:52:56'),(17,'TIEFF (Owner\'s policy)',5.00,'Seller - Fee','2023-06-16 20:52:56','2023-06-16 20:52:56'),(18,'FSBO Facilitation Fee',300.00,'Miscellaneous','2023-06-16 20:52:56','2023-06-16 20:52:56'),(19,'E-record per document',5.25,'Miscellaneous','2023-06-16 20:52:56','2023-06-16 20:52:56'),(20,'Title Search Only',200.00,'Miscellaneous','2023-06-16 20:52:56','2023-06-16 20:52:56'),(21,'Closing Fee',400.00,'Seller - Fee',NULL,NULL);
/*!40000 ALTER TABLE `standard_fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `title_fees`
--

DROP TABLE IF EXISTS `title_fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `title_fees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `price_low` decimal(10,2) NOT NULL,
  `price_high` decimal(10,2) NOT NULL,
  `title_policy_fee` decimal(10,2) NOT NULL,
  `transaction_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `title_fees`
--

LOCK TABLES `title_fees` WRITE;
/*!40000 ALTER TABLE `title_fees` DISABLE KEYS */;
INSERT INTO `title_fees` VALUES (1,0.00,5000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(2,5001.00,10000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(3,10001.00,15000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(4,15001.00,20000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(5,20001.00,25000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(6,25001.00,30000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(7,30001.00,35000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(8,35001.00,40000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(9,40001.00,45000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(10,45001.00,50000.00,187.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(11,50001.00,55000.00,202.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(12,55001.00,60000.00,217.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(13,60001.00,65000.00,232.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(14,65001.00,70000.00,247.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(15,70001.00,75000.00,262.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(16,75001.00,80000.00,277.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(17,80001.00,85000.00,292.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(18,85001.00,90000.00,307.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(19,90001.00,95000.00,322.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(20,95001.00,100000.00,337.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(21,100001.00,105000.00,350.00,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(22,105001.00,110000.00,362.50,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(23,110001.00,115000.00,375.00,'purchase','2023-06-16 15:20:53','2023-06-16 15:20:53'),(24,115001.00,120000.00,387.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(25,120001.00,125000.00,400.00,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(26,125001.00,130000.00,412.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(27,130001.00,135000.00,425.00,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(28,135001.00,140000.00,437.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(29,140001.00,145000.00,450.00,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(30,145001.00,150000.00,462.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(31,150001.00,155000.00,472.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(32,155001.00,160000.00,482.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(33,160001.00,165000.00,492.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(34,165001.00,170000.00,502.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(35,170001.00,175000.00,512.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(36,175001.00,180000.00,522.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(37,180001.00,185000.00,532.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(38,185001.00,190000.00,542.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(39,190001.00,195000.00,552.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(40,195001.00,200000.00,562.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(41,200001.00,205000.00,572.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(42,205001.00,210000.00,582.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(43,210001.00,215000.00,592.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(44,215001.00,220000.00,602.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(45,220001.00,225000.00,612.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(46,225001.00,230000.00,622.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(47,230001.00,235000.00,632.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(48,235001.00,240000.00,642.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(49,240001.00,245000.00,652.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(50,245001.00,250000.00,662.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(51,250001.00,255000.00,672.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(52,255001.00,260000.00,682.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(53,260001.00,265000.00,692.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(54,265001.00,270000.00,702.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(55,270001.00,275000.00,712.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(56,275001.00,280000.00,722.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(57,280001.00,285000.00,732.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(58,285001.00,290000.00,742.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(59,290001.00,295000.00,752.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(60,295001.00,300000.00,762.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(61,300001.00,305000.00,772.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(62,305001.00,310000.00,782.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(63,310001.00,315000.00,792.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(64,315001.00,320000.00,802.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(65,320001.00,325000.00,812.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(66,325001.00,330000.00,822.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(67,330001.00,335000.00,832.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(68,335001.00,340000.00,842.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(69,340001.00,345000.00,852.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(70,345001.00,350000.00,862.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(71,350001.00,355000.00,872.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(72,355001.00,360000.00,882.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(73,360001.00,365000.00,892.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(74,365001.00,370000.00,902.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(75,370001.00,375000.00,912.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(76,375001.00,380000.00,922.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(77,380001.00,385000.00,932.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(78,385001.00,390000.00,942.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(79,390001.00,395000.00,952.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(80,395001.00,400000.00,962.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(81,400001.00,405000.00,972.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(82,405001.00,410000.00,982.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(83,410001.00,415000.00,992.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(84,415001.00,420000.00,1002.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(85,420001.00,425000.00,1012.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(86,425001.00,430000.00,1022.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(87,430001.00,435000.00,1032.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(88,435001.00,440000.00,1042.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(89,440001.00,445000.00,1052.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(90,445001.00,450000.00,1062.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(91,450001.00,455000.00,1072.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(92,455001.00,460000.00,1082.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(93,460001.00,465000.00,1092.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(94,465001.00,470000.00,1102.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(95,470001.00,475000.00,1112.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(96,475001.00,480000.00,1122.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(97,480001.00,485000.00,1132.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(98,485001.00,490000.00,1142.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(99,490001.00,495000.00,1152.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(100,495001.00,500000.00,1162.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(101,500001.00,505000.00,1172.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(102,505001.00,510000.00,1182.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(103,510001.00,515000.00,1192.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(104,515001.00,520000.00,1202.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(105,520001.00,525000.00,1212.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(106,525001.00,530000.00,1222.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(107,530001.00,535000.00,1232.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(108,535001.00,540000.00,1242.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(109,540001.00,545000.00,1252.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(110,545001.00,550000.00,1262.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(111,550001.00,555000.00,1272.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(112,555001.00,560000.00,1282.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(113,560001.00,565000.00,1292.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(114,565001.00,570000.00,1302.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(115,570001.00,575000.00,1312.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(116,575001.00,580000.00,1322.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(117,580001.00,585000.00,1332.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(118,585001.00,590000.00,1342.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(119,590001.00,595000.00,1352.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(120,595001.00,600000.00,1362.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(121,600001.00,605000.00,1372.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(122,605001.00,610000.00,1382.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(123,610001.00,615000.00,1392.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(124,615001.00,620000.00,1402.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(125,620001.00,625000.00,1412.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(126,625001.00,630000.00,1422.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(127,630001.00,635000.00,1432.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(128,635001.00,640000.00,1442.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(129,640001.00,645000.00,1452.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(130,645001.00,650000.00,1462.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(131,650001.00,655000.00,1472.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(132,655001.00,660000.00,1482.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(133,660001.00,665000.00,1492.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(134,665001.00,670000.00,1502.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(135,670001.00,675000.00,1512.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(136,675001.00,680000.00,1522.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(137,680001.00,685000.00,1532.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(138,685001.00,690000.00,1542.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(139,690001.00,695000.00,1552.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(140,695001.00,700000.00,1562.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(141,700001.00,705000.00,1572.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(142,705001.00,710000.00,1582.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(143,710001.00,715000.00,1592.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(144,715001.00,720000.00,1602.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(145,720001.00,725000.00,1612.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(146,725001.00,730000.00,1622.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(147,730001.00,735000.00,1632.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(148,735001.00,740000.00,1642.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(149,740001.00,745000.00,1652.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(150,745001.00,750000.00,1662.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(151,750001.00,755000.00,1672.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(152,755001.00,760000.00,1682.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(153,760001.00,765000.00,1692.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(154,765001.00,770000.00,1702.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(155,770001.00,775000.00,1712.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(156,775001.00,780000.00,1722.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(157,780001.00,785000.00,1732.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(158,785001.00,790000.00,1742.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(159,790001.00,795000.00,1752.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(160,795001.00,800000.00,1762.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(161,800001.00,805000.00,1772.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(162,805001.00,810000.00,1782.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(163,810001.00,815000.00,1792.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(164,815001.00,820000.00,1802.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(165,820001.00,825000.00,1812.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(166,825001.00,830000.00,1822.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(167,830001.00,835000.00,1832.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(168,835001.00,840000.00,1842.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(169,840001.00,845000.00,1852.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(170,845001.00,850000.00,1862.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(171,850001.00,855000.00,1872.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(172,855001.00,860000.00,1882.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(173,860001.00,865000.00,1892.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(174,865001.00,870000.00,1902.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(175,870001.00,875000.00,1912.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(176,875001.00,880000.00,1922.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(177,880001.00,885000.00,1932.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(178,885001.00,890000.00,1942.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(179,890001.00,895000.00,1952.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(180,895001.00,900000.00,1962.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(181,900001.00,905000.00,1972.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(182,905001.00,910000.00,1982.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(183,910001.00,915000.00,1992.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(184,915001.00,920000.00,2002.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(185,920001.00,925000.00,2012.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(186,925001.00,930000.00,2022.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(187,930001.00,935000.00,2032.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(188,935001.00,940000.00,2042.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(189,940001.00,945000.00,2052.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(190,945001.00,950000.00,2062.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(191,950001.00,955000.00,2072.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(192,955001.00,960000.00,2082.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(193,960001.00,965000.00,2092.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(194,965001.00,970000.00,2102.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(195,970001.00,975000.00,2112.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(196,975001.00,980000.00,2122.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(197,980001.00,985000.00,2132.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(198,985001.00,990000.00,2142.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(199,990001.00,995000.00,2152.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(200,995001.00,1000000.00,2162.50,'purchase','2023-06-16 15:20:54','2023-06-16 15:20:54'),(201,0.00,50000.00,100.00,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(202,50001.00,100000.00,127.50,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(203,100001.00,150000.00,163.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(204,150001.00,200000.00,188.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(205,200001.00,250000.00,213.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(206,250001.00,300000.00,238.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(207,300001.00,350000.00,263.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(208,350001.00,400000.00,288.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(209,400001.00,450000.00,313.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(210,450001.00,500000.00,338.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(211,500001.00,550000.00,363.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(212,550001.00,600000.00,388.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(213,600001.00,650000.00,413.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(214,650001.00,700000.00,438.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(215,700001.00,750000.00,463.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(216,750001.00,800000.00,488.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(217,800001.00,850000.00,513.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(218,850001.00,900000.00,538.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(219,900001.00,950000.00,563.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41'),(220,950001.00,1000000.00,588.75,'refinance','2023-06-16 15:53:41','2023-06-16 15:53:41');
/*!40000 ALTER TABLE `title_fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Joe Delise','joedelise@gmail.com',NULL,'$2y$10$DPmMaG1JT18mj2YqGd9g7.zcl/Z8Yn.0HMVv7FPP3Xamt7h3bkrp2',NULL,'2023-06-06 18:06:53','2023-06-06 18:06:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-03 14:35:23
