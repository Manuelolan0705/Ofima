-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2022 a las 07:01:11
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ofima`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idmodulo` bigint(20) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
(1, 'Dashboard', 'Dashboard', 1),
(2, 'Usuarios', 'Usuarios del sistema', 1),
(3, 'Clientes', 'Clientes de tienda', 1),
(4, 'Vale', 'Creacion de vales y guardado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idpermiso` bigint(20) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL,
  `r` int(11) NOT NULL DEFAULT 0,
  `w` int(11) NOT NULL DEFAULT 0,
  `u` int(11) NOT NULL DEFAULT 0,
  `d` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
(111, 6, 1, 1, 1, 1, 1),
(112, 6, 2, 1, 1, 1, 1),
(113, 6, 3, 1, 1, 1, 1),
(138, 2, 1, 1, 1, 1, 1),
(139, 2, 2, 1, 0, 0, 0),
(140, 2, 3, 1, 0, 0, 0),
(144, 5, 1, 1, 0, 0, 0),
(145, 5, 2, 0, 0, 0, 0),
(146, 5, 3, 1, 0, 0, 0),
(147, 1, 1, 1, 1, 1, 1),
(148, 1, 2, 1, 1, 1, 1),
(149, 1, 3, 1, 1, 1, 1),
(150, 1, 4, 1, 1, 1, 1),
(151, 4, 1, 0, 0, 0, 0),
(152, 4, 2, 0, 0, 0, 0),
(153, 4, 3, 1, 1, 1, 0),
(154, 4, 4, 0, 0, 0, 0),
(163, 3, 1, 0, 0, 0, 0),
(164, 3, 2, 0, 0, 0, 0),
(165, 3, 3, 0, 0, 0, 0),
(166, 3, 4, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` bigint(20) NOT NULL,
  `indentificacion` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `appat` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `apmat` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `indentificacion`, `nombres`, `appat`, `apmat`, `telefono`, `direccion`, `email_user`, `password`, `nit`, `token`, `rolid`, `datecreated`, `status`) VALUES
(1, '050701', 'Mauel Alberto', 'Olan', 'Lorenzo', 9211958323, 'Calle:Agustin Lira Col: Km5 #10', 'mauelaka607@gmai.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', 1, '2022-05-02 11:41:48', 1),
(2, '020401', 'Sarai Citlali', 'Leyva', 'Vazquez', 9211138020, '', 'sarai02@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', 3, '2022-05-02 11:50:46', 1),
(3, '1111', 'Aurimar Yexalen', 'Avendaño', 'Martinez', 9241414340, '', 'martinezyexalen89@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', 4, '2022-05-04 04:12:54', 1),
(4, '101204', 'Schecid Alejandra', 'Lastra', 'Cruz', 9211185252, '', 'shecidalejandral@gmail.com', '7dcf407fa84a0e0519c7991154c4148de0244d7589020c0d9842db9efad82094', '', '4d3b3d893df048f15d8d-8d9c19d8e17b9b982209-1c7f21f615a922c9b69c-a9cb9912f5397f853', 4, '2022-05-04 04:13:49', 1),
(5, '291101', 'Giovanna', 'Cruz', 'Torres', 6561359358, '', 'gctf1316103d@gmail.com', '761ef6433915c33111fba0188cc8afa13b5b0c3efe2eba2e814f712046b11cfe', '', 'd095e28741fc21b02294-8034b2acca6f6adcd2ac-54ab818e54f6eab05c1a-e6177e6b4d5f24828', 2, '2022-05-04 04:48:58', 1),
(6, '300801', 'Christian Jaciel', 'Rodriguez', 'Pech', 9212071537, '', 'pechchris038@gmail.com', '5477ba52a8aaf0e8ff0db939f0dbf3f660851eba2d4642e82cb72263fe01103f', '', '8ebc7ddf2d0e51dac34c-b5096fce238e878078fa-3c05e4adca1480e66795-7ba2dcbf7e2bcedbe', 3, '2022-05-07 00:12:31', 1),
(7, '12121212', 'Pruebas', 'Pruebas', 'Pruebas', 12523647, '', 'preu@gmail.com', 'd927d86cf87baabb3e4a46bd946a15f0c826627d3b5d70626b7be1fdd2eb3c8a', '', '', 1, '2022-05-07 01:50:47', 1),
(8, '12452', 'Ernesto', 'Perez', 'Gutierrez', 11111111, 'Col Prer', 'netoperezo2022@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', 5, '2022-05-08 02:03:46', 1),
(9, '27481', 'Frankie', 'Rivers', 'Mojado', 9125364513, 'Col: Hidlago Calle: De La Paz #56', 'frankieriverso2022@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', 5, '2022-05-08 03:04:28', 1),
(10, '63283', 'Azucena', 'Abascal', 'Gutierrez', 9211459804, 'Col: Esperaza Calle: Luna #3', 'azucena@gmai.com', '3e0a3501a65b4a7bf889c6f180cc6e35747e5aaff931cc90b760671efa09aeac', '', '', 5, '2022-05-08 03:47:11', 1),
(11, '45742', 'Rosaura Esmeralda', 'Gallart', 'Zurita', 9221379503, 'Col: Esperaza Calle: Luna #13', 'rosaura@gmail.com', '1c2fb557df03bb15eaaf80614e5cdf41d2207fabac984c38292c6d20be9e6282', '', '', 5, '2022-05-08 03:59:13', 1),
(12, '36823', 'Concepción', 'Zabala', 'Hernández', 9225316704, 'Col: Esperaza Calle: Luna #25', 'concepcion@gmail.com', 'b485b6b897b80469512ec3b7d3798954460a231341356cc972dd12825cd6cff9', '', '', 5, '2022-05-08 04:01:01', 1),
(13, '47254', 'Jose Ignacio', 'Belmonte', 'Peña', 9221479667, 'Col: Hidalgo Calle: De La Paz #57', 'jose3@gmail.com', 'a12b983b5c2641ab45f3fa8daa7e60e14b39a657d1e0f8572548acfb642582fd', '', '', 5, '2022-05-08 04:03:04', 1),
(14, '78901', 'Montserrat', 'Frutos', 'Segura', 9211958326, 'Col: Frutos Calle: Carranza #161', 'monsefru2@gmail.com', 'd3287ef012c182435c2737cdb08b3d44432345e37c52bb246a29a48aecab8696', '', '', 5, '2022-05-08 04:09:57', 1),
(15, '3006', 'Axel Jonathan', 'Rodriguez', 'Solano', 9222069789, 'Col: Tec Calle:mina', 'mugi.axel.um10@gmail.com', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090', '', '', 5, '2022-05-27 14:35:31', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` bigint(20) NOT NULL,
  `nombrerol` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'Administrar la aplicación Ofima', 1),
(2, 'Gerente', 'Gerente de la sucursal de Ofima', 1),
(3, 'Distribuidora', 'Distribuidor de los vales de prestamos de ofima', 1),
(4, 'Checadora', 'Encarga de verificar el código del vale y hacer entrega del dinero', 1),
(5, 'Cliente', 'Clientes de la empresa', 1),
(6, 'prueba', 'Pos las pruebas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vale`
--

CREATE TABLE `vale` (
  `idvale` bigint(20) NOT NULL,
  `personaid` bigint(20) NOT NULL,
  `monto` double NOT NULL,
  `pago` double NOT NULL,
  `quincenas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `vale`
--

INSERT INTO `vale` (`idvale`, `personaid`, `monto`, `pago`, `quincenas`) VALUES
(1, 12, 2500, 567, 6),
(4, 11, 3000, 525, 8),
(17, 10, 4500, 652, 10),
(18, 14, 2500, 437.5, 8),
(19, 13, 3500, 507.5, 10),
(21, 8, 2500, 437.5, 6),
(45, 15, 5500, 797.5, 10),
(46, 1, 3500, 794.5, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idmodulo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermiso`),
  ADD KEY `rolid` (`rolid`),
  ADD KEY `moduloid` (`moduloid`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `rolid` (`rolid`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `vale`
--
ALTER TABLE `vale`
  ADD PRIMARY KEY (`idvale`),
  ADD KEY `personaid` (`personaid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idpermiso` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vale`
--
ALTER TABLE `vale`
  MODIFY `idvale` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`moduloid`) REFERENCES `modulo` (`idmodulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vale`
--
ALTER TABLE `vale`
  ADD CONSTRAINT `vale_ibfk_1` FOREIGN KEY (`personaid`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
