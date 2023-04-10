-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2023 a las 12:59:24
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Volcado de datos para la tabla `campanas`
--

INSERT INTO `campanas` (`edades`, `dosis`, `marca`, `dateDosis`, `dateAplic`, `modulo`, `domicilio`, `municipio`, `created_at`, `updated_at`) VALUES
('18 y más', 'Primera', '', '0000-00-00', '2023-05-04', 'Auditorio Benito Juarez', 'Av. Mariano Barcenas s/n, Col. Auditorio. 45910, Zapopan, Jalisco', 'Zapopan', NULL, NULL),
('Adultos mayores', 'Segunda', 'Astra Zenéca', '2020-08-15', '2023-04-15', 'CUCEI', 'Calz. Revolución 1459-1451, La Loma, 44410 Guadalajara, Jalisco', 'Guadalajara', NULL, NULL);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campanas`
--
ALTER TABLE `campanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
