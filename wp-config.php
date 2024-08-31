<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monprojet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rfQ%]SU{m,3;^-zMLt]qxLN#Ubny9_f(;*n[D=wk?).Dx`Tq`SKi-s|^3.~p^N^}' );
define( 'SECURE_AUTH_KEY',  '<i!AH zKS1[ybyjEA87|4`&nU6;t$j7Sd;bT`H7fU[#A=pb*3[:R[59~:FSGn0/w' );
define( 'LOGGED_IN_KEY',    'wH1:iZKc4OS+Jgdo3WTbcyogDXoP(5zFV(+S4[y^}O$TXc48iHt}H=VizS7<Z:I%' );
define( 'NONCE_KEY',        'X^e^q8DApKDKyGZF{%)~R7gEi%QvS;$_<+.wOAD:IE<?UsIb4fKQ^1q:|@tQc<-2' );
define( 'AUTH_SALT',        'i5{[:kYLskpiBEA^)h_.7V<~n81 wh8#vfqZ4#%`siYb|*TEembl Q}KT2@HYMJO' );
define( 'SECURE_AUTH_SALT', '=+v64M1nx742hd57,2u2nT:(&$IghiFn!GEq:_/!D_$#OV{oTPDGn~q8J)U@wM| ' );
define( 'LOGGED_IN_SALT',   '6EA1lpf/^q+~Gy0=}3BL<bx+*8]nX :qm~`R![+qNNL0aN<z&jNM$&lRL+T@SwV<' );
define( 'NONCE_SALT',       'o,4?IP_iZ^8JsR pUHKU]Tjg{k,bk_-l9*]&2Eks8]lz?r;c:uK]W])4.jtoda9y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
