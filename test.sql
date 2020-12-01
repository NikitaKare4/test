-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.14-MariaDB - mariadb.org binary distribution
-- ОС Сервера:                   Win64
-- HeidiSQL Версия:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица test.book
CREATE TABLE IF NOT EXISTS `book` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisanie` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `date` date NOT NULL,
  `name_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.book: ~9 rows (приблизительно)
DELETE FROM `book`;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` (`id`, `name`, `opisanie`, `cena`, `date`, `name_img`, `created_at`, `updated_at`) VALUES
	(1, 'Тёмная башня', 'Стивен Кинг', 200, '2020-11-28', '1.jpg', NULL, NULL),
	(2, 'Доктор сон', 'Стивен Кинг', 100, '2020-11-28', '2.jpg', NULL, NULL),
	(3, 'Оно', 'Стивен Кинг', 300, '2020-11-28', '3.jpg', NULL, NULL),
	(4, 'Керри', 'Стивен Кинг', 800, '2020-11-28', '4.jpg', NULL, NULL),
	(5, 'Мобильник', 'Стивен Кинг', 400, '2020-11-28', '5.jpg', NULL, NULL),
	(6, 'Кладбище домашних животных', 'Стивен Кинг', 1000, '2020-11-28', '6.jpg', NULL, NULL),
	(7, 'Сумерки', 'Стефани Майер', 800, '2020-11-27', 'RTjDQcbLoiv2eh2sYAbZ4X2UJqrBBKQIDv1k59Ms.jpg', NULL, NULL),
	(12, 'Бойцовский клуб', 'Чак Паланик', 350, '2020-11-28', 'N5mVURLiKURbbu8Te81bEbUtFYBgf8qxTRDsLPyQ.jpg', NULL, NULL),
	(13, 'Сияние', 'Стивен Кинг', 250, '2020-12-01', 'phzpiM2gLh91KdQX7ePBZlem97VzgFhvAgQkScT0.jpg', NULL, NULL);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;


-- Дамп структуры для таблица test.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы test.migrations: ~1 rows (приблизительно)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2020_11_28_180315_create_book_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
