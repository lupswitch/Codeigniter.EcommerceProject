-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2014 a las 04:56:05
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sitecnologia`
--
CREATE DATABASE IF NOT EXISTS `sitecnologia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `sitecnologia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `address`
--

INSERT INTO `address` (`address_id`, `order_id`, `address1`, `city`) VALUES
(1, 1, 'Continuacion Achar solar 14 Esquina Carlos a Lopez', 'Manga'),
(2, 2, 'Continuacion Achar solar 14 Esquina Carlos a Lopez', 'Manga'),
(3, 3, 'Continuacion Achar solar 14 Esquina Carlos a Lopez', 'Manga'),
(4, 4, 'feste', 'rewr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL DEFAULT '',
  UNIQUE KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `cart_session` varchar(100) NOT NULL DEFAULT '',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `item_price` float NOT NULL DEFAULT '0',
  `item_name` varchar(100) NOT NULL DEFAULT '',
  `item_quantity` int(2) NOT NULL DEFAULT '1',
  `item_total_price` float NOT NULL DEFAULT '0',
  `item_image` varchar(100) NOT NULL,
  `cart_status` varchar(10) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_session`, `item_id`, `item_price`, `item_name`, `item_quantity`, `item_total_price`, `item_image`, `cart_status`, `order_id`) VALUES
(1, '9pkjdtsf23o3ponfhomfldmj37', 12, 99, 'coso', 22, 2178, 'images/uploads/coso_12_small.jpg', 'saved', ''),
(3, '5tliefchf9d913rs8mp1mr2su2', 12, 99, 'coso', 1, 99, 'images/uploads/coso_12_small.jpg', '', ''),
(4, 'camq8h70uke4ulbqabf7ke23s1', 12, 99, 'coso', 2, 198, 'images/uploads/coso_12_small.jpg', 'saved', '1'),
(5, 'camq8h70uke4ulbqabf7ke23s1', 12, 99, 'coso', 2, 198, 'images/uploads/coso_12_small.jpg', 'saved', '2'),
(6, 'camq8h70uke4ulbqabf7ke23s1', 12, 99, 'coso', 1, 99, 'images/uploads/coso_12_small.jpg', 'saved', '3'),
(7, 'camq8h70uke4ulbqabf7ke23s1', 12, 99, 'coso', 1, 99, 'images/uploads/coso_12_small.jpg', 'saved', '4'),
(8, 'camq8h70uke4ulbqabf7ke23s1', 17, 112, 'Sega Dreamcast', 500, 56000, 'images/uploads/Sega_Dreamcast_17_small.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL DEFAULT '',
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'Consolas', '1'),
(2, 'coso2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `item_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(250) NOT NULL DEFAULT '',
  `item_price` float NOT NULL DEFAULT '0',
  `item_desc` text NOT NULL,
  `item_status` tinyint(1) NOT NULL DEFAULT '0',
  `thumbnail` varchar(100) NOT NULL DEFAULT '',
  `big_image` varchar(100) NOT NULL DEFAULT '',
  `medium_image` varchar(100) NOT NULL,
  `item_stock` int(10) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`cat_id`, `item_id`, `item_name`, `item_price`, `item_desc`, `item_status`, `thumbnail`, `big_image`, `medium_image`, `item_stock`) VALUES
(1, 18, 'Nintendo', 22, 'Consola clasica + 2 joystick + Super Mario Bros 3', 0, 'images/uploads/Nintendo_18_small.jpg', 'images/uploads/Nintendo_18_big.jpg', 'images/uploads/Nintendo_18_med.jpg', 1231),
(1, 12, 'Game Boy Pocket', 99, 'Consola Portable Game Boy Pocket', 0, 'images/uploads/coso_12_small.jpg', 'images/uploads/coso_12_big.jpg', 'images/uploads/coso_12_med.jpg', 99),
(1, 13, 'SNES', 1000, 'Super Nintendo consola + 2 cartuchosa a eleccion', 0, 'images/uploads/SNES_13_small.jpg', 'images/uploads/SNES_13_big.jpg', 'images/uploads/SNES_13_med.jpg', 11),
(1, 14, 'XBOX360', 8000, 'Consola xbox con Kinect + juego kinect adventures', 0, 'images/uploads/XBOX360_14_small..jpg', 'images/uploads/XBOX360_14..jpg', 'images/uploads/XBOX360_14_med..jpg', 11),
(1, 15, 'Playstation 3', 9000, 'Consola de Juegos Sony Playstation 3', 0, 'images/uploads/Playstation_3_15_small.jpg', 'images/uploads/Playstation_3_15_big.jpg', 'images/uploads/Playstation_3_15_med.jpg', 33),
(1, 17, 'Sega Dreamcast', 112, 'Sega Dreamcast con varios juegos a eleccion', 0, 'images/uploads/Sega_Dreamcast_17_small.jpg', 'images/uploads/Sega_Dreamcast_17_big.jpg', 'images/uploads/Sega_Dreamcast_17_med.jpg', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `cart_session` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL DEFAULT '0',
  `sub_total` varchar(10) NOT NULL,
  `vat` varchar(10) NOT NULL,
  `total_price` double NOT NULL DEFAULT '0',
  `order_date` varchar(50) NOT NULL DEFAULT '',
  `shipment_date` varchar(50) NOT NULL DEFAULT '',
  `order_status` varchar(15) NOT NULL DEFAULT 'New',
  `ipaddress` varchar(30) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`order_id`, `cart_session`, `user_id`, `sub_total`, `vat`, `total_price`, `order_date`, `shipment_date`, `order_status`, `ipaddress`) VALUES
(1, 'camq8h70uke4ulbqabf7ke23s1', '1', '99', '0', 99, '2014-07-09 02:08:15', '', 'cancelled', '127.0.0.1'),
(2, 'camq8h70uke4ulbqabf7ke23s1', '1', '198', '0', 198, '2014-07-09 02:18:40', '', 'cancelled', '127.0.0.1'),
(3, 'camq8h70uke4ulbqabf7ke23s1', '1', '99', '0', 99, '2014-07-09 02:28:20', '', 'cancelled', '127.0.0.1'),
(4, 'camq8h70uke4ulbqabf7ke23s1', '1', '99', '0', 99, '2014-07-09 03:23:09', '', 'cancelled', '127.0.0.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_messages`
--

CREATE TABLE IF NOT EXISTS `order_messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `message` text NOT NULL,
  `sender` varchar(10) NOT NULL,
  `sentdate` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `user_pass` varchar(10) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `date_joined` varchar(50) NOT NULL DEFAULT '',
  `company_name` char(20) NOT NULL DEFAULT '1',
  `account_type` varchar(20) NOT NULL DEFAULT 'None',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_pass`, `email`, `date_joined`, `company_name`, `account_type`) VALUES
(1, 'Matias Olivera', 'Sakura23', 'jmatias.olivera@gmail.com', '2014-07-09 01:56:07', 'blackcat', 'personal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
