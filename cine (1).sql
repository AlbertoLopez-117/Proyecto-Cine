-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2021 a las 17:51:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarCliente` (`nom_per` VARCHAR(45), `apepa_per` VARCHAR(45), `apema_per` VARCHAR(45), `dierccion_per` TEXT(60), `fechaNac_per` DATE, `phone_per` VARCHAR(11), `correo` VARCHAR(50), `pass` VARCHAR(50))  begin
 INSERT INTO `persona` (`nom_per`, `apepa_per`, `apema_per`, `correo_per`, `dierccion_per`, `fechaNac_per`, `phone_per`)
 VALUES (nom_per, apepa_per, apema_per, correo, dierccion_per, fechaNac_per, phone_per);
set @per =(select max(id_per)from persona where id_per= id_per and apepa_per=apepa_per and apema_per=apema_per and correo_per=correo_per and dierccion_per=dierccion_per and fechaNac_per=fechaNac_per and phone_per=phone_per);
 INSERT INTO `usuario` (`correo`, `pass`, `id_per`, `tipo_usu`) VALUES (correo, pass, @per, 'CLIENTE');
 end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarPelicula` (`titulo` VARCHAR(100), `director` VARCHAR(100), `sinopsis` TEXT, `fechaEstreno` DATE, `fechaCartele` DATE, `URLposter` TEXT, `URLtrailer` TEXT, `URLweboficial` TEXT, `idiomas` VARCHAR(200), `paisorigen` VARCHAR(100), `estudioproductor` VARCHAR(200))  begin
 INSERT INTO `peliculas` (`titulo`, `director`, `sinopsis`, `fechaEstreno`, `fechaCartele`, `URLposter`, `URLtrailer`, `URLweboficial`, `idiomas`, `paisorigen`, `estudioproductor`)
 VALUES (titulo, director, sinopsis, fechaEstreno, fechaCartele, URLposter, URLtrailer, URLweboficial, idiomas, paisorigen, estudioproductor);
 end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelis` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `duracion` int(11) NOT NULL,
  `fechaEstreno` date NOT NULL,
  `fechaCartele` date NOT NULL,
  `Fechafincartelera` date NOT NULL,
  `URLposter` text NOT NULL,
  `URLtrailer` text NOT NULL,
  `URLweboficial` text DEFAULT NULL,
  `idiomas` varchar(200) NOT NULL,
  `paisorigen` varchar(100) NOT NULL,
  `estudioproductor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelis`, `titulo`, `director`, `sinopsis`, `duracion`, `fechaEstreno`, `fechaCartele`, `Fechafincartelera`, `URLposter`, `URLtrailer`, `URLweboficial`, `idiomas`, `paisorigen`, `estudioproductor`) VALUES
(1, 'ASDADS', 'ASDASD', 'ASD', 11, '0000-00-00', '2021-01-13', '2021-01-04', 'ASDASD', 'ASDADS', 'ASDADS', 'ADS', 'ASD', 'AD'),
(2, 'ASDASD', 'ASDADS', 'ASDASD', 11, '0000-00-00', '2021-01-28', '2021-01-03', 'ASDASD', 'ADSADS', 'ADSADS', 'ADSDAS', 'ADSDSA', 'ADSDAS'),
(3, 'ASDASD', 'ASDADS', 'ASDASD', 11, '0000-00-00', '2021-01-28', '2021-01-03', 'ASDASD', 'ADSADS', 'ADSADS', 'ADSDAS', 'ADSDSA', 'ADSDAS'),
(4, 'ASDASD', 'ASDADS', 'ASDASD', 11, '2021-01-07', '2021-01-28', '2021-01-03', 'ASDASD', 'ADSADS', 'ADSADS', 'ADSDAS', 'ADSDSA', 'ADSDAS'),
(5, 'qwe', 'ASDqweADS', 'qwe', 11, '2021-02-04', '2021-02-04', '2021-02-04', 'qwe', 'ADSAqweDS', 'qwe', 'qwe', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_per` int(11) NOT NULL,
  `nom_per` varchar(100) NOT NULL,
  `apepa_per` varchar(100) NOT NULL,
  `apema_per` varchar(100) NOT NULL,
  `correo_per` varchar(100) NOT NULL,
  `dierccion_per` varchar(100) NOT NULL,
  `fechaNac_per` date NOT NULL,
  `phone_per` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_per`, `nom_per`, `apepa_per`, `apema_per`, `correo_per`, `dierccion_per`, `fechaNac_per`, `phone_per`) VALUES
(1, 'nom_per varchar(45)', 'apepa_per varchar(45)', 'apema_per varchar(45)', 'correo_per varchar(45)', 'dierccion_per text(60)', '2021-01-15', 'phone_per v'),
(2, 'Leonardo', 'Camacho', 'Garcia', 'leonardo.blacker@gmail.com', 'av miguel hidalgo', '0000-00-00', '7151185506'),
(3, 'Emmanuel', 'Camacho', 'Garcia', 'emmauel@hotmail.com', 'Av hidalgo', '0000-00-00', '7151185506');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_tie` int(11) NOT NULL,
  `producto_tie` varchar(50) NOT NULL,
  `descripcion_tie` text NOT NULL,
  `precio_tie` int(11) NOT NULL,
  `URLimagen_tie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `id_per` int(11) NOT NULL,
  `tipo_usu` set('ADMIN','CLIENTE','CARTELERA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu`, `correo`, `pass`, `id_per`, `tipo_usu`) VALUES
(1, 'correo varchar(50)', 'pass varchar(50)', 1, 'CLIENTE'),
(2, 'leonardo.blacker@gmail.com', '$2y$10$8ppEVWC.I7exHUvSJoIZCuCZSwmSLkUuBaoewX0iJR5', 2, 'CLIENTE'),
(3, 'emmauel@hotmail.com', '$2y$10$viehUYqYjSVuC69Uuj1SIuIbD7AsL7zQe7RWuR7cXKH', 3, 'CLIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaboleto`
--

CREATE TABLE `ventaboleto` (
  `id_vb` int(11) NOT NULL,
  `cantidad_vb` int(11) NOT NULL,
  `asiento_vb` int(11) NOT NULL,
  `fechaventa_vb` date NOT NULL,
  `id_per` int(11) NOT NULL,
  `id_pelis` int(11) NOT NULL,
  `FechaVer` date NOT NULL,
  `horaVer` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelis`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_per`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_tie`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu`);

--
-- Indices de la tabla `ventaboleto`
--
ALTER TABLE `ventaboleto`
  ADD PRIMARY KEY (`id_vb`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_tie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventaboleto`
--
ALTER TABLE `ventaboleto`
  MODIFY `id_vb` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
