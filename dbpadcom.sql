-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 05 2022 г., 00:27
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dbpadcom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `division_full_name` varchar(32) NOT NULL DEFAULT 'None (Full Name)',
  `division_short_name` varchar(8) NOT NULL DEFAULT 'None',
  `division_leader` varchar(24) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `divisions`
--

INSERT INTO `divisions` (`id`, `division_full_name`, `division_short_name`, `division_leader`) VALUES
(1, 'Operations Support Services Div.', 'OSSD', 'Stephen_Banding');

-- --------------------------------------------------------

--
-- Структура таблицы `divisions_ranks`
--

CREATE TABLE `divisions_ranks` (
  `id` int(11) NOT NULL,
  `rank_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `divisions_ranks`
--

INSERT INTO `divisions_ranks` (`id`, `rank_name`) VALUES
(1, 'OSSD Deputy'),
(2, 'Ass.Head of OSSD'),
(3, 'Head of OSSD'),
(4, 'None'),
(5, 'None'),
(6, 'None'),
(7, 'None'),
(8, 'None'),
(9, 'None'),
(10, 'None'),
(11, 'None'),
(12, 'None');

-- --------------------------------------------------------

--
-- Структура таблицы `fractions`
--

CREATE TABLE `fractions` (
  `id` int(11) NOT NULL,
  `rank_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `fractions`
--

INSERT INTO `fractions` (`id`, `rank_name`) VALUES
(1, 'Sheriff\'s Academic'),
(2, 'Dep.Sheriff Trainee'),
(3, 'Dep.Sheriff II'),
(4, 'Dep.Sheriff III'),
(5, 'Detective'),
(6, 'Sergeant'),
(7, 'Lieutenant'),
(8, 'Captain I'),
(9, 'Captain II'),
(10, 'Dep.Ass.Sheriff'),
(11, 'Assist.Sheriff'),
(12, 'Sheriff');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_03_125631_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Администратор', 'web', '2022-01-03 09:59:43', '2022-01-03 09:59:43'),
(2, 'User', 'web', '2022-01-03 13:42:18', '2022-01-03 13:42:18'),
(3, 'Verified', 'web', '2022-01-03 13:43:19', '2022-01-03 13:43:19');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gamenickname` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT 'None',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `website` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addres` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kventa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://forum.pad-com.ru/src/images/sasdlogo.png',
  `status` int(4) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `marking` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ic_warn` int(5) DEFAULT 0,
  `ooc_warn` int(5) DEFAULT 0,
  `verbal_warn` int(5) DEFAULT 0,
  `station` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT '	El Quebrados Sheriff''s Office',
  `rank` int(3) DEFAULT 1,
  `division` int(32) DEFAULT NULL,
  `division_rank` int(11) DEFAULT 1,
  `online` int(1) DEFAULT 0,
  `verifed` int(1) DEFAULT 0,
  `admin` int(1) DEFAULT 0,
  `_token` date NOT NULL,
  `_method` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `full_name`, `gamenickname`, `email`, `email_verified_at`, `website`, `addres`, `kventa`, `avatar`, `status`, `password`, `remember_token`, `created_at`, `updated_at`, `marking`, `ic_warn`, `ooc_warn`, `verbal_warn`, `station`, `rank`, `division`, `division_rank`, `online`, `verifed`, `admin`, `_token`, `_method`) VALUES
(1, 'EQSO', 'Дмитрий Шлиханов', 'Mellisa_Harison', 'admin@pad-com.ru', NULL, NULL, NULL, '', 'https://forum.pad-com.ru/src/images/sasdlogo.png', 0, '$2y$10$Y13O0VwjqyN/HiwJpaZIde/.5DrvSJ./Acvzi8.tpQhMz0aq227.e', NULL, '2022-01-02 19:02:39', '2022-01-04 18:25:32', 'Dev', 0, 0, 0, '	El Quebrados Sheriff\'s Office', 1, 0, 1, 0, 0, 0, '0000-00-00', ''),
(2, 'ParkerDev', 'Артём Ермаков', 'Parker_Brandly', 'fycfy@inbox.ru', NULL, 'pad-com.ru', '\r\nSan Francisco', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto beatae cumque eaque fugiat fugit, harum hic ipsum magni neque nisi recusandae repudiandae sit soluta tempore velit voluptates! Consectetur, quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto beatae, corporis culpa delectus dolorem ex harum hic officiis perspiciatis quibusdam, reiciendis repellendus, sed tenetur veritatis voluptas voluptatem? Necessitatibus, qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at distinctio esse est eum iste itaque labore magnam minima molestiae nisi nostrum numquam obcaecati, quae quisquam, reiciendis, repellat soluta vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aperiam aspernatur dolor et eum fuga fugiat incidunt molestiae omnis pariatur reprehenderit voluptatem, voluptatum! Autem est inventore ipsum rerum ut.', 'https://forum.pad-com.ru/src/images/sasdlogo.png', NULL, '$2y$10$mnSbnUtfW4zIbqgDWl0g3.u8cIJlDK5DDuoQQl1MT4WnmlFQd.Gqu', NULL, '2022-01-03 14:30:30', '2022-01-04 18:24:40', 'Dev', 2, 3, 3, '	El Quebrados Sheriff\'s Office', 1, NULL, 1, 0, 1, 1, '0000-00-00', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `divisions`
--
ALTER TABLE `divisions`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `divisions_ranks`
--
ALTER TABLE `divisions_ranks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fractions`
--
ALTER TABLE `fractions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `divisions_ranks`
--
ALTER TABLE `divisions_ranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `fractions`
--
ALTER TABLE `fractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
