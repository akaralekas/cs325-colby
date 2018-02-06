--
-- Table structure for table `Countries`
--

DROP TABLE IF EXISTS `CountriesSmall`;
CREATE TABLE `CountriesSmall` (
  `code` char(3) NOT NULL default '',
  `name` char(52) NOT NULL default '',
  `continent` enum('Asia','Europe','North America','Africa','Oceania','Antarctica','South America') NOT NULL default 'Asia',
  `region` char(26) NOT NULL default '',
  `surface_area` float(10,2) NOT NULL default '0.00',
  `independace_year` smallint(6) default NULL,
  `population` int(11) NOT NULL default '0',
  `life_expectancy` float(3,1) default NULL,
  `gnp` float(10,2) default NULL,
  `gnp_old` float(10,2) default NULL,
  `local_name` char(45) NOT NULL default '',
  `government_form` char(45) NOT NULL default '',
  `head_of_state` char(60) default NULL,
  `capital` int(11) default NULL,
  `code2` char(2) NOT NULL default '',
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Countries`
--

LOCK TABLES `CountriesSmall` WRITE;
/*!40000 ALTER TABLE `CountriesSmall` DISABLE KEYS */;
INSERT INTO `CountriesSmall` VALUES ('GBR','United Kingdom','Europe','British Islands',242900.00,1066,59623400,77.7,1378330.00,1296830.00,'United Kingdom','Constitutional Monarchy','Elisabeth II',456,'GB'),('VGB','Virgin Islands, British','North America','Caribbean',151.00,NULL,21000,75.4,612.00,573.00,'British Virgin Islands','Dependent Territory of the UK','Elisabeth II',537,'VG'),('BRN','Brunei','Asia','Southeast Asia',5765.00,1984,328000,73.6,11705.00,12460.00,'Brunei Darussalam','Monarchy (Sultanate)','Haji Hassan al-Bolkiah',538,'BN'),('BGR','Bulgaria','Europe','Eastern Europe',110994.00,1908,8190900,70.9,12178.00,10169.00,'Balgarija','Republic','Petar Stojanov',539,'BG'),('BFA','Burkina Faso','Africa','Western Africa',274000.00,1960,11937000,46.7,2425.00,2201.00,'Burkina Faso','Republic','Blaise Compaoré',549,'BF'),('BDI','Burundi','Africa','Eastern Africa',27834.00,1962,6695000,46.2,903.00,982.00,'Burundi/Uburundi','Republic','Pierre Buyoya',552,'BI'),('CYM','Cayman Islands','North America','Caribbean',264.00,NULL,38000,78.9,1263.00,1186.00,'Cayman Islands','Dependent Territory of the UK','Elisabeth II',553,'KY'),('CHL','Chile','South America','South America',756626.00,1810,15211000,75.7,72949.00,75780.00,'Chile','Republic','Ricardo Lagos Escobar',554,'CL'),('AUT','Austria','Europe','Western Europe',83859.00,1918,8091800,77.7,211860.00,206025.00,'Österreich','Federal Republic','Thomas Klestil',1523,'AT'),('THA','Thailand','Asia','Southeast Asia',513115.00,1350,61399000,68.6,116416.00,153907.00,'Prathet Thai','Constitutional Monarchy','Bhumibol Adulyadej',3320,'TH'),('TGO','Togo','Africa','Western Africa',56785.00,1960,4629000,54.7,1449.00,1400.00,'Togo','Republic','Gnassingbé Eyadéma',3332,'TG'),('TKL','Tokelau','Oceania','Polynesia',12.00,NULL,2000,NULL,0.00,NULL,'Tokelau','Nonmetropolitan Territory of New Zealand','Elisabeth II',3333,'TK'),('TON','Tonga','Oceania','Polynesia',650.00,1970,99000,67.9,146.00,170.00,'Tonga','Monarchy','Taufa\'ahau Tupou IV',3334,'TO'),('TTO','Trinidad and Tobago','North America','Caribbean',5130.00,1962,1295000,68.0,6232.00,5867.00,'Trinidad and Tobago','Republic','Arthur N. R. Robinson',3336,'TT'),('TCD','Chad','Africa','Central Africa',1284000.00,1960,7651000,50.5,1208.00,1102.00,'Tchad/Tshad','Republic','Idriss Déby',3337,'TD'),('CZE','Czech Republic','Europe','Eastern Europe',78866.00,1993,10278100,74.5,55017.00,52037.00,'¸esko','Republic','Václav Havel',3339,'CZ'),('TUN','Tunisia','Africa','Northern Africa',163610.00,1956,9586000,73.7,20026.00,18898.00,'Tunis/Tunisie','Republic','Zine al-Abidine Ben Ali',3349,'TN'),('TUR','Turkey','Asia','Middle East',774815.00,1923,66591000,71.0,210721.00,189122.00,'Türkiye','Republic','Ahmet Necdet Sezer',3358,'TR'),('NCL','New Caledonia','Oceania','Melanesia',18575.00,NULL,214000,72.8,3563.00,NULL,'Nouvelle-Calédonie','Nonmetropolitan Territory of France','Jacques Chirac',3493,'NC'),('NZL','New Zealand','Oceania','Australia and New Zealand',270534.00,1907,3862000,77.8,54669.00,64960.00,'New Zealand/Aotearoa','Constitutional Monarchy','Elisabeth II',3499,'NZ');
/*!40000 ALTER TABLE `Countries` ENABLE KEYS */;
UNLOCK TABLES;
