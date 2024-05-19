-- MySQL dump 10.13  Distrib 8.1.0, for macos11.7 (x86_64)
--
-- Host: localhost    Database: edu_path_global
-- ------------------------------------------------------
-- Server version	8.1.0

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (4,'two','two','202309-1673691038.jpg','2023-09-05 06:09:27','2023-09-05 06:09:27'),(5,'three','three','202309-41991738.png','2023-09-05 06:09:50','2023-09-05 06:09:50'),(7,'tempora similique unde',NULL,NULL,NULL,NULL),(8,'inventore ducimus pariatur',NULL,NULL,NULL,NULL),(9,'aut culpa sint',NULL,NULL,NULL,NULL),(10,'rerum recusandae laboriosam',NULL,NULL,NULL,NULL),(11,'doloribus non eveniet',NULL,NULL,NULL,NULL),(12,'asperiores doloribus sed',NULL,NULL,NULL,NULL),(13,'magni nulla ratione',NULL,NULL,NULL,NULL),(14,'ut vero culpa',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_post` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_post_category_id_foreign` (`category_id`),
  KEY `category_post_post_id_foreign` (`post_id`),
  CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
INSERT INTO `category_post` VALUES (7,13,12),(8,14,13);
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '1 = active, 0 = disabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_city_unique` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'sydney','sydney','1','2023-09-05 01:32:30','2023-09-05 01:32:30');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms`
--

LOCK TABLES `cms` WRITE;
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` VALUES (1,'home_title','hero','2023-09-10 18:16:40','2024-02-17 19:23:41'),(2,'home_meta','We specialise in making tax returns simple. With over 50 years as Australia’s leading taxation experts and over 400 offices, we have a convenient option for you no matter when, where and how you want to do it. We specialise in making tax returns simple. With over 50 years as Australia’s leading taxation experts and over 400 offices, we have a convenient option for you no m We specialise in making tax returns simple. With over 50 years as Australia’s leading taxation experts and over 400 offices, we have a convenient option for you no matter when, where and how you want to do it.atter when, where and how you want to do it.','2023-09-10 18:16:40','2023-12-18 21:56:51'),(3,'home_content','<p>We are a proactive, hands-on firm that harnesses the latest knowledge on the subject to provide our clients with timely, accurate, and affordable financial &amp; taxation services.</p>\r\n\r\n<hr />\r\n<h3><strong>Why Choose&nbsp;Us?</strong></h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Proven Track Record</strong>: With years of industry experience, our team has successfully assisted countless clients in achieving their financial objectives.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Client-Centric Approach</strong>: Your success is our priority. We dedicate ourselves to understanding your unique challenges and crafting bespoke solutions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Continuous Learning</strong>: In an ever-evolving financial landscape, we stay abreast of the latest regulations, technologies, and best practices to deliver unparalleled service.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Integrity &amp; Confidentiality</strong>: Trust is the cornerstone of our business. We uphold the highest standards of integrity and ensure the utmost confidentiality in all client interactions.</p>\r\n	</li>\r\n</ol>','2023-09-10 18:16:40','2023-12-18 23:47:03'),(4,'about_title','We Are the Best Accounting Agency','2023-09-10 18:16:40','2023-09-11 16:03:25'),(5,'about_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(6,'about_content','<p>Welcome to Munal Accounting, where precision meets passion in the world of finance. Founded in 2015, we have established ourselves as a beacon of trust, reliability, and expertise in the accounting industry.</p>\r\n\r\n<p>Our journey began with a singular vision: to redefine the way businesses perceive accounting &ndash; not just as a necessity but as an integral partner in their growth and success stories. Over the years, we&#39;ve transformed countless numbers into meaningful insights, empowering our clients to make informed decisions, optimize operations, and drive profitability.</p>\r\n\r\n<p>&nbsp;</p>','2023-09-10 18:16:40','2023-12-30 04:24:54'),(7,'faq_title','My Services','2023-09-10 18:16:40','2023-09-12 17:43:46'),(8,'faq_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(9,'faq_content','<h3>Accounting</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Tax, Compliance &amp; Payroll</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Financial Services</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Growth &amp; Funding Access</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>','2023-09-10 18:16:40','2023-12-16 16:00:56'),(10,'terms_title',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(11,'terms_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(12,'terms_content',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(13,'about_image','about.jpeg','2023-09-11 16:03:25','2024-02-28 02:12:34'),(14,'services_title','hello','2023-09-12 18:03:17','2023-09-12 18:03:17'),(15,'services_meta',NULL,'2023-09-12 18:03:17','2023-09-12 18:03:17'),(16,'services_content','<h2>Affordable Packages</h2>\r\n\r\n<ul>\r\n	<li>Brand Strategy</li>\r\n	<li>Online Marketing</li>\r\n	<li>Branding Services</li>\r\n	<li>Creative Marketing</li>\r\n	<li>Sales Management</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Affordable sdsds</h2>\r\n\r\n<ul>\r\n	<li>Brand Strategy</li>\r\n	<li>Online Marketing</li>\r\n	<li>Branding Services</li>\r\n	<li>Creative Marketing</li>\r\n	<li>Sales Management</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>','2023-09-12 18:03:17','2023-12-16 16:41:44'),(17,'home_image1','home1.jpeg','2023-12-18 21:26:30','2024-05-18 01:21:18'),(18,'home_image2','home2.jpg','2023-12-18 21:26:30','2024-03-04 18:39:47'),(19,'us_header1','Study in the USA with Edupath Global','2024-02-17 19:23:41','2024-05-13 07:25:55'),(20,'us_content1','<p>Unlock Boundless Opportunities for Academic Excellence and Professional Growth EduPath Global is your trusted partner in realizing your dreams of studying in the United States. With our unrivaled expertise and personalized guidance, we ensure a seamless transition for students from Nepal and Australia to prestigious American universities, paving the way for a transformative educational experience.</p>','2024-02-17 19:23:41','2024-05-13 07:25:55'),(25,'us_image1','individual_tax1.webp',NULL,'2024-03-05 09:07:51'),(26,'us_image2','individual_tax2.jpeg',NULL,'2024-03-05 09:12:33'),(27,'us_header2',NULL,NULL,'2024-05-18 06:29:11'),(28,'us_content2',NULL,NULL,'2024-05-18 06:29:26'),(29,'us_header3',NULL,NULL,'2024-05-18 06:29:26'),(30,'us_content3',NULL,NULL,'2024-05-18 06:29:26'),(31,'us_header4',NULL,NULL,'2024-05-18 06:29:45'),(32,'us_content4',NULL,NULL,'2024-05-18 06:29:45'),(33,'us_header5',NULL,NULL,'2024-05-18 06:29:45'),(34,'us_content5',NULL,NULL,'2024-05-18 06:29:45'),(35,'us_content',NULL,'2024-02-25 17:35:13','2024-02-25 17:35:13'),(36,'home_header1','We are bringing overseas education within everyone’s                        reach',NULL,'2024-05-18 06:28:28'),(37,'home_content1','<p>Our Tech-enabled solutions help international students and recruitment partners choose the best global universities</p>',NULL,'2024-05-18 06:35:31'),(38,'home_header2',NULL,NULL,'2024-05-18 06:35:31'),(39,'home_content2',NULL,NULL,NULL),(40,'home_header3',NULL,NULL,'2024-05-18 06:35:31'),(41,'home_content3',NULL,NULL,'2024-05-18 06:35:31'),(42,'home_header4',NULL,NULL,'2024-05-18 06:35:31'),(43,'home_content4',NULL,NULL,'2024-05-18 06:35:31'),(44,'home_header5',NULL,NULL,'2024-05-18 06:35:31'),(45,'home_content5',NULL,NULL,'2024-05-18 06:35:31'),(46,'australia_header1','Study in Australia with EduPath Global',NULL,'2024-05-13 20:22:27'),(47,'australia_content1','<p>Your Gateway to Quality Education and Thriving Career Opportunities</p>\r\n\r\n<p>At EduPath Global, we specialize in facilitating seamless transitions for students from Nepal to Australia, ensuring a smooth educational journey towards a brighter future. With our expert guidance and personalized support, your dream of studying in Australia can become a reality.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>',NULL,'2024-05-13 20:22:27'),(48,'australia_header2',NULL,NULL,'2024-05-13 20:22:27'),(49,'australia_content2','<p><strong>Why Choose Australia for Your Education?</strong></p>\r\n\r\n<p>Australia stands out as a premier destination for international students, offering world-class education, vibrant multicultural communities, and unparalleled lifestyle experiences. Here are some compelling reasons why you should consider studying in Australia:</p>\r\n\r\n<p><strong>Academic Excellence:</strong> Australian universities consistently rank among the top institutions globally, providing high-quality education and cutting-edge research opportunities across various fields.</p>\r\n\r\n<p><strong>Diverse Course Options</strong>: Whether you aspire to pursue a degree in engineering, business, healthcare, or arts, Australia offers a diverse range of courses tailored to suit every academic interest and career aspiration.</p>\r\n\r\n<p><strong>Innovative Teaching Methods</strong>: Experience innovative teaching methodologies that emphasize practical learning, critical thinking, and hands-on experience, preparing you for the challenges of the modern workforce.</p>\r\n\r\n<p><strong>Post-Study Work Opportunities:</strong> Upon graduation, international students have the opportunity to gain valuable work experience through post-study work visas, allowing them to explore career prospects and contribute to the Australian economy.</p>\r\n\r\n<p>Safe and Welcoming Environment: Australia is renowned for its safety, inclusivity, and friendly atmosphere, making it an ideal destination for students seeking a supportive environment to pursue their educational goals.</p>\r\n\r\n<p><strong>How EduPath Global Can Help</strong></p>\r\n\r\n<p>At EduPath Global, we understand the intricacies of the Australian education system and immigration processes. Our dedicated team of education and migration experts is committed to providing comprehensive assistance at every step of your journey:</p>\r\n\r\n<p><strong>Personalized Counseling:</strong> Receive personalized counseling sessions to identify your academic goals, career aspirations, and preferences, ensuring that you make informed decisions about your educational pathway.</p>\r\n\r\n<p><strong>University Selection and Admission:</strong> Gain access to our extensive network of partner universities and colleges in Australia, allowing you to explore a wide range of options and secure admission to the institution that best aligns with your academic and personal interests.</p>\r\n\r\n<p><strong>Visa Application Assistance:</strong> Navigate the complex visa application process with ease, as our experienced migration consultants guide you through the requirements, documentation, and procedures to obtain your student visa efficiently.</p>\r\n\r\n<p><strong>Pre-Departure Support:</strong> Prepare for your journey to Australia with confidence, as we provide valuable resources, pre-departure orientation sessions, and practical advice to help you adapt to your new environment seamlessly.</p>\r\n\r\n<h3>Start Your Journey Today</h3>\r\n\r\n<p>Embark on your educational journey in Australia with Edupath Global by your side.</p>\r\n\r\n<p>Contact us today to schedule a consultation and take the first step towards fulfilling your academic aspirations and shaping a successful future.</p>',NULL,'2024-05-13 20:22:27'),(50,'australia_header3',NULL,NULL,'2024-05-18 06:28:28'),(51,'australia_content3',NULL,NULL,'2024-05-18 06:28:28'),(52,'australia_header4',NULL,NULL,'2024-05-18 06:28:28'),(53,'australia_content4',NULL,NULL,'2024-05-18 06:28:28'),(54,'australia_header5',NULL,NULL,'2024-05-18 06:28:28'),(55,'australia_content5',NULL,NULL,'2024-05-18 06:28:28'),(56,'australia_image1','lodge_in_person1.jpeg','2023-12-18 21:26:30','2024-03-05 14:26:06'),(57,'australia_image2','lodge_in_person2.jpg','2023-12-18 21:26:30','2024-03-05 14:26:06'),(58,'canada_header1','Study in Canada with EduPath Global',NULL,'2024-05-13 20:28:23'),(59,'canada_content1','<p><strong>Your Gateway to World-Class Education and Immersive Cultural Experiences</strong></p>\r\n\r\n<p>EduPath Global is your trusted ally in pursuing higher education in Canada. With our extensive experience and personalized approach, we guide students from Nepal and Australia through every step of the journey, ensuring a smooth transition to Canadian universities and colleges.</p>',NULL,'2024-05-13 20:28:23'),(60,'canada_header2',NULL,NULL,'2024-05-18 06:30:38'),(61,'canada_content2','<p><strong>Why Choose Canada for Your Education?</strong></p>\r\n\r\n<p>Canada stands out as a top destination for international students, offering a wealth of academic opportunities, vibrant multicultural communities, and a high quality of life. Here are compelling reasons why studying in Canada is a rewarding choice:</p>\r\n\r\n<p><strong>Academic Excellence:</strong> Canadian institutions are renowned for their academic excellence and innovative research programs, consistently ranking among the best in the world and offering a wide range of programs across various disciplines.</p>\r\n\r\n<p><strong>Cultural Diversity:</strong> Experience a rich tapestry of cultures and perspectives in Canada&#39;s inclusive and multicultural society, where students from all backgrounds are welcomed and valued, fostering global awareness and understanding.</p>\r\n\r\n<p><strong>Safe and Welcoming Environment:</strong> Enjoy a safe and welcoming environment conducive to learning and personal growth, as Canada prioritizes the safety and well-being of its residents, providing a supportive atmosphere for international students to thrive.</p>\r\n\r\n<p><strong>Opportunities for Career Advancement:</strong> Benefit from ample opportunities for career advancement and professional development, as Canadian institutions foster partnerships with industry leaders and offer co-op programs, internships, and networking opportunities to enhance employability.</p>\r\n\r\n<p><strong>Post-Graduation Work Permit:</strong> Take advantage of Canada&#39;s generous post-graduation work permit program, which allows international graduates to gain valuable work experience in Canada after completing their studies, providing a pathway to permanent residency.</p>\r\n\r\n<p><strong>How EduPath Global Can Guide Your Journey</strong></p>\r\n\r\n<p>At EduPath Global, we are committed to empowering students with the resources, guidance, and support they need to succeed in their Canadian education journey:</p>\r\n\r\n<p><strong>Personalized Counseling:</strong> Receive personalized guidance from our experienced education consultants, who will help you explore your academic interests, select suitable institutions, and navigate the application process with confidence.</p>\r\n\r\n<p><strong>Expert Admission Assistance:</strong> Access our extensive network of partner universities and colleges across Canada, as we assist you in preparing compelling applications, securing admissions, and maximizing your chances of acceptance.</p>\r\n\r\n<p><strong>Visa and Immigration Support:</strong> Navigate the visa and immigration process with ease, as our dedicated migration experts provide comprehensive support, ensuring that your visa application is prepared meticulously and submitted successfully.</p>\r\n\r\n<p><strong>Pre-Departure Preparation:</strong> Prepare for your arrival in Canada with our pre-departure orientation sessions, logistical support, and practical advice, equipping you with the tools and knowledge to adapt to your new academic and cultural environment seamlessly.</p>\r\n\r\n<p><strong>Start Your Canadian Adventure Today</strong></p>\r\n\r\n<p>Embark on an enriching educational journey in Canada with EduPath Global as your trusted companion. Contact us today to schedule a consultation and take the first step towards realizing your academic aspirations and unlocking a world of opportunities.</p>',NULL,'2024-05-13 20:28:23'),(62,'canada_header3',NULL,NULL,'2024-05-18 06:30:38'),(63,'canada_content3',NULL,NULL,'2024-05-18 06:30:38'),(64,'canada_header4',NULL,NULL,'2024-05-18 06:30:38'),(65,'canada_content4',NULL,NULL,'2024-05-18 06:30:38'),(66,'canada_header5',NULL,NULL,'2024-05-18 06:30:38'),(67,'canada_content5',NULL,NULL,'2024-05-18 06:30:38'),(68,'canada_image1','online1.jpeg','2023-12-18 21:26:30','2024-03-05 14:32:27'),(69,'canada_image2','online2.jpg','2023-12-18 21:26:30','2024-03-05 14:36:14'),(70,'korea_header1','Study in Korea with EduPath Global',NULL,'2024-05-13 20:34:33'),(71,'korea_content1','<p><strong>Your Gateway to Academic Excellence and Cultural Immersion in South Korea</strong></p>\r\n\r\n<p>EduPath Global is your trusted partner in navigating the exciting opportunities for higher education in South Korea. With our specialized expertise and personalized approach, we guide students from Nepal and Australia towards fulfilling their academic aspirations in this dynamic and innovative country.</p>',NULL,'2024-05-13 20:34:33'),(72,'korea_header2',NULL,NULL,'2024-05-13 20:34:33'),(73,'korea_content2','<p><strong>Why Choose South Korea for Your Education?</strong></p>\r\n\r\n<p>South Korea has emerged as a leading destination for international students, offering a unique blend of academic excellence, cutting-edge technology, and rich cultural experiences. Here are compelling reasons why studying in Korea is an enriching choice:</p>\r\n\r\n<ol>\r\n	<li><strong>World-Class Universities</strong>: South Korean universities consistently rank among the top institutions globally, renowned for their rigorous academic programs, research opportunities, and state-of-the-art facilities across various disciplines.</li>\r\n	<li><strong>Innovative Learning Environment</strong>: Experience a dynamic and innovative learning environment characterized by interactive teaching methods, hands-on experiences, and a focus on fostering creativity and critical thinking skills among students.</li>\r\n	<li><strong>Cultural Immersion</strong>: Immerse yourself in Korea&#39;s rich cultural heritage, vibrant pop culture, and welcoming community, as you explore historic landmarks, indulge in delicious cuisine, and participate in festivals and events that celebrate Korean traditions.</li>\r\n	<li><strong>Global Career Opportunities</strong>: Gain a competitive edge in the global job market with a degree from a South Korean institution, as Korea&#39;s booming economy and global connections offer diverse career opportunities and pathways for professional growth.</li>\r\n	<li><strong>Safety and Convenience</strong>: Enjoy a safe, clean, and convenient living environment in South Korea, renowned for its efficient public transportation, modern infrastructure, and low crime rates, ensuring a comfortable and stress-free experience for international students.</li>\r\n</ol>\r\n\r\n<p><strong>How EduPath Global Can Support Your Journey</strong></p>\r\n\r\n<p>At EduPath Global, we are dedicated to empowering students with the guidance, resources, and support they need to thrive in their Korean education journey:</p>\r\n\r\n<ol>\r\n	<li><strong>Personalized Counseling</strong>: Receive personalized guidance from our experienced education consultants, who will assist you in selecting the right university, navigating the application process, and preparing for your academic journey in Korea.</li>\r\n	<li><strong>Admission Assistance</strong>: Access our network of partner universities and colleges in South Korea, as we provide tailored assistance with admissions, scholarships, and visa requirements, ensuring a smooth transition to your chosen institution.</li>\r\n	<li><strong>Visa and Immigration Support</strong>: Navigate the visa and immigration process with ease, as our dedicated migration experts offer comprehensive support, guidance, and assistance with visa applications, document preparation, and interview preparation.</li>\r\n	<li><strong>Cultural Orientation</strong>: Prepare for life in Korea with our cultural orientation sessions, language courses, and practical advice on adapting to Korean culture, etiquette, and lifestyle, empowering you to thrive in your new environment.</li>\r\n</ol>\r\n\r\n<p><strong>Start Your Korean Adventure Today</strong></p>\r\n\r\n<p>Embark on a transformative educational journey in South Korea with EduPath Global as your trusted companion. Contact us today to schedule a consultation and take the first step towards realizing your academic aspirations and embracing a world of opportunities.</p>',NULL,'2024-05-13 20:34:33'),(74,'korea_header3',NULL,NULL,'2024-05-18 06:31:00'),(75,'korea_content3',NULL,NULL,'2024-05-18 06:31:00'),(76,'korea_header4',NULL,NULL,'2024-05-18 06:31:00'),(77,'korea_content4',NULL,NULL,'2024-05-18 06:31:00'),(78,'korea_header5',NULL,NULL,'2024-05-18 06:31:00'),(79,'korea_content5',NULL,NULL,'2024-05-18 06:31:00'),(80,'korea_image1','tax_review1.jpeg','2023-12-18 21:26:30','2024-03-05 14:38:59'),(81,'korea_image2','tax_review2.jpeg','2023-12-18 21:26:30','2024-03-05 14:38:59'),(82,'korea_content6',NULL,NULL,'2024-05-18 06:31:00'),(83,'korea_content7',NULL,NULL,'2024-05-18 06:31:00'),(84,'uae_header1','Study in the UAE with EduPath Global',NULL,'2024-05-13 20:38:57'),(85,'uae_content1','<p>EduPath Global is your trusted partner in exploring the exceptional opportunities for higher education in the United Arab Emirates (UAE). With our specialized expertise and personalized approach, we guide students from Nepal and Australia towards realizing their academic dreams in this dynamic and cosmopolitan destination.</p>',NULL,'2024-05-13 20:38:57'),(86,'uae_header2',NULL,NULL,'2024-05-13 20:38:57'),(87,'uae_content2','<p><strong>Why Choose the UAE for Your Education?</strong></p>\r\n\r\n<p>The UAE has emerged as a leading hub for higher education, offering a unique blend of academic excellence, cultural diversity, and unparalleled opportunities for personal and professional growth. Here are compelling reasons why studying in the UAE is an enriching choice:</p>\r\n\r\n<ol>\r\n	<li><strong>World-Renowned Universities</strong>: The UAE is home to prestigious universities and colleges known for their academic excellence, innovative programs, and world-class facilities, providing students with a conducive environment for learning and research.</li>\r\n	<li><strong>Multicultural Environment</strong>: Experience a vibrant and multicultural environment in the UAE, where students from around the world converge to learn, collaborate, and exchange ideas, fostering global perspectives and cross-cultural understanding.</li>\r\n	<li><strong>Strategic Location</strong>: Positioned at the crossroads of the East and West, the UAE offers strategic advantages for students seeking international exposure and career opportunities, with its booming economy and dynamic job market.</li>\r\n	<li><strong>Cutting-Edge Facilities</strong>: Benefit from state-of-the-art infrastructure, cutting-edge technology, and modern amenities available at universities and campuses across the UAE, providing students with a contemporary learning experience.</li>\r\n	<li><strong>Rich Cultural Heritage</strong>: Immerse yourself in the rich cultural heritage of the UAE, as you explore its historical landmarks, traditional markets, and vibrant arts and entertainment scene, gaining insights into the country&#39;s rich tapestry of traditions and customs.</li>\r\n</ol>\r\n\r\n<p><strong>How EduPath Global Can Assist You</strong></p>\r\n\r\n<p>At EduPath Global, we are committed to empowering students with the guidance, resources, and support they need to succeed in their UAE education journey:</p>\r\n\r\n<ol>\r\n	<li><strong>Personalized Counseling</strong>: Receive personalized guidance from our experienced education consultants, who will assist you in selecting the right university, program, and course of study based on your academic goals and preferences.</li>\r\n	<li><strong>Admission Support</strong>: Access our network of partner universities and colleges in the UAE, as we provide tailored assistance with admissions, application processes, and scholarship opportunities, ensuring a seamless transition to your chosen institution.</li>\r\n	<li><strong>Visa and Immigration Assistance</strong>: Navigate the visa and immigration process with ease, as our dedicated migration experts offer comprehensive support, guidance, and assistance with visa applications, documentation, and compliance requirements.</li>\r\n	<li><strong>Pre-Departure Preparation</strong>: Prepare for your journey to the UAE with our pre-departure orientation sessions, cultural immersion programs, and practical advice on adapting to life in the UAE, ensuring a smooth transition and memorable experience.</li>\r\n</ol>\r\n\r\n<p><strong>Start Your UAE Education Journey Today</strong></p>\r\n\r\n<p>Embark on an exciting educational journey in the UAE with EduPath Global as your trusted companion. Contact us today to schedule a consultation and take the first step towards realizing your academic aspirations and unlocking a world of opportunities.</p>',NULL,'2024-05-13 20:38:57'),(88,'uae_header3',NULL,NULL,'2024-05-18 06:31:34'),(89,'uae_content3',NULL,NULL,'2024-05-18 06:31:34'),(90,'uae_header4',NULL,NULL,'2024-05-18 06:31:34'),(91,'uae_content4',NULL,NULL,'2024-05-18 06:31:34'),(94,'uae_image1','business_services1.webp','2023-12-18 21:26:30','2024-03-05 14:55:21'),(95,'uae_image2','business_services2.jpg','2023-12-18 21:26:30','2024-02-11 01:29:54'),(96,'uae_image3','business_services3.jpeg','2023-12-18 21:26:30','2024-03-05 14:56:56'),(97,'japan_header1','Study in Japan with EduPath Global',NULL,'2024-05-15 04:13:27'),(98,'japan_content1','<p>Your Gateway to Quality Education and Thriving Career Opportunities</p>\r\n\r\n<p>At EduPath Global, we specialize in facilitating seamless transitions for students from Nepal to Australia, ensuring a smooth educational journey towards a brighter future. With our expert guidance and personalized support, your dream of studying in Australia can become a reality.</p>',NULL,'2024-05-15 04:13:27'),(99,'japan_header2',NULL,NULL,'2024-05-18 06:36:20'),(100,'japan_content2','<p><strong>Why Choose Australia for Your Education?</strong></p>\r\n\r\n<p>Australia stands out as a premier destination for international students, offering world-class education, vibrant multicultural communities, and unparalleled lifestyle experiences. Here are some compelling reasons why you should consider studying in Australia:</p>\r\n\r\n<p><strong>Academic Excellence:</strong> Australian universities consistently rank among the top institutions globally, providing high-quality education and cutting-edge research opportunities across various fields.</p>\r\n\r\n<p><strong>Diverse Course Options</strong>: Whether you aspire to pursue a degree in engineering, business, healthcare, or arts, Australia offers a diverse range of courses tailored to suit every academic interest and career aspiration.</p>\r\n\r\n<p><strong>Innovative Teaching Methods</strong>: Experience innovative teaching methodologies that emphasize practical learning, critical thinking, and hands-on experience, preparing you for the challenges of the modern workforce.</p>\r\n\r\n<p><strong>Post-Study Work Opportunities:</strong> Upon graduation, international students have the opportunity to gain valuable work experience through post-study work visas, allowing them to explore career prospects and contribute to the Australian economy.</p>\r\n\r\n<p>Safe and Welcoming Environment: Australia is renowned for its safety, inclusivity, and friendly atmosphere, making it an ideal destination for students seeking a supportive environment to pursue their educational goals.</p>\r\n\r\n<p><strong>How EduPath Global Can Help</strong></p>\r\n\r\n<p>At EduPath Global, we understand the intricacies of the Australian education system and immigration processes. Our dedicated team of education and migration experts is committed to providing comprehensive assistance at every step of your journey:</p>\r\n\r\n<p><strong>Personalized Counseling:</strong> Receive personalized counseling sessions to identify your academic goals, career aspirations, and preferences, ensuring that you make informed decisions about your educational pathway.</p>\r\n\r\n<p><strong>University Selection and Admission:</strong> Gain access to our extensive network of partner universities and colleges in Australia, allowing you to explore a wide range of options and secure admission to the institution that best aligns with your academic and personal interests.</p>\r\n\r\n<p><strong>Visa Application Assistance:</strong> Navigate the complex visa application process with ease, as our experienced migration consultants guide you through the requirements, documentation, and procedures to obtain your student visa efficiently.</p>\r\n\r\n<p><strong>Pre-Departure Support:</strong> Prepare for your journey to Australia with confidence, as we provide valuable resources, pre-departure orientation sessions, and practical advice to help you adapt to your new environment seamlessly.</p>\r\n\r\n<p>Start Your Journey Today</p>\r\n\r\n<p>Embark on your educational journey in Australia with Edupath Global by your side.</p>\r\n\r\n<p>Contact us today to schedule a consultation and take the first step towards fulfilling your academic aspirations and shaping a successful future.</p>',NULL,'2024-05-15 04:13:27'),(101,'japan_header3',NULL,NULL,'2024-05-18 06:34:33'),(102,'japan_content3',NULL,NULL,'2024-05-18 06:34:33'),(103,'japan_header4',NULL,NULL,'2024-05-18 06:34:33'),(104,'japan_content4',NULL,NULL,'2024-05-18 06:34:33'),(105,'japan_header5',NULL,NULL,'2024-05-18 06:34:33'),(106,'japan_content5',NULL,NULL,'2024-05-18 06:34:33'),(107,'japan_header6',NULL,NULL,'2024-05-18 06:34:33'),(108,'japan_content6',NULL,NULL,'2024-05-18 06:34:33'),(109,'japan_header7',NULL,NULL,'2024-05-18 06:34:33'),(110,'japan_content7',NULL,NULL,'2024-05-18 06:34:33'),(111,'japan_header8',NULL,NULL,'2024-05-18 06:34:33'),(112,'japan_content8',NULL,NULL,'2024-05-18 06:34:33'),(113,'japan_image1','small_business1.jpg','2023-12-18 21:26:30','2024-02-11 01:29:36'),(114,'japan_image2','small_business1.jpg','2023-12-18 21:26:30','2024-02-11 01:29:36'),(182,'europe_header1','Study in Europe with EduPath Global',NULL,'2024-05-13 20:52:58'),(183,'europe_content1','<p>Your Pathway to Prestigious Education and Cultural Diversity Across Europe EduPath Global is your trusted partner in unlocking the myriad opportunities for higher education in Europe. With our specialized expertise and personalized approach, we guide students from Nepal and Australia towards fulfilling their academic aspirations in this diverse and intellectually stimulating continent.</p>',NULL,'2024-05-13 20:52:58'),(184,'europe_header2',NULL,NULL,'2024-05-13 20:47:00'),(185,'europe_content2',NULL,NULL,'2024-02-28 01:23:56'),(186,'europe_header3','We offer broad range of services',NULL,'2024-02-28 01:23:56'),(187,'europe_content3','',NULL,'2024-02-27 08:31:41'),(188,'europe_header4','LENDING & FINANCE',NULL,'2024-02-28 01:23:56'),(189,'europe_header5','SAVINGS & INVESTMENTS',NULL,'2024-02-28 01:23:56'),(190,'europe_header6','RETIREMENT PLANNING',NULL,'2024-02-28 01:23:56'),(191,'europe_header7','SUPERANNUATION',NULL,'2024-02-27 08:31:41'),(192,'europe_header8','WILLS & ESTATE PLANNING',NULL,'2024-02-28 01:23:56'),(193,'europe_header9','FINANCIAL PLANNING & ADVICE\n',NULL,'2024-02-27 08:31:41'),(194,'europe_image1','financial_planning1.png','2023-12-18 21:26:30','2024-02-28 17:31:23'),(195,'europe_image2','financial_planning2.jpg','2023-12-18 21:26:30','2024-02-28 17:31:23'),(196,'nz_header1','Study in New Zealand with EduPath Global',NULL,'2024-05-13 20:52:58'),(197,'nz_content1','<p><strong>Your Pathway to World-Class Education and Unforgettable Experiences in New Zealand</strong></p>\r\n\r\n<p>EduPath Global is your trusted partner in realizing your academic aspirations in New Zealand. With our specialized expertise and personalized support, we guide students from Nepal and Australia towards a transformative educational journey in this picturesque and innovative country.</p>',NULL,'2024-05-13 20:52:58'),(198,'nz_header2','Why Choose New Zealand for Your Education?',NULL,'2024-05-13 20:52:58'),(199,'nz_content2','<p>New Zealand is renowned for its high-quality education system, breathtaking landscapes, and welcoming culture, making it an ideal destination for international students. Here are compelling reasons why studying in New Zealand is an excellent choice:</p>\r\n\r\n<ol>\r\n	<li><strong>Top-Quality Universities and Institutions</strong>: New Zealand&#39;s universities and institutions consistently rank among the best globally, offering a wide range of programs in diverse fields such as science, engineering, business, arts, and more. Students can expect world-class education and cutting-edge research opportunities.</li>\r\n	<li><strong>Safe and Supportive Environment</strong>: New Zealand is known for its safety, stability, and friendly atmosphere. With its low crime rates and inclusive society, international students feel welcomed and supported, allowing them to focus on their studies and personal growth.</li>\r\n	<li><strong>Stunning Natural Landscapes</strong>: From snow-capped mountains to pristine beaches and lush forests, New Zealand boasts some of the world&#39;s most stunning natural landscapes. Studying in New Zealand offers students the opportunity to explore breathtaking scenery and engage in outdoor adventures.</li>\r\n	<li><strong>Cultural Diversity and Inclusivity</strong>: New Zealand is a multicultural society that celebrates diversity and inclusivity. International students can experience a rich tapestry of cultures, traditions, and perspectives, fostering cross-cultural understanding and global citizenship.</li>\r\n	<li><strong>Work and Immigration Opportunities</strong>: After completing their studies, international students have the option to work in New Zealand through various post-study work visa options, providing valuable work experience and opportunities for long-term residency and immigration.</li>\r\n</ol>',NULL,'2024-05-13 20:52:58'),(200,'nz_header3',NULL,NULL,'2024-05-18 06:31:59'),(201,'nz_content3',NULL,NULL,'2024-05-18 06:31:59'),(202,'nz_image1','financial_services1.jpg','2023-12-18 21:26:30','2024-02-11 01:29:36'),(203,'nz_image2','financial_services2.png','2023-12-18 21:26:30','2024-02-28 17:30:32'),(206,'counselling_header1','Student Counselling Services',NULL,NULL),(207,'counselling_content1','<p><strong>Your Trusted Partner in Academic and Personal Success</strong></p>\r\n\r\n<p>At EduPath Global, we understand that the journey to higher education can be challenging and overwhelming. That&#39;s why we offer comprehensive student counseling services to support you every step of the way. Our experienced counselors are here to provide guidance, assistance, and encouragement as you navigate your educational and personal goals.</p>\r\n\r\n<ol>\r\n	<li><strong>Academic Counselling</strong>: Assistance with course selection, academic planning, and study skills development to help you excel in your academic pursuits.</li>\r\n	<li><strong>Career Counselling</strong>: Guidance on career exploration, goal setting, and job search strategies to help you make informed decisions about your future career path.</li>\r\n	<li><strong>University Applications</strong>: Support with university research, application preparation, personal statement writing, and interview preparation to maximize your chances of acceptance.</li>\r\n	<li><strong>Study Abroad</strong>: Information and assistance with study abroad programs, exchange opportunities, and international student experiences to broaden your horizons and enrich your educational journey.</li>\r\n</ol>',NULL,'2024-05-15 06:38:46'),(208,'counselling_image1',NULL,NULL,NULL),(209,'preparation_header1','PTE and IELTS Test Preparation Services',NULL,'2024-05-15 06:39:17'),(210,'preparation_content1','<p><strong>Your Pathway to Success in English Proficiency Exams</strong></p>\r\n\r\n<p>EduPath Global offers specialized test preparation services for the PTE (Pearson Test of English) and IELTS (International English Language Testing System) exams. With our expert guidance and comprehensive support, you can enhance your English language skills, boost your confidence, and achieve your desired scores.</p>\r\n\r\n<p><strong>Why Choose EduPath Global for PTE and IELTS Test Preparation?</strong></p>\r\n\r\n<p><strong>Expert Instructors:</strong> Our team of experienced instructors are certified PTE and IELTS trainers with in-depth knowledge of exam content, format, and scoring. They provide expert instruction tailored to your individual needs, helping you maximize your potential and achieve your goals.</p>\r\n\r\n<p><strong>Comprehensive Curriculum:</strong> Our test preparation programs cover all sections of the PTE and IELTS exams, including speaking, listening, reading, and writing. We provide you with the skills, strategies, and practice you need to excel in each section of the exam.</p>\r\n\r\n<p><strong>Personalized Approach:</strong> We understand that every student has unique strengths, weaknesses, and learning styles. That&#39;s why we take a personalized approach to test preparation, customizing our instruction and support to meet your specific needs and goals.</p>\r\n\r\n<p><strong>Proven Strategies:</strong> We offer a range of proven strategies and techniques to help you succeed on the PTE and IELTS exams. From time management tips to strategies for tackling difficult questions, we provide you with the tools you need to perform your best on exam day.</p>\r\n\r\n<p><strong>Flexible Scheduling:</strong> We offer flexible scheduling options to accommodate your busy schedule. Choose from in-person classes, online tutoring, or self-paced study programs to fit your needs and preferences.</p>\r\n\r\n<p><strong>Practice Tests and Feedback</strong>: We offer a range of practice tests and drills to help you familiarize yourself with the format and timing of the PTE and IELTS exams. After each practice test, you&#39;ll receive detailed feedback and analysis to track your progress and identify areas for further improvement.</p>\r\n\r\n<p><strong>Test Day Preparation</strong>: In addition to content review and practice, we also provide guidance and support to help you prepare for test day. From tips on managing test anxiety to strategies for pacing yourself during the exam, we&#39;ll ensure that you&#39;re fully prepared to perform your best on exam day.</p>',NULL,'2024-05-15 06:39:37'),(211,'preparation_image1',NULL,NULL,NULL),(212,'selection_header1','Country, Course, and University Selection',NULL,'2024-05-15 06:40:08'),(213,'selection_content1','<p><strong>Your Guide to Making Informed Decisions for Your Academic Journey</strong></p>\r\n\r\n<p>At EduPath Global, we understand that choosing the right country, course, and university is crucial for your academic and professional success. With our expert guidance and personalized support, you can make informed decisions that align with your goals and aspirations.</p>\r\n\r\n<p><strong>Why Choose the Right Country, Course, and University?</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Country Selection</strong>: The choice of country can significantly impact your educational experience and future opportunities. Factors to consider include the quality of education, cultural environment, cost of living, immigration policies, and career prospects.</li>\r\n	<li><strong>Course Selection</strong>: Selecting the right course is essential for achieving your academic and career goals. Consider your interests, strengths, career aspirations, and market demand when choosing a course. Look for programs that offer relevant curriculum, practical experience, and opportunities for specialization.</li>\r\n	<li><strong>University Selection</strong>: Choosing the right university is critical for receiving quality education, building a strong network, and enhancing your employability. Factors to consider include academic reputation, faculty expertise, research opportunities, campus facilities, and student support services.</li>\r\n</ol>',NULL,'2024-05-15 06:40:08'),(214,'selection_image1',NULL,NULL,NULL),(215,'processing_header1','Visa Processing and Migration Services',NULL,'2024-05-15 06:46:43'),(216,'processing_content1','<p><strong>Your Trusted Partner for Seamlessly Navigating Immigration Procedures</strong></p>\r\n\r\n<p>At EduPath Global, we understand that visa processing and migration can be daunting tasks for international students and migrants. That&#39;s why we offer comprehensive visa processing and migration services to streamline the process and ensure a smooth transition to your chosen destination.</p>\r\n\r\n<p><strong>Why Choose EduPath Global for Visa Processing and Migration?</strong></p>\r\n\r\n<p><strong>Expert Guidance:</strong> Our team of experienced migration consultants specializes in visa processing and immigration procedures for various countries. With their expertise and knowledge of immigration laws and regulations, they provide expert guidance and support throughout the process.</p>\r\n\r\n<p><strong>Personalized Assistance:</strong> We recognize that every individual&#39;s situation is unique. Whether you&#39;re applying for a student visa, work visa, permanent residency, or citizenship, we offer personalized assistance tailored to your specific needs and circumstances.</p>\r\n\r\n<p><strong>Documentation Support:</strong> Visa and migration applications require extensive documentation, including identity documents, educational certificates, financial statements, and more. We help you gather, organize, and review all necessary documents to ensure compliance with immigration requirements.</p>\r\n\r\n<p><strong>Application Preparation and Submission:</strong> Once your documents are in order, we assist you with preparing and submitting your visa or migration application. We ensure that all forms are completed accurately and that you meet any additional requirements specified by immigration authorities.</p>\r\n\r\n<p><strong>Follow-Up and Communication:</strong> We maintain regular communication with immigration authorities to track the progress of your application. If any additional information or documentation is required, we follow up promptly to ensure a timely resolution.</p>\r\n\r\n<p><strong>Our Visa Processing and Migration Services Include:</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Student Visa Applications</strong>: Assistance with student visa applications for international students seeking to study abroad, including documentation preparation, application submission, and follow-up with immigration authorities.</li>\r\n	<li><strong>Tourist Visa</strong>: We assist tourist seeking to visit overseas, to apply for visit visa.</li>\r\n	<li><strong>Work Visa Applications</strong>: Support for work visa applications for individuals seeking employment opportunities overseas, including guidance on eligibility criteria, documentation requirements, and employer sponsorship.</li>\r\n	<li><strong>Permanent Residency Applications</strong>: Assistance with permanent residency applications for individuals seeking to establish long-term residency in their chosen destination, including assessment of eligibility, documentation preparation, and submission support.</li>\r\n	<li><strong>Citizenship Applications</strong>: Guidance on citizenship applications for individuals seeking to become citizens of their chosen country, including eligibility assessment, naturalization requirements, and citizenship test preparation.</li>\r\n</ol>\r\n\r\n<p><strong>Our Insurance Services Include:</strong></p>\r\n\r\n<p><strong>Health Insurance:</strong> Comprehensive health insurance plans designed to cover medical expenses, hospitalization, doctor visits, prescription medications, and emergency care while <strong>studying,</strong> working, or traveling abroad.</p>\r\n\r\n<ul>\r\n	<li><strong>Student Cover</strong></li>\r\n	<li><strong>Workers Cover</strong></li>\r\n	<li><strong>Professional Indemnity</strong></li>\r\n</ul>',NULL,'2024-05-15 06:46:43'),(217,'processing_image1',NULL,NULL,NULL),(218,'counselling1','counselling1.jpg',NULL,NULL),(219,'counselling2','counselling2.svg',NULL,NULL),(220,'preparation1','preparation1.jpeg',NULL,NULL),(221,'preparation2','preparation2.jpeg',NULL,NULL),(222,'selection1','selection1.svg',NULL,NULL),(223,'selection2','selection2.svg',NULL,NULL),(224,'processing1','processing1.jpeg',NULL,NULL),(225,'processing2','processing2.jpeg',NULL,NULL),(234,'processing3','processing3.jpeg',NULL,NULL),(235,'usa1','usa1.jpg',NULL,NULL),(236,'usa2','usa2.jpg',NULL,NULL),(237,'australia1','australia1.svg',NULL,NULL),(238,'australia2','australia2.svg',NULL,NULL),(239,'uae1','uae1.svg',NULL,NULL),(249,'uae2','uae1.svg',NULL,NULL),(250,'europe1','europe1.svg',NULL,NULL),(251,'europe2','europe2.svg',NULL,NULL),(252,'japan1','japan1.svg',NULL,NULL),(253,'japan2','japan2.svg',NULL,NULL),(254,'korea1','korea1.svg',NULL,NULL),(255,'korea2','korea2.svg',NULL,NULL),(256,'canada1','canada1.svg',NULL,NULL),(257,'canada2','canada2.svg',NULL,NULL),(258,'nz1','nz1.svg',NULL,NULL),(259,'nz2','nz2.svg',NULL,NULL);
/*!40000 ALTER TABLE `cms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facilities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `faci` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_faci` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `facilities_faci_unique` (`faci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilities`
--

LOCK TABLES `facilities` WRITE;
/*!40000 ALTER TABLE `facilities` DISABLE KEYS */;
/*!40000 ALTER TABLE `facilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `gallaries`
--

DROP TABLE IF EXISTS `gallaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallaries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gal_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallaries`
--

LOCK TABLES `gallaries` WRITE;
/*!40000 ALTER TABLE `gallaries` DISABLE KEYS */;
INSERT INTO `gallaries` VALUES (39,'slider39.jpeg','hey yo','2024-01-04 03:15:03','2024-01-04 03:27:59');
/*!40000 ALTER TABLE `gallaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_sliders`
--

DROP TABLE IF EXISTS `image_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image_sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_sliders`
--

LOCK TABLES `image_sliders` WRITE;
/*!40000 ALTER TABLE `image_sliders` DISABLE KEYS */;
INSERT INTO `image_sliders` VALUES (28,'one','one.png','2023-09-10 12:32:07','2023-09-10 12:32:07'),(29,'one','one.png','2023-09-10 12:32:07','2023-09-10 12:32:07');
/*!40000 ALTER TABLE `image_sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_user_data_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_12_31_123225_create_categories_table',1),(7,'2022_01_02_091034_create_cities_table',1),(8,'2022_01_07_144759_create_facilities_table',1),(9,'2022_01_09_063114_create_properties_table',1),(10,'2022_01_11_150349_create_gallaries_table',1),(11,'2022_01_21_040603_create_site_settings_table',1),(12,'2022_02_25_134358_create_reviews_table',1),(13,'2022_03_11_113517_create_cms_table',1),(14,'2022_01_21_040603_create_image_sliders_table',2),(15,'2023_01_11_150349_create_gallaries_table',3),(16,'2023_01_11_150349_create_services_table',4),(17,'2021_08_17_052404_create_tags_table',5),(18,'2021_08_17_052620_create_posts_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tag` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `tag_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_post_id_foreign` (`post_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `post_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (3,'doloribus modi et ut','Insights & Advice','<p>Exercitationem id voluptatum consequatur quia commodi explicabo. Repellat atque laborum saepe sint. In est quod dolore fugit sint. Voluptatum quis earum modi suscipit quis ea doloribus. Numquam consequatur asperiores eum ipsa blanditiis asperiores. Ut et consequatur officiis ex fuga ut nobis. Rerum voluptate ipsam quidem deleniti. Consequuntur omnis ducimus eum qui numquam rerum officiis ducimus. Quos et non quo alias. Earum quas voluptate dolorem et consequatur consectetur impedit. Eius ut dolor doloribus vel soluta cupiditate. Id sunt magnam dolorem fugit sunt. Repellendus sit illum ut rerum porro nobis voluptates. Et et ratione ut error rerum ducimus labore. Debitis omnis ducimus omnis qui. Quae id consectetur illum itaque magni. Omnis qui ea recusandae sed itaque ut accusamus. Sed velit quaerat quam necessitatibus et. Rerum dolorum corrupti suscipit pariatur cupiditate aperiam. Nobis nemo enim omnis qui asperiores beatae qui. Voluptatem numquam incidunt recusandae sunt tempore dolores. Assumenda blanditiis debitis aperiam quo et aut dolores. Et iusto pariatur recusandae quae et. Atque quo nihil nihil quis error qui exercitationem non. Ipsa deserunt animi dicta laborum aspernatur quas unde. Nihil natus est velit hic sapiente labore facilis. Necessitatibus corrupti doloribus aut soluta molestias iusto ea. Quidem porro perferendis non veniam. Qui corrupti quis porro ipsa. Quaerat libero repudiandae aut repudiandae nihil rem. Repellendus quos reiciendis quam voluptas et perspiciatis perferendis quae.</p>',1,'post3.jpg','2023-12-24 05:36:53','2023-12-28 14:19:54'),(12,'laudantium est voluptas maiores','Investment & Planning','Molestiae sed provident voluptatem perspiciatis et iure. Aut molestiae est excepturi assumenda magni facere. Et et quia assumenda alias.\n\nLaudantium aut temporibus earum. Voluptas nisi sint unde quod consequuntur numquam. Quae mollitia unde velit enim aliquid. Quos provident ipsa qui cumque enim nostrum.\n\nVel dolor expedita nam distinctio soluta accusantium. Sapiente ea ea autem aperiam.\n\nOmnis quas doloribus aut consectetur. Autem qui voluptatem cum fugit. Neque impedit hic sint et voluptate blanditiis. Aut aliquam qui quia deleniti rerum.\n\nFacilis commodi voluptas inventore fuga doloribus. Quo magni nostrum exercitationem corporis at nam explicabo. Cum placeat maiores dolores facere. Dolorum ut aspernatur et molestiae similique cumque excepturi.\n\nDistinctio animi voluptatem inventore quis expedita ex. Fuga temporibus qui veniam porro aliquid. Aut ducimus quia velit quas laborum veritatis. Tenetur omnis eveniet in aut.\n\nLaboriosam sit rerum et ex provident repellat. Ut tempora aut corrupti doloremque quam placeat odit. Ducimus dicta sint vel. Aliquam est porro dicta est minima nisi.\n\nConsequuntur dolores consequatur ut itaque doloribus veniam numquam consectetur. Voluptatum rem explicabo debitis nisi rerum ipsam. Est ducimus alias impedit vitae voluptatem nulla. Ducimus in animi qui nulla et.',1,'post12.jpg','2023-12-24 05:41:46','2023-12-24 05:41:46'),(13,'Maximising your tax returns','Tax Tips','<p>In today&#39;s rapidly evolving financial landscape, making smart investment decisions is crucial for long-term financial stability and growth. While the allure of quick profits can be tempting, the path to true financial security lies in informed and strategic investments. This blog delves into the principles of smart financial investment and offers insights to guide both novice and seasoned investors.</p>\r\n\r\n<h3><strong>1. Understand Your Financial Goals</strong></h3>\r\n\r\n<p>Before diving into any investment, it&#39;s essential to have a clear understanding of your financial objectives. Are you investing for retirement, purchasing a home, funding education, or seeking passive income? Defining your goals will help tailor your investment strategy and risk tolerance.</p>\r\n\r\n<h3><strong>2. Educate Yourself</strong></h3>\r\n\r\n<p>The investment world is vast, with various asset classes like stocks, bonds, mutual funds, real estate, and more. Take the time to educate yourself on these options. Consider reading books, attending seminars, or consulting with financial advisors to gain a deeper understanding.</p>\r\n\r\n<h3><strong>3. Diversify Your Portfolio</strong></h3>\r\n\r\n<p>The age-old adage, &quot;Don&#39;t put all your eggs in one basket,&quot; holds true in investment. Diversifying your portfolio across different asset classes can help mitigate risks. A well-diversified portfolio can ensure that a downturn in one sector won&#39;t severely impact your overall investments.</p>\r\n\r\n<h3><strong>4. Invest Regularly and Consistently</strong></h3>\r\n\r\n<p>Consistent investing, regardless of market conditions, can help you benefit from the power of compounding. Set up automatic contributions to your investment accounts, be it a 401(k), IRA, or brokerage account. Regular investments, especially in volatile markets, can also help average out the cost of your investments over time.</p>\r\n\r\n<h3><strong>5. Monitor and Rebalance</strong></h3>\r\n\r\n<p>The financial markets are dynamic, and your investment portfolio will need periodic review. Rebalancing involves adjusting your portfolio to maintain your desired asset allocation. As certain assets outperform others, they may become a more significant portion of your portfolio, deviating from your original allocation. Regularly rebalancing ensures that you stay aligned with your investment objectives and risk tolerance.</p>\r\n\r\n<h3><strong>6. Keep Emotions in Check</strong></h3>\r\n\r\n<p>Investing can evoke strong emotions, especially during market downturns. While it&#39;s natural to feel apprehensive, it&#39;s crucial to avoid making impulsive decisions based on fear or greed. Maintain a long-term perspective, and remember that markets have historically recovered from downturns.</p>\r\n\r\n<h3><strong>7. Consider Tax Implications</strong></h3>\r\n\r\n<p>Understanding the tax implications of your investments can significantly impact your after-tax returns. Familiarize yourself with tax-efficient investment strategies, such as holding investments for more extended periods to benefit from lower capital gains tax rates or utilizing tax-advantaged accounts.</p>\r\n\r\n<h3><strong>8. Continuously Review and Educate</strong></h3>\r\n\r\n<p>The world of finance and investment is ever-changing. Regularly reviewing your investment strategy, staying updated on market trends, and continuing your financial education will empower you to make informed decisions and adapt to changing circumstances.</p>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>Smart financial investment is a journey, not a destination. By understanding your goals, educating yourself, diversifying your portfolio, investing consistently, and maintaining a disciplined approach, you can navigate the complexities of the financial markets and build a secure future. Remember, the key to successful investing lies in patience, diligence, and a commitment to lifelong learning. Happy investing!</p>',1,'post13.jpeg','2023-12-24 05:41:46','2023-12-30 04:43:41'),(25,'Making smart choices in investments','Investment & Planning','<p>In today&#39;s rapidly evolving financial landscape, making smart investment decisions is crucial for long-term financial stability and growth. While the allure of quick profits can be tempting, the path to true financial security lies in informed and strategic investments. This blog delves into the principles of smart financial investment and offers insights to guide both novice and seasoned investors.</p>\r\n\r\n<h3><strong>1. Understand Your Financial Goals</strong></h3>\r\n\r\n<p>Before diving into any investment, it&#39;s essential to have a clear understanding of your financial objectives. Are you investing for retirement, purchasing a home, funding education, or seeking passive income? Defining your goals will help tailor your investment strategy and risk tolerance.</p>\r\n\r\n<h3><strong>2. Educate Yourself</strong></h3>\r\n\r\n<p>The investment world is vast, with various asset classes like stocks, bonds, mutual funds, real estate, and more. Take the time to educate yourself on these options. Consider reading books, attending seminars, or consulting with financial advisors to gain a deeper understanding.</p>\r\n\r\n<h3><strong>3. Diversify Your Portfolio</strong></h3>\r\n\r\n<p>The age-old adage, &quot;Don&#39;t put all your eggs in one basket,&quot; holds true in investment. Diversifying your portfolio across different asset classes can help mitigate risks. A well-diversified portfolio can ensure that a downturn in one sector won&#39;t severely impact your overall investments.</p>\r\n\r\n<h3><strong>4. Invest Regularly and Consistently</strong></h3>\r\n\r\n<p>Consistent investing, regardless of market conditions, can help you benefit from the power of compounding. Set up automatic contributions to your investment accounts, be it a 401(k), IRA, or brokerage account. Regular investments, especially in volatile markets, can also help average out the cost of your investments over time.</p>\r\n\r\n<h3><strong>5. Monitor and Rebalance</strong></h3>\r\n\r\n<p>The financial markets are dynamic, and your investment portfolio will need periodic review. Rebalancing involves adjusting your portfolio to maintain your desired asset allocation. As certain assets outperform others, they may become a more significant portion of your portfolio, deviating from your original allocation. Regularly rebalancing ensures that you stay aligned with your investment objectives and risk tolerance.</p>\r\n\r\n<h3><strong>6. Keep Emotions in Check</strong></h3>\r\n\r\n<p>Investing can evoke strong emotions, especially during market downturns. While it&#39;s natural to feel apprehensive, it&#39;s crucial to avoid making impulsive decisions based on fear or greed. Maintain a long-term perspective, and remember that markets have historically recovered from downturns.</p>\r\n\r\n<h3><strong>7. Consider Tax Implications</strong></h3>\r\n\r\n<p>Understanding the tax implications of your investments can significantly impact your after-tax returns. Familiarize yourself with tax-efficient investment strategies, such as holding investments for more extended periods to benefit from lower capital gains tax rates or utilizing tax-advantaged accounts.</p>\r\n\r\n<h3><strong>8. Continuously Review and Educate</strong></h3>\r\n\r\n<p>The world of finance and investment is ever-changing. Regularly reviewing your investment strategy, staying updated on market trends, and continuing your financial education will empower you to make informed decisions and adapt to changing circumstances.</p>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>Smart financial investment is a journey, not a destination. By understanding your goals, educating yourself, diversifying your portfolio, investing consistently, and maintaining a disciplined approach, you can navigate the complexities of the financial markets and build a secure future. Remember, the key to successful investing lies in patience, diligence, and a commitment to lifelong learning. Happy investing!</p>',1,'post25.jpeg','2023-12-29 14:17:18','2024-03-03 08:23:56');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `purpose` enum('sale','rent','pg') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faci` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` int NOT NULL,
  `bathrooms` int NOT NULL,
  `city` bigint NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_ph` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_em` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `floorplan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `u_id` bigint NOT NULL,
  `pro_id` bigint NOT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `service_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (22,'srv22.jpg','<p>Accurate, meaningful, organised financial records ensure that your business operations will run more efficiently on a daily basis. We provide a full range of cost effective accounting services including:</p>\r\n\r\n<p><strong>Accounting</strong></p>\r\n\r\n<ul>\r\n	<li>General ledger maintenance</li>\r\n	<li>Annual Financial statement with compilation report</li>\r\n	<li>Management-use-only financial statements</li>\r\n	<li>Interim financial statements</li>\r\n	<li>Personal financial statements foe business owners</li>\r\n	<li>Forecasts and projected financial statements</li>\r\n	<li>Payroll preparation and compliance services: Workers compensation and Superannuation</li>\r\n	<li>MYOB and QuickBooks setup, configuration and training</li>\r\n	<li>Reconciliations</li>\r\n	<li>Fixed Assets Register maintenance</li>\r\n</ul>\r\n\r\n<p><strong>Compliances</strong></p>\r\n\r\n<p>We also assist you on a number of compliances as required by various authorities:</p>\r\n\r\n<ul>\r\n	<li>Employer superannuation contributions</li>\r\n	<li>Workers Compensation</li>\r\n	<li>ASIC compliance</li>\r\n	<li>Insurance compliance</li>\r\n	<li>Transfers of shares</li>\r\n	<li>Preparation of ASIC forms 203 and 304 as required</li>\r\n	<li>Maintenance of company statutory register</li>\r\n	<li>Appointment of public officer and Company Secretary.</li>\r\n</ul>\r\n\r\n<p><strong>Bookkeeping</strong></p>\r\n\r\n<p>Our qualified staff can assist you with the day-to-day tasks associated with bookkeeping, including training your personnel to accomplish much of the record-keeping functions through on-site or cloud accounting. We also provide training and assistance with MYOB, Quick book, XERO, Saasu and Bank link applications.</p>',NULL,'2023-12-30 04:30:59','Accounting Services'),(23,'srv23.jpg','<p>It is our job that you pay no more tax than the law requires.</p>\r\n\r\n<p><strong>Tax returns</strong></p>\r\n\r\n<p>Today&rsquo;s tax laws are so complicated that unless your financial affairs are extremely simple, chances are you will benefit from at least occasional help from tax professional. It is too easy to overlook deductions and credits to which you are entitled if you prepare only one return a year. Even the use of computer software is no substitute for the assistance of a seasoned tax preparer.</p>\r\n\r\n<p>We prepare hundreds of tax returns every year. We know what to look for when your return is prepared. More importantly, you have someone to ask questions during rest of the year. And we will put you on our mailing list to receive timely tax and financial advice.</p>\r\n\r\n<p>We monitor the changes in the tax law that affect you and recommend tax saving strategies. We will file all your tax returns and serve as your advocate in all tax matters. We assist you in rearranging the ATO payments (Payment Plan) in a way that suits you and your cash flow. Also, we assist you to remit any interests and penalties charged by ATO into your account.</p>\r\n\r\n<p>If you are contacted by ATO or any government agency concerning your tax matters, your first call should be to us. We will take care of ot so that you can get on with your business.</p>\r\n\r\n<p>The following are examples of few returns that we lodge for you:</p>\r\n\r\n<ul>\r\n	<li>Business Tax Returns</li>\r\n	<li>Individual Tax Returns</li>\r\n	<li>Rental Properties</li>\r\n	<li>Capital Gains</li>\r\n	<li>Company Tax returns</li>\r\n	<li>Partnership Tax Returns</li>\r\n	<li>Trust Tax Returns</li>\r\n	<li>Self managed Super Fund Tax Returns</li>\r\n	<li>Business Activity Statement Preparation</li>\r\n	<li>Installment Activity statement Preparation</li>\r\n	<li>FBT, payroll tax and Others</li>\r\n	<li>PAYG variation form- Negative Gearing</li>\r\n	<li>Deferral scheme application- for imports</li>\r\n</ul>\r\n\r\n<p><strong>Tax Planning</strong></p>\r\n\r\n<p>There is a certain mystique that has grown up around tax planning and tax-cutting techniques. We are here to put tax planning in plain English for you. There are actually several basic Tax-cutting strategies within a legal framework, and most plans involve one or a combination of them. In a nutshell, the strategies are:</p>\r\n\r\n<ul>\r\n	<li>Splitting income among several family members or legal entities in order to get more of the income taxed in lower brackets</li>\r\n	<li>Shifting income from one year to another in order to have it fall where it will be taxed at lower rate</li>\r\n	<li>Shifting Deductions from one year to another to place them where the tax benefit will be greater</li>\r\n	<li>Deferring tax liability through certain investment choices and through pension plan contributions</li>\r\n	<li>Investing your money to produce income that is exempt from income tax</li>\r\n</ul>',NULL,'2023-12-30 04:32:19','Tax Services'),(32,'srv32.jpeg','<p><strong>SMSF management and compliances</strong></p>\r\n\r\n<p>We provide accounting and taxation services for all self-managed super funds (SMSFs) whether they are in accumulation or pension mode. We will ensure that your SMSF is fully compliant with all government requirements and we will help you stay on top of all legislative changes. We can offer a customized SMSF package, tailored to suit your specific needs. Our SMSF services include:</p>\r\n\r\n<ul>\r\n	<li>SMSF establishment</li>\r\n	<li>Full pension management</li>\r\n	<li>Automated accounting of corporate actions</li>\r\n	<li>Comprehensive investment reports</li>\r\n	<li>Capital gains tax calculations</li>\r\n	<li>Annual member statements</li>\r\n	<li>Limited recourse borrowing</li>\r\n	<li>Commissioning annual independent audit reports</li>\r\n	<li>Actuarial certificates (where necessary)</li>\r\n	<li>Lodgment of income tax and regulatory returns</li>\r\n	<li>Annual financial statements</li>\r\n	<li>Expert SMSF technical advice</li>\r\n</ul>\r\n\r\n<p>Our SMSF clients and their advisers also have the ability to remotely access their SMSF reporting at any time for up-to-date information.</p>\r\n\r\n<p><strong>SMSF Audit</strong></p>\r\n\r\n<p>We specialise in independent Self Managed Super Fund Auditing and with over 10 years SMSF auditing experience you are in the right hands.</p>\r\n\r\n<p>We stay up to date with any changes to regulations, which is important for delivering the best value SMSF advice, SMSF service, SMSF support and SMSF templates as required.</p>\r\n\r\n<p>Using the latest technology and electronic auditing practices allows for faster turn around times on all SMSF Audit jobs to our Australia wide clientele which includes trustees, accountants and financial planners.</p>','2023-12-29 14:23:10','2023-12-30 04:34:25','Self Managed Super Fund');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'email','munalaccounting@gmail.com',NULL,NULL),(2,'phone','0452145677',NULL,NULL),(3,'site_title','Munal Accounting','2023-09-08 18:53:31','2023-09-08 18:53:31'),(4,'brand_title','Munal Brand','2023-09-08 18:53:31','2023-09-08 18:53:31'),(5,'meta_discription',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(6,'footer_content','asas','2023-09-08 18:53:31','2023-12-17 23:16:37'),(7,'site_email',NULL,'2023-09-08 18:53:31','2024-05-18 08:09:17'),(8,'site_contact','0452145677','2023-09-08 18:53:31','2023-12-19 01:36:25'),(9,'facebook_url','https://www.facebook.com/rbc.cleaning.5','2023-09-08 18:53:31','2023-09-08 18:53:31'),(10,'instagram_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(11,'youtube_url',NULL,'2023-09-08 18:53:31','2023-09-11 05:52:28'),(12,'twitter_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(13,'office_address','8/72 Monaro St, Queanebeyan, NSW, 2620','2023-09-09 06:26:38','2023-12-19 01:36:25'),(17,'logo_image','logo.png','2023-12-17 23:16:05','2023-12-17 23:16:05'),(18,'popup_content','7 individuals have recently scheduled appointments with our team for consultations. If you\'re seeking professional advice or guidance, book your appointment now to secure your spot and benefit from our expertise. We look forward to assisting you!','2023-12-17 23:16:05','2023-12-17 23:16:05'),(19,'head_email','contact@edupathglobal.com','2024-05-18 08:09:17','2024-05-18 08:12:21'),(20,'head_contact','04213232323','2024-05-18 08:09:17','2024-05-18 08:12:54'),(21,'head_address','8/27, Montana Street, Canberra, Australai','2024-05-18 08:09:17','2024-05-18 08:12:21'),(22,'branch_contact','01448282333','2024-05-18 08:09:17','2024-05-18 08:12:54'),(23,'branch_address','Naya Marga, Putalisadak,Kathmandu, Nepal','2024-05-18 08:09:17','2024-05-18 08:12:21'),(24,'branch_email','contactbranch@edupathglobal.com','2024-05-18 08:12:21','2024-05-18 08:12:21');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Tag 1',NULL,NULL),(2,'Tag 2',NULL,NULL),(3,'Tag 3',NULL,NULL),(4,'Tag 4',NULL,NULL),(5,'Tag 5',NULL,NULL),(6,'Tag 6',NULL,NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_data` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saved` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` VALUES (1,NULL,NULL,NULL,'2023-09-05 00:32:47','2023-09-05 00:32:47'),(2,NULL,NULL,NULL,'2023-09-05 00:35:49','2023-09-05 00:35:49');
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('U','R','A') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'R=Root, A=Admin, U=User',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin User','admin@admin.com',NULL,'$2y$10$BVXAFDB4TNqoR/y4NxaczeisI2D3ismZ/lAkZgcSUSzW2l07eeiOG','R',NULL,'2023-09-05 00:32:47','2023-12-30 02:07:10'),(2,'Amit','achaulagain123@gmail.com',NULL,'$2y$10$iTqP/DmoxMenLISoprBTTOaX6HbD8uhjfR950HPBJ8f.W8LAmpAEG','U',NULL,'2023-09-05 00:35:48','2023-09-05 00:35:48');
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

-- Dump completed on 2024-05-19  4:24:53
