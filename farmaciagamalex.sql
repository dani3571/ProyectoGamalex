-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2022 a las 17:29:59
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
-- Base de datos: `farmaciagamalex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleproducto`
--

CREATE TABLE `detalleproducto` (
  `IdDetalleProducto` int(11) NOT NULL,
  `FechaCompra` datetime DEFAULT NULL,
  `FechaVencimiento` datetime DEFAULT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `IdLaboratorio` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Direccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`IdLaboratorio`, `Nombre`, `Direccion`) VALUES
(1, 'Droguería INTI S.A.', 'Calle Lucas Jaimes 1959, entre'),
(2, 'Colgate', 'Calle 22 de #8232 Edif. Centro Empresarial Calacoto, La Paz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IdProducto` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Cantidad` int(7) DEFAULT NULL,
  `PrecioUnidad` double DEFAULT NULL,
  `PrecioTotalProducto` double DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `IdLaboratorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IdProducto`, `Nombre`, `Cantidad`, `PrecioUnidad`, `PrecioTotalProducto`, `Descripcion`, `IdLaboratorio`) VALUES
(1, 'Paracetamol', 20, 2, 40, 'Analgésico y antipirético, inhibidor de la síntesis de prostaglandinas periférica y central por acci', 1),
(2, 'Diclofenaco', 10, 2.5, 25, 'Funciona al detener la producción del cuerpo de una sustancia que causa dolor, fiebree inflamación.', 1),
(3, 'ENJUAGUE BUCAL NFINITY 250 ml', 10, 17, 170, 'Contiene millones de micro cristales de frescura, que dejan tu aliento mucho más fresco y sin sensación de ardor en tu boca.', 2),
(4, 'HILO DENTAL MENTA 50m', 20, 15, 300, 'Es un hilo dental con sabor a menta y con la tecnología Expansión Plus, se expanden al contacto con los dientes, removiendo hasta un 40% más de placa.', 2),
(5, 'Ibuprofeno', 10, 3.5, 35, 'Medicamento que se usa para tratar la fiebre, la hinchazón, el dolor y el enrojecimiento al impedir que el cuerpo elabore sustancias que causan inflamación.', 1),
(6, 'SANATUSIN MIEL DIA x 60 SACH', 60, 4.9, 240, 'Acción descongestionante: alivia la congestión nasal producida por la gripe.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `IdVenta` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalleproducto`
--
ALTER TABLE `detalleproducto`
  ADD PRIMARY KEY (`IdDetalleProducto`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`IdLaboratorio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`IdVenta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
