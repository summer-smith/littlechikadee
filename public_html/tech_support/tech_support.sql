-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2015 at 10:23 AM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techsupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
CREATE TABLE IF NOT EXISTS `administrators` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`username`, `password`) VALUES
('admin', 'sesame'),
('joel', 'sesame');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `countryCode` char(2) NOT NULL,
  `countryName` varchar(20) NOT NULL,
  PRIMARY KEY (`countryCode`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countryCode`, `countryName`) VALUES
('AF', 'Afghanistan'),
('AX', 'Aland Islands'),
('AL', 'Albania'),
('DZ', 'Algeria'),
('AS', 'American Samoa'),
('AD', 'Andorra'),
('AO', 'Angola'),
('AI', 'Anguilla'),
('AQ', 'Antarctica'),
('AG', 'Antigua and Barbuda'),
('AR', 'Argentina'),
('AM', 'Armenia'),
('AW', 'Aruba'),
('AU', 'Australia'),
('AT', 'Austria'),
('AZ', 'Azerbaijan'),
('BS', 'Bahamas, The'),
('BH', 'Bahrain'),
('BD', 'Bangladesh'),
('BB', 'Barbados'),
('BY', 'Belarus'),
('BE', 'Belgium'),
('BZ', 'Belize'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BT', 'Bhutan'),
('BO', 'Bolivia'),
('BA', 'Bosnia and Herzegovi'),
('BW', 'Botswana'),
('BV', 'Bouvet Island'),
('BR', 'Brazil'),
('IO', 'British Indian Ocean'),
('BN', 'Brunei Darussalam'),
('BG', 'Bulgaria'),
('BF', 'Burkina Faso'),
('BI', 'Burundi'),
('KH', 'Cambodia'),
('CM', 'Cameroon'),
('CA', 'Canada'),
('CV', 'Cape Verde'),
('KY', 'Cayman Islands'),
('CF', 'Central African Repu'),
('TD', 'Chad'),
('CL', 'Chile'),
('CN', 'China'),
('CX', 'Christmas Island'),
('CC', 'Cocos (Keeling) Isla'),
('CO', 'Colombia'),
('KM', 'Comoros'),
('CG', 'Congo'),
('CD', 'Congo, The Democrati'),
('CK', 'Cook Islands'),
('CR', 'Costa Rica'),
('CI', 'Cote D''ivoire'),
('HR', 'Croatia'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DK', 'Denmark'),
('DJ', 'Djibouti'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('EC', 'Ecuador'),
('EG', 'Egypt'),
('SV', 'El Salvador'),
('GQ', 'Equatorial Guinea'),
('ER', 'Eritrea'),
('EE', 'Estonia'),
('ET', 'Ethiopia'),
('FK', 'Falkland Islands - M'),
('FO', 'Faroe Islands'),
('FJ', 'Fiji'),
('FI', 'Finland'),
('FR', 'France'),
('GF', 'French Guiana'),
('PF', 'French Polynesia'),
('TF', 'French Southern Terr'),
('GA', 'Gabon'),
('GM', 'Gambia, The'),
('GE', 'Georgia'),
('DE', 'Germany'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GR', 'Greece'),
('GL', 'Greenland'),
('GD', 'Grenada'),
('GP', 'Guadeloupe'),
('GU', 'Guam'),
('GT', 'Guatemala'),
('GG', 'Guernsey'),
('GN', 'Guinea'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HT', 'Haiti'),
('HM', 'Heard Island and the'),
('VA', 'Holy See'),
('HN', 'Honduras'),
('HK', 'Hong Kong'),
('HU', 'Hungary'),
('IS', 'Iceland'),
('IN', 'India'),
('ID', 'Indonesia'),
('IQ', 'Iraq'),
('IE', 'Ireland'),
('IM', 'Isle Of Man'),
('IL', 'Israel'),
('IT', 'Italy'),
('JM', 'Jamaica'),
('JP', 'Japan'),
('JE', 'Jersey'),
('JO', 'Jordan'),
('KZ', 'Kazakhstan'),
('KE', 'Kenya'),
('KI', 'Kiribati'),
('KR', 'Korea, Republic Of'),
('KW', 'Kuwait'),
('KG', 'Kyrgyzstan'),
('LA', 'Lao People''s Democra'),
('LV', 'Latvia'),
('LB', 'Lebanon'),
('LS', 'Lesotho'),
('LR', 'Liberia'),
('LY', 'Libya'),
('LI', 'Liechtenstein'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('MO', 'Macao'),
('MK', 'Macedonia, The Forme'),
('MG', 'Madagascar'),
('MW', 'Malawi'),
('MY', 'Malaysia'),
('MV', 'Maldives'),
('ML', 'Mali'),
('MT', 'Malta'),
('MH', 'Marshall Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MU', 'Mauritius'),
('YT', 'Mayotte'),
('MX', 'Mexico'),
('FM', 'Micronesia, Federate'),
('MD', 'Moldova, Republic Of'),
('MC', 'Monaco'),
('MN', 'Mongolia'),
('ME', 'Montenegro'),
('MS', 'Montserrat'),
('MA', 'Morocco'),
('MZ', 'Mozambique'),
('MM', 'Myanmar'),
('NA', 'Namibia'),
('NR', 'Nauru'),
('NP', 'Nepal'),
('NL', 'Netherlands'),
('AN', 'Netherlands Antilles'),
('NC', 'New Caledonia'),
('NZ', 'New Zealand'),
('NI', 'Nicaragua'),
('NE', 'Niger'),
('NG', 'Nigeria'),
('NU', 'Niue'),
('NF', 'Norfolk Island'),
('MP', 'Northern Mariana Isl'),
('NO', 'Norway'),
('OM', 'Oman'),
('PK', 'Pakistan'),
('PW', 'Palau'),
('PS', 'Palestinian Territor'),
('PA', 'Panama'),
('PG', 'Papua New Guinea'),
('PY', 'Paraguay'),
('PE', 'Peru'),
('PH', 'Philippines'),
('PN', 'Pitcairn'),
('PL', 'Poland'),
('PT', 'Portugal'),
('PR', 'Puerto Rico'),
('QA', 'Qatar'),
('RE', 'Reunion'),
('RO', 'Romania'),
('RU', 'Russian Federation'),
('RW', 'Rwanda'),
('BL', 'Saint Barthelemy'),
('SH', 'Saint Helena'),
('KN', 'Saint Kitts and Nevi'),
('LC', 'Saint Lucia'),
('MF', 'Saint Martin'),
('PM', 'Saint Pierre and Miq'),
('VC', 'Saint Vincent and Th'),
('WS', 'Samoa'),
('SM', 'San Marino'),
('ST', 'Sao Tome and Princip'),
('SA', 'Saudi Arabia'),
('SN', 'Senegal'),
('RS', 'Serbia'),
('SC', 'Seychelles'),
('SL', 'Sierra Leone'),
('SG', 'Singapore'),
('SK', 'Slovakia'),
('SI', 'Slovenia'),
('SB', 'Solomon Islands'),
('SO', 'Somalia'),
('ZA', 'South Africa'),
('GS', 'South Georgia and th'),
('ES', 'Spain'),
('LK', 'Sri Lanka'),
('SR', 'Suriname'),
('SJ', 'Svalbard and Jan May'),
('SZ', 'Swaziland'),
('SE', 'Sweden'),
('CH', 'Switzerland'),
('TW', 'Taiwan'),
('TJ', 'Tajikistan'),
('TZ', 'Tanzania, United Rep'),
('TH', 'Thailand'),
('TL', 'Timor-leste'),
('TG', 'Togo'),
('TK', 'Tokelau'),
('TO', 'Tonga'),
('TT', 'Trinidad and Tobago'),
('TN', 'Tunisia'),
('TR', 'Turkey'),
('TM', 'Turkmenistan'),
('TC', 'Turks and Caicos Isl'),
('TV', 'Tuvalu'),
('UG', 'Uganda'),
('UA', 'Ukraine'),
('AE', 'United Arab Emirates'),
('GB', 'United Kingdom'),
('US', 'United States'),
('UM', 'United States Minor '),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VU', 'Vanuatu'),
('VE', 'Venezuela'),
('VN', 'Vietnam'),
('VG', 'Virgin Islands, Brit'),
('VI', 'Virgin Islands, U.S.'),
('WF', 'Wallis and Futuna'),
('EH', 'Western Sahara'),
('YE', 'Yemen'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postalCode` varchar(20) NOT NULL,
  `countryCode` char(2) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`customerID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1119 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `lastName`, `address`, `city`, `state`, `postalCode`, `countryCode`, `phone`, `email`, `password`) VALUES
(1002, 'Kelly', 'Irvin', 'PO Box 96621', 'Washington', 'DC', '20090', 'US', '(301) 555-8950', 'kelly@example.com', 'sesame'),
(1004, 'Kenzie', 'Quinn', '1990 Westwood Blvd Ste 260', 'Los Angeles', 'CA', '90025', 'US', '(800) 555-8725', 'kenzie@jobtrak.com', 'sesame'),
(1006, 'Anton', 'Mauro', '3255 Ramos Cir', 'Sacramento', 'CA', '95827', 'US', '(916) 555-6670', 'amauro@yahoo.org', 'sesame'),
(1008, 'Kaitlyn', 'Anthoni', 'Box 52001', 'San Francisco', 'CA', '94152', 'US', '(800) 555-6081', 'kanthoni@pge.com', 'sesame'),
(1010, 'Kendall', 'Mayte', 'PO Box 2069', 'Fresno', 'CA', '93718', 'US', '(559) 555-9999', 'kmayte@fresno.ca.gov', 'sesame'),
(1012, 'Marvin', 'Quintin', '4420 N. First Street, Suite 108', 'Fresno', 'CA', '93726', 'US', '(559) 555-9586', 'marvin@expedata.com', 'sesame'),
(1016, 'Derek', 'Chaddick', '1952 "H" Street', 'Fresno', 'CA', '93718', 'US', '(559) 555-3005', 'dChaddick@fresnophoto.com', 'sesame'),
(1017, 'Malia', 'Marques', '7700 Forsyth', 'St Louis', 'MO', '63105', 'US', '(314) 555-8834', 'malia@gmail.com', 'sesame'),
(1018, 'Emily', 'Evan', '1555 W Lane Ave', 'Columbus', 'OH', '43221', 'US', '(614) 555-4435', 'Emily@MicroCenter.com', 'sesame'),
(1019, 'Alexandro', 'Alexis', '3711 W Franklin', 'Fresno', 'CA', '93706', 'US', '(559) 555-2993', 'alal@yaleindustries.com', 'sesame'),
(1023, 'Ingrid', 'Neil', '12 Daniel Road', 'Fairfield', 'NJ', '07004', 'US', '(201) 555-9742', 'Ingrid@richadvertizing.com', 'sesame'),
(1026, 'Eileen', 'Lawrence', '1483 Chain Bridge Rd, Ste 202', 'Mclean', 'VA', '22101', 'US', '(770) 555-9558', 'eLawrence@ecomm.com', 'sesame'),
(1027, 'Marjorie', 'Essence', 'PO Box 31', 'East Brunswick', 'NJ', '08810', 'US', '(800) 555-8110', 'messence@hotmail.com', 'sesame'),
(1029, 'Trentin', 'Camron', 'PO Box 61000', 'San Francisco', 'CA', '94161', 'US', '(800) 555-4426', 'tCamron@ibm.com', 'sesame'),
(1030, 'Demetrius', 'Hunter', 'PO Box 956', 'Selma', 'CA', '93662', 'US', '(559) 555-1534', 'demetrius@termite.com', 'sesame'),
(1033, 'Thalia', 'Neftaly', '60 Madison Ave', 'New York', 'NY', '10010', 'US', '(212) 555-4800', 'tneftaly@venture.com', 'sesame'),
(1034, 'Harley', 'Myles', 'PO Box 7028', 'St Louis', 'MO', '63177', 'US', '(301) 555-1494', 'harley@cprinting.com', 'sesame'),
(1037, 'Gideon', 'Paris', '1033 N Sycamore Ave.', 'Los Angeles', 'CA', '90038', 'US', '(213) 555-4322', 'gideon@opamp.com', 'sesame'),
(1038, 'Jayda', 'Maxwell', 'PO Box 39046', 'Minneapolis', 'MN', '55439', 'US', '(612) 555-0057', 'jmaxwell@ccredit.com', 'sesame'),
(1040, 'Kristofer', 'Gerald', 'PO Box 40513', 'Jacksonville', 'FL', '32231', 'US', '(800) 555-6041', 'kgerald@naylorpub.com', 'sesame'),
(1045, 'Priscilla', 'Smith', 'Box 1979', 'Marion', 'OH', '43305', 'US', '(800) 555-1669', 'psmith@example.com', 'sesame'),
(1047, 'Brian', 'Griffin', '1150 N Tustin Ave', 'Anaheim', 'CA', '92807', 'US', '(714) 555-9000', 'bgriffin@azteklabel.com', 'sesame'),
(1049, 'Kaylea', 'Cheyenne', '2384 E Gettysburg', 'Fresno', 'CA', '93726', 'US', '(559) 555-0765', 'kaylea@yahoo.com', 'sesame'),
(1050, 'Kayle', 'Misael', 'PO Box 95857', 'Chicago', 'IL', '60694', 'US', '(800) 555-5811', 'misael@qualityeducation.com', 'sesame'),
(1051, 'Clarence', 'Maeve', 'PO Box 7247-7051', 'Philadelphia', 'PA', '19170', 'US', '(215) 555-8700', 'cmaeve@springhouse.com', 'sesame'),
(1054, 'Jovon', 'Walker', '627 Aviation Way', 'Manhatttan Beach', 'CA', '90266', 'US', '(310) 555-2732', 'jovon@ama.org', 'sesame'),
(1056, 'Nashalie', 'Angelica', '828 S Broadway', 'Tarrytown', 'NY', '10591', 'US', '(800) 555-0037', 'nangelica@aba.org', 'sesame'),
(1063, 'Leroy', 'Aryn', '3502 W Greenway #7', 'Phoenix', 'AZ', '85023', 'US', '(602) 547-0331', 'laryn@gmail.com', 'sesame'),
(1065, 'Anne', 'Braydon', 'PO Box 942', 'Fresno', 'CA', '93714', 'US', '(559) 555-7900', 'anne@gmail.com', 'sesame'),
(1066, 'Leah', 'Colton', '1626 E Street', 'Fresno', 'CA', '93786', 'US', '(559) 555-4442', 'lcolton@fresnobee.com', 'sesame'),
(1067, 'Cesar', 'Arodondo', '4545 Glenmeade Lane', 'Auburn Hills', 'MI', '48326', 'US', '(810) 555-3700', 'arododo@drc.com', 'sesame'),
(1068, 'Rachael', 'Danielson', '353 E Shaw Ave', 'Fresno', 'CA', '93710', 'US', '(559) 555-1704', 'rdanielson@eop.com', 'sesame'),
(1070, 'Salina', 'Edgardo', '6435 North Palm Ave, Ste 101', 'Fresno', 'CA', '93704', 'US', '(559) 555-7070', 'sadgardo@rpc.com', 'sesame'),
(1071, 'Daniel', 'Bradlee', '4 Cornwall Dr Ste 102', 'East Brunswick', 'NJ', '08816', 'US', '(908) 555-7222', 'dbradlee@simondirect.com', 'sesame'),
(1074, 'Quentin', 'Warren', 'PO Box 12332', 'Fresno', 'CA', '93777', 'US', '(559) 555-3112', 'quentin@valprint.com', 'sesame'),
(1080, 'Jillian', 'Clifford', '3250 Spring Grove Ave', 'Cincinnati', 'OH', '45225', 'US', '(800) 555-1957', 'jillian@champion.com', 'sesame'),
(1081, 'Angel', 'Lloyd', 'Department #1872', 'San Francisco', 'CA', '94161', 'US', '(617) 555-0700', 'alloyd@cw.com', 'sesame'),
(1083, 'Jeanette', 'Helena', '4775 E Miami River Rd', 'Cleves', 'OH', '45002', 'US', '(513) 555-3043', 'jhelena@eds.com', 'sesame'),
(1086, 'Luciano', 'Destin', 'P O Box 7126', 'Pasadena', 'CA', '91109', 'US', '(800) 555-7009', 'ldestin@mwp.com', 'sesame'),
(1089, 'Kyra', 'Francis', '4150 W Shaw Ave ', 'Fresno', 'CA', '93722', 'US', '(559) 555-8300', 'kyra@abbey.com', 'sesame'),
(1094, 'Lance', 'Potter', '28210 N Avenue Stanford', 'Valencia', 'CA', '91355', 'US', '(805) 555-0584', 'lpotter@bis.com', 'sesame'),
(1097, 'Jeffrey', 'Smitzen', 'Post Office Box 924', 'New Delhi', '', '110001', 'IN', '91-12345-12345', 'jeffreys@example.com', 'sesame'),
(1098, 'Vance', 'Smith', '9 River Pk Pl E 400', 'Boston', 'MA', '02134', 'US', '(508) 555-8737', 'vsmith@example.com', 'sesame'),
(1100, 'Thom', 'Aaronsen', '7112 N Fresno St Ste 200', 'Fresno', 'CA', '93720', 'US', '(559) 555-8484', 'taaronsen@dgm.com', 'sesame'),
(1112, 'Harold', 'Spivak', '2874 S Cherry Ave', 'Fresno', 'CA', '93706', 'US', '(559) 555-2770', 'harold@propane.com', 'sesame'),
(1113, 'Rachael', 'Bluzinski', 'P.O. Box 860070', 'Pasadena', 'CA', '91186', 'US', '(415) 555-7600', 'rachael@unocal.com', 'sesame'),
(1114, 'Reba', 'Hernandez', 'PO Box 2061', 'Fresno', 'CA', '93718', 'US', '(559) 555-0600', 'rhernandez@yesmed.com', 'sesame'),
(1116, 'Jaime', 'Ronaldsen', '3467 W Shaw Ave #103', 'Fresno', 'CA', '93711', 'US', '(559) 555-8625', 'jronaldsen@zylka.com', 'sesame'),
(1117, 'Violet', 'Beauregard', 'P.O. Box 505820', 'Reno', 'NV', '88905', 'US', '(800) 555-0855', 'vbeauregard@ups.com', 'sesame'),
(1118, 'Charlie', 'Bucket', 'Lodhi Road', 'New Delhi', '', '110003', 'IN', '(800) 555-4091', 'cbucket@yahoo.com', 'sesame');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

DROP TABLE IF EXISTS `incidents`;
CREATE TABLE IF NOT EXISTS `incidents` (
  `incidentID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `techID` int(11) DEFAULT NULL,
  `dateOpened` datetime NOT NULL,
  `dateClosed` datetime DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  PRIMARY KEY (`incidentID`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`incidentID`, `customerID`, `productCode`, `techID`, `dateOpened`, `dateClosed`, `title`, `description`) VALUES
(27, 1010, 'LEAG10', 11, '2014-06-05 00:00:00', '2010-06-06 00:00:00', 'Could not install', 'Media appears to be bad.'),
(28, 1117, 'TRNY20', 11, '2014-06-14 00:00:00', NULL, 'Error importing data', 'Received error message 415 while trying to import data from previous version.'),
(29, 1116, 'DRAFT10', 13, '2014-06-20 00:00:00', NULL, 'Could not install', 'Setup failed with code 104.'),
(30, 1010, 'TEAM10', 14, '2014-06-21 00:00:00', '2010-06-24 00:00:00', 'Error launching program', 'Program fails with error code 510, unable to open database.'),
(31, 1010, 'TRNY20', 14, '2014-06-21 00:00:00', NULL, 'Unable to activate product', 'Customer''s product activation key does not work.'),
(32, 1056, 'TRNY20', 12, '2014-06-24 00:00:00', NULL, 'Product activation error', 'Customer could not activate product because of an invalid product activation code.'),
(34, 1018, 'DRAFT10', 13, '2014-07-02 00:00:00', '2010-07-04 00:00:00', 'Error launching program', 'Program fails with error code 340: Database exceeds size limit.'),
(36, 1065, 'LEAG10', NULL, '2014-07-04 00:00:00', NULL, 'Error adding data', 'Received error message 201 when trying to add records: database must be reorganized.'),
(42, 1097, 'TRNY20', NULL, '2014-07-08 00:00:00', NULL, 'Unable to import data', 'Import command not available for importing data from previous version.'),
(44, 1063, 'LEAG10', NULL, '2014-07-09 00:00:00', NULL, 'Installation error', 'Error during installation: cmd.exe not found.'),
(45, 1089, 'LEAGD10', NULL, '2014-07-09 00:00:00', NULL, 'Problem upgrading from League Scheduler 1.0', 'Program fails with error 303 when trying to install upgrade.'),
(46, 1016, 'TEAM10', NULL, '2014-07-09 00:00:00', NULL, 'Unable to restore data from backup', 'Error 405 encountered while restoring backup: File not found.'),
(47, 1034, 'DRAFT10', NULL, '2014-07-09 00:00:00', NULL, 'Can''t activate product', 'Product activation code invalid.'),
(48, 1049, 'TRNY20', NULL, '2014-07-09 00:00:00', NULL, 'Unable to print brackets', 'Program doesn''t recognize printer.'),
(49, 1083, 'LEAGD10', NULL, '2014-07-10 00:00:00', NULL, 'Can''t start application', 'Error 521 on startup: database must be reorganized.'),
(50, 1116, 'DRAFT10', NULL, '2014-07-10 00:00:00', NULL, 'Error during data file backup', 'Program abends with error 228 during database backup'),
(51, 1067, 'LEAGD10', NULL, '2014-07-10 00:00:00', NULL, 'Error when adding new records', 'Received error 340: database exceeds size limit.'),
(52, 1066, 'TEAM10', NULL, '2014-07-11 00:00:00', NULL, 'Installation problem', 'Customer states that the setup program failed with code 203 during configuration.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productCode` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `version` decimal(18,1) NOT NULL,
  `releaseDate` datetime NOT NULL,
  PRIMARY KEY (`productCode`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productCode`, `name`, `version`, `releaseDate`) VALUES
('DRAFT10', 'Draft Manager 1.0', '1.0', '2012-03-01 00:00:00'),
('DRAFT20', 'Draft Manager 2.0', '2.0', '2014-08-15 00:00:00'),
('LEAG10', 'League Scheduler 1.0', '1.0', '2011-06-01 00:00:00'),
('LEAGD10', 'League Scheduler Deluxe 1.0', '1.0', '2011-09-01 00:00:00'),
('TEAM10', 'Team Manager Version 1.0', '1.0', '2012-06-01 00:00:00'),
('TRNY10', 'Tournament Master Version 1.0', '1.0', '2011-01-01 00:00:00'),
('TRNY20', 'Tournament Master Version 2.0', '2.0', '2013-03-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `customerID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `registrationDate` datetime NOT NULL,
  PRIMARY KEY (`customerID`,`productCode`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- No data for table `registrations`
--



-- --------------------------------------------------------

--
-- Table structure for table `technicians`
--

DROP TABLE IF EXISTS `technicians`;
CREATE TABLE IF NOT EXISTS `technicians` (
  `techID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`techID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=INNODB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `technicians`
--

INSERT INTO `technicians` (`techID`, `firstName`, `lastName`, `email`, `phone`, `password`) VALUES
(11, 'Alison', 'Diaz', 'alison@sportspro.com', '800-555-0443', 'sesame'),
(12, 'Jason', 'Lee', 'jason@sportspro.com', '800-555-0444', 'sesame'),
(13, 'Andrew', 'Wilson', 'awilson@sportspro.com', '800-555-0449', 'sesame'),
(14, 'Gunter', 'Wendt', 'gunter@sportspro.com', '800-555-0400', 'sesame'),
(15, 'Gina', 'Fiori', 'gfiori@sportspro.com', '800-555-0459', 'sesame');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
