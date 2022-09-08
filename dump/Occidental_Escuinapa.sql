-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Linux
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para Occidental_Escuinapa
DROP DATABASE IF EXISTS `Occidental_Escuinapa`;
CREATE DATABASE IF NOT EXISTS `Occidental_Escuinapa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `Occidental_Escuinapa`;

-- Volcando estructura para tabla Occidental_Escuinapa.tbl_categoria
CREATE TABLE IF NOT EXISTS `tbl_categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) DEFAULT NULL,
  `id_comida` int DEFAULT NULL,
  `activo` varchar(10) DEFAULT NULL,
  `img_cat` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla Occidental_Escuinapa.tbl_categoria: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` (`id_categoria`, `nombre_categoria`, `id_comida`, `activo`, `img_cat`, `descripcion`) VALUES
	(1, 'Hamburguesas', 1, 'Si', 'ham_papas.jpeg', 'Deliciosas Hamburguesas'),
	(2, 'Tortas', 2, 'Si', 'torta_esp.jpeg', 'Deliciosas Tortas'),
	(3, 'Hotdogs', 3, 'Si', 'salchi_papas.jpeg', 'Deliciosos Hotdogs'),
	(4, 'Papas Fritas', 4, 'Si', 'orden_papas2.jpeg', 'Deliciosas Papas Fritas');
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla Occidental_Escuinapa.tbl_comida
CREATE TABLE IF NOT EXISTS `tbl_comida` (
  `id_comida` int NOT NULL AUTO_INCREMENT,
  `nombre_comida` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `id_categoria` int DEFAULT NULL,
  `activo` varchar(5) NOT NULL,
  PRIMARY KEY (`id_comida`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla Occidental_Escuinapa.tbl_comida: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_comida` DISABLE KEYS */;
INSERT INTO `tbl_comida` (`id_comida`, `nombre_comida`, `precio`, `descripcion`, `imagen`, `id_categoria`, `activo`) VALUES
	(1, 'Hamburguesa Sencilla', '50', 'Carne de Arrachera, Queso Amarillo, Lechuga, Cebolla, Tomate, Aguacate, Catsu, Crema y Chiles Jalapeños.', 'ham_senci.jpeg', 1, 'Si'),
	(2, 'Torta Especial', '65', 'Pierna de puerco, Jamón, Salchicha con Tocino, Queso amarillo, Lechuga, Tomate, Aguacate, Crema, Catsu, Chiles Jalapeños.', 'torta_esp.jpeg', 2, 'Si'),
	(3, 'Salchipapas', '50', 'Orden de Papas Fritas, 2 salchichas Fritas y 3 aderezos.', 'salchi_papas.jpeg', 4, 'Si'),
	(4, 'Hamburguesa Con Papas', '60', 'Carne de Arrachera, Queso Amarillo, Lechuga, Cebolla, Tomate, Aguacate, Catsu, Crema y Chiles Jalapeños y una porción de Papas Fritas.', 'ham_papas.jpeg', 1, 'Si'),
	(5, 'Hamburguesa Doble', '70', 'Doble Carne de Arrachera, Queso Amarillo, Lechuga, Cebolla, Tomate, Aguacate, Catsu, Crema y Chiles Jalapeños', 'ham_doble.jpeg', 1, 'Si'),
	(6, 'Orden de Papas', '35', 'Orden de Papas Fritas, junto con 2 aderezos.', 'orden_papas2.jpeg', 4, 'Si'),
  (7, 'Orden de Papas', '35', 'Orden de Papas Fritas, junto con 2 aderezos.', 'orden_papas2.jpeg', 4, 'Si');
/*!40000 ALTER TABLE `tbl_comida` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
