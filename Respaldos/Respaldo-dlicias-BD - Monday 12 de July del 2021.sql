-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dlicias-BD
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campo_texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` (`id`, `campo_texto`, `fecha`, `id_usuario`, `tipo`) VALUES (1,'Jhoan Gomez ha cerrado sesion','2019-11-27 08:42:13',1,'SALIDA'),(2,'Gustavo Gordon ha iniciado sesion','2019-11-27 08:57:51',2,'ENTRADA'),(3,' ha hecho un respaldo de la base de datos','2019-11-27 08:59:00',2,'RESPALDO'),(4,'Victor Corio ha cerrado sesion','2021-07-09 12:09:55',2,'SALIDA'),(5,'Gustavo Gordon ha iniciado sesion','2021-07-09 12:10:18',3,'ENTRADA'),(6,'Gustavo Gordon ha cerrado sesion','2021-07-09 12:22:50',3,'SALIDA'),(7,'Victor Corio ha iniciado sesion','2021-07-09 12:24:41',2,'ENTRADA'),(8,' ha registrado un cliente','2021-07-09 12:29:27',2,'CLIENTE'),(9,' ha registrado un cliente','2021-07-09 12:39:30',2,'CLIENTE'),(10,' ha registrado un cliente','2021-07-09 12:46:00',2,'CLIENTE'),(11,' ha registrado un cliente','2021-07-09 12:50:15',2,'CLIENTE'),(12,' ha registrado un cliente','2021-07-09 12:51:33',2,'CLIENTE'),(13,' ha modificado un cliente','2021-07-09 12:53:50',2,'CLIENTE'),(14,' ha eliminado un cliente','2021-07-09 12:58:24',2,'CLIENTE'),(15,' ha eliminado un cliente','2021-07-09 13:02:09',2,'CLIENTE'),(16,' ha eliminado un cliente','2021-07-09 13:02:28',2,'CLIENTE'),(17,' ha eliminado un cliente','2021-07-09 13:05:59',2,'CLIENTE'),(18,' ha eliminado un cliente','2021-07-09 13:10:53',2,'CLIENTE'),(19,' ha eliminado un cliente','2021-07-09 13:14:16',2,'CLIENTE'),(20,' ha eliminado un cliente','2021-07-09 13:14:35',2,'CLIENTE'),(21,' ha eliminado un cliente','2021-07-09 13:15:19',2,'CLIENTE'),(22,' ha eliminado un cliente','2021-07-09 13:18:58',2,'CLIENTE'),(23,' ha eliminado un cliente','2021-07-09 13:21:19',2,'CLIENTE'),(24,'Victor Corio ha iniciado sesion','2021-07-10 12:46:45',2,'ENTRADA'),(25,'Victor Corio ha iniciado sesion','2021-07-12 08:42:11',2,'ENTRADA'),(26,'Victor Corio ha registrado una categoria','2021-07-12 08:43:15',2,'CATEGORIA'),(27,' ha hecho un respaldo de la base de datos','2021-07-12 08:56:53',2,'RESPALDO'),(28,' ha hecho un respaldo de la base de datos','2021-07-12 08:58:32',2,'RESPALDO'),(29,' ha hecho un respaldo de la base de datos','2021-07-12 08:58:45',2,'RESPALDO');
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita_servicio`
--

DROP TABLE IF EXISTS `cita_servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita_servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cita` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita_servicio`
--

LOCK TABLES `cita_servicio` WRITE;
/*!40000 ALTER TABLE `cita_servicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `cita_servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_identificacion` int(35) NOT NULL,
  `id_codigo_s` int(35) NOT NULL,
  `codigo_cita` varchar(5) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(6) NOT NULL,
  `monto` varchar(10) NOT NULL,
  `estado` varchar(20) DEFAULT 'PENDIENTE',
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_documento` enum('Venezolano','Extranjero','Juridico','Pasaporte') COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` int(10) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `alergias` text COLLATE utf8_spanish_ci NOT NULL,
  `borrado` char(1) COLLATE utf8_spanish_ci DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `tipo_documento`, `identificacion`, `nombre`, `telefono`, `correo`, `direccion`, `alergias`, `borrado`) VALUES (1,'Venezolano',26866132,'Victor corio','04124784959','victororio2910@gmail.com','av princpal el castaño','ocor','N'),(2,'Venezolano',1234567,'Jesús azocar','04124784959','azo@gmail.com','av princpal el castaño','ocor','N'),(3,'Venezolano',123456789,'prueba de borrado n1','04124784959','victororio2910@gmail.com','av princpal el castaño','ocor','n'),(4,'Venezolano',27555555,'thomas moreno ','04124784959','victororio2910@gmail.com','av princpal el castaño','ocor','N');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_c` int(11) NOT NULL,
  `codigo_compra` varchar(32) NOT NULL,
  `numero_factura` int(11) DEFAULT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privilegios`
