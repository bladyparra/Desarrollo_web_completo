-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2018 a las 17:44:28
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gdlwebcamp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `editado` datetime NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`, `editado`, `nivel`) VALUES
(1, 'admin', 'Bladimir Parra', '$2y$12$xUawVkyvhiciITfXPwgq0OCk9qtN9oONHZDFi7MESKqoe7qu05cnq', '0000-00-00 00:00:00', 1),
(5, 'admin2', 'Juan Perez', '$2y$12$gQveNNRv.ScnIRFyBGd7.OL/XXKjSquF8esYqCvB8UBiCjqLN07wW', '2018-08-10 21:55:15', 0),
(10, 'admin3', 'Manuel Gomez', '$2y$12$tXqrFzocUywT48oWRJ2Rq.Sdxplgg8lfnNxPCZwK6ZP/5upQfSToC', '2018-08-11 00:26:40', 0),
(13, 'admin4', 'Santiago Arango', '$2y$12$aN0rWg/OEsIlWcrkO1oAhOmLEOKx6X0TXCGF8OiUR7JL07E2bwvkK', '0000-00-00 00:00:00', 0),
(14, 'admin5', 'Wilson Taborda', '$2y$12$P7fZZHpOKH7Vkm59G0YWXumrlLuY6KIQA8Di7P/GmqGF9dGJQvAum', '0000-00-00 00:00:00', 0),
(15, 'admin6', 'Leonardo Alvarez', '$2y$12$zCaWXfu1XwVq/ZEyhCjDwO4Px/PPuHj1FSjFSkwD40EwqpngQShlO', '0000-00-00 00:00:00', 0),
(16, 'admin7', 'Edinson Duque', '$2y$12$j8kwc1gq.Eg228.mDXGjp.QUU7hTEmet6s3VUICJF62Z4kzGwv81y', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `icono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`) VALUES
(1, 'Seminario', 'fa-university'),
(2, 'Conferencias', 'fa-comment'),
(3, 'Talleres', 'fa-code');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_categoria` tinyint(10) NOT NULL,
  `id_invitados` tinyint(4) NOT NULL,
  `clave` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_categoria`, `id_invitados`, `clave`) VALUES
(1, 'Responsive Web Design', '2016-12-09', '10:00:00', 3, 1, 'taller_01'),
(2, 'Flexbox', '2016-12-09', '12:00:00', 3, 2, 'taller_02'),
(3, 'HTML5 y CSS3', '2016-12-09', '14:00:00', 3, 3, 'taller_03'),
(4, 'Drupal', '2016-12-09', '17:00:00', 3, 4, 'taller_04'),
(5, 'WordPress', '2016-12-09', '19:00:00', 3, 5, 'taller_05'),
(6, 'Como ser freelancer', '2016-12-09', '10:00:00', 2, 6, 'conf_01'),
(7, 'Tecnologías del Futuro', '2016-12-09', '17:00:00', 2, 1, 'conf_02'),
(8, 'Seguridad en la Web', '2016-12-09', '19:00:00', 2, 2, 'conf_03'),
(9, 'Diseño UI y UX para móviles', '2016-12-09', '10:00:00', 1, 6, 'sem_01'),
(10, 'AngularJS', '2016-12-10', '10:00:00', 3, 1, 'taller_06'),
(11, 'PHP y MySQL', '2016-12-10', '12:00:00', 3, 2, 'taller_07'),
(12, 'JavaScript Avanzado', '2016-12-10', '14:00:00', 3, 3, 'taller_08'),
(13, 'SEO en Google', '2016-12-10', '17:00:00', 3, 4, 'taller_09'),
(14, 'De Photoshop a HTML5 y CSS3', '2016-12-10', '19:00:00', 3, 5, 'taller_10'),
(15, 'PHP Intermedio y Avanzado', '2016-12-10', '21:00:00', 3, 6, 'taller_11'),
(16, 'Como crear una tienda online que venda millones en pocos día', '2016-12-10', '10:00:00', 2, 6, 'conf_04'),
(17, 'Los mejores lugares para encontrar trabajo', '2016-12-10', '17:00:00', 2, 1, 'conf_05'),
(18, 'Pasos para crear un negocio rentable ', '2016-12-10', '19:00:00', 2, 2, 'conf_06'),
(19, 'Aprende a Programar en una mañana', '2016-12-10', '10:00:00', 1, 3, 'sem_02'),
(20, 'Diseño UI y UX para móviles', '2016-12-10', '17:00:00', 1, 5, 'sem_03'),
(21, 'Laravel', '2016-12-11', '10:00:00', 3, 1, 'taller_12'),
(22, 'Crea tu propia API', '2016-12-11', '12:00:00', 3, 2, 'taller_13'),
(23, 'JavaScript y jQuery', '2016-12-11', '14:00:00', 3, 3, 'taller_14'),
(24, 'Creando Plantillas para WordPress', '2016-12-11', '17:00:00', 3, 4, 'taller_15'),
(25, 'Tiendas Virtuales en Magento', '2016-12-11', '19:00:00', 3, 5, 'taller_16'),
(26, 'Como hacer Marketing en línea', '2016-12-11', '10:00:00', 2, 6, 'conf_07'),
(27, '¿Con que lenguaje debo empezar?', '2016-12-11', '17:00:00', 2, 2, 'conf_08'),
(28, 'Frameworks y librerias Open Source', '2016-12-11', '19:00:00', 2, 3, 'conf_09'),
(29, 'Creando una App en Android en una mañana', '2016-12-11', '10:00:00', 1, 4, 'sem_04'),
(30, 'Creando una App en iOS en una tarde', '2016-12-11', '17:00:00', 1, 1, 'sem_05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `invitados_id` tinyint(4) NOT NULL,
  `nombre_invitado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_invitado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `url_imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`invitados_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
