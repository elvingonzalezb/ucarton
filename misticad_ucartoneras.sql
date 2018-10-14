-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2018 a las 15:21:19
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `misticad_ucartoneras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) CHARACTER SET latin1 NOT NULL,
  `descripcion_corta` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 NOT NULL,
  `destacado` char(1) CHARACTER SET latin1 NOT NULL,
  `orden` char(11) CHARACTER SET latin1 NOT NULL,
  `estado` char(1) CHARACTER SET latin1 NOT NULL,
  `autor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(200) CHARACTER SET latin1 NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`id`, `titulo`, `descripcion_corta`, `descripcion`, `imagen`, `destacado`, `orden`, `estado`, `autor`, `url`, `title`, `description`) VALUES
(1, 'Lorem Ipsum 1', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', '0', 'SERVICIOS_GENERALES03.jpg', '0', '0', '0', 'admin', 'lorem-ipsum-1', 'Lorem Ipsum 1', 'RA&RO'),
(2, 'Lorem Ipsum 2 ', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', '0', 'SERVICIOS_GENERALES02.jpg', '0', '1', '0', 'admin', 'lorem-ipsum-2-', 'Lorem Ipsum 2 ', ''),
(3, 'Lorem Ipsum 3 ', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', '0', 'SERVICIOS_GENERALES03_1.jpg', '0', '2', '0', 'admin', 'lorem-ipsum-3-', 'Lorem Ipsum 3 ', ''),
(4, 'Lorem Ipsum 4 ', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', '0', 'SERVICIOS_GENERALES04.jpg', '0', '3', '0', 'admin', 'lorem-ipsum-4-', 'Lorem Ipsum 4 ', 'RA&RO'),
(5, 'Lorem Ipsum 5 ', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', '0', 'SERVICIOS_GENERALES05.jpg', '0', '4', '0', 'admin', 'lorem-ipsum-5-', 'Lorem Ipsum 5 ', 'RA&RO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) CHARACTER SET latin1 NOT NULL,
  `descripcion_corta` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 NOT NULL,
  `destacado` char(1) CHARACTER SET latin1 NOT NULL,
  `orden` char(11) CHARACTER SET latin1 NOT NULL,
  `estado` char(1) CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `autor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(200) CHARACTER SET latin1 NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `descripcion_corta`, `descripcion`, `imagen`, `destacado`, `orden`, `estado`, `fecha`, `autor`, `url`, `title`, `description`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n\n<p>&nbsp;</p>\n', 'articulo_01.jpg', '0', '1', 'A', '2016-08-20', 'admin', 'lorem-ipsum-dolor-sit-amet,-consectetur-adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\n', 'articulo_02.jpg', '0', '2', 'A', '2016-01-03', 'admin', 'lorem-ipsum-dolor-sit-amet,-consectetur-adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n\n<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\n', 'articulo_03.jpg', '0', '0', 'A', '2018-01-24', 'Administrador', 'lorem-ipsum-dolor-sit-amet,-consectetur-adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_titulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `banner_sumilla` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `banner_enlace` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `banner_texto_enlace` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `banner_imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `banner_orden` int(11) NOT NULL,
  `banner_estado` char(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_titulo`, `banner_sumilla`, `banner_enlace`, `banner_texto_enlace`, `banner_imagen`, `banner_orden`, `banner_estado`) VALUES
(7, 'UNION CARTONERA S.R.L.', '', 'productos', '0', 'banner_02_1.jpg', 3, 'A'),
(8, 'Lorem ipsum', '', 'productos', '0', 'banner_02_01.jpg', 4, 'A'),
(9, '', '', '', '0', 'banner_01_1.jpg', 1, 'A'),
(10, '', '', '', '0', 'banner_02_02.jpg', 5, 'A'),
(11, '', '', '', '0', 'banner_02_03.jpg', 6, 'A'),
(12, '', '', '', '0', 'banner.jpg', 2, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_pagina`
--

CREATE TABLE `banner_pagina` (
  `id_banner` int(1) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `seccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banner_pagina`
--

INSERT INTO `banner_pagina` (`id_banner`, `imagen`, `seccion`) VALUES
(1, 'banner_nosotros_1.jpg', 'empresa'),
(2, 'banner_productos.jpg', 'productos'),
(3, 'BANNER_SECCIONES_PEDIDOS_01_3.jpg', 'clientes'),
(4, 'BANNERS04.jpg', 'impresiones'),
(5, 'BANNER_SECCIONES_PEDIDOS_02.jpg', 'pedidos'),
(6, 'banner_articulos.jpg', 'articulos'),
(7, 'banner_contactenos.jpg', 'contacto'),
(8, 'BANNERS08.jpg', 'login');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `tiene_subcats` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_corta` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 NOT NULL,
  `destacado` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `orden` char(11) CHARACTER SET latin1 NOT NULL,
  `estado` char(1) CHARACTER SET latin1 NOT NULL,
  `autor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(200) CHARACTER SET latin1 NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `padre` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `tiene_subcats`, `titulo`, `descripcion_corta`, `descripcion`, `imagen`, `destacado`, `orden`, `estado`, `autor`, `url`, `title`, `description`, `padre`) VALUES
(8, 'NO', 'BOLSAS PROMOCIONALES', '0', '0', 'bolsa_Moixx.jpg', 'NO', '0', 'A', 'Administrador', 'bolsas-promocionales', 'BOLSAS PROMOCIONALES', '', 22),
(9, 'NO', 'BOLSAS PARA ALIMENTOS', '0', '0', 'bolsa_para_alimentos_pan.jpg', 'NO', '0', 'A', 'Administrador', 'bolsas-para-alimentos', 'BOLSAS PARA ALIMENTOS', '', 22),
(10, 'NO', 'BOLSAS INDUSTRIALES', '0', '0', 'bolsa_ultrasika.jpg', 'NO', '0', 'A', 'Administrador', 'bolsas-industriales', 'BOLSAS INDUSTRIALES', '', 22),
(16, 'SI', 'PIROTINES', '0', '0', 'PANETONE.jpg', 'SI', '9', 'A', 'Administrador', 'pirotines', 'PIROTINES', '', 0),
(18, 'SI', 'CONTÓMETROS', '0', '0', 'contometros.jpg', 'SI', '10', 'A', 'Administrador', 'contometros', 'CONTÓMETROS', 'contometros', 0),
(19, '0', 'Bobinas de Papel', '0', '0', 'Bobina_de_papel_900x600.jpg', '0', '3', 'A', 'Administrador', 'bobinas-de-papel', 'Bobinas de Papel', 'BOBINAS DE PAPEL', 20),
(20, 'SI', 'EMPAQUES ', '0', '0', 'chinito_2.jpg', 'SI', '10', 'A', 'Administrador', 'empaques-', 'EMPAQUES ', '', 0),
(22, 'SI', 'BOLSAS DE PAPEL', '', '', 'bolsas_2.jpg', 'SI', '1', 'A', '', 'bolsas-de-papel', 'BOLSAS DE PAPEL', '', 0),
(23, 'NO', 'Sobres para sándwich', '', '', 'chinito_1.jpg', 'NO', '1', 'A', '', 'sobres-para-sandwich', 'Sobres para sándwich', '', 20),
(24, 'NO', 'Individuales', '', '', 'bon_bebef_3.jpg', 'NO', '2', 'A', '', 'individuales', 'Individuales', '', 20),
(26, 'NO', 'Para bond', '', '', 'CONTOMETROS_BLANCOS_P_W.jpg', 'NO', '1', 'A', '', 'para-bond', 'Para bond', '', 18),
(27, 'NO', 'Autocopiativo', '', '', 'CONTOMETROS_AUTOCOPIATIVO.jpg', 'NO', '2', 'A', '', 'autocopiativo', 'Autocopiativo', '', 18),
(28, 'NO', 'Termico', '', '', 'CONTOMETROS_TERMICOS.jpg', 'NO', '3', 'A', '', 'termico', 'Termico', '', 18),
(34, 'NO', 'Para panetones', '', '', 'pirotin.jpg', 'NO', '1', 'A', '', 'para-panetones', 'Para panetones', '', 16),
(35, 'NO', 'Para keke', '', '', 'PIROTIN_ROJO.jpg', 'NO', '2', 'A', '', 'para-keke', 'Para keke', '', 16),
(38, 'SI', 'PRODUCTOS  RESTAURANTES', '', '', 'hot_sale_printed_food_oil_absorbing_paper_1.jpg', 'NO', '2', 'A', '', 'productos--restaurantes', 'PRODUCTOS  RESTAURANTES', '', 0),
(40, 'NO', 'individuales', '', '', 'tn_12688025_10208811695069787_5174584770769026688_n.jpg', 'NO', '1', 'A', '', 'individuales', 'individuales', '', 38),
(42, 'NO', 'sobres para alimentos', '', '', 'tn_12651262_10208811694349769_1501898478949469721_n.jpg', 'NO', '2', 'A', '', 'sobres-para-alimentos', 'sobres para alimentos', '', 38),
(43, 'NO', 'Hojas de papel manteca', '', '', 'hot_sale_printed_food_oil_absorbing_paper.jpg', 'NO', '2', 'A', '', 'hojas-de-papel-manteca', 'Hojas de papel manteca', '', 20),
(44, 'NO', 'hojas de papel manteca', '', '', 'hot_sale_printed_food_oil_absorbing_paper_2.jpg', 'NO', '3', 'A', '', 'hojas-de-', 'hojas de ', '', 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_impresion`
--

CREATE TABLE `categorias_impresion` (
  `id` int(11) NOT NULL,
  `tiene_subcats` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 NOT NULL,
  `destacado` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `orden` char(11) CHARACTER SET latin1 NOT NULL,
  `estado` char(1) CHARACTER SET latin1 NOT NULL,
  `url` varchar(200) CHARACTER SET latin1 NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `padre` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(6) NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(12) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'empresa',
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registrante` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `razon_social`, `telefono`, `email`, `clave`, `timestamp`, `codigo`, `fecha_registro`, `estado`, `nombres`, `apellidos`, `origen`, `tipo`, `direccion`, `registrante`) VALUES
(1, '0', '3214568', 'er.ick9015@gmail.com', '123456', 1516748035, 'URS-20180123225355', '2018-01-23 22:53:55', 'Activo', 'Erick', 'Apellidos', 'Por un amigo o conocido', 'empresa', 'direccion abcd 123', 'web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `llave` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `valor` text CHARACTER SET latin1,
  `description` text CHARACTER SET latin1,
  `tipo` tinyint(1) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `llave`, `valor`, `description`, `tipo`, `orden`, `visible`) VALUES
(1, 'enlace_facebook', 'https://es-la.facebook.com/balbinUC/', 'Se coloca la ruta url completa hacia la cuenta de Facebook.', 0, 1, 1),
(2, 'enlace_twitter', 'https://twitter.com/', 'Se coloca la ruta url completa hacia la cuenta de twitter.', 0, 2, 1),
(3, 'telefono', '252 5573 / 949018765 / 954825643', 'Se coloca los telefonos de la Empresa', 0, 3, 1),
(4, 'enlace_youtube', 'https://www.youtube.com', 'Direccion url completa del video en youtube', 0, 4, 1),
(5, 'horario_sabado', '9:00-12:00 pm', 'Se coloca la ruta url completa hacia la cuenta de linkedin.', 0, 5, 1),
(6, 'enlace_googleplus', 'https://plus.google.com', 'url completa de la pagina ', 0, 6, 1),
(7, 'enlace_rss', 'https://www.rss.com', 'Url de la pagina', 0, 7, 1),
(8, 'correo_notificaciones', 'ventas@ucartonera.com', 'Correo a donde llegaran todas la notificaciones de la pagina', 0, 8, 1),
(9, 'telefono_head', '(01) 252-5573 / 949 018 765 / 954 825 643  ', 'Es el numero de telefono de la empresa, Colocar un solo nuero telefonico', 0, 9, 1),
(10, 'direccion_empresa', 'Calle Los Cipreces Mz B Lt 23 (alt curva de galvez) Pachacamac', 'Es la direccion exacta de la empresa', 0, 10, 1),
(11, 'horario_semana', '<p>9:00 - 5:00 pm</p>\n', 'Es el horario de atencion', 1, 11, 1),
(12, 'distrito', 'Pachacamac - Lima', 'Se coloca el distrito y ciudad para la direccion de la cabezera en el ninico de pagina', 0, 12, 1),
(13, 'correo_from', 'ventas@ucartonera.com', 'Correo principal', 0, 13, 1),
(14, 'texto_footer', 'Somos UNION CARTONERA S.R.L., una empresa con más de 10 años de experiencia en el rubro del cartón corrugado. Nuestro principal objetivo es proporcionar soluciones de empaque y embalaje de acuerdo a la necesidad del cliente.', 'Texto Footer', 0, 14, 1),
(15, 'rpm', '', 'RPM', 0, 15, 1),
(16, 'rpc', '', 'RPC', 0, 16, 1),
(17, 'direccion', 'Calle Los Cipreces Mz B Lt 45 Pachacamac', 'direccion Corta para la cabezera en el inicio de pagina', 0, 17, 1),
(18, 'correo_dos', 'ventas@ucartonera.com', 'Correo alternativo', 0, 18, 1),
(19, 'celular_head', '949 018 765 / 954 825 643', 'Celular', 0, 19, 1),
(20, 'texto_horario', ' ', 'texto horario de footer', 0, 20, 1),
(21, 'copyright', 'COPYRIGHT © 2018', 'copyright', 0, 21, 1),
(22, 'direccion_footer', 'Calle Los Cipreces Mz B Lt 45 Pachacamac', 'Direccion del footer', 0, 22, 1),
(23, 'texto_nosotros_inicio', 'Comprometidos con nuestros clientes', 'Texto del bloque de nosotros en la pagina inicio', 0, 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `estado` varchar(150) CHARACTER SET latin1 NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `id_detalle` int(6) NOT NULL,
  `id_orden` int(6) NOT NULL,
  `id_producto` int(6) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precio_unitario` float NOT NULL DEFAULT '0',
  `subtotal` float NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int(9) NOT NULL,
  `id` int(9) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_foto`, `id`, `imagen`, `orden`) VALUES
(1, 1, 'g8_full_fe_1.jpg', 1),
(5, 2, 'g4.jpg', 1),
(6, 2, 'g4_2_1.jpg', 2),
(7, 1, 'g8_full2.jpg', 2),
(8, 9, 'g3.jpg', 1),
(9, 0, 'bolsa1.jpg', 1),
(12, 0, 'pirotin.jpg', 2),
(13, 0, 'caja2.jpg', 3),
(15, 0, 'i2.jpg', 5),
(16, 0, 'individual.jpg', 6),
(17, 0, 'c1_1.jpg', 7),
(19, 0, 'c3.jpg', 9),
(20, 0, 'envases.jpg', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_escolar`
--

CREATE TABLE `fotos_escolar` (
  `id_foto` int(9) NOT NULL,
  `id` int(9) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fotos_escolar`
--

INSERT INTO `fotos_escolar` (`id_foto`, `id`, `imagen`, `orden`) VALUES
(1, 1, 'SERVICIOS_GENERALES04.jpg', 1),
(2, 1, 'SERVICIOS_GENERALES03.jpg', 2),
(3, 1, 'SERVICIOS_GENERALES08.jpg', 3),
(4, 1, 'SERVICIOS_GENERALES07.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresiones`
--

CREATE TABLE `impresiones` (
  `id_foto` int(9) NOT NULL,
  `id` int(9) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(9) NOT NULL,
  `title` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `impresiones`
--

INSERT INTO `impresiones` (`id_foto`, `id`, `titulo`, `url`, `descripcion`, `imagen`, `orden`, `title`, `description`, `precio`) VALUES
(1, 8, 'Shoping 1', 'shoping-1', '<p>Fabricamos bolsas de papel  y cartones  según los requerimientos y necesidades de cada cliente. \nContamos con máquinas especiales para elaborar nuestros productos así como también de ambientes \ne infraestructura adecuada para la recepción,  fabricación, almacenamiento y distribución de \nnuestros productos.</p>', 'PRODUCTOS_0004s_0023_Capa_10.jpg', 1, 'Shoping 1', '', 0),
(4, 10, 'varios1', 'varios1', '<p>Fabricamos bolsas de papel  y cartones  según los requerimientos y necesidades de cada cliente. \nContamos con máquinas especiales para elaborar nuestros productos así como también de ambientes \ne infraestructura adecuada para la recepción,  fabricación, almacenamiento y distribución de \nnuestros productos.</p>', 'PRODUCTOS_0004s_0012_Capa_7.jpg', 9, 'varios1', '', 0),
(6, 0, 'CAJA DE 500gr.', 'caja-de-500gr.', '<p>Realizamos impresión de cajas de Panetones en finos acabados y presentaciones. Solicite cotizaciones para&nbsp;900 gr.,&nbsp;500 gr., y&nbsp;100 gr.&nbsp;Impresión full color.</p>\n', 'San_Miguel_0004s_0009_Capa_14.jpg', 1, 'CAJA DE 500gr.', 'Cajas de Paneton', 0),
(8, 0, 'Modelo Rectangular', 'modelo-rectangular', '<p>Fabricamos cajas para tortas en diversos modelos, diseños y colores de acuerdo a los requerimientos y necesidades de los clientes.</p>\n', 'Moderna_0004s_0015_Capa_3.jpg', 2, 'Modelo Rectangular', 'Cajas para Tortas y Pasteles', 0),
(10, 9, 'Modelo Exclusivo', 'modelo-exclusivo', '<p>Fabricamos cajas para tortas en diversas tamaños y medidas de acuerdo al requerimiento del cliente.</p>\n', 'tortas.jpg', 3, 'Modelo Exclusivo', 'Cajas para Tortas y Pasteles', 0),
(14, 12, 'Modelo con Ventana', 'modelo-con-ventana', '<p>Cajas con ventana para todo tipo de pasteles que permiten visualizar el contenido entregado al cliente.</p>\n', 'zucarella_2_1.jpg', 1, 'Modelo con Ventana', 'Cajas para Pasteles', 0),
(15, 0, 'Modelo Feliz Día Mamá', 'modelo-feliz-dia-mama', '<p>Fabricamos cajas para esta fecha especial por el día de la madre en difrentes modelos.</p>\n', 'mama_0004s_0013_Capa_5_1.jpg', 2, 'Modelo Feliz Día Mamá', 'Cajas para Pasteles', 0),
(16, 12, 'Feliz Día Mamá', 'feliz-dia-mama', '<p>Fabricamos cajas para esta fecha especial por el dia de la madre en difrentes modelos.</p>\n', 'bandejas_mamis.jpg', 2, 'Feliz Día Mamá', 'Cajas para Pasteles', 0),
(17, 12, 'Cupcake de 2 unidades', 'cupcake-de-2-unidades', '<p>Fabricamos cajas para Turrones en diversas presentaciones, colores y tamaños.</p>\n', 'cupcake_de_3_2.jpg', 3, 'Cupcake de 2 unidades', 'Cajas para Turrones', 0),
(21, 14, 'caja para pizza', 'caja-para-pizza', '<p>Fabricamos cajas corrugadas para todos los sectores industriales.</p>\n', 'PIZZAS_peperoni.jpg', 1, 'caja para pizza', 'cajas microcorrugadas industriales', 0),
(22, 14, 'Pizzas', 'pizzas', '<p>Fabricamos cajas para el sector de restaurantes y pizzerias.</p>\n', 'caja_pizza443x400.jpg', 2, 'Pizzas', 'cajas para pizzas', 0),
(23, 14, 'Agricolas', 'agricolas', '<p>Atendemos al sector agricola para el traslado de todo tipo de frutos.</p>\n', 'Fresh_house_0004s_0022_Capa_81.jpg', 3, 'Agricolas', 'cajas microcorrugadas', 0),
(31, 17, 'Personalizado', 'personalizado', '<p>Posavasos personalizados</p>\n', 'PosaVasos_443x400.jpg', 1, 'Personalizado', '', 0),
(32, 17, 'Seleccionados', 'seleccionados', '<p>Posavasos Seleccionados</p>\n', 'PosaVasos2_443x400.jpg', 2, 'Seleccionados', '', 0),
(33, 24, 'Platos Duplex', 'platos-duplex', '', 'plato_redondo_1.jpg', 1, 'Platos Duplex', '', 0),
(34, 25, 'Plato corrugado', 'plato-corrugado', '', 'PLATOS_CARTON_443x400.jpg', 2, 'Plato corrugado', '', 0),
(35, 21, 'Chifa Express', 'chifa-express', '<p>Cajas en carton Duplex especial para alimenos.</p>\n', 'chifa_prueba.jpg', 4, 'Chifa Express', 'Cajas en carton duplex', 0),
(37, 26, 'Plato para tortas redondo', 'plato-para-tortas-redondo', '', 'LA_ESTACION.jpg', 3, 'Plato para tortas redondo', '', 0),
(38, 26, 'Plato para tortas rectangular', 'plato-para-tortas-rectangular', '', 'LA_ESTACION_CUADRADO.jpg', 4, 'Plato para tortas rectangular', '', 0),
(39, 26, 'Plato para torta cuadrada', 'plato-para-torta-cuadrada', '', 'plato_cuadrado.jpg', 5, 'Plato para torta cuadrada', '', 0),
(41, 22, 'Cajas especiales', 'cajas-especiales', '', 'caja_de_flor.jpg', 5, 'Cajas especiales', '', 0),
(42, 21, 'Caja para chifa anaranjado', 'caja-para-chifa-anaranjado', '', 'chifa_naranja_.jpg', 6, 'Caja para chifa anaranjado', '', 0),
(43, 21, 'Bandejas hectitor', 'bandejas-hectitor', '', 'hectitor.jpg', 7, 'Bandejas hectitor', '', 0),
(44, 23, 'Cajas para mecheros ', 'cajas-para-mecheros-', '', 'mechero.jpg', 8, 'Cajas para mecheros ', '', 0),
(45, 22, 'Cajas especiales para porcor ', 'cajas-especiales-para-porcor-', '', 'porcor.jpg', 9, 'Cajas especiales para porcor ', '', 0),
(47, 17, 'Portavasos 2 unidades', 'portavasos-2-unidades', '', 'portavaso_san_fernando.jpg', 3, 'Portavasos 2 unidades', '', 0),
(48, 17, 'Portavasos 4 unidades', 'portavasos-4-unidades', '', 'portavasos_pw.jpg', 4, 'Portavasos 4 unidades', '', 0),
(49, 17, 'Portavaso Hectitors', 'portavaso-hectitors', '', 'portavasos_pw_1.jpg', 5, 'Portavaso Hectitors', '', 0),
(50, 23, 'Cajas para café', 'cajas-para-cafe', '', 'CAJA_CAFETA_PW.jpg', 10, 'Cajas para café', '', 0),
(54, 16, 'Jacket Cafeta', 'jacket-cafeta', '', 'cafeta.jpg', 4, 'Jacket Cafeta', '', 0),
(55, 16, 'Jacket para vaso de café', 'jacket-para-vaso-de-cafe', '', 'cafeteria.jpg', 5, 'Jacket para vaso de café', '', 0),
(56, 16, 'Jacket para vaso de café El chinito', 'jacket-para-vaso-de-cafe-el-chinito', '', 'el_chinito.jpg', 6, 'Jacket para vaso de café El chinito', '', 0),
(57, 16, 'Jacket para bebidas calientes', 'jacket-para-bebidas-calientes', '', 'expresate.jpg', 7, 'Jacket para bebidas calientes', '', 0),
(58, 16, 'Jacket Pecaditos', 'jacket-pecaditos', '', 'pecaditos.jpg', 8, 'Jacket Pecaditos', '', 0),
(59, 16, 'Jacket Pieros', 'jacket-pieros', '', 'pieros.jpg', 9, 'Jacket Pieros', '', 0),
(60, 16, 'Jacket Pura gula', 'jacket-pura-gula', '', 'pura_gula.jpg', 10, 'Jacket Pura gula', '', 0),
(61, 16, 'Jacket San Café', 'jacket-san-cafe', '', 'san_cafe.jpg', 11, 'Jacket San Café', '', 0),
(62, 16, 'Jacket Ton Fon', 'jacket-ton-fon', '', 'ton_fon.jpg', 12, 'Jacket Ton Fon', '', 0),
(63, 16, 'Jacket de Zucarella', 'jacket-de-zucarella', '', 'ZUCARELLA.jpg', 13, 'Jacket de Zucarella', '', 0),
(64, 30, 'Vaso de polipapel para jugo 21 ONZ.', 'vaso-de-polipapel-para-jugo-21-onz.', '', 'NUTRILIFE_PW_21_ONZ.jpg', 7, 'Vaso de polipapel para jugo 21 ONZ.', '', 0),
(65, 27, 'Vaso para jugo 8 ONZ.', 'vaso-para-jugo-8-onz.', '', 'vaso_8_onz_kiara.jpg', 8, 'Vaso para jugo 8 ONZ.', '', 0),
(66, 28, 'Vaso para café 12 ONZ.', 'vaso-para-cafe-12-onz.', '', 'VASO_BLANCO_12_ONZ.jpg', 9, 'Vaso para café 12 ONZ.', '', 0),
(68, 29, 'Vaso para café 16 ONZ.', 'vaso-para-cafe-16-onz.', '', 'vaso_cafeta_16_onz_1.jpg', 10, 'Vaso para café 16 ONZ.', '', 0),
(69, 27, 'Vaso para bebidas calientes  8 ONZ.', 'vaso-para-bebidas-calientes--8-onz.', '', 'vaso_chinito_8_onz.jpg', 11, 'Vaso para bebidas calientes  8 ONZ.', '', 0),
(70, 29, 'Vaso para bebidas frías 16 ONZ. ', 'vaso-para-bebidas-frias-16-onz.-', '', 'vaso_de_jugo_16_onz.jpg', 12, 'Vaso para bebidas frías 16 ONZ. ', '', 0),
(71, 30, 'Vaso para bebidas calientes 21 ONZ.', 'vaso-para-bebidas-calientes-21-onz.', '', 'vasos_celeste_21_onz.jpg', 13, 'Vaso para bebidas calientes 21 ONZ.', '', 0),
(75, 29, 'Vaso para bebidas Ton Fon calientes 16 ONZ.', 'vaso-para-bebidas-ton-fon-calientes-16-onz.', '', 'vaso_ton_font_16_onz.jpg', 14, 'Vaso para bebidas Ton Fon calientes 16 ONZ.', '', 0),
(76, 11, ' Caja para Panetón modelo Bruño', '-caja-para-paneton-modelo-bruno', '', 'BRUO.jpg', 4, ' Caja para Panetón modelo Bruño', '', 0),
(77, 11, 'Caja para Panetón Chocodomi', 'caja-para-paneton-chocodomi', '', 'chocodomi.jpg', 5, 'Caja para Panetón Chocodomi', '', 0),
(78, 11, 'Caja para Panetón Chocodomi ', 'caja-para-paneton-chocodomi-', '', 'chocopaneton.jpg', 6, 'Caja para Panetón Chocodomi ', '', 0),
(79, 11, 'Caja para Panetón Celeste', 'caja-para-paneton-celeste', '', 'CLINICA_ANA.jpg', 7, 'Caja para Panetón Celeste', '', 0),
(80, 11, 'Caja para Panetón Cumbre', 'caja-para-paneton-cumbre', '', 'CUMBRE.jpg', 8, 'Caja para Panetón Cumbre', '', 0),
(81, 11, 'Caja para Panetón Delí', 'caja-para-paneton-deli', '', 'deli.jpg', 9, 'Caja para Panetón Delí', '', 0),
(82, 11, 'Caja para Panetón especial', 'caja-para-paneton-especial', '', 'ESPECIAL_VERDE.jpg', 10, 'Caja para Panetón especial', '', 0),
(83, 11, 'Caja para Panetón Estrella Polar', 'caja-para-paneton-estrella-polar', '', 'estrella_polar.jpg', 11, 'Caja para Panetón Estrella Polar', '', 0),
(84, 11, 'Caja para Panetón caja roja', 'caja-para-paneton-caja-roja', '', 'FELIX.jpg', 12, 'Caja para Panetón caja roja', '', 0),
(85, 11, 'Caja para Panetón Integral', 'caja-para-paneton-integral', '', 'INTEGRAL.jpg', 13, 'Caja para Panetón Integral', '', 0),
(86, 11, 'Panetón Celeste', 'paneton-celeste', '', 'JUAN.jpg', 14, 'Panetón Celeste', '', 0),
(87, 11, 'Panetón Delicias', 'paneton-delicias', '', 'LAS_DELICIAS.jpg', 15, 'Panetón Delicias', '', 0),
(88, 11, 'Caja para panetón ', 'caja-para-paneton-', '', 'MARCELA.jpg', 16, 'Caja para panetón ', '', 0),
(89, 11, 'Caja para panetón especiales ', 'caja-para-paneton-especiales-', '', 'panettone.jpg', 17, 'Caja para panetón especiales ', '', 0),
(90, 11, 'Caja para panetón San Fernando', 'caja-para-paneton-san-fernando', '', 'san_fernando.jpg', 18, 'Caja para panetón San Fernando', '', 0),
(91, 11, 'Caja para Panetón San Miguel', 'caja-para-paneton-san-miguel', '', 'san_miguel_naranja.jpg', 19, 'Caja para Panetón San Miguel', '', 0),
(92, 11, 'Caja para panetón UNION', 'caja-para-paneton-union', '', 'UNION_AZUL.jpg', 20, 'Caja para panetón UNION', '', 0),
(94, 12, 'Cupcake de 4 unidades ', 'cupcake-de-4-unidades-', '', 'cupcake_de_4.jpg', 0, 'Cupcake de 4 unidades ', '', 0),
(95, 12, 'Caja para cupcake con asa', 'caja-para-cupcake-con-asa', '', 'cupcake_zucarella.jpg', 0, 'Caja para cupcake con asa', '', 0),
(96, 12, 'Caja joel', 'caja-joel', '', 'joel.jpg', 0, 'Caja joel', '', 0),
(97, 12, 'Caja cupcake mamis', 'caja-cupcake-mamis', '', 'mamis.jpg', 0, 'Caja cupcake mamis', '', 0),
(98, 22, 'caja joel', 'caja-joel', '', 'joel_1.jpg', 0, 'caja joel', '', 0),
(99, 14, 'caja microcorrugada', 'caja-microcorrugada', '', 'PIZZAS_p_w.jpg', 0, 'caja microcorrugada', '', 0),
(100, 14, 'caja blanca', 'caja-blanca', '', 'PIZZAS_totus.jpg', 0, 'caja blanca', '', 0),
(101, 14, 'Caja microcorrugadas', 'caja-microcorrugadas', '', 'STAV.jpg', 0, 'Caja microcorrugadas', '', 0),
(102, 27, 'vaso marcial', 'vaso-marcial', '', 'VASO_MARCIAL_8.jpg', 0, 'vaso marcial', '', 0),
(103, 27, 'vaso mono meloso', 'vaso-mono-meloso', '', 'vaso_meloso_8.jpg', 0, 'vaso mono meloso', '', 0),
(104, 28, 'vaso central', 'vaso-central', '', 'vaso_central_plomo_12.jpg', 0, 'vaso central', '', 0),
(105, 28, 'vaso Qchurros', 'vaso-qchurros', '', 'vaso_QCHURROS_12.jpg', 0, 'vaso Qchurros', '', 0),
(106, 29, 'vaso tarot', 'vaso-tarot', '', 'tarot_vaso_16.jpg', 0, 'vaso tarot', '', 0),
(107, 29, 'vaso bongiorno', 'vaso-bongiorno', '', 'vaso_bongiorno_16.jpg', 0, 'vaso bongiorno', '', 0),
(108, 29, 'vaso jugo', 'vaso-jugo', '', 'vaso_de_jugo_16.jpg', 0, 'vaso jugo', '', 0),
(109, 29, 'vaso criollo', 'vaso-criollo', '', 'vaso_don_criollo_16.jpg', 0, 'vaso criollo', '', 0),
(110, 29, 'vaso la estación', 'vaso-la-estacion', '', 'vaso_la_estacion_16.jpg', 0, 'vaso la estación', '', 0),
(111, 30, ' vaso chinito', '-vaso-chinito', '', 'vaso_el_chinito_vaso_21.jpg', 0, ' vaso chinito', '', 0),
(112, 9, 'caja dulce ', 'caja-dulce-', '', 'CAJA_DULCE_TENTACION.jpg', 0, 'caja dulce ', '', 0),
(113, 9, 'caja dia mamá', 'caja-dia-mama', '', 'caja_para_dia_de_la_madre.jpg', 0, 'caja dia mamá', '', 0),
(114, 9, 'caja torta ', 'caja-torta-', '', 'caja_para_torta_canieli.jpg', 0, 'caja torta ', '', 0),
(115, 9, 'caja estación', 'caja-estacion', '', 'caja_para_torta_la_moderna.jpg', 0, 'caja estación', '', 0),
(116, 9, 'mamis', 'mamis', '', 'caja_para_torta_mamis.jpg', 0, 'mamis', '', 0),
(117, 9, 'caja san fernando', 'caja-san-fernando', '', 'caja_san_fernando_tortas.jpg', 0, 'caja san fernando', '', 0),
(118, 9, 'pasteleria fina', 'pasteleria-fina', '', 'torta_pasteleria_fina.jpg', 0, 'pasteleria fina', '', 0),
(119, 9, 'estación', 'estacion', '', 'caja_la_estacion.jpg', 0, 'estación', '', 0),
(120, 12, 'cajita alfieri', 'cajita-alfieri', '', 'alfieri.jpg', 0, 'cajita alfieri', '', 0),
(121, 12, 'bandejitas', 'bandejitas', '', 'bandejas_varias.jpg', 0, 'bandejitas', '', 0),
(122, 12, 'caja corazón', 'caja-corazon', '', 'CAJA_CORAZON_MAMA.jpg', 0, 'caja corazón', '', 0),
(123, 12, 'caja de alfajores', 'caja-de-alfajores', '', 'caja_para_alfajores_1.jpg', 0, 'caja de alfajores', '', 0),
(124, 12, 'caja con asa', 'caja-con-asa', '', 'cajas_de_tortas_san_miguel.jpg', 0, 'caja con asa', '', 0),
(125, 21, 'bandeja sushi', 'bandeja-sushi', '', 'BANDEJA_SUSHI_1.jpg', 0, 'bandeja sushi', '', 0),
(126, 21, 'bandeja mediterraneo ', 'bandeja-mediterraneo-', '', 'caja_bandeja_mediterraneo.jpg', 0, 'bandeja mediterraneo ', '', 0),
(127, 21, 'cajas suchi', 'cajas-suchi', '', 'caja_de_sushi.jpg', 0, 'cajas suchi', '', 0),
(128, 21, 'cajitas para chifa', 'cajitas-para-chifa', '', 'caja_chifa_roja.jpg', 0, 'cajitas para chifa', '', 0),
(129, 21, 'crepas', 'crepas', '', 'caja_crepas.jpg', 0, 'crepas', '', 0),
(130, 21, 'cajas chifa personalizadas', 'cajas-chifa-personalizadas', '', 'CAJITAS_CHIFA_COLORES.jpg', 0, 'cajas chifa personalizadas', '', 0),
(131, 23, 'cajas para velas', 'cajas-para-velas', '', 'caja_amarilla_industrial.jpg', 0, 'cajas para velas', '', 0),
(133, 23, 'caja de roll', 'caja-de-roll', '', 'caja_industrial_rol.jpg', 0, 'caja de roll', '', 0),
(134, 22, 'caja especial ', 'caja-especial-', '', 'CAJA_BATIENDO.jpg', 0, 'caja especial ', '', 0),
(135, 22, 'cajas feliz dia papá', 'cajas-feliz-dia-papa', '', 'dia_del_papa.jpg', 0, 'cajas feliz dia papá', '', 0),
(136, 23, 'caja microcorrugada', 'caja-microcorrugada', '', 'vistoni.jpg', 0, 'caja microcorrugada', '', 0),
(137, 17, 'portavaso piombino', 'portavaso-piombino', '', 'piombino.jpg', 0, 'portavaso piombino', '', 0),
(138, 17, 'portavaso  cafe', 'portavaso--cafe', '', 'portavaso_cafe.jpg', 0, 'portavaso  cafe', '', 0),
(139, 17, 'portavaso cafeta', 'portavaso-cafeta', '', 'portavaso_cafeta.jpg', 0, 'portavaso cafeta', '', 0),
(140, 14, 'aromas', 'aromas', '', 'vistoni_1.jpg', 0, 'aromas', '', 0),
(141, 22, 'caja ecologica', 'caja-ecologica', '', 'caja_especial_juan_valdez.jpg', 0, 'caja ecologica', '', 0),
(142, 23, 'caja para turrones', 'caja-para-turrones', '', 'caja_de_turron_2.jpg', 0, 'caja para turrones', '', 0),
(143, 23, 'caja blanca', 'caja-blanca', '', 'CAJA_LA_BLANQUITA.jpg', 0, 'caja blanca', '', 0),
(144, 23, 'turrón san martin', 'turron-san-martin', '', 'caja_de_turron_san_martin.jpg', 0, 'turron san martin', '', 0),
(145, 22, 'caja alfajores', 'caja-alfajores', '', 'casa_del_alfajores_amarilla.jpg', 0, 'caja alfajores', '', 0),
(146, 23, 'cajas azul', 'cajas-azul', '', 'caja_para_torta_azul.jpg', 0, 'cajas azul', '', 0),
(149, 21, 'don lalo', 'don-lalo', '', 'cajita_don_lalo.jpg', 0, 'don lalo', '', 0),
(150, 21, 'cajita verde', 'cajita-verde', '', 'cajita_verde_de_chifa.jpg', 0, 'cajita verde', '', 0),
(151, 22, 'la casa del alfajor', 'la-casa-del-alfajor', '', 'caja_del_alfajor_verde.jpg', 0, 'la casa del alfajor', '', 0),
(152, 22, 'caja armable', 'caja-armable', '', 'caja_d_chancho.jpg', 0, 'caja armable', '', 0),
(153, 22, 'caja dulce', 'caja-dulce', '', 'caja_dulce.jpg', 0, 'caja dulce', '', 0),
(154, 22, 'caja hectitor', 'caja-hectitor', '', 'caja_hectoritos.jpg', 0, 'caja hectitor', '', 0),
(155, 12, 'dulce detalle', 'dulce-detalle', '', 'caja_torta_dulce_detalle.jpg', 0, 'dulce detalle', '', 0),
(156, 27, 'vaso duo', 'vaso-duo', '', 'DUO_VASO_8.jpg', 0, 'vaso duo', '', 0),
(157, 27, 'Vaso la central', 'vaso-la-central', '', 'la_central_8.jpg', 0, 'Vaso la central', '', 0),
(158, 17, 'big lan', 'big-lan', '', 'portavaso_big_lila.jpg', 0, 'big lan', '', 0),
(159, 9, 'caja fantasia', 'caja-fantasia', '', 'especialidad_en_tortas.jpg', 0, 'caja fantasia', '', 0),
(160, 9, 'caja crema fantasia', 'caja-crema-fantasia', '', 'FALTA_ARREGLAR.jpg', 0, 'caja crema fantasia', '', 0),
(161, 12, 'bandejas', 'bandejas', '', 'bandeja_de_masa.jpg', 0, 'bandejas', '', 0),
(162, 23, 'caja turrón', 'caja-turron', '', 'CAJAS_PARA_TURRONES_VARIOS.jpg', 0, 'caja turrón', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(13) CHARACTER SET latin1 NOT NULL,
  `correo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `asunto` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mensaje` text CHARACTER SET latin1 NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `estado` varchar(150) CHARACTER SET latin1 NOT NULL DEFAULT 'No Leido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `asunto`, `mensaje`, `fecha_envio`, `estado`) VALUES
(1, 'Randy', 'Sinclair', '416-385-3200', 'Randy@TalkWithLead.com', 'X Wrr g k', 'Hi,\n\nMy name is Randy and I was looking at a few different sites online and came across your site misticadigital.com.  I must say - your website is very impressive.  I found your website on the first page of the Search Engine. \n\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\n \nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \n\nTalkWithLead is a widget which captures a website visitor’s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website — while they\'re hot!\n  \nTry the TalkWithLead Live Demo now to see exactly how it works.  Visit: https://www.talkwithlead.com/Contents/LiveDemo.aspx\n\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\n\nIf you would like to talk to me about this service, please give me a call.  We do offer a 14 days free trial.  \n\nThanks and Best Regards,\nRandy', '2018-07-30 02:40:49', 'No leido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_orden` int(8) NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `timestamp` int(15) NOT NULL,
  `numero_orden` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_cliente` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje_cliente` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `total` float(8,2) NOT NULL DEFAULT '10.00',
  `fecha_registro` date NOT NULL,
  `origen` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'cliente'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_foto` int(9) NOT NULL,
  `id` int(9) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(9) NOT NULL,
  `title` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `destacado` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_foto`, `id`, `titulo`, `url`, `descripcion`, `imagen`, `orden`, `title`, `description`, `precio`, `destacado`) VALUES
(1, 0, 'G8 Ocho ', 'g8-ocho-', '<p>Fabricamos bolsas de papel  y cartones  según los requerimientos y necesidades de cada cliente. \nContamos con máquinas especiales para elaborar nuestros productos así como también de ambientes \ne infraestructura adecuada para la recepción,  fabricación, almacenamiento y distribución de \nnuestros productos.</p>', 'g8_full_fe_1.jpg', 1, 'G8 Ocho ', 'Kbm', 45, 2),
(28, 0, 'Bolsas de Comida Pizza Hut', 'bolsas-de-comida-pizza-hut', '<p>Fabricamos bolsas de papel  y cartones  según los requerimientos y necesidades de cada cliente. \nContamos con máquinas especiales para elaborar nuestros productos así como también de ambientes \ne infraestructura adecuada para la recepción,  fabricación, almacenamiento y distribución de \nnuestros productos.</p>', 'PRODUCTOS_0003s_0018_Capa_57.jpg', 7, 'Bolsas de Comida Pizza Hut', '', 0, 2),
(48, 0, 'Caja de Pasteles #2', 'caja-de-pasteles-#2', '<p>Fabricamos bolsas de papel  y cartones  según los requerimientos y necesidades de cada cliente. \nContamos con máquinas especiales para elaborar nuestros productos así como también de ambientes \ne infraestructura adecuada para la recepción,  fabricación, almacenamiento y distribución de \nnuestros productos.</p>', 'PRODUCTOS_0004s_0013_Capa_5.jpg', 5, 'Caja de Pasteles #2', '', 0, 2),
(49, 0, 'Caja de Pasteles #03', 'caja-de-pasteles-#03', '<p>Fabricamos bolsas de papel  y cartones  según los requerimientos y necesidades de cada cliente. \nContamos con máquinas especiales para elaborar nuestros productos así como también de ambientes \ne infraestructura adecuada para la recepción,  fabricación, almacenamiento y distribución de \nnuestros productos.</p>', 'PRODUCTOS_0004s_0014_Capa_4.jpg', 6, 'Caja de Pasteles #03', '', 0, 2),
(68, 0, 'Pirotin para Keke', 'pirotin-para-keke', '<p>Fabricamos pirotines de papel para Keke, suelen ser aptos para cocción, es decir, soportan el calor del horno sin quemarse.</p>\n', 'PRODUCTOS_0002s_0000_Capa_80.jpg', 1, 'Pirotin para Keke', '', 0, 2),
(69, 0, 'Pirotin Rectangular', 'pirotin-rectangular', '<p>Fabricamos bolsas de papel y cartones según los requerimientos y necesidades de cada cliente. Contamos con máquinas especiales para elaborar nuestros productos así como también de ambientes e infraestructura adecuada para la recepción, fabricación, almacenamiento y distribución de nuestros productos.</p>\n', 'PRODUCTOS_0002s_0001_Capa_79.jpg', 2, 'Pirotin Rectangular', '', 0, 2),
(70, 0, 'Pirotín para Panetón', 'pirotin-para-paneton', '<p>Fabricamos pirotín para Panetón según los requerimientos y necesidades de cada cliente. Contamos con máquinas especiales para elaborar nuestros productos así como también de ambientes e infraestructura adecuada para la recepción, fabricación, almacenamiento y distribución de nuestros productos.</p>\n', 'PRODUCTOS_0002s_0002_Capa_78.jpg', 3, 'Pirotín para Panetón', '', 0, 2),
(72, 0, 'Producto #5', 'producto-#5', '<p>Fabricamos pirotines de papel para panetones, que suelen ser aptos para cocción, es decir, soportan el calor del horno sin quemarse o deformarse.</p>\n', 'PRODUCTOS_0002s_0010_Capa_18.jpg', 5, 'Pirotin para Paneton', '', 0, 2),
(90, 0, 'Pirotin para Keke', 'pirotin-para-keke', '<p>Fabricamos pirotin de papel para keke que suelen ser aptos para la cocción, es decir, soportan el calor del horno sin quemarse.</p>\n', 'pirotin_keke_443x400.jpg', 6, 'Pirotin para Keke', '', 0, 2),
(91, 0, 'Pirotín para Keke', 'pirotin-para-keke', '<p>Fabricamos pirotines</p>\n', 'chifa_prueba.jpg', 5, 'Pirotín para Keke', '', 0, 2),
(97, 28, 'Contometro Térmico', 'contometro-termico', '<p>Contometro Térmico</p>\n', 'contometro_termico_443x400.jpg', 1, 'Contometro Térmico', '', 0, 2),
(99, 26, 'Contometro en Bond', 'contometro-en-bond', '<p>Contometro en papel Bond</p>\n', 'Contometros_Bond_443x400.jpg', 2, 'Contometro en Bond', '', 0, 2),
(100, 27, 'Contometro Autocopiativo', 'contometro-autocopiativo', '<p>Contometro Autocopiativo</p>\n', 'AUTOCOPIATIVO.jpg', 3, 'Contometro Autocopiativo', 'Contometro Autocopiativo', 0, 2),
(103, 0, 'prueba', 'prueba', '', 'chifa_amarilla.jpg', 8, 'prueba', '', 0, 2),
(104, 0, 'pirotines', 'pirotines', '', 'cuadrado.jpg', 9, 'pirotines', '', 0, 2),
(105, 35, 'Pirotin en forma rectangular', 'pirotin-en-forma-rectangular', '', 'cuadrado_1.jpg', 8, 'Pirotin en forma rectangular', '', 0, 2),
(107, 8, 'Bolsas para compras', 'bolsas-para-compras', '<p>Bolsas especiales en tamaños personalizados en material krafts y con sujetador de paja&nbsp;</p>\n', 'AHAVA.jpg', 5, 'Bolsas para compras', '', 0, 1),
(108, 8, 'Bolsas infantiles', 'bolsas-infantiles', '<p>Bolsas con asa con ful impresión en material papel bond</p>\n', 'ALEX.jpg', 6, 'Bolsas infantiles', '', 0, 2),
(109, 8, 'Bolsa alex para niños', 'bolsa-alex-para-ninos', '', 'ALEX2.jpg', 7, 'Bolsa alex para niños', '', 0, 2),
(110, 8, 'Bolsa para compras', 'bolsa-para-compras', '', 'alpaca.jpg', 8, 'Bolsa para compras', '', 0, 2),
(112, 8, 'Bolsa blanca para tienda', 'bolsa-blanca-para-tienda', '', 'be_desing.jpg', 10, 'Bolsa blanca para tienda', '', 0, 1),
(113, 8, 'Bolsa negra para compras', 'bolsa-negra-para-compras', '', 'bull_bolsa_negra.jpg', 11, 'Bolsa negra para compras', '', 0, 2),
(114, 8, 'Bolsas para chocolates', 'bolsas-para-chocolates', '', 'CHAQCHAO.jpg', 12, 'Bolsas para chocolates', '', 0, 2),
(115, 8, 'Bolsa children para niños', 'bolsa-children-para-ninos', '', 'children_planet.jpg', 13, 'Bolsa children para niños', '', 0, 2),
(116, 8, 'Bolsa especial para chocolates', 'bolsa-especial-para-chocolates', '', 'CHOCOLAT.jpg', 14, 'Bolsa especial para chocolates', '', 0, 2),
(117, 8, 'Bolsas para construcción', 'bolsas-para-construccion', '', 'construccin.jpg', 15, 'Bolsas para construcción', '', 0, 1),
(119, 8, 'Bolsas especiales para compras ', 'bolsas-especiales-para-compras-', '', 'gato.jpg', 17, 'Bolsas especiales para compras ', '', 0, 2),
(120, 8, 'Bolsa especial para niños', 'bolsa-especial-para-ninos', '', 'juega.jpg', 18, 'Bolsa especial para niños', '', 0, 2),
(121, 8, 'Bolsa blanca', 'bolsa-blanca', '', 'la_tiendita.jpg', 19, 'Bolsa blanca', '', 0, 2),
(122, 8, 'bolsa especiales para imprenta ', 'bolsa-especiales-para-imprenta-', '', 'LION_GRAF.jpg', 20, 'bolsa especiales para imprenta ', '', 0, 2),
(123, 8, 'Bolsa madam', 'bolsa-madam', '', 'MADAM_.jpg', 21, 'Bolsa madam', '', 0, 2),
(126, 8, 'Bolsa especial para cafetería ', 'bolsa-especial-para-cafeteria-', '', 'san_felipe.jpg', 23, 'Bolsa especial para cafetería ', '', 0, 2),
(127, 8, 'Bolsa amarilla', 'bolsa-amarilla', '', 'STRAVIA.jpg', 24, 'Bolsa amarilla', '', 0, 2),
(129, 8, 'Bolsa especial para universitarios', 'bolsa-especial-para-universitarios', '', 'universidad_1.jpg', 26, 'Bolsa especial para universitarios', '', 0, 2),
(130, 8, 'Bolsa para compras sin asa', 'bolsa-para-compras-sin-asa', '', 'VIVA.jpg', 27, 'Bolsa para compras sin asa', '', 0, 2),
(131, 9, 'Bolsas ecológica', 'bolsas-ecologica', '', 'BIOFERA.jpg', 10, 'Bolsas ecológica', '', 0, 2),
(132, 9, 'Bolsas para pandería', 'bolsas-para-panderia', '', 'bompan.jpg', 11, 'Bolsas para pandería', '', 0, 2),
(133, 9, 'Bolsa especial para panadería', 'bolsa-especial-para-panaderia', '', 'piiombino.jpg', 12, 'Bolsa especial para panadería', '', 0, 2),
(134, 9, 'Bolsa de comida los 7 enanitos', 'bolsa-de-comida-los-7-enanitos', '', '7_ENANITOS.jpg', 13, 'Bolsa de comida los 7 enanitos', '', 0, 2),
(136, 9, 'Bolsa para cafetería barletto', 'bolsa-para-cafeteria-barletto', '', 'barleto_1.jpg', 15, 'Bolsa para cafetería barletto', '', 0, 2),
(137, 9, 'Bolsa de cafetería ecológica', 'bolsa-de-cafeteria-ecologica', '', 'BOLSA_ORGANICA_1.jpg', 16, 'Bolsa de cafetería ecológica', '', 0, 2),
(138, 9, 'Bolsas pequeñas comerciales', 'bolsas-pequenas-comerciales', '', 'bolsa_pequeitas.jpg', 17, 'Bolsas pequeñas comerciales', '', 0, 2),
(139, 9, 'Bolsas para comida ecológicas buenos dias', 'bolsas-para-comida-ecologicas-buenos-dias', '', 'buenos_DIAS.jpg', 18, 'Bolsas para comida ecológicas buenos dias', '', 0, 2),
(140, 9, 'Bolsas para café san juan', 'bolsas-para-cafe-san-juan', '', 'CAFE.jpg', 19, 'Bolsas para café san juan', '', 0, 2),
(141, 9, 'Bolsas para hamburguesas carlitos', 'bolsas-para-hamburguesas-carlitos', '', 'CARLITOS.jpg', 20, 'Bolsas para hamburguesas carlitos', '', 0, 2),
(142, 9, 'Bolsas para chifa', 'bolsas-para-chifa', '', 'CHIFA.jpg', 21, 'Bolsas para chifa', '', 0, 2),
(143, 9, 'Bolsa para comida ', 'bolsa-para-comida-', '', 'COMTEMPLO_2.jpg', 22, 'Bolsa para comida ', '', 0, 2),
(144, 9, 'Bolsa para hamburguesas y otros', 'bolsa-para-hamburguesas-y-otros', '', 'DIOSAS.jpg', 23, 'Bolsa para hamburguesas y otros', '', 0, 2),
(145, 9, 'Bolsas para hamburguesas felix', 'bolsas-para-hamburguesas-felix', '', 'FELIX.jpg', 24, 'Bolsas para hamburguesas felix', '', 0, 2),
(146, 9, 'Bolsa para repostería', 'bolsa-para-reposteria', '', 'HAPPY.jpg', 25, 'Bolsa para repostería', '', 0, 2),
(147, 9, 'Bolsa especial ', 'bolsa-especial-', '', 'keirolo.jpg', 26, 'Bolsa especial ', '', 0, 2),
(148, 9, 'Bolsa especiales para rosquitas', 'bolsa-especiales-para-rosquitas', '', 'LA_COSECHA.jpg', 27, 'Bolsa especiales para rosquitas', '', 0, 2),
(149, 9, 'Bolsa kraft mendoza', 'bolsa-kraft-mendoza', '', 'MENDOZA.jpg', 28, 'Bolsa kraft mendoza', '', 0, 2),
(150, 9, 'Bolsas kraft ecológicas', 'bolsas-kraft-ecologicas', '', 'MERCADO_SALUDABLE.jpg', 29, 'Bolsas kraft ecológicas', '', 0, 2),
(151, 9, 'Bolsa para comidas organicas', 'bolsa-para-comidas-organicas', '', 'punto_organico.jpg', 30, 'Bolsa para comidas organicas', '', 0, 2),
(152, 9, 'Bolsa  blanca para comida ', 'bolsa--blanca-para-comida-', '', 'ROSITA.jpg', 31, 'Bolsa  blanca para comida ', '', 0, 2),
(153, 9, 'Bolsa para café', 'bolsa-para-cafe', '', 'SAN_ANTONIO_2.jpg', 32, 'Bolsa para café', '', 0, 2),
(154, 9, 'Bolsa kraft para café  ', 'bolsa-kraft-para-cafe--', '', 'san_cafe.jpg', 33, 'Bolsa kraft para café  ', '', 0, 2),
(155, 9, 'Bolsas comerciales', 'bolsas-comerciales', '', 'suiza.jpg', 34, 'Bolsas comerciales', '', 0, 2),
(156, 34, 'Pirotines para panetones', 'pirotines-para-panetones', '', 'flores.jpg', 9, 'Pirotines para panetones', '', 0, 1),
(157, 34, 'Pirotín mazzino', 'pirotin-mazzino', '', 'mazzino.jpg', 10, 'Pirotín mazzino', '', 0, 2),
(158, 34, 'Pirotín ocoña para panetones', 'pirotin-ocona-para-panetones', '', 'ocaa.jpg', 11, 'Pirotín ocoña para panetones', '', 0, 2),
(159, 34, 'Pirotines para panetones con diseños', 'pirotines-para-panetones-con-disenos', '', 'papa_noel.jpg', 12, 'Pirotines para panetones con diseños', '', 0, 2),
(160, 34, 'Pirotín en forma circular', 'pirotin-en-forma-circular', '', 'pirotin_pequeo.jpg', 13, 'Pirotín en forma circular', '', 0, 1),
(161, 34, 'Pirotines para panetones  de color', 'pirotines-para-panetones--de-color', '', 'verde.jpg', 14, 'Pirotines para panetones  de color', '', 0, 2),
(162, 30, 'Individuales para mesa', 'individuales-para-mesa', '', 'el_chinito.jpg', 1, 'Individuales para mesa', '', 0, 2),
(163, 30, 'Individuales kchrros para mesa', 'individuales-kchrros-para-mesa', '', 'kchurros.jpg', 2, 'Individuales kchrros para mesa', '', 0, 2),
(164, 30, 'Individuales Mr.sushi', 'individuales-mr.sushi', '', 'mr_sushi.jpg', 3, 'Individuales Mr.sushi', '', 0, 2),
(165, 23, 'Sobre para hamburguesas', 'sobre-para-hamburguesas', '', 'chinito.jpg', 4, 'Sobre para hamburguesas', '', 0, 2),
(166, 23, 'Sobres para hamburguesas especiales ', 'sobres-para-hamburguesas-especiales-', '', 'feliz_dia.jpg', 5, 'Sobres para hamburguesas especiales ', '', 0, 2),
(167, 23, 'Sobres de papel para hamburguesas', 'sobres-de-papel-para-hamburguesas', '', 'sandwichs.jpg', 6, 'Sobres de papel para hamburguesas', '', 0, 2),
(168, 9, 'Bolsa para panadería', 'bolsa-para-panaderia', '', 'bolsa_para_alimentos.jpg', 35, 'Bolsa para panadería', '', 0, 2),
(169, 9, 'Bolsas para comida', 'bolsas-para-comida', '', 'ANTICUCHOS.jpg', 36, 'Bolsas para comida', '', 0, 2),
(170, 9, 'Bolsas especiales para comida', 'bolsas-especiales-para-comida', '', 'EL_OLIVAR.jpg', 37, 'Bolsas especiales para comida', '', 0, 2),
(171, 10, 'Bolsa para carbón Beef', 'bolsa-para-carbon-beef', '', 'beef.jpg', 1, 'Bolsa para carbón Beef', '', 0, 2),
(172, 10, 'Bolsa para carbón Tootus', 'bolsa-para-carbon-tootus', '', 'carbon.jpg', 2, 'Bolsa para carbón Tootus', '', 0, 2),
(173, 10, 'Bolsa para carbón Wond', 'bolsa-para-carbon-wond', '', 'carbon_wong.jpg', 3, 'Bolsa para carbón Wond', '', 0, 2),
(174, 10, 'Bolsa para cemento Halcon', 'bolsa-para-cemento-halcon', '', 'halcon.jpg', 4, 'Bolsa para cemento Halcon', '', 0, 2),
(175, 10, 'Bolsa especial para cemento Latino', 'bolsa-especial-para-cemento-latino', '', 'latino.jpg', 5, 'Bolsa especial para cemento Latino', '', 0, 2),
(176, 10, 'Bolsa especial para carbón Metro', 'bolsa-especial-para-carbon-metro', '', 'metro.jpg', 6, 'Bolsa especial para carbón Metro', '', 0, 2),
(177, 10, 'Bolsa especial para cemento Ultrasika', 'bolsa-especial-para-cemento-ultrasika', '', 'ultrasika.jpg', 7, 'Bolsa especial para cemento Ultrasika', '', 0, 2),
(178, 8, 'Bolsa con asa ', 'bolsa-con-asa-', '', 'BOLSA_NOW.jpg', 28, 'Bolsa con asa ', '', 0, 2),
(179, 8, 'Bolsa KISS roja', 'bolsa-kiss-roja', '', 'kiss.jpg', 29, 'Bolsa KISS roja', '', 0, 2),
(180, 8, 'Bolsa para boutique', 'bolsa-para-boutique', '', 'moixx.jpg', 30, 'Bolsa para boutique', '', 0, 2),
(181, 9, 'Bolsa burgerkin', 'bolsa-burgerkin', '', 'burger_kim.jpg', 38, 'Bolsa burgerkin', '', 0, 2),
(182, 9, 'Bolsas blancas especiales', 'bolsas-blancas-especiales', '', 'chifa.jpg', 39, 'Bolsas blancas especiales', '', 0, 2),
(183, 9, 'Bolsas Danica', 'bolsas-danica', '', 'danica.jpg', 40, 'Bolsas Danica', '', 0, 2),
(184, 9, 'Bolsas krafts', 'bolsas-krafts', '', 'gato_1.jpg', 41, 'Bolsas krafts', '', 0, 2),
(185, 9, 'Bolsas KFC', 'bolsas-kfc', '', 'kfc.jpg', 42, 'Bolsas KFC', '', 0, 2),
(186, 9, 'Bolsa para hamburgesas', 'bolsa-para-hamburgesas', '<p>Bolsa especiales para atender alimentos como las deliciosas hamburgesas.</p>\n', 'listo.jpg', 43, 'Bolsa para hamburgesas', '', 0, 2),
(187, 9, 'Bolsa en papel krafts  RUSTICA', 'bolsa-en-papel-krafts--rustica', '', 'rustica.jpg', 44, 'Bolsa en papel krafts  RUSTICA', '', 0, 2),
(191, 24, 'Individuales para mesa Boon Beef', 'individuales-para-mesa-boon-beef', '', 'bon_bebef.jpg', 0, 'Individuales para mesa Boon Beef', '', 0, 2),
(192, 24, 'Individuales el chinito', 'individuales-', '', 'el_chinito_1.jpg', 0, 'Individuales el chinito', '', 0, 2),
(193, 24, 'Individuales kchrros para mesa', 'Individuales kchrros para mesa', '', 'kchurros_1.jpg', 0, 'Individuales kchrros para mesa', '', 0, 2),
(194, 24, 'Individuales Mr.sushi', 'individuales-mr.sushi', '', 'mr_sushi_1.jpg', 0, 'Individuales Mr.sushi', '', 0, 2),
(196, 27, 'AUTOCOPIATIVO', 'autocopiativo', '', 'AUTOCOPIATIVO_2.png', 0, 'AUTOCOPIATIVO', '', 0, 2),
(197, 28, 'TERMICO', 'termico', '', 'TERMICO_2.jpg', 0, 'TERMICO', '', 0, 2),
(198, 26, 'CONTOMETRO BOND', 'contometro-bond', '', 'BOND_2.jpg', 0, 'CONTOMETRO BOND', '', 0, 2),
(199, 35, 'Pirotin corazon', 'pirotin-corazon', '', 'PIROTIN_ROJO.jpg', 0, 'Pirotin corazon', '', 0, 2),
(200, 35, 'Pirotin Blancos', 'pirotin-blancos', '', 'pirotines_corazon.jpg', 0, 'Pirotin Blancos', '', 0, 2),
(201, 0, 'Pirotin Rectangular', 'pirotin-rectangular', '', 'pirotines_rectangular.jpg', 0, 'Pirotin Rectangular', '', 0, 2),
(202, 35, 'Pirotin rectaNgular', 'pirotin-rectangular', '', 'pirotines_rectangular_1.jpg', 0, 'Pirotin rectaNgular', '', 0, 2),
(203, 35, 'Pirotines de manteca', 'pirotines-de-manteca', '', '200pcs_Rainbow_Paper_Cake_Cups_Cupcake_Liners_Wrapper_Cases_Baking_Muffin_Dessert_DIY_Wedding_Party_Decorations_1.jpg', 0, 'Pirotines de manteca', '', 0, 2),
(204, 35, 'Pirotines Blanco', 'pirotines-blanco', '', 'pirotines.jpg', 0, 'Pirotines Blanco', '', 0, 2),
(206, 9, 'mono meloso', 'mono-meloso', '', 'bolsa_mono_meloso.jpg', 0, 'mono meloso', '', 0, 2),
(207, 35, 'pirotin feliz día ', 'pirotin-feliz-dia-', '', 'pirotin_corazon_mama.jpg', 0, 'pirotin feliz dia ', '', 0, 1),
(208, 35, 'pirotin mamá', 'pirotin-mama', '', 'pirotin_corazon.jpg', 0, 'pirotin mamá', '', 0, 2),
(209, 19, 'bobina impresa', 'bobina-impresa', '', 'bobina_impresa_1.jpg', 0, 'bobina impresa', '', 0, 2),
(210, 19, 'impresion a 2 colores', 'impresion-a-2-colores', '', 'bobina_impresa_2.jpg', 0, 'impresion a 2 colores', '', 0, 2),
(211, 19, 'impreso a 1 color', 'impreso-a-1-color', '', 'bobina_impresa_3.jpg', 0, 'impreso a 1 color', '', 0, 2),
(216, 40, 'boon beef', 'boo', '', 'bon_bebef_1.jpg', 0, 'BOO', '', 0, 2),
(217, 40, 'el chinito', 'el-chinito', '', 'el_chinito_1_1.jpg', 0, 'EL CHINITO', '', 0, 2),
(218, 40, 'k churros', 'k', '', 'kchurros_1_1.jpg', 0, 'k', '', 0, 2),
(219, 40, 'mr. sushi', 'mr.-sushi', '', 'mr_sushi_1_1.jpg', 0, 'mr. sushi', '', 0, 2),
(220, 42, 'el chinito', 'el-chinito', '', 'chinito_1.jpg', 0, 'el chinito', '', 0, 2),
(221, 42, 'feliz dia', 'feliz-dia', '', 'feliz_dia_1.jpg', 0, 'feliz dia', '', 0, 2),
(222, 42, 'sándwich', 'sandwich', '', 'sandwichs_1.jpg', 0, 'sándwich', '', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id_sede` int(3) UNSIGNED NOT NULL,
  `titulo_globo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `texto_globo` text COLLATE utf8_spanish_ci,
  `orden` int(3) UNSIGNED DEFAULT NULL,
  `latitud_centro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `longitud_centro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `latitud_punto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `longitud_punto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zoom` int(5) NOT NULL,
  `tipomapa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id_sede`, `titulo_globo`, `texto_globo`, `orden`, `latitud_centro`, `longitud_centro`, `latitud_punto`, `longitud_punto`, `zoom`, `tipomapa`, `estado`) VALUES
(2, 'UBICANOS', 'Calle Los Cipreces Mz B Lt 45 PACHACAMAC', 1, '-12.230308670861282', ' -76.90400501221666', '-12.231458472403988', ' -76.90402865409851', 16, 'roadmap', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `sumilla` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `imagen`, `sumilla`, `url`, `orden`, `title`, `description`) VALUES
(1, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur ', 'SERVICIOS_GENERALES01.jpg', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur<br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur<br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', 'nemo-enim-ipsam-voluptatem-quia-voluptas-sit-aspernatur-aut-odit-aut-fugit,-sed-quia-consequuntur-', 1, 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur ', ''),
(2, 'Lorem Ipsum', 'SERVICIOS_GENERALES02.jpg', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', 'dos', 2, '', ''),
(3, 'Lorem Ipsum', 'SERVICIOS_GENERALES01_1.jpg', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', 'tres', 3, '', ''),
(4, 'Lorem Ipsum ', 'SERVICIOS_GENERALES03.jpg', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', 'custru', 4, '', ''),
(5, 'Lorem Ipsum', 'SERVICIOS_GENERALES04.jpg', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', 'cinco', 5, '', ''),
(6, 'Lorem Ipsum', 'SERVICIOS_GENERALES05.jpg', '<p><br />\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', 'seis', 6, '', ''),
(7, 'Lorem Ipsum 7', 'SERVICIOS_GENERALES06.jpg', '<p><br />\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\n', 'lorem-ipsum-7', 7, 'Lorem Ipsum 7', ''),
(8, 'colapso', 'SERVICIOS_GENERALES06_1.jpg', '<div>Los motores trifásicos son máquinas totativas de flujo variable. Su campo inductor está generado por</div>\r\n\r\n<div>corriente alterna, son mecánicamente sencillos de construir, no necesitan arrancadores y no se ven</div>\r\n\r\n<div>sometidos a vibraciones por efecto de la transformación de energía eléctrica en mecánica. Se suele</div>\r\n\r\n<div>utilizar en aplicaciones industriales. El motor monofásico universal es un tipo de motor eléctrico que</div>\r\n\r\n<div>puede funcionar tanto con corriente continua como con corriente alterna.</div>\r\n', 'colapso', 8, 'colapso', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscribete`
--

CREATE TABLE `suscribete` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(13) CHARACTER SET latin1 NOT NULL,
  `correo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `asunto` varchar(200) CHARACTER SET latin1 NOT NULL,
  `mensaje` text CHARACTER SET latin1 NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `estado` varchar(150) CHARACTER SET latin1 NOT NULL DEFAULT 'No Leido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos_web`
--

CREATE TABLE `textos_web` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `texto` text CHARACTER SET latin1,
  `seccion` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `padre` int(11) NOT NULL,
  `title` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `visible` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `textos_web`
--

INSERT INTO `textos_web` (`id`, `titulo`, `texto`, `seccion`, `tipo`, `padre`, `title`, `description`, `banner`, `visible`) VALUES
(1, 'UNION CARTONERA', '', 'index', 0, 0, 'UNION CARTONERA', 'UNION CARTONERA', '0', 0),
(2, 'NOSOTROS', '<blockquote>Somos UNION CARTONERA S.R.L., una empresa con más de 10 años de experiencia en el rubro del cartón corrugado. Nuestro principal objetivo es proporcionar soluciones de empaque y embalaje de acuerdo a la necesidad del cliente.</blockquote>\n\n<p>&nbsp;</p>\n\n<h3><strong><em>VISION</em></strong></h3>\n\n<blockquote>\n<ul>\n	<li><strong>Consolidar nuestra empresa entre las 10 más importantes del Perú&nbsp;en el rubro del cartón.</strong></li>\n</ul>\n</blockquote>\n\n<h3>&nbsp;</h3>\n\n<h3><strong><em>MISION</em></strong></h3>\n\n<blockquote>\n<ul>\n	<li><strong>Brindar soluciones de empaque y embalaje&nbsp;de acuerdo a las necesidades de nuestros clientes con una atención de primera.</strong></li>\n</ul>\n</blockquote>\n', 'empresa', 1, 0, 'Nosotros', 'somos una empresa eficaz', '0', 1),
(3, 'Mision', '', 'categorias', 0, 0, 'Nuestra Misión', 'somos una epresa eficaz', '0', 1),
(4, 'Vision', '\n', 'vision', 1, 0, 'Nuestra Visión', 'somos una epresa eficaz', '0', 1),
(5, 'Contácto', '<p><strong>Pongase en contacto con nosotros que gustosamente lo atenderemos y resolveremos sus dudas.</strong></p>\n', 'contacto', 1, 0, 'Contacto', 'Contacto', '0', 1),
(6, 'servicios', '', 'productos', 1, 0, 'Productos', 'SERVICIOS', '1', 1),
(7, 'Login', '', 'login', 0, 0, 'INFRAESTRUCTURA', 'INFRAESTRUCTURA', '0', 1),
(8, 'Clientes', '', 'clientes', 1, 0, 'Todos Nuestros Clientes', 'Clientes', '0', 1),
(9, 'Articulos', '', 'articulos', 0, 0, 'Articulos', 'Policia de Tránsito', '0', 1),
(10, 'DISEÑOS', '', 'album', 1, 1, '', 'galería ', NULL, 1),
(11, 'Solicitar Cotizacion', '<p>Podemos suministrar cotizaciones a su medida, para satisfacer sus requerimientos.</p>\n\n<p>Envíenos la siguiente información y nos comunicaremos con usted.</p>\n', 'pedidos', 1, 15, 'Cotizacion', 'UNION CARTONERA', '0', 1),
(12, 'ARTÍCULOS', 'frase3', 'articulos', 1, 2, 'Planeamiento Estrategico', 'Fluxus', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `password` char(45) CHARACTER SET latin1 DEFAULT NULL,
  `nombre` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `estado` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `nivel` varchar(255) COLLATE utf8_spanish_ci DEFAULT 'general'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `estado`, `nivel`) VALUES
(1, 'admin', '123', 'Administrador', 'A', 'general'),
(2, 'rmariluz', '123', 'Unidad Lima Centro', 'A', 'unidad'),
(3, 'administrador', '$@admin', 'admin', 'A', 'general');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `banner_pagina`
--
ALTER TABLE `banner_pagina`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias_impresion`
--
ALTER TABLE `categorias_impresion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `fotos_escolar`
--
ALTER TABLE `fotos_escolar`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `impresiones`
--
ALTER TABLE `impresiones`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD KEY `id` (`id_sede`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `suscribete`
--
ALTER TABLE `suscribete`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos_web`
--
ALTER TABLE `textos_web`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `banner_pagina`
--
ALTER TABLE `banner_pagina`
  MODIFY `id_banner` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `categorias_impresion`
--
ALTER TABLE `categorias_impresion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  MODIFY `id_detalle` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_foto` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `fotos_escolar`
--
ALTER TABLE `fotos_escolar`
  MODIFY `id_foto` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `impresiones`
--
ALTER TABLE `impresiones`
  MODIFY `id_foto` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id_orden` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_foto` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id_sede` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `suscribete`
--
ALTER TABLE `suscribete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `textos_web`
--
ALTER TABLE `textos_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
