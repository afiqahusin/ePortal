-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2022 at 02:10 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamoda`
--

-- --------------------------------------------------------

--
-- Table structure for table `bor`
--

DROP TABLE IF EXISTS `bor`;
CREATE TABLE IF NOT EXISTS `bor` (
  `Bor_ID` int(50) NOT NULL AUTO_INCREMENT,
  `O_Capacity` int(25) NOT NULL,
  `O_Occupied` int(25) NOT NULL,
  `O_Available` int(25) NOT NULL,
  `O_Rate` int(25) NOT NULL,
  `L_Capacity` int(25) NOT NULL,
  `L_Occupied` int(25) NOT NULL,
  `L_Available` int(25) NOT NULL,
  `L_Rate` int(25) NOT NULL,
  `Bor_Date` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Bor_Time` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`Bor_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bor`
--

INSERT INTO `bor` (`Bor_ID`, `O_Capacity`, `O_Occupied`, `O_Available`, `O_Rate`, `L_Capacity`, `L_Occupied`, `L_Available`, `L_Rate`, `Bor_Date`, `Bor_Time`) VALUES
(7, 115, 65, 50, 57, 123, 65, 58, 53, '26/02/2022', '11:15 pm'),
(8, 1, 2, 3, 4, 5, 6, 7, 8, '28/02/2022', '12:35 pm'),
(9, 11, 12, 13, 14, 15, 16, 17, 18, '28/02/2022', '12:38 pm'),
(10, 123, 45, 78, 37, 115, 45, 70, 39, '10/03/2022', '02:15 pm'),
(11, 115, 58, 57, 50, 123, 58, 65, 47, '16/03/2022', '08:47 am'),
(12, 115, 58, 57, 50, 123, 58, 65, 47, '16/03/2022', '11:43 am'),
(13, 115, 60, 55, 52, 123, 60, 63, 49, '17/03/2022', '03:46 pm'),
(14, 115, 60, 57, 52, 123, 60, 65, 49, '17/03/2022', '04:45 pm'),
(15, 115, 60, 55, 192, 123, 60, 123, 205, '25/03/2022', '11:06 am'),
(16, 115, 60, 55, 52, 123, 60, 123, 49, '25/03/2022', '11:08 am'),
(17, 115, 60, 55, 52, 123, 60, 123, 49, '25/03/2022', '12:09 pm'),
(18, 115, 81, 34, 70, 123, 81, 123, 66, '12/09/2022', '09:18 am');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `Dept_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Dept_Name` varchar(100) NOT NULL,
  `Dept_Floor` varchar(30) NOT NULL,
  PRIMARY KEY (`Dept_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_ID`, `Dept_Name`, `Dept_Floor`) VALUES
