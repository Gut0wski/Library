--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.4.201.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 04.06.2018 13:23:01
-- Версия сервера: 5.6.38
-- Версия клиента: 4.1
--

-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

--
-- Установка базы данных по умолчанию
--
USE library;

--
-- Удалить таблицу `books_authors`
--
DROP TABLE IF EXISTS books_authors;

--
-- Удалить таблицу `authors`
--
DROP TABLE IF EXISTS authors;

--
-- Удалить таблицу `books`
--
DROP TABLE IF EXISTS books;

--
-- Удалить таблицу `genres`
--
DROP TABLE IF EXISTS genres;

--
-- Установка базы данных по умолчанию
--
USE library;

--
-- Создать таблицу `genres`
--
CREATE TABLE genres (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 7,
AVG_ROW_LENGTH = 3276,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

--
-- Создать таблицу `books`
--
CREATE TABLE books (
  id int(11) NOT NULL AUTO_INCREMENT,
  genre_id int(11) NOT NULL,
  name varchar(100) NOT NULL,
  year int(11) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 14,
AVG_ROW_LENGTH = 1489,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

--
-- Создать внешний ключ
--
ALTER TABLE books
ADD CONSTRAINT FK_books_genres FOREIGN KEY (genre_id)
REFERENCES genres (id);

--
-- Создать таблицу `authors`
--
CREATE TABLE authors (
  id int(11) NOT NULL AUTO_INCREMENT,
  last_name varchar(100) NOT NULL,
  first_name varchar(100) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 25,
AVG_ROW_LENGTH = 1260,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

--
-- Создать таблицу `books_authors`
--
CREATE TABLE books_authors (
  id int(11) NOT NULL AUTO_INCREMENT,
  book_id int(11) NOT NULL,
  author_id int(11) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 19,
AVG_ROW_LENGTH = 1092,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

--
-- Создать внешний ключ
--
ALTER TABLE books_authors
ADD CONSTRAINT FK_books_authors_authors FOREIGN KEY (author_id)
REFERENCES authors (id);

--
-- Создать внешний ключ
--
ALTER TABLE books_authors
ADD CONSTRAINT FK_books_authors_books FOREIGN KEY (book_id)
REFERENCES books (id);

-- 
-- Вывод данных для таблицы genres
--
INSERT INTO genres VALUES
(1, 'Программирование'),
(2, 'Фантастика'),
(3, 'Биография'),
(4, 'Мистика'),
(5, 'Сказки');

-- 
-- Вывод данных для таблицы books
--
INSERT INTO books VALUES
(1, 1, 'SQL для простых смертных', 2014),
(2, 1, 'Большая книга CSS3', 2016),
(3, 1, 'Современный учебник JavaScript', 2015),
(4, 1, 'jQuery в действии', 2017),
(5, 1, 'PHP7 в подлиннике', 2017),
(6, 1, 'PHP и MySQL. Исчерпывающее руководство', 2016),
(7, 1, 'PHP. Объекты, шаблоны и методики программирования', 2016),
(8, 1, 'Разработка веб-приложений в Yii2', 2015),
(9, 1, 'Основы Symfony 3 и не только', NULL),
(10, 1, 'Pro Git', 2014),
(13, 3, '111', 1117);

-- 
-- Вывод данных для таблицы authors
--
INSERT INTO authors VALUES
(1, 'Грабер', 'Мартин'),
(2, 'Макфарланд', 'Дэвид'),
(3, 'Кантор', 'Илья'),
(4, 'Бибо', 'Беэр'),
(5, 'Котеров', 'Дмитрий'),
(6, 'Маклафин', 'Бретт'),
(7, 'Зандстра', 'Мэтт'),
(8, 'Сафронов', 'Марк'),
(9, 'Матевосов', 'Альберт'),
(10, 'Шакон', 'Скотт'),
(11, 'Кац', 'Иегуда'),
(12, 'де Роза', 'Аурелио'),
(13, 'Симдянов', 'Игорь');

-- 
-- Вывод данных для таблицы books_authors
--
INSERT INTO books_authors VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(5, 4, 4),
(6, 4, 11),
(7, 4, 12),
(9, 5, 5),
(10, 5, 13),
(11, 6, 6),
(12, 7, 7),
(13, 8, 8),
(14, 9, 9),
(15, 10, 10),
(17, 13, 12),
(18, 13, 5);

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;