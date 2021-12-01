-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 08:21:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `iddoctor` int(10) NOT NULL,
  `paciente` varchar(25) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `telefonopaciente` varchar(25) NOT NULL,
  `diagnostico` varchar(50) NOT NULL,
  `tratamiento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`iddoctor`, `paciente`, `fecha`, `hora`, `telefonopaciente`, `diagnostico`, `tratamiento`) VALUES
(12122, 'Andrea Iturbe', '12/12/21', '8:30 am ', '6561212345413', 'Desviacion dental', 'Ortodoncia'),
(12123, 'Gael Perez', '14/12/21', '9:00 am', '6561456432356', 'Dolor de Muelas', 'Extraccion Dental'),
(12124, 'Topher Mont', '23/01/22', '2:00 pm', '6562308240954', 'Fractura de Morales', 'Reconstruccion de pieza dental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dentista`
--

CREATE TABLE `dentista` (
  `doctorid` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `curp` varchar(25) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cedula` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dentista`
--

INSERT INTO `dentista` (`doctorid`, `nombre`, `curp`, `telefono`, `correo`, `direccion`, `cedula`) VALUES
(12121, 'Od. Jomara Torres', 'TOOJ041212MCHRLMA4', '656343491821', 'Od.Jomara_Tr@gmail.com', '', 12429133),
(12122, 'Od. Cris Olvera', 'OOL04121211RFGHDAQ', '656130283224', 'Od_crisdental@gmail.com', '', 34564312),
(12123, 'Od. Rosa Lopez', 'ROSJ040226HCHRLRA9', '656341394242', 'od.ross_lop@gmail.com', '', 12235653);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idpaciente` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `paterno` varchar(25) NOT NULL,
  `materno` varchar(25) NOT NULL,
  `telefono` int(10) NOT NULL,
  `edad` int(3) NOT NULL,
  `curp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idpaciente`, `nombre`, `paterno`, `materno`, `telefono`, `edad`, `curp`) VALUES
(325, 'Andrea ', 'Iturbe', 'Perez', 2147483647, 16, 'LEVIAKERMAN0556166'),
(326, 'Gael ', 'Perez', 'Garcia', 2147483647, 13, 'ROSJ040226HCHRLRA9'),
(327, 'Topher', 'Mont', 'Bicho', 2147483647, 17, 'MOGC040712HCHNRRA3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `idpaciente` int(10) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `altura` varchar(10) NOT NULL,
  `tratamiento` varchar(50) NOT NULL,
  `medicamento` text NOT NULL,
  `via` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idpaciente`, `edad`, `peso`, `altura`, `tratamiento`, `medicamento`, `via`) VALUES
(1, '17', '73 kg', '1.75 m', 'Ortodoncia', 'Ibuprofeno', 'Via Oral'),
(2, '25', '87 kg', '1.79 m', 'Extraccion Dental', 'Naproxeno', 'Via Oral'),
(3, '45', '68 kg', '1.57 m', 'Reconstruccion de pieza dental', 'Ibuprofeno', 'Via Oral');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`iddoctor`);

--
-- Indices de la tabla `dentista`
--
ALTER TABLE `dentista`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`idpaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `iddoctor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12125;

--
-- AUTO_INCREMENT de la tabla `dentista`
--
ALTER TABLE `dentista`
  MODIFY `doctorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12124;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32592;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `idpaciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
