-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 15 2023 г., 00:21
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pps`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blanks`
--

CREATE TABLE `blanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `punkt1` int(11) NOT NULL DEFAULT 0,
  `punkt2` int(11) NOT NULL DEFAULT 0,
  `punkt3` int(11) NOT NULL DEFAULT 0,
  `punkt4` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blanks`
--

INSERT INTO `blanks` (`id`, `user_id`, `punkt1`, `punkt2`, `punkt3`, `punkt4`, `created_at`, `updated_at`) VALUES
(1, 1, 3000, 600, 600, 100, '2023-02-05 03:29:03', '2023-02-05 03:29:03'),
(2, 2, 1000, 750, 90, 2000, '2023-02-06 05:59:40', '2023-02-06 05:59:40'),
(3, 2, 300, 1500, 200, 0, '2023-02-06 08:33:16', '2023-02-06 08:33:16'),
(4, 2, 1000, 600, 60, 475, '2023-02-09 04:49:51', '2023-02-09 04:49:51'),
(5, 2, 100, 900, 1000, 100, '2023-02-11 05:28:12', '2023-02-11 05:28:12'),
(6, 2, 1000, 900, 60, 300, '2023-02-13 10:49:42', '2023-02-13 10:49:42'),
(7, 2, 300, 300, 30, -920, '2023-02-14 08:30:21', '2023-02-14 08:30:21'),
(8, 2, 200, 300, 60, 200, '2023-02-14 08:37:47', '2023-02-14 08:37:47'),
(9, 2, 100, 900, 50, 300, '2023-02-14 12:08:40', '2023-02-14 12:08:40');

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id`, `faculty`, `created_at`, `updated_at`) VALUES
(1, 'ФМиМ', '2023-02-05 09:17:06', '2023-02-05 09:17:06'),
(2, 'ФТЭСу', '2023-02-05 09:17:06', '2023-02-05 09:17:06'),
(3, 'ФЭиС', '2023-02-05 09:17:06', '2023-02-05 09:17:06'),
(4, 'ТЭК', '2023-02-05 09:17:06', '2023-02-05 09:17:06');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_12_25_130807_create_departmetnts_table', 1),
(3, '2022_12_26_130834_create_cathedras_table', 1),
(4, '2023_01_12_000000_create_users_table', 1),
(5, '2023_02_13_130725_create_blanks_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `сathedra_id` bigint(20) UNSIGNED NOT NULL,
  `fio` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `department_id`, `сathedra_id`, `fio`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Жумагельдиев М.А.', 'user@user.com', '$2y$10$WJE4GtKZnnClMkYv8n0ks.GdR5qVd75Wf3i9o3VrfxYCTJ/in9Ovi', 'user', NULL, '2023-02-05 03:27:07', '2023-02-05 03:27:07'),
(2, 3, 8, 'Admin', 'admin@admin.ru', '$2y$10$NyUtaUGA56ehqzcauYpDteroZFe.6pXNRqTsQGJTSwWUK5OZzYky.', 'admin', NULL, '2023-02-05 03:30:14', '2023-02-05 03:30:14'),
(3, 1, 1, 'Фамилия', 'user@tttu.edu.kz', '$2y$10$KZOG3bSxkjD5vevF9emX9u1Blk7nqKd73QHGPmv8RKNostjSYpAVO', 'user', NULL, '2023-02-07 19:47:50', '2023-02-07 19:47:50'),
(4, 3, 8, 'Иванов И.И.', 'ivan@tttu.edu.kz', '$2y$10$VyOiaOIWjcVLLCodVLg3x.FFs9ADiQBsxacPjmcqcYREfkR7hlmhm', 'user', NULL, '2023-02-13 11:22:05', '2023-02-13 11:22:05');

-- --------------------------------------------------------

--
-- Структура таблицы `сathedras`
--

CREATE TABLE `сathedras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `сathedras`
--

INSERT INTO `сathedras` (`id`, `department_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, '«Металлургия и материаловедение»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(2, 1, '«Обработка металлов давлением»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(3, 1, '«Химическая технология и экология»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(4, 2, '«История Казахстана, социально-гуманитарные дисциплины»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(5, 2, '«Технологические машины и транспорт»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(6, 2, '«Технологии искусственного интеллекта»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(7, 2, '«Энергетика»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(8, 3, 'Экономика и бизнес', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(9, 3, 'Строительство', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(10, 3, '«Ассамблея народа Казахстана»', '2023-02-05 09:18:43', '2023-02-05 09:18:43'),
(11, 3, 'Общеобразовательные дисциплины', '2023-02-05 09:18:43', '2023-02-05 09:18:43');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blanks`
--
ALTER TABLE `blanks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blanks_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_сathedra_id_foreign` (`сathedra_id`);

--
-- Индексы таблицы `сathedras`
--
ALTER TABLE `сathedras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `сathedras_department_id_foreign` (`department_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blanks`
--
ALTER TABLE `blanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `сathedras`
--
ALTER TABLE `сathedras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `blanks`
--
ALTER TABLE `blanks`
  ADD CONSTRAINT `blanks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `users_сathedra_id_foreign` FOREIGN KEY (`сathedra_id`) REFERENCES `сathedras` (`id`);

--
-- Ограничения внешнего ключа таблицы `сathedras`
--
ALTER TABLE `сathedras`
  ADD CONSTRAINT `сathedras_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
