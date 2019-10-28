-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 17:50:54
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
-- Base de datos: `galeria_imagenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeriaimagenes`
--

CREATE TABLE `galeriaimagenes` (
  `id` int(3) NOT NULL,
  `archivo` varchar(100) NOT NULL,
  `directorio` varchar(100) NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeriaimagenes`
--

INSERT INTO `galeriaimagenes` (`id`, `archivo`, `directorio`, `fecha`, `id_usuario`) VALUES
(13, 'Fernando', 'directoriofotos/descarga.jpg', '2019-10-22', 1),
(51, 'test', 'directoriofotos/descarga (2).jpg', '2019-10-23', 1),
(52, '', 'directoriofotos/descarga (2).jpg', '2019-10-25', 1),
(53, 'CLA 45', 'directoriofotos/MercedesCLA45.jpg', '2019-10-25', 2),
(57, 'Clase A 35', 'directoriofotos/A35.jpg', '2019-10-25', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombre_usuario` text NOT NULL,
  `password_usuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombre_usuario`, `password_usuario`) VALUES
(1, 'fernando', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Dani', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeriaimagenes`
--
ALTER TABLE `galeriaimagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeriaimagenes`
--
ALTER TABLE `galeriaimagenes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galeriaimagenes`
--
ALTER TABLE `galeriaimagenes`
  ADD CONSTRAINT `galeriaimagenes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
