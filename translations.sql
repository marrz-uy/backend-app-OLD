-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc35
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-09-2022 a las 22:43:50
-- Versión del servidor: 10.7.4-MariaDB
-- Versión de PHP: 8.0.22

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
(1, 'flag', 'https://flagcdn.com/h40/uy.png', 'https://flagcdn.com/h20/gb.png', '2022-08-12 02:01:30', '2022-08-12 02:01:30'),
(2, 'splashScreenTextSup', 'Arma tu tour', 'Build your tour', '2022-08-12 02:01:53', '2022-08-12 02:01:53'),
(3, 'splashScreenTextInf', 'o descubri los del momento', 'or discover the ones of the moment', '2022-08-12 02:01:59', '2022-08-12 02:01:59'),
(4, 'wellcomeMessage', 'Bienvenido/a', 'Wellcome', '2022-08-12 02:02:04', '2022-08-12 02:02:04'),
(5, 'wellcomeMessageUser', 'invitado', 'Guest', '2022-08-12 02:02:09', '2022-08-12 02:02:09'),
(6, 'searchPlaceholder', 'Buscá tu proximo destino', 'Find your next destiny', '2022-08-12 02:02:14', '2022-08-12 02:02:14'),
(7, 'lenguageFlagLabel', 'Lenguaje', 'Lenguage', '2022-08-12 02:02:18', '2022-08-12 02:02:18'),
(8, 'registerLabel', 'Registrarse', 'Register', '2022-08-12 02:07:05', '2022-08-12 02:07:05'),
(9, 'loginLabel', 'Iniciar Sesion', 'Login', '2022-08-12 02:07:11', '2022-08-12 02:07:11'),
(10, 'changeLanguageLabel', 'Cambiar Idioma', 'Change Lenguage', '2022-08-12 02:07:28', '2022-08-12 02:07:28'),
(11, 'predefinedToursLabel', 'Tours Predefinidos', 'Predefined Tours', '2022-08-12 02:08:42', '2022-08-12 02:08:42'),
(12, 'buildMyTourLabel', 'Armar Mi Tour', 'Build My Tour', '2022-08-12 02:08:48', '2022-08-12 02:08:48'),
(13, 'lodginLabel', 'Hospedaje', 'Lodgin', '2022-08-12 02:08:55', '2022-08-12 02:08:55'),
(14, 'gastronomylabel', 'Gastronomia', 'Gastronomy', '2022-08-12 02:09:01', '2022-08-12 02:09:01'),
(15, 'outingLabel', 'Paseos', 'Outing', '2022-08-12 02:09:08', '2022-08-12 02:09:08'),
(16, 'transportLabel', 'Transporte', 'Transport', '2022-08-12 02:09:21', '2022-08-12 02:09:21'),
(17, 'loginTitle', 'Ingresar', 'Login', '2022-08-12 02:21:41', '2022-08-12 02:21:41'),
(18, 'needAnAccountText', 'Necesitas una cuenta?', 'Do you need an account?', '2022-08-12 02:22:06', '2022-08-12 02:22:06'),
(19, 'closeButtonValue', 'Cerrar', 'Close', '2022-08-12 02:22:12', '2022-08-12 02:22:12'),
(20, 'registerTitle', 'Registrarse', 'Register', '2022-08-12 02:22:19', '2022-08-12 02:22:19'),
(21, 'registerEmailPlaceholder', 'Correo electronico', 'Email', '2022-08-12 02:22:48', '2022-08-12 02:22:48'),
(22, 'registerPasswordConfirmationPlaceholder', 'Confirmacion de Password', 'Password Confirmation', '2022-08-12 02:22:53', '2022-08-12 02:22:53'),
(23, 'registerNamePlaceholder', 'Nombre', 'Name', '2022-08-12 02:22:58', '2022-08-12 02:22:58'),
(24, 'registerButtonValue', 'Registro', 'Register', '2022-08-12 02:23:03', '2022-08-12 02:23:03'),
(25, 'backTologinText', 'Volver al login', 'Back to login', '2022-08-12 02:23:08', '2022-08-12 02:23:08'),
(26, 'userNationalityText', 'Nacionalidad', 'Nationalty', '2022-08-12 02:23:46', '2022-08-12 02:23:46'),
(27, 'userDateOfBirthText', 'Fecha de nacimiento', 'Date of Birth', '2022-08-12 02:23:51', '2022-08-12 02:23:51'),
(28, 'myPreferencesTitle', 'Mis Preferencias', 'My Preferences', '2022-08-12 02:23:56', '2022-08-12 02:23:56'),
(29, 'whithoutPreferencesText', 'Sin preferencias registradas', 'Whithout Preferences', '2022-08-12 02:24:02', '2022-08-12 02:24:02'),
(30, 'changePreferencesButtonValue', 'Cambiar Preferencias', 'Change Preferences', '2022-08-12 02:24:07', '2022-08-12 02:24:07'),
(31, 'enterPreferencesButtonValue', 'Ingresar Preferencias', 'Enter Preferences', '2022-08-12 02:26:43', '2022-08-12 02:26:43'),
(32, 'preferencesTitleCreateProfile', 'Crear Perfil', 'Create Profile', '2022-08-12 02:26:50', '2022-08-12 02:26:50'),
(33, 'preferencesTitleUpdateProfile', 'Actualizar Perfil', 'Update Profile', '2022-08-12 02:26:56', '2022-08-12 02:26:56'),
(34, 'preferencesLodginLabel', 'Alojamiento', 'Lodgin', '2022-08-12 02:27:00', '2022-08-12 02:27:00'),
(35, 'preferencesGastronomyLabel', 'Gastronomia', 'Gastronomy', '2022-08-12 02:27:07', '2022-08-12 02:27:07'),
(36, 'preferencesShowsLabel', 'Espectaculos', 'Shows', '2022-08-12 02:27:47', '2022-08-12 02:27:47'),
(37, 'preferencesOutdoorActivitiesLabel', 'Actividades Al Aire Libre', 'Outdoor Activities', '2022-08-12 02:27:54', '2022-08-12 02:27:54'),
(38, 'preferencesNightActivitiesLabel', 'Actividades Nocturnas', 'Night Activities', '2022-08-12 02:27:59', '2022-08-12 02:27:59'),
(39, 'preferencesTransportLabellabel', 'Transporte', 'Transport', '2022-08-12 02:28:04', '2022-08-12 02:28:04'),
(40, 'preferencesChildrensActivitiesLabel', 'Actividades Infantiles', 'Childrens Activities', '2022-08-12 02:28:10', '2022-08-12 02:28:10'),
(41, 'preferencesEssentialsServicesLabel', 'Servicios Esenciales', 'Essentials Services', '2022-08-12 02:29:00', '2022-08-12 02:29:00'),
(42, 'prefrencesbtnSendValue', 'Enviar', 'Send', '2022-08-12 02:29:05', '2022-08-12 02:29:05'),
(43, 'preferencesBackText', 'Volver Atras', 'Back', '2022-08-12 02:29:09', '2022-08-12 02:29:09'),
(44, 'contactText', 'Contactanos', 'Contact Us.', '2022-08-12 02:29:14', '2022-08-12 02:29:14'),
(45, 'showsLabel', 'Espectaculos', 'Shows', '2022-09-10 03:50:39', '2022-09-10 03:50:39'),
(46, 'nightActivitiesLabel', 'Actividades Nocturnas', 'Evening activities', '2022-09-10 03:52:07', '2022-09-10 03:52:07'),
(47, 'esentialsServicesLabel', 'Servicios Esenciales', 'Essential Services', '2022-09-10 03:53:44', '2022-09-10 03:53:44'),
(48, 'childActivities', 'Actividades Infantiles', 'Children´s activities', '2022-09-10 03:54:20', '2022-09-10 03:54:20'),
(49, 'category', 'Categoria', 'Category', '2022-09-10 03:56:27', '2022-09-10 03:56:27'),
(50, 'registerPasswordPlaceholder', 'Contraseña', 'Password', '2022-09-11 23:18:48', '2022-09-11 23:18:48'),
(51, 'userProfileLabel', 'Perfil de Usuario', 'User profile', '2022-09-11 23:23:55', '2022-09-11 23:23:55'),
(52, 'logoutLabel', 'Cerrar sesion', 'Logout', '2022-09-11 23:29:58', '2022-09-11 23:29:58'),
(53, 'emailPlaceholder', 'Correo Electronico', 'Email', '2022-09-11 23:50:11', '2022-09-11 23:50:11'),
(54, 'passwordPlaceholder', 'Contraseña', 'Password', '2022-09-11 23:50:43', '2022-09-11 23:50:43'),
(55, 'loginLabel', 'Iniciar Sesion', 'Login', '2022-09-11 23:54:35', '2022-09-11 23:54:35'),
(56, 'emailUpdateTitle', 'Actualizar email', 'Email update', '2022-09-11 23:58:39', '2022-09-11 23:58:39'),
(57, 'updateLabel', 'Actualizar', 'Update', '2022-09-12 00:08:55', '2022-09-12 00:08:55'),
(58, 'backToUserProfile', 'Volver a Perfil de Usuario', 'Back to user profile', '2022-09-12 00:10:50', '2022-09-12 00:10:50'),
(59, 'nameUpdateTitle', 'Actualizar nombre', 'Name update', '2022-09-12 00:31:15', '2022-09-12 00:31:15'),
(60, 'passwordUpdateTitle', 'Actualizar contraseña', 'Password update', '2022-09-12 00:48:24', '2022-09-12 00:48:24'),
(61, 'changePassword', 'Cambiar Contraseña', 'Change password', '2022-09-12 01:03:24', '2022-09-12 01:03:24'),
(62, 'changename', 'Cambiar Nombre', 'Change name', '2022-09-12 01:03:47', '2022-09-12 01:03:47'),
(63, 'changeEmail', 'Cambiar email', 'Change email', '2022-09-12 01:04:29', '2022-09-12 01:04:29');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
