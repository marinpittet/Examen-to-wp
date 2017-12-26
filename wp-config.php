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
define('DB_NAME', 'm1_diseno');

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
define('AUTH_KEY', 'zbvyJ.e5H(Y]`|uPk;U!ZJmdJ#APHw-IP4X`5+3dXE9P#jD)&*N o-o@).}b[r{j');
define('SECURE_AUTH_KEY', '[amq[!vvFmd )$oT%tcXiI)]5(QQNks*WI:=MdY8O)@fT4{oE4/fIP`P?=7vahHs');
define('LOGGED_IN_KEY', '=WloOd+loobKk/.s#*4 |>oy`-I9B 5C!{)3@ZGEZdNd>QQytxkLakBCc,`BI:q{');
define('NONCE_KEY', 'ZP6j)kTlL.U14nK!I~.~QP07zqx)gST1Gma*dOB/PrtWlfHDQX5erj; xYEp87&y');
define('AUTH_SALT', 'ex9zPK`+7;bd A4 #Y,Pcvze6N}/e,L>U1oVNF-$3R w_J8q4yNh(l`4S]m/@O,d');
define('SECURE_AUTH_SALT', '>W&A}^xa9))iZl+R1Q#l6Ny]]?t^=xv4MDK{X&YqIf8)lOyR;p6AOI6:1uZahBFc');
define('LOGGED_IN_SALT', 'EA~1c.916MyO#^JZ)@#Zx{Vw`H+ER5p@YJbqS.g`wd:T dWWK_rDumEr(];YGVJ?');
define('NONCE_SALT', 'Zf#AjPRRTl+N4EEYHS=6kvRdk-z(O#vWQ}GhVheNnqsNpi hsz_u&KAQNJH!;(n>');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'm1_';


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

