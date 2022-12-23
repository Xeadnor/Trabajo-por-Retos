-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2022 a las 19:17:08
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `frikisetas`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `calcularClientes` (`id` INT) RETURNS INT(11)  BEGIN
DECLARE a INT;
SELECT COUNT(*) into a FROM usuario U
WHERE U.idTipo = id;
return a;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cumple` date DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `dir1` varchar(50) DEFAULT NULL,
  `dir2` varchar(50) DEFAULT NULL,
  `dir3` varchar(50) DEFAULT NULL,
  `dir4` varchar(5) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `cvv` varchar(3) DEFAULT NULL,
  `cardNumber` varchar(20) DEFAULT NULL,
  `mesCaducidad` varchar(30) DEFAULT NULL,
  `añoCaducidad` varchar(10) DEFAULT NULL,
  `tipoTarjeta` varchar(20) DEFAULT NULL,
  `notificaciones` tinyint(1) DEFAULT NULL,
  `newsletter` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`id`, `nombre`, `apellidos`, `cumple`, `sexo`, `dir1`, `dir2`, `dir3`, `dir4`, `pais`, `owner`, `cvv`, `cardNumber`, `mesCaducidad`, `añoCaducidad`, `tipoTarjeta`, `notificaciones`, `newsletter`) VALUES
(1, 'Admin', 'Admin', '0000-00-00', 'otro', '', '', '', '', 'Ninguno', '', '', '', '0', 'Ninguno', 'visa', NULL, NULL),
(2, 'Pablo', 'Sainz', '2001-12-31', 'hombre', '', '', '', '', 'Ninguno', '', '', '', '0', 'Ninguno', 'visa', NULL, 1),
(3, 'Marblo', 'devega', '0000-00-00', 'otro', '', '', '', '', 'Ninguno', '', '', '', '0', 'Ninguno', 'visa', NULL, 1),
(4, 'Pablo', 'Sainz', '0000-00-00', 'otro', '', '', '', '', 'Ninguno', '', '', '', '0', 'Ninguno', 'visa', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pswd`
--

CREATE TABLE `pswd` (
  `id` int(11) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pswd`
--

INSERT INTO `pswd` (`id`, `password`) VALUES
(1, 'Admin123!'),
(2, 'Pablo123!'),
(3, 'Marblo123!'),
(4, 'Prueba123!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`idTipo`, `tipo`, `cantidad`) VALUES
(1, 'cliente', 3),
(2, 'administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `idTipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nick`, `email`, `imagen`, `idTipo`) VALUES
(1, 'Xeadnor', 'admin@frikisetas.com', 'batman.png', 2),
(2, 'Pablo', 'pablo@gmail.com', 'spiderman.png', 1),
(3, 'Marblo', 'marblo@gmail.com', 'flash.png', 1),
(4, 'Pableras', 'zapencio@gmail.com', 'superman.png', 1);

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `actualizarTipos` AFTER INSERT ON `usuario` FOR EACH ROW BEGIN
UPDATE tipos 
SET tipos.cantidad = calcularClientes(NEW.idTipo)
WHERE NEW.idTipo = tipos.idTipo;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `actualizarTiposD` AFTER DELETE ON `usuario` FOR EACH ROW BEGIN
UPDATE tipos 
SET tipos.cantidad = calcularClientes(OLD.idTipo)
WHERE OLD.idTipo = tipos.idTipo;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cambioTipo` AFTER UPDATE ON `usuario` FOR EACH ROW BEGIN
UPDATE tipos 
SET tipos.cantidad = calcularClientes(NEW.idTipo)
WHERE NEW.idTipo = tipos.idTipo;
UPDATE tipos
SET tipos.cantidad = calcularClientes(OLD.idTipo)
WHERE OLD.idTipo = tipos.idTipo;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `deleteUser` BEFORE DELETE ON `usuario` FOR EACH ROW BEGIN
DELETE  FROM info 
where OLD.id = info.id;
DELETE  FROM pswd 
where OLD.id = pswd.id;

END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD KEY `fkINFUSU` (`id`);

--
-- Indices de la tabla `pswd`
--
ALTER TABLE `pswd`
  ADD KEY `fkPSWUSU` (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkUSUTIP` (`idTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `fkINFUSU` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `pswd`
--
ALTER TABLE `pswd`
  ADD CONSTRAINT `fkPSWUSU` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fkUSUTIP` FOREIGN KEY (`idTipo`) REFERENCES `tipos` (`idTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
