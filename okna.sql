-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 07 2021 г., 14:56
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `okna`
--

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

CREATE TABLE `album` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`id`, `name`, `link`) VALUES
(1, 'комната1', '1'),
(2, 'комната2', '2'),
(3, 'комната3', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carousel`
--

INSERT INTO `carousel` (`id`, `image`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(5, '5.png'),
(6, '6.png'),
(7, '7.png'),
(8, '8.png');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `cookie_name` varchar(200) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(3, 0, 'WOMENS', NULL, NULL),
(4, 0, 'KIDS', 'dddd', 'fffff'),
(5, 0, 'FASHION', NULL, NULL),
(6, 0, 'HOUSEHOLDS1', '', ''),
(20, 0, 'MENS', '', ''),
(8, 0, 'CLOTHING', NULL, NULL),
(9, 0, 'BAGS', 'ключевые слова', 'ключевые слова'),
(21, 3, 'Womens 20', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `jui`
--

CREATE TABLE `jui` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jui`
--

INSERT INTO `jui` (`id`, `title`, `data`) VALUES
(10, 'aaaa1', 'Янв 2, 2019'),
(11, 'aaaa12', 'Янв 2, 2019');

-- --------------------------------------------------------

--
-- Структура таблицы `juislider`
--

CREATE TABLE `juislider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `juislider`
--

INSERT INTO `juislider` (`id`, `name`, `slider`) VALUES
(1, 'one1', 3),
(2, 'one2', 5),
(3, 'one3', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1546673609),
('m190105_073159_updateall', 1546673611),
('m190105_104059_jui', 1546685021),
('m190107_141249_slider', 1546870533),
('m190911_165312_create_news_table', 1568222162);

-- --------------------------------------------------------

--
-- Структура таблицы `move`
--

CREATE TABLE `move` (
  `id` int(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `pagex` int(10) NOT NULL,
  `pagey` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `move`
--

INSERT INTO `move` (`id`, `color`, `pagex`, `pagey`) VALUES
(1, 'white', 403, 455),
(2, 'white', 304, 455),
(3, 'white', 205, 455),
(4, 'white', 106, 455),
(5, 'white', 256, 403),
(6, 'white', 157, 403),
(7, 'white', 454, 403),
(8, 'white', 354, 403),
(9, 'white', 106, 354),
(10, 'white', 205, 354),
(11, 'white', 401, 354),
(12, 'white', 304, 354),
(13, 'red', 353, 204),
(14, 'red', 457, 204),
(15, 'red', 150, 50),
(16, 'red', 258, 204),
(17, 'red', 405, 155),
(18, 'red', 303, 155),
(19, 'red', 205, 155),
(20, 'red', 105, 155),
(21, 'red', 455, 105),
(22, 'red', 355, 105),
(23, 'red', 255, 105),
(24, 'red', 155, 105);

-- --------------------------------------------------------

--
-- Структура таблицы `move1`
--

CREATE TABLE `move1` (
  `id` int(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `pagex` int(10) NOT NULL,
  `pagey` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `move1`
--

INSERT INTO `move1` (`id`, `color`, `pagex`, `pagey`) VALUES
(1, 'white', 302, 354),
(2, 'white', 205, 354),
(3, 'white', 105, 354),
(4, 'white', 5, 354),
(5, 'white', 355, 304),
(6, 'white', 255, 304),
(7, 'white', 155, 304),
(8, 'white', 55, 304),
(9, 'white', 302, 254),
(10, 'white', 205, 254),
(11, 'white', 105, 254),
(12, 'white', 5, 254),
(13, 'red', 353, 104),
(14, 'red', 253, 104),
(15, 'red', 155, 104),
(16, 'red', 55, 104),
(17, 'red', 302, 54),
(18, 'red', 204, 54),
(19, 'red', 104, 54),
(20, 'red', 4, 54),
(21, 'red', 353, 4),
(22, 'red', 253, 4),
(23, 'red', 154, 4),
(24, 'red', 55, 4),
(25, 'white', 3, 267),
(26, 'white', 79, 267),
(27, 'white', 153, 267),
(28, 'white', 227, 267),
(29, 'white', 41, 229),
(30, 'white', 115, 229),
(31, 'white', 190, 229),
(32, 'white', 267, 229),
(33, 'white', 3, 191),
(34, 'white', 79, 191),
(35, 'white', 153, 191),
(36, 'white', 227, 191),
(37, 'red', 41, 79),
(38, 'red', 117, 79),
(39, 'red', 191, 79),
(40, 'red', 265, 79),
(41, 'red', 3, 41),
(42, 'red', 79, 41),
(43, 'red', 153, 41),
(44, 'red', 227, 41),
(45, 'red', 41, 3),
(46, 'red', 115, 3),
(47, 'red', 191, 3),
(48, 'red', 265, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_checkbox`
--

CREATE TABLE `okna_checkbox` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_checkbox`
--

INSERT INTO `okna_checkbox` (`id`, `number`, `value`, `name`) VALUES
(16, 1, '500000', 'i стекло'),
(17, 2, '800000', 'Многофункциональное  стекло'),
(18, 3, '700000', 'Детский  замок');

-- --------------------------------------------------------

--
-- Структура таблицы `okna_delivery`
--

CREATE TABLE `okna_delivery` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_delivery`
--

INSERT INTO `okna_delivery` (`id`, `number`, `value`, `name`, `selected`) VALUES
(20, 2, '1.3', 'По городу (без монтажа)', 0),
(18, 3, '1.8', 'По городу (с монтажом)', 1),
(19, 1, '1', 'Самовывоз', 0),
(22, 4, '1.9', 'За город', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_hardware`
--

CREATE TABLE `okna_hardware` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_hardware`
--

INSERT INTO `okna_hardware` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', 'Roto', 1),
(24, 2, '1.1', 'Maco', 0),
(25, 3, '1.2', 'Axor', 0),
(26, 4, '1.3', 'KBE', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_installation`
--

CREATE TABLE `okna_installation` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_installation`
--

INSERT INTO `okna_installation` (`id`, `number`, `value`, `name`, `selected`) VALUES
(25, 1, '1', 'Без монтажа', 1),
(26, 2, '1.2', 'В панельном доме', 0),
(27, 3, '1.3', 'В кирпичном доме', 0),
(28, 4, '1.4', 'В деревянном доме', 0),
(29, 5, '1.5', 'В сталинке', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_lamination`
--

CREATE TABLE `okna_lamination` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_lamination`
--

INSERT INTO `okna_lamination` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', 'Нет', 1),
(24, 2, '1.1', 'Шоколад', 0),
(25, 3, '1.2', 'Дерево', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_mosquito`
--

CREATE TABLE `okna_mosquito` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_mosquito`
--

INSERT INTO `okna_mosquito` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', '0 шт', 1),
(24, 2, '1.1', '1 шт', 0),
(25, 3, '1.2', '2 шт', 0),
(26, 3, '1.3', '3 шт', 0),
(27, 4, '1.4', '4 шт', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_otliv`
--

CREATE TABLE `okna_otliv` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_otliv`
--

INSERT INTO `okna_otliv` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', 'Без отлива', 0),
(24, 2, '1.1', 'До 200 мм', 1),
(25, 3, '1.2', 'Более 200 мм', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_profile`
--

CREATE TABLE `okna_profile` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_profile`
--

INSERT INTO `okna_profile` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', 'KBE Master 70 мм', 1),
(24, 2, '1.1', 'Exprof Practica 58 мм', 0),
(25, 3, '1.3', 'Exprof Profecta 70 мм', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_slopes`
--

CREATE TABLE `okna_slopes` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_slopes`
--

INSERT INTO `okna_slopes` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', 'Нет', 1),
(24, 2, '1.3', 'Да', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_steklopaket`
--

CREATE TABLE `okna_steklopaket` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_steklopaket`
--

INSERT INTO `okna_steklopaket` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', 'Однокамерный', 0),
(24, 2, '1.1', 'Двухкамерный', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `okna_windows`
--

CREATE TABLE `okna_windows` (
  `id` int(10) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_windows`
--

INSERT INTO `okna_windows` (`id`, `value`, `name`) VALUES
(10, '1.2', '2-1-okno-w.png'),
(9, '1.1', '1-2-okno-w.png'),
(0, '1', '1-1-okno-w.png '),
(11, 'qwerty', '2-3-okno-w.png'),
(12, '1.6', '3-1-okno-w.png'),
(15, '1.9', '3-3-okno-w.png'),
(14, '1.8', '3-2-okno-w.png');

-- --------------------------------------------------------

--
-- Структура таблицы `okna_windowsill`
--

CREATE TABLE `okna_windowsill` (
  `id` int(10) NOT NULL,
  `number` int(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `selected` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `okna_windowsill`
--

INSERT INTO `okna_windowsill` (`id`, `number`, `value`, `name`, `selected`) VALUES
(23, 1, '1', 'до 300 мм', 1),
(24, 2, '1.2', 'от 300 мм до 450 мм', 0),
(25, 3, '1.7', 'от 450 мм до 600 мм', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(255) NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `album_id`, `name`, `link`) VALUES
(1, 1, 'komnata', '1'),
(2, 1, 'la', '1'),
(3, 1, 'ww', '1'),
(4, 1, 'proba1', '1'),
(5, 1, 'qqq', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `content`) VALUES
(1, 'title12345', 'content1'),
(2, 'title222', 'content2'),
(3, 'title3', 'content34'),
(4, 'title444577', 'content4'),
(5, 'qwerty1', 'Presli123'),
(6, 'qwerty2', 'Presli123'),
(7, 'qwerty3', 'Presli1234567'),
(8, 'первая строка1333', 'Presli123333'),
(9, 'title3', 'fff'),
(10, 'первая строка1555', 'erty456777'),
(11, 'zzzzz', 'zzzzz'),
(12, 'йцукен5643', 'апа орро'),
(13, 'йцукен5643777', 'апа орро rrttt');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image',
  `hit` enum('0','1','','') NOT NULL DEFAULT '0',
  `new` enum('0','1','','') NOT NULL DEFAULT '0',
  `sale` enum('0','1','','') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`) VALUES
(77, 3, 'qwerty2', '', 214, '', '', 'product2.jpg', '1', '0', '0'),
(78, 3, 'qwerty3', 'uoi;;', 32, '', '', 'product3.jpg', '1', '0', '0'),
(79, 3, 'раапр', 'апрар', 23, '', '', 'no-image.jpg', '0', '0', '0'),
(80, 3, 'апнн', '', 7, '', '', 'no-image.jpg', '0', '0', '0'),
(81, 4, 'aaaaa', 'aaaaa', 12, '', '', 'no-image.jpg', '0', '0', '0'),
(82, 3, 'yuyutyu', 'yutyutyu gyuytu fjty', 34, 'yyuyu', 'yuytu', 'no-image.jpg', '1', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(3, 'slide1.jpg'),
(2, 'slide2.jpg'),
(4, 'slide3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `slider1`
--

CREATE TABLE `slider1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `time`
--

CREATE TABLE `time` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `time`
--

INSERT INTO `time` (`id`, `name`, `time`) VALUES
(2, 'qwerty', '2019-02-19 21:31:13');

-- --------------------------------------------------------

--
-- Структура таблицы `updateall`
--

CREATE TABLE `updateall` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `updateall`
--

INSERT INTO `updateall` (`id`, `title`, `status`) VALUES
(1, 'qw1', 1),
(2, 'qw2', 1),
(3, 'qw3', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `n1` int(10) DEFAULT NULL,
  `n2` int(10) DEFAULT NULL,
  `n3` int(10) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `address`, `telephon`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `n1`, `n2`, `n3`) VALUES
(3, 'admin1', 'Майская, 3', '5676565', 'NXO-NAHOZcyDXnaOpoM90T0qn33NwwQI', '$2y$13$BbFlyn0BOw3RDxs0.6sEmO1RgesXDSQQX1YYYgJcP/Qn8KTq5f8C6', NULL, 'samara-dialod@yandex.ru', 10, 1513769640, 1577475002, NULL, NULL, 5),
(8, 'redactor1', '', '', 'qi1r9iB2BuC3XEZme0DzLaT_dWagUaNz', '$2y$13$ibJeDJCFSPMyotoIKyAire4Tt1w0WSavkAHsZxl6f5R9ZyZC9EoMG', NULL, '', 10, 0, 1549210103, NULL, NULL, 5),
(10, 'nikodim', 'московская 5-6', '2345', '4DA5y_fy79qqF5tvzXwStFil1ZmDOoHI', '$2y$13$IhmqCEsUzFiKcgucdOGOOOW5Z1iJ/1CqiI88mzU.wbRu0vYdk4iA.', NULL, 'qw@erty.ru', 10, 1549210318, 1549210386, NULL, NULL, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jui`
--
ALTER TABLE `jui`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `juislider`
--
ALTER TABLE `juislider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `move`
--
ALTER TABLE `move`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `move1`
--
ALTER TABLE `move1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_checkbox`
--
ALTER TABLE `okna_checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_delivery`
--
ALTER TABLE `okna_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_hardware`
--
ALTER TABLE `okna_hardware`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_installation`
--
ALTER TABLE `okna_installation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_lamination`
--
ALTER TABLE `okna_lamination`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_mosquito`
--
ALTER TABLE `okna_mosquito`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_otliv`
--
ALTER TABLE `okna_otliv`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_profile`
--
ALTER TABLE `okna_profile`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_slopes`
--
ALTER TABLE `okna_slopes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_steklopaket`
--
ALTER TABLE `okna_steklopaket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_windows`
--
ALTER TABLE `okna_windows`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `okna_windowsill`
--
ALTER TABLE `okna_windowsill`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `updateall`
--
ALTER TABLE `updateall`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `album`
--
ALTER TABLE `album`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `jui`
--
ALTER TABLE `jui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `juislider`
--
ALTER TABLE `juislider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `move`
--
ALTER TABLE `move`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT для таблицы `move1`
--
ALTER TABLE `move1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1114;

--
-- AUTO_INCREMENT для таблицы `okna_checkbox`
--
ALTER TABLE `okna_checkbox`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `okna_delivery`
--
ALTER TABLE `okna_delivery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `okna_hardware`
--
ALTER TABLE `okna_hardware`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `okna_installation`
--
ALTER TABLE `okna_installation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `okna_lamination`
--
ALTER TABLE `okna_lamination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `okna_mosquito`
--
ALTER TABLE `okna_mosquito`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `okna_otliv`
--
ALTER TABLE `okna_otliv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `okna_profile`
--
ALTER TABLE `okna_profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `okna_slopes`
--
ALTER TABLE `okna_slopes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `okna_steklopaket`
--
ALTER TABLE `okna_steklopaket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `okna_windows`
--
ALTER TABLE `okna_windows`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `okna_windowsill`
--
ALTER TABLE `okna_windowsill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `slider1`
--
ALTER TABLE `slider1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `time`
--
ALTER TABLE `time`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `updateall`
--
ALTER TABLE `updateall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
