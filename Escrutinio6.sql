-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2019 a las 20:16:46
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project-sysvot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agrupacionespoliticas`
--

CREATE TABLE `agrupacionespoliticas` (
  `idAgrupacionesPoliticas` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `numero` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agrupacionespoliticas`
--

INSERT INTO `agrupacionespoliticas` (`idAgrupacionesPoliticas`, `nombre`, `numero`, `created_at`, `updated_at`) VALUES
(1, 'Frente de Todos', 503, NULL, NULL),
(2, 'Juntos Frente por el cambio', 506, NULL, NULL),
(14, 'Votos No Validos', 2, '2019-10-10 18:58:52', '2019-10-21 21:49:00'),
(19, 'GEM', 69, '2019-10-25 23:48:54', '2019-10-25 23:48:54'),
(20, 'Consenso Federal', 504, '2019-10-25 23:49:45', '2019-10-25 23:49:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agrupoliticas`
--

CREATE TABLE `agrupoliticas` (
  `idAgrupacionesPoliticas` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargoselectivos`
--

CREATE TABLE `cargoselectivos` (
  `idCargosElectivos` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `Comicios_idComicios` int(11) NOT NULL,
  `TiposCargosElectivos_idTiposCargosElectivos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargoselectivos`
--

INSERT INTO `cargoselectivos` (`idCargosElectivos`, `nombre`, `Comicios_idComicios`, `TiposCargosElectivos_idTiposCargosElectivos`, `created_at`, `updated_at`) VALUES
(1, 'Presidente', 1, 1, NULL, NULL),
(2, 'Gobernador', 1, 1, NULL, NULL),
(3, 'Senador', 1, 1, NULL, NULL),
(4, 'Intendecia', 1, 1, NULL, NULL),
(5, 'Diputado', 1, 1, NULL, NULL),
(6, 'Concejal', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circuitos`
--

CREATE TABLE `circuitos` (
  `idCircuitos` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `Secciones_idSecciones` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `circuitos`
--

INSERT INTO `circuitos` (`idCircuitos`, `nombre`, `numero`, `Secciones_idSecciones`, `created_at`, `updated_at`) VALUES
(1, 'San Isidro', '72', 8, '2019-12-11 03:00:00', '2019-10-25 17:29:21'),
(2, 'Sumalao', '75', 8, '2019-10-22 19:07:07', '2019-10-25 17:29:46'),
(5, 'Huaycama', '69', 8, '2019-10-25 17:25:32', '2019-10-25 17:25:32'),
(6, 'Las Tejas', '70', 8, '2019-10-25 17:25:49', '2019-12-08 10:13:07'),
(7, 'El Portezuelo', '71', 8, '2019-10-25 17:26:13', '2019-10-25 17:26:13'),
(9, 'Santa Rosa', '73', 8, '2019-10-25 17:27:01', '2019-10-25 17:27:01'),
(11, 'Villa Dolores', '76', 8, '2019-10-25 17:28:18', '2019-10-25 17:28:18'),
(12, 'Santa Cruz', '73', 8, '2019-10-25 17:30:55', '2019-10-25 17:30:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comicios`
--

CREATE TABLE `comicios` (
  `idComicios` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `TipoComicio_idTipoComicio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comicios`
--

INSERT INTO `comicios` (`idComicios`, `nombre`, `fecha`, `TipoComicio_idTipoComicio`, `created_at`, `updated_at`) VALUES
(1, 'paso', '2019-08-11', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comicios_has_mesas`
--

CREATE TABLE `comicios_has_mesas` (
  `idComiciosHasMesas` int(11) NOT NULL,
  `Comicios_idComicios` int(11) NOT NULL,
  `Mesas_idMesas` int(11) NOT NULL,
  `CantidadElectores` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `votantes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comicios_has_mesas`
--

INSERT INTO `comicios_has_mesas` (`idComiciosHasMesas`, `Comicios_idComicios`, `Mesas_idMesas`, `CantidadElectores`, `created_at`, `updated_at`, `votantes`) VALUES
(1, 1, 1, 336, '2019-10-25 17:22:45', '2019-10-25 06:41:33', NULL),
(8, 1, 2, 337, '2019-10-25 17:22:45', '2019-10-25 17:22:45', NULL),
(38, 1, 74, 209, '2019-10-25 19:34:28', '2019-10-25 19:34:28', NULL),
(39, 1, 75, 286, '2019-10-25 19:34:58', '2019-10-25 19:34:58', NULL),
(40, 1, 76, 288, '2019-10-25 19:36:18', '2019-10-25 19:36:18', NULL),
(41, 1, 77, 199, '2019-10-25 19:36:45', '2019-10-25 19:36:45', NULL),
(42, 1, 78, 200, '2019-10-25 19:37:06', '2019-10-25 19:37:06', NULL),
(43, 1, 79, 337, '2019-10-25 19:38:57', '2019-10-25 19:38:57', NULL),
(44, 1, 80, 336, '2019-10-25 19:39:18', '2019-10-25 19:39:18', NULL),
(45, 1, 81, 336, '2019-10-25 19:39:33', '2019-11-29 04:43:08', 289),
(46, 1, 82, 337, '2019-10-25 20:18:39', '2019-10-25 20:18:39', NULL),
(47, 1, 83, 337, '2019-10-25 20:19:16', '2019-10-25 20:19:16', NULL),
(48, 1, 84, 337, '2019-10-25 20:19:39', '2019-10-25 20:19:39', NULL),
(49, 1, 85, 337, '2019-10-25 20:19:58', '2019-10-25 20:19:58', NULL),
(50, 1, 86, 337, '2019-10-25 20:20:13', '2019-10-25 20:20:13', NULL),
(51, 1, 87, 336, '2019-10-25 20:20:49', '2019-10-25 20:20:49', NULL),
(52, 1, 88, 344, '2019-10-25 20:21:08', '2019-10-25 20:21:08', NULL),
(53, 1, 89, 282, '2019-10-25 20:21:25', '2019-11-25 19:12:24', 282),
(54, 1, 90, 337, '2019-10-25 20:21:42', '2019-10-25 20:21:42', NULL),
(55, 1, 91, 337, '2019-10-25 20:21:56', '2019-10-25 20:21:56', NULL),
(56, 1, 92, 338, '2019-10-25 20:22:16', '2019-10-25 20:22:16', NULL),
(57, 1, 93, 337, '2019-10-25 20:22:36', '2019-10-25 20:22:36', NULL),
(58, 1, 94, 336, '2019-10-25 20:22:50', '2019-10-25 20:22:50', NULL),
(59, 1, 95, 341, '2019-10-25 20:23:39', '2019-10-25 20:23:39', NULL),
(60, 1, 96, 337, '2019-10-25 20:24:00', '2019-10-25 20:24:00', NULL),
(61, 1, 97, 337, '2019-10-25 20:25:48', '2019-10-25 20:25:48', NULL),
(62, 1, 98, 337, '2019-10-25 20:26:03', '2019-12-10 14:47:42', 0),
(63, 1, 99, 337, '2019-10-25 20:26:22', '2019-10-25 20:26:22', NULL),
(64, 1, 100, 337, '2019-10-25 20:26:35', '2019-10-25 20:26:35', NULL),
(65, 1, 101, 336, '2019-10-25 20:26:49', '2019-12-10 15:13:52', 281),
(66, 1, 102, 336, '2019-10-25 20:27:19', '2019-10-25 20:27:19', NULL),
(67, 1, 103, 336, '2019-10-25 20:27:31', '2019-10-25 20:27:31', NULL),
(68, 1, 104, 340, '2019-10-25 20:27:45', '2019-10-25 20:27:45', NULL),
(69, 1, 105, 194, '2019-10-25 20:28:32', '2019-10-25 20:28:32', NULL),
(70, 1, 106, 345, '2019-10-25 20:28:54', '2019-10-25 20:28:54', NULL),
(71, 1, 107, 343, '2019-10-25 20:29:08', '2019-10-25 20:29:08', NULL),
(72, 1, 108, 343, '2019-10-25 20:29:24', '2019-10-25 20:29:24', NULL),
(73, 1, 109, 343, '2019-10-25 20:29:41', '2019-10-25 20:29:41', NULL),
(74, 1, 110, 343, '2019-10-25 20:30:05', '2019-10-25 20:30:05', NULL),
(75, 1, 111, 343, '2019-10-25 20:30:32', '2019-10-25 20:30:32', NULL),
(76, 1, 112, 341, '2019-10-25 20:30:48', '2019-10-25 20:30:48', NULL),
(77, 1, 113, 342, '2019-10-25 20:31:10', '2019-10-25 20:31:10', NULL),
(78, 1, 114, 343, '2019-10-25 20:31:34', '2019-10-25 20:31:34', NULL),
(79, 1, 115, 348, '2019-10-25 20:32:34', '2019-10-25 20:32:34', NULL),
(80, 1, 116, 343, '2019-10-25 20:33:03', '2019-10-25 20:33:03', NULL),
(81, 1, 117, 343, '2019-10-25 20:33:19', '2019-10-25 20:33:19', NULL),
(82, 1, 118, 343, '2019-10-25 20:33:57', '2019-10-25 20:33:57', NULL),
(83, 1, 119, 343, '2019-10-25 20:34:17', '2019-10-25 20:34:17', NULL),
(84, 1, 120, 343, '2019-10-25 20:34:31', '2019-10-25 20:34:31', NULL),
(85, 1, 121, 342, '2019-10-25 20:36:33', '2019-10-25 20:36:33', NULL),
(86, 1, 122, 343, '2019-10-25 20:36:54', '2019-10-25 20:36:54', NULL),
(87, 1, 123, 343, '2019-10-25 20:37:12', '2019-10-25 20:37:12', NULL),
(88, 1, 124, 343, '2019-10-25 20:37:31', '2019-10-25 20:37:31', NULL),
(89, 1, 125, 343, '2019-10-25 20:38:43', '2019-10-25 20:38:43', NULL),
(90, 1, 126, 343, '2019-10-25 20:39:02', '2019-10-25 20:39:02', NULL),
(91, 1, 127, 347, '2019-10-25 20:39:40', '2019-10-25 20:39:40', NULL),
(92, 1, 128, 317, '2019-10-25 20:53:44', '2019-10-25 20:53:44', NULL),
(93, 1, 129, 317, '2019-10-25 20:54:04', '2019-10-25 20:54:04', NULL),
(94, 1, 130, 317, '2019-10-25 20:54:46', '2019-10-25 20:54:46', NULL),
(95, 1, 131, 316, '2019-10-25 20:56:46', '2019-10-25 20:56:46', NULL),
(96, 1, 132, 318, '2019-10-25 20:57:02', '2019-10-25 20:57:02', NULL),
(97, 1, 133, 317, '2019-10-25 20:57:26', '2019-10-25 20:57:26', NULL),
(98, 1, 134, 317, '2019-10-25 20:57:46', '2019-10-25 20:57:46', NULL),
(99, 1, 135, 317, '2019-10-25 20:58:09', '2019-10-25 20:58:09', NULL),
(100, 1, 136, 317, '2019-10-25 20:58:43', '2019-10-25 20:58:43', NULL),
(101, 1, 137, 317, '2019-10-25 20:59:02', '2019-10-25 20:59:02', NULL),
(102, 1, 138, 320, '2019-10-25 20:59:32', '2019-10-25 20:59:32', NULL),
(103, 1, 139, 330, '2019-10-25 21:01:07', '2019-10-25 21:01:07', NULL),
(104, 1, 140, 331, '2019-10-25 21:01:27', '2019-10-25 21:01:27', NULL),
(105, 1, 141, 331, '2019-10-25 21:01:47', '2019-10-25 21:01:47', NULL),
(106, 1, 142, 330, '2019-10-25 21:02:15', '2019-10-25 21:02:15', NULL),
(107, 1, 143, 330, '2019-10-25 21:02:39', '2019-10-25 21:02:39', NULL),
(108, 1, 144, 330, '2019-10-25 21:03:09', '2019-10-25 21:03:09', NULL),
(109, 1, 145, 330, '2019-10-25 21:03:24', '2019-10-25 21:03:24', NULL),
(110, 1, 146, 330, '2019-10-25 21:06:05', '2019-10-25 21:06:05', NULL),
(111, 1, 147, 329, '2019-10-25 21:07:10', '2019-10-25 21:07:10', NULL),
(112, 1, 148, 330, '2019-10-25 21:07:30', '2019-10-25 21:07:30', NULL),
(113, 1, 149, 334, '2019-10-25 21:08:04', '2019-10-25 21:08:04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escrutinios`
--

CREATE TABLE `escrutinios` (
  `idEscrutinios` int(11) NOT NULL,
  `Comicios_has_Mesas` int(11) NOT NULL,
  `ListaInter_has_CargosElectivos` int(11) NOT NULL,
  `voto` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `escrutinios`
--

INSERT INTO `escrutinios` (`idEscrutinios`, `Comicios_has_Mesas`, `ListaInter_has_CargosElectivos`, `voto`, `timestamp`, `usuario`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(2, 1, 2, 4, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(3, 1, 3, 4, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(4, 1, 4, 1, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(5, 1, 5, 1, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(6, 1, 6, 142, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(7, 1, 10, 2, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(8, 1, 11, 3, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(9, 1, 12, 4, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(10, 1, 13, 5, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(11, 1, 14, 6, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(12, 1, 15, 7, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(13, 1, 7, 8, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(13, 1, 26, 114, NULL, '1', NULL, NULL, NULL),
(14, 1, 8, 9, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(14, 1, 27, 100, NULL, '1', NULL, NULL, NULL),
(15, 1, 9, 10, '2019-10-28 00:00:00', '1', NULL, NULL, NULL),
(15, 1, 28, 100, NULL, '1', NULL, NULL, NULL),
(16, 1, 29, 100, NULL, '1', NULL, NULL, NULL),
(17, 1, 30, 100, NULL, '1', NULL, NULL, NULL),
(18, 1, 31, 100, NULL, '1', NULL, NULL, NULL),
(19, 1, 32, 100, NULL, '1', NULL, NULL, NULL),
(20, 1, 33, 100, NULL, '1', NULL, NULL, NULL),
(21, 1, 34, 100, NULL, '1', NULL, NULL, NULL),
(22, 1, 35, 100, NULL, '1', NULL, NULL, NULL),
(23, 1, 36, 100, NULL, '1', NULL, NULL, NULL),
(24, 1, 37, 100, NULL, '1', NULL, NULL, NULL),
(25, 1, 38, 100, NULL, '1', NULL, NULL, NULL),
(26, 1, 39, 100, NULL, '1', NULL, NULL, NULL),
(27, 53, 1, 7, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(28, 53, 2, 10, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(29, 53, 3, 10, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(30, 53, 4, 8, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(31, 53, 5, 8, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(32, 53, 6, 131, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(33, 53, 7, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(34, 53, 8, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(35, 53, 9, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(36, 53, 10, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(37, 53, 11, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(38, 53, 12, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(39, 53, 13, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(40, 53, 14, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(41, 53, 15, 0, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(42, 53, 26, 112, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(43, 53, 27, 112, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(44, 53, 28, 135, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(45, 53, 29, 128, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(46, 53, 30, 13, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(47, 53, 31, 12, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(48, 53, 32, 12, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(49, 53, 33, 14, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(50, 53, 34, 14, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(51, 53, 35, 85, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(52, 53, 36, 97, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(53, 53, 37, 79, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(54, 53, 38, 108, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(55, 53, 39, 96, NULL, '3', NULL, '2019-11-25 19:09:05', '2019-11-25 19:09:05'),
(56, 45, 1, 2, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(57, 45, 2, 5, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(58, 45, 3, 4, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(59, 45, 4, 6, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(60, 45, 5, 5, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(61, 45, 6, 131, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(62, 45, 7, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(63, 45, 8, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(64, 45, 9, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(65, 45, 10, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(66, 45, 11, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(67, 45, 12, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(68, 45, 13, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(69, 45, 14, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(70, 45, 15, 0, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(71, 45, 26, 105, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(72, 45, 27, 111, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(73, 45, 28, 110, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(74, 45, 29, 105, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(75, 45, 30, 9, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(76, 45, 31, 7, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(77, 45, 32, 18, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(78, 45, 33, 7, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(79, 45, 34, 8, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(80, 45, 35, 110, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(81, 45, 36, 136, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(82, 45, 37, 106, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(83, 45, 38, 141, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(84, 45, 39, 133, NULL, '3', NULL, '2019-11-29 04:43:08', '2019-11-29 04:43:08'),
(85, 62, 1, 7, NULL, '3', NULL, '2019-12-10 14:47:41', '2019-12-10 14:47:41'),
(86, 62, 2, 5, NULL, '3', NULL, '2019-12-10 14:47:41', '2019-12-10 14:47:41'),
(87, 62, 3, 6, NULL, '3', NULL, '2019-12-10 14:47:41', '2019-12-10 14:47:41'),
(88, 62, 4, 4, NULL, '3', NULL, '2019-12-10 14:47:41', '2019-12-10 14:47:41'),
(89, 62, 5, 6, NULL, '3', NULL, '2019-12-10 14:47:41', '2019-12-10 14:47:41'),
(90, 62, 6, 133, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(91, 62, 7, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(92, 62, 8, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(93, 62, 9, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(94, 62, 10, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(95, 62, 11, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(96, 62, 12, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(97, 62, 13, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(98, 62, 14, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(99, 62, 15, 0, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(100, 62, 26, 124, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(101, 62, 27, 129, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(102, 62, 28, 134, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(103, 62, 29, 126, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(104, 62, 30, 8, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(105, 62, 31, 8, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(106, 62, 32, 12, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(107, 62, 33, 7, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(108, 62, 34, 9, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(109, 62, 35, 85, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(110, 62, 36, 112, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(111, 62, 37, 87, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(112, 62, 38, 119, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(113, 62, 39, 109, NULL, '3', NULL, '2019-12-10 14:47:42', '2019-12-10 14:47:42'),
(114, 65, 1, 8, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(115, 65, 2, 5, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(116, 65, 3, 4, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(117, 65, 4, 8, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(118, 65, 5, 5, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(119, 65, 6, 158, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(120, 65, 7, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(121, 65, 8, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(122, 65, 9, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(123, 65, 10, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(124, 65, 11, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(125, 65, 12, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(126, 65, 13, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(127, 65, 14, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(128, 65, 15, 0, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(129, 65, 26, 148, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(130, 65, 27, 148, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(131, 65, 28, 153, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(132, 65, 29, 151, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(133, 65, 30, 6, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(134, 65, 31, 6, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(135, 65, 32, 10, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(136, 65, 33, 5, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(137, 65, 34, 5, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(138, 65, 35, 75, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(139, 65, 36, 85, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(140, 65, 37, 75, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(141, 65, 38, 95, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52'),
(142, 65, 39, 86, NULL, '3', NULL, '2019-12-10 15:13:52', '2019-12-10 15:13:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `idEscuelas` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `Circuitos_idCircuitos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`idEscuelas`, `nombre`, `direccion`, `Circuitos_idCircuitos`, `created_at`, `updated_at`) VALUES
(1, 'Esc. Muni N1 (San Isidro)', 'direccion', 1, '2019-12-02 03:00:00', '2019-10-25 17:32:16'),
(2, 'Esc.Prov.Nro.366', 'direccion', 1, NULL, '2019-12-14 00:04:46'),
(4, 'Esc Sumalao', 'Direccion', 2, '2019-10-25 17:33:42', '2019-10-25 17:33:42'),
(5, 'Esc Huaycama', 'Direccion', 5, '2019-10-25 17:34:07', '2019-10-25 17:34:07'),
(6, 'Esc Las Tejas', 'Direccion', 6, '2019-10-25 17:34:26', '2019-10-25 17:34:26'),
(7, 'Esc El Portezuelo', 'Direccion', 7, '2019-10-25 17:34:52', '2019-10-25 17:34:52'),
(8, 'Esc Santa Rosa', 'Direccion', 9, '2019-10-25 17:35:35', '2019-10-25 17:35:35'),
(9, 'Esc Villa Dolores', 'Direccion', 11, '2019-10-25 17:36:30', '2019-10-25 17:36:30'),
(10, 'Esc Santa Cruz', 'Direccion', 12, '2019-10-25 17:36:55', '2019-10-25 17:36:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listainternas`
--

CREATE TABLE `listainternas` (
  `idListaInterna` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `AgrupacionesPoliticas_idAgrupacionesPoliticas` int(11) NOT NULL,
  `letra` varchar(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listainternas`
--

INSERT INTO `listainternas` (`idListaInterna`, `nombre`, `numero`, `AgrupacionesPoliticas_idAgrupacionesPoliticas`, `letra`, `created_at`, `updated_at`) VALUES
(1, 'GEM', 69, 19, 'A', NULL, '2019-10-25 23:51:11'),
(2, 'Frente de Todos', 503, 1, 'A', NULL, '2019-10-25 23:51:47'),
(3, 'Consenso Federal', 504, 20, 'A', NULL, '2019-10-25 23:53:07'),
(4, 'Juntos por el Cambio', 506, 2, 'A', NULL, '2019-10-25 23:54:07'),
(5, 'Votos Nulos', 1, 14, 'VN', NULL, NULL),
(6, 'Votos Recurridos', 2, 14, 'VR', NULL, NULL),
(7, 'Votos Impugnados', 3, 14, 'VI', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listainterna_has_cargoselectivos`
--

CREATE TABLE `listainterna_has_cargoselectivos` (
  `idListInternaHasCargElectivo` int(11) NOT NULL,
  `ListaInterna_idListaInterna` int(11) NOT NULL,
  `CargosElectivos_idCargosElectivos` int(11) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listainterna_has_cargoselectivos`
--

INSERT INTO `listainterna_has_cargoselectivos` (`idListInternaHasCargElectivo`, `ListaInterna_idListaInterna`, `CargosElectivos_idCargosElectivos`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Gob GEM', '2019-10-23 20:56:16', '2019-10-25 23:57:09'),
(2, 1, 3, 'Sen GEM', NULL, '2019-10-25 23:57:59'),
(3, 1, 5, 'Dip GEM', NULL, '2019-10-26 00:07:54'),
(4, 1, 4, 'Int GEM', NULL, '2019-10-26 00:07:08'),
(5, 1, 6, 'Con GEM', NULL, '2019-10-26 00:10:15'),
(6, 2, 2, 'Raul Jalil', NULL, '2019-10-26 00:11:11'),
(7, 5, 2, 'Gob VN', NULL, NULL),
(8, 5, 3, 'Sen VN', NULL, NULL),
(9, 5, 4, 'Int VN', NULL, NULL),
(10, 6, 2, 'Gob VR', NULL, NULL),
(11, 6, 3, 'Sen VR', NULL, NULL),
(12, 6, 4, 'Int VR', NULL, NULL),
(13, 7, 2, 'Gob VI', NULL, NULL),
(14, 7, 3, 'Sen VI', NULL, NULL),
(15, 7, 4, 'Int VI', NULL, NULL),
(26, 2, 3, 'Sen Frente de Todos', '2019-10-26 00:11:49', '2019-10-26 00:11:49'),
(27, 2, 5, 'Dip Frente de Todos', '2019-10-26 00:12:15', '2019-10-26 00:12:15'),
(28, 2, 4, 'Susana Zenteno', '2019-10-26 00:13:20', '2019-10-26 00:13:20'),
(29, 2, 6, 'Conc Frente de Todos', '2019-10-26 00:13:58', '2019-10-26 00:13:58'),
(30, 3, 2, 'Gob Consenso Federal', '2019-10-26 00:14:48', '2019-10-26 00:14:48'),
(31, 3, 3, 'Sen Consenso Federal', '2019-10-26 00:15:35', '2019-10-26 00:15:35'),
(32, 3, 5, 'Dip Consenso Federal', '2019-10-26 00:15:56', '2019-10-26 00:15:56'),
(33, 3, 4, 'Int Consenso Federal', '2019-10-26 00:17:15', '2019-10-26 00:17:15'),
(34, 3, 6, 'Concej Consenso Federal', '2019-10-26 00:19:08', '2019-10-26 00:19:08'),
(35, 4, 2, 'Roberto Gomez', '2019-10-26 00:20:48', '2019-10-26 00:20:48'),
(36, 4, 3, 'Sen Juntos por el Cambio', '2019-10-26 00:21:14', '2019-10-26 00:21:14'),
(37, 4, 5, 'Dip Juntos por el Cambio', '2019-10-26 00:21:31', '2019-10-26 00:21:31'),
(38, 4, 4, 'Gustavo Jalile', '2019-10-26 00:22:13', '2019-10-26 00:22:13'),
(39, 4, 6, 'Concej Juntos por el Cambio', '2019-10-26 00:22:53', '2019-10-26 00:22:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `idMesas` int(11) NOT NULL,
  `numero` int(45) DEFAULT NULL,
  `Escuelas_idEscuelas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargado` tinyint(1) DEFAULT '0',
  `fiscalmesa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`idMesas`, `numero`, `Escuelas_idEscuelas`, `created_at`, `updated_at`, `cargado`, `fiscalmesa`) VALUES
(1, 589, 1, '2019-10-25 05:52:31', '2019-10-25 05:52:31', 1, NULL),
(2, 590, 1, '2019-10-25 05:52:31', '2019-10-25 05:52:31', 0, NULL),
(74, 584, 5, '2019-10-25 19:34:28', '2019-10-25 19:34:28', 0, NULL),
(75, 585, 6, '2019-10-25 19:34:58', '2019-10-25 19:34:58', 0, NULL),
(76, 586, 6, '2019-10-25 19:36:18', '2019-10-25 19:36:18', 0, NULL),
(77, 587, 7, '2019-10-25 19:36:45', '2019-10-25 19:36:45', 0, NULL),
(78, 588, 7, '2019-10-25 19:37:06', '2019-10-25 19:37:06', 0, NULL),
(79, 591, 1, '2019-10-25 19:38:57', '2019-10-25 19:38:57', 0, NULL),
(80, 592, 1, '2019-10-25 19:39:18', '2019-10-25 19:39:18', 0, NULL),
(81, 593, 1, '2019-10-25 19:39:33', '2019-11-29 04:43:08', 1, NULL),
(82, 594, 1, '2019-10-25 20:18:39', '2019-10-25 20:18:39', 0, NULL),
(83, 595, 1, '2019-10-25 20:19:16', '2019-10-25 20:19:16', 0, NULL),
(84, 596, 1, '2019-10-25 20:19:39', '2019-10-25 20:19:39', 0, NULL),
(85, 597, 1, '2019-10-25 20:19:58', '2019-10-25 20:19:58', 0, NULL),
(86, 598, 1, '2019-10-25 20:20:12', '2019-10-25 20:20:12', 0, NULL),
(87, 599, 1, '2019-10-25 20:20:49', '2019-10-25 20:20:49', 0, NULL),
(88, 600, 1, '2019-10-25 20:21:08', '2019-10-25 20:21:08', 0, NULL),
(89, 601, 2, '2019-10-25 20:21:25', '2019-11-25 19:14:02', 1, NULL),
(90, 602, 1, '2019-10-25 20:21:41', '2019-10-25 20:21:41', 0, NULL),
(91, 603, 1, '2019-10-25 20:21:56', '2019-10-25 20:21:56', 0, NULL),
(92, 604, 1, '2019-10-25 20:22:16', '2019-10-25 20:22:16', 0, NULL),
(93, 605, 1, '2019-10-25 20:22:36', '2019-10-25 20:22:36', 0, NULL),
(94, 606, 1, '2019-10-25 20:22:50', '2019-10-25 20:22:50', 0, NULL),
(95, 607, 1, '2019-10-25 20:23:39', '2019-10-25 20:23:39', 0, NULL),
(96, 608, 1, '2019-10-25 20:23:59', '2019-10-25 20:23:59', 0, NULL),
(97, 609, 1, '2019-10-25 20:25:48', '2019-10-25 20:25:48', 0, NULL),
(98, 610, 1, '2019-10-25 20:26:03', '2019-12-10 14:47:42', 1, NULL),
(99, 611, 1, '2019-10-25 20:26:22', '2019-10-25 20:26:22', 0, NULL),
(100, 612, 1, '2019-10-25 20:26:35', '2019-10-25 20:26:35', 0, NULL),
(101, 613, 1, '2019-10-25 20:26:49', '2019-12-10 15:13:52', 1, NULL),
(102, 614, 1, '2019-10-25 20:27:19', '2019-10-25 20:27:19', 0, NULL),
(103, 615, 1, '2019-10-25 20:27:31', '2019-10-25 20:27:31', 0, NULL),
(104, 616, 1, '2019-10-25 20:27:45', '2019-10-25 20:27:45', 0, NULL),
(105, 617, 10, '2019-10-25 20:28:31', '2019-10-25 20:28:31', 0, NULL),
(106, 618, 8, '2019-10-25 20:28:54', '2019-10-25 20:28:54', 0, NULL),
(107, 619, 8, '2019-10-25 20:29:08', '2019-10-25 20:29:08', 0, NULL),
(108, 620, 8, '2019-10-25 20:29:24', '2019-10-25 20:29:24', 0, NULL),
(109, 621, 8, '2019-10-25 20:29:41', '2019-10-25 20:29:41', 0, NULL),
(110, 622, 8, '2019-10-25 20:30:05', '2019-10-25 20:30:05', 0, NULL),
(111, 623, 8, '2019-10-25 20:30:31', '2019-10-25 20:30:31', 0, NULL),
(112, 624, 8, '2019-10-25 20:30:48', '2019-10-25 20:30:48', 0, NULL),
(113, 625, 8, '2019-10-25 20:31:10', '2019-10-25 20:31:10', 0, NULL),
(114, 626, 8, '2019-10-25 20:31:34', '2019-10-25 20:31:34', 0, NULL),
(115, 627, 8, '2019-10-25 20:32:34', '2019-10-25 20:32:34', 0, NULL),
(116, 628, 8, '2019-10-25 20:33:03', '2019-10-25 20:33:03', 0, NULL),
(117, 629, 8, '2019-10-25 20:33:19', '2019-10-25 20:33:19', 0, NULL),
(118, 630, 8, '2019-10-25 20:33:57', '2019-10-25 20:33:57', 0, NULL),
(119, 631, 8, '2019-10-25 20:34:17', '2019-10-25 20:34:17', 0, NULL),
(120, 632, 8, '2019-10-25 20:34:31', '2019-10-25 20:34:31', 0, NULL),
(121, 633, 8, '2019-10-25 20:36:33', '2019-10-25 20:36:33', 0, NULL),
(122, 634, 8, '2019-10-25 20:36:54', '2019-10-25 20:36:54', 0, NULL),
(123, 635, 8, '2019-10-25 20:37:12', '2019-10-25 20:37:12', 0, NULL),
(124, 636, 8, '2019-10-25 20:37:31', '2019-10-25 20:37:31', 0, NULL),
(125, 637, 8, '2019-10-25 20:38:43', '2019-10-25 20:38:43', 0, NULL),
(126, 638, 8, '2019-10-25 20:39:02', '2019-10-25 20:39:02', 0, NULL),
(127, 639, 8, '2019-10-25 20:39:40', '2019-10-25 20:39:40', 0, NULL),
(128, 640, 4, '2019-10-25 20:53:44', '2019-10-25 20:53:44', 0, NULL),
(129, 641, 4, '2019-10-25 20:54:04', '2019-10-25 20:54:04', 0, NULL),
(130, 642, 4, '2019-10-25 20:54:46', '2019-10-25 20:54:46', 0, NULL),
(131, 643, 4, '2019-10-25 20:56:46', '2019-10-25 20:56:46', 0, NULL),
(132, 644, 4, '2019-10-25 20:57:02', '2019-10-25 20:57:02', 0, NULL),
(133, 645, 4, '2019-10-25 20:57:26', '2019-10-25 20:57:26', 0, NULL),
(134, 646, 4, '2019-10-25 20:57:46', '2019-10-25 20:57:46', 0, NULL),
(135, 647, 4, '2019-10-25 20:58:09', '2019-10-25 20:58:09', 0, NULL),
(136, 648, 4, '2019-10-25 20:58:43', '2019-10-25 20:58:43', 0, NULL),
(137, 649, 4, '2019-10-25 20:59:01', '2019-10-25 20:59:01', 0, NULL),
(138, 650, 4, '2019-10-25 20:59:32', '2019-10-25 20:59:32', 0, NULL),
(139, 651, 9, '2019-10-25 21:01:07', '2019-10-25 21:01:07', 0, NULL),
(140, 652, 9, '2019-10-25 21:01:27', '2019-10-25 21:01:27', 0, NULL),
(141, 653, 9, '2019-10-25 21:01:47', '2019-10-25 21:01:47', 0, NULL),
(142, 654, 9, '2019-10-25 21:02:15', '2019-10-25 21:02:15', 0, NULL),
(143, 655, 9, '2019-10-25 21:02:39', '2019-10-25 21:02:39', 0, NULL),
(144, 656, 9, '2019-10-25 21:03:09', '2019-10-25 21:03:09', 0, NULL),
(145, 657, 9, '2019-10-25 21:03:24', '2019-10-25 21:03:24', 0, NULL),
(146, 658, 9, '2019-10-25 21:06:03', '2019-10-25 21:06:03', 0, NULL),
(147, 659, 9, '2019-10-25 21:07:10', '2019-10-25 21:07:10', 0, NULL),
(148, 660, 9, '2019-10-25 21:07:30', '2019-10-25 21:07:30', 0, NULL),
(149, 661, 9, '2019-10-25 21:08:04', '2019-10-25 21:08:04', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(144, '2019_10_03_142956_create_agrupoliticas_table', 1),
(161, '2014_10_12_000000_create_users_table', 2),
(162, '2014_10_12_100000_create_password_resets_table', 2),
(163, '2015_01_20_084450_create_roles_table', 2),
(164, '2015_01_20_084525_create_role_user_table', 2),
(165, '2015_01_24_080208_create_permissions_table', 2),
(166, '2015_01_24_080433_create_permission_role_table', 2),
(167, '2015_12_04_003040_add_special_role_column', 2),
(168, '2017_10_17_170735_create_permission_user_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Navegar usuarios', 'users.index', 'Lista y navega todos los usuarios del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(2, 'Ver detalle usuario', 'users.show', 'Ver en detalle cada usuario del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(3, 'Edicion de usuarios', 'users.edit', 'Editar cualquier dato de un usuario del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(4, 'Eliminar usuario', 'users.destroy', 'Eliminar cualquier usuario del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(5, 'Navegar roles', 'roles.index', 'Lista y navega todos los roles del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(6, 'Ver detalle rol', 'roles.show', 'Ver en detalle cada rol del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(7, 'Creacion de roles', 'roles.create', 'Crear un rol del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(8, 'Edicion de roles', 'roles.edit', 'Editar cualquier dato de un rol del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(9, 'Eliminar rol', 'roles.destroy', 'Eliminar cualquier rol del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(10, 'Navegar Agrupaciones politicas', 'agrupacionespoliticas.index', 'Lista y navega todos los Agrupaciones politicas del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(11, 'Ver detalle Agrupacion Politica', 'agrupacionespoliticas.show', 'Ver en detalle cada Agrupacion Politica del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(12, 'Creacion de Agrupaciones politicas', 'agrupacionespoliticas.create', 'Crear un Agrupacion Politica del sistema', '2019-10-04 18:00:43', '2019-10-04 18:00:43'),
(13, 'Edicion de Agrupaciones politicas', 'agrupacionespoliticas.edit', 'Editar cualquier dato de un Agrupacion Politica del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(14, 'Eliminar Agrupacion Politica', 'agrupacionespoliticas.destroy', 'Eliminar cualquier Agrupacion Politica del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(15, 'Navegar Tipos de Comicios', 'tiposcomicios.index', 'Lista y navega todos los Tipos de Comicios del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(16, 'Ver detalle Tipo de Comicio', 'tiposcomicios.show', 'Ver en detalle cada Tipo de Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(17, 'Creacion de Tipos de Comicios', 'tiposcomicios.create', 'Crear un Tipo de Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(18, 'Edicion de Tipos de Comicios', 'tiposcomicios.edit', 'Editar cualquier dato de un Tipo de Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(19, 'Eliminar Tipo de Comicio', 'tiposcomicios.destroy', 'Eliminar cualquier Tipo de Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(20, 'Navegar Comicios', 'comicios.index', 'Lista y navega todos los Comicios del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(21, 'Ver detalle Comicio', 'comicios.show', 'Ver en detalle cada Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(22, 'Creacion de Comicios', 'comicios.create', 'Crear un Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(23, 'Edicion de Comicios', 'comicios.edit', 'Editar cualquier dato de un Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(24, 'Eliminar Comicio', 'comicios.destroy', 'Eliminar cualquier Comicio del sistema', '2019-10-04 18:00:44', '2019-10-04 18:00:44'),
(25, 'Navegar Cargos Electivos', 'cargosElectivos.index', 'Lista y navega todos los Cargos Electivos del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(26, 'Ver detalle Cargos Electivos', 'cargosElectivos.show', 'Ver en detalle cada Cargos Electivos del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(27, 'Creacion de Cargos Electivos', 'cargosElectivos.create', 'Crear un Cargos Electivos del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(28, 'Edicion de Cargos Electivos', 'cargosElectivos.edit', 'Editar cualquier dato de un Cargos Electivos del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(29, 'Eliminar Cargos Electivos', 'cargosElectivos.destroy', 'Eliminar cualquier Cargos Electivos del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(30, 'Navegar Agrupaciones Politicas Listas', 'agruPoliticasListas.index', 'Lista y navega todos los Agrupaciones Politicas Listas del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(31, 'Ver detalle Agrupacion Politica Lista', 'agruPoliticasListas.show', 'Ver en detalle cada Agrupacion Politica Lista del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(32, 'Creacion de Agrupaciones Politicas Listas', 'agruPoliticasListas.create', 'Crear un Agrupacion Politica Lista del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(33, 'Edicion de Agrupaciones Politicas Listas', 'agruPoliticasListas.edit', 'Editar cualquier dato de un Agrupacion Politica Lista del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(34, 'Eliminar Agrupacion Politica Lista', 'agruPoliticasListas.destroy', 'Eliminar cualquier Agrupacion Politica Lista del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(35, 'Navegar Tipos Cargos Electivos', 'tiposCargosElectivos.index', 'Lista y navega todos los Tipos Cargos Electivos del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(36, 'Ver detalle Tipo Cargo Electivo', 'tiposCargosElectivos.show', 'Ver en detalle cada Tipo Cargo Electivo del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(37, 'Creacion de Tipos Cargos Electivos', 'tiposCargosElectivos.create', 'Crear un Tipo Cargo Electivo del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(38, 'Edicion de Tipos Cargos Electivos', 'tiposCargosElectivos.edit', 'Editar cualquier dato de un Tipo Cargo Electivo del sistema', '2019-10-04 18:00:45', '2019-10-04 18:00:45'),
(39, 'Eliminar Tipo Cargo Electivo', 'tiposCargosElectivos.destroy', 'Eliminar cualquier Tipo Cargo Electivo del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(40, 'Navegar Provincias', 'provincias.index', 'Lista y navega todos las Provincias del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(41, 'Ver detalle Provincia', 'provincias.show', 'Ver en detalle cada Provincia del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(42, 'Creacion de Provincias', 'provincias.create', 'Crear un Provincia del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(43, 'Edicion de Provincias', 'provincias.edit', 'Editar cualquier dato de un Provincia del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(44, 'Eliminar Provincia', 'provincias.destroy', 'Eliminar cualquier Provincia del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(45, 'Navegar Secciones', 'secciones.index', 'Lista y navega todos las Secciones del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(46, 'Ver detalle Seccion', 'secciones.show', 'Ver en detalle cada Seccion del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(47, 'Creacion de Secciones', 'secciones.create', 'Crear un Seccion del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(48, 'Edicion de Secciones', 'secciones.edit', 'Editar cualquier dato de un Seccion del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(49, 'Eliminar Seccion', 'secciones.destroy', 'Eliminar cualquier Seccion del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(50, 'Navegar Circuitos', 'circuitos.index', 'Lista y navega todos las Circuitos del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(51, 'Ver detalle Circuito', 'circuitos.show', 'Ver en detalle cada Circuito del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(52, 'Creacion de Circuitos', 'circuitos.create', 'Crear un Circuito del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(53, 'Edicion de Circuitos', 'circuitos.edit', 'Editar cualquier dato de un Circuito del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(54, 'Eliminar Circuito', 'circuitos.destroy', 'Eliminar cualquier Circuito del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(55, 'Navegar Locales', 'locales.index', 'Lista y navega todos las Locales del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(56, 'Ver detalle Local', 'locales.show', 'Ver en detalle cada Local del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(57, 'Creacion de Locales', 'locales.create', 'Crear un Local del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(58, 'Edicion de Locales', 'locales.edit', 'Editar cualquier dato de un Local del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(59, 'Eliminar Local', 'locales.destroy', 'Eliminar cualquier Local del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(60, 'Navegar Mesas', 'mesas.index', 'Lista y navega todos las Mesas del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(61, 'Ver detalle Mesa', 'mesas.show', 'Ver en detalle cada Mesa del sistema', '2019-10-04 18:00:46', '2019-10-04 18:00:46'),
(62, 'Creacion de Mesas', 'mesas.create', 'Crear un Mesa del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47'),
(63, 'Edicion de Mesas', 'mesas.edit', 'Editar cualquier dato de un Mesa del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47'),
(64, 'Eliminar Mesa', 'mesas.destroy', 'Eliminar cualquier Mesa del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47'),
(65, 'Navegar Escrutinios', 'escrutinio.index', 'Lista y navega todos las Escrutinios del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47'),
(66, 'Ver detalle Escrutinio', 'escrutinio.show', 'Ver en detalle cada Escrutinio del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47'),
(67, 'Creacion de Escrutinios', 'escrutinio.create', 'Crear un Escrutinio del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47'),
(68, 'Edicion de Escrutinios', 'escrutinio.edit', 'Editar cualquier dato de un Escrutinio del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47'),
(69, 'Eliminar Escrutinio', 'escrutinio.destroy', 'Eliminar cualquier Escrutinio del sistema', '2019-10-04 18:00:47', '2019-10-04 18:00:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 50, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(2, 51, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(3, 52, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(4, 53, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(5, 54, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(6, 55, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(7, 56, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(8, 57, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(9, 58, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(10, 59, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(11, 60, 3, '2019-10-07 22:21:49', '2019-10-07 22:21:49'),
(12, 61, 3, '2019-10-07 22:21:50', '2019-10-07 22:21:50'),
(13, 62, 3, '2019-10-07 22:21:50', '2019-10-07 22:21:50'),
(14, 63, 3, '2019-10-07 22:21:50', '2019-10-07 22:21:50'),
(15, 64, 3, '2019-10-07 22:21:50', '2019-10-07 22:21:50'),
(16, 1, 4, '2019-10-22 18:03:31', '2019-10-22 18:03:31'),
(17, 2, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(18, 3, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(19, 4, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(20, 5, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(21, 6, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(22, 7, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(23, 8, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(24, 9, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(25, 10, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(26, 11, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(27, 12, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(28, 13, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(29, 14, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(30, 15, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(31, 16, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(32, 17, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(33, 18, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(34, 19, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(35, 20, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(36, 21, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(37, 22, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(38, 23, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(39, 24, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(40, 25, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(41, 26, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(42, 27, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(43, 28, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(44, 29, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(45, 30, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(46, 31, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(47, 32, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(48, 33, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(49, 34, 4, '2019-10-22 18:03:32', '2019-10-22 18:03:32'),
(50, 35, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(51, 36, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(52, 37, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(53, 38, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(54, 39, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(55, 40, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(56, 41, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(57, 42, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(58, 43, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(59, 44, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(60, 45, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(61, 46, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(62, 47, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(63, 48, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(64, 49, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(65, 50, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(66, 51, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(67, 52, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(68, 53, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(69, 54, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(70, 55, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(71, 56, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(72, 57, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(73, 58, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(74, 59, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(75, 60, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(76, 61, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(77, 62, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(78, 63, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(79, 64, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(80, 65, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(81, 66, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(82, 67, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(83, 68, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(84, 69, 4, '2019-10-22 18:03:33', '2019-10-22 18:03:33'),
(85, 66, 5, '2019-10-26 22:45:53', '2019-10-26 22:45:53'),
(86, 67, 5, '2019-10-26 22:45:53', '2019-10-26 22:45:53'),
(87, 68, 5, '2019-10-26 22:45:53', '2019-10-26 22:45:53'),
(88, 69, 5, '2019-10-26 22:45:53', '2019-10-26 22:45:53'),
(89, 66, 6, '2019-10-26 22:46:14', '2019-10-26 22:46:14'),
(90, 67, 6, '2019-10-26 22:46:14', '2019-10-26 22:46:14'),
(91, 68, 6, '2019-10-26 22:46:14', '2019-10-26 22:46:14'),
(92, 69, 6, '2019-10-26 22:46:14', '2019-10-26 22:46:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idProvincias` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idProvincias`, `nombre`) VALUES
(1, 'Catamarca'),
(2, 'Rioja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Admin', 'admin', 'Control Total', '2019-10-04 15:14:28', '2019-10-04 15:14:29', 'all-access'),
(2, 'Suspendido', 'suspendido', 'Usuarios temporalmente inhabilitados', NULL, NULL, 'no-access'),
(3, 'Operador', 'operador.sistemas', 'Carga de Circuitos, Locales y mesas de votacion', '2019-10-07 22:21:49', '2019-10-21 22:46:19', NULL),
(4, 'Permiso total', 'total.sistemas', NULL, '2019-10-22 18:03:31', '2019-10-22 18:03:31', 'no-access'),
(5, 'Fiscal General', 'fiscalgeneral', NULL, '2019-10-26 22:45:53', '2019-10-26 22:45:53', 'no-access'),
(6, 'Fiscal Mesa', 'fiscalmesa', NULL, '2019-10-26 22:46:13', '2019-10-26 22:46:13', 'no-access');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 3, 2, '2019-10-07 22:24:58', '2019-10-07 22:24:58'),
(3, 1, 1, '2019-10-22 18:04:43', '2019-10-22 18:04:43'),
(4, 1, 1, NULL, NULL),
(5, 1, 3, '2019-10-28 16:13:04', '2019-10-28 16:13:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `idSecciones` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `Provincias_idProvincias` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`idSecciones`, `nombre`, `Provincias_idProvincias`, `created_at`, `updated_at`) VALUES
(8, 'Valle Viejo', 1, NULL, NULL),
(14, 'Chilecito', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocomicios`
--

CREATE TABLE `tipocomicios` (
  `idTipoComicio` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipocomicios`
--

INSERT INTO `tipocomicios` (`idTipoComicio`, `nombre`) VALUES
(1, 'Departamental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposcargoselectivos`
--

CREATE TABLE `tiposcargoselectivos` (
  `idTiposCargosElectivos` int(11) NOT NULL,
  `reales` tinyint(4) DEFAULT NULL,
  `ajuste` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiposcargoselectivos`
--

INSERT INTO `tiposcargoselectivos` (`idTiposCargosElectivos`, `reales`, `ajuste`) VALUES
(1, 1, 0),
(2, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fabio Molina', 'fabium77@gmail.com', NULL, '$2y$10$Woz/3/TxyYEYBE9kOWsg6uMLxAyfWA8snQ7OK8PEap/RHVTkCElfy', NULL, '2019-10-04 18:12:32', '2019-10-04 18:12:32'),
(2, 'OperadorPrueba', 'operador@gmail.com', NULL, '$2y$10$ShFeh3niyp5PI9cyQ5CP6.lYUck0LP8C4ZGJQva851w7z4Zt7I0Mq', NULL, '2019-10-07 22:24:04', '2019-10-07 22:24:04'),
(3, 'Gabriel', 'urbano.45@gmail.com', NULL, '$2y$10$dVUrhBLYoC30uWiKkIWKMOH0xz4QmmU7k4J3YqMzfrXiP7ub1ElgG', NULL, '2019-10-28 16:12:09', '2019-10-28 16:12:09'),
(4, 'Leon', 'Leon@leon.com', NULL, '$2y$10$hL1Ib4CoVQW8jp9B2fyHYO0X9ufHwH8TK3jfOVJrK18AjgGjZ3Dui', NULL, '2019-12-12 17:46:13', '2019-12-12 17:46:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agrupacionespoliticas`
--
ALTER TABLE `agrupacionespoliticas`
  ADD PRIMARY KEY (`idAgrupacionesPoliticas`);

--
-- Indices de la tabla `agrupoliticas`
--
ALTER TABLE `agrupoliticas`
  ADD PRIMARY KEY (`idAgrupacionesPoliticas`);

--
-- Indices de la tabla `cargoselectivos`
--
ALTER TABLE `cargoselectivos`
  ADD PRIMARY KEY (`idCargosElectivos`),
  ADD KEY `fk_CargosElectivos_Comicios1_idx` (`Comicios_idComicios`),
  ADD KEY `fk_CargosElectivos_TiposCargosElectivos1_idx` (`TiposCargosElectivos_idTiposCargosElectivos`);

--
-- Indices de la tabla `circuitos`
--
ALTER TABLE `circuitos`
  ADD PRIMARY KEY (`idCircuitos`),
  ADD KEY `fk_Circuitos_Secciones1_idx` (`Secciones_idSecciones`);

--
-- Indices de la tabla `comicios`
--
ALTER TABLE `comicios`
  ADD PRIMARY KEY (`idComicios`),
  ADD KEY `fk_Comicios_TipoComicio1_idx` (`TipoComicio_idTipoComicio`);

--
-- Indices de la tabla `comicios_has_mesas`
--
ALTER TABLE `comicios_has_mesas`
  ADD PRIMARY KEY (`idComiciosHasMesas`),
  ADD KEY `fk_Comicios_has_Mesas_Mesas1_idx` (`Mesas_idMesas`),
  ADD KEY `fk_Comicios_has_Mesas_Comicios1_idx` (`Comicios_idComicios`);

--
-- Indices de la tabla `escrutinios`
--
ALTER TABLE `escrutinios`
  ADD PRIMARY KEY (`idEscrutinios`,`Comicios_has_Mesas`,`ListaInter_has_CargosElectivos`),
  ADD KEY `fk_Escrutinios_Comicios_has_Mesas1_idx` (`Comicios_has_Mesas`),
  ADD KEY `fk_Escrutinios_ListaInterna_has_CargosElectivos1_idx` (`ListaInter_has_CargosElectivos`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`idEscuelas`),
  ADD KEY `fk_Escuelas_Circuitos1_idx` (`Circuitos_idCircuitos`);

--
-- Indices de la tabla `listainternas`
--
ALTER TABLE `listainternas`
  ADD PRIMARY KEY (`idListaInterna`),
  ADD KEY `fk_ListaInterna_AgrupacionesPoliticas1_idx` (`AgrupacionesPoliticas_idAgrupacionesPoliticas`);

--
-- Indices de la tabla `listainterna_has_cargoselectivos`
--
ALTER TABLE `listainterna_has_cargoselectivos`
  ADD PRIMARY KEY (`idListInternaHasCargElectivo`),
  ADD KEY `fk_ListaInterna_has_CargosElectivos_CargosElectivos1_idx` (`CargosElectivos_idCargosElectivos`),
  ADD KEY `fk_ListaInterna_has_CargosElectivos_ListaInterna1_idx` (`ListaInterna_idListaInterna`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`idMesas`),
  ADD KEY `fk_Mesas_Escuelas1_idx` (`Escuelas_idEscuelas`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idProvincias`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`idSecciones`),
  ADD KEY `fk_Secciones_Provincias_idx` (`Provincias_idProvincias`);

--
-- Indices de la tabla `tipocomicios`
--
ALTER TABLE `tipocomicios`
  ADD PRIMARY KEY (`idTipoComicio`);

--
-- Indices de la tabla `tiposcargoselectivos`
--
ALTER TABLE `tiposcargoselectivos`
  ADD PRIMARY KEY (`idTiposCargosElectivos`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agrupacionespoliticas`
--
ALTER TABLE `agrupacionespoliticas`
  MODIFY `idAgrupacionesPoliticas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `agrupoliticas`
--
ALTER TABLE `agrupoliticas`
  MODIFY `idAgrupacionesPoliticas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargoselectivos`
--
ALTER TABLE `cargoselectivos`
  MODIFY `idCargosElectivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `circuitos`
--
ALTER TABLE `circuitos`
  MODIFY `idCircuitos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comicios`
--
ALTER TABLE `comicios`
  MODIFY `idComicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comicios_has_mesas`
--
ALTER TABLE `comicios_has_mesas`
  MODIFY `idComiciosHasMesas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `escrutinios`
--
ALTER TABLE `escrutinios`
  MODIFY `idEscrutinios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `idEscuelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `listainternas`
--
ALTER TABLE `listainternas`
  MODIFY `idListaInterna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `listainterna_has_cargoselectivos`
--
ALTER TABLE `listainterna_has_cargoselectivos`
  MODIFY `idListInternaHasCargElectivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `idMesas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idProvincias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `idSecciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipocomicios`
--
ALTER TABLE `tipocomicios`
  MODIFY `idTipoComicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tiposcargoselectivos`
--
ALTER TABLE `tiposcargoselectivos`
  MODIFY `idTiposCargosElectivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargoselectivos`
--
ALTER TABLE `cargoselectivos`
  ADD CONSTRAINT `fk_CargosElectivos_Comicios1` FOREIGN KEY (`Comicios_idComicios`) REFERENCES `comicios` (`idComicios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CargosElectivos_TiposCargosElectivos1` FOREIGN KEY (`TiposCargosElectivos_idTiposCargosElectivos`) REFERENCES `tiposcargoselectivos` (`idTiposCargosElectivos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `circuitos`
--
ALTER TABLE `circuitos`
  ADD CONSTRAINT `fk_Circuitos_Secciones1` FOREIGN KEY (`Secciones_idSecciones`) REFERENCES `secciones` (`idSecciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comicios`
--
ALTER TABLE `comicios`
  ADD CONSTRAINT `fk_Comicios_TipoComicio1` FOREIGN KEY (`TipoComicio_idTipoComicio`) REFERENCES `tipocomicios` (`idTipoComicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comicios_has_mesas`
--
ALTER TABLE `comicios_has_mesas`
  ADD CONSTRAINT `fk_Comicios_has_Mesas_Comicios1` FOREIGN KEY (`Comicios_idComicios`) REFERENCES `comicios` (`idComicios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comicios_has_Mesas_Mesas1` FOREIGN KEY (`Mesas_idMesas`) REFERENCES `mesas` (`idMesas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escrutinios`
--
ALTER TABLE `escrutinios`
  ADD CONSTRAINT `fk_Escrutinios_Comicios_has_Mesas1` FOREIGN KEY (`Comicios_has_Mesas`) REFERENCES `comicios_has_mesas` (`idComiciosHasMesas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Escrutinios_ListaInterna_has_CargosElectivos1` FOREIGN KEY (`ListaInter_has_CargosElectivos`) REFERENCES `listainterna_has_cargoselectivos` (`idListInternaHasCargElectivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD CONSTRAINT `fk_Escuelas_Circuitos1` FOREIGN KEY (`Circuitos_idCircuitos`) REFERENCES `circuitos` (`idCircuitos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `listainternas`
--
ALTER TABLE `listainternas`
  ADD CONSTRAINT `fk_ListaInterna_AgrupacionesPoliticas1` FOREIGN KEY (`AgrupacionesPoliticas_idAgrupacionesPoliticas`) REFERENCES `agrupacionespoliticas` (`idAgrupacionesPoliticas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `listainterna_has_cargoselectivos`
--
ALTER TABLE `listainterna_has_cargoselectivos`
  ADD CONSTRAINT `fk_ListaInterna_has_CargosElectivos_CargosElectivos1` FOREIGN KEY (`CargosElectivos_idCargosElectivos`) REFERENCES `cargoselectivos` (`idCargosElectivos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ListaInterna_has_CargosElectivos_ListaInterna1` FOREIGN KEY (`ListaInterna_idListaInterna`) REFERENCES `listainternas` (`idListaInterna`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD CONSTRAINT `fk_Mesas_Escuelas1` FOREIGN KEY (`Escuelas_idEscuelas`) REFERENCES `escuelas` (`idEscuelas`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD CONSTRAINT `fk_Secciones_Provincias` FOREIGN KEY (`Provincias_idProvincias`) REFERENCES `provincias` (`idProvincias`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
