-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2017 a las 14:55:05
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinema_false`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombreyapellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombreyapellido`, `email`, `mensaje`) VALUES
(8, 'Juan lorem', 'lorem@lore.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut'),
(9, 'Pedro', 'Pedro@pedro.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'ciencia ficción'),
(3, 'Animacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `fk_pelicula` int(11) NOT NULL,
  `sala` varchar(11) NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `fk_pelicula`, `sala`, `horario`) VALUES
(3, 3, 'Sala 1', '14:00:00'),
(4, 1, 'Sala 2', '14:00:00'),
(5, 4, 'Sala 3', '14:00:00'),
(6, 1, 'Sala 1', '16:00:00'),
(7, 3, 'Sala 2', '16:00:00'),
(8, 4, 'Sala 3', '16:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `fk_id_pelicula` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `fk_id_pelicula`, `path`) VALUES
(1, 1, 'images/59df6152bb41a_Geotormenta.jpg'),
(2, 1, 'images/59df6152c63cc_Geotormenta1.jpg'),
(5, 3, 'images/59df63080a789_pajaro.jpg'),
(6, 3, 'images/59df630822e27_pajaro1.jpg'),
(7, 4, 'images/59df63df7c1db_blade.jpg'),
(8, 4, 'images/59df63df8157a_Blader1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `duracion` int(11) NOT NULL,
  `fk_id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `titulo`, `descripcion`, `duracion`, `fk_id_genero`) VALUES
(1, 'Geo Tormenta', 'Geostorm (titulada Geo-Tormenta en Hispanoamérica) es una próxima película estadounidense de ciencia ficción, thriller y acción co-escrita, producida y dirigida por Dean Devlin. La película está protagonizada por Gerard Butler, Abbie Cornish, Katheryn Winnick, Alexandra Maria Lara, Jim Sturgess, Eugenio Derbez, Amr Waked, Ed Harris y Andy García. La película trata sobre un diseñador de satélites que trata de salvar al mundo de una tormenta de proporciones épicas causadas por satélites de control', 149, 1),
(3, ' El Pajaro Loco', 'El Pájaro Loco o Loquillo (Woody Woodpecker en el inglés original) es un personaje animado creado por Walter Lantz y diseñado originalmente por el dibujante Ben Hardaway, autor también de Bugs Bunny y el Pato Lucas, con quienes comparte un estilo alocado de comedia; como ellos, es un animal antropomorfo.', 125, 3),
(4, 'Blade Runner 2049', 'Blade Runner 2049 es una película neo-noir y de ciencia ficción estadounidense dirigida por Denis Villeneuve, estrenada en 2017 y escrita por Hampton Fancher y Michael Green. Es la continuación de Blade Runner y se basa de nuevo y parcialmente en la novela de Philip K. Dick ¿Sueñan los androides con ovejas eléctricas? (1968).7? Ridley Scott ejerció como productor ejecutivo y en ella Ryan Gosling y Harrison Ford interpretan los papeles principales, junto con Ana de Armas, Sylvia Hoeks, Robin Wrig', 165, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contrasenia` varchar(250) NOT NULL,
  `privilegio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `contrasenia`, `privilegio`) VALUES
(19, 'admin@admin.com', '$2y$10$CGIfV95l7CEna5jtd3jB9eNQtAH8RWsWnMDsCnJixe.Rz2migPysS', 'administrador'),
(20, 'user@user.com', '$2y$10$FmBLql27sExdVlCL9vS36uw2yyfb3Da6JeLAaG3yVisaSG0P38Rvq', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
