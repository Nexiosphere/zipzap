<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zipzap' );

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
define( 'AUTH_KEY',         'BD[F-/r<!_kw%S5r^5g>EgXe3ooA]|gYQ}>K.FX]+}54k-_G9lWhDeEnFXGGVQ;7' );
define( 'SECURE_AUTH_KEY',  'dDYrq.:LK E b4kj1^RfDUJk~^a6Xk~`4G]rOSc6&2NZwvyW/K&d!3vGPn5dgz{!' );
define( 'LOGGED_IN_KEY',    '-GQ`jl!NJML%x(8tP=h3ophxoHkBvr8f vgBvmKV(:7*{y>owf76hKOb<jE.O?Io' );
define( 'NONCE_KEY',        '}>5!Hpx+(_k&eD@dpR]VU>/A<qFV3=KR:OxOeD)YNnPT;^]4s_<[9=x/)FR!ZGf%' );
define( 'AUTH_SALT',        '.H94oePojgdal 3a;likT.vc*]p<+b/I@d2hq8Snb~!j~,h]Fb;]`3O57^T/d;v3' );
define( 'SECURE_AUTH_SALT', '>^wxCZktODEe.Tw,k6Qj3YDjGZNE,>U|#k@_c)M-o!~]YGNSnAC>%JxCD?5&L}}@' );
define( 'LOGGED_IN_SALT',   '7yJ;WMAa8&2wsx<GVhrdT@#$E9u5F/ h6S.@>+?(i8qGTxAP2HYeI$;+3!g^COfF' );
define( 'NONCE_SALT',       'F|:AzhOI9_j@9p!v}wz)TJGkOu,$GnQ]vI_qT]dJ4!A%6DCH5IgQ)(@X6TT0Sz+]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
