-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2017 a las 15:52:22
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `activos_tickets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articlefiles`
--

CREATE TABLE `articlefiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `answer` text,
  `hdcategory_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `selected` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `answer`, `hdcategory_id`, `modified`, `user_id`, `created`, `selected`) VALUES
(1, 'NO SIRVE PANTALLA', 'CAMBIAR EL CABLE', 1, '2017-09-27 17:10:10', 2, '2017-09-27 17:10:10', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles_roles`
--

CREATE TABLE `articles_roles` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articles_roles`
--

INSERT INTO `articles_roles` (`id`, `article_id`, `role_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `branchgroup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `branches`
--

INSERT INTO `branches` (`id`, `name`, `branchgroup_id`) VALUES
(1, 'COOPORATIVO', 13),
(2, 'TONY POZA RICA', 1),
(3, 'TONY XALAPA', 14),
(4, 'TONY CD VICTORIA', 15),
(5, 'TONY VERACRUZ ', 13),
(6, 'TONY ZAMORA', 1),
(7, 'TONY IRAPUATO ', 14),
(8, 'TONY TUXTEPEC', 15),
(9, 'TONY ACAYUCAN', 13),
(10, 'TONY NAUCALPAN', 1),
(11, 'TONY SALTILLO', 14),
(12, 'TONY APIZACO', 15),
(13, 'TONY SAN LUIS', 13),
(14, 'TONY MERIDA', 1),
(15, 'TONY CHALCO', 14),
(16, 'TONY ZAPOPAN', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branchgroups`
--

CREATE TABLE `branchgroups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `branchgroups`
--

INSERT INTO `branchgroups` (`id`, `name`) VALUES
(1, 'ZONA SUR'),
(13, 'ZONA NORTE'),
(14, 'ZONA ESTE'),
(15, 'ZONA OESTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'ASUS'),
(2, 'ZEBRA'),
(3, 'DELL'),
(4, 'ACER'),
(5, 'VOLT'),
(6, 'HERON'),
(7, 'BIXLON'),
(8, 'CINO'),
(9, 'MICROSOFT'),
(10, 'POSIFLEX'),
(11, 'OKI'),
(12, 'DATALOGIC'),
(13, 'LENOVO'),
(14, 'STEREN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`) VALUES
(1, 'PESO'),
(2, 'DOLLAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `color`) VALUES
(1, 'ADMINISTRADORES', ''),
(2, 'MESA DE AYUDA', ''),
(3, 'VENDEDORES', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hdcategories`
--

CREATE TABLE `hdcategories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hdcategories`
--

INSERT INTO `hdcategories` (`id`, `title`, `parent_id`, `lft`, `rght`) VALUES
(11, 'compras', NULL, 1, 34),
(12, 'analisis de ventas', 11, 2, 21),
(13, 'Backorder de pedidos', 11, 22, 29),
(14, 'Bitácora de pedidos cancelados', 11, 30, 33),
(15, 'Mensaje de error', 12, 3, 4),
(16, 'Mensaje de error', 13, 23, 24),
(17, 'Mensaje de error', 14, 31, 32),
(18, 'Administración', NULL, 35, 68),
(19, 'Alta empleados', 18, 36, 39),
(20, 'Baja empleados', 18, 40, 47),
(21, 'Cambio de cheque por efectivo', 18, 48, 51),
(22, 'No imprime el reporte', 19, 37, 38),
(23, 'Error al transferir', 20, 41, 42),
(24, 'Mensaje de error', 20, 43, 44),
(25, 'No imprime el reporte', 20, 45, 46),
(26, 'Mensaje de error', 21, 49, 50),
(27, 'Cancelaciones', 18, 52, 55),
(28, 'Mensaje de error', 27, 53, 54),
(29, 'Captura de anticipos', 18, 56, 61),
(30, 'Mensaje de error', 29, 57, 58),
(31, 'No muestra la quincena correcta', 29, 59, 60),
(32, 'Captura de coberturas', 18, 62, 67),
(33, 'Mensaje de error', 32, 63, 64),
(34, 'No muestra la quincena correcta', 32, 65, 66),
(37, 'Categoria', 12, 5, 6),
(38, 'Categoria', 12, 7, 8),
(39, 'Categoria', 12, 9, 10),
(40, 'Categoria', 12, 11, 12),
(41, 'Categoria', 12, 13, 14),
(42, 'Categoria', 12, 15, 16),
(43, 'Categoria', 13, 25, 26),
(44, 'Categoria', 13, 27, 28),
(45, 'Categoria', 12, 17, 18),
(46, 'a', 12, 19, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hdtemplate`
--

CREATE TABLE `hdtemplate` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `hdcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hdtemplate`
--

INSERT INTO `hdtemplate` (`id`, `title`, `hdcategory_id`) VALUES
(1, 'template1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internalnotes`
--

CREATE TABLE `internalnotes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `internalnotes`
--

INSERT INTO `internalnotes` (`id`, `name`, `ticket_id`, `user_id`, `created`) VALUES
(2, 'LE RECOMENDE AL USUARIO QUE REVISARA LA CONEXION DEL CABLE VGA Y DE CORRIENTE DEL MONITOR', 1, 2, '2017-09-22 20:20:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `number` varchar(100) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `pdf` varchar(100) DEFAULT NULL,
  `xml` varchar(100) DEFAULT NULL,
  `purchase_order` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `invoices`
--

INSERT INTO `invoices` (`id`, `number`, `supplier_id`, `pdf`, `xml`, `purchase_order`) VALUES
(1, '10', 1, '2', '6', 'SADASD32423423'),
(2, '11', 2, '1', '1', 'ASGHSDD45'),
(3, '12', 3, '3', '3', 'QWRT23'),
(4, '13', 4, '7', '8', 'ETYRP45'),
(5, '14', 5, '3', '4', 'GHSA4'),
(6, '15', 6, '5', '6', 'HKLF5'),
(7, '16', 7, '7', '8', 'XBNDF5'),
(8, '17', 8, '9', '5', 'ÑKOE5'),
(9, '18', 9, '5', '1', 'DKLS7'),
(10, '19', 10, '4', '4', 'NDHEI1'),
(11, '20', 11, '5', '5', 'EDVL532'),
(12, '21', 12, '9', '9', 'DGJ54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemcategories`
--

CREATE TABLE `itemcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemcategories`
--

INSERT INTO `itemcategories` (`id`, `name`, `parent_id`) VALUES
(1, 'PC', NULL),
(2, 'GABINETE', 1),
(3, 'MINILAPTOP', NULL),
(4, 'PANTALLAS', 1),
(5, 'TECLADO', 1),
(6, 'MOUSE', 1),
(7, 'IMPRESORAS', NULL),
(8, 'IMPRESORA DE TICKET', 7),
(9, 'IMPRESORA CENEFAS', 7),
(10, 'IMPRESORA ETIQUETAS', 7),
(11, 'IMPRESORA DE MATRIZ', 7),
(12, 'impresora portatil', NULL),
(13, 'SCANNERS CAMA', NULL),
(14, 'SCANNERS DE GATILLO', NULL),
(15, 'SCANNERS DE GATILLO INALAMBRICO', NULL),
(16, 'CAJONES', NULL),
(17, 'DESACTIVADORES', NULL),
(18, 'REGULADORES DE PC', NULL),
(19, 'REGULADOR COPIADORA', NULL),
(20, 'NO.BREAKS DE PC', NULL),
(21, 'NO.BREAKS DE SERVIDOR', NULL),
(22, 'NO.BREAKS/VIDEOVIGILANCIA', NULL),
(23, 'AMPLIFICADOR', NULL),
(24, 'WEBCAM', NULL),
(25, 'MICROFONO', NULL),
(26, 'BOCINAS', NULL),
(27, 'SWITCH', NULL),
(28, 'SERVIDOR', NULL),
(29, 'RUTEADOR', NULL),
(30, 'GATEWAY', NULL),
(31, 'CONMUTADOR', NULL),
(32, 'TELEFONOS IP', NULL),
(33, 'TELEFONOS INALAMBRCOS', NULL),
(34, 'DIADEMAS INALAMBRICAS', NULL),
(35, 'BOTONERA', NULL),
(36, 'DISCO USB P/RESPALDO', NULL),
(37, 'VERIFICADOR DE PRECIOS', NULL),
(38, 'TERMINAL PORTATIL', NULL),
(39, 'CABLES HDMI', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemcodes`
--

CREATE TABLE `itemcodes` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `statusitem_id` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `warranty` date DEFAULT NULL,
  `positionbranch_id` int(11) DEFAULT NULL,
  `service_tag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemcodes`
--

INSERT INTO `itemcodes` (`id`, `item_id`, `serial`, `invoice_id`, `statusitem_id`, `created`, `warranty`, `positionbranch_id`, `service_tag`) VALUES
(1, 1, '3213143513213', 1, 1, '2017-09-22', '2020-08-14', 1, '2132131435132'),
(2, 3, '24FQL02', 2, 1, '2017-09-22', '2020-11-18', NULL, '31'),
(3, 3, '2W0NYD1', 3, 1, '2017-09-22', '2016-10-23', NULL, '12341353457'),
(4, 3, '736TT12', 4, 1, '2017-09-22', '2019-07-27', 1, '354685461'),
(5, 5, '16HZRL1', 5, 1, '2017-09-22', '2019-08-26', 3, '3214654165'),
(6, 6, 'ETELE50C0060053D114001', 6, 1, '2017-09-22', '2020-03-16', NULL, '3'),
(7, 6, 'ETELE50C006005CFF4001', 7, 1, '2017-09-22', '2021-03-17', 2, '316514'),
(8, 6, 'ETELE50C00600602B754001', 8, 1, '2017-09-22', '2015-08-15', 1, '123123123'),
(9, 6, 'ETELE50C0060053D194001', 9, 1, '2017-09-22', '2022-01-01', 3, '12341353457'),
(10, 6, 'ETELE50C00600602B744001', 10, 1, '2017-09-22', '2013-09-15', 4, '14654968514'),
(11, 7, 'AK25041270A0', 11, 1, '2017-09-22', '2016-08-13', 6, '.'),
(12, 7, 'AK6A012315A0', 12, 1, '2017-09-22', '2022-01-01', 5, '1231423'),
(13, 6, 'ETELE50C00600600C614001', 1, 1, '2017-09-22', '2019-04-13', 7, '12312312524534');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(199) DEFAULT NULL,
  `itemcategory_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `name`, `itemcategory_id`, `currency_id`, `model`, `color`, `unit_cost`, `brand_id`) VALUES
(1, 'MONITOR ASUS', 1, 2, '2WAEFSDA342', 'NEGRO', '486.00', 1),
(2, 'DISCO DURO', 2, 1, 'ASGT453', 'NEGRO', '2900.00', 1),
(3, 'CPU DELL OPTIPLEX 3020', 2, 2, 'OPTIPLEX 3020', 'NEGRO', '102.00', 3),
(4, 'IMPRESORA ZEBRA GC420', 11, 2, 'GC420', 'BLANCO', '202.00', 2),
(5, 'CPU DELL OPTIPLEX 380', 2, 2, 'OPTIPLEX 380', 'NEGRO', '102.00', 3),
(6, 'PANTALLA LCD ACER X163WB', 4, 2, 'X163WB', 'NEGRO', '90.00', 4),
(7, 'IMPRESORA DE MATRIZ DE PUNTO OKI ML-621', 11, 2, 'ML-621', 'BLANCO', '205.00', 11),
(8, 'CABLE HDMI STEREN', 39, 1, 'C12', 'NEGRO', '100.00', 14),
(24, 'dfg', NULL, NULL, 'asd', NULL, NULL, NULL),
(25, 'a', 1, 1, 't6798', 'negro', '342.98', 1),
(26, '', 1, 1, '', '', NULL, 1),
(27, 'prueba', 1, 1, 'sfdsdf', 'negro', '2342.00', 1),
(28, 'teca', 5, 2, 't6798', '', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `layoutcategories`
--

CREATE TABLE `layoutcategories` (
  `id` int(11) NOT NULL,
  `itemcategory_id` int(11) DEFAULT NULL,
  `layout_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `compare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `layoutcategories`
--

INSERT INTO `layoutcategories` (`id`, `itemcategory_id`, `layout_id`, `qty`, `compare`) VALUES
(1, 1, 2, 5, 4),
(2, 4, 5, 4, NULL),
(3, 3, 7, 1, NULL),
(4, 5, 5, 4, NULL),
(5, 8, 5, 4, NULL),
(6, 11, 5, 1, NULL),
(7, 13, 5, 4, NULL),
(8, 16, 5, 4, NULL),
(9, 20, 5, 4, NULL),
(10, 32, 5, 1, NULL),
(20, 1, 6, 1, NULL),
(21, 4, 6, 1, NULL),
(22, 5, 6, 1, NULL),
(23, 6, 6, 1, NULL),
(24, 8, 6, 1, NULL),
(25, 14, 6, 1, NULL),
(26, 18, 6, 1, NULL),
(27, 32, 6, 1, NULL),
(28, 3, 7, 1, NULL),
(29, 19, 7, 2, NULL),
(30, 1, 8, 2, NULL),
(31, 4, 8, 2, NULL),
(32, 5, 8, 2, NULL),
(33, 6, 8, 2, NULL),
(34, 11, 8, 1, NULL),
(35, 14, 8, 2, NULL),
(36, 20, 8, 2, NULL),
(37, 32, 8, 1, NULL),
(38, 1, 9, 1, NULL),
(39, 4, 9, 1, NULL),
(40, 5, 10, 1, NULL),
(41, 6, 9, 1, NULL),
(42, 11, 9, 1, NULL),
(43, 14, 9, 1, NULL),
(44, 18, 9, 1, NULL),
(46, 24, 9, 1, NULL),
(47, 25, 9, 1, NULL),
(48, 26, 9, 1, NULL),
(49, 32, 9, 1, NULL),
(50, 38, 9, 1, NULL),
(51, 1, 11, 1, NULL),
(52, 4, 11, 1, NULL),
(53, 5, 11, 1, NULL),
(54, 6, 11, 1, NULL),
(55, 11, 11, 1, NULL),
(56, 18, 11, 1, NULL),
(57, 32, 11, 1, NULL),
(58, 37, 12, 1, NULL),
(59, 4, 13, 1, NULL),
(60, 5, 13, 1, NULL),
(61, 6, 13, 2, NULL),
(62, 21, 13, 2, NULL),
(63, 22, 13, 1, NULL),
(64, 27, 13, 3, NULL),
(65, 28, 13, 2, NULL),
(66, 29, 13, 1, NULL),
(67, 36, 13, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `layouts`
--

CREATE TABLE `layouts` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `layout` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `layouts`
--

INSERT INTO `layouts` (`id`, `branch_id`, `position_id`, `layout`) VALUES
(1, 1, 1, 3),
(2, 1, 2, 1),
(3, 1, 5, 1),
(4, 4, 1, 3),
(5, 5, 1, 4),
(6, 5, 2, 1),
(7, 5, 6, 1),
(8, 5, 9, 2),
(9, 5, 10, 1),
(10, 5, 14, 1),
(11, 5, 15, 1),
(12, 5, 23, 1),
(13, 5, 22, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movereasons`
--

CREATE TABLE `movereasons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `factor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movereasons`
--

INSERT INTO `movereasons` (`id`, `name`, `factor`) VALUES
(1, 'SALIDA POR GARANTIA', '-1'),
(2, 'SALIDA POR CHATARRA', '-1'),
(3, 'ENTRADA POR COMPRA', '1'),
(4, 'ENTRADA POR GARANTIA', '1'),
(5, 'ENTRADA POR TRASPASO', '1'),
(6, 'ENTRADA POR REMPLAZO O CAMBIO', '1'),
(7, 'SALIDA POR TRASPASO', '-1'),
(8, 'SALIDA POR REMPLAZO O CAMBIO', '-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movereasontemplates`
--

CREATE TABLE `movereasontemplates` (
  `id` int(11) NOT NULL,
  `template` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movereason_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positionbranches`
--

CREATE TABLE `positionbranches` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `positionbranches`
--

INSERT INTO `positionbranches` (`id`, `branch_id`, `position_id`, `name`) VALUES
(1, 2, 1, 'CAJA '),
(2, 3, 2, 'ATENCION A CLIENTES '),
(3, 4, 6, 'CENTRO DE COPIADO'),
(4, 1, 9, 'SURTIDO PEDIDOS'),
(5, 10, 8, 'MESA DE CONTROL'),
(6, 16, 10, 'INVENTARIOS'),
(7, 5, 16, 'VENTAS MOVIL'),
(8, 13, 7, 'MOSTRADOR '),
(9, 4, 12, 'ADMINISTRACION DE VENTAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(1, 'CAJAS'),
(2, 'ATENCION A CLIENTES'),
(5, 'GERENTE REGIONAL'),
(6, 'CENTRO DE COPIADO'),
(7, 'MOSTRADOR'),
(8, 'MESA DE CONTROL'),
(9, 'SURTIDO PEDIDOS'),
(10, 'INV.'),
(11, 'TMK'),
(12, 'ADMINISTRACION DE VENTAS'),
(13, 'SUBGERENTE'),
(14, 'CREDIT'),
(15, 'AUXILIAR ADMINISTRACION'),
(16, 'VENTAS MOVIL'),
(17, 'JEFE DE BODEGA'),
(18, 'SALIDAS'),
(19, 'ENTRADAS'),
(20, 'JEFE DE EMBARQUE'),
(21, 'FACTURAS'),
(22, 'SERVIDOR'),
(23, 'VERIFICADOR DE PRECIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicnotes`
--

CREATE TABLE `publicnotes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicnotes`
--

INSERT INTO `publicnotes` (`id`, `name`, `ticket_id`, `user_id`, `created`) VALUES
(2, 'REVISE EL CABLE DE CORRIENTE Y DE VIDEO DEL MONITOR', 1, 2, '2017-09-22 20:21:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'USUARIO FINAL'),
(3, 'PRIVILEGIOS MEDIOS'),
(4, 'SUPER ADMINISTRADOR'),
(5, 'VISITANTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shippers`
--

CREATE TABLE `shippers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `shippers`
--

INSERT INTO `shippers` (`id`, `name`) VALUES
(1, 'CENTRA'),
(2, 'ESTAFETA'),
(3, 'TCI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sources`
--

CREATE TABLE `sources` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sources`
--

INSERT INTO `sources` (`id`, `title`) VALUES
(1, 'SISTEMA DE TICKETS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statusitems`
--

CREATE TABLE `statusitems` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `statusitems`
--

INSERT INTO `statusitems` (`id`, `name`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'transito'),
(4, 'deshecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statususers`
--

CREATE TABLE `statususers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `statususers`
--

INSERT INTO `statususers` (`id`, `name`) VALUES
(1, 'activo'),
(2, 'baja temporal'),
(3, 'vacaciones'),
(4, 'inactivo'),
(5, 'dia economico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockmoves`
--

CREATE TABLE `stockmoves` (
  `id` int(11) NOT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `warehouse_2` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `receiver_sign` varchar(100) DEFAULT NULL,
  `movereason_id` int(11) DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `guide_number` varchar(100) DEFAULT NULL,
  `packages` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `notes` text,
  `confirmed` smallint(6) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stockmoves`
--

INSERT INTO `stockmoves` (`id`, `warehouse_id`, `warehouse_2`, `receiver`, `receiver_sign`, `movereason_id`, `shipper_id`, `guide_number`, `packages`, `user_id`, `notes`, `confirmed`, `parent_id`) VALUES
(1, 1, 2, 1, 'ELENA AURORA', 7, 1, 'N/A', 1, 3, 'TRASPASO DE PANTALLA PARA ALMACEN COORPORATIVO', 1, 1),
(2, 2, 2, 3, 'Jesus Enrique', 5, 1, '', 1, 3, 'entrada por traspaso de veracruz a coorporativo', 0, 1),
(3, 1, 2, 1, 'ELENA AURORA', 3, NULL, 'N/A', 1, 2, 'sdasdfasd', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockmoves_details`
--

CREATE TABLE `stockmoves_details` (
  `id` int(11) NOT NULL,
  `stockmove_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `itemcode_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `deliverydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stockmoves_details`
--

INSERT INTO `stockmoves_details` (`id`, `stockmove_id`, `item_id`, `itemcode_id`, `qty`, `deliverydate`) VALUES
(1, 1, 6, 13, 1, '0000-00-00 00:00:00'),
(2, 2, 6, 13, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `reorder` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stocks`
--

INSERT INTO `stocks` (`id`, `warehouse_id`, `item_id`, `reorder`) VALUES
(1, 1, 3, 10),
(2, 1, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`) VALUES
(1, 'APPLE'),
(2, 'GATEWAY'),
(3, 'HP'),
(4, 'TOSHIBA'),
(5, 'LENOVO'),
(6, 'DELL'),
(7, 'ACER'),
(8, 'SAMSUNG'),
(9, 'ASUS'),
(10, 'BENQ'),
(11, 'COMPAQ'),
(12, 'SONY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketimpacts`
--

CREATE TABLE `ticketimpacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketimpacts`
--

INSERT INTO `ticketimpacts` (`id`, `name`) VALUES
(1, 'ALTO'),
(2, 'MEDIO'),
(3, 'BAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketlogs`
--

CREATE TABLE `ticketlogs` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_transfer` int(11) DEFAULT NULL,
  `group_transfer` int(11) DEFAULT NULL,
  `new_status` varchar(100) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `coments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketlogs`
--

INSERT INTO `ticketlogs` (`id`, `ticket_id`, `user_id`, `group_id`, `user_transfer`, `group_transfer`, `new_status`, `created`, `coments`) VALUES
(1, 1, 1, 1, 2, 1, 'RE-ASIGNADO', '2017-09-22', 'REASIGNE EL TICKET A UN ADMINISTRADOR QUE TIENE MAS ENTENDIMIENTO DEL TEMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketpriorities`
--

CREATE TABLE `ticketpriorities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketpriorities`
--

INSERT INTO `ticketpriorities` (`id`, `name`) VALUES
(1, 'ALTO'),
(2, 'MEDIO'),
(3, 'BAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `tickettype_id` int(11) DEFAULT NULL,
  `ticket_status_id` int(11) DEFAULT NULL,
  `source_id` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `solution` varchar(100) DEFAULT NULL,
  `resolution` text,
  `itemcode_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_autor` int(11) DEFAULT NULL,
  `user_requeried` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `ticketimpact_id` int(11) DEFAULT NULL,
  `ticketurgency_id` int(11) DEFAULT NULL,
  `ticketpriority_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `hdcategory_id` int(11) DEFAULT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `tickettype_id`, `ticket_status_id`, `source_id`, `title`, `description`, `solution`, `resolution`, `itemcode_id`, `user_id`, `group_id`, `user_autor`, `user_requeried`, `created`, `ticketimpact_id`, `ticketurgency_id`, `ticketpriority_id`, `parent_id`, `hdcategory_id`, `modified`) VALUES
(1, 1, 4, '1', 'MONITOR DEJO DE MOSTRAR IMAGEN', 'MI MONITOR LCD NO MUESTRA IMAGEN SE APAGO DERREPENTE', '', '', 13, 2, 3, 3, 3, '2017-09-22 20:04:25', 1, 1, 1, 0, 16, '2017-10-18 14:06:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketsfiles`
--

CREATE TABLE `ticketsfiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketstatuses`
--

CREATE TABLE `ticketstatuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value_order` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketstatuses`
--

INSERT INTO `ticketstatuses` (`id`, `name`, `value_order`) VALUES
(1, 'ACTIVO', 1),
(2, 'CANCELADO', 2),
(3, 'RESUELTO', 2),
(4, 'TRANSFERIDO', 1),
(5, 'Default', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickettypes`
--

CREATE TABLE `tickettypes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickettypes`
--

INSERT INTO `tickettypes` (`id`, `name`, `rank`) VALUES
(1, 'INCIDENTE', 1),
(2, 'PROBLEMA', 2),
(3, 'CAMBIO', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketurgencies`
--

CREATE TABLE `ticketurgencies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticketurgencies`
--

INSERT INTO `ticketurgencies` (`id`, `name`) VALUES
(1, 'ALTO'),
(2, 'MEDIO'),
(3, 'BAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `positionbranch_id` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `statususer_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `positionbranch_id`, `password`, `statususer_id`, `group_id`, `role_id`) VALUES
(1, 'ELENA AURORA', 'VALDES CAMACHO', 2, 'perro123', 1, 1, 3),
(2, 'JULIO CESAR', 'PEREA PASTRANA', 9, 'perro1234', 3, 1, 4),
(3, 'JESUS ENRIQUE', 'GONZALEZ GARCIA', 1, 'PERRO123', 1, 3, 4),
(4, 'CARLOS ANDRES ', 'COBOS COBOS', 3, '1234', 1, 3, 1),
(5, 'HECTOR ISAI', 'MEZA HERNANDEZ', 4, '1234', 3, 3, 2),
(6, 'BRYAN EMILIO', 'GARCES AQUINO', 6, '1234', 2, 2, 3),
(7, 'SANDRA DENISSE', 'CRUZ GALLEGOS', 7, '1234', 5, 2, 3),
(8, 'RICARDO DANIEL', 'VILLA GALINDO', 8, '1234', 4, 2, 1),
(9, 'ROGELIO', 'VILLEGAS MARTINEZ', 4, '1234', 2, 3, 3),
(10, 'MIGUEL ANGEL ', 'MARQUEZ DOMINGUEZ', 3, '1234', 1, 1, 1),
(11, 'PEDRO ADOLFO', 'MORALES', 1, '1234', 3, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `branch_id`) VALUES
(1, 'ALMACEN 1 VERACRUZ NORTE', 5),
(2, 'ALAMACEN COORPORATIVO', 1),
(3, 'ALMACEN XALAPA', 3),
(4, 'ALMACEN CD VICTORIA', 4),
(5, 'ALMACEN VERACRUZ', 5),
(6, 'ALMACEN ZAMORA', 6),
(7, 'ALMACEN IRAPUATO', 7),
(8, 'ALMACEN TUXTEPEC', 8),
(9, 'ALMACEN ACAYUCAN', 9),
(10, 'ALMACEN NAUCALPAN', 10),
(11, 'ALMACEN SALTILLO', 11),
(12, 'ALMACEN APIZACO', 12),
(13, 'ALMACEN SAN LUIS', 13),
(14, 'ALMACEN MERIDA', 14),
(15, 'ALMACEN CHALCO', 15),
(16, 'ALMACEN ZAPOPAN', 16);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articlefiles`
--
ALTER TABLE `articlefiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articles_roles`
--
ALTER TABLE `articles_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `branchgroups`
--
ALTER TABLE `branchgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hdcategories`
--
ALTER TABLE `hdcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hdtemplate`
--
ALTER TABLE `hdtemplate`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `internalnotes`
--
ALTER TABLE `internalnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `itemcategories`
--
ALTER TABLE `itemcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `itemcodes`
--
ALTER TABLE `itemcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `layoutcategories`
--
ALTER TABLE `layoutcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movereasons`
--
ALTER TABLE `movereasons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movereasontemplates`
--
ALTER TABLE `movereasontemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positionbranches`
--
ALTER TABLE `positionbranches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicnotes`
--
ALTER TABLE `publicnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `statusitems`
--
ALTER TABLE `statusitems`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `statususers`
--
ALTER TABLE `statususers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stockmoves`
--
ALTER TABLE `stockmoves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stockmoves_details`
--
ALTER TABLE `stockmoves_details`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketimpacts`
--
ALTER TABLE `ticketimpacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketlogs`
--
ALTER TABLE `ticketlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketpriorities`
--
ALTER TABLE `ticketpriorities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketsfiles`
--
ALTER TABLE `ticketsfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketstatuses`
--
ALTER TABLE `ticketstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickettypes`
--
ALTER TABLE `tickettypes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticketurgencies`
--
ALTER TABLE `ticketurgencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articlefiles`
--
ALTER TABLE `articlefiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `articles_roles`
--
ALTER TABLE `articles_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `branchgroups`
--
ALTER TABLE `branchgroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `hdcategories`
--
ALTER TABLE `hdcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `hdtemplate`
--
ALTER TABLE `hdtemplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `internalnotes`
--
ALTER TABLE `internalnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `itemcategories`
--
ALTER TABLE `itemcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `itemcodes`
--
ALTER TABLE `itemcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `layoutcategories`
--
ALTER TABLE `layoutcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de la tabla `layouts`
--
ALTER TABLE `layouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `movereasons`
--
ALTER TABLE `movereasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `movereasontemplates`
--
ALTER TABLE `movereasontemplates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `positionbranches`
--
ALTER TABLE `positionbranches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `publicnotes`
--
ALTER TABLE `publicnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `shippers`
--
ALTER TABLE `shippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sources`
--
ALTER TABLE `sources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `statusitems`
--
ALTER TABLE `statusitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `statususers`
--
ALTER TABLE `statususers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `stockmoves`
--
ALTER TABLE `stockmoves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `stockmoves_details`
--
ALTER TABLE `stockmoves_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `ticketimpacts`
--
ALTER TABLE `ticketimpacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ticketlogs`
--
ALTER TABLE `ticketlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ticketpriorities`
--
ALTER TABLE `ticketpriorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ticketsfiles`
--
ALTER TABLE `ticketsfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ticketstatuses`
--
ALTER TABLE `ticketstatuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tickettypes`
--
ALTER TABLE `tickettypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ticketurgencies`
--
ALTER TABLE `ticketurgencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
