-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 00:13:48
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
(4, 'Portafolio 2', 'c86aa9b9bf6db706e2d66bca0c7e6e46carolina_5.PNG', '<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit vestibulum, suscipit suspendisse pellentesque sed nascetur taciti himenaeos, dignissim odio fringilla egestas cras placerat congue. Sed at quis vulputate sagittis orci bibendum fringilla vestibulum, magnis parturient cubilia cras habitasse habitant eu dictum mauris, auctor justo aptent faucibus inceptos felis pretium. Venenatis urna volutpat phasellus blandit aptent iaculis hac euismod cum sapien, curae mi aliquet turpis ultricies a enim cubilia est velit, mauris non inceptos at ac platea diam dapibus ante.</p>\r\n\r\n<p>Praesent nunc fusce vivamus scelerisque erat dictumst, aenean pellentesque rhoncus himenaeos neque ultricies ligula, aliquam per convallis cras luctus. Tincidunt ligula cum turpis penatibus nec porttitor ut, ornare platea velit condimentum curabitur justo. Suspendisse sociis facilisis rutrum fusce placerat volutpat eros vitae torquent, nec iaculis velit est proin curae nascetur odio, turpis pellentesque potenti quam egestas erat et magnis.</p>\r\n\r\n<p>Rutrum urna sollicitudin nascetur ante sapien nunc conubia fermentum per non erat quis, placerat dictumst posuere integer hendrerit lacus senectus facilisis ultricies vehicula etiam nulla, massa enim sociis facilisi auctor volutpat risus aliquet pretium proin justo. Sagittis nibh nam dictum hac conubia porta aenean tellus, molestie dictumst mattis pulvinar donec mauris fusce facilisis ultricies, enim varius massa netus metus vivamus potenti. Quisque penatibus ligula magna gravida suspendisse curae vulputate euismod ultricies, nisl facilisi duis vivamus dui auctor cum aliquam nec, fringilla imperdiet faucibus inceptos phasellus pulvinar ullamcorper neque.</p>\r\n\r\n<p>Facilisis dapibus ligula interdum varius sagittis eget id, a aenean curae torquent lectus augue tempus laoreet, hac commodo ut ultricies maecenas mi. Imperdiet natoque egestas commodo lobortis parturient suspendisse praesent odio mattis quisque, magnis nostra mollis risus gravida molestie ut porta auctor, maecenas sollicitudin turpis himenaeos vestibulum dapibus in est euismod. Odio varius purus malesuada feugiat penatibus condimentum, augue dis sed sagittis faucibus aptent, ultrices cum felis placerat neque. Class congue diam porttitor habitasse in facilisis primis inceptos, vulputate sociis orci posuere praesent mauris non, fusce sapien ligula eros imperdiet et iaculis.</p>\r\n</div>\r\n', 'Proteus Soft', 'http://juandavidfranco.com/', 1, 0, '2012-02-07', 'Lorem ipsum dolor sit amet consectetur adipiscing elit vestibulum, suscipit suspendisse pellentesque sed nascetur taciti himenaeos, dignissim odio fringilla egestas cras placerat congue. Sed at quis vulputate sagittis orci bibendum fringilla vestibulum', 'Lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit,', '2018-11-24 16:33:10'),
(6, 'Portafolio 1', '1f8bc546bc0dc36e404fc1e3d94d32231-1.PNG', '<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit penatibus pharetra morbi, vulputate accumsan integer curabitur molestie vehicula velit nisi. Ultricies purus placerat ante ut est cum habitasse senectus conubia, nibh non enim cubilia lobortis turpis magna quis, volutpat rutrum sagittis parturient orci fusce mauris felis. Mauris sodales dui posuere donec inceptos tempus dictumst tellus ultrices, enim lobortis vel scelerisque aliquet commodo nec diam, accumsan dignissim nibh nascetur habitasse elementum curabitur mollis. Risus laoreet condimentum fames class neque vivamus augue nisl phasellus imperdiet metus, nibh conubia per ante porttitor orci nisi pharetra porta.</p>\r\n\r\n<p>Risus porta in ad varius duis eget congue primis platea, rutrum hendrerit et phasellus vestibulum gravida dictumst. Cubilia consequat nostra platea dictumst sed lobortis hac, dapibus ultrices sollicitudin interdum aliquam pharetra ornare, nec leo donec eget ad etiam. Eu sociosqu dui dictumst malesuada class enim nascetur in penatibus commodo condimentum dapibus pellentesque, faucibus suscipit sodales habitant laoreet gravida fames elementum torquent mollis sociis vehicula parturient, sapien interdum ultrices mi euismod hendrerit conubia cum vivamus cursus dictum et.</p>\r\n\r\n<p>Sapien class massa malesuada lobortis non ligula id, vulputate montes ornare facilisi etiam vitae hendrerit, euismod eget nec per lectus dis. Taciti et habitasse dignissim luctus mattis torquent blandit ac tristique nascetur orci, nostra himenaeos magna laoreet suscipit rutrum enim a id facilisis. Conubia eros inceptos cum tincidunt ligula urna, blandit suscipit pharetra laoreet ante at lectus, turpis pellentesque volutpat auctor odio. Elementum volutpat consequat risus etiam senectus inceptos donec posuere, porttitor sollicitudin fermentum justo tortor rhoncus morbi, habitant placerat potenti lectus interdum magnis velit.</p>\r\n\r\n<p>Eros tempus dis morbi metus pellentesque leo risus phasellus, pulvinar himenaeos hac bibendum ultrices mollis nisl fermentum venenatis, tortor praesent interdum maecenas ut condimentum nibh. Nascetur nunc tempor elementum tempus bibendum pharetra mauris rutrum morbi molestie in sociosqu eros parturient, eleifend nulla nam vulputate sapien per faucibus sodales sollicitudin integer magnis magna at. Vulputate penatibus cum tempus mattis suspendisse conubia at per eleifend vestibulum porttitor, aenean dictum fusce eros volutpat habitant non accumsan curabitur duis. Porta sodales nisl gravida arcu cum ullamcorper eros pellentesque dictumst, conubia quisque vivamus netus risus facilisi eget proin, eleifend ut faucibus platea vitae varius urna hac.</p>\r\n\r\n<p>Morbi ullamcorper dis nascetur facilisi facilisis neque parturient ad rutrum condimentum vivamus, eget nibh egestas nostra varius ultricies placerat justo enim. Vitae tempus elementum urna imperdiet taciti lacinia viverra lobortis torquent ad sem hac, condimentum vehicula id platea aenean cum penatibus nec mus dis convallis. In dapibus congue aenean cras varius, id nostra convallis ornare viverra, vitae lacinia nibh non.</p>\r\n</div>\r\n', 'Proteus Soft', 'http://imperibyte.com/', 0, 1, '1904-10-24', 'Lorem ipsum dolor sit amet consectetur adipiscing elit penatibus pharetra morbi, vulputate accumsan integer curabitur molestie vehicula velit nisi. Ultricies purus placerat ante ut est cum habitasse senectus conubia, nibh non enim cubilia lobortis turpis magna quis, volutpat rutrum sagittis parturient orci fusce mauris felis.', 'Lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit,', '2018-11-24 16:43:23');

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
(36, 1, 4, 'Lorem ipsum dolor 574', 'Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.', '<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.</p>\r\n\r\n<p>Nulla torquent etiam urna justo magnis molestie duis, sociosqu turpis mollis nostra eu feugiat elementum sagittis, dignissim tempus eget posuere cursus ultrices. Dictumst facilisis a taciti nam morbi odio curae maecenas, fusce conubia risus dapibus viverra ut nulla, non ullamcorper ultrices convallis rutrum accumsan sagittis. Cubilia dui parturient habitasse elementum tincidunt sollicitudin per vel purus euismod, dis mi hac mus conubia interdum hendrerit volutpat pellentesque, feugiat etiam inceptos urna duis ridiculus accumsan vehicula dignissim.</p>\r\n\r\n<p>Sem dapibus hac sollicitudin ornare posuere et curae eleifend mattis interdum viverra nisi, per ridiculus aptent nostra blandit aliquet malesuada bibendum quam taciti. Rhoncus in per nibh neque semper tristique sed, pulvinar venenatis sollicitudin praesent mauris lacinia, magnis quisque commodo etiam odio scelerisque. Nisi eu magnis nascetur dictumst facilisi cras blandit ultricies semper parturient ridiculus, non rhoncus dapibus in conubia laoreet cubilia himenaeos varius scelerisque, venenatis eros nullam praesent nunc ultrices mus vitae turpis porta.</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"output\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.</p>\r\n\r\n<p>Nulla torquent etiam urna justo magnis molestie duis, sociosqu turpis mollis nostra eu feugiat elementum sagittis, dignissim tempus eget posuere cursus ultrices. Dictumst facilisis a taciti nam morbi odio curae maecenas, fusce conubia risus dapibus viverra ut nulla, non ullamcorper ultrices convallis rutrum accumsan sagittis. Cubilia dui parturient habitasse elementum tincidunt sollicitudin per vel purus euismod, dis mi hac mus conubia interdum hendrerit volutpat pellentesque, feugiat etiam inceptos urna duis ridiculus accumsan vehicula dignissim.</p>\r\n\r\n<p>Sem dapibus hac sollicitudin ornare posuere et curae eleifend mattis interdum viverra nisi, per ridiculus aptent nostra blandit aliquet malesuada bibendum quam taciti. Rhoncus in per nibh neque semper tristique sed, pulvinar venenatis sollicitudin praesent mauris lacinia, magnis quisque commodo etiam odio scelerisque. Nisi eu magnis nascetur dictumst facilisi cras blandit ultricies semper parturient ridiculus, non rhoncus dapibus in conubia laoreet cubilia himenaeos varius scelerisque, venenatis eros nullam praesent nunc ultrices mus vitae turpis porta.</p>\r\n</div>\r\n', '4e21e23a9d7b88fe08c83834463b4f69carolina_3.PNG', 'lorem-ipsum-dolor-574', 1, 0, 'Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit fringilla faucibus at, arcu cubilia himenaeos sem proin imperdiet primis molestie sollicitudin, scelerisque inceptos maecenas mi donec rhoncus vel magna luctus. Massa vulputate a in suscipit viverra sociosqu lectus etiam maecenas, fringilla purus lacus venenatis faucibus torquent posuere himenaeos. At varius rutrum vulputate praesent pellentesque tellus nisl consequat, lobortis nam hac sodales elementum vivamus sapien, felis himenaeos a molestie fermentum augue nec.', '2018-11-18 20:58:41', NULL);

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
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `first_name` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `charge` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(220) COLLATE utf8_spanish_ci NOT NULL,
  `facebook` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `instagram` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `linkedin` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `twitter` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `first_name`, `last_name`, `charge`, `status`, `image`, `facebook`, `instagram`, `linkedin`, `twitter`, `created_at`) VALUES
(2, 'Steven', 'Munoz', 'Desarrollador', 1, 'bad5adf34c52f6f887d218ae66681717124.png', 'https://www.facebook.com/', 'https://www.instagram.com/?hl=es-la', 'https://www.linkedin.com/', 'https://twitter.com/?lang=es', '2018-11-23 02:05:45'),
(3, 'Juan ', 'Franco', 'Ingeniero', 1, 'fe147be6cfbf1c3ff0b983bfa37e0377547.png', 'https://www.facebook.com/', 'https://www.instagram.com/?hl=es-la', 'https://www.linkedin.com/', 'https://twitter.com/?lang=es', '2018-11-23 02:06:12'),
(4, 'Rosa ', 'Perez', 'Analista', 1, '4d77ccf4accf6dec9afcec3bfc563f20557.png', 'https://www.facebook.com/', 'https://www.instagram.com/?hl=es-la', 'https://www.linkedin.com/', 'https://twitter.com/?lang=es', '2018-11-23 02:08:18');

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
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
