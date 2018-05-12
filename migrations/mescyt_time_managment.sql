  -- phpMyAdmin SQL Dump
  -- version 4.8.0
  -- https://www.phpmyadmin.net/
  --
  -- Servidor: 127.0.0.1
  -- Tiempo de generación: 11-05-2018 a las 22:27:05
  -- Versión del servidor: 10.1.31-MariaDB
  -- Versión de PHP: 7.2.4

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  SET AUTOCOMMIT = 0;
  START TRANSACTION;
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Base de datos: `mescyt_time_managment`
  --

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `administrador`
  --

  CREATE TABLE `administrador` (
    `id_administrador` int(11) NOT NULL,
    `User` varchar(20) NOT NULL,
    `Password` varchar(20) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `moderador`
  --

  CREATE TABLE `moderador` (
    `id_moderador` int(11) NOT NULL,
    `Nombre` varchar(50) NOT NULL,
    `Apellido` varchar(50) NOT NULL,
    `Afiliacion` varchar(50) NOT NULL,
    `Telefono` varchar(20) NOT NULL,
    `Correo` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `participante`
  --

  CREATE TABLE `participante` (
    `id_participante` int(11) NOT NULL,
    `Nombre` varchar(50) NOT NULL,
    `Apellido` varchar(50) NOT NULL,
    `Afiliacion` varchar(50) NOT NULL,
    `Telefono` varchar(20) NOT NULL,
    `Correo` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `presentador`
  --

  CREATE TABLE `presentador` (
    `id_presentador` int(11) NOT NULL,
    `Nombre` varchar(50) NOT NULL,
    `Apellido` varchar(50) NOT NULL,
    `Afiliacion` varchar(50) NOT NULL,
    `Telefono` varchar(20) NOT NULL,
    `Correo` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `invitado_honor`
  --
 CREATE TABLE `invitado_honor` (
    `id_invitado_honor` int(11) NOT NULL,
    `Nombre` varchar(50) NOT NULL,
    `Apellido` varchar(50) NOT NULL,
    `titulo` varchar(50) NOT NULL,
    `Telefono` varchar(20) ,
    `Correo` varchar(50)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  --
  -- Índices para tablas volcadas
  --

  --
  -- Indices de la tabla `administrador`
  --
  ALTER TABLE `administrador`
    ADD PRIMARY KEY (`id_administrador`);

  --
  -- Indices de la tabla `moderador`
  --
  ALTER TABLE `moderador`
    ADD PRIMARY KEY (`id_moderador`);

  --
  -- Indices de la tabla `participante`
  --
  ALTER TABLE `participante`
    ADD PRIMARY KEY (`id_participante`);

  --
  -- Indices de la tabla `presentador`
  --
  ALTER TABLE `presentador`
    ADD PRIMARY KEY (`id_presentador`);

 --
  -- Indices de la tabla `presentador`
  --
  ALTER TABLE `invitado_honor`
    ADD PRIMARY KEY (`id_invitado_honor`);

  --
  -- AUTO_INCREMENT de las tablas volcadas
  --

  --
  -- AUTO_INCREMENT de la tabla `administrador`
  --
  ALTER TABLE `administrador`
    MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT de la tabla `moderador`
  --
  ALTER TABLE `moderador`
    MODIFY `id_moderador` int(11) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT de la tabla `participante`
  --
  ALTER TABLE `participante`
    MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT de la tabla `presentador`
  --
  ALTER TABLE `presentador`
    MODIFY `id_presentador` int(11) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT de la tabla `presentador`
  --
  ALTER TABLE `invitado_honor`
    MODIFY `id_invitado_honor` int(11) NOT NULL AUTO_INCREMENT;
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
