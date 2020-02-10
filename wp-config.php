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
define( 'DB_NAME', 'testwordpress_db' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'AlvR2001xD' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'yP`123}zOW[XosP1IJORpXA[nwTZi1J>+2*-s%qOEeONfR_I!k*1#iKt<U ZC@Ku' );
define( 'SECURE_AUTH_KEY', 'b?]^:t5@cR;L5x3R@o%-,A<C9BxWkI(45{(_(>*/3O@,QOO$j eI>8 xW9Gls+oH' );
define( 'LOGGED_IN_KEY', '?s1;$}bx0v19&ME?0V&|B`/-5W7Ofe:N19Rfz?F&2V*1,N4q&Nep>] FUz_^gi|0' );
define( 'NONCE_KEY', '?[Fjf`41c FC.,&`obG@8VuPfCD{SQv(7uSXE1Gw-zLw-7_8Nz{Hj7F>rhh9/-QZ' );
define( 'AUTH_SALT', ':n~I93Z8w5|{OM DDP%l|TcEyK}DD|XCZHa6R8^XZ&;30I#:wxbHDqWnQ8{g+W1D' );
define( 'SECURE_AUTH_SALT', 'pv&eHMqg`i%H0+#Ctfi&S$$aB6L03?Lg/DS<[P.IGAr|dsSg&Y79TPn1BWBfd4Tu' );
define( 'LOGGED_IN_SALT', 'uSE/l[|L-@y<8Wl%m0@N#@GPEDcOeVVd&X6C:[] LAaBigZ$yu0H?}sljd(w-0|Z' );
define( 'NONCE_SALT', '8r>;j^?h> <~2bIVU-Vgre]L7{TP~D#tl[s?J>ZTRms5:BrRmB6.XZrarggoAa{k' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

