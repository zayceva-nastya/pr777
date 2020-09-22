-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 22 2020 г., 15:57
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project2`
--
CREATE DATABASE IF NOT EXISTS `project2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `project2`;

-- --------------------------------------------------------

--
-- Структура таблицы `diary`
--

CREATE TABLE `diary` (
  `id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Упражнение',
  `lead_time` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Время выполнения',
  `date` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Дата',
  `users_id` int(11) NOT NULL COMMENT 'Имя пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `diary`
--

INSERT INTO `diary` (`id`, `exercise`, `lead_time`, `date`, `users_id`) VALUES
(44, 'Повороты корпуса.', '1', '2020-09-14 22:07:14', 14),
(45, 'Наклоны к ногам.', '1', '2020-09-14 22:07:24', 14),
(62, 'бег', '10мин', '2020-09-21 21:00:20', 2),
(63, 'пресс', '', '2020-09-21 21:00:27', 2),
(64, 'бег кругу', '20мин', '2020-09-21 21:00:34', 2),
(65, 'прыжки', '10мин', '2020-09-21 21:00:40', 2),
(66, 'прыжки', '10мин', '2020-09-21 21:00:45', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL COMMENT '№',
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `cod` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Код'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `cod`) VALUES
(1, 'Администратор', 'admin'),
(2, 'Пользователь', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `planka`
--

CREATE TABLE `planka` (
  `id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Упражнение',
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Группа мышц',
  `lead_time` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Время выполнения',
  `group_id` int(11) NOT NULL COMMENT 'Группа',
  `gifs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Техника выполнения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `planka`
--

INSERT INTO `planka` (`id`, `exercise`, `description`, `lead_time`, `group_id`, `gifs`) VALUES
(1, 'Классическая планка на локтях', 'В этом варианте планки работают бицепсы, мышцы спины и пресса.', 'Начиная с 20 секунд, увеличивая время на 10 секунд ежедневно', 2, '1plan.jpg'),
(3, 'Поочередный подъем ноги к локтю', 'Этот вариант увеличивает нагрузку на косые мышцы живота, мышцы ягодиц, широчайшую мышцу спины.', '15 повторений на каждую ногу', 2, 'Planka_pauk_lokti.gif'),
(4, 'Из планки в четвереньки.', ' Нагрузка во время тренировки будет распределена между прессом, руками, плечевым поясом и мышечными группами ног. Также задействуются мышцы спины.', '10-15 повторений сначала на одну ногу, затем 10-15 повторений на другую ногу.', 2, 'Planka_na_chetverenkah.gif'),
(5, 'Велосипед в боковой планке.', 'Нагружает мышцы пресса,руки, плечевой пояс, ноги и спину.', ' 10-15 повторений сначала на одну ногу, затем 10-15 повторений на другую ногу.', 2, 'Velosiped_bokovaya_planka.gif'),
(6, 'Кики в сторону в планке.', 'Упражнение позволяет прокачать ягодичные мышцы, а также такие проблемные зоны как внешняя и внутренняя сторона бедра. Задействован кор, спина, плечевой пояс.', 'по 10-15 повторений на каждую сторону.', 2, 'Kick_nogoj_v_planke.gif'),
(7, 'Планка с касанием стоп.', 'Основное воздействие упражнения приходится на живот и поясницу.', 'по 10-15 повторений на каждую сторону.', 2, 'Planka_kasanie_stop (1).gif');

-- --------------------------------------------------------

--
-- Структура таблицы `press`
--

CREATE TABLE `press` (
  `id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Упражнение',
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Мышцы',
  `lead_time` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Время выполнения',
  `group_id` int(11) NOT NULL COMMENT 'Группа',
  `gifs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Техника выполнения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `press`
--

INSERT INTO `press` (`id`, `exercise`, `description`, `lead_time`, `group_id`, `gifs`) VALUES
(1, 'Упрощенный велосипед на предплечьях.\r\n', 'Включается весь пласт брюшных мышц с акцентом на низ живота.', '10-12 повторений на каждую ногу.', 2, 'Uproshenyj_velosiped_na_predplechyah.gif'),
(2, 'Обратные скручивания.', 'Активная проработка брюшных мышц с упором на низ пресса, но нагрузку получают и другие области прямой мышцы.', '12-15 повторений.', 2, 'Obratnye_skruchivania.gif'),
(3, 'Горизонтальные мышцы.', 'Целенаправленная тренировка брюшной мускулатуры, из которой активнее всего работает нижняя область с косыми пучками.', '20-25 разведений.', 2, 'Nozhnicy_ruki_pod_yagoditsy.gif'),
(4, 'Лодочка с руками вверх.', 'Работа идет статическая, задействуется пресс на всей протяженности. Нагрузка также распространяется на бедра, ягодицы, поясницу и плечевой пояс.', '15-20 повторений.', 2, 'Lodochka_ruki_vverh (1).gif');

-- --------------------------------------------------------

--
-- Структура таблицы `rasminka`
--

CREATE TABLE `rasminka` (
  `id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Упражнение',
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Количество повторений',
  `lead_time` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Время выполнения',
  `group_id` int(11) NOT NULL COMMENT 'Группа',
  `gifs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Техника выполнения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rasminka`
--

INSERT INTO `rasminka` (`id`, `exercise`, `description`, `lead_time`, `group_id`, `gifs`) VALUES
(1, 'Ходьба на месте', 'Благодаря этому простому упражнению разогревается тело и увеличивается пульс.', '30 секунд.', 2, 'Chodba_na_meste.gif'),
(2, 'Повороты корпуса.', 'Работают косые мышцы живота, мышцы плеч.', '10 повторов на каждую сторону.', 2, 'Povoroti_korpusa_v_storonu.gif'),
(3, 'Наклоны к ногам.', 'Растяжение задней поверхности бедра.', 'по 8 наклонов в каждую сторону (всего 16 наклонов) или 30 секунд.', 2, 'Naklony_k_polu.gif'),
(4, 'Вращение бедром', 'Упражнение отлично разминает тазобедренные суставы и помогает избежать травм и растяжений во время тренировок на бедра и ягодицы.', 'По 5 вращений по часовой стрелке и 5 вращений против часовой стрелки на каждую ногу или по 15 секунд на каждую ногу.', 2, 'Vrashenie_bedrom.gif'),
(5, 'Полуприседы.', 'Всегда старайтесь выполнять разминочные полуприседы перед тренировкой бедер и ягодиц.', '15 полуприседаний или 30 секунд.', 2, 'Poluprised.gif'),
(6, 'Полувыпады с подъемом рук.', 'Задействованы все группы мышц.', 'По 10 полувыпадов на каждую сторону (всего 20 полувыпадов) или 30 секунд.', 2, 'Poluvypad.gif');

-- --------------------------------------------------------

--
-- Структура таблицы `rast`
--

CREATE TABLE `rast` (
  `id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Упражнение',
  `number_of_repetitions` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Количество повторений',
  `lead_time` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Время выполнения',
  `users_id` int(11) NOT NULL COMMENT 'Группа',
  `gifs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Техника выполнения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '№',
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пользователь',
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пароль',
  `group_id` int(11) NOT NULL COMMENT 'Группа',
  `FIO` varchar(150) NOT NULL COMMENT 'ФИО'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `FIO`) VALUES
(2, 'kapa', '987', 2, 'kapa appaaa'),
(8, 'Pavel', '123', 1, 'ВВВ ЫЫЫ ФФФФ'),
(9, 'fere', '2ba6acc444ec32b4fb9c9c3036b58dfc', 2, 'fhgfhn thft'),
(10, 'start', '0042e7bb9f637eb9fe5e7ddafd708bfb', 2, 'ВВВ ЫЫЫ ФФФФ'),
(11, 'tyty', 'caee098bc8582ee7b169677c33d3cff9', 2, 'Иванов Иван'),
(12, 'start', '2836a7191f6a9e2455b763469ca4ec6d', 2, 'ВВВ ЫЫЫ ФФФФ'),
(13, 'gjh', '0042e7bb9f637eb9fe5e7ddafd708bfb', 2, 'ВВВ ЫЫЫ ФФФФ'),
(14, 'hhgh', 'd33d7c1173bb73296fadeb32cdd65ae0', 2, 'Иванов Павел'),
(25, 'sara', '111', 2, 'aa '),
(26, 'nvnvnvnvnvnvnvnvnvnvv', 'www', 2, 'www'),
(27, 'ddddddddddddddddddd', '123', 2, 'ВВВ ЫЫЫ ФФФФ');

-- --------------------------------------------------------

--
-- Структура таблицы `workouts`
--

CREATE TABLE `workouts` (
  `id` int(11) NOT NULL COMMENT '№',
  `exercise` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Упражнение',
  `number_of_repetitions` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Количество повторений',
  `lead_time` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Время выполнения',
  `users_id` int(11) NOT NULL COMMENT 'Группа',
  `gifs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Техника выполнения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `workouts`
--

INSERT INTO `workouts` (`id`, `exercise`, `number_of_repetitions`, `lead_time`, `users_id`, `gifs`) VALUES
(5, 'ХОДЬБА НА МЕСТЕ С ПОДЪЕМОМ КОЛЕН', 'Примите классическую для спорта стойку – встаньте прямо, руки по швам, а стопы чуть уже ширины плеч. Попеременно поднимайте и опускайте ноги, двигайте согнутыми руками вдоль туловища.', 'по 10-15 подъемов на каждую ногу.', 1, 'Chodba_na_meste_2.gif'),
(6, 'ОТЖИМАНИЯ ОТ КОЛЕН', ' Отжимания от колен начинаются с позиции планки. Колени опущены на пол, лодыжки подняты, скрещены. Руки плотно упираются в пол чуть шире плеч. Сгибайте руки, почти касаясь грудью пола, а на выдохе возвращайтесь в стартовую фазу.', '8 повторений', 3, 'Otzhimaniya_na_kolenyah.gif'),
(7, 'ПЛОВЕЦ', 'Лягте на гимнастический коврик вниз лицом, вдоль распрямляя ноги и руки. Лицо смотрит в пол. Синхронно поднимайте правую ногу и левую руку вверх с небольшими задержками в пиковой амплитуде.', '10 повторений на каждую сторону', 3, 'Plovec.gif');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`users_id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `planka`
--
ALTER TABLE `planka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Индексы таблицы `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id`),
  ADD KEY `press_ibfk_1` (`group_id`);

--
-- Индексы таблицы `rasminka`
--
ALTER TABLE `rasminka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rasminka_ibfk_1` (`group_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Индексы таблицы `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`users_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `diary`
--
ALTER TABLE `diary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `planka`
--
ALTER TABLE `planka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `press`
--
ALTER TABLE `press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `rasminka`
--
ALTER TABLE `rasminka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `diary`
--
ALTER TABLE `diary`
  ADD CONSTRAINT `diary_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `planka`
--
ALTER TABLE `planka`
  ADD CONSTRAINT `planka_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);

--
-- Ограничения внешнего ключа таблицы `press`
--
ALTER TABLE `press`
  ADD CONSTRAINT `press_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);

--
-- Ограничения внешнего ключа таблицы `rasminka`
--
ALTER TABLE `rasminka`
  ADD CONSTRAINT `rasminka_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
