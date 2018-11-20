-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2018 a las 13:11:52
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imperibyte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_bin NOT NULL,
  `slug` varchar(70) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'php', '2018-09-16 11:09:34', '2018-09-22 10:09:24'),
(2, 'JQUERY', 'jquery', '2018-09-16 11:09:47', '2018-11-12 10:11:34'),
(3, 'CODEIGNITER', 'codeigniter', '2018-09-16 11:09:05', '0000-00-00 00:00:00'),
(4, 'LARAVEL', 'laravel', '2018-09-16 11:09:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `customer` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `date_port` date NOT NULL,
  `meta_description` text COLLATE utf8_spanish_ci NOT NULL,
  `meta_keywords` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `image`, `content`, `customer`, `url`, `status`, `featured`, `date_port`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(2, 'Lorem ipsum dolor_6137', '6349b6e8bb78afffd4dd87c81a7b65d2carolina_3.PNG', '<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis platea sollicitudin, et rhoncus cum aptent per vivamus egestas consequat curabitur ultricies duis, vestibulum class feugiat nascetur fringilla cursus arcu dis scelerisque. Phasellus purus odio ad imperdiet cubilia, ac duis tellus etiam, fames eleifend dui laoreet. Suspendisse tellus luctus quisque etiam ut nulla eros himenaeos elementum urna bibendum, ullamcorper leo consequat primis integer curabitur parturient risus suscipit nisi libero, cum iaculis arcu congue tempus tristique id interdum nisl est.</p>\r\n</div>\r\n', 'Juan Jose ', 'http://juandavidfranco.com/', 1, 1, '2018-11-19', 'Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis platea sollicitudin, et rhoncus cum aptent per vivamus egestas consequat curabitur ultricies duis, vestibulum class feugiat nascetur fringilla cursus arcu dis scelerisque.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis platea sollicitudin, et rhoncus cum aptent per vivamus egestas consequat curabitur ultricies duis, vestibulum class feugiat nascetur fringilla cursus arcu dis scelerisque.', '2018-11-20 02:01:42'),
(3, 'Lorem ipsum dolor 2587', 'f0ba5fc4d556dd3f7b198cdf4eef85941-1.PNG', '<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis platea sollicitudin, et rhoncus cum aptent per vivamus egestas consequat curabitur ultricies duis, vestibulum class feugiat nascetur fringilla cursus arcu dis scelerisque. Phasellus purus odio ad imperdiet cubilia, ac duis tellus etiam, fames eleifend dui laoreet. Suspendisse tellus luctus quisque etiam ut nulla eros himenaeos elementum urna bibendum, ullamcorper leo consequat primis integer curabitur parturient risus suscipit nisi libero, cum iaculis arcu congue tempus tristique id interdum nisl est.</p>\r\n</div>\r\n', 'Proteus Soft', 'https://platzi.com/', 1, 0, '2013-02-05', 'Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis platea sollicitudin, et rhoncus cum aptent per vivamus egestas consequat curabitur ultricies duis, vestibulum class feugiat nascetur fringilla cursus arcu dis scelerisque.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit venenatis platea sollicitudin, et rhoncus cum aptent per vivamus egestas consequat curabitur ultricies duis, vestibulum class feugiat nascetur fringilla cursus arcu dis scelerisque.', '2018-11-20 01:29:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `id_autor`, `category_id`, `title`, `excerpt`, `body`, `image`, `slug`, `status`, `featured`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(36, 1, 4, 'Lorem ipsum dolor 574', 'Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.', '<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.</p>\r\n\r\n<p>Nulla torquent etiam urna justo magnis molestie duis, sociosqu turpis mollis nostra eu feugiat elementum sagittis, dignissim tempus eget posuere cursus ultrices. Dictumst facilisis a taciti nam morbi odio curae maecenas, fusce conubia risus dapibus viverra ut nulla, non ullamcorper ultrices convallis rutrum accumsan sagittis. Cubilia dui parturient habitasse elementum tincidunt sollicitudin per vel purus euismod, dis mi hac mus conubia interdum hendrerit volutpat pellentesque, feugiat etiam inceptos urna duis ridiculus accumsan vehicula dignissim.</p>\r\n\r\n<p>Sem dapibus hac sollicitudin ornare posuere et curae eleifend mattis interdum viverra nisi, per ridiculus aptent nostra blandit aliquet malesuada bibendum quam taciti. Rhoncus in per nibh neque semper tristique sed, pulvinar venenatis sollicitudin praesent mauris lacinia, magnis quisque commodo etiam odio scelerisque. Nisi eu magnis nascetur dictumst facilisi cras blandit ultricies semper parturient ridiculus, non rhoncus dapibus in conubia laoreet cubilia himenaeos varius scelerisque, venenatis eros nullam praesent nunc ultrices mus vitae turpis porta.</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.</p>\r\n\r\n<p>Nulla torquent etiam urna justo magnis molestie duis, sociosqu turpis mollis nostra eu feugiat elementum sagittis, dignissim tempus eget posuere cursus ultrices. Dictumst facilisis a taciti nam morbi odio curae maecenas, fusce conubia risus dapibus viverra ut nulla, non ullamcorper ultrices convallis rutrum accumsan sagittis. Cubilia dui parturient habitasse elementum tincidunt sollicitudin per vel purus euismod, dis mi hac mus conubia interdum hendrerit volutpat pellentesque, feugiat etiam inceptos urna duis ridiculus accumsan vehicula dignissim.</p>\r\n\r\n<p>Sem dapibus hac sollicitudin ornare posuere et curae eleifend mattis interdum viverra nisi, per ridiculus aptent nostra blandit aliquet malesuada bibendum quam taciti. Rhoncus in per nibh neque semper tristique sed, pulvinar venenatis sollicitudin praesent mauris lacinia, magnis quisque commodo etiam odio scelerisque. Nisi eu magnis nascetur dictumst facilisi cras blandit ultricies semper parturient ridiculus, non rhoncus dapibus in conubia laoreet cubilia himenaeos varius scelerisque, venenatis eros nullam praesent nunc ultrices mus vitae turpis porta.</p>\r\n</div>\r\n', '4e21e23a9d7b88fe08c83834463b4f69carolina_3.PNG', 'lorem-ipsum-dolor-574', 1, 0, 'Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.', '2018-11-18 20:58:41', NULL),
(37, 1, 1, 'Publicacion #2', 'pellentesque pulvinar tincidunt quisque primis imperdiet sociosqu, interdum fusce eleifend placerat dictum senectus faucibus morbi nullam. Phasellus in et risus sodales mi maecenas rhoncus, malesuada interdum integer felis facilisis laoreet pharetra fusce, curae montes hendrerit lacus nunc erat.', '<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit nullam dignissim ad aliquam nulla, senectus magna netus tincidunt ultrices ante faucibus dis dictumst enim. Ac enim laoreet curabitur suspendisse netus augue fermentum potenti scelerisque, mauris rhoncus porta torquent parturient risus et mus phasellus, sapien feugiat vivamus facilisis tempor quam fusce congue. Sed ligula ridiculus nec lacus aliquam iaculis eu, cras magnis urna habitant vivamus per et, molestie hendrerit mi porttitor arcu dignissim.</p>\r\n\r\n<p>Potenti neque non ac ante cursus ultricies mus ridiculus sociosqu, arcu dictum rhoncus habitasse magna nulla scelerisque fusce, ultrices inceptos natoque molestie fringilla lacinia fames purus. Auctor rhoncus sapien sed sodales nullam maecenas suspendisse non laoreet, dictum urna elementum euismod sagittis dis egestas platea lectus cursus, rutrum ac primis dignissim neque vestibulum orci a. Viverra fringilla vestibulum ullamcorper aliquet rutrum duis porta erat urna, montes vivamus massa eu volutpat aptent fusce hendrerit, justo cras pulvinar euismod lobortis per facilisis class. Eleifend magnis libero etiam risus torquent feugiat interdum platea parturient habitasse semper auctor lacus molestie, habitant elementum porta in maecenas dictumst cras mi lobortis netus posuere commodo ornare.</p>\r\n\r\n<p>Tortor eu placerat dictumst nisl vel penatibus, est dapibus vestibulum conubia at ad, cursus malesuada suscipit dui metus. Duis fusce pulvinar eget vulputate non ligula magna bibendum, ridiculus euismod facilisi proin nullam pretium platea, libero phasellus turpis gravida varius conubia porttitor. Metus ligula litora mattis eleifend tellus nam id ultricies montes, natoque etiam cras dis class ut tempor diam sed taciti, sagittis hendrerit morbi vivamus est integer augue ullamcorper.</p>\r\n\r\n<p>Gravida rutrum molestie magnis erat parturient suspendisse ad, tristique duis platea tincidunt dignissim montes habitant, penatibus per vivamus fames eros placerat. Varius lacus urna vulputate a cum dictumst arcu vestibulum, rutrum dignissim dui interdum blandit justo malesuada, sed pellentesque cras fames mi mollis risus.</p>\r\n\r\n<p>Id aliquam nec interdum primis et facilisi pretium tellus iaculis elementum praesent mus, montes viverra fermentum nullam volutpat tincidunt ornare gravida class magnis luctus. Sapien massa purus morbi cubilia accumsan himenaeos interdum rutrum, urna aliquam ultricies nisl phasellus nunc curabitur, fermentum risus molestie donec hendrerit pellentesque condimentum. Dui integer pharetra habitant pellentesque pulvinar tincidunt quisque primis imperdiet sociosqu, interdum fusce eleifend placerat dictum senectus faucibus morbi nullam. Phasellus in et risus sodales mi maecenas rhoncus, malesuada interdum integer felis facilisis laoreet pharetra fusce, curae montes hendrerit lacus nunc erat.</p>\r\n</div>\r\n', '5d207016005258da641c3aba2db9a845carolina Mockup.jpg', 'publicacion-2', 0, 0, 'pellentesque pulvinar tincidunt quisque primis imperdiet sociosqu, interdum fusce eleifend placerat dictum senectus faucibus morbi nullam. Phasellus in et risus sodales mi maecenas rhoncus, malesuada interdum integer felis facilisis laoreet pharetra fusce, curae montes hendrerit lacus nunc erat.', 'pellentesque pulvinar tincidunt quisque primis imperdiet sociosqu, interdum fusce eleifend placerat dictum senectus faucibus morbi nullam. Phasellus in et risus sodales mi maecenas rhoncus, malesuada interdum integer felis facilisis laoreet pharetra fusce, curae montes hendrerit lacus nunc erat.', '2018-11-19 01:05:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `tag_slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `post_id`, `tag`, `tag_slug`, `created_at`) VALUES
(45, 36, 'php', 'php', '2018-11-18 20:58:41'),
(46, 36, 'jquery', 'jquery', '2018-11-18 20:58:41'),
(47, 36, 'ruby', 'ruby', '2018-11-18 20:58:41'),
(48, 37, 'news', 'news', '2018-11-19 01:05:15'),
(49, 37, 'post', 'post', '2018-11-19 01:05:15'),
(50, 37, 'fashion', 'fashion', '2018-11-19 01:05:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ip_address` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profile` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`, `email`, `password`, `ip_address`, `profile`) VALUES
(1, 'Juan', 'Franco', '612839cdda165060e1ca3d8a262932448.jpg', 'juanfranco561@gmail.com', 'e76babd84b222e0b6bb64c1022f5fae75bc7fc3d', '62.15.124.81', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.'),
(2, 'Angie', 'Salaz', NULL, 'juanfranco@gmail.com', 'e76babd84b222e0b6bb64c1022f5fae75bc7fc3', '45.36.205.232', ''),
(3, 'Jose Fernando', 'Carrillo', NULL, 'carrillo_33@gmail.com', 'kjhn2477765hkfg258', '127.0.0.1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris venenatis at est et elementum. Vivamus maximus tincidunt nibh vitae semper. Donec quis purus neque. Donec eget neque in risus sagittis commodo. Etiam vestibulum dolor vitae risus ornare, nec feugiat sem malesuada. Donec mattis ac nibh dictum egestas. '),
(4, 'Donaldo Franco', 'Perez', NULL, 'donaldo568@gmail.com', '1234', '127.0.0.1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris venenatis at est et elementum. Vivamus maximus tincidunt nibh vitae semper. Donec quis purus neque. Donec eget neque in risus sagittis commodo. Etiam vestibulum dolor vitae risus ornare, nec feugiat sem malesuada. Donec mattis ac nibh dictum egestas. '),
(5, 'Steven', 'Munoz', NULL, 'steven@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '127.0.0.1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris venenatis at est et elementum. Vivamus maximus tincidunt nibh vitae semper. Donec quis purus neque. Donec eget neque in risus sagittis commodo. Etiam vestibulum dolor vitae risus ornare, nec feugiat sem malesuada. Donec mattis ac nibh dictum egestas. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
