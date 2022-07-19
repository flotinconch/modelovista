-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2022 a las 14:46:06
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flexacolor`
--
CREATE DATABASE IF NOT EXISTS `flexacolor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `flexacolor`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `spDeleteproducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spDeleteproducto` (IN `_id` INT(11))   BEGIN

DELETE FROM `productos` WHERE id = _id;

END$$

DROP PROCEDURE IF EXISTS `spInsertproduct`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertproduct` (IN `_id` INT(11), IN `_nombre` VARCHAR(250), IN `_descripcion` VARCHAR(1024), IN `_precio` DECIMAL(9,2), IN `_activo` INT(11), IN `_categoria` INT(11), IN `_tono` VARCHAR(100), IN `_patron` VARCHAR(100), IN `_tipo` VARCHAR(100), IN `_especificaciones` VARCHAR(100))   BEGIN

INSERT INTO productos (id, nombre, descripcion, precio, activo, id_categoria, tono, patron, tipo, tono, especificaciones) VALUES (_id, _nombre, _descripcion, _precio, _activo, _categoria, _tono, _patron, _tipo, _especificaciones);

END$$

DROP PROCEDURE IF EXISTS `spInsertUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertUser` (IN `_user` VARCHAR(100), IN `_password` VARCHAR(100), IN `_name` VARCHAR(100), IN `_lastname` VARCHAR(100), IN `_email` VARCHAR(100))   BEGIN 
	
    INSERT INTO user (password, user, name, lastname, email) VALUES (_password, _user, _name, _lastname, _email);

END$$

DROP PROCEDURE IF EXISTS `spsearchAllproductos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spsearchAllproductos` ()   BEGIN

SELECT id, nombre, descripcion, precio, tono, patron, tipo FROM productos;

END$$

DROP PROCEDURE IF EXISTS `spSearchProduct`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchProduct` (IN `_id` INT(11))   BEGIN

SELECT id, nombre, descripcion, precio, tono, patron, tipo FROM `productos` WHERE id = _id;

END$$

DROP PROCEDURE IF EXISTS `spUpdateProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spUpdateProducto` (IN `_id` INT(11), IN `_descripcion` VARCHAR(100), IN `_precio` VARCHAR(250), IN `_tono` VARCHAR(100), IN `_patrones` VARCHAR(100), IN `_tipo` VARCHAR(100), IN `_nombre` VARCHAR(200))   BEGIN

UPDATE productos SET descripcion = _descripcion,
precio = _precio,
nombre = _nombre,
tono = _tono,
patron = _patron,
tipo = _tipo
WHERE id  =  _id;	

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_usuarios`
--

DROP TABLE IF EXISTS `carrito_usuarios`;
CREATE TABLE IF NOT EXISTS `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito_usuarios`
--

INSERT INTO `carrito_usuarios` (`id_sesion`, `id_producto`) VALUES
('p8n45h7bf4640ksfr0g8dtccgf', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  `activo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `tono` varchar(100) NOT NULL,
  `patron` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `especificaciones` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `activo`, `id_categoria`, `tono`, `patron`, `tipo`, `especificaciones`) VALUES
(2, 'cortina', 'cortina francesa', '10.00', 1, 1, 'celeste', '', '1', 'grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Code` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Code`, `name`, `lastname`, `Password`, `email`, `user`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', '2022-07-14 04:33:32', '2022-07-14 04:33:32'),
(2, 'o', 'o', '1', 'o@o.com', 'juan', '2022-07-14 04:36:21', '2022-07-14 04:36:21'),
(3, 'san pedro', 'carmen', '2', 'slopez@misena.edu.co', 'simon', '2022-07-17 15:25:47', '2022-07-17 15:25:47'),
(5, 'a', 'aaa', 'eoe', 'a@krf.cp', 'ey', '2022-07-17 22:54:41', '2022-07-17 22:54:41');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_usuarios`
--
ALTER TABLE `carrito_usuarios`
  ADD CONSTRAINT `carrito_usuarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
