-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.50-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema autobuses
--

CREATE DATABASE IF NOT EXISTS autobuses;
USE autobuses;

--
-- Definition of table `autobus`
--

DROP TABLE IF EXISTS `autobus`;
CREATE TABLE `autobus` (
  `asiento` int(10) unsigned NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `ocupado` int(10) unsigned DEFAULT NULL,
  `cuando` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `esta` int(10) unsigned NOT NULL,
  PRIMARY KEY (`asiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autobus`
--

/*!40000 ALTER TABLE `autobus` DISABLE KEYS */;
INSERT INTO `autobus` (`asiento`,`usuario`,`ocupado`,`cuando`,`esta`) VALUES 
 (1,'oscar',1,'2015-02-03 13:06:55',1),
 (2,NULL,0,'2015-02-06 11:22:44',0),
 (3,NULL,0,'2015-02-06 11:22:44',0),
 (4,NULL,0,'2015-02-06 11:22:44',0),
 (5,NULL,0,'2015-02-06 11:22:44',0),
 (6,NULL,0,'2015-02-06 11:22:44',0),
 (7,NULL,0,'2015-02-06 11:22:44',0),
 (8,NULL,0,'2015-02-06 11:22:44',0),
 (9,NULL,0,'2015-02-06 11:22:44',0),
 (10,NULL,0,'2015-02-06 11:22:44',0),
 (11,NULL,0,'2015-02-06 11:22:44',0),
 (12,NULL,0,'2015-02-06 11:22:44',0),
 (13,NULL,0,'2015-02-06 11:22:44',0),
 (14,NULL,0,'2015-02-06 11:22:44',0),
 (15,NULL,0,'2015-02-06 11:22:44',0),
 (16,NULL,0,'2015-02-06 11:22:44',0),
 (17,NULL,0,'2015-02-06 11:22:44',0),
 (18,NULL,0,'2015-02-06 11:22:44',0),
 (19,NULL,0,'2015-02-06 11:22:44',0),
 (20,NULL,0,'2015-02-06 11:22:44',0);
/*!40000 ALTER TABLE `autobus` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usuario` varchar(45) NOT NULL,
  `contra` varchar(45) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usuario`,`contra`) VALUES 
 ('chema','chema'),
 ('oscar','oscar');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
