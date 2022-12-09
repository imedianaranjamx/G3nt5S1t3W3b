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
define('DB_NAME', 'gentsmx_web2018');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'gentsmx_admnwb');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'PaseoTabasco1011Altos');

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
define('AUTH_KEY', 'R5kvm~b:(B[bZK1MDJ+L-Z#^yg,Uo;)R-xl8Xw*ji%vy!f}LTJG~b1V(|-BE09Nk');
define('SECURE_AUTH_KEY', '@_EUN5>1F| ;(fT/%_{msk-+>n1wB)|PPQ@ESt{{?[5pGR&3+JKq.mWB:xN_Zr:$');
define('LOGGED_IN_KEY', '}]-JRX_&pch=_5CwPNC0WRJ-)~O+OJ+lUrC=#?[77]3:n?:wegm!IM)M!xpp-W.2');
define('NONCE_KEY', 'l)<kX=@7W,ankQ]EamM<PMnW*QXQ35|)mnfNS}3}xhjyH)!Wpg{0n#CSa_wm/Ws,');
define('AUTH_SALT', '!&~5,Pb<H_M%.ea@Sc4;o{BL]PHB?rK]o5Ur>>8zevd`EL{b;-_kQi!)V;~RNEjT');
define('SECURE_AUTH_SALT', '>Exg.zoCT7#T;rHzZN$c%);RJ~uKi=-L;h`&$zeR28o#OjkN.F{FM|$8D=aRp.GA');
define('LOGGED_IN_SALT', 'BF)qOq8*.JcJFU6?lOcco|wHDY1hHG^-o%!r.TLc@Hgr%!/rc^ge}Fd&+ti-^Vzb');
define('NONCE_SALT', '&(vMgM6%q&@2Y;5F6^0xG.*n$*|8ve4T-I~,+W,Nd,HxLYY@LrqIB/H!3zTeRa4q');

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

