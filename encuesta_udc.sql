-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2020 a las 04:08:11
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuesta_udc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `identificacion` int(10) NOT NULL,
  `primernombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contrasenna` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`identificacion`, `primernombre`, `correo`, `contrasenna`) VALUES
(10747, 'jaider', 'jaider@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `identificacion` int(50) NOT NULL,
  `primernombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `primerapellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundoapellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estadocivil` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` tinyint(50) NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `zona` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `institutucion_de_procedencia` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hace_cuantos_se_graduo` varchar(50) NOT NULL,
  `nivel_educativo_de_los_padres` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `actividad_educativa_de_su_padre` varchar(100) NOT NULL,
  `actividad_educativa_de_su_madre` varchar(100) NOT NULL,
  `tipo_de_vivienda` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nivel_de_ingreso_del_hogar` double NOT NULL,
  `calificacion_del_programa` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cuantas_asignaturas_tiene` tinyint(50) NOT NULL,
  `contrasenna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`identificacion`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `fechadenacimiento`, `ciudad`, `estadocivil`, `genero`, `edad`, `correo`, `direccion`, `zona`, `institutucion_de_procedencia`, `hace_cuantos_se_graduo`, `nivel_educativo_de_los_padres`, `actividad_educativa_de_su_padre`, `actividad_educativa_de_su_madre`, `tipo_de_vivienda`, `nivel_de_ingreso_del_hogar`, `calificacion_del_programa`, `cuantas_asignaturas_tiene`, `contrasenna`) VALUES
(1, 'ana', 'andrea', 'flores', 'mendoza', '2020-08-20', 'Barranquilla ', 'soltera ', ' femenino ', 39, 'ana@gmail.com', 'Avendaï¿½o, 5503840 Gaianes ', ' rural ', 'el educador ', '18 aï¿½os ', 'bachiller', 'abogado', 'manicurista', 'alquilada', 123563, 'buena', 2, '1'),
(2, 'juan', 'diego', 'gomez', 'pino', '1990-09-08', 'san ta marta', 'casado', 'masculino', 27, 'fdf@gmail.com', 'Avenida Cervantes, 70\r\n48314 Gautegiz Arteaga', 'urbana', 'i.e manula beltran', '11 años', 'bachiller', 'periodista', 'contadora', 'propia', 563222, 'buena', 0, '45865'),
(3, 'laura', 'andrea', 'estrada', 'tresto', '2001-08-04', 'barranquilla', 'soltera', 'femenino', 17, 'laura@gmail.com', 'Camiño Real, 6\r\n48620 Barrika', 'urbana', 'i.e el mirador', '1 año', 'bachiller', 'albañil', 'amadecasa', 'alquilada', 14515, 'regular', 0, '15222'),
(4, 'taylor', 'jose ', 'salcedo', 'montaner', '1999-11-06', 'bogota', 'casado', 'masculino', 22, 'ddd@gmail.com', 'Alvaro Cunqueiro, 60\r\n41000 Sevilla', 'urbana', 'i.e modrno', '6 años', 'bachiller', 'electrisista', 'ingeniera', 'urbana', 155152, 'buena', 0, '54755'),
(7, 'andres', 'felipe', 'lopez', 'betancur', '2000-04-17', 'guajira', 'soltero', 'masculino', 14, 'jjj@gmail.com', 'Av. Zumalakarregi, 91\r\n03110 Mutxamel', 'urbana', 'i.e esmeralda', '4 años', 'bachiller', 'arquitecto', 'maestra', 'propia', 555522, 'regular', 0, '74322'),
(8, 'melissa', 'andrea', 'montalvo', 'guerrero', '1995-10-05', 'cartagena', 'soltero', 'femenino', 25, 'mel@gmail.com', 'Urzáiz, 54\r\n45200 Illescas', 'urbana', 'i.e almirante colon', '15 años', 'baciller', 'profesor', 'enfermera', 'propia', 565233, 'buena', 2, '3564'),
(11, 'alfredo', 'david', 'hernandez', 'guerrero', '1999-05-12', 'cartagena', 'soltero', 'masculino', 20, 'qwdd@gmail.com', 'Calle Aduana, 44\r\n01307 Leza', 'urbana', 'i.e jhon f kennedy', '2 años', 'bachiller', 'cocinero', 'enfermera', 'familiar', 802211, 'buena', 0, '15522'),
(78, 'celestyna', 'maria', 'perez', 'carmona', '1999-10-02', 'santa marta', 'soltera', 'femenino', 24, 'celes@gmail.com', 'Escuadro, 58\r\n47150 Viana de Cega', 'rural', 'i.e troncal', '12 años', 'primaria', 'agricultor', 'maestra', 'alquilada', 75123, 'regular', 1, '48325');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `identificacion` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4445;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
