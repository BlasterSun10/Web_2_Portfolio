-- MariaDB dump 10.19  Distrib 10.5.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u130633821_proyecto
-- ------------------------------------------------------
-- Server version	10.5.16-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Administradores`
--

DROP TABLE IF EXISTS `Administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Administradores` (
  `IDAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAdmin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoAdmin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EdadAdmin` int(11) DEFAULT NULL,
  `TelefonoAdmin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RFCAdmin` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SexoAdmin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FecNacAdmin` date NOT NULL,
  `CorreoEleAdmin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CURPAdmin` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idusuarioad` int(11) NOT NULL,
  PRIMARY KEY (`IDAdmin`),
  KEY `idusuarioad` (`idusuarioad`),
  CONSTRAINT `Administradores_ibfk_1` FOREIGN KEY (`idusuarioad`) REFERENCES `Usuarios` (`IDUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Administradores`
--

LOCK TABLES `Administradores` WRITE;
/*!40000 ALTER TABLE `Administradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `Administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AreasConocimiento`
--

DROP TABLE IF EXISTS `AreasConocimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AreasConocimiento` (
  `IDArea` int(11) NOT NULL AUTO_INCREMENT,
  `NombreArea` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`IDArea`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AreasConocimiento`
--

LOCK TABLES `AreasConocimiento` WRITE;
/*!40000 ALTER TABLE `AreasConocimiento` DISABLE KEYS */;
INSERT INTO `AreasConocimiento` VALUES (1,'Contabilidad y Administración'),(2,'Comunicaciones'),(3,'Construcción y edificación'),(4,'Diseño'),(5,'Derecho y leyes'),(6,'Educación'),(7,'Ingeniería'),(8,'Manufactura'),(9,'Mercadotecnia'),(10,'Salud'),(11,'Tecnología de la Información'),(12,'Zoología');
/*!40000 ALTER TABLE `AreasConocimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Curriculum`
--

DROP TABLE IF EXISTS `Curriculum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Curriculum` (
  `IDcurri` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorreoEle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaNaci` date NOT NULL,
  `Telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trabajo1` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trabajo2` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trabajo3` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdiomaExtra1` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdiomaExtra2` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NivelAcademico` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrabajoAct` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDUsuario` int(11) NOT NULL,
  PRIMARY KEY (`IDcurri`),
  KEY `IDUsuario` (`IDUsuario`),
  CONSTRAINT `Curriculum_ibfk_1` FOREIGN KEY (`IDUsuario`) REFERENCES `Usuarios` (`IDUsu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Curriculum`
--

LOCK TABLES `Curriculum` WRITE;
/*!40000 ALTER TABLE `Curriculum` DISABLE KEYS */;
INSERT INTO `Curriculum` VALUES (2,'Techy','techy@gmail.com','2002-11-04','4448875597','Experto en programación. Hábil en el manejo de office.','Coca','Profesor UPSLP','Mabe','Ingles','Frances','Universitario','Coca-Cola',2),(3,'Ana Karen Cuenca Esquivel','ana@gmail.com','2004-06-25','4448449466','pa que o q?','que te importa','ps ya que','','ingles','italiano','secundaria','si',9);
/*!40000 ALTER TABLE `Curriculum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Empresas`
--

DROP TABLE IF EXISTS `Empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Empresas` (
  `IDEmp` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEmp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorreoEleEmp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelefonoEmp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PaisEmp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DireccionEmp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `URLlogEmp` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`IDEmp`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Empresas`
--

LOCK TABLES `Empresas` WRITE;
/*!40000 ALTER TABLE `Empresas` DISABLE KEYS */;
INSERT INTO `Empresas` VALUES (1,'Coca-Cola','coca@hotmail.com','7777777','México','Av. Industrias','https://tentulogo.com/wp-content/uploads/2017/06/cocacola-logo.jpg'),(2,'Bimbo','bimbo@hotmail.com','4448799621','Estados Unidos','Av Constitucion','https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Logo_Grupo_BIMBO.svg/1200px-Logo_Grupo_BIMBO.svg.png'),(3,'Pepsi','pepsi@gmail.com','4441721879','Ecuador','Av. El Salvador','https://tentulogo.com/wp-content/uploads/2018/06/pepsi-logo.jpg'),(4,'HP','hp@gmail.com','4448796215','India','Av Consitucion','https://1000marcas.net/wp-content/uploads/2020/01/HP-Logo-1999.jpg');
/*!40000 ALTER TABLE `Empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ofertas`
--

DROP TABLE IF EXISTS `Ofertas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ofertas` (
  `IDOfer` int(11) NOT NULL AUTO_INCREMENT,
  `NombreOfer` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PuestoOfer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PuestosDisOfer` int(11) NOT NULL,
  `DescOfer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafindisp` date NOT NULL,
  `Salario` float NOT NULL,
  `IDAreaCono` int(11) NOT NULL,
  PRIMARY KEY (`IDOfer`),
  KEY `IDAreaCono` (`IDAreaCono`),
  CONSTRAINT `Ofertas_ibfk_2` FOREIGN KEY (`IDAreaCono`) REFERENCES `AreasConocimiento` (`IDArea`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ofertas`
--

LOCK TABLES `Ofertas` WRITE;
/*!40000 ALTER TABLE `Ofertas` DISABLE KEYS */;
INSERT INTO `Ofertas` VALUES (1,'Diseño Logotipos','Diseño',1,'Diseñador de logotipos.\r\nSe requieren conocimientos de diseñador gráfico para aplicar en esta oferta.','2022-11-07','2022-12-28',7500.5,4),(2,'Servicio al Cliente','Servicio',2,'Personal con capacidad de tratar a los clientes y resolver problemas con eficiencia','2022-11-08','2023-01-12',1000,2),(3,'Operador de sistemas','Sistemas',5,'Operador de sistemas, se necesita capacidad de resolver problemas con eficacia y entender conocimientos básicos de programación.','2020-06-20','2024-08-16',6000.9,11),(5,'Gerente Ventas','Gerente',3,'Capacidad de realizar cálculos con facilidad y disponibilidad de tiempo','2021-06-21','2023-08-10',50000,9),(6,'Zoologo','Zoologia parque',7,'Zoologo en parque regional','2022-11-23','2023-01-12',15000,12);
/*!40000 ALTER TABLE `Ofertas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `OferxReclu`
--

DROP TABLE IF EXISTS `OferxReclu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OferxReclu` (
  `IDofer` int(11) NOT NULL,
  `IDreclu` int(11) NOT NULL,
  KEY `IDofer` (`IDofer`),
  KEY `IDreclu` (`IDreclu`),
  CONSTRAINT `OferxReclu_ibfk_1` FOREIGN KEY (`IDofer`) REFERENCES `Ofertas` (`IDOfer`),
  CONSTRAINT `OferxReclu_ibfk_2` FOREIGN KEY (`IDreclu`) REFERENCES `Reclutadores` (`IDRec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OferxReclu`
--

LOCK TABLES `OferxReclu` WRITE;
/*!40000 ALTER TABLE `OferxReclu` DISABLE KEYS */;
INSERT INTO `OferxReclu` VALUES (1,1),(2,1),(3,1),(5,1);
/*!40000 ALTER TABLE `OferxReclu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reclutadores`
--

DROP TABLE IF EXISTS `Reclutadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reclutadores` (
  `IDRec` int(11) NOT NULL AUTO_INCREMENT,
  `idusuariorecl` int(11) NOT NULL,
  `IDrecluemp` int(11) NOT NULL,
  PRIMARY KEY (`IDRec`),
  KEY `idusuariorecl` (`idusuariorecl`),
  KEY `IDrecluemp` (`IDrecluemp`),
  CONSTRAINT `Reclutadores_ibfk_1` FOREIGN KEY (`idusuariorecl`) REFERENCES `Usuarios` (`IDUsu`),
  CONSTRAINT `Reclutadores_ibfk_2` FOREIGN KEY (`IDrecluemp`) REFERENCES `Empresas` (`IDEmp`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reclutadores`
--

LOCK TABLES `Reclutadores` WRITE;
/*!40000 ALTER TABLE `Reclutadores` DISABLE KEYS */;
INSERT INTO `Reclutadores` VALUES (1,3,1),(4,5,2),(5,14,2);
/*!40000 ALTER TABLE `Reclutadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `IDUsu` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUsu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoUsu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EdadUsu` int(5) DEFAULT NULL,
  `RFCUsu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SexoUsu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FecNacUsu` date NOT NULL,
  `DomicilioUsu` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EstudiosUsu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelefonoUsu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorreoEleUsu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CURPUSU` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContraUsu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TipoUsu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`IDUsu`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES (1,'Blaster','Sun',19,'MBS234765QD3','Hombre','2003-04-19','Calle Benito','Universidad','444444444','blaster@hotmail.com','MBS2347fds65QD3','ContraAdm','Administrador'),(2,'Techy','Macaroon',19,'TMDQ64SDFR641','Hombre','2003-06-24','Calle Himalaya','Prepa','444838796','techy@gmail.com','TMDQ64UYQS871','ContraUsu','Usuario'),(3,'Timoteo','Garcia',30,'TFGR6565RT8','Hombre','2002-07-30','Calle Miguel Hidalgo','Preparatoria','4441356984','timoteo@yahoo.com','TFGF565TQS60','ContraRecl','Reclutador'),(5,'Pepe','Gutierrez',25,'PGHT456QW871','Masculino','1997-05-19','AvJuarez','Secundaria','4448521472','pepe@gmail.com','PGHT45GFE548W','ContraUsu','Reclutador'),(9,'Ana Karen','Cuenca',18,'cuea060425asdjk','femenino','2004-06-25','si','Ingenieria en Sistemas','4448449466','ana@gmail.com','cuea040625mnsns','ContraUsu','Usuario'),(11,'Prueba','prueba',30,'ADM484EREW92','Masculino','1992-10-06','CalleConsti','Preparatoria','4443368714','admin@yahoo.com','ADM4DF3EREW92','177876','Administrador'),(14,'roxana','herrera',20,'hehr','m','2000-11-02','casa','Dra','4441','roxana.herrera@upslp','hehr','1234','Reclutador'),(15,'Pepito','Perez',60,'sadasdasdasdas','Masculino','1960-10-15','asdasdasdas','Prepa','4441123654','pepito@gmail.com','asdasdasdasdada','ContraAdm','Administrador');
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empxofer`
--

DROP TABLE IF EXISTS `empxofer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empxofer` (
  `IDempr` int(11) NOT NULL,
  `IDofert` int(11) NOT NULL,
  KEY `IDempr` (`IDempr`),
  KEY `IDofert` (`IDofert`),
  CONSTRAINT `empxofer_ibfk_1` FOREIGN KEY (`IDempr`) REFERENCES `Empresas` (`IDEmp`),
  CONSTRAINT `empxofer_ibfk_2` FOREIGN KEY (`IDofert`) REFERENCES `Ofertas` (`IDOfer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empxofer`
--

LOCK TABLES `empxofer` WRITE;
/*!40000 ALTER TABLE `empxofer` DISABLE KEYS */;
INSERT INTO `empxofer` VALUES (1,1),(1,3),(1,5),(1,2),(1,6);
/*!40000 ALTER TABLE `empxofer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empxrec`
--

DROP TABLE IF EXISTS `empxrec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empxrec` (
  `IDemp` int(11) NOT NULL,
  `IDreclu` int(11) NOT NULL,
  KEY `IDemp` (`IDemp`),
  KEY `IDreclu` (`IDreclu`) USING BTREE,
  CONSTRAINT `empxrec_ibfk_1` FOREIGN KEY (`IDemp`) REFERENCES `Empresas` (`IDEmp`),
  CONSTRAINT `empxrec_ibfk_2` FOREIGN KEY (`IDreclu`) REFERENCES `Reclutadores` (`IDRec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empxrec`
--

LOCK TABLES `empxrec` WRITE;
/*!40000 ALTER TABLE `empxrec` DISABLE KEYS */;
INSERT INTO `empxrec` VALUES (1,1),(2,4);
/*!40000 ALTER TABLE `empxrec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuxofer`
--

DROP TABLE IF EXISTS `usuxofer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuxofer` (
  `IDusu` int(11) NOT NULL,
  `IDemp` int(11) NOT NULL,
  `FechaSoliUsuOf` date NOT NULL,
  `EstadoOfer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDofer` int(11) NOT NULL,
  KEY `IDusuofer` (`IDusu`),
  KEY `IDoferemp` (`IDemp`),
  KEY `IDofer` (`IDofer`),
  CONSTRAINT `usuxofer_ibfk_1` FOREIGN KEY (`IDusu`) REFERENCES `Usuarios` (`IDUsu`),
  CONSTRAINT `usuxofer_ibfk_2` FOREIGN KEY (`IDemp`) REFERENCES `Empresas` (`IDEmp`),
  CONSTRAINT `usuxofer_ibfk_3` FOREIGN KEY (`IDofer`) REFERENCES `Ofertas` (`IDOfer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuxofer`
--

LOCK TABLES `usuxofer` WRITE;
/*!40000 ALTER TABLE `usuxofer` DISABLE KEYS */;
INSERT INTO `usuxofer` VALUES (2,1,'2022-11-14','PENDIENTE',3),(9,1,'2022-11-19','ACTIVO',1),(2,1,'2022-11-21','PENDIENTE',5),(9,1,'2022-11-23','ACTIVO',2),(2,1,'2022-11-23','PENDIENTE',2);
/*!40000 ALTER TABLE `usuxofer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-10 20:24:49