(19, 'ADMINISTRATION', '6'),
(20, 'INFORMATION TECHNOLOGY', '6'),
(21, 'FINANCE', '6'),
(22, 'PR & MARKETING', '6'),
(23, 'HUMAN RESOURCE', '6'),
(24, 'NURSING ADMIN', '6'),
(25, 'QUALITY', '6'),
(26, 'CLINICAL SURVEY', '6'),
(27, 'RISK SERVICES', '6'),
(28, 'SURGICAL WARD', '5'),
(29, 'MEDICAL WARD ', '5'),
(30, 'MATERNITY WARD', '3A'),
(31, 'PAEDIATRIC WARD ', '3A'),
(32, 'SPECIALIST CLINIC LV 3', '3'),
(33, 'OPERATION THEATER', '3'),
(34, 'ENDOSCOPY / DAY WARD', '3'),
(35, 'ICU / HDU', '3'),
(36, 'SPECIALIST CLINIC LV 2', '2'),
(37, 'LABORATORY', '2'),
(38, 'SPD/CATHLAB', '2'),
(39, 'WELLNESS', '2'),
(40, 'DIALYSIS', '2'),
(41, 'PHYSIO / REHAB', '2'),
(42, 'CONFERENCE ROOM', '2'),
(43, 'SPECIALIST CLINIC LV 1', '1'),
(44, 'DID', '1'),
(45, 'DIET', '1'),
(46, 'MEDICAL RECORD ', '1'),
(47, 'PHARMACY ', '1'),
(48, 'CREDIT CONTROL', '1'),
(49, 'GL/ ADMISSION', '1'),
(50, 'ACCIDENT & EMERGENCY', '1'),
(51, 'CUSTOMER SERVICE ', '1'),
(52, 'BUSINESS OFFICE', '1'),
(53, 'MAINTENANCE & ENGINEERING', '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Doctor_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Doctor_Name` varchar(80) NOT NULL,
  `Doctor_Specialist` varchar(254) NOT NULL,
  PRIMARY KEY (`Doctor_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `Doctor_Name`, `Doctor_Specialist`) VALUES
(1, 'Dr Zurina Zainal Abidin', 'Ophthalmology'),
(2, 'Dr Ahmad Fauzi', 'Ophthalmology'),
(3, 'Dr Abdul Yazid ', 'Orthopaedic '),
(4, 'Dr Sri Subanesh ', 'Orthopaedic '),
(5, 'Dr Syed Ahmad Faisal', 'Orthopaedic '),
(6, 'Dr Zanariah ', 'Anaesthetic '),
(7, 'Dr Nik Marzuki', 'Anaesthetic '),
(8, 'Dr Rosliza', 'Anaesthetic '),
(9, 'Dr Tham Li Yeen', 'Anaesthetic '),
(10, 'Dr Asmah Mastor', 'Obstetric & Gynaecology'),
(11, 'Dr Vijayavel', 'Obstetric & Gynaecology'),
(12, 'Datin Dr Lilian', 'Obstetric & Gynaecology'),
(13, 'Dr Anil K Radhakrishnan', 'Gastroenterologist'),
(14, 'Dr Manohar ', 'General Surgeon'),
(15, 'Dr Husin Marijan', 'General Surgeon'),
(16, 'Dr Hue Teck Lee', 'General Surgeon'),
(17, 'Dr Jee Shir Li ', 'General Surgeon'),
(18, 'Dr Raymond ', 'Chest Physician'),
(19, 'Dr Ravinderjit Singh', 'Cardiology'),
(20, 'Dr Lim Eu Jin', 'Cardiology'),
(21, 'Dr Lim Choo Gee', 'Physician'),
(22, 'Dr Vincent Tan', 'ENT'),
(23, 'Dr Mazita ', 'ENT'),
(24, 'Dr Riana ', 'ENT'),
(25, 'Dr Ooi Hooi Leng', 'Paediatrics'),
(26, 'Dr Rosni', 'Paediatrics'),
(27, 'Dr Vanitha', 'Paediatrics'),
(28, 'Dr Thi Ha Thun', 'Urology'),
(29, 'Dr Khor Boon Pin ', 'Gastroenterologist');

-- --------------------------------------------------------

--
-- Table structure for table `otstat`
--

DROP TABLE IF EXISTS `otstat`;
CREATE TABLE IF NOT EXISTS `otstat` (
  `Otstat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Otstat_Room` varchar(25) NOT NULL,
  `Otstat_Date` varchar(25) NOT NULL,
  `Otstat_Time` varchar(25) NOT NULL,
  `Otstat_status` varchar(54) NOT NULL,
  `FK_Otstat_Doctor_ID` int(50) NOT NULL,
  PRIMARY KEY (`Otstat_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otstat`
--

INSERT INTO `otstat` (`Otstat_ID`, `Otstat_Room`, `Otstat_Date`, `Otstat_Time`, `Otstat_status`, `FK_Otstat_Doctor_ID`) VALUES
(2, 'OT2', '28/02/2022', '12:31 pm', 'completed', 1),
(3, 'OT3', '28/02/2022', '12:49 pm', 'completed', 2),
(4, 'OT1', '28/02/2022', '12:49 pm', 'completed', 1),
(5, 'OT1', '11/03/2022', '08:40 am', 'completed', 2),
(6, 'OT2', '11/03/2022', '11:00 am', 'completed', 13),
(7, 'OT3', '11/03/2022', '11:01 am', 'completed', 10),
(8, 'OT1', '11/03/2022', '11:01 am', 'completed', 16),
(9, 'OT1', '11/03/2022', '11:01 am', 'completed', 21),
(10, 'OT1', '11/03/2022', '11:00 am', 'completed', 2),
(11, 'OT1', '11/03/2022', '11:22 am', 'completed', 12),
(12, 'OT4', '11/03/2022', '11:23 am', 'completed', 3),
(13, 'OT2', '11/03/2022', '11:23 am', 'completed', 3),
(14, 'OT3', '11/03/2022', '11:23 am', 'completed', 23),
(15, 'OT1', '25/03/2022', '12:20 pm', 'completed', 3),
(16, 'OT2', '17/03/2022', '04:02 pm', 'completed', 10),
(17, 'OT3', '25/03/2022', '12:20 pm', 'completed', 14),
(18, 'OT4', '25/03/2022', '12:20 pm', 'completed', 29),
(19, 'OT2', '31/03/2022', '11:51 am', 'completed', 10),
(20, 'OT3', '31/03/2022', '11:53 am', 'completed', 10),
(21, 'OT2', '31/03/2022', '11:53 am', 'completed', 2),
(22, 'OT2', '31/03/2022', '11:53 am', 'completed', 12),
(23, 'OT4', '31/03/2022', '11:53 am', 'completed', 17);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

DROP TABLE IF EXISTS `phone`;
CREATE TABLE IF NOT EXISTS `phone` (
  `Phone_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Phone_Name` varchar(50) NOT NULL,
  `Phone_Designation` varchar(40) NOT NULL,
  `Phone_Ext` varchar(40) NOT NULL,
  `Phone_Dial` varchar(40) NOT NULL,
  `Phone_email` varchar(50) NOT NULL,
  `FK_Department` int(40) NOT NULL,
  PRIMARY KEY (`Phone_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`Phone_ID`, `Phone_Name`, `Phone_Designation`, `Phone_Ext`, `Phone_Dial`, `Phone_email`, `FK_Department`) VALUES
(1, 'Ameirul Mustaqim', 'IT Officer', '7954', '1064', 'itservices@kpjklang.com', 20),
(2, 'En Aidil Ikram', 'CEO', '7889', '2000', 'aidil@kpjhealth.com', 19),
(3, 'Tengku Syakir', 'Finance Executive', '7950', 'N/A', 'tmsyakir@kpjklang.com', 21),
(4, 'Farah Nor Fairus', 'Senior Clerk', '7958', 'N/A', 'farahar@kpjklang.com', 22),
(5, 'Pn Siti Norazwani', 'PA CEO', '7885', '-', 'snazwani@kpjklang.com', 19),
(6, 'Siti Salimah ', 'Admin Executive', '7884', '-', 'ssalimah@kpjlang.com', 19),
(7, 'Nur Fatin Nabiha', 'Senior Nursing Clerk ', '7884', 'N/A', 'nabiha@kpjklang.com', 24),
(8, 'N/A', 'Operation Manager', 'N/A', 'N/A', 'N/A', 19),
(9, 'Sulaiman ', 'Despatch', '-', '1080', '-', 19),
(10, 'Mohd Faizal', 'Senior Marketing Executive', '7723', 'N/A', 'mfaizal@kpjklang.com', 22),
(12, 'Zulaikha', 'Marketing Executive', '7958', 'N/A', 'zulaikaj@kpjklang.com', 22),
(13, 'Mohamad Hafiz', 'Graphic Designer', '7761', 'N/A', 'mhafiza@kpjklang.com', 22),
(14, 'Pn Norfazidah binti Bawadi', 'Accountant', '7953', '2004', 'norfazidah@kpjhealth.com.my', 21),
(15, 'Lim Woei Shan', 'Account Executive', '7948', 'N/A', 'limws@kpjklang.com', 21),
(16, 'Che Masheta ', 'Officer', '7951', 'N/A', 'account@kpjklang.com', 21),
(17, 'Sainatus Safiyah', 'Account Clerk', '7951', 'N/A', 'acc@kpjklang.com', 21),
(18, 'Pn Rohadilla', 'Clinical Survey Officer ', 'N/A', 'N/A', 'rohadillah@kpjklang.com', 26),
(19, 'En Mohammad Firdaus', 'Quality In Charge', '7852', 'N/A', 'firdausbh@kpjklang.com', 25),
(20, 'Pn Epah ', 'HOS Human Resource', '7944', 'N/A', 'epahh@kpjklang.com', 23),
(21, 'Zahanif', 'HR Executive', '7946', 'N/A', 'zahanif@kpjklang.com', 23),
(22, 'Azila Laili', 'HR Executive', '7945', 'N/A', 'azilalaili@kpjklang.com', 23),
(23, 'Rosasmira', 'HR Officer', '7943', 'N/A', 'tms@kpjklang.com', 23),
(24, 'Pn Nor Asyikin', 'HOS IT & Medical Record', 'N/A', '1063', 'asyiknab@kpjklang.com', 20),
(25, 'Nur Afiqah', 'IT Executive', '7955', '1066', 'itservices@kpjklang.com', 20),
(182, 'Muhammad Naim Nordin', 'IT ', '7954', '1065', 'itservices@kpjklang.com', 20),
(27, 'Pn Ridzwani ', 'CNO', '7940', '2003', 'ridzwanis@kpjklang.com', 24),
(28, 'Pn Neelavani', 'DCNO', '7701', '2005', 'neelavani@kpjklang.com', 24),
(29, 'Nur Shahida', 'Infection Control Nurse', 'N/A', 'N/A', 'nshahida@kpjklang.cpm', 24),
(30, 'Pn Suhaili', 'Risk Officer', 'N/A', 'N/A', 'ssuhaili@kpjklang.com', 27),
(31, 'Sr Ivanna Izzati', 'Unit Manager', '7970', '1047', 'ivanna@kpjklang.com', 28),
(32, 'Counter Nurse A ', 'N/A', '7967 / 7966', 'N/A', 'klgshsurg@kpjklang.com', 28),
(33, 'Counter Nurse B ', 'N/A', '7964 / 7968', 'N/A', 'klgshsurg@kpjklang.com', 28),
(34, 'B/O Counter', 'Ward Clerk', '7802', 'N/A', 'N/A', 28),
(35, 'Sr Sharil Husna', 'Unit Manager', '7919', 'N/A', 'nshusna@kpjklang.com', 29),
(36, 'Counter Nurse A ', 'N/A', '7960 / 7961', 'N/A', 'klgshmed@kpjklang.com', 29),
(37, 'Counter Nurse B ', 'N/A', '7963 / 7962', 'N/A', 'klgshmed@kpjklang.com', 29),
(38, 'B/O Counter', 'Ward Clerk', '7997 / 7735', 'N/A', 'N/A', 29),
(39, 'Rohana', 'Ward In Charge', '7931', 'N/A', 'rohanaa@kpjklang.com', 30),
(40, 'Counter Nurse ', 'N/A', '7933 7934', 'N/A', 'klgshmat@kpjklang.com', 30),
(41, 'B/O Counter', 'Ward Clerk', '7810', 'N/A', 'N/A', 30),
(42, 'Sr Nur Aqilah', 'Unit Manager', '7930', '1051', 'aqilahr@kpjklang.com', 31),
(43, 'Counter Nurse', 'N/A', '7928 / 7929', 'N/A', 'klgshpaed@kpjklang.com', 31),
(44, 'B/O Counter', 'N/A', '7927', 'N/A', 'N/A', 31),
(45, 'Datin Dr Lilian', 'OBS & Gynae', '6901	', '1130', 'drlilian@kpjklang.com', 32),
(46, 'Fathirah', 'Clinic Assistant (Dr Lilian)', '7901', 'N/A', 'izzatulf@kpjklang.com', 32),
(47, 'Dr Vijay', 'OBS & Gynae', '6902', '1115', 'drvijay@kpjklang.com', 32),
(48, 'Dr Raymond', 'Physicians', 'N/A', 'N/A', 'drraymond@kpjklang.com', 32),
(49, 'Rosmafazila', 'Clinic Assistant (Dr Vijay)', '7902', 'N/A', 'rosmafazila@kpjklang.com', 32),
(50, 'Sharmala Priya', 'Clinic Assistant (Dr Raymond)', 'N/A', 'N/A', 'Sharmala@kpjklang.com', 32),
(51, 'Dr Rosni', 'Paediatrician', '6903', '1113', 'drrosni@kpjklang.com', 32),
(52, 'Safurah', 'Clinic Assistant (Dr Rosni)', '7903', 'N/A', 'safurah@kpjklang.com', 32),
(53, 'Dr Ooi Hooi Leng', 'Paediatrician', '6904', '1125', 'drooi@kpjklang.com', 32),
(54, 'Asyuha', 'Clinic Assistant (Dr Ooi)', '7904', 'N/A', 'asyuhans@kpjklang.com', 32),
(55, 'Dr Vanitha', 'Paediatrician', '6909', '1136', 'drvanitha@kpjklang.com', 32),
(56, 'Noor Shawaiti', 'Clinic Assistant (Dr Vanitha)', '7909', 'N/A', 'shawaiti@kpjklang.com', 32),
(57, 'Sr Nurziana', 'Unit Manager', '7918', '1058', 'nurziana@kpjklang.com', 33),
(58, 'Counter Nurse ', 'SRN', '7910  7912', 'N/A', 'klgshot@kpjklang.com', 33),
(59, 'Counter Nurse (Surg)', 'SRN', '7913  7914', 'N/A', 'N/A', 33),
(60, 'CSSD (Inside)', 'SRN', '7924', 'N/A', 'N/A', 33),
(61, 'CSSD (Outside)', 'SRN', '7915', 'N/A', 'N/A', 33),
(62, 'Dr Nik Marzuki', 'Anaesthetic', '7883', '1106', 'drmarzuki@kpjklang.com', 33),
(63, 'Dr Zanariah', 'Anaesthetic', '7890', '1107', 'drzanariah@kpjklang.com', 33),
(64, 'Dr Rosliza', 'Anaesthetic', '7890', '1129', 'drrosliza@kpjklang.com', 33),
(65, 'Dr Tham Li Yeen', 'Anaesthetic', 'N/A', 'N/A', 'drthamly@kpjklang.com', 33),
(66, 'Sr Thevi', 'Unit Manager', '7763', '1050', 'theviloka@kpjklang.com', 34),
(67, 'Counter Nurse ', 'SRN', '7916', 'N/A', 'klgshdayward@kpjklang.com', 34),
(68, 'B/O Counter', 'Ward Clerk', '7917', 'N/A', 'N/A', 34),
(69, 'Endoscopy Room', 'SRN', '7923', 'N/A', 'N/A', 34),
(70, 'Sr Maryani', 'Unit Manager', '7922', '1062', 'maryani@kpjklang.com', 35),
(71, 'Counter Nurse(ICU)', 'SRN', '7920', 'N/A', 'klgshicu@kpjklang.com', 35),
(72, 'Counter Nurse (HDU)', 'SRN', '7921', 'N/A', 'N/A', 35),
(73, 'Conference Room ', 'N/A', '7972/7027', 'N/A', 'N/A', 42),
(74, 'En Amirul Faiz ', 'HOS Physio', '7893', '1081', 'amirulf@kpjklang.com', 41),
(75, 'Counter', 'Physiotherapist', '7891', 'N/A', 'klgshphysio@kpjklang.com', 41),
(76, 'Sr Liyana', 'Unit Manager', '7971', 'N/A', 'liyanam@kpjklang.com', 40),
(77, 'Counter Nurse', 'SRN', '7895 / 7892 / 7991', 'N/A', 'klgshdialysis@kpjklang.com', 40),
(78, 'BO Counter', 'Cashier', '7894', 'N/A', 'N/A', 40),
(79, 'Dr Shobana', 'HOS Wellness', '7854', 'N/A', 'drshobana@kpjklang.com', 39),
(80, 'Rozina / Rima', 'Senior Clerk ', '7826', 'N/A', 'klgshwellness@kpjklang.com', 39),
(81, 'Wellness Doc Room', 'Visiting Doctor', '7882/7877', 'N/A', 'N/A', 39),
(82, 'Sr Siti Rusyati', 'Unit Manager', '7755', 'N/A', 'sitirusyati@kpjklang.com', 38),
(83, 'Cathlab', 'SRN', '7755', 'N/A', 'N/A', 38),
(84, 'Treatment Room', 'SRN', '7753', 'N/A', 'N/A', 38),
(85, 'Treadmill Room', 'SRN', '7754', 'N/A', 'N/A', 38),
(86, 'Counter Nurse ', 'SRN', '7887', 'N/A', 'klgshspd@kpjklang.com', 38),
(87, 'ECHO Room', 'SRN', '7756', 'N/A', 'N/A', 38),
(88, 'Pn Siti Meriam', 'HOS Laboratory', '7973', '1059', 'smeriam@kpjklang.com', 37),
(89, 'Counter Lab ', 'Scientist Laboratory', '7897 / 7899', 'N/A', 'N/A', 37),
(90, 'Dr Manohar', 'General Surgeon ', '6873', '1110', 'drmanohar@kpjklang.com', 36),
(91, 'Mahirah ', 'Clinic Assistant (Dr Manohar)', '7973', 'N/A', 'mahirahm@kpjklang.com', 36),
(92, 'Dr Hue Teck Lee', 'Medical Director ', '6872', '1104', 'drhue@kpjklang.com', 36),
(93, 'Dr Husin Marijan', 'General Surgeon ', '6870', '1108', 'drhusin@kpjklang.com', 36),
(94, 'Munah Wazir', 'Clinic Assistant (Dr Hue)', '7872', 'N/A', 'munahw@kpjklang.com', 36),
(95, 'Angelina Tadlip Lim', 'Clinic Assistant (Dr Husin)', '7870', 'N/A', 'angelina@kpjklang.com', 36),
(96, 'Dr Sri Subanesh', 'Ortho Surgeon ', '6867', '1110', 'drsubanesh@kpjklang.com', 36),
(97, 'Siti Syuhadah', 'Clinic Assistant (Dr Sri Subanesh)', '7867', 'N/A', 'ssyuhadah@kpjklang.com', 36),
(98, 'Dr Thi Ha Thun', 'Urologist', '6868', '1121', 'drthi@kpjklang.com', 36),
(99, 'Dr Mazita ', 'ENT', '6865', '1105', 'drmazita@kpjklang.com', 36),
(100, 'Ramizah', 'Clinic Assistant (Dr Mazita)', '7865', 'N/A', 'ramizah@kpjklang.com', 36),
(101, 'Dr Vincent Tan  ', 'ENT', '6864', '1109', 'drvincent@kpjklang.com', 36),
(102, 'Liyana', 'Clinic Assistant (Dr Vincent)', '7864', 'N/A', 'liyanan@kpjklang.com', 36),
(103, 'Dr Fauzi', 'Ophthalmologist', '7942', '1116', 'drfauzi@kpjklang.com', 36),
(104, 'Asmaliza', 'Clinic Assistant (Dr Fauzi)', '7998', 'N/A', 'asmalizai@kpjklang.com', 36),
(105, 'Dr Zurina', 'Ophthalmologist', '7942', '1117', 'drzurina@kpjklang.com', 36),
(106, 'Amylia', 'Clinic Assistant (Dr Zurina)', '7998', 'N/A', 'N/A', 36),
(107, 'Dr Lim Eu Jin', 'Cardiologist', '6875', '1118', 'drlim@kpjklang.com', 36),
(108, 'Hanizah', 'Clinic Assistant (Dr Lim Eu Jin)', '7875', 'N/A', 'hanizahy@kpjklang.com', 36),
(109, 'Dr Ravinderjit Singh ', 'Cardiologist', '6875', '1119', 'drravinder@kpjklang.com', 36),
(112, 'Dr Anil ', 'Physicians', '6859', '1102', 'dranil@kpjklang.com', 43),
(111, 'Nur Amirah', 'Clinic Assistant (Dr Ravinderjit)', '7896', 'N/A', 'nuramirah@kpjklang.com', 36),
(113, 'Syaqirin', 'Clinic Assistant (Dr Anil)', '7859', 'N/A', 'syaqirin@kpjklang.com', 43),
(114, 'Dr Khor Boon Pin', 'Physicians', '6860', '1101', 'drkhor@kpjklang.com', 43),
(115, 'Syaza', 'Clinic Assistant (Dr Khor)', '7860', 'N/A', 'ssyaza@kpjklang.com', 43),
(116, 'Dr Lim Choo Gee', 'Physicians', '6872', '1134', 'drlimcg@kpjklang.com', 43),
(117, 'Fauziah', 'Clinic Assistant (Dr Lim Choo Gee)', '7872', 'N/A', 'yfauziah@kpjklang.com', 43),
(118, 'Dr Asmah Mastor', 'OBS & Gynae', '6861', '1124', 'drasmah@kpjklang.com', 43),
(119, 'Siti Nor Ashikin', 'Clinic Assistant (Dr Asmah)', '7861', 'N/A', 'snorashikin@kpjklang.com', 43),
(120, 'Dr Yazid', 'Ortho Surgeon ', '6881', '1149', 'dryazid@kpjklang.com', 43),
(121, 'Dr Jee Shir Li', 'General Surgeon ', '6832', '1125', 'drjee@kpjklang.com', 43),
(122, 'Siti Noramirah', 'Clinic Assistant (Dr Yazid)', '7881', 'N/A', 'noramirah@kpjklang.com', 43),
(123, 'Noor Aslinda', 'Clinic Assistant (Dr Jee Shir Li)', '7832', 'N/A', 'naslinda@kpjklang.com', 43),
(124, 'En Hafiz ', 'HOS DID', '7840', '1054', 'hafiz@kpjklang.com', 44),
(125, 'Dr Hamzah', 'Radiologist', '7845', '1127', 'drhamzah@kpjklang.com', 44),
(126, 'Dr Anisha', 'Radiologist', '7874', '1148', 'dranisha@kpjklang.com', 44),
(127, 'Counter X-Ray', 'Radiographer', '7843/7844', 'N/A', 'klgshxray@kpjklang.com', 44),
(128, 'On call Room', 'N/A', '7842', 'N/A', 'N/A', 44),
(129, 'MRI', 'N/A', '7841', 'N/A', 'N/A', 44),
(130, 'CT Scan ', 'N/A', '7839', 'N/A', 'N/A', 44),
(131, 'Ms Louisa Low Sin Yee', 'Dietitan ', '7762', '1055', 'lowsy@kpjklang.com', 45),
(132, 'Shahirah', 'Supervisor', '7762', 'N/A', 'klgshdiet@kpjklang.com', 45),
(133, 'Diet Aide Kitchen', 'N/A', '7836', 'N/A', 'N/A', 45),
(134, 'Khadijah', 'Med Record Incharge', '7812', 'N/A', 'khadijahsh@kpjklang.com', 46),
(135, 'Medical Record', 'N/A', '7811', 'N/A', 'medicalrecord@kpjklang.com', 46),
(136, 'Ms Tan win Win', 'HOS Pharmacy', '7850', '2020', 'tanww@kpjklang.com', 47),
(137, 'Pharmacy Counter', 'Outpatient', '7848', 'N/A', 'N/A', 47),
(138, 'Pharmacy Counter', 'Inpatinet', '7849', 'N/A', 'N/A', 47),
(139, 'Pharmacy Room', 'N/A', '7718', 'N/A', 'N/A', 47),
(140, 'Pharmacy Discharge', 'N/A', '7843', 'N/A', 'N/A', 47),
(141, 'Pharmacy Store ', 'N/A', '7853', 'N/A', 'N/A', 47),
(142, 'Pharmacy Counselling', 'N/A', '7847', 'N/A', 'N/A', 47),
(143, 'B/O Counter', 'Cashier', '7846', 'N/A', 'N/A', 47),
(144, 'Hotline Credit Control', 'N/A', 'N/A', '1373', 'N/A', 48),
(145, 'Faruqi', 'CC Executive ', '7823', '1373', 'faruqi@kpjklang.com', 48),
(146, 'Hasrul', 'CC Executive ', '7012', 'N/A', 'mhasrul@kpjklang.com', 48),
(147, 'khairunnajat', 'CC Officer', '7726', '1371', 'N/A', 48),
(148, 'Admission Counter', 'N/A', '7734 / 7724', 'N/A', 'N/A', 49),
(149, 'GL Counter ', 'N/A', '7733/7828', 'N/A', 'N/A', 49),
(150, 'Sr Ramlah', 'Unit Manager', '7818', 'N/A', 'ramlahib@kpjklang.com', 50),
(151, 'Yellow Counter', 'SRN', '7814', 'N/A', 'klgshae@kpjklang.com', 50),
(152, 'Triage Counter', 'SRN', '7819', 'N/A', 'N/A', 50),
(153, 'Emergency Number ', 'N/A', '7999', 'N/A', 'N/A', 50),
(154, 'Hanizman', 'Ambulan Driver', 'N/A', '1085', 'N/A', 50),
(155, 'B/O Counter', 'Cashier', '7822 / 7817', 'N/A', 'N/A', 50),
(156, 'Dr Chalvant', 'Chief Medical Officer ', '7820	', '2010', 'drchalvant@kpjklang.com', 50),
(157, 'Dr Sudha Rawat', 'Medical Officer', '7821', '1152', 'drsudha@kpjklang.com', 50),
(158, 'Dr Nor Aina', 'Medical Officer', '7821', '1151', 'draina@kpjklang.com', 50),
(159, 'Dr Hari Jayaraman', 'Medical Officer', '7821', '1153', 'drhari@kpjklang.com', 50),
(160, 'Dr Muzafariman', 'Medical Officer', '7821', '1154', 'drmuzafar@kpjklang.com', 50),
(161, 'Dr Mohammad Al-Imran ', 'Medical Officer', '7821', '1155', 'drimran@kpjklang.com', 50),
(162, 'Dr Amran ', 'Medical Officer', '7821', '1166', 'dramranm@kpjklang.com', 50),
(163, 'Sr Susila', 'Night Unit Manager', '7818', '1040', 'susila@kpjklang.com', 50),
(164, 'Sr Roslina', 'Night Unit Manager', '7818', '1046', 'roslinaak@kpjklang.com', 50),
(165, 'Ms Siti Raziatul Asura', 'HOS Customer Service', 'N/A', 'N/A', 'asura@kpjklang.com', 51),
(166, 'Receptionist', 'N/A', '7700', 'N/A', 'N/A', 51),
(167, 'Subra ', 'Operator', '0', '1234', 'N/A', 51),
(168, 'Hanna', 'Operator', '0', '1235', 'N/A', 51),
(169, 'Batma', 'Operator', '0', '1440', 'N/A', 51),
(170, 'Faizal', 'Operator', '0', '1111', 'N/A', 51),
(171, 'Subhashini', 'Operator', '0', '1112', 'N/A', 51),
(173, 'Ain Najiha', 'Operator', '0', '1460', 'N/A', 51),
(174, 'Pn Azean ', 'HOS Business Office', 'N/A', 'N/A', 'azeanj@kpjklang.com', 52),
(175, 'Nazatul Shima ', 'Senior ', '7831', 'N/A', 'nazatul@kpjklang.com', 52),
(176, 'Noraini', 'Senior Clerk', '7830', '1067', 'N/A', 52),
(177, 'Hayati', 'Senior Clerk', '7025', 'N/A', 'N/A', 52),
(178, 'Centralized billing ', 'Asst Executive ', '7830/ 2917', 'N/A', 'N/A', 52);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
