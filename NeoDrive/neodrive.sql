-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 20:55:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `neodrive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `softwares`
--

CREATE TABLE `softwares` (
  `usuario` varchar(30) NOT NULL,
  `Software` text NOT NULL,
  `status` text NOT NULL,
  `llave` varchar(10) NOT NULL,
  `ID_de_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nombre` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `pais` text NOT NULL,
  `vehiculos` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombre`, `email`, `password`, `telefono`, `direccion`, `pais`, `vehiculos`, `id`) VALUES
('sofia', 'sofi_fuffly@hotmail.com', '$2y$10$pkaSxMgq/eWg0', 2147483647, '', 'mexico', '', 1),
('sofia', 'Sofia_1@NeoDrive.co', '$2y$10$8ubg4T8aifu2E', 2147483647, '', 'mexico', '', 3),
('test', 'test@test.com', '$2y$10$vnLXPXHte5l5K', 2147483647, '', 'mexico', '', 4),
('Sofia ', 'shiutzushimizu@hotmail.com', '$2y$10$/i9rgP.Y0To0/', 2147483647, '', 'mexico', '', 5),
('diego', 'diego@NeoDrive.co', '$2y$10$OMtidGIXk.lWs', 2147483647, '', 'mexico', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `usuario` varchar(30) NOT NULL,
  `vehiculo` varchar(30) NOT NULL,
  `matricula` varchar(20) DEFAULT NULL,
  `vin` varchar(17) NOT NULL,
  `status` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `softwares`
--
ALTER TABLE `softwares`
  ADD PRIMARY KEY (`ID_de_venta`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `softwares`
--
ALTER TABLE `softwares`
  MODIFY `ID_de_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
