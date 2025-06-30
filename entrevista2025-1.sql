-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2025 a las 01:11:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `entrevista2025-1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista20251`
--

CREATE TABLE `entrevista20251` (
  `id` int(11) NOT NULL,
  `entrevistador` text NOT NULL,
  `programa` text NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `P1` text NOT NULL,
  `P2` text NOT NULL,
  `P3` text NOT NULL,
  `P4` text NOT NULL,
  `P5` text NOT NULL,
  `P6` text NOT NULL,
  `P7` text NOT NULL,
  `P8` text NOT NULL,
  `P9` text NOT NULL,
  `P10` text NOT NULL,
  `P11` text NOT NULL,
  `Score` text NOT NULL,
  `filial` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrevista20251`
--

INSERT INTO `entrevista20251` (`id`, `entrevistador`, `programa`, `nombres`, `apellidos`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`, `P11`, `Score`, `filial`, `fecha`, `estado`) VALUES
(1, 'Jaziel', 'Posgrado de Segunda Especialidad en Enfermería en Neurología y Neurocirugía, Semipresencial', 'Juan Roberto', 'Ariola', '2', '2', '2', '2', '2', '1', '1', '1', '1', '1', 'Ninguna observación.', '15', 'Lima', '2025-01-16 09:24:49', NULL),
(2, 'Jove', 'Segunda Especialidad de Enfermería en Cuidado de la Persona con Diabetes con Mención en Educación en Diabetes - Sección Lima, Semipresencial', 'Abdiel', 'Simeon', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', 'Pruebita 2', '12', 'Lima', '2025-01-16 09:26:02', NULL),
(3, '', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', '', '', '0', '', '', '', '', '', '', '', '', '', '', '0', 'Lima', '2025-01-16 09:35:28', NULL),
(4, 'Entrevistador3', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'test', 'test2', '1', '1', '1', '2', '2', '2', '2', '2', '2', '2', '', '17', 'Lima', '2025-01-16 09:36:09', NULL),
(5, '', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Lima', '2025-01-16 10:26:12', NULL),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'Lima', '2025-01-16 10:27:00', NULL),
(7, 'Evaluador', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Jowen', 'Casas', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Last changes', '9', 'Lima', '2025-01-16 11:05:13', NULL),
(8, 'Entrevistador de nutrición', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'nombreNutrición', 'apellidoNutrición', '1', '1', '2', '1', '1', '2', '2', '2', '2', '2', 'Observaciones de nutrición.', '0', 'Lima', '2025-01-16 11:29:52', NULL),
(9, 'Jove Bera', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Entrevistador de Nutrición ', 'Prueba Dinámica', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Este es el formulario de una entrevista dinámica', '0', 'Lima', '2025-01-17 08:40:16', NULL),
(10, 'Entrevistador2', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Nutrición2', 'Nutrición2', '2', '2', '2', '2', '2', '2', '1', '1', '1', '1', 'Esta es el 2do comentario ', '2025', '', '0000-00-00 00:00:00', NULL),
(11, 'Nutrición3', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Nutrición3 entrevistado', 'Nutrición3 entrevistado apellido', '2', '2', '2', '1', '1', '1', '1', '1', '1', '1', 'We', '0', 'Lima', '2025-01-17 08:49:44', NULL),
(12, 'Test', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Test', 'Test', '2', '2', '1', '1', '1', '1', '1', '2', '1', '1', 'Testing', '0', 'Lima', '2025-01-17 08:53:11', NULL),
(13, 'Prueba4', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Prueba4_Nom', 'Prueba4_Ape', '2', '2', '2', '2', '0', '1', '2', '2', '2', '2', 'Test n°4', '0', 'Lima', '2025-01-17 09:02:51', NULL),
(14, 'Prueba5', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Prueba5_Nom', 'Prueba5_Ape', '2', '2', '2', '2', '0', '1', '2', '2', '2', '2', 'Test n°5 .....', '0', 'Lima', '2025-01-17 09:03:55', NULL),
(15, 'Evaluador', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Jowen', 'Casas', '0', '1', '1', '1', '1', '1', '1', '1', '1', '0', 'Last changes', '0', 'Lima', '2025-01-17 09:07:09', NULL),
(16, 'Prueba5', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Prueba5_Nom', 'Prueba5_Ape', '2', '2', '2', '2', '0', '1', '2', '2', '2', '2', 'Test n°5 .....', '0', 'Lima', '2025-01-17 09:16:19', NULL),
(17, 'Prueba5', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Prueba5_Nom', 'Prueba5_Ape', '2', '2', '2', '2', '0', '1', '2', '2', '2', '2', 'Test n°5 .....', '0', 'Lima', '2025-01-17 09:16:40', NULL),
(18, 'Entrevistador', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Nutrición6', 'Nutrición6', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Nutrición6', '0', 'Lima', '2025-01-17 09:18:08', NULL),
(19, '123', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', '123', 'asd', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '....', '0', 'Lima', '2025-01-17 09:23:31', NULL),
(20, 'Tabita Lozano', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'test', 'test', '1', '1', '1', '2', '2', '2', '2', '2', '1', '1', 'Prueba.', '', 'Lima', '2025-01-20 09:17:43', NULL),
(21, 'Tabita Lozano', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'test', 'test', '1', '1', '1', '2', '2', '2', '2', '2', '1', '1', 'Prueba.', '', 'Lima', '2025-01-20 09:18:09', NULL),
(22, 'test', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'test2', 'test2', '1', '2', '2', '2', '2', '2', '1', '2', '1', '1', 'test', '', 'Lima', '2025-01-20 09:18:55', NULL),
(23, 'TEST43', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'TEST', 'TEST', '2', '1', '2', '2', '2', '2', '2', '2', '2', '2', 'No funciona la suma por ahora', '', 'Lima', '2025-01-20 09:20:44', NULL),
(24, 'Juan Carlos Rios Jara', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'testing51', 'testing51', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'test general', '20', 'Lima', '2025-01-20 17:42:50', NULL),
(25, 'test', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'jejejejeje', 'jejejejeje', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Nota general', '20', 'Lima', '2025-01-20 17:44:39', NULL),
(26, 'última pruebita', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Pruebita amiguito', 'Pruebita amiguito', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Todo ok amigo', '', 'Lima', '2025-01-21 12:09:54', NULL),
(27, '2222', 'Seleccione un programa', '2222', '2222', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '20110', '', 'Lima', '2025-01-21 12:13:20', NULL),
(28, '123123123', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', '123123123', '123123123', '1', '1', '1', '2', '1', '2', '2', '2', '2', '2', '123123', '', 'Lima', '2025-01-21 12:16:08', NULL),
(29, 'ABD', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'ABD', 'ABD', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'ERRORRRR', '20', 'Lima', '2025-01-21 12:20:18', NULL),
(30, 'test23', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'test23', 'test23', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', 'Desaprobado...', '', 'Lima', '2025-01-21 12:44:51', NULL),
(31, 'Entrevistador', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Owen2', 'Prueba5_Ape', '2', '2', '2', '2', '2', '2', '2', '1', '1', '1', '11111111', '', 'Lima', '2025-01-21 12:45:47', NULL),
(32, 'Prueba final xd', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Prueba finallll', 'Prueba finall', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'pruebita-final ', '20', 'Lima', '2025-01-21 12:48:29', NULL),
(33, 'Mg. Tabita Lozano', 'Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial', 'Pruebita re final', 'Última prueba apellido xd', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', 'Problemas del input solucionado y de igual forma el dinamic select.....', '16', 'Lima', '2025-01-21 12:53:45', NULL),
(34, 'Prueba10', 'Seleccione un programa', 'Nombres10', 'Apellidos10', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Probando funciont input disable', '20', 'Lima', '2025-01-21 14:29:12', NULL),
(35, 'Prueba final de disabled ', 'Posgrado de Segunda Especialidad en Enfermería en Neurología y Neurocirugía, Semipresencial', 'Prueba final de disabled ', 'Prueba final de disabled ', '2', '2', '2', '2', '2', '1', '1', '1', '1', '2', 'Prueba final de disabled ', '', 'Lima', '2025-01-21 14:31:14', NULL),
(36, 'última prueba y a dormir', 'Posgrado de Maestría en Enfermería con Mención en Administración y Gestión, Semipresencial', 'última prueba y a dormir', 'última prueba y a dormir', '2', '2', '2', '2', '2', '1', '1', '2', '2', '2', 'última prueba y a dormir', '18', 'Lima', '2025-01-21 14:33:39', NULL),
(37, 'última prueba y a domir como bebes', 'Posgrado de Segunda Especialidad de Enfermería en Emergencias y Desastres, Semipresencial', 'Owen', 'Mejía Guerra', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Entrevista final y nos vamos a dormir como bebes', '20', 'Lima', '2025-01-21 17:14:11', NULL),
(38, 'Mg. Willy', 'Maestría en Salud Pública con Mención en Salud Global y Promoción de la Salud, A Distancia', 'Jeff', 'Bezos', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Ninguna....', '20', 'Lima', '2025-01-24 13:05:24', NULL),
(39, 'test', 'Posgrado de Segunda Especialidad en Enfermería en Cuidados Intensivos Neonatales, Semipresencial', 'test', 'test', '0', '0', '0', '0', '0', '0', '0', '2', '2', '2', 'test', '6', 'Lima', '2025-06-30 18:07:24', NULL),
(40, 'test', 'Maestría en Salud Pública con Mención en Salud Global y Promoción de la Salud, A Distancia', 'test', 'test', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'test', '20', 'Lima', '2025-06-30 18:11:13', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrevista20251`
--
ALTER TABLE `entrevista20251`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrevista20251`
--
ALTER TABLE `entrevista20251`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
