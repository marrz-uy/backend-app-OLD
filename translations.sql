-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc35
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2022 a las 20:54:08
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 8.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagName` varchar(255) NOT NULL DEFAULT 'tagname',
  `es` varchar(255) DEFAULT NULL,
  `en` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `tagName`, `es`, `en`, `created_at`, `updated_at`) VALUES
(1, 'flag', 'https://flagcdn.com/h40/uy.png', 'https://flagcdn.com/h20/gb.png', '2022-08-11 23:01:30', '2022-08-11 23:01:30'),
(2, 'splashScreenTextSup', 'Arma tu tour', 'Build your tour', '2022-08-11 23:01:53', '2022-08-11 23:01:53'),
(3, 'splashScreenTextInf', 'o descubri los del momento', 'or discover the ones of the moment', '2022-08-11 23:01:59', '2022-08-11 23:01:59'),
(4, 'wellcomeMessage', 'Bienvenido/a', 'Wellcome', '2022-08-11 23:02:04', '2022-08-11 23:02:04'),
(5, 'wellcomeMessageUser', 'invitado', 'Guest', '2022-08-11 23:02:09', '2022-08-11 23:02:09'),
(6, 'searchPlaceholder', 'Buscá tu proximo destino', 'Find your next destiny', '2022-08-11 23:02:14', '2022-08-11 23:02:14'),
(7, 'lenguageFlagLabel', 'Lenguaje', 'Lenguage', '2022-08-11 23:02:18', '2022-08-11 23:02:18'),
(8, 'registerLabel', 'Registrarse', 'Register', '2022-08-11 23:07:05', '2022-08-11 23:07:05'),
(9, 'loginLabel', 'Iniciar Sesion', 'Login', '2022-08-11 23:07:11', '2022-08-11 23:07:11'),
(10, 'changeLanguageLabel', 'Cambiar Idioma', 'Change Lenguage', '2022-08-11 23:07:28', '2022-08-11 23:07:28'),
(11, 'predefinedToursLabel', 'Tours Predefinidos', 'Predefined Tours', '2022-08-11 23:08:42', '2022-08-11 23:08:42'),
(12, 'buildMyTourLabel', 'Armar Mi Tour', 'Build My Tour', '2022-08-11 23:08:48', '2022-08-11 23:08:48'),
(13, 'lodginLabel', 'Hospedaje', 'Lodgin', '2022-08-11 23:08:55', '2022-08-11 23:08:55'),
(14, 'gastronomylabel', 'Gastronomia', 'Gastronomy', '2022-08-11 23:09:01', '2022-08-11 23:09:01'),
(15, 'outingLabel', 'Paseos', 'Outing', '2022-08-11 23:09:08', '2022-08-11 23:09:08'),
(16, 'transportLabel', 'Transporte', 'Transport', '2022-08-11 23:09:21', '2022-08-11 23:09:21'),
(17, 'loginTitle', 'Login', 'Login', '2022-08-11 23:21:41', '2022-08-11 23:21:41'),
(18, 'needAnAccountText', 'Necesitas una cuenta?', 'Do you need an account?', '2022-08-11 23:22:06', '2022-08-11 23:22:06'),
(19, 'closeButtonValue', 'Cerrar', 'Close', '2022-08-11 23:22:12', '2022-08-11 23:22:12'),
(20, 'registerTitle', 'Registrarse', 'Register', '2022-08-11 23:22:19', '2022-08-11 23:22:19'),
(21, 'registerEmailPlaceholder', 'email', 'Email', '2022-08-11 23:22:48', '2022-08-11 23:22:48'),
(22, 'registerPasswordConfirmationPlaceholder', 'Confirmacion de Password', 'Password Confirmation', '2022-08-11 23:22:53', '2022-08-11 23:22:53'),
(23, 'registerNamePlaceholder', 'Nombre', 'Name', '2022-08-11 23:22:58', '2022-08-11 23:22:58'),
(24, 'registerButtonValue', 'Registro', 'Register', '2022-08-11 23:23:03', '2022-08-11 23:23:03'),
(25, 'backTologinText', 'Volver al login', 'Back to login', '2022-08-11 23:23:08', '2022-08-11 23:23:08'),
(26, 'userNationalityText', 'Nacionalidad', 'Nationalty', '2022-08-11 23:23:46', '2022-08-11 23:23:46'),
(27, 'userDateOfBirthText', 'Fecha de nacimiento', 'Date of Birth', '2022-08-11 23:23:51', '2022-08-11 23:23:51'),
(28, 'myPreferencesTitle', 'Mis Preferencias', 'My Preferences', '2022-08-11 23:23:56', '2022-08-11 23:23:56'),
(29, 'whithoutPreferencesText', 'Sin preferencias registradas', 'Whithout Preferences', '2022-08-11 23:24:02', '2022-08-11 23:24:02'),
(30, 'changePreferencesButtonValue', 'Cambiar Preferencias', 'Change Preferences', '2022-08-11 23:24:07', '2022-08-11 23:24:07'),
(31, 'enterPreferencesButtonValue', 'Ingresar Preferencias', 'Enter Preferences', '2022-08-11 23:26:43', '2022-08-11 23:26:43'),
(32, 'preferencesTitleCreateProfile', 'Crear Perfil', 'Create Profile', '2022-08-11 23:26:50', '2022-08-11 23:26:50'),
(33, 'preferencesTitleUpdateProfile', 'Actualizar Perfil', 'Update Profile', '2022-08-11 23:26:56', '2022-08-11 23:26:56'),
(34, 'preferencesLodginLabel', 'Alojamiento', 'Lodgin', '2022-08-11 23:27:00', '2022-08-11 23:27:00'),
(35, 'preferencesGastronomyLabel', 'Gastronomia', 'Gastronomy', '2022-08-11 23:27:07', '2022-08-11 23:27:07'),
(36, 'preferencesShowsLabel', 'Espectaculos', 'Shows', '2022-08-11 23:27:47', '2022-08-11 23:27:47'),
(37, 'preferencesOutdoorActivitiesLabel', 'Actividades Al Aire Libre', 'Outdoor Activities', '2022-08-11 23:27:54', '2022-08-11 23:27:54'),
(38, 'preferencesNightActivitiesLabel', 'Actividades Nocturnas', 'Night Activities', '2022-08-11 23:27:59', '2022-08-11 23:27:59'),
(39, 'preferencesTransportLabellabel', 'Transporte', 'Transport', '2022-08-11 23:28:04', '2022-08-11 23:28:04'),
(40, 'preferencesChildrensActivitiesLabel', 'Actividades Infantiles', 'Childrens Activities', '2022-08-11 23:28:10', '2022-08-11 23:28:10'),
(41, 'preferencesEssentialsServicesLabel', 'Servicios Esenciales', 'Essentials Services', '2022-08-11 23:29:00', '2022-08-11 23:29:00'),
(42, 'prefrencesbtnSendValue', 'Enviar', 'Send', '2022-08-11 23:29:05', '2022-08-11 23:29:05'),
(43, 'preferencesBackText', 'Volver Atras', 'Back', '2022-08-11 23:29:09', '2022-08-11 23:29:09'),
(44, 'contactText', 'Contactanos', 'Contact Us.', '2022-08-11 23:29:14', '2022-08-11 23:29:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
