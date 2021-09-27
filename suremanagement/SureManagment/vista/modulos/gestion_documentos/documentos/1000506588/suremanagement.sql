-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2021 a las 00:41:57
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suremanagement`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `nombre` varchar(32) NOT NULL,
  `fecha` date NOT NULL,
  `id_propietario` int(11) NOT NULL,
  `id_docs` int(5) NOT NULL,
  `doc_prop` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles_arriendo`
--

CREATE TABLE `inmuebles_arriendo` (
  `id_inmueble` int(11) NOT NULL,
  `direccion` varchar(64) NOT NULL,
  `complemento` varchar(32) NOT NULL,
  `valor` bigint(20) NOT NULL,
  `fecha_pago` date NOT NULL,
  `doc_prop` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmuebles_arriendo`
--

INSERT INTO `inmuebles_arriendo` (`id_inmueble`, `direccion`, `complemento`, `valor`, `fecha_pago`, `doc_prop`) VALUES
(1, 'Calle 109 # 102-45', 'Casa, segundo piso', 2200000, '2021-06-27', 1000506588);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `nombres` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(64) NOT NULL,
  `doc_prop` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`nombres`, `apellidos`, `telefono`, `correo`, `doc_prop`) VALUES
('MATEO', 'ROMERO', 3116806341, 'mateoronorbit@gmail.com', 123789456),
('Alejandro', 'Rodriguez', 333333333, 'jro@gmail.com', 154387629),
('marcos', 'garza', 3116805455, 'mate4131312e@gmail.com', 156489723),
('mauro', 'hernandez', 3116805455, 'mateoroeore@gmail.com', 354987621),
('mauro andres', 'hernandez', 3116805444, 'mateoro@gmail.com', 1000506588);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(32) NOT NULL,
  `apellidos` varchar(32) NOT NULL,
  `usuario` varchar(16) NOT NULL,
  `contraseña` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contraseña`, `email`, `rol`) VALUES
(65, 'Fabio', 'Hernando', 'admin', 'admin', 'mateoronorbit@gmail.com', 'admin'),
(67, 'MATEO ALEXANDER', 'ROMERO CORTES', '32323232', '32323232', 'mateoronorbit@gmail.com', 'empleado'),
(68, 'MATEO ALEXANDER', 'ROMERO CORTES', '545454', '545454', 'mateoronorbit@gmail.com', 'empleado'),
(69, 'MATEO ALEXANDER', 'ROMERO CORTES', '66666666', '99999', 'mateoronorbit@gmail.com', 'empleado'),
(71, 'Samuel', 'Leon', 'saleon', 'saleon', 'saleon@gmail.com', 'admin'),
(72, 'James', 'Rodriguez', 'jaja10', 'jaja10', 'mateore312312@gmail.com', 'empleado'),
(73, '5', '5', '5', '5', '5@daasd', 'empleado'),
(74, '653', '3654', '6354', '6345', '364@dasdadas', 'empleado'),
(75, '312312', '312312', '312312321', '3123123', '312312@adads', 'empleado'),
(76, 'Alejandro', 'Cepeda', 'Alejo3032', 'mmmmm', 'alej@gmail.com', 'empleado'),
(78, 'MATEO ALEXANDER', 'ROMERO CORTES', 'Mateo1010', '323131313123', 'mateoronorbit@gmail.com', 'empleado'),
(79, 'MATEO ALEXANDER ROMERO CORTES', '123213123', '1233123', '1312312312', 'mateoronorbit@gmail.com', 'empleado'),
(80, 'Jeison Andrés', 'Prieto Sánchez', 'ja6903', '6903', 'japrieto8856@misena.edu.co', 'admin'),
(81, 'Ines', 'Perado', 'ines95', 'ines95', 'ines.perado@gmail.com', 'empleado'),
(82, 'Elsa', 'Sonado', 'elsason', '123456', 'elsason95@gmail.com', 'empleado'),
(83, 'Jorge', 'Álvarez', 'jorge93', '9305', 'jorge9305@gma.com', 'empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_docs`),
  ADD KEY `fk_docs_1` (`doc_prop`);

--
-- Indices de la tabla `inmuebles_arriendo`
--
ALTER TABLE `inmuebles_arriendo`
  ADD PRIMARY KEY (`id_inmueble`),
  ADD KEY `fk_inmu_1` (`doc_prop`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`doc_prop`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_docs` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inmuebles_arriendo`
--
ALTER TABLE `inmuebles_arriendo`
  MODIFY `id_inmueble` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `fk_docs_1` FOREIGN KEY (`doc_prop`) REFERENCES `propietarios` (`doc_prop`);

--
-- Filtros para la tabla `inmuebles_arriendo`
--
ALTER TABLE `inmuebles_arriendo`
  ADD CONSTRAINT `fk_inmu_1` FOREIGN KEY (`doc_prop`) REFERENCES `propietarios` (`doc_prop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
