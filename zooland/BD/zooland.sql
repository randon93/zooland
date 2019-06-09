-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2019 a las 19:05:23
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `id_persona` int(10) NOT NULL,
  `id_animal` int(10) NOT NULL,
  `fecha_adopcion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptador`
--

CREATE TABLE `adoptador` (
  `nom_adoptador` varchar(30) NOT NULL,
  `id_adoptador` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `id_animal` int(10) NOT NULL,
  `nom_animal` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `id_raza` int(10) NOT NULL,
  `id_tipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal_tratamiento`
--

CREATE TABLE `animal_tratamiento` (
  `id_animal` int(10) NOT NULL,
  `descripcion_at` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_persona_v` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_tratamiento_proceso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal_vacuna`
--

CREATE TABLE `animal_vacuna` (
  `id_animal` int(10) NOT NULL,
  `id_vacuna` int(10) NOT NULL,
  `fecha_aplicacion` date NOT NULL,
  `fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padrinar`
--

CREATE TABLE `padrinar` (
  `id_persona` int(10) NOT NULL,
  `id_animal` int(10) NOT NULL,
  `monto` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padrino`
--

CREATE TABLE `padrino` (
  `nom_padrino` varchar(30) NOT NULL,
  `id_padrino` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `documento` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` text NOT NULL,
  `ciudad` varchar(15) NOT NULL,
  `telefono` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `id_proceso` int(10) NOT NULL,
  `nom_proceso` varchar(30) NOT NULL,
  `descripcion_proceso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `nom_raza` varchar(20) NOT NULL,
  `id_raza` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(10) NOT NULL,
  `nom_tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `id_tratamiento` int(10) NOT NULL,
  `descripcion_tratamiento` text NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento_proceso`
--

CREATE TABLE `tratamiento_proceso` (
  `id_tratamiento` int(10) NOT NULL,
  `id_proceso` int(10) NOT NULL,
  `id_tratamiento_proceso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `id_vacuna` int(10) NOT NULL,
  `nom_vacuna` varchar(30) NOT NULL,
  `descripcion_vacuna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `nom_veterinario` varchar(30) NOT NULL,
  `id_veterinario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD UNIQUE KEY `id_persona` (`id_persona`,`id_animal`),
  ADD KEY `adopcion_animal` (`id_animal`);

--
-- Indices de la tabla `adoptador`
--
ALTER TABLE `adoptador`
  ADD UNIQUE KEY `id_adoptador` (`id_adoptador`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`),
  ADD UNIQUE KEY `id_raza` (`id_raza`),
  ADD UNIQUE KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `animal_tratamiento`
--
ALTER TABLE `animal_tratamiento`
  ADD UNIQUE KEY `id_animal` (`id_animal`),
  ADD UNIQUE KEY `id_persona_v` (`id_persona_v`),
  ADD UNIQUE KEY `fecha_inicio` (`fecha_inicio`),
  ADD UNIQUE KEY `id_tratamiento_proceso` (`id_tratamiento_proceso`);

--
-- Indices de la tabla `animal_vacuna`
--
ALTER TABLE `animal_vacuna`
  ADD PRIMARY KEY (`fecha_aplicacion`),
  ADD UNIQUE KEY `id_animal` (`id_animal`),
  ADD UNIQUE KEY `id_vacuna` (`id_vacuna`);

--
-- Indices de la tabla `padrinar`
--
ALTER TABLE `padrinar`
  ADD UNIQUE KEY `id_persona` (`id_persona`),
  ADD UNIQUE KEY `id_animal` (`id_animal`);

--
-- Indices de la tabla `padrino`
--
ALTER TABLE `padrino`
  ADD UNIQUE KEY `id_padrino` (`id_padrino`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id_proceso`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id_raza`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`id_tratamiento`);

--
-- Indices de la tabla `tratamiento_proceso`
--
ALTER TABLE `tratamiento_proceso`
  ADD PRIMARY KEY (`id_tratamiento_proceso`),
  ADD UNIQUE KEY `id_tratamiento` (`id_tratamiento`),
  ADD UNIQUE KEY `id_proceso` (`id_proceso`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`id_vacuna`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD UNIQUE KEY `id_veterinario` (`id_veterinario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `adopcion_animal` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `adopcion_persona` FOREIGN KEY (`id_persona`) REFERENCES `adoptador` (`id_adoptador`);

--
-- Filtros para la tabla `adoptador`
--
ALTER TABLE `adoptador`
  ADD CONSTRAINT `adoptador_persona` FOREIGN KEY (`id_adoptador`) REFERENCES `persona` (`documento`);

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal-raza` FOREIGN KEY (`id_raza`) REFERENCES `raza` (`id_raza`),
  ADD CONSTRAINT `animal-tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `animal_tratamiento`
--
ALTER TABLE `animal_tratamiento`
  ADD CONSTRAINT `animal_tratamiento` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `persona_ani_trata` FOREIGN KEY (`id_persona_v`) REFERENCES `veterinario` (`id_veterinario`),
  ADD CONSTRAINT `tratamiento_proceso_animal` FOREIGN KEY (`id_tratamiento_proceso`) REFERENCES `tratamiento_proceso` (`id_tratamiento_proceso`);

--
-- Filtros para la tabla `animal_vacuna`
--
ALTER TABLE `animal_vacuna`
  ADD CONSTRAINT `animal_vacuna` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `vacuna_animal` FOREIGN KEY (`id_vacuna`) REFERENCES `vacuna` (`id_vacuna`);

--
-- Filtros para la tabla `padrinar`
--
ALTER TABLE `padrinar`
  ADD CONSTRAINT `animal_padrinar` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `persona_padrinar` FOREIGN KEY (`id_persona`) REFERENCES `padrino` (`id_padrino`);

--
-- Filtros para la tabla `padrino`
--
ALTER TABLE `padrino`
  ADD CONSTRAINT `persona_padrino` FOREIGN KEY (`id_padrino`) REFERENCES `persona` (`documento`);

--
-- Filtros para la tabla `tratamiento_proceso`
--
ALTER TABLE `tratamiento_proceso`
  ADD CONSTRAINT `proceso_tra_proce` FOREIGN KEY (`id_proceso`) REFERENCES `proceso` (`id_proceso`),
  ADD CONSTRAINT `tratamiento_tra_proce` FOREIGN KEY (`id_tratamiento`) REFERENCES `tratamiento` (`id_tratamiento`);

--
-- Filtros para la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD CONSTRAINT `veterinario_persona` FOREIGN KEY (`id_veterinario`) REFERENCES `persona` (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
