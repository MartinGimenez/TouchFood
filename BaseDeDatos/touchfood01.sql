-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2016 a las 22:53:14
-- Versión del servidor: 5.7.12-log
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--
CREATE DATABASE IF NOT EXISTS `restaurante` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurante`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE `bebidas` (
  `id_bebida` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `ingredientes` varchar(80) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `celiaco` tinyint(1) DEFAULT NULL,
  `tiempo_servicio` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(1, 'agua', 'agua', 'bebida s/alcohol', 25, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(2, 'agua gasificada', 'agua/gas', 'bebida s/alcohol', 28, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(3, 'Coca-Cola', 'agua/gas/colorantes/conservantes/etc', 'bebida s/alcohol', 38, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(4, 'seven-up', 'agua/gas/jugo de limon/colorantes/conservantes/etc', 'bebida s/alcohol', 38, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(5, 'fanta', 'agua/gas/jugo de naranja/colorantes/conservantes/etc', 'bebida s/alcohol', 38, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(6, 'agua tonica', 'agua/gas/quinina/conservantes', 'bebida s/alcohol', 38, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(7, 'agua saborizada naranja', 'agua/jugo de naranja', 'bebida s/alcohol', 40, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(8, 'agua saborizada manzana', 'agua/jugo de manzana', 'bebida s/alcohol', 40, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(9, 'agua saborizada pomelo', 'agua/jugo de pomelo', 'bebida s/alcohol', 40, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(10, 'agua saborizada pera', 'agua/jugo y pulpa de pera', 'bebida s/alcohol', 40, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(11, 'cerveza stella artois', 'malta/cebada/agua/lupulo/levadura', 'bebida c/alcohol', 100, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(12, 'cerveza quilmes', 'malta/cebada/agua/lupulo/levadura', 'bebida c/alcohol', 85, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(13, 'cerveza brahma', 'malta/cebada/agua/lupulo/levadura', 'bebida c/alcohol', 82, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(14, 'cerveza heineken', 'malta/cebada/agua/lupulo/levadura', 'bebida c/alcohol', 95, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(15, 'medida vodka', 'trigo/cebada/centeno/maiz/papas', 'bebida c/alcohol', 50, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(16, 'wiskey', 'cebada/trigo/malteada/centeno/maiz', 'bebida c/alcohol', 130, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(17, 'ginebra', 'bayas de enebro/vodka', 'bebida c/alcohol', 100, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(18, 'campari', 'agua/alcohol/frutos aromados/hierbas', 'bebida c/alcohol', 70, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(19, 'martini', 'ginebra/vermouth', 'bebida c/alcohol', 68, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(20, 'daikiri de frutilla', 'agua/ron/pulpa frutilla/hielo/limon', 'bebida c/alcohol', 80, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(21, 'cuba libre', 'ron/coca-cola', 'bebida c/alcohol', 65, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(22, 'sanfria', 'pera/piña/limones/naranja/cognac', 'bebida c/alcohol', 76, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(23, 'piel de iguana', 'limon/kiwi/vodka/seven-up', 'bebida c/alcohol', 60, 0, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(24, 'champagne federico de alvear', '', 'bebida c/alcohol', 80, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(25, 'champagne reinasence', '', 'bebida c/alcohol', 88, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(26, 'champagne chandon', '', 'bebida c/alcohol', 190, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(27, 'champagne varon B', '', 'bebida c/alcohol', 450, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(28, 'champagne pommery', '', 'bebida c/alcohol', 950, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(29, 'cosecha tardia', 'vino espumante blanco/frutos disecados', 'bebida c/alcohol', 200, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(30, 'lopez cabernet', 'vino tinto/uvas cabernet-suavignon', 'bebida c/alcohol', 220, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(31, 'carcasonne cabernet', 'vino tinto/uvas cabernet-suavignon', 'bebida c/alcohol', 180, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(32, 'rutini sirah', 'vino tinto/uvas sirah', 'bebida c/alcohol', 508, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(33, 'rutini cabernet', 'vino tinto/uvas cabernet-suavignon', 'bebida c/alcohol', 690, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(34, 'rutini merlot', 'vino tinto/uvas merlot', 'bebida c/alcohol', 420, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(35, 'luigi bosca sirah', 'vino tinto/uvas sirah', 'bebida s/alcohol', 360, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(36, 'quara cabernet', 'vino tinto/uvas cabernet-suavignon', 'bebida c/alcohol', 185, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(37, 'trumpetter cabernet', 'vino tinto/uvas cabernet-suavignon', 'bebida c/alcohol', 200, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(38, 'new age', 'vino espumante blanco/frutos disecados', 'bebida c/alcohol', 220, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(39, 'trumpetter malbec', 'vino tinto/uvas malbec', 'bebida c/alcohol', 236, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(40, 'las perdices malbec', 'vino tinto/uvas malbec', 'bebida c/alcohol', 472, 1, '00:05:00');
INSERT INTO `bebidas` (`id_bebida`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_servicio`) VALUES(41, 'las perdices cabernet', 'vino tinto/uvas cabernet-suavignon', 'bebida c/alcohol', 271, 1, '00:05:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas`
--

DROP TABLE IF EXISTS `comidas`;
CREATE TABLE `comidas` (
  `id_plato` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ingredientes` varchar(110) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `celiaco` tinyint(1) DEFAULT NULL,
  `tiempo_coccion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comidas`
--

INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(1, 'pollo con fritas', 'pollo/papas/pimienta/aceite/oregano', 'pollos', 135, 1, '00:25:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(2, 'pollo con pure de papas', 'pollo/pure de papas/leche/aceite/', 'pollos', 112, 1, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(3, 'pollo con pure de zapallo', 'pollo/pure de zapallo/aceite/oregano', 'pollos', 112, 1, '00:20:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(4, 'pollo grille', 'pollo hervido/pimienta/aceite/tomillo', 'pollos', 96, 1, '00:21:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(5, 'pollo al ajillo', 'pollo/ajo/pimienta/nuez moscada/aceite', 'pollos', 189, 1, '00:22:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(6, 'brocheta de pollo con salsa de champiñon', 'pollo/salsa champiñon/morrones', 'pollos', 176, 1, '00:41:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(7, 'pollo relleno', 'pollo/huevo/jamon/panceta/queso/mayonesa', 'pollos', 220, 1, '00:46:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(8, 'pollo con papas noiset', 'pollo/papas/manteca/leche/oregano/tomillo', 'pollos', 156, 1, '00:37:01');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(9, 'pechuga mediterranea', 'pechuga/ala/marinado en limon/aceite/oregano/ajo', 'pollos', 278, 1, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(10, 'carne al horno con papas', 'carne horneada/papas/aceite oliva/aji', 'carnes', 196, 1, '00:24:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(11, 'bife de chorizo mixto', 'bife/morron/cebolla/zanahoria/oregano/tomillo', 'carnes', 210, 1, '00:50:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(12, 'bife de chorizo con pure', 'bife/pure a eleccion/pimienta/aceite/oregano', 'carnes', 194, 1, '00:43:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(13, 'asado de tira completo', 'asado/morron/cebolla/aji', 'carnes', 200, 1, '00:48:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(14, 'asado de tira', 'asado', 'carnes', 140, 1, '00:48:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(15, 'parrillada para 2', 'chorizo/vacio/asado/costilla', 'carnes', 250, 1, '00:51:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(16, 'parrillada para 2 completa', 'chorizo/vacio/asado/costilla/batatas/molleja/riñon/chinchulin', 'carnes', 330, 1, '00:55:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(17, 'bistec a la plancha', '/bistec/aceite/pimienta/nuez moscada', 'carnes', 100, 1, '00:22:20');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(18, 'brocheta de ternera', 'trozos de ternera/cebolla/aji/morron', 'carnes', 68, 1, '00:15:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(19, 'carne rellena', 'carne/zanahoria/tocino/jamon', 'carnes', 126, 1, '00:43:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(20, 'albondigas con pure', 'albondigas/pure a eleccion/manteca/leche/aceite/oregano', 'carnes', 140, 1, '00:40:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(21, 'lechon asado para 2 ', 'lechon/pimienta/tomillo', 'cerdos', 300, 1, '00:49:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(22, 'lechon asado para 4', 'lechon/pimienta/tomillo', 'cerdos', 500, 1, '00:50:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(23, 'lomo de cerdo aumado ', 'cerdo/tocino/oregano', 'pollos', 200, 1, '00:53:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(24, 'chuleta de cerdo con huevos fritos', 'cerdo/huevos fritos/pimienta', 'cerdos', 240, 1, '00:44:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(25, 'chuleta de cerdo al limon', 'cerdo/limon/', 'cerdos', 150, 1, '00:32:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(26, 'espinaca con salsa blanca', 'espinaca/salsa blanca', 'vegetales', 114, 1, '00:21:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(27, 'croquetas mixtas', 'croquetas de brocoli/soja/arroz', 'vegetales', 105, 1, '00:41:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(28, 'milanesas de soja', 'soja/cereales', 'vegetales', 94, 1, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(29, 'brotes varios con salsa de soja', 'brotes de soja/semillas/repollo/zukni/salsa de soja', 'vegetales', 160, 1, '00:35:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(30, 'escabeche de berenjenas', 'berenjenas/vinagre/ajos/aceite', 'vegetales', 136, 1, '00:51:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(31, 'picles', 'ajo/zanahoria/pepino/morron/aji', 'vegetales', 105, 1, '00:38:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(32, 'filet de merluza con pure', 'filet/pure a eleccion', 'pescados', 140, 1, '00:41:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(33, 'filet de salmon con salsa 4 quesos', 'salmon/roquefort/cheddar/reggiano/grugere', 'pescados', 175, 1, '00:24:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(34, 'filet de salmon con pure', 'salmon/pure a eleccion', 'pescados', 140, 1, '00:19:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(35, 'merluza al olivo grillado con aceitunas verdes', 'merluza/aceitunas/aceite oliva/oregano', 'pescados', 240, 1, '00:40:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(36, 'pescado al pesto', 'merluza/albahaca/aceite oliva/queso parmesano', 'pescados', 124, 1, '00:33:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(37, 'filet de merluza a la provenzal', 'merluza/provenzal/pimienta', 'pescados', 100, 1, '00:40:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(38, 'filet a la naranja', 'merluza/jugo de naranja', 'pescados', 110, 1, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(39, 'camarones mixtos', 'camarones/aji/morron/pimienta', 'pescados', 148, 1, '00:36:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(40, 'camarones al ajillo', 'camarones/limon/ajo/perejil', 'pescados', 122, 1, '00:22:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(41, 'langostinos pelados', 'langostinos/limon/ajo/', 'pollos', 185, 1, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(42, 'revuelto de mariscos', 'calamar/pulpo/mejillon/almeja/kanicama/salsa al vino', 'pescados', 247, 1, '00:45:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(43, 'cazuela de mariscos', 'calamar/mejillon/almejas/salsa tomate', 'pescados', 215, 1, '00:32:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(44, 'rabas', 'rabas/limon', 'pescados', 160, 1, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(45, 'rabas a la provenzal', 'rabas/limon/provenzal', 'pescados', 190, 1, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(46, 'pulpo a la gallega', 'pulpo/papas/batatas/aceite/pimenton', 'pescados', 290, 1, '00:49:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(47, 'almejas marineras', 'almejas/vino blanco/limon', 'pescados', 200, 1, '00:15:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(48, 'spaghetti con bolognesa', 'spaghetti/carne/fileto', 'pastas', 90, 0, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(49, 'spaghetti con fileto', 'spaghetti/fileto', 'pastas', 80, 0, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(50, 'spaghetti con salsa de mar', 'spaghetti/camarones/mejillones/almejas/fileto', 'pastas', 159, 0, '00:28:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(51, 'spaghetti con pesto', 'spaghetti/albahaca/ajo/perejil', 'pastas', 120, 0, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(52, 'ñoquis con bolognesa', 'ñoquis/carne/fileto', 'pastas', 100, 0, '00:17:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(53, 'ñoquis con salsa de camarones', 'ñoquis/camarones/crema/salsa golf', 'pastas', 182, 0, '00:36:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(54, 'ñoquis con salsa rosa', 'ñoquis/fileto/crema', 'pastas', 115, 0, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(55, 'ravioles con bolognesa', 'ravioles/fileto/carne', 'pastas', 112, 0, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(56, 'ravioles  con salsa blanca', 'ravioles/crema/vino', 'pastas', 131, 0, '00:26:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(57, 'ravioles con fileto', 'ravioles/fileto', 'pastas', 99, 0, '00:21:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(58, 'lasagna con fileto', 'lasagna/fileto', 'pastas', 155, 0, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(59, 'lasagna con bolognesa', 'lasagna/carne/fileto', 'pastas', 170, 0, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(60, 'lasagna a la parisienne', 'lasagna/jamon/pollo/crema', 'pastas', 216, 0, '00:37:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(61, 'pizza muzarella', 'tomate/muzarella/aceitunas verdes', 'pizzas', 80, 0, '00:19:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(62, 'pizza especial', 'tomate/jamon/morron/queso/aceitunas verdes', 'pizzas', 110, 0, '00:25:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(63, 'pizza napolitana', 'queso/tomate/ajo/aceitunas verdes', 'pizzas', 94, 0, '00:23:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(64, 'pizza de champigñones', 'queso/champgiñones', 'pizzas', 120, 0, '00:29:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(65, 'pizza de jamon y huevo', 'jamon/hurvo/muzarella/tomate/aceitunas verdes', 'pizzas', 105, 0, '00:24:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(66, 'pizza fugazzetta', 'muzarella/cebolla', 'pizzas', 98, 0, '00:13:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(67, 'pizza calabresa', 'muzarella/salsa de tomate/longaniza/aceitunas verdes', 'pizzas', 136, 0, '00:29:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(68, 'pizza de anchoas', 'muzarella/salsa de tomate/anchoas/aceitunas verdes', 'pizzas', 145, 0, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(69, 'pizza de rucula y jamon crudo', 'muzarella/salsa de tomate/rucula/jamon crudo/aceitunas verdes', 'pizzas', 143, 0, '00:40:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(70, 'pizza humita', 'mozarella/salsa de tomate/chocolo desgranado', 'pizzas', 118, 0, '00:25:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(71, 'picada de mar para 2 personas', 'langostinos/pulpo/camarones/berberechos/almejas/kanicama/calamar/mejillones/cornalitos', 'picadas', 300, 0, '00:40:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(72, 'picada de fiambres', 'jamon crudo/jamon/bondiola/salame/longaniza/queso/leber', 'picadas', 150, 0, '00:12:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(73, 'tablita caliente ', 'bombas de papa/cuadrados de queso/tomates cherry/trozos de tortilla/salchichas copetin/croquetas de espinaca', 'picadas', 200, 0, '00:35:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(74, 'picada verde', 'faina/milanesa de berenjena/albondigas de quinoa/ramas de alcaucil', 'picadas', 144, 1, '00:36:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(75, 'milanesa de carne con fritas', 'papas/milanesa de carne', 'minutas', 120, 1, '00:19:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(76, 'milanesa de pollo con fritas', 'papas/milanesa de pollo', 'minutas', 110, 1, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(77, 'milanesa completa de carne', 'milanesa carne/jamon/queso/cheddar/tomate/lechuga/panceta', 'minutas', 150, 1, '00:21:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(78, 'milanesa completa de pollo', 'milanesa pollo/jamon/queso/cheddar/tomate/lechuga/panceta', 'minutas', 138, 1, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(79, 'milanesa napolitana carne', 'milanesa carne/jamon/queso/tomate', 'minutas', 130, 1, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(80, 'milanesa napolitana pollo', 'milanesa pollo/jamon/queso/tomate', 'minutas', 129, 1, '00:14:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(81, 'hamburguesa', 'carne/queso/cebolla', 'minutas', 72, 1, '00:17:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(82, 'hamburguesa completa', 'carne/queso/cebolla/pepino/panceta/tomate/lechuga', 'minutas', 120, 1, '00:19:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(83, 'pancho', 'salchicha/pan/papas pay', 'minutas', 55, 1, '00:13:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(84, 'omelette', 'huevo/jamon/queso', 'minutas', 98, 0, '00:16:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(85, 'tortilla de papa', 'papa/huevo', 'minutas', 85, 1, '00:19:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(86, 'tortilla de arroz', 'arroz/cereales/huevo', 'minutas', 78, 0, '00:20:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(87, 'sopa de pollo', 'pollo trozado/caldo/zapallito verde/zanahoria', 'sopas', 137, 1, '00:36:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(88, 'sopa de pescado', 'merluza negra/caldo/esparragos/cebolla/puerro', 'sopas', 175, 1, '00:34:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(89, 'sopa de brocoli', 'caldo/brocoli/aceite oliva/tomillo/albahaca', 'sopas', 103, 1, '00:27:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(90, 'sopa de verduras', 'caldo/zanahoria/patatas/puerro/guisantes/pimienta negra/aceite oliva', 'sopas', 129, 1, '00:27:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(91, 'crema de calabaza', 'cebolla/caldo/mantequilla/calabaza/pimienta negra', 'sopas', 141, 1, '00:19:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(92, 'sopa clasica', 'caldo/cabello de angel', 'sopas', 84, 1, '00:26:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(93, 'ensalada mixta', 'tomate/lechuga/cebolla/aceite oliva', 'ensaladas', 49, 1, '00:15:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(94, 'ensalada clasica', 'tomate/lechuga/aceite oliva', 'ensaladas', 39, 1, '00:15:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(95, 'ensalada cesar', 'trozos de pan tostado/lechuga/queso parmesano/salsa blanca', 'ensaladas', 110, 0, '00:26:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(96, 'ensalada griega', 'tomate/pepino/pimienta/cebolla/aceitunas negras/aceite oliva/oregano', 'ensaladas', 96, 1, '00:20:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(97, 'ensalada waldorf', 'manzana verde/apio/mayonesa/crema/nuez/vinagre/limon', 'ensaladas', 100, 1, '00:22:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(98, 'ensalada caprese', 'tomates/muzarella/albahaca/aceite oliva/pimienta', 'ensaladas', 77, 1, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(99, 'ensalada criolla', 'aji verde/aji rojo/cebolla/tomates/aceite oliva/vinagre', 'ensaladas', 81, 1, '00:22:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(100, 'ensalada de champiñones', 'champiñones/jugo de limon/perejil/pimienta/aceite oliva', 'ensaladas', 136, 1, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(101, 'ensalada de repollo', 'repollo/vinagre/mayonesa/aceitunas negras/crema', 'ensaladas', 128, 1, '00:28:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(102, 'ensalada de chauchas', 'chauchas/papas/tomate/rucula/cebollita verdeo/vinagre/aceite oliva/perejil', 'ensaladas', 109, 1, '00:22:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(103, 'conejo estofado', 'conejo/cebolla/zanahoria/vino tinto', 'especiales', 230, 1, '00:35:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(104, 'mollejas al vino blanco', 'mollejas/limon/puerro/vino blanco', 'especiales', 125, 1, '00:25:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(105, 'paella', 'arroz/azafran/kanicama/calamar/camaron/aceite/caldo', 'especiales', 198, 1, '00:39:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(106, 'tapas para 2 ', 'calentitos varios/tortilla/croquetas de jamon y queso', 'especiales', 174, 1, '00:39:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(107, 'chapatas con anchoas', 'pimientos rojos/berenjenas/tomates/anchoas', 'especiales', 140, 1, '00:26:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(108, 'sushis variados', 'sushi camaron/sushi arroz con pepino/sushi arroz con salmon crudo/sushi cereales y zukini', 'especiales', 181, 1, '00:27:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(109, 'sushis variados para 2', 'sushi camaron/sushi arroz con pepino/sushi arroz con salmon crudo/sushi cereales y zukini', 'especiales', 230, 1, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(110, 'risotto de pavo', 'aceite oliva/ajo/arroz/vino blanco/azafran/pavo/queso parmesano', 'especiales', 286, 1, '00:35:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(111, 'calabaza rellena de pollo', 'calabaza/pollo/cebolla/morron/aceitunas negras/huevo/muzarella', 'especiales', 198, 1, '00:33:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(112, 'chow fan', 'arroz/zanahoria/pimientos rojos/aceite/huevo/trozos de pollo/cebollita de verdeo', 'especiales', 205, 1, '00:44:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(113, 'musaka especial', 'berenjenas/cebolla/carne picada/queso rallado/vino blanco', 'especiales', 161, 1, '00:30:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(114, 'calzone de pollo', 'pechuga de pollo/cebolla/morron/salsa de tomate', 'especiales', 173, 0, '00:41:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(115, 'calzone mediterraneo', 'albahaca/ajo/pimienta/queso parmesano/jamon/tomates cherry/huevo/aceite', 'especiales', 233, 0, '00:47:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(116, 'taco de pollo', 'pechuga de pollo/pimiento rojo/pimiento verde/pimienta negra/masa/tabasco/guacamole', 'especiales', 79, 0, '00:19:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(117, 'taco de carne', 'carne de terneta/pimientos rojos/pimientos verdes/cebolla/salsa tabasco/guacamole/masa', 'especiales', 90, 0, '00:18:00');
INSERT INTO `comidas` (`id_plato`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_coccion`) VALUES(118, 'taco de pescado', 'merluza/salmon/masa/cebolla/zanahoria/palta/repollo/huevo duro/tabasco', 'especiales', 100, 0, '00:23:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

DROP TABLE IF EXISTS `mesa`;
CREATE TABLE `mesa` (
  `numero_mesa` int(11) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(1, 4, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(2, 14, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(3, 4, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(4, 8, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(5, 10, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(6, 2, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(7, 4, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(8, 2, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(9, 1, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(10, 1, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(11, 6, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(12, 2, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(13, 1, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(14, 14, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(15, 4, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(16, 6, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(17, 8, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(18, 1, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(19, 2, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(20, 10, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(21, 8, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(22, 4, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(23, 6, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(24, 1, '');
INSERT INTO `mesa` (`numero_mesa`, `capacidad`, `estado`) VALUES(25, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferente`
--

DROP TABLE IF EXISTS `oferente`;
CREATE TABLE `oferente` (
  `id_rest` int(11) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oferente`
--

INSERT INTO `oferente` (`id_rest`, `razon_social`, `contraseña`, `rol`) VALUES(1, 'la Estancia', 'admin1905', 'administrador');
INSERT INTO `oferente` (`id_rest`, `razon_social`, `contraseña`, `rol`) VALUES(2, 'la Estancia', 'user1905', 'mozo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `numero_mesa` int(11) NOT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos-bebidas`
--

DROP TABLE IF EXISTS `pedidos-bebidas`;
CREATE TABLE `pedidos-bebidas` (
  `id_bebida` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos-comidas`
--

DROP TABLE IF EXISTS `pedidos-comidas`;
CREATE TABLE `pedidos-comidas` (
  `id_plato` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos-postres`
--

DROP TABLE IF EXISTS `pedidos-postres`;
CREATE TABLE `pedidos-postres` (
  `id_postre` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

DROP TABLE IF EXISTS `postres`;
CREATE TABLE `postres` (
  `id_postre` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ingredientes` varchar(80) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `celiaco` tinyint(1) DEFAULT NULL,
  `tiempo_preparacion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(1, 'bocha helado chocolate', 'chocolate', 'postres', 33, 0, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(2, 'bocha helado vainilla', 'vainilla', 'postres', 33, 1, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(3, 'bocha helado frutilla', 'frutilla', 'postres', 33, 1, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(4, 'bocha helado dulce de leche', 'dulce de leche', 'postres', 33, 1, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(5, 'bocha helado menta granizadoa', 'menta', 'postres', 33, 1, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(6, 'bocha helado americana', 'crema americana', 'postres', 33, 1, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(7, 'bocha helado limon', 'mouse limon', 'postres', 33, 1, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(8, 'tarta helada', 'choholate/almendra', 'postres', 58, 0, '00:12:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(9, 'lemon pie', 'limon/mouse de merengue/masa/harina/manteca/huevo/leche', 'postres', 65, 1, '00:16:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(10, 'souffle de chocolate', 'leche/chocolate/huevo/cacao/dulce de leche', 'postres', 54, 0, '00:14:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(11, 'budin de pan', 'huevos/vainillin/pan/leche/nueces', 'postres', 50, 0, '00:22:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(12, 'flan', 'leche condensada/huevos/azucar/vainillin', 'postres', 47, 1, '00:20:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(13, 'tiramisu', 'vainilla/azucar/huevos/harina/macarpone/crema/chocolate espolvoreado', 'postres', 55, 0, '00:18:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(14, 'selva negra', 'huevo/harina/cacao/fecula de maiz/manteca', 'postres', 72, 0, '00:23:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(15, 'cheese cake', 'frutillas/crema/gelatina sin sabor/manteca/queso/azucar', 'postres', 85, 1, '00:29:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(16, 'queso y dulce', 'queso/batata/membrillo', 'postres', 40, 1, '00:13:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(17, 'ensalada de frutas', 'kiwi/banana/narnaja/manzana/pera/mandarina', 'postres', 28, 1, '00:13:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(18, 'cafe express', 'cafe', 'cafeteria', 30, 0, '00:08:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(19, 'cortado', 'cafe/leche', 'cafeteria', 38, 0, '00:09:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(20, 'capuccino', 'cafe/leche/cacao', 'cafeteria', 40, 0, '00:09:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(21, 'submarino', 'leche/barra de chocolate', 'cafeteria', 40, 0, '00:07:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(22, 'leche manchada', 'leche/gotita de cafe', 'cafeteria', 35, 1, '00:06:00');
INSERT INTO `postres` (`id_postre`, `nombre`, `ingredientes`, `categoria`, `precio`, `celiaco`, `tiempo_preparacion`) VALUES(23, 'te hierbas', 'tilo/manzanilla/anis', 'cafeteria', 30, 1, '00:08:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `comidas`
--
ALTER TABLE `comidas`
  ADD PRIMARY KEY (`id_plato`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`numero_mesa`);

--
-- Indices de la tabla `oferente`
--
ALTER TABLE `oferente`
  ADD PRIMARY KEY (`id_rest`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `numero_mesa_idx` (`numero_mesa`);

--
-- Indices de la tabla `pedidos-bebidas`
--
ALTER TABLE `pedidos-bebidas`
  ADD PRIMARY KEY (`id_bebida`,`id_pedido`),
  ADD KEY `fk2pb_idx` (`id_pedido`);

--
-- Indices de la tabla `pedidos-comidas`
--
ALTER TABLE `pedidos-comidas`
  ADD PRIMARY KEY (`id_plato`,`id_pedido`),
  ADD KEY `id_pedido_idx` (`id_pedido`);

--
-- Indices de la tabla `pedidos-postres`
--
ALTER TABLE `pedidos-postres`
  ADD PRIMARY KEY (`id_postre`,`id_pedido`),
  ADD KEY `fk1pp` (`id_pedido`);

--
-- Indices de la tabla `postres`
--
ALTER TABLE `postres`
  ADD PRIMARY KEY (`id_postre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `comidas`
--
ALTER TABLE `comidas`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `id_postre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `numero_mesa` FOREIGN KEY (`numero_mesa`) REFERENCES `mesa` (`numero_mesa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos-bebidas`
--
ALTER TABLE `pedidos-bebidas`
  ADD CONSTRAINT `fk1pb` FOREIGN KEY (`id_bebida`) REFERENCES `bebidas` (`id_bebida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk2pb` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos-comidas`
--
ALTER TABLE `pedidos-comidas`
  ADD CONSTRAINT `id_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_plato` FOREIGN KEY (`id_plato`) REFERENCES `comidas` (`id_plato`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos-postres`
--
ALTER TABLE `pedidos-postres`
  ADD CONSTRAINT `fk1pp` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk2pp` FOREIGN KEY (`id_postre`) REFERENCES `postres` (`id_postre`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
