-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2021 a las 16:10:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ev1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `tema`, `titulo`, `contenido`) VALUES
(11, 'Terror', 'Tras la pista  ', 'Habían ocurrido hasta entonces seis asesinatos en serie en la ciudad. Mi compañero de piso, algo paranoico y en silla de ruedas, me dijo que le daba miedo salir a la calle. Un día, vi a agentes de Policía haciendo preguntas en la puerta del edificio. Corrí a contarle a mi amigo, pero solo encontré su silla de ruedas vacía.     '),
(13, 'Holaaooo', 'Saludo  ', 'Hola mundo  aaaaaaaa '),
(14, 'Ciencia', 'aaaa', 'asdfadf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id`, `tema`) VALUES
(1, 'Ciencia '),
(6, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(3, 'Andres', 'Soto', 'jsoto@mars.com', '$2y$10$71bg25spo.ENxCWJf6S8HOkhqz0hL57IVI6bWhX/ngh87nHlrLjGK'),
(4, 'Alan', 'Brito', 'ab@mail.com', '$2y$10$6DDVZzOfYFRGgqWeJiuWHuT6u8Z9erpxiAD1Fc2OYltMsrFgUNqGW'),
(5, 'Marcelo', 'García', 'm@mail.com', '$2y$10$eD0QQeuknZkgT8p/kcH4deIw1WEQ6bcCnW/P960OmDrALpzL9hW0O');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
