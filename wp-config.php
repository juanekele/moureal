<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wmoureal');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b%y:zKhJVMCU4>U9/1_43@zUy);{_!Lw{3vnvC<kY4^lP*!ev1?tV78hyi:rWgPd');
define('SECURE_AUTH_KEY', 'FGH_gQavk@Dj JNU[s)2PEC9&$mW?1m6W5?acT[{<xk2<w1P[ACe#.l(lqzEdKyw');
define('LOGGED_IN_KEY', 'ZYCX%DBNvA/?6nYS/&,.!O}>Nz8Nj@3S&r~`:q5h__`uND##q20l}-}ZR^8.Fb]L');
define('NONCE_KEY', 'v<MqeM?i~FU4G p3%$nUZ#:H|PZ=O8mwQybmfl%BW46^^56K,M$AfxhAJ`Z3k5iE');
define('AUTH_SALT', 'y;QjoJAcXh+C2,~tEQWVaQ~A~T&(hP;;uM7[J;2<JDI+!+c;9Yxe~O?ZadYm>N+n');
define('SECURE_AUTH_SALT', '3aO@ZytJ$v|?=E7a5M=[;j_ql9{m!v{gxb8ruI6t,zPg8>Fls{.mjWI`tZaAte8h');
define('LOGGED_IN_SALT', 'E2j<zi@2.DIYaU5]KRR4?S:)ts~T8iv}|VX^LBW&`tTf?mHpa[_F(6%nCh<9w021');
define('NONCE_SALT', ';4][]l=6OA$)0TN=<Aib>4~f<7ekN??3.lb#dWVA|LX|;iQ} TaBHw#$yb,2J>!z');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

