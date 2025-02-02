-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-02-2025 a las 19:15:12
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `en_bajada_bike_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bikes`
--

CREATE TABLE `bikes` (
  `bike_id` int NOT NULL,
  `bike_brand` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `bike_type` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `bike_color` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `bike_size` char(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `bike_desc` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `id_image` int NOT NULL,
  `name_image` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `note_image` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `route_image` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `priori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`id_image`, `name_image`, `note_image`, `route_image`, `status`, `priori`) VALUES
(1, 'carro1', NULL, '1738523429_456.jpeg', 1, 1),
(2, 'carro2', NULL, '1738523588_419.jpeg', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charges`
--

CREATE TABLE `charges` (
  `charge_id` int NOT NULL COMMENT 'id unico de cada rol',
  `charge_name` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'nombre del rol',
  `charge_desc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'descripcion del rol o permisos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `charges`
--

INSERT INTO `charges` (`charge_id`, `charge_name`, `charge_desc`) VALUES
(1, 'Super-Admin', 'acceso a todo'),
(2, 'Admin', 'admin con acceso completo pero no total'),
(7, 'Aliado', 'ally o aliado del sistema'),
(8, 'Usuario', 'usuario comun o consumidor ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id_event` int NOT NULL,
  `name_event` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `route_image` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `priori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transports`
--

CREATE TABLE `transports` (
  `id_transport` int NOT NULL,
  `origin` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `destination` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `date_origin` timestamp NULL DEFAULT NULL,
  `date_destination` timestamp NULL DEFAULT NULL,
  `url_eta` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL COMMENT 'id unico del usuario',
  `user_tipe_doc` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'tipo de documento ti, cc, ce, pep',
  `user_num_doc` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'numero de documento del usuario',
  `user_name` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'nombre del usuario ',
  `user_last_name` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'apellidos del usuario ',
  `user_email` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'correo del usuario ',
  `user_pwd` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'contraseña del usuario ',
  `user_phone` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'telefono del usuario ',
  `user_charge` int DEFAULT NULL COMMENT 'rol o cargo dentro del sistema',
  `user_image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'ruta de la imagen donde se alaceno la imagen de perfil del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user_tipe_doc`, `user_num_doc`, `user_name`, `user_last_name`, `user_email`, `user_pwd`, `user_phone`, `user_charge`, `user_image`) VALUES
(3, 'CC', '1119217998', 'jose', 'bohorquez', 'jb@gmail.com', 'abc123', '3178773186', 1, '1119217998.png'),
(4, 'CC', '1003923520', 'luis', 'bohorquez', 'lb@gmail.com', '1234567890', '3023031831', 2, '1003923520.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`bike_id`);

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_image`);

--
-- Indices de la tabla `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`charge_id`) USING BTREE;

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indices de la tabla `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id_transport`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_num_doc` (`user_num_doc`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_phone` (`user_phone`),
  ADD KEY `FK_users_charges` (`user_charge`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bikes`
--
ALTER TABLE `bikes`
  MODIFY `bike_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_image` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `charges`
--
ALTER TABLE `charges`
  MODIFY `charge_id` int NOT NULL AUTO_INCREMENT COMMENT 'id unico de cada rol', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transports`
--
ALTER TABLE `transports`
  MODIFY `id_transport` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT COMMENT 'id unico del usuario', AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_charges` FOREIGN KEY (`user_charge`) REFERENCES `charges` (`charge_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