--

DROP TABLE IF EXISTS `privilegios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privilegios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(35) NOT NULL,
  `privilegio` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privilegios`
--

LOCK TABLES `privilegios` WRITE;
/*!40000 ALTER TABLE `privilegios` DISABLE KEYS */;
/*!40000 ALTER TABLE `privilegios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_pt` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_c` int(11) NOT NULL,
  `precio_v` int(11) NOT NULL,
  `id_unidad` int(11) DEFAULT NULL,
  `id_unidadconsumo` int(11) NOT NULL,
  `equivalencia` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `stock_max` int(11) NOT NULL,
  `id_unidadventa` int(11) NOT NULL,
  `equivalencia_venta` int(11) NOT NULL,
  `borrado` char(1) COLLATE utf8_spanish_ci DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `codigo_pt` (`codigo_pt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio`
--

DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_s` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `borrado` char(1) COLLATE utf8_spanish_ci DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio_producto`
--

DROP TABLE IF EXISTS `servicio_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `cantidad` float NOT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`,`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_producto`
--

LOCK TABLES `servicio_producto` WRITE;
/*!40000 ALTER TABLE `servicio_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidad`
--

DROP TABLE IF EXISTS `unidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `abreviatura` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad`
--

LOCK TABLES `unidad` WRITE;
/*!40000 ALTER TABLE `unidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `unidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(90) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `clave` varchar(90) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `tipo_usuario` enum('Admin','Nivel 2','Nivel 1') NOT NULL,
  `pregunta` enum('Nombre de su primera mascota','Pelicula favorita','Nombre de tu abuelo','Pasatiempo favorito') NOT NULL,
  `respuesta` varchar(35) NOT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `ci` (`ci`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `ci`, `nombre`, `clave`, `correo`, `tipo_usuario`, `pregunta`, `respuesta`, `borrado`) VALUES (1,27463096,'Jhoan Gomez','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','jhoan@gmail.com','Admin','Pasatiempo favorito','programar','S'),(2,26866132,'Victor Corio','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','victor@gmail.com','Admin','Pasatiempo favorito','programar','N'),(3,27867932,'Gustavo Gordon','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','gustavo@gmail.com','Nivel 1','Pasatiempo favorito','leer','N');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_has_privilegios`
--

DROP TABLE IF EXISTS `usuario_has_privilegios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_has_privilegios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(30) NOT NULL,
  `id_privilegio` int(30) NOT NULL,
  `status` enum('Si','No') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_privilegio` (`id_privilegio`),
  CONSTRAINT `id_privilegio` FOREIGN KEY (`id_privilegio`) REFERENCES `privilegios` (`id`),
  CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_privilegios`
--

LOCK TABLES `usuario_has_privilegios` WRITE;
/*!40000 ALTER TABLE `usuario_has_privilegios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_has_privilegios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cliente` int(11) NOT NULL,
  `codigo_venta` varchar(11) NOT NULL,
  `forma_pago` varchar(20) NOT NULL DEFAULT 'PUNTO',
  `recibido` float NOT NULL,
  `cambio` float NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta_cita`
--

DROP TABLE IF EXISTS `venta_cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta_cita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta_cita`
--

LOCK TABLES `venta_cita` WRITE;
/*!40000 ALTER TABLE `venta_cita` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta_cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta_producto`
--

DROP TABLE IF EXISTS `venta_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_v` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `borrado` char(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta_producto`
--

LOCK TABLES `venta_producto` WRITE;
/*!40000 ALTER TABLE `venta_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dlicias-BD'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-12  8:58:51
