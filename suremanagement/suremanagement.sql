-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2021 a las 05:03:20
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

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
  `id_propietario` int(11) NOT NULL
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
  `id_propietario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmuebles_arriendo`
--

INSERT INTO `inmuebles_arriendo` (`id_inmueble`, `direccion`, `complemento`, `valor`, `fecha_pago`, `id_propietario`) VALUES
(1, 'Calle 109 # 102-45', 'Casa, segundo piso', 2200000, '2021-06-27', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id_propietario` int(11) NOT NULL,
  `nombres` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id_propietario`, `nombres`, `apellidos`, `telefono`, `correo`) VALUES
(1, 'mauro andres', 'hernandez', 3116805444, 'mateoro@gmail.com'),
(2, 'mauro', 'hernandez', 3116805455, 'mateoroeore@gmail.com'),
(3, 'marcos', 'garza', 3116805455, 'mate4131312e@gmail.com'),
(5, 'MATEO', 'ROMERO', 3116806341, 'mateoronorbit@gmail.com'),
(7, 'Alejandro', 'Rodriguez', 333333333, 'jro@gmail.com');

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
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contraseña`, `email`) VALUES
(65, 'Fabio', 'Hernando', 'admin', 'admin', 'mateoronorbit@gmail.com'),
(67, 'MATEO ALEXANDER', 'ROMERO CORTES', '32323232', '32323232', 'mateoronorbit@gmail.com'),
(68, 'MATEO ALEXANDER', 'ROMERO CORTES', '545454', '545454', 'mateoronorbit@gmail.com'),
(69, 'MATEO ALEXANDER', 'ROMERO CORTES', '66666666', '99999', 'mateoronorbit@gmail.com'),
(71, 'Samuel', 'Leon', 'saleon', 'saleon', 'saleon@gmail.com'),
(72, 'James', 'Rodriguez', 'jaja10', 'jaja10', 'mateore312312@gmail.com'),
(73, '5', '5', '5', '5', '5@daasd'),
(74, '653', '3654', '6354', '6345', '364@dasdadas'),
(75, '312312', '312312', '312312321', '3123123', '312312@adads'),
(76, 'Alejandro', 'Cepeda', 'Alejo3032', 'mmmmm', 'alej@gmail.com'),
(78, 'MATEO ALEXANDER', 'ROMERO CORTES', 'Mateo1010', '323131313123', 'mateoronorbit@gmail.com'),
(79, 'MATEO ALEXANDER ROMERO CORTES', '123213123', '1233123', '1312312312', 'mateoronorbit@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles_arriendo`
--


--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id_propietario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmuebles_arriendo`
--
ALTER TABLE `inmuebles_arriendo`
  MODIFY `id_inmueble` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id_propietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inmuebles_arriendo`
--
ALTER TABLE `inmuebles_arriendo`
  ADD CONSTRAINT `inmuebles_arriendo_ibfk_1` FOREIGN KEY (`id_propietario`) REFERENCES `propietarios` (`id_propietario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
