-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2022 г., 13:35
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pets`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `announcements`
--

CREATE TABLE `announcements` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `pet_type` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `color` text NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `img_url` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `order_type`, `pet_type`, `breed`, `sex`, `name`, `color`, `address`, `date`, `phone_number`, `img_url`, `comment`) VALUES
(1, 1, 'передержка', 'собака', 'такса', 'f', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(2, 2, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(3, 3, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(4, 4, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(5, 5, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(6, 5, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(7, 6, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(8, 7, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(9, 8, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко'),
(10, 9, 'передержка', 'собака', 'такса', 'm', 'vika', 'бордовый', 'Люберцы, наташинская 4', '2012-09-20', '+7050973750', '/img/pets_ads/ex.jpg', 'Белая и пушистая собачка по кличке Снежинка, на носу есть розовое пятнышко');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` int NOT NULL,
  `password` int NOT NULL,
  `email` int NOT NULL,
  `number` int NOT NULL,
  `fullname` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
