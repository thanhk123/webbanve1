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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

/** Database username */
define( 'DB_USER', 'web' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         ':a:uaXPl&J[p0l1CiSRSIff.lINK(!WP,^7nOM*Mw]JZoYA).-{%=cMD|`(th_{(' );
define( 'SECURE_AUTH_KEY',  'Q~a78uk6,RU{X|UrY{C7]}m`L5,Y>~7FIq&tzI[2|u23sTvUmT7#Ilm=,Dgq.<Fs' );
define( 'LOGGED_IN_KEY',    '^N[;P?CEOAT=8N.5wm6l3=CMFRoBP!~E}hJ{Lv {[1 e$2lkeko~uWlWK:qgtMk;' );
define( 'NONCE_KEY',        '-ZU F|!`*R!+TRI+2=;YgCxAT)}iW:VpIJ|[npe=P4emjU}.4>p}PHS?$LBcdr)Y' );
define( 'AUTH_SALT',        'GZ[l$p7)@+hCL<jM/!z5zap1>+m.DD:byEom5}> z6cuHy`%n<|zX1)~9|<v$SrD' );
define( 'SECURE_AUTH_SALT', '#2BiZ1p=A FA%`422CC:~;u-!xQ!V6Q=G5R(Lo,)`~K<r@1zTiBQPVfr~9dO*GWh' );
define( 'LOGGED_IN_SALT',   '3~tWK{.,Hwt#_^*LkFNshEDPqxB3p8tzT`*.1Dv@|>b4ia!!YwtCS;h .K?Vb]mS' );
define( 'NONCE_SALT',       'VzNm!2FAT%^9dBkV7{T!<adD31am9;~M2k.pGQMXcbE19=s&wOvh!98w|Km!xo o' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
