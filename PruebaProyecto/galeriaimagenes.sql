-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 16:48:26
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
  `archivo` varchar(20) NOT NULL,
  `directorio` varchar(20) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeriaimagenes`
--

INSERT INTO `galeriaimagenes` (`id`, `archivo`, `directorio`, `fecha`) VALUES
(1, 'Portada', 'Img1.jpeg', '2019-09-23'),
(2, 'Personajes', 'Img2.jpg', '2019-09-23'),
(4, 'profedani', 'directoriofotos/crop', '2019-09-30'),
(7, 'Hello', 'directoriofotos/crop', '2019-10-02'),
(8, 'Pazos tonto', 'directoriofotos/crop', '2019-10-07'),
(9, 'Pazos tonto', 'directoriofotos/crop', '2019-10-07'),
(10, 'glepgd', 'directoriofotos/What', '2019-10-07'),
(11, 'glepgd', 'directoriofotos/What', '2019-10-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeriaimagenes`
--
ALTER TABLE `galeriaimagenes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeriaimagenes`
--
ALTER TABLE `galeriaimagenes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
