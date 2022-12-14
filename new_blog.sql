-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Авг 18 2022 г., 09:14
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `post_id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name_post` varchar(300) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image_post` varchar(300) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text_post` varchar(4000) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDataBase DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `type`, `name_post`, `image_post`, `text_post`, `time`) VALUES
(7, '11', 'История', 'Дерибасовская улица история названия', 'odesa1.jpeg', 'Первоначальное название улицы было Гимназская, иногда встречается название Гимназическая. Названа в честь коммерческой гимназии Вольсея, открытой по указу первого градоначальника города Ришелье 16 апреля 1804 г.  Первоначально улицу разделяла Военная балка, которая спускалась к военной гавани, и по улице проходил мост, который отделял Греческую площадь от улицы Ланжероновской. Поскольку в этом месте балка была неглубока, то вскоре ее засыпали.  С 6 июля 1811 г. улица называется Дерибасовская или де Рибасовская, в 1814 - просто Рибасовская, с 1836 встречается название Де-Рибасовская, Рибасовская. ', '2022-07-26 20:30:37'),
(35, '13', 'Мир', 'История основание Одессы 23', '3.jpeg', 'Существует легенда, что на царском балу, в присутствии Екатерины ІІ зашёл разговор о новом черноморском порте и крепости Хаджибее, недавно отвоёваном у турков. Кто-то из придворных, зная любовь царицы называть отвоёванные города древнегреческим именами, предложил переименовать Хаджибей, и напомнил о древнегреческой колонии Одессос. И вот тогда Екатерина будто бы повелела:  — Пусть же Гаджибей носит это эллинское название, но в женском роде.  Уже позже выяснилось, что греческое поселение с таким названием находилось на месте нынешнего болгарского порта Варна.  Переименовывать город никто не стал…  А история Одессы начиналась задолго до Екатерины.  С незапамятных времён на северном побережье Чёрного моря жили люди. Одними из древнейших жителей края являлись киммерийцы, скифы и древние славяне. Начиная с VII века до нашей эры появились греческие колонисты. Ко времени возникновения Киевской Руси территорию нынешней Одесской области населяли восточнославянские племена тиверцев и уличей.  В 13-14 веках, когда в Северном Причерноморье хозяйничали татары, на месте нынешней Одессы была стоянка генуэзских судов. Старинные портоланы (морские карты) донесли до нас её название – Джинестра (так по-итальянски называется дрок – кустарниковое растение с жёлтыми цветками, особенно распространённое в причерноморских степях).  Как известно, к концу 14 – началу 15 века Северо-Западное Причерноморье перешло из-под владычества татар во владение великого княжества Литовского. Именно к 15 веку относится первое упоминание в письменных источниках о поселении Качибей — ближайшем предшественнике Одессы. Когда возник Качибей, точно не установлено, да и имя его много раз видоизменялось: Коцюбеев, Качибей, Куджабей, Гаджибей, Хаджибей, Аджибей…', '2022-08-16 11:24:03'),
(41, '13', 'История', 'Новая Одесса', '3.jpeg', 'Административный центр Одесской области и Одесского района. Главная военно-морская база Военно-морских сил Украины. Город-герой.\r\n\r\nТретий по населению город Украины. Численность населения на 1 января 2021 года составила 1 015 826 человек, в пределах агломерации проживает свыше 1,2 млн человек. Расположена на берегу Одесского залива.\r\n\r\nКрупный морской торговый порт. Развиты туризм и торговля, промышленность (металлообработка и машиностроение, производство лекарств и продуктов питания). Крупный научно-образовательный центр.\r\n\r\nИсторический центр внесён в предварительный список Всемирного наследия ЮНЕСКО. Ансамбль Приморского бульвара, площади Дюка де Ришельё и Потёмкинской лестницы.\r\n\r\nПо версии наиболее упоминаемого ежегодного рейтинга журнала «Фокус» в 2011 году Одесса стала лучшим по качеству жизни городом Украины[8].', '2022-08-18 07:53:01');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_name` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDataBase DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `user_name`) VALUES
(11, '200@gmail.com', '3644a684f98ea8fe223c713b77189a77', '200'),
(12, 'levlionlida@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '1111'),
(13, 'psman@ukr.net', '202cb962ac59075b964b07152d234b70', '123'),
(14, '888@gmail.com', '0a113ef6b61820daa5611c870ed8d5ee', '888'),
(15, '8888@gmail.com', 'cf79ae6addba60ad018347359bd144d2', '8888');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `post_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
