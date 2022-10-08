-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc35
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-09-2022 a las 00:57:52
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
  `tagName` varchar(255) NOT NULL DEFAULT 'tagame',
  `es` varchar(255) DEFAULT NULL,
  `en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `tagName`, `es`, `en`) VALUES
(1, 'flag', 'https://flagcdn.com/h40/uy.png', 'https://flagcdn.com/h20/gb.png'),
(2, 'splashScreenTextSup', 'Arma tu tour', 'Build your tour'),
(3, 'splashScreenTextInf', 'o descubri los del momento', 'or discover the ones of the moment'),
(4, 'wellcomeMessage', 'Bienvenido/a', 'Wellcome'),
(5, 'wellcomeMessageUser', 'invitado', 'Guest'),
(6, 'searchPlaceholder', 'Buscá tu proximo destino', 'Find your next destiny'),
(7, 'lenguageFlagLabel', 'Lenguaje', 'Lenguage'),
(8, 'registerLabel', 'Registrarse', 'Register'),
(9, 'loginLabel', 'Iniciar Sesion', 'Login'),
(10, 'changeLanguageLabel', 'Cambiar Idioma', 'Change Lenguage'),
(11, 'predefinedToursLabel', 'Tours Predefinidos', 'Predefined Tours'),
(12, 'buildMyTourLabel', 'Armar Mi Tour', 'Build My Tour'),
(13, 'lodginLabel', 'Hospedaje', 'Lodgin'),
(14, 'gastronomylabel', 'Gastronomia', 'Gastronomy'),
(15, 'outingLabel', 'Paseos', 'Outing'),
(16, 'transportLabel', 'Transporte', 'Transport'),
(17, 'loginTitle', 'Ingresar', 'Login'),
(18, 'needAnAccountText', 'Necesitas una cuenta?', 'Do you need an account?'),
(19, 'closeButtonValue', 'Cerrar', 'Close'),
(20, 'registerTitle', 'Registrarse', 'Register'),
(21, 'registerEmailPlaceholder', 'Correo electronico', 'Email'),
(22, 'registerPasswordConfirmationPlaceholder', 'Confirmacion de Password', 'Password Confirmation'),
(23, 'registerNamePlaceholder', 'Nombre', 'Name'),
(24, 'registerButtonValue', 'Registro', 'Register'),
(25, 'backTologinText', 'Volver al login', 'Back to login'),
(26, 'userNationalityText', 'Nacionalidad', 'Nationalty'),
(27, 'userDateOfBirthText', 'Fecha de nacimiento', 'Date of Birth'),
(28, 'myPreferencesTitle', 'Mis Preferencias', 'My Preferences'),
(29, 'whithoutPreferencesText', 'Sin preferencias registradas', 'Whithout Preferences'),
(30, 'changePreferencesButtonValue', 'Cambiar Preferencias', 'Change Preferences'),
(31, 'enterPreferencesButtonValue', 'Ingresar Preferencias', 'Enter Preferences'),
(32, 'preferencesTitleCreateProfile', 'Crear Perfil', 'Create Profile'),
(33, 'preferencesTitleUpdateProfile', 'Actualizar Perfil', 'Update Profile'),
(34, 'preferencesLodginLabel', 'Alojamiento', 'Lodgin'),
(35, 'preferencesGastronomyLabel', 'Gastronomia', 'Gastronomy'),
(36, 'preferencesShowsLabel', 'Espectaculos', 'Shows'),
(37, 'preferencesOutdoorActivitiesLabel', 'Actividades Al Aire Libre', 'Outdoor Activities'),
(38, 'preferencesNightActivitiesLabel', 'Actividades Nocturnas', 'Night Activities'),
(39, 'preferencesTransportLabellabel', 'Transporte', 'Transport'),
(40, 'preferencesChildrensActivitiesLabel', 'Actividades Infantiles', 'Childrens Activities'),
(41, 'preferencesEssentialsServicesLabel', 'Servicios Esenciales', 'Essentials Services'),
(42, 'prefrencesbtnSendValue', 'Enviar', 'Send'),
(43, 'preferencesBackText', 'Volver Atras', 'Back'),
(44, 'contactText', 'Contactanos', 'Contact Us.'),
(45, 'showsLabel', 'Espectaculos', 'Shows'),
(46, 'nightActivitiesLabel', 'Actividades Nocturnas', 'Evening activities'),
(47, 'esentialsServicesLabel', 'Servicios Esenciales', 'Essential Services'),
(48, 'childActivities', 'Actividades Infantiles', 'Children´s activities'),
(49, 'category', 'Categoria', 'Category'),
(50, 'registerPasswordPlaceholder', 'Contraseña', 'Password'),
(51, 'userProfileLabel', 'Perfil de Usuario', 'User profile'),
(52, 'logoutLabel', 'Cerrar sesion', 'Logout'),
(53, 'emailPlaceholder', 'Correo Electronico', 'Email'),
(54, 'passwordPlaceholder', 'Contraseña', 'Password'),
(55, 'loginLabel', 'Iniciar Sesion', 'Login'),
(56, 'emailUpdateTitle', 'Actualizar email', 'Email update'),
(57, 'updateLabel', 'Actualizar', 'Update'),
(58, 'backToUserProfile', 'Volver a Perfil de Usuario', 'Back to user profile'),
(59, 'nameUpdateTitle', 'Actualizar nombre', 'Name update'),
(60, 'passwordUpdateTitle', 'Actualizar contraseña', 'Password update'),
(61, 'changePassword', 'Cambiar Contraseña', 'Change password'),
(62, 'changename', 'Cambiar Nombre', 'Change name'),
(63, 'changeEmail', 'Cambiar email', 'Change email'),
(64, 'seeMoreCategories', 'Ver mas Categorias', 'See more categories'),
(65, 'seeLessCategories', 'Ver menos Categorias', 'See less categories');


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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;