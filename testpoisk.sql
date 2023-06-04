-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2023 г., 08:52
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testpoisk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id_works` int NOT NULL,
  `id_student` int NOT NULL,
  `id_sotrudnik` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `id_speciаlty` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `id_podpis` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `datez` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `typew` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `ozenka` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `mycheckwork` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `docmycheckwork` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `myoriginalwork` double NOT NULL,
  `intercheckwork` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `docintercheckwork` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `interoriginalwork` double NOT NULL,
  `publicwork` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `filework` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `statuswork` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id_works`, `id_student`, `id_sotrudnik`, `id_speciаlty`, `id_podpis`, `datez`, `name`, `status`, `typew`, `ozenka`, `mycheckwork`, `docmycheckwork`, `myoriginalwork`, `intercheckwork`, `docintercheckwork`, `interoriginalwork`, `publicwork`, `filework`, `statuswork`) VALUES
(1, 1, 'Козлов В.А.', 'Окружающий мир', 'Валерия', '13.02.2018', 'Узбекская кухня', 'Зачтено', 'Диплом', '5', '', '', 70, '', '', 80, '', '', ''),
(2, 2, 'Валерьев. И.А.', 'Обществознание', 'Игорь', '08.05.2020', 'В обществе', 'Зачтено', 'Курсовая', '4', '', '', 85, '', '', 65, '', '', ''),
(3, 3, 'Иванов В.А.', 'Физкультура', 'Владислав', '06.02.2021', 'Физическая нагрузка', 'Зачтено', 'Статья', '3', '', '', 57, '', '', 80, '', '', ''),
(4, 4, 'Кузнецов А.Е.', 'Русский язык', 'Анна', '03.10.2021', 'Правила русского языка', 'Зачтено', 'Статья', '5', '', '', 80, '', '', 90, '', '', ''),
(5, 5, 'Малик А.', 'Source', 'Вадим', '07.12.2021', 'Создание сервера', 'Зачтено', 'Статья', '5', '', '', 90, '', '', 75, '', '', ''),
(6, 6, 'Акентьев Д.', 'Математика', 'Валентин', '01.02.2022', 'Интеграллы', 'Зачтено', 'Статья', '4', '', '', 65, '', '', 80, '', '', ''),
(7, 7, 'Гринь Р.', 'Программирование PHP', 'Яна', '09.03.2022', 'Создание поиска', 'Зачтено', 'Диплом', '5', '', '', 70, '', '', 90, '', '', ''),
(8, 8, 'Якубович А.', 'Технология', 'Дмитрий', '01.04.2022', 'Срубка леса', 'Незачтено', 'Диплом', '2', '', '', 45, '', '', 50, '', '', ''),
(9, 9, 'Щербаков. А.', 'Биология', 'Валентин', '04.05.2022', 'Организм человека', 'Зачтено', 'Диплом', '4', '', '', 60, '', '', 70, '', '', ''),
(10, 10, 'Крюковских М.', 'Юристпроденция', 'Макс', '25.06.2022', 'Права человека', 'Зачтено', 'Диплом', '5', '', '', 80, '', '', 95, '', '', ''),
(11, 11, 'Мирошников А.', 'Юристпроденция', 'Макс', '25.06.2022', 'Обязанности человека', 'Зачтено', 'Статья', '4', '', '', 60, '', '', 70, '', '', ''),
(12, 12, 'Оборванец И.', 'CS', 'Вадим', '05.08.2022', 'Обучение префам', 'Зачтено', 'Статья', '5', '', '', 75, '', '', 60, '', '', ''),
(13, 13, 'Голодный Я.', 'DOTA2', 'Максим', '15.09.2022', 'Изучение героев', 'Зачтено', 'Диплом', '4', '', '', 70, '', '', 80, '', '', ''),
(14, 14, 'Сытый Л.', 'RUST', 'Данил', '29.09.2022', 'Строительство', 'Незачет', 'Диплом', '2', '', '', 45, '', '', 30, '', '', ''),
(15, 15, 'Пьянный Л.', 'Что то там', 'Кто то', '11.11.2022', 'О чем то', 'Незачет', 'Диплом', '2', '', '', 45, '', '', 30, '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id_works`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id_works` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
