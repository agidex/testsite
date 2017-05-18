-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 18 2017 г., 12:24
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `PostID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `post_header` varchar(255) NOT NULL,
  `post_text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`PostID`, `UserID`, `post_header`, `post_text`, `date`) VALUES
(1, 1, 'Ð“Ð°Ð²Ñ€Ð¸Ð»Ð¾Ð²', 'Ð£Ð±Ð»ÑŽÐ´Ð¾Ðº, Ð¼Ð°Ñ‚ÑŒ Ñ‚Ð²Ð¾ÑŽ, Ð° Ð½Ñƒ Ð¸Ð´Ð¸ ÑÑŽÐ´Ð°, Ð³Ð¾Ð²Ð½Ð¾ ÑÐ¾Ð±Ð°Ñ‡ÑŒÐµ! Ð§Ñ‚Ð¾, Ñ€ÐµÑˆÐ¸Ð» ÐºÐ¾ Ð¼Ð½Ðµ Ð»ÐµÐ·Ñ‚ÑŒ?! Ð¢Ñ‹, Ð·Ð°ÑÑ€Ð°Ð½ÐµÑ† Ð²Ð¾Ð½ÑŽÑ‡Ð¸Ð¹, Ð¼Ð°Ñ‚ÑŒ Ñ‚Ð²Ð¾ÑŽ, Ð°? ÐÑƒ, Ð¸Ð´Ð¸ ÑÑŽÐ´Ð°,ï»¿ Ð¿Ð¾Ð¿Ñ€Ð¾Ð±ÑƒÐ¹ Ð¼ÐµÐ½Ñ Ñ‚Ñ€Ð°Ñ…Ð½ÑƒÑ‚ÑŒ, Ñ Ñ‚ÐµÐ±Ñ ÑÐ°Ð¼ Ñ‚Ñ€Ð°Ñ…Ð½Ñƒ, ÑƒÐ±Ð»ÑŽÐ´Ð¾Ðº, Ð¾Ð½Ð°Ð½Ð¸ÑÑ‚ Ñ‡ÐµÑ€Ñ‚Ð¾Ð², Ð±ÑƒÐ´ÑŒ Ñ‚Ñ‹ Ð¿Ñ€Ð¾ÐºÐ»ÑÑ‚! Ð˜Ð´Ð¸, Ð¸Ð´Ð¸Ð¾Ñ‚, Ñ‚Ñ€Ð°Ñ…Ð°Ñ‚ÑŒ Ñ‚ÐµÐ±Ñ Ð¸ Ð²ÑÑŽ Ñ‚Ð²Ð¾ÑŽ ÑÐµÐ¼ÑŒÑŽ, Ð³Ð¾Ð²Ð½Ð¾ ÑÐ¾Ð±Ð°Ñ‡ÑŒÐµ, Ð¶Ð»Ð¾Ð± Ð²Ð¾Ð½ÑŽÑ‡Ð¸Ð¹, Ð´ÐµÑ€ÑŒÐ¼Ð¾, ÑÑƒÐºÐ°, Ð¿Ð°Ð´Ð»Ð°! Ð˜Ð´Ð¸ ÑÑŽÐ´Ð°, Ð¼ÐµÑ€Ð·Ð°Ð²ÐµÑ†, Ð½ÐµÐ³Ð¾Ð´ÑÐ¹, Ð³Ð°Ð´, Ð¸Ð´Ð¸ ÑÑŽÐ´Ð°, Ñ‚Ñ‹, Ð³Ð¾Ð²Ð½Ð¾, Ð–ÐžÐŸÐ!', '2017-05-09 10:22:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
