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
define('DB_NAME', 'discawebucla');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'hN}GJSX@0nz8h]/]>N:/su)29%z#)H}ck8b TiG} hCqf-Z[@uiu,em+Mt2Or?5|');
define('SECURE_AUTH_KEY', 'J} .x=||hj|-c6oY$&ets2< B|Y`si0entW~EYoa;,p|=?8:l+3x7F+R^-S-Ivr:');
define('LOGGED_IN_KEY', '6VX|A}FNgY@(7%Fis0,6@`+++f4ip[*Z<$;k3|NCTcP&E*3&^=33cI[oTa3EIUW4');
define('NONCE_KEY', '/,iNsUuL.yVn|yAvH>^/m.wYOM9D*Xg`1||&!_-4#=_3V*Q3^RV-wJcI.]oB[Q{U');
define('AUTH_SALT', 'va`]gC*&?^.*StOdlm{fjA4BOZ1JhWzjpqc4*:SNzdTk(pm$:2ok*w){[fg.5^b}');
define('SECURE_AUTH_SALT', 'oBdjK:I!c||},{-)$I^B+]HUJMgn}m|dQ:1RU$nS*YV!(VF_s|gHLIH{~ISdlO%e');
define('LOGGED_IN_SALT', '[11CCwgx.K-^0}eU^}*^Y_qh^{@ya4qfM5[%%bMDrlI)-nz-<cnv_Hrrlt,LHQE6');
define('NONCE_SALT', 'cDSffgVBs{z&D_RV-HNw]]a~/hCd]VOJUCGzJ+mrjgbac`SEKlq?X:U/D7QamL*^');

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

