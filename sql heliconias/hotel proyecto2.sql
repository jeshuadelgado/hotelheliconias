-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para hotel
CREATE DATABASE IF NOT EXISTS `hotel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `hotel`;

-- Volcando estructura para tabla hotel.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `idciudad` int NOT NULL AUTO_INCREMENT,
  `iddepartamento` int NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.ciudad: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.consumos
CREATE TABLE IF NOT EXISTS `consumos` (
  `idconsumos` int NOT NULL AUTO_INCREMENT,
  `iddetallefactura` int NOT NULL,
  `idhuesped` int NOT NULL,
  `fechahora` datetime DEFAULT NULL,
  `valor` decimal(9,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idconsumos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.consumos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` int NOT NULL AUTO_INCREMENT,
  `idpais` int NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.departamento: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.detallefactura
CREATE TABLE IF NOT EXISTS `detallefactura` (
  `iddetallefactura` int NOT NULL AUTO_INCREMENT,
  `idfactura` int NOT NULL,
  `idtiposervicio` int NOT NULL,
  `idhospedaje` int NOT NULL,
  `cancelartotal` decimal(9,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iddetallefactura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.detallefactura: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.elementos
CREATE TABLE IF NOT EXISTS `elementos` (
  `idelementos` int NOT NULL AUTO_INCREMENT,
  `idusuario` int NOT NULL,
  `idhabitacion` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) NOT NULL,
  `placa` decimal(8,0) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idelementos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.elementos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.factura
CREATE TABLE IF NOT EXISTS `factura` (
  `idfactura` int NOT NULL AUTO_INCREMENT,
  `idusuario` int NOT NULL DEFAULT '0',
  `idhuesped` int NOT NULL,
  `fechasalida` date NOT NULL,
  `horasalida` varchar(5) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cancelartotal` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idfactura`),
  KEY `idusuario` (`idusuario`),
  CONSTRAINT `fk_factura_user` FOREIGN KEY (`idusuario`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.factura: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hotel.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.fotos
CREATE TABLE IF NOT EXISTS `fotos` (
  `idfotos` int NOT NULL AUTO_INCREMENT,
  `idhabitacion` int NOT NULL,
  `idhotel` int NOT NULL,
  `lugar` varchar(60) NOT NULL,
  `ubicacion` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idfotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.fotos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.habitacion
CREATE TABLE IF NOT EXISTS `habitacion` (
  `idhabitacion` int NOT NULL AUTO_INCREMENT,
  `idhotel` int NOT NULL,
  `idtipodehabitacion` int NOT NULL,
  `numerodehabitacion` int NOT NULL,
  `caracteristicas` varchar(70) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `precios` decimal(8,0) NOT NULL,
  `inventariocomidas` varchar(50) DEFAULT NULL,
  `elementos` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idhabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.habitacion: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.hospedaje
CREATE TABLE IF NOT EXISTS `hospedaje` (
  `idhospedaje` int NOT NULL AUTO_INCREMENT,
  `idhabitacion` int NOT NULL,
  `idhuesped` int NOT NULL,
  `fechaingreso` date NOT NULL,
  `fechasalida` date NOT NULL,
  `numerodenoches` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idhospedaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.hospedaje: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.hotel
CREATE TABLE IF NOT EXISTS `hotel` (
  `idhotel` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idhotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.hotel: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.huesped
CREATE TABLE IF NOT EXISTS `huesped` (
  `idhuesped` int NOT NULL AUTO_INCREMENT,
  `iddepartamento` int NOT NULL,
  `idpais` int NOT NULL,
  `idciudad` int NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `tipodedocumento` varchar(25) NOT NULL,
  `numerodedocumento` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idhuesped`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.huesped: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hotel.migrations: ~4 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(7, '2019_08_19_000000_create_failed_jobs_table', 1),
	(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(50, '2014_10_12_000000_create_users_table', 1);

-- Volcando estructura para tabla hotel.pais
CREATE TABLE IF NOT EXISTS `pais` (
  `idpais` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.pais: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hotel.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hotel.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.tipodehabitacion
CREATE TABLE IF NOT EXISTS `tipodehabitacion` (
  `idtipodehabitacion` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idtipodehabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.tipodehabitacion: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.tiposervicio
CREATE TABLE IF NOT EXISTS `tiposervicio` (
  `idtiposervicio` int NOT NULL AUTO_INCREMENT,
  `idhotel` int NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `cantidaddepersonas` int NOT NULL,
  `fechaentrada` date NOT NULL,
  `fechasalida` date NOT NULL,
  `estado` tinyint NOT NULL,
  `cancelartrenumberaporciento` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idtiposervicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla hotel.tiposervicio: ~0 rows (aproximadamente)

-- Volcando estructura para tabla hotel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Cliente',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla hotel.users: ~4 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`) VALUES
	(2, 'Jeshua Delgado', 'jeshuadelgado18@gmail.com', NULL, '$2y$10$ThXfkbIMb4B.FDlwCe94Qe3djS.s6SW9wRsEEo6wnJNT/qX.gzpc6', NULL, '2023-09-03 20:50:43', '2023-09-03 20:50:43', 'Administrador'),
	(3, 'Luis Zamudio', 'luismiguelzamudiolopez@gmail.com', NULL, '$2y$10$BGRDfzYryDMz5u6ME54VaO/d9aHpd2r0XX6uyKFD0GT.LFSEouPm2', NULL, '2023-09-04 23:36:27', '2023-09-04 23:36:27', 'Cliente'),
	(4, 'Andres meneses', 'andresmeneses18@gmail.com', NULL, '$2y$10$xRSgZoVxqCGaregSotshq.L8xfaSueYxOuPu7oVBuVFWTk1F9g9kK', NULL, '2023-09-05 02:51:43', '2023-09-05 02:51:43', 'Cliente'),
	(5, 'Jheicol Amaya', 'ja@gmail.com', NULL, '$2y$10$lRbMhw5qsgdPjt/r7ybN4.g9aUVorbgzaf6c2tbRY9JkjdEJJXIle', NULL, '2023-10-05 02:12:02', '2023-10-05 02:12:02', 'Cliente');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
