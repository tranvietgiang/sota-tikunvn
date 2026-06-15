-- MySQL dump 10.13  Distrib 8.4.7, for Win64 (x86_64)
--
-- Host: localhost    Database: tikunvn
-- ------------------------------------------------------
-- Server version	8.4.7

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
-- Dumping data for table `table_static`
--
-- WHERE:  type IN ('home-product','home-benefit-heading','home-schools-heading','home-news-heading','slider','slider-2','home-school','home-benefit','home-news')

LOCK TABLES `table_static` WRITE;
/*!40000 ALTER TABLE `table_static` DISABLE KEYS */;
REPLACE INTO `table_static` (`id`, `photo`, `photo1`, `options`, `tenkhongdauvi`, `tenkhongdauen`, `noidungen`, `noidungvi`, `motaen`, `motavi`, `tenen`, `tenvi`, `taptin`, `type`, `hienthi`, `ngaytao`, `ngaysua`) VALUES (9,'assets/images/Titkul-da-nen-tang.png',NULL,NULL,NULL,NULL,'Titkul application software is a digital platform that helps schools manage professional operations, connect families, schools and education management agencies.','Phần mềm ứng dụng của Titkul là nền tảng số hoá, giúp nhà trường dễ dàng quản lý điều hành công tác chuyên môn, kết nối và tương tác giữa Gia đình và nhà trường và Cơ quan quản lý ngành (Sở/Phòng giáo dục).','SCHOOL DIGITAL TRANSFORMATION','CHUYỂN ĐỔI SỐ TRƯỜNG HỌC','APPLICATION SOFTWARE','PHẦN MỀM ỨNG DỤNG',NULL,'home-product',1,1781494313,1781495005),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'FEATURED SCHOOLS','CÁC TRƯỜNG TIÊU BIỂU',NULL,'home-schools-heading',1,1781496852,1781496852),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'NEWS AND EVENTS','TIN TỨC SỰ KIỆN',NULL,'home-news-heading',1,1781497286,1781497286),(17,NULL,NULL,NULL,NULL,NULL,'Titkul school management software and its school interaction ecosystem improve management efficiency in line with education digital transformation.','Phần mềm Quản Lý Trường Học của Titkul, cùng với hệ sinh thái ứng dụng tương tác học đường, giúp tăng cường hiệu quả quản lý trường học theo đúng định hướng chuyển đổi số của Ngành Giáo dục.',NULL,NULL,'WHAT BENEFITS DOES TITKUL BRING TO SCHOOLS?','TITKUL MANG LẠI LỢI ÍCH GÌ CHO NHÀ TRƯỜNG?',NULL,'home-benefit-heading',1,1781495319,1781495319);
/*!40000 ALTER TABLE `table_static` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `table_photo`
--
-- WHERE:  type IN ('home-product','home-benefit-heading','home-schools-heading','home-news-heading','slider','slider-2','home-school','home-benefit','home-news')

LOCK TABLES `table_photo` WRITE;
/*!40000 ALTER TABLE `table_photo` DISABLE KEYS */;
REPLACE INTO `table_photo` (`id`, `noibat`, `photo`, `noidungen`, `noidungvi`, `motaen`, `motavi`, `tenen`, `tenvi`, `link`, `link_video`, `options`, `type`, `act`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES (68,0,'assets/images/titkul-luc-giac.png',NULL,NULL,'School digital transformation application<br>from preschool to high school','Ứng dụng chuyển đổi số Trường học<br>từ cấp Mầm non đến Phổ thông','TitKul','TitKul','#dangkytuvan',NULL,NULL,'slider','',1,1,1781490392,1781490693),(69,0,'assets/images/titkul.png',NULL,NULL,'School digital transformation application<br>from preschool to high school','Công ty sản xuất phần mềm ứng dụng Quản lý trường<br>học, theo định hướng chuyển đổi số, có kết nối trục dữ liệu dùng chung của Ngành. Phần mềm của Titkul đã<br>được Sở GD & ĐT Tp.HCM chấp thuận và đã triển khai tại<br>nhiều cấp trường.','TitKul','TitKul','#dangkytuvan',NULL,NULL,'slider-2','',1,1,1781490392,1781490693),(80,0,'assets/images/logo-new-TH-Tran-Van-On.jpg',NULL,NULL,NULL,NULL,'Tran Van On Primary School','TH Trần Văn Ơn',NULL,NULL,NULL,'home-school',NULL,5,1,1781496852,1781496852),(79,0,'assets/images/logo-new-THPT-Han-Thuyen.jpg',NULL,NULL,NULL,NULL,'Han Thuyen High School','THPT Hàn Thuyên',NULL,NULL,NULL,'home-school',NULL,4,1,1781496852,1781496852),(78,0,'assets/images/logo-new-THCS-Phan-Sao-Nam.jpg',NULL,NULL,NULL,NULL,'Phan Sao Nam Secondary School','THCS Phan Sào Nam',NULL,NULL,NULL,'home-school',NULL,3,1,1781496852,1781496852),(77,0,'assets/images/logo-new-THPT-Binh-Khanh.jpg',NULL,NULL,NULL,NULL,'Binh Khanh High School','THPT Bình Khánh',NULL,NULL,NULL,'home-school',NULL,2,1,1781496852,1781496852),(76,0,'assets/images/logo-new-THPT-chuyen-Luong-The-Vinh.jpg',NULL,NULL,NULL,NULL,'Luong The Vinh High School for the Gifted','THPT chuyên Lương Thế Vinh',NULL,NULL,NULL,'home-school',NULL,1,1,1781496852,1781496852),(81,0,'assets/images/logo-new-Vo-Truong-Toan.jpg',NULL,NULL,NULL,NULL,'Vo Truong Toan School','Võ Trường Toản',NULL,NULL,NULL,'home-school',NULL,6,1,1781496852,1781496852);
/*!40000 ALTER TABLE `table_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `table_news`
--
-- WHERE:  type IN ('home-product','home-benefit-heading','home-schools-heading','home-news-heading','slider','slider-2','home-school','home-benefit','home-news')

LOCK TABLES `table_news` WRITE;
/*!40000 ALTER TABLE `table_news` DISABLE KEYS */;
REPLACE INTO `table_news` (`id`, `old_id`, `id_list`, `id_item`, `id_cat`, `id_sub`, `id_tags`, `noibat`, `photo`, `options`, `tenkhongdauvi`, `tenkhongdauen`, `noidungen`, `noidungvi`, `motaen`, `motavi`, `tenen`, `tenvi`, `stt`, `hienthi`, `type`, `ngaytao`, `ngaysua`, `luotxem`, `link`, `bando`, `video`, `icon`, `nghenghiep`, `diachi`) VALUES (649,0,0,0,0,0,NULL,0,'assets/images/Titkul-event-Q8-image.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TITKUL AT THE DIGITAL TRANSFORMATION - SCIENCE - TECHNOLOGY EVENT','TITKUL TẠI SỰ KIỆN CHUYỂN ĐỔI SỐ - KHOA HỌC - CÔNG NGHỆ',4,1,'home-news',1781497286,1781497286,0,'tin-tuc',NULL,NULL,NULL,NULL,NULL),(648,0,0,0,0,0,NULL,0,'assets/images/Titkul-AI-dinh-duong-mam-non-1.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TITKUL - AI NUTRITION IN PRESCHOOL CHILD HEALTH CARE','TITKUL - AI DINH DƯỠNG TRONG CHĂM SÓC SỨC KHỎE TRẺ MẦM NON',3,1,'home-news',1781497286,1781497286,0,'tin-tuc',NULL,NULL,NULL,NULL,NULL),(647,0,0,0,0,0,NULL,0,'assets/images/Titkul-TCN-Nhan-dao-image.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TITKUL AND COHOTA LMS TRAINING PROGRAM','TITKUL VÀ COHOTA TẬP HUẤN CHƯƠNG TRÌNH LMS',2,1,'home-news',1781497286,1781497286,0,'tin-tuc',NULL,NULL,NULL,NULL,NULL),(646,0,0,0,0,0,NULL,0,'assets/images/Titkul-cac-su-kien.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TITKUL - PRESCHOOL EVENTS PREPARING FOR THE NEW SCHOOL YEAR 2025-2026','TITKUL - CÁC SỰ KIỆN MẦM NON CHUẨN BỊ NĂM HỌC MỚI 2025-2026',1,1,'home-news',1781497286,1781497286,0,'tin-tuc',NULL,NULL,NULL,NULL,NULL),(643,0,0,0,0,0,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'Suitable for education digital transformation','Phù hợp chuyển đổi số của Ngành Giáo Dục','01','01',1,1,'home-benefit',1781495338,1781495338,0,NULL,NULL,NULL,NULL,NULL,NULL),(644,0,0,0,0,0,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'Save 75% management time','Tiết kiệm 75% thời gian trong công tác quản lý','75%','75%',2,1,'home-benefit',1781495338,1781495338,0,NULL,NULL,NULL,NULL,NULL,NULL),(645,0,0,0,0,0,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,'Increase school management efficiency by 85%','Tăng 85% hiệu quả quản lý trường học','85%','85%',3,1,'home-benefit',1781495338,1781495338,0,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `table_news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-15 13:52:48
