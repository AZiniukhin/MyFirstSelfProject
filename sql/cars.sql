-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.20 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных cars
CREATE DATABASE IF NOT EXISTS `cars` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cars`;

-- Дамп структуры для таблица cars.carcase
CREATE TABLE IF NOT EXISTS `carcase` (
  `id_carcase` int(11) NOT NULL AUTO_INCREMENT,
  `carcase_c` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_carcase`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы cars.carcase: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `carcase` DISABLE KEYS */;
INSERT INTO `carcase` (`id_carcase`, `carcase_c`) VALUES
	(1, 'sedan'),
	(2, 'coupe'),
	(3, 'wagon'),
	(4, 'crossover');
/*!40000 ALTER TABLE `carcase` ENABLE KEYS */;

-- Дамп структуры для таблица cars.fuel
CREATE TABLE IF NOT EXISTS `fuel` (
  `id_fuel` int(11) NOT NULL AUTO_INCREMENT,
  `fuel_f` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_fuel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы cars.fuel: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `fuel` DISABLE KEYS */;
INSERT INTO `fuel` (`id_fuel`, `fuel_f`) VALUES
	(1, 'petrol'),
	(2, 'diesel'),
	(3, 'gas');
/*!40000 ALTER TABLE `fuel` ENABLE KEYS */;

-- Дамп структуры для таблица cars.gen
CREATE TABLE IF NOT EXISTS `gen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mark` int(11) NOT NULL,
  `id_carcase` int(11) NOT NULL,
  `id_model` int(11) NOT NULL,
  `id_fuel` int(11) NOT NULL,
  `id_power` int(11) NOT NULL,
  `id_price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_gen_model` (`id_model`),
  KEY `FK_gen_price` (`id_price`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы cars.gen: ~14 rows (приблизительно)
/*!40000 ALTER TABLE `gen` DISABLE KEYS */;
INSERT INTO `gen` (`id`, `id_mark`, `id_carcase`, `id_model`, `id_fuel`, `id_power`, `id_price`) VALUES
	(5, 2, 1, 5, 1, 9, 9),
	(6, 2, 2, 6, 1, 3, 8),
	(7, 2, 3, 7, 3, 2, 5),
	(8, 2, 4, 8, 2, 7, 12),
	(9, 3, 1, 9, 1, 3, 1),
	(10, 3, 2, 10, 2, 4, 3),
	(11, 3, 3, 11, 3, 1, 2),
	(12, 3, 4, 12, 2, 7, 11),
	(33, 1, 2, 29, 1, 10, 33),
	(34, 1, 2, 30, 2, 10, 34),
	(35, 1, 3, 31, 3, 3, 35),
	(36, 1, 4, 32, 1, 8, 36),
	(38, 1, 4, 34, 3, 13, 38),
	(39, 1, 2, 35, 1, 13, 39);
/*!40000 ALTER TABLE `gen` ENABLE KEYS */;

-- Дамп структуры для таблица cars.mark
CREATE TABLE IF NOT EXISTS `mark` (
  `id_mark` int(11) NOT NULL AUTO_INCREMENT,
  `mark_m` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_mark`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы cars.mark: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `mark` DISABLE KEYS */;
INSERT INTO `mark` (`id_mark`, `mark_m`) VALUES
	(1, 'Audi'),
	(2, 'BMW'),
	(3, 'VW');
/*!40000 ALTER TABLE `mark` ENABLE KEYS */;

-- Дамп структуры для таблица cars.model
CREATE TABLE IF NOT EXISTS `model` (
  `id_model` int(11) NOT NULL AUTO_INCREMENT,
  `model_m` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_model`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы cars.model: ~15 rows (приблизительно)
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` (`id_model`, `model_m`) VALUES
	(5, 'M5'),
	(6, 'M645'),
	(7, '520 Luxury Edition'),
	(8, 'X7'),
	(9, 'Golf GT'),
	(10, 'New Beetle'),
	(11, 'Passat B7'),
	(12, 'Touareg'),
	(29, 'TT'),
	(30, 'A4'),
	(31, 'A6'),
	(32, 'Q3'),
	(33, 'Q5'),
	(34, 'Q7'),
	(35, 'RS6');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;

-- Дамп структуры для таблица cars.power
CREATE TABLE IF NOT EXISTS `power` (
  `id_power` int(11) NOT NULL AUTO_INCREMENT,
  `power_p` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_power`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы cars.power: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `power` DISABLE KEYS */;
INSERT INTO `power` (`id_power`, `power_p`) VALUES
	(1, 1300),
	(2, 1800),
	(3, 2000),
	(6, 3600),
	(8, 3400),
	(9, 6200),
	(10, 1500),
	(13, 4000),
	(14, 1400);
/*!40000 ALTER TABLE `power` ENABLE KEYS */;

-- Дамп структуры для таблица cars.price
CREATE TABLE IF NOT EXISTS `price` (
  `id_price` int(11) NOT NULL AUTO_INCREMENT,
  `price_p` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_price`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы cars.price: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
INSERT INTO `price` (`id_price`, `price_p`) VALUES
	(1, 10000),
	(2, 12000),
	(3, 13500),
	(5, 15000),
	(8, 18000),
	(9, 18300),
	(11, 19500),
	(12, 20000),
	(33, 14400),
	(34, 14500),
	(35, 14600),
	(36, 15000),
	(37, 18000),
	(38, 20000),
	(39, 22000);
/*!40000 ALTER TABLE `price` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