(1, 'Rafael', 'Bautista', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est incidunt nihil sapiente deserunt natus veniam possimus tenetur ratione. Excepturi quasi, sit ipsa corrupti suscipit molestias ad aut nesciunt cumque sint!', 'invitado1.jpg'),
(2, 'Shari', 'Herrera', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est incidunt nihil sapiente deserunt natus veniam possimus tenetur ratione. Excepturi quasi, sit ipsa corrupti suscipit molestias ad aut nesciunt cumque sint!', 'invitado2.jpg'),
(3, 'Gregorio', 'Sánchez', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est incidunt nihil sapiente deserunt natus veniam possimus tenetur ratione. Excepturi quasi, sit ipsa corrupti suscipit molestias ad aut nesciunt cumque sint!', 'invitado3.jpg'),
(4, 'Susana', 'Rivera', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est incidunt nihil sapiente deserunt natus veniam possimus tenetur ratione. Excepturi quasi, sit ipsa corrupti suscipit molestias ad aut nesciunt cumque sint!', 'invitado4.jpg'),
(5, 'Harold', 'Gárcia', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est incidunt nihil sapiente deserunt natus veniam possimus tenetur ratione. Excepturi quasi, sit ipsa corrupti suscipit molestias ad aut nesciunt cumque sint!', 'invitado5.jpg'),
(6, 'Susan', 'Sánchez', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est incidunt nihil sapiente deserunt natus veniam possimus tenetur ratione. Excepturi quasi, sit ipsa corrupti suscipit molestias ad aut nesciunt cumque sint!', 'invitado6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `ID_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`ID_regalo`, `nombre_regalo`) VALUES
(1, 'Pulsera'),
(2, 'Etiquetas'),
(3, 'Plumas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `ID_Registrado` bigint(20) UNSIGNED NOT NULL,
  `nombre_registrado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_registrado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email_registrado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext COLLATE utf8_spanish_ci NOT NULL,
  `talleres_registrados` longtext COLLATE utf8_spanish_ci NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pagado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_invitados` (`id_invitados`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitados_id`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`ID_regalo`);

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`ID_Registrado`),
  ADD KEY `regalo` (`regalo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `ID_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `ID_Registrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
